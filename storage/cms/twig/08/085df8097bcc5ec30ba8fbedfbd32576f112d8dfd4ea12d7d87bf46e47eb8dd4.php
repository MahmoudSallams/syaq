<?php

/* /var/www/html/workspace/syaq/themes/syaq/pages/home.htm */
class __TwigTemplate_dccb165ed1c9afe17de0de147ff1523b89cbc3249c10f7e27c4ffee2ac7e7ec2 extends Twig_Template
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
        echo "<section class=\"main-banner\">
    <div class=\"container\">
        <h1>مرحباً بكم في  سياق</h1>
        <p >هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم</p>
        <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("request");
        echo "\" class=\"btn btn-primary\">اطلب محتوى</a>
    </div>
</section>
<section class=\"section white-bg\">
    <div class=\"container\">
        <h2>ما يميزنا</h2>
        <div class=\"row why-us\">
        \t";
        // line 12
        $context["items"] = twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "items", array());
        // line 13
        echo "        \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "\t            <div class=\"col-md-4 why-us-item\">
\t                <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "icon", array()), "path", array()), "html", null, true);
            echo "\">
\t                
\t                <h3>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</h3>
\t                <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", array()), "html", null, true);
            echo "</p>
\t            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
    </div>
</section>
<section class=\"section light-bg\">
    <div class=\"container\">
\t\t<div class=\"items-services-parent row\">
\t\t    <div class=\"items-services-first col-12 col-md\">
\t\t        <span>كيف يعمل سياق؟</span>
\t\t        <br/>
\t\t        <span class=\"text-orange\">احصل على</span>
\t\t        <br/>
\t\t        <span class=\"text-big\">محتوى عالي الجودة لموقعك أو مدونتك</span>
\t\t        <br/>
\t\t        <span class=\"text-orange\">ثلاث خطوات بسيطة</span>
\t\t    </div>
\t\t    <div class=\"items-services-item col-12 col-md-auto\">
\t\t        <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/imgs/schedule.png");
        echo "\" alt=\"\"/>
\t\t        <h3>اختر نوع المحتوى</h3>
\t\t        <p>سواءً تريد ان محتوى لمدونتك، لموقعك أو تفضل المقالات لأغراض التسويق</p>
\t\t    </div>
\t\t    <div class=\"items-services-arrow align-self-center d-none d-sm-block\">
\t\t        <i class=\"fa fa-chevron-left\"></i>
\t\t        <i class=\"fa fa-chevron-done\"></i>
\t\t    </div>
\t\t    <div class=\"items-services-item col-12 col-md-auto\">
\t\t        <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/imgs/loan-money.png");
        echo "\" alt=\"\"/>
\t\t        <h3>قم بالدفع بسهولة</h3>
\t\t        <p>يمكنك الدفع الكترونياً بسهولة و يسر </p>
\t\t    </div>
\t\t    <div class=\"items-services-arrow align-self-center d-none d-sm-block\">
\t\t        <i class=\"fa fa-chevron-left\"></i>
\t\t        <i class=\"fa fa-chevron-done\"></i>
\t\t    </div>
\t\t    <div class=\"items-services-item col-12 col-md-auto\">
\t\t        <img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/imgs/approved.png");
        echo "\" alt=\"\"/>
\t\t        <h3>قم بالدفع بسهولة</h3>
\t\t        <p>راجع المحتوى و اعتمده  سياق المحترف مع فريق </p>
\t\t    </div>
\t\t</div>
\t</div>
</section>
<section class=\"section other-features\">
\t<div class=\"container\">
\t\t<h2>خدماتنا</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 tabs\">
\t\t\t\t<ul class=\"nav nav-tabs cust\">
\t\t\t\t\t";
        // line 68
        $context["tabs"] = twig_get_attribute($this->env, $this->source, ($context["tabs"] ?? null), "items", array());
        // line 69
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 70
            echo "\t\t\t\t\t<li class=\"\"><a class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) == 1)) ? ("active") : (""));
            echo "\" data-toggle=\"tab\" href=\"#feature-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"false\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "title", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t\t<br/><br/>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"tab-content \">
