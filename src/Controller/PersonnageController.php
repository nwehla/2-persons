<?php

namespace App\Controller;


use App\Entity\Personnage;
use App\Form\PersonsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    
class PersonnageController extends AbstractController
/**
 * @Route("/",name="accueil")
 */
{
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }
//     /**
//  * @Route("/arme_creer",name="inde_arme")
//  */

//     public function arme(): Response
//     {
//         return $this->render('personnage/arme.html.twig', [
//             'controller_name' => 'PersonnageController',
//         ]);
//     }
    /**
     * @Route("/persons", name="per_formulaire")
     */
    public function inscrire(EntityManagerInterface $manager,Request $request): Response
    {
        $form=$this->createForm(PersonsType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $persons=$form->getData();
            $manager->persist($persons);
            $manager->flush();
            $this->addFlash('success', 'Profil ajouté !');

            return $this->redirectToRoute("accueil");

        }
        return $this->render('personnage/formulaire.html.twig', [
            
            'form'=>$form->createView(),
            
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
         * @route("/persos/{pseudo}",name="afficherPersonnage")
         */
        Public function afficherPersonnage($pseudo){
            personnage::creerpersonnage();
            $perso=personnage::getPersonnageParNom($pseudo);
            return $this->render("/personnage/perso.html.twig",[
                'perso'=>$perso,
            ]);
        
        }
    
}
