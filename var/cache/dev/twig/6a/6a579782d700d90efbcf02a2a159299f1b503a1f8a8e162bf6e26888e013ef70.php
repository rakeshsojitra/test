<?php

/* base.html.twig */
class __TwigTemplate_099aad0c6790ee16e0bd3b2b9a43f80df86d1d0134bbf8fb6e4d1fdcb702974c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2219eeda4f4cf9b331211a3de24f098a6fed4faa7080539936314a0c0e686c24 = $this->env->getExtension("native_profiler");
        $__internal_2219eeda4f4cf9b331211a3de24f098a6fed4faa7080539936314a0c0e686c24->enter($__internal_2219eeda4f4cf9b331211a3de24f098a6fed4faa7080539936314a0c0e686c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/coolbaby.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/angular-1.5.5.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/clothangular.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    </head>

    <body class=\"responsive\">

        <!-- Header Part--->
        ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "        <!-- Header Part--->


        <!-- Main content starts here --->
        ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "        <!-- Main content starts here --->


        <!-- Footer Part--->
        ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "        <!-- Footer Part--->

        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "
        <!--Page Content-->
        <section>

            <!-- Modal -->
            <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog modal-lg modal-margin-top\">

                    <!-- Modal content-->
                    <div class=\"modal-content\">

                        <div class=\"modal-body\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <div class=\"row\">
                                <div class=\"col-sm-6 \" >
                                    <div class=\"rect\">
                                        <form method=\"POST\" action=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"login\" >
                                            <h2>Login</h2>
                                            <div class=\"form-group\">

                                                <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\"Your email\" name=\"_username\" value=\"\" />
                                            </div>
                                            <div class=\"form-group\">

                                                <input type=\"password\" id=\"password\" placeholder=\"Password\" class=\"form-control\" name=\"_password\" />
                                            </div>
                                            <div class=\"divider-sm\">
                                            </div>
                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                   value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                            <p>
                                                <a id=\"forgot\" href=\"#\" class=\"a-popup-color\"> Forgot Your Password?</a>
                                            </p>
                                            <div class=\"divider-sm\">
                                            </div>

                                            <div class=\"divider-sm\">
                                            </div>
                                            <button class=\"btn btn-cool btn-md-sm btn-bottom\" type=\"submit\" name=\"submit\">Login</button>
                                        </form>
                                        <form action=\"#\" class=\"forgot-password\">
                                            <h2>Forgot Password</h2>
                                            <div class=\"form-group\">
                                                <input type=\"email\" placeholder=\"E-mail Address\" class=\"form-control\" name=\"email\">
                                            </div>

                                            <div class=\"divider-sm\">
                                            </div>
                                            <p>
                                                <a id=\"back\" href=\"#\" class=\"a-popup-color\">Go To Login</a>
                                            </p>
                                            <div class=\"divider-sm\">
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-cool btn-md-sm btn-bottom\">Continue</button>
                                        </form>
                                    </div>
                                </div>
                                <div class=\"col-sm-6\" >
                                    <div class=\"content\">
                                        <div class=\"subtitle\">

                                            <div>
                                                <h2>...or login with:</h2>
                                            </div>

                                        </div>

                                        <div class=\"text-center\">
                                            <a class=\"sign-btn sign-btn-facebook\" href=\"#\"><span class=\"icon flaticon-facebook12\"></span>Facebook</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class=\"sign-btn sign-btn-twitter\" href=\"#\"><span class=\"icon flaticon-social19\"></span>Twitter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!---Signup modal!-->
            <div id=\"myModalsignup\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog modal-lg modal-margin-top\">
                    <!-- Modal content-->
                    <div class=\"modal-content\">

                        <div class=\"modal-body\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <div class=\"row\">
                                <form action=\"/signupnew\" method=\"post\">
                                    <div class=\"col-sm-6 rect \" style=\"margin-top: 21px\" >
                                        <div  class=\"banner-square animate fadeInDown animated products-nospace\">
                                            <div class=\"image-check product-preview\">
                                                <div class=\"image\"> 
                                                    <label class=\"lab-pointer\" for=\"male\">
                                                        <img class=\"animate-scale\" alt=\"\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/signupman-button.jpg"), "html", null, true);
        echo "\">
                                                    </label>
                                                </div>
                                                <div class=\"title\">
                                                    <label class=\"lab-pointer\" for=\"male\">
                                                        <span>Men</span>
                                                    </label>
                                                </div>
                                                <div class=\"hover\"></div>
                                            </div>
                                        </div>
                                        <input class=\"hidden\" id=\"male\" type=\"radio\" name=\"gender\" value=\"male\"/>
                                        <div class=\"radiochecked\"></div>
                                    </div>
                                    <div class=\"col-sm-6 rect\" >
                                        <div  class=\"banner-square animate fadeInDown animated products-nospace\">
                                            <div class=\"image-check product-preview \">
                                                <div class=\"image\">
                                                    <label class=\"lab-pointer\" for=\"female\">
                                                        <img class=\"animate-scale\" alt=\"\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/signupwoman-button.jpg"), "html", null, true);
        echo "\">
                                                    </label>
                                                </div>
                                                <div class=\"title\">
                                                    <label class=\"lab-pointer\" for=\"female\">
                                                        <span>Women</span>
                                                    </label>
                                                </div>
                                                <div class=\"hover\"></div>
                                            </div>
                                        </div>
                                        <input class=\"hidden\" id=\"female\" type=\"radio\" name=\"gender\" value=\"female\"/>
                                        <div class=\"radiochecked\"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- //end Page Content -->
        <script>
            \$j(document).ready(function () {
                \$j(\"#forgot\").click(function () {
                    \$j(\".forgot-password\").show(10);
                    \$j(\".login\").css('display', 'none');

                });
                \$j(\"#back\").click(function () {
                    \$j(\".login\").show(10);
                    \$j(\".forgot-password\").css('display', 'none');
                });
                \$j(\".image-check\").click(function () {
                    \$j('.radiochecked').hide();
                    \$j(this).parents('.col-sm-6').find('.radiochecked').show();
                    \$j(this).parents('.col-sm-6').find('input[type=radio]').click();
                    \$j(this).parents('form').first().submit();
                });
                \$j(\"#mmm\").click(function () {
                    \$j('#myModalsignup').modal('hide');
                });
                \$j(\"#m1m1\").click(function () {
                    \$j('#myModal').modal('hide');
                });
            });
        </script>
    </body>
