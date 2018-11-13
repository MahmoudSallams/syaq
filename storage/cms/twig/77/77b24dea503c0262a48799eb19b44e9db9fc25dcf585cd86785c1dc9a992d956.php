<?php

/* /var/www/html/workspace/syaq/themes/syaq/pages/login.htm */
class __TwigTemplate_8039c3c361ec3b68372c6bc5e08aeb816329208ca944f6d45b8ebdae164d3063 extends Twig_Template
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
\t \t\t<h3>دخول / سجل الان</h3>
\t\t</div>
\t</div>
</section>
<br/><br/>
<div class=\"container\">
\t";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("sociallogin"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "\t
\t<br/><br/>
\t<div id=\"login-error\" class=\"alert alert-danger d-none\"></div>
\t";
        // line 14
        if ( !($context["user"] ?? null)) {
            // line 15
            echo "
    <div class=\"row\">

        <div class=\"col-md-6 \">
            <h3>دخول</h3>
            
            <form
\t\t\t    data-request=\"onSignin\" novalidate  >
\t\t\t    <div class=\"form-group\">
\t\t\t        <label for=\"userSigninLogin\">الايميل</label>
\t\t\t        <input
\t\t\t            name=\"login\"
\t\t\t            type=\"text\"
\t\t\t            class=\"form-control\"
\t\t\t            id=\"userSigninLogin\"
\t\t\t             />
\t\t\t    </div>
\t\t\t
\t\t\t    <div class=\"form-group\">
\t\t\t        <label for=\"userSigninPassword\">كلمة المرور</label>
\t\t\t        <input
\t\t\t            name=\"password\"
\t\t\t            type=\"password\"
\t\t\t            class=\"form-control\"
\t\t\t            id=\"userSigninPassword\"
\t\t\t            />
\t\t\t    </div>
\t\t\t
\t\t\t    <button type=\"submit\" class=\"btn btn-primary\">دخول</button>
\t\t\t    او سجل عن طريق
\t\t\t    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["social_login_links"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["link"]) {
                // line 46
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\"><i class=\"fab fa-";
                echo ((($context["name"] == "Facebook")) ? ("facebook") : ("twitter"));
                echo "\"></i></a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t<br/><br/>
\t\t\t\t<a href=\"";
            // line 49
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("forgot-password");
            echo "\">نسيت كلمة المرور؟</a>
\t\t\t</form>
\t\t\t
\t\t\t<br />
\t\t\t
        </div>

        <div class=\"col-md-6 border-right\">
            <h3>تسجيل حساب جديد</h3>
\t\t    <form
\t\t        data-request=\"onRegister\" novalidate>
\t\t        <div class=\"form-group\">
\t\t            <label for=\"registerName\">الاسم</label>
\t\t            <input
\t\t                name=\"name\"
\t\t                type=\"text\"
\t\t                class=\"form-control\"
\t\t                id=\"registerName\" />
\t\t        </div>
\t\t
\t\t        <div class=\"form-group\">
\t\t            <label for=\"registerEmail\">الايميل</label>
\t\t            <input
\t\t                name=\"email\"
\t\t                type=\"email\"
\t\t                class=\"form-control\"
\t\t                id=\"registerEmail\"
\t\t                />
\t\t        </div>
\t
\t\t
\t\t        <div class=\"form-group\">
\t\t            <label for=\"registerPassword\">كلمة المرور</label>
\t\t            <input
\t\t                name=\"password\"
\t\t                type=\"password\"
\t\t                class=\"form-control\"
\t\t                id=\"registerPassword\" />
\t\t        </div>
\t\t
\t\t        <button type=\"submit\" class=\"btn btn-primary\">تسجيل</button>
\t\t    </form>
        </div>

    </div>

";
        } else {
            // line 96
            echo "
    ";
            // line 97
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 98
            echo "
    ";
            // line 99
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 100
            echo "
    ";
            // line 101
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 102
            echo "
";
        }
        // line 104
        echo "<br/><br/>
</div>
";
        // line 106
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('bodyend'        );
        // line 107
        echo "<script>
    \$(window).on('ajaxErrorMessage', function(event, message){
    \tif(message.search(\"valid email address\") > -1){
    \t\tmessage= 'الايميل غير صحيح';
    \t}else if(message.search('The login field is required') > -1){
    \t\tmessage= \"برجاء ادخال الايميل\";
    \t}else if(message.search('The email field is required') > -1){
    \t\tmessage= \"برجاء ادخال الايميل\";
    \t}else if(message.search('A user was not found with the given credentials') > -1){
    \t\tmessage= \"بيانات الدخول غير صحيحة\"
    \t}else if(message.search(' text credentials however hashed') > -1){
    \t\tmessage= \"بيانات الدخول غير صحيحة\"
    \t}else if(message.search('The password field is required') > -1){
    \t\tmessage= \"برجاء ادخال كلمة المرور\";
    \t}else if(message.search('The name field is required') > -1){
    \t\tmessage= \"برجاء ادخال الاسم\";
    \t}else if(message.search('The password must be between') > -1){
    \t\tmessage= \"الايميل يجب ان يزيد عن 6 احرف\";
    \t}else if(message.search('The email has already been taken.') > -1){
    \t\tmessage= \"الايميل مستخدم من قبل\";
    \t}else if(message.search('Invalid activation code supplied.') > -1){
    \t\tmessage= \"رمز التعريف غير صحيح\";
    \t}
    \t
    
    \t\$('#login-error').removeClass('d-none').text(message);


        // This can be any custom JavaScript you want
        //alert('Something bad happened, mate, here it is: ' + message);

        // This will stop the default alert() message
        event.preventDefault();

    })
</script>
";
        // line 106
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 106,  176 => 107,  174 => 106,  170 => 104,  166 => 102,  162 => 101,  159 => 100,  155 => 99,  152 => 98,  148 => 97,  145 => 96,  95 => 49,  92 => 48,  81 => 46,  77 => 45,  45 => 15,  43 => 14,  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t \t\t<h3>دخول / سجل الان</h3>
\t\t</div>
\t</div>
</section>
<br/><br/>
<div class=\"container\">
\t{% component 'sociallogin' %}
\t
\t<br/><br/>
\t<div id=\"login-error\" class=\"alert alert-danger d-none\"></div>
\t{% if not user %}

    <div class=\"row\">

        <div class=\"col-md-6 \">
            <h3>دخول</h3>
            
            <form
\t\t\t    data-request=\"onSignin\" novalidate  >
\t\t\t    <div class=\"form-group\">
\t\t\t        <label for=\"userSigninLogin\">الايميل</label>
\t\t\t        <input
\t\t\t            name=\"login\"
\t\t\t            type=\"text\"
\t\t\t            class=\"form-control\"
\t\t\t            id=\"userSigninLogin\"
\t\t\t             />
\t\t\t    </div>
\t\t\t
\t\t\t    <div class=\"form-group\">
\t\t\t        <label for=\"userSigninPassword\">كلمة المرور</label>
\t\t\t        <input
\t\t\t            name=\"password\"
\t\t\t            type=\"password\"
\t\t\t            class=\"form-control\"
\t\t\t            id=\"userSigninPassword\"
\t\t\t            />
\t\t\t    </div>
\t\t\t
\t\t\t    <button type=\"submit\" class=\"btn btn-primary\">دخول</button>
\t\t\t    او سجل عن طريق
\t\t\t    {% for name, link in social_login_links %}
\t\t\t\t\t<a href=\"{{ link }}\"><i class=\"fab fa-{{name==\"Facebook\"?\"facebook\":\"twitter\"}}\"></i></a>
\t\t\t\t{% endfor %}
\t\t\t\t<br/><br/>
\t\t\t\t<a href=\"{{'forgot-password' | page}}\">نسيت كلمة المرور؟</a>
\t\t\t</form>
\t\t\t
\t\t\t<br />
\t\t\t
        </div>

        <div class=\"col-md-6 border-right\">
            <h3>تسجيل حساب جديد</h3>
\t\t    <form
\t\t        data-request=\"onRegister\" novalidate>
\t\t        <div class=\"form-group\">
\t\t            <label for=\"registerName\">الاسم</label>
\t\t            <input
\t\t                name=\"name\"
\t\t                type=\"text\"
\t\t                class=\"form-control\"
\t\t                id=\"registerName\" />
\t\t        </div>
\t\t
\t\t        <div class=\"form-group\">
\t\t            <label for=\"registerEmail\">الايميل</label>
\t\t            <input
\t\t                name=\"email\"
\t\t                type=\"email\"
\t\t                class=\"form-control\"
\t\t                id=\"registerEmail\"
\t\t                />
\t\t        </div>
\t
\t\t
\t\t        <div class=\"form-group\">
\t\t            <label for=\"registerPassword\">كلمة المرور</label>
\t\t            <input
\t\t                name=\"password\"
\t\t                type=\"password\"
\t\t                class=\"form-control\"
\t\t                id=\"registerPassword\" />
\t\t        </div>
\t\t
\t\t        <button type=\"submit\" class=\"btn btn-primary\">تسجيل</button>
\t\t    </form>
        </div>

    </div>

{% else %}

    {% partial account ~ '::activation_check' %}

    {% partial account ~ '::update' %}

    {% partial account ~ '::deactivate_link' %}

{% endif %}
<br/><br/>
</div>
{% put bodyend %}
<script>
    \$(window).on('ajaxErrorMessage', function(event, message){
    \tif(message.search(\"valid email address\") > -1){
    \t\tmessage= 'الايميل غير صحيح';
    \t}else if(message.search('The login field is required') > -1){
    \t\tmessage= \"برجاء ادخال الايميل\";
    \t}else if(message.search('The email field is required') > -1){
    \t\tmessage= \"برجاء ادخال الايميل\";
    \t}else if(message.search('A user was not found with the given credentials') > -1){
    \t\tmessage= \"بيانات الدخول غير صحيحة\"
    \t}else if(message.search(' text credentials however hashed') > -1){
    \t\tmessage= \"بيانات الدخول غير صحيحة\"
    \t}else if(message.search('The password field is required') > -1){
    \t\tmessage= \"برجاء ادخال كلمة المرور\";
    \t}else if(message.search('The name field is required') > -1){
    \t\tmessage= \"برجاء ادخال الاسم\";
    \t}else if(message.search('The password must be between') > -1){
    \t\tmessage= \"الايميل يجب ان يزيد عن 6 احرف\";
    \t}else if(message.search('The email has already been taken.') > -1){
    \t\tmessage= \"الايميل مستخدم من قبل\";
    \t}else if(message.search('Invalid activation code supplied.') > -1){
    \t\tmessage= \"رمز التعريف غير صحيح\";
    \t}
    \t
    
    \t\$('#login-error').removeClass('d-none').text(message);


        // This can be any custom JavaScript you want
        //alert('Something bad happened, mate, here it is: ' + message);

        // This will stop the default alert() message
        event.preventDefault();

    })
</script>
{% endput %}", "/var/www/html/workspace/syaq/themes/syaq/pages/login.htm", "");
    }
}
