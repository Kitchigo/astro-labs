<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;

class AstronautController extends AbstractFOSRestController
{
    /**
     * Retrieves the list of all Astronauts resource
     * @Rest\Get("/astronauts")
     * @param Request $request
     * @return View
     */
    public function getAstronauts()
    {
        $astronauts = $this->astronautRepository->findAll();
        // In case our GET was a success we need to return a 200 HTTP OK response with the collection of astronaut object
        return View::create($astronauts, Response::HTTP_OK);
    }

    /**
     * Retrieves one Astronaut resource
     * @Rest\Get("/astronaut/{id}")
     * @param Request $request
     * @return View
     */
    public function getAstronaut(int $astronautId): View
    {
        $astronaut = $this->astronautRepository->findById($astronautId);

        // In case our GET was a success we need to return a 200 HTTP OK response with the astronaut object
        return View::create($astronaut, Response::HTTP_OK);
    }

    /**
     * Creates an Astronaut resource
     * @Rest\Post("/astronaut")
     * @param Request $request
     * @return View
     */
    public function postAstronaut()
    {
        $astronaut = new Astronaut();
        $astronaut->setName($request->get('name'));
        $astronaut->setAge($request->get('age'));
        $this->astronautRepository->save($astronaut);

        // In case our POST was a success we need to return a 201 HTTP CREATED response
        return View::create($astronaut, Response::HTTP_CREATED);
    }
}
