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

/* admin/view/template/common/dashboard.twig */
class __TwigTemplate_672e323557fff99159bc19fc1b24b31d extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
  <div class=\"container-fluid d-flex align-items-center flex-wrap\">
    ";
        // line 5
        if (($context["developer_status"] ?? null)) {
            // line 6
            yield "  <div class=\"";
            if ((($context["direction"] ?? null) == "rtl")) {
                yield "float-start";
            } else {
                yield "float-end";
            }
            yield "\">
    <button type=\"button\" id=\"button-setting\"
            data-bs-toggle=\"tooltip\"
            title=\"";
            // line 9
            yield ($context["button_developer"] ?? null);
            yield "\"
            class=\"btn btn-info\">
      <i class=\"fa-solid fa-cog\"></i>
    </button>
  </div>
";
        }
        // line 15
        yield "


    <h1 class=\"";
        // line 18
        if ((($context["direction"] ?? null) == "rtl")) {
            yield "order-1";
        } else {
            yield "order-1";
        }
        yield "\">
      ";
        // line 19
        yield ($context["heading_title"] ?? null);
        yield "
    </h1>

    <ol class=\"breadcrumb ";
        // line 22
        if ((($context["direction"] ?? null) == "rtl")) {
            yield "order-2 w-100 mb-0";
        } else {
            yield "order-3 w-100 mb-0";
        }
        yield "\">
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 24
            yield "        <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 24);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 24);
            yield "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "    </ol>
  </div>
</div>

  <div class=\"container-fluid\">
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 32
            yield "      <div class=\"row\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard_1"]) {
                // line 34
                yield "          ";
                $context["class"] = Twig\Extension\CoreExtension::sprintf("col-lg-%s %s", CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 34), "col-md-3 col-sm-6");
                // line 35
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dashboard_2"]) {
                    // line 36
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_2"], "width", [], "any", false, false, false, 36) > 3)) {
                        // line 37
                        yield "              ";
                        $context["class"] = Twig\Extension\CoreExtension::sprintf("col-lg-%s %s", CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 37), "col-md-12 col-sm-12");
                        // line 38
                        yield "            ";
                    }
                    // line 39
                    yield "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['dashboard_2'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                yield "          <div class=\"";
                yield ($context["class"] ?? null);
                yield " mb-3\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["dashboard_1"], "output", [], "any", false, false, false, 40);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dashboard_1'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "  </div>
  ";
        // line 45
        yield ($context["security"] ?? null);
        yield "
</div>
<script type=\"text/javascript\"><!--
\$('#button-setting').on('click', function() {
    \$.ajax({
        url: 'index.php?route=common/developer&user_token=";
        // line 50
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'html',
        beforeSend: function() {
            \$('#button-setting').button('loading');
        },
        complete: function() {
            \$('#button-setting').button('reset');
        },
        success: function(html) {
            \$('#modal-developer').remove();

            \$('body').prepend(html);

            \$('#modal-developer').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 71
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/common/dashboard.twig";
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
        return array (  208 => 71,  184 => 50,  176 => 45,  173 => 44,  166 => 42,  155 => 40,  149 => 39,  146 => 38,  143 => 37,  140 => 36,  135 => 35,  132 => 34,  128 => 33,  125 => 32,  121 => 31,  114 => 26,  103 => 24,  99 => 23,  91 => 22,  85 => 19,  77 => 18,  72 => 15,  63 => 9,  52 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
  <div class=\"container-fluid d-flex align-items-center flex-wrap\">
    {% if developer_status %}
  <div class=\"{% if direction == 'rtl' %}float-start{% else %}float-end{% endif %}\">
    <button type=\"button\" id=\"button-setting\"
            data-bs-toggle=\"tooltip\"
            title=\"{{ button_developer }}\"
            class=\"btn btn-info\">
      <i class=\"fa-solid fa-cog\"></i>
    </button>
  </div>
{% endif %}



    <h1 class=\"{% if direction == 'rtl' %}order-1{% else %}order-1{% endif %}\">
      {{ heading_title }}
    </h1>

    <ol class=\"breadcrumb {% if direction == 'rtl' %}order-2 w-100 mb-0{% else %}order-3 w-100 mb-0{% endif %}\">
      {% for breadcrumb in breadcrumbs %}
        <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
      {% endfor %}
    </ol>
  </div>
</div>

  <div class=\"container-fluid\">
    {% for row in rows %}
      <div class=\"row\">
        {% for dashboard_1 in row %}
          {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-3 col-sm-6') %}
          {% for dashboard_2 in row %}
            {% if dashboard_2.width > 3 %}
              {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-12 col-sm-12') %}
            {% endif %}
          {% endfor %}
          <div class=\"{{ class }} mb-3\">{{ dashboard_1.output }}</div>
        {% endfor %}
      </div>
    {% endfor %}
  </div>
  {{ security }}
</div>
<script type=\"text/javascript\"><!--
\$('#button-setting').on('click', function() {
    \$.ajax({
        url: 'index.php?route=common/developer&user_token={{ user_token }}',
        dataType: 'html',
        beforeSend: function() {
            \$('#button-setting').button('loading');
        },
        complete: function() {
            \$('#button-setting').button('reset');
        },
        success: function(html) {
            \$('#modal-developer').remove();

            \$('body').prepend(html);

            \$('#modal-developer').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}", "admin/view/template/common/dashboard.twig", "C:\\xampp\\htdocs\\bareeq_platform\\admin\\view\\template\\common\\dashboard.twig");
    }
}
