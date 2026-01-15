<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/account/edit.twig */
class __TwigTemplate_81e938ff67d53797b229969c0d4a0d44 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div id=\"account-edit\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>

  <div class=\"row\">
    ";
        // line 10
        yield ($context["column_left"] ?? null);
        yield "

    <div id=\"content\" class=\"col\">
      ";
        // line 13
        yield ($context["content_top"] ?? null);
        yield "

      <div class=\"bareq-login-wrapper bareq-edit-wrapper\">
        <!-- رأس الصفحة -->
        <div class=\"bareq-edit-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">";
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">";
        // line 19
        yield ($context["text_your_details"] ?? null);
        yield "</p>
        </div>

        <form id=\"form-customer\" action=\"";
        // line 22
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"bareq-form-section\">
            <h2 class=\"bareq-form-title mb-3\">";
        // line 24
        yield ($context["text_your_details"] ?? null);
        yield "</h2>

            <div class=\"row mb-3\">
              <label for=\"input-firstname\" class=\"col-sm-3 col-form-label\">";
        // line 27
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
              <div class=\"col-sm-9\">
                <input type=\"text\" name=\"firstname\" value=\"";
        // line 29
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" required/>
                <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
              </div>
            </div>

            <div class=\"row mb-3\">
              <label for=\"input-lastname\" class=\"col-sm-3 col-form-label\">";
        // line 35
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
              <div class=\"col-sm-9\">
                <input type=\"text\" name=\"lastname\" value=\"";
        // line 37
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" required/>
                <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
              </div>
            </div>

            <div class=\"row mb-3\">
              <label for=\"input-email\" class=\"col-sm-3 col-form-label\">";
        // line 43
        yield ($context["entry_email"] ?? null);
        yield "</label>
              <div class=\"col-sm-9\">
                <input type=\"email\" name=\"email\" value=\"";
        // line 45
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" required/>
                <div id=\"error-email\" class=\"invalid-feedback\"></div>
              </div>
            </div>

            ";
        // line 50
        if (($context["config_telephone_display"] ?? null)) {
            // line 51
            yield "              <div class=\"row mb-3\">
                <label for=\"input-telephone\" class=\"col-sm-3 col-form-label\">";
            // line 52
            yield ($context["entry_telephone"] ?? null);
            yield "</label>
                <div class=\"col-sm-9\">
                  <input type=\"tel\" name=\"telephone\" value=\"";
            // line 54
            yield ($context["telephone"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_telephone"] ?? null);
            yield "\" id=\"input-telephone\" class=\"form-control\"";
            if (($context["config_telephone_required"] ?? null)) {
                yield " required";
            }
            yield "/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
        }
        // line 59
        yield "
            ";
        // line 61
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 62
            yield "
              ";
            // line 63
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 63) == "select")) {
                // line 64
                yield "                <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 64)) {
                    yield " required";
                }
                yield " custom-field\">
                  <label for=\"input-custom-field-";
                // line 65
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 65);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 65);
                yield "</label>
                  <div class=\"col-sm-9\">
                    <select name=\"custom_field[";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                yield "]\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                yield "\" class=\"form-select\">
                      <option value=\"\">";
                // line 68
                yield ($context["text_select"] ?? null);
                yield "</option>
                      ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 69));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 70
                    yield "                        <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                    yield "\"";
                    if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null)))) {
                        yield " selected";
                    }
                    yield ">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 70);
                    yield "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                yield "                    </select>
                    <div id=\"error-custom-field-";
                // line 73
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 73);
                yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
            }
            // line 77
            yield "
              ";
            // line 78
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 78) == "radio")) {
                // line 79
                yield "                <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 79)) {
                    yield " required";
                }
                yield " custom-field\">
                  <label class=\"col-sm-3 col-form-label\">";
                // line 80
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 80);
                yield "</label>
                  <div class=\"col-sm-9\">
                    <div id=\"input-custom-field-";
                // line 82
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                yield "\">
                      ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 84
                    yield "                        <div class=\"form-check\">
                          <input type=\"radio\" name=\"custom_field[";
                    // line 85
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                    yield "\" id=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                    yield "\" class=\"form-check-input\"";
                    if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null)))) {
                        yield " checked";
                    }
                    yield "/> 
                          <label for=\"input-custom-value-";
                    // line 86
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                    yield "</label>
                        </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                yield "                    </div>
                    <div id=\"error-custom-field-";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
            }
            // line 94
            yield "
              ";
            // line 95
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 95) == "checkbox")) {
                // line 96
                yield "                <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 96)) {
                    yield " required";
                }
                yield " custom-field\">
                  <label class=\"col-sm-3 col-form-label\">";
                // line 97
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 97);
                yield "</label>
                  <div class=\"col-sm-9\">
                    <div id=\"input-custom-field-";
                // line 99
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                yield "\">
                      ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 100));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 101
                    yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"custom_field[";
                    // line 102
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 102);
                    yield "\" id=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 102);
                    yield "\" class=\"form-check-input\"";
                    if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 102), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102)] ?? null) : null)))) {
                        yield " checked";
                    }
                    yield "/> 
                          <label for=\"input-custom-value-";
                    // line 103
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 103);
                    yield "</label>
                        </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                yield "                    </div>
                    <div id=\"error-custom-field-";
                // line 107
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
            }
            // line 111
            yield "
              ";
            // line 112
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 112) == "text")) {
                // line 113
                yield "                <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 113)) {
                    yield " required";
                }
                yield " custom-field\">
                  <label for=\"input-custom-field-";
                // line 114
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 114);
                yield "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"custom_field[";
                // line 116
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                yield "]\" value=\"";
                if ((($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null)) {
                    yield (($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 116);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 116);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                yield "\" class=\"form-control\"/>
                    <div id=\"error-custom-field-";
                // line 117
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
            }
            // line 121
            yield "
              ";
            // line 122
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 122) == "textarea")) {
                // line 123
                yield "                <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 123)) {
                    yield " required";
                }
                yield " custom-field\">
                  <label for=\"input-custom-field-";
                // line 124
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 124);
                yield "</label>
                  <div class=\"col-sm-9\">
                    <textarea name=\"custom_field[";
                // line 126
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 126);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                yield "\" class=\"form-control\">";
                if ((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126)] ?? null) : null)) {
                    yield (($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 126);
                }
                yield "</textarea>
                    <div id=\"error-custom-field-";
                // line 127
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
            }
            // line 131
            yield "
              ";
            // line 132
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 132) == "file")) {
                // line 133
                yield "                <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 133)) {
                    yield " required";
                }
                yield " custom-field\">
                  <label class=\"col-sm-3 col-form-label\">";
                // line 134
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                yield "</label>
                  <div class=\"col-sm-9\">
                    <div>
                      <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 137
                yield ($context["upload"] ?? null);
                yield "\" data-oc-size-max=\"";
                yield ($context["config_file_max_size"] ?? null);
                yield "\" data-oc-size-error=\"";
                yield ($context["error_upload_size"] ?? null);
                yield "\" data-oc-target=\"#input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                yield "\" class=\"btn btn-light\">
                        <i class=\"fa-solid fa-upload\"></i> ";
                // line 138
                yield ($context["button_upload"] ?? null);
                yield "
                      </button>
                      <input type=\"hidden\" name=\"custom_field[";
                // line 140
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                yield "]\" value=\"";
                if ((($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null)) {
                    yield (($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null);
                }
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                yield "\"/>
                    </div>
                    <div id=\"error-custom-field-";
                // line 142
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
            }
            // line 146
            yield "
              ";
            // line 147
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 147) == "date")) {
                // line 148
                yield "                <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 148)) {
                    yield " required";
                }
                yield " custom-field\">
                  <label for=\"input-custom-field-";
                // line 149
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 149);
                yield "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"date\" name=\"custom_field[";
                // line 151
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                yield "]\" value=\"";
                if ((($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null)) {
                    yield (($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 151);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 151);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                yield "\" class=\"form-control\"/>
                    <div id=\"error-custom-field-";
                // line 152
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
            }
            // line 156
            yield "
              ";
            // line 157
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 157) == "time")) {
                // line 158
                yield "                <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 158)) {
                    yield " required";
                }
                yield " custom-field\">
                  <label for=\"input-custom-field-";
                // line 159
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 159);
                yield "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"time\" name=\"custom_field[";
                // line 161
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                yield "]\" value=\"";
                if ((($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null)) {
                    yield (($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 161);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                yield "\" class=\"form-control\"/>
                    <div id=\"error-custom-field-";
                // line 162
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
            }
            // line 166
            yield "
              ";
            // line 167
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 167) == "datetime")) {
                // line 168
                yield "                <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 168)) {
                    yield " required";
                }
                yield " custom-field\">
                  <label for=\"input-custom-field-";
                // line 169
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 169);
                yield "</label>
                  <div class=\"col-sm-9\">
                    <input type=\"datetime-local\" name=\"custom_field[";
                // line 171
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                yield "]\" value=\"";
                if ((($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171)] ?? null) : null)) {
                    yield (($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 171);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 171);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                yield "\" class=\"form-control\"/>
                    <div id=\"error-custom-field-";
                // line 172
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                yield "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
            }
            // line 176
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "          </div>

          <div class=\"row mt-4 align-items-center\">
            <div class=\"col-sm-6 mb-2 mb-sm-0\">
              <a href=\"";
        // line 182
        yield ($context["back"] ?? null);
        yield "\" class=\"bareq-btn-outline\">";
        yield ($context["button_back"] ?? null);
        yield "</a>
            </div>
            <div class=\"col-sm-6 text-sm-end text-start\">
              <button type=\"submit\" class=\"bareq-btn-main\">";
        // line 185
        yield ($context["button_continue"] ?? null);
        yield "</button>
            </div>
          </div>
        </form>

      </div>

      ";
        // line 193
        yield "    </div>

    ";
        // line 195
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 198
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/edit.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  654 => 198,  648 => 195,  644 => 193,  634 => 185,  626 => 182,  620 => 178,  613 => 176,  606 => 172,  592 => 171,  585 => 169,  578 => 168,  576 => 167,  573 => 166,  566 => 162,  552 => 161,  545 => 159,  538 => 158,  536 => 157,  533 => 156,  526 => 152,  512 => 151,  505 => 149,  498 => 148,  496 => 147,  493 => 146,  486 => 142,  475 => 140,  470 => 138,  460 => 137,  454 => 134,  447 => 133,  445 => 132,  442 => 131,  435 => 127,  421 => 126,  414 => 124,  407 => 123,  405 => 122,  402 => 121,  395 => 117,  381 => 116,  374 => 114,  367 => 113,  365 => 112,  362 => 111,  355 => 107,  352 => 106,  341 => 103,  329 => 102,  326 => 101,  322 => 100,  318 => 99,  313 => 97,  306 => 96,  304 => 95,  301 => 94,  294 => 90,  291 => 89,  280 => 86,  268 => 85,  265 => 84,  261 => 83,  257 => 82,  252 => 80,  245 => 79,  243 => 78,  240 => 77,  233 => 73,  230 => 72,  215 => 70,  211 => 69,  207 => 68,  201 => 67,  194 => 65,  187 => 64,  185 => 63,  182 => 62,  177 => 61,  174 => 59,  160 => 54,  155 => 52,  152 => 51,  150 => 50,  140 => 45,  135 => 43,  124 => 37,  119 => 35,  108 => 29,  103 => 27,  97 => 24,  92 => 22,  86 => 19,  82 => 18,  74 => 13,  68 => 10,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-edit\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      <div class=\"bareq-login-wrapper bareq-edit-wrapper\">
        <!-- رأس الصفحة -->
        <div class=\"bareq-edit-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">{{ heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">{{ text_your_details }}</p>
        </div>

        <form id=\"form-customer\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"bareq-form-section\">
            <h2 class=\"bareq-form-title mb-3\">{{ text_your_details }}</h2>

            <div class=\"row mb-3\">
              <label for=\"input-firstname\" class=\"col-sm-3 col-form-label\">{{ entry_firstname }}</label>
              <div class=\"col-sm-9\">
                <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\" required/>
                <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
              </div>
            </div>

            <div class=\"row mb-3\">
              <label for=\"input-lastname\" class=\"col-sm-3 col-form-label\">{{ entry_lastname }}</label>
              <div class=\"col-sm-9\">
                <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\" required/>
                <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
              </div>
            </div>

            <div class=\"row mb-3\">
              <label for=\"input-email\" class=\"col-sm-3 col-form-label\">{{ entry_email }}</label>
              <div class=\"col-sm-9\">
                <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" required/>
                <div id=\"error-email\" class=\"invalid-feedback\"></div>
              </div>
            </div>

            {% if config_telephone_display %}
              <div class=\"row mb-3\">
                <label for=\"input-telephone\" class=\"col-sm-3 col-form-label\">{{ entry_telephone }}</label>
                <div class=\"col-sm-9\">
                  <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"{% if config_telephone_required %} required{% endif %}/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {# الحقول المخصصة تبقى كما هي لكن داخل نفس القسم #}
            {% for custom_field in custom_fields %}

              {% if custom_field.type == 'select' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-9\">
                    <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                      <option value=\"\">{{ text_select }}</option>
                      {% for custom_field_value in custom_field.custom_field_value %}
                        <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                      {% endfor %}
                    </select>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-9\">
                    <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                      {% for custom_field_value in custom_field.custom_field_value %}
                        <div class=\"form-check\">
                          <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> 
                          <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-9\">
                    <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                      {% for custom_field_value in custom_field.custom_field_value %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> 
                          <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-9\">
                    <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-9\">
                    <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-9\">
                    <div>
                      <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\">
                        <i class=\"fa-solid fa-upload\"></i> {{ button_upload }}
                      </button>
                      <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
                    </div>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-9\">
                    <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-9\">
                    <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-9\">
                    <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              {% endif %}

            {% endfor %}
          </div>

          <div class=\"row mt-4 align-items-center\">
            <div class=\"col-sm-6 mb-2 mb-sm-0\">
              <a href=\"{{ back }}\" class=\"bareq-btn-outline\">{{ button_back }}</a>
            </div>
            <div class=\"col-sm-6 text-sm-end text-start\">
              <button type=\"submit\" class=\"bareq-btn-main\">{{ button_continue }}</button>
            </div>
          </div>
        </form>

      </div>

      {# {{ content_bottom }} #}
    </div>

    {{ column_right }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/edit.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\edit.twig");
    }
}
