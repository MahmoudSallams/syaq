<?php

/* /var/www/html/workspace/syaq/themes/syaq/pages/request.htm */
class __TwigTemplate_8c66cdc2e383ddff4a93ec4c8ea5cd68fd0aa2b8d40dc81d4dbb9929aec09ac7 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("orderForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/pages/request.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'orderForm' %}", "/var/www/html/workspace/syaq/themes/syaq/pages/request.htm", "");
    }
}
