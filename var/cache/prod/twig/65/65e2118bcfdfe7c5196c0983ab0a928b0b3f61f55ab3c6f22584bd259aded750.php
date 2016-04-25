<?php

/* @Clothstudio/User/profile.html.twig */
class __TwigTemplate_16c15df1459cadd3b1477c1903f9a959c525bb6c13c93ce7bc090fa10436bac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "@Clothstudio/User/profile.html.twig", 3);
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
    }

    public function getTemplateName()
    {
        return "@Clothstudio/User/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 4,  11 => 3,);
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
