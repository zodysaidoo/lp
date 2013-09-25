<?php

namespace Lernparadies\LernparadiesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lernparadies\LernparadiesBundle\Entity\Sprache;
use Lernparadies\LernparadiesBundle\Form\SpracheType;

/**
 * Sprache controller.
 *
 */
class SpracheController extends Controller
{

    /**
     * Lists all Sprache entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LernparadiesLernparadiesBundle:Sprache')->findAll();
	    //var_dump($entities);
	    //die;
	    //exit;

        return $this->render('LernparadiesLernparadiesBundle:Sprache:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Sprache entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Sprache();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sprache_show', array('id' => $entity->getId())));
        }

        return $this->render('LernparadiesLernparadiesBundle:Sprache:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Sprache entity.
    *
    * @param Sprache $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Sprache $entity)
    {
        $form = $this->createForm(new SpracheType(), $entity, array(
            'action' => $this->generateUrl('sprache_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Sprache entity.
     *
     */
    public function newAction()
    {
        $entity = new Sprache();
        $form   = $this->createCreateForm($entity);

        return $this->render('LernparadiesLernparadiesBundle:Sprache:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sprache entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesLernparadiesBundle:Sprache')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sprache entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesLernparadiesBundle:Sprache:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Sprache entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesLernparadiesBundle:Sprache')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sprache entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesLernparadiesBundle:Sprache:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Sprache entity.
    *
    * @param Sprache $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Sprache $entity)
    {
        $form = $this->createForm(new SpracheType(), $entity, array(
            'action' => $this->generateUrl('sprache_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Sprache entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesLernparadiesBundle:Sprache')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sprache entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sprache_edit', array('id' => $id)));
        }

        return $this->render('LernparadiesLernparadiesBundle:Sprache:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Sprache entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LernparadiesLernparadiesBundle:Sprache')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sprache entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sprache'));
    }

    /**
     * Creates a form to delete a Sprache entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sprache_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
