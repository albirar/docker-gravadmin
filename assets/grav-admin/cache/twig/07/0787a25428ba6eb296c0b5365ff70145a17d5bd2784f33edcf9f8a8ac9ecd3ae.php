<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/default/form.html.twig */
class __TwigTemplate_1627136d3cc6bd1b4770ebe78b84084cc3426fff399201daaf524b798b4bd3a8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'button_classes' => [$this, 'block_button_classes'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "form"], "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", [])), "POST");
        // line 10
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", []))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", [])) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", []), true)) : (true))));
        // line 11
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 14
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", []) == "file"))) {
                // line 15
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 16
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
        // line 19
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", [])) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", []))) : (((($context["base_url"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", [])) . $this->getAttribute(($context["uri"] ?? null), "params", []))));
        // line 20
        echo "
";
        // line 21
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 22
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 24
        echo "
";
        // line 25
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            // line 26
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.vendor.js", 1 => ["loading" => "defer", "group" => "bottom"]], "method");
            // line 27
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.min.js", 1 => ["loading" => "defer", "group" => "bottom"]], "method");
        }
        // line 29
        echo "
    ";
        // line 30
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (((((((((("
        window.GravForm = window.GravForm || {};
        window.GravForm.config = {
            current_url: '" . $this->getAttribute(        // line 33
($context["uri"] ?? null), "route", [0 => true], "method")) . "',
            base_url_relative: '") .         // line 34
($context["base_url_relative"] ?? null)) . "',
            param_sep: '") . $this->getAttribute($this->getAttribute(        // line 35
($context["config"] ?? null), "system", []), "param_sep", [])) . "',
            form_nonce: '") . $this->getAttribute(        // line 36
($context["form"] ?? null), "getNonce", [])) . "',
            session_timeout: ") . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 37
($context["config"] ?? null), "system", []), "session", []), "timeout", [])) . "
        };
        window.GravForm.translations = jQuery.extend({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
    "), 1 => ["group" => "bottom"]], "method");
        // line 41
        echo "<form name=\"";
        echo $this->getAttribute(($context["form"] ?? null), "name", []);
        echo "\"
      action=\"";
        // line 42
        echo twig_trim_filter(($context["action"] ?? null), "/", "right");
        echo "\"
      method=\"";
        // line 43
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
        ";
        // line 44
        if ($this->getAttribute(($context["form"] ?? null), "id", [])) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", []);
            echo "\"";
        }
        // line 45
        echo "        ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 48
        echo "        ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", [])) {
            echo "novalidate";
        }
        // line 49
        echo "        ";
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            echo "data-grav-keepalive=\"true\"";
        }
        // line 50
        echo ">
    <div class=\"controls\">

    ";
        // line 53
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 54
        echo "
    ";
        // line 55
        $context["data"] = (($context["data"]) ?? ($this->getAttribute(($context["form"] ?? null), "data", [])));
        // line 56
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 57
            echo "        ";
            $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
            // line 58
            echo "        ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), "forms/default/form.html.twig", 58);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 59
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
    ";
        // line 61
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 61)->display($context);
        // line 62
        echo "
    ";
        // line 63
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 68
        echo "
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 70
            echo "            ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "<div class=\" ";
                echo $this->getAttribute($context["button"], "outerclasses", []);
                echo "\">";
            }
            // line 71
            echo "            ";
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 72
                echo "            <a href=\"";
                echo (((is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $this->getAttribute($context["button"], "url", [])) && is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = "http") && ('' === $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b || 0 === strpos($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144, $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b)))) ? ($this->getAttribute($context["button"], "url", [])) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc($this->getAttribute($context["button"], "url", []))));
                echo "\">
            ";
            }
            // line 74
            echo "            <button
                    ";
            // line 75
            if ($this->getAttribute($context["button"], "id", [])) {
                echo "id=\"";
                echo $this->getAttribute($context["button"], "id", []);
                echo "\"";
            }
            // line 76
            echo "                    ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 79
            echo "                    ";
            if ($this->getAttribute($context["button"], "disabled", [])) {
                echo "disabled=\"disabled\"";
            }
            // line 80
            echo "
                    type=\"";
            // line 81
            echo (($this->getAttribute($context["button"], "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", []), "submit")) : ("submit"));
            echo "\"

                    ";
            // line 83
            if ($this->getAttribute($context["button"], "task", [])) {
                // line 84
                echo "                        name=\"task\" value=\"";
                echo $this->getAttribute($context["button"], "task", []);
                echo "\"
                    ";
            }
            // line 86
            echo "            >
                ";
            // line 87
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($context["button"], "value", [])), "Submit");
            echo "
            </button>
            ";
            // line 89
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 90
                echo "            </a>
            ";
            }
            // line 92
            echo "            ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "</div>";
            }
            // line 93
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
        ";
        // line 95
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 98
        echo "
    ";
        // line 99
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 99)->display($context);
        // line 100
        echo "    ";
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("form", "form-nonce");
        echo "

    </div>
