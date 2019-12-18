<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7f4ec7d61d3921300227e93737619d8284e8617a59a49bf83cbba19fd1fc056a extends Twig_Template
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
        $__internal_636cd85f453ee9aea73f5b3f56effe941bf95e99be5504e56b0a6460abf0cf7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636cd85f453ee9aea73f5b3f56effe941bf95e99be5504e56b0a6460abf0cf7d->enter($__internal_636cd85f453ee9aea73f5b3f56effe941bf95e99be5504e56b0a6460abf0cf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_43d109b2d848dc8746df338cb445699af912dd20ffc662d6b746ff100803c783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d109b2d848dc8746df338cb445699af912dd20ffc662d6b746ff100803c783->enter($__internal_43d109b2d848dc8746df338cb445699af912dd20ffc662d6b746ff100803c783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_636cd85f453ee9aea73f5b3f56effe941bf95e99be5504e56b0a6460abf0cf7d->leave($__internal_636cd85f453ee9aea73f5b3f56effe941bf95e99be5504e56b0a6460abf0cf7d_prof);

        
        $__internal_43d109b2d848dc8746df338cb445699af912dd20ffc662d6b746ff100803c783->leave($__internal_43d109b2d848dc8746df338cb445699af912dd20ffc662d6b746ff100803c783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
