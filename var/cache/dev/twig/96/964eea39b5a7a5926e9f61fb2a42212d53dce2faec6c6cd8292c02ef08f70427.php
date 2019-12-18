<?php

/* :admin:index.html.twig */
class __TwigTemplate_9f7dc82c4d5c0a140617543c6f2bb4c8194392dbe2e284de8e9482e93f4f3877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:index.html.twig", 1);
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
        $__internal_74238fb7cf1039dda498743ad1347787b914f1ee9744cf4452c40bce0ed2b1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74238fb7cf1039dda498743ad1347787b914f1ee9744cf4452c40bce0ed2b1d1->enter($__internal_74238fb7cf1039dda498743ad1347787b914f1ee9744cf4452c40bce0ed2b1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $__internal_f7c75036eb266ce8a72cbae6b509d9e2946cbd73ca5f571b3d26c60aeeb33d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c75036eb266ce8a72cbae6b509d9e2946cbd73ca5f571b3d26c60aeeb33d03->enter($__internal_f7c75036eb266ce8a72cbae6b509d9e2946cbd73ca5f571b3d26c60aeeb33d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74238fb7cf1039dda498743ad1347787b914f1ee9744cf4452c40bce0ed2b1d1->leave($__internal_74238fb7cf1039dda498743ad1347787b914f1ee9744cf4452c40bce0ed2b1d1_prof);

        
        $__internal_f7c75036eb266ce8a72cbae6b509d9e2946cbd73ca5f571b3d26c60aeeb33d03->leave($__internal_f7c75036eb266ce8a72cbae6b509d9e2946cbd73ca5f571b3d26c60aeeb33d03_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e432e5342ccfdd76eb6f0dd018e4e5773de4a3b5cb218e0c75e7ba6cbaa5e091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e432e5342ccfdd76eb6f0dd018e4e5773de4a3b5cb218e0c75e7ba6cbaa5e091->enter($__internal_e432e5342ccfdd76eb6f0dd018e4e5773de4a3b5cb218e0c75e7ba6cbaa5e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2867fab5de96bddfde88672b1c96920cc57c1b89d89256bfdb83fd68feb47fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2867fab5de96bddfde88672b1c96920cc57c1b89d89256bfdb83fd68feb47fee->enter($__internal_2867fab5de96bddfde88672b1c96920cc57c1b89d89256bfdb83fd68feb47fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2867fab5de96bddfde88672b1c96920cc57c1b89d89256bfdb83fd68feb47fee->leave($__internal_2867fab5de96bddfde88672b1c96920cc57c1b89d89256bfdb83fd68feb47fee_prof);

        
        $__internal_e432e5342ccfdd76eb6f0dd018e4e5773de4a3b5cb218e0c75e7ba6cbaa5e091->leave($__internal_e432e5342ccfdd76eb6f0dd018e4e5773de4a3b5cb218e0c75e7ba6cbaa5e091_prof);

    }

    public function getTemplateName()
    {
        return ":admin:index.html.twig";
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
{% endblock %}", ":admin:index.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/app/Resources/views/admin/index.html.twig");
    }
}
