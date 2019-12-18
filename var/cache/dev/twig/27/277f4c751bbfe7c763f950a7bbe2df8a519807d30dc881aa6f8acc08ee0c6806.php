<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_86e42c073ae751ec66d3fd557bfe006fedc26b848f1cc1d0bc856a427222e760 extends Twig_Template
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
        $__internal_9e2434c2b563b0149c4b480f00fafaea0cd0d51d62c9f221b05ef93e85270632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2434c2b563b0149c4b480f00fafaea0cd0d51d62c9f221b05ef93e85270632->enter($__internal_9e2434c2b563b0149c4b480f00fafaea0cd0d51d62c9f221b05ef93e85270632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_190b694764edf76ddcc8e23a9f8c389a954e20648406481359aa8a6cf92d2f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190b694764edf76ddcc8e23a9f8c389a954e20648406481359aa8a6cf92d2f1f->enter($__internal_190b694764edf76ddcc8e23a9f8c389a954e20648406481359aa8a6cf92d2f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_9e2434c2b563b0149c4b480f00fafaea0cd0d51d62c9f221b05ef93e85270632->leave($__internal_9e2434c2b563b0149c4b480f00fafaea0cd0d51d62c9f221b05ef93e85270632_prof);

        
        $__internal_190b694764edf76ddcc8e23a9f8c389a954e20648406481359aa8a6cf92d2f1f->leave($__internal_190b694764edf76ddcc8e23a9f8c389a954e20648406481359aa8a6cf92d2f1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
