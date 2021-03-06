<?php

namespace AndresMazza\UserBundle\Controller;

use AndresMazza\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AndresMazza\UserBundle\Form\UserType;

class UserController extends Controller
{
    public function indexAction(Request $request)
    {
        //return $this->render('AndresMazzaUserBundle:Default:index.html.twig');
        //return new Response('Bienvenido a mi modulo de usuarios.');
        $em = $this->getDoctrine()->getManager();
       // $users = $em->getRepository('AndresMazzaUserBundle:User')->findAll();

        $dql = "SELECT u FROM AndresMazzaUserBundle:User u Order By u.id DESC";
        $users = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $users, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );
        return $this->render('AndresMazzaUserBundle:User:index.html.twig', array(
            'pagination' => $pagination
        ));

    }

    public function articlesAction($page) {

        return new Response('Este es mi articulo en la pagina '.$page);
    }

    public function addAction()
    {
        $user = new User();
        $form = $this->createCreateForm($user);

        return $this->render('AndresMazzaUserBundle:User:add.html.twig',array('form' => $form->createView()));
    }

    private function createCreateForm(User $entity) {
        $form = $this->createForm(new UserType(),$entity , array(
                'action' => $this->generateUrl('andres_mazza_user_create'),
                'method' => 'POST'
            )
        );
        return $form;
    }

    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $password = $form->get('password')->getData();
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user,$password);
            $user->setPassword($encoded);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('notice','The User has been created');
            return $this->redirectToRoute('andres_mazza_user_index');
        }
        return $this->render('AndresMazzaUserBundle:User:add.html.twig',array('form' => $form->createView()));

    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AndresMazzaUserBundle:User')->find($id);
        if (!$user) {
            $messageException = $this->get('translator')->trans('User not found');
            throw $this->createNotFoundException($messageException);
        }
        $form = $this->createEditForm($user);

        return $this->render('AndresMazzaUserBundle:User:edit.html.twig',array('form' => $form->createView()));
    }

    private function createEditForm(User $entity) {
        $form = $this->createForm(new UserType(),$entity , array(
                'action' => $this->generateUrl('andres_mazza_user_update',array('id' => $entity->getId())),
                'method' => 'PUT'
            )
        );
        return $form;
    }


    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AndresMazzaUserBundle:User')->find($id);
        if (!$user) {
            $messageException = $this->get('translator')->trans('User not found');
            throw $this->createNotFoundException($messageException);
        }
        $form = $this->createEditForm($user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $successMessage = $this->get('translator')->trans('The user has been modificated');
            $this->addFlash('notice',$successMessage);
            return $this->redirectToRoute('andres_mazza_user_edit', array( 'id' => $user->getId()));
        }
        return $this->render('@AndresMazzaUser/User/edit.html.twig',array(
            'user' => $user,
            'form' => $form->createView())
        );
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
