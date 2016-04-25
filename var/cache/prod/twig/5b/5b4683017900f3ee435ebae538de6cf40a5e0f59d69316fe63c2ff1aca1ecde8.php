<?php

/* common/_header.html.twig */
class __TwigTemplate_7d79585a3d024e68366861b811b989473c9f8b93b6831d808f9b1900d5e53cde extends Twig_Template
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

        <header> 
            <div class=\"back-to-top\">
                <span class=\"arrow-up\">
                    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/icon-scroll-arrow.png"), "html", null, true);
        echo "\" alt=\"\">
                </span>
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/icon-scroll-mouse.png"), "html", null, true);
        echo "\" alt=\"\"> 
            </div>
            <section class=\"navbar navbar-default navbar-fixed-top navbar-md\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">            
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <a class=\"navbar-brand\" href=\"/\">
                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"ClothStudio-logo\">
                    </a>
                </div>  
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-2\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "")) {
            // line 25
            echo "                        <li><a href=\"#how it works\">How it works</a></li>
                        <li><a href=\"#features\">Features</a></li>
                        <li><a href=\"#\">Services</a></li>
                        ";
        }
        // line 29
        echo "                            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 30
            echo "                            <li><a class=\"a-popup-color\">Hi ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "cFirstName", array())), "html", null, true);
            echo "</a> |</li> 
                            <li class=\"btn-group\">
                                <a href=\"#\" title=\"Account\" class=\"\" data-toggle=\"dropdown\">
                                    <span class=\"icon icon-lg  flaticon-black302 \">My Profile</span>
                                </a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"/profile\">My Profile</a></li>
                                    <li><a href=\"/account\">My Prefrence</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Logout</a></li>
                                </ul>
                            </li>
                        ";
        } else {
            // line 43
            echo "                            <li><a id=\"mmm\" data-toggle=\"modal\" data-target=\"#myModal\" href=\"#\">Login</a></li>                            
                            <a id=\"m1m1\" class=\"btn btn-cool btn-md btn-bottom\" data-toggle=\"modal\" data-target=\"#myModalsignup\" href=\"#\" >GET STARTED</a>          
                        ";
        }
        // line 46
        echo "                    </ul>
                </div>
            </section>
            <div class=\"navbar-height\"></div>
        </header
        <!-- //end Navbar -->
        <div class=\"divider divider-lg\"></div>";
    }

    public function getTemplateName()
    {
        return "common/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 46,  84 => 43,  77 => 39,  64 => 30,  61 => 29,  55 => 25,  53 => 24,  45 => 19,  32 => 9,  27 => 7,  19 => 1,);
    }
}
/* <div id="outer">*/
/*     <div id="outer-canvas"> */
/* */
/*         <header> */
/*             <div class="back-to-top">*/
/*                 <span class="arrow-up">*/
/*                     <img src="{{ asset('images/icon-scroll-arrow.png') }}" alt="">*/
/*                 </span>*/
/*                 <img src="{{ asset('images/icon-scroll-mouse.png') }}" alt=""> */
/*             </div>*/
/*             <section class="navbar navbar-default navbar-fixed-top navbar-md">*/
/*                 <div class="navbar-header">*/
/*                     <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">            */
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </a>*/
/*                     <a class="navbar-brand" href="/">*/
/*                         <img src="{{ asset('images/logo.png') }}" alt="ClothStudio-logo">*/
/*                     </a>*/
/*                 </div>  */
/*                 <div class="collapse navbar-collapse" id="navbar-collapse-2">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         {% if app.request.get('_route') == '' %}*/
/*                         <li><a href="#how it works">How it works</a></li>*/
/*                         <li><a href="#features">Features</a></li>*/
/*                         <li><a href="#">Services</a></li>*/
/*                         {% endif %}*/
/*                             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                             <li><a class="a-popup-color">Hi {{ app.user.cFirstName|capitalize }}</a> |</li> */
/*                             <li class="btn-group">*/
/*                                 <a href="#" title="Account" class="" data-toggle="dropdown">*/
/*                                     <span class="icon icon-lg  flaticon-black302 ">My Profile</span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu" role="menu">*/
/*                                     <li><a href="/profile">My Profile</a></li>*/
/*                                     <li><a href="/account">My Prefrence</a></li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li><a href="{{path('logout')}}">Logout</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         {% else%}*/
/*                             <li><a id="mmm" data-toggle="modal" data-target="#myModal" href="#">Login</a></li>                            */
/*                             <a id="m1m1" class="btn btn-cool btn-md btn-bottom" data-toggle="modal" data-target="#myModalsignup" href="#" >GET STARTED</a>          */
/*                         {% endif%}*/
/*                     </ul>*/
/*                 </div>*/
/*             </section>*/
/*             <div class="navbar-height"></div>*/
/*         </header*/
/*         <!-- //end Navbar -->*/
/*         <div class="divider divider-lg"></div>*/
