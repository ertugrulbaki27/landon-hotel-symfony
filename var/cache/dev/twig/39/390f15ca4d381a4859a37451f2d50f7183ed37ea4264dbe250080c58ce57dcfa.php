<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_143b545e45017cb6c7dd0ae3af50a0e9d304ae49e7c34ac3000e39dd90fafdf1 extends Twig_Template
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
        $__internal_e49a8e58a02ae70f47a7925d237e383cad7f8a186e5eb1c9e775a36a7b77641c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49a8e58a02ae70f47a7925d237e383cad7f8a186e5eb1c9e775a36a7b77641c->enter($__internal_e49a8e58a02ae70f47a7925d237e383cad7f8a186e5eb1c9e775a36a7b77641c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_490cc0de1f734b6b288fda1181ab77dacb9200dcf300741c105a0136c1205cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490cc0de1f734b6b288fda1181ab77dacb9200dcf300741c105a0136c1205cef->enter($__internal_490cc0de1f734b6b288fda1181ab77dacb9200dcf300741c105a0136c1205cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e49a8e58a02ae70f47a7925d237e383cad7f8a186e5eb1c9e775a36a7b77641c->leave($__internal_e49a8e58a02ae70f47a7925d237e383cad7f8a186e5eb1c9e775a36a7b77641c_prof);

        
        $__internal_490cc0de1f734b6b288fda1181ab77dacb9200dcf300741c105a0136c1205cef->leave($__internal_490cc0de1f734b6b288fda1181ab77dacb9200dcf300741c105a0136c1205cef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0289ada3efad0e5fe41a5a128dda418ec47060e04651f873b8e93de36aa9c108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0289ada3efad0e5fe41a5a128dda418ec47060e04651f873b8e93de36aa9c108->enter($__internal_0289ada3efad0e5fe41a5a128dda418ec47060e04651f873b8e93de36aa9c108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d1b74d0864a92815e78dddd17c543f8f5483f7efa2dbaca7629c263c0bb1618a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b74d0864a92815e78dddd17c543f8f5483f7efa2dbaca7629c263c0bb1618a->enter($__internal_d1b74d0864a92815e78dddd17c543f8f5483f7efa2dbaca7629c263c0bb1618a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d1b74d0864a92815e78dddd17c543f8f5483f7efa2dbaca7629c263c0bb1618a->leave($__internal_d1b74d0864a92815e78dddd17c543f8f5483f7efa2dbaca7629c263c0bb1618a_prof);

        
        $__internal_0289ada3efad0e5fe41a5a128dda418ec47060e04651f873b8e93de36aa9c108->leave($__internal_0289ada3efad0e5fe41a5a128dda418ec47060e04651f873b8e93de36aa9c108_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
