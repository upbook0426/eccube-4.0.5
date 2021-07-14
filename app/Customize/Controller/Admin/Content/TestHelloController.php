<?php

namespace Customize\Controller\Admin\Content;

use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\Paginator;

class TestHelloController extends AbstractController
{
    /**
     * TestNewsController constructor.
     */
    public function __construct()
    {
    }

    /**
     * テスト
     *
     * @Route("/%eccube_admin_route%/content/test", name="admin_content_test")
     * @Route("/%eccube_admin_route%/content/test/page/{page_no}", requirements={"page_no" = "\d+"},name="admin_content_test_page")
     * @Template("@admin/Content/test.twig")
     *
     * @param Request $request
     * @param int $page_no
     * @param Paginator $paginator
     *
     * @return array
     */
    public function index(Request $request, $page_no = 1, Paginator $paginator)
    {
        return [];
    }
}
