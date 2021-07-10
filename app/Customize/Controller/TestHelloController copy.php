<?php

namespace Customize\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eccube\Controller\AbstractController;
use Customize\Repository\TestProductRepository;
use Customize\Form\Type\TestProductNameType;
use Customize\Form\Type\TestProductType;
use Customize\Form\Type\TestNewType;

class TestHelloController extends AbstractController
{
    /**
     * @var TestProductRepository
     */
    protected $testProductRepository;

    /**
     * TestProductController
     * Constructor.
     * @param TestProductRepository $testProductRepository
     *
     */
    public function __construct(TestProductRepository $testProductRepository){
        $this->testProductRepository = $testProductRepository;
    }

    /**
     *
     * @Route("/test/hello", name="test_hello")
     * @Template("Test/hello.twig")
     */
    public function index(Request $request)
    {
        //Post
        $test_product_form = $request->request->get('test_product_form');

        $productId = (isset($test_product_form['id'])) ? $test_product_form['id'] : 0;
        $productionArea = (isset($test_product_form['production_area'])) ? $test_product_form['production_area'] : '';

        if (!empty($productId) && is_numeric($productId)) {
            $product = $this->testProductRepository->customUpdateProductionArea($productId, $productionArea);
        } else {
            $name = '...';
            $product = null;
        }

        //TestProducdtNameType
        // $builder = $this->formFactory->createNamedBuilder('', TestProductNameType::class);
        // $nameForm = $builder->getForm();#FormのオブジェクトをnameFormに代入
        // $nameForm->handleRequest($request);#Formの内容を確定します。

        // $status = 'none';
        // if ($nameForm->isSubmitted() && $nameForm->isValid()) {
        //     $status = 'success';
        // }

        //TestProducdtType
        // $builder = $this->formFactory->createNamedBuilder('test_product_form', TestProductType::class);
        // $nameForm = $builder->getForm();#FormのオブジェクトをnameFormに代入
        // $nameForm->handleRequest($request);#Formの内容を確定します。
        // $status = 'none';
        // if ($nameForm->isSubmitted() && $nameForm->isValid()) {
        //     $status = 'success';
        // }

        //TestNewType
        $builder = $this->formFactory->createNamedBuilder('', TestNewType::class);
        $newForm = $builder->getForm();#FormのオブジェクトをnameFormに代入
        $newForm->handleRequest($request);#Formの内容を確定します。
        if ($nameForm->isSubmitted() && $nameForm->isValid()) {
            $title = $request->request->get('title');
            $this->testNewRepository->customAdd($title);
        }


        //Post
        $name = $request->request->get('name');
        if (!empty($name)){
            $product = $this->testProductRepository->customFindName($name);
        }else {
            $product = null;
        }

        $news = $this->testNewRepository->findAll();
        $products = $this->testProductRepository->findAll();
        return ['product'=>$product , 'products' => $products, 'NameForm' => $nameForm->createView(), 'Status'=> $status,'Count'=> count($news), 'news' => $news, 'newForm' => $newForm->createView()];
    }
}
