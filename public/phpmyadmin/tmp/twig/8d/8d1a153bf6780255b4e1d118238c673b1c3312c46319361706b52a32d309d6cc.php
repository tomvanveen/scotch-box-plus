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

/* preferences/forms/main.twig */
class __TwigTemplate_6f26f176555864fcd84f4449ccfe2c6977d90d15de041a100419e22af63e7e35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield ($context["error"] ?? null);
        yield "
";
        // line 2
        if (($context["has_errors"] ?? null)) {
            // line 3
            yield "  <div class=\"alert alert-danger config-form\" role=\"alert\">
    <strong>";
yield _gettext("Cannot save settings, submitted form contains errors!");
            // line 4
            yield "</strong>
    ";
            // line 5
            yield ($context["errors"] ?? null);
            yield "
  </div>
";
        }
        // line 8
        yield ($context["form"] ?? null);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "preferences/forms/main.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 5,  48 => 4,  44 => 3,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "preferences/forms/main.twig", "/var/www/public/phpmyadmin/templates/preferences/forms/main.twig");
    }
}
