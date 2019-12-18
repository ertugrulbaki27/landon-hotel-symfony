<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e8c6ecec36502abddabdd07405b9e387d92dc3d244ad93020099529fa0b5736a extends Twig_Template
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
        $__internal_6cdb5ad72fed476135e2e359bff483edd47045bb4d2c46f31e420e2ae6856474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdb5ad72fed476135e2e359bff483edd47045bb4d2c46f31e420e2ae6856474->enter($__internal_6cdb5ad72fed476135e2e359bff483edd47045bb4d2c46f31e420e2ae6856474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f679dc72952b85a35d8c9cb87ac9dc02d213b8db69020ed3d2f4cd19ee1c84ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f679dc72952b85a35d8c9cb87ac9dc02d213b8db69020ed3d2f4cd19ee1c84ff->enter($__internal_f679dc72952b85a35d8c9cb87ac9dc02d213b8db69020ed3d2f4cd19ee1c84ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_6cdb5ad72fed476135e2e359bff483edd47045bb4d2c46f31e420e2ae6856474->leave($__internal_6cdb5ad72fed476135e2e359bff483edd47045bb4d2c46f31e420e2ae6856474_prof);

        
        $__internal_f679dc72952b85a35d8c9cb87ac9dc02d213b8db69020ed3d2f4cd19ee1c84ff->leave($__internal_f679dc72952b85a35d8c9cb87ac9dc02d213b8db69020ed3d2f4cd19ee1c84ff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
