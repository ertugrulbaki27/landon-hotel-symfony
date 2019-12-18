<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_394f34d7713d3b7446e53ca5b738f12f28221443124a945db90116c1d7c4cf98 extends Twig_Template
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
        $__internal_e0c7ca3038b968a42c630592ab75baf3b21bf9c26cfeffc30aadbc890e9822ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c7ca3038b968a42c630592ab75baf3b21bf9c26cfeffc30aadbc890e9822ad->enter($__internal_e0c7ca3038b968a42c630592ab75baf3b21bf9c26cfeffc30aadbc890e9822ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_dfbf9c05a7b255d21e0ad38671d408f87083c7daaf4527be38bb62536e6f02b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbf9c05a7b255d21e0ad38671d408f87083c7daaf4527be38bb62536e6f02b2->enter($__internal_dfbf9c05a7b255d21e0ad38671d408f87083c7daaf4527be38bb62536e6f02b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 1, $this->getSourceContext()); })()), "function", array())) {
            // line 2
            echo "    at ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "class", array()) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "type", array())) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "file", array());
            echo " line ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "line", array());
            echo "
";
        }
        
        $__internal_e0c7ca3038b968a42c630592ab75baf3b21bf9c26cfeffc30aadbc890e9822ad->leave($__internal_e0c7ca3038b968a42c630592ab75baf3b21bf9c26cfeffc30aadbc890e9822ad_prof);

        
        $__internal_dfbf9c05a7b255d21e0ad38671d408f87083c7daaf4527be38bb62536e6f02b2->leave($__internal_dfbf9c05a7b255d21e0ad38671d408f87083c7daaf4527be38bb62536e6f02b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
