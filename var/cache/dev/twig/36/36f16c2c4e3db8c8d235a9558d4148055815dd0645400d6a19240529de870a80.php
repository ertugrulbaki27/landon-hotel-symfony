<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_cc4cd134db779e3eb16be148060268e00eb5d0916aeaa37a63b1452b76b975d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e494ffe63991f50601567f6fed4f967b919c9387c1631f4c9cc242db0569cb0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e494ffe63991f50601567f6fed4f967b919c9387c1631f4c9cc242db0569cb0c->enter($__internal_e494ffe63991f50601567f6fed4f967b919c9387c1631f4c9cc242db0569cb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_8c3632d28e12ec55df7a8cf62daeebe2ea7b5756d4dd067ff58619106364144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3632d28e12ec55df7a8cf62daeebe2ea7b5756d4dd067ff58619106364144a->enter($__internal_8c3632d28e12ec55df7a8cf62daeebe2ea7b5756d4dd067ff58619106364144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_e494ffe63991f50601567f6fed4f967b919c9387c1631f4c9cc242db0569cb0c->leave($__internal_e494ffe63991f50601567f6fed4f967b919c9387c1631f4c9cc242db0569cb0c_prof);

        
        $__internal_8c3632d28e12ec55df7a8cf62daeebe2ea7b5756d4dd067ff58619106364144a->leave($__internal_8c3632d28e12ec55df7a8cf62daeebe2ea7b5756d4dd067ff58619106364144a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
