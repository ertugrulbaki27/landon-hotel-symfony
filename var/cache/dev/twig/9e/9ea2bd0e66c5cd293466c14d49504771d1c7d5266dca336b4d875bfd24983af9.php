<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bc196362d9067cbbc00c92949601a73adb459451730cc79cb9b009e169d8c687 extends Twig_Template
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
        $__internal_8f1680b5fd4c88a8ad6c320543278d4581689eeddd89719e03e18975ae492f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1680b5fd4c88a8ad6c320543278d4581689eeddd89719e03e18975ae492f56->enter($__internal_8f1680b5fd4c88a8ad6c320543278d4581689eeddd89719e03e18975ae492f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6e96c69e6b031754f471c5cbace085dd6ee8767166a2e25b9ef549ce0f434d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e96c69e6b031754f471c5cbace085dd6ee8767166a2e25b9ef549ce0f434d5d->enter($__internal_6e96c69e6b031754f471c5cbace085dd6ee8767166a2e25b9ef549ce0f434d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8f1680b5fd4c88a8ad6c320543278d4581689eeddd89719e03e18975ae492f56->leave($__internal_8f1680b5fd4c88a8ad6c320543278d4581689eeddd89719e03e18975ae492f56_prof);

        
        $__internal_6e96c69e6b031754f471c5cbace085dd6ee8767166a2e25b9ef549ce0f434d5d->leave($__internal_6e96c69e6b031754f471c5cbace085dd6ee8767166a2e25b9ef549ce0f434d5d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
