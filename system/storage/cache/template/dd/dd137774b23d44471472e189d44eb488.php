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

/* catalog/view/template/checkout/checkout.twig */
class __TwigTemplate_731c65f4993cb85d43fb88c7dd710315 extends Template
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
<div id=\"checkout-checkout\" class=\"container\">
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
        // line 9
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">
      ";
        // line 11
        yield ($context["content_top"] ?? null);
        yield "
      <h1 class=\"checkout-heading\">";
        // line 12
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <div class=\"row\">
        ";
        // line 14
        if (((($context["register"] ?? null) || ($context["payment_address"] ?? null)) || ($context["shipping_address"] ?? null))) {
            // line 15
            yield "          <div class=\"col-md-7 mb-4\">
            ";
            // line 16
            if (($context["register"] ?? null)) {
                // line 17
                yield "              <div id=\"checkout-register\" class=\"checkout-section\">";
                yield ($context["register"] ?? null);
                yield "</div>
            ";
            }
            // line 19
            yield "            ";
            if (($context["payment_address"] ?? null)) {
                // line 20
                yield "              <div id=\"checkout-payment-address\" class=\"checkout-section\">";
                yield ($context["payment_address"] ?? null);
                yield "</div>
            ";
            }
            // line 22
            yield "            ";
            if (($context["shipping_address"] ?? null)) {
                // line 23
                yield "              <div id=\"checkout-shipping-address\" class=\"checkout-section\">";
                yield ($context["shipping_address"] ?? null);
                yield "</div>
            ";
            }
            // line 25
            yield "          </div>
        ";
        }
        // line 27
        yield "        <div class=\"col-md-5\">
          ";
        // line 28
        if (($context["shipping_method"] ?? null)) {
            // line 29
            yield "            <div id=\"checkout-shipping-method\" class=\"checkout-section\">";
            yield ($context["shipping_method"] ?? null);
            yield "</div>
          ";
        }
        // line 31
        yield "          <div id=\"checkout-payment-method\" class=\"checkout-section mb-4\">";
        yield ($context["payment_method"] ?? null);
        yield "</div>
          <div id=\"checkout-confirm\" class=\"checkout-section\">";
        // line 32
        yield ($context["confirm"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
    ";
        // line 37
        yield "  </div>
  ";
        // line 38
        yield ($context["column_right"] ?? null);
        yield "
</div>
";
        // line 40
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
        return "catalog/view/template/checkout/checkout.twig";
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
        return array (  147 => 40,  142 => 38,  139 => 37,  132 => 32,  127 => 31,  121 => 29,  119 => 28,  116 => 27,  112 => 25,  106 => 23,  103 => 22,  97 => 20,  94 => 19,  88 => 17,  86 => 16,  83 => 15,  81 => 14,  76 => 12,  72 => 11,  67 => 9,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"checkout-checkout\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">
    {{ column_left }}
    <div id=\"content\" class=\"col\">
      {{ content_top }}
      <h1 class=\"checkout-heading\">{{ heading_title }}</h1>
      <div class=\"row\">
        {% if register or payment_address or shipping_address %}
          <div class=\"col-md-7 mb-4\">
            {% if register %}
              <div id=\"checkout-register\" class=\"checkout-section\">{{ register }}</div>
            {% endif %}
            {% if payment_address %}
              <div id=\"checkout-payment-address\" class=\"checkout-section\">{{ payment_address }}</div>
            {% endif %}
            {% if shipping_address %}
              <div id=\"checkout-shipping-address\" class=\"checkout-section\">{{ shipping_address }}</div>
            {% endif %}
          </div>
        {% endif %}
        <div class=\"col-md-5\">
          {% if shipping_method %}
            <div id=\"checkout-shipping-method\" class=\"checkout-section\">{{ shipping_method }}</div>
          {% endif %}
          <div id=\"checkout-payment-method\" class=\"checkout-section mb-4\">{{ payment_method }}</div>
          <div id=\"checkout-confirm\" class=\"checkout-section\">{{ confirm }}</div>
        </div>
      </div>
    </div>
    {# {{ content_bottom }} #}
  </div>
  {{ column_right }}
</div>
{{ footer }}
", "catalog/view/template/checkout/checkout.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\checkout\\checkout.twig");
    }
}
