<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_385d5feb455f819bb2c9bf5515f4dcc6f38090e10cdc83700603f353bf9da750 extends Twig_Template
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
        $__internal_414f6133771e7251b94571da78c3045139fdb28529dd6ba25f9ba7d56945c05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414f6133771e7251b94571da78c3045139fdb28529dd6ba25f9ba7d56945c05c->enter($__internal_414f6133771e7251b94571da78c3045139fdb28529dd6ba25f9ba7d56945c05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ac4eae6b0b3d98cb503b24c0ce8fe50fd26d9e46f7459acaaf5f8f47a4313f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4eae6b0b3d98cb503b24c0ce8fe50fd26d9e46f7459acaaf5f8f47a4313f56->enter($__internal_ac4eae6b0b3d98cb503b24c0ce8fe50fd26d9e46f7459acaaf5f8f47a4313f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_414f6133771e7251b94571da78c3045139fdb28529dd6ba25f9ba7d56945c05c->leave($__internal_414f6133771e7251b94571da78c3045139fdb28529dd6ba25f9ba7d56945c05c_prof);

        
        $__internal_ac4eae6b0b3d98cb503b24c0ce8fe50fd26d9e46f7459acaaf5f8f47a4313f56->leave($__internal_ac4eae6b0b3d98cb503b24c0ce8fe50fd26d9e46f7459acaaf5f8f47a4313f56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
