<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1fef24e3181dd84054ec44dcd153e24ddc42d6718cba41f18ab67cbf51fce306 extends Twig_Template
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
        $__internal_2ef20fa4279d092b28254a5036d911e2d96eb7df9c432f70fafbe2b9a336ae9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef20fa4279d092b28254a5036d911e2d96eb7df9c432f70fafbe2b9a336ae9b->enter($__internal_2ef20fa4279d092b28254a5036d911e2d96eb7df9c432f70fafbe2b9a336ae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_dbaedf1a5ce8f3e6e167b606cb83a0ca27fffb31583f2e07a54fb458d02efe08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbaedf1a5ce8f3e6e167b606cb83a0ca27fffb31583f2e07a54fb458d02efe08->enter($__internal_dbaedf1a5ce8f3e6e167b606cb83a0ca27fffb31583f2e07a54fb458d02efe08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2ef20fa4279d092b28254a5036d911e2d96eb7df9c432f70fafbe2b9a336ae9b->leave($__internal_2ef20fa4279d092b28254a5036d911e2d96eb7df9c432f70fafbe2b9a336ae9b_prof);

        
        $__internal_dbaedf1a5ce8f3e6e167b606cb83a0ca27fffb31583f2e07a54fb458d02efe08->leave($__internal_dbaedf1a5ce8f3e6e167b606cb83a0ca27fffb31583f2e07a54fb458d02efe08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
