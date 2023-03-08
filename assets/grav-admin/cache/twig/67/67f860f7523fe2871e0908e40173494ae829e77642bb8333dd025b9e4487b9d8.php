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
class __TwigTemplate_47dea159d7ceb177e71bda9a373e0cc4bd623e12029d05c53c27f4f10a2301a3 extends \Twig\Template
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
        echo "  <header id=\"site_header\" class=\"header mobile-menu-hide\">
";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "profile_img", [])) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "profile_img", []));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "profile_img_2", [])) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "profile_img_2", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["img2"]) {
                        // line 3
                        echo "      <div class=\"js-comparison-container\" ";
                        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "profile_img_comp", [])) {
                            echo "data-start-position=\"";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "profile_img_comp", []);
                            echo "\"";
                        }
                        echo ">
        <img class=\"profile-pics comparison-image\" src=\"";
                        // line 4
                        echo $this->getAttribute($context["img"], "name", []);
                        echo "\" ";
                        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "profile_img_alt", [])) {
                            echo " alt=\"";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "profile_img_alt", []);
                            echo "\" ";
                        }
                        echo ">
        <img class=\"profile-pics comparison-image\" src=\"";
                        // line 5
                        echo $this->getAttribute($context["img2"], "name", []);
                        echo "\" ";
                        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "profile_img_2_alt", [])) {
                            echo " alt=\"";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "profile_img_2_alt", []);
                            echo "\" ";
                        }
                        echo ">
      </div>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } else {
                    // line 8
                    echo "    <img class=\"profile-pic\" src=\"";
                    echo $this->getAttribute($context["img"], "name", []);
                    echo "\" alt=\"image\">
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        echo "      <div class=\"custom-nav-wrap\">
        <div class=\"site-title-block\">
    ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "name", [])) {
            // line 13
            echo "      <h1 class=\"site-title\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "name", []);
            echo "</h1>
  ";
        }
        // line 15
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "subtitle", [])) {
            // line 16
            echo "      <p class=\"site-description\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "subtitle", []);
            echo "</p>
  ";
        }
        // line 18
        echo "    </div>
        <div class=\"site-nav\">
          <ul id=\"nav\" class=\"site-main-menu\">
";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "nav", []), "home", [])) {
            // line 22
            echo "            <li>
              <a class=\"pt-trigger\" href=\"#home\" data-animation=\"58\" data-goto=\"1\">";
            // line 23
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "nav", []), "home", []);
            echo "</a>
            </li>
";
        } else {
            // line 26
            echo "            <li>
              <a class=\"pt-trigger\" href=\"#home\" data-animation=\"58\" data-goto=\"1\">Home</a>
            </li>
";
        }
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "nav", []), "about", [])) {
            // line 30
            echo "            <li>
              <a class=\"pt-trigger\" href=\"#about_me\" data-animation=\"59\" data-goto=\"2\">";
            // line 31
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "nav", []), "about", []);
            echo "</a>
            </li>
";
        } else {
            // line 34
            echo "            <li>
              <a class=\"pt-trigger\" href=\"#about_me\" data-animation=\"59\" data-goto=\"2\">About</a>
            </li>
";
        }
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "nav", []), "resume", [])) {
            // line 38
            echo "            <li>
              <a class=\"pt-trigger\" href=\"#resume\" data-animation=\"60\" data-goto=\"3\">";
            // line 39
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "nav", []), "resume", []);
            echo "</a>
            </li>
";
        } else {
            // line 42
            echo "            <li>
              <a class=\"pt-trigger\" href=\"#resume\" data-animation=\"60\" data-goto=\"3\">Resume</a>
            </li>
";
        }
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "nav", []), "portfolio", [])) {
            // line 46
            echo "            <li>
              <a class=\"pt-trigger\" href=\"#portfolio\" data-animation=\"61\" data-goto=\"4\">";
            // line 47
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "nav", []), "portfolio", []);
            echo "</a>
            </li>
";
        } else {
            // line 50
            echo "            <li>
              <a class=\"pt-trigger\" href=\"#portfolio\" data-animation=\"61\" data-goto=\"4\">Portfolio</a>
            </li>
";
        }
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "nav", []), "contact", [])) {
            // line 54
            echo "            <li>
              <a class=\"pt-trigger\" href=\"#contact\" data-animation=\"59\" data-goto=\"5\">";
            // line 55
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "nav", []), "contact", []);
            echo "</a>
            </li>
