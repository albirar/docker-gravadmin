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

/* partials/cookieconsent.html.twig */
class __TwigTemplate_37fd7619317c1675256c36f21ce7909fec384d6f49db9d3e4455648f0edf9862 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "window.addEventListener(\"load\", function(){
window.cookieconsent.initialise({
\"palette\": {
    \"popup\": {
        \"background\": \"";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "popup_background_color", []);
        echo "\",
        \"text\": \"";
        // line 6
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "popup_text_color", []);
        echo "\"
    },
    \"button\": {
        \"background\": \"";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "button_background_color", []);
        echo "\",
        \"text\": \"";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "button_text_color", []);
        echo "\",
        \"border\": \"";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "button_border_color", []);
        echo "\"
    }
},
";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "position", []) == "top-pushdown")) {
            // line 15
            echo "\"position\": \"top\",
\"static\": true,
";
        } else {
            // line 18
            echo "\"position\": \"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "position", []);
            echo "\",
";
        }
        // line 20
        echo "\"theme\": \"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "theme", []);
        echo "\",
\"content\": {
    \"message\": \"";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "content_message", [])) {
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "content_message", []);
        } else {
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGINS.COOKIECONSENT.CONTENT_MESSAGE");
        }
        echo "\",
    \"dismiss\": \"";
        // line 23
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "content_dismiss", [])) {
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "content_dismiss", []);
        } else {
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGINS.COOKIECONSENT.CONTENT_DISMISS");
        }
        echo "\",
    \"link\": \"";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "content_link", [])) {
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "content_link", []);
        } else {
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGINS.COOKIECONSENT.CONTENT_LINK");
        }
        echo "\",
    \"href\": \"";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "content_href", [])) {
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "cookieconsent", []), "content_href", []);
        } else {
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGINS.COOKIECONSENT.CONTENT_HREF");
        }
        echo "\"
}
})});";
    }

    public function getTemplateName()
    {
        return "partials/cookieconsent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  95 => 24,  87 => 23,  79 => 22,  73 => 20,  67 => 18,  62 => 15,  60 => 14,  54 => 11,  50 => 10,  46 => 9,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/cookieconsent.html.twig", "/var/www/html/user/plugins/cookieconsent/templates/partials/cookieconsent.html.twig");
    }
}
