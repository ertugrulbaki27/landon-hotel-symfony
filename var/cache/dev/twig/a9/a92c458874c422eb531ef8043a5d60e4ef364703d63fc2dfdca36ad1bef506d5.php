<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_96ae978f732361e797416da0be74d5a654c4534c8062706a33ad8263da69f210 extends Twig_Template
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
        $__internal_6a522194331fa6e1790f2b039bb144979d32b82817af1d76d5c2ca522c95690e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a522194331fa6e1790f2b039bb144979d32b82817af1d76d5c2ca522c95690e->enter($__internal_6a522194331fa6e1790f2b039bb144979d32b82817af1d76d5c2ca522c95690e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_263260f1691f2c0981d57aeb6b82733512ca2e72cf7b391f0ef3c7beed74b4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263260f1691f2c0981d57aeb6b82733512ca2e72cf7b391f0ef3c7beed74b4ed->enter($__internal_263260f1691f2c0981d57aeb6b82733512ca2e72cf7b391f0ef3c7beed74b4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6a522194331fa6e1790f2b039bb144979d32b82817af1d76d5c2ca522c95690e->leave($__internal_6a522194331fa6e1790f2b039bb144979d32b82817af1d76d5c2ca522c95690e_prof);

        
        $__internal_263260f1691f2c0981d57aeb6b82733512ca2e72cf7b391f0ef3c7beed74b4ed->leave($__internal_263260f1691f2c0981d57aeb6b82733512ca2e72cf7b391f0ef3c7beed74b4ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
