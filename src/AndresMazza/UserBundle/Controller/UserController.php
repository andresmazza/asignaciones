<?php

namespace AndresMazza\UserBundle\Controller;

use AndresMazza\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        //return $this->render('AndresMazzaUserBundle:Default:index.html.twig');
        //return new Response('Bienvenido a mi modulo de usuarios.');
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AndresMazzaUserBundle:User')->findAll();
        $res = 'Lista de Usuarios: <br>';

        foreach ($users as $user) {
            /* @var $user User */
            $res .= $user->getUsername(). '::' . $user->getEmail().'<br>';
        }
        return new Response($res);

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
        $repository = $this->getDoctrine()->getRepository('AndresMazzaUserBundle:User');
        $user = $repository->findOneBy(array('id' => $id));
        $admin = $repository->findOneByUsername('andres');
        if ($admin) {
            echo "admin: ". $admin->getUsername()."!!!<br>";
        }
        if($user) {
            $res = $user->getUsername() . '::' . $user->getEmail() . '<br>';
        }
        else {
            $res = null;
        }
        return new Response($res);
    }

    public function deleteAction($id)
    {
        return new Response('Delete Action');
    }


}
