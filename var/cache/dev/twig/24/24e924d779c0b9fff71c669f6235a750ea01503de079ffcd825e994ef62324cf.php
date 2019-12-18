<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8a2dc85b1dc785c36612dc322bbe156d5d67c2b385796d39740b04e4ada4c80d extends Twig_Template
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
        $__internal_6f8a319af033da02e2748d6ba20f0105c08b8ba6dd7e8429b98a5cb875594359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8a319af033da02e2748d6ba20f0105c08b8ba6dd7e8429b98a5cb875594359->enter($__internal_6f8a319af033da02e2748d6ba20f0105c08b8ba6dd7e8429b98a5cb875594359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6af1143c58c4012e45dd1c8bb59289b66dbe67c089dffa0ecb5f72bea07e0185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af1143c58c4012e45dd1c8bb59289b66dbe67c089dffa0ecb5f72bea07e0185->enter($__internal_6af1143c58c4012e45dd1c8bb59289b66dbe67c089dffa0ecb5f72bea07e0185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6f8a319af033da02e2748d6ba20f0105c08b8ba6dd7e8429b98a5cb875594359->leave($__internal_6f8a319af033da02e2748d6ba20f0105c08b8ba6dd7e8429b98a5cb875594359_prof);

        
        $__internal_6af1143c58c4012e45dd1c8bb59289b66dbe67c089dffa0ecb5f72bea07e0185->leave($__internal_6af1143c58c4012e45dd1c8bb59289b66dbe67c089dffa0ecb5f72bea07e0185_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
