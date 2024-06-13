<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base/components/input/richtext/layout.js.twig */
class __TwigTemplate_3f4d1dc8dbc32ad9d1ca8f410b6b51ce23ff50ce1de2a514b10e6fe3ac62f683 extends Template
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
        echo "\$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "').ckeditor(function() { /* callback code */ }, ";
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetConfig", [], "method", false, false, false, 1));
        echo ");";
    }

    public function getTemplateName()
    {
        return "base/components/input/richtext/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/richtext/layout.js.twig", "C:\\xampp\\htdocs\\itop\\web\\templates\\base\\components\\input\\richtext\\layout.js.twig");
    }
}
