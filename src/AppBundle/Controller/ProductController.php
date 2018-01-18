<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Product;


/**
 * @Route("/product", name="products")
 */

class ProductController extends Controller
{
/*
    /**
     * @Route("/", name="product_home")
     * @Method({"GET"});
     */
/*
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('product/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
 */

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

    /**
     * @Route("/create", name="product_create")
     * @Method({"POST"});
     */
    public function createAction(Request $request)
    {
        //Az em  a Doctrine managere, ami kezeli az adatbázis, egy Manager osztály.
        $em = $this->get('doctrine')->getManager();

        //Kiveszem változóba a request adatokat és json decódolom(visszaalakítom json-ról):
        $currentReq = $request->getContent();
        $currentReq = json_decode($currentReq);

        //Létrehozzuk a példányt és beállítjuk az attributumait a request értékeivel, amik
        // most már objektumok és nem json.
        $product = new Product();
        $product->setName( $currentReq->name );
        $product->setPrice( $currentReq->price );
        $product->setManufacturer($currentReq->manufacturer );

        //A Doctrine amikor indul, beolvassa a tábla tartalmát és ahhoz, hogy az adat
        //azonnal bekerüljön az objektumba, a persist-et tudjuk használni.
        $em->persist($product);

        //Lefuttatja au update-t, azaz most az insertet hajtunk végre.
        $em->flush();

        //Visszaad egy tömböt json enkódolva:
        return new Response( json_encode(
            array('success' => true)
        ) );
    }

}
