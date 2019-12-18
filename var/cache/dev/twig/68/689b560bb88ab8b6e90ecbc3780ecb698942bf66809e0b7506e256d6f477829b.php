<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0205d5add18e124fd0458bacd46625fc1f7ff867b2c1e0dd4b30dcd3cdafc515 extends Twig_Template
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
        $__internal_24c72923ab22a6bb8640cd81c05f688e201388d51f0e063bb4720429c9232c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c72923ab22a6bb8640cd81c05f688e201388d51f0e063bb4720429c9232c20->enter($__internal_24c72923ab22a6bb8640cd81c05f688e201388d51f0e063bb4720429c9232c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_23807b04e625f0b069def2bf456e38ea552ad1a463d6ac1f34c071ab747d2eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23807b04e625f0b069def2bf456e38ea552ad1a463d6ac1f34c071ab747d2eb4->enter($__internal_23807b04e625f0b069def2bf456e38ea552ad1a463d6ac1f34c071ab747d2eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_24c72923ab22a6bb8640cd81c05f688e201388d51f0e063bb4720429c9232c20->leave($__internal_24c72923ab22a6bb8640cd81c05f688e201388d51f0e063bb4720429c9232c20_prof);

        
        $__internal_23807b04e625f0b069def2bf456e38ea552ad1a463d6ac1f34c071ab747d2eb4->leave($__internal_23807b04e625f0b069def2bf456e38ea552ad1a463d6ac1f34c071ab747d2eb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
