<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_0b9315daea7984279927fa0b2471e107dfd787076b0f8227910c1c9a65f2d1a6 extends Twig_Template
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
        $__internal_2dd759eb98cb480e9bbb41181731badfdb7efe00a89960087ae75ad653f79b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd759eb98cb480e9bbb41181731badfdb7efe00a89960087ae75ad653f79b23->enter($__internal_2dd759eb98cb480e9bbb41181731badfdb7efe00a89960087ae75ad653f79b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_a8215a7ed500967864e7fa5ea103bdd2ea6ee2051889f0ba465b838b77da7b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8215a7ed500967864e7fa5ea103bdd2ea6ee2051889f0ba465b838b77da7b1f->enter($__internal_a8215a7ed500967864e7fa5ea103bdd2ea6ee2051889f0ba465b838b77da7b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2dd759eb98cb480e9bbb41181731badfdb7efe00a89960087ae75ad653f79b23->leave($__internal_2dd759eb98cb480e9bbb41181731badfdb7efe00a89960087ae75ad653f79b23_prof);

        
        $__internal_a8215a7ed500967864e7fa5ea103bdd2ea6ee2051889f0ba465b838b77da7b1f->leave($__internal_a8215a7ed500967864e7fa5ea103bdd2ea6ee2051889f0ba465b838b77da7b1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\" <?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/button_attributes.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
