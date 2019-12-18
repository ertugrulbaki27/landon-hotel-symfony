<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_01771ba1a8274ac8e6d7c356c8a0a9711c8761465eb517892a47e130a8e5458b extends Twig_Template
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
        $__internal_db2a7033cb5dc6489bc9fec60b5f084665761cdbf0659de91ce161cf63aa6f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2a7033cb5dc6489bc9fec60b5f084665761cdbf0659de91ce161cf63aa6f3e->enter($__internal_db2a7033cb5dc6489bc9fec60b5f084665761cdbf0659de91ce161cf63aa6f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ac9c9a8086d529a8d6b094902aadf36dfce02fbe7cfe3198eff5569444cc2314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9c9a8086d529a8d6b094902aadf36dfce02fbe7cfe3198eff5569444cc2314->enter($__internal_ac9c9a8086d529a8d6b094902aadf36dfce02fbe7cfe3198eff5569444cc2314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_db2a7033cb5dc6489bc9fec60b5f084665761cdbf0659de91ce161cf63aa6f3e->leave($__internal_db2a7033cb5dc6489bc9fec60b5f084665761cdbf0659de91ce161cf63aa6f3e_prof);

        
        $__internal_ac9c9a8086d529a8d6b094902aadf36dfce02fbe7cfe3198eff5569444cc2314->leave($__internal_ac9c9a8086d529a8d6b094902aadf36dfce02fbe7cfe3198eff5569444cc2314_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
