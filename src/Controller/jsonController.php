<?php

namespace App\Controller;

use App\Entity\Alimentations;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class jsonController extends Controller
{
     /**
     * @Route("/json", name="json")
     */
    public function importJsonData()
    {
        ignore_user_abort(true);
        set_time_limit(10000);
        $em = $this->getDoctrine()->getManager();
        $jsonFile = file_get_contents($this->get('kernel')->getRootDir() . '/../public/alimentations.json');
        $json = json_decode($jsonFile);

        if ($json != null) {
            foreach ($json as $value) {


                $alimentation = new Alimentations();

                if (isset($value->Marque)) {
                    $alimentation->setMarque($value->Marque);
                }

                if (isset($value->Gamme)) {
                    $alimentation->setGamme($value->Gamme);
                }

                if (isset($value->Céréales)) {
                    $alimentation->setCéréales($value->Céréales);
                }

                if (isset($value->AlimentType)) {
                    $alimentation->setAlimentType($value->AlimentType);
                }

                if (isset($value->Animal)) {
                    $alimentation->setAnimal($value->Animal);
                }

                if (isset($value->Bio)) {
                    $alimentation->setBio($value->Bio);
                }

                if (isset($value->Glucides)) {
                    $alimentation->setGlucides($value->Glucides);
                }

                if (isset($value->Protéines)) {
                    $alimentation->setProtéines($value->Protéines);
                }

                if (isset($value->Lipides)) {
                    $alimentation->setLipides($value->Lipides);
                }

                if (isset($value->Fibres)) {
                    $alimentation->setFibres($value->Fibres);
                }

                if (isset($value->Cendres)) {
                    $alimentation->setCendres($value->Cendres);
                }

                if (isset($value->Humidité)) {
                    $alimentation->setHumidité($value->Humidité);
                }

                if (isset($value->Calcium)) {
                    $alimentation->setCalcium($value->Calcium);
                }

                if (isset($value->Phosphore)) {
                    $alimentation->setPhosphore($value->Phosphore);
                }

                if (isset($value->RapportPhosphocalcique)) {
                    $alimentation->setRapportPhosphocalcique($value->RapportPhosphocalcique);
                }

                if (isset($value->Omega6)) {
                    $alimentation->setOmega6($value->Omega6);
                }

                if (isset($value->Omega3)) {
                    $alimentation->setOmega3($value->Omega3);
                }

                if (isset($value->Calories)) {
                    $alimentation->setCalories($value->Calories);
                }

                if (isset($value->RatioProtidoCalorique)) {
                    $alimentation->setRatioProtidoCalorique($value->RatioProtidoCalorique);
                }

                if (isset($value->Ingrédients)) {
                    $alimentation->setIngrédients($value->Ingrédients);
                }

                if (isset($value->LienSource)) {
                    $alimentation->setLienSource($value->LienSource);
                }
                
                $em->persist($alimentation);
                $em->flush();
            }

        }
        return $this->redirectToRoute('home');
    }
}