</html>
";
        
        $__internal_2219eeda4f4cf9b331211a3de24f098a6fed4faa7080539936314a0c0e686c24->leave($__internal_2219eeda4f4cf9b331211a3de24f098a6fed4faa7080539936314a0c0e686c24_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_096b7c364967d1f2e5e6e2de354b5b34b12f24fa93e6327913724a93f5c3cb9e = $this->env->getExtension("native_profiler");
        $__internal_096b7c364967d1f2e5e6e2de354b5b34b12f24fa93e6327913724a93f5c3cb9e->enter($__internal_096b7c364967d1f2e5e6e2de354b5b34b12f24fa93e6327913724a93f5c3cb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cloth Studio";
        
        $__internal_096b7c364967d1f2e5e6e2de354b5b34b12f24fa93e6327913724a93f5c3cb9e->leave($__internal_096b7c364967d1f2e5e6e2de354b5b34b12f24fa93e6327913724a93f5c3cb9e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4bc1f429a7b967f3999e3d58a38553eaaa601ad4f136e3f314a885d9cced94ff = $this->env->getExtension("native_profiler");
        $__internal_4bc1f429a7b967f3999e3d58a38553eaaa601ad4f136e3f314a885d9cced94ff->enter($__internal_4bc1f429a7b967f3999e3d58a38553eaaa601ad4f136e3f314a885d9cced94ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/css/settings.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rs-plugin/css/extralayers.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_4bc1f429a7b967f3999e3d58a38553eaaa601ad4f136e3f314a885d9cced94ff->leave($__internal_4bc1f429a7b967f3999e3d58a38553eaaa601ad4f136e3f314a885d9cced94ff_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_0a04c810975678339d02355195693f1572d02e1a63eb510535c44cef3adf0538 = $this->env->getExtension("native_profiler");
        $__internal_0a04c810975678339d02355195693f1572d02e1a63eb510535c44cef3adf0538->enter($__internal_0a04c810975678339d02355195693f1572d02e1a63eb510535c44cef3adf0538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 24
        echo "            <div class=\"loader\">
                <div class=\"fond\">
                    <div class=\"contener_general\">
                        <div class=\"contener_mixte\">
                            <div class=\"ballcolor ball_1\"> &nbsp; </div>
                        </div>
                        <div class=\"contener_mixte\">
                            <div class=\"ballcolor ball_2\"> &nbsp; </div>
                        </div>
                        <div class=\"contener_mixte\">
                            <div class=\"ballcolor ball_3\"> &nbsp; </div>
                        </div>
                        <div class=\"contener_mixte\">
                            <div class=\"ballcolor ball_4\"> &nbsp; </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            // line 43
            echo "                ";
            echo twig_include($this->env, $context, "common/_loginheader.html.twig");
            echo "
            ";
        } else {
            // line 44
            echo "    
                ";
            // line 45
            echo twig_include($this->env, $context, "common/_header.html.twig");
            echo "
            ";
        }
        // line 47
        echo "
        ";
        
        $__internal_0a04c810975678339d02355195693f1572d02e1a63eb510535c44cef3adf0538->leave($__internal_0a04c810975678339d02355195693f1572d02e1a63eb510535c44cef3adf0538_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_6be40c6ff9c60f5691c7cedf99b1ee82f89492cdfbd43ea7e10dbbf69c8dca47 = $this->env->getExtension("native_profiler");
        $__internal_6be40c6ff9c60f5691c7cedf99b1ee82f89492cdfbd43ea7e10dbbf69c8dca47->enter($__internal_6be40c6ff9c60f5691c7cedf99b1ee82f89492cdfbd43ea7e10dbbf69c8dca47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 54
        echo "
        ";
        
        $__internal_6be40c6ff9c60f5691c7cedf99b1ee82f89492cdfbd43ea7e10dbbf69c8dca47->leave($__internal_6be40c6ff9c60f5691c7cedf99b1ee82f89492cdfbd43ea7e10dbbf69c8dca47_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0db9570f28ec591e6584471d8d5ca06b27b93dc6273e5a3db798a10dbe43325c = $this->env->getExtension("native_profiler");
        $__internal_0db9570f28ec591e6584471d8d5ca06b27b93dc6273e5a3db798a10dbe43325c->enter($__internal_0db9570f28ec591e6584471d8d5ca06b27b93dc6273e5a3db798a10dbe43325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "            ";
        echo twig_include($this->env, $context, "common/_footer.html.twig");
        echo "
        ";
        
        $__internal_0db9570f28ec591e6584471d8d5ca06b27b93dc6273e5a3db798a10dbe43325c->leave($__internal_0db9570f28ec591e6584471d8d5ca06b27b93dc6273e5a3db798a10dbe43325c_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b6303c852319b3940e24a06294b30b1104ce63205aa777797770c1b40eca3152 = $this->env->getExtension("native_profiler");
        $__internal_b6303c852319b3940e24a06294b30b1104ce63205aa777797770c1b40eca3152->enter($__internal_b6303c852319b3940e24a06294b30b1104ce63205aa777797770c1b40eca3152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "        ";
        
        $__internal_b6303c852319b3940e24a06294b30b1104ce63205aa777797770c1b40eca3152->leave($__internal_b6303c852319b3940e24a06294b30b1104ce63205aa777797770c1b40eca3152_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 66,  390 => 65,  380 => 61,  374 => 60,  366 => 54,  360 => 53,  352 => 47,  347 => 45,  344 => 44,  338 => 43,  336 => 42,  316 => 24,  310 => 23,  301 => 10,  297 => 9,  292 => 8,  286 => 7,  274 => 5,  216 => 180,  194 => 161,  126 => 96,  110 => 83,  92 => 67,  90 => 65,  86 => 63,  84 => 60,  78 => 56,  76 => 53,  70 => 49,  68 => 23,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  41 => 12,  39 => 7,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Cloth Studio{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('rs-plugin/css/settings.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('rs-plugin/css/extralayers.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <script src="{{ asset('js/app.js') }}" type="text/javascript" ></script>*/
/*         <script src="{{ asset('js/coolbaby.js') }}" type="text/javascript" ></script>*/
/*         <script src="{{ asset('js/angular-1.5.5.js') }}" type="text/javascript" ></script>*/
/*         <script src="{{ asset('js/clothangular.js') }}" type="text/javascript" ></script>*/
/*     </head>*/
/* */
/*     <body class="responsive">*/
/* */
/*         <!-- Header Part--->*/
/*         {% block header %}*/
/*             <div class="loader">*/
/*                 <div class="fond">*/
/*                     <div class="contener_general">*/
/*                         <div class="contener_mixte">*/
/*                             <div class="ballcolor ball_1"> &nbsp; </div>*/
/*                         </div>*/
/*                         <div class="contener_mixte">*/
/*                             <div class="ballcolor ball_2"> &nbsp; </div>*/
/*                         </div>*/
/*                         <div class="contener_mixte">*/
/*                             <div class="ballcolor ball_3"> &nbsp; </div>*/
/*                         </div>*/
/*                         <div class="contener_mixte">*/
/*                             <div class="ballcolor ball_4"> &nbsp; </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% if app.request.get('_route') == 'homepage' %}*/
/*                 {{ include('common/_loginheader.html.twig') }}*/
/*             {% else %}    */
/*                 {{ include('common/_header.html.twig') }}*/
/*             {% endif%}*/
/* */
/*         {% endblock %}*/
/*         <!-- Header Part--->*/
/* */
/* */
/*         <!-- Main content starts here --->*/
/*         {% block content %}*/
/* */
/*         {% endblock %}*/
/*         <!-- Main content starts here --->*/
/* */
/* */
/*         <!-- Footer Part--->*/
/*         {% block footer %}*/
/*             {{ include('common/_footer.html.twig') }}*/
/*         {% endblock %}*/
/*         <!-- Footer Part--->*/
/* */
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/* */
/*         <!--Page Content-->*/
/*         <section>*/
/* */
/*             <!-- Modal -->*/
/*             <div id="myModal" class="modal fade" role="dialog">*/
/*                 <div class="modal-dialog modal-lg modal-margin-top">*/
/* */
/*                     <!-- Modal content-->*/
/*                     <div class="modal-content">*/
/* */
/*                         <div class="modal-body">*/
/*                             <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-6 " >*/
/*                                     <div class="rect">*/
/*                                         <form method="POST" action="{{ path('login') }}" class="login" >*/
/*                                             <h2>Login</h2>*/
/*                                             <div class="form-group">*/
/* */
/*                                                 <input type="text" id="username" class="form-control" placeholder="Your email" name="_username" value="" />*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/* */
/*                                                 <input type="password" id="password" placeholder="Password" class="form-control" name="_password" />*/
/*                                             </div>*/
/*                                             <div class="divider-sm">*/
/*                                             </div>*/
/*                                             <input type="hidden" name="_csrf_token"*/
/*                                                    value="{{ csrf_token('authenticate') }}">*/
/*                                             <p>*/
/*                                                 <a id="forgot" href="#" class="a-popup-color"> Forgot Your Password?</a>*/
/*                                             </p>*/
/*                                             <div class="divider-sm">*/
/*                                             </div>*/
/* */
/*                                             <div class="divider-sm">*/
/*                                             </div>*/
/*                                             <button class="btn btn-cool btn-md-sm btn-bottom" type="submit" name="submit">Login</button>*/
/*                                         </form>*/
/*                                         <form action="#" class="forgot-password">*/
/*                                             <h2>Forgot Password</h2>*/
/*                                             <div class="form-group">*/
/*                                                 <input type="email" placeholder="E-mail Address" class="form-control" name="email">*/
/*                                             </div>*/
/* */
/*                                             <div class="divider-sm">*/
/*                                             </div>*/
/*                                             <p>*/
/*                                                 <a id="back" href="#" class="a-popup-color">Go To Login</a>*/
/*                                             </p>*/
/*                                             <div class="divider-sm">*/
/*                                             </div>*/
/*                                             <button type="submit" class="btn btn-cool btn-md-sm btn-bottom">Continue</button>*/
/*                                         </form>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-6" >*/
/*                                     <div class="content">*/
/*                                         <div class="subtitle">*/
/* */
/*                                             <div>*/
/*                                                 <h2>...or login with:</h2>*/
/*                                             </div>*/
/* */
/*                                         </div>*/
/* */
/*                                         <div class="text-center">*/
/*                                             <a class="sign-btn sign-btn-facebook" href="#"><span class="icon flaticon-facebook12"></span>Facebook</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                                             <a class="sign-btn sign-btn-twitter" href="#"><span class="icon flaticon-social19"></span>Twitter</a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <!---Signup modal!-->*/
/*             <div id="myModalsignup" class="modal fade" role="dialog">*/
/*                 <div class="modal-dialog modal-lg modal-margin-top">*/
/*                     <!-- Modal content-->*/
/*                     <div class="modal-content">*/
/* */
/*                         <div class="modal-body">*/
/*                             <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                             <div class="row">*/
/*                                 <form action="/signupnew" method="post">*/
/*                                     <div class="col-sm-6 rect " style="margin-top: 21px" >*/
/*                                         <div  class="banner-square animate fadeInDown animated products-nospace">*/
/*                                             <div class="image-check product-preview">*/
/*                                                 <div class="image"> */
/*                                                     <label class="lab-pointer" for="male">*/
/*                                                         <img class="animate-scale" alt="" src="{{asset('images/signupman-button.jpg')}}">*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 <div class="title">*/
/*                                                     <label class="lab-pointer" for="male">*/
/*                                                         <span>Men</span>*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 <div class="hover"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <input class="hidden" id="male" type="radio" name="gender" value="male"/>*/
/*                                         <div class="radiochecked"></div>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6 rect" >*/
/*                                         <div  class="banner-square animate fadeInDown animated products-nospace">*/
/*                                             <div class="image-check product-preview ">*/
/*                                                 <div class="image">*/
/*                                                     <label class="lab-pointer" for="female">*/
/*                                                         <img class="animate-scale" alt="" src="{{ asset('images/signupwoman-button.jpg')}}">*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 <div class="title">*/
/*                                                     <label class="lab-pointer" for="female">*/
/*                                                         <span>Women</span>*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                                 <div class="hover"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <input class="hidden" id="female" type="radio" name="gender" value="female"/>*/
/*                                         <div class="radiochecked"></div>*/
/*                                     </div>*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- //end Page Content -->*/
/*         <script>*/
/*             $j(document).ready(function () {*/
/*                 $j("#forgot").click(function () {*/
/*                     $j(".forgot-password").show(10);*/
/*                     $j(".login").css('display', 'none');*/
/* */
/*                 });*/
/*                 $j("#back").click(function () {*/
/*                     $j(".login").show(10);*/
/*                     $j(".forgot-password").css('display', 'none');*/
/*                 });*/
/*                 $j(".image-check").click(function () {*/
/*                     $j('.radiochecked').hide();*/
/*                     $j(this).parents('.col-sm-6').find('.radiochecked').show();*/
/*                     $j(this).parents('.col-sm-6').find('input[type=radio]').click();*/
/*                     $j(this).parents('form').first().submit();*/
/*                 });*/
/*                 $j("#mmm").click(function () {*/
/*                     $j('#myModalsignup').modal('hide');*/
/*                 });*/
/*                 $j("#m1m1").click(function () {*/
/*                     $j('#myModal').modal('hide');*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     </body>*/
/* </html>*/
/* */
