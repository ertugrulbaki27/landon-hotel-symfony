<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_22c463e1fa9c43609f3473d5501686afb275ee2059d202c3ed56209ba61a91e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a504140102e138e7dbd2b2b5e0c03a050aaba068089cabf399bb7928a3ab8e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a504140102e138e7dbd2b2b5e0c03a050aaba068089cabf399bb7928a3ab8e80->enter($__internal_a504140102e138e7dbd2b2b5e0c03a050aaba068089cabf399bb7928a3ab8e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_da9f3fcbb9cf2c2e7988733f19cfb226ff9e027f1137e94ecc786fe6bb51bfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9f3fcbb9cf2c2e7988733f19cfb226ff9e027f1137e94ecc786fe6bb51bfc3->enter($__internal_da9f3fcbb9cf2c2e7988733f19cfb226ff9e027f1137e94ecc786fe6bb51bfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a504140102e138e7dbd2b2b5e0c03a050aaba068089cabf399bb7928a3ab8e80->leave($__internal_a504140102e138e7dbd2b2b5e0c03a050aaba068089cabf399bb7928a3ab8e80_prof);

        
        $__internal_da9f3fcbb9cf2c2e7988733f19cfb226ff9e027f1137e94ecc786fe6bb51bfc3->leave($__internal_da9f3fcbb9cf2c2e7988733f19cfb226ff9e027f1137e94ecc786fe6bb51bfc3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54a31f6531f21a0de43b37b4f4f748dedefec479ba65f638f4a9ae685eb5f2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a31f6531f21a0de43b37b4f4f748dedefec479ba65f638f4a9ae685eb5f2b3->enter($__internal_54a31f6531f21a0de43b37b4f4f748dedefec479ba65f638f4a9ae685eb5f2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e100de282d50a43eb93e77250c8ff06e1966ca938ee9495bc21e86f5873c14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e100de282d50a43eb93e77250c8ff06e1966ca938ee9495bc21e86f5873c14f->enter($__internal_2e100de282d50a43eb93e77250c8ff06e1966ca938ee9495bc21e86f5873c14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2e100de282d50a43eb93e77250c8ff06e1966ca938ee9495bc21e86f5873c14f->leave($__internal_2e100de282d50a43eb93e77250c8ff06e1966ca938ee9495bc21e86f5873c14f_prof);

        
        $__internal_54a31f6531f21a0de43b37b4f4f748dedefec479ba65f638f4a9ae685eb5f2b3->leave($__internal_54a31f6531f21a0de43b37b4f4f748dedefec479ba65f638f4a9ae685eb5f2b3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_54462dbef01ee77f0f1a9f6052b5de8e3cf1186e90031cebbfb13d7ca626ec5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54462dbef01ee77f0f1a9f6052b5de8e3cf1186e90031cebbfb13d7ca626ec5c->enter($__internal_54462dbef01ee77f0f1a9f6052b5de8e3cf1186e90031cebbfb13d7ca626ec5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d366d4b742c7203f60aa9712a9d8f9376a77d801ef83c68560ed57dd38078700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d366d4b742c7203f60aa9712a9d8f9376a77d801ef83c68560ed57dd38078700->enter($__internal_d366d4b742c7203f60aa9712a9d8f9376a77d801ef83c68560ed57dd38078700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d366d4b742c7203f60aa9712a9d8f9376a77d801ef83c68560ed57dd38078700->leave($__internal_d366d4b742c7203f60aa9712a9d8f9376a77d801ef83c68560ed57dd38078700_prof);

        
        $__internal_54462dbef01ee77f0f1a9f6052b5de8e3cf1186e90031cebbfb13d7ca626ec5c->leave($__internal_54462dbef01ee77f0f1a9f6052b5de8e3cf1186e90031cebbfb13d7ca626ec5c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb507e8510dd2a7974dc4ec6f8dac75cd4614b3a27aab80022ad20840e36b36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb507e8510dd2a7974dc4ec6f8dac75cd4614b3a27aab80022ad20840e36b36e->enter($__internal_eb507e8510dd2a7974dc4ec6f8dac75cd4614b3a27aab80022ad20840e36b36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fcc45fd8441eb11667f5e5152b2bc6b2b7014742334c8c8f18dd915dea3b373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcc45fd8441eb11667f5e5152b2bc6b2b7014742334c8c8f18dd915dea3b373->enter($__internal_4fcc45fd8441eb11667f5e5152b2bc6b2b7014742334c8c8f18dd915dea3b373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4fcc45fd8441eb11667f5e5152b2bc6b2b7014742334c8c8f18dd915dea3b373->leave($__internal_4fcc45fd8441eb11667f5e5152b2bc6b2b7014742334c8c8f18dd915dea3b373_prof);

        
        $__internal_eb507e8510dd2a7974dc4ec6f8dac75cd4614b3a27aab80022ad20840e36b36e->leave($__internal_eb507e8510dd2a7974dc4ec6f8dac75cd4614b3a27aab80022ad20840e36b36e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ertugrul27/projects/linkedin/php/symfony/a project/Ex_Files_Chapter5(1)/Ex_Files_Chapter5/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
