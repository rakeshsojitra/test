<?php

/* @Clothstudio/User/model-women.html.twig */
class __TwigTemplate_5147005e6d6984565d0a29b8e18719ff8120490fc12d8a4d20db56ea05362182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Clothstudio/User/model-women.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "    <form action=\"\" method=\"post\">
        <!--Page Content-->
        <div class=\"divider divider-lg\"></div>

        <!--five steps tab!-->
        <section class=\"breadcrumbs text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a data-name=\"First-signupdata\" data-toggle=\"tab\" href=\"#fit\">Fit</a><span class=\"divider\">&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
                        <li><a data-name=\"second-signupdata\" data-toggle=\"tab\" href=\"#body-shape\">Body Shape</a><span class=\"divider\">&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
                        <li><a data-name=\"third-signupdata\" data-toggle=\"tab\" href=\"#style\">Style</a><span class=\"divider\">&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
                        <li><a data-name=\"four-signupdata\" data-toggle=\"tab\" href=\"#budget\">Budget</a><span class=\"divider\">&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
                        <li><a data-name=\"fifth-signupdata\" data-toggle=\"tab\" href=\"#profile\">Profile</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--five steps tab!-->

        <!--steps tab!-->
        <section class=\"content\">
            <div class=\"container\">
                <div class=\"tab-content\">
                    <!---step1!-->
                    <div id=\"fit\" class=\"tab-pane fade active in\">
                        <div class=\"subtitle\">
                            <div>
                                <span>What is Your Size?</span>
                            </div>
                        </div>
                        <div class=\"col-md-10 col-md-offset-1\">
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">Height</label>
                                    <select class=\"selectpicker\" name=\"customer[cHeight][feet]\">
                                        <option selected=\"selected\" value=\"\">Select Feet</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4  col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">&nbsp;</label>
                                    <select class=\"selectpicker\" name=\"customer[cHeight][inches]\">
                                        <option selected=\"selected\" value=\"\">Select inches</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">Weight</label>
                                    <input type=\"text\" class=\"form-control\" name=\"customer[cWeight][lbs]\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-10 col-md-offset-1\">
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">Tops &nbsp;</label>
                                    <select class=\"selectpicker\" name=\"customer[cTopSize][tops]\">
                                        <option selected=\"selected\" value=\"\">Select Tops</option>
                                        <option value=\"regular\">Regular</option>
                                        <option value=\"patite\">Patite</option>
                                        <option value=\"plus\">Plus</option>                                            
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4  col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">&nbsp;</label>
                                    <select class=\"selectpicker\" name=\"customer[cTopSize][size]\">
                                        <option selected=\"selected\" value=\"\">Select size</option>
                                        <option value=\"XXS\">XXS</option>
                                        <option value=\"XS\">XS</option>
                                        <option value=\"S\">S</option>
                                        <option value=\"M\">M</option>
                                        <option value=\"L\">L</option>
                                        <option value=\"XL\">XL</option>
                                        <option value=\"XLL\">XLL</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">&nbsp;</label>
                                    <select class=\"selectpicker\" name=\"customer[cTopSize][inches]\">
                                        <option selected=\"selected\" value=\"\">Select inches</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-10 col-md-offset-1\">
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">Dress</label>
                                    <select class=\"selectpicker\" name=\"customer[cDressSize][type]\">
                                        <option value=\"\">Select Dress</option>
                                        <option value=\"Regular\">Regular</option>
                                        <option value=\"Plus\">Plus</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">&nbsp;</label>
                                    <select class=\"selectpicker\" name=\"customer[cDressSize][size]\">
                                        <option selected=\"selected\" value=\"\">Select size</option>
                                        <option value=\"XXS\">XXS</option>
                                        <option value=\"XS\">XS</option>
                                        <option value=\"S\">S</option>
                                        <option value=\"M\">M</option>
                                        <option value=\"L\">L</option>
                                        <option value=\"XL\">XL</option>
                                        <option value=\"XLL\">XLL</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">&nbsp;</label>
                                    <select class=\"selectpicker\" name=\"customer[cDressSize][inches]\">
                                        <option selected=\"selected\" value=\"\">Select inches</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-10 col-md-offset-1\">
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">Bra Size</label>
                                    <select class=\"selectpicker\" name=\"customer[cBraSize][feet]\">
                                        <option selected=\"selected\" value=\"\">Select Feet</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">&nbsp;</label>
                                    <select class=\"selectpicker\" name=\"customer[cBraSize][inches]\">
                                        <option selected=\"selected\" value=\"\">Select inches</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-10 col-md-offset-1\">
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">Pants</label>
                                    <select class=\"selectpicker\" name=\"customer[cPantSize][type]\">
                                        <option selected=\"selected\" value=\"\">Select Pants</option>
                                        <option value=\"regular\">Regular</option>
                                        <option value=\"patite\">Patite</option>
                                        <option value=\"plus\">Plus</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4  col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">&nbsp;</label>
                                    <select class=\"selectpicker\" name=\"customer[cPantSize][size]\">
                                        <option selected=\"selected\" value=\"\">Select size</option>
                                        <option value=\"XXS\">XXS</option>
                                        <option value=\"XS\">XS</option>
                                        <option value=\"S\">S</option>
                                        <option value=\"M\">M</option>
                                        <option value=\"L\">L</option>
                                        <option value=\"XL\">XL</option>
                                        <option value=\"XLL\">XLL</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">&nbsp;</label>
                                    <select class=\"selectpicker\" name=\"customer[cPantSize][inches]\">
                                        <option selected=\"selected\" value=\"\">Select inches</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-10 col-md-offset-1\">
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">Waist</label>
                                    <select class=\"selectpicker\" name=\"customer[cWaistSize][inches]\">
                                        <option selected=\"selected\" value=\"\">Select waist</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-10 col-md-offset-1\">
                            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"light light-1\">Shoes</label>
                                    <select class=\"selectpicker\" name=\"customer[cShoesSize][inches]\">
                                        <option selected=\"selected\" value=\"\">Select Shoes</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                        <option value=\"5\">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-10 col-md-offset-1\">
                            <div class=\"col-md-12\">
                                <a class=\"btn btn-cool btn-md-sm btn-bottom pull-right\" data-name=\"second-signupdata\" data-toggle=\"tab\" href=\"#body-shape\">Next</a>
                            </div>
                        </div>
                    </div>
                    <!---End of step1!-->
                    <!---step2!-->

                    <div id=\"body-shape\" class=\"tab-pane fade\">
                        <div class=\"subtitle\">
                            <div>
                                <span>What is Your Body Shape?</span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2 col-sm-offset-1 margin-col-sm-top\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"shape1\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"shape1\" name=\"customer[cBodyShape][]\" value=\"Trapezoid\"/>
                                <div class=\"checkbox-checked\"></div>
                                <h6 class=\"center-text-align\">Trapezoid</h6>
                            </div>
                            <div class=\"col-sm-2 margin-col-sm-top\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"shape2\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"shape2\" name=\"customer[cBodyShape][]\" value=\"Inverted Triangle\"/>
                                <div class=\"checkbox-checked\"></div>
                                <h6 class=\"center-text-align\">Inverted Triangel</h6>
                            </div>
                            <div class=\"col-sm-2 margin-col-sm-top\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"shape3\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"shape3\" name=\"customer[cBodyShape][]\" value=\"Rectangle\"/>
                                <div class=\"checkbox-checked\"></div>
                                <h6 class=\"center-text-align\">Rectangle</h6>
                            </div>
                            <div class=\"col-sm-2 margin-col-sm-top\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"shape4\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"shape4\" name=\"customer[cBodyShape][]\" value=\"Triangle\">
                                <div class=\"checkbox-checked\"></div>
                                <h6 class=\"center-text-align\">Triangle</h6>
                            </div>
                            <div class=\"col-sm-2 margin-col-sm-top\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"shape5\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"shape5\" name=\"customer[cBodyShape][]\" value=\"Oval\"/>
                                <div class=\"checkbox-checked\"></div>
                                <h6 class=\"center-text-align\">Oval</h6>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-10 col-sm-offset-1 margin-col-sm-top\">
                                <a class=\"btn btn-cool btn-md-sm btn-bottom pull-left\" data-name=\"First-signupdata\" data-toggle=\"tab\" href=\"#fit\">Previous</a>
                                <a class=\"btn btn-cool btn-md-sm btn-bottom pull-right\" data-name=\"second-signupdata\" data-toggle=\"tab\" href=\"#style\">Next</a>
                            </div> 
                        </div>
                    </div>
                    <!---End of step2!-->

                    <!---step3!-->
                    <div id=\"style\" class=\"tab-pane\">
                        <div class=\"subtitle\">
                            <div>
                                <span>What of there styles do you like?</span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-1 margin-col-sm-top seven-image-height\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"style1\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"style1\" name=\"customer[cLikeStyles][]\" value=\"Style1\"/>
                                <div class=\"checkbox-checked\"></div>
                            </div>
                            <div class=\"col-sm-1 margin-col-sm-top seven-image-height\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"style2\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"style2\" name=\"customer[cLikeStyles][]\" value=\"Style2\"/>
                                <div class=\"checkbox-checked\"></div>
                            </div>
                            <div class=\"col-sm-1 margin-col-sm-top seven-image-height\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"style3\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"style3\" name=\"customer[cLikeStyles][]\" value=\"Style3\"/>
                                <div class=\"checkbox-checked\"></div>
                            </div>
                            <div class=\"col-sm-1 margin-col-sm-top seven-image-height\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"style4\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"style4\" name=\"customer[cLikeStyles][]\" value=\"Style4\"/>
                                <div class=\"checkbox-checked\"></div>
                            </div>
                            <div class=\"col-sm-1 margin-col-sm-top seven-image-height\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"style5\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"style5\" name=\"customer[cLikeStyles][]\" value=\"Style5\"/>
                                <div class=\"checkbox-checked\"></div>
                            </div>
                            <div class=\"col-sm-1 margin-col-sm-top seven-image-height\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"style6\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"style6\" name=\"customer[cLikeStyles][]\" value=\"Style6\"/>
                                <div class=\"checkbox-checked\"></div>
                            </div>
                            <div class=\"col-sm-1 margin-col-sm-top seven-image-height\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"style7\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"style7\" name=\"customer[cLikeStyles][]\" value=\"Style7\"/>
                                <div class=\"checkbox-checked\"></div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <h6 class=\"center-text-align\">Pick all that fit your taste</h6>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <h6 class=\"center-text-align\">What of these colors palettes you like?</h6>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-4 col-sm-offset-1 margin-col-sm-top\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"cool\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"cool\" name=\"customer[cLikeColorPalettes][]\" value=\"cool\"/>
                                <div class=\"checkbox-checked\"></div>
                                <h4 class=\"center-text-align\">cool palettes</h4>
                            </div>
                            <div class=\"col-sm-4 col-sm-offset-1 margin-col-sm-top\">
                                <div  class=\"banner-square animate fadeInDown animated  rect\">
                                    <div class=\"image-check\">
                                        <div class=\"image\"> 
                                            <label class=\"lab-pointer\" for=\"warm\">
                                                <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type=\"checkbox\" class=\"hidden\" id=\"warm\" name=\"customer[cLikeColorPalettes][]\" value=\"warm\"/>
                                <div class=\"checkbox-checked\"></div>
                                <h4 class=\"center-text-align\">warm palettes</h4>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-9 col-sm-offset-1  margin-col-sm-top\">
                                <a class=\"btn btn-cool btn-md-sm btn-bottom pull-left\" data-name=\"second-signupdata\" data-toggle=\"tab\" href=\"#body-shape\">Previous</a>
                                <a class=\"btn btn-cool btn-md-sm btn-bottom pull-right\" data-name=\"four-signupdata\" data-toggle=\"tab\" href=\"#budget\">Next</a>
                            </div> 
                        </div>
                    </div>
                    <!---End of step3!-->

                    <!---step4!-->
                    <div id=\"budget\" class=\"tab-pane\">
                        <div class=\"subtitle\">
                            <div>
                                <span>How much would you ideally spend on these categories?</span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2 col-sm-offset-3 margin-col-sm-top\">
                                <h6> Dresses</h6>
                            </div>
                            <div class=\"col-sm-4\">
                                <div id=\"box2\" class=\"panel-collapse in\">
                                    <div class=\"panel-body\">
                                        <div class=\"slider-range\">
                                            <div class=\"min\">
                                                \$<span class=\"value-lower\">19</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Dresses][]\" value=\"0\" class=\"lvalue hidden\"/>
                                            </div>
                                            <div class=\"max\">
                                                \$<span class=\"value-upper\">3000</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Dresses][]\" value=\"0\" class=\"uvalue hidden\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2 col-sm-offset-3 margin-col-sm-top\">
                                <h6>Tops</h6>
                            </div>
                            <div class=\"col-sm-4\">
                                <div id=\"box3\" class=\"panel-collapse in\">
                                    <div class=\"panel-body\">
                                        <div class=\"slider-range\">
                                            <div class=\"min\">
                                                \$<span class=\"value-lower\">19</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Tops][]\" value=\"0\" class=\"lvalue hidden\"/>
                                            </div>
                                            <div class=\"max\">
                                                \$<span class=\"value-upper\">3000</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Tops][]\" value=\"0\" class=\"uvalue hidden\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2 col-sm-offset-3 margin-col-sm-top\">
                                <h6>Bottoms</h6>
                            </div>
                            <div class=\"col-sm-4\">
                                <div id=\"box2\" class=\"panel-collapse in\">
                                    <div class=\"panel-body\">
                                        <div class=\"slider-range\">
                                            <div class=\"min\">
                                                \$<span class=\"value-lower\">19</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Bottoms][]\" value=\"0\" class=\"lvalue hidden\"/>
                                            </div>
                                            <div class=\"max\">
                                                \$<span class=\"value-upper\">3000</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Bottoms][]\" value=\"0\" class=\"uvalue hidden\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2 col-sm-offset-3 margin-col-sm-top\">
                                <h6>Out layers</h6>
                            </div>
                            <div class=\"col-sm-4\">
                                <div id=\"box2\" class=\"panel-collapse in\">
                                    <div class=\"panel-body\">
                                        <div class=\"slider-range\">
                                            <div class=\"min\">
                                                \$<span class=\"value-lower\">19</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][outLayers][]\" value=\"0\" class=\"lvalue hidden\"/>
                                            </div>
                                            <div class=\"max\">
                                                \$<span class=\"value-upper\">3000</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][outLayers][]\" value=\"0\" class=\"uvalue hidden\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2 col-sm-offset-3 margin-col-sm-top\">
                                <h6>Shoes</h6>
                            </div>
                            <div class=\"col-sm-4\">
                                <div id=\"box2\" class=\"panel-collapse in\">
                                    <div class=\"panel-body\">
                                        <div class=\"slider-range\">
                                            <div class=\"min\">
                                                \$<span class=\"value-lower\">19</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Shoes][]\" value=\"0\" class=\"lvalue hidden\"/>
                                            </div>
                                            <div class=\"max\">
                                                \$<span class=\"value-upper\">3000</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Shoes][]\" value=\"0\" class=\"uvalue hidden\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2 col-sm-offset-3 margin-col-sm-top\">
                                <h6>Bags</h6>
                            </div>
                            <div class=\"col-sm-4\">
                                <div id=\"box2\" class=\"panel-collapse in\">
                                    <div class=\"panel-body\">
                                        <div class=\"slider-range\">
                                            <div class=\"min\">
                                                \$<span class=\"value-lower\">19</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Bags][]\" value=\"0\" class=\"lvalue hidden\"/>
                                            </div>
                                            <div class=\"max\">
                                                \$<span class=\"value-upper\">3000</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Bags][]\" value=\"0\" class=\"uvalue hidden\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2 col-sm-offset-3 margin-col-sm-top\">
                                <h6>Jewelry & Watches</h6>
                            </div>
                            <div class=\"col-sm-4\">
                                <div id=\"box2\" class=\"panel-collapse in\">
                                    <div class=\"panel-body\">
                                        <div class=\"slider-range\">
                                            <div class=\"min\">
                                                \$<span class=\"value-lower\">19</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][jaw][]\" value=\"0\" class=\"lvalue hidden\"/>
                                            </div>
                                            <div class=\"max\">
                                                \$<span class=\"value-upper\">3000</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][jaw][]\" value=\"0\" class=\"uvalue hidden\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-2 col-sm-offset-3 margin-col-sm-top\">
                                <h6>Accessories</h6>
                            </div>
                            <div class=\"col-sm-4\">
                                <div id=\"box2\" class=\"panel-collapse in\">
                                    <div class=\"panel-body\">
                                        <div class=\"slider-range\">
                                            <div class=\"min\">
                                                \$<span class=\"value-lower\">19</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Accessories][]\" value=\"0\" class=\"lvalue hidden\"/>
                                            </div>
                                            <div class=\"max\">Shirts
                                                \$<span class=\"value-upper\">3000</span>
                                                <input type=\"text\" name=\"customer[cIdeallySpentForCategories][Accessories][]\" value=\"0\" class=\"uvalue hidden\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 col-sm-offset-3  margin-col-sm-top\">
                                <a class=\"btn btn-cool btn-md-sm btn-bottom pull-left\" data-name=\"third-signupdata\" data-toggle=\"tab\" href=\"#style\">Previous</a>
                                <a class=\"btn btn-cool btn-md-sm btn-bottom pull-right\" data-name=\"fifth-signupdata\" data-toggle=\"tab\" href=\"#profile\">Next</a>
                            </div> 
                        </div>
                    </div>
                    <!---End of step4!-->

                    <!---step5!-->
                    <div id=\"profile\" class=\"tab-pane\">

                        <div class=\"row\">
                            <div class=\"col-sm-4 col-sm-offset-2 right-side-border\">
                                <h2 class= \"center-text-align\">Almost Done!</h2>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"customer[cFirstName]\" placeholder=\"FIRST NAME\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"customer[cLastName]\" placeholder=\"LAST NAME\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"customer[cPhone]\" placeholder=\"PHONE\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"customer[cZip]\" placeholder=\"ZIP CODE\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"customer[cEmail]\" placeholder=\"EMAIL ADDRESS\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" class=\"form-control\" name=\"customer[cPassword]\" placeholder=\"PASSWORD\">
                                </div>
                                <input type=\"hidden\" class=\"form-control\" name=\"customer[cGender]\" value=\"Female\">
                                <input type=\"submit\" class=\"form-control btn btn-cool btn-md-sm btn-bottom\" value=\"CREATE YOUR ACCOUNT\">
                                <p class=\"p-set-font\">
                                    By Clicking Create Your Account, you agree to our <a href=\"#\"><span class=\"a-popup-color\">terms</span></a> and<a href=\"#\"><span class=\"a-popup-color\"> privacy policy.</span></a>
                                </p>
                            </div>
                            <div class=\"col-sm-4\">
                                <h2 class= \"center-text-align\">...or Signup with</h2>
                                <div class=\"text-center\">
                                    <a class=\"sign-btn sign-btn-facebook\" href=\"#\"><span class=\"icon flaticon-facebook12\"></span>Facebook</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class=\"sign-btn sign-btn-twitter\" href=\"#\"><span class=\"icon flaticon-social19\"></span>Twitter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---End of step5!-->
                    <div class=\"divider divider-sm\">
                    </div>
                </div>
            </div>
        </section>
        <!--steps tab!-->
    </form>
    <!--Page Content-->
