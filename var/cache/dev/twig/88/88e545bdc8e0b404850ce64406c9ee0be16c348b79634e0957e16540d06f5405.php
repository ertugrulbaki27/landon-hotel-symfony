<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_35bd750335777a7146cab231bc7635cb01ed823bf05d65e9c23b820f075056ae extends Twig_Template
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
        $__internal_bc4dd1a33bed389e62adcc1815be75bdab9b93237f04d855eadcadba182f9efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4dd1a33bed389e62adcc1815be75bdab9b93237f04d855eadcadba182f9efb->enter($__internal_bc4dd1a33bed389e62adcc1815be75bdab9b93237f04d855eadcadba182f9efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:table.html.twig"));

        $__internal_dc0c4a8e0488d5d02ea2b635d9c3dfc55a20b40bcc9884f39a5e8edc497e2f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0c4a8e0488d5d02ea2b635d9c3dfc55a20b40bcc9884f39a5e8edc497e2f9c->enter($__internal_dc0c4a8e0488d5d02ea2b635d9c3dfc55a20b40bcc9884f39a5e8edc497e2f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:table.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 1, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new Twig_Error_Runtime('Variable "labels" does not exist.', 4, $this->getSourceContext()); })()), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new Twig_Error_Runtime('Variable "labels" does not exist.', 5, $this->getSourceContext()); })()), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 9, $this->getSourceContext()); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th scope=\"row\">";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()), $context["key"], array(), "array")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_bc4dd1a33bed389e62adcc1815be75bdab9b93237f04d855eadcadba182f9efb->leave($__internal_bc4dd1a33bed389e62adcc1815be75bdab9b93237f04d855eadcadba182f9efb_prof);

        
        $__internal_dc0c4a8e0488d5d02ea2b635d9c3dfc55a20b40bcc9884f39a5e8edc497e2f9c->leave($__internal_dc0c4a8e0488d5d02ea2b635d9c3dfc55a20b40bcc9884f39a5e8edc497e2f9c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  54 => 12,  50 => 11,  47 => 10,  43 => 9,  36 => 5,  32 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"{{ class|default('') }}\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ labels is defined ? labels[0] : 'Key' }}</th>
            <th scope=\"col\">{{ labels is defined ? labels[1] : 'Value' }}</th>
        </tr>
    </thead>
    <tbody>
        {% for key in data|keys|sort %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ profiler_dump(data[key]) }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "WebProfilerBundle:Profiler:table.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH05/05_03/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/table.html.twig");
    }
}
