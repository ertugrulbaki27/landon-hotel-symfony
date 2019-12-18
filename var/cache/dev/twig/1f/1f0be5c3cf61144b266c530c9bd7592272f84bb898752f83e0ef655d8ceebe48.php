<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_725acd626b73ed252f821fb94569d428e4b72676bcaaa750bd61499746fcbabf extends Twig_Template
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
        $__internal_59b77dc8f5cc4ec8120b53832ba48272323432080755b79789c26d99f11a3d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b77dc8f5cc4ec8120b53832ba48272323432080755b79789c26d99f11a3d30->enter($__internal_59b77dc8f5cc4ec8120b53832ba48272323432080755b79789c26d99f11a3d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_033f092caa6963e22ea67987d7c6616bf914424cdfea2ece3ced5ea3aec2ffee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033f092caa6963e22ea67987d7c6616bf914424cdfea2ece3ced5ea3aec2ffee->enter($__internal_033f092caa6963e22ea67987d7c6616bf914424cdfea2ece3ced5ea3aec2ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59b77dc8f5cc4ec8120b53832ba48272323432080755b79789c26d99f11a3d30->leave($__internal_59b77dc8f5cc4ec8120b53832ba48272323432080755b79789c26d99f11a3d30_prof);

        
        $__internal_033f092caa6963e22ea67987d7c6616bf914424cdfea2ece3ced5ea3aec2ffee->leave($__internal_033f092caa6963e22ea67987d7c6616bf914424cdfea2ece3ced5ea3aec2ffee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c92bf6c091b6cba0d0761d53869b8100a60baece78956163af7d21bf9f720ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92bf6c091b6cba0d0761d53869b8100a60baece78956163af7d21bf9f720ff5->enter($__internal_c92bf6c091b6cba0d0761d53869b8100a60baece78956163af7d21bf9f720ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c71cd5facd80ee2e7f22c62135c02c3b932bee523c1eaef34680fa007a3df116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71cd5facd80ee2e7f22c62135c02c3b932bee523c1eaef34680fa007a3df116->enter($__internal_c71cd5facd80ee2e7f22c62135c02c3b932bee523c1eaef34680fa007a3df116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c71cd5facd80ee2e7f22c62135c02c3b932bee523c1eaef34680fa007a3df116->leave($__internal_c71cd5facd80ee2e7f22c62135c02c3b932bee523c1eaef34680fa007a3df116_prof);

        
        $__internal_c92bf6c091b6cba0d0761d53869b8100a60baece78956163af7d21bf9f720ff5->leave($__internal_c92bf6c091b6cba0d0761d53869b8100a60baece78956163af7d21bf9f720ff5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43dc0d17c31fce92e310e80df460a894d7852ff8aed923d6fe78f6e3a3db1730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43dc0d17c31fce92e310e80df460a894d7852ff8aed923d6fe78f6e3a3db1730->enter($__internal_43dc0d17c31fce92e310e80df460a894d7852ff8aed923d6fe78f6e3a3db1730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_73e6f44dbbf08ff6cd6ac309fd6aa3a50132b03e8f6e3aeabfdfb3a68933e1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e6f44dbbf08ff6cd6ac309fd6aa3a50132b03e8f6e3aeabfdfb3a68933e1ab->enter($__internal_73e6f44dbbf08ff6cd6ac309fd6aa3a50132b03e8f6e3aeabfdfb3a68933e1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_73e6f44dbbf08ff6cd6ac309fd6aa3a50132b03e8f6e3aeabfdfb3a68933e1ab->leave($__internal_73e6f44dbbf08ff6cd6ac309fd6aa3a50132b03e8f6e3aeabfdfb3a68933e1ab_prof);

        
        $__internal_43dc0d17c31fce92e310e80df460a894d7852ff8aed923d6fe78f6e3a3db1730->leave($__internal_43dc0d17c31fce92e310e80df460a894d7852ff8aed923d6fe78f6e3a3db1730_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7312423e4b4cc3ece5ed82ecd88daed30c42386d5ef8c75f4bb17aaf741b6643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7312423e4b4cc3ece5ed82ecd88daed30c42386d5ef8c75f4bb17aaf741b6643->enter($__internal_7312423e4b4cc3ece5ed82ecd88daed30c42386d5ef8c75f4bb17aaf741b6643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3df6ed0daeaf7ee42132818f200d4673fed572beed259b553418a6ec95d82df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df6ed0daeaf7ee42132818f200d4673fed572beed259b553418a6ec95d82df6->enter($__internal_3df6ed0daeaf7ee42132818f200d4673fed572beed259b553418a6ec95d82df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3df6ed0daeaf7ee42132818f200d4673fed572beed259b553418a6ec95d82df6->leave($__internal_3df6ed0daeaf7ee42132818f200d4673fed572beed259b553418a6ec95d82df6_prof);

        
        $__internal_7312423e4b4cc3ece5ed82ecd88daed30c42386d5ef8c75f4bb17aaf741b6643->leave($__internal_7312423e4b4cc3ece5ed82ecd88daed30c42386d5ef8c75f4bb17aaf741b6643_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
