<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f547a7813144eea36f962fda99289a8fdc6d4d5f4e462216a3e509c771dc27b1 extends Twig_Template
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
        $__internal_256120802dd9067bd754791ed4090a3df918ee2c15726542a324f5b6ca9355b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256120802dd9067bd754791ed4090a3df918ee2c15726542a324f5b6ca9355b5->enter($__internal_256120802dd9067bd754791ed4090a3df918ee2c15726542a324f5b6ca9355b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5ef06f481252b5e7672d7ac7cefb80307aba3fc5c27d66877409e79f85caba5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef06f481252b5e7672d7ac7cefb80307aba3fc5c27d66877409e79f85caba5d->enter($__internal_5ef06f481252b5e7672d7ac7cefb80307aba3fc5c27d66877409e79f85caba5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_256120802dd9067bd754791ed4090a3df918ee2c15726542a324f5b6ca9355b5->leave($__internal_256120802dd9067bd754791ed4090a3df918ee2c15726542a324f5b6ca9355b5_prof);

        
        $__internal_5ef06f481252b5e7672d7ac7cefb80307aba3fc5c27d66877409e79f85caba5d->leave($__internal_5ef06f481252b5e7672d7ac7cefb80307aba3fc5c27d66877409e79f85caba5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
