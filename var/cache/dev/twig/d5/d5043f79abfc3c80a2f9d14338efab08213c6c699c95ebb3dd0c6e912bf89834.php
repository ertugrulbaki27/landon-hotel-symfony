<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e0947d90028cfc49cf531769c65fcebab09345029c76268177c0c66990589b82 extends Twig_Template
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
        $__internal_88d01320a3b597c94fa6a5a4123f4c9f98f60bd8a50ce71eeaa10dc1ef03d76c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d01320a3b597c94fa6a5a4123f4c9f98f60bd8a50ce71eeaa10dc1ef03d76c->enter($__internal_88d01320a3b597c94fa6a5a4123f4c9f98f60bd8a50ce71eeaa10dc1ef03d76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bb70bbf0b26947cce48a0f5472d7417bebb0a25bde23ec713749e31140c7f781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb70bbf0b26947cce48a0f5472d7417bebb0a25bde23ec713749e31140c7f781->enter($__internal_bb70bbf0b26947cce48a0f5472d7417bebb0a25bde23ec713749e31140c7f781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_88d01320a3b597c94fa6a5a4123f4c9f98f60bd8a50ce71eeaa10dc1ef03d76c->leave($__internal_88d01320a3b597c94fa6a5a4123f4c9f98f60bd8a50ce71eeaa10dc1ef03d76c_prof);

        
        $__internal_bb70bbf0b26947cce48a0f5472d7417bebb0a25bde23ec713749e31140c7f781->leave($__internal_bb70bbf0b26947cce48a0f5472d7417bebb0a25bde23ec713749e31140c7f781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
