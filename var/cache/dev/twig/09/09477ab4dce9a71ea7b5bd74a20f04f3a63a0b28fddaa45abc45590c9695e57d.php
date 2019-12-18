<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b47e19f1694c0e2250e6d2082f0f9078108ebd8eebd1d7ab35f7e9b8f0be3ff5 extends Twig_Template
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
        $__internal_0162c73668c041f70029ad09f83697addb463e703283f2e20820c5b9ab58b3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0162c73668c041f70029ad09f83697addb463e703283f2e20820c5b9ab58b3ec->enter($__internal_0162c73668c041f70029ad09f83697addb463e703283f2e20820c5b9ab58b3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ca26f164ef1fec119e401909cd352680c9b4b45f43827dcfe56f5388b3626f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca26f164ef1fec119e401909cd352680c9b4b45f43827dcfe56f5388b3626f84->enter($__internal_ca26f164ef1fec119e401909cd352680c9b4b45f43827dcfe56f5388b3626f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0162c73668c041f70029ad09f83697addb463e703283f2e20820c5b9ab58b3ec->leave($__internal_0162c73668c041f70029ad09f83697addb463e703283f2e20820c5b9ab58b3ec_prof);

        
        $__internal_ca26f164ef1fec119e401909cd352680c9b4b45f43827dcfe56f5388b3626f84->leave($__internal_ca26f164ef1fec119e401909cd352680c9b4b45f43827dcfe56f5388b3626f84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
