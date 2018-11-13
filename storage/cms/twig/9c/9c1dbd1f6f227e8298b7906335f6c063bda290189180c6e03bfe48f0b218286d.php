<?php

/* /var/www/html/workspace/syaq/themes/syaq/partials/footer.htm */
class __TwigTemplate_2b978aee3007764c2b11a68122f5727e734cac531c455a4298e05a25e7c52458 extends Twig_Template
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
        echo "<section class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 col-lg-4 m-b-mob-30 m-b-tab-30\">
\t\t\t\t<h4 class=\"footer-title\">";
        // line 5
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["footer_about"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["key"] ?? null) : null), "html", null, true);
        echo "</h4>
\t\t\t\t<p>";
        // line 6
        echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["footer_about"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["value"] ?? null) : null), "html", null, true);
        echo "</p>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li><i class=\"fa fa-envelope ml-3\"></i>";
        // line 8
        echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["contact_ksa_email"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["value"] ?? null) : null), "html", null, true);
        echo "</li>
\t\t\t\t\t<li class=\"phone\"><i class=\"fa fa-phone ml-3\"></i><span style=\"direction: ltr;display: inline-block;\">";
        // line 9
        echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["contact_ksa_phone"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["value"] ?? null) : null), "html", null, true);
        echo "</span></li>
\t\t\t\t\t<li><i class=\"fa fa-home ml-3\"></i>";
        // line 10
        echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["contact_ksa_address"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["value"] ?? null) : null), "html", null, true);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-lg-2 m-b-mob-30 m-b-tab-30\">
\t\t\t\t<h4 class=\"footer-title\">روابط اخرى</h4>
\t\t\t\t";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 16
            echo "\t\t\t\t    <ul class=\"list-unstyled\">
\t\t\t\t        ";
            // line 17
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "\t\t\t\t    </ul>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-lg-2 m-b-mob-30 m-b-tab-30\">
\t\t\t\t<h4 class=\"footer-title\">&nbsp;</h4>
\t\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu2"] ?? null), "menuItems", array())) {
            // line 24
            echo "\t\t\t\t    <ul class=\"list-unstyled\">
\t\t\t\t        ";
            // line 25
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu2"] ?? null), "menuItems", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu2"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "\t\t\t\t    </ul>
\t\t\t\t";
        }
        // line 28
        echo "
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t<h4 class=\"footer-title\">الشبكات الاجتماعية</h4>
\t\t\t\t<ul class=\"list-inline footer-social text-center\">
\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["footer_links_facebook"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["value"] ?? null) : null), "html", null, true);
        echo "\" target=\"_blank\" class=\"facebook\"><i class=\"fab fa-facebook-f\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["footer_links_twitter"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["value"] ?? null) : null), "html", null, true);
        echo "\" target=\"_blank\" class=\"twitter\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["footer_links_tumblr"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["value"] ?? null) : null), "html", null, true);
        echo "\" target=\"_blank\" class=\"tumblr\"><i class=\"fab fa-tumblr\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["footer_links_google"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["value"] ?? null) : null), "html", null, true);
        echo "\" target=\"_blank\" class=\"googleplus\"><i class=\"fab fa-google-plus\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<div class=\"copyright\">
\t<div class=\"container\">
\t\t<p>جميع الحقوق محفوظة لسياق 2018<br>
\t\tتصميم و برمجة <a href=\"http://www.worcbox.com\" target=\"_blank\" style=\"color:#FFFFFF; font-weight:normal\">worcbox</a></p>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  103 => 36,  99 => 35,  95 => 34,  87 => 28,  83 => 26,  78 => 25,  75 => 24,  73 => 23,  68 => 20,  64 => 18,  59 => 17,  56 => 16,  54 => 15,  46 => 10,  42 => 9,  38 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 col-lg-4 m-b-mob-30 m-b-tab-30\">
\t\t\t\t<h4 class=\"footer-title\">{{ footer_about['key'] }}</h4>
\t\t\t\t<p>{{ footer_about['value'] }}</p>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li><i class=\"fa fa-envelope ml-3\"></i>{{ contact_ksa_email['value'] }}</li>
\t\t\t\t\t<li class=\"phone\"><i class=\"fa fa-phone ml-3\"></i><span style=\"direction: ltr;display: inline-block;\">{{ contact_ksa_phone['value'] }}</span></li>
\t\t\t\t\t<li><i class=\"fa fa-home ml-3\"></i>{{ contact_ksa_address['value'] }}</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-lg-2 m-b-mob-30 m-b-tab-30\">
\t\t\t\t<h4 class=\"footer-title\">روابط اخرى</h4>
\t\t\t\t{% if staticMenu.menuItems %}
\t\t\t\t    <ul class=\"list-unstyled\">
\t\t\t\t        {% partial staticMenu ~ \"::items\" items=staticMenu.menuItems %}
\t\t\t\t    </ul>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 col-lg-2 m-b-mob-30 m-b-tab-30\">
\t\t\t\t<h4 class=\"footer-title\">&nbsp;</h4>
\t\t\t\t{% if staticMenu2.menuItems %}
\t\t\t\t    <ul class=\"list-unstyled\">
\t\t\t\t        {% partial staticMenu2 ~ \"::items\" items=staticMenu2.menuItems %}
\t\t\t\t    </ul>
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t<h4 class=\"footer-title\">الشبكات الاجتماعية</h4>
\t\t\t\t<ul class=\"list-inline footer-social text-center\">
\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"{{ footer_links_facebook['value'] }}\" target=\"_blank\" class=\"facebook\"><i class=\"fab fa-facebook-f\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"{{ footer_links_twitter['value'] }}\" target=\"_blank\" class=\"twitter\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"{{ footer_links_tumblr['value'] }}\" target=\"_blank\" class=\"tumblr\"><i class=\"fab fa-tumblr\"></i></a></li>
\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"{{ footer_links_google['value'] }}\" target=\"_blank\" class=\"googleplus\"><i class=\"fab fa-google-plus\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<div class=\"copyright\">
\t<div class=\"container\">
\t\t<p>جميع الحقوق محفوظة لسياق 2018<br>
\t\tتصميم و برمجة <a href=\"http://www.worcbox.com\" target=\"_blank\" style=\"color:#FFFFFF; font-weight:normal\">worcbox</a></p>
\t</div>
</div>", "/var/www/html/workspace/syaq/themes/syaq/partials/footer.htm", "");
    }
}
