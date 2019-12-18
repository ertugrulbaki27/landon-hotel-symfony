<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_91444f467f4200b518eb04e79d0e43a45d1934bb5d58d918cdd46a35da82d983 extends Twig_Template
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
        $__internal_069b52d1f907f4576d1904fe26e1a24537fd6da666eb22a34c8d418ba26cce7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069b52d1f907f4576d1904fe26e1a24537fd6da666eb22a34c8d418ba26cce7f->enter($__internal_069b52d1f907f4576d1904fe26e1a24537fd6da666eb22a34c8d418ba26cce7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_72b37d804a6d64732d01ccd46fd0a71d7490e894b3f13ca71066587affd08276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b37d804a6d64732d01ccd46fd0a71d7490e894b3f13ca71066587affd08276->enter($__internal_72b37d804a6d64732d01ccd46fd0a71d7490e894b3f13ca71066587affd08276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_069b52d1f907f4576d1904fe26e1a24537fd6da666eb22a34c8d418ba26cce7f->leave($__internal_069b52d1f907f4576d1904fe26e1a24537fd6da666eb22a34c8d418ba26cce7f_prof);

        
        $__internal_72b37d804a6d64732d01ccd46fd0a71d7490e894b3f13ca71066587affd08276->leave($__internal_72b37d804a6d64732d01ccd46fd0a71d7490e894b3f13ca71066587affd08276_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
