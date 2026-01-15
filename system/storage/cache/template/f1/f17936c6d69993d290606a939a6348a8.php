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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_26f3baffc38463740621a491e0c161b3 extends Template
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
<div id=\"common-home\" class=\"container\">
\t<div class=\"row\">";
        // line 3
        yield ($context["column_left"] ?? null);
        yield "
\t\t<div id=\"content\" class=\"col\">";
        // line 4
        yield ($context["content_top"] ?? null);
        yield "

\t\t\t<div class=\"container\">
  <h2 class=\"text-center\" style=\"margin:30px 0;\">جولة المتجر 360°</h2>
  <div id=\"pano\" style=\"width:100%; max-width:1200px; height:600px; margin:0 auto; border-radius:10px; overflow:hidden;\"></div>
</div>

<link rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css\">
<script src=\"https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js\"></script>

<script>
// للتأكد أن السكربت اشتغل
console.log('📌 pannellum multi-scene script loaded');

var viewer = pannellum.viewer('pano', {
    \"default\": {
        \"firstScene\": \"scene1\",
        \"autoLoad\": true,
        \"sceneFadeDuration\": 1000
    },

    \"scenes\": {
        \"scene1\": {
            \"title\": \"مدخل المتجر\",
            \"type\": \"equirectangular\",
            \"panorama\": \"image/tour/scene1.jpg\",  // عدلي المسار حسب صورتك
            \"yaw\": 0,
            \"pitch\": 0,
            \"hotSpots\": [
                {
                    // هوت سبوت في منتصف المشهد ينقلك للمشهد الثاني
                    \"pitch\": 0,
                    \"yaw\": 0,
                    \"type\": \"scene\",
                    \"text\": \"إلى داخل المتجر\",
                    \"sceneId\": \"scene2\",
                    \"targetYaw\": 0,
                    \"targetPitch\": 0
                }
            ]
        },

        \"scene2\": {
            \"title\": \"داخل المتجر\",
            \"type\": \"equirectangular\",
            \"panorama\": \"image/tour/scene2.jpg\",  // عدلي المسار
            \"yaw\": 0,
            \"pitch\": 0,
            \"hotSpots\": [
                {
                    // هوت سبوت في منتصف المشهد يرجّعك للمدخل
                    \"pitch\": 0,
                    \"yaw\": 0,
                    \"type\": \"scene\",
                    \"text\": \"رجوع للمدخل\",
                    \"sceneId\": \"scene1\",
                    \"targetYaw\": 0,
                    \"targetPitch\": 0
                }
            ]
        }
    }
});

console.log('✅ pannellum viewer created');
</script>

\t\t\t</script>

\t\t\t";
        // line 75
        yield "\t\t\t";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
\t\t";
        // line 76
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 78
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
        return "catalog/view/template/common/home.twig";
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
        return array (  134 => 78,  129 => 76,  124 => 75,  51 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"common-home\" class=\"container\">
\t<div class=\"row\">{{ column_left }}
\t\t<div id=\"content\" class=\"col\">{{ content_top }}

\t\t\t<div class=\"container\">
  <h2 class=\"text-center\" style=\"margin:30px 0;\">جولة المتجر 360°</h2>
  <div id=\"pano\" style=\"width:100%; max-width:1200px; height:600px; margin:0 auto; border-radius:10px; overflow:hidden;\"></div>
</div>

<link rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css\">
<script src=\"https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js\"></script>

<script>
// للتأكد أن السكربت اشتغل
console.log('📌 pannellum multi-scene script loaded');

var viewer = pannellum.viewer('pano', {
    \"default\": {
        \"firstScene\": \"scene1\",
        \"autoLoad\": true,
        \"sceneFadeDuration\": 1000
    },

    \"scenes\": {
        \"scene1\": {
            \"title\": \"مدخل المتجر\",
            \"type\": \"equirectangular\",
            \"panorama\": \"image/tour/scene1.jpg\",  // عدلي المسار حسب صورتك
            \"yaw\": 0,
            \"pitch\": 0,
            \"hotSpots\": [
                {
                    // هوت سبوت في منتصف المشهد ينقلك للمشهد الثاني
                    \"pitch\": 0,
                    \"yaw\": 0,
                    \"type\": \"scene\",
                    \"text\": \"إلى داخل المتجر\",
                    \"sceneId\": \"scene2\",
                    \"targetYaw\": 0,
                    \"targetPitch\": 0
                }
            ]
        },

        \"scene2\": {
            \"title\": \"داخل المتجر\",
            \"type\": \"equirectangular\",
            \"panorama\": \"image/tour/scene2.jpg\",  // عدلي المسار
            \"yaw\": 0,
            \"pitch\": 0,
            \"hotSpots\": [
                {
                    // هوت سبوت في منتصف المشهد يرجّعك للمدخل
                    \"pitch\": 0,
                    \"yaw\": 0,
                    \"type\": \"scene\",
                    \"text\": \"رجوع للمدخل\",
                    \"sceneId\": \"scene1\",
                    \"targetYaw\": 0,
                    \"targetPitch\": 0
                }
            ]
        }
    }
});

console.log('✅ pannellum viewer created');
</script>

\t\t\t</script>

\t\t\t{# <script src=\"https://static.kuula.io/embed.js\" data-kuula=\"https://kuula.co/share/collection/7HClb?logo=1&info=1&fs=1&vr=0&zoom=1&sd=1&thumbs=1\" data-width=\"100%\" data-height=\"640px\"></script> #}
\t\t\t{{ content_bottom }}</div>
\t\t{{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/common/home.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\common\\home.twig");
    }
}
