<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_5fe3cce8f54b3d8c4072694a215d6108e7468b63c906708dae7bf96804e28cef extends Twig_Template
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
        $__internal_f9a7ecbdfe715ef3c2a49f8cadd36a9631cdb0614e4aa3ae5383d50a15f63a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a7ecbdfe715ef3c2a49f8cadd36a9631cdb0614e4aa3ae5383d50a15f63a99->enter($__internal_f9a7ecbdfe715ef3c2a49f8cadd36a9631cdb0614e4aa3ae5383d50a15f63a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        $__internal_13ebc5deda172e0ae619a5149cc213ed1ddf7cd587e22b2ff281147a0caed4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ebc5deda172e0ae619a5149cc213ed1ddf7cd587e22b2ff281147a0caed4be->enter($__internal_13ebc5deda172e0ae619a5149cc213ed1ddf7cd587e22b2ff281147a0caed4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 1, $this->getSourceContext()); })()), "function", array())) {
            // line 2
            echo "    at ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "class", array()) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "type", array())) . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 2, $this->getSourceContext()); })()), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "file", array());
            echo " line ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new Twig_Error_Runtime('Variable "trace" does not exist.', 7, $this->getSourceContext()); })()), "line", array());
            echo "
";
        }
        
        $__internal_f9a7ecbdfe715ef3c2a49f8cadd36a9631cdb0614e4aa3ae5383d50a15f63a99->leave($__internal_f9a7ecbdfe715ef3c2a49f8cadd36a9631cdb0614e4aa3ae5383d50a15f63a99_prof);

        
        $__internal_13ebc5deda172e0ae619a5149cc213ed1ddf7cd587e22b2ff281147a0caed4be->leave($__internal_13ebc5deda172e0ae619a5149cc213ed1ddf7cd587e22b2ff281147a0caed4be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "TwigBundle:Exception:trace.txt.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
