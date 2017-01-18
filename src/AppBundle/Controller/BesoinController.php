<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Besoin;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Besoin controller.
 *
 * 
 */
class BesoinController extends Controller
{
    /**
     * Lists all besoin entities.
     *
     * @Route("/besoin", name="besoin_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $besoins = $em->getRepository('AppBundle:Besoin')->findAllOrderedById();
		$user = $em->getRepository('AppBundle:User')->findAll();
		
        return $this->render('besoin/index.html.twig', array(
            'besoins' => $besoins,
			'user' => $user,
        ));
    }

    /**
     * Creates a new besoin entity.
     *
     * @Route("/profile/besoin/new", name="besoin_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
		
        $besoin = new Besoin();
		//$em = $this->getDoctrine()->getManager();
		//$user = $em->getRepository('AppBundle:User')->findAll();
		//$user = $this->$em->find('Album\Entity\User', $postData['user_id']);

		$user = $this->getUser();
		$besoin->addUser($user);
        $form = $this->createForm('AppBundle\Form\BesoinType', $besoin);
		//$form->get('user')->getData();
        $form->handleRequest($request);
		

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($besoin);
            $em->flush($besoin);

            return $this->redirectToRoute('besoin_show', array('id' => $besoin->getId()));
        }

        return $this->render('besoin/new.html.twig', array(
            'besoin' => $besoin,
            'form' => $form->createView(),
			//'user' => $user,
        ));
    }

    /**
     * Finds and displays a besoin entity.
     *
     * @Route("/besoin/{id}", name="besoin_show")
     * @Method("GET")
     */
    public function showAction(Besoin $besoin, $id)
    {
//		$em = $this->getDoctrine()->getManager();
//		$besoin = $em->getRepository('AppBundle:Besoin')->find($id);
//		$user = $em->getRepository('AppBundle:User')->findAll();
		
        $deleteForm = $this->createDeleteForm($besoin);
		//$besoin = $besoin->getUser();

		
        return $this->render('besoin/show.html.twig', array(
            'besoin' => $besoin,
			//'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing besoin entity.
     *
     * @Route("admin/{id}/edit", name="besoin_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Besoin $besoin)
    {
        $deleteForm = $this->createDeleteForm($besoin);
        $editForm = $this->createForm('AppBundle\Form\BesoinType', $besoin);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('besoin_edit', array('id' => $besoin->getId()));
        }

        return $this->render('besoin/edit.html.twig', array(
            'besoin' => $besoin,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a besoin entity.
     *
     * @Route("/besoin/delete/{id}", name="besoin_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Besoin $besoin)
    {
        $form = $this->createDeleteForm($besoin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($besoin);
            $em->flush($besoin);
        }

        return $this->redirectToRoute('besoin_index');
    }

    /**
     * Creates a form to delete a besoin entity.
     *
     * @param Besoin $besoin The besoin entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Besoin $besoin)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('besoin_delete', array('id' => $besoin->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