\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 80
            echo "\t\t\t\t\t<div id=\"feature-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", array()), "html", null, true);
            echo "\" class=\"tab-pane fade ";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) == 1)) ? ("active show") : (""));
            echo "\">
\t\t\t\t\t\t<div class=\"row reordering justify-content-between\">
\t\t\t\t\t\t\t<div class=\"col-sm-5  reordering-2\">
\t\t\t\t\t\t\t\t<p>";
            // line 83
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "description", array()), "html", null, true));
            echo "</p> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-5 reordering-1 m-b-mob-30\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "icon", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid img-left\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section pricing-table light-bg\">
\t<div class=\"container\">
\t\t<h2>باقاتنا</h2>
\t\t<div class=\"row packages\">
\t\t\t";
        // line 101
        $context["items"] = twig_get_attribute($this->env, $this->source, ($context["packages"] ?? null), "items", array());
        // line 102
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 103
            echo "\t\t\t  <div class=\"col-sm-4\">
\t\t\t\t<div class=\"price-table second-bg\">
\t\t\t\t<p class=\"p-l title main-color2\"><b>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "title", array()), "html", null, true);
            echo "</b></p>
\t\t\t\t<p class=\"start-price\"><b> <span class=\"price main-color\"><span>SR</span>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "price", array()), "html", null, true);
            echo "</span> 
\t\t\t\t<span class=\"per\">شهرياً</span></b></p>
\t\t\t\t<p class=\"p-l s5\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "line_1", array()), "html", null, true);
            echo "</p>
\t\t\t\t<p class=\"p-l s5\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "line_2", array()), "html", null, true);
            echo "</p>
\t\t\t\t<p class=\"p-l s5\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "line_3", array()), "html", null, true);
            echo "</p>
\t\t\t\t<a href=\"";
            // line 111
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("package", array("id" => twig_get_attribute($this->env, $this->source, $context["package"], "id", array())));
            echo " \" class=\"btn\">ابدأ الان</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t\t</div>
\t</div>
</section>
<div class=\"guaratess\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center \">
\t\t\t<div class=\"col-sm-6 \">
\t\t\t\t<h1 class=\"\">يمكنك ايضاً تفصيل المحتوى الخاص بك بما يناسب احتياجاتك و ميزانيتك </h1>
\t\t\t\t<p>اطلب محتوى الان من خلال شاشة طلب المحتوى والتى ستساعدك على ادارة الطلب الخاص بك بسهولة</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 vertio text-center\">
\t\t\t\t<a href=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\" class=\"btn\">انشاء حساب جديد</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 126,  280 => 115,  270 => 111,  266 => 110,  262 => 109,  258 => 108,  253 => 106,  249 => 105,  245 => 103,  240 => 102,  238 => 101,  226 => 91,  207 => 86,  201 => 83,  192 => 80,  175 => 79,  166 => 72,  145 => 70,  127 => 69,  125 => 68,  109 => 55,  97 => 46,  85 => 37,  67 => 21,  58 => 18,  54 => 17,  49 => 15,  46 => 14,  41 => 13,  39 => 12,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"main-banner\">
    <div class=\"container\">
        <h1>مرحباً بكم في  سياق</h1>
        <p >هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم</p>
        <a href=\"{{'request' | page}}\" class=\"btn btn-primary\">اطلب محتوى</a>
    </div>
</section>
<section class=\"section white-bg\">
    <div class=\"container\">
        <h2>ما يميزنا</h2>
        <div class=\"row why-us\">
        \t{% set items = items.items %}
        \t{% for item in items %}
\t            <div class=\"col-md-4 why-us-item\">
\t                <img src=\"{{item.icon.path}}\">
\t                
\t                <h3>{{item.title}}</h3>
\t                <p>{{item.description}}</p>
\t            </div>
            {% endfor%}
        </div>
    </div>
</section>
<section class=\"section light-bg\">
    <div class=\"container\">
