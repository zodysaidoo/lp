<?php

namespace Lernparadies\VokaliBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lernparadies\VokaliBundle\Entity\Wort;
use Lernparadies\VokaliBundle\Form\WortType;

/**
 * Wort controller.
 *
 */
class WortController extends Controller
{

    /**
     * Lists all Wort entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LernparadiesVokaliBundle:Wort')->findAll();

        return $this->render('LernparadiesVokaliBundle:Wort:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Wort entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Wort();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('wort_show', array('id' => $entity->getId())));
        }

        return $this->render('LernparadiesVokaliBundle:Wort:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Wort entity.
    *
    * @param Wort $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Wort $entity)
    {
        $form = $this->createForm(new WortType(), $entity, array(
            'action' => $this->generateUrl('wort_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Wort entity.
     *
     */
    public function newAction()
    {
        $entity = new Wort();
        $form   = $this->createCreateForm($entity);

        return $this->render('LernparadiesVokaliBundle:Wort:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Wort entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesVokaliBundle:Wort')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Wort entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesVokaliBundle:Wort:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Wort entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesVokaliBundle:Wort')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Wort entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesVokaliBundle:Wort:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Wort entity.
    *
    * @param Wort $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Wort $entity)
    {
        $form = $this->createForm(new WortType(), $entity, array(
            'action' => $this->generateUrl('wort_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Wort entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesVokaliBundle:Wort')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Wort entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('wort_edit', array('id' => $id)));
        }

        return $this->render('LernparadiesVokaliBundle:Wort:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Wort entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LernparadiesVokaliBundle:Wort')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Wort entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('wort'));
    }

    /**
     * Creates a form to delete a Wort entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('wort_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
