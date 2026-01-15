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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_df1fdb573fe1b26f2bff369d8718ad0d extends Template
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
<div id=\"account-account\" class=\"container\">
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
        yield "
  <div class=\"row\">
    ";
        // line 17
        yield ($context["column_left"] ?? null);
        yield "

    <div id=\"content\" class=\"col\">
      ";
        // line 20
        yield ($context["content_top"] ?? null);
        yield "

      <div class=\"bareq-login-wrapper bareq-account-wrapper\">
        <!-- رأس الصفحة -->
        <div class=\"bareq-login-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">";
        // line 25
        yield ($context["text_my_account"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">
            Manage your personal details, orders and newsletter preferences in one place.
          </p>
        </div>

        <div class=\"row g-3 g-lg-4 bareq-account-grid\">

          <!-- كرت: حسابي -->
          <div class=\"col-md-6 col-xl-4\">
            <div class=\"bareq-login-card bareq-account-card\">
              <h2 class=\"bareq-account-section-title\">";
        // line 36
        yield ($context["text_my_account"] ?? null);
        yield "</h2>
              <ul class=\"bareq-account-list\">
                <li><a href=\"";
        // line 38
        yield ($context["edit"] ?? null);
        yield "\">";
        yield ($context["text_edit"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 39
        yield ($context["password"] ?? null);
        yield "\">";
        yield ($context["text_password"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 40
        yield ($context["payment_method"] ?? null);
        yield "\">";
        yield ($context["text_payment_method"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 41
        yield ($context["address"] ?? null);
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 42
        yield ($context["wishlist"] ?? null);
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a></li>
              </ul>
            </div>
          </div>

          <!-- كرت: طلباتي -->
          <div class=\"col-md-6 col-xl-4\">
            <div class=\"bareq-login-card bareq-account-card\">
              <h2 class=\"bareq-account-section-title\">";
        // line 50
        yield ($context["text_my_orders"] ?? null);
        yield "</h2>
              <ul class=\"bareq-account-list\">
                <li><a href=\"";
        // line 52
        yield ($context["order"] ?? null);
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 53
        yield ($context["subscription"] ?? null);
        yield "\">";
        yield ($context["text_subscription"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 54
        yield ($context["download"] ?? null);
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a></li>
                ";
        // line 55
        if (($context["reward"] ?? null)) {
            // line 56
            yield "                  <li><a href=\"";
            yield ($context["reward"] ?? null);
            yield "\">";
            yield ($context["text_reward"] ?? null);
            yield "</a></li>
                ";
        }
        // line 58
        yield "                <li><a href=\"";
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 59
        yield ($context["transaction"] ?? null);
        yield "\">";
        yield ($context["text_transaction"] ?? null);
        yield "</a></li>
              </ul>
            </div>
          </div>

          <!-- كرت: الأفلييت (لو مفعّل) -->
          ";
        // line 65
        if (($context["affiliate"] ?? null)) {
            // line 66
            yield "            <div class=\"col-md-6 col-xl-4\">
              <div class=\"bareq-login-card bareq-account-card\">
                <h2 class=\"bareq-account-section-title\">";
            // line 68
            yield ($context["text_my_affiliate"] ?? null);
            yield "</h2>
                <ul class=\"bareq-account-list\">
                  ";
            // line 70
            if ( !($context["tracking"] ?? null)) {
                // line 71
                yield "                    <li><a href=\"";
                yield ($context["affiliate"] ?? null);
                yield "\">";
                yield ($context["text_affiliate_add"] ?? null);
                yield "</a></li>
                  ";
            } else {
                // line 73
                yield "                    <li><a href=\"";
                yield ($context["affiliate"] ?? null);
                yield "\">";
                yield ($context["text_affiliate_edit"] ?? null);
                yield "</a></li>
                    <li><a href=\"";
                // line 74
                yield ($context["tracking"] ?? null);
                yield "\">";
                yield ($context["text_tracking"] ?? null);
                yield "</a></li>
                  ";
            }
            // line 76
            yield "                </ul>
              </div>
            </div>
          ";
        }
        // line 80
        yield "
          <!-- كرت: النشرة الإخبارية -->
          <div class=\"col-md-6 col-xl-4\">
            <div class=\"bareq-login-card bareq-account-card\">
              <h2 class=\"bareq-account-section-title\">";
        // line 84
        yield ($context["text_my_newsletter"] ?? null);
        yield "</h2>
              <ul class=\"bareq-account-list\">
                <li><a href=\"";
        // line 86
        yield ($context["newsletter"] ?? null);
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
";
        // line 95
        yield "    </div>

    ";
        // line 97
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 100
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
        return "catalog/view/template/account/account.twig";
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
        return array (  278 => 100,  272 => 97,  268 => 95,  256 => 86,  251 => 84,  245 => 80,  239 => 76,  232 => 74,  225 => 73,  217 => 71,  215 => 70,  210 => 68,  206 => 66,  204 => 65,  193 => 59,  186 => 58,  178 => 56,  176 => 55,  170 => 54,  164 => 53,  158 => 52,  153 => 50,  140 => 42,  134 => 41,  128 => 40,  122 => 39,  116 => 38,  111 => 36,  97 => 25,  89 => 20,  83 => 17,  79 => 15,  72 => 11,  69 => 10,  67 => 9,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-account\" class=\"container\">
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

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      <div class=\"bareq-login-wrapper bareq-account-wrapper\">
        <!-- رأس الصفحة -->
        <div class=\"bareq-login-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">{{ text_my_account }}</h1>
          <p class=\"bareq-login-subtitle\">
            Manage your personal details, orders and newsletter preferences in one place.
          </p>
        </div>

        <div class=\"row g-3 g-lg-4 bareq-account-grid\">

          <!-- كرت: حسابي -->
          <div class=\"col-md-6 col-xl-4\">
            <div class=\"bareq-login-card bareq-account-card\">
              <h2 class=\"bareq-account-section-title\">{{ text_my_account }}</h2>
              <ul class=\"bareq-account-list\">
                <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
                <li><a href=\"{{ password }}\">{{ text_password }}</a></li>
                <li><a href=\"{{ payment_method }}\">{{ text_payment_method }}</a></li>
                <li><a href=\"{{ address }}\">{{ text_address }}</a></li>
                <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
              </ul>
            </div>
          </div>

          <!-- كرت: طلباتي -->
          <div class=\"col-md-6 col-xl-4\">
            <div class=\"bareq-login-card bareq-account-card\">
              <h2 class=\"bareq-account-section-title\">{{ text_my_orders }}</h2>
              <ul class=\"bareq-account-list\">
                <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
                <li><a href=\"{{ subscription }}\">{{ text_subscription }}</a></li>
                <li><a href=\"{{ download }}\">{{ text_download }}</a></li>
                {% if reward %}
                  <li><a href=\"{{ reward }}\">{{ text_reward }}</a></li>
                {% endif %}
                <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
                <li><a href=\"{{ transaction }}\">{{ text_transaction }}</a></li>
              </ul>
            </div>
          </div>

          <!-- كرت: الأفلييت (لو مفعّل) -->
          {% if affiliate %}
            <div class=\"col-md-6 col-xl-4\">
              <div class=\"bareq-login-card bareq-account-card\">
                <h2 class=\"bareq-account-section-title\">{{ text_my_affiliate }}</h2>
                <ul class=\"bareq-account-list\">
                  {% if not tracking %}
                    <li><a href=\"{{ affiliate }}\">{{ text_affiliate_add }}</a></li>
                  {% else %}
                    <li><a href=\"{{ affiliate }}\">{{ text_affiliate_edit }}</a></li>
                    <li><a href=\"{{ tracking }}\">{{ text_tracking }}</a></li>
                  {% endif %}
                </ul>
              </div>
            </div>
          {% endif %}

          <!-- كرت: النشرة الإخبارية -->
          <div class=\"col-md-6 col-xl-4\">
            <div class=\"bareq-login-card bareq-account-card\">
              <h2 class=\"bareq-account-section-title\">{{ text_my_newsletter }}</h2>
              <ul class=\"bareq-account-list\">
                <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
{# 
      {{ content_bottom }} #}
    </div>

    {{ column_right }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/account.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\account.twig");
    }
}
