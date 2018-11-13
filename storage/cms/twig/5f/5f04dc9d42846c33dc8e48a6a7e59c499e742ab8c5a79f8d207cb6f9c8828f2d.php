<?php

/* /var/www/html/workspace/syaq/themes/syaq/pages/e-shop.htm */
class __TwigTemplate_b484c0bf46a1344d9b11e2fcf1522d9c60c475bd3f51171e494416c8986421a0 extends Twig_Template
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
        echo "<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t\t\t<h3>منتجاتنا</h3>
\t\t</div>
\t</div>
</section>
<section class=\"in-page\">
\t<div class=\"container\">
\t";
        // line 10
        $context["list"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", array(), "method"), "active", array(), "method");
        // line 11
        echo "\t\t<table class=\"table table-hover\">
\t\t\t<thead >
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"width: 100px;\"></td>
\t\t\t\t\t<th>الاسم</th>
\t\t\t\t\t<th>الفئة</th>
\t\t\t\t\t<th>وصف المنتج</th>
\t\t\t\t\t<th style=\"width: 50px;\">السعر</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 25
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "preview_image", array()))) {
                // line 26
                echo "\t\t                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("product", array("slug" => twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())));
                echo "\"><img class=\"image-fluid\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "preview_image", array()), "thumb", array(0 => 100, 1 => 100, 2 => "crop"), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "preview_image", array()), "title", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "preview_image", array()), "description", array()), "html", null, true);
                echo "\"></a>
\t\t                ";
            }
            // line 28
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<b><a href=\"";
            // line 30
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("product", array("slug" => twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</a></b>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", array()), "name", array()), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("product", array("slug" => twig_get_attribute($this->env, $this->source, $context["item"], "slug", array())));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "preview_text", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 40
            $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "offer", array()), "first", array(), "method");
            // line 41
            echo "\t\t\t\t\t    ";
            if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", array(), "method")) {
                echo "  
\t\t\t\t\t        <p class=\"start-price text-left\"><b> <span class=\"price main-color\"><span>SR</span>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", array()), "html", null, true);
                echo "</span> </b></p>
\t\t\t\t\t    ";
            }
            // line 44
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/pages/e-shop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  110 => 44,  105 => 42,  100 => 41,  98 => 40,  90 => 37,  84 => 34,  75 => 30,  71 => 28,  59 => 26,  57 => 25,  53 => 23,  49 => 22,  36 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t\t\t<h3>منتجاتنا</h3>
\t\t</div>
\t</div>
</section>
<section class=\"in-page\">
\t<div class=\"container\">
\t{% set list = ProductList.make().active() %}
\t\t<table class=\"table table-hover\">
\t\t\t<thead >
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"width: 100px;\"></td>
\t\t\t\t\t<th>الاسم</th>
\t\t\t\t\t<th>الفئة</th>
\t\t\t\t\t<th>وصف المنتج</th>
\t\t\t\t\t<th style=\"width: 50px;\">السعر</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for item in list %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if item.preview_image is not empty %}
\t\t                    <a href=\"{{'product'|page({'slug':item.slug})}}\"><img class=\"image-fluid\" src=\"{{ item.preview_image.thumb(100,100,'crop') }}\" title=\"{{ item.preview_image.title }}\" alt=\"{{ item.preview_image.description }}\"></a>
\t\t                {% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<b><a href=\"{{'product'|page({'slug':item.slug})}}\">{{item.name}}</a></b>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{item.category.name}}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{'product'|page({'slug':item.slug})}}\">{{item.preview_text}}</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% set obOffer = item.offer.first() %}
\t\t\t\t\t    {% if obOffer.isNotEmpty()%}  
\t\t\t\t\t        <p class=\"start-price text-left\"><b> <span class=\"price main-color\"><span>SR</span>{{obOffer.price}}</span> </b></p>
\t\t\t\t\t    {% endif %}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{% endfor%}
\t\t\t</tbody>
\t\t</table>
\t</div>
</section>", "/var/www/html/workspace/syaq/themes/syaq/pages/e-shop.htm", "");
    }
}
