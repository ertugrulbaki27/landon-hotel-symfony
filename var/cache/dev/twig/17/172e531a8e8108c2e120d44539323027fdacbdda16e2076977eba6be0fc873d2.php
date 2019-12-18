<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_777c56351415cd77b2a0ed4abe55679a681edc45c83f013ba4afbd0065d005e8 extends Twig_Template
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
        $__internal_010b226a08e7ec4be04b130cbc09a9786cd385f871cea8fbb300d551b7234ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010b226a08e7ec4be04b130cbc09a9786cd385f871cea8fbb300d551b7234ebe->enter($__internal_010b226a08e7ec4be04b130cbc09a9786cd385f871cea8fbb300d551b7234ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_02995e3e0d0528805565054ef7d65ce94853b0968350464e37abdefe9b0f2b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02995e3e0d0528805565054ef7d65ce94853b0968350464e37abdefe9b0f2b47->enter($__internal_02995e3e0d0528805565054ef7d65ce94853b0968350464e37abdefe9b0f2b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_010b226a08e7ec4be04b130cbc09a9786cd385f871cea8fbb300d551b7234ebe->leave($__internal_010b226a08e7ec4be04b130cbc09a9786cd385f871cea8fbb300d551b7234ebe_prof);

        
        $__internal_02995e3e0d0528805565054ef7d65ce94853b0968350464e37abdefe9b0f2b47->leave($__internal_02995e3e0d0528805565054ef7d65ce94853b0968350464e37abdefe9b0f2b47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
