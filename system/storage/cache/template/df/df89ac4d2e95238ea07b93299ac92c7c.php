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

/* admin/view/template/sale/order_info.twig */
class __TwigTemplate_33dce86502733802acebdb68ddf62d95 extends Template
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
      <div class=\"float-end\"><a href=\"";
        // line 5
        yield ($context["invoice"] ?? null);
        yield "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_invoice_print"] ?? null);
        yield "\" class=\"btn btn-info";
        if ( !($context["order_id"] ?? null)) {
            yield " disabled";
        }
        yield "\"><i class=\"fa-solid fa-print\"></i></a> <a href=\"";
        yield ($context["shipping"] ?? null);
        yield "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_shipping_print"] ?? null);
        yield "\" class=\"btn btn-info";
        if ( !($context["shipping_method_code"] ?? null)) {
            yield " disabled";
        }
        yield "\"><i class=\"fa-solid fa-truck\"></i></a> <a href=\"";
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 16
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 22
        yield ($context["text_invoice"] ?? null);
        yield "</strong>
                  <br/>
                  ";
        // line 24
        if ( !($context["invoice_no"] ?? null)) {
            // line 25
            yield "                    <span id=\"output-invoice\">";
            yield ($context["text_tbc"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 27
            yield "                    <span id=\"output-invoice\">";
            yield ($context["invoice_prefix"] ?? null);
            yield ($context["invoice_no"] ?? null);
            yield "</span>
                  ";
        }
        // line 29
        yield "                </div>
              </section>
              ";
        // line 31
        if ( !($context["invoice_no"] ?? null)) {
            // line 32
            yield "                <button type=\"button\" id=\"button-invoice\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_generate"] ?? null);
            yield "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        } else {
            // line 34
            yield "                <button type=\"button\" disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        }
        // line 36
        yield "            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section id=\"section-customer\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 41
        yield ($context["text_customer"] ?? null);
        yield "</strong>
                  <br/>
                  ";
        // line 43
        if (($context["customer_id"] ?? null)) {
            // line 44
            yield "                    <div id=\"output-customer\"><a href=\"";
            yield ($context["customer_edit"] ?? null);
            yield "\" target=\"_blank\">";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "</a></div>
                  ";
        } else {
            // line 46
            yield "                    <div id=\"output-customer\">";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "</div>
                  ";
        }
        // line 48
        yield "                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"form-control p-0 rounded\">
              <div class=\"lead p-2\"><strong>";
        // line 55
        yield ($context["text_date_added"] ?? null);
        yield "</strong>
                <br/>
                ";
        // line 57
        yield ($context["date_added"] ?? null);
        yield "
              </div>
            </div>
          </div>
        </div>
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-store\" class=\"form-select\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 67
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 67);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 67) == ($context["store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 67);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "              </select>
              <label for=\"input-store\">";
        // line 70
        yield ($context["entry_store"] ?? null);
        yield "</label>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-language\" class=\"form-select\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 77
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 77);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 77) == ($context["language_code"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 77);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "              </select>
              <label for=\"input-language\">";
        // line 80
        yield ($context["entry_language"] ?? null);
        yield "</label>
            </div>
          </div>
          <div class=\"col\">
            <div class=\"form-floating\">
              <select id=\"input-currency\" class=\"form-select\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 87
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 87);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 87) == ($context["currency_code"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 87);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "              </select>
              <label for=\"input-currency\">";
        // line 90
        yield ($context["entry_currency"] ?? null);
        yield "</label>
            </div>
          </div>
        </div>
        <form id=\"form-cart\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>";
        // line 98
        yield ($context["column_product"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 99
        yield ($context["column_quantity"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 100
        yield ($context["column_price"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 101
        yield ($context["column_total"] ?? null);
        yield "</th>
                <th class=\"text-end\" style=\"width: 1px;\">";
        // line 102
        yield ($context["column_action"] ?? null);
        yield "</th>
              </tr>
            </thead>
            <tbody id=\"order-product\">
              ";
        // line 106
        $context["order_product_row"] = 0;
        // line 107
        yield "              ";
        if (($context["order_products"] ?? null)) {
            // line 108
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["order_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 109
                yield "                  <tr>
                    <td><a href=\"";
                // line 110
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "product_edit", [], "any", false, false, false, 110);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "name", [], "any", false, false, false, 110);
                yield "</a>
                      <div id=\"error-product-";
                // line 111
                yield ($context["order_product_row"] ?? null);
                yield "-product\" class=\"invalid-feedback mt-0\"></div>
                      <ul class=\"list-unstyled mb-0\">
                        <li>
                          <small> - ";
                // line 114
                yield ($context["text_model"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "model", [], "any", false, false, false, 114);
                yield "</small>
                        </li>
                        ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 116));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 117
                    yield "                          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 117) != "file")) {
                        // line 118
                        yield "                            <li>
                              <small> - ";
                        // line 119
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 119);
                        yield ": ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 119);
                        yield "</small>
                              <div id=\"error-product-";
                        // line 120
                        yield ($context["order_product_row"] ?? null);
                        yield "-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 120);
                        yield "\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          ";
                    } else {
                        // line 123
                        yield "                            <li>
                              <small> - ";
                        // line 124
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 124);
                        yield ": <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 124);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "filename", [], "any", false, false, false, 124);
                        yield "</a></small>
                              <div id=\"error-product-";
                        // line 125
                        yield ($context["order_product_row"] ?? null);
                        yield "-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                        yield "\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          ";
                    }
                    // line 128
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan_id", [], "any", false, false, false, 129)) {
                    // line 130
                    yield "                          <li>
                            <small> - ";
                    // line 131
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_edit", [], "any", false, false, false, 131)) {
                        yield "<a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_edit", [], "any", false, false, false, 131);
                        yield "\" target=\"_blank\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan", [], "any", false, false, false, 131);
                        yield "</a>";
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan", [], "any", false, false, false, 131);
                    }
                    yield "</small>
                            <div id=\"error-product-";
                    // line 132
                    yield ($context["order_product_row"] ?? null);
                    yield "-subscription\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        ";
                }
                // line 135
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 135)) {
                    // line 136
                    yield "                          <li>
                            <small> - ";
                    // line 137
                    yield ($context["text_points"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 137);
                    yield "</small>
                          </li>
                        ";
                }
                // line 140
                yield "                      </ul>
                      <input type=\"hidden\" name=\"product[";
                // line 141
                yield ($context["order_product_row"] ?? null);
                yield "][product_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "product_id", [], "any", false, false, false, 141);
                yield "\"/> <input type=\"hidden\" name=\"product[";
                yield ($context["order_product_row"] ?? null);
                yield "][quantity]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 141);
                yield "\"/>
                      ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 142));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 143
                    yield "                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 143) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 143) == "radio"))) {
                        // line 144
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 144);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 144);
                        yield "\"/>
                        ";
                    }
                    // line 146
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 146) == "checkbox")) {
                        // line 147
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 147);
                        yield "\"/>
                        ";
                    }
                    // line 149
                    yield "                        ";
                    if (((((((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "text") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "textarea")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "file")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "date")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "datetime")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "time"))) {
                        // line 150
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 150);
                        yield "\"/>
                        ";
                    }
                    // line 152
                    yield "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                yield "                      <input type=\"hidden\" name=\"product[";
                yield ($context["order_product_row"] ?? null);
                yield "][subscription_plan_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan_id", [], "any", false, false, false, 153);
                yield "\"/>
                    </td>
                    <td class=\"text-end\">";
                // line 155
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 155);
                yield "</td>
                    <td class=\"text-end\"><x-currency code=\"";
                // line 156
                yield ($context["currency_code"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "price", [], "any", false, false, false, 156);
                yield "\" value=\"";
                yield ($context["currency_value"] ?? null);
                yield "\"></x-currency></td>
                    <td class=\"text-end\"><x-currency code=\"";
                // line 157
                yield ($context["currency_code"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "total", [], "any", false, false, false, 157);
                yield "\" value=\"";
                yield ($context["currency_value"] ?? null);
                yield "\"></x-currency></td>
                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                // line 158
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
                // line 160
                $context["order_product_row"] = (($context["order_product_row"] ?? null) + 1);
                // line 161
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order_product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            yield "              ";
        } else {
            // line 163
            yield "                <tr>
                  <td colspan=\"5\" class=\"text-center\">";
            // line 164
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                </tr>
              ";
        }
        // line 167
        yield "            </tbody>
            <tfoot>
              <tr>
                <td colspan=\"4\"></td>
                <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
        </form>
        <div class=\"row\">
          <div class=\"col-md mb-3\">
            <div class=\"input-group\">
              <section id=\"section-payment-address\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>";
        // line 180
        yield ($context["text_payment_address"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-payment-address\">
                    ";
        // line 183
        yield ($context["payment_firstname"] ?? null);
        yield " ";
        yield ($context["payment_lastname"] ?? null);
        yield "
                    <br/>
                    ";
        // line 185
        if (($context["payment_company"] ?? null)) {
            // line 186
            yield "                      ";
            yield ($context["payment_company"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 189
        yield "                    ";
        if (($context["payment_address_1"] ?? null)) {
            // line 190
            yield "                      ";
            yield ($context["payment_address_1"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 193
        yield "                    ";
        if (($context["payment_address_2"] ?? null)) {
            // line 194
            yield "                      ";
            yield ($context["payment_address_2"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 197
        yield "                    ";
        if (($context["payment_city"] ?? null)) {
            // line 198
            yield "                      ";
            yield ($context["payment_city"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 201
        yield "                    ";
        if (($context["payment_postcode"] ?? null)) {
            // line 202
            yield "                      ";
            yield ($context["payment_postcode"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 205
        yield "                    ";
        if (($context["payment_zone"] ?? null)) {
            // line 206
            yield "                      ";
            yield ($context["payment_zone"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 209
        yield "                    ";
        if (($context["payment_country"] ?? null)) {
            // line 210
            yield "                      ";
            yield ($context["payment_country"] ?? null);
            yield "
                    ";
        }
        // line 212
        yield "                  </div>
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-payment-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"shipping-address\" class=\"col mb-3";
        // line 218
        if ( !($context["shipping_method_code"] ?? null)) {
            yield " d-none";
        }
        yield "\">
            <div class=\"input-group\">
              <section id=\"section-shipping-address\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>";
        // line 221
        yield ($context["text_shipping_address"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-shipping-address\">
                    ";
        // line 224
        yield ($context["shipping_firstname"] ?? null);
        yield " ";
        yield ($context["shipping_lastname"] ?? null);
        yield "
                    <br/>
                    ";
        // line 226
        if (($context["shipping_company"] ?? null)) {
            // line 227
            yield "                      ";
            yield ($context["shipping_company"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 230
        yield "                    ";
        if (($context["shipping_address_1"] ?? null)) {
            // line 231
            yield "                      ";
            yield ($context["shipping_address_1"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 234
        yield "                    ";
        if (($context["shipping_address_2"] ?? null)) {
            // line 235
            yield "                      ";
            yield ($context["shipping_address_2"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 238
        yield "                    ";
        if (($context["shipping_city"] ?? null)) {
            // line 239
            yield "                      ";
            yield ($context["shipping_city"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 242
        yield "                    ";
        if (($context["shipping_postcode"] ?? null)) {
            // line 243
            yield "                      ";
            yield ($context["shipping_postcode"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 246
        yield "                    ";
        if (($context["shipping_zone"] ?? null)) {
            // line 247
            yield "                      ";
            yield ($context["shipping_zone"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 250
        yield "                    ";
        if (($context["shipping_country"] ?? null)) {
            // line 251
            yield "                      ";
            yield ($context["shipping_country"] ?? null);
            yield "
                    ";
        }
        // line 253
        yield "                  </div>
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-shipping-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div id=\"shipping-method\" class=\"col-md mb-3";
        // line 261
        if ( !($context["shipping_method_code"] ?? null)) {
            yield " d-none";
        }
        yield "\" style=\"min-height: 64px;\">
            <div class=\"input-group\">
              <section id=\"section-shipping-method\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 264
        yield ($context["text_shipping_method"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-shipping-method\">";
        // line 266
        yield ($context["shipping_method_name"] ?? null);
        yield "</div>
                </div>
              </section>
              <button type=\"button\" id=\"button-shipping-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"payment-method\" class=\"col-md mb-3\">
            <div class=\"input-group\">
              <div id=\"input-payment-method-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 275
        yield ($context["text_payment_method"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-payment-method\">";
        // line 277
        yield ($context["payment_method_name"] ?? null);
        yield "</div>
                </div>
              </div>
              <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div id=\"collapse-order\" class=\"collapse\">
          <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3\">
            ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 287
            yield "              <div class=\"col mb-3\">";
            yield $context["extension"];
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        yield "            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead p-0\"><strong>";
        // line 292
        yield ($context["text_reward"] ?? null);
        yield "</strong>
                    <br/>
                    <div id=\"output-point\">";
        // line 294
        yield ($context["points"] ?? null);
        yield "</div>
                  </div>
                </div>
                ";
        // line 297
        if ( !($context["reward_total"] ?? null)) {
            // line 298
            yield "                  <button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_reward_add"] ?? null);
            yield "\" class=\"btn btn-success\"";
            if (( !($context["customer_id"] ?? null) ||  !($context["points"] ?? null))) {
                yield " disabled";
            }
            yield "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 300
            yield "                  <button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_reward_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 302
        yield "              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div id=\"input-affiliate-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                  <div class=\"lead\"><strong>";
        // line 307
        yield ($context["text_affiliate"] ?? null);
        yield "</strong>
                    <br/>
                    <div id=\"output-affiliate\">";
        // line 309
        if (($context["affiliate_id"] ?? null)) {
            yield "<a href=\"index.php?route=marketing/affiliate.form&user_token=";
            yield ($context["user_token"] ?? null);
            yield "&customer_id=";
            yield ($context["affiliate_id"] ?? null);
            yield "\" target=\"_blank\">";
            yield ($context["affiliate"] ?? null);
            yield "</a>";
        }
        yield "</div>
                  </div>
                </div>
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-affiliate\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 318
        yield ($context["text_commission"] ?? null);
        yield "</strong>
                    <br/>
                    <div id=\"output-commission\"><x-currency code=\"";
        // line 320
        yield ($context["currency_code"] ?? null);
        yield "\" amount=\"";
        yield ($context["commission"] ?? null);
        yield "\" value=\"";
        yield ($context["currency_value"] ?? null);
        yield "\"></x-currency></div>
                  </div>
                </div>
                ";
        // line 323
        if ( !($context["commission_total"] ?? null)) {
            // line 324
            yield "                  <button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_commission_add"] ?? null);
            yield "\" class=\"btn btn-success\"";
            if ( !($context["affiliate_id"] ?? null)) {
                yield " disabled";
            }
            yield "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 326
            yield "                  <button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_commission_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 328
        yield "              </div>
            </div>
          </div>
        </div>
        <button type=\"button\" id=\"button-collapse\" class=\"btn btn-light btn-lg w-100 mb-3\">";
        // line 332
        yield ($context["text_more"] ?? null);
        yield " <i class=\"fa-solid fa-angle-down\"></i></button>
        <div class=\"row mb-3\">
          <div class=\"col\">
            <div class=\"input-group\">
              <div class=\"form-control rounded-start\" style=\"min-height: 100px;\">
                <div class=\"lead\"><strong>";
        // line 337
        yield ($context["text_comment"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-comment\">";
        // line 339
        yield ($context["comment"] ?? null);
        yield "</div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-comment\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <table class=\"table table-bordered\">
          <tbody id=\"order-total\">
            ";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_total"]) {
            // line 349
            yield "              <tr>
                <td class=\"text-end\"><strong>";
            // line 350
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_total"], "title", [], "any", false, false, false, 350);
            yield "</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\"><x-currency code=\"";
            // line 351
            yield ($context["currency_code"] ?? null);
            yield "\" amount=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_total"], "value", [], "any", false, false, false, 351);
            yield "\" value=\"";
            yield ($context["currency_value"] ?? null);
            yield "\"></x-currency></td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        yield "          </tbody>
        </table>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        // line 357
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
          <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 358
        yield ($context["button_confirm"] ?? null);
        yield "</button>
        </div>
      </div>
    </div>
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> ";
        // line 363
        yield ($context["text_history"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 366
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 367
        yield ($context["tab_additional"] ?? null);
        yield "</a></li>
          ";
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 369
            yield "            <li class=\"nav-item\"><a href=\"#tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 369);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 369);
            yield "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 371
        yield "        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>";
        // line 375
        yield ($context["text_history"] ?? null);
        yield "</legend>
              <div id=\"history\">";
        // line 376
        yield ($context["history"] ?? null);
        yield "</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>";
        // line 380
        yield ($context["text_history_add"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 382
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 386
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 386);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 386) == ($context["order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 386);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 392
        yield ($context["entry_override"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"override\" value=\"1\" checked=\"";
        // line 394
        yield ($context["override"] ?? null);
        yield "\" input-id=\"input-override\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 395
        yield ($context["help_override"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 399
        yield ($context["entry_notify"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"notify\" value=\"1\" checked=\"";
        // line 401
        yield ($context["notify"] ?? null);
        yield "\" input-id=\"input-notify\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 405
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 407
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 411
        yield ($context["button_history_add"] ?? null);
        yield "</button>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 414
        yield ($context["order_id"] ?? null);
        yield "\" id=\"input-order-id\"/>
            </form>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th colspan=\"2\">";
        // line 422
        yield ($context["text_browser"] ?? null);
        yield "</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 427
        yield ($context["text_ip"] ?? null);
        yield "</td>
                    <td>";
        // line 428
        yield ($context["ip"] ?? null);
        yield "</td>
                  </tr>
                  ";
        // line 430
        if (($context["forwarded_ip"] ?? null)) {
            // line 431
            yield "                    <tr>
                      <td>";
            // line 432
            yield ($context["text_forwarded_ip"] ?? null);
            yield "</td>
                      <td>";
            // line 433
            yield ($context["forwarded_ip"] ?? null);
            yield "</td>
                    </tr>
                  ";
        }
        // line 436
        yield "                  <tr>
                    <td>";
        // line 437
        yield ($context["text_user_agent"] ?? null);
        yield "</td>
                    <td>";
        // line 438
        yield ($context["user_agent"] ?? null);
        yield "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 441
        yield ($context["text_accept_language"] ?? null);
        yield "</td>
                    <td>";
        // line 442
        yield ($context["accept_language"] ?? null);
        yield "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 449
            yield "            <div id=\"tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 449);
            yield "\" class=\"tab-pane\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 449);
            yield "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        yield "        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 461
        yield ($context["text_customer"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\" data-oc-target=\"#section-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">";
        // line 467
        yield ($context["entry_customer"] ?? null);
        yield "</label>
            <div class=\"input-group\">
              <input type=\"text\" value=\"";
        // line 469
        yield ($context["firstname"] ?? null);
        yield " ";
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/> <a href=\"";
        yield ($context["customer_add"] ?? null);
        yield "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_customer_add"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 471
        yield ($context["customer_id"] ?? null);
        yield "\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\">";
        // line 475
        yield ($context["entry_customer_group"] ?? null);
        yield "</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              ";
        // line 476
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 477
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 477);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 477) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 477);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 479
        yield "            </select>
            <div id=\"error-customer-group\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-firstname\" class=\"form-label\">";
        // line 483
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"firstname\" value=\"";
        // line 484
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" required/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-lastname\" class=\"form-label\">";
        // line 488
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"lastname\" value=\"";
        // line 489
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" required/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-email\" class=\"form-label\">";
        // line 493
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 495
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" required/><a href=\"mailto:";
        yield ($context["email"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3";
        // line 499
        if (($context["config_telephone_required"] ?? null)) {
            yield " required";
        }
        yield "\">
            <label for=\"input-telephone\" class=\"form-label\">";
        // line 500
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"telephone\" value=\"";
        // line 501
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>

          ";
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 506
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 506) == "account")) {
                // line 507
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 507) == "select")) {
                    // line 508
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 508);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 509
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 509);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 509);
                    yield "</label> <select name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 509);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 509);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 510
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 511
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 511));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 512
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 512);
                        yield "\"";
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 512)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 512) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 512)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 512);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 514
                    yield "                  </select>
                  <div id=\"error-custom-field-";
                    // line 515
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 515);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 518
                yield "
              ";
                // line 519
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 519) == "radio")) {
                    // line 520
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 520);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 521
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 521);
                    yield "</label>
                  <div id=\"input-custom-field-";
                    // line 522
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 522);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 523
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 523));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 524
                        yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 525
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 525);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 525);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 525);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 525)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 525) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 525)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 525);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 525);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 528
                    yield "                  </div>
                  <div id=\"error-custom-field-";
                    // line 529
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 529);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 532
                yield "
              ";
                // line 533
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 533) == "checkbox")) {
                    // line 534
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 534);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 535
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 535);
                    yield "</label>
                  <div id=\"input-custom-field-";
                    // line 536
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 536);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 537
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 537));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 538
                        yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 539
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 539);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 539);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 539), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 539);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 539);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 542
                    yield "                  </div>
                  <div id=\"error-custom-field-";
                    // line 543
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 543);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 546
                yield "
              ";
                // line 547
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 547) == "text")) {
                    // line 548
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 548);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 549
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 549);
                    yield "</label> <input type=\"text\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549);
                    yield "]\" value=\"";
                    yield (((($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549)] ?? null) : null)) ? ((($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 549)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 549);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 550
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 553
                yield "
              ";
                // line 554
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 554) == "textarea")) {
                    // line 555
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 555);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 556
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 556);
                    yield "</label> <textarea name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 556);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556);
                    yield "\" class=\"form-control\">";
                    yield (((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556)] ?? null) : null)) ? ((($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 556)));
                    yield "</textarea>
                  <div id=\"error-custom-field-";
                    // line 557
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 557);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 560
                yield "
              ";
                // line 561
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 561) == "file")) {
                    // line 562
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 562);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 563
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 563);
                    yield "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 565
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 566
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566);
                    yield "]\" value=\"";
                    yield (((($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566)] ?? null) : null)) ? ((($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 566)));
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566);
                    yield "\" class=\"form-control\"/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 567
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567);
                    yield "\"";
                    if ( !(($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 568
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568);
                    yield "\"";
                    if ( !(($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 570
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 570);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 573
                yield "
              ";
                // line 574
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 574) == "date")) {
                    // line 575
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 575);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 576
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 576);
                    yield "</label> <input type=\"date\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576);
                    yield "]\" value=\"";
                    yield (((($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576)] ?? null) : null)) ? ((($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 576)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 576);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 576);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 577
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 580
                yield "
              ";
                // line 581
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 581) == "time")) {
                    // line 582
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 582);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 583
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 583);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 583);
                    yield "</label> <input type=\"time\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 583);
                    yield "]\" value=\"";
                    yield (((($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 583)] ?? null) : null)) ? ((($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 583)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 583)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 583);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 583);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 584
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 584);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 587
                yield "
              ";
                // line 588
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 588) == "datetime")) {
                    // line 589
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 590
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 590);
                    yield "</label> <input type=\"datetime-local\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590);
                    yield "]\" value=\"";
                    yield (((($_v18 = ($context["account_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590)] ?? null) : null)) ? ((($_v19 = ($context["account_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 590)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 590);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 590);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 591
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 591);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 594
                yield "
            ";
            }
            // line 596
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 597
        yield "
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 599
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-product\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 611
        yield ($context["text_product_add"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-product-add\">
          <div class=\"mb-3\">
            <label for=\"input-product\" class=\"form-label\">";
        // line 617
        yield ($context["entry_product"] ?? null);
        yield "</label> <input type=\"text\" value=\"\" placeholder=\"";
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\"/>
            <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
            <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"input-product-id\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-quantity\" class=\"form-label\">";
        // line 622
        yield ($context["entry_quantity"] ?? null);
        yield "</label> <input type=\"text\" name=\"quantity\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
          </div>
          <div id=\"option\"></div>
          <div id=\"subscription\"></div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-product-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 627
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 639
        yield ($context["text_payment_address"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-address\" data-oc-target=\"#section-payment-address\">
          <div class=\"mb-3\">
            <label for=\"input-payment-address\" class=\"form-label\">";
        // line 645
        yield ($context["entry_address"] ?? null);
        yield "</label>
            <select name=\"payment_address_id\" id=\"input-payment-address\" class=\"form-select\">
              <option value=\"0\" selected>";
        // line 647
        yield ($context["text_none"] ?? null);
        yield "</option>
              ";
        // line 648
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 649
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 649);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 649) == ($context["payment_address_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 649);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 649);
            yield ",";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 649)) {
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 649);
                yield ",";
            }
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 649);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 649);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 649);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 649);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 649);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 651
        yield "            </select>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-firstname\" class=\"form-label\">";
        // line 654
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_firstname\" value=\"";
        // line 655
        yield ($context["payment_firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-payment-firstname\" class=\"form-control\" required/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-lastname\" class=\"form-label\">";
        // line 659
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_lastname\" value=\"";
        // line 660
        yield ($context["payment_lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-payment-lastname\" class=\"form-control\" required/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\">";
        // line 664
        yield ($context["entry_company"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_company\" value=\"";
        // line 665
        yield ($context["payment_company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-1\" class=\"form-label\">";
        // line 668
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_address_1\" value=\"";
        // line 669
        yield ($context["payment_address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-payment-address-1\" class=\"form-control\" required/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\">";
        // line 673
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_address_2\" value=\"";
        // line 674
        yield ($context["payment_address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-city\" class=\"form-label\">";
        // line 677
        yield ($context["entry_city"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_city\" value=\"";
        // line 678
        yield ($context["payment_city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-payment-city\" class=\"form-control\" required/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-postcode\" class=\"form-label\">";
        // line 682
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"payment_postcode\" value=\"";
        // line 683
        yield ($context["payment_postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-payment-postcode\" class=\"form-control\" required/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-country\" class=\"form-label\">";
        // line 687
        yield ($context["entry_country"] ?? null);
        yield "</label>
            <x-country name=\"payment_country_id\" value=\"";
        // line 688
        yield ($context["payment_country_id"] ?? null);
        yield "\" id=\"x-payment-country\" postcode=\"1\" target=\"input-payment-postcode\" input-id=\"input-payment-country\" input-class=\"form-select\" required>
              <option value=\"0\">";
        // line 689
        yield ($context["text_select"] ?? null);
        yield "</option>
            </x-country>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-zone\" class=\"form-label\">";
        // line 694
        yield ($context["entry_zone"] ?? null);
        yield "</label>
            <x-zone name=\"payment_zone_id\" value=\"";
        // line 695
        yield ($context["payment_zone_id"] ?? null);
        yield "\" id=\"x-payment-zone\" target=\"x-payment-country\" input-id=\"input-payment-zone\" input-class=\"form-select\" required>
              <option value=\"0\">";
        // line 696
        yield ($context["text_select"] ?? null);
        yield "</option>
            </x-zone>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 700
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 701
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 701) == "address")) {
                // line 702
                yield "
              ";
                // line 703
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 703) == "select")) {
                    // line 704
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 704);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 705
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 705);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 705);
                    yield "</label> <select name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 705);
                    yield "]\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 705);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 706
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 707
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 707));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 708
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 708);
                        yield "\"";
                        if (((($_v20 = ($context["payment_custom_field"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 708)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 708) == (($_v21 = ($context["payment_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 708)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 708);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 710
                    yield "                  </select>
                  <div id=\"error-payment-custom-field-";
                    // line 711
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 711);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 714
                yield "
              ";
                // line 715
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 715) == "radio")) {
                    // line 716
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 716);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 717
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 717);
                    yield "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 718
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 718);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 719
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 719));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 720
                        yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"payment_custom_field[";
                        // line 721
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 721);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 721);
                        yield "\" id=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 721);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v22 = ($context["payment_custom_field"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 721)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 721) == (($_v23 = ($context["payment_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 721)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 721);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 721);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 724
                    yield "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 725
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 725);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 728
                yield "
              ";
                // line 729
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 729) == "checkbox")) {
                    // line 730
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 730);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 731
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 731);
                    yield "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 732
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 732);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 733
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 733));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 734
                        yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"payment_custom_field[";
                        // line 735
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 735);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 735);
                        yield "\" id=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 735);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v24 = ($context["payment_custom_field"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 735)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 735), (($_v25 = ($context["payment_custom_field"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 735)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 735);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 735);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 738
                    yield "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 739
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 739);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 742
                yield "
              ";
                // line 743
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 743) == "text")) {
                    // line 744
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 744);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 745
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 745);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 745);
                    yield "</label> <input type=\"text\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 745);
                    yield "]\" value=\"";
                    yield (((($_v26 = ($context["payment_custom_field"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 745)] ?? null) : null)) ? ((($_v27 = ($context["payment_custom_field"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 745)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 745)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 745);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 745);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 746
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 746);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 749
                yield "
              ";
                // line 750
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 750) == "textarea")) {
                    // line 751
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 751);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 752
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 752);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 752);
                    yield "</label> <textarea name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 752);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 752);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 752);
                    yield "\" class=\"form-control\">";
                    yield (((($_v28 = ($context["payment_custom_field"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 752)] ?? null) : null)) ? ((($_v29 = ($context["payment_custom_field"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 752)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 752)));
                    yield "</textarea>
                  <div id=\"error-payment-custom-field-";
                    // line 753
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 753);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 756
                yield "
              ";
                // line 757
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 757) == "file")) {
                    // line 758
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 759
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 759);
                    yield "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 761
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 761);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"text\" name=\"payment_custom_field[";
                    // line 762
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 762);
                    yield "]\" value=\"";
                    yield (((($_v30 = ($context["payment_custom_field"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 762)] ?? null) : null)) ? ((($_v31 = ($context["payment_custom_field"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 762)] ?? null) : null)) : (""));
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 762);
                    yield "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-payment-custom-field-";
                    // line 763
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 763);
                    yield "\"";
                    if ( !(($_v32 = ($context["payment_custom_field"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 763)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 764
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 764);
                    yield "\"";
                    if ( !(($_v33 = ($context["payment_custom_field"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 764)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 766
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 766);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 769
                yield "
              ";
                // line 770
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 770) == "date")) {
                    // line 771
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 771);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 772
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 772);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 772);
                    yield "</label> <input type=\"date\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 772);
                    yield "]\" value=\"";
                    yield (((($_v34 = ($context["payment_custom_field"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 772)] ?? null) : null)) ? ((($_v35 = ($context["payment_custom_field"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 772)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 772)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 772);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 772);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 773
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 773);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 776
                yield "
              ";
                // line 777
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 777) == "time")) {
                    // line 778
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 778);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 779
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 779);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 779);
                    yield "</label> <input type=\"time\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 779);
                    yield "]\" value=\"";
                    yield (((($_v36 = ($context["payment_custom_field"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 779)] ?? null) : null)) ? ((($_v37 = ($context["payment_custom_field"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 779)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 779)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 779);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 779);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 780
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 780);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 783
                yield "
              ";
                // line 784
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 784) == "datetime")) {
                    // line 785
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 785);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 786
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 786);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 786);
                    yield "</label> <input type=\"datetime-local\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 786);
                    yield "]\" value=\"";
                    yield (((($_v38 = ($context["payment_custom_field"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 786)] ?? null) : null)) ? ((($_v39 = ($context["payment_custom_field"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 786)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 786)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 786);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 786);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 787
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 787);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 790
                yield "
            ";
            }
            // line 792
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 793
        yield "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 794
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 806
        yield ($context["text_shipping_address"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-address\" data-oc-target=\"section-shipping-address\">
          <div class=\"mb-3\">
            <label for=\"input-shipping-address\" class=\"form-label\">";
        // line 812
        yield ($context["entry_address"] ?? null);
        yield "</label> <select name=\"shipping_address_id\" id=\"input-shipping-address\" class=\"form-select\">
              <option value=\"0\">";
        // line 813
        yield ($context["text_none"] ?? null);
        yield "</option>
              ";
        // line 814
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 815
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 815);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 815) == ($context["shipping_address_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 815);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 815);
            yield ",";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 815)) {
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 815);
                yield ",";
            }
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 815);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 815);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 815);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 815);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 815);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 817
        yield "            </select>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 820
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"shipping_firstname\" value=\"";
        // line 821
        yield ($context["shipping_firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-shipping-firstname\" class=\"form-control\" required/>
            <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 825
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"shipping_lastname\" value=\"";
        // line 826
        yield ($context["shipping_lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-shipping-lastname\" class=\"form-control\" required/>
            <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 830
        yield ($context["entry_company"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"shipping_company\" value=\"";
        // line 831
        yield ($context["shipping_company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-shipping-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 834
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"shipping_address_1\" value=\"";
        // line 835
        yield ($context["shipping_address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-shipping-address-1\" class=\"form-control\" required/>
            <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 839
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"shipping_address_2\" value=\"";
        // line 840
        yield ($context["shipping_address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 843
        yield ($context["entry_city"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"shipping_city\" value=\"";
        // line 844
        yield ($context["shipping_city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-shipping-city\" class=\"form-control\" required/>
            <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 848
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"shipping_postcode\" value=\"";
        // line 849
        yield ($context["shipping_postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-shipping-postcode\" class=\"form-control\" required/>
            <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 853
        yield ($context["entry_country"] ?? null);
        yield "</label>
            <x-country name=\"shipping_country_id\" value=\"";
        // line 854
        yield ($context["shipping_country_id"] ?? null);
        yield "\" id=\"x-shipping-country\" postcode=\"1\" target=\"input-shipping-postcode\" input-id=\"input-shipping-country\" input-class=\"form-select\" required>
              <option value=\"0\">";
        // line 855
        yield ($context["text_select"] ?? null);
        yield "</option>
            </x-country>
            <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 860
        yield ($context["entry_zone"] ?? null);
        yield "</label>
            <x-zone name=\"shipping_zone_id\" value=\"";
        // line 861
        yield ($context["shipping_zone_id"] ?? null);
        yield "\" target=\"x-shipping-country\" input-id=\"input-shipping-zone\" input-class=\"form-select\" required>
              <option value=\"0\">";
        // line 862
        yield ($context["text_select"] ?? null);
        yield "</option>
            </x-zone>
            <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 866
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 867
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 867) == "address")) {
                // line 868
                yield "
              ";
                // line 869
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 869) == "select")) {
                    // line 870
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 870);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 871
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 871);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 871);
                    yield "</label> <select name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 871);
                    yield "]\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 871);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 872
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 873
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 873));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 874
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 874);
                        yield "\"";
                        if (((($_v40 = ($context["shipping_custom_field"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 874)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 874) == (($_v41 = ($context["shipping_custom_field"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 874)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 874);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 876
                    yield "                  </select>
                  <div id=\"error-shipping-custom-field-";
                    // line 877
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 877);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 880
                yield "
              ";
                // line 881
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 881) == "radio")) {
                    // line 882
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 882);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 883
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 883);
                    yield "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 884
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 884);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 885
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 885));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 886
                        yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"shipping_custom_field[";
                        // line 887
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 887);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 887);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 887);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v42 = ($context["shipping_custom_field"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 887)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 887) == (($_v43 = ($context["shipping_custom_field"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 887)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 887);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 887);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 890
                    yield "                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 891
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 891);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 894
                yield "
              ";
                // line 895
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 895) == "checkbox")) {
                    // line 896
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 896);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 897
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 897);
                    yield "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 898
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 898);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 899
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 899));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 900
                        yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"shipping_custom_field[";
                        // line 901
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 901);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 901);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 901);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v44 = ($context["shipping_custom_field"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 901)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 901), (($_v45 = ($context["shipping_custom_field"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 901)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 901);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 901);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 904
                    yield "                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 905
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 905);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 908
                yield "
              ";
                // line 909
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 909) == "text")) {
                    // line 910
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 910);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 911
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 911);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 911);
                    yield "</label> <input type=\"text\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 911);
                    yield "]\" value=\"";
                    yield (((($_v46 = ($context["shipping_custom_field"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 911)] ?? null) : null)) ? ((($_v47 = ($context["shipping_custom_field"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 911)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 911)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 911);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 911);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 912
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 912);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 915
                yield "
              ";
                // line 916
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 916) == "textarea")) {
                    // line 917
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 917);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 918
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 918);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 918);
                    yield "</label> <textarea name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 918);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 918);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 918);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 918);
                    yield "\" class=\"form-control\">";
                    yield (((($_v48 = ($context["shipping_custom_field"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 918)] ?? null) : null)) ? ((($_v49 = ($context["shipping_custom_field"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 918)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 918)));
                    yield "</textarea>
                  <div id=\"error-shipping-custom-field-";
                    // line 919
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 919);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 922
                yield "
              ";
                // line 923
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 923) == "file")) {
                    // line 924
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 924);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 925
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 925);
                    yield "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 927
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 927);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"text\" name=\"shipping_custom_field[";
                    // line 928
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928);
                    yield "]\" value=\"";
                    yield (((($_v50 = ($context["shipping_custom_field"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928)] ?? null) : null)) ? ((($_v51 = ($context["shipping_custom_field"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928)] ?? null) : null)) : (""));
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928);
                    yield "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-shipping-custom-field-";
                    // line 929
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 929);
                    yield "\"";
                    if ( !(($_v52 = ($context["shipping_custom_field"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 929)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 930
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 930);
                    yield "\"";
                    if ( !(($_v53 = ($context["shipping_custom_field"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 930)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 932
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 932);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 935
                yield "
              ";
                // line 936
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 936) == "date")) {
                    // line 937
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 937);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 938
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 938);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 938);
                    yield "</label> <input type=\"date\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 938);
                    yield "]\" value=\"";
                    yield (((($_v54 = ($context["shipping_custom_field"] ?? null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 938)] ?? null) : null)) ? ((($_v55 = ($context["shipping_custom_field"] ?? null)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 938)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 938)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 938);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 938);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 939
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 939);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 942
                yield "
              ";
                // line 943
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 943) == "time")) {
                    // line 944
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 944);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 945
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 945);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 945);
                    yield "</label> <input type=\"time\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 945);
                    yield "]\" value=\"";
                    yield (((($_v56 = ($context["shipping_custom_field"] ?? null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 945)] ?? null) : null)) ? ((($_v57 = ($context["shipping_custom_field"] ?? null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 945)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 945)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 945);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 945);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 946
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 946);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 949
                yield "
              ";
                // line 950
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 950) == "datetime")) {
                    // line 951
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 951);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 952
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 952);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 952);
                    yield "</label> <input type=\"datetime-local\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 952);
                    yield "]\" value=\"";
                    yield (((($_v58 = ($context["shipping_custom_field"] ?? null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 952)] ?? null) : null)) ? ((($_v59 = ($context["shipping_custom_field"] ?? null)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 952)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 952)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 952);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 952);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 953
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 953);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 956
                yield "
            ";
            }
            // line 958
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 959
        yield "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 960
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-truck\"></i> ";
        // line 972
        yield ($context["text_shipping_method"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 976
        yield ($context["text_shipping"] ?? null);
        yield "</p>
        <div id=\"shipping-methods\"></div>
        <form id=\"form-shipping-method\" data-oc-target=\"#section-shipping-method\">
          <input type=\"hidden\" name=\"shipping_method[name]\" value=\"";
        // line 979
        yield ($context["shipping_method_name"] ?? null);
        yield "\" id=\"input-shipping-method-name\"/> <input type=\"hidden\" name=\"shipping_method[code]\" value=\"";
        yield ($context["shipping_method_code"] ?? null);
        yield "\" id=\"input-shipping-method-code\"/> <input type=\"hidden\" name=\"shipping_method[cost]\" value=\"";
        yield ($context["shipping_method_cost"] ?? null);
        yield "\" id=\"input-shipping-method-cost\"/> <input type=\"hidden\" name=\"shipping_method[tax_class_id]\" value=\"";
        yield ($context["shipping_method_tax_class_id"] ?? null);
        yield "\" id=\"input-shipping-method-tax-class\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 981
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> ";
        // line 993
        yield ($context["text_payment_method"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 997
        yield ($context["text_payment"] ?? null);
        yield "</p>
        <div id=\"payment-methods\"></div>
        <form id=\"form-payment-method\" data-oc-target=\"#section-payment-method\">
          <input type=\"hidden\" name=\"payment_method[name]\" value=\"";
        // line 1000
        yield ($context["payment_method_name"] ?? null);
        yield "\" id=\"input-payment-method-name\"/> <input type=\"hidden\" name=\"payment_method[code]\" value=\"";
        yield ($context["payment_method_code"] ?? null);
        yield "\" id=\"input-payment-method-code\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">";
        // line 1002
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-affiliate\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 1014
        yield ($context["text_affiliate"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-affiliate\" data-oc-target=\"#section-affiliate\">
          <div class=\"mb-3\">
            <label for=\"input-affiliate\" class=\"form-label\">";
        // line 1020
        yield ($context["entry_affiliate"] ?? null);
        yield "</label> <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        yield ($context["affiliate_id"] ?? null);
        yield "\" id=\"input-affiliate-id\"/> <input type=\"text\" name=\"affiliate\" value=\"";
        yield ($context["affiliate"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate"] ?? null);
        yield "\" id=\"input-affiliate\" data-oc-target=\"autocomplete-affiliate\" class=\"form-control\" autocomplete=\"off\"/>
            <ul id=\"autocomplete-affiliate\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-affiliate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 1024
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-comment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 1036
        yield ($context["text_comment"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-comment\" data-oc-target=\"#section-comment\">
          <div class=\"mb-3\">
            <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 1042
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["comment"] ?? null);
        yield "</textarea>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-comment\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 1045
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#button-collapse').on('click', function() {
    var element = this;

    var target = \$('#collapse-order');

    if (!target.is(':hidden')) {
        target.slideUp('400', function() {
            \$(element).html('";
        // line 1061
        yield ($context["text_more"] ?? null);
        yield " <i class=\"fa-solid fa-angle-down\"></i>');
        });
    } else {
        target.slideDown('400', function() {
            \$(element).html('";
        // line 1065
        yield ($context["text_less"] ?? null);
        yield " <i class=\"fa-solid fa-angle-up\"></i>');
        });
    }
});

\$(document).on('click', '#button-invoice', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.createInvoiceNo&user_token=";
        // line 1072
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-invoice').button('loading');
        },
        complete: function() {
            \$('#button-invoice').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-invoice').html(json['invoice_no']);

                \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Customer
\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 1105
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    customer_group_id: ";
        // line 1110
        yield ($context["customer_group_id"] ?? null);
        yield ",
                    name: '";
        // line 1111
        yield ($context["text_none"] ?? null);
        yield "',
                    customer_group: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    telephone: '',
                    custom_field: [],
                    address: []
                });

                response(\$.map(json, function(item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone'],
                        custom_field: item['custom_field'],
                        address: item['address']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        // Reset all custom fields
        \$('#form-customer input[type=\\'text\\'], #form-customer textarea').not('#input-customer, #input-customer-id').val('');
        \$('#form-customer select option').removeAttr('selected');
        \$('#form-customer input[type=\\'checkbox\\'], #form-customer input[type=\\'radio\\']').removeAttr('checked');

        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);
        \$('#input-firstname').val(decodeHTMLEntities(item['firstname']));
        \$('#input-lastname').val(decodeHTMLEntities(item['lastname']));
        \$('#input-email').val(decodeHTMLEntities(item['email']));
        \$('#input-telephone').val(item['telephone']);

        for (i in item.custom_field) {
            \$('#input-custom-field-' + i).val(item.custom_field[i]);

            if (item.custom_field[i] instanceof Array) {
                for (j = 0; j < item.custom_field[i].length; j++) {
                    \$('#input-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                }
            }
        }

        \$('#input-customer-group').trigger('change');

        html = '<option value=\"0\">";
        // line 1163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';

        for (i in item['address']) {
            html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + decodeHTMLEntities(item['address'][i]['firstname']) + ' ' + decodeHTMLEntities(item['address'][i]['lastname']) + ', ' + (item['address'][i]['company'] ? decodeHTMLEntities(item['address'][i]['company']) + ', ' : '') + decodeHTMLEntities(item['address'][i]['address_1']) + ', ' + decodeHTMLEntities(item['address'][i]['city']) + ', ' + decodeHTMLEntities(item['address'][i]['country']) + '</option>';
        }

        \$('#input-payment-address').html(html);
        \$('#input-shipping-address').html(html);
    }
});

// Custom Fields
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 1177
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

\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1203
        yield ($context["user_token"] ?? null);
        yield "&call=customer&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-customer').button('loading');
        },
        complete: function() {
            \$('#button-customer').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-customer').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-customer').html('<a href=\"index.php?route=customer/customer.form&user_token=";
        // line 1238
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val() + '\" target=\"_blank\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-store, #input-language, #input-currency').on('change', function(e) {
    \$('#button-refresh').trigger('click');
});

// Product
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1257
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        option: item['option'],
                        subscription: item['subscription'],
                        price: item['price']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-product-id').val(item['value']);
        \$('#input-product').val(decodeHTMLEntities(item['label']));

        if (item['option'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option"] ?? null), "js");
        yield "</legend>';

            for (i = 0; i < item['option'].length; i++) {
                option = item['option'][i];

                if (option['type'] == 'select') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + '<x-currency code=\"";
        // line 1298
        yield ($context["currency_code"] ?? null);
        yield "\" amount=\"' + option_value['price'] + '\" value=\"";
        yield ($context["currency_value"] ?? null);
        yield "\"></x-currency>)';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'radio') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + '<x-currency code=\"";
        // line 1321
        yield ($context["currency_code"] ?? null);
        yield "\" amount=\"' + option_value['price'] + '\" value=\"";
        yield ($context["currency_value"] ?? null);
        yield "\"></x-currency>)';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<div class=\"form-check\">';
                        html += '  <input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" id=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-input\"/>';
                        html += '  <label for=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-label\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + '<x-currency code=\"";
        // line 1345
        yield ($context["currency_code"] ?? null);
        yield "\" amount=\"' + option_value['price'] + '\" value=\"";
        yield ($context["currency_value"] ?? null);
        yield "\"></x-currency>)';
                        }

                        html += '  </label>';
                        html += '</div>';
                    }

                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'image') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + '<x-currency code=\"";
        // line 1370
        yield ($context["currency_code"] ?? null);
        yield "\" amount=\"' + option_value['price'] + '\" value=\"";
        yield ($context["currency_value"] ?? null);
        yield "\"></x-currency>)';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'text') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'textarea') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'file') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div>';
                    html += '    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
        // line 1401
        yield ($context["upload"] ?? null);
        yield "\" data-oc-target=\"#input-option-' + option['product_option_id'] + '\" data-oc-size-max=\"";
        yield ($context["config_file_max_size"] ?? null);
        yield "\" data-oc-size-error=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error_upload_size"] ?? null), "js");
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_upload"] ?? null), "js");
        yield "</button>';
                    html += '    <a href=\"\" class=\"btn btn-light\"><i class=\"fa-solid fa-download\"></i></a>';
                    html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option-' + option['product_option_id'] + '\"/>';
                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'date') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"date\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'time') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"time\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'datetime') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"datetime-local\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }
            }

            html += '</fieldset>';

            \$('#option').html(html);
        } else {
            \$('#option').html('');
        }

        if (item['subscription'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subscription"] ?? null), "js");
        yield "</legend>';
            html += '  <div class=\"mb-3\">';
            html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-select\" required>';
            html += '      <option value=\"\">";
        // line 1446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            for (i = 0; i < item['subscription'].length; i++) {
                if (item['subscription'][i]['customer_group_id'] == \$('#input-customer-group').val()) {
                    html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                }
            }

            html += '  </select>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '<div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '-' + item['subscription'][i]['customer_group_id'] + '\" class=\"form-text subscription-description d-none\">' + item['subscription'][i]['description'] + '</div>';
            }

            html += '<div id=\"error-subscription\" class=\"invalid-feedback\"></div>';

            elements = \$('#input-customer-group option');

            for (i = 0; i < elements.length; i++) {
                html += '<datalist id=\"subscription-plan-' + \$(elements[i]).val() + '\">';
                html += '  <option value=\"\">";
        // line 1466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                for (j = 0; j < item['subscription'].length; j++) {
                    if (item['subscription'][j]['customer_group_id'] == \$(elements[i]).val()) {
                        html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                    }
                }

                html += '</datalist>';
            }

            html += '  </div>';
            html += '</fieldset>';

            \$('#subscription').html(html);
        } else {
            \$('#subscription').html('');
        }
    }
});

