<?php

/* :reservations:book.html.twig */
class __TwigTemplate_4da07a050fecdbc6893f40aced4695c3af928f07507c71fe5e6ff372e49b2e53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservations:book.html.twig", 1);
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
        $__internal_f523af0cccec790be5667c27d0b7c757e9556abe6aac397b209f46b74f4249d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f523af0cccec790be5667c27d0b7c757e9556abe6aac397b209f46b74f4249d0->enter($__internal_f523af0cccec790be5667c27d0b7c757e9556abe6aac397b209f46b74f4249d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:book.html.twig"));

        $__internal_b3a7ac78293b981238ed6083bbc2ba1bba7744b3103d73413e429d1786244573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a7ac78293b981238ed6083bbc2ba1bba7744b3103d73413e429d1786244573->enter($__internal_b3a7ac78293b981238ed6083bbc2ba1bba7744b3103d73413e429d1786244573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservations:book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f523af0cccec790be5667c27d0b7c757e9556abe6aac397b209f46b74f4249d0->leave($__internal_f523af0cccec790be5667c27d0b7c757e9556abe6aac397b209f46b74f4249d0_prof);

        
        $__internal_b3a7ac78293b981238ed6083bbc2ba1bba7744b3103d73413e429d1786244573->leave($__internal_b3a7ac78293b981238ed6083bbc2ba1bba7744b3103d73413e429d1786244573_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b67ed19f97cc98cea14940caa09648ecd97f5e4f531154435154867ac2d43381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67ed19f97cc98cea14940caa09648ecd97f5e4f531154435154867ac2d43381->enter($__internal_b67ed19f97cc98cea14940caa09648ecd97f5e4f531154435154867ac2d43381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_861e6b0985a230f013b3724d128e206ac482016a99e5fc96b5c16fcf43908646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861e6b0985a230f013b3724d128e206ac482016a99e5fc96b5c16fcf43908646->enter($__internal_861e6b0985a230f013b3724d128e206ac482016a99e5fc96b5c16fcf43908646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:  ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id_client"]) || array_key_exists("id_client", $context) ? $context["id_client"] : (function () { throw new Twig_Error_Runtime('Variable "id_client" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>
";
        
        $__internal_861e6b0985a230f013b3724d128e206ac482016a99e5fc96b5c16fcf43908646->leave($__internal_861e6b0985a230f013b3724d128e206ac482016a99e5fc96b5c16fcf43908646_prof);

        
        $__internal_b67ed19f97cc98cea14940caa09648ecd97f5e4f531154435154867ac2d43381->leave($__internal_b67ed19f97cc98cea14940caa09648ecd97f5e4f531154435154867ac2d43381_prof);

    }

    public function getTemplateName()
    {
        return ":reservations:book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:  {{ id_client }}</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>
{% endblock %}", ":reservations:book.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/app/Resources/views/reservations/book.html.twig");
    }
}
