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

/* catalog/view/template/account/download.twig */
class __TwigTemplate_a967718dde6950bb8d66ecd8448ab794 extends Template
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
<div id=\"account-download\" class=\"container\">
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

      ";
        // line 16
        yield "      <div class=\"bareq-login-wrapper\">

        ";
        // line 19
        yield "        <div class=\"mb-4\">
          <h1 class=\"bareq-login-title\">";
        // line 20
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">
            Keep track of your downloadable products in one place.
          </p>
        </div>

        ";
        // line 27
        yield "        <div class=\"bareq-login-card bareq-login-card--main\">

          ";
        // line 29
        if (($context["downloads"] ?? null)) {
            // line 30
            yield "            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover mb-0\">
                <thead>
                  <tr>
                    <th class=\"text-end\"><strong>";
            // line 34
            yield ($context["column_order_id"] ?? null);
            yield "</strong></th>
                    <th><strong>";
            // line 35
            yield ($context["column_name"] ?? null);
            yield "</strong></th>
                    <th><strong>";
            // line 36
            yield ($context["column_size"] ?? null);
            yield "</strong></th>
                    <th><strong>";
            // line 37
            yield ($context["column_date_added"] ?? null);
            yield "</strong></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 43
                yield "                    <tr>
                      <td class=\"text-end\">";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "order_id", [], "any", false, false, false, 44);
                yield "</td>
                      <td>";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 45);
                yield "</td>
                      <td>";
                // line 46
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "size", [], "any", false, false, false, 46);
                yield "</td>
                      <td>";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "date_added", [], "any", false, false, false, 47);
                yield "</td>
                      <td class=\"text-end\">
                        <a href=\"";
                // line 49
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "href", [], "any", false, false, false, 49);
                yield "\"
                           data-bs-toggle=\"tooltip\"
                           title=\"";
                // line 51
                yield ($context["button_download"] ?? null);
                yield "\"
                           class=\"bareq-btn-main btn btn-sm border-0\">
                          <i class=\"fa-solid fa-cloud-arrow-down me-1\"></i>
                          ";
                // line 54
                yield ($context["button_download"] ?? null);
                yield "
                        </a>
                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['download'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                </tbody>
              </table>
            </div>

            <div class=\"row mt-3\">
              <div class=\"col-sm-6 text-start\">
                ";
            // line 65
            yield ($context["pagination"] ?? null);
            yield "
              </div>
              <div class=\"col-sm-6 text-end\">
                ";
            // line 68
            yield ($context["results"] ?? null);
            yield "
              </div>
            </div>

          ";
        } else {
            // line 73
            yield "            ";
            // line 74
            yield "            <div class=\"py-4\">
              <div class=\"row align-items-center\">
                <div class=\"col-md-8 text-md-end text-center mb-3 mb-md-0\">
                  <p class=\"mb-0 text-muted\">
                    ";
            // line 78
            yield ($context["text_no_results"] ?? null);
            yield "
                  </p>
                </div>
                <div class=\"col-md-4 text-md-start text-center mt-2 mt-md-0\">
                  <a href=\"";
            // line 82
            yield ($context["continue"] ?? null);
            yield "\" class=\"bareq-btn-main\">
                    ";
            // line 83
            yield ($context["button_continue"] ?? null);
            yield "
                  </a>
                </div>
              </div>
            </div>
          ";
        }
        // line 89
        yield "
        </div>
      </div>

      ";
        // line 94
        yield "    </div>

    ";
        // line 96
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 99
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
        return "catalog/view/template/account/download.twig";
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
        return array (  239 => 99,  233 => 96,  229 => 94,  223 => 89,  214 => 83,  210 => 82,  203 => 78,  197 => 74,  195 => 73,  187 => 68,  181 => 65,  173 => 59,  162 => 54,  156 => 51,  151 => 49,  146 => 47,  142 => 46,  138 => 45,  134 => 44,  131 => 43,  127 => 42,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  101 => 30,  99 => 29,  95 => 27,  86 => 20,  83 => 19,  79 => 16,  74 => 13,  68 => 10,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-download\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      {# الكرت العام – نفس الفيل في صفحة الـ Wishlist / Login #}
      <div class=\"bareq-login-wrapper\">

        {# رأس الصفحة #}
        <div class=\"mb-4\">
          <h1 class=\"bareq-login-title\">{{ heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">
            Keep track of your downloadable products in one place.
          </p>
        </div>

        {# الكرت الداخلي للمحتوى #}
        <div class=\"bareq-login-card bareq-login-card--main\">

          {% if downloads %}
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover mb-0\">
                <thead>
                  <tr>
                    <th class=\"text-end\"><strong>{{ column_order_id }}</strong></th>
                    <th><strong>{{ column_name }}</strong></th>
                    <th><strong>{{ column_size }}</strong></th>
                    <th><strong>{{ column_date_added }}</strong></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  {% for download in downloads %}
                    <tr>
                      <td class=\"text-end\">{{ download.order_id }}</td>
                      <td>{{ download.name }}</td>
                      <td>{{ download.size }}</td>
                      <td>{{ download.date_added }}</td>
                      <td class=\"text-end\">
                        <a href=\"{{ download.href }}\"
                           data-bs-toggle=\"tooltip\"
                           title=\"{{ button_download }}\"
                           class=\"bareq-btn-main btn btn-sm border-0\">
                          <i class=\"fa-solid fa-cloud-arrow-down me-1\"></i>
                          {{ button_download }}
                        </a>
                      </td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>

            <div class=\"row mt-3\">
              <div class=\"col-sm-6 text-start\">
                {{ pagination }}
              </div>
              <div class=\"col-sm-6 text-end\">
                {{ results }}
              </div>
            </div>

          {% else %}
            {# حالة لا توجد تنزيلات – نفس فكرة Wishlist #}
            <div class=\"py-4\">
              <div class=\"row align-items-center\">
                <div class=\"col-md-8 text-md-end text-center mb-3 mb-md-0\">
                  <p class=\"mb-0 text-muted\">
                    {{ text_no_results }}
                  </p>
                </div>
                <div class=\"col-md-4 text-md-start text-center mt-2 mt-md-0\">
                  <a href=\"{{ continue }}\" class=\"bareq-btn-main\">
                    {{ button_continue }}
                  </a>
                </div>
              </div>
            </div>
          {% endif %}

        </div>
      </div>

      {# {{ content_bottom }} #}
    </div>

    {{ column_right }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/download.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\download.twig");
    }
}
