<?php

/* clients/form.html.twig */
class __TwigTemplate_a1d05f12b0ca8f5beca3029b38ff03d6ad486cb5ff8d1cacbc64b78dafdce8ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/form.html.twig", 1);
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
        $__internal_7aad065478da3e3d732dfd8a69097cecb28172c06d0a19b713d31db7f5d306b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aad065478da3e3d732dfd8a69097cecb28172c06d0a19b713d31db7f5d306b8->enter($__internal_7aad065478da3e3d732dfd8a69097cecb28172c06d0a19b713d31db7f5d306b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_216561abc1f16077096d2957022b0010e874f65341179baf87e97559261717bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216561abc1f16077096d2957022b0010e874f65341179baf87e97559261717bf->enter($__internal_216561abc1f16077096d2957022b0010e874f65341179baf87e97559261717bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aad065478da3e3d732dfd8a69097cecb28172c06d0a19b713d31db7f5d306b8->leave($__internal_7aad065478da3e3d732dfd8a69097cecb28172c06d0a19b713d31db7f5d306b8_prof);

        
        $__internal_216561abc1f16077096d2957022b0010e874f65341179baf87e97559261717bf->leave($__internal_216561abc1f16077096d2957022b0010e874f65341179baf87e97559261717bf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_16d3b93718878023fc0ed82c3e59566c4f69ee3bef65fcc3652d58c46d12f68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d3b93718878023fc0ed82c3e59566c4f69ee3bef65fcc3652d58c46d12f68a->enter($__internal_16d3b93718878023fc0ed82c3e59566c4f69ee3bef65fcc3652d58c46d12f68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed3526ee46322016b7a5724eaf10f2e4acdc28a345a9f6cecc1d7e90f58a5050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3526ee46322016b7a5724eaf10f2e4acdc28a345a9f6cecc1d7e90f58a5050->enter($__internal_ed3526ee46322016b7a5724eaf10f2e4acdc28a345a9f6cecc1d7e90f58a5050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>";
        // line 5
        echo ((((isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new Twig_Error_Runtime('Variable "mode" does not exist.', 5, $this->getSourceContext()); })()) == "new_client")) ? ("New Client") : ("Modify Client"));
        echo "</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 10, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 11
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "\" ";
            echo ((($context["title"] == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "title", array()))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["title"]), "html", null, true);
            echo ".</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[last_name]\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "last_name", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "last_name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "address", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "address", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zip_code]\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "zip_code", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "zip_code", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "city", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "city", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "state", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "state", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "email", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "email", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>
";
        
        $__internal_ed3526ee46322016b7a5724eaf10f2e4acdc28a345a9f6cecc1d7e90f58a5050->leave($__internal_ed3526ee46322016b7a5724eaf10f2e4acdc28a345a9f6cecc1d7e90f58a5050_prof);

        
        $__internal_16d3b93718878023fc0ed82c3e59566c4f69ee3bef65fcc3652d58c46d12f68a->leave($__internal_16d3b93718878023fc0ed82c3e59566c4f69ee3bef65fcc3652d58c46d12f68a_prof);

    }

    public function getTemplateName()
    {
        return "clients/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  119 => 37,  112 => 33,  105 => 29,  98 => 25,  91 => 21,  84 => 17,  78 => 13,  65 => 11,  61 => 10,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>{{ mode == 'new_client' ? 'New Client' : 'Modify Client' }}</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
            {% for title in titles %}
              <option value=\"{{title}}\" {{ title == form.title ? 'selected' : '' }} >{{ title | capitalize }}.</option>
            {% endfor %}
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"{{ form.name is defined ? form.name : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[last_name]\" value=\"{{ form.last_name is defined ? form.last_name : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"{{ form.address is defined ? form.address : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zip_code]\" value=\"{{ form.zip_code is defined ? form.zip_code : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"{{ form.city is defined ? form.city : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"{{ form.state is defined ? form.state : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"{{ form.email is defined ? form.email : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>
{% endblock %}", "clients/form.html.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/app/Resources/views/clients/form.html.twig");
    }
}
