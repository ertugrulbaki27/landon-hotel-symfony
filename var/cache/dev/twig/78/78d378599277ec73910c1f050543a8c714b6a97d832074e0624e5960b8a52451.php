<?php

/* reservations/index.html.twig */
class __TwigTemplate_c315e73bf222e70bca70c0f8d2947226a29a9e726036fef4baeda114d7fd0783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
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
        $__internal_efc2f651ce0729a34026b5b5ce8eacca1cfa031381baeb989b60cbf002b11be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc2f651ce0729a34026b5b5ce8eacca1cfa031381baeb989b60cbf002b11be2->enter($__internal_efc2f651ce0729a34026b5b5ce8eacca1cfa031381baeb989b60cbf002b11be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_5f14c35b8dfdc4b91de89624456a3a3c8ccef87bbb8717b32f4c4c0351fe4bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f14c35b8dfdc4b91de89624456a3a3c8ccef87bbb8717b32f4c4c0351fe4bc2->enter($__internal_5f14c35b8dfdc4b91de89624456a3a3c8ccef87bbb8717b32f4c4c0351fe4bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc2f651ce0729a34026b5b5ce8eacca1cfa031381baeb989b60cbf002b11be2->leave($__internal_efc2f651ce0729a34026b5b5ce8eacca1cfa031381baeb989b60cbf002b11be2_prof);

        
        $__internal_5f14c35b8dfdc4b91de89624456a3a3c8ccef87bbb8717b32f4c4c0351fe4bc2->leave($__internal_5f14c35b8dfdc4b91de89624456a3a3c8ccef87bbb8717b32f4c4c0351fe4bc2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f77e7be6182eff1f742c267b821885f44affc55d12f3b64fa8603297651be665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77e7be6182eff1f742c267b821885f44affc55d12f3b64fa8603297651be665->enter($__internal_f77e7be6182eff1f742c267b821885f44affc55d12f3b64fa8603297651be665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7fcb765c76565c4eefca8a13ae69e3168b185263ca1f7e52835b8ed8a0e65f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcb765c76565c4eefca8a13ae69e3168b185263ca1f7e52835b8ed8a0e65f1c->enter($__internal_7fcb765c76565c4eefca8a13ae69e3168b185263ca1f7e52835b8ed8a0e65f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7fcb765c76565c4eefca8a13ae69e3168b185263ca1f7e52835b8ed8a0e65f1c->leave($__internal_7fcb765c76565c4eefca8a13ae69e3168b185263ca1f7e52835b8ed8a0e65f1c_prof);

        
        $__internal_f77e7be6182eff1f742c267b821885f44affc55d12f3b64fa8603297651be665->leave($__internal_f77e7be6182eff1f742c267b821885f44affc55d12f3b64fa8603297651be665_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
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
", "reservations/index.html.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/app/Resources/views/reservations/index.html.twig");
    }
}
