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

/* admin/view/template/sale/order_shipping.twig */
class __TwigTemplate_e081653ef6a299b99ad24bd2b035f445 extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>";
        // line 5
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 6
        yield ($context["base"] ?? null);
        yield "\"/>
  <link href=\"";
        // line 7
        yield ($context["stylesheet"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"container\">
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 12
            yield "    <div style=\"page-break-after: always;\">
      <h1>";
            // line 13
            yield ($context["text_picklist"] ?? null);
            yield " #";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 13);
            yield "</h1>

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 19
            yield ($context["text_invoice"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 21)) {
                // line 22
                yield "                ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 22);
                yield "
              ";
            } else {
                // line 24
                yield "                &nbsp;
              ";
            }
            // line 26
            yield "            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 32
            yield ($context["text_order_id"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 34
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 34);
            yield "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 41
            yield ($context["text_date_added"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 43
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 43);
            yield "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 50
            yield ($context["text_store"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 52
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 52);
            yield "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 59
            yield ($context["text_store_telephone"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 61);
            yield "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 68
            yield ($context["text_store_email"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 70
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 70);
            yield "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 77
            yield ($context["text_website"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 79
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 79);
            yield "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 86
            yield ($context["text_shipping_method"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 88
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 88);
            yield "
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 95
            yield ($context["text_customer_email"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 97)) {
                // line 98
                yield "                ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 98);
                yield "
              ";
            } else {
                // line 100
                yield "                &nbsp;
              ";
            }
            // line 102
            yield "            </div>
          </div>
        </div>

        ";
            // line 106
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 106)) {
                // line 107
                yield "        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
                // line 109
                yield ($context["text_customer_telephone"] ?? null);
                yield "</strong>
              <br/>
              ";
                // line 111
                if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 111)) {
                    // line 112
                    yield "                ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "telephone", [], "any", false, false, false, 112);
                    yield "
              ";
                } else {
                    // line 114
                    yield "                &nbsp;
              ";
                }
                // line 116
                yield "            </div>
          </div>
        </div>
        ";
            }
            // line 120
            yield "
      </div>

      <div class=\"row row-cols-1 row-cols-sm-2\">
        <div class=\"col\">

          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 127
            yield ($context["text_shipping_address"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 129
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 129)) {
                // line 130
                yield "                ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 130);
                yield "
              ";
            } else {
                // line 132
                yield "                &nbsp;
              ";
            }
            // line 134
            yield "            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 140
            yield ($context["text_store_address"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 142
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 142);
            yield "
            </div>
          </div>
        </div>

      </div>

      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th>";
            // line 152
            yield ($context["column_location"] ?? null);
            yield "</th>
            <th>";
            // line 153
            yield ($context["column_reference"] ?? null);
            yield "</th>
            <th>";
            // line 154
            yield ($context["column_product"] ?? null);
            yield "</th>
            <th>";
            // line 155
            yield ($context["column_weight"] ?? null);
            yield "</th>
            <th>";
            // line 156
            yield ($context["column_model"] ?? null);
            yield "</th>
            <th class=\"text-end\">";
            // line 157
            yield ($context["column_quantity"] ?? null);
            yield "</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 162
                yield "            <tr>
              <td>";
                // line 163
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "location", [], "any", false, false, false, 163);
                yield "</td>
              <td>
                ";
                // line 165
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 165)) {
                    // line 166
                    yield "                  ";
                    yield ($context["text_sku"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 166);
                    yield "
                  <br/>
                ";
                }
                // line 169
                yield "
                ";
                // line 170
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 170)) {
                    // line 171
                    yield "                  ";
                    yield ($context["text_upc"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 171);
                    yield "
                  <br/>
                ";
                }
                // line 174
                yield "
                ";
                // line 175
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 175)) {
                    // line 176
                    yield "                  ";
                    yield ($context["text_ean"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 176);
                    yield "
                  <br/>
                ";
                }
                // line 179
                yield "
                ";
                // line 180
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "jan", [], "any", false, false, false, 180)) {
                    // line 181
                    yield "                  ";
                    yield ($context["text_jan"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "jan", [], "any", false, false, false, 181);
                    yield "
                  <br/>
                ";
                }
                // line 184
                yield "
                ";
                // line 185
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isbn", [], "any", false, false, false, 185)) {
                    // line 186
                    yield "                  ";
                    yield ($context["text_isbn"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isbn", [], "any", false, false, false, 186);
                    yield "
                  <br/>
                ";
                }
                // line 189
                yield "
                ";
                // line 190
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 190)) {
                    // line 191
                    yield "                  ";
                    yield ($context["text_mpn"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 191);
                    yield "
                  <br/>
                ";
                }
                // line 193
                yield "</td>
              <td>";
                // line 194
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 194);
                yield "

                ";
                // line 196
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 196));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 197
                    yield "                  <br/>
                  <small> - ";
                    // line 198
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 198);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 198);
                    yield "</small>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                yield "
                ";
                // line 201
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 201)) {
                    // line 202
                    yield "                  <br/>
                  <small> - ";
                    // line 203
                    yield ($context["text_points"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 203);
                    yield "</small>
                ";
                }
                // line 204
                yield "</td>

              <td>";
                // line 206
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 206);
                yield "</td>
              <td>";
                // line 207
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 207);
                yield "</td>
              <td class=\"text-end\">";
                // line 208
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 208);
                yield "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            yield "        </tbody>
      </table>
      ";
            // line 213
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 213)) {
                // line 214
                yield "        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <th>";
                // line 217
                yield ($context["text_comment"] ?? null);
                yield "</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
                // line 222
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 222);
                yield "</td>
            </tr>
          </tbody>
        </table>
      ";
            }
            // line 227
            yield "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        yield "</div>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/sale/order_shipping.twig";
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
        return array (  534 => 229,  527 => 227,  519 => 222,  511 => 217,  506 => 214,  504 => 213,  500 => 211,  491 => 208,  487 => 207,  483 => 206,  479 => 204,  472 => 203,  469 => 202,  467 => 201,  464 => 200,  454 => 198,  451 => 197,  447 => 196,  442 => 194,  439 => 193,  431 => 191,  429 => 190,  426 => 189,  417 => 186,  415 => 185,  412 => 184,  403 => 181,  401 => 180,  398 => 179,  389 => 176,  387 => 175,  384 => 174,  375 => 171,  373 => 170,  370 => 169,  361 => 166,  359 => 165,  354 => 163,  351 => 162,  347 => 161,  340 => 157,  336 => 156,  332 => 155,  328 => 154,  324 => 153,  320 => 152,  307 => 142,  302 => 140,  294 => 134,  290 => 132,  284 => 130,  282 => 129,  277 => 127,  268 => 120,  262 => 116,  258 => 114,  252 => 112,  250 => 111,  245 => 109,  241 => 107,  239 => 106,  233 => 102,  229 => 100,  223 => 98,  221 => 97,  216 => 95,  206 => 88,  201 => 86,  191 => 79,  186 => 77,  176 => 70,  171 => 68,  161 => 61,  156 => 59,  146 => 52,  141 => 50,  131 => 43,  126 => 41,  116 => 34,  111 => 32,  103 => 26,  99 => 24,  93 => 22,  91 => 21,  86 => 19,  75 => 13,  72 => 12,  68 => 11,  61 => 7,  57 => 6,  53 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  <link href=\"{{ stylesheet }}\" type=\"text/css\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"container\">
  {% for order in orders %}
    <div style=\"page-break-after: always;\">
      <h1>{{ text_picklist }} #{{ order.order_id }}</h1>

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_invoice }}</strong>
              <br/>
              {% if order.invoice_no %}
                {{ order.invoice_no }}
              {% else %}
                &nbsp;
              {% endif %}
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_order_id }}</strong>
              <br/>
              {{ order.order_id }}
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_date_added }}</strong>
              <br/>
              {{ order.date_added }}
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_store }}</strong>
              <br/>
              {{ order.store_name }}
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_store_telephone }}</strong>
              <br/>
              {{ order.store_telephone }}
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_store_email }}</strong>
              <br/>
              {{ order.store_email }}
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_website }}</strong>
              <br/>
              {{ order.store_url }}
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_shipping_method }}</strong>
              <br/>
              {{ order.shipping_method }}
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_customer_email }}</strong>
              <br/>
              {% if order.email %}
                {{ order.email }}
              {% else %}
                &nbsp;
              {% endif %}
            </div>
          </div>
        </div>

        {% if order.telephone %}
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_customer_telephone }}</strong>
              <br/>
              {% if order.telephone %}
                {{ order.telephone }}
              {% else %}
                &nbsp;
              {% endif %}
            </div>
          </div>
        </div>
        {% endif %}

      </div>

      <div class=\"row row-cols-1 row-cols-sm-2\">
        <div class=\"col\">

          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_shipping_address }}</strong>
              <br/>
              {% if order.shipping_address %}
                {{ order.shipping_address }}
              {% else %}
                &nbsp;
              {% endif %}
            </div>
          </div>
        </div>

        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_store_address }}</strong>
              <br/>
              {{ order.store_address }}
            </div>
          </div>
        </div>

      </div>

      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th>{{ column_location }}</th>
            <th>{{ column_reference }}</th>
            <th>{{ column_product }}</th>
            <th>{{ column_weight }}</th>
            <th>{{ column_model }}</th>
            <th class=\"text-end\">{{ column_quantity }}</th>
          </tr>
        </thead>
        <tbody>
          {% for product in order.product %}
            <tr>
              <td>{{ product.location }}</td>
              <td>
                {% if product.sku %}
                  {{ text_sku }} {{ product.sku }}
                  <br/>
                {% endif %}

                {% if product.upc %}
                  {{ text_upc }} {{ product.upc }}
                  <br/>
                {% endif %}

                {% if product.ean %}
                  {{ text_ean }} {{ product.ean }}
                  <br/>
                {% endif %}

                {% if product.jan %}
                  {{ text_jan }} {{ product.jan }}
                  <br/>
                {% endif %}

                {% if product.isbn %}
                  {{ text_isbn }} {{ product.isbn }}
                  <br/>
                {% endif %}

                {% if product.mpn %}
                  {{ text_mpn }}{{ product.mpn }}
                  <br/>
                {% endif %}</td>
              <td>{{ product.name }}

                {% for option in product.option %}
                  <br/>
                  <small> - {{ option.name }}: {{ option.value }}</small>
                {% endfor %}

                {% if product.reward %}
                  <br/>
                  <small> - {{ text_points }} {{ product.reward }}</small>
                {% endif %}</td>

              <td>{{ product.weight }}</td>
              <td>{{ product.model }}</td>
              <td class=\"text-end\">{{ product.quantity }}</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
      {% if order.comment %}
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <th>{{ text_comment }}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ order.comment }}</td>
            </tr>
          </tbody>
        </table>
      {% endif %}
    </div>
  {% endfor %}
</div>
</body>
</html>
", "admin/view/template/sale/order_shipping.twig", "C:\\xampp\\htdocs\\bareeq_platform\\admin\\view\\template\\sale\\order_shipping.twig");
    }
}
