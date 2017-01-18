<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AppBundle\Entity\Besoin;
use AppBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

		$em = $this->getDoctrine()->getManager();
		//$user = $besoins->getUser();
		$besoins = $em->getRepository('AppBundle:Besoin')->findAllOrderedById();
		$user = $em->getRepository('AppBundle:User')->findAll();
		//$userCo = $this->getUser();
		
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
			'besoins' => $besoins,
			'user' => $user,
			//'userCo' => $userCo,
        ]);
    }
	
	/**
     * @Route("/admin", name="admin")
     */
	public function adminAction()
    {
		$em = $this->getDoctrine()->getManager();
        $services = $em->getRepository('AppBundle:Service')->findAll();
		
		$em = $this->getDoctrine()->getManager();
		$besoins = $em->getRepository('AppBundle:Besoin')->findAll();
		
        return $this->render('default/admin.html.twig', array(
            'services' => $services,
			'besoins' => $besoins,
        ));
    }
	
	/**
     * @Route("/admin/user", name="supUser")
     */
	public function adminDelete()
    {
        return new Response('<html><body>Admin page for delete user!</body></html>');
    }

}
