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

/* partials/header.html.twig */
class __TwigTemplate_8e0aa163ff36c762235906c17d339824ad39cf21504a44a5f093facd190ba6fb extends \Twig\Template
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
        echo "<div id=\"header\">
    <div class=\"row\">
        <div class=\"large-3 columns\">
            ";
        // line 4
        if ($this->getAttribute(($context["site"] ?? null), "title", [])) {
            // line 5
            echo "                <h2>";
            echo $this->getAttribute(($context["site"] ?? null), "title", []);
            echo "</h2>
            ";
        }
        // line 6
        echo "   
            ";
        // line 7
        if ($this->getAttribute(($context["site"] ?? null), "description", [])) {
            // line 8
            echo "                <h6 class=\"light\">";
            echo $this->getAttribute(($context["site"] ?? null), "description", []);
            echo "</h6>
            ";
        }
        // line 10
        echo "        </div>
        <div class=\"large-3 columns\">
            <div class=\"row\">
                <div class=\"small-4 columns light2 italic\">
                    Address:
                </div>
                <div class=\"small-8 columns border-left light2 \">
                    <ul class=\"no-bullet\">
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "address", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                            <li>";
            echo $this->getAttribute($context["item"], "line", []);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"large-3 columns\">
            <div class=\"row\">
                <div class=\"small-4 columns light2 italic\">
                    Contact:
                </div>
                <div class=\"small-8 columns border-left light2\">
                    <ul class=\"no-bullet\">
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "contact", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                            <li>";
            echo $this->getAttribute($context["item"], "line", []);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"large-2 columns text-right italic website\">
            <a href=\"http://";
        // line 40
        echo $this->getAttribute(($context["site"] ?? null), "website", []);
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "website", []);
        echo "</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  94 => 33,  90 => 32,  77 => 21,  68 => 19,  64 => 18,  54 => 10,  48 => 8,  46 => 7,  43 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/header.html.twig", "/var/www/html/user/themes/resume/templates/partials/header.html.twig");
    }
}
