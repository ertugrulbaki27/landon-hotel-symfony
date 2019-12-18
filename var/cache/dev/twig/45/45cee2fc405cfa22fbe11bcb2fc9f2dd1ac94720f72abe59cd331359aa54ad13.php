<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dc68ce5f35274ef70f2e10e3d29cf2297992159b5df6dc4f0cd069eeede5bb2e extends Twig_Template
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
        $__internal_a7bcb43a86e5c9f691cd70406d48d6e8edc7fdd53fe484b2662eccfb603c995a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7bcb43a86e5c9f691cd70406d48d6e8edc7fdd53fe484b2662eccfb603c995a->enter($__internal_a7bcb43a86e5c9f691cd70406d48d6e8edc7fdd53fe484b2662eccfb603c995a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_346e824203a09e437482eb19cd5877a99d513a1be3444a5aabc62f9a92f1c5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346e824203a09e437482eb19cd5877a99d513a1be3444a5aabc62f9a92f1c5ca->enter($__internal_346e824203a09e437482eb19cd5877a99d513a1be3444a5aabc62f9a92f1c5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a7bcb43a86e5c9f691cd70406d48d6e8edc7fdd53fe484b2662eccfb603c995a->leave($__internal_a7bcb43a86e5c9f691cd70406d48d6e8edc7fdd53fe484b2662eccfb603c995a_prof);

        
        $__internal_346e824203a09e437482eb19cd5877a99d513a1be3444a5aabc62f9a92f1c5ca->leave($__internal_346e824203a09e437482eb19cd5877a99d513a1be3444a5aabc62f9a92f1c5ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
