<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_58690721ba6a02ec81b3f75edfb78918789a5c7e58feb8d1e26f832d3580b572 extends Twig_Template
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
        $__internal_7c77cdd8c0bca2f76b81cc0bff384f430e22a94a703792e6d3b4a3b25b873e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c77cdd8c0bca2f76b81cc0bff384f430e22a94a703792e6d3b4a3b25b873e8d->enter($__internal_7c77cdd8c0bca2f76b81cc0bff384f430e22a94a703792e6d3b4a3b25b873e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6f14bf1a99278d836fbce0320e72046a4a102772ecf721fcf78a26811c4134a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f14bf1a99278d836fbce0320e72046a4a102772ecf721fcf78a26811c4134a4->enter($__internal_6f14bf1a99278d836fbce0320e72046a4a102772ecf721fcf78a26811c4134a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7c77cdd8c0bca2f76b81cc0bff384f430e22a94a703792e6d3b4a3b25b873e8d->leave($__internal_7c77cdd8c0bca2f76b81cc0bff384f430e22a94a703792e6d3b4a3b25b873e8d_prof);

        
        $__internal_6f14bf1a99278d836fbce0320e72046a4a102772ecf721fcf78a26811c4134a4->leave($__internal_6f14bf1a99278d836fbce0320e72046a4a102772ecf721fcf78a26811c4134a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
