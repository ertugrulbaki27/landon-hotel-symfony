<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3d69eff356e35752f6f3125a8d1443cb4454574ba8c2142fbc34335034c6e90e extends Twig_Template
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
        $__internal_35370887e34e856cde85edc422b848993042ec4182a9c66f94a06b507ed90290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35370887e34e856cde85edc422b848993042ec4182a9c66f94a06b507ed90290->enter($__internal_35370887e34e856cde85edc422b848993042ec4182a9c66f94a06b507ed90290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_00044bcfd201300f211148ab9c15cdb41cf240769856f9e64d24fbd92e46ffa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00044bcfd201300f211148ab9c15cdb41cf240769856f9e64d24fbd92e46ffa8->enter($__internal_00044bcfd201300f211148ab9c15cdb41cf240769856f9e64d24fbd92e46ffa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_35370887e34e856cde85edc422b848993042ec4182a9c66f94a06b507ed90290->leave($__internal_35370887e34e856cde85edc422b848993042ec4182a9c66f94a06b507ed90290_prof);

        
        $__internal_00044bcfd201300f211148ab9c15cdb41cf240769856f9e64d24fbd92e46ffa8->leave($__internal_00044bcfd201300f211148ab9c15cdb41cf240769856f9e64d24fbd92e46ffa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