\$('#form-product-add').on('change', '#input-subscription-plan', function(e) {
    var element = this;

    \$('.subscription-description').addClass('d-none');

    \$('#subscription-description-' + \$(element).val() + '-' + \$('#input-customer-group').val()).removeClass('d-none');
});

\$('#input-customer-group').on('change', function(e) {
    \$('#input-subscription-plan').html(\$('#subscription-plan-' + this.value).html());

    // Change subscription description
    \$('#input-subscription-plan').trigger('click');
});

\$('#form-product-add').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1506
        yield ($context["user_token"] ?? null);
        yield "&call=product_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-product-add, #form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-product-add').button('loading');
        },
        complete: function() {
            \$('#button-product-add').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-product-add').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove product
\$('#order-product').on('click', 'button', function(e) {
    \$(this).parent().parent().remove();

    // Refresh products and totals
    \$('#button-refresh').trigger('click');
});

// Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token=";
        // line 1564
        yield ($context["user_token"] ?? null);
        yield "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-payment-address input[type=\\'text\\'], #form-payment-address textarea').val('');
            \$('#form-payment-address select option').not('#input-payment-address').removeAttr('selected');
            \$('#form-payment-address input[type=\\'checkbox\\'], #form-payment-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-payment-firstname').val(json['firstname']);
            \$('#input-payment-lastname').val(json['lastname']);
            \$('#input-payment-company').val(json['company']);
            \$('#input-payment-address-1').val(json['address_1']);
            \$('#input-payment-address-2').val(json['address_2']);
            \$('#input-payment-city').val(json['city']);
            \$('#input-payment-postcode').val(json['postcode']);
            \$('#x-payment-country').attr('value', json['country_id']);
            \$('#x-payment-zone').attr('value', json['zone_id']);

            for (i in json['custom_field']) {
                \$('#input-payment-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-payment-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});



\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1616
        yield ($context["user_token"] ?? null);
        yield "&call=payment_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-payment-address').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-payment-firstname').val() + ' ' + \$('#input-payment-lastname').val() + '<br/>';

                var company = \$('#input-payment-company').val();

                if (company) {
                    address += \$('#input-payment-company').val() + '<br/>';
                }

                address += \$('#input-payment-address-1').val() + '<br/>';

                var address_2 = \$('#input-payment-address-2').val();

                if (address_2) {
                    address += \$('#input-payment-address-2').val() + '<br/>';
                }

                address += \$('#input-payment-city').val() + '<br/>';

                var postcode = \$('#input-payment-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-payment-zone option:selected').text() + '<br/>';
                address += \$('#input-payment-country option:selected').text();

                \$('#output-payment-address').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token=";
        // line 1692
        yield ($context["user_token"] ?? null);
        yield "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-shipping-address input[type=\\'text\\'], #form-shipping-address input[type=\\'text\\'], #form-shipping-address textarea').val('');
            \$('#form-shipping-address select option').not('#input-shipping-address').removeAttr('selected');
            \$('#form-shipping-address input[type=\\'checkbox\\'], #form-shipping-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-shipping-firstname').val(json['firstname']);
            \$('#input-shipping-lastname').val(json['lastname']);
            \$('#input-shipping-company').val(json['company']);
            \$('#input-shipping-address-1').val(json['address_1']);
            \$('#input-shipping-address-2').val(json['address_2']);
            \$('#input-shipping-city').val(json['city']);
            \$('#input-shipping-postcode').val(json['postcode']);
            \$('#x-shipping-country').attr('value', json['country_id']);
            \$('#x-shipping-zone').attr('value', json['zone_id']);

            for (i in json['custom_field']) {
                \$('#input-shipping-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-shipping-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1742
        yield ($context["user_token"] ?? null);
        yield "&call=shipping_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-cart, #form-shipping-address').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        complete: function() {
            \$('#button-shipping-address').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-shipping-address .alert-dismissible').remove();
            \$('#form-shipping-address .is-invalid').removeClass('is-invalid');
            \$('#form-shipping-address .invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-shipping-firstname').val() + ' ' + \$('#input-shipping-lastname').val() + '<br/>';

                var company = \$('#input-shipping-company').val();

                if (company) {
                    address += \$('#input-shipping-company').val() + '<br/>';
                }

                address += \$('#input-shipping-address-1').val() + '<br/>';

                var address_2 = \$('#input-shipping-address-2').val();

                if (address_2) {
                    address += \$('#input-shipping-address-2').val() + '<br/>';
                }

                address += \$('#input-shipping-city').val() + '<br/>';

                var postcode = \$('#input-shipping-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-shipping-zone option:selected').text() + '<br/>';
                address += \$('#input-shipping-country option:selected').text();

                \$('#output-shipping-address').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Method
var shipping_method = [];

\$('#button-shipping-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1821
        yield ($context["user_token"] ?? null);
        yield "&call=shipping_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
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
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            html = '';

            if (json['shipping_methods']) {
                var k = 0;

                html += '<ul class=\"list-unstyled\">';

                for (i in json['shipping_methods']) {
                    html += '<li class=\"mb-3\"><strong>' + json['shipping_methods'][i]['name'] + '</strong>';
                    html += '<ul class=\"list-unstyled mt-2\">';

                    if (!json['shipping_methods'][i]['error']) {
                        for (j in json['shipping_methods'][i]['quote']) {
                            shipping_method[json['shipping_methods'][i]['quote'][j]['code']] = json['shipping_methods'][i]['quote'][j];

                            html += '<li><input type=\"radio\" name=\"choose_shipping\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + k + '\"';

                            if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';

                            html += '  <label for=\"input-shipping-method-' + k + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - <x-currency code=\"' + \$('#input-currency').val() + '\" amount=\"' + json['shipping_methods'][i]['quote'][j]['cost'] + '\"></x-currency></label>';
                            html += '</li>';

                            k++;
                        }
                    } else {
                        html += '<li><div class=\"alert alert-danger\">' + json['shipping_methods'][i]['error'] + '</div></li>';
                    }

                    html += '</ul>';
                    html += '</li>';
                }

                html += '</ul>';

                \$('#shipping-methods').html(html);

                \$('#modal-shipping-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-shipping-method').on('change', 'input[name=\\'choose_shipping\\']', function() {
    var code = \$(this).val();

    if (shipping_method[code]) {
        \$('#input-shipping-method-name').val(shipping_method[code]['name']);
        \$('#input-shipping-method-code').val(shipping_method[code]['code']);
        \$('#input-shipping-method-cost').val(shipping_method[code]['cost']);
        \$('#input-shipping-method-tax-class').val(shipping_method[code]['tax_class_id']);
    }
});

\$('#form-shipping-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1920
        yield ($context["user_token"] ?? null);
        yield "&call=shipping_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-method').button('loading');
        },
        complete: function() {
            \$('#button-shipping-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-shipping-method').html(\$('#input-shipping-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Method
var payment_method = [];

\$('#button-payment-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1974
        yield ($context["user_token"] ?? null);
        yield "&call=payment_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            var html = '';

            if (json['payment_methods']) {
                var k = 0;

                html += '<ul class=\"list-unstyled\">';

                for (i in json['payment_methods']) {
                    html += '<li class=\"mb-3\"><strong>' + json['payment_methods'][i]['name'] + '</strong>';
                    html += '<ul class=\"list-unstyled mt-2\">';

                    if (!json['payment_methods'][i]['error']) {
                        for (j in json['payment_methods'][i]['option']) {
                            payment_method[json['payment_methods'][i]['option'][j]['code']] = json['payment_methods'][i]['option'][j];

                            html += '<li><input type=\"radio\" name=\"choose_payment\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + k + '\"';

                            if (json['payment_methods'][i]['option'][j]['code'] == \$('#input-payment-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';
                            html += '  <label for=\"input-payment-method-' + k + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                            html += '</li>';

                            k++;
                        }
                    } else {
                        html += '<li><div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div></li>';
                    }

                    html += '</ul>';
                    html += '</li>';
                }

                html += '</ul>';

                \$('#payment-methods').html(html);

                \$('#modal-payment-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-payment-method').on('change', 'input[name=\\'choose_payment\\']', function() {
    var code = \$(this).val();

    if (payment_method[code]) {
        \$('#input-payment-method-name').val(payment_method[code]['name']);
        \$('#input-payment-method-code').val(payment_method[code]['code']);
    }
});

\$('#form-payment-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2066
        yield ($context["user_token"] ?? null);
        yield "&call=payment_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-payment-method').button('loading');
        },
        complete: function() {
            \$('#button-payment-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-payment-method').html(\$('#input-payment-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-comment').on('submit', function(e) {
    e.preventDefault();

    \$('#output-comment').html(\$('#input-comment').val().replace(/<[^>]*>?/gm, '').replace(/(?:\\r\\n|\\r|\\n)/g, '<br/>'));
});

\$('#button-refresh').on('click', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2119
        yield ($context["user_token"] ?? null);
        yield "&call=cart&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-refresh').button('loading');
        },
        complete: function() {
            \$('#button-refresh').button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['error']) {
                if (typeof json['error'] == 'string') {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-confirm').on('click', function() {
    var element = this;

    console.log(\$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #form-comment, #input-order-id').serialize());

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2160
        yield ($context["user_token"] ?? null);
        yield "&call=confirm&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #form-comment, #input-order-id').serialize(),
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
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }

                // Highlight any invalid fields
                \$('.is-invalid').parents('form').each(function(index, element) {
                    \$(\$(element).attr('data-oc-target')).addClass('is-invalid');
                });
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['order_id']) {
                    \$('#input-order-id').val(json['order_id']);
                }

                if (json['points']) {
                    \$('#output-point').html(json['points']);
                    \$('#button-reward-add').prop('disabled', false);
                    \$('#button-reward-remove').prop('disabled', false);
                } else {
                    \$('#output-point').html(0);
                    \$('#button-reward-add').prop('disabled', true);
                    \$('#button-reward-remove').prop('disabled', true);
                }

                if (json['commission']) {
                    \$('#output-commission').html('<x-currency code=\"' + \$('#input-currency').val() + '\" amount=\"' + json['commission'] + '\" value=\"";
        // line 2213
        yield ($context["currency_value"] ?? null);
        yield "\"></x-currency>');
                    \$('#button-commission-add').prop('disabled', false);
                    \$('#button-commission-remove').prop('disabled', false);
                } else {
                    \$('#output-commission').html('&nbsp;');
                    \$('#button-commission-add').prop('disabled', true);
                    \$('#button-commission-remove').prop('disabled', true);
                }

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh all products and totals
var order_product_row = ";
        // line 2232
        yield ($context["order_product_row"] ?? null);
        yield ";

function cart_render(products, totals, shipping_required) {
    html = '';

    if (products) {
        for (i in products) {
            product = products[i];

            html += '<tr>';
            html += '  <td><a href=\"index.php?route=catalog/product.form&user_token=";
        // line 2242
        yield ($context["user_token"] ?? null);
        yield "&product_id=' + product['product_id'] + '\" target=\"_blank\">' + product['name'] + '</a>' + (!product['stock'] ? ' <span class=\"text-danger\">***</span>' : '');
            html += '    <div id=\"error-product-' + order_product_row + '-product\" class=\"invalid-feedback mt-0\"></div>';

            html += '<ul class=\"list-unstyled mb-0\">';

            html += '<li>';
            html += '  <small> - ";
        // line 2248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_model"] ?? null), "js");
        yield ": ' + product['model'] + '</small>';
            html += '</li>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                html += '<li>';
                html += '  <small> - ' + option['name'] + ': ' + option['value'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-option-' + option['product_option_id'] + '\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['subscription']) {
                html += '<li>';
                html += '  <small> - ";
        // line 2262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_subscription"] ?? null), "js");
        yield ": ' + product['subscription'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-subscription\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['reward']) {
                html += '<li>';
                html += '  <small> - ";
        // line 2269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_points"] ?? null), "js");
        yield ": ' + product['reward'] + '</small>';
                html += '</li>';
            }

            html += '</ul>';

            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][product_id]\" value=\"' + product['product_id'] + '\"/>';
            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][quantity]\" value=\"' + product['quantity'] + '\"/>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                if (option['type'] == 'select' || option['type'] == 'radio') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + '][]\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\"/>';
                }
            }

            html += '    <input type=\"hidden\" name=\"product[' + order_product_row + '][subscription_plan_id]\" value=\"' + product['subscription_plan_id'] + '\"/>';
            html += '  </td>';
            html += '  <td class=\"text-end\">' + product['quantity'] + '</td>';
            html += '  <td class=\"text-end\"><x-currency code=\"' + \$('#input-currency').val() + '\" amount=\"' + product['price'] + '\" value=\"";
        // line 2297
        yield ($context["currency_value"] ?? null);
        yield "\"></x-currency></td>';
            html += '  <td class=\"text-end\"><x-currency code=\"' + \$('#input-currency').val() + '\" amount=\"' + product['total'] + '\" value=\"";
        // line 2298
        yield ($context["currency_value"] ?? null);
        yield "\"></x-currency></td>';
            html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            order_product_row++;
        }
    } else {
        html += '<tr>';
        html += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no_results"] ?? null), "js");
        yield "</td>';
        html += '</tr>';
    }

    \$('#order-product').html(html);

    // Totals
    html = '';

    for (i in totals) {
        total = totals[i];

        html += '<tr>';
        html += '  <td class=\"text-end\"><strong>' + total['title'] + '</strong></td>';
        html += '  <td class=\"text-end\" style=\"width: 1px;\"><x-currency code=\"' + \$('#input-currency').val() + '\" amount=\"' + total['value'] + '\" value=\"";
        // line 2320
        yield ($context["currency_value"] ?? null);
        yield "\"></x-currency></td>';
        html += '</tr>';
    }

    \$('#order-total').html(html);

    if (shipping_required) {
        \$('#shipping-address').removeClass('d-none');
        \$('#shipping-method').removeClass('d-none');
        \$('#button-shipping-method').prop('disabled', false);
    } else {
        \$('#shipping-address').addClass('d-none');
        \$('#shipping-method').addClass('d-none');
        \$('#button-shipping-method').prop('disabled', true);
    }
}

// Reward
\$(document).on('click', '#button-reward-add, #button-reward-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Reward&user_token=";
        // line 2348
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_reward_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_reward_add"] ?? null), "js");
        yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Affiliate
\$('#input-affiliate').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=marketing/affiliate.autocomplete&user_token=";
        // line 2386
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    name: '";
        // line 2391
        yield ($context["text_none"] ?? null);
        yield "'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-affiliate-id').val(item['value']);
        \$('#input-affiliate').val(decodeHTMLEntities(item['label']));
    }
});

\$('#form-affiliate').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2413
        yield ($context["user_token"] ?? null);
        yield "&call=affiliate&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-affiliate').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-affiliate').button('loading');
        },
        complete: function() {
            \$('#button-affiliate').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (\$('#input-affiliate-id').val()) {
                    \$('#output-affiliate').html('<a href=\"index.php?route=marketing/affiliate.form&user_token=";
        // line 2434
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-affiliate-id').val() + '\" target=\"_blank\">' + \$('#input-affiliate').val() + '</a>');
                } else {
                    \$('#output-affiliate').html('');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Commission
\$(document).on('click', '#button-commission-add, #button-commission-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Commission&user_token=";
        // line 2457
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_commission_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_commission_add"] ?? null), "js");
        yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
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

\$('#form-history').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2501
        yield ($context["user_token"] ?? null);
        yield "&call=history_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val() + '&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=sale/order.history&user_token=";
        // line 2522
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 2533
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
        return "admin/view/template/sale/order_info.twig";
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
        return array (  4768 => 2533,  4754 => 2522,  4730 => 2501,  4707 => 2481,  4700 => 2477,  4677 => 2457,  4651 => 2434,  4627 => 2413,  4602 => 2391,  4594 => 2386,  4577 => 2372,  4570 => 2368,  4547 => 2348,  4516 => 2320,  4499 => 2306,  4489 => 2299,  4485 => 2298,  4481 => 2297,  4450 => 2269,  4440 => 2262,  4423 => 2248,  4414 => 2242,  4401 => 2232,  4379 => 2213,  4323 => 2160,  4279 => 2119,  4223 => 2066,  4128 => 1974,  4071 => 1920,  3969 => 1821,  3887 => 1742,  3834 => 1692,  3755 => 1616,  3700 => 1564,  3639 => 1506,  3596 => 1466,  3573 => 1446,  3567 => 1443,  3516 => 1401,  3480 => 1370,  3469 => 1362,  3447 => 1345,  3418 => 1321,  3407 => 1313,  3387 => 1298,  3376 => 1290,  3364 => 1281,  3337 => 1257,  3315 => 1238,  3277 => 1203,  3248 => 1177,  3231 => 1163,  3176 => 1111,  3172 => 1110,  3164 => 1105,  3128 => 1072,  3118 => 1065,  3111 => 1061,  3092 => 1045,  3084 => 1042,  3075 => 1036,  3060 => 1024,  3047 => 1020,  3038 => 1014,  3023 => 1002,  3016 => 1000,  3010 => 997,  3003 => 993,  2988 => 981,  2977 => 979,  2971 => 976,  2964 => 972,  2949 => 960,  2946 => 959,  2940 => 958,  2936 => 956,  2930 => 953,  2916 => 952,  2911 => 951,  2909 => 950,  2906 => 949,  2900 => 946,  2886 => 945,  2881 => 944,  2879 => 943,  2876 => 942,  2870 => 939,  2856 => 938,  2851 => 937,  2849 => 936,  2846 => 935,  2840 => 932,  2829 => 930,  2819 => 929,  2811 => 928,  2799 => 927,  2794 => 925,  2789 => 924,  2787 => 923,  2784 => 922,  2778 => 919,  2762 => 918,  2757 => 917,  2755 => 916,  2752 => 915,  2746 => 912,  2732 => 911,  2727 => 910,  2725 => 909,  2722 => 908,  2716 => 905,  2713 => 904,  2692 => 901,  2689 => 900,  2685 => 899,  2681 => 898,  2677 => 897,  2672 => 896,  2670 => 895,  2667 => 894,  2661 => 891,  2658 => 890,  2637 => 887,  2634 => 886,  2630 => 885,  2626 => 884,  2622 => 883,  2617 => 882,  2615 => 881,  2612 => 880,  2606 => 877,  2603 => 876,  2588 => 874,  2584 => 873,  2580 => 872,  2570 => 871,  2565 => 870,  2563 => 869,  2560 => 868,  2557 => 867,  2553 => 866,  2546 => 862,  2542 => 861,  2538 => 860,  2530 => 855,  2526 => 854,  2522 => 853,  2513 => 849,  2509 => 848,  2500 => 844,  2496 => 843,  2488 => 840,  2484 => 839,  2475 => 835,  2471 => 834,  2463 => 831,  2459 => 830,  2450 => 826,  2446 => 825,  2437 => 821,  2433 => 820,  2428 => 817,  2395 => 815,  2391 => 814,  2387 => 813,  2383 => 812,  2374 => 806,  2359 => 794,  2356 => 793,  2350 => 792,  2346 => 790,  2340 => 787,  2326 => 786,  2321 => 785,  2319 => 784,  2316 => 783,  2310 => 780,  2296 => 779,  2291 => 778,  2289 => 777,  2286 => 776,  2280 => 773,  2266 => 772,  2261 => 771,  2259 => 770,  2256 => 769,  2250 => 766,  2239 => 764,  2229 => 763,  2221 => 762,  2209 => 761,  2204 => 759,  2199 => 758,  2197 => 757,  2194 => 756,  2188 => 753,  2174 => 752,  2169 => 751,  2167 => 750,  2164 => 749,  2158 => 746,  2144 => 745,  2139 => 744,  2137 => 743,  2134 => 742,  2128 => 739,  2125 => 738,  2104 => 735,  2101 => 734,  2097 => 733,  2093 => 732,  2089 => 731,  2084 => 730,  2082 => 729,  2079 => 728,  2073 => 725,  2070 => 724,  2049 => 721,  2046 => 720,  2042 => 719,  2038 => 718,  2034 => 717,  2029 => 716,  2027 => 715,  2024 => 714,  2018 => 711,  2015 => 710,  2000 => 708,  1996 => 707,  1992 => 706,  1982 => 705,  1977 => 704,  1975 => 703,  1972 => 702,  1969 => 701,  1965 => 700,  1958 => 696,  1954 => 695,  1950 => 694,  1942 => 689,  1938 => 688,  1934 => 687,  1925 => 683,  1921 => 682,  1912 => 678,  1908 => 677,  1900 => 674,  1896 => 673,  1887 => 669,  1883 => 668,  1875 => 665,  1871 => 664,  1862 => 660,  1858 => 659,  1849 => 655,  1845 => 654,  1840 => 651,  1807 => 649,  1803 => 648,  1799 => 647,  1794 => 645,  1785 => 639,  1770 => 627,  1760 => 622,  1750 => 617,  1741 => 611,  1726 => 599,  1722 => 597,  1716 => 596,  1712 => 594,  1706 => 591,  1692 => 590,  1687 => 589,  1685 => 588,  1682 => 587,  1676 => 584,  1662 => 583,  1657 => 582,  1655 => 581,  1652 => 580,  1646 => 577,  1632 => 576,  1627 => 575,  1625 => 574,  1622 => 573,  1616 => 570,  1605 => 568,  1595 => 567,  1587 => 566,  1575 => 565,  1570 => 563,  1565 => 562,  1563 => 561,  1560 => 560,  1554 => 557,  1540 => 556,  1535 => 555,  1533 => 554,  1530 => 553,  1524 => 550,  1510 => 549,  1505 => 548,  1503 => 547,  1500 => 546,  1494 => 543,  1491 => 542,  1470 => 539,  1467 => 538,  1463 => 537,  1459 => 536,  1455 => 535,  1450 => 534,  1448 => 533,  1445 => 532,  1439 => 529,  1436 => 528,  1415 => 525,  1412 => 524,  1408 => 523,  1404 => 522,  1400 => 521,  1395 => 520,  1393 => 519,  1390 => 518,  1384 => 515,  1381 => 514,  1366 => 512,  1362 => 511,  1358 => 510,  1348 => 509,  1343 => 508,  1340 => 507,  1337 => 506,  1333 => 505,  1324 => 501,  1320 => 500,  1314 => 499,  1303 => 495,  1298 => 493,  1289 => 489,  1285 => 488,  1276 => 484,  1272 => 483,  1266 => 479,  1251 => 477,  1247 => 476,  1243 => 475,  1236 => 471,  1223 => 469,  1218 => 467,  1209 => 461,  1197 => 451,  1186 => 449,  1182 => 448,  1173 => 442,  1169 => 441,  1163 => 438,  1159 => 437,  1156 => 436,  1150 => 433,  1146 => 432,  1143 => 431,  1141 => 430,  1136 => 428,  1132 => 427,  1124 => 422,  1113 => 414,  1107 => 411,  1100 => 407,  1095 => 405,  1088 => 401,  1083 => 399,  1076 => 395,  1072 => 394,  1067 => 392,  1061 => 388,  1046 => 386,  1042 => 385,  1036 => 382,  1031 => 380,  1024 => 376,  1020 => 375,  1014 => 371,  1003 => 369,  999 => 368,  995 => 367,  991 => 366,  985 => 363,  977 => 358,  973 => 357,  968 => 354,  955 => 351,  951 => 350,  948 => 349,  944 => 348,  932 => 339,  927 => 337,  919 => 332,  913 => 328,  907 => 326,  897 => 324,  895 => 323,  885 => 320,  880 => 318,  860 => 309,  855 => 307,  848 => 302,  842 => 300,  832 => 298,  830 => 297,  824 => 294,  819 => 292,  814 => 289,  805 => 287,  801 => 286,  789 => 277,  784 => 275,  772 => 266,  767 => 264,  759 => 261,  749 => 253,  743 => 251,  740 => 250,  733 => 247,  730 => 246,  723 => 243,  720 => 242,  713 => 239,  710 => 238,  703 => 235,  700 => 234,  693 => 231,  690 => 230,  683 => 227,  681 => 226,  674 => 224,  668 => 221,  660 => 218,  652 => 212,  646 => 210,  643 => 209,  636 => 206,  633 => 205,  626 => 202,  623 => 201,  616 => 198,  613 => 197,  606 => 194,  603 => 193,  596 => 190,  593 => 189,  586 => 186,  584 => 185,  577 => 183,  571 => 180,  556 => 167,  550 => 164,  547 => 163,  544 => 162,  538 => 161,  536 => 160,  531 => 158,  523 => 157,  515 => 156,  511 => 155,  503 => 153,  497 => 152,  487 => 150,  484 => 149,  474 => 147,  471 => 146,  461 => 144,  458 => 143,  454 => 142,  444 => 141,  441 => 140,  433 => 137,  430 => 136,  427 => 135,  421 => 132,  407 => 131,  404 => 130,  401 => 129,  395 => 128,  387 => 125,  379 => 124,  376 => 123,  368 => 120,  362 => 119,  359 => 118,  356 => 117,  352 => 116,  345 => 114,  339 => 111,  333 => 110,  330 => 109,  325 => 108,  322 => 107,  320 => 106,  313 => 102,  309 => 101,  305 => 100,  301 => 99,  297 => 98,  286 => 90,  283 => 89,  268 => 87,  264 => 86,  255 => 80,  252 => 79,  237 => 77,  233 => 76,  224 => 70,  221 => 69,  206 => 67,  202 => 66,  190 => 57,  185 => 55,  176 => 48,  168 => 46,  158 => 44,  156 => 43,  151 => 41,  144 => 36,  140 => 34,  134 => 32,  132 => 31,  128 => 29,  121 => 27,  115 => 25,  113 => 24,  108 => 22,  99 => 16,  92 => 11,  81 => 9,  77 => 8,  72 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><a href=\"{{ invoice }}\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_invoice_print }}\" class=\"btn btn-info{% if not order_id %} disabled{% endif %}\"><i class=\"fa-solid fa-print\"></i></a> <a href=\"{{ shipping }}\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_shipping_print }}\" class=\"btn btn-info{% if not shipping_method_code %} disabled{% endif %}\"><i class=\"fa-solid fa-truck\"></i></a> <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_invoice }}</strong>
                  <br/>
                  {% if not invoice_no %}
                    <span id=\"output-invoice\">{{ text_tbc }}</span>
                  {% else %}
                    <span id=\"output-invoice\">{{ invoice_prefix }}{{ invoice_no }}</span>
                  {% endif %}
                </div>
              </section>
              {% if not invoice_no %}
                <button type=\"button\" id=\"button-invoice\" data-bs-toggle=\"tooltip\" title=\"{{ button_generate }}\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              {% else %}
                <button type=\"button\" disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              {% endif %}
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section id=\"section-customer\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_customer }}</strong>
                  <br/>
                  {% if customer_id %}
                    <div id=\"output-customer\"><a href=\"{{ customer_edit }}\" target=\"_blank\">{{ firstname }} {{ lastname }}</a></div>
                  {% else %}
                    <div id=\"output-customer\">{{ firstname }} {{ lastname }}</div>
                  {% endif %}
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"form-control p-0 rounded\">
              <div class=\"lead p-2\"><strong>{{ text_date_added }}</strong>
                <br/>
                {{ date_added }}
              </div>
            </div>
          </div>
        </div>
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-store\" class=\"form-select\">
                {% for store in stores %}
                  <option value=\"{{ store.store_id }}\"{% if store.store_id == store_id %} selected{% endif %}>{{ store.name }}</option>
                {% endfor %}
              </select>
              <label for=\"input-store\">{{ entry_store }}</label>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-language\" class=\"form-select\">
                {% for language in languages %}
                  <option value=\"{{ language.code }}\"{% if language.code == language_code %} selected{% endif %}>{{ language.name }}</option>
                {% endfor %}
              </select>
              <label for=\"input-language\">{{ entry_language }}</label>
            </div>
          </div>
          <div class=\"col\">
            <div class=\"form-floating\">
              <select id=\"input-currency\" class=\"form-select\">
                {% for currency in currencies %}
                  <option value=\"{{ currency.code }}\"{% if currency.code == currency_code %} selected{% endif %}>{{ currency.title }}</option>
                {% endfor %}
              </select>
              <label for=\"input-currency\">{{ entry_currency }}</label>
            </div>
          </div>
        </div>
        <form id=\"form-cart\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>{{ column_product }}</th>
                <th class=\"text-end\">{{ column_quantity }}</th>
                <th class=\"text-end\">{{ column_price }}</th>
                <th class=\"text-end\">{{ column_total }}</th>
                <th class=\"text-end\" style=\"width: 1px;\">{{ column_action }}</th>
              </tr>
            </thead>
            <tbody id=\"order-product\">
              {% set order_product_row = 0 %}
              {% if order_products %}
                {% for order_product in order_products %}
                  <tr>
                    <td><a href=\"{{ order_product.product_edit }}\" target=\"_blank\">{{ order_product.name }}</a>
                      <div id=\"error-product-{{ order_product_row }}-product\" class=\"invalid-feedback mt-0\"></div>
                      <ul class=\"list-unstyled mb-0\">
                        <li>
                          <small> - {{ text_model }}: {{ order_product.model }}</small>
                        </li>
                        {% for option in order_product.option %}
                          {% if option.type != 'file' %}
                            <li>
                              <small> - {{ option.name }}: {{ option.value }}</small>
                              <div id=\"error-product-{{ order_product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          {% else %}
                            <li>
                              <small> - {{ option.name }}: <a href=\"{{ option.href }}\">{{ option.filename }}</a></small>
                              <div id=\"error-product-{{ order_product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          {% endif %}
                        {% endfor %}
                        {% if order_product.subscription_plan_id %}
                          <li>
                            <small> - {{ text_subscription }}: {% if order_product.subscription_edit %}<a href=\"{{ order_product.subscription_edit }}\" target=\"_blank\">{{ order_product.subscription_plan }}</a>{% else %}{{ order_product.subscription_plan }}{% endif %}</small>
                            <div id=\"error-product-{{ order_product_row }}-subscription\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        {% endif %}
                        {% if order_product.reward %}
                          <li>
                            <small> - {{ text_points }}: {{ order_product.reward }}</small>
                          </li>
                        {% endif %}
                      </ul>
                      <input type=\"hidden\" name=\"product[{{ order_product_row }}][product_id]\" value=\"{{ order_product.product_id }}\"/> <input type=\"hidden\" name=\"product[{{ order_product_row }}][quantity]\" value=\"{{ order_product.quantity }}\"/>
                      {% for option in order_product.option %}
                        {% if option.type == 'select' or option.type == 'radio' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}]\" value=\"{{ option.product_option_value_id }}\"/>
                        {% endif %}
                        {% if option.type == 'checkbox' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}][]\" value=\"{{ option.product_option_value_id }}\"/>
                        {% endif %}
                        {% if option.type == 'text' or option.type == 'textarea' or option.type == 'file' or option.type == 'date' or option.type == 'datetime' or option.type == 'time' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}]\" value=\"{{ option.value }}\"/>
                        {% endif %}
                      {% endfor %}
                      <input type=\"hidden\" name=\"product[{{ order_product_row }}][subscription_plan_id]\" value=\"{{ order_product.subscription_plan_id }}\"/>
                    </td>
                    <td class=\"text-end\">{{ order_product.quantity }}</td>
                    <td class=\"text-end\"><x-currency code=\"{{ currency_code }}\" amount=\"{{ order_product.price }}\" value=\"{{ currency_value }}\"></x-currency></td>
                    <td class=\"text-end\"><x-currency code=\"{{ currency_code }}\" amount=\"{{ order_product.total }}\" value=\"{{ currency_value }}\"></x-currency></td>
                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  {% set order_product_row = order_product_row + 1 %}
                {% endfor %}
              {% else %}
                <tr>
                  <td colspan=\"5\" class=\"text-center\">{{ text_no_results }}</td>
                </tr>
              {% endif %}
            </tbody>
            <tfoot>
              <tr>
                <td colspan=\"4\"></td>
                <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
        </form>
        <div class=\"row\">
          <div class=\"col-md mb-3\">
            <div class=\"input-group\">
              <section id=\"section-payment-address\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>{{ text_payment_address }}</strong>
                  <br/>
                  <div id=\"output-payment-address\">
                    {{ payment_firstname }} {{ payment_lastname }}
                    <br/>
                    {% if payment_company %}
                      {{ payment_company }}
                      <br/>
                    {% endif %}
                    {% if payment_address_1 %}
                      {{ payment_address_1 }}
                      <br/>
                    {% endif %}
                    {% if payment_address_2 %}
                      {{ payment_address_2 }}
                      <br/>
                    {% endif %}
                    {% if payment_city %}
                      {{ payment_city }}
                      <br/>
                    {% endif %}
                    {% if payment_postcode %}
                      {{ payment_postcode }}
                      <br/>
                    {% endif %}
                    {% if payment_zone %}
                      {{ payment_zone }}
                      <br/>
                    {% endif %}
                    {% if payment_country %}
                      {{ payment_country }}
                    {% endif %}
                  </div>
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-payment-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"shipping-address\" class=\"col mb-3{% if not shipping_method_code %} d-none{% endif %}\">
            <div class=\"input-group\">
              <section id=\"section-shipping-address\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>{{ text_shipping_address }}</strong>
                  <br/>
                  <div id=\"output-shipping-address\">
                    {{ shipping_firstname }} {{ shipping_lastname }}
                    <br/>
                    {% if shipping_company %}
                      {{ shipping_company }}
                      <br/>
                    {% endif %}
                    {% if shipping_address_1 %}
                      {{ shipping_address_1 }}
                      <br/>
                    {% endif %}
                    {% if shipping_address_2 %}
                      {{ shipping_address_2 }}
                      <br/>
                    {% endif %}
                    {% if shipping_city %}
                      {{ shipping_city }}
                      <br/>
                    {% endif %}
                    {% if shipping_postcode %}
                      {{ shipping_postcode }}
                      <br/>
                    {% endif %}
                    {% if shipping_zone %}
                      {{ shipping_zone }}
                      <br/>
                    {% endif %}
                    {% if shipping_country %}
                      {{ shipping_country }}
                    {% endif %}
                  </div>
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-shipping-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div id=\"shipping-method\" class=\"col-md mb-3{% if not shipping_method_code %} d-none{% endif %}\" style=\"min-height: 64px;\">
            <div class=\"input-group\">
              <section id=\"section-shipping-method\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_shipping_method }}</strong>
                  <br/>
                  <div id=\"output-shipping-method\">{{ shipping_method_name }}</div>
                </div>
              </section>
              <button type=\"button\" id=\"button-shipping-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"payment-method\" class=\"col-md mb-3\">
            <div class=\"input-group\">
              <div id=\"input-payment-method-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_payment_method }}</strong>
                  <br/>
                  <div id=\"output-payment-method\">{{ payment_method_name }}</div>
                </div>
              </div>
              <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div id=\"collapse-order\" class=\"collapse\">
          <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3\">
            {% for extension in extensions %}
              <div class=\"col mb-3\">{{ extension }}</div>
            {% endfor %}
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead p-0\"><strong>{{ text_reward }}</strong>
                    <br/>
                    <div id=\"output-point\">{{ points }}</div>
                  </div>
                </div>
                {% if not reward_total %}
                  <button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_add }}\" class=\"btn btn-success\"{% if not customer_id or not points %} disabled{% endif %}><i class=\"fa-solid fa-plus-circle\"></i></button>
                {% else %}
                  <button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                {% endif %}
              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div id=\"input-affiliate-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                  <div class=\"lead\"><strong>{{ text_affiliate }}</strong>
                    <br/>
                    <div id=\"output-affiliate\">{% if affiliate_id %}<a href=\"index.php?route=marketing/affiliate.form&user_token={{ user_token }}&customer_id={{ affiliate_id }}\" target=\"_blank\">{{ affiliate }}</a>{% endif %}</div>
                  </div>
                </div>
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-affiliate\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead\"><strong>{{ text_commission }}</strong>
                    <br/>
                    <div id=\"output-commission\"><x-currency code=\"{{ currency_code }}\" amount=\"{{ commission }}\" value=\"{{ currency_value }}\"></x-currency></div>
                  </div>
                </div>
                {% if not commission_total %}
                  <button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_add }}\" class=\"btn btn-success\"{% if not affiliate_id %} disabled{% endif %}><i class=\"fa-solid fa-plus-circle\"></i></button>
                {% else %}
                  <button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                {% endif %}
              </div>
            </div>
          </div>
        </div>
        <button type=\"button\" id=\"button-collapse\" class=\"btn btn-light btn-lg w-100 mb-3\">{{ text_more }} <i class=\"fa-solid fa-angle-down\"></i></button>
        <div class=\"row mb-3\">
          <div class=\"col\">
            <div class=\"input-group\">
              <div class=\"form-control rounded-start\" style=\"min-height: 100px;\">
                <div class=\"lead\"><strong>{{ text_comment }}</strong>
                  <br/>
                  <div id=\"output-comment\">{{ comment }}</div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-comment\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <table class=\"table table-bordered\">
          <tbody id=\"order-total\">
            {% for order_total in order_totals %}
              <tr>
                <td class=\"text-end\"><strong>{{ order_total.title }}</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\"><x-currency code=\"{{ currency_code }}\" amount=\"{{ order_total.value }}\" value=\"{{ currency_value }}\"></x-currency></td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
          <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_confirm }}</button>
        </div>
      </div>
    </div>
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> {{ text_history }}</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_history }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_additional }}</a></li>
          {% for tab in tabs %}
            <li class=\"nav-item\"><a href=\"#tab-{{ tab.code }}\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab.title }}</a></li>
          {% endfor %}
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>{{ text_history }}</legend>
              <div id=\"history\">{{ history }}</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>{{ text_history_add }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">{{ entry_order_status }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      {% for order_status in order_statuses %}
                        <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_override }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"override\" value=\"1\" checked=\"{{ override }}\" input-id=\"input-override\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_override }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_notify }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"notify\" value=\"1\" checked=\"{{ notify }}\" input-id=\"input-notify\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"{{ entry_comment }}\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_history_add }}</button>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"{{ order_id }}\" id=\"input-order-id\"/>
            </form>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th colspan=\"2\">{{ text_browser }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ text_ip }}</td>
                    <td>{{ ip }}</td>
                  </tr>
                  {% if forwarded_ip %}
                    <tr>
                      <td>{{ text_forwarded_ip }}</td>
                      <td>{{ forwarded_ip }}</td>
                    </tr>
                  {% endif %}
                  <tr>
                    <td>{{ text_user_agent }}</td>
                    <td>{{ user_agent }}</td>
                  </tr>
                  <tr>
                    <td>{{ text_accept_language }}</td>
                    <td>{{ accept_language }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          {% for tab in tabs %}
            <div id=\"tab-{{ tab.code }}\" class=\"tab-pane\">{{ tab.content }}</div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_customer }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\" data-oc-target=\"#section-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">{{ entry_customer }}</label>
            <div class=\"input-group\">
              <input type=\"text\" value=\"{{ firstname }} {{ lastname }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/> <a href=\"{{ customer_add }}\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_customer_add }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"{{ customer_id }}\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\">{{ entry_customer_group }}</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              {% for customer_group in customer_groups %}
                <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-customer-group\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
            <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\" required/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
            <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\" required/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-email\" class=\"form-label\">{{ entry_email }}</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" required/><a href=\"mailto:{{ email }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3{% if config_telephone_required %} required{% endif %}\">
            <label for=\"input-telephone\" class=\"form-label\">{{ entry_telephone }}</label>
            <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>

          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'account' %}
              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}

          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-product\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_product_add }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-product-add\">
          <div class=\"mb-3\">
            <label for=\"input-product\" class=\"form-label\">{{ entry_product }}</label> <input type=\"text\" value=\"\" placeholder=\"{{ entry_product }}\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\"/>
            <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
            <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"input-product-id\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-quantity\" class=\"form-label\">{{ entry_quantity }}</label> <input type=\"text\" name=\"quantity\" placeholder=\"{{ entry_quantity }}\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
          </div>
          <div id=\"option\"></div>
          <div id=\"subscription\"></div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-product-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_payment_address }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-address\" data-oc-target=\"#section-payment-address\">
          <div class=\"mb-3\">
            <label for=\"input-payment-address\" class=\"form-label\">{{ entry_address }}</label>
            <select name=\"payment_address_id\" id=\"input-payment-address\" class=\"form-select\">
              <option value=\"0\" selected>{{ text_none }}</option>
              {% for address in addresses %}
                <option value=\"{{ address.address_id }}\"{% if address.address_id == payment_address_id %} selected{% endif %}>{{ address.firstname }} {{ address.lastname }},{% if address.company %} {{ address.company }},{% endif %} {{ address.address_1 }}, {{ address.city }}, {{ address.postcode }}, {{ address.zone }}, {{ address.country }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
            <input type=\"text\" name=\"payment_firstname\" value=\"{{ payment_firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-payment-firstname\" class=\"form-control\" required/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
            <input type=\"text\" name=\"payment_lastname\" value=\"{{ payment_lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-payment-lastname\" class=\"form-control\" required/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\">{{ entry_company }}</label>
            <input type=\"text\" name=\"payment_company\" value=\"{{ payment_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-1\" class=\"form-label\">{{ entry_address_1 }}</label>
            <input type=\"text\" name=\"payment_address_1\" value=\"{{ payment_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-payment-address-1\" class=\"form-control\" required/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
            <input type=\"text\" name=\"payment_address_2\" value=\"{{ payment_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-city\" class=\"form-label\">{{ entry_city }}</label>
            <input type=\"text\" name=\"payment_city\" value=\"{{ payment_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-payment-city\" class=\"form-control\" required/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-postcode\" class=\"form-label\">{{ entry_postcode }}</label>
            <input type=\"text\" name=\"payment_postcode\" value=\"{{ payment_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-payment-postcode\" class=\"form-control\" required/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-country\" class=\"form-label\">{{ entry_country }}</label>
            <x-country name=\"payment_country_id\" value=\"{{ payment_country_id }}\" id=\"x-payment-country\" postcode=\"1\" target=\"input-payment-postcode\" input-id=\"input-payment-country\" input-class=\"form-select\" required>
              <option value=\"0\">{{ text_select }}</option>
            </x-country>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-zone\" class=\"form-label\">{{ entry_zone }}</label>
            <x-zone name=\"payment_zone_id\" value=\"{{ payment_zone_id }}\" id=\"x-payment-zone\" target=\"x-payment-country\" input-id=\"input-payment-zone\" input-class=\"form-select\" required>
              <option value=\"0\">{{ text_select }}</option>
            </x-zone>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'address' %}

              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in payment_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"text\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"text\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\"{% if not payment_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\"{% if not payment_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_shipping_address }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-address\" data-oc-target=\"section-shipping-address\">
          <div class=\"mb-3\">
            <label for=\"input-shipping-address\" class=\"form-label\">{{ entry_address }}</label> <select name=\"shipping_address_id\" id=\"input-shipping-address\" class=\"form-select\">
              <option value=\"0\">{{ text_none }}</option>
              {% for address in addresses %}
                <option value=\"{{ address.address_id }}\"{% if address.address_id == shipping_address_id %} selected{% endif %}>{{ address.firstname }} {{ address.lastname }},{% if address.company %} {{ address.company }},{% endif %} {{ address.address_1 }}, {{ address.city }}, {{ address.postcode }}, {{ address.zone }}, {{ address.country }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
            <input type=\"text\" name=\"shipping_firstname\" value=\"{{ shipping_firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-shipping-firstname\" class=\"form-control\" required/>
            <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
            <input type=\"text\" name=\"shipping_lastname\" value=\"{{ shipping_lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-shipping-lastname\" class=\"form-control\" required/>
            <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-company\" class=\"form-label\">{{ entry_company }}</label>
            <input type=\"text\" name=\"shipping_company\" value=\"{{ shipping_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-shipping-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-address-1\" class=\"form-label\">{{ entry_address_1 }}</label>
            <input type=\"text\" name=\"shipping_address_1\" value=\"{{ shipping_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-shipping-address-1\" class=\"form-control\" required/>
            <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
            <input type=\"text\" name=\"shipping_address_2\" value=\"{{ shipping_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-shipping-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-city\" class=\"form-label\">{{ entry_city }}</label>
            <input type=\"text\" name=\"shipping_city\" value=\"{{ shipping_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-shipping-city\" class=\"form-control\" required/>
            <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-postcode\" class=\"form-label\">{{ entry_postcode }}</label>
            <input type=\"text\" name=\"shipping_postcode\" value=\"{{ shipping_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-shipping-postcode\" class=\"form-control\" required/>
            <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-country\" class=\"form-label\">{{ entry_country }}</label>
            <x-country name=\"shipping_country_id\" value=\"{{ shipping_country_id }}\" id=\"x-shipping-country\" postcode=\"1\" target=\"input-shipping-postcode\" input-id=\"input-shipping-country\" input-class=\"form-select\" required>
              <option value=\"0\">{{ text_select }}</option>
            </x-country>
            <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-zone\" class=\"form-label\">{{ entry_zone }}</label>
            <x-zone name=\"shipping_zone_id\" value=\"{{ shipping_zone_id }}\" target=\"x-shipping-country\" input-id=\"input-shipping-zone\" input-class=\"form-select\" required>
              <option value=\"0\">{{ text_select }}</option>
            </x-zone>
            <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
          </div>
          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'address' %}

              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"text\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" placeholder=\"{{ custom_field.name }}\" class=\"form-control\">{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"text\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\"{% if not shipping_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\"{% if not shipping_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-truck\"></i> {{ text_shipping_method }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>{{ text_shipping }}</p>
        <div id=\"shipping-methods\"></div>
        <form id=\"form-shipping-method\" data-oc-target=\"#section-shipping-method\">
          <input type=\"hidden\" name=\"shipping_method[name]\" value=\"{{ shipping_method_name }}\" id=\"input-shipping-method-name\"/> <input type=\"hidden\" name=\"shipping_method[code]\" value=\"{{ shipping_method_code }}\" id=\"input-shipping-method-code\"/> <input type=\"hidden\" name=\"shipping_method[cost]\" value=\"{{ shipping_method_cost }}\" id=\"input-shipping-method-cost\"/> <input type=\"hidden\" name=\"shipping_method[tax_class_id]\" value=\"{{ shipping_method_tax_class_id }}\" id=\"input-shipping-method-tax-class\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> {{ text_payment_method }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>{{ text_payment }}</p>
        <div id=\"payment-methods\"></div>
        <form id=\"form-payment-method\" data-oc-target=\"#section-payment-method\">
          <input type=\"hidden\" name=\"payment_method[name]\" value=\"{{ payment_method_name }}\" id=\"input-payment-method-name\"/> <input type=\"hidden\" name=\"payment_method[code]\" value=\"{{ payment_method_code }}\" id=\"input-payment-method-code\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">{{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-affiliate\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_affiliate }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-affiliate\" data-oc-target=\"#section-affiliate\">
          <div class=\"mb-3\">
            <label for=\"input-affiliate\" class=\"form-label\">{{ entry_affiliate }}</label> <input type=\"hidden\" name=\"affiliate_id\" value=\"{{ affiliate_id }}\" id=\"input-affiliate-id\"/> <input type=\"text\" name=\"affiliate\" value=\"{{ affiliate }}\" placeholder=\"{{ entry_affiliate }}\" id=\"input-affiliate\" data-oc-target=\"autocomplete-affiliate\" class=\"form-control\" autocomplete=\"off\"/>
            <ul id=\"autocomplete-affiliate\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-affiliate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-comment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_comment }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-comment\" data-oc-target=\"#section-comment\">
          <div class=\"mb-3\">
            <textarea name=\"comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ comment }}</textarea>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-comment\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#button-collapse').on('click', function() {
    var element = this;

    var target = \$('#collapse-order');

    if (!target.is(':hidden')) {
        target.slideUp('400', function() {
            \$(element).html('{{ text_more }} <i class=\"fa-solid fa-angle-down\"></i>');
        });
    } else {
        target.slideDown('400', function() {
            \$(element).html('{{ text_less }} <i class=\"fa-solid fa-angle-up\"></i>');
        });
    }
});

