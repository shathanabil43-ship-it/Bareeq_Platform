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

/* catalog/view/template/account/payment_method.twig */
class __TwigTemplate_258cfab65fc8bda43387f834d2cf75d4 extends Template
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
<div id=\"account-payment-method\" class=\"container\">
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

      <div class=\"bareq-login-wrapper\">

        
        <div class=\"mb-4\">
          <h1 class=\"bareq-login-title mb-1\">";
        // line 19
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">
            ";
        // line 21
        yield ($context["text_description"] ?? "");
        yield "
          </p>
        </div>

       
        <div class=\"bareq-login-card bareq-login-card--main bareq-payment-card\">

          <div id=\"payment-method\" class=\"bareq-payment-list\">
            ";
        // line 29
        yield ($context["list"] ?? null);
        yield "
          </div>

          <div class=\"d-flex justify-content-end mt-3\">
            <a href=\"";
        // line 33
        yield ($context["back"] ?? null);
        yield "\" class=\"banner-btn-outline\">
              ";
        // line 34
        yield ($context["button_back"] ?? null);
        yield "
            </a>
          </div>

        </div>
      </div>

      ";
        // line 42
        yield "    </div>

    ";
        // line 44
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 47
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
        return "catalog/view/template/account/payment_method.twig";
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
        return array (  130 => 47,  124 => 44,  120 => 42,  110 => 34,  106 => 33,  99 => 29,  88 => 21,  83 => 19,  74 => 13,  68 => 10,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-payment-method\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      <div class=\"bareq-login-wrapper\">

        
        <div class=\"mb-4\">
          <h1 class=\"bareq-login-title mb-1\">{{ heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">
            {{ text_description ?? '' }}
          </p>
        </div>

       
        <div class=\"bareq-login-card bareq-login-card--main bareq-payment-card\">

          <div id=\"payment-method\" class=\"bareq-payment-list\">
            {{ list }}
          </div>

          <div class=\"d-flex justify-content-end mt-3\">
            <a href=\"{{ back }}\" class=\"banner-btn-outline\">
              {{ button_back }}
            </a>
          </div>

        </div>
      </div>

      {# {{ content_bottom }} #}
    </div>

    {{ column_right }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/payment_method.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\payment_method.twig");
    }
}
