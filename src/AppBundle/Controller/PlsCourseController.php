<?php

namespace AppBundle\Controller;

use AppBundle\Entity\PlsCourse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Plscourse controller.
 *
 */
class PlsCourseController extends Controller
{
    /**
     * Lists all plsCourse entities.
     *
     */
    public function indexAction()
    {
         echo "abc";die;
        $em = $this->getDoctrine()->getManager();

        $plsCourses = $em->getRepository('AppBundle:PlsCourse')->findAll();

        return $this->render('plscourse/index.html.twig', array(
            'plsCourses' => $plsCourses,
        ));
    }

    /**
     * Creates a new plsCourse entity.
     *
     */
    public function newAction(Request $request)
    {
        $plsCourse = new Plscourse();
        $form = $this->createForm('AppBundle\Form\PlsCourseType', $plsCourse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($plsCourse);
            $em->flush();

            return $this->redirectToRoute('plscourse_show', array('id' => $plsCourse->getId()));
        }

        return $this->render('plscourse/new.html.twig', array(
            'plsCourse' => $plsCourse,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a plsCourse entity.
     *
     */
    public function showAction(PlsCourse $plsCourse)
    {
        $deleteForm = $this->createDeleteForm($plsCourse);

        return $this->render('plscourse/show.html.twig', array(
            'plsCourse' => $plsCourse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing plsCourse entity.
     *
     */
    public function editAction(Request $request, PlsCourse $plsCourse)
    {
        $deleteForm = $this->createDeleteForm($plsCourse);
        $editForm = $this->createForm('AppBundle\Form\PlsCourseType', $plsCourse);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('plscourse_edit', array('id' => $plsCourse->getId()));
        }

        return $this->render('plscourse/edit.html.twig', array(
            'plsCourse' => $plsCourse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a plsCourse entity.
     *
     */
    public function deleteAction(Request $request, PlsCourse $plsCourse)
    {
        $form = $this->createDeleteForm($plsCourse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($plsCourse);
            $em->flush();
        }

        return $this->redirectToRoute('plscourse_index');
    }

    /**
     * Creates a form to delete a plsCourse entity.
     *
     * @param PlsCourse $plsCourse The plsCourse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PlsCourse $plsCourse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plscourse_delete', array('id' => $plsCourse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
