<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('addresse')->add('nom')->add('pseudo')->add('email')->add('password')->add('ville')->add('region')->add('codepostal')->add('ratioheure')->add('compteactif')->add('telephone')->add('choix_tel')->add('img')        ;
    }
    
    /**
     * {@inheritdoc}
     */
public function getParent()

    {

        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }



    public function getBlockPrefix()

    {

        return 'app_user_registration';

    }



    // For Symfony 2.x

    public function getName()

    {

        return $this->getBlockPrefix();

    }
}
