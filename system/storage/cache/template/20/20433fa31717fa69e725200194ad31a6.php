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

/* catalog/view/template/account/order_list.twig */
class __TwigTemplate_7c981474d31dfea478488041e16c81e7 extends Template
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
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\">
        <a href=\"";
            // line 6
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            yield "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "  </ul>

  <div class=\"row\">
    ";
        // line 12
        yield ($context["column_left"] ?? null);
        yield "

    <div id=\"content\" class=\"col\">
      ";
        // line 15
        yield ($context["content_top"] ?? null);
        yield "

      <div class=\"bareq-login-wrapper\">

        ";
        // line 20
        yield "        <div class=\"mb-4\">
          <h1 class=\"bareq-login-title mb-1\">";
        // line 21
        yield ((($context["text_my_orders"] ?? null)) ? ($context["text_my_orders"]) : (($context["heading_title"] ?? null)));
        yield "</h1>
          <p class=\"bareq-login-subtitle\">
            ";
        // line 23
        yield ((($context["text_order_detail"] ?? null)) ? ($context["text_order_detail"]) : ("Review your order details, addresses and history in one place."));
        yield "
          </p>
        </div>

        ";
        // line 28
        yield "        <div class=\"row g-3 mb-3\">
          <div class=\"col-md-6\">
            <div class=\"bareq-login-card bareq-login-card--side h-100\">
              <div class=\"card-title mb-1\">";
        // line 31
        yield ($context["text_invoice_no"] ?? null);
        yield "</div>
              <div class=\"card-highlight\">
                ";
        // line 33
        if (($context["invoice_no"] ?? null)) {
            yield ($context["invoice_no"] ?? null);
        } else {
            yield ($context["text_tbc"] ?? null);
        }
        // line 34
        yield "              </div>
            </div>
          </div>

          <div class=\"col-md-6\">
            <div class=\"bareq-login-card bareq-login-card--side h-100\">
              <div class=\"card-title mb-1\">";
        // line 40
        yield ($context["text_order_id"] ?? null);
        yield "</div>
              <div class=\"card-highlight\">#";
        // line 41
        yield ($context["order_id"] ?? null);
        yield "</div>
            </div>
          </div>
        </div>

        ";
        // line 47
        yield "        ";
        if ((($context["payment_address"] ?? null) || ($context["shipping_address"] ?? null))) {
            // line 48
            yield "          <div class=\"row g-3 mb-3\">
            ";
            // line 49
            if (($context["payment_address"] ?? null)) {
                // line 50
                yield "              <div class=\"col-md-6\">
                <div class=\"bareq-login-card bareq-login-card--side h-100\">
                  <div class=\"card-title mb-1\">";
                // line 52
                yield ($context["text_payment_address"] ?? null);
                yield "</div>
                  <div class=\"card-text\">";
                // line 53
                yield ($context["payment_address"] ?? null);
                yield "</div>
                </div>
              </div>
            ";
            }
            // line 57
            yield "
            ";
            // line 58
            if (($context["shipping_address"] ?? null)) {
                // line 59
                yield "              <div class=\"col-md-6\">
                <div class=\"bareq-login-card bareq-login-card--side h-100\">
                  <div class=\"card-title mb-1\">";
                // line 61
                yield ($context["text_shipping_address"] ?? null);
                yield "</div>
                  <div class=\"card-text\">";
                // line 62
                yield ($context["shipping_address"] ?? null);
                yield "</div>
                </div>
              </div>
            ";
            }
            // line 66
            yield "          </div>
        ";
        }
        // line 68
        yield "
        ";
        // line 70
        yield "        <div class=\"row g-3 mb-4\">
          ";
        // line 71
        if (($context["shipping_method"] ?? null)) {
            // line 72
            yield "            <div class=\"col-md-6\">
              <div class=\"bareq-login-card bareq-login-card--side h-100\">
                <div class=\"card-title mb-1\">";
            // line 74
            yield ($context["text_shipping_method"] ?? null);
            yield "</div>
                <div class=\"card-text\">";
            // line 75
            yield ($context["shipping_method"] ?? null);
            yield "</div>
              </div>
            </div>
          ";
        }
        // line 79
        yield "
          <div class=\"col-md-6\">
            <div class=\"bareq-login-card bareq-login-card--side h-100\">
              <div class=\"card-title mb-1\">";
        // line 82
        yield ($context["text_payment_method"] ?? null);
        yield "</div>
              <div class=\"card-text\">";
        // line 83
        yield ($context["payment_method"] ?? null);
        yield "</div>
            </div>
          </div>
        </div>

        ";
        // line 89
        yield "        <div class=\"bareq-login-card bareq-login-card--main mb-4\">
          <div class=\"card-title mb-3\">";
        // line 90
        yield ($context["heading_title"] ?? null);
        yield "</div>

          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover align-middle mb-0\">
              <thead>
                <tr>
                  <th>";
        // line 96
        yield ($context["column_product"] ?? null);
        yield "</th>
                  <th class=\"text-end\">";
        // line 97
        yield ($context["column_quantity"] ?? null);
        yield "</th>
                  <th class=\"text-end\">";
        // line 98
        yield ($context["column_price"] ?? null);
        yield "</th>
                  <th class=\"text-end\">";
        // line 99
        yield ($context["column_total"] ?? null);
        yield "</th>
                  <th class=\"text-end\">";
        // line 100
        yield ($context["column_action"] ?? null);
        yield "</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 104
        $context["product_row"] = 0;
        // line 105
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 106
            yield "                  <tr id=\"product-row-";
            yield ($context["product_row"] ?? null);
            yield "\">
                    <td>
                      <a href=\"";
            // line 108
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "view", [], "any", false, false, false, 108);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 108);
            yield "</a>
                      <div id=\"error-";
            // line 109
            yield ($context["product_row"] ?? null);
            yield "-product\" class=\"invalid-feedback mt-0\"></div>

                      <ul class=\"list-unstyled mb-0 mt-1\">
                        <li>
                          <small> - ";
            // line 113
            yield ($context["text_model"] ?? null);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 113);
            yield "</small>
                        </li>
                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 115));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 116
                yield "                          <li>
                            <small> - ";
                // line 117
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 117);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 117);
                yield "</small>
                            <div id=\"error-";
                // line 118
                yield ($context["product_row"] ?? null);
                yield "-option-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 118);
                yield "\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 121)) {
                // line 122
                yield "                          <li>
                            <small>
                              - ";
                // line 124
                yield ($context["text_subscription"] ?? null);
                yield ":
                              ";
                // line 125
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 125)) {
                    // line 126
                    yield "                                <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 126);
                    yield "\" target=\"_blank\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription_plan", [], "any", false, false, false, 126);
                    yield "</a>
                              ";
                } else {
                    // line 128
                    yield "                                ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription_plan", [], "any", false, false, false, 128);
                    yield "
                              ";
                }
                // line 130
                yield "                            </small>
                            <div id=\"error-";
                // line 131
                yield ($context["product_row"] ?? null);
                yield "-subscription\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        ";
            }
            // line 134
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 134)) {
                // line 135
                yield "                          <li>
                            <small> - ";
                // line 136
                yield ($context["text_points"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 136);
                yield "</small>
                          </li>
                        ";
            }
            // line 139
            yield "                      </ul>

                      ";
            // line 142
            yield "                      <form id=\"form-product-";
            yield ($context["product_row"] ?? null);
            yield "\">
                        <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 143
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 143);
            yield "\"/>
                        <input type=\"hidden\" name=\"quantity\" value=\"";
            // line 144
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 144);
            yield "\"/>

                        ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 146));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 147
                yield "                          ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 147) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 147) == "radio"))) {
                    // line 148
                    yield "                            <input type=\"hidden\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 148);
                    yield "\"/>
                          ";
                }
                // line 150
                yield "                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 150) == "checkbox")) {
                    // line 151
                    yield "                            <input type=\"hidden\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 151);
                    yield "\"/>
                          ";
                }
                // line 153
                yield "                          ";
                if (((((((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "text") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "textarea")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "file")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "date")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "datetime")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "time"))) {
                    // line 154
                    yield "                            <input type=\"hidden\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 154);
                    yield "\"/>
                          ";
                }
                // line 156
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "
                        <input type=\"hidden\" name=\"subscription_plan_id\" value=\"";
            // line 158
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription_plan_id", [], "any", false, false, false, 158);
            yield "\"/>
                      </form>
                    </td>

                    <td class=\"text-end\">";
            // line 162
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 162);
            yield "</td>
                    <td class=\"text-end\">
                      <x-currency code=\"";
            // line 164
            yield ($context["currency_code"] ?? null);
            yield "\" amount=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 164);
            yield "\" value=\"";
            yield ($context["currency_value"] ?? null);
            yield "\"></x-currency>
                    </td>
                    <td class=\"text-end\">
                      <x-currency code=\"";
            // line 167
            yield ($context["currency_code"] ?? null);
            yield "\" amount=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 167);
            yield "\" value=\"";
            yield ($context["currency_value"] ?? null);
            yield "\"></x-currency>
                    </td>
                    <td class=\"text-end text-nowrap\" style=\"width:1px;\">
                      <div class=\"d-grid gap-1\">
                        <button type=\"submit\" form=\"form-product-";
            // line 171
            yield ($context["product_row"] ?? null);
            yield "\" class=\"bareq-btn-main mb-1\">
                          ";
            // line 172
            yield ($context["button_reorder"] ?? null);
            yield "
                        </button>
                        <a href=\"";
            // line 174
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 174);
            yield "\" class=\"btn btn-danger btn-sm\">
                          ";
            // line 175
            yield ($context["button_return"] ?? null);
            yield "
                        </a>
                      </div>
                    </td>
                  </tr>
                  ";
            // line 180
            $context["product_row"] = (($context["product_row"] ?? null) + 1);
            // line 181
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "
                ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 184
            yield "                  <tr>
                    <td colspan=\"2\"></td>
                    <td class=\"text-end\"><strong>";
            // line 186
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 186);
            yield "</strong></td>
                    <td class=\"text-end\">
                      <x-currency code=\"";
            // line 188
            yield ($context["currency_code"] ?? null);
            yield "\" amount=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "value", [], "any", false, false, false, 188);
            yield "\" value=\"";
            yield ($context["currency_value"] ?? null);
            yield "\"></x-currency>
                    </td>
                    <td></td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "              </tbody>
            </table>
          </div>
        </div>

        ";
        // line 199
        yield "        ";
        if (($context["comment"] ?? null)) {
            // line 200
            yield "          <div class=\"bareq-login-card bareq-login-card--side mb-4\">
            <div class=\"card-title mb-1\">";
            // line 201
            yield ($context["text_comment"] ?? null);
            yield "</div>
            <div class=\"card-text\">";
            // line 202
            yield ($context["comment"] ?? null);
            yield "</div>
          </div>
        ";
        }
        // line 205
        yield "
        ";
        // line 207
        yield "        <div class=\"bareq-login-card bareq-login-card--side mb-4\">
          <div class=\"card-title mb-2\">";
        // line 208
        yield ($context["text_history"] ?? null);
        yield "</div>
          <div id=\"history\">";
        // line 209
        yield ($context["history"] ?? null);
        yield "</div>
        </div>

        <div class=\"d-flex justify-content-end\">
          <a href=\"";
        // line 213
        yield ($context["continue"] ?? null);
        yield "\" class=\"bareq-btn-main\">
            ";
        // line 214
        yield ($context["button_continue"] ?? null);
        yield "
          </a>
        </div>

      </div> ";
        // line 219
        yield "
      ";
        // line 221
        yield "    </div>

    ";
        // line 223
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>

