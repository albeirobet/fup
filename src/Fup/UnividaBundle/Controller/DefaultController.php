<?php

namespace Fup\UnividaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FupUnividaBundle:Default:index.html.twig');
    }
}
