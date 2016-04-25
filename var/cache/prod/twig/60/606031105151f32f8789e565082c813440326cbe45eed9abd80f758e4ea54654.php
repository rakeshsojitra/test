<?php

/* ClothstudioBundle:User:mypassword.html.twig */
class __TwigTemplate_72d7d45b1dba12f11b2614e15c147c4c53061c5f801efc79ccf34917e4aaa255 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "ClothstudioBundle:User:mypassword.html.twig", 3);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Profile";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <!--Page Content-->
    <section class=\"content\">
        <div class=\"container\">
            <div class=\"subtitle\">
                <div>
                    <span>Look Book <b>|</b> </span>
                </div>
            </div>
            <div class=\"divider divider-sm\"></div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"jumbotron\">
                        <form action=\"/changepwd/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true);
        echo "\" method=\"post\">
                         
                           
                             ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                           
                            <div class=\"form-group\">
                                <button class=\"btn btn-primary pull-right\" type=\"submit\">Change Password</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </section>
    <!-- //end Page Content -->
";
    }

    public function getTemplateName()
    {
        return "ClothstudioBundle:User:mypassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  53 => 19,  38 => 6,  35 => 5,  29 => 4,  11 => 3,);
    }
}
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extends your base template, like base.html.twig #}*/
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Profile{% endblock %}*/
/* {% block content %}*/
/* */
/*     <!--Page Content-->*/
/*     <section class="content">*/
/*         <div class="container">*/
/*             <div class="subtitle">*/
/*                 <div>*/
/*                     <span>Look Book <b>|</b> </span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="divider divider-sm"></div>*/
/*             <div class="row">*/
/*                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">*/
/*                     <div class="jumbotron">*/
/*                         <form action="/changepwd/{{userid}}" method="post">*/
/*                          */
/*                            */
/*                              {{form_widget(form)}}*/
/*                            */
/*                             <div class="form-group">*/
/*                                 <button class="btn btn-primary pull-right" type="submit">Change Password</button>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*     </section>*/
/*     <!-- //end Page Content -->*/
/* {% endblock %}*/
