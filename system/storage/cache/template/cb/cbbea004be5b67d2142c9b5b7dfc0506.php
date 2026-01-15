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

/* catalog/view/template/account/login.twig */
class __TwigTemplate_142a70ecd4de11d38302b0fb96b39e2f extends Template
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
<div id=\"account-login\" class=\"container\">
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

  ";
        // line 9
        if (($context["success"] ?? null)) {
            // line 10
            yield "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa-solid fa-circle-check\"></i> ";
            // line 11
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  ";
        }
        // line 15
        yield "  ";
        if (($context["error_warning"] ?? null)) {
            // line 16
            yield "    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa-solid fa-circle-exclamation\"></i> ";
            // line 17
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  ";
        }
        // line 21
        yield "
  <div class=\"row\">
    ";
        // line 23
        yield ($context["column_left"] ?? null);
        yield "

    <div id=\"content\" class=\"col\">
      ";
        // line 26
        yield ($context["content_top"] ?? null);
        yield "

      <div class=\"bareq-login-wrapper\">
        <!-- رأس الصفحة -->
        <div class=\"bareq-login-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">";
        // line 31
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">
            ";
        // line 33
        yield ($context["text_i_am_returning_customer"] ?? null);
        yield "
          </p>
        </div>

        <div class=\"row g-4 align-items-stretch\">
          <!-- كرت العميل الجديد -->
          <div class=\"col-lg-5 order-lg-2 mb-3\">
            <div class=\"bareq-login-card bareq-login-card--side h-100 d-flex flex-column\">
              <h2 class=\"card-title\">";
        // line 41
        yield ($context["text_new_customer"] ?? null);
        yield "</h2>
              <p class=\"card-highlight\">";
        // line 42
        yield ($context["text_register"] ?? null);
        yield "</p>
              <p class=\"card-text\">";
        // line 43
        yield ($context["text_register_account"] ?? null);
        yield "</p>

              <div class=\"mt-auto text-start\">
                <a href=\"";
        // line 46
        yield ($context["register"] ?? null);
        yield "\" class=\"bareq-btn-main w-100 w-md-auto\">
                  ";
        // line 47
        yield ($context["button_continue"] ?? null);
        yield "
                </a>
              </div>
            </div>
          </div>

          <!-- كرت تسجيل الدخول -->
          <div class=\"col-lg-7 order-lg-1 mb-3\">
            <div class=\"bareq-login-card bareq-login-card--main h-100 d-flex flex-column\">
              <form id=\"form-login\" action=\"";
        // line 56
        yield ($context["login"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\" class=\"d-flex flex-column h-100\">
                <h2 class=\"card-title mb-1\">";
        // line 57
        yield ($context["text_returning_customer"] ?? null);
        yield "</h2>
                <p class=\"card-highlight mb-3\">";
        // line 58
        yield ($context["text_i_am_returning_customer"] ?? null);
        yield "</p>

                <div class=\"mb-3\">
                  <label for=\"input-email\" class=\"col-form-label\">";
        // line 61
        yield ($context["entry_email"] ?? null);
        yield "</label>
                  <input type=\"email\" name=\"email\" value=\"";
        // line 62
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                </div>

                <div class=\"mb-3\">
                  <label for=\"input-password\" class=\"col-form-label\">";
        // line 66
        yield ($context["entry_password"] ?? null);
        yield "</label>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 67
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control mb-1\"/>
                  <a href=\"";
        // line 68
        yield ($context["forgotten"] ?? null);
        yield "\" class=\"bareq-link-small\">";
        yield ($context["text_forgotten"] ?? null);
        yield "</a>
                </div>

                ";
        // line 71
        if (($context["redirect"] ?? null)) {
            // line 72
            yield "                  <input type=\"hidden\" name=\"redirect\" value=\"";
            yield ($context["redirect"] ?? null);
            yield "\"/>
                ";
        }
        // line 74
        yield "
                <div class=\"mt-auto text-start\">
                  <button type=\"submit\" class=\"bareq-btn-main\">
                    ";
        // line 77
        yield ($context["button_login"] ?? null);
        yield "
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 87
        yield "    </div>

    ";
        // line 89
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 92
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
        return "catalog/view/template/account/login.twig";
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
        return array (  236 => 92,  230 => 89,  226 => 87,  214 => 77,  209 => 74,  203 => 72,  201 => 71,  193 => 68,  187 => 67,  183 => 66,  174 => 62,  170 => 61,  164 => 58,  160 => 57,  156 => 56,  144 => 47,  140 => 46,  134 => 43,  130 => 42,  126 => 41,  115 => 33,  110 => 31,  102 => 26,  96 => 23,  92 => 21,  85 => 17,  82 => 16,  79 => 15,  72 => 11,  69 => 10,  67 => 9,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>

  {% if success %}
    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa-solid fa-circle-check\"></i> {{ success }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  {% endif %}
  {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  {% endif %}

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      <div class=\"bareq-login-wrapper\">
        <!-- رأس الصفحة -->
        <div class=\"bareq-login-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">{{ heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">
            {{ text_i_am_returning_customer }}
          </p>
        </div>

        <div class=\"row g-4 align-items-stretch\">
          <!-- كرت العميل الجديد -->
          <div class=\"col-lg-5 order-lg-2 mb-3\">
            <div class=\"bareq-login-card bareq-login-card--side h-100 d-flex flex-column\">
              <h2 class=\"card-title\">{{ text_new_customer }}</h2>
              <p class=\"card-highlight\">{{ text_register }}</p>
              <p class=\"card-text\">{{ text_register_account }}</p>

              <div class=\"mt-auto text-start\">
                <a href=\"{{ register }}\" class=\"bareq-btn-main w-100 w-md-auto\">
                  {{ button_continue }}
                </a>
              </div>
            </div>
          </div>

          <!-- كرت تسجيل الدخول -->
          <div class=\"col-lg-7 order-lg-1 mb-3\">
            <div class=\"bareq-login-card bareq-login-card--main h-100 d-flex flex-column\">
              <form id=\"form-login\" action=\"{{ login }}\" method=\"post\" data-oc-toggle=\"ajax\" class=\"d-flex flex-column h-100\">
                <h2 class=\"card-title mb-1\">{{ text_returning_customer }}</h2>
                <p class=\"card-highlight mb-3\">{{ text_i_am_returning_customer }}</p>

                <div class=\"mb-3\">
                  <label for=\"input-email\" class=\"col-form-label\">{{ entry_email }}</label>
                  <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                </div>

                <div class=\"mb-3\">
                  <label for=\"input-password\" class=\"col-form-label\">{{ entry_password }}</label>
                  <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control mb-1\"/>
                  <a href=\"{{ forgotten }}\" class=\"bareq-link-small\">{{ text_forgotten }}</a>
                </div>

                {% if redirect %}
                  <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\"/>
                {% endif %}

                <div class=\"mt-auto text-start\">
                  <button type=\"submit\" class=\"bareq-btn-main\">
                    {{ button_login }}
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      {# {{ content_bottom }} #}
    </div>

    {{ column_right }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/login.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\login.twig");
    }
}
