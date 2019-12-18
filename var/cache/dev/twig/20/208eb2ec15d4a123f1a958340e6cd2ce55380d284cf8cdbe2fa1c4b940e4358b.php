<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_fb93fbc317f9add21fdeca964b00a0b953c869450c24486517225af9166ca8be extends Twig_Template
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
        $__internal_8af4efc599e22247513dceafb590f15499e47c6c41f189ad54b469b4fb7bd58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af4efc599e22247513dceafb590f15499e47c6c41f189ad54b469b4fb7bd58c->enter($__internal_8af4efc599e22247513dceafb590f15499e47c6c41f189ad54b469b4fb7bd58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_c1bf6ed36945f2002ad5ba2ce09e0d32dbe96541540436000a2edf082997f2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bf6ed36945f2002ad5ba2ce09e0d32dbe96541540436000a2edf082997f2eb->enter($__internal_c1bf6ed36945f2002ad5ba2ce09e0d32dbe96541540436000a2edf082997f2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8af4efc599e22247513dceafb590f15499e47c6c41f189ad54b469b4fb7bd58c->leave($__internal_8af4efc599e22247513dceafb590f15499e47c6c41f189ad54b469b4fb7bd58c_prof);

        
        $__internal_c1bf6ed36945f2002ad5ba2ce09e0d32dbe96541540436000a2edf082997f2eb->leave($__internal_c1bf6ed36945f2002ad5ba2ce09e0d32dbe96541540436000a2edf082997f2eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
