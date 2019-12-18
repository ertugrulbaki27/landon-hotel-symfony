<?php

/* base.html.twig */
class __TwigTemplate_bb061f81899cd4bfbe02b1bbcf0a93aa8326689a1dca4902b43f9853f9efbc97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32cc449264fbf3b6ff9e160ab7ea2153c54895d6a793f9d1ceb1058fcde31276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cc449264fbf3b6ff9e160ab7ea2153c54895d6a793f9d1ceb1058fcde31276->enter($__internal_32cc449264fbf3b6ff9e160ab7ea2153c54895d6a793f9d1ceb1058fcde31276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ca3c5c73ed190fe8f4badbc30f2d0278d228e53dc8bf5d34e6f40c2450cc9c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3c5c73ed190fe8f4badbc30f2d0278d228e53dc8bf5d34e6f40c2450cc9c35->enter($__internal_ca3c5c73ed190fe8f4badbc30f2d0278d228e53dc8bf5d34e6f40c2450cc9c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html data-whatinput=\"initial\" data-whatintent=\"mouse\" class=\" whatinput-types-initial\"><head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"UTF-8\">
        <title>Landon Hotel App</title>
        ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 7
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    <meta class=\"foundation-mq\"></head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu=\"49qhhm-dropdown-menu\" role=\"menubar\">
            <li role=\"menuitem\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li role=\"menuitem\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li role=\"menuitem\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>

    </body>
</html>";
        
        $__internal_32cc449264fbf3b6ff9e160ab7ea2153c54895d6a793f9d1ceb1058fcde31276->leave($__internal_32cc449264fbf3b6ff9e160ab7ea2153c54895d6a793f9d1ceb1058fcde31276_prof);

        
        $__internal_ca3c5c73ed190fe8f4badbc30f2d0278d228e53dc8bf5d34e6f40c2450cc9c35->leave($__internal_ca3c5c73ed190fe8f4badbc30f2d0278d228e53dc8bf5d34e6f40c2450cc9c35_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_fcd78370a05cbbc463f27ad4c526dcfa80395cbb7572f6da9e52b0dcdaccde74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd78370a05cbbc463f27ad4c526dcfa80395cbb7572f6da9e52b0dcdaccde74->enter($__internal_fcd78370a05cbbc463f27ad4c526dcfa80395cbb7572f6da9e52b0dcdaccde74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2fe1419b5104a9b3475406d78feda582289690a29dafe056fb47e33a6d4767ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe1419b5104a9b3475406d78feda582289690a29dafe056fb47e33a6d4767ee->enter($__internal_2fe1419b5104a9b3475406d78feda582289690a29dafe056fb47e33a6d4767ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo " ";
        
        $__internal_2fe1419b5104a9b3475406d78feda582289690a29dafe056fb47e33a6d4767ee->leave($__internal_2fe1419b5104a9b3475406d78feda582289690a29dafe056fb47e33a6d4767ee_prof);

        
        $__internal_fcd78370a05cbbc463f27ad4c526dcfa80395cbb7572f6da9e52b0dcdaccde74->leave($__internal_fcd78370a05cbbc463f27ad4c526dcfa80395cbb7572f6da9e52b0dcdaccde74_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_db50c5ab1f8c36cbddaed0688a80c8d7ff65f0560c999f2cfbd9f16be47d138b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db50c5ab1f8c36cbddaed0688a80c8d7ff65f0560c999f2cfbd9f16be47d138b->enter($__internal_db50c5ab1f8c36cbddaed0688a80c8d7ff65f0560c999f2cfbd9f16be47d138b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_467b46ca09f6630f0441791cf95387797f06e971d3f0f6f73dd1e5dd69c83be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467b46ca09f6630f0441791cf95387797f06e971d3f0f6f73dd1e5dd69c83be7->enter($__internal_467b46ca09f6630f0441791cf95387797f06e971d3f0f6f73dd1e5dd69c83be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_467b46ca09f6630f0441791cf95387797f06e971d3f0f6f73dd1e5dd69c83be7->leave($__internal_467b46ca09f6630f0441791cf95387797f06e971d3f0f6f73dd1e5dd69c83be7_prof);

        
        $__internal_db50c5ab1f8c36cbddaed0688a80c8d7ff65f0560c999f2cfbd9f16be47d138b->leave($__internal_db50c5ab1f8c36cbddaed0688a80c8d7ff65f0560c999f2cfbd9f16be47d138b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 32,  144 => 6,  122 => 52,  118 => 51,  114 => 50,  110 => 49,  106 => 48,  102 => 47,  86 => 33,  84 => 32,  71 => 22,  67 => 21,  63 => 20,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  36 => 7,  34 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html data-whatinput=\"initial\" data-whatintent=\"mouse\" class=\" whatinput-types-initial\"><head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"UTF-8\">
        <title>Landon Hotel App</title>
        {% block stylesheet %} {% endblock %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    <meta class=\"foundation-mq\"></head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu=\"49qhhm-dropdown-menu\" role=\"menubar\">
            <li role=\"menuitem\"><a href=\"{{ path('home') }}\">Home</a></li>
            <li role=\"menuitem\"><a href=\"{{ path('index_clients') }}\">Clients</a></li>
            <li role=\"menuitem\"><a href=\"{{ path('reservations') }}\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    {% block body %} {% endblock %}

    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>

    </body>
</html>", "base.html.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/app/Resources/views/base.html.twig");
    }
}
