<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_29852aa467a14e73d741247fae6a37e5de2b11a99afee9ed9f79b43fc8ea313e extends Twig_Template
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
        $__internal_06360f19f27ca5ee08fc070b63c058b957100b0876254d037702034eae77c6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06360f19f27ca5ee08fc070b63c058b957100b0876254d037702034eae77c6c2->enter($__internal_06360f19f27ca5ee08fc070b63c058b957100b0876254d037702034eae77c6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fb8fde429854598fb330aafa297fd59ce473278d89079abba856cc551a36f0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8fde429854598fb330aafa297fd59ce473278d89079abba856cc551a36f0cf->enter($__internal_fb8fde429854598fb330aafa297fd59ce473278d89079abba856cc551a36f0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_06360f19f27ca5ee08fc070b63c058b957100b0876254d037702034eae77c6c2->leave($__internal_06360f19f27ca5ee08fc070b63c058b957100b0876254d037702034eae77c6c2_prof);

        
        $__internal_fb8fde429854598fb330aafa297fd59ce473278d89079abba856cc551a36f0cf->leave($__internal_fb8fde429854598fb330aafa297fd59ce473278d89079abba856cc551a36f0cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