\$(document).on('click', '#button-invoice', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.createInvoiceNo&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-invoice').button('loading');
        },
        complete: function() {
            \$('#button-invoice').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-invoice').html(json['invoice_no']);

                \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Customer
\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    customer_group_id: {{ customer_group_id }},
                    name: '{{ text_none }}',
                    customer_group: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    telephone: '',
                    custom_field: [],
                    address: []
                });

                response(\$.map(json, function(item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone'],
                        custom_field: item['custom_field'],
                        address: item['address']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        // Reset all custom fields
        \$('#form-customer input[type=\\'text\\'], #form-customer textarea').not('#input-customer, #input-customer-id').val('');
        \$('#form-customer select option').removeAttr('selected');
        \$('#form-customer input[type=\\'checkbox\\'], #form-customer input[type=\\'radio\\']').removeAttr('checked');

        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);
        \$('#input-firstname').val(decodeHTMLEntities(item['firstname']));
        \$('#input-lastname').val(decodeHTMLEntities(item['lastname']));
        \$('#input-email').val(decodeHTMLEntities(item['email']));
        \$('#input-telephone').val(item['telephone']);

        for (i in item.custom_field) {
            \$('#input-custom-field-' + i).val(item.custom_field[i]);

            if (item.custom_field[i] instanceof Array) {
                for (j = 0; j < item.custom_field[i].length; j++) {
                    \$('#input-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                }
            }
        }

        \$('#input-customer-group').trigger('change');

        html = '<option value=\"0\">{{ text_none|escape('js') }}</option>';

        for (i in item['address']) {
            html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + decodeHTMLEntities(item['address'][i]['firstname']) + ' ' + decodeHTMLEntities(item['address'][i]['lastname']) + ', ' + (item['address'][i]['company'] ? decodeHTMLEntities(item['address'][i]['company']) + ', ' : '') + decodeHTMLEntities(item['address'][i]['address_1']) + ', ' + decodeHTMLEntities(item['address'][i]['city']) + ', ' + decodeHTMLEntities(item['address'][i]['country']) + '</option>';
        }

        \$('#input-payment-address').html(html);
        \$('#input-shipping-address').html(html);
    }
});

// Custom Fields
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

\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=customer&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-customer').button('loading');
        },
        complete: function() {
            \$('#button-customer').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-customer').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-customer').html('<a href=\"index.php?route=customer/customer.form&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val() + '\" target=\"_blank\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-store, #input-language, #input-currency').on('change', function(e) {
    \$('#button-refresh').trigger('click');
});

