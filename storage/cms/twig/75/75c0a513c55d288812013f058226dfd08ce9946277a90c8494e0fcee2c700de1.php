<?php

/* /var/www/html/workspace/syaq/themes/syaq/pages/package.htm */
class __TwigTemplate_c3418164adc5f17d5d20d1e20c8257c15fb115eba4d67ac9b19f85349d8f2917 extends Twig_Template
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
        $context["item"] = twig_get_attribute($this->env, $this->source, ($context["package"] ?? null), "item", array());
        // line 2
        echo "<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t\t\t<h3>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", array()), "html", null, true);
        echo "</h3>
\t\t</div>
\t</div>
</section>
<section class=\"in-page\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-between\">
\t\t\t<div class=\"col-auto\">
\t\t\t\t<ul>
\t\t\t\t\t<li>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "line_1", array()), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "line_2", array()), "html", null, true);
        echo "</li>
\t\t\t\t\t<li>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "line_3", array()), "html", null, true);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-auto\">
\t\t\t\t<p class=\"start-price\"><b> <span class=\"price main-color\"><span>SR</span>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", array()), "html", null, true);
        echo "</span> 
\t\t\t\t<span class=\"per\">شهرياً</span></b></p>
\t\t\t</div>
\t\t</div>
\t\t<br/><br/>
\t\t<p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", array()), "html", null, true);
        echo "</p>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/pages/package.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  57 => 20,  50 => 16,  46 => 15,  42 => 14,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set item = package.item %}
<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t\t\t<h3>{{item.title}}</h3>
\t\t</div>
\t</div>
</section>
<section class=\"in-page\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-between\">
\t\t\t<div class=\"col-auto\">
\t\t\t\t<ul>
\t\t\t\t\t<li>{{item.line_1}}</li>
\t\t\t\t\t<li>{{item.line_2}}</li>
\t\t\t\t\t<li>{{item.line_3}}</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-auto\">
\t\t\t\t<p class=\"start-price\"><b> <span class=\"price main-color\"><span>SR</span>{{item.price}}</span> 
\t\t\t\t<span class=\"per\">شهرياً</span></b></p>
\t\t\t</div>
\t\t</div>
\t\t<br/><br/>
\t\t<p>{{item.description}}</p>
\t</div>
</section>", "/var/www/html/workspace/syaq/themes/syaq/pages/package.htm", "");
    }
}
