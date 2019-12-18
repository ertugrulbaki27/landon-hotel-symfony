<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4bd7b99cb61ea517f46004b4b1582f9546603189fb7b0079d4af29f033eaabdf extends Twig_Template
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
        $__internal_43cffa7b552b38b8f656ccf5beedd0cc95f52aa3dc8657f08fc9488c31fc2724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cffa7b552b38b8f656ccf5beedd0cc95f52aa3dc8657f08fc9488c31fc2724->enter($__internal_43cffa7b552b38b8f656ccf5beedd0cc95f52aa3dc8657f08fc9488c31fc2724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1d7081ffadfd1e29e40a48ce684a8ca6b6d9628b487065d15783f478e557a1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7081ffadfd1e29e40a48ce684a8ca6b6d9628b487065d15783f478e557a1c4->enter($__internal_1d7081ffadfd1e29e40a48ce684a8ca6b6d9628b487065d15783f478e557a1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43cffa7b552b38b8f656ccf5beedd0cc95f52aa3dc8657f08fc9488c31fc2724->leave($__internal_43cffa7b552b38b8f656ccf5beedd0cc95f52aa3dc8657f08fc9488c31fc2724_prof);

        
        $__internal_1d7081ffadfd1e29e40a48ce684a8ca6b6d9628b487065d15783f478e557a1c4->leave($__internal_1d7081ffadfd1e29e40a48ce684a8ca6b6d9628b487065d15783f478e557a1c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
