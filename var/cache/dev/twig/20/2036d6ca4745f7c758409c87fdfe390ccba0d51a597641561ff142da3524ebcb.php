<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_68fe00a06ed9435bf53b7f48e19e96a17554137829660b1b6bf95110f73c4072 extends Twig_Template
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
        $__internal_74dbb2e59c7c12335f39bf0f5df3d22d1936d847213fba640702a1e6d0722164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74dbb2e59c7c12335f39bf0f5df3d22d1936d847213fba640702a1e6d0722164->enter($__internal_74dbb2e59c7c12335f39bf0f5df3d22d1936d847213fba640702a1e6d0722164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6c704111b91266c9507df1ac7b0ee9939aef48852573393347a8cea606609961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c704111b91266c9507df1ac7b0ee9939aef48852573393347a8cea606609961->enter($__internal_6c704111b91266c9507df1ac7b0ee9939aef48852573393347a8cea606609961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_74dbb2e59c7c12335f39bf0f5df3d22d1936d847213fba640702a1e6d0722164->leave($__internal_74dbb2e59c7c12335f39bf0f5df3d22d1936d847213fba640702a1e6d0722164_prof);

        
        $__internal_6c704111b91266c9507df1ac7b0ee9939aef48852573393347a8cea606609961->leave($__internal_6c704111b91266c9507df1ac7b0ee9939aef48852573393347a8cea606609961_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
