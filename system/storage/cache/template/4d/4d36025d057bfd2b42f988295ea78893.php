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

/* catalog/view/template/account/wishlist.twig */
class __TwigTemplate_99d3a4fe185f0a71ff8ff606c815f306 extends Template
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
<div id=\"account-wishlist\" class=\"container\">
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
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">
            Keep track of your favourite products in one place.
          </p>
        </div>

        ";
        // line 28
        yield "        <div class=\"bareq-login-card bareq-login-card--main\">
          <div id=\"wishlist\">
            ";
        // line 30
        yield ($context["list"] ?? null);
        yield "
          </div>

          <div class=\"d-flex justify-content-end mt-3\">
            <a href=\"";
        // line 34
        yield ($context["continue"] ?? null);
        yield "\" class=\"bareq-btn-main\">
              ";
        // line 35
        yield ($context["button_continue"] ?? null);
        yield "
            </a>
          </div>
        </div>

      </div>

      ";
        // line 43
        yield "    </div>

    ";
        // line 46
        yield "  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#wishlist').on('click', '.btn-danger', function(e) {
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

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#wishlist').load('index.php?route=account/wishlist.list&language=";
        // line 74
        yield ($context["language"] ?? null);
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
        // line 83
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
        return "catalog/view/template/account/wishlist.twig";
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
        return array (  167 => 83,  155 => 74,  125 => 46,  121 => 43,  111 => 35,  107 => 34,  100 => 30,  96 => 28,  87 => 21,  84 => 20,  77 => 15,  71 => 12,  66 => 9,  55 => 6,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-wishlist\" class=\"container\">
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
          <h1 class=\"bareq-login-title mb-1\">{{ heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">
            Keep track of your favourite products in one place.
          </p>
        </div>

        {# كرت قائمة الأمنيات #}
        <div class=\"bareq-login-card bareq-login-card--main\">
          <div id=\"wishlist\">
            {{ list }}
          </div>

          <div class=\"d-flex justify-content-end mt-3\">
            <a href=\"{{ continue }}\" class=\"bareq-btn-main\">
              {{ button_continue }}
            </a>
          </div>
        </div>

      </div>

      {# {{ content_bottom }} #}
    </div>

    {# {{ column_right }} #}
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#wishlist').on('click', '.btn-danger', function(e) {
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

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#wishlist').load('index.php?route=account/wishlist.list&language={{ language }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "catalog/view/template/account/wishlist.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\wishlist.twig");
    }
}
