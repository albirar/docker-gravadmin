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

/* forms/fields/captcha/captcha.html.twig */
class __TwigTemplate_ab78e8349c0ca9dd7cc2264e7bcca1c0d0a2ab77235181f6801e899ae786c2a8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/captcha/captcha.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"col-xs-12\">
    <script>
        var captchaOnloadCallback = function captchaOnloadCallback() {
            grecaptcha.render('g-recaptcha', {
                'sitekey': \"";
        // line 8
        echo (($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) ? ($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) : ((($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) ? ($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "recaptcha", []), "site_key", [])))));
        echo "\",
                'callback': captchaValidatedCallback,
                'expired-callback': captchaExpiredCallback
            });
        };

        var captchaValidatedCallback = function captchaValidatedCallback() {

        };

        var captchaExpiredCallback = function captchaExpiredCallback() {
            grecaptcha.reset();
        };

        \$('form').submit(function(event) {
            if (\$(this).has(\"#g-recaptcha-response\").length && \$(\"#g-recaptcha-response\").val() === '') {
                event.preventDefault();
                alert(\"";
        // line 25
        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "translate", [0 => "PLUGIN_FORM.ERROR_VALIDATING_CAPTCHA"], "method");
        echo "\");
            }
        });
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit&hl=";
        // line 29
        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "language", []);
        echo "\"
            async defer>
    </script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/captcha/captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  68 => 25,  48 => 8,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/captcha/captcha.html.twig", "/var/www/html/user/themes/brilliant-resume/templates/forms/fields/captcha/captcha.html.twig");
    }
}
