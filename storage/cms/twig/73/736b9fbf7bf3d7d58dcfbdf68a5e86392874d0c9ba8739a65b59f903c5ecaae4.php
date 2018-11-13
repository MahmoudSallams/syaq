<?php

/* /var/www/html/workspace/syaq/themes/syaq/pages/services.htm */
class __TwigTemplate_57d72a653399700bf761052fb91764c1479395131f11362405861c1b7a060f89 extends Twig_Template
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
\t\t\t<h3>الخدمات</h3>
\t\t</div>
\t</div>
</section>
<br/><br/>
<div class=\"container\">
\t";
        // line 10
        $context["items"] = twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "items", array());
        // line 11
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "\t<h4 class=\"text-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</h4>
\t<div class=\"row mb-5\">
\t\t<div class=\"col-12 col-md-4 order-md-12\">
\t\t\t";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "icon", array()), "path", array())) {
                // line 16
                echo "\t\t\t<img class=\"img-fluid\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "icon", array()), "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "\" />
\t\t\t";
            }
            // line 18
            echo "\t\t</div>
\t\t
\t\t<div class=\"col-12 col-md-8 order-md-1\">
\t\t\t<p>";
            // line 21
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", array()), "html", null, true));
            echo "</p>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  63 => 21,  58 => 18,  50 => 16,  48 => 15,  41 => 12,  36 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t\t\t<h3>الخدمات</h3>
\t\t</div>
\t</div>
</section>
<br/><br/>
<div class=\"container\">
\t{% set items = items.items %}
\t{% for item in items %}
\t<h4 class=\"text-warning\">{{item.title}}</h4>
\t<div class=\"row mb-5\">
\t\t<div class=\"col-12 col-md-4 order-md-12\">
\t\t\t{% if item.icon.path %}
\t\t\t<img class=\"img-fluid\" src=\"{{item.icon.path}}\" alt=\"{{item.title}}\" />
\t\t\t{% endif %}
\t\t</div>
\t\t
\t\t<div class=\"col-12 col-md-8 order-md-1\">
\t\t\t<p>{{item.description | nl2br}}</p>
\t\t</div>
\t</div>
\t{% endfor %}
</div>", "/var/www/html/workspace/syaq/themes/syaq/pages/services.htm", "");
    }
}
