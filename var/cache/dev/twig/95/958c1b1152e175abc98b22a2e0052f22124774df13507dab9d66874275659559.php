<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_4a820988074aa05c4b41dd3c830d96799b570f0b2d2a79f0dbc0b6654e48944d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e6e5abe2b5f6f7d1ef5cd1f7ce3e234ed0d93d7f42bca1efe49dd887c3d4d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6e5abe2b5f6f7d1ef5cd1f7ce3e234ed0d93d7f42bca1efe49dd887c3d4d7a->enter($__internal_9e6e5abe2b5f6f7d1ef5cd1f7ce3e234ed0d93d7f42bca1efe49dd887c3d4d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_2dd19bfd4f57e555c7b4f2cf969c7f07931191dd36cffd06539d7976c158b617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd19bfd4f57e555c7b4f2cf969c7f07931191dd36cffd06539d7976c158b617->enter($__internal_2dd19bfd4f57e555c7b4f2cf969c7f07931191dd36cffd06539d7976c158b617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9e6e5abe2b5f6f7d1ef5cd1f7ce3e234ed0d93d7f42bca1efe49dd887c3d4d7a->leave($__internal_9e6e5abe2b5f6f7d1ef5cd1f7ce3e234ed0d93d7f42bca1efe49dd887c3d4d7a_prof);

        
        $__internal_2dd19bfd4f57e555c7b4f2cf969c7f07931191dd36cffd06539d7976c158b617->leave($__internal_2dd19bfd4f57e555c7b4f2cf969c7f07931191dd36cffd06539d7976c158b617_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
