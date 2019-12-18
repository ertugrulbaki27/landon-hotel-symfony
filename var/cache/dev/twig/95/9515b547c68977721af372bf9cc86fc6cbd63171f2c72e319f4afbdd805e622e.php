<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_defce3a3be38775becb65cb9acdbae04f82ec24ffef1a55fcbbdb5a0bb9cee91 extends Twig_Template
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
        $__internal_6ade8db23b47636f8ad1eca56062109ee618dcd8441ebfc29a83deb25389e3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ade8db23b47636f8ad1eca56062109ee618dcd8441ebfc29a83deb25389e3c1->enter($__internal_6ade8db23b47636f8ad1eca56062109ee618dcd8441ebfc29a83deb25389e3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_244af43f3d97b3f6a1b9cb54aab5d2d4faf5f1952e915c94f63105fbb7fa850e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244af43f3d97b3f6a1b9cb54aab5d2d4faf5f1952e915c94f63105fbb7fa850e->enter($__internal_244af43f3d97b3f6a1b9cb54aab5d2d4faf5f1952e915c94f63105fbb7fa850e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_6ade8db23b47636f8ad1eca56062109ee618dcd8441ebfc29a83deb25389e3c1->leave($__internal_6ade8db23b47636f8ad1eca56062109ee618dcd8441ebfc29a83deb25389e3c1_prof);

        
        $__internal_244af43f3d97b3f6a1b9cb54aab5d2d4faf5f1952e915c94f63105fbb7fa850e->leave($__internal_244af43f3d97b3f6a1b9cb54aab5d2d4faf5f1952e915c94f63105fbb7fa850e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
