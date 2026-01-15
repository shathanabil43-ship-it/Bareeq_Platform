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

/* admin/view/template/customer/customer_form.twig */
class __TwigTemplate_424b669b095315506f42d5fc0f2c759e extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        ";
        // line 6
        if (($context["orders"] ?? null)) {
            // line 7
            yield "          <a href=\"";
            yield ($context["orders"] ?? null);
            yield "\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_order"] ?? null);
            yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-receipt\"></i></a>
        ";
        }
        // line 9
        yield "        <button type=\"submit\" id=\"button-save\" form=\"form-customer\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 10
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 24
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-address\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        yield ($context["tab_address"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-payment\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_payment_method"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-transaction\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        yield ($context["tab_transaction"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        yield ($context["tab_reward"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        yield ($context["tab_ip"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-authorize\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        yield ($context["tab_authorize"] ?? null);
        yield "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-general\" class=\"tab-pane active\">
            <form id=\"form-customer\" action=\"";
        // line 35
        yield ($context["save"] ?? null);
        yield "\" method=\"post\">
              <fieldset>
                <legend>";
        // line 37
        yield ($context["text_customer"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-store\" class=\"col-sm-2 col-form-label\">";
        // line 39
        yield ($context["entry_store"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 43
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 43);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 43) == ($context["store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 43);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 49
        yield ($context["entry_language"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                      ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 53
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53) == ($context["language_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 53);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 59
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                      ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 63
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 63);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 63) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 63);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 69
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"firstname\" value=\"";
        // line 71
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" required/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 76
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"lastname\" value=\"";
        // line 78
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" required/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 83
        yield ($context["entry_email"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 85
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" required/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 90
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"telephone\" value=\"";
        // line 92
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
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 97
            yield "
                  ";
            // line 98
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 98) == "account")) {
                // line 99
                yield "
                    ";
                // line 100
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 100) == "select")) {
                    // line 101
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 102
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 102);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"custom_field[";
                    // line 104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "\" class=\"form-select\">
                            <option value=\"\">";
                    // line 105
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                            ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 106));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 107
                        yield "                              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 107);
                        yield "\"";
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 107) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 107);
                        yield "</option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    yield "                          </select>
                          <div id=\"error-custom-field-";
                    // line 110
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 114
                yield "
                    ";
                // line 115
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 115) == "radio")) {
                    // line 116
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 117
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 117);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 119
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 120));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 121
                        yield "                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[";
                        // line 122
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 122);
                        yield "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    yield "                          </div>
                          <div id=\"error-custom-field-";
                    // line 126
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 130
                yield "
                    ";
                // line 131
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 131) == "checkbox")) {
                    // line 132
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 133
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 133);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 135
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 136));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 137
                        yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[";
                        // line 138
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 138);
                        yield "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    yield "                          </div>
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
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 147) == "text")) {
                    // line 148
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 149
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 149);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 151
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                    yield "]\" value=\"";
                    yield (((($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null)) ? ((($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 151)));
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
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 157) == "textarea")) {
                    // line 158
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 159
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 159);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"custom_field[";
                    // line 161
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                    yield "\" class=\"form-control\">";
                    yield (((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null)) ? ((($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 161)));
                    yield "</textarea>
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
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 167) == "file")) {
                    // line 168
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 169
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 169);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 172
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                            <input type=\"text\" name=\"custom_field[";
                    // line 173
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                    yield "]\" value=\"";
                    yield (((($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null)) ? ((($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null)) : (""));
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                    yield "\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 174
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    yield "\"";
                    if ( !(($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 175
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    yield "\"";
                    if ( !(($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                          </div>
                          <div id=\"error-custom-field-";
                    // line 177
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 181
                yield "
                    ";
                // line 182
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 182) == "date")) {
                    // line 183
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 184
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 184);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"date\" name=\"custom_field[";
                    // line 186
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                    yield "]\" value=\"";
                    yield (((($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null)) ? ((($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 186)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 186);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 187
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 191
                yield "
                    ";
                // line 192
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 192) == "time")) {
                    // line 193
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 194
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 194);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"time\" name=\"custom_field[";
                    // line 196
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                    yield "]\" value=\"";
                    yield (((($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) ? ((($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 196)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 197
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 201
                yield "
                    ";
                // line 202
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 202) == "datetime")) {
                    // line 203
                    yield "                      <div class=\"row mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                    yield "\">
                        <label for=\"input-custom-field-";
                    // line 204
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 204);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"datetime-local\" name=\"custom_field[";
                    // line 206
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                    yield "]\" value=\"";
                    yield (((($_v18 = ($context["account_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null)) ? ((($_v19 = ($context["account_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 206)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                    yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 207
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 211
                yield "
                  ";
            }
            // line 213
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        yield "              </fieldset>
              <fieldset>
                <legend>";
        // line 216
        yield ($context["text_password"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 218
        yield ($context["entry_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"password\" value=\"";
        // line 220
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" required autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">";
        // line 225
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"confirm\" value=\"";
        // line 227
        yield ($context["confirm"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_confirm"] ?? null);
        yield "\" id=\"input-confirm\" class=\"form-control\" required autocomplete=\"new-password\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 233
        yield ($context["text_other"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 235
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"newsletter\" value=\"1\" checked=\"";
        // line 237
        yield ($context["newsletter"] ?? null);
        yield "\" input-id=\"input-newsletter\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 241
        yield ($context["entry_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"status\" value=\"1\" checked=\"";
        // line 243
        yield ($context["status"] ?? null);
        yield "\" input-id=\"input-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 247
        yield ($context["entry_safe"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"safe\" value=\"1\" checked=\"";
        // line 249
        yield ($context["safe"] ?? null);
        yield "\" input-id=\"input-safe\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 250
        yield ($context["help_safe"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 254
        yield ($context["entry_commenter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"commenter\" value=\"1\" checked=\"";
        // line 256
        yield ($context["commenter"] ?? null);
        yield "\" input-id=\"input-commenter\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 257
        yield ($context["help_commenter"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 261
        yield ($context["customer_id"] ?? null);
        yield "\" id=\"input-customer-id\"/>
            </form>
          </div>
          <div id=\"tab-address\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 266
        yield ($context["text_address"] ?? null);
        yield "</legend>
              <div id=\"address\">";
        // line 267
        yield ($context["address"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-payment\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 272
        yield ($context["text_payment_method"] ?? null);
        yield "</legend>
              <div id=\"payment-method\">";
        // line 273
        yield ($context["payment_method"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-history\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 278
        yield ($context["text_history"] ?? null);
        yield "</legend>
              <div id=\"history\">";
        // line 279
        yield ($context["history"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 282
        yield ($context["text_history_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 284
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 286
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-history\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 290
        yield ($context["button_history_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-transaction\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 296
        yield ($context["text_transaction"] ?? null);
        yield "</legend>
              <div id=\"transaction\">";
        // line 297
        yield ($context["transaction"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 300
        yield ($context["text_transaction_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">";
        // line 302
        yield ($context["entry_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 304
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-transaction\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">";
        // line 308
        yield ($context["entry_amount"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
        // line 310
        yield ($context["entry_amount"] ?? null);
        yield "\" id=\"input-amount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 314
        yield ($context["button_transaction_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-reward\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 320
        yield ($context["text_reward"] ?? null);
        yield "</legend>
              <div id=\"reward\">";
        // line 321
        yield ($context["reward"] ?? null);
        yield "</div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 324
        yield ($context["text_reward_add"] ?? null);
        yield "</legend>
              <div class=\"row mb-3\">
                <label for=\"input-reward\" class=\"col-sm-2 col-form-label\">";
        // line 326
        yield ($context["entry_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 328
        yield ($context["entry_description"] ?? null);
        yield "\" id=\"input-reward\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 332
        yield ($context["entry_points"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
        // line 334
        yield ($context["entry_points"] ?? null);
        yield "\" id=\"input-points\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 335
        yield ($context["help_points"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 339
        yield ($context["button_reward_add"] ?? null);
        yield "</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-ip\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 345
        yield ($context["text_ip"] ?? null);
        yield "</legend>
              <div id=\"ip\">";
        // line 346
        yield ($context["ip"] ?? null);
        yield "</div>
            </fieldset>
          </div>
          <div id=\"tab-authorize\" class=\"tab-pane\">
            <fieldset>
              <legend>";
        // line 351
        yield ($context["text_authorize"] ?? null);
        yield "</legend>
              <div id=\"authorize\">";
        // line 352
        yield ($context["authorize"] ?? null);
        yield "</div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('action'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['customer_id']) {
                    \$('#input-customer-id').val(json['customer_id']);

                    \$('#address').load('index.php?route=customer/address&user_token=";
        // line 402
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + json['customer_id']);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 414
        yield ($context["user_token"] ?? null);
        yield "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#address').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$('#modal-address').remove();

    \$.ajax({
        url: \$(element).val(),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            var modal = new bootstrap.Modal(document.querySelector('#modal-address'));

            modal.show();
        }
    });
});

\$('#payment-method').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#payment-method').load(this.href);
});

\$('#payment-method').on('click', 'button', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token=";
        // line 497
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#payment-method').on('change', 'input[name=\\'status\\']', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.disablePayment&user_token=";
        // line 512
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token=";
        // line 533
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addHistory&user_token=";
        // line 552
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'comment=' + encodeURIComponent(\$('#input-history').val()),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer.history&user_token=";
        // line 575
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addTransaction&user_token=";
        // line 596
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-transaction').val()) + '&amount=' + \$('#input-amount').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-transaction').button('loading');
        },
        complete: function() {
            \$('#button-transaction').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#transaction').load('index.php?route=customer/customer.transaction&user_token=";
        // line 619
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-transaction').val('');
                \$('#input-amount').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#reward').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
});

\$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addReward&user_token=";
        // line 641
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-reward').val()) + '&points=' + \$('#input-points').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-reward').button('loading');
        },
        complete: function() {
            \$('#button-reward').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#reward').load('index.php?route=customer/customer.reward&user_token=";
        // line 664
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-reward').val('');
                \$('#input-points').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#ip').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
});

\$('#authorize').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#authorize').load(this.href);
});

\$('#authorize').on('click', 'a', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#authorize').load('index.php?route=customer/customer.authorize&user_token=";
        // line 718
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 727
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
        return "admin/view/template/customer/customer_form.twig";
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
        return array (  1428 => 727,  1416 => 718,  1359 => 664,  1333 => 641,  1308 => 619,  1282 => 596,  1258 => 575,  1232 => 552,  1210 => 533,  1186 => 512,  1168 => 497,  1082 => 414,  1067 => 402,  1014 => 352,  1010 => 351,  1002 => 346,  998 => 345,  989 => 339,  982 => 335,  978 => 334,  973 => 332,  966 => 328,  961 => 326,  956 => 324,  950 => 321,  946 => 320,  937 => 314,  930 => 310,  925 => 308,  918 => 304,  913 => 302,  908 => 300,  902 => 297,  898 => 296,  889 => 290,  882 => 286,  877 => 284,  872 => 282,  866 => 279,  862 => 278,  854 => 273,  850 => 272,  842 => 267,  838 => 266,  830 => 261,  823 => 257,  819 => 256,  814 => 254,  807 => 250,  803 => 249,  798 => 247,  791 => 243,  786 => 241,  779 => 237,  774 => 235,  769 => 233,  758 => 227,  753 => 225,  743 => 220,  738 => 218,  733 => 216,  729 => 214,  723 => 213,  719 => 211,  712 => 207,  702 => 206,  695 => 204,  690 => 203,  688 => 202,  685 => 201,  678 => 197,  668 => 196,  661 => 194,  656 => 193,  654 => 192,  651 => 191,  644 => 187,  634 => 186,  627 => 184,  622 => 183,  620 => 182,  617 => 181,  610 => 177,  599 => 175,  589 => 174,  581 => 173,  569 => 172,  563 => 169,  558 => 168,  556 => 167,  553 => 166,  546 => 162,  536 => 161,  529 => 159,  524 => 158,  522 => 157,  519 => 156,  512 => 152,  502 => 151,  495 => 149,  490 => 148,  488 => 147,  485 => 146,  478 => 142,  475 => 141,  454 => 138,  451 => 137,  447 => 136,  443 => 135,  438 => 133,  433 => 132,  431 => 131,  428 => 130,  421 => 126,  418 => 125,  397 => 122,  394 => 121,  390 => 120,  386 => 119,  381 => 117,  376 => 116,  374 => 115,  371 => 114,  364 => 110,  361 => 109,  346 => 107,  342 => 106,  338 => 105,  332 => 104,  325 => 102,  320 => 101,  318 => 100,  315 => 99,  313 => 98,  310 => 97,  306 => 96,  293 => 92,  288 => 90,  278 => 85,  273 => 83,  263 => 78,  258 => 76,  248 => 71,  243 => 69,  237 => 65,  222 => 63,  218 => 62,  212 => 59,  206 => 55,  191 => 53,  187 => 52,  181 => 49,  175 => 45,  160 => 43,  156 => 42,  150 => 39,  145 => 37,  140 => 35,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  99 => 21,  92 => 16,  81 => 14,  77 => 13,  72 => 11,  66 => 10,  61 => 9,  53 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        {% if orders %}
          <a href=\"{{ orders }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_order }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-receipt\"></i></a>
        {% endif %}
        <button type=\"submit\" id=\"button-save\" form=\"form-customer\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-address\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_address }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-payment\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_payment_method }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_history }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-transaction\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_transaction }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_reward }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_ip }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-authorize\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_authorize }}</a></li>
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-general\" class=\"tab-pane active\">
            <form id=\"form-customer\" action=\"{{ save }}\" method=\"post\">
              <fieldset>
                <legend>{{ text_customer }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-store\" class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                      {% for store in stores %}
                        <option value=\"{{ store.store_id }}\"{% if store.store_id == store_id %} selected{% endif %}>{{ store.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language\" class=\"col-sm-2 col-form-label\">{{ entry_language }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.language_id }}\"{% if language.language_id == language_id %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                      {% for customer_group in customer_groups %}
                        <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">{{ entry_firstname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\" required/>
                    <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">{{ entry_lastname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\" required/>
                    <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" required/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"{% if config_telephone_required %} required{% endif %}/>
                    <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                {% for custom_field in custom_fields %}

                  {% if custom_field.location == 'account' %}

                    {% if custom_field.type == 'select' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
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
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'checkbox' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'text' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'textarea' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'file' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                            <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'date' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'time' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'datetime' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                  {% endif %}
                {% endfor %}
              </fieldset>
              <fieldset>
                <legend>{{ text_password }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-password\" class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" required autocomplete=\"new-password\"/>
                    <div id=\"error-password\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">{{ entry_confirm }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\" required autocomplete=\"new-password\"/>
                    <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_other }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_newsletter }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"newsletter\" value=\"1\" checked=\"{{ newsletter }}\" input-id=\"input-newsletter\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"status\" value=\"1\" checked=\"{{ status }}\" input-id=\"input-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_safe }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"safe\" value=\"1\" checked=\"{{ safe }}\" input-id=\"input-safe\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_safe }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_commenter }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"commenter\" value=\"1\" checked=\"{{ commenter }}\" input-id=\"input-commenter\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_commenter }}</div>
                  </div>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"customer_id\" value=\"{{ customer_id }}\" id=\"input-customer-id\"/>
            </form>
          </div>
          <div id=\"tab-address\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_address }}</legend>
              <div id=\"address\">{{ address }}</div>
            </fieldset>
          </div>
          <div id=\"tab-payment\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_payment_method }}</legend>
              <div id=\"payment-method\">{{ payment_method }}</div>
            </fieldset>
          </div>
          <div id=\"tab-history\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_history }}</legend>
              <div id=\"history\">{{ history }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_history_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-history\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"comment\" rows=\"8\" placeholder=\"{{ entry_comment }}\" id=\"input-history\" class=\"form-control\"></textarea>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_history_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-transaction\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_transaction }}</legend>
              <div id=\"transaction\">{{ transaction }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_transaction_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"{{ entry_description }}\" id=\"input-transaction\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">{{ entry_amount }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"{{ entry_amount }}\" id=\"input-amount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_transaction_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-reward\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_reward }}</legend>
              <div id=\"reward\">{{ reward }}</div>
            </fieldset>
            <fieldset>
              <legend>{{ text_reward_add }}</legend>
              <div class=\"row mb-3\">
                <label for=\"input-reward\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"description\" value=\"\" placeholder=\"{{ entry_description }}\" id=\"input-reward\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-points\" class=\"col-sm-2 col-form-label\">{{ entry_points }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_points }}</div>
                </div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_reward_add }}</button>
              </div>
            </fieldset>
          </div>
          <div id=\"tab-ip\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_ip }}</legend>
              <div id=\"ip\">{{ ip }}</div>
            </fieldset>
          </div>
          <div id=\"tab-authorize\" class=\"tab-pane\">
            <fieldset>
              <legend>{{ text_authorize }}</legend>
              <div id=\"authorize\">{{ authorize }}</div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('action'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-save').button('loading');
        },
        complete: function() {
            \$('#button-save').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$(element).find('.is-invalid').removeClass('is-invalid');
            \$(element).find('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['customer_id']) {
                    \$('#input-customer-id').val(json['customer_id']);

                    \$('#address').load('index.php?route=customer/address&user_token={{ user_token }}&customer_id=' + json['customer_id']);
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token={{ user_token }}&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#address').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$('#modal-address').remove();

    \$.ajax({
        url: \$(element).val(),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            var modal = new bootstrap.Modal(document.querySelector('#modal-address'));

            modal.show();
        }
    });
});

\$('#payment-method').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#payment-method').load(this.href);
});

\$('#payment-method').on('click', 'button', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#payment-method').on('change', 'input[name=\\'status\\']', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.disablePayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#payment-method').load('index.php?route=customer/customer.getPayment&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addHistory&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'comment=' + encodeURIComponent(\$('#input-history').val()),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer.history&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addTransaction&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-transaction').val()) + '&amount=' + \$('#input-amount').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-transaction').button('loading');
        },
        complete: function() {
            \$('#button-transaction').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#transaction').load('index.php?route=customer/customer.transaction&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-transaction').val('');
                \$('#input-amount').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#reward').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
});

\$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addReward&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        data: 'description=' + encodeURIComponent(\$('#input-reward').val()) + '&points=' + \$('#input-points').val(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-reward').button('loading');
        },
        complete: function() {
            \$('#button-reward').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#reward').load('index.php?route=customer/customer.reward&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());

                \$('#input-reward').val('');
                \$('#input-points').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#ip').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
});

\$('#authorize').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#authorize').load(this.href);
});

\$('#authorize').on('click', 'a', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#authorize').load('index.php?route=customer/customer.authorize&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val());
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "admin/view/template/customer/customer_form.twig", "C:\\xampp\\htdocs\\bareeq_platform\\admin\\view\\template\\customer\\customer_form.twig");
    }
}
