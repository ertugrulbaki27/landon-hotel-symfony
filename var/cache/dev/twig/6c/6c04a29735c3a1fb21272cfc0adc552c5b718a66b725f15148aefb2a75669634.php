<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ea2ce32e1a345ef26c5ad56ec2bb325808fe2c534d8fd35eb7aacf37cf658a5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94a65d2a489dccd1ef4c6ba479085e0cd3b3a293d5f1fae7bd5f3325672c4096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a65d2a489dccd1ef4c6ba479085e0cd3b3a293d5f1fae7bd5f3325672c4096->enter($__internal_94a65d2a489dccd1ef4c6ba479085e0cd3b3a293d5f1fae7bd5f3325672c4096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_71c5179b665e97b9442bd059047a518fc0ba1db8b1e24295c05e9084f5a6720d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c5179b665e97b9442bd059047a518fc0ba1db8b1e24295c05e9084f5a6720d->enter($__internal_71c5179b665e97b9442bd059047a518fc0ba1db8b1e24295c05e9084f5a6720d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_94a65d2a489dccd1ef4c6ba479085e0cd3b3a293d5f1fae7bd5f3325672c4096->leave($__internal_94a65d2a489dccd1ef4c6ba479085e0cd3b3a293d5f1fae7bd5f3325672c4096_prof);

        
        $__internal_71c5179b665e97b9442bd059047a518fc0ba1db8b1e24295c05e9084f5a6720d->leave($__internal_71c5179b665e97b9442bd059047a518fc0ba1db8b1e24295c05e9084f5a6720d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_48126b7efe9732a73401feac05f2f7895d9b4dff85aaec25549c91575fc0e76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48126b7efe9732a73401feac05f2f7895d9b4dff85aaec25549c91575fc0e76d->enter($__internal_48126b7efe9732a73401feac05f2f7895d9b4dff85aaec25549c91575fc0e76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2cb36836d1db613bd41fa462981cedecf02019f1acf6f64317da355b1b7ab814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb36836d1db613bd41fa462981cedecf02019f1acf6f64317da355b1b7ab814->enter($__internal_2cb36836d1db613bd41fa462981cedecf02019f1acf6f64317da355b1b7ab814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2cb36836d1db613bd41fa462981cedecf02019f1acf6f64317da355b1b7ab814->leave($__internal_2cb36836d1db613bd41fa462981cedecf02019f1acf6f64317da355b1b7ab814_prof);

        
        $__internal_48126b7efe9732a73401feac05f2f7895d9b4dff85aaec25549c91575fc0e76d->leave($__internal_48126b7efe9732a73401feac05f2f7895d9b4dff85aaec25549c91575fc0e76d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
