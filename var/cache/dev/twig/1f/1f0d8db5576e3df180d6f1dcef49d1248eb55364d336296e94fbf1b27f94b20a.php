<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bb8909363a6c43a49a7af37ed8e00a92455b0b715c78942eeb0b32c3e1618187 extends Twig_Template
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
        $__internal_9f6744f1af4d16afedc3c8e3f02593b307bb0075701060787f218f1c7694e23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6744f1af4d16afedc3c8e3f02593b307bb0075701060787f218f1c7694e23a->enter($__internal_9f6744f1af4d16afedc3c8e3f02593b307bb0075701060787f218f1c7694e23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_db75fc4f87859c7ffcca741a53362f2ec716392478258134a8838cb679df5f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db75fc4f87859c7ffcca741a53362f2ec716392478258134a8838cb679df5f85->enter($__internal_db75fc4f87859c7ffcca741a53362f2ec716392478258134a8838cb679df5f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9f6744f1af4d16afedc3c8e3f02593b307bb0075701060787f218f1c7694e23a->leave($__internal_9f6744f1af4d16afedc3c8e3f02593b307bb0075701060787f218f1c7694e23a_prof);

        
        $__internal_db75fc4f87859c7ffcca741a53362f2ec716392478258134a8838cb679df5f85->leave($__internal_db75fc4f87859c7ffcca741a53362f2ec716392478258134a8838cb679df5f85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