</form>

";
        // line 105
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "forms", []), "dropzone", []), "enabled", [])) {
            // line 106
            echo "    <div id=\"dropzone-template\" style=\"display:none;\">
        ";
            // line 107
            $this->loadTemplate("forms/dropzone/template.html.twig", "forms/default/form.html.twig", 107)->display($context);
            // line 108
            echo "    </div>
";
        }
    }

    // line 45
    public function block_form_classes($context, array $blocks = [])
    {
        // line 46
        echo "            class=\"";
        echo ($context["form_outer_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["form"] ?? null), "classes", []);
        echo "\"
        ";
    }

    // line 53
    public function block_inner_markup_fields_start($context, array $blocks = [])
    {
    }

    // line 63
    public function block_inner_markup_fields_end($context, array $blocks = [])
    {
    }

    // line 65
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        // line 66
        echo "    <div class=\"";
        echo ((($context["form_button_outer_classes"] ?? null)) ? (($context["form_button_outer_classes"] ?? null)) : ("buttons"));
        echo "\">
        ";
    }

    // line 76
    public function block_button_classes($context, array $blocks = [])
    {
        // line 77
        echo "                        class=\"";
        echo ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button"));
        echo " ";
        echo $this->getAttribute(($context["button"] ?? null), "classes", []);
        echo "\"
                    ";
    }

    // line 95
    public function block_inner_markup_buttons_end($context, array $blocks = [])
    {
        // line 96
        echo "    </div>
    ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 96,  411 => 95,  402 => 77,  399 => 76,  392 => 66,  389 => 65,  384 => 63,  379 => 53,  370 => 46,  367 => 45,  361 => 108,  359 => 107,  356 => 106,  354 => 105,  345 => 100,  343 => 99,  340 => 98,  338 => 95,  335 => 94,  321 => 93,  316 => 92,  312 => 90,  310 => 89,  305 => 87,  302 => 86,  296 => 84,  294 => 83,  289 => 81,  286 => 80,  281 => 79,  278 => 76,  272 => 75,  269 => 74,  263 => 72,  260 => 71,  253 => 70,  236 => 69,  233 => 68,  231 => 65,  228 => 64,  226 => 63,  223 => 62,  221 => 61,  218 => 60,  204 => 59,  193 => 58,  190 => 57,  172 => 56,  170 => 55,  167 => 54,  165 => 53,  160 => 50,  155 => 49,  150 => 48,  147 => 45,  141 => 44,  135 => 43,  131 => 42,  126 => 41,  121 => 37,  119 => 36,  117 => 35,  115 => 34,  113 => 33,  109 => 30,  106 => 29,  102 => 27,  99 => 26,  97 => 25,  94 => 24,  90 => 22,  88 => 21,  85 => 20,  83 => 19,  80 => 18,  73 => 16,  70 => 15,  67 => 14,  63 => 13,  60 => 12,  58 => 11,  56 => 10,  54 => 9,  52 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/default/form.html.twig", "/var/www/html/user/themes/brilliant-resume/templates/forms/default/form.html.twig");
    }
}
