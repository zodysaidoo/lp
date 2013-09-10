<?php

namespace Lernparadies\LernparadiesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lernparadies\LernparadiesBundle\Entity\Benutzer;
use Lernparadies\LernparadiesBundle\Form\BenutzerType;

/**
 * Benutzer controller.
 *
 */
class BenutzerController extends Controller
{

    /**
     * Lists all Benutzer entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LernparadiesLernparadiesBundle:Benutzer')->findAll();

        return $this->render('LernparadiesLernparadiesBundle:Benutzer:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Benutzer entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Benutzer();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('benutzer_show', array('id' => $entity->getId())));
        }

        return $this->render('LernparadiesLernparadiesBundle:Benutzer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Benutzer entity.
    *
    * @param Benutzer $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Benutzer $entity)
    {
        $form = $this->createForm(new BenutzerType(), $entity, array(
            'action' => $this->generateUrl('benutzer_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Benutzer entity.
     *
     */
    public function newAction()
    {
        $entity = new Benutzer();
        $form   = $this->createCreateForm($entity);

        return $this->render('LernparadiesLernparadiesBundle:Benutzer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Benutzer entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesLernparadiesBundle:Benutzer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Benutzer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesLernparadiesBundle:Benutzer:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Benutzer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesLernparadiesBundle:Benutzer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Benutzer entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesLernparadiesBundle:Benutzer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Benutzer entity.
    *
    * @param Benutzer $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Benutzer $entity)
    {
        $form = $this->createForm(new BenutzerType(), $entity, array(
            'action' => $this->generateUrl('benutzer_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Benutzer entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesLernparadiesBundle:Benutzer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Benutzer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('benutzer_edit', array('id' => $id)));
        }

        return $this->render('LernparadiesLernparadiesBundle:Benutzer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Benutzer entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LernparadiesLernparadiesBundle:Benutzer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Benutzer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('benutzer'));
    }

    /**
     * Creates a form to delete a Benutzer entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('benutzer_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
