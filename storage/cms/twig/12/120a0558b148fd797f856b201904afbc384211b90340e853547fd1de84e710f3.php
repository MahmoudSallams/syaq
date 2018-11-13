<?php

/* /var/www/html/workspace/syaq/themes/syaq/pages/packages.htm */
class __TwigTemplate_dae07591bb5f8e0b06b59a68eaa645354d261eb8005a2a072a2d1902994a8ac6 extends Twig_Template
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
\t\t\t<h3>باقاتنا</h3>
\t\t</div>
\t</div>
</section>
<section class=\"section pricing-table light-bg\">
\t<div class=\"container\">
\t\t<div class=\"row packages\">
\t\t\t";
        // line 11
        $context["items"] = twig_get_attribute($this->env, $this->source, ($context["packages"] ?? null), "items", array());
        // line 12
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 13
            echo "\t\t\t  <div class=\"col-sm-4\">
\t\t\t\t<div class=\"price-table second-bg\">
\t\t\t\t<p class=\"p-l title main-color2\"><b>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "title", array()), "html", null, true);
            echo "</b></p>
\t\t\t\t<p class=\"start-price\"><b> <span class=\"price main-color\"><span>SR</span>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "price", array()), "html", null, true);
            echo "</span> 
\t\t\t\t<span class=\"per\">شهرياً</span></b></p>
\t\t\t\t<p class=\"p-l s5\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "line_1", array()), "html", null, true);
            echo "</p>
\t\t\t\t<p class=\"p-l s5\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "line_2", array()), "html", null, true);
            echo "</p>
\t\t\t\t<p class=\"p-l s5\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "line_3", array()), "html", null, true);
            echo "</p>
\t\t\t\t<a href=\"";
            // line 21
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("package", array("id" => twig_get_attribute($this->env, $this->source, $context["package"], "id", array())));
            echo " \" class=\"btn\">ابدأ الان</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/pages/packages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  50 => 16,  46 => 15,  42 => 13,  37 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t\t\t<h3>باقاتنا</h3>
\t\t</div>
\t</div>
</section>
<section class=\"section pricing-table light-bg\">
\t<div class=\"container\">
\t\t<div class=\"row packages\">
\t\t\t{% set items = packages.items %}
\t\t\t{% for package in items %}
\t\t\t  <div class=\"col-sm-4\">
\t\t\t\t<div class=\"price-table second-bg\">
\t\t\t\t<p class=\"p-l title main-color2\"><b>{{package.title}}</b></p>
\t\t\t\t<p class=\"start-price\"><b> <span class=\"price main-color\"><span>SR</span>{{package.price}}</span> 
\t\t\t\t<span class=\"per\">شهرياً</span></b></p>
\t\t\t\t<p class=\"p-l s5\">{{package.line_1}}</p>
\t\t\t\t<p class=\"p-l s5\">{{package.line_2}}</p>
\t\t\t\t<p class=\"p-l s5\">{{package.line_3}}</p>
\t\t\t\t<a href=\"{{'package' | page({id:package.id})}} \" class=\"btn\">ابدأ الان</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</section>", "/var/www/html/workspace/syaq/themes/syaq/pages/packages.htm", "");
    }
}
