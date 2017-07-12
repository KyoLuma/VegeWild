<?php

namespace VegeWildBundle\Controller;

use VegeWildBundle\Entity\SugarRecipe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sugarrecipe controller.
 *
 * @Route("sugarrecipe")
 */
class SugarRecipeController extends Controller
{
    /**
     * Lists all sugarRecipe entities.
     *
     * @Route("/", name="sugarrecipe_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sugarRecipes = $em->getRepository('VegeWildBundle:SugarRecipe')->findAll();

        return $this->render('sugarrecipe/index.html.twig', array(
            'sugarRecipes' => $sugarRecipes,
        ));
    }

    /**
     * Creates a new sugarRecipe entity.
     *
     * @Route("/new", name="sugarrecipe_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sugarRecipe = new Sugarrecipe();
        $form = $this->createForm('VegeWildBundle\Form\SugarRecipeType', $sugarRecipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sugarRecipe);
            $em->flush();

            return $this->redirectToRoute('sugarrecipe_show', array('id' => $sugarRecipe->getId()));
        }

        return $this->render('sugarrecipe/new.html.twig', array(
            'sugarRecipe' => $sugarRecipe,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sugarRecipe entity.
     *
     * @Route("/{id}", name="sugarrecipe_show")
     * @Method("GET")
     */
    public function showAction(SugarRecipe $sugarRecipe)
    {
        $deleteForm = $this->createDeleteForm($sugarRecipe);

        return $this->render('sugarrecipe/show.html.twig', array(
            'sugarRecipe' => $sugarRecipe,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sugarRecipe entity.
     *
     * @Route("/{id}/edit", name="sugarrecipe_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SugarRecipe $sugarRecipe)
    {
        $deleteForm = $this->createDeleteForm($sugarRecipe);
        $editForm = $this->createForm('VegeWildBundle\Form\SugarRecipeType', $sugarRecipe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sugarrecipe_edit', array('id' => $sugarRecipe->getId()));
        }

        return $this->render('sugarrecipe/edit.html.twig', array(
            'sugarRecipe' => $sugarRecipe,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sugarRecipe entity.
     *
     * @Route("/{id}", name="sugarrecipe_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SugarRecipe $sugarRecipe)
    {
        $form = $this->createDeleteForm($sugarRecipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sugarRecipe);
            $em->flush();
        }

        return $this->redirectToRoute('sugarrecipe_index');
    }

    /**
     * Creates a form to delete a sugarRecipe entity.
     *
     * @param SugarRecipe $sugarRecipe The sugarRecipe entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SugarRecipe $sugarRecipe)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sugarrecipe_delete', array('id' => $sugarRecipe->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
