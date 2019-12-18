<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2d33d45a532e23a7fe3c85949c6025cd3c608aa556694bbe34a03e9e6ff27007 extends Twig_Template
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
        $__internal_7e43784ea27c484b6fba6d68c7f2e25e57bd535d92f844c080ca24ecd52f80b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e43784ea27c484b6fba6d68c7f2e25e57bd535d92f844c080ca24ecd52f80b3->enter($__internal_7e43784ea27c484b6fba6d68c7f2e25e57bd535d92f844c080ca24ecd52f80b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c57e8e80914b3d47dda5d800d54a46adcaefb8e50f77fcf24e03630c1c50979e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57e8e80914b3d47dda5d800d54a46adcaefb8e50f77fcf24e03630c1c50979e->enter($__internal_c57e8e80914b3d47dda5d800d54a46adcaefb8e50f77fcf24e03630c1c50979e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_7e43784ea27c484b6fba6d68c7f2e25e57bd535d92f844c080ca24ecd52f80b3->leave($__internal_7e43784ea27c484b6fba6d68c7f2e25e57bd535d92f844c080ca24ecd52f80b3_prof);

        
        $__internal_c57e8e80914b3d47dda5d800d54a46adcaefb8e50f77fcf24e03630c1c50979e->leave($__internal_c57e8e80914b3d47dda5d800d54a46adcaefb8e50f77fcf24e03630c1c50979e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
", "@Twig/Exception/traces.txt.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
