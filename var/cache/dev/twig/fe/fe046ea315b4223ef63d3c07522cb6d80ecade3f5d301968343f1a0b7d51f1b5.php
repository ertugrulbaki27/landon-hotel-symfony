<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e27820976d90125beeebfc28fd18d8a4935c3ea30556e00cf9a345af44545eda extends Twig_Template
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
        $__internal_878654bf917363a8f3b5af9598abe1b66022b612e94b03d088d139915a0628d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878654bf917363a8f3b5af9598abe1b66022b612e94b03d088d139915a0628d5->enter($__internal_878654bf917363a8f3b5af9598abe1b66022b612e94b03d088d139915a0628d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c24cb2b31a9b5fc2d4fcab0ce288a268cdddefb5c1dda4b86ab30556480ca557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24cb2b31a9b5fc2d4fcab0ce288a268cdddefb5c1dda4b86ab30556480ca557->enter($__internal_c24cb2b31a9b5fc2d4fcab0ce288a268cdddefb5c1dda4b86ab30556480ca557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_878654bf917363a8f3b5af9598abe1b66022b612e94b03d088d139915a0628d5->leave($__internal_878654bf917363a8f3b5af9598abe1b66022b612e94b03d088d139915a0628d5_prof);

        
        $__internal_c24cb2b31a9b5fc2d4fcab0ce288a268cdddefb5c1dda4b86ab30556480ca557->leave($__internal_c24cb2b31a9b5fc2d4fcab0ce288a268cdddefb5c1dda4b86ab30556480ca557_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
