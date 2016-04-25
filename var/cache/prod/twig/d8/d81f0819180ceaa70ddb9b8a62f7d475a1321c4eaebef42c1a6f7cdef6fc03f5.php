<?php

/* @Clothstudio/User/logout.html.twig */
class __TwigTemplate_f898cd6bd611e9284e2530e811b88f2cb62677050232fd6257dd5381aff3237c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Clothstudio/User/logout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "ClothstudioBundle:User:logout";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the User:logout page</h1>
";
    }

    public function getTemplateName()
    {
        return "@Clothstudio/User/logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ClothstudioBundle:User:logout{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the User:logout page</h1>*/
/* {% endblock %}*/
/* */
