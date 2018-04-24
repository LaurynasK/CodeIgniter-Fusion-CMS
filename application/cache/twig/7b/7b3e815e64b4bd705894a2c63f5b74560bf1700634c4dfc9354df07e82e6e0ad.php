<?php

/* default-demo/main_platform.twig */
class __TwigTemplate_1344e470ea411526cb80602aaadcb25189ca51d5eb57c29320eaf71fbc883765 extends Twig_Template
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
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
\t<title>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
\t
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"keywords\" content=\"Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
\tSmartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" 
\t/>
\t<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["css"]) ? $context["css"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
            // line 20
            echo "        <link href='";
            echo twig_escape_filter($this->env, $context["css_file"], "html", null, true);
            echo "' rel='stylesheet' type='text/css'>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["js"]) ? $context["js"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 25
            echo "\t    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $context["js_file"], "html", null, true);
            echo "\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "

</head>
    <body>
        ";
        // line 31
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
        
        ";
        // line 33
        echo (isset($context["current_page"]) ? $context["current_page"] : null);
        echo "
        
        <div id=\"footer\">
            ";
        // line 36
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "default-demo/main_platform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  83 => 33,  78 => 31,  72 => 27,  63 => 25,  59 => 24,  55 => 22,  46 => 20,  42 => 19,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
\t<title>{{ title }}</title>
\t
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"keywords\" content=\"Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
\tSmartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" 
\t/>
\t<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

\t{% for css_file in css %}
        <link href='{{ css_file }}' rel='stylesheet' type='text/css'>
\t{% endfor %}


    {% for js_file in js %}
\t    <script type=\"text/javascript\" src=\"{{ js_file }}\"></script>
\t{% endfor %}


</head>
    <body>
        {{ menu | raw }}
        
        {{ current_page | raw }}
        
        <div id=\"footer\">
            {{ footer | raw }}
        </div>
    </body>
</html>", "default-demo/main_platform.twig", "/home/ubuntu/workspace/modules/main/views/default-demo/main_platform.twig");
    }
}
