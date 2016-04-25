<?php

/* @Clothstudio/User/login.html.twig */
class __TwigTemplate_44f0be77c22338c1ed2210ebf8febe46a405a7c620c0603730ab100521683f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "@Clothstudio/User/login.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  
    ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 10
            echo "

        <div class=\"container content\" >
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-12 col-xs-12 howitworks-text text-center\">
                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "&nbsp;For";
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
            echo "
                         
                    </div>
                </div>
                
                    
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@Clothstudio/User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  43 => 10,  41 => 9,  38 => 8,  35 => 7,  29 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extends your base template, like base.html.twig #}*/
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Login{% endblock %}*/
/* */
/* {% block content %}*/
/*   */
/*     {% if error %}*/
/* */
/* */
/*         <div class="container content" >*/
/*             <div class="row">*/
/*                 <div class="col-sm-12 col-md-12 col-xs-12 howitworks-text text-center">*/
/*                     <div class="alert alert-danger" role="alert">*/
/*                         {{ error.messageKey|trans(error.messageData, 'security') }}&nbsp;For{{last_username}}*/
/*                          */
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                     */
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