// Product
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        option: item['option'],
                        subscription: item['subscription'],
                        price: item['price']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-product-id').val(item['value']);
        \$('#input-product').val(decodeHTMLEntities(item['label']));

        if (item['option'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>{{ entry_option|escape('js') }}</legend>';

            for (i = 0; i < item['option'].length; i++) {
                option = item['option'][i];

                if (option['type'] == 'select') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">{{ text_select|escape('js') }}</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + '<x-currency code=\"{{ currency_code }}\" amount=\"' + option_value['price'] + '\" value=\"{{ currency_value }}\"></x-currency>)';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'radio') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">{{ text_select|escape('js') }}</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + '<x-currency code=\"{{ currency_code }}\" amount=\"' + option_value['price'] + '\" value=\"{{ currency_value }}\"></x-currency>)';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<div class=\"form-check\">';
                        html += '  <input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" id=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-input\"/>';
                        html += '  <label for=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-label\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + '<x-currency code=\"{{ currency_code }}\" amount=\"' + option_value['price'] + '\" value=\"{{ currency_value }}\"></x-currency>)';
                        }

                        html += '  </label>';
                        html += '</div>';
                    }

                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'image') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';

                    html += '  <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">{{ text_select|escape('js') }}</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + '<x-currency code=\"{{ currency_code }}\" amount=\"' + option_value['price'] + '\" value=\"{{ currency_value }}\"></x-currency>)';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'text') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'textarea') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'file') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div>';
                    html += '    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-option-' + option['product_option_id'] + '\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size|escape('js') }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload|escape('js') }}</button>';
                    html += '    <a href=\"\" class=\"btn btn-light\"><i class=\"fa-solid fa-download\"></i></a>';
                    html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option-' + option['product_option_id'] + '\"/>';
                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'date') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"date\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'time') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"time\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'datetime') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input type=\"datetime-local\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }
            }

            html += '</fieldset>';

            \$('#option').html(html);
        } else {
            \$('#option').html('');
        }

        if (item['subscription'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>{{ entry_subscription|escape('js') }}</legend>';
            html += '  <div class=\"mb-3\">';
            html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-select\" required>';
            html += '      <option value=\"\">{{ text_select|escape('js') }}</option>';

            for (i = 0; i < item['subscription'].length; i++) {
                if (item['subscription'][i]['customer_group_id'] == \$('#input-customer-group').val()) {
                    html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                }
            }

            html += '  </select>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '<div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '-' + item['subscription'][i]['customer_group_id'] + '\" class=\"form-text subscription-description d-none\">' + item['subscription'][i]['description'] + '</div>';
            }

            html += '<div id=\"error-subscription\" class=\"invalid-feedback\"></div>';

            elements = \$('#input-customer-group option');

            for (i = 0; i < elements.length; i++) {
                html += '<datalist id=\"subscription-plan-' + \$(elements[i]).val() + '\">';
                html += '  <option value=\"\">{{ text_select|escape('js') }}</option>';

                for (j = 0; j < item['subscription'].length; j++) {
                    if (item['subscription'][j]['customer_group_id'] == \$(elements[i]).val()) {
                        html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                    }
                }

                html += '</datalist>';
            }

            html += '  </div>';
            html += '</fieldset>';

            \$('#subscription').html(html);
        } else {
            \$('#subscription').html('');
        }
    }
});

