<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1df61835eb552192da55ff779fb9321cbd23680a76e84edbccb0c160324b67a1 extends Twig_Template
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
        $__internal_252cf5be228c7b039e3cbf022e819f003f93a3915aad0f20d1c48ed7041f6035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252cf5be228c7b039e3cbf022e819f003f93a3915aad0f20d1c48ed7041f6035->enter($__internal_252cf5be228c7b039e3cbf022e819f003f93a3915aad0f20d1c48ed7041f6035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_aa74a18c592fc776112dc15dfe33606f8bdc924bbdb3fd9d18aa71dbdc36d414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa74a18c592fc776112dc15dfe33606f8bdc924bbdb3fd9d18aa71dbdc36d414->enter($__internal_aa74a18c592fc776112dc15dfe33606f8bdc924bbdb3fd9d18aa71dbdc36d414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_252cf5be228c7b039e3cbf022e819f003f93a3915aad0f20d1c48ed7041f6035->leave($__internal_252cf5be228c7b039e3cbf022e819f003f93a3915aad0f20d1c48ed7041f6035_prof);

        
        $__internal_aa74a18c592fc776112dc15dfe33606f8bdc924bbdb3fd9d18aa71dbdc36d414->leave($__internal_aa74a18c592fc776112dc15dfe33606f8bdc924bbdb3fd9d18aa71dbdc36d414_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
