<?php

/* @Clothstudio/Default/index.html.twig */
class __TwigTemplate_cf203c47db70187d3fab92e488a378453205558fde3313f5577ca96ec5cb638e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Clothstudio/Default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <!--Page Content-->

    <!--Hero Section-->
    <section id=\"hero-banner\">
        <div class=\"banner-inner\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">

                        <h2>A NEW WAY TO SHOP FOR FASHION</h2>
                        <p>Now you can save time, money and look amazing! Your personal stylist will help you get the best outfits that complement your lifestyle. FREE!</p>
                        <a class=\"btn btn-cool btn-bottom btn-lg\" href=\"clothes-MorW.html\">Get Started</a>

                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!--/end Hero Section-->

    <!--How It Works Seaction--> 
    <section id=\"how it works\">
        <div class=\"content grey-container\">\t
            <div class=\"divider divider-sm\">
            </div>
            <div class=\"subtitle\">
                <div>
                    <h1>How it works</h1>
                </div>
            </div>
        </div>
        <div class=\"container content\" >
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-6 col-lg-6 howitworks-text text-center\">
                    <div class=\"number icon-outer\">
                        <span class=\"icon icon-xxxl flaticon-welldone\"></span>
                    </div>
                    <h5>Get STARTED</h5>
                    <p>Create your style profile to get to know you.</p>\t
                </div>
                <div class=\"divider-md visible-xs\">
                </div>
                <div class=\"col-sm-6 col-md-6 col-lg-6\">
                    <img class=\"img-responsive\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/htw-image1.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
            <div class=\"divider-md\">
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-6 col-lg-6\">
                    <img class=\"img-responsive\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"divider-md visible-xs\">
                </div>
                <div class=\"col-sm-6 col-md-6 col-lg-6 howitworks-text text-center\">
                    <div class=\"number icon-outer\">
                        <span class=\"icon icon-xxxl flaticon-profile8\"></span>
                    </div>
                    <h5>GO SHOPPING</h5>
                    <p>
                        ClotheStudio will create the best outfits for your size, style and preferences.
                    </p>
                </div>
            </div>
            <div class=\"divider-md\">
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-6 col-lg-6 howitworks-text text-center\">
                    <div class=\"number icon-outer\">
                        <span class=\"icon icon-xxxl flaticon-welldone\"></span>
                    </div>
                    <h5>CHECK IT OUT</h5>
                    <p>
                        Receive a lookbook with only what complement you. <br/>
                        Order what you love, leave a feedback!
                    </p>\t
                </div>
                <div class=\"divider-md visible-xs\">
                </div>
                <div class=\"col-sm-6 col-md-6 col-lg-6\">
                    <img class=\"img-responsive\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/hero.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>
        </div>
    </section>
    <!-- //End How It Works Seaction-->

    <!--Features Seaction-->
    <section class=\"content grey-container\" id=\"features\">
        <div class=\"container\">
            <div class=\"subtitle\">
                <div>
                    <span>Features</span>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4 col-md-4 col-lg-4 text-center\">
                    <div class=\"rect-noborder\">
                        <div class=\"number icon-outer\">
                            <span class=\"icon icon-xl flaticon-welldone\"></span>
                        </div>

                        <h6><strong>Happy Customers</strong></h6>
                        <p>
                            Aliquam lectus. Morbi eget massa dapibus dui, urna et mi. Cras pellentesque. Fusce sed molestie molestie, enim urna vehicula magna, eu venenatis velit nunc eget justo.
                        </p>
                    </div>
                </div>
                <div class=\"col-sm-4 col-md-4 col-lg-4 text-center\">
                    <div class=\"rect-noborder\">

                        <div class=\"number icon-outer\">
                            <span class=\"icon flaticon-brief\"></span>

                        </div>
                        <h6><strong>Amazing Works</strong></h6>
                        <p>
                            Aliquam lectus. Morbi eget massa dapibus dui, urna et mi. Cras pellentesque. Fusce sed molestie molestie, enim urna vehicula magna, eu venenatis velit nunc eget justo.
                        </p>
                    </div>
                </div>
                <div class=\"col-sm-4 col-md-4 col-lg-4 text-center\">
                    <div class=\"rect-noborder\">

                        <div class=\"number icon-outer\">
                            <span class=\"icon flaticon-group41\"></span>

                        </div>
                        <h6><strong>Followers</strong></h6>
                        <p>
                            Aliquam lectus. Morbi eget massa dapibus dui, urna et mi. Cras pellentesque. Fusce sed molestie molestie, enim urna vehicula magna, eu venenatis velit nunc eget justo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //End Features Seaction-->  




    <!-- Brands -->
    <section class=\"container content brands-slider\">
        <div class=\"subtitle right-space\">
            <div> <span>BRANDS</span> </div>
        </div>
        <div class=\"brands-carousel\">
            <div class=\"slides\">
                <div> <a href=\"#\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/brand1.png"), "html", null, true);
        echo "\" alt=\"\"></a> </div>
                <div> <a href=\"#\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/brand2.png"), "html", null, true);
        echo "\" alt=\"\"></a> </div>
                <div> <a href=\"#\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/brand3.png"), "html", null, true);
        echo "\" alt=\"\"></a> </div>
                <div> <a href=\"#\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/brand4.png"), "html", null, true);
        echo "\" alt=\"\"></a> </div>
                <div> <a href=\"#\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/brand5.png"), "html", null, true);
        echo "\" alt=\"\"></a> </div>
                <div> <a href=\"#\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/brand6.png"), "html", null, true);
        echo "\" alt=\"\"></a> </div>
                <div> <a href=\"#\"><img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/brand7.png"), "html", null, true);
        echo "\" alt=\"\"></a> </div>
                <div> <a href=\"#\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/brand8.png"), "html", null, true);
        echo "\" alt=\"\"></a> </div>
            </div>
        </div>
    </section>
    <!-- //end Brands -->       

    <!-- Blog widget -->
    <section class=\"blog-widget parallax\">
        <div class=\"container content\">
            <div class=\"posts\">
                <div class=\"subtitle\">
                    <div> <span>From the BLOG</span> </div>
                </div>
                <div class=\"slides slick-style3\">
                    <div class=\"carousel-item\"> <a href=\"blog-single.html\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/blog/blog-img-01.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>Blog post number 1 <span class=\"date\">September 02, 2015</span> </div>
                    <div class=\"carousel-item\"> <a href=\"blog-single.html\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/blog/blog-img-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>Blog post number 2 <span class=\"date\">September 02, 2015</span> </div>
                    <div class=\"carousel-item\"> <a href=\"blog-single.html\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/blog/blog-img-03.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>Blog post number 3 <span class=\"date\">September 02, 2015</span> </div>
                    <div class=\"carousel-item\"> <a href=\"blog-single.html\"><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/blog/blog-img-04.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>Blog post number 4 <span class=\"date\">September 02, 2015</span> </div>
                    <div class=\"carousel-item\"> <a href=\"blog-single.html\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/blog/blog-img-05.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>Blog post number 5 <span class=\"date\">September 02, 2015</span> </div>
                    <div class=\"carousel-item\"> <a href=\"blog-single.html\"><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/blog/blog-img-01.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>Blog post number 6 <span class=\"date\">September 02, 2015</span> </div>
                    <div class=\"carousel-item\"> <a href=\"blog-single.html\"><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/blog/blog-img-02.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>Blog post number 7 <span class=\"date\">September 02, 2015</span> </div>
                    <div class=\"carousel-item\"> <a href=\"blog-single.html\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/blog/blog-img-03.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>Blog post number 8 <span class=\"date\">September 02, 2015</span> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //end Blog widget -->

    <!-- Subscribe -->
    <section class=\"content container\">
        <div class=\"subscribe\">
            <div class=\"row collapsed-block\">
                <div class=\"col-sm-12 col-md-3 col-lg-3\">
                    <h3>NEWSLETTER SIGNUP <a class=\"expander visible-sm visible-xs\" href=\"#TabBlock-1\">+</a></h3>
                </div>
                <div class=\"col-sm-12 col-md-9 col-lg-9 tabBlock\" id=\"TabBlock-1\">
                    <form class=\"form-inline\" >
                        <div class=\"row\">
                            <div class=\"col-sm-5 col-md-5\">
                                <input type=\"text\" class=\"form-control pull-right\" value=\"Your E-mail...\" onblur=\"if (this.value == '') {
                                            this.value = 'Your E-mail...';
                                        }\" onfocus=\"if (this.value == 'Your E-mail...') {
                                                    this.value = '';
                                                }\">
                                <div class=\"divider divider-sm visible-xs\"> </div>
                            </div>
                            <div class=\"col-sm-2 col-md-2\">
                                <button type=\"submit\" class=\"button btn-cool\"><span class=\"icon flaticon-new78\"></span>subscribe </button>
                                <div class=\"divider divider-sm visible-xs\"> </div>
                            </div>
                            <div class=\"col-sm-5 col-md-4\">
                                <p> Enter your email and we'll send you a coupon with 10% off your next order. </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //end Subscribe --> 