<script type=\"text/javascript\"><!--
var product_row = 0;

\$('form').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language=";
        // line 242
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$(button).button('loading');
        },
        complete: function() {
            \$(button).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('form').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
        // line 260
        yield ($context["error_reorder"] ?? null);
        yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                product_row = \$(element).attr('id').substr(13);

                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    delete json['error']['warning'];
                }

                for (key in json['error']) {
                    \$('#error-' + product_row + '-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 278
        yield ($context["language"] ?? null);
        yield "');
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
//--></script>
";
        // line 293
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
        return "catalog/view/template/account/order_list.twig";
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
        return array (  661 => 293,  643 => 278,  622 => 260,  601 => 242,  579 => 223,  575 => 221,  572 => 219,  565 => 214,  561 => 213,  554 => 209,  550 => 208,  547 => 207,  544 => 205,  538 => 202,  534 => 201,  531 => 200,  528 => 199,  521 => 193,  506 => 188,  501 => 186,  497 => 184,  493 => 183,  490 => 182,  484 => 181,  482 => 180,  474 => 175,  470 => 174,  465 => 172,  461 => 171,  450 => 167,  440 => 164,  435 => 162,  428 => 158,  425 => 157,  419 => 156,  411 => 154,  408 => 153,  400 => 151,  397 => 150,  389 => 148,  386 => 147,  382 => 146,  377 => 144,  373 => 143,  368 => 142,  364 => 139,  356 => 136,  353 => 135,  350 => 134,  344 => 131,  341 => 130,  335 => 128,  327 => 126,  325 => 125,  321 => 124,  317 => 122,  314 => 121,  303 => 118,  297 => 117,  294 => 116,  290 => 115,  283 => 113,  276 => 109,  270 => 108,  264 => 106,  259 => 105,  257 => 104,  250 => 100,  246 => 99,  242 => 98,  238 => 97,  234 => 96,  225 => 90,  222 => 89,  214 => 83,  210 => 82,  205 => 79,  198 => 75,  194 => 74,  190 => 72,  188 => 71,  185 => 70,  182 => 68,  178 => 66,  171 => 62,  167 => 61,  163 => 59,  161 => 58,  158 => 57,  151 => 53,  147 => 52,  143 => 50,  141 => 49,  138 => 48,  135 => 47,  127 => 41,  123 => 40,  115 => 34,  109 => 33,  104 => 31,  99 => 28,  92 => 23,  87 => 21,  84 => 20,  77 => 15,  71 => 12,  66 => 9,  55 => 6,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\">
        <a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
      </li>
    {% endfor %}
  </ul>

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      <div class=\"bareq-login-wrapper\">

        {# عنوان الصفحة #}
        <div class=\"mb-4\">
          <h1 class=\"bareq-login-title mb-1\">{{ text_my_orders ?: heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">
            {{ text_order_detail ?: 'Review your order details, addresses and history in one place.' }}
          </p>
        </div>

        {# صف رقم الفاتورة ورقم الطلب #}
        <div class=\"row g-3 mb-3\">
          <div class=\"col-md-6\">
            <div class=\"bareq-login-card bareq-login-card--side h-100\">
              <div class=\"card-title mb-1\">{{ text_invoice_no }}</div>
              <div class=\"card-highlight\">
                {% if invoice_no %}{{ invoice_no }}{% else %}{{ text_tbc }}{% endif %}
              </div>
            </div>
          </div>

          <div class=\"col-md-6\">
            <div class=\"bareq-login-card bareq-login-card--side h-100\">
              <div class=\"card-title mb-1\">{{ text_order_id }}</div>
              <div class=\"card-highlight\">#{{ order_id }}</div>
            </div>
          </div>
        </div>

        {# عناوين الدفع والشحن #}
        {% if payment_address or shipping_address %}
          <div class=\"row g-3 mb-3\">
            {% if payment_address %}
              <div class=\"col-md-6\">
                <div class=\"bareq-login-card bareq-login-card--side h-100\">
                  <div class=\"card-title mb-1\">{{ text_payment_address }}</div>
                  <div class=\"card-text\">{{ payment_address }}</div>
                </div>
              </div>
            {% endif %}

            {% if shipping_address %}
              <div class=\"col-md-6\">
                <div class=\"bareq-login-card bareq-login-card--side h-100\">
                  <div class=\"card-title mb-1\">{{ text_shipping_address }}</div>
                  <div class=\"card-text\">{{ shipping_address }}</div>
                </div>
              </div>
            {% endif %}
          </div>
        {% endif %}

        {# طرق الدفع والشحن #}
        <div class=\"row g-3 mb-4\">
          {% if shipping_method %}
            <div class=\"col-md-6\">
              <div class=\"bareq-login-card bareq-login-card--side h-100\">
                <div class=\"card-title mb-1\">{{ text_shipping_method }}</div>
                <div class=\"card-text\">{{ shipping_method }}</div>
              </div>
            </div>
          {% endif %}

          <div class=\"col-md-6\">
            <div class=\"bareq-login-card bareq-login-card--side h-100\">
              <div class=\"card-title mb-1\">{{ text_payment_method }}</div>
              <div class=\"card-text\">{{ payment_method }}</div>
            </div>
          </div>
        </div>

        {# جدول المنتجات #}
        <div class=\"bareq-login-card bareq-login-card--main mb-4\">
          <div class=\"card-title mb-3\">{{ heading_title }}</div>

          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover align-middle mb-0\">
              <thead>
                <tr>
                  <th>{{ column_product }}</th>
                  <th class=\"text-end\">{{ column_quantity }}</th>
                  <th class=\"text-end\">{{ column_price }}</th>
                  <th class=\"text-end\">{{ column_total }}</th>
                  <th class=\"text-end\">{{ column_action }}</th>
                </tr>
              </thead>
              <tbody>
                {% set product_row = 0 %}
                {% for product in products %}
                  <tr id=\"product-row-{{ product_row }}\">
                    <td>
                      <a href=\"{{ product.view }}\">{{ product.name }}</a>
                      <div id=\"error-{{ product_row }}-product\" class=\"invalid-feedback mt-0\"></div>

                      <ul class=\"list-unstyled mb-0 mt-1\">
                        <li>
                          <small> - {{ text_model }}: {{ product.model }}</small>
                        </li>
                        {% for option in product.option %}
                          <li>
                            <small> - {{ option.name }}: {{ option.value }}</small>
                            <div id=\"error-{{ product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        {% endfor %}
                        {% if product.subscription %}
                          <li>
                            <small>
                              - {{ text_subscription }}:
                              {% if product.subscription %}
                                <a href=\"{{ product.subscription }}\" target=\"_blank\">{{ product.subscription_plan }}</a>
                              {% else %}
                                {{ product.subscription_plan }}
                              {% endif %}
                            </small>
                            <div id=\"error-{{ product_row }}-subscription\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        {% endif %}
                        {% if product.reward %}
                          <li>
                            <small> - {{ text_points }}: {{ product.reward }}</small>
                          </li>
                        {% endif %}
                      </ul>

                      {# نموذج إعادة الطلب #}
                      <form id=\"form-product-{{ product_row }}\">
                        <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/>
                        <input type=\"hidden\" name=\"quantity\" value=\"{{ product.quantity }}\"/>

                        {% for option in product.option %}
                          {% if option.type == 'select' or option.type == 'radio' %}
                            <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.product_option_value_id }}\"/>
                          {% endif %}
                          {% if option.type == 'checkbox' %}
                            <input type=\"hidden\" name=\"option[{{ option.product_option_id }}][]\" value=\"{{ option.product_option_value_id }}\"/>
                          {% endif %}
                          {% if option.type == 'text' or option.type == 'textarea' or option.type == 'file' or option.type == 'date' or option.type == 'datetime' or option.type == 'time' %}
                            <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\"/>
                          {% endif %}
                        {% endfor %}

                        <input type=\"hidden\" name=\"subscription_plan_id\" value=\"{{ product.subscription_plan_id }}\"/>
                      </form>
                    </td>

                    <td class=\"text-end\">{{ product.quantity }}</td>
                    <td class=\"text-end\">
                      <x-currency code=\"{{ currency_code }}\" amount=\"{{ product.price }}\" value=\"{{ currency_value }}\"></x-currency>
                    </td>
                    <td class=\"text-end\">
                      <x-currency code=\"{{ currency_code }}\" amount=\"{{ product.total }}\" value=\"{{ currency_value }}\"></x-currency>
                    </td>
                    <td class=\"text-end text-nowrap\" style=\"width:1px;\">
                      <div class=\"d-grid gap-1\">
                        <button type=\"submit\" form=\"form-product-{{ product_row }}\" class=\"bareq-btn-main mb-1\">
                          {{ button_reorder }}
                        </button>
                        <a href=\"{{ product.return }}\" class=\"btn btn-danger btn-sm\">
                          {{ button_return }}
                        </a>
                      </div>
                    </td>
                  </tr>
                  {% set product_row = product_row + 1 %}
                {% endfor %}

                {% for total in totals %}
                  <tr>
                    <td colspan=\"2\"></td>
                    <td class=\"text-end\"><strong>{{ total.title }}</strong></td>
                    <td class=\"text-end\">
                      <x-currency code=\"{{ currency_code }}\" amount=\"{{ total.value }}\" value=\"{{ currency_value }}\"></x-currency>
                    </td>
                    <td></td>
                  </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>

        {# تعليق الطلب إن وجد #}
        {% if comment %}
          <div class=\"bareq-login-card bareq-login-card--side mb-4\">
            <div class=\"card-title mb-1\">{{ text_comment }}</div>
            <div class=\"card-text\">{{ comment }}</div>
          </div>
        {% endif %}

        {# سجل حالة الطلب #}
        <div class=\"bareq-login-card bareq-login-card--side mb-4\">
          <div class=\"card-title mb-2\">{{ text_history }}</div>
          <div id=\"history\">{{ history }}</div>
        </div>

        <div class=\"d-flex justify-content-end\">
          <a href=\"{{ continue }}\" class=\"bareq-btn-main\">
            {{ button_continue }}
          </a>
        </div>

      </div> {# /bareq-login-wrapper #}

      {# {{ content_bottom }} #}
    </div>

    {{ column_right }}
  </div>
</div>

<script type=\"text/javascript\"><!--
var product_row = 0;

\$('form').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language={{ language }}',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$(button).button('loading');
        },
        complete: function() {
            \$(button).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('form').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_reorder }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                product_row = \$(element).attr('id').substr(13);

                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    delete json['error']['warning'];
                }

                for (key in json['error']) {
                    \$('#error-' + product_row + '-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
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
//--></script>
{{ footer }}
", "catalog/view/template/account/order_list.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\order_list.twig");
    }
}
