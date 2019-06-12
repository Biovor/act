<?php

namespace App\Controller;

use App\Entity\Ingredients;
use App\Entity\Alimentations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


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
        $jsonFile = file_get_contents($this->get('kernel')->getRootDir() . '/../public/import.json');
        $json = json_decode($jsonFile);

        if ($json != null) {
            foreach ($json as $value) {


                $alimentation = new alimentations();

                if (isset($value->Marque)) {
                    $alimentation->setMarque($value->Marque);
                }

                if (isset($value->Gamme)) {
                    $alimentation->setGamme($value->Gamme);
                }

                if (isset($value->Ref)) {
                    $alimentation->setReference($value->Ref);
                }

                if (isset($value->Céréales)) {
                    $alimentation->setCereales($value->Céréales);
                }

                if (isset($value->Vegetarien)) {
                    $alimentation->setVegetarien($value->Vegetarien);
                } else $alimentation->setVegetarien(0);

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
                    $alimentation->setProteines($value->Protéines);
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
                    $alimentation->setHumidite($value->Humidité);
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

                if (isset($value->Taurine)) {
                    $alimentation->setTaurine($value->Taurine);
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
                    $alimentation->setIngredients($value->Ingrédients);
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

    /**
     * @Route("/json/ingre", name="json_ingre")
     */
    public function importJsonDataIngredients()
    {
        ignore_user_abort(true);
        set_time_limit(10000);
        $em = $this->getDoctrine()->getManager();
        $jsonFile = file_get_contents($this->get('kernel')->getRootDir() . '/../public/importIngre.json');
        $json = json_decode($jsonFile);

        if ($json != null) {
            foreach ($json as $value) {


                $ingredient = new Ingredients();

                if (isset($value->Categorie)) {
                    $ingredient->setCategorie($value->Categorie);
                }

                if (isset($value->SousCategorie)) {
                    $ingredient->setSousCategorie($value->SousCategorie);
                }

                if (isset($value->Ingredients)) {
                    $ingredient->setNom($value->Ingredients);
                }

                if (isset($value->LabelQualite)) {
                    $ingredient->setQualite($value->LabelQualite);
                }

                $em->persist($ingredient);
                $em->flush();
            }

        }
        return $this->redirectToRoute('home');
    }
}


