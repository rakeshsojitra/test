<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f2eb785ff4e2ec47ba7478ff2c7b66ba2c412706d9753b54ccd3c32acdf63a24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0bf33df7ab07df2d36c87a5ee4b55fa978e768a9d9ee4d645bc8684241ddd51 = $this->env->getExtension("native_profiler");
        $__internal_c0bf33df7ab07df2d36c87a5ee4b55fa978e768a9d9ee4d645bc8684241ddd51->enter($__internal_c0bf33df7ab07df2d36c87a5ee4b55fa978e768a9d9ee4d645bc8684241ddd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0bf33df7ab07df2d36c87a5ee4b55fa978e768a9d9ee4d645bc8684241ddd51->leave($__internal_c0bf33df7ab07df2d36c87a5ee4b55fa978e768a9d9ee4d645bc8684241ddd51_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_553e3b0794054f23fa3f808c6739ae3644ae7ea829ce5a5e2353149429c5da64 = $this->env->getExtension("native_profiler");
        $__internal_553e3b0794054f23fa3f808c6739ae3644ae7ea829ce5a5e2353149429c5da64->enter($__internal_553e3b0794054f23fa3f808c6739ae3644ae7ea829ce5a5e2353149429c5da64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_553e3b0794054f23fa3f808c6739ae3644ae7ea829ce5a5e2353149429c5da64->leave($__internal_553e3b0794054f23fa3f808c6739ae3644ae7ea829ce5a5e2353149429c5da64_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c4ff7292da6ed530c32a0db3fb76c43b852d2d7ebbb177073c64605ec9bc853 = $this->env->getExtension("native_profiler");
        $__internal_7c4ff7292da6ed530c32a0db3fb76c43b852d2d7ebbb177073c64605ec9bc853->enter($__internal_7c4ff7292da6ed530c32a0db3fb76c43b852d2d7ebbb177073c64605ec9bc853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7c4ff7292da6ed530c32a0db3fb76c43b852d2d7ebbb177073c64605ec9bc853->leave($__internal_7c4ff7292da6ed530c32a0db3fb76c43b852d2d7ebbb177073c64605ec9bc853_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e195f3e669267ea3b59c4d74240b3df2bf76c90952dee1687ca62992c449befd = $this->env->getExtension("native_profiler");
        $__internal_e195f3e669267ea3b59c4d74240b3df2bf76c90952dee1687ca62992c449befd->enter($__internal_e195f3e669267ea3b59c4d74240b3df2bf76c90952dee1687ca62992c449befd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e195f3e669267ea3b59c4d74240b3df2bf76c90952dee1687ca62992c449befd->leave($__internal_e195f3e669267ea3b59c4d74240b3df2bf76c90952dee1687ca62992c449befd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
