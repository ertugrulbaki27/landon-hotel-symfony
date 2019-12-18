<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_60cd2efe024c7de8da16c9e576990935e9002c02e640447a4a5888e5a5383e37 extends Twig_Template
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
        $__internal_12da5a85b248863bebe2033cd79f9bbd2ad41b8db761c2feb90b7c017bcd6c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12da5a85b248863bebe2033cd79f9bbd2ad41b8db761c2feb90b7c017bcd6c4f->enter($__internal_12da5a85b248863bebe2033cd79f9bbd2ad41b8db761c2feb90b7c017bcd6c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        $__internal_a25c5eade072bff7af359b26e7277ce7150b9202395a482624f09adf9102c7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25c5eade072bff7af359b26e7277ce7150b9202395a482624f09adf9102c7fb->enter($__internal_a25c5eade072bff7af359b26e7277ce7150b9202395a482624f09adf9102c7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()) . " | ") . (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })())) . " | ") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "class", array()));
        echo "
[message] ";
        // line 2
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 3, $this->getSourceContext()); })()), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "class", array());
            echo ": ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "message", array());
            echo "
";
            // line 5
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "TwigBundle:Exception:exception.txt.twig", 5)->display(array("exception" => $context["e"]));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_12da5a85b248863bebe2033cd79f9bbd2ad41b8db761c2feb90b7c017bcd6c4f->leave($__internal_12da5a85b248863bebe2033cd79f9bbd2ad41b8db761c2feb90b7c017bcd6c4f_prof);

        
        $__internal_a25c5eade072bff7af359b26e7277ce7150b9202395a482624f09adf9102c7fb->leave($__internal_a25c5eade072bff7af359b26e7277ce7150b9202395a482624f09adf9102c7fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}

{% endfor %}
", "TwigBundle:Exception:exception.txt.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.txt.twig");
    }
}
