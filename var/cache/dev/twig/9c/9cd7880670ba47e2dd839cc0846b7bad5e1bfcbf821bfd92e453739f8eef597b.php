<?php

/* ClothstudioBundle:User:profile.html.twig */
class __TwigTemplate_ed387a2b835b27ea7d87315fd86fb9fa5a7a31c1a45327271585fd7012009dba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "ClothstudioBundle:User:profile.html.twig", 3);
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
        $__internal_7f5c808fbe2ad32ffa2fc1b7afffe0790831955598e6f2876c96f8117b2874d5 = $this->env->getExtension("native_profiler");
        $__internal_7f5c808fbe2ad32ffa2fc1b7afffe0790831955598e6f2876c96f8117b2874d5->enter($__internal_7f5c808fbe2ad32ffa2fc1b7afffe0790831955598e6f2876c96f8117b2874d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClothstudioBundle:User:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f5c808fbe2ad32ffa2fc1b7afffe0790831955598e6f2876c96f8117b2874d5->leave($__internal_7f5c808fbe2ad32ffa2fc1b7afffe0790831955598e6f2876c96f8117b2874d5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a32d648167633f6da9be300410067bd8479c41474df3d578098461807a09729a = $this->env->getExtension("native_profiler");
        $__internal_a32d648167633f6da9be300410067bd8479c41474df3d578098461807a09729a->enter($__internal_a32d648167633f6da9be300410067bd8479c41474df3d578098461807a09729a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profile";
        
        $__internal_a32d648167633f6da9be300410067bd8479c41474df3d578098461807a09729a->leave($__internal_a32d648167633f6da9be300410067bd8479c41474df3d578098461807a09729a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b5adbae27bc02b1e9c4a06a22ef0425823ba23995b22018ef9ae68d5b4e059e2 = $this->env->getExtension("native_profiler");
        $__internal_b5adbae27bc02b1e9c4a06a22ef0425823ba23995b22018ef9ae68d5b4e059e2->enter($__internal_b5adbae27bc02b1e9c4a06a22ef0425823ba23995b22018ef9ae68d5b4e059e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"divider divider-lg\"> </div>
    <div class=\"container\">
        <div class=\"row margin-col-sm-top\">
            <div class=\"col-md-2 col-sm-3 col-xs-12\" >
                <section class=\"breadcrumbs prefer-tab\">

                    <ul class=\"nav nav-tab\">
                        <li class=\"active\"><a data-name=\"my-info\" data-toggle=\"tab\" href=\"#my-info\">My Info</a></li>
                        <li><a data-name=\"my-info\" data-toggle=\"tab\" href=\"#password\">Password</a></li>
                    </ul>

                </section>
            </div>
            <div class=\"col-md-10 col-sm-9 col-xs-12\">
                <section>
                    <div class=\"tab-content\">
                        <!---step1!-->
                        <div id=\"my-info\" class=\"tab-pane fade active in\">
                            <div class=\"row\">
                                <img class=\"img-responsive center-block\" alt=\"\" src=\"images/user-1.png\">
                                <h6 class=\"center-text-align\"><a class=\"a-popup-color\">Change profile picture </a></h6>
                            </div>
                            <form class=\"form-horizontal margin-col-sm-top\">
                                <div class=\"form-group\">
                                    <label class=\"light control-label col-md-2 col-md-offset-2 col-sm-3\">First Name</label>
                                    <div class=\"col-md-5 col-sm-8\">
                                        <input type=\"text\" required=\"\" placeholder=\"First Name\" id=\"first_name\" class=\"form-control\" name=\"firstname\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"light control-label col-md-2 col-md-offset-2 col-sm-3\">Last Name</label>
                                    <div class=\"col-md-5 col-sm-8\">
                                        <input type=\"text\" required=\"\" placeholder=\"Last Name\" id=\"first_name\" class=\"form-control\" name=\"lastname\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"light control-label col-md-2 col-md-offset-2 col-sm-3\">Email Address</label>
                                    <div class=\"col-md-5 col-sm-8\">
                                        <input type=\"email\" required=\"\" placeholder=\"Email Address\" id=\"first_name\" class=\"form-control\" name=\"email\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"light control-label col-md-2 col-md-offset-2 col-sm-3\">Phone</label>
                                    <div class=\"col-md-5 col-sm-8\">
                                        <input type=\"text\" required=\"\" placeholder=\"Phone\" id=\"phone\" class=\"form-control\" name=\"phone\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"light control-label col-md-2 col-md-offset-2 col-sm-3\">Zip Code</label>
                                    <div class=\"col-md-5 col-sm-8\">
                                        <input type=\"text\" required=\"\" placeholder=\"Zip Code\" id=\"zip_code\" class=\"form-control\" name=\"zip_code\">
                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    <div class=\"col-md-9 col-sm-11\">
                                        <button type=\"submit\" class=\"btn btn-cool btn-md-sm btn-bottom margin-col-sm-top pull-right\">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!---End of step1!-->
                        <!---step2!-->

                        <div id=\"password\" class=\"tab-pane fade\">
                            <div class=\"subtitle\">
                                <div>
                                    <span>Change Password</span>
                                </div>
                            </div>
                            <form class=\"form-horizontal margin-col-sm-top\">
                                <div class=\"form-group\">
                                    <label class=\"light control-label col-md-2 col-md-offset-2 col-sm-3\">Old Password</label>
                                    <div class=\"col-md-5 col-sm-8\">
                                        <input type=\"password\" required=\"\" placeholder=\"Old Password\" id=\"old_password\" class=\"form-control\" name=\"old_password\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"light control-label col-md-2 col-md-offset-2 col-sm-3\">New Password</label>
                                    <div class=\"col-md-5 col-sm-8\">
                                        <input type=\"password\" required=\"\" placeholder=\"New Password\" id=\"new_password\" class=\"form-control\" name=\"new_password\">
                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    <div class=\"col-md-9 col-sm-11\">
                                        <button type=\"submit\" class=\"btn btn-cool btn-md-sm btn-bottom margin-col-sm-top pull-right\">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!---End of step2!-->
                        <div class=\"divider divider-lg\">
                        </div><div class=\"divider divider-lg\">
                        </div>
                        <div class=\"divider divider-sm\">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
";
        
        $__internal_b5adbae27bc02b1e9c4a06a22ef0425823ba23995b22018ef9ae68d5b4e059e2->leave($__internal_b5adbae27bc02b1e9c4a06a22ef0425823ba23995b22018ef9ae68d5b4e059e2_prof);

    }

    public function getTemplateName()
    {
        return "ClothstudioBundle:User:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 4,  11 => 3,);
    }
}
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extends your base template, like base.html.twig #}*/
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Profile{% endblock %}*/
/* {% block content %}*/
/* */
/*     <div class="divider divider-lg"> </div>*/
/*     <div class="container">*/
/*         <div class="row margin-col-sm-top">*/
/*             <div class="col-md-2 col-sm-3 col-xs-12" >*/
/*                 <section class="breadcrumbs prefer-tab">*/
/* */
/*                     <ul class="nav nav-tab">*/
/*                         <li class="active"><a data-name="my-info" data-toggle="tab" href="#my-info">My Info</a></li>*/
/*                         <li><a data-name="my-info" data-toggle="tab" href="#password">Password</a></li>*/
/*                     </ul>*/
/* */
/*                 </section>*/
/*             </div>*/
/*             <div class="col-md-10 col-sm-9 col-xs-12">*/
/*                 <section>*/
/*                     <div class="tab-content">*/
/*                         <!---step1!-->*/
/*                         <div id="my-info" class="tab-pane fade active in">*/
/*                             <div class="row">*/
/*                                 <img class="img-responsive center-block" alt="" src="images/user-1.png">*/
/*                                 <h6 class="center-text-align"><a class="a-popup-color">Change profile picture </a></h6>*/
/*                             </div>*/
/*                             <form class="form-horizontal margin-col-sm-top">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light control-label col-md-2 col-md-offset-2 col-sm-3">First Name</label>*/
/*                                     <div class="col-md-5 col-sm-8">*/
/*                                         <input type="text" required="" placeholder="First Name" id="first_name" class="form-control" name="firstname">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="light control-label col-md-2 col-md-offset-2 col-sm-3">Last Name</label>*/
/*                                     <div class="col-md-5 col-sm-8">*/
/*                                         <input type="text" required="" placeholder="Last Name" id="first_name" class="form-control" name="lastname">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="light control-label col-md-2 col-md-offset-2 col-sm-3">Email Address</label>*/
/*                                     <div class="col-md-5 col-sm-8">*/
/*                                         <input type="email" required="" placeholder="Email Address" id="first_name" class="form-control" name="email">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="light control-label col-md-2 col-md-offset-2 col-sm-3">Phone</label>*/
/*                                     <div class="col-md-5 col-sm-8">*/
/*                                         <input type="text" required="" placeholder="Phone" id="phone" class="form-control" name="phone">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="light control-label col-md-2 col-md-offset-2 col-sm-3">Zip Code</label>*/
/*                                     <div class="col-md-5 col-sm-8">*/
/*                                         <input type="text" required="" placeholder="Zip Code" id="zip_code" class="form-control" name="zip_code">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group ">*/
/*                                     <div class="col-md-9 col-sm-11">*/
/*                                         <button type="submit" class="btn btn-cool btn-md-sm btn-bottom margin-col-sm-top pull-right">Save</button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                         <!---End of step1!-->*/
/*                         <!---step2!-->*/
/* */
/*                         <div id="password" class="tab-pane fade">*/
/*                             <div class="subtitle">*/
/*                                 <div>*/
/*                                     <span>Change Password</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <form class="form-horizontal margin-col-sm-top">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light control-label col-md-2 col-md-offset-2 col-sm-3">Old Password</label>*/
/*                                     <div class="col-md-5 col-sm-8">*/
/*                                         <input type="password" required="" placeholder="Old Password" id="old_password" class="form-control" name="old_password">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="light control-label col-md-2 col-md-offset-2 col-sm-3">New Password</label>*/
/*                                     <div class="col-md-5 col-sm-8">*/
/*                                         <input type="password" required="" placeholder="New Password" id="new_password" class="form-control" name="new_password">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group ">*/
/*                                     <div class="col-md-9 col-sm-11">*/
/*                                         <button type="submit" class="btn btn-cool btn-md-sm btn-bottom margin-col-sm-top pull-right">Save</button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/* */
/*                         <!---End of step2!-->*/
/*                         <div class="divider divider-lg">*/
/*                         </div><div class="divider divider-lg">*/
/*                         </div>*/
/*                         <div class="divider divider-sm">*/
/*                         </div>*/
/*                     </div>*/
/*                 </section>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
