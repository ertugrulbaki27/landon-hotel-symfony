<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_77e6def4dc4a2cce433dfe34bfb81e8023c7ae98370f9c6bbaeb4408cb846fc0 extends Twig_Template
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
        $__internal_94cc12207a9ea0f7b1f8682aaafeb27f301a4ba35b0f21f6b704e2817c054723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cc12207a9ea0f7b1f8682aaafeb27f301a4ba35b0f21f6b704e2817c054723->enter($__internal_94cc12207a9ea0f7b1f8682aaafeb27f301a4ba35b0f21f6b704e2817c054723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5b5e9a9b47e29c45ba3a9b9a0cf123f79cca3278203ca7bd0b54ed30129bb82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5e9a9b47e29c45ba3a9b9a0cf123f79cca3278203ca7bd0b54ed30129bb82a->enter($__internal_5b5e9a9b47e29c45ba3a9b9a0cf123f79cca3278203ca7bd0b54ed30129bb82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_94cc12207a9ea0f7b1f8682aaafeb27f301a4ba35b0f21f6b704e2817c054723->leave($__internal_94cc12207a9ea0f7b1f8682aaafeb27f301a4ba35b0f21f6b704e2817c054723_prof);

        
        $__internal_5b5e9a9b47e29c45ba3a9b9a0cf123f79cca3278203ca7bd0b54ed30129bb82a->leave($__internal_5b5e9a9b47e29c45ba3a9b9a0cf123f79cca3278203ca7bd0b54ed30129bb82a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
