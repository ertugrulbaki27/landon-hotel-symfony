<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6d78a800a8f48f61ae325d80287a3272ffeac0b4a7480ff09cd98596cb736401 extends Twig_Template
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
        $__internal_8554032a4e8b6905be613886da56d1c4bac47b871c62e45c1a8e0c039dd6b2bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8554032a4e8b6905be613886da56d1c4bac47b871c62e45c1a8e0c039dd6b2bf->enter($__internal_8554032a4e8b6905be613886da56d1c4bac47b871c62e45c1a8e0c039dd6b2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_22ab1895878e8bb1ee9ec3048a9845ff28200d9ee24d96a5e51cf469fd4ec20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ab1895878e8bb1ee9ec3048a9845ff28200d9ee24d96a5e51cf469fd4ec20c->enter($__internal_22ab1895878e8bb1ee9ec3048a9845ff28200d9ee24d96a5e51cf469fd4ec20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_8554032a4e8b6905be613886da56d1c4bac47b871c62e45c1a8e0c039dd6b2bf->leave($__internal_8554032a4e8b6905be613886da56d1c4bac47b871c62e45c1a8e0c039dd6b2bf_prof);

        
        $__internal_22ab1895878e8bb1ee9ec3048a9845ff28200d9ee24d96a5e51cf469fd4ec20c->leave($__internal_22ab1895878e8bb1ee9ec3048a9845ff28200d9ee24d96a5e51cf469fd4ec20c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
