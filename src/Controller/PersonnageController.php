<?php

namespace App\Controller;


use App\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }
        /**
         * @route("/persos",name="personnages")
         */
        Public function persos(){
            Personnage::creerpersonnage();
            return $this ->render("/personnage/historique.html.twig",[
                "tab"=>Personnage::$personnages,
                
            ]);
        }
        /**
         * @route("/persos{pseudo}",name="afficherPersonnage")
         */
        Public function afficherPersonnage($pseudo){
            personnage::creerpersonnage();
            $perso=personnage::getPersonnageParNom($pseudo);
            return $this->render("/personnage/perso.html.twig",[
                'perso'=>$perso,
            ]);
        
        }
    
}
