<?php

namespace AndresMazza\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        //return $this->render('AndresMazzaUserBundle:Default:index.html.twig');
        return new Response('Bienvenido a mi modulo de usuarios.');
    }

    public function articlesAction($page) {

        return new Response('Este es mi articulo en la pagina '.$page);
    }

    public function addAction()
    {
        return new Response('Add Action');
    }

    public function editAction($id)
    {
        return new Response('Edit Action');
    }

    public function viewAction($id)
    {
        return new Response('view Action');
    }

    public function deleteAction($id)
    {
        return new Response('Delete Action');
    }


}
