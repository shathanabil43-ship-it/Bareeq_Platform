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

/* catalog/view/template/account/address.twig */
class __TwigTemplate_64cecc61c164d3b9c06da58fd29be135 extends Template
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
<div id=\"account-address\" class=\"container\">
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

      <div class=\"bareq-login-wrapper\">

        ";
        // line 20
        yield "        <div class=\"mb-4\">
          <h1 class=\"bareq-login-title mb-1\">";
        // line 21
        yield ($context["text_address_book"] ?? null);
        yield "</h1>

          ";
        // line 23
        if (array_key_exists("text_description", $context)) {
            // line 24
            yield "            <p class=\"bareq-login-subtitle\">";
            yield ($context["text_description"] ?? null);
            yield "</p>
          ";
        } else {
            // line 26
            yield "            <p class=\"bareq-login-subtitle\">
              Manage your saved delivery and billing addresses in one place.
            </p>
          ";
        }
        // line 30
        yield "        </div>

        ";
        // line 33
        yield "        ";
        if (($context["success"] ?? null)) {
            // line 34
            yield "          <div class=\"alert alert-success alert-dismissible mb-3\">
            <i class=\"fa-solid fa-circle-check\"></i> ";
            // line 35
            yield ($context["success"] ?? null);
            yield "
          </div>
        ";
        }
        // line 38
        yield "
        ";
        // line 40
        yield "        <div class=\"bareq-login-card bareq-login-card--main\">
          <div id=\"address\" class=\"bareq-address-list\">
            ";
        // line 42
        yield ($context["list"] ?? null);
        yield "
          </div>

          <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2 mt-3\">
            <a href=\"";
        // line 46
        yield ($context["back"] ?? null);
        yield "\" class=\"banner-btn-outline\">
              ";
        // line 47
        yield ($context["button_back"] ?? null);
        yield "
            </a>

            <a href=\"";
        // line 50
        yield ($context["add"] ?? null);
        yield "\" class=\"bareq-btn-main\">
              ";
        // line 51
        yield ($context["button_new_address"] ?? null);
        yield "
            </a>
          </div>
        </div>

      </div>

      ";
        // line 59
        yield "    </div>

    ";
        // line 61
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#address').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').append('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').append('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#address').load('index.php?route=account/address.list&language=";
        // line 92
        yield ($context["language"] ?? null);
        yield "&customer_token=";
        yield ($context["customer_token"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 101
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
        return "catalog/view/template/account/address.twig";
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
        return array (  212 => 101,  198 => 92,  164 => 61,  160 => 59,  150 => 51,  146 => 50,  140 => 47,  136 => 46,  129 => 42,  125 => 40,  122 => 38,  116 => 35,  113 => 34,  110 => 33,  106 => 30,  100 => 26,  94 => 24,  92 => 23,  87 => 21,  84 => 20,  77 => 15,  71 => 12,  66 => 9,  55 => 6,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-address\" class=\"container\">
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

      <div class=\"bareq-login-wrapper\">

        {# العنوان والوصف #}
        <div class=\"mb-4\">
          <h1 class=\"bareq-login-title mb-1\">{{ text_address_book }}</h1>

          {% if text_description is defined %}
            <p class=\"bareq-login-subtitle\">{{ text_description }}</p>
          {% else %}
            <p class=\"bareq-login-subtitle\">
              Manage your saved delivery and billing addresses in one place.
            </p>
          {% endif %}
        </div>

        {# رسالة النجاح (إن وجدت) #}
        {% if success %}
          <div class=\"alert alert-success alert-dismissible mb-3\">
            <i class=\"fa-solid fa-circle-check\"></i> {{ success }}
          </div>
        {% endif %}

        {# كرت العناوين بنفس ستايل بريق #}
        <div class=\"bareq-login-card bareq-login-card--main\">
          <div id=\"address\" class=\"bareq-address-list\">
            {{ list }}
          </div>

          <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2 mt-3\">
            <a href=\"{{ back }}\" class=\"banner-btn-outline\">
              {{ button_back }}
            </a>

            <a href=\"{{ add }}\" class=\"bareq-btn-main\">
              {{ button_new_address }}
            </a>
          </div>
        </div>

      </div>

      {# {{ content_bottom }} #}
    </div>

    {{ column_right }}
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#address').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').append('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').append('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#address').load('index.php?route=account/address.list&language={{ language }}&customer_token={{ customer_token }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "catalog/view/template/account/address.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\address.twig");
    }
}
