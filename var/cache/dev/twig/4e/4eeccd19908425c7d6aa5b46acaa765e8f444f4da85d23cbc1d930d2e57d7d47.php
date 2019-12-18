<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f9aac8318bf6c20995f7f6b2fd20eb608fc7604420125610db56d8f1d587cc67 extends Twig_Template
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
        $__internal_a292ae2eddc97871c22ae0fd1b5fb845391966e888c591c831ef02f8384870e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a292ae2eddc97871c22ae0fd1b5fb845391966e888c591c831ef02f8384870e9->enter($__internal_a292ae2eddc97871c22ae0fd1b5fb845391966e888c591c831ef02f8384870e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b8e18e370bf6088fe5f86789a531c4a361ff57944de0365b905004185b839fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e18e370bf6088fe5f86789a531c4a361ff57944de0365b905004185b839fd7->enter($__internal_b8e18e370bf6088fe5f86789a531c4a361ff57944de0365b905004185b839fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a292ae2eddc97871c22ae0fd1b5fb845391966e888c591c831ef02f8384870e9->leave($__internal_a292ae2eddc97871c22ae0fd1b5fb845391966e888c591c831ef02f8384870e9_prof);

        
        $__internal_b8e18e370bf6088fe5f86789a531c4a361ff57944de0365b905004185b839fd7->leave($__internal_b8e18e370bf6088fe5f86789a531c4a361ff57944de0365b905004185b839fd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
