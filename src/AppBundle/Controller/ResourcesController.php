<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Resources;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Weapon;

class ResourcesController extends FOSRestController
{
    /**
     * @Rest\Get("api/resources")
     */
    public function getAction()
    {
        $restResult = $this->getDoctrine()->getRepository(Resources::class)->findAll();
        if ($restResult === null) {
            return new View("there are no users exist", Response::HTTP_NOT_FOUND);
        }
        return $restResult;

    }
}
