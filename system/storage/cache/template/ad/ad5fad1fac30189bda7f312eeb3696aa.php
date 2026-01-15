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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_7c8d39e7c1c0f33109d247a71b99b99a extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">  ";
        // line 3
        yield "<head>
  <meta charset=\"UTF-8\"/>  ";
        // line 5
        yield "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">  ";
        // line 6
        yield "  <title>";
        yield ($context["title"] ?? null);
        yield "</title>  ";
        // line 7
        yield "  <base href=\"";
        yield ($context["base"] ?? null);
        yield "\"/>  ";
        // line 8
        yield "
  ";
        // line 9
        if (($context["description"] ?? null)) {
            yield "  
    <meta name=\"description\" content=\"";
            // line 10
            yield ($context["description"] ?? null);
            yield "\"/>  ";
            // line 11
            yield "  ";
        }
        // line 12
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>  ";
            // line 14
            yield "  ";
        }
        // line 15
        yield "
  <link href=\"";
        // line 16
        yield ($context["stylesheet"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>  ";
        // line 17
        yield "  <script src=\"";
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>  ";
        // line 18
        yield "  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>  ";
        // line 19
        yield "
  ";
        // line 20
        if (($context["icon"] ?? null)) {
            // line 21
            yield "    <link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">  ";
            // line 22
            yield "  ";
        }
        // line 23
        yield "
  ";
        // line 25
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 26
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 26);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 26);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 26);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
  ";
        // line 30
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            yield "    <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 31);
            yield "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
  ";
        // line 35
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 36
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 36);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 36);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
  ";
        // line 40
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 41
            yield "    ";
            yield $context["analytic"];
            yield "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "</head>

