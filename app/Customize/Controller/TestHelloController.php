<?php

namespace Customize\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eccube\Controller\AbstractController;
use Eccube\Repository\ProductRepository;


class TestHelloController extends AbstractController
{
   /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * TestController
     * Constructor.
     * @param ProductRepository $productRepository　
     */
    public function __construct(ProductRepository $productRepository){

        $this->productRepository = $productRepository;
    }

    /**
     * テスト画面
     *
     * @Route("/test/hello", name="test_hello")
     * @Template("Test/hello.twig")
     */
    public function index(Request $request)
    {
           $product = $this->productRepository->find(3);
        return ['product'->$product];
    }
}
