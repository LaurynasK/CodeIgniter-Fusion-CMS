<?php

/* default-demo/footer.twig */
class __TwigTemplate_85eb9901a73879e4c68b7f9a92d72f2ac71734b7c994ffb6236e38ea625a3ae2 extends Twig_Template
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
    <p>Copyrights © 2015 Blog All rights reserved | Template by <a href=\"http://w3layouts.com/\">W3layouts</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "default-demo/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
    <p>Copyrights © 2015 Blog All rights reserved | Template by <a href=\"http://w3layouts.com/\">W3layouts</a></p>
</div>", "default-demo/footer.twig", "/home/ubuntu/workspace/modules/main/views/default-demo/footer.twig");
    }
}
