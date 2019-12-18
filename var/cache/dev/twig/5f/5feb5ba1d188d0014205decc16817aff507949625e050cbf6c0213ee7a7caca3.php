<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7ff7f7e985afcb57e641f74eaeb4eb0934e3fc2f3ae1a820aaf9d443c12bb6ff extends Twig_Template
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
        $__internal_e900cf84eb159fe68f2638f54df3ea1e18287a235c4fcb8f02d45c0e9ec5bc8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e900cf84eb159fe68f2638f54df3ea1e18287a235c4fcb8f02d45c0e9ec5bc8b->enter($__internal_e900cf84eb159fe68f2638f54df3ea1e18287a235c4fcb8f02d45c0e9ec5bc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0e191780b2e56e459fed4f119574767361847dbcb6e9ce295521bd810bf668ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e191780b2e56e459fed4f119574767361847dbcb6e9ce295521bd810bf668ee->enter($__internal_0e191780b2e56e459fed4f119574767361847dbcb6e9ce295521bd810bf668ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e900cf84eb159fe68f2638f54df3ea1e18287a235c4fcb8f02d45c0e9ec5bc8b->leave($__internal_e900cf84eb159fe68f2638f54df3ea1e18287a235c4fcb8f02d45c0e9ec5bc8b_prof);

        
        $__internal_0e191780b2e56e459fed4f119574767361847dbcb6e9ce295521bd810bf668ee->leave($__internal_0e191780b2e56e459fed4f119574767361847dbcb6e9ce295521bd810bf668ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
