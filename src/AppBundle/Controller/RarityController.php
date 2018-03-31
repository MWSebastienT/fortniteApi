<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Rarity;
use AppBundle\Entity\Resources;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Weapon;

class RarityController extends FOSRestController
{
    /**
     * @Rest\Get("api/rarity")
     */
    public function getAction()
    {
        $restResult = $this->getDoctrine()->getRepository(Rarity::class)->findAll();
        if ($restResult === null) {
            return new View("there are no users exist", Response::HTTP_NOT_FOUND);
        }
        return $restResult;

    }
}
