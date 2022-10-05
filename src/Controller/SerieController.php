<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SerieController extends AbstractController
{
    /**
     * @Route("/series", name="serie_list")
     */
    public function list(): Response
    {
//        todo: aller chercher les eries en bd
        return $this->render('serie/list.html.twig', [

        ]);
    }


    /**
     * @Route("/series/details/{id}", name="serie_details")
     */
    public function details(int $id): Response
    {
//        todo: aller chercher les series en bd
        return $this->render('serie/details.html.twig', [

        ]);
    }


    /**
     * @Route("/series/create", name="serie_create")
     */
    public function create(): Response
    {
//        todo: questa pagina avrà il form per creare le serie
        return $this->render('serie/create.html.twig', [

        ]);
    }
}
