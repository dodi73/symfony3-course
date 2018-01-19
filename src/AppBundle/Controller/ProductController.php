<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Product;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\HttpFoundation\JsonResponse;



/**
 * @Route("/product", name="product")
 */

class ProductController extends Controller
{

    /**
     * @Route("/", name="product_home")
     * @Method({"GET"})
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
     * @Method({"GET"})
     */
    public function listAction(Request $request)
    {

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        //Az em  a Doctrine managere, ami kezeli az adatbázist, egy Manager osztály.
        $em = $this->get('doctrine')->getManager();

        //Létre kell hozni egy tárolót, amiben a GET entitást tudjuk kezelni.
        $repository = $em->getRepository('AppBundle:Product');

        // Visszaadja az összes terméket ami az adatbázisban van.
        $products = $repository->findAll();

        $products = $serializer->serialize($products, 'json');

        $response = JsonResponse::fromJsonString($products);

        return $response;
    }

    /**
     * @Route("/create", name="product_create")
     * @Method({"POST"})
     */
    public function createAction(Request $request)
    {

        //Az em  a Doctrine managere, ami kezeli az adatbázist, egy Manager osztály.
        $em = $this->get('doctrine')->getManager();

        //Kiveszem változóba a request adatokat és json dekódolom(visszaalakítom json-ról, objektumra)
        $currentReq = $request->getContent();
        $currentReq = json_decode($currentReq);

        //Létrehozzuk a példányt és beállítjuk az attributumait a request értékeivel, amik
        // most már objektumok és nem json.

        $product = new Product();
        $product->setName( $currentReq->name );
        $product->setPrice( $currentReq->price );
        $product->setManufacturer( $currentReq->manufacturer );


        //A Doctrine amikor indul, beolvassa a tábla tartalmát és ahhoz, hogy az adat
        //azonnal bekerüljön az objektumba, a persist-et tudjuk használni.
        $em->persist($product);

        //A flush() lefuttatja az update-t, azaz most egy insertet hajt végre.
        $em->flush();

        return new Response( json_encode(
            array('success' => true)
        ) );
    }


    // Az "/update" az URL-je, a "product_update" meg a neve a routing szabálynak.

    /**
     * @Route("/update", name="product_update")
     * @Method({"POST"})
     */
    public function updateAction(Request $request)
    {

        $em = $this->get('doctrine')->getManager();
        $repository = $em->getRepository('AppBundle:Product');
        $currentReq = $request->getContent();
        $currentReq = json_decode($currentReq);

        $product = $repository->find($currentReq->id);

        $product->setName( $currentReq->name );
        $product->setPrice( $currentReq->price );
        $product->setManufacturer( $currentReq->manufacturer );

        $em->persist($product);

        $em->flush();

        return new Response( json_encode(
            array('success' => true)
        ) );
    }


}
