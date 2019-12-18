<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3a447606726da8bb88f71ab746c3440d25de740ea48cbc8359acc5467c27f845 extends Twig_Template
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
        $__internal_fc3935ea2069324a339843f9fbf5a97cafb7457be80ef200345ec043e6da6bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3935ea2069324a339843f9fbf5a97cafb7457be80ef200345ec043e6da6bc0->enter($__internal_fc3935ea2069324a339843f9fbf5a97cafb7457be80ef200345ec043e6da6bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6256a6b580c4d9087b270314c9ae9fa055c779742c1fa85dc698b93b509d2881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6256a6b580c4d9087b270314c9ae9fa055c779742c1fa85dc698b93b509d2881->enter($__internal_6256a6b580c4d9087b270314c9ae9fa055c779742c1fa85dc698b93b509d2881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fc3935ea2069324a339843f9fbf5a97cafb7457be80ef200345ec043e6da6bc0->leave($__internal_fc3935ea2069324a339843f9fbf5a97cafb7457be80ef200345ec043e6da6bc0_prof);

        
        $__internal_6256a6b580c4d9087b270314c9ae9fa055c779742c1fa85dc698b93b509d2881->leave($__internal_6256a6b580c4d9087b270314c9ae9fa055c779742c1fa85dc698b93b509d2881_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
