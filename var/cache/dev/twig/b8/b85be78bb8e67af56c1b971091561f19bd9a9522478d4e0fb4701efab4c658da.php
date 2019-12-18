<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_42e55176a57b67ca4107be044a6c42e45bdd07b89aee847c233eb920377ec20f extends Twig_Template
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
        $__internal_1bfdb8f0d302ff24005a4722798775fd5cc954b25f2ace4afb3ffc7a06acfef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfdb8f0d302ff24005a4722798775fd5cc954b25f2ace4afb3ffc7a06acfef0->enter($__internal_1bfdb8f0d302ff24005a4722798775fd5cc954b25f2ace4afb3ffc7a06acfef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c3519954b868f222a839191160b968d4cdb3a00fd74ca90a13b9c36c7e3e9b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3519954b868f222a839191160b968d4cdb3a00fd74ca90a13b9c36c7e3e9b17->enter($__internal_c3519954b868f222a839191160b968d4cdb3a00fd74ca90a13b9c36c7e3e9b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bfdb8f0d302ff24005a4722798775fd5cc954b25f2ace4afb3ffc7a06acfef0->leave($__internal_1bfdb8f0d302ff24005a4722798775fd5cc954b25f2ace4afb3ffc7a06acfef0_prof);

        
        $__internal_c3519954b868f222a839191160b968d4cdb3a00fd74ca90a13b9c36c7e3e9b17->leave($__internal_c3519954b868f222a839191160b968d4cdb3a00fd74ca90a13b9c36c7e3e9b17_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c47315aa14ff4be997854350d24c1a515480a0b68f29fef5b8b1099a9290683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c47315aa14ff4be997854350d24c1a515480a0b68f29fef5b8b1099a9290683->enter($__internal_8c47315aa14ff4be997854350d24c1a515480a0b68f29fef5b8b1099a9290683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8e1426424ee7544fec500544c7234812ddd761caea463bf03e5fd86a25fa88fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1426424ee7544fec500544c7234812ddd761caea463bf03e5fd86a25fa88fe->enter($__internal_8e1426424ee7544fec500544c7234812ddd761caea463bf03e5fd86a25fa88fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8e1426424ee7544fec500544c7234812ddd761caea463bf03e5fd86a25fa88fe->leave($__internal_8e1426424ee7544fec500544c7234812ddd761caea463bf03e5fd86a25fa88fe_prof);

        
        $__internal_8c47315aa14ff4be997854350d24c1a515480a0b68f29fef5b8b1099a9290683->leave($__internal_8c47315aa14ff4be997854350d24c1a515480a0b68f29fef5b8b1099a9290683_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ecfb73e1cf52ac6210341c9b015479eaa4663a0a1508dee7873b0a3aa0f1fa59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfb73e1cf52ac6210341c9b015479eaa4663a0a1508dee7873b0a3aa0f1fa59->enter($__internal_ecfb73e1cf52ac6210341c9b015479eaa4663a0a1508dee7873b0a3aa0f1fa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bea96ca8ee3137076da5ebde4cd7725c56c396d2f055c29a6e5a30413e6d4502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea96ca8ee3137076da5ebde4cd7725c56c396d2f055c29a6e5a30413e6d4502->enter($__internal_bea96ca8ee3137076da5ebde4cd7725c56c396d2f055c29a6e5a30413e6d4502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bea96ca8ee3137076da5ebde4cd7725c56c396d2f055c29a6e5a30413e6d4502->leave($__internal_bea96ca8ee3137076da5ebde4cd7725c56c396d2f055c29a6e5a30413e6d4502_prof);

        
        $__internal_ecfb73e1cf52ac6210341c9b015479eaa4663a0a1508dee7873b0a3aa0f1fa59->leave($__internal_ecfb73e1cf52ac6210341c9b015479eaa4663a0a1508dee7873b0a3aa0f1fa59_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_035d5a8342dd0724883741ca273f0d569208d3119c857b69a5afd9e2e7de80ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035d5a8342dd0724883741ca273f0d569208d3119c857b69a5afd9e2e7de80ce->enter($__internal_035d5a8342dd0724883741ca273f0d569208d3119c857b69a5afd9e2e7de80ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_551788acc4cb06590fbc7bdba80fce12b7bf176588a6362b2c35eacc821b9f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551788acc4cb06590fbc7bdba80fce12b7bf176588a6362b2c35eacc821b9f7f->enter($__internal_551788acc4cb06590fbc7bdba80fce12b7bf176588a6362b2c35eacc821b9f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_551788acc4cb06590fbc7bdba80fce12b7bf176588a6362b2c35eacc821b9f7f->leave($__internal_551788acc4cb06590fbc7bdba80fce12b7bf176588a6362b2c35eacc821b9f7f_prof);

        
        $__internal_035d5a8342dd0724883741ca273f0d569208d3119c857b69a5afd9e2e7de80ce->leave($__internal_035d5a8342dd0724883741ca273f0d569208d3119c857b69a5afd9e2e7de80ce_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
