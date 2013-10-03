<?php

namespace Lernparadies\VokaliBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lernparadies\VokaliBundle\Entity\Vokabel;
use Lernparadies\VokaliBundle\Form\VokabelType;

/**
 * Vokabel controller.
 *
 */
class VokabelController extends Controller
{

    /**
     * Lists all Vokabel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LernparadiesVokaliBundle:Vokabel')->findAll();

        return $this->render('LernparadiesVokaliBundle:Vokabel:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Vokabel entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Vokabel();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('vokabel_show', array('id' => $entity->getId())));
        }

        return $this->render('LernparadiesVokaliBundle:Vokabel:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Vokabel entity.
    *
    * @param Vokabel $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Vokabel $entity)
    {
        $form = $this->createForm(new VokabelType(), $entity, array(
            'action' => $this->generateUrl('vokabel_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Vokabel entity.
     *
     */
    public function newAction()
    {
        $entity = new Vokabel();
        $form   = $this->createCreateForm($entity);

        return $this->render('LernparadiesVokaliBundle:Vokabel:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Vokabel entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesVokaliBundle:Vokabel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vokabel entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesVokaliBundle:Vokabel:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Vokabel entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesVokaliBundle:Vokabel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vokabel entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesVokaliBundle:Vokabel:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Vokabel entity.
    *
    * @param Vokabel $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Vokabel $entity)
    {
        $form = $this->createForm(new VokabelType(), $entity, array(
            'action' => $this->generateUrl('vokabel_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Vokabel entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesVokaliBundle:Vokabel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vokabel entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('vokabel_edit', array('id' => $id)));
        }

        return $this->render('LernparadiesVokaliBundle:Vokabel:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Vokabel entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LernparadiesVokaliBundle:Vokabel')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Vokabel entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('vokabel'));
    }

    /**
     * Creates a form to delete a Vokabel entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vokabel_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
