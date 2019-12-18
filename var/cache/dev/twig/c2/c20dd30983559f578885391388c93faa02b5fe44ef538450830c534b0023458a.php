<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d546872be2c7b153474595d43d705426aba2c0de8c23b4c8af7a6b139e323284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf973d5821099b88eb449d1707e1598befa98e382c7b0a971236f69f4cfd6933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf973d5821099b88eb449d1707e1598befa98e382c7b0a971236f69f4cfd6933->enter($__internal_cf973d5821099b88eb449d1707e1598befa98e382c7b0a971236f69f4cfd6933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b3082a8b6796476a59b896dd4b6e7d6ecb0f7c212dc3ed5ead6ac5d68cca13b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3082a8b6796476a59b896dd4b6e7d6ecb0f7c212dc3ed5ead6ac5d68cca13b9->enter($__internal_b3082a8b6796476a59b896dd4b6e7d6ecb0f7c212dc3ed5ead6ac5d68cca13b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf973d5821099b88eb449d1707e1598befa98e382c7b0a971236f69f4cfd6933->leave($__internal_cf973d5821099b88eb449d1707e1598befa98e382c7b0a971236f69f4cfd6933_prof);

        
        $__internal_b3082a8b6796476a59b896dd4b6e7d6ecb0f7c212dc3ed5ead6ac5d68cca13b9->leave($__internal_b3082a8b6796476a59b896dd4b6e7d6ecb0f7c212dc3ed5ead6ac5d68cca13b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_44234624e6b4ca534da23836e527b46bf827605845008b0c198fd807411b2ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44234624e6b4ca534da23836e527b46bf827605845008b0c198fd807411b2ed5->enter($__internal_44234624e6b4ca534da23836e527b46bf827605845008b0c198fd807411b2ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9a8341be41a647bf39c88d76ac8894439a0dc6c66190d551294829f2980730be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8341be41a647bf39c88d76ac8894439a0dc6c66190d551294829f2980730be->enter($__internal_9a8341be41a647bf39c88d76ac8894439a0dc6c66190d551294829f2980730be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a8341be41a647bf39c88d76ac8894439a0dc6c66190d551294829f2980730be->leave($__internal_9a8341be41a647bf39c88d76ac8894439a0dc6c66190d551294829f2980730be_prof);

        
        $__internal_44234624e6b4ca534da23836e527b46bf827605845008b0c198fd807411b2ed5->leave($__internal_44234624e6b4ca534da23836e527b46bf827605845008b0c198fd807411b2ed5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e8e2e02f60fe0035c7cd0dca889013708bec5284bdb83d43331037d8900e48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8e2e02f60fe0035c7cd0dca889013708bec5284bdb83d43331037d8900e48d->enter($__internal_0e8e2e02f60fe0035c7cd0dca889013708bec5284bdb83d43331037d8900e48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ce44c156e7c2655d28cdb9948d0c406ed25f1cf313771e1293fc4d5bdbaed1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce44c156e7c2655d28cdb9948d0c406ed25f1cf313771e1293fc4d5bdbaed1a->enter($__internal_8ce44c156e7c2655d28cdb9948d0c406ed25f1cf313771e1293fc4d5bdbaed1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ce44c156e7c2655d28cdb9948d0c406ed25f1cf313771e1293fc4d5bdbaed1a->leave($__internal_8ce44c156e7c2655d28cdb9948d0c406ed25f1cf313771e1293fc4d5bdbaed1a_prof);

        
        $__internal_0e8e2e02f60fe0035c7cd0dca889013708bec5284bdb83d43331037d8900e48d->leave($__internal_0e8e2e02f60fe0035c7cd0dca889013708bec5284bdb83d43331037d8900e48d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5fb22e7f92cbdc42b6bfc376e3bcc70ffce990b503a1a812ea8be71ec37ba096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb22e7f92cbdc42b6bfc376e3bcc70ffce990b503a1a812ea8be71ec37ba096->enter($__internal_5fb22e7f92cbdc42b6bfc376e3bcc70ffce990b503a1a812ea8be71ec37ba096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_161786d2a406c019ca3edf51acf161542e2bd95195d02befd417687db2576f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161786d2a406c019ca3edf51acf161542e2bd95195d02befd417687db2576f95->enter($__internal_161786d2a406c019ca3edf51acf161542e2bd95195d02befd417687db2576f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_161786d2a406c019ca3edf51acf161542e2bd95195d02befd417687db2576f95->leave($__internal_161786d2a406c019ca3edf51acf161542e2bd95195d02befd417687db2576f95_prof);

        
        $__internal_5fb22e7f92cbdc42b6bfc376e3bcc70ffce990b503a1a812ea8be71ec37ba096->leave($__internal_5fb22e7f92cbdc42b6bfc376e3bcc70ffce990b503a1a812ea8be71ec37ba096_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