<body class=\"w-100 h-100\">  ";
        // line 46
        yield "  <div id=\"container\" class=\"d-flex flex-column min-vh-100\">  ";
        // line 47
        yield "
    <div id=\"alert\"></div>  ";
        // line 49
        yield "
        <!-- شريط علوي قديم (مخفي في هذا التصميم) -->
    <nav id=\"top\" class=\"d-none\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-4\">
            <ul class=\"list-inline\">
              <li class=\"list-inline-item me-3\">";
        // line 56
        yield ($context["currency"] ?? null);
        yield "</li>
              <li class=\"list-inline-item me-3\">";
        // line 57
        yield ($context["language"] ?? null);
        yield "</li>
            </ul>
          </div>
          <div class=\"col text-end\">
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 63
        yield ($context["contact"] ?? null);
        yield "\">
                  <i class=\"fa-solid fa-phone\"></i>
                  <span class=\"d-none d-lg-inline\">";
        // line 65
        yield ($context["telephone"] ?? null);
        yield "</span>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <div class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fa-solid fa-user\"></i>
                    <span class=\"d-none d-lg-inline\">";
        // line 72
        yield ($context["text_account"] ?? null);
        yield "</span>
                    <i class=\"fa-solid fa-caret-down\"></i>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    ";
        // line 76
        if ( !($context["logged"] ?? null)) {
            // line 77
            yield "                      <li><a href=\"";
            yield ($context["register"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_register"] ?? null);
            yield "</a></li>
                      <li><a href=\"";
            // line 78
            yield ($context["login"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_login"] ?? null);
            yield "</a></li>
                    ";
        } else {
            // line 80
            yield "                      <li><a href=\"";
            yield ($context["account"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_account"] ?? null);
            yield "</a></li>
                      <li><a href=\"";
            // line 81
            yield ($context["order"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_order"] ?? null);
            yield "</a></li>
                      <li><a href=\"";
            // line 82
            yield ($context["transaction"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_transaction"] ?? null);
            yield "</a></li>
                      <li><a href=\"";
            // line 83
            yield ($context["download"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_download"] ?? null);
            yield "</a></li>
                      <li><a href=\"";
            // line 84
            yield ($context["logout"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a></li>
                    ";
        }
        // line 86
        yield "                  </ul>
                </div>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 90
        yield ($context["wishlist"] ?? null);
        yield "\" id=\"wishlist-total\" title=\"";
        yield ($context["text_wishlist"] ?? null);
        yield "\">
                  <i class=\"fa-solid fa-heart\"></i>
                  <span class=\"d-none d-lg-inline\">";
        // line 92
        yield ($context["text_wishlist"] ?? null);
        yield "</span>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 96
        yield ($context["shopping_cart"] ?? null);
        yield "\" title=\"";
        yield ($context["text_shopping_cart"] ?? null);
        yield "\">
                  <i class=\"fa-solid fa-cart-shopping\"></i>
                  <span class=\"d-none d-lg-inline\">";
        // line 98
        yield ($context["text_shopping_cart"] ?? null);
        yield "</span>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 102
        yield ($context["checkout"] ?? null);
        yield "\" title=\"";
        yield ($context["text_checkout"] ?? null);
        yield "\">
                  <i class=\"fa-solid fa-share\"></i>
                  <span class=\"d-none d-lg-inline\">";
        // line 104
        yield ($context["text_checkout"] ?? null);
        yield "</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>


        <!-- الهيدر الرئيسي بتصميم بريق -->
    <header id=\"header-main\" class=\"border-bottom\">
      <div class=\"container\">
        <div class=\"d-flex align-items-center justify-content-between gap-4 py-3\">

          ";
        // line 120
        yield "          <div class=\"header-brand d-flex align-items-center\">
            ";
        // line 121
        if (($context["logo"] ?? null)) {
            // line 122
            yield "              <a href=\"";
            yield ($context["home"] ?? null);
            yield "\" class=\"d-flex align-items-center text-decoration-none\">
                <div class=\"header-logo-wrapper\">
                  <img src=\"";
            // line 124
            yield ($context["logo"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-fluid\"/>
                </div>
                <div class=\"ms-2 d-none d-md-flex flex-column text-end\">
                  <span class=\"header-brand-title\">";
            // line 127
            yield ($context["name"] ?? null);
            yield "</span>
                  ";
            // line 129
            yield "                  <span class=\"header-brand-subtitle\">في الواقع والخيال</span>
                </div>
              </a>
            ";
        } else {
            // line 133
            yield "              <h1 class=\"m-0\">
                <a href=\"";
            // line 134
            yield ($context["home"] ?? null);
            yield "\" class=\"text-decoration-none header-brand-title\">";
            yield ($context["name"] ?? null);
            yield "</a>
              </h1>
            ";
        }
        // line 137
        yield "          </div>

          ";
        // line 140
        yield "<nav class=\"header-nav flex-grow-1 d-none d-md-flex justify-content-center\">
  <ul class=\"header-menu list-unstyled d-flex align-items-center gap-4 m-0\">
    <li class=\"header-menu-item\">
      <a href=\"";
        // line 143
        yield ($context["home"] ?? null);
        yield "\" class=\"header-menu-link text-decoration-none\">
        ";
        // line 144
        yield ($context["text_home"] ?? null);
        yield "
      </a>
    </li>

    <li class=\"header-menu-item\">
      <a href=\"";
        // line 149
        yield ($context["home"] ?? null);
        yield "#content_bottom\" class=\"header-menu-link text-decoration-none\">
        ";
        // line 150
        yield ($context["text_products"] ?? null);
        yield "
      </a>
    </li>

    <li class=\"header-menu-item\">
      <a href=\"";
        // line 155
        yield ($context["home"] ?? null);
        yield "#features\" class=\"header-menu-link text-decoration-none\">
        ";
        // line 156
        yield ($context["text_features"] ?? null);
        yield "
      </a>
    </li>

    <li class=\"header-menu-item\">
      <a href=\"";
        // line 161
        yield ($context["home"] ?? null);
        yield "#about\" class=\"header-menu-link text-decoration-none\">
        ";
        // line 162
        yield ($context["text_about"] ?? null);
        yield "
      </a>
    </li>

    <li class=\"header-menu-item\">
      <a href=\"";
        // line 167
        yield ($context["contact"] ?? null);
        yield "\" class=\"header-menu-link text-decoration-none\">
        ";
        // line 168
        yield ($context["text_contact"] ?? null);
        yield "
      </a>
    </li>
  </ul>
</nav>


          ";
        // line 176
        yield "          <div class=\"header-actions d-flex align-items-center gap-3\">

            ";
        // line 179
        yield "            <a href=\"";
        yield ($context["shopping_cart"] ?? null);
        yield "\" class=\"header-icon position-relative\" title=\"";
        yield ($context["text_shopping_cart"] ?? null);
        yield "\">
              <i class=\"fa-solid fa-cart-shopping\"></i>
              <span class=\"header-cart-badge\">
                ";
        // line 182
        yield ((array_key_exists("cart_total", $context)) ? (Twig\Extension\CoreExtension::default(($context["cart_total"] ?? null), "")) : (""));
        yield "
              </span>
            </a>

            ";
        // line 187
        yield "            <a href=\"";
        yield ($context["wishlist"] ?? null);
        yield "\"
                  class=\"header-icon position-relative\"
                  title=\"";
        // line 189
        yield ($context["text_wishlist"] ?? null);
        yield "\">
              <i class=\"fa-regular fa-heart\"></i>

            ";
        // line 193
        yield "               ";
        if ((array_key_exists("wishlist_total", $context) && ($context["wishlist_total"] ?? null))) {
            // line 194
            yield "              <span class=\"header-cart-badge\">
                  ";
            // line 195
            yield ($context["wishlist_total"] ?? null);
            yield "
                </span>
              ";
        }
        // line 198
        yield "            </a>

            ";
        // line 201
        yield "            ";
        if (($context["logged"] ?? null)) {
            // line 202
            yield "              <a href=\"";
            yield ($context["account"] ?? null);
            yield "\" class=\"header-icon\" title=\"";
            yield ($context["text_account"] ?? null);
            yield "\">
                <i class=\"fa-regular fa-user\"></i>
              </a>
            ";
        } else {
            // line 206
            yield "              <a href=\"";
            yield ($context["login"] ?? null);
            yield "\" class=\"header-icon\" title=\"";
            yield ($context["text_login"] ?? null);
            yield "\">
                <i class=\"fa-regular fa-user\"></i>
              </a>
            ";
        }
        // line 210
        yield "
            ";
        // line 212
        yield "            <a href=\"";
        yield ((array_key_exists("search_action", $context)) ? (Twig\Extension\CoreExtension::default(($context["search_action"] ?? null), "index.php?route=product/search&language=en-gb")) : ("index.php?route=product/search&language=en-gb"));
        yield "\" class=\"header-icon\" title=\"";
        yield ((array_key_exists("text_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_search"] ?? null), "بحث")) : ("بحث"));
        yield "\">
              <i class=\"fa-solid fa-magnifying-glass\"></i>
            </a>

          </div>
        </div>
      </div>
    </header>

    ";
        // line 222
        yield "    <main class=\"flex-grow-1 mb-4\">
      ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/header.twig";
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
        return array (  546 => 222,  531 => 212,  528 => 210,  518 => 206,  508 => 202,  505 => 201,  501 => 198,  495 => 195,  492 => 194,  489 => 193,  483 => 189,  477 => 187,  470 => 182,  461 => 179,  457 => 176,  447 => 168,  443 => 167,  435 => 162,  431 => 161,  423 => 156,  419 => 155,  411 => 150,  407 => 149,  399 => 144,  395 => 143,  390 => 140,  386 => 137,  378 => 134,  375 => 133,  369 => 129,  365 => 127,  355 => 124,  349 => 122,  347 => 121,  344 => 120,  326 => 104,  319 => 102,  312 => 98,  305 => 96,  298 => 92,  291 => 90,  285 => 86,  278 => 84,  272 => 83,  266 => 82,  260 => 81,  253 => 80,  246 => 78,  239 => 77,  237 => 76,  230 => 72,  220 => 65,  215 => 63,  206 => 57,  202 => 56,  193 => 49,  190 => 47,  188 => 46,  184 => 43,  175 => 41,  170 => 40,  167 => 38,  156 => 36,  151 => 35,  148 => 33,  139 => 31,  134 => 30,  131 => 28,  118 => 26,  113 => 25,  110 => 23,  107 => 22,  103 => 21,  101 => 20,  98 => 19,  96 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  79 => 13,  76 => 12,  73 => 11,  70 => 10,  66 => 9,  63 => 8,  59 => 7,  55 => 6,  53 => 5,  50 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">  {# تحديد اتجاه النص (rtl/ltr) ولغة الصفحة مثل ar أو en #}
<head>
  <meta charset=\"UTF-8\"/>  {# ترميز النصوص ليظهر العربي والرموز بشكل صحيح #}
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">  {# لتجعل التصميم متجاوب مع شاشات الجوال #}
  <title>{{ title }}</title>  {# عنوان الصفحة في شريط المتصفح #}
  <base href=\"{{ base }}\"/>  {# لتحديد المسار الأساسي للروابط النسبية في الموقع #}

  {% if description %}  
    <meta name=\"description\" content=\"{{ description }}\"/>  {# وصف الصفحة لمحركات البحث (SEO) #}
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>  {# الكلمات المفتاحية لمحركات البحث #}
  {% endif %}

  <link href=\"{{ stylesheet }}\" type=\"text/css\" rel=\"stylesheet\"/>  {# تحميل ملف CSS الأساسي للقالب #}
  <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>  {# تحميل مكتبة jQuery #}
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>  {# تحميل سكربت عام للموقع #}

  {% if icon %}
    <link rel=\"icon\" href=\"{{ icon }}\" type=\"image/png\">  {# أيقونة الموقع (favicon) تظهر في تبويب المتصفح #}
  {% endif %}

  {# تحميل ملفات CSS إضافية #}
  {% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
  {% endfor %}

  {# تحميل ملفات JavaScript إضافية #}
  {% for script in scripts %}
    <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
  {% endfor %}

  {# روابط إضافية مثل RSS أو canonical links #}
  {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}

  {# أكواد تحليلات مثل Google Analytics #}
  {% for analytic in analytics %}
    {{ analytic }}
  {% endfor %}
</head>

<body class=\"w-100 h-100\">  {# ضبط عرض وارتفاع الصفحة بالكامل #}
  <div id=\"container\" class=\"d-flex flex-column min-vh-100\">  {# استخدام flex لجعل الصفحة تمتد بطول الشاشة #}

    <div id=\"alert\"></div>  {# مكان لعرض رسائل التنبيه (errors/success) ديناميكيًا #}

        <!-- شريط علوي قديم (مخفي في هذا التصميم) -->
    <nav id=\"top\" class=\"d-none\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-4\">
            <ul class=\"list-inline\">
              <li class=\"list-inline-item me-3\">{{ currency }}</li>
              <li class=\"list-inline-item me-3\">{{ language }}</li>
            </ul>
          </div>
          <div class=\"col text-end\">
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\">
                <a href=\"{{ contact }}\">
                  <i class=\"fa-solid fa-phone\"></i>
                  <span class=\"d-none d-lg-inline\">{{ telephone }}</span>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <div class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fa-solid fa-user\"></i>
                    <span class=\"d-none d-lg-inline\">{{ text_account }}</span>
                    <i class=\"fa-solid fa-caret-down\"></i>
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\">
                    {% if not logged %}
                      <li><a href=\"{{ register }}\" class=\"dropdown-item\">{{ text_register }}</a></li>
                      <li><a href=\"{{ login }}\" class=\"dropdown-item\">{{ text_login }}</a></li>
                    {% else %}
                      <li><a href=\"{{ account }}\" class=\"dropdown-item\">{{ text_account }}</a></li>
                      <li><a href=\"{{ order }}\" class=\"dropdown-item\">{{ text_order }}</a></li>
                      <li><a href=\"{{ transaction }}\" class=\"dropdown-item\">{{ text_transaction }}</a></li>
                      <li><a href=\"{{ download }}\" class=\"dropdown-item\">{{ text_download }}</a></li>
                      <li><a href=\"{{ logout }}\" class=\"dropdown-item\">{{ text_logout }}</a></li>
                    {% endif %}
                  </ul>
                </div>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"{{ wishlist }}\" id=\"wishlist-total\" title=\"{{ text_wishlist }}\">
                  <i class=\"fa-solid fa-heart\"></i>
                  <span class=\"d-none d-lg-inline\">{{ text_wishlist }}</span>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"{{ shopping_cart }}\" title=\"{{ text_shopping_cart }}\">
                  <i class=\"fa-solid fa-cart-shopping\"></i>
                  <span class=\"d-none d-lg-inline\">{{ text_shopping_cart }}</span>
                </a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"{{ checkout }}\" title=\"{{ text_checkout }}\">
                  <i class=\"fa-solid fa-share\"></i>
                  <span class=\"d-none d-lg-inline\">{{ text_checkout }}</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>


        <!-- الهيدر الرئيسي بتصميم بريق -->
    <header id=\"header-main\" class=\"border-bottom\">
      <div class=\"container\">
        <div class=\"d-flex align-items-center justify-content-between gap-4 py-3\">

          {# ❶ اللوجو + اسم الموقع (يمين) #}
          <div class=\"header-brand d-flex align-items-center\">
            {% if logo %}
              <a href=\"{{ home }}\" class=\"d-flex align-items-center text-decoration-none\">
                <div class=\"header-logo-wrapper\">
                  <img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-fluid\"/>
                </div>
                <div class=\"ms-2 d-none d-md-flex flex-column text-end\">
                  <span class=\"header-brand-title\">{{ name }}</span>
                  {# سطر الوصف تحت الاسم - تكتبي النص اللي تحبيه في الـ SCSS أو هنا مباشرة #}
                  <span class=\"header-brand-subtitle\">في الواقع والخيال</span>
                </div>
              </a>
            {% else %}
              <h1 class=\"m-0\">
                <a href=\"{{ home }}\" class=\"text-decoration-none header-brand-title\">{{ name }}</a>
              </h1>
            {% endif %}
          </div>

          {# ❷ القائمة الرئيسية في المنتصف (الرئيسية، المنتجات، المميزات، من نحن، اتصل بنا) #}
<nav class=\"header-nav flex-grow-1 d-none d-md-flex justify-content-center\">
  <ul class=\"header-menu list-unstyled d-flex align-items-center gap-4 m-0\">
    <li class=\"header-menu-item\">
      <a href=\"{{ home }}\" class=\"header-menu-link text-decoration-none\">
        {{ text_home }}
      </a>
    </li>

    <li class=\"header-menu-item\">
      <a href=\"{{ home }}#content_bottom\" class=\"header-menu-link text-decoration-none\">
        {{ text_products }}
      </a>
    </li>

    <li class=\"header-menu-item\">
      <a href=\"{{ home }}#features\" class=\"header-menu-link text-decoration-none\">
        {{ text_features }}
      </a>
    </li>

    <li class=\"header-menu-item\">
      <a href=\"{{ home }}#about\" class=\"header-menu-link text-decoration-none\">
        {{ text_about }}
      </a>
    </li>

    <li class=\"header-menu-item\">
      <a href=\"{{ contact }}\" class=\"header-menu-link text-decoration-none\">
        {{ text_contact }}
      </a>
    </li>
  </ul>
</nav>


          {# ❸ أيقونات الإجراءات (يسار): السلة - الحساب - البحث #}
          <div class=\"header-actions d-flex align-items-center gap-3\">

            {# أيقونة السلة مع بادج #}
            <a href=\"{{ shopping_cart }}\" class=\"header-icon position-relative\" title=\"{{ text_shopping_cart }}\">
              <i class=\"fa-solid fa-cart-shopping\"></i>
              <span class=\"header-cart-badge\">
                {{ cart_total|default('') }}
              </span>
            </a>

            {# أيقونة الأمنيات #}
            <a href=\"{{ wishlist }}\"
                  class=\"header-icon position-relative\"
                  title=\"{{ text_wishlist }}\">
              <i class=\"fa-regular fa-heart\"></i>

            {# (اختياري) عدد الأمنيات إن كان متوفر #}
               {% if wishlist_total is defined and wishlist_total %}
              <span class=\"header-cart-badge\">
                  {{ wishlist_total }}
                </span>
              {% endif %}
            </a>

            {# أيقونة الحساب: لو مسجّل يذهب للحساب، غير مسجل يذهب لتسجيل الدخول #}
            {% if logged %}
              <a href=\"{{ account }}\" class=\"header-icon\" title=\"{{ text_account }}\">
                <i class=\"fa-regular fa-user\"></i>
              </a>
            {% else %}
              <a href=\"{{ login }}\" class=\"header-icon\" title=\"{{ text_login }}\">
                <i class=\"fa-regular fa-user\"></i>
              </a>
            {% endif %}

            {# أيقونة البحث - حالياً تفتح صفحة البحث العادية، ممكن لاحقاً نخليها تفتح حقل منسدل #}
            <a href=\"{{ search_action|default('index.php?route=product/search&language=en-gb') }}\" class=\"header-icon\" title=\"{{ text_search|default('بحث') }}\">
              <i class=\"fa-solid fa-magnifying-glass\"></i>
            </a>

          </div>
        </div>
      </div>
    </header>

    {# المحتوى الرئيسي - نخلي المين كما هو لكن بدون المنيو لأننا وضعناه في الهيدر #}
    <main class=\"flex-grow-1 mb-4\">
      {# هنا يبدأ محتوى الصفحات الأخرى الذي يأتي بعد الهيدر #}
", "catalog/view/template/common/header.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\common\\header.twig");
    }
}
