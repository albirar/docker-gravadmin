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

/* flex-objects/types/pages/buttons/move.html.twig */
class __TwigTemplate_e668d84463e6670159434cb95909f4eb647782abc89a5889fcb4eb4817dc5ca5 extends \Twig\Template
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
        echo "<a id=\"titlebar-button-move\" class=\"button\" href=\"#\" data-remodal-target=\"move\" data-parents=\"data[route]\">
    <i class=\"fa fa-arrows\"></i> ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
        echo "
</a>
<div class=\"remodal parents-container\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">
    ";
        // line 5
        $this->loadTemplate("partials/page-move.html.twig", "flex-objects/types/pages/buttons/move.html.twig", 5)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/move"], "method"), "data" => ($context["context"] ?? null)]));
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/move.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "flex-objects/types/pages/buttons/move.html.twig", "/var/www/html/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/buttons/move.html.twig");
    }
}
