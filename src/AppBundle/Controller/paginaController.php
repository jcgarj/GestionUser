<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\pagina;
use AppBundle\Form\paginaType;

/**
 * pagina controller.
 *
 */
class paginaController extends Controller
{

    /**
     * Lists all pagina entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:pagina')->findAll();

        return $this->render('AppBundle:pagina:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new pagina entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new pagina();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_admin_show', array('id' => $entity->getId())));
        }

        return $this->render('AppBundle:pagina:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a pagina entity.
     *
     * @param pagina $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(pagina $entity)
    {
        $form = $this->createForm(new paginaType(), $entity, array(
            'action' => $this->generateUrl('admin_admin_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new pagina entity.
     *
     */
    public function newAction()
    {
        $entity = new pagina();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:pagina:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pagina entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:pagina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pagina entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:pagina:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pagina entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:pagina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pagina entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:pagina:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a pagina entity.
    *
    * @param pagina $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(pagina $entity)
    {
        $form = $this->createForm(new paginaType(), $entity, array(
            'action' => $this->generateUrl('admin_admin_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing pagina entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:pagina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pagina entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_admin_edit', array('id' => $id)));
        }

        return $this->render('AppBundle:pagina:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a pagina entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:pagina')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find pagina entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_admin'));
    }

    /**
     * Creates a form to delete a pagina entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_admin_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
