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

/* admin/view/template/catalog/product.twig */
class __TwigTemplate_58f4117ea3e5b71ba8d7887190527756 extends Template
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
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-product').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        yield ($context["copy"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_copy"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-regular fa-copy\"></i></button>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 9
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 23
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-name\" class=\"form-label\">";
        // line 27
        yield ($context["entry_name"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-model\" class=\"form-label\">";
        // line 31
        yield ($context["entry_model"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_model\" value=\"";
        yield ($context["filter_model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" data-oc-target=\"autocomplete-model\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-model\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-category\" class=\"form-label\">";
        // line 35
        yield ($context["entry_category"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_category\" value=\"";
        yield ($context["filter_category"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_category"] ?? null);
        yield "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 36
        yield ($context["filter_category_id"] ?? null);
        yield "\" id=\"input-category-id\"/>
                <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-manufacturer\" class=\"form-label\">";
        // line 40
        yield ($context["entry_manufacturer"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_manufacturer\" value=\"";
        yield ($context["filter_manufacturer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_manufacturer"] ?? null);
        yield "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_manufacturer_id\" value=\"";
        // line 41
        yield ($context["filter_manufacturer_id"] ?? null);
        yield "\" id=\"input-manufacturer-id\"/>
                <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-price-from\" class=\"form-label\">";
        // line 45
        yield ($context["entry_price"] ?? null);
        yield "</label>
                <div class=\"row\">
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_price_from\" value=\"";
        // line 48
        yield ($context["filter_price_from"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_from"] ?? null);
        yield "\" id=\"input-price-from\" class=\"form-control\"/>
                  </div>
                  <label class=\"col-auto col-form-label px-0\"><i class=\"fa-solid fa-minus\"></i></label>
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_price_to\" value=\"";
        // line 52
        yield ($context["filter_price_to"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_to"] ?? null);
        yield "\" id=\"input-price-to\" class=\"form-control\"/>
                  </div>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-quantity-from\" class=\"form-label\">";
        // line 57
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
                <div class=\"row\">
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_quantity_from\" value=\"";
        // line 60
        yield ($context["filter_quantity_from"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_from"] ?? null);
        yield "\" id=\"input-quantity-from\" class=\"form-control\"/>
                  </div>
                  <label class=\"col-auto col-form-label px-0\"><i class=\"fa-solid fa-minus\"></i></label>
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_quantity_to\" value=\"";
        // line 64
        yield ($context["filter_quantity_to"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_to"] ?? null);
        yield "\" id=\"input-quantity-to\" class=\"form-control\"/>
                  </div>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">";
        // line 69
        yield ($context["entry_status"] ?? null);
        yield "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"";
        // line 71
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                  <option value=\"0\"";
        // line 72
        if ((($context["filter_status"] ?? null) == "0")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 76
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 77
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 85
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"list\" class=\"card-body\">";
        // line 86
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#list').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#list').load(this.href);
});

\$('#form-filter').on('submit', function(e) {
    e.preventDefault();

    let url = \$(this).serialize();

    window.history.pushState({}, null, 'index.php?route=catalog/product&user_token=";
        // line 104
        yield ($context["user_token"] ?? null);
        yield "&' + url);

    \$('#list').load('index.php?route=catalog/product.list&user_token=";
        // line 106
        yield ($context["user_token"] ?? null);
        yield "&' + url);
});

\$('#list').on('change', '.form-switch .form-check-input', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#list').load(\$('#form-product').attr('data-oc-load'));
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-name').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 139
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-name').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-model').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 159
        yield ($context["user_token"] ?? null);
        yield "&filter_model=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['model'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-model').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 179
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '";
        // line 183
        yield ($context["text_none"] ?? null);
        yield "',
                    category_id: '',
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        if (item['value']) {
            \$('#input-category').val(decodeHTMLEntities(item['label']));
            \$('#input-category-id').val(item['value']);
        } else {
            \$('#input-category').val('');
            \$('#input-category-id').val('');
        }
    }
});

\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 210
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '";
        // line 214
        yield ($context["text_none"] ?? null);
        yield "',
                    category_id: '',
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        if (item['value']) {
            \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
            \$('#input-manufacturer-id').val(item['value']);
        } else {
            \$('#input-manufacturer').val('');
            \$('#input-manufacturer-id').val('');
        }
    }
});
//--></script>
";
        // line 238
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
        return "admin/view/template/catalog/product.twig";
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
        return array (  436 => 238,  409 => 214,  402 => 210,  372 => 183,  365 => 179,  342 => 159,  319 => 139,  283 => 106,  278 => 104,  257 => 86,  253 => 85,  242 => 77,  238 => 76,  227 => 72,  219 => 71,  214 => 69,  204 => 64,  195 => 60,  189 => 57,  179 => 52,  170 => 48,  164 => 45,  157 => 41,  149 => 40,  142 => 36,  134 => 35,  123 => 31,  112 => 27,  105 => 23,  96 => 16,  85 => 14,  81 => 13,  76 => 11,  67 => 9,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-product').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"{{ copy }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_copy }}\" class=\"btn btn-light\"><i class=\"fa-regular fa-copy\"></i></button>
        <button type=\"submit\" form=\"form-product\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
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
    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-name\" class=\"form-label\">{{ entry_name }}</label> <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-model\" class=\"form-label\">{{ entry_model }}</label> <input type=\"text\" name=\"filter_model\" value=\"{{ filter_model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" data-oc-target=\"autocomplete-model\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-model\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-category\" class=\"form-label\">{{ entry_category }}</label> <input type=\"text\" name=\"filter_category\" value=\"{{ filter_category }}\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_category_id\" value=\"{{ filter_category_id }}\" id=\"input-category-id\"/>
                <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-manufacturer\" class=\"form-label\">{{ entry_manufacturer }}</label> <input type=\"text\" name=\"filter_manufacturer\" value=\"{{ filter_manufacturer }}\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                <input type=\"hidden\" name=\"filter_manufacturer_id\" value=\"{{ filter_manufacturer_id }}\" id=\"input-manufacturer-id\"/>
                <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-price-from\" class=\"form-label\">{{ entry_price }}</label>
                <div class=\"row\">
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_price_from\" value=\"{{ filter_price_from }}\" placeholder=\"{{ text_from }}\" id=\"input-price-from\" class=\"form-control\"/>
                  </div>
                  <label class=\"col-auto col-form-label px-0\"><i class=\"fa-solid fa-minus\"></i></label>
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_price_to\" value=\"{{ filter_price_to }}\" placeholder=\"{{ text_to }}\" id=\"input-price-to\" class=\"form-control\"/>
                  </div>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-quantity-from\" class=\"form-label\">{{ entry_quantity }}</label>
                <div class=\"row\">
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_quantity_from\" value=\"{{ filter_quantity_from }}\" placeholder=\"{{ text_from }}\" id=\"input-quantity-from\" class=\"form-control\"/>
                  </div>
                  <label class=\"col-auto col-form-label px-0\"><i class=\"fa-solid fa-minus\"></i></label>
                  <div class=\"col\">
                    <input type=\"text\" name=\"filter_quantity_to\" value=\"{{ filter_quantity_to }}\" placeholder=\"{{ text_to }}\" id=\"input-quantity-to\" class=\"form-control\"/>
                  </div>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}>{{ text_enabled }}</option>
                  <option value=\"0\"{% if filter_status == '0' %} selected{% endif %}>{{ text_disabled }}</option>
                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
          <div id=\"list\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#list').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#list').load(this.href);
});

\$('#form-filter').on('submit', function(e) {
    e.preventDefault();

    let url = \$(this).serialize();

    window.history.pushState({}, null, 'index.php?route=catalog/product&user_token={{ user_token }}&' + url);

    \$('#list').load('index.php?route=catalog/product.list&user_token={{ user_token }}&' + url);
});

\$('#list').on('change', '.form-switch .form-check-input', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#list').load(\$('#form-product').attr('data-oc-load'));
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-name').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-name').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-model').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_model=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['model'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-model').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '{{ text_none }}',
                    category_id: '',
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        if (item['value']) {
            \$('#input-category').val(decodeHTMLEntities(item['label']));
            \$('#input-category-id').val(item['value']);
        } else {
            \$('#input-category').val('');
            \$('#input-category-id').val('');
        }
    }
});

\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    name: '{{ text_none }}',
                    category_id: '',
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        if (item['value']) {
            \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
            \$('#input-manufacturer-id').val(item['value']);
        } else {
            \$('#input-manufacturer').val('');
            \$('#input-manufacturer-id').val('');
        }
    }
});
//--></script>
{{ footer }}
", "admin/view/template/catalog/product.twig", "C:\\xampp\\htdocs\\bareeq_platform\\admin\\view\\template\\catalog\\product.twig");
    }
}