\$('#form-product-add').on('change', '#input-subscription-plan', function(e) {
    var element = this;

    \$('.subscription-description').addClass('d-none');

    \$('#subscription-description-' + \$(element).val() + '-' + \$('#input-customer-group').val()).removeClass('d-none');
});

\$('#input-customer-group').on('change', function(e) {
    \$('#input-subscription-plan').html(\$('#subscription-plan-' + this.value).html());

    // Change subscription description
    \$('#input-subscription-plan').trigger('click');
});

\$('#form-product-add').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=product_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-product-add, #form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-product-add').button('loading');
        },
        complete: function() {
            \$('#button-product-add').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-product-add').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Remove product
\$('#order-product').on('click', 'button', function(e) {
    \$(this).parent().parent().remove();

    // Refresh products and totals
    \$('#button-refresh').trigger('click');
});

// Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token={{ user_token }}&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-payment-address input[type=\\'text\\'], #form-payment-address textarea').val('');
            \$('#form-payment-address select option').not('#input-payment-address').removeAttr('selected');
            \$('#form-payment-address input[type=\\'checkbox\\'], #form-payment-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-payment-firstname').val(json['firstname']);
            \$('#input-payment-lastname').val(json['lastname']);
            \$('#input-payment-company').val(json['company']);
            \$('#input-payment-address-1').val(json['address_1']);
            \$('#input-payment-address-2').val(json['address_2']);
            \$('#input-payment-city').val(json['city']);
            \$('#input-payment-postcode').val(json['postcode']);
            \$('#x-payment-country').attr('value', json['country_id']);
            \$('#x-payment-zone').attr('value', json['zone_id']);

            for (i in json['custom_field']) {
                \$('#input-payment-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-payment-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});



\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=payment_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-payment-address').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-payment-firstname').val() + ' ' + \$('#input-payment-lastname').val() + '<br/>';

                var company = \$('#input-payment-company').val();

                if (company) {
                    address += \$('#input-payment-company').val() + '<br/>';
                }

                address += \$('#input-payment-address-1').val() + '<br/>';

                var address_2 = \$('#input-payment-address-2').val();

                if (address_2) {
                    address += \$('#input-payment-address-2').val() + '<br/>';
                }

                address += \$('#input-payment-city').val() + '<br/>';

                var postcode = \$('#input-payment-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-payment-zone option:selected').text() + '<br/>';
                address += \$('#input-payment-country option:selected').text();

                \$('#output-payment-address').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token={{ user_token }}&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-shipping-address input[type=\\'text\\'], #form-shipping-address input[type=\\'text\\'], #form-shipping-address textarea').val('');
            \$('#form-shipping-address select option').not('#input-shipping-address').removeAttr('selected');
            \$('#form-shipping-address input[type=\\'checkbox\\'], #form-shipping-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-shipping-firstname').val(json['firstname']);
            \$('#input-shipping-lastname').val(json['lastname']);
            \$('#input-shipping-company').val(json['company']);
            \$('#input-shipping-address-1').val(json['address_1']);
            \$('#input-shipping-address-2').val(json['address_2']);
            \$('#input-shipping-city').val(json['city']);
            \$('#input-shipping-postcode').val(json['postcode']);
            \$('#x-shipping-country').attr('value', json['country_id']);
            \$('#x-shipping-zone').attr('value', json['zone_id']);

            for (i in json['custom_field']) {
                \$('#input-shipping-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-shipping-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=shipping_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-cart, #form-shipping-address').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        complete: function() {
            \$('#button-shipping-address').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-shipping-address .alert-dismissible').remove();
            \$('#form-shipping-address .is-invalid').removeClass('is-invalid');
            \$('#form-shipping-address .invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-shipping-firstname').val() + ' ' + \$('#input-shipping-lastname').val() + '<br/>';

                var company = \$('#input-shipping-company').val();

                if (company) {
                    address += \$('#input-shipping-company').val() + '<br/>';
                }

                address += \$('#input-shipping-address-1').val() + '<br/>';

                var address_2 = \$('#input-shipping-address-2').val();

                if (address_2) {
                    address += \$('#input-shipping-address-2').val() + '<br/>';
                }

                address += \$('#input-shipping-city').val() + '<br/>';

                var postcode = \$('#input-shipping-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-shipping-zone option:selected').text() + '<br/>';
                address += \$('#input-shipping-country option:selected').text();

                \$('#output-shipping-address').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Method
var shipping_method = [];

\$('#button-shipping-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=shipping_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
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
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            html = '';

            if (json['shipping_methods']) {
                var k = 0;

                html += '<ul class=\"list-unstyled\">';

                for (i in json['shipping_methods']) {
                    html += '<li class=\"mb-3\"><strong>' + json['shipping_methods'][i]['name'] + '</strong>';
                    html += '<ul class=\"list-unstyled mt-2\">';

                    if (!json['shipping_methods'][i]['error']) {
                        for (j in json['shipping_methods'][i]['quote']) {
                            shipping_method[json['shipping_methods'][i]['quote'][j]['code']] = json['shipping_methods'][i]['quote'][j];

                            html += '<li><input type=\"radio\" name=\"choose_shipping\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + k + '\"';

                            if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';

                            html += '  <label for=\"input-shipping-method-' + k + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - <x-currency code=\"' + \$('#input-currency').val() + '\" amount=\"' + json['shipping_methods'][i]['quote'][j]['cost'] + '\"></x-currency></label>';
                            html += '</li>';

                            k++;
                        }
                    } else {
                        html += '<li><div class=\"alert alert-danger\">' + json['shipping_methods'][i]['error'] + '</div></li>';
                    }

                    html += '</ul>';
                    html += '</li>';
                }

                html += '</ul>';

                \$('#shipping-methods').html(html);

                \$('#modal-shipping-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-shipping-method').on('change', 'input[name=\\'choose_shipping\\']', function() {
    var code = \$(this).val();

    if (shipping_method[code]) {
        \$('#input-shipping-method-name').val(shipping_method[code]['name']);
        \$('#input-shipping-method-code').val(shipping_method[code]['code']);
        \$('#input-shipping-method-cost').val(shipping_method[code]['cost']);
        \$('#input-shipping-method-tax-class').val(shipping_method[code]['tax_class_id']);
    }
});

\$('#form-shipping-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=shipping_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-method').button('loading');
        },
        complete: function() {
            \$('#button-shipping-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-shipping-method').html(\$('#input-shipping-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Method
var payment_method = [];

\$('#button-payment-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=payment_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            var html = '';

            if (json['payment_methods']) {
                var k = 0;

                html += '<ul class=\"list-unstyled\">';

                for (i in json['payment_methods']) {
                    html += '<li class=\"mb-3\"><strong>' + json['payment_methods'][i]['name'] + '</strong>';
                    html += '<ul class=\"list-unstyled mt-2\">';

                    if (!json['payment_methods'][i]['error']) {
                        for (j in json['payment_methods'][i]['option']) {
                            payment_method[json['payment_methods'][i]['option'][j]['code']] = json['payment_methods'][i]['option'][j];

                            html += '<li><input type=\"radio\" name=\"choose_payment\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + k + '\"';

                            if (json['payment_methods'][i]['option'][j]['code'] == \$('#input-payment-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';
                            html += '  <label for=\"input-payment-method-' + k + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                            html += '</li>';

                            k++;
                        }
                    } else {
                        html += '<li><div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div></li>';
                    }

                    html += '</ul>';
                    html += '</li>';
                }

                html += '</ul>';

                \$('#payment-methods').html(html);

                \$('#modal-payment-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-payment-method').on('change', 'input[name=\\'choose_payment\\']', function() {
    var code = \$(this).val();

    if (payment_method[code]) {
        \$('#input-payment-method-name').val(payment_method[code]['name']);
        \$('#input-payment-method-code').val(payment_method[code]['code']);
    }
});

\$('#form-payment-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=payment_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-payment-method').button('loading');
        },
        complete: function() {
            \$('#button-payment-method').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-payment-method').html(\$('#input-payment-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-comment').on('submit', function(e) {
    e.preventDefault();

    \$('#output-comment').html(\$('#input-comment').val().replace(/<[^>]*>?/gm, '').replace(/(?:\\r\\n|\\r|\\n)/g, '<br/>'));
});

\$('#button-refresh').on('click', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=cart&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-refresh').button('loading');
        },
        complete: function() {
            \$('#button-refresh').button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['error']) {
                if (typeof json['error'] == 'string') {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-confirm').on('click', function() {
    var element = this;

    console.log(\$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #form-comment, #input-order-id').serialize());

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=confirm&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #form-comment, #input-order-id').serialize(),
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
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }

                // Highlight any invalid fields
                \$('.is-invalid').parents('form').each(function(index, element) {
                    \$(\$(element).attr('data-oc-target')).addClass('is-invalid');
                });
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['order_id']) {
                    \$('#input-order-id').val(json['order_id']);
                }

                if (json['points']) {
                    \$('#output-point').html(json['points']);
                    \$('#button-reward-add').prop('disabled', false);
                    \$('#button-reward-remove').prop('disabled', false);
                } else {
                    \$('#output-point').html(0);
                    \$('#button-reward-add').prop('disabled', true);
                    \$('#button-reward-remove').prop('disabled', true);
                }

                if (json['commission']) {
                    \$('#output-commission').html('<x-currency code=\"' + \$('#input-currency').val() + '\" amount=\"' + json['commission'] + '\" value=\"{{ currency_value }}\"></x-currency>');
                    \$('#button-commission-add').prop('disabled', false);
                    \$('#button-commission-remove').prop('disabled', false);
                } else {
                    \$('#output-commission').html('&nbsp;');
                    \$('#button-commission-add').prop('disabled', true);
                    \$('#button-commission-remove').prop('disabled', true);
                }

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh all products and totals
var order_product_row = {{ order_product_row }};

function cart_render(products, totals, shipping_required) {
    html = '';

    if (products) {
        for (i in products) {
            product = products[i];

            html += '<tr>';
            html += '  <td><a href=\"index.php?route=catalog/product.form&user_token={{ user_token }}&product_id=' + product['product_id'] + '\" target=\"_blank\">' + product['name'] + '</a>' + (!product['stock'] ? ' <span class=\"text-danger\">***</span>' : '');
            html += '    <div id=\"error-product-' + order_product_row + '-product\" class=\"invalid-feedback mt-0\"></div>';

            html += '<ul class=\"list-unstyled mb-0\">';

            html += '<li>';
            html += '  <small> - {{ text_model|escape('js') }}: ' + product['model'] + '</small>';
            html += '</li>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                html += '<li>';
                html += '  <small> - ' + option['name'] + ': ' + option['value'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-option-' + option['product_option_id'] + '\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['subscription']) {
                html += '<li>';
                html += '  <small> - {{ text_subscription|escape('js') }}: ' + product['subscription'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-subscription\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['reward']) {
                html += '<li>';
                html += '  <small> - {{ text_points|escape('js') }}: ' + product['reward'] + '</small>';
                html += '</li>';
            }

            html += '</ul>';

            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][product_id]\" value=\"' + product['product_id'] + '\"/>';
            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][quantity]\" value=\"' + product['quantity'] + '\"/>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                if (option['type'] == 'select' || option['type'] == 'radio') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + '][]\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\"/>';
                }
            }

            html += '    <input type=\"hidden\" name=\"product[' + order_product_row + '][subscription_plan_id]\" value=\"' + product['subscription_plan_id'] + '\"/>';
            html += '  </td>';
            html += '  <td class=\"text-end\">' + product['quantity'] + '</td>';
            html += '  <td class=\"text-end\"><x-currency code=\"' + \$('#input-currency').val() + '\" amount=\"' + product['price'] + '\" value=\"{{ currency_value }}\"></x-currency></td>';
            html += '  <td class=\"text-end\"><x-currency code=\"' + \$('#input-currency').val() + '\" amount=\"' + product['total'] + '\" value=\"{{ currency_value }}\"></x-currency></td>';
            html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            order_product_row++;
        }
    } else {
        html += '<tr>';
        html += '  <td colspan=\"6\" class=\"text-center\">{{ text_no_results|escape('js') }}</td>';
        html += '</tr>';
    }

    \$('#order-product').html(html);

    // Totals
    html = '';

    for (i in totals) {
        total = totals[i];

        html += '<tr>';
        html += '  <td class=\"text-end\"><strong>' + total['title'] + '</strong></td>';
        html += '  <td class=\"text-end\" style=\"width: 1px;\"><x-currency code=\"' + \$('#input-currency').val() + '\" amount=\"' + total['value'] + '\" value=\"{{ currency_value }}\"></x-currency></td>';
        html += '</tr>';
    }

    \$('#order-total').html(html);

    if (shipping_required) {
        \$('#shipping-address').removeClass('d-none');
        \$('#shipping-method').removeClass('d-none');
        \$('#button-shipping-method').prop('disabled', false);
    } else {
        \$('#shipping-address').addClass('d-none');
        \$('#shipping-method').addClass('d-none');
        \$('#button-shipping-method').prop('disabled', true);
    }
}

// Reward
\$(document).on('click', '#button-reward-add, #button-reward-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Reward&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_add|escape('js') }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Affiliate
\$('#input-affiliate').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=marketing/affiliate.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    name: '{{ text_none }}'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-affiliate-id').val(item['value']);
        \$('#input-affiliate').val(decodeHTMLEntities(item['label']));
    }
});

\$('#form-affiliate').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=affiliate&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-affiliate').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-affiliate').button('loading');
        },
        complete: function() {
            \$('#button-affiliate').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (\$('#input-affiliate-id').val()) {
                    \$('#output-affiliate').html('<a href=\"index.php?route=marketing/affiliate.form&user_token={{ user_token }}&customer_id=' + \$('#input-affiliate-id').val() + '\" target=\"_blank\">' + \$('#input-affiliate').val() + '</a>');
                } else {
                    \$('#output-affiliate').html('');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Commission
\$(document).on('click', '#button-commission-add, #button-commission-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Commission&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_add|escape('js') }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
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

\$('#form-history').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=history_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val() + '&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=sale/order.history&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "admin/view/template/sale/order_info.twig", "C:\\xampp\\htdocs\\bareeq_platform\\admin\\view\\template\\sale\\order_info.twig");
    }
}
