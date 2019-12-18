<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_418b38baf60b9168012ba812122a81710b0fe728b071182936eeee1a81e84136 extends Twig_Template
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
        $__internal_2aa86766dede35bc019e634a90dd38d1b7f98d77fbdd6159ede447e6dcbaafdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa86766dede35bc019e634a90dd38d1b7f98d77fbdd6159ede447e6dcbaafdf->enter($__internal_2aa86766dede35bc019e634a90dd38d1b7f98d77fbdd6159ede447e6dcbaafdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f9c9463dd23c82a2e8cb778ece3be4d09f36d7a32a18b5d57c1f5d16a219f001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c9463dd23c82a2e8cb778ece3be4d09f36d7a32a18b5d57c1f5d16a219f001->enter($__internal_f9c9463dd23c82a2e8cb778ece3be4d09f36d7a32a18b5d57c1f5d16a219f001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_2aa86766dede35bc019e634a90dd38d1b7f98d77fbdd6159ede447e6dcbaafdf->leave($__internal_2aa86766dede35bc019e634a90dd38d1b7f98d77fbdd6159ede447e6dcbaafdf_prof);

        
        $__internal_f9c9463dd23c82a2e8cb778ece3be4d09f36d7a32a18b5d57c1f5d16a219f001->leave($__internal_f9c9463dd23c82a2e8cb778ece3be4d09f36d7a32a18b5d57c1f5d16a219f001_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
