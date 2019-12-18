<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_281f6693eedecf95b564f9cd30dd90be9b4f2138063a35ccb5cb073874838138 extends Twig_Template
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
        $__internal_2b6493b24e101de26e10de1fdea12f371160561f357f17ff07f3bc3b35ceddd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6493b24e101de26e10de1fdea12f371160561f357f17ff07f3bc3b35ceddd9->enter($__internal_2b6493b24e101de26e10de1fdea12f371160561f357f17ff07f3bc3b35ceddd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e40c259aea8ad46a60d5de91ff59e8d1c864e09dbf2d728aa567bc554d8ea154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40c259aea8ad46a60d5de91ff59e8d1c864e09dbf2d728aa567bc554d8ea154->enter($__internal_e40c259aea8ad46a60d5de91ff59e8d1c864e09dbf2d728aa567bc554d8ea154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2b6493b24e101de26e10de1fdea12f371160561f357f17ff07f3bc3b35ceddd9->leave($__internal_2b6493b24e101de26e10de1fdea12f371160561f357f17ff07f3bc3b35ceddd9_prof);

        
        $__internal_e40c259aea8ad46a60d5de91ff59e8d1c864e09dbf2d728aa567bc554d8ea154->leave($__internal_e40c259aea8ad46a60d5de91ff59e8d1c864e09dbf2d728aa567bc554d8ea154_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
