<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b5cd6fe74fa4a0d5e450c1e735f64ae49cf2c3e9d5757f18c65ad1bdf463abe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_dfac7a41113958eafd44b6a83a2290cbd647131eaa114471fa671c88a1939fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfac7a41113958eafd44b6a83a2290cbd647131eaa114471fa671c88a1939fdd->enter($__internal_dfac7a41113958eafd44b6a83a2290cbd647131eaa114471fa671c88a1939fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_6acbb4803b0b47deb88489a0f697f6dde65707d26330612319492650ad0b6d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acbb4803b0b47deb88489a0f697f6dde65707d26330612319492650ad0b6d10->enter($__internal_6acbb4803b0b47deb88489a0f697f6dde65707d26330612319492650ad0b6d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfac7a41113958eafd44b6a83a2290cbd647131eaa114471fa671c88a1939fdd->leave($__internal_dfac7a41113958eafd44b6a83a2290cbd647131eaa114471fa671c88a1939fdd_prof);

        
        $__internal_6acbb4803b0b47deb88489a0f697f6dde65707d26330612319492650ad0b6d10->leave($__internal_6acbb4803b0b47deb88489a0f697f6dde65707d26330612319492650ad0b6d10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1b3634265d76d6ee2c5107a6281c75e948e97ef85eec0460d7202269ecad821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b3634265d76d6ee2c5107a6281c75e948e97ef85eec0460d7202269ecad821->enter($__internal_b1b3634265d76d6ee2c5107a6281c75e948e97ef85eec0460d7202269ecad821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_648e4344d9daffd050bfafc1b12080672f98243e8e42cedbf5586937f5289a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648e4344d9daffd050bfafc1b12080672f98243e8e42cedbf5586937f5289a40->enter($__internal_648e4344d9daffd050bfafc1b12080672f98243e8e42cedbf5586937f5289a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_648e4344d9daffd050bfafc1b12080672f98243e8e42cedbf5586937f5289a40->leave($__internal_648e4344d9daffd050bfafc1b12080672f98243e8e42cedbf5586937f5289a40_prof);

        
        $__internal_b1b3634265d76d6ee2c5107a6281c75e948e97ef85eec0460d7202269ecad821->leave($__internal_b1b3634265d76d6ee2c5107a6281c75e948e97ef85eec0460d7202269ecad821_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfb5aed1d88ba5e2707645464dfb19bcb75abdf0cd39eec9208af3a795864656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb5aed1d88ba5e2707645464dfb19bcb75abdf0cd39eec9208af3a795864656->enter($__internal_bfb5aed1d88ba5e2707645464dfb19bcb75abdf0cd39eec9208af3a795864656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b589d6f8f75a7658002237a26073c120daf43acf92ac98bd6cc7b2ec1235470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b589d6f8f75a7658002237a26073c120daf43acf92ac98bd6cc7b2ec1235470->enter($__internal_8b589d6f8f75a7658002237a26073c120daf43acf92ac98bd6cc7b2ec1235470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8b589d6f8f75a7658002237a26073c120daf43acf92ac98bd6cc7b2ec1235470->leave($__internal_8b589d6f8f75a7658002237a26073c120daf43acf92ac98bd6cc7b2ec1235470_prof);

        
        $__internal_bfb5aed1d88ba5e2707645464dfb19bcb75abdf0cd39eec9208af3a795864656->leave($__internal_bfb5aed1d88ba5e2707645464dfb19bcb75abdf0cd39eec9208af3a795864656_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cd7178103a7228b4d55faa584f519805de45e6c25c2a9ae2b8be2b171c55adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd7178103a7228b4d55faa584f519805de45e6c25c2a9ae2b8be2b171c55adf->enter($__internal_4cd7178103a7228b4d55faa584f519805de45e6c25c2a9ae2b8be2b171c55adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f07e20a412ce26f6acbe4b4ba3efd8c88d576545435626f6b97b93fe19bb0b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07e20a412ce26f6acbe4b4ba3efd8c88d576545435626f6b97b93fe19bb0b10->enter($__internal_f07e20a412ce26f6acbe4b4ba3efd8c88d576545435626f6b97b93fe19bb0b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f07e20a412ce26f6acbe4b4ba3efd8c88d576545435626f6b97b93fe19bb0b10->leave($__internal_f07e20a412ce26f6acbe4b4ba3efd8c88d576545435626f6b97b93fe19bb0b10_prof);

        
        $__internal_4cd7178103a7228b4d55faa584f519805de45e6c25c2a9ae2b8be2b171c55adf->leave($__internal_4cd7178103a7228b4d55faa584f519805de45e6c25c2a9ae2b8be2b171c55adf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
