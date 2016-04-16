<?php

namespace AndresMazza\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;

class UserType extends AbstractType {
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('username')
                ->add('firstName')
                ->add('lastName')
                ->add('email', 'email')
                ->add('password', 'password')
                ->add('role', 'choice', array(
                    'choices' => array(
                        'ROLE_ADMIN' => 'Administrator',
                        'ROLE_USER'  => 'User'
                    ),
                    'placeholder' => 'Select a Role'
                ))
                ->add('isActive', 'checkbox')//          ->add('createdAt')
//            ->add('updatedAt');
                ->add('save', 'submit', array( 'label' => 'Save User' ));

        $builder->addEventListener(FormEvents::PRE_SET_DATA, array(
                $this,
                'onPreSetData'
            ));
    }


    public function onPreSetData(FormEvent $event) {
       // die("asdasdasdasdasdasd");
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AndresMazza\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'andresmazza_userbundle_user';
    }
}
