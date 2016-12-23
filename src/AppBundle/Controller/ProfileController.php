<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Besoin;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Controller\ProfileController as BaseController;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ProfileController extends BaseController
{
public function showAction()
    {

		$user = $this->getUser();
		$besoins = $user->getBesoins();
		$services = $user->getServices();
		
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		
        return $this->render('AppBundle:Profile:show.html.twig', array(
            'user' => $user,
			'besoins' => $besoins,
			'services' => $services,
        ));
    }
	}