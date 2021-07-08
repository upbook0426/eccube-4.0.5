<?php

namespace Customize\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Eccube\Controller\AbstractController;

class TestHelloController extends AbstractController
{
    /**
     * TestHelloController
     * Constructor.
     *
     */
    public function __construct()
    {
    }

    /**
     * テスト画面
     *
     * @Route("/test/hello", name="test_hello")
     * @Template("Test/hello.twig")
     */
    public function index(Request $request)
    {
        return [];
    }
}
