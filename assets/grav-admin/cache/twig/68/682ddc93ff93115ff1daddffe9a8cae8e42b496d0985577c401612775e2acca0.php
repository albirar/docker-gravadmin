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

/* partials/base.html.twig */
class __TwigTemplate_e133a54f6333f0cc3ea5a18658fba73c8ce6e01898167500a02f7d185b212e76 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["html_lang"] = (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        // line 3
        echo "<!--[if IE 9]><html class=\"lt-ie10\" lang=\"";
        echo ($context["html_lang"] ?? null);
        echo "\"> <![endif]-->
<html class=\"no-js\" lang=\"";
        // line 4
        echo ($context["html_lang"] ?? null);
        echo "\">
<head>
    ";
        // line 6
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 7
        echo "        ";
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "    </head>
    <body>
        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
         ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        // line 57
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 

        <script type=\"text/javascript\">
        Pizza.init(document.body, {
            donut: true,
            donut_inner_ratio: 0.7,
        });
        </script>
    </body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "            <meta charset=\"utf-8\" />
            <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
            ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />

            <script type='text/javascript' src='";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://js/vendor/modernizr.js");
        echo "'></script>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

            ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
            <link href=\"";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://css/print.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"print\" />

            ";
        // line 28
        $this->displayBlock('assets', $context, $blocks);
        // line 31
        echo "
        ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 18
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/normalize.css"], "method");
        // line 19
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/foundation.css"], "method");
        // line 20
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://icons/foundation-icons.css"], "method");
        // line 21
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.css"], "method");
        // line 22
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/pizza.css"], "method");
        // line 23
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/app.css"], "method");
        // line 24
        echo "            ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 28
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 29
        echo "                ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 35
    public function block_header($context, array $blocks = [])
    {
        // line 36
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 36)->display($context);
        // line 37
        echo "        ";
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        // line 39
        echo "            <div class=\"row main\">
                ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "            </div>
        ";
    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        // line 41
        echo "                ";
    }

    // line 45
    public function block_footer($context, array $blocks = [])
    {
        // line 46
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "        ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        // line 50
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 51
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/foundation.min.js"], "method");
        // line 52
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/snap.svg.js"], "method");
        // line 53
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/pizza.js"], "method");
        // line 54
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 54,  241 => 53,  238 => 52,  235 => 51,  232 => 50,  229 => 49,  225 => 47,  222 => 46,  219 => 45,  215 => 41,  212 => 40,  207 => 42,  205 => 40,  202 => 39,  199 => 38,  195 => 37,  192 => 36,  189 => 35,  181 => 29,  178 => 28,  169 => 24,  166 => 23,  163 => 22,  160 => 21,  157 => 20,  154 => 19,  151 => 18,  148 => 17,  143 => 31,  141 => 28,  136 => 26,  133 => 25,  131 => 17,  125 => 14,  120 => 12,  117 => 11,  115 => 10,  107 => 9,  104 => 8,  101 => 7,  85 => 57,  81 => 56,  78 => 55,  76 => 49,  73 => 48,  71 => 45,  68 => 44,  65 => 38,  63 => 35,  59 => 33,  56 => 7,  54 => 6,  49 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/base.html.twig", "/var/www/html/user/themes/resume/templates/partials/base.html.twig");
    }
}
