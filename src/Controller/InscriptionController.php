<?php
// src/Controller/InscriptionController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/number", name="number")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Ceci est une première page Symfony<br> Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/Accueil", name="Accueil")
     */
    public function accueil(): Response
    {
        $number = random_int(0, 100);
        return $this->render('Inscription/accueil.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * @Route("/voir/{id}", name="voir")
     */
    public function voirAction($id): Response
    {
        return $this->render('Inscription/voir.html.twig', [
            'id' => $id,
        ]);
    }
}
