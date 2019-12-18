<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2e7390bbe11d64ce77ad99c5e49b2ea0bf4679a0117a5a012f33a2d0751c1839 extends Twig_Template
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
        $__internal_673999c1766b97631bed2f3e26cca06d21abca0f5c91a51cab628af23da90f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673999c1766b97631bed2f3e26cca06d21abca0f5c91a51cab628af23da90f31->enter($__internal_673999c1766b97631bed2f3e26cca06d21abca0f5c91a51cab628af23da90f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1619cdeca06777feabae08403abd4363ada9917f8d1af62a4dac693330181500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1619cdeca06777feabae08403abd4363ada9917f8d1af62a4dac693330181500->enter($__internal_1619cdeca06777feabae08403abd4363ada9917f8d1af62a4dac693330181500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_673999c1766b97631bed2f3e26cca06d21abca0f5c91a51cab628af23da90f31->leave($__internal_673999c1766b97631bed2f3e26cca06d21abca0f5c91a51cab628af23da90f31_prof);

        
        $__internal_1619cdeca06777feabae08403abd4363ada9917f8d1af62a4dac693330181500->leave($__internal_1619cdeca06777feabae08403abd4363ada9917f8d1af62a4dac693330181500_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
