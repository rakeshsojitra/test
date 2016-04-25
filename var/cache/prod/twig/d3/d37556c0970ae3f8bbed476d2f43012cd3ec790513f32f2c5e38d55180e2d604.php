<?php

/* @Clothstudio/User/index.html.twig */
class __TwigTemplate_854dc7b0cb2a46cbd51eb8528c9aa3548dcbf42bd0b5edbd097bd08d72b99d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Clothstudio/User/index.html.twig", 1);
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
        echo "ClothstudioBundle:User:index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the User:index page</h1>
";
    }

    public function getTemplateName()
    {
        return "@Clothstudio/User/index.html.twig";
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
/* {% block title %}ClothstudioBundle:User:index{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the User:index page</h1>*/
/* {% endblock %}*/
/* */
