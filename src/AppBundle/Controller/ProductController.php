<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/product", name="products")
 */

class ProductController extends Controller
{
    /**
     * @Route("/", name="product_home")
     * @Method({"GET"});
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('product/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/list", name="product_list")
     * @Method({"GET"});
     */
    public function listAction(Request $request)
    {
        $products = array(
            array('name' => 'Vasaló', 'price' => 12000, 'manufacturer' => 'Bosch'),
            array('name' => 'Mosógép', 'price' => 150000, 'manufacturer' => 'Bosch'),
            array('name' => 'Hajszárító', 'price' => 11000, 'manufacturer' => 'Siemens'),
            array('name' => 'Sütő', 'price' => 130000, 'manufacturer' => 'Bosch')
        );

        return new Response( json_encode($products) );
    }

}
