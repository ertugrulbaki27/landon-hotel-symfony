<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_355fa53e0da49048198a9c297b4beb8c440961ee41506c661287398c4e6d4b5d extends Twig_Template
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
        $__internal_f7aac5e1b4f172af046fe361c2f176f2c7a95919f469909b010e77825a960736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7aac5e1b4f172af046fe361c2f176f2c7a95919f469909b010e77825a960736->enter($__internal_f7aac5e1b4f172af046fe361c2f176f2c7a95919f469909b010e77825a960736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_1087040e8a3cd94b85679856c88b0a6b8e450e2726cecabd4288572ee9cfd446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1087040e8a3cd94b85679856c88b0a6b8e450e2726cecabd4288572ee9cfd446->enter($__internal_1087040e8a3cd94b85679856c88b0a6b8e450e2726cecabd4288572ee9cfd446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_f7aac5e1b4f172af046fe361c2f176f2c7a95919f469909b010e77825a960736->leave($__internal_f7aac5e1b4f172af046fe361c2f176f2c7a95919f469909b010e77825a960736_prof);

        
        $__internal_1087040e8a3cd94b85679856c88b0a6b8e450e2726cecabd4288572ee9cfd446->leave($__internal_1087040e8a3cd94b85679856c88b0a6b8e450e2726cecabd4288572ee9cfd446_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "TwigBundle:Exception:error.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.html.twig");
    }
}
