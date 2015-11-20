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

  public function menuAction()

  {

    // On fixe en dur une liste ici, bien entendu par la suite

    // on la récupérera depuis la BDD !

    $listAdverts = array(
      array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
      array('id' => 5, 'title' => 'Mission de webmaster'),
      array('id' => 9, 'title' => 'Offre de stage webdesigner'));
    return $this->render('EsieaBlogBundle:Default:menu.html.twig', array('listAdverts' => $listAdverts));

  }

    public function vueAction($id)
    {
    // On récupère le repository

    $repository = $this->getDoctrine()

      ->getManager()

      ->getRepository('EsieaBlogBundle:Advert')

    ;


    // On récupère l'entité correspondante à l'id $id

    $advert = $repository->find($id);


    // $advert est donc une instance de OC\PlatformBundle\Entity\Advert

    // ou null si l'id $id  n'existe pas, d'où ce if :

    if (null === $advert) {

      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");

    }


    // Le render ne change pas, on passait avant un tableau, maintenant un objet

    return $this->render('EsieaBlogBundle:Default:vue.html.twig', array(

      'advert' => $advert

    ));
    return $this->render('EsieaBlogBundle:Default:vue.html.twig', array('advert' => $Advert));
    }




    
    public function ajouterAction(Request $request)
    {

    $em = $this->getDoctrine()->getManager();
    $advert = new advert();
    $advert->setDate(new \Datetime());
  
    $formBuilder = $this->get('form.factory')->createBuilder('form', $advert);
    $formBuilder
      ->add('date',      'date')
      ->add('title',     'text')
      ->add('content',   'textarea')
      ->add('author',    'text')
      ->add('published', 'checkbox')
      ->add('save',      'submit')
    ;
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


    public function modifierAction($id)
    {
    return $this->container->get('templating')->renderResponse('EsieaBlogBundle:Default:modifier.html.twig');
    }

    public function supprimerAction($id)
    {
    return $this->container->get('templating')->renderResponse('EsieaBlogBundle:Default:supprimer.html.twig');
    }

}
