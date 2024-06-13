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

/* application/display-block/block-chart-ajax-bars/layout.js.twig */
class __TwigTemplate_05099e9af224267239370b51faa15e24ccd97a99698d35d3d4b8bd183e113e99 extends Template
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
        echo "
var iChartDefaultHeight = 200,
        iChartLegendHeight = 6 * ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "iMaxNbCharsInLabel", [], "any", false, false, false, 5), "html", null, true);
        echo ",
        iChartTotalHeight = iChartDefaultHeight+iChartLegendHeight;
\$('#my_chart_";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 7), "html", null, true);
        echo "').height(iChartTotalHeight+'px');

var chart = c3.generate({
    bindto: d3.select('#my_chart_";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 10), "html", null, true);
        echo "'),
    data: {
        json: ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJson", [], "any", false, false, false, 12);
        echo ",
        keys: {
            x: 'label',
            value: [\"value\"]
        },
        onclick: function (d) {
            var aURLs = ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSURLs", [], "any", false, false, false, 18);
        echo ";
            window.location.href = aURLs[d.index];
        },
        selection: {
            enabled: true
        },
        type: 'bar'
    },
    axis: {
        x: {
            tick: {
                culling: {max: 25}, // Maximum 24 labels on x axis (2 years).
                centered: true,
                rotate: 90,
                multiline: false
            },
            type: 'category'   // this needed to load string x value
        }
    },
    grid: {
        y: {
            show: true
        }
    },
    legend: {
        show: false
    },
    tooltip: {
        grouped: false,
        format: {
            title: function() { return '' },
            name: function (name, ratio, id, index) {
                var aNames = ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSNames", [], "any", false, false, false, 50);
        echo ";
                return aNames[index];
            }
        }
    }
});

if (typeof(charts) === \"undefined\")
{
    charts = [];
\trefreshChart = [];
}
var idxChart=charts.length;
charts.push(chart);
var refreshChart";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 64), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
        echo " = '\$.post(\"";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sURLForRefresh", [], "any", false, false, false, 64), "js"), "html", null, true);
        echo "&refresh='+idxChart+'\",\"\", function (data) {'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'charts['+idxChart+'].unload();'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'setTimeout(function () {eval(data.js);},50);'+
\t\t\t\t\t\t\t\t\t\t\t\t\t'})';
refreshChart.push(refreshChart";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 68), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
        echo ");";
    }

    public function getTemplateName()
    {
        return "application/display-block/block-chart-ajax-bars/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 68,  118 => 64,  101 => 50,  66 => 18,  57 => 12,  52 => 10,  46 => 7,  41 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/display-block/block-chart-ajax-bars/layout.js.twig", "C:\\xampp\\htdocs\\itop\\web\\templates\\application\\display-block\\block-chart-ajax-bars\\layout.js.twig");
    }
}
