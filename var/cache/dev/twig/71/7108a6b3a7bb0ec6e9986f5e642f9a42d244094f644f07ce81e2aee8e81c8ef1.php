<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_25599602404de2ef7e53e5c85ab06bd0598871f2bee8696dc70dbd7cf32ddfd5 extends Twig_Template
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
        $__internal_fed6c40a966fb9f5e7b4ee64fce12ba01ed3a036d7c139ccb3b1b8bc8b5b3f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed6c40a966fb9f5e7b4ee64fce12ba01ed3a036d7c139ccb3b1b8bc8b5b3f23->enter($__internal_fed6c40a966fb9f5e7b4ee64fce12ba01ed3a036d7c139ccb3b1b8bc8b5b3f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9f532650fa40b38bfa70964a4d10c119cc2286584ec694718d9f66abe02cc986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f532650fa40b38bfa70964a4d10c119cc2286584ec694718d9f66abe02cc986->enter($__internal_9f532650fa40b38bfa70964a4d10c119cc2286584ec694718d9f66abe02cc986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_fed6c40a966fb9f5e7b4ee64fce12ba01ed3a036d7c139ccb3b1b8bc8b5b3f23->leave($__internal_fed6c40a966fb9f5e7b4ee64fce12ba01ed3a036d7c139ccb3b1b8bc8b5b3f23_prof);

        
        $__internal_9f532650fa40b38bfa70964a4d10c119cc2286584ec694718d9f66abe02cc986->leave($__internal_9f532650fa40b38bfa70964a4d10c119cc2286584ec694718d9f66abe02cc986_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
