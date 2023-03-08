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

/* partials/mobile-header.html.twig */
class __TwigTemplate_cd029051079ce9c8d8f3a9d747779b1589a2688e4d7208737419cab2bc0f4ebc extends \Twig\Template
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
        echo "    <div class=\"mobile-header mobile-visible\">
      <div class=\"mobile-logo-container\">
";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "name", [])) {
            // line 4
            echo "        <div class=\"mobile-site-title\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "name", []);
            echo "</div>
";
        } else {
            // line 6
            echo "        <div class=\"mobile-site-title\">PLEASE UPDATE YOUR SETTINGS VIA ADMIN OR PAGE YAML</div>
";
        }
        // line 8
        echo "      </div>
      <a class=\"menu-toggle mobile-visible\">
        <i class=\"fa fa-bars\"></i>
      </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "partials/mobile-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/mobile-header.html.twig", "/var/www/html/user/themes/brilliant-resume/templates/partials/mobile-header.html.twig");
    }
}