";
    }

    // line 705
    public function block_javascripts($context, array $blocks = array())
    {
        // line 706
        echo "    <script>
        \$j(document).ready(function () {
            \$j('.checkbox-checked').click(function () {
                \$j(this).toggleClass(\"highlight\");
                \$j(this).prev('input[type=checkbox]').trigger('click');
                if (\$j(this).hasClass('highlight')) {
                    \$j(this).parents('.col-sm-2,.col-sm-1,.col-sm-4').find('.rect').css('border', 'none');
                } else {
                    \$j(this).parents('.col-sm-2,.col-sm-1,.col-sm-4').find('.rect').css('border', '1px dotted #cacaca');
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Clothstudio/User/model-women.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  740 => 706,  737 => 705,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block content %}*/
/*     <form action="" method="post">*/
/*         <!--Page Content-->*/
/*         <div class="divider divider-lg"></div>*/
/* */
/*         <!--five steps tab!-->*/
/*         <section class="breadcrumbs text-center">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li class="active"><a data-name="First-signupdata" data-toggle="tab" href="#fit">Fit</a><span class="divider">&nbsp;&nbsp;&nbsp;&nbsp;</span></li>*/
/*                         <li><a data-name="second-signupdata" data-toggle="tab" href="#body-shape">Body Shape</a><span class="divider">&nbsp;&nbsp;&nbsp;&nbsp;</span></li>*/
/*                         <li><a data-name="third-signupdata" data-toggle="tab" href="#style">Style</a><span class="divider">&nbsp;&nbsp;&nbsp;&nbsp;</span></li>*/
/*                         <li><a data-name="four-signupdata" data-toggle="tab" href="#budget">Budget</a><span class="divider">&nbsp;&nbsp;&nbsp;&nbsp;</span></li>*/
/*                         <li><a data-name="fifth-signupdata" data-toggle="tab" href="#profile">Profile</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!--five steps tab!-->*/
/* */
/*         <!--steps tab!-->*/
/*         <section class="content">*/
/*             <div class="container">*/
/*                 <div class="tab-content">*/
/*                     <!---step1!-->*/
/*                     <div id="fit" class="tab-pane fade active in">*/
/*                         <div class="subtitle">*/
/*                             <div>*/
/*                                 <span>What is Your Size?</span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-10 col-md-offset-1">*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">Height</label>*/
/*                                     <select class="selectpicker" name="customer[cHeight][feet]">*/
/*                                         <option selected="selected" value="">Select Feet</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4  col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">&nbsp;</label>*/
/*                                     <select class="selectpicker" name="customer[cHeight][inches]">*/
/*                                         <option selected="selected" value="">Select inches</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">Weight</label>*/
/*                                     <input type="text" class="form-control" name="customer[cWeight][lbs]">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-10 col-md-offset-1">*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">Tops &nbsp;</label>*/
/*                                     <select class="selectpicker" name="customer[cTopSize][tops]">*/
/*                                         <option selected="selected" value="">Select Tops</option>*/
/*                                         <option value="regular">Regular</option>*/
/*                                         <option value="patite">Patite</option>*/
/*                                         <option value="plus">Plus</option>                                            */
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4  col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">&nbsp;</label>*/
/*                                     <select class="selectpicker" name="customer[cTopSize][size]">*/
/*                                         <option selected="selected" value="">Select size</option>*/
/*                                         <option value="XXS">XXS</option>*/
/*                                         <option value="XS">XS</option>*/
/*                                         <option value="S">S</option>*/
/*                                         <option value="M">M</option>*/
/*                                         <option value="L">L</option>*/
/*                                         <option value="XL">XL</option>*/
/*                                         <option value="XLL">XLL</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">&nbsp;</label>*/
/*                                     <select class="selectpicker" name="customer[cTopSize][inches]">*/
/*                                         <option selected="selected" value="">Select inches</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-10 col-md-offset-1">*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">Dress</label>*/
/*                                     <select class="selectpicker" name="customer[cDressSize][type]">*/
/*                                         <option value="">Select Dress</option>*/
/*                                         <option value="Regular">Regular</option>*/
/*                                         <option value="Plus">Plus</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">&nbsp;</label>*/
/*                                     <select class="selectpicker" name="customer[cDressSize][size]">*/
/*                                         <option selected="selected" value="">Select size</option>*/
/*                                         <option value="XXS">XXS</option>*/
/*                                         <option value="XS">XS</option>*/
/*                                         <option value="S">S</option>*/
/*                                         <option value="M">M</option>*/
/*                                         <option value="L">L</option>*/
/*                                         <option value="XL">XL</option>*/
/*                                         <option value="XLL">XLL</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">&nbsp;</label>*/
/*                                     <select class="selectpicker" name="customer[cDressSize][inches]">*/
/*                                         <option selected="selected" value="">Select inches</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-10 col-md-offset-1">*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">Bra Size</label>*/
/*                                     <select class="selectpicker" name="customer[cBraSize][feet]">*/
/*                                         <option selected="selected" value="">Select Feet</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">&nbsp;</label>*/
/*                                     <select class="selectpicker" name="customer[cBraSize][inches]">*/
/*                                         <option selected="selected" value="">Select inches</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-10 col-md-offset-1">*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">Pants</label>*/
/*                                     <select class="selectpicker" name="customer[cPantSize][type]">*/
/*                                         <option selected="selected" value="">Select Pants</option>*/
/*                                         <option value="regular">Regular</option>*/
/*                                         <option value="patite">Patite</option>*/
/*                                         <option value="plus">Plus</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4  col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">&nbsp;</label>*/
/*                                     <select class="selectpicker" name="customer[cPantSize][size]">*/
/*                                         <option selected="selected" value="">Select size</option>*/
/*                                         <option value="XXS">XXS</option>*/
/*                                         <option value="XS">XS</option>*/
/*                                         <option value="S">S</option>*/
/*                                         <option value="M">M</option>*/
/*                                         <option value="L">L</option>*/
/*                                         <option value="XL">XL</option>*/
/*                                         <option value="XLL">XLL</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">&nbsp;</label>*/
/*                                     <select class="selectpicker" name="customer[cPantSize][inches]">*/
/*                                         <option selected="selected" value="">Select inches</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-10 col-md-offset-1">*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">Waist</label>*/
/*                                     <select class="selectpicker" name="customer[cWaistSize][inches]">*/
/*                                         <option selected="selected" value="">Select waist</option>*/
/*                                         <option value="3">3</option>*/
/*                                         <option value="4">4</option>*/
/*                                         <option value="5">5</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-10 col-md-offset-1">*/
/*                             <div class="col-md-4 col-sm-6 col-xs-12">*/
/*                                 <div class="form-group">*/
/*                                     <label class="light light-1">Shoes</label>*/
/*                                     <select class="selectpicker" name="customer[cShoesSize][inches]">*/
/*                                         <option selected="selected" value="">Select Shoes</option>*/
/*                                         <option value="3">3</option>*/
/*                                         <option value="4">4</option>*/
/*                                         <option value="5">5</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-10 col-md-offset-1">*/
/*                             <div class="col-md-12">*/
/*                                 <a class="btn btn-cool btn-md-sm btn-bottom pull-right" data-name="second-signupdata" data-toggle="tab" href="#body-shape">Next</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!---End of step1!-->*/
/*                     <!---step2!-->*/
/* */
/*                     <div id="body-shape" class="tab-pane fade">*/
/*                         <div class="subtitle">*/
/*                             <div>*/
/*                                 <span>What is Your Body Shape?</span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-2 col-sm-offset-1 margin-col-sm-top">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="shape1">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="shape1" name="customer[cBodyShape][]" value="Trapezoid"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                                 <h6 class="center-text-align">Trapezoid</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-2 margin-col-sm-top">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="shape2">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="shape2" name="customer[cBodyShape][]" value="Inverted Triangle"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                                 <h6 class="center-text-align">Inverted Triangel</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-2 margin-col-sm-top">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="shape3">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="shape3" name="customer[cBodyShape][]" value="Rectangle"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                                 <h6 class="center-text-align">Rectangle</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-2 margin-col-sm-top">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="shape4">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="shape4" name="customer[cBodyShape][]" value="Triangle">*/
/*                                 <div class="checkbox-checked"></div>*/
/*                                 <h6 class="center-text-align">Triangle</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-2 margin-col-sm-top">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="shape5">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="shape5" name="customer[cBodyShape][]" value="Oval"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                                 <h6 class="center-text-align">Oval</h6>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-10 col-sm-offset-1 margin-col-sm-top">*/
/*                                 <a class="btn btn-cool btn-md-sm btn-bottom pull-left" data-name="First-signupdata" data-toggle="tab" href="#fit">Previous</a>*/
/*                                 <a class="btn btn-cool btn-md-sm btn-bottom pull-right" data-name="second-signupdata" data-toggle="tab" href="#style">Next</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                     <!---End of step2!-->*/
/* */
/*                     <!---step3!-->*/
/*                     <div id="style" class="tab-pane">*/
/*                         <div class="subtitle">*/
/*                             <div>*/
/*                                 <span>What of there styles do you like?</span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-1 margin-col-sm-top seven-image-height">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="style1">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="style1" name="customer[cLikeStyles][]" value="Style1"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                             </div>*/
/*                             <div class="col-sm-1 margin-col-sm-top seven-image-height">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="style2">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="style2" name="customer[cLikeStyles][]" value="Style2"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                             </div>*/
/*                             <div class="col-sm-1 margin-col-sm-top seven-image-height">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="style3">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="style3" name="customer[cLikeStyles][]" value="Style3"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                             </div>*/
/*                             <div class="col-sm-1 margin-col-sm-top seven-image-height">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="style4">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="style4" name="customer[cLikeStyles][]" value="Style4"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                             </div>*/
/*                             <div class="col-sm-1 margin-col-sm-top seven-image-height">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="style5">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="style5" name="customer[cLikeStyles][]" value="Style5"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                             </div>*/
/*                             <div class="col-sm-1 margin-col-sm-top seven-image-height">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="style6">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="style6" name="customer[cLikeStyles][]" value="Style6"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                             </div>*/
/*                             <div class="col-sm-1 margin-col-sm-top seven-image-height">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="style7">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="style7" name="customer[cLikeStyles][]" value="Style7"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <h6 class="center-text-align">Pick all that fit your taste</h6>*/
/*                         </div>*/
/*                         <hr>*/
/*                         <div class="row">*/
/*                             <h6 class="center-text-align">What of these colors palettes you like?</h6>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-4 col-sm-offset-1 margin-col-sm-top">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="cool">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="cool" name="customer[cLikeColorPalettes][]" value="cool"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                                 <h4 class="center-text-align">cool palettes</h4>*/
/*                             </div>*/
/*                             <div class="col-sm-4 col-sm-offset-1 margin-col-sm-top">*/
/*                                 <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                     <div class="image-check">*/
/*                                         <div class="image"> */
/*                                             <label class="lab-pointer" for="warm">*/
/*                                                 <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <input type="checkbox" class="hidden" id="warm" name="customer[cLikeColorPalettes][]" value="warm"/>*/
/*                                 <div class="checkbox-checked"></div>*/
/*                                 <h4 class="center-text-align">warm palettes</h4>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-9 col-sm-offset-1  margin-col-sm-top">*/
/*                                 <a class="btn btn-cool btn-md-sm btn-bottom pull-left" data-name="second-signupdata" data-toggle="tab" href="#body-shape">Previous</a>*/
/*                                 <a class="btn btn-cool btn-md-sm btn-bottom pull-right" data-name="four-signupdata" data-toggle="tab" href="#budget">Next</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                     <!---End of step3!-->*/
/* */
/*                     <!---step4!-->*/
/*                     <div id="budget" class="tab-pane">*/
/*                         <div class="subtitle">*/
/*                             <div>*/
/*                                 <span>How much would you ideally spend on these categories?</span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-2 col-sm-offset-3 margin-col-sm-top">*/
/*                                 <h6> Dresses</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <div id="box2" class="panel-collapse in">*/
/*                                     <div class="panel-body">*/
/*                                         <div class="slider-range">*/
/*                                             <div class="min">*/
/*                                                 $<span class="value-lower">19</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Dresses][]" value="0" class="lvalue hidden"/>*/
/*                                             </div>*/
/*                                             <div class="max">*/
/*                                                 $<span class="value-upper">3000</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Dresses][]" value="0" class="uvalue hidden"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-2 col-sm-offset-3 margin-col-sm-top">*/
/*                                 <h6>Tops</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <div id="box3" class="panel-collapse in">*/
/*                                     <div class="panel-body">*/
/*                                         <div class="slider-range">*/
/*                                             <div class="min">*/
/*                                                 $<span class="value-lower">19</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Tops][]" value="0" class="lvalue hidden"/>*/
/*                                             </div>*/
/*                                             <div class="max">*/
/*                                                 $<span class="value-upper">3000</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Tops][]" value="0" class="uvalue hidden"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-2 col-sm-offset-3 margin-col-sm-top">*/
/*                                 <h6>Bottoms</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <div id="box2" class="panel-collapse in">*/
/*                                     <div class="panel-body">*/
/*                                         <div class="slider-range">*/
/*                                             <div class="min">*/
/*                                                 $<span class="value-lower">19</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Bottoms][]" value="0" class="lvalue hidden"/>*/
/*                                             </div>*/
/*                                             <div class="max">*/
/*                                                 $<span class="value-upper">3000</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Bottoms][]" value="0" class="uvalue hidden"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-2 col-sm-offset-3 margin-col-sm-top">*/
/*                                 <h6>Out layers</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <div id="box2" class="panel-collapse in">*/
/*                                     <div class="panel-body">*/
/*                                         <div class="slider-range">*/
/*                                             <div class="min">*/
/*                                                 $<span class="value-lower">19</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][outLayers][]" value="0" class="lvalue hidden"/>*/
/*                                             </div>*/
/*                                             <div class="max">*/
/*                                                 $<span class="value-upper">3000</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][outLayers][]" value="0" class="uvalue hidden"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-2 col-sm-offset-3 margin-col-sm-top">*/
/*                                 <h6>Shoes</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <div id="box2" class="panel-collapse in">*/
/*                                     <div class="panel-body">*/
/*                                         <div class="slider-range">*/
/*                                             <div class="min">*/
/*                                                 $<span class="value-lower">19</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Shoes][]" value="0" class="lvalue hidden"/>*/
/*                                             </div>*/
/*                                             <div class="max">*/
/*                                                 $<span class="value-upper">3000</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Shoes][]" value="0" class="uvalue hidden"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-2 col-sm-offset-3 margin-col-sm-top">*/
/*                                 <h6>Bags</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <div id="box2" class="panel-collapse in">*/
/*                                     <div class="panel-body">*/
/*                                         <div class="slider-range">*/
/*                                             <div class="min">*/
/*                                                 $<span class="value-lower">19</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Bags][]" value="0" class="lvalue hidden"/>*/
/*                                             </div>*/
/*                                             <div class="max">*/
/*                                                 $<span class="value-upper">3000</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Bags][]" value="0" class="uvalue hidden"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-2 col-sm-offset-3 margin-col-sm-top">*/
/*                                 <h6>Jewelry & Watches</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <div id="box2" class="panel-collapse in">*/
/*                                     <div class="panel-body">*/
/*                                         <div class="slider-range">*/
/*                                             <div class="min">*/
/*                                                 $<span class="value-lower">19</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][jaw][]" value="0" class="lvalue hidden"/>*/
/*                                             </div>*/
/*                                             <div class="max">*/
/*                                                 $<span class="value-upper">3000</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][jaw][]" value="0" class="uvalue hidden"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-2 col-sm-offset-3 margin-col-sm-top">*/
/*                                 <h6>Accessories</h6>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <div id="box2" class="panel-collapse in">*/
/*                                     <div class="panel-body">*/
/*                                         <div class="slider-range">*/
/*                                             <div class="min">*/
/*                                                 $<span class="value-lower">19</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Accessories][]" value="0" class="lvalue hidden"/>*/
/*                                             </div>*/
/*                                             <div class="max">Shirts*/
/*                                                 $<span class="value-upper">3000</span>*/
/*                                                 <input type="text" name="customer[cIdeallySpentForCategories][Accessories][]" value="0" class="uvalue hidden"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6 col-sm-offset-3  margin-col-sm-top">*/
/*                                 <a class="btn btn-cool btn-md-sm btn-bottom pull-left" data-name="third-signupdata" data-toggle="tab" href="#style">Previous</a>*/
/*                                 <a class="btn btn-cool btn-md-sm btn-bottom pull-right" data-name="fifth-signupdata" data-toggle="tab" href="#profile">Next</a>*/
/*                             </div> */
/*                         </div>*/
/*                     </div>*/
/*                     <!---End of step4!-->*/
/* */
/*                     <!---step5!-->*/
/*                     <div id="profile" class="tab-pane">*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-sm-4 col-sm-offset-2 right-side-border">*/
/*                                 <h2 class= "center-text-align">Almost Done!</h2>*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control" name="customer[cFirstName]" placeholder="FIRST NAME">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control" name="customer[cLastName]" placeholder="LAST NAME">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control" name="customer[cPhone]" placeholder="PHONE">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control" name="customer[cZip]" placeholder="ZIP CODE">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="text" class="form-control" name="customer[cEmail]" placeholder="EMAIL ADDRESS">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <input type="password" class="form-control" name="customer[cPassword]" placeholder="PASSWORD">*/
/*                                 </div>*/
/*                                 <input type="hidden" class="form-control" name="customer[cGender]" value="Female">*/
/*                                 <input type="submit" class="form-control btn btn-cool btn-md-sm btn-bottom" value="CREATE YOUR ACCOUNT">*/
/*                                 <p class="p-set-font">*/
/*                                     By Clicking Create Your Account, you agree to our <a href="#"><span class="a-popup-color">terms</span></a> and<a href="#"><span class="a-popup-color"> privacy policy.</span></a>*/
/*                                 </p>*/
/*                             </div>*/
/*                             <div class="col-sm-4">*/
/*                                 <h2 class= "center-text-align">...or Signup with</h2>*/
/*                                 <div class="text-center">*/
/*                                     <a class="sign-btn sign-btn-facebook" href="#"><span class="icon flaticon-facebook12"></span>Facebook</a>&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                                     <a class="sign-btn sign-btn-twitter" href="#"><span class="icon flaticon-social19"></span>Twitter</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!---End of step5!-->*/
/*                     <div class="divider divider-sm">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!--steps tab!-->*/
/*     </form>*/
/*     <!--Page Content-->*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script>*/
/*         $j(document).ready(function () {*/
/*             $j('.checkbox-checked').click(function () {*/
/*                 $j(this).toggleClass("highlight");*/
/*                 $j(this).prev('input[type=checkbox]').trigger('click');*/
/*                 if ($j(this).hasClass('highlight')) {*/
/*                     $j(this).parents('.col-sm-2,.col-sm-1,.col-sm-4').find('.rect').css('border', 'none');*/
/*                 } else {*/
/*                     $j(this).parents('.col-sm-2,.col-sm-1,.col-sm-4').find('.rect').css('border', '1px dotted #cacaca');*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
