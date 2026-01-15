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

/* catalog/view/template/account/returns_list.twig */
class __TwigTemplate_33a03fb3f2cb6abdd04aff7402e97bcb extends Template
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
<div id=\"account-return\" class=\"container\">
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
        yield ($context["text_no_results"] ?? null);
        yield "
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"bareq-login-card bareq-login-card--main\">
\t\t\t\t\t";
        // line 28
        if (($context["returns"] ?? null)) {
            // line 29
            yield "\t\t\t\t\t\t<div class=\"table-responsive mb-0\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover mb-0\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">";
            // line 33
            yield ($context["column_return_id"] ?? null);
            yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
            // line 34
            yield ($context["column_status"] ?? null);
            yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
            // line 35
            yield ($context["column_date_added"] ?? null);
            yield "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">";
            // line 36
            yield ($context["column_order_id"] ?? null);
            yield "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\"></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["returns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 42
                yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">#";
                // line 43
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 43);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 44);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "date_added", [], "any", false, false, false, 45);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
                // line 46
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "order_id", [], "any", false, false, false, 46);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "href", [], "any", false, false, false, 48);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_view"] ?? null);
                yield "\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['return'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-start\">";
            // line 59
            yield ($context["pagination"] ?? null);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-end\">";
            // line 60
            yield ($context["results"] ?? null);
            yield "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 63
            yield "\t\t\t\t\t\t<p class=\"mb-0 text-muted\">
\t\t\t\t\t\t\t";
            // line 64
            yield ($context["text_no_results"] ?? null);
            yield "
\t\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        // line 67
        yield "
\t\t\t\t\t<div class=\"mt-3 text-end\">
\t\t\t\t\t\t<a href=\"";
        // line 69
        yield ($context["continue"] ?? null);
        yield "\" class=\"bareq-btn-main\">
\t\t\t\t\t\t\t";
        // line 70
        yield ($context["button_continue"] ?? null);
        yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 77
        yield "\t\t</div>

\t\t";
        // line 79
        yield ($context["column_right"] ?? null);
        yield "
\t</div>
</div>
";
        // line 82
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
        return "catalog/view/template/account/returns_list.twig";
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
        return array (  219 => 82,  213 => 79,  209 => 77,  200 => 70,  196 => 69,  192 => 67,  186 => 64,  183 => 63,  177 => 60,  173 => 59,  166 => 54,  152 => 48,  147 => 46,  143 => 45,  139 => 44,  135 => 43,  132 => 42,  128 => 41,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  102 => 29,  100 => 28,  92 => 23,  87 => 21,  84 => 20,  77 => 15,  71 => 12,  66 => 9,  55 => 6,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-return\" class=\"container\">
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
\t\t\t\t\t\t{{ text_no_results }}
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"bareq-login-card bareq-login-card--main\">
\t\t\t\t\t{% if returns %}
\t\t\t\t\t\t<div class=\"table-responsive mb-0\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover mb-0\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">{{ column_return_id }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_status }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_date_added }}</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">{{ column_order_id }}</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\"></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for return in returns %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">#{{ return.return_id }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ return.status }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ return.date_added }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{{ return.order_id }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ return.href }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_view }}\" class=\"btn btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-start\">{{ pagination }}</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-end\">{{ results }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p class=\"mb-0 text-muted\">
\t\t\t\t\t\t\t{{ text_no_results }}
\t\t\t\t\t\t</p>
\t\t\t\t\t{% endif %}

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
", "catalog/view/template/account/returns_list.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\returns_list.twig");
    }
}
