<?php

namespace App\Controller;

use App\Entity\Catequizando;
use App\Entity\Turma;
use App\Form\TurmaType;
use App\Repository\TurmaRepository;
use Onurb\Bundle\ExcelBundle\Factory\ExcelFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpParser\Node\Scalar\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/turma")
 */
class TurmaController extends AbstractController
{
    /**
     * @Route("/", name="turma_index", methods={"GET"})
     */
    public function index(TurmaRepository $turmaRepository): Response
    {
        return $this->render('turma/index.html.twig', [
            'turmas' => $turmaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="turma_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $turma = new Turma();
        $form = $this->createForm(TurmaType::class, $turma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($turma);
            $entityManager->flush();

            return $this->redirectToRoute('turma_index');
        }

        return $this->render('turma/new.html.twig', [
            'turma' => $turma,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="turma_show", methods={"GET"})
     */
    public function show(Turma $turma): Response
    {
        return $this->render('turma/show.html.twig', [
            'turma' => $turma,
        ]);
    }

    /**
     * @Route("/lista/{id}", name="turma_lista", methods={"GET"})
     */
    public function listarCatequizandos(Turma $turma): Response
    {
        $lista = $this->getDoctrine()->getRepository(Catequizando::class)
                ->findByTurma($turma);

        return $this->render('turma/lista.html.twig', [
            'lista' => $lista,
            'turma' => $turma
        ]);
    }

    /**
     * @Route("/chamada/{turma}/{option}", name="turma_chamada")
     */
    public function chamada(Turma $turma, $option)
    {

        $styleArrayTittle = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                    'color' => ['argb' => '000000'],
                ],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                'rotation' => 90,
                'startColor' => [
                    'argb' => 'FFA0A0A0',
                ],
                'endColor' => [
                    'argb' => 'FFFFFFFF',
                ],
            ],
        ];
        $styleArrayContent = [
            'font' => [
                'bold' => false,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                    'color' => ['argb' => '000000'],
                ],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                'rotation' => 90,
                'startColor' => [
                    'argb' => 'FFA0A0A0',
                ],
                'endColor' => [
                    'argb' => 'FFFFFFFF',
                ],
            ],
        ];


        $lista = $this->getDoctrine()->getRepository(Catequizando::class)
            ->findByTurma($turma);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $spreadsheet->getProperties()
            ->setCreator('Catequese')
            ->setTitle("Lista de chamada ".$turma->getEtapa().$turma->getNumeroEtapa())
            ->setDescription(
                "Documento para controle de presença dos catequizandos."
            );

        $sheet->setCellValue('A1', 'Nome');
        $sheet->setCellValue('B1', 'Pendências');
        foreach ($lista as $chave => $catequizando){

            $soma = $chave+2;
            $indice = (string)$soma;
            $coordenada = 'A'.$indice;
            $coordenada2 = 'B'.$indice;
            $sheet->setCellValue($coordenada, $catequizando->getNome());
            $pendenciasNew = '';
            foreach ($catequizando->getPendencias() as $pendencias){

                $pendenciasNew = $pendenciasNew.$pendencias.', ';
            }
            $sheet->setCellValue($coordenada2, $pendenciasNew);
            $sheet->getStyle($coordenada2)->getAlignment()->setWrapText(true);
            $sheet->getStyle($coordenada)->applyFromArray($styleArrayContent);
            $sheet->getStyle($coordenada2)->applyFromArray($styleArrayContent);
        }


        $sheet->getStyle('A1')->applyFromArray($styleArrayTittle);
        $sheet->getStyle('B1')->applyFromArray($styleArrayTittle);

        $writer = new Xls($spreadsheet);
        if($option == 1){
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'.$turma->getNome().'.xls"');
            $writer->save("php://output");
            return $this->redirectToRoute('turma_lista', array('id' => $turma->getId()));
        }else{
            $writer->save('lista/'.$turma->getNome().'.xls');
            $this->addFlash('success-lista', 'Planilha criada com sucesso!');
            return $this->redirectToRoute('turma_lista', array('id' => $turma->getId()));
        }
    }

    /**
     * @Route("/edit/{id}", name="turma_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Turma $turma): Response
    {
        $form = $this->createForm(TurmaType::class, $turma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('turma_index', [
                'id' => $turma->getId(),
            ]);
        }

        return $this->render('turma/edit.html.twig', [
            'turma' => $turma,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="turma_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Turma $turma): Response
    {
        if ($this->isCsrfTokenValid('delete'.$turma->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($turma);
            $entityManager->flush();
        }

        return $this->redirectToRoute('turma_index');
    }

}
