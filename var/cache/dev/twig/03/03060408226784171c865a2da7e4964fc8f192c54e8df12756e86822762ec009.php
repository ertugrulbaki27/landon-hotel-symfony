<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_58f8f871eb6ac312c83a7a548e1df717432bfc3c2dcccca16ae0f8a07bae8305 extends Twig_Template
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
        $__internal_a6c974f0d41b342e916d66b2be2a8b7b9b1a01a7e43744b6ba64245f5d75623f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c974f0d41b342e916d66b2be2a8b7b9b1a01a7e43744b6ba64245f5d75623f->enter($__internal_a6c974f0d41b342e916d66b2be2a8b7b9b1a01a7e43744b6ba64245f5d75623f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_cc8e49b3415c61c7e8778cf5e89c8dfcce39a45f8e95f03490cc299fd9e9a78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8e49b3415c61c7e8778cf5e89c8dfcce39a45f8e95f03490cc299fd9e9a78c->enter($__internal_cc8e49b3415c61c7e8778cf5e89c8dfcce39a45f8e95f03490cc299fd9e9a78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_a6c974f0d41b342e916d66b2be2a8b7b9b1a01a7e43744b6ba64245f5d75623f->leave($__internal_a6c974f0d41b342e916d66b2be2a8b7b9b1a01a7e43744b6ba64245f5d75623f_prof);

        
        $__internal_cc8e49b3415c61c7e8778cf5e89c8dfcce39a45f8e95f03490cc299fd9e9a78c->leave($__internal_cc8e49b3415c61c7e8778cf5e89c8dfcce39a45f8e95f03490cc299fd9e9a78c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
