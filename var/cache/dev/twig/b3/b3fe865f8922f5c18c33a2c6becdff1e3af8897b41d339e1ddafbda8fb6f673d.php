<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_42eba72e39abe2f531b492152955113d1b66e90a468a237503e7219097944cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_62818e6fc0c9f3d485fbbdbf0d478104731614c06e867195ec1d38e91e05a929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62818e6fc0c9f3d485fbbdbf0d478104731614c06e867195ec1d38e91e05a929->enter($__internal_62818e6fc0c9f3d485fbbdbf0d478104731614c06e867195ec1d38e91e05a929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_441cb769ab8ee47c8d836078d544554739043e3c5f5af6e18b68594230bf8144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441cb769ab8ee47c8d836078d544554739043e3c5f5af6e18b68594230bf8144->enter($__internal_441cb769ab8ee47c8d836078d544554739043e3c5f5af6e18b68594230bf8144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62818e6fc0c9f3d485fbbdbf0d478104731614c06e867195ec1d38e91e05a929->leave($__internal_62818e6fc0c9f3d485fbbdbf0d478104731614c06e867195ec1d38e91e05a929_prof);

        
        $__internal_441cb769ab8ee47c8d836078d544554739043e3c5f5af6e18b68594230bf8144->leave($__internal_441cb769ab8ee47c8d836078d544554739043e3c5f5af6e18b68594230bf8144_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76e3e6a559cdf40f6e409094d6c16a4f6ed00d9c3927c638d677e58834bf9c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e3e6a559cdf40f6e409094d6c16a4f6ed00d9c3927c638d677e58834bf9c33->enter($__internal_76e3e6a559cdf40f6e409094d6c16a4f6ed00d9c3927c638d677e58834bf9c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23b1fbac4c7dd1df322b3b67d84b4d3d1da6c142710abc39bf88209cfd0186b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b1fbac4c7dd1df322b3b67d84b4d3d1da6c142710abc39bf88209cfd0186b7->enter($__internal_23b1fbac4c7dd1df322b3b67d84b4d3d1da6c142710abc39bf88209cfd0186b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_23b1fbac4c7dd1df322b3b67d84b4d3d1da6c142710abc39bf88209cfd0186b7->leave($__internal_23b1fbac4c7dd1df322b3b67d84b4d3d1da6c142710abc39bf88209cfd0186b7_prof);

        
        $__internal_76e3e6a559cdf40f6e409094d6c16a4f6ed00d9c3927c638d677e58834bf9c33->leave($__internal_76e3e6a559cdf40f6e409094d6c16a4f6ed00d9c3927c638d677e58834bf9c33_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49f5d49ba7c44d21b2c67955633975cd1ae6a47b0740156f63a79f1d336e5f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f5d49ba7c44d21b2c67955633975cd1ae6a47b0740156f63a79f1d336e5f6a->enter($__internal_49f5d49ba7c44d21b2c67955633975cd1ae6a47b0740156f63a79f1d336e5f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9a0b2ba17e7a83199ea1b223730645fc771b05cdbfec1408f40346ef10526d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0b2ba17e7a83199ea1b223730645fc771b05cdbfec1408f40346ef10526d7d->enter($__internal_9a0b2ba17e7a83199ea1b223730645fc771b05cdbfec1408f40346ef10526d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9a0b2ba17e7a83199ea1b223730645fc771b05cdbfec1408f40346ef10526d7d->leave($__internal_9a0b2ba17e7a83199ea1b223730645fc771b05cdbfec1408f40346ef10526d7d_prof);

        
        $__internal_49f5d49ba7c44d21b2c67955633975cd1ae6a47b0740156f63a79f1d336e5f6a->leave($__internal_49f5d49ba7c44d21b2c67955633975cd1ae6a47b0740156f63a79f1d336e5f6a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ecd0be57a825754fdc6565222eb7f9dcd948e62669c8c786eccf92463054af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ecd0be57a825754fdc6565222eb7f9dcd948e62669c8c786eccf92463054af9->enter($__internal_1ecd0be57a825754fdc6565222eb7f9dcd948e62669c8c786eccf92463054af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a4caddca7b54fc84337eae577decbe464e5c03b992f1b2e33b29c917782309f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4caddca7b54fc84337eae577decbe464e5c03b992f1b2e33b29c917782309f->enter($__internal_8a4caddca7b54fc84337eae577decbe464e5c03b992f1b2e33b29c917782309f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_8a4caddca7b54fc84337eae577decbe464e5c03b992f1b2e33b29c917782309f->leave($__internal_8a4caddca7b54fc84337eae577decbe464e5c03b992f1b2e33b29c917782309f_prof);

        
        $__internal_1ecd0be57a825754fdc6565222eb7f9dcd948e62669c8c786eccf92463054af9->leave($__internal_1ecd0be57a825754fdc6565222eb7f9dcd948e62669c8c786eccf92463054af9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
