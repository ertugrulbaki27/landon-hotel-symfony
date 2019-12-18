<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8c4324c4fc608850cd2d545890b8b517f140c286a594cbb47849ca82cf6bda2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16659fbda540d61f847a184b9d93eff1bf20719f58fa7ae7dc01ed84a4e29e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16659fbda540d61f847a184b9d93eff1bf20719f58fa7ae7dc01ed84a4e29e89->enter($__internal_16659fbda540d61f847a184b9d93eff1bf20719f58fa7ae7dc01ed84a4e29e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_04f1912eaaa2b36bc52e014d63e460891dcb1e3134cfe5b332bdb5e9242764bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f1912eaaa2b36bc52e014d63e460891dcb1e3134cfe5b332bdb5e9242764bf->enter($__internal_04f1912eaaa2b36bc52e014d63e460891dcb1e3134cfe5b332bdb5e9242764bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16659fbda540d61f847a184b9d93eff1bf20719f58fa7ae7dc01ed84a4e29e89->leave($__internal_16659fbda540d61f847a184b9d93eff1bf20719f58fa7ae7dc01ed84a4e29e89_prof);

        
        $__internal_04f1912eaaa2b36bc52e014d63e460891dcb1e3134cfe5b332bdb5e9242764bf->leave($__internal_04f1912eaaa2b36bc52e014d63e460891dcb1e3134cfe5b332bdb5e9242764bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_864517177e2847b60ee31735fd699fe26ea57d920c5f78107c53e07d2e763f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864517177e2847b60ee31735fd699fe26ea57d920c5f78107c53e07d2e763f97->enter($__internal_864517177e2847b60ee31735fd699fe26ea57d920c5f78107c53e07d2e763f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d6cdba784b0a1e40505f65117c651bf7e5e6d3d12ba67050232d55036e392286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cdba784b0a1e40505f65117c651bf7e5e6d3d12ba67050232d55036e392286->enter($__internal_d6cdba784b0a1e40505f65117c651bf7e5e6d3d12ba67050232d55036e392286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d6cdba784b0a1e40505f65117c651bf7e5e6d3d12ba67050232d55036e392286->leave($__internal_d6cdba784b0a1e40505f65117c651bf7e5e6d3d12ba67050232d55036e392286_prof);

        
        $__internal_864517177e2847b60ee31735fd699fe26ea57d920c5f78107c53e07d2e763f97->leave($__internal_864517177e2847b60ee31735fd699fe26ea57d920c5f78107c53e07d2e763f97_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
