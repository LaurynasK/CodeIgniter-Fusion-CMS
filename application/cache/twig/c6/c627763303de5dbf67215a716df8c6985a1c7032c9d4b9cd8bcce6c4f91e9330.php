<?php

/* default-demo/menu.twig */
class __TwigTemplate_dda114222ac7b300fdc496b0eb3c11c50c897533756913a19985eda777950b52 extends Twig_Template
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
        echo "  
<!---header---->   
<div class=\"header\">  
  <div class=\"container\">
    <div class=\"logo\">
     <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, site_url("demo"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "/assets/user-src/images/logo.jpg\" title=\"\"></a>
    </div>
    <!---start-top-nav---->
    <div class=\"top-menu\">
     
      <span class=\"menu\"> </span> 
       <ul>
      <li class=\"active\">
       <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, site_url("demo"), "html", null, true);
        echo "\"> MAIN </a>
      </li>    
      <li>
       <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\"> ABOUT </a>
      </li> 
      <div class=\"clearfix\"> </div>
     </ul>
    </div>
    <div class=\"clearfix\"></div>
     
    <!---//End-top-nav---->     
  </div>
</div>
<!--/header--> 
 
";
    }

    public function getTemplateName()
    {
        return "default-demo/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 14,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  
<!---header---->   
<div class=\"header\">  
  <div class=\"container\">
    <div class=\"logo\">
     <a href=\"{{ site_url('demo') }}\"><img src=\"{{ base_url() }}/assets/user-src/images/logo.jpg\" title=\"\"></a>
    </div>
    <!---start-top-nav---->
    <div class=\"top-menu\">
     
      <span class=\"menu\"> </span> 
       <ul>
      <li class=\"active\">
       <a href=\"{{ site_url('demo') }}\"> MAIN </a>
      </li>    
      <li>
       <a href=\"{{ site_url() }}\"> ABOUT </a>
      </li> 
      <div class=\"clearfix\"> </div>
     </ul>
    </div>
    <div class=\"clearfix\"></div>
     
    <!---//End-top-nav---->     
  </div>
</div>
<!--/header--> 
 
", "default-demo/menu.twig", "/home/ubuntu/workspace/modules/main/views/default-demo/menu.twig");
    }
}
