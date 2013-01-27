<?php

namespace Tuto\AnimauxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tuto\AnimauxBundle\Entity\Animal;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TutoAnimauxBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function ajouterAction()
	{
		$em = $this->getDoctrine()->getEntityManager();

		$a = new Animal();
		$a->setTitre("Un chat")
		  ->setUrl("http://fr.questmachine.org/encyclopedie/illustrations/illustrations_articles/chat61291545533.jpg")
		  ->setDescription("Ce chat est mignon")
		  ->setDate(new \DateTime());

		$em->persist($a);
		$em->flush();
		
		return $this->render('TutoAnimauxBundle:Default:ajouter.html.twig', array(
			
		));
	}
}
