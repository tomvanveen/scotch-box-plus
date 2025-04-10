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

/* table/insert/get_html_for_insert_edit_form_header.twig */
class __TwigTemplate_d47f012f682e4f096bf21932d2b75574d095561107ca6d45a137fdb0c1bb82c2 extends Template
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
        yield "<form id=\"insertForm\" class=\"lock-page";
        yield (((($context["has_blob_field"] ?? null) && ($context["is_upload"] ?? null))) ? (" disableAjax") : (""));
        yield "\" method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/replace");
        yield "\" name=\"insertForm\"";
        yield ((($context["is_upload"] ?? null)) ? (" enctype=\"multipart/form-data\"") : (""));
        yield ">";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/get_html_for_insert_edit_form_header.twig";
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
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/insert/get_html_for_insert_edit_form_header.twig", "/var/www/public/phpmyadmin/templates/table/insert/get_html_for_insert_edit_form_header.twig");
    }
}
