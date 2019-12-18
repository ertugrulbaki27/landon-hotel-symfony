<?php

/* :reservations:index.html.twig */
class __TwigTemplate_645cc582ed8a68ae2501642577a957863d8743e0e6d71c413ccf9db1ee592fe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservations:index.html.twig", 1);
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
        $__internal_67bf779fec1148fef3a6dabb3bfa0815ef5de13a89e232af91b5079138fa2b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bf779fec1148fef3a6dabb3bfa0815ef5de13a89e232af91b5079138fa2b39->enter($__internal_67bf779fec1148fef3a6dabb3bfa0815ef5de13a89e232af91b5079138fa2b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:index.html.twig"));

        $__internal_ab0b03cd8ad1a6570cda1acdc0aa075a4c5adc012a6fb304c678a246fa087e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0b03cd8ad1a6570cda1acdc0aa075a4c5adc012a6fb304c678a246fa087e26->enter($__internal_ab0b03cd8ad1a6570cda1acdc0aa075a4c5adc012a6fb304c678a246fa087e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67bf779fec1148fef3a6dabb3bfa0815ef5de13a89e232af91b5079138fa2b39->leave($__internal_67bf779fec1148fef3a6dabb3bfa0815ef5de13a89e232af91b5079138fa2b39_prof);

        
        $__internal_ab0b03cd8ad1a6570cda1acdc0aa075a4c5adc012a6fb304c678a246fa087e26->leave($__internal_ab0b03cd8ad1a6570cda1acdc0aa075a4c5adc012a6fb304c678a246fa087e26_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c0210eccda2193db76ee50cbf477dab8ecdd1c2f11b7b26f8c770e30688f7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0210eccda2193db76ee50cbf477dab8ecdd1c2f11b7b26f8c770e30688f7e6->enter($__internal_1c0210eccda2193db76ee50cbf477dab8ecdd1c2f11b7b26f8c770e30688f7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a43df4d03aa5eab3db1c0b31eda00d26f422efa59bc133b6e9b79feec2865d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43df4d03aa5eab3db1c0b31eda00d26f422efa59bc133b6e9b79feec2865d99->enter($__internal_a43df4d03aa5eab3db1c0b31eda00d26f422efa59bc133b6e9b79feec2865d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>
";
        
        $__internal_a43df4d03aa5eab3db1c0b31eda00d26f422efa59bc133b6e9b79feec2865d99->leave($__internal_a43df4d03aa5eab3db1c0b31eda00d26f422efa59bc133b6e9b79feec2865d99_prof);

        
        $__internal_1c0210eccda2193db76ee50cbf477dab8ecdd1c2f11b7b26f8c770e30688f7e6->leave($__internal_1c0210eccda2193db76ee50cbf477dab8ecdd1c2f11b7b26f8c770e30688f7e6_prof);

    }

    public function getTemplateName()
    {
        return ":reservations:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>
{% endblock %}
", ":reservations:index.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/app/Resources/views/reservations/index.html.twig");
    }
}
