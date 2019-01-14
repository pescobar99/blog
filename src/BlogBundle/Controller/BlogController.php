<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{
    /**
     * @Route("/", name="blog_index")
     */
    public function indexAction()
    {
        return $this->render('@Blog/Blog/index.html.twig');
    }
}
