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

/* catalog/view/template/account/newsletter.twig */
class __TwigTemplate_75b51779e0f762496d9bf73d6cb19953 extends Template
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
<div id=\"account-newsletter\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t<a href=\"";
            // line 6
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            yield "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "\t</ul>
\t<div class=\"row\">";
        // line 10
        yield ($context["column_left"] ?? null);
        yield "
\t\t<div id=\"content\" class=\"col\">";
        // line 11
        yield ($context["content_top"] ?? null);
        yield "
\t\t\t<h1>";
        // line 12
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t<form id=\"form-newsletter\" action=\"";
        // line 13
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"row mb-3 mb-0\">
\t\t\t\t\t\t<label class=\"col-md-3 col-form-label\">";
        // line 16
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<x-switch name=\"newsletter\" value=\"1\" checked=\"";
        // line 18
        yield ($context["newsletter"] ?? null);
        yield "\" input-id=\"input-newsletter\" input-class=\"form-switch form-switch-lg\"></x-switch>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<a href=\"";
        // line 24
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\">";
        yield ($context["button_back"] ?? null);
        yield "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col text-end\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 27
        yield ($context["button_continue"] ?? null);
        yield "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 32
        yield "\t\t</div>
\t\t";
        // line 33
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 35
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
        return "catalog/view/template/account/newsletter.twig";
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
        return array (  124 => 35,  119 => 33,  116 => 32,  109 => 27,  101 => 24,  92 => 18,  87 => 16,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  66 => 9,  55 => 6,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-newsletter\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t<a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t</li>
\t\t{% endfor %}
\t</ul>
\t<div class=\"row\">{{ column_left }}
\t\t<div id=\"content\" class=\"col\">{{ content_top }}
\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t<form id=\"form-newsletter\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"row mb-3 mb-0\">
\t\t\t\t\t\t<label class=\"col-md-3 col-form-label\">{{ entry_newsletter }}</label>
\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t<x-switch name=\"newsletter\" value=\"1\" checked=\"{{ newsletter }}\" input-id=\"input-newsletter\" input-class=\"form-switch form-switch-lg\"></x-switch>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<a href=\"{{ back }}\" class=\"btn btn-light\">{{ button_back }}</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col text-end\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">{{ button_continue }}</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t{# {{ content_bottom }} #}
\t\t</div>
\t\t{{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/account/newsletter.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\newsletter.twig");
    }
}
