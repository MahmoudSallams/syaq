<?php

/* /var/www/html/workspace/syaq/plugins/worcbox/syaq/components/orderform/default.htm */
class __TwigTemplate_fa67b4f022cff6b49e79be7142604a3ef50d75095693f4a4e156df29048b9075 extends Twig_Template
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
        $context["servicesList"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeServices", array());
        // line 2
        $context["fieldsList"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeFields", array());
        // line 3
        $context["audienceGendersList"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeAudienceGenders", array());
        // line 4
        $context["typingModesList"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeTypingModes", array());
        // line 5
        $context["titleFieldsList"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeTitleFields", array());
        // line 6
        $context["speechFormatsList"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeSpeechFormats", array());
        // line 7
        echo "<div class=\"container\">
    <div class=\"sy-box\">
        <form id=\"sy-form\" method=\"post\"  data-request=\"onSubmit\" data-request-validate novalidate>
            <ul class=\"sy-wizard-items\">
                <li class=\"sy-wizard-item active\">
                    <span>1</span>نوع المحتوى
                </li>
                <li class=\"sy-wizard-item\">
                    <span>2</span>بيانات المحتوى
                </li>
                <li class=\"sy-wizard-item\">
                    <span>3</span>بيانات الحساب
                </li>
                <li class=\"sy-wizard-item\">
                    <span>4</span>تكملة الطلب
                </li>
            </ul>
            <div class=\"row\">
                <div class=\"col-12 col-md-8\">
                    <div class=\"sy-items-box \">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-12 col-md-auto\"><h2>اختر نوع الخدمة :</h2></div>
                                <div class=\"col-12 col-md\"><p>موقع سياق يقدم مختلف انواع المحتوى لموقعك أو شركتك ، برجاء اختيار نوع المحتوى الذي تود انشائه و استخدم لائحة الخصائص لتحديد ما تحتاجه</p></div>
                            </div>
                        </div>

                        <div class=\"row sy-products\">
                            <input type=\"hidden\" id=\"sy-input-type\" value=\"\" name=\"service_id\"/>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servicesList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 37
            echo "                            <div class=\"col-12 col-md-4\">
                                <a data-id=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", array()), "html", null, true);
            echo "\" data-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "basic_cost", array()), "html", null, true);
            echo "\" data-step=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "extra_block_words_count", array()), "html", null, true);
            echo "\" data-extra-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "extra_block_cost", array()), "html", null, true);
            echo "\" data-price-hi-q=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "high_quality_cost", array()), "html", null, true);
            echo "\"  data-price-fast=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "express_cost", array()), "html", null, true);
            echo "\" data-days=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "basic_duration_in_days", array()), "html", null, true);
            echo "\" data-days-fast=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "express_duration_in_days", array()), "html", null, true);
            echo "\" data-min=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "minimum_words_count", array()), "html", null, true);
            echo "\" >
                                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", array()), "html", null, true);
            echo "<br />
                                    <span>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "description", array()), "html", null, true);
            echo "</span>
                                </a>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </div>
                    </div>
                    <div class=\"sy-data-box hidden\">
                        <h2>المزيد من المعلومات</h2>
                        <div class=\"row sy-products\">
                            <div class=\"col-12 col-md-8\">
                                <label>الموضوع</label>
                                <input type=\"text\" class=\"sy-input\" name=\"topic\">
                                <span style=\"color: red;\" data-validate-for=\"topic\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label>المجال</label>
                                <select class=\"sy-input\" name=\"field_id\">
                                    <option value=\"\">-- اختر --</option>
                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fieldsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "                                    <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                </select>
                                <span style=\"color: red;\" data-validate-for=\"field_id\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label>صيغة الخطاب</label>
                                <select class=\"sy-input\" name=\"speech_format_id\">
                                    <option value=\"\">-- اختر --</option>
                                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["speechFormatsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            echo "                                    <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                </select>
                                <span style=\"color: red;\" data-validate-for=\"speech_format_id\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label> جنس الجمهور المخاطب</label>
                                <select class=\"sy-input\" name=\"audience_gender_id\">
                                    <option value=\"\">-- اختر --</option>
                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["audienceGendersList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            echo "                                    <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                </select>
                                <span style=\"color: red;\" data-validate-for=\"audience_gender_id\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label>هوية الجمهور المخاطب</label>
                                <input type=\"text\" class=\"sy-input\" name=\"audience_identification\">
                                <span style=\"color: red;\" data-validate-for=\"audience_identification\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label>مجال العنوان</label>
                                <select class=\"sy-input\" name=\"title_field_id\">
                                    <option value=\"\">-- اختر --</option>
                                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titleFieldsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 94
            echo "                                    <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                </select>
                                <span style=\"color: red;\" data-validate-for=\"title_field_id\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label>نوع الكتابة المفضلة</label>
                                <select class=\"sy-input\" name=\"typing_mode_id\">
                                    <option value=\"\">-- اختر --</option>
                                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typingModesList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 104
            echo "                                    <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                </select>
                                <span style=\"color: red;\" data-validate-for=\"typing_mode_id\"></span>
                            </div>
                            <div class=\"col-12\">
                                <label>بجانب نافذة لإضافة أي تعليقات او ملاحظات</label>
                                <textarea rows=\"10\" class=\"sy-input\" name=\"notes\"></textarea>
                                <span style=\"color: red;\" data-validate-for=\"notes\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"sy-user-box hidden\">
                        <h2>بيانات الحساب - هل لديك حساب؟
                        </h2>
                        <h3>نعم, </h3>
                        <div class=\"sy-flex-container\">
                            <div class=\"sy-item-1-of-2-col\">
                                <label >ايميل</label>
                                <input type=\"email\" name=\"email\" class=\"sy-input\" />
                            </div>
                        </div>
                        <h3>لا, </h3>
                    </div>
                </div>
                <div class=\"col-12 col-md-4 mt-3 mt-md-0\">
                    <div class=\"sy-cart\" id=\"sy-cart\">
                        <table width=\"100%\" class=\"olreq\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tbody>
                                <tr>
                                    <td><strong>التكلفة</strong></td>
                                    <td> <strong>الوقت</strong></td>
                                </tr>
                                <tr>
                                    <td class=\"sy-price\">
                                        ---
                                    </td>
                                    <td class=\"sy-days\">
                                        ---
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class=\"sy-cart-list\">

                            <li class=\"sy-cart-list-item\">
                                <div>
                                    عدد الكلمات
                                    <small>فى الوحدة</small>
                                </div>
                                <div>
                                    <div class=\"sy-counter count\">
                                        <button type=\"button\" data-key=\"min\">-</button>
                                        <span>0</span>
                                        <button type=\"button\" data-key=\"plus\">+</button>
                                    </div>
                                    <input type=\"hidden\" id=\"sy-input-word-count\" name=\"words_count\"/>
                                </div>
                            </li>
                            <li class=\"sy-cart-list-item\">
                                <div>
                                    الكمية
                                    <small>عدد الوحدات</small>
                                </div>
                                <div>
                                    <div class=\"sy-counter quantity\">
                                        <button type=\"button\" data-key=\"min\">-</button>
                                        <span>0</span>
                                        <button type=\"button\" data-key=\"plus\">+</button>
                                    </div>
                                    <input type=\"hidden\" id=\"sy-input-quantity\" name=\"quantity\"/>
                                </div>
                            </li>
                            <li class=\"sy-cart-list-item\">
                                <div>
                                    كلام
                                    <small>اختر واحد</small>
                                </div>
                                <div>
                                    <input class=\"sy-checkbox\" value=\"0\" checked=\"checked\" id=\"sy-ch1\" type=\"radio\" name=\"express\" /><label for=\"sy-ch1\" class=\"sy-checkbox\">عادى</label>
                                    <input class=\"sy-checkbox\" value=\"1\" id=\"sy-ch2\" type=\"radio\" name=\"express\" /><label for=\"sy-ch2\" class=\"sy-checkbox\">سريع</label>
                                </div>
                            </li>
                            <li class=\"sy-cart-list-item\">
                                <div>
                                    الجودة
                                    <small>اختر واحد</small>
                                </div>
                                <div>
                                    <input class=\"sy-checkbox\" value=\"0\" checked=\"checked\" id=\"sy-ch3\" type=\"radio\" name=\"high_quality\" /><label for=\"sy-ch3\" class=\"sy-checkbox\">عادى</label>
                                    <input class=\"sy-checkbox\" value=\"1\" id=\"sy-ch4\" type=\"radio\" name=\"high_quality\" /><label for=\"sy-ch4\" class=\"sy-checkbox\">ممتاز</label>
                                </div>
                            </li>
                        </ul>
                        <button type=\"button\" id=\"sy-next\" class=\"sy-button-submit\">التالى</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/workspace/syaq/plugins/worcbox/syaq/components/orderform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 106,  228 => 104,  224 => 103,  215 => 96,  204 => 94,  200 => 93,  186 => 81,  175 => 79,  171 => 78,  162 => 71,  151 => 69,  147 => 68,  138 => 61,  127 => 59,  123 => 58,  107 => 44,  97 => 40,  93 => 39,  73 => 38,  70 => 37,  66 => 36,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set servicesList = __SELF__.activeServices %}
{% set fieldsList = __SELF__.activeFields %}
{% set audienceGendersList = __SELF__.activeAudienceGenders %}
{% set typingModesList = __SELF__.activeTypingModes %}
{% set titleFieldsList = __SELF__.activeTitleFields %}
{% set speechFormatsList = __SELF__.activeSpeechFormats %}
<div class=\"container\">
    <div class=\"sy-box\">
        <form id=\"sy-form\" method=\"post\"  data-request=\"onSubmit\" data-request-validate novalidate>
            <ul class=\"sy-wizard-items\">
                <li class=\"sy-wizard-item active\">
                    <span>1</span>نوع المحتوى
                </li>
                <li class=\"sy-wizard-item\">
                    <span>2</span>بيانات المحتوى
                </li>
                <li class=\"sy-wizard-item\">
                    <span>3</span>بيانات الحساب
                </li>
                <li class=\"sy-wizard-item\">
                    <span>4</span>تكملة الطلب
                </li>
            </ul>
            <div class=\"row\">
                <div class=\"col-12 col-md-8\">
                    <div class=\"sy-items-box \">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-12 col-md-auto\"><h2>اختر نوع الخدمة :</h2></div>
                                <div class=\"col-12 col-md\"><p>موقع سياق يقدم مختلف انواع المحتوى لموقعك أو شركتك ، برجاء اختيار نوع المحتوى الذي تود انشائه و استخدم لائحة الخصائص لتحديد ما تحتاجه</p></div>
                            </div>
                        </div>

                        <div class=\"row sy-products\">
                            <input type=\"hidden\" id=\"sy-input-type\" value=\"\" name=\"service_id\"/>
                            {% for service in servicesList%}
                            <div class=\"col-12 col-md-4\">
                                <a data-id=\"{{service.id}}\" data-price=\"{{service.basic_cost}}\" data-step=\"{{service.extra_block_words_count}}\" data-extra-price=\"{{service.extra_block_cost}}\" data-price-hi-q=\"{{service.high_quality_cost}}\"  data-price-fast=\"{{service.express_cost}}\" data-days=\"{{service.basic_duration_in_days}}\" data-days-fast=\"{{service.express_duration_in_days}}\" data-min=\"{{service.minimum_words_count}}\" >
                                    {{service.name}}<br />
                                    <span>{{ service.description }}</span>
                                </a>
                            </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"sy-data-box hidden\">
                        <h2>المزيد من المعلومات</h2>
                        <div class=\"row sy-products\">
                            <div class=\"col-12 col-md-8\">
                                <label>الموضوع</label>
                                <input type=\"text\" class=\"sy-input\" name=\"topic\">
                                <span style=\"color: red;\" data-validate-for=\"topic\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label>المجال</label>
                                <select class=\"sy-input\" name=\"field_id\">
                                    <option value=\"\">-- اختر --</option>
                                    {% for item in fieldsList %}
                                    <option value='{{ item.id }}'>{{ item.name }}</option>
                                    {% endfor %}
                                </select>
                                <span style=\"color: red;\" data-validate-for=\"field_id\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label>صيغة الخطاب</label>
                                <select class=\"sy-input\" name=\"speech_format_id\">
                                    <option value=\"\">-- اختر --</option>
                                    {% for item in speechFormatsList %}
                                    <option value='{{ item.id }}'>{{ item.name }}</option>
                                    {% endfor %}
                                </select>
                                <span style=\"color: red;\" data-validate-for=\"speech_format_id\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label> جنس الجمهور المخاطب</label>
                                <select class=\"sy-input\" name=\"audience_gender_id\">
                                    <option value=\"\">-- اختر --</option>
                                    {% for item in audienceGendersList %}
                                    <option value='{{ item.id }}'>{{ item.name }}</option>
                                    {% endfor %}
                                </select>
                                <span style=\"color: red;\" data-validate-for=\"audience_gender_id\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label>هوية الجمهور المخاطب</label>
                                <input type=\"text\" class=\"sy-input\" name=\"audience_identification\">
                                <span style=\"color: red;\" data-validate-for=\"audience_identification\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label>مجال العنوان</label>
                                <select class=\"sy-input\" name=\"title_field_id\">
                                    <option value=\"\">-- اختر --</option>
                                    {% for item in titleFieldsList %}
                                    <option value='{{ item.id }}'>{{ item.name }}</option>
                                    {% endfor %}
                                </select>
                                <span style=\"color: red;\" data-validate-for=\"title_field_id\"></span>
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label>نوع الكتابة المفضلة</label>
                                <select class=\"sy-input\" name=\"typing_mode_id\">
                                    <option value=\"\">-- اختر --</option>
                                    {% for item in typingModesList %}
                                    <option value='{{ item.id }}'>{{ item.name }}</option>
                                    {% endfor %}
                                </select>
                                <span style=\"color: red;\" data-validate-for=\"typing_mode_id\"></span>
                            </div>
                            <div class=\"col-12\">
                                <label>بجانب نافذة لإضافة أي تعليقات او ملاحظات</label>
                                <textarea rows=\"10\" class=\"sy-input\" name=\"notes\"></textarea>
                                <span style=\"color: red;\" data-validate-for=\"notes\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"sy-user-box hidden\">
                        <h2>بيانات الحساب - هل لديك حساب؟
                        </h2>
                        <h3>نعم, </h3>
                        <div class=\"sy-flex-container\">
                            <div class=\"sy-item-1-of-2-col\">
                                <label >ايميل</label>
                                <input type=\"email\" name=\"email\" class=\"sy-input\" />
                            </div>
                        </div>
                        <h3>لا, </h3>
                    </div>
                </div>
                <div class=\"col-12 col-md-4 mt-3 mt-md-0\">
                    <div class=\"sy-cart\" id=\"sy-cart\">
                        <table width=\"100%\" class=\"olreq\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tbody>
                                <tr>
                                    <td><strong>التكلفة</strong></td>
                                    <td> <strong>الوقت</strong></td>
                                </tr>
                                <tr>
                                    <td class=\"sy-price\">
                                        ---
                                    </td>
                                    <td class=\"sy-days\">
                                        ---
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class=\"sy-cart-list\">

                            <li class=\"sy-cart-list-item\">
                                <div>
                                    عدد الكلمات
                                    <small>فى الوحدة</small>
                                </div>
                                <div>
                                    <div class=\"sy-counter count\">
                                        <button type=\"button\" data-key=\"min\">-</button>
                                        <span>0</span>
                                        <button type=\"button\" data-key=\"plus\">+</button>
                                    </div>
                                    <input type=\"hidden\" id=\"sy-input-word-count\" name=\"words_count\"/>
                                </div>
                            </li>
                            <li class=\"sy-cart-list-item\">
                                <div>
                                    الكمية
                                    <small>عدد الوحدات</small>
                                </div>
                                <div>
                                    <div class=\"sy-counter quantity\">
                                        <button type=\"button\" data-key=\"min\">-</button>
                                        <span>0</span>
                                        <button type=\"button\" data-key=\"plus\">+</button>
                                    </div>
                                    <input type=\"hidden\" id=\"sy-input-quantity\" name=\"quantity\"/>
                                </div>
                            </li>
                            <li class=\"sy-cart-list-item\">
                                <div>
                                    كلام
                                    <small>اختر واحد</small>
                                </div>
                                <div>
                                    <input class=\"sy-checkbox\" value=\"0\" checked=\"checked\" id=\"sy-ch1\" type=\"radio\" name=\"express\" /><label for=\"sy-ch1\" class=\"sy-checkbox\">عادى</label>
                                    <input class=\"sy-checkbox\" value=\"1\" id=\"sy-ch2\" type=\"radio\" name=\"express\" /><label for=\"sy-ch2\" class=\"sy-checkbox\">سريع</label>
                                </div>
                            </li>
                            <li class=\"sy-cart-list-item\">
                                <div>
                                    الجودة
                                    <small>اختر واحد</small>
                                </div>
                                <div>
                                    <input class=\"sy-checkbox\" value=\"0\" checked=\"checked\" id=\"sy-ch3\" type=\"radio\" name=\"high_quality\" /><label for=\"sy-ch3\" class=\"sy-checkbox\">عادى</label>
                                    <input class=\"sy-checkbox\" value=\"1\" id=\"sy-ch4\" type=\"radio\" name=\"high_quality\" /><label for=\"sy-ch4\" class=\"sy-checkbox\">ممتاز</label>
                                </div>
                            </li>
                        </ul>
                        <button type=\"button\" id=\"sy-next\" class=\"sy-button-submit\">التالى</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>", "/var/www/html/workspace/syaq/plugins/worcbox/syaq/components/orderform/default.htm", "");
    }
}
