<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1128982f15d99a4cd3a993ce65f8ada7ede442d331a0cc122d6b37d4b3ed4438 extends Twig_Template
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
        $__internal_0090e4df727543824585ae2df6999515a92c180fa08dd83e541a1bb2c51b164a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0090e4df727543824585ae2df6999515a92c180fa08dd83e541a1bb2c51b164a->enter($__internal_0090e4df727543824585ae2df6999515a92c180fa08dd83e541a1bb2c51b164a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1341f0f17bb8dc45f3e7e067eb7f38567f687cb9994c14a28b7beab4a4e07c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1341f0f17bb8dc45f3e7e067eb7f38567f687cb9994c14a28b7beab4a4e07c8c->enter($__internal_1341f0f17bb8dc45f3e7e067eb7f38567f687cb9994c14a28b7beab4a4e07c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0090e4df727543824585ae2df6999515a92c180fa08dd83e541a1bb2c51b164a->leave($__internal_0090e4df727543824585ae2df6999515a92c180fa08dd83e541a1bb2c51b164a_prof);

        
        $__internal_1341f0f17bb8dc45f3e7e067eb7f38567f687cb9994c14a28b7beab4a4e07c8c->leave($__internal_1341f0f17bb8dc45f3e7e067eb7f38567f687cb9994c14a28b7beab4a4e07c8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
