<?php

namespace Esiea\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Esiea\BlogBundle\Entity\Advert;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {

    $repository = $this
      ->getDoctrine()
      ->getManager()
      ->getRepository('EsieaBlogBundle:Advert');
    $listAdvert = $repository->findBy(array(),array('date' => 'desc'),100,0);
    return $this->render('EsieaBlogBundle:Default:index.html.twig', array('listAdvert' => $listAdvert));
    }

  public function contactAction()
   {

 return $this->container->get('templating')->renderResponse('EsieaBlogBundle:Default:contact.html.twig');

   }

    public function vueAction($id)
    {

    $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('EsieaBlogBundle:Advert');

    $advert = $repository->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
      }

    return $this->render('EsieaBlogBundle:Default:vue.html.twig', array('advert' => $advert));
    }


    public function ajouterAction(Request $request)
    {

    $em = $this->getDoctrine()->getManager();
    $advert = new advert();
    $advert->setDate(new \Datetime());
  
    $formBuilder = $this->get('form.factory')->createBuilder('form', $advert);
    $formBuilder
      ->add('date','date')
      ->add('title','text')
      ->add('content','textarea')
      ->add('author','text')
      ->add('published','checkbox')
      ->add('save','submit');
    $form = $formBuilder->getForm();
    $formBuilder->add('published', 'checkbox', array('required' => false));
    $form->handleRequest($request);

  if ($form->isValid()) {
      $em->persist($advert);
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
      return $this->redirect($this->generateUrl('esiea_blog_vue', array('id' => $advert->getId())));
    }
      return $this->render('EsieaBlogBundle:Default:ajouter.html.twig', array('form' => $form->createView(),));
  }

    public function modifierAction($id,Request $request)
    {

    $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('EsieaBlogBundle:Advert')->find($id);

  if (null === $advert) {
    throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    } 
   
    $formBuilder = $this->get('form.factory')->createBuilder('form', $advert);
    $formBuilder
      ->add('date','date', array("data" => $advert->getDate() ) )
      ->add('title','text', array("data" => $advert->getTitle() ))
      ->add('content','textarea', array("data" => $advert->getContent()))
      ->add('author','text', array("data" => $advert->getAuthor()) )
      ->add('published','checkbox')
      ->add('save','submit');

  $form = $formBuilder->getForm();
  $form->handleRequest($request);
  
   if ($form->isValid()) {
      $em->persist($article);
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice','Annonce bien enregistrée.');
      return $this->redirect($this->generateUrl('esiea_blog_vue', array('id' => $advert->getId())));
    }
  
    return $this->render('EsieaBlogBundle:Default:modifier.html.twig',
    array('form' => $form->createView(),'article' => $advert));
    }



    public function supprimerAction($id,Request $request)
    {

    $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('EsieaBlogBundle:Advert')->find($id);
    if ($advert == null) {
      throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
    }
    if ($request->isMethod('POST')) {
    
      $request->getSession()->getFlashBag()->add('info', 'Annonce bien supprimée.');
      return $this->redirect($this->generateUrl('esiea_blog_vue'));
    }
    $em->remove($advert);
    $em->flush();
  
    return $this->render('EsieaBlogBundle:Default:supprimer.html.twig', array('advert' => $advert));
  }

}
