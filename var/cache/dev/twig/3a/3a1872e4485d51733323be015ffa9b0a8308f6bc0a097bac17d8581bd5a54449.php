<?php

/* clients/index.html.twig */
class __TwigTemplate_a7d15bd8675d1f25b6c5bc102a504218e14c93f1d4ce2998ab9a138088dc53e8 extends Twig_Template
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
        $__internal_31eb6b74476197a379ba4f720c58c3a7eed4fb9bf7451911a12e70e53877cfe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31eb6b74476197a379ba4f720c58c3a7eed4fb9bf7451911a12e70e53877cfe1->enter($__internal_31eb6b74476197a379ba4f720c58c3a7eed4fb9bf7451911a12e70e53877cfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_7e293251332b6e48585fe9d0c70dd9130f71b2df1c9db92307b1490f0394d168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e293251332b6e48585fe9d0c70dd9130f71b2df1c9db92307b1490f0394d168->enter($__internal_7e293251332b6e48585fe9d0c70dd9130f71b2df1c9db92307b1490f0394d168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31eb6b74476197a379ba4f720c58c3a7eed4fb9bf7451911a12e70e53877cfe1->leave($__internal_31eb6b74476197a379ba4f720c58c3a7eed4fb9bf7451911a12e70e53877cfe1_prof);

        
        $__internal_7e293251332b6e48585fe9d0c70dd9130f71b2df1c9db92307b1490f0394d168->leave($__internal_7e293251332b6e48585fe9d0c70dd9130f71b2df1c9db92307b1490f0394d168_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3f2d09db55032cb9736f00276f99812507a3feed7968bc326454d1a99d209f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f2d09db55032cb9736f00276f99812507a3feed7968bc326454d1a99d209f5->enter($__internal_d3f2d09db55032cb9736f00276f99812507a3feed7968bc326454d1a99d209f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4828cb285fa049b9cc34a40306303bb94f6854ffcaf254aa8dcd0e7a98531eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4828cb285fa049b9cc34a40306303bb94f6854ffcaf254aa8dcd0e7a98531eb->enter($__internal_c4828cb285fa049b9cc34a40306303bb94f6854ffcaf254aa8dcd0e7a98531eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4828cb285fa049b9cc34a40306303bb94f6854ffcaf254aa8dcd0e7a98531eb->leave($__internal_c4828cb285fa049b9cc34a40306303bb94f6854ffcaf254aa8dcd0e7a98531eb_prof);

        
        $__internal_d3f2d09db55032cb9736f00276f99812507a3feed7968bc326454d1a99d209f5->leave($__internal_d3f2d09db55032cb9736f00276f99812507a3feed7968bc326454d1a99d209f5_prof);

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

{% endblock %}", "clients/index.html.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/app/Resources/views/clients/index.html.twig");
    }
}
