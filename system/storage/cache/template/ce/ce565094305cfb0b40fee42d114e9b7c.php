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

/* admin/view/template/setting/setting.twig */
class __TwigTemplate_94f7767c395fb96b59615ad36a74cfed extends Template
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
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"";
        // line 21
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        yield ($context["tab_store"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        yield ($context["tab_local"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        yield ($context["tab_mail"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        yield ($context["tab_server"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <fieldset>
                <legend>";
        // line 34
        yield ($context["text_site"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 36
        yield ($context["entry_name"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_name\" value=\"";
        // line 38
        yield ($context["config_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" required/>
                    <div id=\"error-name\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 43
        yield ($context["entry_theme"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                      ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 47
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 47);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 47) == ($context["config_theme"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 47);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                    </select>
                    <br/>
                    <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 55
        yield ($context["entry_layout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                      ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 59
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 59);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 59) == ($context["config_layout_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 59);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 65
        yield ($context["entry_logo"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                      <img src=\"";
        // line 68
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-logo\"/>
                      <div class=\"d-grid\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 70
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 71
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">";
        // line 77
        yield ($context["entry_icon"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                      <img src=\"";
        // line 80
        yield ($context["icon"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_icon\" value=\"";
        yield ($context["config_icon"] ?? null);
        yield "\" id=\"input-icon\"/>
                      <div class=\"d-grid\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 82
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 83
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                    <div class=\"form-text\">";
        // line 86
        yield ($context["help_icon"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 91
        yield ($context["text_meta"] ?? null);
        yield "</legend>
                <ul class=\"nav nav-tabs\">
                  ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 94
            yield "                    <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 94)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 94);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 94);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 94);
            yield "</a></li>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                </ul>
                <div class=\"tab-content\">
                  ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 99
            yield "                    <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 99)) {
                yield " active";
            }
            yield "\">
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-title-";
            // line 101
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_description[";
            // line 103
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            yield "][meta_title]\" value=\"";
            yield (((($_v0 = ($context["config_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["config_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null), "meta_title", [], "any", false, false, false, 103)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            yield "\" class=\"form-control\" required/>
                          <div id=\"error-meta-title-";
            // line 104
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-description-";
            // line 108
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_description[";
            // line 110
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
            yield "\" class=\"form-control\">";
            yield (((($_v2 = ($context["config_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["config_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110)] ?? null) : null), "meta_description", [], "any", false, false, false, 110)) : (""));
            yield "</textarea>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-keyword-";
            // line 114
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_description[";
            // line 116
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
            yield "\" class=\"form-control\">";
            yield (((($_v4 = ($context["config_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["config_description"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 116)) : (""));
            yield "</textarea>
                        </div>
                      </div>
                    </div>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "                </div>
              </fieldset>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 126
        yield ($context["entry_owner"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 128
        yield ($context["config_owner"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_owner"] ?? null);
        yield "\" id=\"input-owner\" class=\"form-control\" required/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 133
        yield ($context["entry_address"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 135
        yield ($context["entry_address"] ?? null);
        yield "\" id=\"input-address\" class=\"form-control\" required>";
        yield ($context["config_address"] ?? null);
        yield "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 139
        yield ($context["entry_geocode"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 141
        yield ($context["config_geocode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_geocode"] ?? null);
        yield "\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 142
        yield ($context["help_geocode"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 146
        yield ($context["entry_email"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 148
        yield ($context["config_email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" required/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 153
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 155
        yield ($context["config_telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 160
        yield ($context["entry_image"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                    <img src=\"";
        // line 163
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        yield ($context["config_image"] ?? null);
        yield "\" id=\"input-image\"/>
                    <div class=\"d-grid\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 165
        yield ($context["button_edit"] ?? null);
        yield "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 166
        yield ($context["button_clear"] ?? null);
        yield "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 172
        yield ($context["entry_open"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 174
        yield ($context["entry_open"] ?? null);
        yield "\" id=\"input-open\" class=\"form-control\">";
        yield ($context["config_open"] ?? null);
        yield "</textarea>
                  <div class=\"form-text\">";
        // line 175
        yield ($context["help_open"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 179
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 181
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["config_comment"] ?? null);
        yield "</textarea>
                  <div class=\"form-text\">";
        // line 182
        yield ($context["help_comment"] ?? null);
        yield "</div>
                </div>
              </div>
              ";
        // line 185
        if (($context["locations"] ?? null)) {
            // line 186
            yield "                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 187
            yield ($context["entry_location"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 191
                yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 192
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 192);
                yield "\" id=\"input-location-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 192);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 192), ($context["config_location"] ?? null))) {
                    yield " checked";
                }
                yield "/> <label for=\"input-location-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 192);
                yield "\" class=\"form-check-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 192);
                yield "</label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            yield "                    </div>
                    <div class=\"form-text\">";
            // line 196
            yield ($context["help_location"] ?? null);
            yield "</div>
                  </div>
                </div>
              ";
        }
        // line 200
        yield "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 203
        yield ($context["text_region"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 205
        yield ($context["entry_country"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-country name=\"config_country_id\" value=\"";
        // line 207
        yield ($context["config_country_id"] ?? null);
        yield "\" id=\"x-country\" input-id=\"input-country\" input-class=\"form-select\" required>
                      <option value=\"0\">";
        // line 208
        yield ($context["text_select"] ?? null);
        yield "</option>
                    </x-country>
                    <div id=\"error-country\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 214
        yield ($context["entry_zone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-zone name=\"config_zone_id\" value=\"";
        // line 216
        yield ($context["config_zone_id"] ?? null);
        yield "\" target=\"x-country\" input-id=\"input-zone\" input-class=\"form-select\" required></x-zone>
                    <div id=\"error-zone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 221
        yield ($context["entry_timezone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                      ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 225
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 225);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 225) == ($context["config_timezone"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 225);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['timezone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield "                    </select>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 233
        yield ($context["text_language"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-language-catalog\" class=\"col-sm-2 col-form-label\">";
        // line 235
        yield ($context["entry_language"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_catalog\" id=\"input-language-catalog\" class=\"form-select\">
                      ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 239
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 239);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 239) == ($context["config_language_catalog"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 239);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">";
        // line 245
        yield ($context["entry_language_admin"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                      ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 249
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 249);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 249) == ($context["config_language_admin"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 249);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 256
        yield ($context["text_currency"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 258
        yield ($context["entry_currency"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                      ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 262
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 262);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 262) == ($context["config_currency"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 262);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        yield "                    </select>
                    <div class=\"form-text\">";
        // line 265
        yield ($context["help_currency"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 269
        yield ($context["entry_currency_engine"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                      ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 273
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 273);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 273) == ($context["config_currency_engine"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 273);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency_engine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 279
        yield ($context["entry_currency_auto"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_currency_auto\" value=\"1\" checked=\"";
        // line 281
        yield ($context["config_currency_auto"] ?? null);
        yield "\" input-id=\"input-currency-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 282
        yield ($context["help_currency_auto"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 287
        yield ($context["text_measurement"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 289
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                      ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 293
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 293);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 293) == ($context["config_length_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 293);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 299
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                      ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 303
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 303);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 303) == ($context["config_weight_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 303);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">
              <div class=\"accordion\" id=\"accordion-option\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">";
        // line 313
        yield ($context["text_product"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 317
        yield ($context["entry_product_description_length"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"";
        // line 319
        yield ($context["config_product_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product_description_length"] ?? null);
        yield "\" id=\"input-product-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 320
        yield ($context["help_product_description_length"] ?? null);
        yield "</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">";
        // line 325
        yield ($context["entry_pagination"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 327
        yield ($context["config_pagination"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_pagination"] ?? null);
        yield "\" id=\"input-pagination\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 328
        yield ($context["help_pagination"] ?? null);
        yield "</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 333
        yield ($context["entry_product_count"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_count\" value=\"1\" checked=\"";
        // line 335
        yield ($context["config_product_count"] ?? null);
        yield "\" input-id=\"input-product-count\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 336
        yield ($context["help_product_count"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">";
        // line 340
        yield ($context["entry_pagination_admin"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"";
        // line 342
        yield ($context["config_pagination_admin"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_pagination_admin"] ?? null);
        yield "\" id=\"input-pagination-admin\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 343
        yield ($context["help_pagination"] ?? null);
        yield "</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-autocomplete-limit\" class=\"col-sm-2 col-form-label\">";
        // line 348
        yield ($context["entry_autocomplete_limit"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_autocomplete_limit\" value=\"";
        // line 350
        yield ($context["config_autocomplete_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_autocomplete_limit"] ?? null);
        yield "\" id=\"input-autocomplete-limit\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 351
        yield ($context["help_autocomplete_limit"] ?? null);
        yield "</div>
                          <div id=\"error-autocomplete-limit\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 356
        yield ($context["entry_product_report"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_report_status\" value=\"1\" checked=\"";
        // line 358
        yield ($context["config_product_report_status"] ?? null);
        yield "\" input-id=\"input-product-report\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 359
        yield ($context["help_product_report"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">";
        // line 366
        yield ($context["text_review"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 370
        yield ($context["entry_review_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_status\" value=\"1\" checked=\"";
        // line 372
        yield ($context["config_review_status"] ?? null);
        yield "\" input-id=\"input-review-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 373
        yield ($context["help_review"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 377
        yield ($context["entry_review_purchased"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_purchased\" value=\"1\" checked=\"";
        // line 379
        yield ($context["config_review_purchased"] ?? null);
        yield "\" input-id=\"input-review-purchased\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 380
        yield ($context["help_review_purchased"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 384
        yield ($context["entry_review_guest"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_guest\" value=\"1\" checked=\"";
        // line 386
        yield ($context["config_review_guest"] ?? null);
        yield "\" input-id=\"input-review-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 387
        yield ($context["help_review_guest"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-cms\">";
        // line 394
        yield ($context["text_cms"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-cms\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-article-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 398
        yield ($context["entry_article_description_length"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_article_description_length\" value=\"";
        // line 400
        yield ($context["config_article_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_article_description_length"] ?? null);
        yield "\" id=\"input-article-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 401
        yield ($context["help_article_description_length"] ?? null);
        yield "</div>
                          <div id=\"error-article-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 406
        yield ($context["entry_comment_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_status\" value=\"1\" checked=\"";
        // line 408
        yield ($context["config_comment_status"] ?? null);
        yield "\" input-id=\"input-comment-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 409
        yield ($context["help_comment_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 413
        yield ($context["entry_comment_approve"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_approve\" value=\"1\" checked=\"";
        // line 415
        yield ($context["config_comment_approve"] ?? null);
        yield "\" input-id=\"input-comment-approve\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 416
        yield ($context["help_comment_approve"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment-interval\" class=\"col-sm-2 col-form-label\">";
        // line 420
        yield ($context["entry_comment_interval"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_comment_interval\" value=\"";
        // line 422
        yield ($context["config_comment_interval"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_comment_interval"] ?? null);
        yield "\" id=\"input-comment-interval\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 423
        yield ($context["help_comment_interval"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">";
        // line 430
        yield ($context["text_legal"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 434
        yield ($context["entry_cookie"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">";
        // line 437
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 439
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 439);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 439) == ($context["config_cookie_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 439);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 441
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 442
        yield ($context["help_cookie"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 446
        yield ($context["entry_gdpr"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">";
        // line 449
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 451
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 451);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 451) == ($context["config_gdpr_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 451);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 453
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 454
        yield ($context["help_gdpr"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 458
        yield ($context["entry_gdpr_limit"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 460
        yield ($context["config_gdpr_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_gdpr_limit"] ?? null);
        yield "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 461
        yield ($context["help_gdpr_limit"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">";
        // line 468
        yield ($context["text_tax"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 472
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_tax\" value=\"1\" checked=\"";
        // line 474
        yield ($context["config_tax"] ?? null);
        yield "\" input-id=\"input-tax\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 478
        yield ($context["entry_tax_default"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">";
        // line 481
        yield ($context["text_none"] ?? null);
        yield "</option>
                            <option value=\"shipping\"";
        // line 482
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_shipping"] ?? null);
        yield "</option>
                            <option value=\"payment\"";
        // line 483
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_payment"] ?? null);
        yield "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 485
        yield ($context["help_tax_default"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 489
        yield ($context["entry_tax_customer"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">";
        // line 492
        yield ($context["text_none"] ?? null);
        yield "</option>
                            <option value=\"shipping\"";
        // line 493
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_shipping"] ?? null);
        yield "</option>
                            <option value=\"payment\"";
        // line 494
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_payment"] ?? null);
        yield "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 496
        yield ($context["help_tax_customer"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">";
        // line 503
        yield ($context["text_account"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 507
        yield ($context["entry_customer_online"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_online\" value=\"1\" checked=\"";
        // line 509
        yield ($context["config_customer_online"] ?? null);
        yield "\" input-id=\"input-customer-online\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 510
        yield ($context["help_customer_online"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">";
        // line 514
        yield ($context["entry_customer_online_expire"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"";
        // line 517
        yield ($context["config_customer_online_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer_online_expire"] ?? null);
        yield "\" id=\"input-customer-online-expire\" class=\"form-control\"/>
                            <span class=\"input-group-text\" id=\"basic-addon2\">";
        // line 518
        yield ($context["text_hour"] ?? null);
        yield "</span>
                          </div>
                          <div class=\"form-text\">";
        // line 520
        yield ($context["help_customer_online_expire"] ?? null);
        yield "</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 525
        yield ($context["entry_customer_activity"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_activity\" value=\"1\" checked=\"";
        // line 527
        yield ($context["config_customer_activity"] ?? null);
        yield "\" input-id=\"input-customer-activity\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 528
        yield ($context["help_customer_activity"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 532
        yield ($context["entry_customer_search"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_search\" value=\"1\" checked=\"";
        // line 534
        yield ($context["config_customer_search"] ?? null);
        yield "\" input-id=\"input-customer-search\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 538
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            ";
        // line 541
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 542
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 542);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 542) == ($context["config_customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 542);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 544
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 545
        yield ($context["help_customer_group"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 549
        yield ($context["entry_customer_group_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 552
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 553
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 554
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 554);
            yield "\" id=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 554);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 554), ($context["config_customer_group_display"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 554);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 554);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 557
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 558
        yield ($context["help_customer_group_display"] ?? null);
        yield "</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 563
        yield ($context["entry_customer_price"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_price\" value=\"1\" checked=\"";
        // line 565
        yield ($context["config_customer_price"] ?? null);
        yield "\" input-id=\"input-customer-price\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 566
        yield ($context["help_customer_price"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 570
        yield ($context["entry_telephone_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_display\" value=\"1\" checked=\"";
        // line 572
        yield ($context["config_telephone_display"] ?? null);
        yield "\" input-id=\"input-telephone-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 576
        yield ($context["entry_telephone_required"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_required\" value=\"1\" checked=\"";
        // line 578
        yield ($context["config_telephone_required"] ?? null);
        yield "\" input-id=\"input-telephone-required\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 582
        yield ($context["entry_account"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">";
        // line 585
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 586
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 587
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 587);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 587) == ($context["config_account_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 587);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 589
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 590
        yield ($context["help_account"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <fieldset>
                        <legend>";
        // line 594
        yield ($context["text_security"] ?? null);
        yield "</legend>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
        // line 596
        yield ($context["entry_2fa"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <x-switch name=\"config_2fa\" value=\"1\" checked=\"";
        // line 598
        yield ($context["config_2fa"] ?? null);
        yield "\" input-id=\"input-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                            <div class=\"form-text\">";
        // line 599
        yield ($context["help_2fa"] ?? null);
        yield "</div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 603
        yield ($context["entry_login_attempts"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 605
        yield ($context["config_login_attempts"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" id=\"input-login-attempts\" class=\"form-control\"/>
                            <div class=\"form-text\">";
        // line 606
        yield ($context["help_login_attempts"] ?? null);
        yield "</div>
                            <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
        // line 611
        yield ($context["entry_password"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"overflow: auto;\">
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_uppercase\" value=\"1\" id=\"input-password-uppercase\" class=\"form-check-input\"";
        // line 615
        if (($context["config_password_uppercase"] ?? null)) {
            yield " checked";
        }
        yield "/>
                                <label for=\"input-password-uppercase\" class=\"form-check-label\">";
        // line 616
        yield ($context["text_password_uppercase"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_lowercase\" value=\"1\" id=\"input-password-lowercase\" class=\"form-check-input\"";
        // line 619
        if (($context["config_password_lowercase"] ?? null)) {
            yield " checked";
        }
        yield "/>
                                <label for=\"input-password-lowercase\" class=\"form-check-label\">";
        // line 620
        yield ($context["text_password_lowercase"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_number\" value=\"1\" id=\"input-password-number\" class=\"form-check-input\"";
        // line 623
        if (($context["config_password_number"] ?? null)) {
            yield " checked";
        }
        yield "/>
                                <label for=\"input-password-number\" class=\"form-check-label\">";
        // line 624
        yield ($context["text_password_number"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_symbol\" value=\"1\" id=\"input-password-symbol\" class=\"form-check-input\"";
        // line 627
        if (($context["config_password_symbol"] ?? null)) {
            yield " checked";
        }
        yield "/>
                                <label for=\"input-password-symbol\" class=\"form-check-label\">";
        // line 628
        yield ($context["text_password_symbol"] ?? null);
        yield "</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-password-length\" class=\"col-sm-2 col-form-label\">";
        // line 634
        yield ($context["entry_password_length"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_password_length\" value=\"";
        // line 636
        yield ($context["config_password_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password_length"] ?? null);
        yield "\" id=\"input-password-length\" class=\"form-control\"/>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">";
        // line 645
        yield ($context["text_checkout"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 649
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 651
        yield ($context["config_invoice_prefix"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 652
        yield ($context["help_invoice_prefix"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 656
        yield ($context["entry_cart_weight"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_cart_weight\" value=\"1\" checked=\"";
        // line 658
        yield ($context["config_cart_weight"] ?? null);
        yield "\" input-id=\"input-cart-weight\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 659
        yield ($context["help_cart_weight"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 663
        yield ($context["entry_checkout_guest"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_guest\" value=\"1\" checked=\"";
        // line 665
        yield ($context["config_checkout_guest"] ?? null);
        yield "\" input-id=\"input-checkout-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 666
        yield ($context["help_checkout_guest"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 670
        yield ($context["entry_checkout_payment_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_payment_address\" value=\"1\" checked=\"";
        // line 672
        yield ($context["config_checkout_payment_address"] ?? null);
        yield "\" input-id=\"input-checkout-payment-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 673
        yield ($context["help_checkout_payment_address"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 677
        yield ($context["entry_checkout_shipping_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_shipping_address\" value=\"1\" checked=\"";
        // line 679
        yield ($context["config_checkout_shipping_address"] ?? null);
        yield "\" input-id=\"input-checkout-shipping-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 680
        yield ($context["help_checkout_shipping_address"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 684
        yield ($context["entry_checkout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">";
        // line 687
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 688
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 689
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 689);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 689) == ($context["config_checkout_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 689);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 691
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 692
        yield ($context["help_checkout"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 696
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            ";
        // line 699
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 700
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 700);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 700) == ($context["config_order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 700);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 703
        yield ($context["help_order_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 707
        yield ($context["entry_processing_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 710
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 711
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
            // line 712
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 712);
            yield "\" id=\"input-processing-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 712);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 712), ($context["config_processing_status"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-processing-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 712);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 712);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 715
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 716
        yield ($context["help_processing_status"] ?? null);
        yield "</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 721
        yield ($context["entry_complete_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 724
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 725
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
            // line 726
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 726);
            yield "\" id=\"input-complete-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 726);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 726), ($context["config_complete_status"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-complete-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 726);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 726);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 729
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 730
        yield ($context["help_complete_status"] ?? null);
        yield "</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 735
        yield ($context["entry_failed_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_failed_status_id\" id=\"input-failed-status\" class=\"form-select\">
                            ";
        // line 738
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 739
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 739);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 739) == ($context["config_failed_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 739);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 741
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 742
        yield ($context["help_failed_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-void-status\" class=\"col-sm-2 col-form-label\">";
        // line 746
        yield ($context["entry_void_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_void_status_id\" id=\"input-void-status\" class=\"form-select\">
                            ";
        // line 749
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 750
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 750);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 750) == ($context["config_void_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 750);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 752
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 753
        yield ($context["help_void_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 757
        yield ($context["entry_fraud_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            ";
        // line 760
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 761
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 761);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 761) == ($context["config_fraud_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 761);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 763
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 764
        yield ($context["help_fraud_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 768
        yield ($context["entry_api"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">";
        // line 771
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 772
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 773
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 773);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 773) == ($context["config_api_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 773);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['api'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 775
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 776
        yield ($context["help_api"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">";
        // line 783
        yield ($context["text_subscription"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">";
        // line 788
        yield ($context["entry_subscription_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            ";
        // line 791
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 792
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 792);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 792) == ($context["config_subscription_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 792);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 794
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 795
        yield ($context["help_subscription"] ?? null);
        yield "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">";
        // line 800
        yield ($context["entry_subscription_active_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            ";
        // line 803
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 804
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 804);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 804) == ($context["config_subscription_active_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 804);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 806
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">";
        // line 811
        yield ($context["entry_subscription_expired_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            ";
        // line 814
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 815
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 815);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 815) == ($context["config_subscription_expired_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 815);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 817
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">";
        // line 822
        yield ($context["entry_subscription_suspended_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            ";
        // line 825
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 826
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 826);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 826) == ($context["config_subscription_suspended_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 826);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 828
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">";
        // line 833
        yield ($context["entry_subscription_canceled_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            ";
        // line 836
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 837
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 837);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 837) == ($context["config_subscription_canceled_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 837);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 839
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 844
        yield ($context["entry_subscription_failed_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            ";
        // line 847
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 848
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 848);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 848) == ($context["config_subscription_failed_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 848);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 850
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">";
        // line 855
        yield ($context["entry_subscription_denied_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            ";
        // line 858
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 859
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 859);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 859) == ($context["config_subscription_denied_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 859);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 861
        yield "                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">";
        // line 869
        yield ($context["text_stock"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 873
        yield ($context["entry_stock_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_display\" value=\"1\" checked=\"";
        // line 875
        yield ($context["config_stock_display"] ?? null);
        yield "\" input-id=\"input-stock-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 876
        yield ($context["help_stock_display"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 880
        yield ($context["entry_stock_warning"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_warning\" value=\"1\" checked=\"";
        // line 882
        yield ($context["config_stock_warning"] ?? null);
        yield "\" input-id=\"input-stock-warning\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 883
        yield ($context["help_stock_warning"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 887
        yield ($context["entry_stock_checkout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_checkout\" value=\"1\" checked=\"";
        // line 889
        yield ($context["config_stock_checkout"] ?? null);
        yield "\" input-id=\"input-stock-checkout\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 890
        yield ($context["help_stock_checkout"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 894
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                            ";
        // line 897
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 898
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 898);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 898) == ($context["config_stock_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 898);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stock_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 900
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 901
        yield ($context["help_stock_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">";
        // line 908
        yield ($context["text_affiliate"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 912
        yield ($context["entry_affiliate_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_status\" checked=\"";
        // line 914
        yield ($context["config_affiliate_status"] ?? null);
        yield "\" value=\"1\" input-id=\"input-affiliate-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 915
        yield ($context["help_affiliate_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 919
        yield ($context["entry_affiliate_group"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            ";
        // line 922
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 923
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 923);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 923) == ($context["config_affiliate_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 923);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 925
        yield "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 929
        yield ($context["entry_affiliate_approval"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_approval\" value=\"1\" checked=\"";
        // line 931
        yield ($context["config_affiliate_approval"] ?? null);
        yield "\" input-id=\"input-affiliate-approval\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 932
        yield ($context["help_affiliate_approval"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 936
        yield ($context["entry_affiliate_auto"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_auto\" value=\"1\" checked=\"";
        // line 938
        yield ($context["config_affiliate_auto"] ?? null);
        yield "\" input-id=\"input-affiliate-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 939
        yield ($context["help_affiliate_auto"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 943
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 945
        yield ($context["config_affiliate_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 946
        yield ($context["help_affiliate_commission"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">";
        // line 950
        yield ($context["entry_affiliate_expire"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"";
        // line 952
        yield ($context["config_affiliate_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_expire"] ?? null);
        yield "\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 953
        yield ($context["help_affiliate_expire"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 957
        yield ($context["entry_affiliate"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">";
        // line 960
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 961
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 962
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 962);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 962) == ($context["config_affiliate_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 962);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 964
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 965
        yield ($context["help_affiliate"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">";
        // line 972
        yield ($context["text_return"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 976
        yield ($context["entry_return_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            ";
        // line 979
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 980
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 980);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 980) == ($context["config_return_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 980);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 982
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 983
        yield ($context["help_return_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 987
        yield ($context["entry_return"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">";
        // line 990
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 991
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 992
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 992);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 992) == ($context["config_return_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 992);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 994
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 995
        yield ($context["help_return"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">";
        // line 1002
        yield ($context["text_captcha"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 1006
        yield ($context["entry_captcha"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">";
        // line 1009
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1010
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1011
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1011);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1011) == ($context["config_captcha"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1011);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1013
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1014
        yield ($context["help_captcha"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 1018
        yield ($context["entry_captcha_page"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 1021
        $context["captcha_page_row"] = 0;
        // line 1022
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1023
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
            // line 1024
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1024);
            yield "\" id=\"input-captcha-";
            yield ($context["captcha_page_row"] ?? null);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1024), ($context["config_captcha_page"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-captcha-";
            yield ($context["captcha_page_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1024);
            yield "</label>
                              </div>
                              ";
            // line 1026
            $context["captcha_page_row"] = (($context["captcha_page_row"] ?? null) + 1);
            // line 1027
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha_page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1028
        yield "                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1038
        yield ($context["text_image_size"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-image-default-width\" class=\"col-sm-2 col-form-label\">";
        // line 1040
        yield ($context["entry_image_default"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-default\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_width\" value=\"";
        // line 1044
        yield ($context["config_image_default_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-default-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_height\" value=\"";
        // line 1047
        yield ($context["config_image_default_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-default-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-default\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">";
        // line 1054
        yield ($context["entry_image_category"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"";
        // line 1058
        yield ($context["config_image_category_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-category-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"";
        // line 1061
        yield ($context["config_image_category_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-category-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-category\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">";
        // line 1068
        yield ($context["entry_image_thumb"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"";
        // line 1072
        yield ($context["config_image_thumb_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-thumb-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"";
        // line 1075
        yield ($context["config_image_thumb_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-thumb-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">";
        // line 1082
        yield ($context["entry_image_popup"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"";
        // line 1086
        yield ($context["config_image_popup_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-popup-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"";
        // line 1089
        yield ($context["config_image_popup_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-popup-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-product-width\" class=\"col-sm-2 col-form-label\">";
        // line 1096
        yield ($context["entry_image_product"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"";
        // line 1100
        yield ($context["config_image_product_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-product-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"";
        // line 1103
        yield ($context["config_image_product_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-product-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-additional-width\" class=\"col-sm-2 col-form-label\">";
        // line 1110
        yield ($context["entry_image_additional"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"";
        // line 1114
        yield ($context["config_image_additional_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-additional-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"";
        // line 1117
        yield ($context["config_image_additional_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-additional-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-additional\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-related-width\" class=\"col-sm-2 col-form-label\">";
        // line 1124
        yield ($context["entry_image_related"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"";
        // line 1128
        yield ($context["config_image_related_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-related-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"";
        // line 1131
        yield ($context["config_image_related_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-related-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-related\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-article-width\" class=\"col-sm-2 col-form-label\">";
        // line 1138
        yield ($context["entry_image_article"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-article\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_width\" value=\"";
        // line 1142
        yield ($context["config_image_article_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-article-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_height\" value=\"";
        // line 1145
        yield ($context["config_image_article_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-article-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-article\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-topic-width\" class=\"col-sm-2 col-form-label\">";
        // line 1152
        yield ($context["entry_image_topic"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-topic\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_width\" value=\"";
        // line 1156
        yield ($context["config_image_topic_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-topic-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_height\" value=\"";
        // line 1159
        yield ($context["config_image_topic_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-topic-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-topic\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-compare-width\" class=\"col-sm-2 col-form-label\">";
        // line 1166
        yield ($context["entry_image_compare"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"";
        // line 1170
        yield ($context["config_image_compare_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-compare-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"";
        // line 1173
        yield ($context["config_image_compare_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-compare-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-compare\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-wishlist-width\" class=\"col-sm-2 col-form-label\">";
        // line 1180
        yield ($context["entry_image_wishlist"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"";
        // line 1184
        yield ($context["config_image_wishlist_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-wishlist-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"";
        // line 1187
        yield ($context["config_image_wishlist_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-wishlist-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-wishlist\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-cart-width\" class=\"col-sm-2 col-form-label\">";
        // line 1194
        yield ($context["entry_image_cart"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"";
        // line 1198
        yield ($context["config_image_cart_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-cart-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"";
        // line 1201
        yield ($context["config_image_cart_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-cart-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-cart\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-location-width\" class=\"col-sm-2 col-form-label\">";
        // line 1208
        yield ($context["entry_image_location"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"";
        // line 1212
        yield ($context["config_image_location_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-location-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"";
        // line 1215
        yield ($context["config_image_location_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-location-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-location\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1225
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1227
        yield ($context["entry_mail_engine"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">";
        // line 1230
        yield ($context["text_none"] ?? null);
        yield "</option>
                      <option value=\"mail\"";
        // line 1231
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_mail"] ?? null);
        yield "</option>
                      <option value=\"smtp\"";
        // line 1232
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_smtp"] ?? null);
        yield "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1234
        yield ($context["help_mail_engine"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1238
        yield ($context["entry_mail_parameter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1240
        yield ($context["config_mail_parameter"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1241
        yield ($context["help_mail_parameter"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1246
        yield ($context["text_smtp"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1248
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1250
        yield ($context["config_mail_smtp_hostname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1251
        yield ($context["help_mail_smtp_hostname"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1255
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1257
        yield ($context["config_mail_smtp_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1261
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1263
        yield ($context["config_mail_smtp_password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1264
        yield ($context["help_mail_smtp_password"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1268
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1270
        yield ($context["config_mail_smtp_port"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1274
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1276
        yield ($context["config_mail_smtp_timeout"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1281
        yield ($context["text_mail_alert"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1283
        yield ($context["entry_mail_alert"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1286
        $context["mail_alert_row"] = 0;
        // line 1287
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1288
            yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
            // line 1289
            yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1289);
            yield "\" id=\"input-mail-alert-";
            yield ($context["mail_alert_row"] ?? null);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1289), ($context["config_mail_alert"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-mail-alert-";
            yield ($context["mail_alert_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1289);
            yield "</label>
                        </div>
                        ";
            // line 1291
            $context["mail_alert_row"] = (($context["mail_alert_row"] ?? null) + 1);
            // line 1292
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mail_alert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1293
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 1294
        yield ($context["help_mail_alert"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1298
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1300
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "\" id=\"input-mail-alert-email\" class=\"form-control\">";
        yield ($context["config_mail_alert_email"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1301
        yield ($context["help_mail_alert_email"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1308
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1310
        yield ($context["entry_maintenance"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_maintenance\" value=\"1\" checked=\"";
        // line 1312
        yield ($context["config_maintenance"] ?? null);
        yield "\" input-id=\"input-maintenance\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 1313
        yield ($context["help_maintenance"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1317
        yield ($context["entry_session_expire"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"";
        // line 1319
        yield ($context["config_session_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_session_expire"] ?? null);
        yield "\" id=\"input-session-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1320
        yield ($context["help_session_expire"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-samesite\" class=\"col-sm-2 col-form-label\">";
        // line 1324
        yield ($context["entry_session_samesite"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_session_samesite\" id=\"input-session-samesite\" class=\"form-select\">
                      <option value=\"None\"";
        // line 1327
        if ((($context["config_session_samesite"] ?? null) == "None")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_none"] ?? null);
        yield "</option>
                      <option value=\"Lax\"";
        // line 1328
        if ((($context["config_session_samesite"] ?? null) == "Lax")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_lax"] ?? null);
        yield "</option>
                      <option value=\"Strict\"";
        // line 1329
        if ((($context["config_session_samesite"] ?? null) == "Strict")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_strict"] ?? null);
        yield "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1331
        yield ($context["help_session_samesite"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1335
        yield ($context["entry_seo_url"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_seo_url\" value=\"1\" checked=\"";
        // line 1337
        yield ($context["config_seo_url"] ?? null);
        yield "\" input-id=\"input-seo-url\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 1338
        yield ($context["help_seo_url"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">";
        // line 1342
        yield ($context["entry_compression"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1344
        yield ($context["config_compression"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_compression"] ?? null);
        yield "\" id=\"input-compression\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1345
        yield ($context["help_compression"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1350
        yield ($context["text_security"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1352
        yield ($context["entry_user_2fa"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_user_2fa\" value=\"1\" checked=\"";
        // line 1354
        yield ($context["config_user_2fa"] ?? null);
        yield "\" input-id=\"input-user-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 1355
        yield ($context["help_user_2fa"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-2fa-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1359
        yield ($context["entry_2fa_expire"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"number\" name=\"config_2fa_expire\" value=\"";
        // line 1361
        yield ($context["config_2fa_expire"] ?? null);
        yield "\" id=\"input-2fa-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1362
        yield ($context["help_2fa_expire"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1366
        yield ($context["entry_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"overflow: auto;\">
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_uppercase\" value=\"1\" id=\"input-user-password-uppercase\" class=\"form-check-input\"";
        // line 1370
        if (($context["config_user_password_uppercase"] ?? null)) {
            yield " checked";
        }
        yield "/>
                        <label for=\"input-user-password-uppercase\" class=\"form-check-label\">";
        // line 1371
        yield ($context["text_password_uppercase"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_lowercase\" value=\"1\" id=\"input-user-password-lowercase\" class=\"form-check-input\"";
        // line 1374
        if (($context["config_user_password_lowercase"] ?? null)) {
            yield " checked";
        }
        yield "/>
                        <label for=\"input-user-password-lowercase\" class=\"form-check-label\">";
        // line 1375
        yield ($context["text_password_lowercase"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_number\" value=\"1\" id=\"input-user-password-number\" class=\"form-check-input\"";
        // line 1378
        if (($context["config_user_password_number"] ?? null)) {
            yield " checked";
        }
        yield "/>
                        <label for=\"input-user-password-number\" class=\"form-check-label\">";
        // line 1379
        yield ($context["text_password_number"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_symbol\" value=\"1\" id=\"input-user-password-symbol\" class=\"form-check-input\"";
        // line 1382
        if (($context["config_user_password_symbol"] ?? null)) {
            yield " checked";
        }
        yield "/>
                        <label for=\"input-user-password-symbol\" class=\"form-check-label\">";
        // line 1383
        yield ($context["text_password_symbol"] ?? null);
        yield "</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-user-password-length\" class=\"col-sm-2 col-form-label\">";
        // line 1389
        yield ($context["entry_password_length"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_user_password_length\" value=\"";
        // line 1391
        yield ($context["config_user_password_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password_length"] ?? null);
        yield "\" id=\"input-user-password-length\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1395
        yield ($context["entry_shared"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_shared\" value=\"1\" checked=\"";
        // line 1397
        yield ($context["config_shared"] ?? null);
        yield "\" input-id=\"input-shared\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 1398
        yield ($context["help_shared"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1403
        yield ($context["text_upload"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">";
        // line 1405
        yield ($context["entry_file_max_size"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1407
        yield ($context["config_file_max_size"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_file_max_size"] ?? null);
        yield "\" id=\"input-file-max-size\" class=\"form-control\" required/>
                    <div class=\"form-text\">";
        // line 1408
        yield ($context["help_file_max_size"] ?? null);
        yield "</div>
                    <div id=\"error-file-max-size\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1413
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1415
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        yield ($context["config_file_ext_allowed"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1416
        yield ($context["help_file_ext_allowed"] ?? null);
        yield "</div>
                    <div id=\"error-file-ext-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1421
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1423
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        yield ($context["config_file_mime_allowed"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1424
        yield ($context["help_file_mime_allowed"] ?? null);
        yield "</div>
                    <div id=\"error-file-mime-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1430
        yield ($context["text_error"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1432
        yield ($context["entry_error_display"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_display\" value=\"1\" checked=\"";
        // line 1434
        yield ($context["config_error_display"] ?? null);
        yield "\" input-id=\"input-error-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1438
        yield ($context["entry_error_log"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_log\" value=\"1\" checked=\"";
        // line 1440
        yield ($context["config_error_log"] ?? null);
        yield "\" input-id=\"input-error-log\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">";
        // line 1444
        yield ($context["entry_error_filename"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1446
        yield ($context["config_error_filename"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_error_filename"] ?? null);
        yield "\" id=\"input-error-filename\" class=\"form-control\" required/>
                    <div id=\"error-error-filename\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting.theme&user_token=";
        // line 1463
        yield ($context["user_token"] ?? null);
        yield "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');
//--></script>
";
        // line 1482
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
        return "admin/view/template/setting/setting.twig";
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
        return array (  3756 => 1482,  3734 => 1463,  3712 => 1446,  3707 => 1444,  3700 => 1440,  3695 => 1438,  3688 => 1434,  3683 => 1432,  3678 => 1430,  3669 => 1424,  3663 => 1423,  3658 => 1421,  3650 => 1416,  3644 => 1415,  3639 => 1413,  3631 => 1408,  3625 => 1407,  3620 => 1405,  3615 => 1403,  3607 => 1398,  3603 => 1397,  3598 => 1395,  3589 => 1391,  3584 => 1389,  3575 => 1383,  3569 => 1382,  3563 => 1379,  3557 => 1378,  3551 => 1375,  3545 => 1374,  3539 => 1371,  3533 => 1370,  3526 => 1366,  3519 => 1362,  3515 => 1361,  3510 => 1359,  3503 => 1355,  3499 => 1354,  3494 => 1352,  3489 => 1350,  3481 => 1345,  3475 => 1344,  3470 => 1342,  3463 => 1338,  3459 => 1337,  3454 => 1335,  3447 => 1331,  3438 => 1329,  3430 => 1328,  3422 => 1327,  3416 => 1324,  3409 => 1320,  3403 => 1319,  3398 => 1317,  3391 => 1313,  3387 => 1312,  3382 => 1310,  3377 => 1308,  3367 => 1301,  3361 => 1300,  3356 => 1298,  3349 => 1294,  3346 => 1293,  3340 => 1292,  3338 => 1291,  3323 => 1289,  3320 => 1288,  3315 => 1287,  3313 => 1286,  3307 => 1283,  3302 => 1281,  3292 => 1276,  3287 => 1274,  3278 => 1270,  3273 => 1268,  3266 => 1264,  3260 => 1263,  3255 => 1261,  3246 => 1257,  3241 => 1255,  3234 => 1251,  3228 => 1250,  3223 => 1248,  3218 => 1246,  3210 => 1241,  3204 => 1240,  3199 => 1238,  3192 => 1234,  3183 => 1232,  3175 => 1231,  3171 => 1230,  3165 => 1227,  3160 => 1225,  3145 => 1215,  3137 => 1212,  3130 => 1208,  3118 => 1201,  3110 => 1198,  3103 => 1194,  3091 => 1187,  3083 => 1184,  3076 => 1180,  3064 => 1173,  3056 => 1170,  3049 => 1166,  3037 => 1159,  3029 => 1156,  3022 => 1152,  3010 => 1145,  3002 => 1142,  2995 => 1138,  2983 => 1131,  2975 => 1128,  2968 => 1124,  2956 => 1117,  2948 => 1114,  2941 => 1110,  2929 => 1103,  2921 => 1100,  2914 => 1096,  2902 => 1089,  2894 => 1086,  2887 => 1082,  2875 => 1075,  2867 => 1072,  2860 => 1068,  2848 => 1061,  2840 => 1058,  2833 => 1054,  2821 => 1047,  2813 => 1044,  2806 => 1040,  2801 => 1038,  2789 => 1028,  2783 => 1027,  2781 => 1026,  2766 => 1024,  2763 => 1023,  2758 => 1022,  2756 => 1021,  2750 => 1018,  2743 => 1014,  2740 => 1013,  2725 => 1011,  2721 => 1010,  2717 => 1009,  2711 => 1006,  2704 => 1002,  2694 => 995,  2691 => 994,  2676 => 992,  2672 => 991,  2668 => 990,  2662 => 987,  2655 => 983,  2652 => 982,  2637 => 980,  2633 => 979,  2627 => 976,  2620 => 972,  2610 => 965,  2607 => 964,  2592 => 962,  2588 => 961,  2584 => 960,  2578 => 957,  2571 => 953,  2565 => 952,  2560 => 950,  2553 => 946,  2547 => 945,  2542 => 943,  2535 => 939,  2531 => 938,  2526 => 936,  2519 => 932,  2515 => 931,  2510 => 929,  2504 => 925,  2489 => 923,  2485 => 922,  2479 => 919,  2472 => 915,  2468 => 914,  2463 => 912,  2456 => 908,  2446 => 901,  2443 => 900,  2428 => 898,  2424 => 897,  2418 => 894,  2411 => 890,  2407 => 889,  2402 => 887,  2395 => 883,  2391 => 882,  2386 => 880,  2379 => 876,  2375 => 875,  2370 => 873,  2363 => 869,  2353 => 861,  2338 => 859,  2334 => 858,  2328 => 855,  2321 => 850,  2306 => 848,  2302 => 847,  2296 => 844,  2289 => 839,  2274 => 837,  2270 => 836,  2264 => 833,  2257 => 828,  2242 => 826,  2238 => 825,  2232 => 822,  2225 => 817,  2210 => 815,  2206 => 814,  2200 => 811,  2193 => 806,  2178 => 804,  2174 => 803,  2168 => 800,  2160 => 795,  2157 => 794,  2142 => 792,  2138 => 791,  2132 => 788,  2124 => 783,  2114 => 776,  2111 => 775,  2096 => 773,  2092 => 772,  2088 => 771,  2082 => 768,  2075 => 764,  2072 => 763,  2057 => 761,  2053 => 760,  2047 => 757,  2040 => 753,  2037 => 752,  2022 => 750,  2018 => 749,  2012 => 746,  2005 => 742,  2002 => 741,  1987 => 739,  1983 => 738,  1977 => 735,  1969 => 730,  1966 => 729,  1947 => 726,  1944 => 725,  1940 => 724,  1934 => 721,  1926 => 716,  1923 => 715,  1904 => 712,  1901 => 711,  1897 => 710,  1891 => 707,  1884 => 703,  1881 => 702,  1866 => 700,  1862 => 699,  1856 => 696,  1849 => 692,  1846 => 691,  1831 => 689,  1827 => 688,  1823 => 687,  1817 => 684,  1810 => 680,  1806 => 679,  1801 => 677,  1794 => 673,  1790 => 672,  1785 => 670,  1778 => 666,  1774 => 665,  1769 => 663,  1762 => 659,  1758 => 658,  1753 => 656,  1746 => 652,  1740 => 651,  1735 => 649,  1728 => 645,  1714 => 636,  1709 => 634,  1700 => 628,  1694 => 627,  1688 => 624,  1682 => 623,  1676 => 620,  1670 => 619,  1664 => 616,  1658 => 615,  1651 => 611,  1643 => 606,  1637 => 605,  1632 => 603,  1625 => 599,  1621 => 598,  1616 => 596,  1611 => 594,  1604 => 590,  1601 => 589,  1586 => 587,  1582 => 586,  1578 => 585,  1572 => 582,  1565 => 578,  1560 => 576,  1553 => 572,  1548 => 570,  1541 => 566,  1537 => 565,  1532 => 563,  1524 => 558,  1521 => 557,  1502 => 554,  1499 => 553,  1495 => 552,  1489 => 549,  1482 => 545,  1479 => 544,  1464 => 542,  1460 => 541,  1454 => 538,  1447 => 534,  1442 => 532,  1435 => 528,  1431 => 527,  1426 => 525,  1418 => 520,  1413 => 518,  1407 => 517,  1401 => 514,  1394 => 510,  1390 => 509,  1385 => 507,  1378 => 503,  1368 => 496,  1359 => 494,  1351 => 493,  1347 => 492,  1341 => 489,  1334 => 485,  1325 => 483,  1317 => 482,  1313 => 481,  1307 => 478,  1300 => 474,  1295 => 472,  1288 => 468,  1278 => 461,  1272 => 460,  1267 => 458,  1260 => 454,  1257 => 453,  1242 => 451,  1238 => 450,  1234 => 449,  1228 => 446,  1221 => 442,  1218 => 441,  1203 => 439,  1199 => 438,  1195 => 437,  1189 => 434,  1182 => 430,  1172 => 423,  1166 => 422,  1161 => 420,  1154 => 416,  1150 => 415,  1145 => 413,  1138 => 409,  1134 => 408,  1129 => 406,  1121 => 401,  1115 => 400,  1110 => 398,  1103 => 394,  1093 => 387,  1089 => 386,  1084 => 384,  1077 => 380,  1073 => 379,  1068 => 377,  1061 => 373,  1057 => 372,  1052 => 370,  1045 => 366,  1035 => 359,  1031 => 358,  1026 => 356,  1018 => 351,  1012 => 350,  1007 => 348,  999 => 343,  993 => 342,  988 => 340,  981 => 336,  977 => 335,  972 => 333,  964 => 328,  958 => 327,  953 => 325,  945 => 320,  939 => 319,  934 => 317,  927 => 313,  917 => 305,  902 => 303,  898 => 302,  892 => 299,  886 => 295,  871 => 293,  867 => 292,  861 => 289,  856 => 287,  848 => 282,  844 => 281,  839 => 279,  833 => 275,  818 => 273,  814 => 272,  808 => 269,  801 => 265,  798 => 264,  783 => 262,  779 => 261,  773 => 258,  768 => 256,  761 => 251,  746 => 249,  742 => 248,  736 => 245,  730 => 241,  715 => 239,  711 => 238,  705 => 235,  700 => 233,  692 => 227,  677 => 225,  673 => 224,  667 => 221,  659 => 216,  654 => 214,  645 => 208,  641 => 207,  636 => 205,  631 => 203,  626 => 200,  619 => 196,  616 => 195,  597 => 192,  594 => 191,  590 => 190,  584 => 187,  581 => 186,  579 => 185,  573 => 182,  567 => 181,  562 => 179,  555 => 175,  549 => 174,  544 => 172,  535 => 166,  531 => 165,  522 => 163,  516 => 160,  506 => 155,  501 => 153,  491 => 148,  486 => 146,  479 => 142,  473 => 141,  468 => 139,  459 => 135,  454 => 133,  444 => 128,  439 => 126,  432 => 121,  407 => 116,  400 => 114,  387 => 110,  380 => 108,  373 => 104,  363 => 103,  356 => 101,  346 => 99,  329 => 98,  325 => 96,  298 => 94,  281 => 93,  276 => 91,  268 => 86,  262 => 83,  258 => 82,  249 => 80,  243 => 77,  234 => 71,  230 => 70,  221 => 68,  215 => 65,  209 => 61,  194 => 59,  190 => 58,  184 => 55,  176 => 49,  161 => 47,  157 => 46,  151 => 43,  141 => 38,  136 => 36,  131 => 34,  123 => 29,  119 => 28,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  94 => 21,  89 => 19,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_store }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_local }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_option }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_image }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_mail }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_server }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <fieldset>
                <legend>{{ text_site }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_name\" value=\"{{ config_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\" required/>
                    <div id=\"error-name\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">{{ entry_theme }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                      {% for theme in themes %}
                        <option value=\"{{ theme.value }}\"{% if theme.value == config_theme %} selected{% endif %}>{{ theme.text }}</option>
                      {% endfor %}
                    </select>
                    <br/>
                    <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">{{ entry_layout }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                      {% for layout in layouts %}
                        <option value=\"{{ layout.layout_id }}\"{% if layout.layout_id == config_layout_id %} selected{% endif %}>{{ layout.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">{{ entry_logo }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                      <img src=\"{{ logo }}\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_logo\" value=\"{{ config_logo }}\" id=\"input-logo\"/>
                      <div class=\"d-grid\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">{{ entry_icon }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                      <img src=\"{{ icon }}\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_icon\" value=\"{{ config_icon }}\" id=\"input-icon\"/>
                      <div class=\"d-grid\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                    <div class=\"form-text\">{{ help_icon }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_meta }}</legend>
                <ul class=\"nav nav-tabs\">
                  {% for language in languages %}
                    <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                  {% endfor %}
                </ul>
                <div class=\"tab-content\">
                  {% for language in languages %}
                    <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-title-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_title }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_description[{{ language.language_id }}][meta_title]\" value=\"{{ config_description[language.language_id] ? config_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title-{{ language.language_id }}\" class=\"form-control\" required/>
                          <div id=\"error-meta-title-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description-{{ language.language_id }}\" class=\"form-control\">{{ config_description[language.language_id] ? config_description[language.language_id].meta_description }}</textarea>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-keyword-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword-{{ language.language_id }}\" class=\"form-control\">{{ config_description[language.language_id] ? config_description[language.language_id].meta_keyword }}</textarea>
                        </div>
                      </div>
                    </div>
                  {% endfor %}
                </div>
              </fieldset>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">{{ entry_owner }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"{{ config_owner }}\" placeholder=\"{{ entry_owner }}\" id=\"input-owner\" class=\"form-control\" required/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">{{ entry_address }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"{{ entry_address }}\" id=\"input-address\" class=\"form-control\" required>{{ config_address }}</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">{{ entry_geocode }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"{{ config_geocode }}\" placeholder=\"{{ entry_geocode }}\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_geocode }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"{{ config_email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" required/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"{{ config_telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">{{ entry_image }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                    <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_image\" value=\"{{ config_image }}\" id=\"input-image\"/>
                    <div class=\"d-grid\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">{{ entry_open }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"{{ entry_open }}\" id=\"input-open\" class=\"form-control\">{{ config_open }}</textarea>
                  <div class=\"form-text\">{{ help_open }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ config_comment }}</textarea>
                  <div class=\"form-text\">{{ help_comment }}</div>
                </div>
              </div>
              {% if locations %}
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% for location in locations %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" id=\"input-location-{{ location.location_id }}\" class=\"form-check-input\"{% if location.location_id in config_location %} checked{% endif %}/> <label for=\"input-location-{{ location.location_id }}\" class=\"form-check-label\">{{ location.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    <div class=\"form-text\">{{ help_location }}</div>
                  </div>
                </div>
              {% endif %}
            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_region }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-country\" class=\"col-sm-2 col-form-label\">{{ entry_country }}</label>
                  <div class=\"col-sm-10\">
                    <x-country name=\"config_country_id\" value=\"{{ config_country_id }}\" id=\"x-country\" input-id=\"input-country\" input-class=\"form-select\" required>
                      <option value=\"0\">{{ text_select }}</option>
                    </x-country>
                    <div id=\"error-country\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">{{ entry_zone }}</label>
                  <div class=\"col-sm-10\">
                    <x-zone name=\"config_zone_id\" value=\"{{ config_zone_id }}\" target=\"x-country\" input-id=\"input-zone\" input-class=\"form-select\" required></x-zone>
                    <div id=\"error-zone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">{{ entry_timezone }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                      {% for timezone in timezones %}
                        <option value=\"{{ timezone.value }}\"{% if timezone.value == config_timezone %} selected{% endif %}>{{ timezone.text }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>{{ text_language }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-language-catalog\" class=\"col-sm-2 col-form-label\">{{ entry_language }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_catalog\" id=\"input-language-catalog\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.code }}\"{% if language.code == config_language_catalog %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">{{ entry_language_admin }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.code }}\"{% if language.code == config_language_admin %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_currency }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">{{ entry_currency }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                      {% for currency in currencies %}
                        <option value=\"{{ currency.code }}\"{% if currency.code == config_currency %} selected{% endif %}>{{ currency.title }}</option>
                      {% endfor %}
                    </select>
                    <div class=\"form-text\">{{ help_currency }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">{{ entry_currency_engine }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                      {% for currency_engine in currency_engines %}
                        <option value=\"{{ currency_engine.value }}\"{% if currency_engine.value == config_currency_engine %} selected{% endif %}>{{ currency_engine.text }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_currency_auto }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_currency_auto\" value=\"1\" checked=\"{{ config_currency_auto }}\" input-id=\"input-currency-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_currency_auto }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_measurement }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">{{ entry_length_class }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                      {% for length_class in length_classes %}
                        <option value=\"{{ length_class.length_class_id }}\"{% if length_class.length_class_id == config_length_class_id %} selected{% endif %}>{{ length_class.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">{{ entry_weight_class }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                      {% for weight_class in weight_classes %}
                        <option value=\"{{ weight_class.weight_class_id }}\"{% if weight_class.weight_class_id == config_weight_class_id %} selected{% endif %}>{{ weight_class.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">
              <div class=\"accordion\" id=\"accordion-option\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">{{ text_product }}</button></h2>
                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">{{ entry_product_description_length }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"{{ config_product_description_length }}\" placeholder=\"{{ entry_product_description_length }}\" id=\"input-product-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_product_description_length }}</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">{{ entry_pagination }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"{{ config_pagination }}\" placeholder=\"{{ entry_pagination }}\" id=\"input-pagination\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_pagination }}</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_product_count }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_count\" value=\"1\" checked=\"{{ config_product_count }}\" input-id=\"input-product-count\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_product_count }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">{{ entry_pagination_admin }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"{{ config_pagination_admin }}\" placeholder=\"{{ entry_pagination_admin }}\" id=\"input-pagination-admin\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_pagination }}</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-autocomplete-limit\" class=\"col-sm-2 col-form-label\">{{ entry_autocomplete_limit }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_autocomplete_limit\" value=\"{{ config_autocomplete_limit }}\" placeholder=\"{{ entry_autocomplete_limit }}\" id=\"input-autocomplete-limit\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_autocomplete_limit }}</div>
                          <div id=\"error-autocomplete-limit\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_product_report }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_report_status\" value=\"1\" checked=\"{{ config_product_report_status }}\" input-id=\"input-product-report\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_product_report }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">{{ text_review }}</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_status }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_status\" value=\"1\" checked=\"{{ config_review_status }}\" input-id=\"input-review-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_review }}</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_purchased }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_purchased\" value=\"1\" checked=\"{{ config_review_purchased }}\" input-id=\"input-review-purchased\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_review_purchased }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_guest }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_guest\" value=\"1\" checked=\"{{ config_review_guest }}\" input-id=\"input-review-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_review_guest }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-cms\">{{ text_cms }}</button></h2>
                  <div id=\"collapse-cms\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-article-description-length\" class=\"col-sm-2 col-form-label\">{{ entry_article_description_length }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_article_description_length\" value=\"{{ config_article_description_length }}\" placeholder=\"{{ entry_article_description_length }}\" id=\"input-article-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_article_description_length }}</div>
                          <div id=\"error-article-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_comment_status }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_status\" value=\"1\" checked=\"{{ config_comment_status }}\" input-id=\"input-comment-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_comment_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_comment_approve }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_approve\" value=\"1\" checked=\"{{ config_comment_approve }}\" input-id=\"input-comment-approve\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_comment_approve }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment-interval\" class=\"col-sm-2 col-form-label\">{{ entry_comment_interval }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_comment_interval\" value=\"{{ config_comment_interval }}\" placeholder=\"{{ entry_comment_interval }}\" id=\"input-comment-interval\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_comment_interval }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">{{ text_legal }}</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">{{ entry_cookie }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_cookie_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_cookie }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">{{ entry_gdpr }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_gdpr_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_gdpr }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">{{ entry_gdpr_limit }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"{{ config_gdpr_limit }}\" placeholder=\"{{ entry_gdpr_limit }}\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_gdpr_limit }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">{{ text_tax }}</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_tax }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_tax\" value=\"1\" checked=\"{{ config_tax }}\" input-id=\"input-tax\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">{{ entry_tax_default }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            <option value=\"shipping\"{% if config_tax_default == 'shipping' %} selected{% endif %}>{{ text_shipping }}</option>
                            <option value=\"payment\"{% if config_tax_default == 'payment' %} selected{% endif %}>{{ text_payment }}</option>
                          </select>
                          <div class=\"form-text\">{{ help_tax_default }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">{{ entry_tax_customer }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            <option value=\"shipping\"{% if config_tax_customer == 'shipping' %} selected{% endif %}>{{ text_shipping }}</option>
                            <option value=\"payment\"{% if config_tax_customer == 'payment' %} selected{% endif %}>{{ text_payment }}</option>
                          </select>
                          <div class=\"form-text\">{{ help_tax_customer }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">{{ text_account }}</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_online }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_online\" value=\"1\" checked=\"{{ config_customer_online }}\" input-id=\"input-customer-online\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_customer_online }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">{{ entry_customer_online_expire }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"{{ config_customer_online_expire }}\" placeholder=\"{{ entry_customer_online_expire }}\" id=\"input-customer-online-expire\" class=\"form-control\"/>
                            <span class=\"input-group-text\" id=\"basic-addon2\">{{ text_hour }}</span>
                          </div>
                          <div class=\"form-text\">{{ help_customer_online_expire }}</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_activity }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_activity\" value=\"1\" checked=\"{{ config_customer_activity }}\" input-id=\"input-customer-activity\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_customer_activity }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_search }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_search\" value=\"1\" checked=\"{{ config_customer_search }}\" input-id=\"input-customer-search\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == config_customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_customer_group }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_group_display }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for customer_group in customer_groups %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" id=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-input\"{% if customer_group.customer_group_id in config_customer_group_display %} checked{% endif %}/> <label for=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-label\">{{ customer_group.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_customer_group_display }}</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_price }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_price\" value=\"1\" checked=\"{{ config_customer_price }}\" input-id=\"input-customer-price\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_customer_price }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_telephone_display }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_display\" value=\"1\" checked=\"{{ config_telephone_display }}\" input-id=\"input-telephone-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_telephone_required }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_required\" value=\"1\" checked=\"{{ config_telephone_required }}\" input-id=\"input-telephone-required\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">{{ entry_account }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_account_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_account }}</div>
                        </div>
                      </div>
                      <fieldset>
                        <legend>{{ text_security }}</legend>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">{{ entry_2fa }}</label>
                          <div class=\"col-sm-10\">
                            <x-switch name=\"config_2fa\" value=\"1\" checked=\"{{ config_2fa }}\" input-id=\"input-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                            <div class=\"form-text\">{{ help_2fa }}</div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">{{ entry_login_attempts }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_login_attempts\" value=\"{{ config_login_attempts }}\" placeholder=\"{{ entry_login_attempts }}\" id=\"input-login-attempts\" class=\"form-control\"/>
                            <div class=\"form-text\">{{ help_login_attempts }}</div>
                            <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"overflow: auto;\">
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_uppercase\" value=\"1\" id=\"input-password-uppercase\" class=\"form-check-input\"{% if config_password_uppercase %} checked{% endif %}/>
                                <label for=\"input-password-uppercase\" class=\"form-check-label\">{{ text_password_uppercase }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_lowercase\" value=\"1\" id=\"input-password-lowercase\" class=\"form-check-input\"{% if config_password_lowercase %} checked{% endif %}/>
                                <label for=\"input-password-lowercase\" class=\"form-check-label\">{{ text_password_lowercase }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_number\" value=\"1\" id=\"input-password-number\" class=\"form-check-input\"{% if config_password_number %} checked{% endif %}/>
                                <label for=\"input-password-number\" class=\"form-check-label\">{{ text_password_number }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_symbol\" value=\"1\" id=\"input-password-symbol\" class=\"form-check-input\"{% if config_password_symbol %} checked{% endif %}/>
                                <label for=\"input-password-symbol\" class=\"form-check-label\">{{ text_password_symbol }}</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-password-length\" class=\"col-sm-2 col-form-label\">{{ entry_password_length }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_password_length\" value=\"{{ config_password_length }}\" placeholder=\"{{ entry_password_length }}\" id=\"input-password-length\" class=\"form-control\"/>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">{{ text_checkout }}</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">{{ entry_invoice_prefix }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"{{ config_invoice_prefix }}\" placeholder=\"{{ entry_invoice_prefix }}\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_invoice_prefix }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_cart_weight }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_cart_weight\" value=\"1\" checked=\"{{ config_cart_weight }}\" input-id=\"input-cart-weight\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_cart_weight }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_guest }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_guest\" value=\"1\" checked=\"{{ config_checkout_guest }}\" input-id=\"input-checkout-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_checkout_guest }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_payment_address }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_payment_address\" value=\"1\" checked=\"{{ config_checkout_payment_address }}\" input-id=\"input-checkout-payment-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_checkout_payment_address }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_shipping_address }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_shipping_address\" value=\"1\" checked=\"{{ config_checkout_shipping_address }}\" input-id=\"input-checkout-shipping-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_checkout_shipping_address }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">{{ entry_checkout }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_checkout_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_checkout }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">{{ entry_order_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_order_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_processing_status }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for order_status in order_statuses %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" id=\"input-processing-status-{{ order_status.order_status_id }}\" class=\"form-check-input\"{% if order_status.order_status_id in config_processing_status %} checked{% endif %}/> <label for=\"input-processing-status-{{ order_status.order_status_id }}\" class=\"form-check-label\">{{ order_status.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_processing_status }}</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_complete_status }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for order_status in order_statuses %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" id=\"input-complete-status-{{ order_status.order_status_id }}\" class=\"form-check-input\"{% if order_status.order_status_id in config_complete_status %} checked{% endif %}/> <label for=\"input-complete-status-{{ order_status.order_status_id }}\" class=\"form-check-label\">{{ order_status.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_complete_status }}</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-failed-status\" class=\"col-sm-2 col-form-label\">{{ entry_failed_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_failed_status_id\" id=\"input-failed-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_failed_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_failed_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-void-status\" class=\"col-sm-2 col-form-label\">{{ entry_void_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_void_status_id\" id=\"input-void-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_void_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_void_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">{{ entry_fraud_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_fraud_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_fraud_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">{{ entry_api }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for api in apis %}
                              <option value=\"{{ api.api_id }}\"{% if api.api_id == config_api_id %} selected{% endif %}>{{ api.username }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_api }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">{{ text_subscription }}</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_subscription }}</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_active_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_active_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_expired_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_expired_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_suspended_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_suspended_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_canceled_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_canceled_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_failed_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_failed_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_denied_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_denied_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">{{ text_stock }}</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_display }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_display\" value=\"1\" checked=\"{{ config_stock_display }}\" input-id=\"input-stock-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_stock_display }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_warning }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_warning\" value=\"1\" checked=\"{{ config_stock_warning }}\" input-id=\"input-stock-warning\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_stock_warning }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_checkout }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_checkout\" value=\"1\" checked=\"{{ config_stock_checkout }}\" input-id=\"input-stock-checkout\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_stock_checkout }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                            {% for stock_status in stock_statuses %}
                              <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == config_stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_stock_status }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">{{ text_affiliate }}</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_status }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_status\" checked=\"{{ config_affiliate_status }}\" value=\"1\" input-id=\"input-affiliate-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_affiliate_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_group }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == config_affiliate_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_approval }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_approval\" value=\"1\" checked=\"{{ config_affiliate_approval }}\" input-id=\"input-affiliate-approval\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_affiliate_approval }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_auto }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_auto\" value=\"1\" checked=\"{{ config_affiliate_auto }}\" input-id=\"input-affiliate-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_affiliate_auto }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_commission }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"{{ config_affiliate_commission }}\" placeholder=\"{{ entry_affiliate_commission }}\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_affiliate_commission }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_expire }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"{{ config_affiliate_expire }}\" placeholder=\"{{ entry_affiliate_expire }}\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_affiliate_expire }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_affiliate_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_affiliate }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">{{ text_return }}</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">{{ entry_return_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            {% for return_status in return_statuses %}
                              <option value=\"{{ return_status.return_status_id }}\"{% if return_status.return_status_id == config_return_status_id %} selected{% endif %}>{{ return_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_return_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">{{ entry_return }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_return_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_return }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">{{ text_captcha }}</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">{{ entry_captcha }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            {% for captcha in captchas %}
                              <option value=\"{{ captcha.value }}\"{% if captcha.value == config_captcha %} selected{% endif %}>{{ captcha.text }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_captcha }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_captcha_page }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% set captcha_page_row = 0 %}
                            {% for captcha_page in captcha_pages %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" id=\"input-captcha-{{ captcha_page_row }}\" class=\"form-check-input\"{% if captcha_page.value in config_captcha_page %} checked{% endif %}/> <label for=\"input-captcha-{{ captcha_page_row }}\" class=\"form-check-label\">{{ captcha_page.text }}</label>
                              </div>
                              {% set captcha_page_row = captcha_page_row + 1 %}
                            {% endfor %}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_image_size }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-image-default-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_default }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-default\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_width\" value=\"{{ config_image_default_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-default-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_height\" value=\"{{ config_image_default_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-default-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-default\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_category }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"{{ config_image_category_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-category-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"{{ config_image_category_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-category-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-category\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_thumb }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"{{ config_image_thumb_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-thumb-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"{{ config_image_thumb_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-thumb-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_popup }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"{{ config_image_popup_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-popup-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"{{ config_image_popup_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-popup-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-product-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_product }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"{{ config_image_product_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-product-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"{{ config_image_product_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-product-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-additional-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_additional }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"{{ config_image_additional_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-additional-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"{{ config_image_additional_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-additional-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-additional\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-related-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_related }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"{{ config_image_related_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-related-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"{{ config_image_related_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-related-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-related\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-article-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_article }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-article\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_width\" value=\"{{ config_image_article_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-article-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_height\" value=\"{{ config_image_article_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-article-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-article\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-topic-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_topic }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-topic\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_width\" value=\"{{ config_image_topic_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-topic-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_height\" value=\"{{ config_image_topic_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-topic-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-topic\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-compare-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_compare }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"{{ config_image_compare_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-compare-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"{{ config_image_compare_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-compare-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-compare\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-wishlist-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_wishlist }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"{{ config_image_wishlist_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-wishlist-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"{{ config_image_wishlist_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-wishlist-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-wishlist\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-cart-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_cart }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"{{ config_image_cart_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-cart-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"{{ config_image_cart_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-cart-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-cart\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-image-location-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_location }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"{{ config_image_location_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-location-width\" class=\"form-control\" required/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"{{ config_image_location_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-location-height\" class=\"form-control\" required/>
                      </div>
                    </div>
                    <div id=\"error-image-location\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">{{ entry_mail_engine }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">{{ text_none }}</option>
                      <option value=\"mail\"{% if config_mail_engine == 'mail' %} selected{% endif %}>{{ text_mail }}</option>
                      <option value=\"smtp\"{% if config_mail_engine == 'smtp' %} selected{% endif %}>{{ text_smtp }}</option>
                    </select>
                    <div class=\"form-text\">{{ help_mail_engine }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">{{ entry_mail_parameter }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"{{ config_mail_parameter }}\" placeholder=\"{{ entry_mail_parameter }}\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_parameter }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_smtp }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_hostname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"{{ config_mail_smtp_hostname }}\" placeholder=\"{{ entry_mail_smtp_hostname }}\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_smtp_hostname }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_username }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"{{ config_mail_smtp_username }}\" placeholder=\"{{ entry_mail_smtp_username }}\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_password }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"{{ config_mail_smtp_password }}\" placeholder=\"{{ entry_mail_smtp_password }}\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_smtp_password }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_port }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"{{ config_mail_smtp_port }}\" placeholder=\"{{ entry_mail_smtp_port }}\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_timeout }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"{{ config_mail_smtp_timeout }}\" placeholder=\"{{ entry_mail_smtp_timeout }}\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_mail_alert }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_mail_alert }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% set mail_alert_row = 0 %}
                      {% for mail_alert in mail_alerts %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" id=\"input-mail-alert-{{ mail_alert_row }}\" class=\"form-check-input\"{% if mail_alert.value in config_mail_alert %} checked{% endif %}/> <label for=\"input-mail-alert-{{ mail_alert_row }}\" class=\"form-check-label\">{{ mail_alert.text }}</label>
                        </div>
                        {% set mail_alert_row = mail_alert_row + 1 %}
                      {% endfor %}
                    </div>
                    <div class=\"form-text\">{{ help_mail_alert }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">{{ entry_mail_alert_email }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"{{ entry_mail_alert_email }}\" id=\"input-mail-alert-email\" class=\"form-control\">{{ config_mail_alert_email }}</textarea>
                    <div class=\"form-text\">{{ help_mail_alert_email }}</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_maintenance }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_maintenance\" value=\"1\" checked=\"{{ config_maintenance }}\" input-id=\"input-maintenance\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_maintenance }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-expire\" class=\"col-sm-2 col-form-label\">{{ entry_session_expire }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"{{ config_session_expire }}\" placeholder=\"{{ entry_session_expire }}\" id=\"input-session-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_session_expire }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-samesite\" class=\"col-sm-2 col-form-label\">{{ entry_session_samesite }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_session_samesite\" id=\"input-session-samesite\" class=\"form-select\">
                      <option value=\"None\"{% if config_session_samesite == 'None' %} selected{% endif %}>{{ text_none }}</option>
                      <option value=\"Lax\"{% if config_session_samesite == 'Lax' %} selected{% endif %}>{{ text_lax }}</option>
                      <option value=\"Strict\"{% if config_session_samesite == 'Strict' %} selected{% endif %}>{{ text_strict }}</option>
                    </select>
                    <div class=\"form-text\">{{ help_session_samesite }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_seo_url }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_seo_url\" value=\"1\" checked=\"{{ config_seo_url }}\" input-id=\"input-seo-url\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_seo_url }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">{{ entry_compression }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"{{ config_compression }}\" placeholder=\"{{ entry_compression }}\" id=\"input-compression\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_compression }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_security }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_user_2fa }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_user_2fa\" value=\"1\" checked=\"{{ config_user_2fa }}\" input-id=\"input-user-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_user_2fa }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-2fa-expire\" class=\"col-sm-2 col-form-label\">{{ entry_2fa_expire }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"number\" name=\"config_2fa_expire\" value=\"{{ config_2fa_expire }}\" id=\"input-2fa-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_2fa_expire }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"overflow: auto;\">
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_uppercase\" value=\"1\" id=\"input-user-password-uppercase\" class=\"form-check-input\"{% if config_user_password_uppercase %} checked{% endif %}/>
                        <label for=\"input-user-password-uppercase\" class=\"form-check-label\">{{ text_password_uppercase }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_lowercase\" value=\"1\" id=\"input-user-password-lowercase\" class=\"form-check-input\"{% if config_user_password_lowercase %} checked{% endif %}/>
                        <label for=\"input-user-password-lowercase\" class=\"form-check-label\">{{ text_password_lowercase }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_number\" value=\"1\" id=\"input-user-password-number\" class=\"form-check-input\"{% if config_user_password_number %} checked{% endif %}/>
                        <label for=\"input-user-password-number\" class=\"form-check-label\">{{ text_password_number }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_symbol\" value=\"1\" id=\"input-user-password-symbol\" class=\"form-check-input\"{% if config_user_password_symbol %} checked{% endif %}/>
                        <label for=\"input-user-password-symbol\" class=\"form-check-label\">{{ text_password_symbol }}</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-user-password-length\" class=\"col-sm-2 col-form-label\">{{ entry_password_length }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_user_password_length\" value=\"{{ config_user_password_length }}\" placeholder=\"{{ entry_password_length }}\" id=\"input-user-password-length\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_shared }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_shared\" value=\"1\" checked=\"{{ config_shared }}\" input-id=\"input-shared\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_shared }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_upload }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">{{ entry_file_max_size }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"{{ config_file_max_size }}\" placeholder=\"{{ entry_file_max_size }}\" id=\"input-file-max-size\" class=\"form-control\" required/>
                    <div class=\"form-text\">{{ help_file_max_size }}</div>
                    <div id=\"error-file-max-size\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">{{ entry_file_ext_allowed }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"{{ entry_file_ext_allowed }}\" id=\"input-file-ext-allowed\" class=\"form-control\">{{ config_file_ext_allowed }}</textarea>
                    <div class=\"form-text\">{{ help_file_ext_allowed }}</div>
                    <div id=\"error-file-ext-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">{{ entry_file_mime_allowed }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"{{ entry_file_mime_allowed }}\" id=\"input-file-mime-allowed\" class=\"form-control\">{{ config_file_mime_allowed }}</textarea>
                    <div class=\"form-text\">{{ help_file_mime_allowed }}</div>
                    <div id=\"error-file-mime-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_error }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_error_display }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_display\" value=\"1\" checked=\"{{ config_error_display }}\" input-id=\"input-error-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_error_log }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_log\" value=\"1\" checked=\"{{ config_error_log }}\" input-id=\"input-error-log\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">{{ entry_error_filename }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"{{ config_error_filename }}\" placeholder=\"{{ entry_error_filename }}\" id=\"input-error-filename\" class=\"form-control\" required/>
                    <div id=\"error-error-filename\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting.theme&user_token={{ user_token }}&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');
//--></script>
{{ footer }}
", "admin/view/template/setting/setting.twig", "C:\\xampp\\htdocs\\bareeq_platform\\admin\\view\\template\\setting\\setting.twig");
    }
}
