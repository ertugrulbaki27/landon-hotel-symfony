<?php

/* admin/index.html.twig */
class __TwigTemplate_15a2537461c297ec34a09a5c1eb237cbb4577a8ca1d4e01129b596873046d4c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7da67dac147ebb8cc81377ee0e441280624db39da3c455b15789bf13bbd430b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da67dac147ebb8cc81377ee0e441280624db39da3c455b15789bf13bbd430b1->enter($__internal_7da67dac147ebb8cc81377ee0e441280624db39da3c455b15789bf13bbd430b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_1dad6aa03b109cb652127bc8adedb8cded55df57c4afff9a403ec45658a99b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dad6aa03b109cb652127bc8adedb8cded55df57c4afff9a403ec45658a99b1f->enter($__internal_1dad6aa03b109cb652127bc8adedb8cded55df57c4afff9a403ec45658a99b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7da67dac147ebb8cc81377ee0e441280624db39da3c455b15789bf13bbd430b1->leave($__internal_7da67dac147ebb8cc81377ee0e441280624db39da3c455b15789bf13bbd430b1_prof);

        
        $__internal_1dad6aa03b109cb652127bc8adedb8cded55df57c4afff9a403ec45658a99b1f->leave($__internal_1dad6aa03b109cb652127bc8adedb8cded55df57c4afff9a403ec45658a99b1f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_76e67562dedf8e1323ebd762e5b2ac0520f55d388f1e4f19ae1b6d796e1d66ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e67562dedf8e1323ebd762e5b2ac0520f55d388f1e4f19ae1b6d796e1d66ef->enter($__internal_76e67562dedf8e1323ebd762e5b2ac0520f55d388f1e4f19ae1b6d796e1d66ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fc54c91ea46d3adae028265a284b9f4899a1555036e505aa59b1e405980c1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc54c91ea46d3adae028265a284b9f4899a1555036e505aa59b1e405980c1b9->enter($__internal_1fc54c91ea46d3adae028265a284b9f4899a1555036e505aa59b1e405980c1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>
";
        
        $__internal_1fc54c91ea46d3adae028265a284b9f4899a1555036e505aa59b1e405980c1b9->leave($__internal_1fc54c91ea46d3adae028265a284b9f4899a1555036e505aa59b1e405980c1b9_prof);

        
        $__internal_76e67562dedf8e1323ebd762e5b2ac0520f55d388f1e4f19ae1b6d796e1d66ef->leave($__internal_76e67562dedf8e1323ebd762e5b2ac0520f55d388f1e4f19ae1b6d796e1d66ef_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>
{% endblock %}", "admin/index.html.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/app/Resources/views/admin/index.html.twig");
    }
}
