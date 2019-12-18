<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_72fbae1696ac58c03fa8ec1a60be515abb9db84984c935f47aec666090ff5242 extends Twig_Template
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
        $__internal_bdd3040c0b23328cd42c7f4397720d56bc3eb459cd119a464ec4623c7d4986f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd3040c0b23328cd42c7f4397720d56bc3eb459cd119a464ec4623c7d4986f9->enter($__internal_bdd3040c0b23328cd42c7f4397720d56bc3eb459cd119a464ec4623c7d4986f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_695ef9dacfcfc4da2d6404ca08f8dd5d87ee2f6d7636c2e556a4d96111dc631d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695ef9dacfcfc4da2d6404ca08f8dd5d87ee2f6d7636c2e556a4d96111dc631d->enter($__internal_695ef9dacfcfc4da2d6404ca08f8dd5d87ee2f6d7636c2e556a4d96111dc631d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bdd3040c0b23328cd42c7f4397720d56bc3eb459cd119a464ec4623c7d4986f9->leave($__internal_bdd3040c0b23328cd42c7f4397720d56bc3eb459cd119a464ec4623c7d4986f9_prof);

        
        $__internal_695ef9dacfcfc4da2d6404ca08f8dd5d87ee2f6d7636c2e556a4d96111dc631d->leave($__internal_695ef9dacfcfc4da2d6404ca08f8dd5d87ee2f6d7636c2e556a4d96111dc631d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
