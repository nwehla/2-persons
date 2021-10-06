<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/personnage", name="personnage")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }
        /**
         * @route("/persos","name=index_historique")
         */
        Public function persos(){
            return $this ->render("/personnage/historique.html.twig",[
                "pseudo"=>"toto",
                "age"=> 25,
                "carac"=> [
                    "force"=>3,
                    "agi"=>2,
                    "intel"=>3
                    
                ]
            ]);
        }
    
}
