<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5cd4ee272d4794f8b0ee41036ccaf8dad5f1c7037ccc00da1c28f36928aab5f1 extends Twig_Template
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
        $__internal_0e150ee3bcd493bc78b704a1f04626a30b7b899923f33f313947b5b01a510849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e150ee3bcd493bc78b704a1f04626a30b7b899923f33f313947b5b01a510849->enter($__internal_0e150ee3bcd493bc78b704a1f04626a30b7b899923f33f313947b5b01a510849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_007c70e25386900741b279cde502d2b1ecbd8bb5df7d2567549e3acef21abca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007c70e25386900741b279cde502d2b1ecbd8bb5df7d2567549e3acef21abca1->enter($__internal_007c70e25386900741b279cde502d2b1ecbd8bb5df7d2567549e3acef21abca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0e150ee3bcd493bc78b704a1f04626a30b7b899923f33f313947b5b01a510849->leave($__internal_0e150ee3bcd493bc78b704a1f04626a30b7b899923f33f313947b5b01a510849_prof);

        
        $__internal_007c70e25386900741b279cde502d2b1ecbd8bb5df7d2567549e3acef21abca1->leave($__internal_007c70e25386900741b279cde502d2b1ecbd8bb5df7d2567549e3acef21abca1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
