<?php

/* /var/www/html/workspace/syaq/themes/syaq/pages/team.htm */
class __TwigTemplate_c814acd3adc6300fafc3c41437373d81f9a9b1c15f280f7cecf25598ab187d44 extends Twig_Template
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
        $context["items"] = twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "items", array());
        // line 2
        echo "<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t\t\t<h3>فريق العمل</h3>
\t\t</div>
\t</div>
</section>
<br/><br/>
<div class=\"container\">
\t<div class=\"row\">
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "\t\t<div class=\"col-12 col-md-4\">
\t\t\t<div class=\"team card mb-4\">
\t\t\t\t<img class=\"card-img-top\" src=\" ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "icon", array()), "thumb", array(0 => 300, 1 => 300, 2 => "crop"), "method"), "html", null, true);
            echo "\" />
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h3 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t<p class=\"card-text\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/pages/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  54 => 18,  50 => 17,  45 => 15,  41 => 13,  37 => 12,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set items = items.items %}
<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t\t\t<h3>فريق العمل</h3>
\t\t</div>
\t</div>
</section>
<br/><br/>
<div class=\"container\">
\t<div class=\"row\">
\t\t{% for item in items %}
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<div class=\"team card mb-4\">
\t\t\t\t<img class=\"card-img-top\" src=\" {{item.icon.thumb(300,300,'crop')}}\" />
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h3 class=\"card-title\">{{item.title}}</h3>
\t\t\t\t\t<p class=\"card-text\">{{item.description}}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t</div>
</div>", "/var/www/html/workspace/syaq/themes/syaq/pages/team.htm", "");
    }
}
