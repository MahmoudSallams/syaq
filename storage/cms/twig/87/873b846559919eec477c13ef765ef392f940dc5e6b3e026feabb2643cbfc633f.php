<?php

/* /var/www/html/workspace/syaq/themes/syaq/layouts/default.htm */
class __TwigTemplate_5a16a54a04acc6054755e47fb689272a834c25e12d73f7046d04db4dabebd76c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"rtl\" lang=\"ar\">
    <head>
    \t<title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/fontawesome-all.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
         <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
         <link href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/syaq.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    </head>
    <body>
        ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 14
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "        <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/js/jquery-3.3.1.min.js", 1 => "assets/js/popper.min.js", 2 => "assets/js/bootstrap.min.js", 3 => "assets/js/syaq.js"));
        echo "\"></script>
        ";
        // line 16
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 17
        echo "         ";
        $context['__placeholder_bodyend_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('bodyend', $context['__placeholder_bodyend_default_contents']);
        unset($context['__placeholder_bodyend_default_contents']);        // line 18
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  72 => 17,  65 => 16,  60 => 15,  55 => 14,  52 => 13,  48 => 12,  42 => 9,  38 => 8,  34 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html dir=\"rtl\" lang=\"ar\">
    <head>
    \t<title>{{this.page.title}}</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link href=\"{{'assets/css/fontawesome-all.min.css' |theme}}\" rel=\"stylesheet\" type=\"text/css\"/>
         <link href=\"{{'assets/css/main.css' |theme}}\" rel=\"stylesheet\" type=\"text/css\"/>
         <link href=\"{{'assets/css/syaq.css' |theme}}\" rel=\"stylesheet\" type=\"text/css\"/>
    </head>
    <body>
        {% partial \"header\" %}
        {% page %}
        {% partial \"footer\" %}
        <script src=\"{{[ 'assets/js/jquery-3.3.1.min.js','assets/js/popper.min.js','assets/js/bootstrap.min.js','assets/js/syaq.js'] | theme}}\"></script>
        {% framework extras %}
         {% placeholder bodyend %}
    </body>
</html>", "/var/www/html/workspace/syaq/themes/syaq/layouts/default.htm", "");
    }
}
