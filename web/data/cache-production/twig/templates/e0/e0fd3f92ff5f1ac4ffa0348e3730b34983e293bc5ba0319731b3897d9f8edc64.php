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

/* base/components/input/file-select/layout.js.twig */
class __TwigTemplate_4ef9982d36e29b9b2cb6cff3688ed3982c951e9809051a1cedb8a27eac5ae48c extends Template
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
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShowFilename", [], "method", false, false, false, 3)) {
            // line 4
            echo "    \$('#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
            echo "').bind('change', function() {
        var fileName = \$(this).val().replace(/^.*[\\\\\\/]/, '');
        fileName = \$('<div/>').text(fileName).html();
        \$('#";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 7), "html", null, true);
            echo "-file-name').html(fileName);
    });
";
        }
    }

    public function getTemplateName()
    {
        return "base/components/input/file-select/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/file-select/layout.js.twig", "C:\\xampp\\htdocs\\itop\\web\\templates\\base\\components\\input\\file-select\\layout.js.twig");
    }
}
