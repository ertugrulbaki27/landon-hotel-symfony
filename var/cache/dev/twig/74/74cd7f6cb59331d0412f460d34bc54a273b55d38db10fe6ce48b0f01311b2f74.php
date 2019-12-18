<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_276bbc11d7385a3281bbdbe927b4d81ada6012294ae0172b7bb11df03ece1692 extends Twig_Template
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
        $__internal_0925065196c1e5d851d4510d7649a7a4b2b34b6dfa5bcf11808238ee6111c198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0925065196c1e5d851d4510d7649a7a4b2b34b6dfa5bcf11808238ee6111c198->enter($__internal_0925065196c1e5d851d4510d7649a7a4b2b34b6dfa5bcf11808238ee6111c198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9449ab6f4275e6d69d9d186793b40818fc03465cec0d2e630e3655ad3044ec0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9449ab6f4275e6d69d9d186793b40818fc03465cec0d2e630e3655ad3044ec0e->enter($__internal_9449ab6f4275e6d69d9d186793b40818fc03465cec0d2e630e3655ad3044ec0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0925065196c1e5d851d4510d7649a7a4b2b34b6dfa5bcf11808238ee6111c198->leave($__internal_0925065196c1e5d851d4510d7649a7a4b2b34b6dfa5bcf11808238ee6111c198_prof);

        
        $__internal_9449ab6f4275e6d69d9d186793b40818fc03465cec0d2e630e3655ad3044ec0e->leave($__internal_9449ab6f4275e6d69d9d186793b40818fc03465cec0d2e630e3655ad3044ec0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
