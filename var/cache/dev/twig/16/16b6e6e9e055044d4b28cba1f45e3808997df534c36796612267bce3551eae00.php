<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_073f0abed8ce7941892605d5599c256936a77ea583ada2df01482235bab69d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74c66f87f930d5cb02c814cea73bbd25da7c7e750a25fd9a476bb2eb830cfffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c66f87f930d5cb02c814cea73bbd25da7c7e750a25fd9a476bb2eb830cfffb->enter($__internal_74c66f87f930d5cb02c814cea73bbd25da7c7e750a25fd9a476bb2eb830cfffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_342a10111febeb53c7014b3363afb9f1362bb2c28646dd99fe57286e7eac17ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342a10111febeb53c7014b3363afb9f1362bb2c28646dd99fe57286e7eac17ae->enter($__internal_342a10111febeb53c7014b3363afb9f1362bb2c28646dd99fe57286e7eac17ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74c66f87f930d5cb02c814cea73bbd25da7c7e750a25fd9a476bb2eb830cfffb->leave($__internal_74c66f87f930d5cb02c814cea73bbd25da7c7e750a25fd9a476bb2eb830cfffb_prof);

        
        $__internal_342a10111febeb53c7014b3363afb9f1362bb2c28646dd99fe57286e7eac17ae->leave($__internal_342a10111febeb53c7014b3363afb9f1362bb2c28646dd99fe57286e7eac17ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3801755945b70e1452d8b6cf37b3951163b9d50339f1346b0b2dde388a4b7322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3801755945b70e1452d8b6cf37b3951163b9d50339f1346b0b2dde388a4b7322->enter($__internal_3801755945b70e1452d8b6cf37b3951163b9d50339f1346b0b2dde388a4b7322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a21ed6320e0e96446da822c602fa3c266c642a8f906bee55709012f57e099756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21ed6320e0e96446da822c602fa3c266c642a8f906bee55709012f57e099756->enter($__internal_a21ed6320e0e96446da822c602fa3c266c642a8f906bee55709012f57e099756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a21ed6320e0e96446da822c602fa3c266c642a8f906bee55709012f57e099756->leave($__internal_a21ed6320e0e96446da822c602fa3c266c642a8f906bee55709012f57e099756_prof);

        
        $__internal_3801755945b70e1452d8b6cf37b3951163b9d50339f1346b0b2dde388a4b7322->leave($__internal_3801755945b70e1452d8b6cf37b3951163b9d50339f1346b0b2dde388a4b7322_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_324ac615f725934eb7dee0739f506294b8a99787f25eb648e1c852f83f92825d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324ac615f725934eb7dee0739f506294b8a99787f25eb648e1c852f83f92825d->enter($__internal_324ac615f725934eb7dee0739f506294b8a99787f25eb648e1c852f83f92825d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e57826d78f9f6a1fa0cdaefe9f4eb615accc113f5120c2b8896a70948390affa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57826d78f9f6a1fa0cdaefe9f4eb615accc113f5120c2b8896a70948390affa->enter($__internal_e57826d78f9f6a1fa0cdaefe9f4eb615accc113f5120c2b8896a70948390affa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e57826d78f9f6a1fa0cdaefe9f4eb615accc113f5120c2b8896a70948390affa->leave($__internal_e57826d78f9f6a1fa0cdaefe9f4eb615accc113f5120c2b8896a70948390affa_prof);

        
        $__internal_324ac615f725934eb7dee0739f506294b8a99787f25eb648e1c852f83f92825d->leave($__internal_324ac615f725934eb7dee0739f506294b8a99787f25eb648e1c852f83f92825d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
