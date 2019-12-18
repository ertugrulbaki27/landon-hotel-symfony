<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_510acf83a49b48befbf492b1b14b949f34fcf1fc0e9dfaffa4bf74ff78227c81 extends Twig_Template
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
        $__internal_eb17ce4f3237f5cfb14ebb814150c937ce97099a4f9ee2f345be804a4d1d7a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb17ce4f3237f5cfb14ebb814150c937ce97099a4f9ee2f345be804a4d1d7a32->enter($__internal_eb17ce4f3237f5cfb14ebb814150c937ce97099a4f9ee2f345be804a4d1d7a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a71ecca1d8ab2d97098c1a926458922fed33ad90291950b8732df81e29d7c8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71ecca1d8ab2d97098c1a926458922fed33ad90291950b8732df81e29d7c8d5->enter($__internal_a71ecca1d8ab2d97098c1a926458922fed33ad90291950b8732df81e29d7c8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_eb17ce4f3237f5cfb14ebb814150c937ce97099a4f9ee2f345be804a4d1d7a32->leave($__internal_eb17ce4f3237f5cfb14ebb814150c937ce97099a4f9ee2f345be804a4d1d7a32_prof);

        
        $__internal_a71ecca1d8ab2d97098c1a926458922fed33ad90291950b8732df81e29d7c8d5->leave($__internal_a71ecca1d8ab2d97098c1a926458922fed33ad90291950b8732df81e29d7c8d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
