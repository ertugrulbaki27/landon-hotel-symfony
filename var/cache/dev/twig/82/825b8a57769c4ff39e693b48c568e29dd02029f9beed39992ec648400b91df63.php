<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c797af5a41a6b39c82b458165200a688dea0d9edb625143617ab6d3726f0a220 extends Twig_Template
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
        $__internal_6f9cd9e52822748bea60597de531bb7538e3a68de83811229f54cfea4cb8a0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9cd9e52822748bea60597de531bb7538e3a68de83811229f54cfea4cb8a0c9->enter($__internal_6f9cd9e52822748bea60597de531bb7538e3a68de83811229f54cfea4cb8a0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_040ccbddc1359ce6d20e008204b2186bcb45298596af972790f2e2e513076f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040ccbddc1359ce6d20e008204b2186bcb45298596af972790f2e2e513076f6b->enter($__internal_040ccbddc1359ce6d20e008204b2186bcb45298596af972790f2e2e513076f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6f9cd9e52822748bea60597de531bb7538e3a68de83811229f54cfea4cb8a0c9->leave($__internal_6f9cd9e52822748bea60597de531bb7538e3a68de83811229f54cfea4cb8a0c9_prof);

        
        $__internal_040ccbddc1359ce6d20e008204b2186bcb45298596af972790f2e2e513076f6b->leave($__internal_040ccbddc1359ce6d20e008204b2186bcb45298596af972790f2e2e513076f6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
