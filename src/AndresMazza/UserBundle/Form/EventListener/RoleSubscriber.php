<?php

/**
 * Created by PhpStorm.
 * User: andres
 * Date: 17/04/16
 * Time: 13:56
 */
namespace AndresMazza\UserBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class RoleSubscriber implements EventSubscriberInterface {
    private $flag = false;

    public function __construct($role) {
        if ($role == 'admin') {
            $this->flag = true;
        }

    }

    public static function getSubscribedEvents() {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData'
        );
    }

    public function preSetData(FormEvent $event) {
        if ($this->flag) {
            $data = $event->getData();
            $form = $event->getForm();
            $form->add('role', 'choice', array(
                'choices'     => array(
                    'ROLE_ADMIN'   => 'Administrator',
                    'ROLE_USER'    => 'User',
                    'ROLE_THEME'   => 'Bootstrap',
                    'ROLE_PROFILE' => 'Admin'
                ),
                'placeholder' => 'Select a Role'
            ));
        }

    }
}