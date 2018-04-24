<?php

/* welcome.twig */
class __TwigTemplate_467c1cd73a4583982af1d2caca175c1c3668efb12bc4515073c04ff2f5ad1e5a extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["first"]) ? $context["first"] : null), "html", null, true);
        echo "!
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["second"]) ? $context["second"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello {{ first }}!
{{ second }}", "welcome.twig", "/home/ubuntu/workspace/application/views/welcome.twig");
    }
}
