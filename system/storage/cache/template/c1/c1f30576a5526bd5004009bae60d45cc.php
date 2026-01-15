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

/* catalog/view/template/account/transaction.twig */
class __TwigTemplate_e63dae546d3017537facc7c0f222e1c2 extends Template
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
<div id=\"account-transaction\" class=\"container\">
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

\t<div class=\"row\">
\t\t";
        // line 12
        yield ($context["column_left"] ?? null);
        yield "

\t\t<div id=\"content\" class=\"col\">
\t\t\t";
        // line 15
        yield ($context["content_top"] ?? null);
        yield "

\t\t\t<div
\t\t\t\tclass=\"bareq-login-wrapper\">
\t\t\t\t";
        // line 20
        yield "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<h1 class=\"bareq-login-title\">";
        // line 21
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t\t<p class=\"bareq-login-subtitle\">
\t\t\t\t\t\t";
        // line 23
        yield ($context["text_total"] ?? null);
        yield "
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<x-currency code=\"";
        // line 25
        yield ($context["currency"] ?? null);
        yield "\" amount=\"";
        yield ($context["total"] ?? null);
        yield "\"></x-currency>
\t\t\t\t\t\t</strong>.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"bareq-login-card bareq-login-card--main\">
\t\t\t\t\t<div class=\"table-responsive mb-0\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover mb-0\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
        // line 35
        yield ($context["column_date_added"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 36
        yield ($context["column_description"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t\t<th class=\"text-end\">";
        // line 37
        yield ($context["column_amount"] ?? null);
        yield "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 41
        if (($context["transactions"] ?? null)) {
            // line 42
            yield "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 43
                yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 44);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 45);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<x-currency code=\"";
                // line 47
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 47);
                yield "\"></x-currency>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "\t\t\t\t\t\t\t\t";
        } else {
            // line 52
            yield "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"3\">";
            // line 53
            yield ($context["text_no_results"] ?? null);
            yield "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        // line 56
        yield "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t<div class=\"col-sm-6 text-start\">";
        // line 61
        yield ($context["pagination"] ?? null);
        yield "</div>
\t\t\t\t\t\t<div class=\"col-sm-6 text-end\">";
        // line 62
        yield ($context["results"] ?? null);
        yield "</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mt-3 text-end\">
\t\t\t\t\t\t<a href=\"";
        // line 66
        yield ($context["continue"] ?? null);
        yield "\" class=\"bareq-btn-main\">
\t\t\t\t\t\t\t";
        // line 67
        yield ($context["button_continue"] ?? null);
        yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 74
        yield "\t\t</div>

\t\t";
        // line 76
        yield ($context["column_right"] ?? null);
        yield "
\t</div>
</div>
";
        // line 79
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
        return "catalog/view/template/account/transaction.twig";
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
        return array (  211 => 79,  205 => 76,  201 => 74,  192 => 67,  188 => 66,  181 => 62,  177 => 61,  170 => 56,  164 => 53,  161 => 52,  158 => 51,  146 => 47,  141 => 45,  137 => 44,  134 => 43,  129 => 42,  127 => 41,  120 => 37,  116 => 36,  112 => 35,  97 => 25,  92 => 23,  87 => 21,  84 => 20,  77 => 15,  71 => 12,  66 => 9,  55 => 6,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-transaction\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t<a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t</li>
\t\t{% endfor %}
\t</ul>

\t<div class=\"row\">
\t\t{{ column_left }}

\t\t<div id=\"content\" class=\"col\">
\t\t\t{{ content_top }}

\t\t\t<div
\t\t\t\tclass=\"bareq-login-wrapper\">
\t\t\t\t{# رأس الصفحة #}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t<h1 class=\"bareq-login-title\">{{ heading_title }}</h1>
\t\t\t\t\t<p class=\"bareq-login-subtitle\">
\t\t\t\t\t\t{{ text_total }}
\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t<x-currency code=\"{{ currency }}\" amount=\"{{ total }}\"></x-currency>
\t\t\t\t\t\t</strong>.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"bareq-login-card bareq-login-card--main\">
\t\t\t\t\t<div class=\"table-responsive mb-0\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover mb-0\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>{{ column_date_added }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ column_description }}</th>
\t\t\t\t\t\t\t\t\t<th class=\"text-end\">{{ column_amount }}</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% if transactions %}
\t\t\t\t\t\t\t\t\t{% for transaction in transactions %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ transaction.date_added }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ transaction.description }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<x-currency code=\"{{ currency }}\" amount=\"{{ transaction.amount }}\"></x-currency>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t<div class=\"col-sm-6 text-start\">{{ pagination }}</div>
\t\t\t\t\t\t<div class=\"col-sm-6 text-end\">{{ results }}</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mt-3 text-end\">
\t\t\t\t\t\t<a href=\"{{ continue }}\" class=\"bareq-btn-main\">
\t\t\t\t\t\t\t{{ button_continue }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{# {{ content_bottom }} #}
\t\t</div>

\t\t{{ column_right }}
\t</div>
</div>
{{ footer }}
", "catalog/view/template/account/transaction.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\transaction.twig");
    }
}
