<?php

namespace App\Controller;


use App\Entity\Arme;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArmeController extends AbstractController
{
    /**
     * @Route("/armes", name="armes")
     */
    public function armes()
    {
        Arme::weaponCreate();
        return $this->render('arme/armes.html.twig', [
            "weapons" => Arme::$armes
        ]);
    }

    /**
     * @Route("/armes/{name}", name="afficherArme")
     */
    public function displayWeapon($name){
        Arme::weaponCreate();
        $arme = Arme::getWeaponByName($name);
        return $this->render('arme/arme.html.twig', [
            "weapon" => $arme
        ]);
    }
}
