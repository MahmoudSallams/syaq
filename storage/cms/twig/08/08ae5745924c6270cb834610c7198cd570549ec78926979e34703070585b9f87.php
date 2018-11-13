<?php

/* /var/www/html/workspace/syaq/themes/syaq/pages/product.htm */
class __TwigTemplate_b895b38b0d521fbb75659ed914d342b20eb07ff01ced4a0c2fe701c048ee4681 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["obProduct"] = twig_get_attribute($this->env, $this->source, ($context["ProductPage"] ?? null), "get", array(), "method");
        // line 2
        echo "<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t\t\t<h3>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "name", array()), "html", null, true);
        echo "</h3>
\t\t</div>
\t</div>
</section>
<section class=\"bg-light in-page\">
\t
\t<div class=\"container\">
\t\t";
        // line 12
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", array()))) {
            // line 13
            echo "\t\t\t<img style=\"width:100%;\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", array()), "thumb", array(0 => 900, 1 => 300, 2 => "crop"), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", array()), "title", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_image", array()), "description", array()), "html", null, true);
            echo "\">
\t\t<br/><br/>
\t\t";
        }
        // line 16
        echo "\t\t<div class=\"row\" data-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "id", array()), "html", null, true);
        echo "\">
\t\t\t<div class=\"col text-right\">
\t\t    \t<div>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "preview_text", array()), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t        ";
        // line 21
        $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "offer", array()), "first", array(), "method");
        // line 22
        echo "\t\t\t    ";
        if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", array(), "method")) {
            echo "  
\t\t\t        <p class=\"start-price text-left\"><b> <span class=\"price main-color\"><span>SR</span>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", array()), "html", null, true);
            echo "</span> </b></p>
\t\t\t    ";
        }
        // line 25
        echo "\t\t\t</div>
\t\t</div>
\t\t<div>";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["obProduct"] ?? null), "description", array());
        echo "</div>
\t\t<br/><br/>
\t</div>
\t<div class=\"text-center\">
\t\t<a href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-warning btn-lg\">تواصل معنا</a>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/pages/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  81 => 27,  77 => 25,  72 => 23,  67 => 22,  65 => 21,  59 => 18,  53 => 16,  42 => 13,  40 => 12,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set obProduct = ProductPage.get() %}
<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t\t\t<h3>{{ obProduct.name }}</h3>
\t\t</div>
\t</div>
</section>
<section class=\"bg-light in-page\">
\t
\t<div class=\"container\">
\t\t{% if obProduct.preview_image is not empty %}
\t\t\t<img style=\"width:100%;\" src=\"{{ obProduct.preview_image.thumb(900,300,'crop') }}\" title=\"{{ obProduct.preview_image.title }}\" alt=\"{{ obProduct.preview_image.description }}\">
\t\t<br/><br/>
\t\t{% endif %}
\t\t<div class=\"row\" data-id=\"{{ obProduct.id }}\">
\t\t\t<div class=\"col text-right\">
\t\t    \t<div>{{ obProduct.preview_text }}</div>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t        {% set obOffer = obProduct.offer.first() %}
\t\t\t    {% if obOffer.isNotEmpty()%}  
\t\t\t        <p class=\"start-price text-left\"><b> <span class=\"price main-color\"><span>SR</span>{{obOffer.price}}</span> </b></p>
\t\t\t    {% endif %}
\t\t\t</div>
\t\t</div>
\t\t<div>{{ obProduct.description|raw }}</div>
\t\t<br/><br/>
\t</div>
\t<div class=\"text-center\">
\t\t<a href=\"{{ 'contact' | page }}\" class=\"btn btn-warning btn-lg\">تواصل معنا</a>
\t</div>
</section>", "/var/www/html/workspace/syaq/themes/syaq/pages/product.htm", "");
    }
}
