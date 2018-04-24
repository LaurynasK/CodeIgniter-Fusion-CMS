<?php

/* default-demo/index.twig */
class __TwigTemplate_76c5d2ae531e6f0b8eeffa288e33c8dc14bfd95bd84b51c9e2ea7a5917311343 extends Twig_Template
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
        $context["active"] = "Home";
        // line 2
        echo "
<div class=\"content\">
\t <div class=\"container\">
\t\t <div class=\"content-grids\">
\t\t\t <div class=\"col-md-8 content-main\">
\t\t\t\t <div class=\"content-grid\">
\t\t\t\t \t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo "\t\t\t\t\t 
\t\t\t\t\t <div class=\"content-grid-info\">
\t\t\t\t\t <img id=\"main-image\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "/uploads/files/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "main_image", array()), "html", null, true);
            echo "\" style=\"width:100%\"/>

\t\t\t\t\t\t <div class=\"post-info\">
\t\t\t\t\t\t <h4><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, site_url("demo"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "article_section", array()), "prefix", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "segment", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t <p>";
            // line 14
            echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags($this->getAttribute($context["article"], "article_text", array())), 0, 150) . "..."), "html", null, true);
            echo "</p>
\t\t\t\t\t\t <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, site_url("demo"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "article_section", array()), "prefix", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "segment", array()), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\"><span></span>READ MORE</a>
\t\t\t\t\t\t </div>
\t\t\t\t\t </div>
\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t\t 
\t\t\t\t </div>
\t\t\t  </div>
\t\t\t  <div class=\"col-md-4 content-right\">
\t\t\t\t <div class=\"clearfix\"></div>
\t\t\t\t ";
        // line 24
        echo (isset($context["categories"]) ? $context["categories"] : null);
        echo "
\t\t\t\t <div class=\"clearfix\"></div>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"clearfix\"></div>
\t\t  </div>
\t  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default-demo/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  76 => 19,  60 => 15,  56 => 14,  44 => 13,  36 => 10,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'Home' %}

<div class=\"content\">
\t <div class=\"container\">
\t\t <div class=\"content-grids\">
\t\t\t <div class=\"col-md-8 content-main\">
\t\t\t\t <div class=\"content-grid\">
\t\t\t\t \t{% for article in articles %}\t\t\t\t\t 
\t\t\t\t\t <div class=\"content-grid-info\">
\t\t\t\t\t <img id=\"main-image\" src=\"{{ base_url() }}/uploads/files/{{ article.main_image }}\" style=\"width:100%\"/>

\t\t\t\t\t\t <div class=\"post-info\">
\t\t\t\t\t\t <h4><a href=\"{{ site_url('demo') }}/{{article.article_section.prefix }}/{{article.segment}}?id={{article.id}}\">{{ article.title }}</h4>
\t\t\t\t\t\t <p>{{ article.article_text|striptags|slice(0, 150) ~ '...'   }}</p>
\t\t\t\t\t\t <a href=\"{{ site_url('demo') }}/{{article.article_section.prefix }}/{{article.segment}}?id={{article.id}}\"><span></span>READ MORE</a>
\t\t\t\t\t\t </div>
\t\t\t\t\t </div>
\t\t\t\t\t {% endfor %}
\t\t\t\t\t 
\t\t\t\t </div>
\t\t\t  </div>
\t\t\t  <div class=\"col-md-4 content-right\">
\t\t\t\t <div class=\"clearfix\"></div>
\t\t\t\t {{ categories | raw }}
\t\t\t\t <div class=\"clearfix\"></div>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"clearfix\"></div>
\t\t  </div>
\t  </div>
</div>", "default-demo/index.twig", "/home/ubuntu/workspace/application/modules/main/views/default-demo/index.twig");
    }
}
