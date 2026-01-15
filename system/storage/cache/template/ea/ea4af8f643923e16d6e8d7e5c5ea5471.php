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

/* catalog/view/template/account/subscription_list.twig */
class __TwigTemplate_cae1ab5e9b7a2e7bed253813cbd5ab0b extends Template
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
<div id=\"account-subscription\" class=\"container\">
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

\t\t\t";
        // line 18
        yield "\t\t\t<div
\t\t\t\tclass=\"bareq-login-wrapper\">

\t\t\t\t";
        // line 22
        yield "\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t<h1 class=\"bareq-login-title\">";
        // line 23
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t\t\t<p class=\"bareq-login-subtitle\">
\t\t\t\t\t\tManage your subscriptions and recurring orders in one place.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t";
        // line 30
        yield "\t\t\t\t<div class=\"bareq-login-card bareq-login-card--main\">

\t\t\t\t\t";
        // line 32
        if (($context["subscriptions"] ?? null)) {
            // line 33
            yield "\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover mb-0\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">";
            // line 37
            yield ($context["column_subscription_id"] ?? null);
            yield "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">";
            // line 38
            yield ($context["column_product_total"] ?? null);
            yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
            // line 39
            yield ($context["column_description"] ?? null);
            yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
            // line 40
            yield ($context["column_status"] ?? null);
            yield "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
            // line 41
            yield ($context["column_date_added"] ?? null);
            yield "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\"></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscriptions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                // line 47
                yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">#";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "subscription_id", [], "any", false, false, false, 48);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">";
                // line 49
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "product_total", [], "any", false, false, false, 49);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "description", [], "any", false, false, false, 50);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 51
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 51);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "date_added", [], "any", false, false, false, 52);
                yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "view", [], "any", false, false, false, 54);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_view"] ?? null);
                yield "\" class=\"bareq-btn-main btn btn-sm border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 56
                yield ($context["button_view"] ?? null);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-start\">";
            // line 66
            yield ($context["pagination"] ?? null);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-end\">";
            // line 67
            yield ($context["results"] ?? null);
            yield "</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        } else {
            // line 71
            yield "\t\t\t\t\t\t";
            // line 72
            yield "\t\t\t\t\t\t<div class=\"py-4\">
\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8 text-md-end text-center mb-3 mb-md-0\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">
\t\t\t\t\t\t\t\t\t\t";
            // line 76
            yield ($context["text_no_subscription"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 text-md-start text-center mt-2 mt-md-0\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 80
            yield ($context["continue"] ?? null);
            yield "\" class=\"bareq-btn-main\">
\t\t\t\t\t\t\t\t\t\t";
            // line 81
            yield ($context["button_continue"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 87
        yield "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 92
        yield "\t\t</div>

\t\t";
        // line 94
        yield ($context["column_right"] ?? null);
        yield "
\t</div>
</div>
";
        // line 97
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
        return "catalog/view/template/account/subscription_list.twig";
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
        return array (  243 => 97,  237 => 94,  233 => 92,  227 => 87,  218 => 81,  214 => 80,  207 => 76,  201 => 72,  199 => 71,  192 => 67,  188 => 66,  181 => 61,  170 => 56,  163 => 54,  158 => 52,  154 => 51,  150 => 50,  146 => 49,  142 => 48,  139 => 47,  135 => 46,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  105 => 33,  103 => 32,  99 => 30,  90 => 23,  87 => 22,  82 => 18,  77 => 15,  71 => 12,  66 => 9,  55 => 6,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-subscription\" class=\"container\">
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

\t\t\t{# الكرت العام – نفس ستايل صفحات بريق الأخرى #}
\t\t\t<div
\t\t\t\tclass=\"bareq-login-wrapper\">

\t\t\t\t{# رأس الصفحة #}
\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t<h1 class=\"bareq-login-title\">{{ heading_title }}</h1>
\t\t\t\t\t<p class=\"bareq-login-subtitle\">
\t\t\t\t\t\tManage your subscriptions and recurring orders in one place.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t{# كرت المحتوى الداخلي #}
\t\t\t\t<div class=\"bareq-login-card bareq-login-card--main\">

\t\t\t\t\t{% if subscriptions %}
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover mb-0\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">{{ column_subscription_id }}</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\">{{ column_product_total }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_description }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_status }}</th>
\t\t\t\t\t\t\t\t\t\t<th>{{ column_date_added }}</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-end\"></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for subscription in subscriptions %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">#{{ subscription.subscription_id }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">{{ subscription.product_total }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ subscription.description }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ subscription.status }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ subscription.date_added }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ subscription.view }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_view }}\" class=\"bareq-btn-main btn btn-sm border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ button_view }}
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
\t\t\t\t\t\t{# حالة لا توجد اشتراكات – نفس شكل Downloads/Wishlist #}
\t\t\t\t\t\t<div class=\"py-4\">
\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8 text-md-end text-center mb-3 mb-md-0\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-muted\">
\t\t\t\t\t\t\t\t\t\t{{ text_no_subscription }}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 text-md-start text-center mt-2 mt-md-0\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ continue }}\" class=\"bareq-btn-main\">
\t\t\t\t\t\t\t\t\t\t{{ button_continue }}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t</div>

\t\t\t{# {{ content_bottom }} #}
\t\t</div>

\t\t{{ column_right }}
\t</div>
</div>
{{ footer }}
", "catalog/view/template/account/subscription_list.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\subscription_list.twig");
    }
}