\t\t<div class=\"items-services-parent row\">
\t\t    <div class=\"items-services-first col-12 col-md\">
\t\t        <span>كيف يعمل سياق؟</span>
\t\t        <br/>
\t\t        <span class=\"text-orange\">احصل على</span>
\t\t        <br/>
\t\t        <span class=\"text-big\">محتوى عالي الجودة لموقعك أو مدونتك</span>
\t\t        <br/>
\t\t        <span class=\"text-orange\">ثلاث خطوات بسيطة</span>
\t\t    </div>
\t\t    <div class=\"items-services-item col-12 col-md-auto\">
\t\t        <img src=\"{{'assets/imgs/schedule.png'| theme}}\" alt=\"\"/>
\t\t        <h3>اختر نوع المحتوى</h3>
\t\t        <p>سواءً تريد ان محتوى لمدونتك، لموقعك أو تفضل المقالات لأغراض التسويق</p>
\t\t    </div>
\t\t    <div class=\"items-services-arrow align-self-center d-none d-sm-block\">
\t\t        <i class=\"fa fa-chevron-left\"></i>
\t\t        <i class=\"fa fa-chevron-done\"></i>
\t\t    </div>
\t\t    <div class=\"items-services-item col-12 col-md-auto\">
\t\t        <img src=\"{{'assets/imgs/loan-money.png'| theme}}\" alt=\"\"/>
\t\t        <h3>قم بالدفع بسهولة</h3>
\t\t        <p>يمكنك الدفع الكترونياً بسهولة و يسر </p>
\t\t    </div>
\t\t    <div class=\"items-services-arrow align-self-center d-none d-sm-block\">
\t\t        <i class=\"fa fa-chevron-left\"></i>
\t\t        <i class=\"fa fa-chevron-done\"></i>
\t\t    </div>
\t\t    <div class=\"items-services-item col-12 col-md-auto\">
\t\t        <img src=\"{{'assets/imgs/approved.png'| theme}}\" alt=\"\"/>
\t\t        <h3>قم بالدفع بسهولة</h3>
\t\t        <p>راجع المحتوى و اعتمده  سياق المحترف مع فريق </p>
\t\t    </div>
\t\t</div>
\t</div>
</section>
<section class=\"section other-features\">
\t<div class=\"container\">
\t\t<h2>خدماتنا</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 tabs\">
\t\t\t\t<ul class=\"nav nav-tabs cust\">
\t\t\t\t\t{% set tabs = tabs.items %}
\t\t\t\t\t{% for tab in tabs %}
\t\t\t\t\t<li class=\"\"><a class=\"{{loop.index\t== 1?'active':''}}\" data-toggle=\"tab\" href=\"#feature-{{tab.id}}\" aria-expanded=\"false\">{{tab.title}}</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t\t<br/><br/>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"tab-content \">
\t\t\t\t\t{% for tab in tabs %}
\t\t\t\t\t<div id=\"feature-{{tab.id}}\" class=\"tab-pane fade {{loop.index\t== 1?'active show':''}}\">
\t\t\t\t\t\t<div class=\"row reordering justify-content-between\">
\t\t\t\t\t\t\t<div class=\"col-sm-5  reordering-2\">
\t\t\t\t\t\t\t\t<p>{{tab.description | nl2br}}</p> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-5 reordering-1 m-b-mob-30\">
\t\t\t\t\t\t\t\t<img src=\"{{tab.icon.path}}\" alt=\"\" class=\"img-fluid img-left\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section pricing-table light-bg\">
\t<div class=\"container\">
\t\t<h2>باقاتنا</h2>
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
</section>
<div class=\"guaratess\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center \">
\t\t\t<div class=\"col-sm-6 \">
\t\t\t\t<h1 class=\"\">يمكنك ايضاً تفصيل المحتوى الخاص بك بما يناسب احتياجاتك و ميزانيتك </h1>
\t\t\t\t<p>اطلب محتوى الان من خلال شاشة طلب المحتوى والتى ستساعدك على ادارة الطلب الخاص بك بسهولة</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6 vertio text-center\">
\t\t\t\t<a href=\"{{ 'login' | page }}\" class=\"btn\">انشاء حساب جديد</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "/var/www/html/workspace/syaq/themes/syaq/pages/home.htm", "");
    }
}
