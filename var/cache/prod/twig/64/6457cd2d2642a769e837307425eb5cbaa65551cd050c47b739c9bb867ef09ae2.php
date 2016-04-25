<?php

/* ClothstudioBundle:User:logout.html.twig */
class __TwigTemplate_b0fb89cd8c3601e217e13ba1f1b382a69967c221e0921544bb10066cdf043832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ClothstudioBundle:User:logout.html.twig", 1);
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
        return "ClothstudioBundle:User:logout.html.twig";
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
