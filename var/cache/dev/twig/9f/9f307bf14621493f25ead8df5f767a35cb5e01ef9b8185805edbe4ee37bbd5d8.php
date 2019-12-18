<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_c3e910339e95ca16b12496d9d8ad52ec33a3c8574121988a912487be0aa507e6 extends Twig_Template
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
        $__internal_a92d2be1ebe50f377f3f78355172e16ff1bb895341154d883ed74bb016575a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92d2be1ebe50f377f3f78355172e16ff1bb895341154d883ed74bb016575a38->enter($__internal_a92d2be1ebe50f377f3f78355172e16ff1bb895341154d883ed74bb016575a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        $__internal_f0a46b5f3d274b7620589d3d1b6b5f91f63d7a821e7bf5c7184900ed3546ae61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a46b5f3d274b7620589d3d1b6b5f91f63d7a821e7bf5c7184900ed3546ae61->enter($__internal_f0a46b5f3d274b7620589d3d1b6b5f91f63d7a821e7bf5c7184900ed3546ae61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new Twig_Error_Runtime('Variable "logs" does not exist.', 2, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage(twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_a92d2be1ebe50f377f3f78355172e16ff1bb895341154d883ed74bb016575a38->leave($__internal_a92d2be1ebe50f377f3f78355172e16ff1bb895341154d883ed74bb016575a38_prof);

        
        $__internal_f0a46b5f3d274b7620589d3d1b6b5f91f63d7a821e7bf5c7184900ed3546ae61->leave($__internal_f0a46b5f3d274b7620589d3d1b6b5f91f63d7a821e7bf5c7184900ed3546ae61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "TwigBundle:Exception:logs.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
