<?php

namespace App\Controller;

use App\Entity\Restaurant;
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
        $jsonFile = file_get_contents($this->get('kernel')->getRootDir() . '/../public/restaurants.json');
        $json = json_decode($jsonFile);

        if ($json != null) {
            foreach ($json as $value) {

                $restaurant = new Restaurant();

                if (isset($value->id)) {
                    $restaurant->setIdJson($value->id);
                }

                if (isset($value->name)) {
                    $restaurant->setName($value->name);
                }

                if (isset($value->city)) {
                    $restaurant->setCity($value->city);
                }  else {$restaurant->setCity("Paris");}

                if (isset($value->address1)) {
                    $restaurant->setAddress($value->address1);
                } else {$restaurant->setAddress("Pas d'adresse communiquées");}

                if (isset($value->address2)) {
                    $restaurant->setDistrict($value->address2);
                }

                if (isset($value->categorisation->primary->name)) {
                    $restaurant->setPrimaryCategorisation($value->categorisation->primary->name);
                } else {$restaurant->setPrimaryCategorisation("Restaurants");}

                if (isset($value->categorisation->secondary->name)) {
                    $restaurant->setSecondaryCategorisation($value->categorisation->secondary->name);
                }

                if (isset($value->latitude)) {
                    $restaurant->setLatitude($value->latitude);
                }

                if (isset($value->longitude)) {
                    $restaurant->setLongitude($value->longitude);
                }

                if (isset($value->editorial_rating)) {
                    $restaurant->setRating($value->editorial_rating);
                }  else {$restaurant->setRating(rand(1, 5));}

                if (isset($value->summary)) {
                    $restaurant->setSummary($value->summary);
                }

                if (isset($value->image_url)) {
                    $restaurant->setImageUrl($value->image_url);
                }

                $restaurant->setFavorite(false);
                $restaurant->setNovelty(rand (1,2));
                $em->persist($restaurant);
                $em->flush();
            }

        }
        return $this->redirectToRoute('home');
    }
}


