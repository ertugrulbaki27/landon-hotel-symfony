<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3cc17bb177ae842f788c8ce940cf863baa811f85f105d9f03ca8ab1df6bd747e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bb6656cd7c30fd69d26904814481152d7d4dad16c44d38a8f8e9a82cdc7e317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb6656cd7c30fd69d26904814481152d7d4dad16c44d38a8f8e9a82cdc7e317->enter($__internal_7bb6656cd7c30fd69d26904814481152d7d4dad16c44d38a8f8e9a82cdc7e317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4200aa3fe90e9b9a95118fbd2f0a784c201d9448021dd25e8969a6dece168ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4200aa3fe90e9b9a95118fbd2f0a784c201d9448021dd25e8969a6dece168ce0->enter($__internal_4200aa3fe90e9b9a95118fbd2f0a784c201d9448021dd25e8969a6dece168ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bb6656cd7c30fd69d26904814481152d7d4dad16c44d38a8f8e9a82cdc7e317->leave($__internal_7bb6656cd7c30fd69d26904814481152d7d4dad16c44d38a8f8e9a82cdc7e317_prof);

        
        $__internal_4200aa3fe90e9b9a95118fbd2f0a784c201d9448021dd25e8969a6dece168ce0->leave($__internal_4200aa3fe90e9b9a95118fbd2f0a784c201d9448021dd25e8969a6dece168ce0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a689ce7eced8ce61018a15df7491f0eeda8ba51da86edc2234fe965d3555ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a689ce7eced8ce61018a15df7491f0eeda8ba51da86edc2234fe965d3555ddf->enter($__internal_2a689ce7eced8ce61018a15df7491f0eeda8ba51da86edc2234fe965d3555ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_790cac8af2ec8c8515878904cdcc14712e39c7b2f22edbac8217fc3ca37ecef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790cac8af2ec8c8515878904cdcc14712e39c7b2f22edbac8217fc3ca37ecef2->enter($__internal_790cac8af2ec8c8515878904cdcc14712e39c7b2f22edbac8217fc3ca37ecef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_790cac8af2ec8c8515878904cdcc14712e39c7b2f22edbac8217fc3ca37ecef2->leave($__internal_790cac8af2ec8c8515878904cdcc14712e39c7b2f22edbac8217fc3ca37ecef2_prof);

        
        $__internal_2a689ce7eced8ce61018a15df7491f0eeda8ba51da86edc2234fe965d3555ddf->leave($__internal_2a689ce7eced8ce61018a15df7491f0eeda8ba51da86edc2234fe965d3555ddf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f6d8b784d418d4f0f19f7f7fe24b8f30efd7628fcbff052b65887766b92461e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6d8b784d418d4f0f19f7f7fe24b8f30efd7628fcbff052b65887766b92461e->enter($__internal_5f6d8b784d418d4f0f19f7f7fe24b8f30efd7628fcbff052b65887766b92461e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_147fc0505984ea677046b45eaf5b7f1e451d881577a4e3d1bce70671b48c9059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147fc0505984ea677046b45eaf5b7f1e451d881577a4e3d1bce70671b48c9059->enter($__internal_147fc0505984ea677046b45eaf5b7f1e451d881577a4e3d1bce70671b48c9059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_147fc0505984ea677046b45eaf5b7f1e451d881577a4e3d1bce70671b48c9059->leave($__internal_147fc0505984ea677046b45eaf5b7f1e451d881577a4e3d1bce70671b48c9059_prof);

        
        $__internal_5f6d8b784d418d4f0f19f7f7fe24b8f30efd7628fcbff052b65887766b92461e->leave($__internal_5f6d8b784d418d4f0f19f7f7fe24b8f30efd7628fcbff052b65887766b92461e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
