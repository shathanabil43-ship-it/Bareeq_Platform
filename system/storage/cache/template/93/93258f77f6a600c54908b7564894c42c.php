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

/* catalog/view/template/common/content_bottom.twig */
class __TwigTemplate_e049079fa6727d78d7274c2f0f70f205 extends Template
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
        // line 110
        yield "
 <div class=\"stores-section\">
  <div id=\"product-store\" class=\"stores-container\">

    ";
        // line 115
        yield "    ";
        // line 122
        yield "
    <div class=\"row\">
      ";
        // line 124
        yield ($context["column_left"] ?? null);
        yield "

      <div id=\"content\" class=\"col\">
        ";
        // line 127
        yield ($context["content_top"] ?? null);
        yield "

        ";
        // line 130
        yield "        <h1 class=\"visually-hidden\">";
        yield ($context["heading_title"] ?? null);
        yield "</h1>

        ";
        // line 132
        if (($context["stores"] ?? null)) {
            // line 133
            yield "
          ";
            // line 135
            yield "          <div class=\"text-center mb-5\">
            <span class=\"stores-badge\">
              المتاجر
            </span>

            <h2 class=\"stores-title\">
              اكتشف متاجرنا الرقمية
            </h2>

            <p class=\"stores-subtitle\">
              مجموعة متنوعة من المتاجر الرقمية والخدمات المميزة لتجربة تسوق افتراضية متكاملة.
            </p>
          </div>

          ";
            // line 150
            yield "          <div class=\"stores-grid\">
            ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 152
                yield "              <div class=\"store-card\">

                ";
                // line 155
                yield "                <div class=\"store-card__image\">
                  ";
                // line 156
                if (CoreExtension::getAttribute($this->env, $this->source, $context["store"], "thumb", [], "any", false, false, false, 156)) {
                    // line 157
                    yield "                    <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "url", [], "any", false, false, false, 157);
                    yield "\" target=\"_blank\">
                      <img src=\"";
                    // line 158
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "thumb", [], "any", false, false, false, 158);
                    yield "\"
                           alt=\"";
                    // line 159
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 159);
                    yield "\"
                           title=\"";
                    // line 160
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 160);
                    yield "\">
                    </a>
                  ";
                }
                // line 163
                yield "
                  <button type=\"button\" class=\"store-card__favorite\">
                    <i class=\"fa-regular fa-heart\"></i>
                  </button>

                  ";
                // line 168
                if (CoreExtension::getAttribute($this->env, $this->source, $context["store"], "badge", [], "any", false, false, false, 168)) {
                    // line 169
                    yield "                    <span class=\"store-card__badge\">
                      ";
                    // line 170
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "badge", [], "any", false, false, false, 170);
                    yield "
                    </span>
                  ";
                }
                // line 173
                yield "                </div>

                ";
                // line 176
                yield "                <div class=\"store-card__body\">
                  <h3 class=\"store-card__name\">
                    ";
                // line 178
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 178);
                yield "
                  </h3>

                  ";
                // line 181
                if (CoreExtension::getAttribute($this->env, $this->source, $context["store"], "description", [], "any", false, false, false, 181)) {
                    // line 182
                    yield "                    <p class=\"store-card__desc\">
                      ";
                    // line 183
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "description", [], "any", false, false, false, 183);
                    yield "
                    </p>
                  ";
                }
                // line 186
                yield "
                  <div class=\"store-card__meta\">
                    ";
                // line 188
                if (CoreExtension::getAttribute($this->env, $this->source, $context["store"], "rating", [], "any", false, false, false, 188)) {
                    // line 189
                    yield "                      <div class=\"store-card__rating\">
                        <span>";
                    // line 190
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "rating", [], "any", false, false, false, 190);
                    yield "</span>
                        <i class=\"fa-solid fa-star\"></i>
                      </div>
                    ";
                } else {
                    // line 194
                    yield "                      <span></span>
                    ";
                }
                // line 196
                yield "
                    <a href=\"";
                // line 197
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "url", [], "any", false, false, false, 197);
                yield "\" target=\"_blank\"
                       class=\"store-card__btn\">
                      زيارة المتجر
                    </a>
                  </div>
                </div>

              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            yield "          </div>

        ";
        } else {
            // line 209
            yield "          <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
          <div class=\"text-end\">
            <a href=\"";
            // line 211
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a>
          </div>
        ";
        }
        // line 214
        yield "
        ";
        // line 215
        yield ($context["content_bottom"] ?? null);
        yield "
      </div>

      ";
        // line 218
        yield ($context["column_right"] ?? null);
        yield "
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/content_bottom.twig";
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
        return array (  236 => 218,  230 => 215,  227 => 214,  219 => 211,  213 => 209,  208 => 206,  193 => 197,  190 => 196,  186 => 194,  179 => 190,  176 => 189,  174 => 188,  170 => 186,  164 => 183,  161 => 182,  159 => 181,  153 => 178,  149 => 176,  145 => 173,  139 => 170,  136 => 169,  134 => 168,  127 => 163,  121 => 160,  117 => 159,  113 => 158,  108 => 157,  106 => 156,  103 => 155,  99 => 152,  95 => 151,  92 => 150,  76 => 135,  73 => 133,  71 => 132,  65 => 130,  60 => 127,  54 => 124,  50 => 122,  48 => 115,  42 => 110,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
{% if stores %}
   <h2 class=\"stores-heading\">المتاجر</h2>
  <div class=\"stores row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4\">
   
    {% for store in stores %}
      <div class=\"col mb-3\">
        <div class=\"store-item card h-100 text-center\">

          <a href=\"{{ store.url }}\" target=\"_blank\" class=\"text-decoration-none\">

            {% if store.thumb %}
              <img src=\"{{ store.thumb }}\" 
                   alt=\"{{ store.name }}\" 
                   class=\"card-img-top img-fluid\"/>
            {% endif %}

            <div class=\"card-body\">
              <h3 class=\"h6 card-title\">{{ store.name }}</h3>
            </div>

          </a>

        </div>
      </div>
    {% endfor %}

  </div>
{% endif %}

{# ===== قسم النشرة الإخبارية ===== #}
{#<section class=\"newsletter-section\">
  <div class=\"newsletter-container\">

    <div class=\"newsletter-icon-wrap\">
      <i class=\"fa-regular fa-envelope\"></i>
    </div>

    <h2 class=\"newsletter-title\">اشترك في النشرة الإخبارية</h2>

    <p class=\"newsletter-subtitle\">
      كن أول من يعرف عن المنتجات الجديدة والعروض الحصرية في عالمنا الافتراضي.
    </p>

    <form action=\"{{ newsletter_action|default('#') }}\" method=\"post\" class=\"newsletter-form\">
      <div class=\"newsletter-input-wrap\">
        <input type=\"email\"
               name=\"email\"
               class=\"newsletter-input\"
               placeholder=\"أدخل بريدك الإلكتروني\"
               required>
      </div>

      <button type=\"submit\" class=\"newsletter-btn\">
        <i class=\"fa-regular fa-paper-plane\"></i>
        <span>اشترك الآن</span>
      </button>
    </form>

    <p class=\"newsletter-note\">
      لن نشارك بريدك الإلكتروني مع أي جهة خارجية.
    </p>

  </div>
</section>

<script>
//   document.addEventListener('DOMContentLoaded', function () {
//     // نحدد هل الصفحة هي الهوم ولا لا
//     var isHome =
//       window.location.pathname === '/' ||                       // أغلب المواقع
//       window.location.search.indexOf('route=common/home') !== -1; // نمط أوبن كارت

//     // لو مش هوم نحذف أقسام المتاجر + النشرة
//     if (!isHome) {
//       var selectors = ['.stores-section', '.stores', '.newsletter-section'];

//       selectors.forEach(function (sel) {
//         document.querySelectorAll(sel).forEach(function (el) {
//           el.remove(); // يشيل العنصر بالكامل من الصفحة
//         });
//       });
//     }
//   });
// </script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var isHome =
      window.location.pathname === '/' ||
      window.location.search.indexOf('route=common/home') !== -1;

    if (!isHome) {
      var selectors = [
        '.stores-heading',        // العنوان \"المتاجر\"
        '.stores-section',        // لو عندك ديف يغلف المتاجر
        '.stores',                // الشبكة نفسها
        '.newsletter-section'     // النشرة الإخبارية
      ];

      selectors.forEach(function (sel) {
        document.querySelectorAll(sel).forEach(function (el) {
          el.remove();
        });
      });
    }
  });
</script>
 #}

 <div class=\"stores-section\">
  <div id=\"product-store\" class=\"stores-container\">

    {# مسار الصفحات #}
    {# <ul class=\"breadcrumb mb-4\">
      {% for breadcrumb in breadcrumbs %}
        <li class=\"breadcrumb-item\">
          <a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
        </li>
      {% endfor %}
    </ul> #}

    <div class=\"row\">
      {{ column_left }}

      <div id=\"content\" class=\"col\">
        {{ content_top }}

        {# عنوان SEO مخفي #}
        <h1 class=\"visually-hidden\">{{ heading_title }}</h1>

        {% if stores %}

          {# رأس القسم مثل التصميم #}
          <div class=\"text-center mb-5\">
            <span class=\"stores-badge\">
              المتاجر
            </span>

            <h2 class=\"stores-title\">
              اكتشف متاجرنا الرقمية
            </h2>

            <p class=\"stores-subtitle\">
              مجموعة متنوعة من المتاجر الرقمية والخدمات المميزة لتجربة تسوق افتراضية متكاملة.
            </p>
          </div>

          {# شبكة كروت المتاجر #}
          <div class=\"stores-grid\">
            {% for store in stores %}
              <div class=\"store-card\">

                {# صورة المتجر + المفضلة + البادج #}
                <div class=\"store-card__image\">
                  {% if store.thumb %}
                    <a href=\"{{ store.url }}\" target=\"_blank\">
                      <img src=\"{{ store.thumb }}\"
                           alt=\"{{ store.name }}\"
                           title=\"{{ store.name }}\">
                    </a>
                  {% endif %}

                  <button type=\"button\" class=\"store-card__favorite\">
                    <i class=\"fa-regular fa-heart\"></i>
                  </button>

                  {% if store.badge %}
                    <span class=\"store-card__badge\">
                      {{ store.badge }}
                    </span>
                  {% endif %}
                </div>

                {# محتوى الكرت #}
                <div class=\"store-card__body\">
                  <h3 class=\"store-card__name\">
                    {{ store.name }}
                  </h3>

                  {% if store.description %}
                    <p class=\"store-card__desc\">
                      {{ store.description }}
                    </p>
                  {% endif %}

                  <div class=\"store-card__meta\">
                    {% if store.rating %}
                      <div class=\"store-card__rating\">
                        <span>{{ store.rating }}</span>
                        <i class=\"fa-solid fa-star\"></i>
                      </div>
                    {% else %}
                      <span></span>
                    {% endif %}

                    <a href=\"{{ store.url }}\" target=\"_blank\"
                       class=\"store-card__btn\">
                      زيارة المتجر
                    </a>
                  </div>
                </div>

              </div>
            {% endfor %}
          </div>

        {% else %}
          <p>{{ text_no_results }}</p>
          <div class=\"text-end\">
            <a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a>
          </div>
        {% endif %}

        {{ content_bottom }}
      </div>

      {{ column_right }}
    </div>
  </div>
</div>
", "catalog/view/template/common/content_bottom.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\common\\content_bottom.twig");
    }
}
