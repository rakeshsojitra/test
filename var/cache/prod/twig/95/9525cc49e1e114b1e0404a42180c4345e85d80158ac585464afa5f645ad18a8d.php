<?php

/* :common:_profileheader.html.twig */
class __TwigTemplate_ff7241788d59fc1c529c83ac364a9a008c242b8447d09cbe4061458163482e02 extends Twig_Template
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
        echo "<div id=\"outer\">
    <div id=\"outer-canvas\"> 

        <!-- Navbar -->
        <header>
            <div class=\"back-to-top\">
                <span class=\"arrow-up\">
                    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/icon-scroll-arrow.png"), "html", null, true);
        echo "\" alt=\"\">
                </span>
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/icon-scroll-mouse.png"), "html", null, true);
        echo "\" alt=\"\"> 
            </div>
            <section class=\"navbar\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">            
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <a class=\"navbar-brand\" href=\"index.html\">
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"ClothStudio-logo\">
                    </a>
                </div>  
                <div class=\"background\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-10\">
                                    ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 28
            echo "                                        <span style=\"float: left\">Hiii:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                                     ";
        }
        // line 30
        echo "                            </div>
                            <div class=\"navbar-secondary-menu col-sm-9 compact-hidden\">
                                <div class=\"btn-group\">
                                    <a data-toggle=\"dropdown\" style=\"padding-top: 0px;\" class=\"btn btn-xs btn-default dropdown-toggle\" title=\"Account\" href=\"#\"><span class=\"icon icon-lg flaticon-business137\"></span>
                                        <span class=\"drop-title\">Account</span></a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li><a href=\"#\">My Profile</a></li>
                                        <li><a href=\"#\">My Preferences</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"\">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Navbar height -->
            <div class=\"navbar-height\">
            </div>
            <!-- Navbar height -->
        </header>
<!-- //end Navbar -->
        <div class=\"divider divider-lg\"></div>";
    }

    public function getTemplateName()
    {
        return ":common:_profileheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 30,  58 => 28,  56 => 27,  46 => 20,  33 => 10,  28 => 8,  19 => 1,);
    }
}
/* <div id="outer">*/
/*     <div id="outer-canvas"> */
/* */
/*         <!-- Navbar -->*/
/*         <header>*/
/*             <div class="back-to-top">*/
/*                 <span class="arrow-up">*/
/*                     <img src="{{ asset('images/icon-scroll-arrow.png') }}" alt="">*/
/*                 </span>*/
/*                 <img src="{{ asset('images/icon-scroll-mouse.png') }}" alt=""> */
/*             </div>*/
/*             <section class="navbar">*/
/*                 <div class="navbar-header">*/
/*                     <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">            */
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </a>*/
/*                     <a class="navbar-brand" href="index.html">*/
/*                         <img src="{{ asset('images/logo.png') }}" alt="ClothStudio-logo">*/
/*                     </a>*/
/*                 </div>  */
/*                 <div class="background">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-md-10">*/
/*                                     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                                         <span style="float: left">Hiii:{{ app.user.username }}</span>*/
/*                                      {% endif%}*/
/*                             </div>*/
/*                             <div class="navbar-secondary-menu col-sm-9 compact-hidden">*/
/*                                 <div class="btn-group">*/
/*                                     <a data-toggle="dropdown" style="padding-top: 0px;" class="btn btn-xs btn-default dropdown-toggle" title="Account" href="#"><span class="icon icon-lg flaticon-business137"></span>*/
/*                                         <span class="drop-title">Account</span></a>*/
/*                                     <ul class="dropdown-menu" role="menu">*/
/*                                         <li><a href="#">My Profile</a></li>*/
/*                                         <li><a href="#">My Preferences</a></li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li><a href="">Logout</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </section>*/
/*             <!-- Navbar height -->*/
/*             <div class="navbar-height">*/
/*             </div>*/
/*             <!-- Navbar height -->*/
/*         </header>*/
/* <!-- //end Navbar -->*/
/*         <div class="divider divider-lg"></div>*/
