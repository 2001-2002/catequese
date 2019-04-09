<?php

namespace App\Controller;

use App\Entity\Catequizando;
use App\Form\CatequizandoType;
use App\Repository\CatequizandoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/catequizando")
 */
class CatequizandoController extends AbstractController
{
    /**
     * @Route("/", name="catequizando_index", methods={"GET"})
     */
    public function index(CatequizandoRepository $catequizandoRepository): Response
    {
        return $this->render('catequizando/index.html.twig', [
            'catequizandos' => $catequizandoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="catequizando_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $catequizando = new Catequizando();
        $form = $this->createForm(CatequizandoType::class, $catequizando);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $cate = $form->getData();
            $fileBatizado = $cate->getComprovanteBatizado();
            $fileCasamento = $cate->getComprovanteCasamento();
            $fileEucaristia = $cate->getComprovanteEucaristia();
            $fileDocumento = $cate->getDocumento();


            if($fileDocumento){
                $fileNameDocumento = $this->generateUniqueFileName().'.'.$fileDocumento->guessExtension();

                $fileDocumento->move(
                    $this->getParameter('image_directory'),
                    $fileNameDocumento
                );
                $catequizando->setDocumento($fileNameDocumento);

            }
            if($fileBatizado){
                $fileNameBatizado = $this->generateUniqueFileName().'.'.$fileBatizado->guessExtension();

                $fileBatizado->move(
                    $this->getParameter('image_directory'),
                    $fileNameBatizado
                );
                $catequizando->setComprovanteBatizado($fileNameBatizado);

            }
            if($fileEucaristia){
                $fileNameEucaristia = $this->generateUniqueFileName().'.'.$fileEucaristia->guessExtension();

                $fileEucaristia->move(
                    $this->getParameter('image_directory'),
                    $fileNameEucaristia
                );
                $catequizando->setComprovanteEucaristia($fileNameEucaristia);

            }

            if($fileCasamento){
                $fileNameCasamento = $this->generateUniqueFileName().'.'.$fileCasamento->guessExtension();

                $fileCasamento->move(
                    $this->getParameter('image_directory'),
                    $fileNameCasamento
                );

                $catequizando->setComprovanteCasamento($fileNameCasamento);
            }


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($catequizando);
            $entityManager->flush();

            return $this->redirectToRoute('catequizando_index');
        }

        return $this->render('catequizando/new.html.twig', [
            'catequizando' => $catequizando,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="catequizando_show", methods={"GET"})
     */
    public function show(Catequizando $catequizando): Response
    {
        return $this->render('catequizando/show.html.twig', [
            'catequizando' => $catequizando,
        ]);
    }

    /**
     * @Route("/edit/{id}", name="catequizando_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Catequizando $catequizando): Response
    {
        $comprovanteBatizado = $catequizando->getComprovanteBatizado();
        $comprovanteEucaristia = $catequizando->getComprovanteEucaristia();
        $comprovanteCasamento = $catequizando->getComprovanteCasamento();
        $documento = $catequizando->getDocumento();
        $form = $this->createForm(CatequizandoType::class, $catequizando);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $fileBatizado = $form['comprovanteBatizado']->getData();
            $fileEucaristia = $form['comprovanteEucaristia']->getData();
            $fileCasamento = $form['comprovanteCasamento']->getData();
            $fileDocumento = $form['documento']->getData();

            if($fileDocumento){

                $fileName = $this->generateUniqueFileName().'.'.$fileDocumento->guessExtension();

                $fileDocumento->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );

                $catequizando->setDocumento($fileName);

            }else{

                $catequizando->setDocumento($documento);

            }
            if($fileBatizado){

                $fileName = $this->generateUniqueFileName().'.'.$fileBatizado->guessExtension();

                $fileBatizado->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );

                $catequizando->setComprovanteBatizado($fileName);

            }else{

                $catequizando->setComprovanteBatizado($comprovanteBatizado);

            }
            if($fileEucaristia){

                $fileName = $this->generateUniqueFileName().'.'.$fileEucaristia->guessExtension();

                $fileEucaristia->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );

                $catequizando->setComprovanteEucaristia($fileName);

            }else{

                $catequizando->setComprovanteEucaristia($comprovanteEucaristia);

            }
            if($fileCasamento){

                $fileName = $this->generateUniqueFileName().'.'.$fileCasamento->guessExtension();

                $fileCasamento->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );

                $catequizando->setComprovanteCasamento($fileName);

            }else{

                $catequizando->setComprovanteCasamento($comprovanteCasamento);

            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('catequizando_index', [
                'id' => $catequizando->getId(),
            ]);
        }

        return $this->render('catequizando/edit.html.twig', [
            'catequizando' => $catequizando,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="catequizando_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Catequizando $catequizando): Response
    {
        if ($this->isCsrfTokenValid('delete'.$catequizando->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($catequizando);
            $entityManager->flush();
        }

        return $this->redirectToRoute('catequizando_index');
    }

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }
}
