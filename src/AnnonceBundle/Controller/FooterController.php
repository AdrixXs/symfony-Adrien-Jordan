<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 15/09/2016
 * Time: 09:37
 */

namespace AnnonceBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FooterController extends Controller
{


    public function cguAction()
    {
        return $this->render('AnnonceBundle:Footer:cgu.html.twig');
    }

    public function faqAction()
    {
        return $this->render('AnnonceBundle:Footer:faq.html.twig');
    }

    public function mlAction()
    {
        return $this->render('AnnonceBundle:Footer:ml.html.twig');
    }
}