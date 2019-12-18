<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_205af2cb6878d35ddc2f5f8dfa57f872a67ef26c41b90a92bf56a17fbafc94c3 extends Twig_Template
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
        $__internal_95008e3a924a760c94d32fc6494547a263d4748f8e006291dd4c57110ae47ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95008e3a924a760c94d32fc6494547a263d4748f8e006291dd4c57110ae47ec7->enter($__internal_95008e3a924a760c94d32fc6494547a263d4748f8e006291dd4c57110ae47ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_74f8b72a9bf7c7af54650202cbd9b910f105e420519531d3e6094159abbcebf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f8b72a9bf7c7af54650202cbd9b910f105e420519531d3e6094159abbcebf2->enter($__internal_74f8b72a9bf7c7af54650202cbd9b910f105e420519531d3e6094159abbcebf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_95008e3a924a760c94d32fc6494547a263d4748f8e006291dd4c57110ae47ec7->leave($__internal_95008e3a924a760c94d32fc6494547a263d4748f8e006291dd4c57110ae47ec7_prof);

        
        $__internal_74f8b72a9bf7c7af54650202cbd9b910f105e420519531d3e6094159abbcebf2->leave($__internal_74f8b72a9bf7c7af54650202cbd9b910f105e420519531d3e6094159abbcebf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
