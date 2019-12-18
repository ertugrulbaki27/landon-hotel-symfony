<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e62df840553307fb2f8ad526d3be815783eb95ee8eb4bd5f15a0ede703e4ca9d extends Twig_Template
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
        $__internal_3408c533afab527fc4eb96fb9444bbbc83d7dde1c5164b350ea52b1f4541619b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3408c533afab527fc4eb96fb9444bbbc83d7dde1c5164b350ea52b1f4541619b->enter($__internal_3408c533afab527fc4eb96fb9444bbbc83d7dde1c5164b350ea52b1f4541619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_710373f7535d49397fbf1fe71dbdbc1146a25e5d70b4f6fc4597798189276b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710373f7535d49397fbf1fe71dbdbc1146a25e5d70b4f6fc4597798189276b15->enter($__internal_710373f7535d49397fbf1fe71dbdbc1146a25e5d70b4f6fc4597798189276b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3408c533afab527fc4eb96fb9444bbbc83d7dde1c5164b350ea52b1f4541619b->leave($__internal_3408c533afab527fc4eb96fb9444bbbc83d7dde1c5164b350ea52b1f4541619b_prof);

        
        $__internal_710373f7535d49397fbf1fe71dbdbc1146a25e5d70b4f6fc4597798189276b15->leave($__internal_710373f7535d49397fbf1fe71dbdbc1146a25e5d70b4f6fc4597798189276b15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
