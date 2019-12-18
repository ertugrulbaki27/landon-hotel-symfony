<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_34114a80a5db14b12e43483a9026d7697a3c1a5a5e4ccbcb6685aafb307a4b46 extends Twig_Template
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
        $__internal_d89be3bfab2675e5a7b7269e736de7644d7106a58bc709952557b0aa40a1de5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89be3bfab2675e5a7b7269e736de7644d7106a58bc709952557b0aa40a1de5d->enter($__internal_d89be3bfab2675e5a7b7269e736de7644d7106a58bc709952557b0aa40a1de5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1767eb5fa0d88732c8505dc543ad3cbc8d8e9475ef9a1abae736dfc47b69b6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1767eb5fa0d88732c8505dc543ad3cbc8d8e9475ef9a1abae736dfc47b69b6ef->enter($__internal_1767eb5fa0d88732c8505dc543ad3cbc8d8e9475ef9a1abae736dfc47b69b6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d89be3bfab2675e5a7b7269e736de7644d7106a58bc709952557b0aa40a1de5d->leave($__internal_d89be3bfab2675e5a7b7269e736de7644d7106a58bc709952557b0aa40a1de5d_prof);

        
        $__internal_1767eb5fa0d88732c8505dc543ad3cbc8d8e9475ef9a1abae736dfc47b69b6ef->leave($__internal_1767eb5fa0d88732c8505dc543ad3cbc8d8e9475ef9a1abae736dfc47b69b6ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
