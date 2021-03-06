<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9e293ee8fe657d9f2835399624d05f7faf76313bfc54009a8405e143c40ce544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e23263ea04b8660c1e833115805d1cb77eac790aa52829a1d63b0fd3b0b6ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e23263ea04b8660c1e833115805d1cb77eac790aa52829a1d63b0fd3b0b6ae1->enter($__internal_9e23263ea04b8660c1e833115805d1cb77eac790aa52829a1d63b0fd3b0b6ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e70b5e9a5c4458886102e55abdaf7c73e69b3d96c6d59a826d3d14b3e3843f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70b5e9a5c4458886102e55abdaf7c73e69b3d96c6d59a826d3d14b3e3843f92->enter($__internal_e70b5e9a5c4458886102e55abdaf7c73e69b3d96c6d59a826d3d14b3e3843f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e23263ea04b8660c1e833115805d1cb77eac790aa52829a1d63b0fd3b0b6ae1->leave($__internal_9e23263ea04b8660c1e833115805d1cb77eac790aa52829a1d63b0fd3b0b6ae1_prof);

        
        $__internal_e70b5e9a5c4458886102e55abdaf7c73e69b3d96c6d59a826d3d14b3e3843f92->leave($__internal_e70b5e9a5c4458886102e55abdaf7c73e69b3d96c6d59a826d3d14b3e3843f92_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_87cbf8cd8a88ca4d3c792836e4f37905adf4c9130f4936bb6f0b6609abfe31e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87cbf8cd8a88ca4d3c792836e4f37905adf4c9130f4936bb6f0b6609abfe31e6->enter($__internal_87cbf8cd8a88ca4d3c792836e4f37905adf4c9130f4936bb6f0b6609abfe31e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_34505e6397c0216ddc6ff82d8490f7b056ab76626af555cb07dcb23abca96634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34505e6397c0216ddc6ff82d8490f7b056ab76626af555cb07dcb23abca96634->enter($__internal_34505e6397c0216ddc6ff82d8490f7b056ab76626af555cb07dcb23abca96634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_34505e6397c0216ddc6ff82d8490f7b056ab76626af555cb07dcb23abca96634->leave($__internal_34505e6397c0216ddc6ff82d8490f7b056ab76626af555cb07dcb23abca96634_prof);

        
        $__internal_87cbf8cd8a88ca4d3c792836e4f37905adf4c9130f4936bb6f0b6609abfe31e6->leave($__internal_87cbf8cd8a88ca4d3c792836e4f37905adf4c9130f4936bb6f0b6609abfe31e6_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7692f22a292ade9623b29c545736cd951baa11dd31ac3694a8b8f5a56cf2eb8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7692f22a292ade9623b29c545736cd951baa11dd31ac3694a8b8f5a56cf2eb8e->enter($__internal_7692f22a292ade9623b29c545736cd951baa11dd31ac3694a8b8f5a56cf2eb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_be3e6cf60faa423ff1fe698d6f750de31a3b3b60ffd6545f9e199e0df85de514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3e6cf60faa423ff1fe698d6f750de31a3b3b60ffd6545f9e199e0df85de514->enter($__internal_be3e6cf60faa423ff1fe698d6f750de31a3b3b60ffd6545f9e199e0df85de514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_be3e6cf60faa423ff1fe698d6f750de31a3b3b60ffd6545f9e199e0df85de514->leave($__internal_be3e6cf60faa423ff1fe698d6f750de31a3b3b60ffd6545f9e199e0df85de514_prof);

        
        $__internal_7692f22a292ade9623b29c545736cd951baa11dd31ac3694a8b8f5a56cf2eb8e->leave($__internal_7692f22a292ade9623b29c545736cd951baa11dd31ac3694a8b8f5a56cf2eb8e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
