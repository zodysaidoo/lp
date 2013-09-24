<?php

namespace Lernparadies\VokaliBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lernparadies\VokaliBundle\Entity\Wortart;
use Lernparadies\VokaliBundle\Form\WortartType;

/**
 * Wortart controller.
 *
 */
class WortartController extends Controller
{

    /**
     * Lists all Wortart entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LernparadiesVokaliBundle:Wortart')->findAll();

        return $this->render('LernparadiesVokaliBundle:Wortart:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Wortart entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Wortart();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('wortart_show', array('id' => $entity->getId())));
        }

        return $this->render('LernparadiesVokaliBundle:Wortart:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Wortart entity.
    *
    * @param Wortart $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Wortart $entity)
    {
        $form = $this->createForm(new WortartType(), $entity, array(
            'action' => $this->generateUrl('wortart_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Wortart entity.
     *
     */
    public function newAction()
    {
        $entity = new Wortart();
        $form   = $this->createCreateForm($entity);

        return $this->render('LernparadiesVokaliBundle:Wortart:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Wortart entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesVokaliBundle:Wortart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Wortart entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesVokaliBundle:Wortart:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Wortart entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesVokaliBundle:Wortart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Wortart entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LernparadiesVokaliBundle:Wortart:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Wortart entity.
    *
    * @param Wortart $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Wortart $entity)
    {
        $form = $this->createForm(new WortartType(), $entity, array(
            'action' => $this->generateUrl('wortart_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Wortart entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LernparadiesVokaliBundle:Wortart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Wortart entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('wortart_edit', array('id' => $id)));
        }

        return $this->render('LernparadiesVokaliBundle:Wortart:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Wortart entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LernparadiesVokaliBundle:Wortart')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Wortart entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('wortart'));
    }

    /**
     * Creates a form to delete a Wortart entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('wortart_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
