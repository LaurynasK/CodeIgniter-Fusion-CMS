<?php

/* default-demo/categories_area.twig */
class __TwigTemplate_115ec9ac3e1322e1cb9f857fc42ab2b5dbd57fb05a3b787d59bad34635edbe97 extends Twig_Template
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
        // line 1
        echo "<div class=\"categories\">
\t\t\t\t\t <h3>CATEGORIES</h3>
\t\t\t\t\t <ul>
\t\t\t\t\t ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 5
            echo "\t\t\t\t\t     <li><a href=\"";
            echo twig_escape_filter($this->env, site_url("demo"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "prefix", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t\t\t\t\t </ul>
\t\t\t\t </div>";
    }

    public function getTemplateName()
    {
        return "default-demo/categories_area.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"categories\">
\t\t\t\t\t <h3>CATEGORIES</h3>
\t\t\t\t\t <ul>
\t\t\t\t\t {% for section in sections %}
\t\t\t\t\t     <li><a href=\"{{ site_url('demo') }}/{{ section.prefix }}\">{{ section.name }}</a></li>
\t\t\t\t\t {% endfor %}
\t\t\t\t\t </ul>
\t\t\t\t </div>", "default-demo/categories_area.twig", "/home/ubuntu/workspace/modules/main/views/default-demo/categories_area.twig");
    }
}
