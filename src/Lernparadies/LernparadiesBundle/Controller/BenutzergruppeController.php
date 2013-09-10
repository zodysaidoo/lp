<?php

namespace Lernparadies\LernparadiesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lernparadies\LernparadiesBundle\Entity\Benutzergruppe;
use Lernparadies\LernparadiesBundle\Form\BenutzergruppeType;

/**
 * Benutzergruppe controller.
 *
 */
class BenutzergruppeController extends Controller
{

    /**
     * Lists all Benutzergruppe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LernparadiesLernparadiesBundle:Benutzergruppe')->findAll();

        return $this->render('LernparadiesLernparadiesBundle:Benutzergruppe:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Benutzergruppe entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Benutzergruppe();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('benutzergruppe_show', array('id' => $entity->getId())));
        }

        return $this->render('LernparadiesLernparadiesBundle:Benutzergruppe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Benutzergruppe entity.
    *
    * @param Benutzergruppe $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Benutzergruppe $entity)
    {
        $form = $this->createForm(new BenutzergruppeType(), $entity, array(
            'action' => $this->generateUrl('benutzergruppe_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Benutzergruppe entity.
     *
     */
    public function newAction()
    {
        $entity = new Benutzergruppe();
        $form   = $this->createCreateForm($entity);

        return $this->render('LernparadiesLernparadiesBundle:Benutzergruppe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Benutzergruppe entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesLernparadiesBundle:Benutzergruppe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Benutzergruppe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesLernparadiesBundle:Benutzergruppe:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Benutzergruppe entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesLernparadiesBundle:Benutzergruppe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Benutzergruppe entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesLernparadiesBundle:Benutzergruppe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Benutzergruppe entity.
    *
    * @param Benutzergruppe $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Benutzergruppe $entity)
    {
        $form = $this->createForm(new BenutzergruppeType(), $entity, array(
            'action' => $this->generateUrl('benutzergruppe_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Benutzergruppe entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesLernparadiesBundle:Benutzergruppe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Benutzergruppe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('benutzergruppe_edit', array('id' => $id)));
        }

        return $this->render('LernparadiesLernparadiesBundle:Benutzergruppe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Benutzergruppe entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LernparadiesLernparadiesBundle:Benutzergruppe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Benutzergruppe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('benutzergruppe'));
    }

    /**
     * Creates a form to delete a Benutzergruppe entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('benutzergruppe_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
