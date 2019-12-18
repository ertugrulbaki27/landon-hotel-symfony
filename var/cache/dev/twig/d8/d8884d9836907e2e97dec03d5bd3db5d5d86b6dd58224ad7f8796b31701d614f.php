<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_aa77381a3543f3cd19ebe9c11751e4a5bf2b946567cb340b47d6d2198544ad86 extends Twig_Template
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
        $__internal_9abde14933a3d5121999a2a77fb6c18cad6343e47aa010566a6616fb0b6f75ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abde14933a3d5121999a2a77fb6c18cad6343e47aa010566a6616fb0b6f75ea->enter($__internal_9abde14933a3d5121999a2a77fb6c18cad6343e47aa010566a6616fb0b6f75ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_1278d6169ac41f718304e3078cb3610347beed0316168a4bd631b5ed80008ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1278d6169ac41f718304e3078cb3610347beed0316168a4bd631b5ed80008ddc->enter($__internal_1278d6169ac41f718304e3078cb3610347beed0316168a4bd631b5ed80008ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

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
        
        $__internal_9abde14933a3d5121999a2a77fb6c18cad6343e47aa010566a6616fb0b6f75ea->leave($__internal_9abde14933a3d5121999a2a77fb6c18cad6343e47aa010566a6616fb0b6f75ea_prof);

        
        $__internal_1278d6169ac41f718304e3078cb3610347beed0316168a4bd631b5ed80008ddc->leave($__internal_1278d6169ac41f718304e3078cb3610347beed0316168a4bd631b5ed80008ddc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
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
", "@Twig/Exception/logs.html.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
