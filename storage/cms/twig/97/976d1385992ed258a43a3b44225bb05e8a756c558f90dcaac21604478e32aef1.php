<?php

/* /var/www/html/workspace/syaq/themes/syaq/pages/forgot-password.htm */
class __TwigTemplate_ce0e026912427d28ae54ea3f5397d2d67fac1e5670cc443e323b607303ef52a2 extends Twig_Template
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
\t \t\t<h3>استرجاع كلمة المرور</h3>
\t\t</div>
\t</div>
</section>
<br/><br/>
<div class=\"container\">
\t<br/><br/>
\t<div id=\"login-error\" class=\"alert alert-danger d-none\"></div>
\t<div id=\"partialUserResetForm\">
\t    ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["resetPassword"] ?? null), "code", array()) == null)) {
            // line 14
            echo "\t        <h3>
\t\t\t    نسيت كلمة المرور؟ برجاء ادخال الايميل لتاكيد حسابك
\t\t\t</h3>
\t\t\t
\t\t\t<form
\t\t\t    data-request=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["resetPassword"] ?? null), "html", null, true);
            echo "::onRestorePassword\"
\t\t\t    data-request-update=\"'";
            // line 20
            echo twig_escape_filter($this->env, ($context["resetPassword"] ?? null), "html", null, true);
            echo "::reset': '#partialUserResetForm'\" novalidate>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label for=\"userRestoreEmail\">الايميل</label>
\t\t\t        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\" placeholder=\"الايميل\">
\t\t\t    </div>
\t\t\t
\t\t\t    <button type=\"submit\" class=\"btn btn-primary\">ارسال</button>
\t\t\t</form>
\t
\t    ";
        } else {
            // line 30
            echo "\t        <h3>
\t\t\t    يرجى التحقق من بريدك الإلكتروني للحصول على رمز التفعيل.
\t\t\t</h3>
\t\t\t
\t\t\t<form
\t\t\t    data-request=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["resetPassword"] ?? null), "html", null, true);
            echo "::onResetPassword\"
\t\t\t    data-request-update=\"'";
            // line 36
            echo twig_escape_filter($this->env, ($context["resetPassword"] ?? null), "html", null, true);
            echo "::complete': '#partialUserResetForm'\">
\t\t\t    <div class=\"form-group\">
\t\t\t        <label for=\"resetCode\">رمز التعريف</label>
\t\t\t        <input name=\"code\" type=\"text\" class=\"form-control\" id=\"resetCode\" placeholder=\"Enter the activation code\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["resetPassword"] ?? null), "code", array()), "html", null, true);
            echo "\">
\t\t\t    </div>
\t\t\t
\t\t\t    <div class=\"form-group\">
\t\t\t        <label for=\"resetPassword\">كلمة المرور الجديدة</label>
\t\t\t        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"resetPassword\" placeholder=\"كلمة المرور\">
\t\t\t    </div>
\t\t\t
\t\t\t    <button type=\"submit\" class=\"btn btn-primary\">تاكيد</button>
\t\t\t</form>
\t    ";
        }
        // line 50
        echo "\t</div>
\t<br/><br/>
</div>
";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('bodyend'        );
        // line 54
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
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/themes/syaq/pages/forgot-password.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 53,  101 => 54,  99 => 53,  94 => 50,  80 => 39,  74 => 36,  70 => 35,  63 => 30,  50 => 20,  46 => 19,  39 => 14,  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"page-banner second-22\">
\t<div class=\"container\">
\t\t<div class=\"bread\">
\t \t\t<h3>استرجاع كلمة المرور</h3>
\t\t</div>
\t</div>
</section>
<br/><br/>
<div class=\"container\">
\t<br/><br/>
\t<div id=\"login-error\" class=\"alert alert-danger d-none\"></div>
\t<div id=\"partialUserResetForm\">
\t    {% if resetPassword.code == null %}
\t        <h3>
\t\t\t    نسيت كلمة المرور؟ برجاء ادخال الايميل لتاكيد حسابك
\t\t\t</h3>
\t\t\t
\t\t\t<form
\t\t\t    data-request=\"{{ resetPassword }}::onRestorePassword\"
\t\t\t    data-request-update=\"'{{ resetPassword }}::reset': '#partialUserResetForm'\" novalidate>
\t\t\t    <div class=\"form-group\">
\t\t\t        <label for=\"userRestoreEmail\">الايميل</label>
\t\t\t        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\" placeholder=\"الايميل\">
\t\t\t    </div>
\t\t\t
\t\t\t    <button type=\"submit\" class=\"btn btn-primary\">ارسال</button>
\t\t\t</form>
\t
\t    {% else %}
\t        <h3>
\t\t\t    يرجى التحقق من بريدك الإلكتروني للحصول على رمز التفعيل.
\t\t\t</h3>
\t\t\t
\t\t\t<form
\t\t\t    data-request=\"{{ resetPassword }}::onResetPassword\"
\t\t\t    data-request-update=\"'{{ resetPassword }}::complete': '#partialUserResetForm'\">
\t\t\t    <div class=\"form-group\">
\t\t\t        <label for=\"resetCode\">رمز التعريف</label>
\t\t\t        <input name=\"code\" type=\"text\" class=\"form-control\" id=\"resetCode\" placeholder=\"Enter the activation code\" value=\"{{ resetPassword.code }}\">
\t\t\t    </div>
\t\t\t
\t\t\t    <div class=\"form-group\">
\t\t\t        <label for=\"resetPassword\">كلمة المرور الجديدة</label>
\t\t\t        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"resetPassword\" placeholder=\"كلمة المرور\">
\t\t\t    </div>
\t\t\t
\t\t\t    <button type=\"submit\" class=\"btn btn-primary\">تاكيد</button>
\t\t\t</form>
\t    {% endif %}
\t</div>
\t<br/><br/>
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
{% endput %}", "/var/www/html/workspace/syaq/themes/syaq/pages/forgot-password.htm", "");
    }
}