";
    }

    public function getTemplateName()
    {
        return "@Clothstudio/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 181,  261 => 180,  257 => 179,  253 => 178,  249 => 177,  245 => 176,  241 => 175,  237 => 174,  220 => 160,  216 => 159,  212 => 158,  208 => 157,  204 => 156,  200 => 155,  196 => 154,  192 => 153,  120 => 84,  87 => 54,  77 => 47,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block content %}*/
/* */
/*     <!--Page Content-->*/
/* */
/*     <!--Hero Section-->*/
/*     <section id="hero-banner">*/
/*         <div class="banner-inner">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6">*/
/* */
/*                         <h2>A NEW WAY TO SHOP FOR FASHION</h2>*/
/*                         <p>Now you can save time, money and look amazing! Your personal stylist will help you get the best outfits that complement your lifestyle. FREE!</p>*/
/*                         <a class="btn btn-cool btn-bottom btn-lg" href="clothes-MorW.html">Get Started</a>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>    */
/*     <!--/end Hero Section-->*/
/* */
/*     <!--How It Works Seaction--> */
/*     <section id="how it works">*/
/*         <div class="content grey-container">	*/
/*             <div class="divider divider-sm">*/
/*             </div>*/
/*             <div class="subtitle">*/
/*                 <div>*/
/*                     <h1>How it works</h1>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container content" >*/
/*             <div class="row">*/
/*                 <div class="col-sm-6 col-md-6 col-lg-6 howitworks-text text-center">*/
/*                     <div class="number icon-outer">*/
/*                         <span class="icon icon-xxxl flaticon-welldone"></span>*/
/*                     </div>*/
/*                     <h5>Get STARTED</h5>*/
/*                     <p>Create your style profile to get to know you.</p>	*/
/*                 </div>*/
/*                 <div class="divider-md visible-xs">*/
/*                 </div>*/
/*                 <div class="col-sm-6 col-md-6 col-lg-6">*/
/*                     <img class="img-responsive" src="{{asset('images/htw-image1.png')}}" alt="">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="divider-md">*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6 col-md-6 col-lg-6">*/
/*                     <img class="img-responsive" src="{{asset('images/hero.jpg')}}" alt="">*/
/*                 </div>*/
/*                 <div class="divider-md visible-xs">*/
/*                 </div>*/
/*                 <div class="col-sm-6 col-md-6 col-lg-6 howitworks-text text-center">*/
/*                     <div class="number icon-outer">*/
/*                         <span class="icon icon-xxxl flaticon-profile8"></span>*/
/*                     </div>*/
/*                     <h5>GO SHOPPING</h5>*/
/*                     <p>*/
/*                         ClotheStudio will create the best outfits for your size, style and preferences.*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="divider-md">*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6 col-md-6 col-lg-6 howitworks-text text-center">*/
/*                     <div class="number icon-outer">*/
/*                         <span class="icon icon-xxxl flaticon-welldone"></span>*/
/*                     </div>*/
/*                     <h5>CHECK IT OUT</h5>*/
/*                     <p>*/
/*                         Receive a lookbook with only what complement you. <br/>*/
/*                         Order what you love, leave a feedback!*/
/*                     </p>	*/
/*                 </div>*/
/*                 <div class="divider-md visible-xs">*/
/*                 </div>*/
/*                 <div class="col-sm-6 col-md-6 col-lg-6">*/
/*                     <img class="img-responsive" src="{{asset('images/hero.jpg')}}" alt="">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- //End How It Works Seaction-->*/
/* */
/*     <!--Features Seaction-->*/
/*     <section class="content grey-container" id="features">*/
/*         <div class="container">*/
/*             <div class="subtitle">*/
/*                 <div>*/
/*                     <span>Features</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-4 col-md-4 col-lg-4 text-center">*/
/*                     <div class="rect-noborder">*/
/*                         <div class="number icon-outer">*/
/*                             <span class="icon icon-xl flaticon-welldone"></span>*/
/*                         </div>*/
/* */
/*                         <h6><strong>Happy Customers</strong></h6>*/
/*                         <p>*/
/*                             Aliquam lectus. Morbi eget massa dapibus dui, urna et mi. Cras pellentesque. Fusce sed molestie molestie, enim urna vehicula magna, eu venenatis velit nunc eget justo.*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-4 col-md-4 col-lg-4 text-center">*/
/*                     <div class="rect-noborder">*/
/* */
/*                         <div class="number icon-outer">*/
/*                             <span class="icon flaticon-brief"></span>*/
/* */
/*                         </div>*/
/*                         <h6><strong>Amazing Works</strong></h6>*/
/*                         <p>*/
/*                             Aliquam lectus. Morbi eget massa dapibus dui, urna et mi. Cras pellentesque. Fusce sed molestie molestie, enim urna vehicula magna, eu venenatis velit nunc eget justo.*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-4 col-md-4 col-lg-4 text-center">*/
/*                     <div class="rect-noborder">*/
/* */
/*                         <div class="number icon-outer">*/
/*                             <span class="icon flaticon-group41"></span>*/
/* */
/*                         </div>*/
/*                         <h6><strong>Followers</strong></h6>*/
/*                         <p>*/
/*                             Aliquam lectus. Morbi eget massa dapibus dui, urna et mi. Cras pellentesque. Fusce sed molestie molestie, enim urna vehicula magna, eu venenatis velit nunc eget justo.*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- //End Features Seaction-->  */
/* */
/* */
/* */
/* */
/*     <!-- Brands -->*/
/*     <section class="container content brands-slider">*/
/*         <div class="subtitle right-space">*/
/*             <div> <span>BRANDS</span> </div>*/
/*         </div>*/
/*         <div class="brands-carousel">*/
/*             <div class="slides">*/
/*                 <div> <a href="#"><img src="{{asset('images/brand1.png')}}" alt=""></a> </div>*/
/*                 <div> <a href="#"><img src="{{asset('images/brand2.png')}}" alt=""></a> </div>*/
/*                 <div> <a href="#"><img src="{{asset('images/brand3.png')}}" alt=""></a> </div>*/
/*                 <div> <a href="#"><img src="{{asset('images/brand4.png')}}" alt=""></a> </div>*/
/*                 <div> <a href="#"><img src="{{asset('images/brand5.png')}}" alt=""></a> </div>*/
/*                 <div> <a href="#"><img src="{{asset('images/brand6.png')}}" alt=""></a> </div>*/
/*                 <div> <a href="#"><img src="{{asset('images/brand7.png')}}" alt=""></a> </div>*/
/*                 <div> <a href="#"><img src="{{asset('images/brand8.png')}}" alt=""></a> </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- //end Brands -->       */
/* */
/*     <!-- Blog widget -->*/
/*     <section class="blog-widget parallax">*/
/*         <div class="container content">*/
/*             <div class="posts">*/
/*                 <div class="subtitle">*/
/*                     <div> <span>From the BLOG</span> </div>*/
/*                 </div>*/
/*                 <div class="slides slick-style3">*/
/*                     <div class="carousel-item"> <a href="blog-single.html"><img src="{{asset('images/blog/blog-img-01.jpg')}}" alt=""></a>Blog post number 1 <span class="date">September 02, 2015</span> </div>*/
/*                     <div class="carousel-item"> <a href="blog-single.html"><img src="{{asset('images/blog/blog-img-02.jpg')}}" alt=""></a>Blog post number 2 <span class="date">September 02, 2015</span> </div>*/
/*                     <div class="carousel-item"> <a href="blog-single.html"><img src="{{asset('images/blog/blog-img-03.jpg')}}" alt=""></a>Blog post number 3 <span class="date">September 02, 2015</span> </div>*/
/*                     <div class="carousel-item"> <a href="blog-single.html"><img src="{{asset('images/blog/blog-img-04.jpg')}}" alt=""></a>Blog post number 4 <span class="date">September 02, 2015</span> </div>*/
/*                     <div class="carousel-item"> <a href="blog-single.html"><img src="{{asset('images/blog/blog-img-05.jpg')}}" alt=""></a>Blog post number 5 <span class="date">September 02, 2015</span> </div>*/
/*                     <div class="carousel-item"> <a href="blog-single.html"><img src="{{asset('images/blog/blog-img-01.jpg')}}" alt=""></a>Blog post number 6 <span class="date">September 02, 2015</span> </div>*/
/*                     <div class="carousel-item"> <a href="blog-single.html"><img src="{{asset('images/blog/blog-img-02.jpg')}}" alt=""></a>Blog post number 7 <span class="date">September 02, 2015</span> </div>*/
/*                     <div class="carousel-item"> <a href="blog-single.html"><img src="{{asset('images/blog/blog-img-03.jpg')}}" alt=""></a>Blog post number 8 <span class="date">September 02, 2015</span> </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- //end Blog widget -->*/
/* */
/*     <!-- Subscribe -->*/
/*     <section class="content container">*/
/*         <div class="subscribe">*/
/*             <div class="row collapsed-block">*/
/*                 <div class="col-sm-12 col-md-3 col-lg-3">*/
/*                     <h3>NEWSLETTER SIGNUP <a class="expander visible-sm visible-xs" href="#TabBlock-1">+</a></h3>*/
/*                 </div>*/
/*                 <div class="col-sm-12 col-md-9 col-lg-9 tabBlock" id="TabBlock-1">*/
/*                     <form class="form-inline" >*/
/*                         <div class="row">*/
/*                             <div class="col-sm-5 col-md-5">*/
/*                                 <input type="text" class="form-control pull-right" value="Your E-mail..." onblur="if (this.value == '') {*/
/*                                             this.value = 'Your E-mail...';*/
/*                                         }" onfocus="if (this.value == 'Your E-mail...') {*/
/*                                                     this.value = '';*/
/*                                                 }">*/
/*                                 <div class="divider divider-sm visible-xs"> </div>*/
/*                             </div>*/
/*                             <div class="col-sm-2 col-md-2">*/
/*                                 <button type="submit" class="button btn-cool"><span class="icon flaticon-new78"></span>subscribe </button>*/
/*                                 <div class="divider divider-sm visible-xs"> </div>*/
/*                             </div>*/
/*                             <div class="col-sm-5 col-md-4">*/
/*                                 <p> Enter your email and we'll send you a coupon with 10% off your next order. </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- //end Subscribe --> */
/* {% endblock %}*/
