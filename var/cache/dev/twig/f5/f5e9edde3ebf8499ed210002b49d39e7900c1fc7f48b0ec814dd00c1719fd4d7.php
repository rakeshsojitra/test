<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_473e0874f4692b2ce2d530303bee2a7402f757758df7dd8e85085d8062aa46e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec9dac9672b57ba159e02bc7e9fdafdb06d482c141ecb0ff77e94209c9640ff3 = $this->env->getExtension("native_profiler");
        $__internal_ec9dac9672b57ba159e02bc7e9fdafdb06d482c141ecb0ff77e94209c9640ff3->enter($__internal_ec9dac9672b57ba159e02bc7e9fdafdb06d482c141ecb0ff77e94209c9640ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec9dac9672b57ba159e02bc7e9fdafdb06d482c141ecb0ff77e94209c9640ff3->leave($__internal_ec9dac9672b57ba159e02bc7e9fdafdb06d482c141ecb0ff77e94209c9640ff3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11cca666a3dd9967dfcacce78cc6a4cfe7ba5c424b00fb9b8c86de051e762f6c = $this->env->getExtension("native_profiler");
        $__internal_11cca666a3dd9967dfcacce78cc6a4cfe7ba5c424b00fb9b8c86de051e762f6c->enter($__internal_11cca666a3dd9967dfcacce78cc6a4cfe7ba5c424b00fb9b8c86de051e762f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11cca666a3dd9967dfcacce78cc6a4cfe7ba5c424b00fb9b8c86de051e762f6c->leave($__internal_11cca666a3dd9967dfcacce78cc6a4cfe7ba5c424b00fb9b8c86de051e762f6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa4ddbedfe0fc47932243003526285561aaadd3a8bc17f36e4c080aa0d7bd0d7 = $this->env->getExtension("native_profiler");
        $__internal_fa4ddbedfe0fc47932243003526285561aaadd3a8bc17f36e4c080aa0d7bd0d7->enter($__internal_fa4ddbedfe0fc47932243003526285561aaadd3a8bc17f36e4c080aa0d7bd0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa4ddbedfe0fc47932243003526285561aaadd3a8bc17f36e4c080aa0d7bd0d7->leave($__internal_fa4ddbedfe0fc47932243003526285561aaadd3a8bc17f36e4c080aa0d7bd0d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_965d7733c9ef7dcf7ea34fcff600e5d273f036e8d6c1bcb7d7e3ca7992954c13 = $this->env->getExtension("native_profiler");
        $__internal_965d7733c9ef7dcf7ea34fcff600e5d273f036e8d6c1bcb7d7e3ca7992954c13->enter($__internal_965d7733c9ef7dcf7ea34fcff600e5d273f036e8d6c1bcb7d7e3ca7992954c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_965d7733c9ef7dcf7ea34fcff600e5d273f036e8d6c1bcb7d7e3ca7992954c13->leave($__internal_965d7733c9ef7dcf7ea34fcff600e5d273f036e8d6c1bcb7d7e3ca7992954c13_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
