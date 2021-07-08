<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Block/eyecatch.twig */
class __TwigTemplate_a54683fec9e9bf33fdcf7e1db88c503f27a91ffcc4ba7c56170463c1afb763a9 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/eyecatch.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/eyecatch.twig"));

        // line 11
        echo "
<div class=\"ec-role\">
    <div class=\"ec-eyecatchRole\">
        <div class=\"ec-eyecatchRole__image\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_about.jpg"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\"/>
        </div>
        <div class=\"ec-eyecatchRole__intro\">
            <p class=\"ec-eyecatchRole__introEnTitle\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CUBE GELATO ICE"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introTitle\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("彩のジェラート\"CUBE\"をご堪能ください。"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introDescription\">";
        // line 20
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ジェラートとはイタリアン・アイスクリームのことで、一般的なアイスクリームに比べて、乳脂肪分が低くいのが特徴です。
当店では厳選した旬の果物のおいしさをそのままジェラートに仕上げました。風味が濃厚でありながら、甘さ控えめでヘルシーなキューブジェラートをご堪能ください。
さらにジェラートの製法を活かした、アイスキャンディ・アイスサンドも販売しております。
"), "html", null, true));
        // line 23
        echo "</p>
            <a class=\"ec-blockBtn--top\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=4\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("一覧を見る"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/eyecatch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  68 => 23,  63 => 20,  59 => 19,  55 => 18,  49 => 15,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}

<div class=\"ec-role\">
    <div class=\"ec-eyecatchRole\">
        <div class=\"ec-eyecatchRole__image\">
            <img src=\"{{ asset('assets/img/top/img_about.jpg') }}\" alt=\"\" role=\"presentation\"/>
        </div>
        <div class=\"ec-eyecatchRole__intro\">
            <p class=\"ec-eyecatchRole__introEnTitle\">{{ 'CUBE GELATO ICE'|trans }}</p>
            <p class=\"ec-eyecatchRole__introTitle\">{{ '彩のジェラート\"CUBE\"をご堪能ください。'|trans }}</p>
            <p class=\"ec-eyecatchRole__introDescription\">{{ 'ジェラートとはイタリアン・アイスクリームのことで、一般的なアイスクリームに比べて、乳脂肪分が低くいのが特徴です。
当店では厳選した旬の果物のおいしさをそのままジェラートに仕上げました。風味が濃厚でありながら、甘さ控えめでヘルシーなキューブジェラートをご堪能ください。
さらにジェラートの製法を活かした、アイスキャンディ・アイスサンドも販売しております。
'|trans|nl2br }}</p>
            <a class=\"ec-blockBtn--top\" href=\"{{ url('product_list') }}?category_id=4\">{{ '一覧を見る'|trans }}</a>
        </div>
    </div>
</div>
", "Block/eyecatch.twig", "C:\\xampp\\htdocs\\eccube-4.0.5\\src\\Eccube\\Resource\\template\\default\\Block\\eyecatch.twig");
    }
}
