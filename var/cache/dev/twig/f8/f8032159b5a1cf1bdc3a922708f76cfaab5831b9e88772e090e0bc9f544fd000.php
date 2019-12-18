<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_537fffe92a1dc3d92c45cef8c3c57575ac1d6a90b37bf2ca99d2d30331ed1d42 extends Twig_Template
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
        $__internal_aaed09433a5cb8a6ee14f6f1a0679593aa49f17b14708a3ebaa37bb8c4cec67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaed09433a5cb8a6ee14f6f1a0679593aa49f17b14708a3ebaa37bb8c4cec67f->enter($__internal_aaed09433a5cb8a6ee14f6f1a0679593aa49f17b14708a3ebaa37bb8c4cec67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c2af0f0efc5e0c4edfde6bb356c9cce97877af7b8e4c01244f4142e899dbc57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2af0f0efc5e0c4edfde6bb356c9cce97877af7b8e4c01244f4142e899dbc57b->enter($__internal_c2af0f0efc5e0c4edfde6bb356c9cce97877af7b8e4c01244f4142e899dbc57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_aaed09433a5cb8a6ee14f6f1a0679593aa49f17b14708a3ebaa37bb8c4cec67f->leave($__internal_aaed09433a5cb8a6ee14f6f1a0679593aa49f17b14708a3ebaa37bb8c4cec67f_prof);

        
        $__internal_c2af0f0efc5e0c4edfde6bb356c9cce97877af7b8e4c01244f4142e899dbc57b->leave($__internal_c2af0f0efc5e0c4edfde6bb356c9cce97877af7b8e4c01244f4142e899dbc57b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
