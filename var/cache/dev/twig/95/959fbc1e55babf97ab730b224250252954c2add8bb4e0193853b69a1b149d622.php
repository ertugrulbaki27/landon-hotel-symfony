<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_14472206ef95d81194a5d6104e0efd15cd1905f4e852096a37513fa5976abf1e extends Twig_Template
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
        $__internal_824e43990aeaa9b3c759c052053e6b390d4a252da2b6aa28ba0199e872fffd0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824e43990aeaa9b3c759c052053e6b390d4a252da2b6aa28ba0199e872fffd0f->enter($__internal_824e43990aeaa9b3c759c052053e6b390d4a252da2b6aa28ba0199e872fffd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b837fafcad7729761ee3a4e067c88e1b2dd4c8384a30189b64ae2ed084f22c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b837fafcad7729761ee3a4e067c88e1b2dd4c8384a30189b64ae2ed084f22c0c->enter($__internal_b837fafcad7729761ee3a4e067c88e1b2dd4c8384a30189b64ae2ed084f22c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_824e43990aeaa9b3c759c052053e6b390d4a252da2b6aa28ba0199e872fffd0f->leave($__internal_824e43990aeaa9b3c759c052053e6b390d4a252da2b6aa28ba0199e872fffd0f_prof);

        
        $__internal_b837fafcad7729761ee3a4e067c88e1b2dd4c8384a30189b64ae2ed084f22c0c->leave($__internal_b837fafcad7729761ee3a4e067c88e1b2dd4c8384a30189b64ae2ed084f22c0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
