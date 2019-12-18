<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dec1533fa26275f60ada62a8257ebb016e94376a388e0b9c43f1ceb177a25255 extends Twig_Template
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
        $__internal_a97d8d2d25941b39cbe98dca9e5bfb665353ef8d482f4aa299aed1558c3732fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97d8d2d25941b39cbe98dca9e5bfb665353ef8d482f4aa299aed1558c3732fd->enter($__internal_a97d8d2d25941b39cbe98dca9e5bfb665353ef8d482f4aa299aed1558c3732fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a17544cd26fcd9dff5e21b9a49ae1f16d8021a4b97184e1551544e906c700459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17544cd26fcd9dff5e21b9a49ae1f16d8021a4b97184e1551544e906c700459->enter($__internal_a17544cd26fcd9dff5e21b9a49ae1f16d8021a4b97184e1551544e906c700459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a97d8d2d25941b39cbe98dca9e5bfb665353ef8d482f4aa299aed1558c3732fd->leave($__internal_a97d8d2d25941b39cbe98dca9e5bfb665353ef8d482f4aa299aed1558c3732fd_prof);

        
        $__internal_a17544cd26fcd9dff5e21b9a49ae1f16d8021a4b97184e1551544e906c700459->leave($__internal_a17544cd26fcd9dff5e21b9a49ae1f16d8021a4b97184e1551544e906c700459_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
