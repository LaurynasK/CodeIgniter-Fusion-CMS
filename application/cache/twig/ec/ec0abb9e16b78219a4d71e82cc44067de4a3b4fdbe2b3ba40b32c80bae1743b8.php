<?php

/* welcome2.twig */
class __TwigTemplate_1539589fcc1372df745a05b0bfe59c3c30a8de4aa9356c9a5194d36b44d067a1 extends Twig_Template
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
        echo "

";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["output"]) ? $context["output"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "welcome2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  24 => 2,  19 => 1,);
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
{{ second }}

{{ output }}", "welcome2.twig", "/home/ubuntu/workspace/application/views/welcome2.twig");
    }
}
