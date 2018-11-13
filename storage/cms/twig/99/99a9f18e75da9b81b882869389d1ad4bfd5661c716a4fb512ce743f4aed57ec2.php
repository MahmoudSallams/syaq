<?php

/* /var/www/html/workspace/syaq/themes/syaq/partials/header.htm */
class __TwigTemplate_c50f61826382b6abc308b4eb06dc2109b11f9d9a8439b8ac564fc5c6d9de71c3 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-lg ";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) != "home")) ? ("navbar-dark bg-dark") : ("navbar-light"));
        echo "  \">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img style=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) != "home")) ? ("filter: brightness(0) invert(1);") : (""));
        echo "\" src='";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/imgs/logo-syaq.png");
        echo "' /></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        \t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 10
            echo "\t\t\t    <ul class=\"navbar-nav mr-auto\">
\t\t\t    \t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "\t\t\t    \t
\t\t\t    \t\t<li  class=\"nav-item ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "code", array()), "html", null, true);
                echo "-nav-item  ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                echo " \">
\t\t\t    \t\t\t<a class=\"nav-link ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "</a>
\t\t\t    \t\t</li>
\t\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t    \t";
            if (($context["user"] ?? null)) {
                // line 18
                echo "\t\t\t\t    \t<li class=\"nav-item\">
\t\t\t\t\t\t\t    <a class=\"nav-link\"  href=\"";
                // line 19
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
                echo "\" data-request-data=\"redirect: '/'\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
                echo "</a>
\t\t\t\t    \t</li>
\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t    \t<li class=\"nav-item\">
\t\t\t    \t\t";
            // line 23
            if (($context["user"] ?? null)) {
                // line 24
                echo "\t\t\t\t\t\t    <a class=\"nav-link\" data-request=\"onLogout\" href=\"#\" data-request-data=\"redirect: '/'\">خروج</a>
\t\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\t    <a class=\"nav-link\" href='";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
                echo "'>دخول / سجل الان</a>
\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t    \t</li>
\t\t\t    </ul>
\t\t\t";
        }
        // line 31
        echo "\t\t\t
\t\t\t
            <!-- <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">الرئيسية</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">من نحن</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">الباقات</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">الخدمات الخاصة</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">تواصل معنا</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">دخول / سجل الان</a>
                </li>
                <li class=\"nav-item nav-item-order\">
                    <a class=\"btn btn-warning\" href=\"#\">طلب محتوى <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul> -->
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  104 => 28,  98 => 26,  94 => 24,  92 => 23,  89 => 22,  81 => 19,  78 => 18,  75 => 17,  62 => 14,  54 => 13,  51 => 12,  47 => 11,  44 => 10,  42 => 9,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg {{this.page.id!=\"home\"?\"navbar-dark bg-dark\":\"navbar-light\"}}  \">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ 'home' | page }}\"><img style=\"{{this.page.id!=\"home\"?\"filter: brightness(0) invert(1);\":\"\"}}\" src='{{'assets/imgs/logo-syaq.png'| theme}}' /></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        \t{% if staticMenu.menuItems %}
\t\t\t    <ul class=\"navbar-nav mr-auto\">
\t\t\t    \t{% for item in staticMenu.menuItems %}
\t\t\t    \t
\t\t\t    \t\t<li  class=\"nav-item {{item.code}}-nav-item  {{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'child-active' : '' }} \">
\t\t\t    \t\t\t<a class=\"nav-link {{ item.viewBag.cssClass }}\" href=\"{{ item.url }}\">{{ item.title }}</a>
\t\t\t    \t\t</li>
\t\t\t    \t{% endfor %}
\t\t\t    \t{% if user %}
\t\t\t\t    \t<li class=\"nav-item\">
\t\t\t\t\t\t\t    <a class=\"nav-link\"  href=\"{{'account' | page}}\" data-request-data=\"redirect: '/'\">{{ user.name }}</a>
\t\t\t\t    \t</li>
\t\t\t\t\t{% endif %}
\t\t\t    \t<li class=\"nav-item\">
\t\t\t    \t\t{% if user %}
\t\t\t\t\t\t    <a class=\"nav-link\" data-request=\"onLogout\" href=\"#\" data-request-data=\"redirect: '/'\">خروج</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t    <a class=\"nav-link\" href='{{ 'login' | page }}'>دخول / سجل الان</a>
\t\t\t\t\t\t{% endif %}
\t\t\t    \t</li>
\t\t\t    </ul>
\t\t\t{% endif %}
\t\t\t
\t\t\t
            <!-- <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">الرئيسية</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">من نحن</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">الباقات</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">الخدمات الخاصة</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">تواصل معنا</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">دخول / سجل الان</a>
                </li>
                <li class=\"nav-item nav-item-order\">
                    <a class=\"btn btn-warning\" href=\"#\">طلب محتوى <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul> -->
        </div>
    </div>
</nav>", "/var/www/html/workspace/syaq/themes/syaq/partials/header.htm", "");
    }
}
