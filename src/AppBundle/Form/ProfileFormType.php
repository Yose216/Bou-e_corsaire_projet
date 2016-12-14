<?php

namespace AppBundle\Form\Type;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class ProfileFormType extends AbstractType
{
   /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('addresse')->add('nom')->add('pseudo')->add('email')->add('password')->add('ville')->add('region')->add('codepostal')->add('telephone')->add('choix_tel')->add('img');
    }
    
    /**
     * {@inheritdoc}
     */
public function getParent()

    {

        return 'FOS\UserBundle\Form\Type\ProfileFormType';

    }



    public function getBlockPrefix()

    {

        return 'app_user_profile';

    }


    public function getName()

    {

        return $this->getBlockPrefix();

    }
}