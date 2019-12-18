<?php

/* clients/index.html.twig */
class __TwigTemplate_a1a0a63f75d5edbe276350086699d57f9d7f14d91c0f8841db6d633587caa121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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
        $__internal_43e56840f228b5705ed7bdb8bc2f6bebe6850cd998e26de9a89b8a1a43b7549b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e56840f228b5705ed7bdb8bc2f6bebe6850cd998e26de9a89b8a1a43b7549b->enter($__internal_43e56840f228b5705ed7bdb8bc2f6bebe6850cd998e26de9a89b8a1a43b7549b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_2a508c9819a110e5ead095590730a0e12296aa03fa788082df9c72bcb88dd20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a508c9819a110e5ead095590730a0e12296aa03fa788082df9c72bcb88dd20f->enter($__internal_2a508c9819a110e5ead095590730a0e12296aa03fa788082df9c72bcb88dd20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e56840f228b5705ed7bdb8bc2f6bebe6850cd998e26de9a89b8a1a43b7549b->leave($__internal_43e56840f228b5705ed7bdb8bc2f6bebe6850cd998e26de9a89b8a1a43b7549b_prof);

        
        $__internal_2a508c9819a110e5ead095590730a0e12296aa03fa788082df9c72bcb88dd20f->leave($__internal_2a508c9819a110e5ead095590730a0e12296aa03fa788082df9c72bcb88dd20f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec61860177ed1cd3706db471126104afa6db93354b3db835e768009b0e162fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec61860177ed1cd3706db471126104afa6db93354b3db835e768009b0e162fc2->enter($__internal_ec61860177ed1cd3706db471126104afa6db93354b3db835e768009b0e162fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_508cac37f2ea7931f3a397f8402ae88d4dba011129fddb9a1a6e3a92e4a2ce5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508cac37f2ea7931f3a397f8402ae88d4dba011129fddb9a1a6e3a92e4a2ce5b->enter($__internal_508cac37f2ea7931f3a397f8402ae88d4dba011129fddb9a1a6e3a92e4a2ce5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_client");
        echo "\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new Twig_Error_Runtime('Variable "clients" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 17
            echo "              <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "title", array())), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "last_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                  <a class=\"hollow button\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_client", array("id_client" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => twig_get_attribute($this->env, $this->getSourceContext(), $context["client"], "id", array()))), "html", null, true);
            echo "\">BOOK A ROOM</a>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_508cac37f2ea7931f3a397f8402ae88d4dba011129fddb9a1a6e3a92e4a2ce5b->leave($__internal_508cac37f2ea7931f3a397f8402ae88d4dba011129fddb9a1a6e3a92e4a2ce5b_prof);

        
        $__internal_ec61860177ed1cd3706db471126104afa6db93354b3db835e768009b0e162fc2->leave($__internal_ec61860177ed1cd3706db471126104afa6db93354b3db835e768009b0e162fc2_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  91 => 22,  87 => 21,  82 => 19,  74 => 18,  71 => 17,  67 => 16,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
  <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"{{path('new_client')}}\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          {% for client in clients %}
              <tr>
                <td>{{ client.title | capitalize }}. {{ client.name }} {{ client.last_name }}</td>
                <td>{{ client.email }}</td>
                <td>
                  <a class=\"hollow button\" href=\"{{ path(\"modify_client\", { 'id_client': client.id }) }}\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{ path(\"booking\", { 'id_client': client.id }) }}\">BOOK A ROOM</a>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}", "clients/index.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/app/Resources/views/clients/index.html.twig");
    }
}
