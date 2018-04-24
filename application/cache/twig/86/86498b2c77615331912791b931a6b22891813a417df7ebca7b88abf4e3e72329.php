<?php

/* default-demo/single.twig */
class __TwigTemplate_04ca797e0c7aa7160982fe62372fb98a83e28075945d0035953202086aab8100 extends Twig_Template
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
        echo "<div class=\"container\">
\t\t  <div class=\"col-md-8 single-main\">\t\t\t\t 
\t\t\t  <div class=\"single-grid\">
\t\t\t      
\t\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "/uploads/files/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["single"]) ? $context["single"] : null), "main_image", array()), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["single"]) ? $context["single"] : null), "title", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t<p>";
        // line 7
        echo $this->getAttribute((isset($context["single"]) ? $context["single"] : null), "article_text", array());
        echo "</p>
\t\t\t  </div>
\t\t\t
\t\t\t<div id=\"blueimp-gallery\" class=\"blueimp-gallery blueimp-gallery-controls\">
                <div class=\"slides\"></div>
                <h3 class=\"title\"></h3>
                <a class=\"prev\">‹</a>
                <a class=\"next\">›</a>
                <a class=\"close\">×</a>
                <a class=\"play-pause\"></a>
                <ol class=\"indicator\"></ol>
            </div>
            
            <div id=\"wrapper\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["single"]) ? $context["single"] : null), "article_gallery", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 22
            echo "                <div class=\"box\">
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/uploads/files/";
            echo twig_escape_filter($this->env, $context["picture"], "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $context["picture"], "html", null, true);
            echo "\" data-gallery>
                        <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/uploads/files/";
            echo twig_escape_filter($this->env, $context["picture"], "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["picture"], "html", null, true);
            echo "\">
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
            
            
\t\t  </div>
            
\t\t\t  <div class=\"col-md-4 side-content\">
\t\t\t\t ";
        // line 34
        echo (isset($context["categories"]) ? $context["categories"] : null);
        echo "
\t\t\t\t <div class=\"clearfix\"></div>
\t\t\t  </div>
\t\t\t  <div class=\"clearfix\"></div>
\t\t  </div>";
    }

    public function getTemplateName()
    {
        return "default-demo/single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  81 => 28,  67 => 24,  59 => 23,  56 => 22,  52 => 21,  35 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
\t\t  <div class=\"col-md-8 single-main\">\t\t\t\t 
\t\t\t  <div class=\"single-grid\">
\t\t\t      
\t\t\t\t\t<img src=\"{{ base_url() }}/uploads/files/{{ single.main_image }}\" alt=\"\"/>
\t\t\t\t\t<h1>{{single.title}}</h1>
\t\t\t\t\t<p>{{ single.article_text | raw }}</p>
\t\t\t  </div>
\t\t\t
\t\t\t<div id=\"blueimp-gallery\" class=\"blueimp-gallery blueimp-gallery-controls\">
                <div class=\"slides\"></div>
                <h3 class=\"title\"></h3>
                <a class=\"prev\">‹</a>
                <a class=\"next\">›</a>
                <a class=\"close\">×</a>
                <a class=\"play-pause\"></a>
                <ol class=\"indicator\"></ol>
            </div>
            
            <div id=\"wrapper\">
                {% for picture in single.article_gallery %}
                <div class=\"box\">
                    <a href=\"{{base_url}}/uploads/files/{{ picture }}\" title=\"{{ picture }}\" data-gallery>
                        <img src=\"{{base_url}}/uploads/files/{{ picture }}\" alt=\"{{ picture }}\">
                    </a>
                </div>
                {% endfor %}
            </div>
            
            
\t\t  </div>
            
\t\t\t  <div class=\"col-md-4 side-content\">
\t\t\t\t {{ categories | raw }}
\t\t\t\t <div class=\"clearfix\"></div>
\t\t\t  </div>
\t\t\t  <div class=\"clearfix\"></div>
\t\t  </div>", "default-demo/single.twig", "/home/ubuntu/workspace/application/modules/main/views/default-demo/single.twig");
    }
}
