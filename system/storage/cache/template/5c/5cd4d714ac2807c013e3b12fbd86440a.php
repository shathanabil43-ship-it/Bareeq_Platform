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

/* catalog/view/template/account/password.twig */
class __TwigTemplate_f157fc15dc38dfa5fb713458284d6ddd extends Template
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
<div id=\"account-password\" class=\"container\">
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

      <div class=\"bareq-login-wrapper bareq-password-wrapper\">
        <!-- رأس الصفحة -->
        <div class=\"bareq-edit-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">";
        // line 20
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">";
        // line 21
        yield ($context["text_password"] ?? null);
        yield "</p>
        </div>

        <form id=\"form-password\" action=\"";
        // line 24
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"bareq-form-section\">
            <h2 class=\"bareq-form-title mb-3\">";
        // line 26
        yield ($context["text_password"] ?? null);
        yield "</h2>

            <div class=\"row mb-3\">
              <label for=\"input-password\" class=\"col-sm-3 col-form-label\">";
        // line 29
        yield ($context["entry_password"] ?? null);
        yield "</label>
              <div class=\"col-sm-9\">
                <input type=\"password\"
                       name=\"password\"
                       value=\"";
        // line 33
        yield ($context["password"] ?? null);
        yield "\"
                       placeholder=\"";
        // line 34
        yield ($context["entry_password"] ?? null);
        yield "\"
                       id=\"input-password\"
                       class=\"form-control\"
                       required
                       autocomplete=\"new-password\"/>
                <div id=\"error-password\" class=\"invalid-feedback\"></div>
              </div>
            </div>

            <div class=\"row mb-3\">
              <label for=\"input-confirm\" class=\"col-sm-3 col-form-label\">";
        // line 44
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
              <div class=\"col-sm-9\">
                <input type=\"password\"
                       name=\"confirm\"
                       value=\"";
        // line 48
        yield ($context["confirm"] ?? null);
        yield "\"
                       placeholder=\"";
        // line 49
        yield ($context["entry_confirm"] ?? null);
        yield "\"
                       id=\"input-confirm\"
                       class=\"form-control\"
                       required/>
                <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </div>

          <div class=\"row mt-4 align-items-center\">
            <div class=\"col-sm-6 mb-2 mb-sm-0\">
              <a href=\"";
        // line 60
        yield ($context["back"] ?? null);
        yield "\" class=\"bareq-btn-outline\">";
        yield ($context["button_back"] ?? null);
        yield "</a>
            </div>
            <div class=\"col-sm-6 text-sm-end text-start\">
              <button type=\"submit\" class=\"bareq-btn-main\">
                ";
        // line 64
        yield ($context["button_continue"] ?? null);
        yield "
              </button>
            </div>
          </div>
        </form>
      </div>
";
        // line 72
        yield "    </div>

    ";
        // line 74
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 77
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
        return "catalog/view/template/account/password.twig";
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
        return array (  183 => 77,  177 => 74,  173 => 72,  164 => 64,  155 => 60,  141 => 49,  137 => 48,  130 => 44,  117 => 34,  113 => 33,  106 => 29,  100 => 26,  95 => 24,  89 => 21,  85 => 20,  77 => 15,  71 => 12,  66 => 9,  55 => 6,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-password\" class=\"container\">
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

      <div class=\"bareq-login-wrapper bareq-password-wrapper\">
        <!-- رأس الصفحة -->
        <div class=\"bareq-edit-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">{{ heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">{{ text_password }}</p>
        </div>

        <form id=\"form-password\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"bareq-form-section\">
            <h2 class=\"bareq-form-title mb-3\">{{ text_password }}</h2>

            <div class=\"row mb-3\">
              <label for=\"input-password\" class=\"col-sm-3 col-form-label\">{{ entry_password }}</label>
              <div class=\"col-sm-9\">
                <input type=\"password\"
                       name=\"password\"
                       value=\"{{ password }}\"
                       placeholder=\"{{ entry_password }}\"
                       id=\"input-password\"
                       class=\"form-control\"
                       required
                       autocomplete=\"new-password\"/>
                <div id=\"error-password\" class=\"invalid-feedback\"></div>
              </div>
            </div>

            <div class=\"row mb-3\">
              <label for=\"input-confirm\" class=\"col-sm-3 col-form-label\">{{ entry_confirm }}</label>
              <div class=\"col-sm-9\">
                <input type=\"password\"
                       name=\"confirm\"
                       value=\"{{ confirm }}\"
                       placeholder=\"{{ entry_confirm }}\"
                       id=\"input-confirm\"
                       class=\"form-control\"
                       required/>
                <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </div>

          <div class=\"row mt-4 align-items-center\">
            <div class=\"col-sm-6 mb-2 mb-sm-0\">
              <a href=\"{{ back }}\" class=\"bareq-btn-outline\">{{ button_back }}</a>
            </div>
            <div class=\"col-sm-6 text-sm-end text-start\">
              <button type=\"submit\" class=\"bareq-btn-main\">
                {{ button_continue }}
              </button>
            </div>
          </div>
        </form>
      </div>
{# 
      {{ content_bottom }} #}
    </div>

    {{ column_right }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/password.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\password.twig");
    }
}
