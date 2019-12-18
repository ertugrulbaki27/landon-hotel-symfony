<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_c39b0c46947f0898463b954ef4efad9bb1eb2d6fa03f202f2a752d2db7f76a4d extends Twig_Template
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
        $__internal_11c29d17736c6cba5898e23ff9bb1600a725cccf35e751b621b430b3bee03b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c29d17736c6cba5898e23ff9bb1600a725cccf35e751b621b430b3bee03b4a->enter($__internal_11c29d17736c6cba5898e23ff9bb1600a725cccf35e751b621b430b3bee03b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_f793010ed4dd8ddbbbe2a07d00db2e7bfb8e0182fb65eb1d1c19ed5d49fdc73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f793010ed4dd8ddbbbe2a07d00db2e7bfb8e0182fb65eb1d1c19ed5d49fdc73a->enter($__internal_f793010ed4dd8ddbbbe2a07d00db2e7bfb8e0182fb65eb1d1c19ed5d49fdc73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_11c29d17736c6cba5898e23ff9bb1600a725cccf35e751b621b430b3bee03b4a->leave($__internal_11c29d17736c6cba5898e23ff9bb1600a725cccf35e751b621b430b3bee03b4a_prof);

        
        $__internal_f793010ed4dd8ddbbbe2a07d00db2e7bfb8e0182fb65eb1d1c19ed5d49fdc73a->leave($__internal_f793010ed4dd8ddbbbe2a07d00db2e7bfb8e0182fb65eb1d1c19ed5d49fdc73a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