";
        } else {
            // line 58
            echo "            <li>
              <a class=\"pt-trigger\" href=\"#contact\" data-animation=\"59\" data-goto=\"5\">Contact</a>
            </li>
";
        }
        // line 62
        echo "          </ul>
";
        // line 63
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", [])) {
            // line 64
            echo "          <ul class=\"social-links\">
";
            // line 65
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "facebook", [])) {
                // line 66
                echo "            <li>
              <a class=\"tip social-button\" href=\"";
                // line 67
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "facebook", []);
                echo "\" title=\"Facebook\" target=\"_blank\">
                <i class=\"fab fa-facebook\"></i>
              </a>
            </li>
";
            }
            // line 72
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "twitter", [])) {
                // line 73
                echo "            <li>
              <a class=\"tip social-button\" href=\"";
                // line 74
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "twitter", []);
                echo "\" title=\"Twitter\" target=\"_blank\">
                <i class=\"fab fa-twitter\"></i>
              </a>
            </li>
";
            }
            // line 79
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "instagram", [])) {
                // line 80
                echo "            <li>
              <a class=\"tip social-button\" href=\"";
                // line 81
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "instagram", []);
                echo "\" title=\"Instagram\" target=\"_blank\">
                <i class=\"fab fa-instagram\"></i>
              </a>
            </li>
";
            }
            // line 86
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "linkedin", [])) {
                // line 87
                echo "            <li>
              <a class=\"tip social-button\" href=\"";
                // line 88
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "linkedin", []);
                echo "\" title=\"LinkedIn\" target=\"_blank\">
                <i class=\"fab fa-linkedin\"></i>
              </a>
            </li>
";
            }
            // line 93
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "gplus", [])) {
                // line 94
                echo "            <li>
              <a class=\"tip social-button\" href=\"";
                // line 95
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "gplus", []);
                echo "\" title=\"Google Plus\" target=\"_blank\">
                <i class=\"fab fa-google-plus\"></i>
              </a>
            </li>
";
            }
            // line 100
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "youtube", [])) {
                // line 101
                echo "            <li>
              <a class=\"tip social-button\" href=\"";
                // line 102
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "youtube", []);
                echo "\" title=\"Youtube\" target=\"_blank\">
                <i class=\"fa fa-youtube\"></i>
              </a>
            </li>
";
            }
            // line 107
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "dribbble", [])) {
                // line 108
                echo "            <li>
              <a class=\"tip social-button\" href=\"";
                // line 109
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "dribbble", []);
                echo "\" title=\"Dribbble\" target=\"_blank\">
                <i class=\"fab fa-dribbble\"></i>
              </a>
            </li>
";
            }
            // line 114
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "behance", [])) {
                // line 115
                echo "            <li>
              <a class=\"tip social-button\" href=\"";
                // line 116
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "behance", []);
                echo "\" title=\"BeHance\" target=\"_blank\">
                <i class=\"fab fa-behance\"></i>
              </a>
            </li>
";
            }
            // line 121
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "github", [])) {
                // line 122
                echo "            <li>
              <a class=\"tip social-button\" href=\"";
                // line 123
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "github", []);
                echo "\" title=\"Github\" target=\"_blank\">
                <i class=\"fab fa-github\"></i>
              </a>
            </li>
";
            }
            // line 128
            echo "          </ul>
";
        }
        // line 130
        echo "        </div>
      </div>
    </header>
";
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
        return array (  328 => 130,  324 => 128,  316 => 123,  313 => 122,  311 => 121,  303 => 116,  300 => 115,  298 => 114,  290 => 109,  287 => 108,  285 => 107,  277 => 102,  274 => 101,  272 => 100,  264 => 95,  261 => 94,  259 => 93,  251 => 88,  248 => 87,  246 => 86,  238 => 81,  235 => 80,  233 => 79,  225 => 74,  222 => 73,  220 => 72,  212 => 67,  209 => 66,  207 => 65,  204 => 64,  202 => 63,  199 => 62,  193 => 58,  187 => 55,  184 => 54,  182 => 53,  176 => 50,  170 => 47,  167 => 46,  165 => 45,  159 => 42,  153 => 39,  150 => 38,  148 => 37,  142 => 34,  136 => 31,  133 => 30,  131 => 29,  125 => 26,  119 => 23,  116 => 22,  114 => 21,  109 => 18,  103 => 16,  100 => 15,  94 => 13,  92 => 12,  88 => 10,  77 => 8,  61 => 5,  51 => 4,  42 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/header.html.twig", "/var/www/html/user/themes/brilliant-resume/templates/partials/header.html.twig");
    }
}
