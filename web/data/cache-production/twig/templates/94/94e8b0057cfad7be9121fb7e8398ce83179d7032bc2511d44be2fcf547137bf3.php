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

/* base/components/popover-menu/item/layout.html.twig */
class __TwigTemplate_b1cb2dc9fd3ef4317e1de0c5ba4f13f501a6f75c7a4b49fc93be0e61d31b8cd6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboPopoverMenuItem' => [$this, 'block_iboPopoverMenuItem'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('iboPopoverMenuItem', $context, $blocks);
    }

    public function block_iboPopoverMenuItem($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base/components/popover-menu/item/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/popover-menu/item/layout.html.twig", "C:\\xampp\\htdocs\\itop\\web\\templates\\base\\components\\popover-menu\\item\\layout.html.twig");
    }
}
