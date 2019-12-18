<?php

/* base.html.twig */
class __TwigTemplate_cf37b30e0235cc27f98d7b0fd7d1c1510ca9cbebe54f97865cd09f2968533dfd extends Twig_Template
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
        $__internal_5090b4d8898964e007b1bfc2bfde835c69d33ab620b531fe7c95ff5d296f91e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5090b4d8898964e007b1bfc2bfde835c69d33ab620b531fe7c95ff5d296f91e5->enter($__internal_5090b4d8898964e007b1bfc2bfde835c69d33ab620b531fe7c95ff5d296f91e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2ce954ba56aa41f8801dbfeb5ea73c7b326e65291686f8b5e561cd9194490af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce954ba56aa41f8801dbfeb5ea73c7b326e65291686f8b5e561cd9194490af3->enter($__internal_2ce954ba56aa41f8801dbfeb5ea73c7b326e65291686f8b5e561cd9194490af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5090b4d8898964e007b1bfc2bfde835c69d33ab620b531fe7c95ff5d296f91e5->leave($__internal_5090b4d8898964e007b1bfc2bfde835c69d33ab620b531fe7c95ff5d296f91e5_prof);

        
        $__internal_2ce954ba56aa41f8801dbfeb5ea73c7b326e65291686f8b5e561cd9194490af3->leave($__internal_2ce954ba56aa41f8801dbfeb5ea73c7b326e65291686f8b5e561cd9194490af3_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_1aa379f7cca5b58c01a9b4101520f87a1f00ebc7fb055a5ee8b40d83c47b993c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa379f7cca5b58c01a9b4101520f87a1f00ebc7fb055a5ee8b40d83c47b993c->enter($__internal_1aa379f7cca5b58c01a9b4101520f87a1f00ebc7fb055a5ee8b40d83c47b993c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_1b1432cd06ea34c9f7d41238c730df0256e1166d4b67e0e0ce6424c7de0f902d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1432cd06ea34c9f7d41238c730df0256e1166d4b67e0e0ce6424c7de0f902d->enter($__internal_1b1432cd06ea34c9f7d41238c730df0256e1166d4b67e0e0ce6424c7de0f902d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo " ";
        
        $__internal_1b1432cd06ea34c9f7d41238c730df0256e1166d4b67e0e0ce6424c7de0f902d->leave($__internal_1b1432cd06ea34c9f7d41238c730df0256e1166d4b67e0e0ce6424c7de0f902d_prof);

        
        $__internal_1aa379f7cca5b58c01a9b4101520f87a1f00ebc7fb055a5ee8b40d83c47b993c->leave($__internal_1aa379f7cca5b58c01a9b4101520f87a1f00ebc7fb055a5ee8b40d83c47b993c_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4701d0d898e18b02b0d3c3c7aeaa17904e0784cf3a35b4a3de47044cb751fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4701d0d898e18b02b0d3c3c7aeaa17904e0784cf3a35b4a3de47044cb751fc8->enter($__internal_a4701d0d898e18b02b0d3c3c7aeaa17904e0784cf3a35b4a3de47044cb751fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9a56c606d971ec290f1c47600678a8423be934660be8d8b8cd5771935921afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a56c606d971ec290f1c47600678a8423be934660be8d8b8cd5771935921afc->enter($__internal_b9a56c606d971ec290f1c47600678a8423be934660be8d8b8cd5771935921afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_b9a56c606d971ec290f1c47600678a8423be934660be8d8b8cd5771935921afc->leave($__internal_b9a56c606d971ec290f1c47600678a8423be934660be8d8b8cd5771935921afc_prof);

        
        $__internal_a4701d0d898e18b02b0d3c3c7aeaa17904e0784cf3a35b4a3de47044cb751fc8->leave($__internal_a4701d0d898e18b02b0d3c3c7aeaa17904e0784cf3a35b4a3de47044cb751fc8_prof);

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
</html>", "base.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/app/Resources/views/base.html.twig");
    }
}
