<?php

namespace App\Controller;

use App\Entity\Catequista;
use App\Form\CatequistaType;
use App\Repository\CatequistaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/catequista")
 */
class CatequistaController extends AbstractController
{
    /**
     * @Route("/", name="catequista_index", methods={"GET"})
     */
    public function index(CatequistaRepository $catequistaRepository): Response
    {
        return $this->render('catequista/index.html.twig', [
            'catequistas' => $catequistaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="catequista_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $catequistum = new Catequista();
        $form = $this->createForm(CatequistaType::class, $catequistum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $encoder->encodePassword(new Catequista(), $catequistum->getPassword());
            $catequistum->setSenha($password);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($catequistum);
            $entityManager->flush();

            return $this->redirectToRoute('catequista_index');
        }

        return $this->render('catequista/new.html.twig', [
            'catequistum' => $catequistum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/show/{id}", name="catequista_show", methods={"GET"})
     */
    public function show(Catequista $catequistum): Response
    {
        return $this->render('catequista/show.html.twig', [
            'catequistum' => $catequistum,
        ]);
    }

    /**
     * @Route("/edit/{id}", name="catequista_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Catequista $catequistum, UserPasswordEncoderInterface $encoder): Response
    {
	$form = $this->createForm(CatequistaType::class, $catequistum, ['roles' => $catequistum->getRoles()]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $encoder->encodePassword(new Catequista(), $catequistum->getPassword());
            $catequistum->setSenha($password);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('catequista_show', [
                'id' => $catequistum->getId(),
            ]);
        }

        return $this->render('catequista/edit.html.twig', [
            'catequistum' => $catequistum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="catequista_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Catequista $catequistum): Response
    {
        if ($this->isCsrfTokenValid('delete'.$catequistum->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($catequistum);
            $entityManager->flush();
        }

        return $this->redirectToRoute('catequista_index');
    }
}
