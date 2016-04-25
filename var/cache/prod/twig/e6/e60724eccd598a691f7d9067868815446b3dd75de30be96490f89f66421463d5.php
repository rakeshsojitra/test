<?php

/* ClothstudioBundle:User:account.html.twig */
class __TwigTemplate_84587215b427f1d9faf41103e197e44967bfa73f056cc3b12e6a60900fb9fb9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "ClothstudioBundle:User:account.html.twig", 3);
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
        echo "My preferences";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"divider divider-lg\"> </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-3 col-xs-12\" >
                <section class=\"breadcrumbs prefer-tab\">

                    <ul class=\"nav nav-tab\">
                        <li class=\"active\"><a data-name=\"First-signupdata\" data-toggle=\"tab\" href=\"#fit\">Fit</a></li>
                        <li><a data-name=\"second-signupdata\" data-toggle=\"tab\" href=\"#body-shape\">Body Shape</a></li>
                        <li> <a data-name=\"third-signupdata\" data-toggle=\"tab\" href=\"#style\">Style</a></li>
                        <li> <a data-name=\"four-signupdata\" data-toggle=\"tab\" href=\"#budget\">Budget</a></li>
                    </ul>

                </section>
            </div>
            <div class=\"col-md-10 col-sm-9 col-xs-12\">
                <section>
                    <div class=\"tab-content\">
                        <!---step1!-->
                        <div id=\"fit\" class=\"tab-pane fade active in\">
                            <form class=\" \">
                                <div class=\"subtitle\">
                                    <div>
                                        <span>What is Your Size?</span>
                                    </div>
                                </div>
                                <div class=\"col-md-11\">
                                    <div class=\"col-md-3 col-md-offset-2 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">Height</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select Feet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3  col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">&nbsp;</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select inches</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">Weight</label>
                                            <input type=\"text\" class=\"form-control\" >
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-11\">
                                    <div class=\"col-md-3 col-md-offset-2  col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">Tops &nbsp;</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select Tops</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3  col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">&nbsp;</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select inches</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">&nbsp;</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select inches</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-11\">
                                    <div class=\"col-md-3 col-md-offset-2 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">Dress</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select Dress</option>
                                                <option selected=\"selected\" value=\"\">Regular</option>
                                                <option selected=\"selected\" value=\"\">Plus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3  col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">&nbsp;</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select size</option>
                                                <option selected=\"selected\" value=\"\">xxl</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">&nbsp;</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select inches</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-11\">
                                    <div class=\"col-md-3 col-md-offset-2 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">Bra Size</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select Feet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3  col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">&nbsp;</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select inches</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class=\"col-md-11\">
                                    <div class=\"col-md-3 col-md-offset-2 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">Pants</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select Pants</option>
                                                <option selected=\"selected\" value=\"\">Regular</option>
                                                <option selected=\"selected\" value=\"\">Plus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3  col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">&nbsp;</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select size</option>
                                                <option selected=\"selected\" value=\"\">xxl</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">&nbsp;</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select inches</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-11\">
                                    <div class=\"col-md-3 col-md-offset-2 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">Waist</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select waist</option>
                                                <option selected=\"selected\" value=\"\">3</option>
                                                <option selected=\"selected\" value=\"\">4</option>
                                                <option selected=\"selected\" value=\"\">5</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <div class=\"col-md-11\">
                                    <div class=\"col-md-3 col-md-offset-2 col-sm-6 col-xs-12\">
                                        <div class=\"form-group\">
                                            <label class=\"light light-1\">Shoes</label>
                                            <select class=\"selectpicker\" name=\"feet\">
                                                <option selected=\"selected\" value=\"\">Select Shoes</option>
                                                <option selected=\"selected\" value=\"\">3</option>
                                                <option selected=\"selected\" value=\"\">4</option>
                                                <option selected=\"selected\" value=\"\">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-11\">
                                    <div class=\"col-md-11 col-sm-12 col-xs-12\">
                                        <button type=\"submit\" class=\"btn btn-cool btn-md-sm btn-bottom pull-right\">Save</button>
                                    </div>
                                </div>
                            </form>
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
                                <div class=\"col-md-2 col-md-offset-1 col-sm-4 col-xs-12 margin-col-sm-top\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"shape1\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\"  id=\"shape1\" name=\"shape\" value=\"shape1\" />
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                                <div class=\"col-md-2 col-sm-4 col-xs-12 margin-col-sm-top\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"shape2\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\"  id=\"shape2\" name=\"shape\" value=\"shape2\" />
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                                <div class=\"col-md-2 col-sm-4 col-xs-12 margin-col-sm-top\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"shape3\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\"  id=\"shape3\" name=\"shape\" value=\"shape3\" />
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                                <div class=\"col-md-2 col-sm-4 col-xs-12 margin-col-sm-top\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"shape4\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"shape4\" name=\"shape\" value=\"shape4\" >
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                                <div class=\"col-md-2 col-sm-4 col-xs-12 margin-col-sm-top\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"shape5\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"shape5\" name=\"shape\" value=\"shape5\" />
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-10 col-sm-offset-1 margin-col-sm-top\">
                                    <button type=\"submit\" class=\"btn btn-cool btn-md-sm btn-bottom pull-right\">Save</button>
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
                                <div class=\"col-md-1 col-sm-12 col-xs-6  margin-col-sm-top seven-image-height\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"style1\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"style1\" name=\"shape\" value=\"style1\" />
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                                <div class=\"col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"style2\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"style2\" name=\"shape\" value=\"style2\" />
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                                <div class=\"col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"style3\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"style3\" name=\"shape\" value=\"style3\" />
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                                <div class=\"col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"style4\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"style4\" name=\"shape\" value=\"style4\" />
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                                <div class=\"col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"style5\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"style5\" name=\"shape\" value=\"style5\" />
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                                <div class=\"col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"style6\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"style6\" name=\"shape\" value=\"style6\" />
                                    <div class=\"checkbox-checked\"></div>
                                </div>
                                <div class=\"col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"style7\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"style7\" name=\"shape\" value=\"style7\" />
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
                            <div class=\"col-md-11 col-md-offset-2\">
                                <div class=\"col-md-4 col-sm-6 margin-col-sm-top\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"cool\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"cool\" name=\"shape\" value=\"cool\" />
                                    <div class=\"checkbox-checked\"></div>
                                    <h4 class=\"center-text-align\">cool palettes</h4>
                                </div>
                                <div class=\"col-md-4 col-sm-6 col-md-offset-1 margin-col-sm-top\">
                                    <div  class=\"banner-square animate fadeInDown animated  rect\">
                                        <div class=\"image-check\">
                                            <div class=\"image\"> 
                                                <label class=\"lab-pointer\" for=\"warm\">
                                                    <img class=\"animate-scale\" alt=\"\" src=\"images/signupwoman-button.jpg\">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type=\"checkbox\" class=\"hidden\" id=\"warm\" name=\"shape\" value=\"warm\" />
                                    <div class=\"checkbox-checked\"></div>
                                    <h4 class=\"center-text-align\">warm palettes</h4>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-10 col-sm-11 margin-col-sm-top\">
                                    <button type=\"submit\" class=\"btn btn-cool btn-md-sm btn-bottom margin-col-sm-top pull-right\">Save</button>
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
                                <div class=\"col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top\">
                                    <h6> Dresses</h6>
                                </div>
                                <div class=\"col-md-4 col-sm-9\">
                                    <div id=\"box2\" class=\"panel-collapse in\">
                                        <div class=\"panel-body\">
                                            <div class=\"slider-range\">
                                                <div class=\"min\">
                                                    \$<span class=\"value-lower\">0</span>
                                                </div>
                                                <div class=\"max\">
                                                    \$<span class=\"value-upper\">400</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top\">
                                    <h6>Tops</h6>
                                </div>
                                <div class=\"col-md-4 col-sm-9\">
                                    <div id=\"box3\" class=\"panel-collapse in\">
                                        <div class=\"panel-body\">
                                            <div class=\"slider-range\">
                                                <div class=\"min\">
                                                    \$<span class=\"value-lower\">19</span>
                                                </div>
                                                <div class=\"max\">
                                                    \$<span class=\"value-upper\">3000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top\">
                                    <h6>Bottoms</h6>
                                </div>
                                <div class=\"col-md-4 col-sm-9\">
                                    <div id=\"box2\" class=\"panel-collapse in\">
                                        <div class=\"panel-body\">
                                            <div class=\"slider-range\">
                                                <div class=\"min\">
                                                    \$<span class=\"value-lower\">19</span>
                                                </div>
                                                <div class=\"max\">
                                                    \$<span class=\"value-upper\">3000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top\">
                                    <h6>Out layers</h6>
                                </div>
                                <div class=\"col-md-4 col-sm-9\">
                                    <div id=\"box2\" class=\"panel-collapse in\">
                                        <div class=\"panel-body\">
                                            <div class=\"slider-range\">
                                                <div class=\"min\">
                                                    \$<span class=\"value-lower\">19</span>
                                                </div>
                                                <div class=\"max\">
                                                    \$<span class=\"value-upper\">3000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top\">
                                    <h6>Shoes</h6>
                                </div>
                                <div class=\"col-md-4 col-sm-9\">
                                    <div id=\"box2\" class=\"panel-collapse in\">
                                        <div class=\"panel-body\">
                                            <div class=\"slider-range\">
                                                <div class=\"min\">
                                                    \$<span class=\"value-lower\">19</span>
                                                </div>
                                                <div class=\"max\">
                                                    \$<span class=\"value-upper\">3000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top\">
                                    <h6>Bags</h6>
                                </div>
                                <div class=\"col-md-4 col-sm-9\">
                                    <div id=\"box2\" class=\"panel-collapse in\">
                                        <div class=\"panel-body\">
                                            <div class=\"slider-range\">
                                                <div class=\"min\">
                                                    \$<span class=\"value-lower\">19</span>
                                                </div>
                                                <div class=\"max\">
                                                    \$<span class=\"value-upper\">3000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top\">
                                    <h6>Jewely</h6>
                                </div>
                                <div class=\"col-md-4 col-sm-9\">
                                    <div id=\"box2\" class=\"panel-collapse in\">
                                        <div class=\"panel-body\">
                                            <div class=\"slider-range\">
                                                <div class=\"min\">
                                                    \$<span class=\"value-lower\">19</span>
                                                </div>
                                                <div class=\"max\">
                                                    \$<span class=\"value-upper\">3000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top\">
                                    <h6>Accessories</h6>
                                </div>
                                <div class=\"col-md-4 col-sm-9\">
                                    <div id=\"box2\" class=\"panel-collapse in\">
                                        <div class=\"panel-body\">
                                            <div class=\"slider-range\">
                                                <div class=\"min\">
                                                    \$<span class=\"value-lower\">19</span>
                                                </div>
                                                <div class=\"max\">
                                                    \$<span class=\"value-upper\">3000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-9 col-sm-12 margin-col-sm-top\">
                                    <button type=\"submit\" class=\"btn btn-cool btn-md-sm btn-bottom margin-col-sm-top pull-right\">Save</button>
                                </div> 
                            </div>
                        </div>
                        <!---End of step4!-->

                        <!---step5!-->

                        <!---End of step5!-->
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
    <script>
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
        return "ClothstudioBundle:User:account.html.twig";
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
/* {% block title %}My preferences{% endblock %}*/
/* {% block content %}*/
/*     <div class="divider divider-lg"> </div>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-2 col-sm-3 col-xs-12" >*/
/*                 <section class="breadcrumbs prefer-tab">*/
/* */
/*                     <ul class="nav nav-tab">*/
/*                         <li class="active"><a data-name="First-signupdata" data-toggle="tab" href="#fit">Fit</a></li>*/
/*                         <li><a data-name="second-signupdata" data-toggle="tab" href="#body-shape">Body Shape</a></li>*/
/*                         <li> <a data-name="third-signupdata" data-toggle="tab" href="#style">Style</a></li>*/
/*                         <li> <a data-name="four-signupdata" data-toggle="tab" href="#budget">Budget</a></li>*/
/*                     </ul>*/
/* */
/*                 </section>*/
/*             </div>*/
/*             <div class="col-md-10 col-sm-9 col-xs-12">*/
/*                 <section>*/
/*                     <div class="tab-content">*/
/*                         <!---step1!-->*/
/*                         <div id="fit" class="tab-pane fade active in">*/
/*                             <form class=" ">*/
/*                                 <div class="subtitle">*/
/*                                     <div>*/
/*                                         <span>What is Your Size?</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-11">*/
/*                                     <div class="col-md-3 col-md-offset-2 col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">Height</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select Feet</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3  col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">&nbsp;</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select inches</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3 col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">Weight</label>*/
/*                                             <input type="text" class="form-control" >*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-11">*/
/*                                     <div class="col-md-3 col-md-offset-2  col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">Tops &nbsp;</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select Tops</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3  col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">&nbsp;</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select inches</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3 col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">&nbsp;</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select inches</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-11">*/
/*                                     <div class="col-md-3 col-md-offset-2 col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">Dress</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select Dress</option>*/
/*                                                 <option selected="selected" value="">Regular</option>*/
/*                                                 <option selected="selected" value="">Plus</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3  col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">&nbsp;</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select size</option>*/
/*                                                 <option selected="selected" value="">xxl</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3 col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">&nbsp;</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select inches</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-11">*/
/*                                     <div class="col-md-3 col-md-offset-2 col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">Bra Size</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select Feet</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3  col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">&nbsp;</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select inches</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <div class="col-md-11">*/
/*                                     <div class="col-md-3 col-md-offset-2 col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">Pants</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select Pants</option>*/
/*                                                 <option selected="selected" value="">Regular</option>*/
/*                                                 <option selected="selected" value="">Plus</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3  col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">&nbsp;</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select size</option>*/
/*                                                 <option selected="selected" value="">xxl</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-md-3 col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">&nbsp;</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select inches</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-11">*/
/*                                     <div class="col-md-3 col-md-offset-2 col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">Waist</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select waist</option>*/
/*                                                 <option selected="selected" value="">3</option>*/
/*                                                 <option selected="selected" value="">4</option>*/
/*                                                 <option selected="selected" value="">5</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/* */
/*                                 </div>*/
/*                                 <div class="col-md-11">*/
/*                                     <div class="col-md-3 col-md-offset-2 col-sm-6 col-xs-12">*/
/*                                         <div class="form-group">*/
/*                                             <label class="light light-1">Shoes</label>*/
/*                                             <select class="selectpicker" name="feet">*/
/*                                                 <option selected="selected" value="">Select Shoes</option>*/
/*                                                 <option selected="selected" value="">3</option>*/
/*                                                 <option selected="selected" value="">4</option>*/
/*                                                 <option selected="selected" value="">5</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-11">*/
/*                                     <div class="col-md-11 col-sm-12 col-xs-12">*/
/*                                         <button type="submit" class="btn btn-cool btn-md-sm btn-bottom pull-right">Save</button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                         <!---End of step1!-->*/
/*                         <!---step2!-->*/
/* */
/*                         <div id="body-shape" class="tab-pane fade">*/
/*                             <div class="subtitle">*/
/*                                 <div>*/
/*                                     <span>What is Your Body Shape?</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-2 col-md-offset-1 col-sm-4 col-xs-12 margin-col-sm-top">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="shape1">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden"  id="shape1" name="shape" value="shape1" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                                 <div class="col-md-2 col-sm-4 col-xs-12 margin-col-sm-top">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="shape2">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden"  id="shape2" name="shape" value="shape2" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                                 <div class="col-md-2 col-sm-4 col-xs-12 margin-col-sm-top">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="shape3">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden"  id="shape3" name="shape" value="shape3" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                                 <div class="col-md-2 col-sm-4 col-xs-12 margin-col-sm-top">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="shape4">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="shape4" name="shape" value="shape4" >*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                                 <div class="col-md-2 col-sm-4 col-xs-12 margin-col-sm-top">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="shape5">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="shape5" name="shape" value="shape5" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-10 col-sm-offset-1 margin-col-sm-top">*/
/*                                     <button type="submit" class="btn btn-cool btn-md-sm btn-bottom pull-right">Save</button>*/
/*                                 </div> */
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <!---End of step2!-->*/
/* */
/*                         <!---step3!-->*/
/*                         <div id="style" class="tab-pane">*/
/*                             <div class="subtitle">*/
/*                                 <div>*/
/*                                     <span>What of there styles do you like?</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-1 col-sm-12 col-xs-6  margin-col-sm-top seven-image-height">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="style1">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="style1" name="shape" value="style1" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                                 <div class="col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="style2">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="style2" name="shape" value="style2" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                                 <div class="col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="style3">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="style3" name="shape" value="style3" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                                 <div class="col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="style4">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="style4" name="shape" value="style4" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                                 <div class="col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="style5">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="style5" name="shape" value="style5" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                                 <div class="col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="style6">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="style6" name="shape" value="style6" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                                 <div class="col-md-1 col-sm-12 col-xs-6 margin-col-sm-top seven-image-height">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="style7">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="style7" name="shape" value="style7" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <h6 class="center-text-align">Pick all that fit your taste</h6>*/
/*                             </div>*/
/*                             <hr>*/
/*                             <div class="row">*/
/*                                 <h6 class="center-text-align">What of these colors palettes you like?</h6>*/
/*                             </div>*/
/*                             <div class="col-md-11 col-md-offset-2">*/
/*                                 <div class="col-md-4 col-sm-6 margin-col-sm-top">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="cool">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="cool" name="shape" value="cool" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                     <h4 class="center-text-align">cool palettes</h4>*/
/*                                 </div>*/
/*                                 <div class="col-md-4 col-sm-6 col-md-offset-1 margin-col-sm-top">*/
/*                                     <div  class="banner-square animate fadeInDown animated  rect">*/
/*                                         <div class="image-check">*/
/*                                             <div class="image"> */
/*                                                 <label class="lab-pointer" for="warm">*/
/*                                                     <img class="animate-scale" alt="" src="images/signupwoman-button.jpg">*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <input type="checkbox" class="hidden" id="warm" name="shape" value="warm" />*/
/*                                     <div class="checkbox-checked"></div>*/
/*                                     <h4 class="center-text-align">warm palettes</h4>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-10 col-sm-11 margin-col-sm-top">*/
/*                                     <button type="submit" class="btn btn-cool btn-md-sm btn-bottom margin-col-sm-top pull-right">Save</button>*/
/*                                 </div> */
/*                             </div>*/
/*                         </div>*/
/*                         <!---End of step3!-->*/
/* */
/*                         <!---step4!-->*/
/*                         <div id="budget" class="tab-pane">*/
/*                             <div class="subtitle">*/
/*                                 <div>*/
/*                                     <span>How much would you ideally spend on these categories?</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top">*/
/*                                     <h6> Dresses</h6>*/
/*                                 </div>*/
/*                                 <div class="col-md-4 col-sm-9">*/
/*                                     <div id="box2" class="panel-collapse in">*/
/*                                         <div class="panel-body">*/
/*                                             <div class="slider-range">*/
/*                                                 <div class="min">*/
/*                                                     $<span class="value-lower">0</span>*/
/*                                                 </div>*/
/*                                                 <div class="max">*/
/*                                                     $<span class="value-upper">400</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top">*/
/*                                     <h6>Tops</h6>*/
/*                                 </div>*/
/*                                 <div class="col-md-4 col-sm-9">*/
/*                                     <div id="box3" class="panel-collapse in">*/
/*                                         <div class="panel-body">*/
/*                                             <div class="slider-range">*/
/*                                                 <div class="min">*/
/*                                                     $<span class="value-lower">19</span>*/
/*                                                 </div>*/
/*                                                 <div class="max">*/
/*                                                     $<span class="value-upper">3000</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top">*/
/*                                     <h6>Bottoms</h6>*/
/*                                 </div>*/
/*                                 <div class="col-md-4 col-sm-9">*/
/*                                     <div id="box2" class="panel-collapse in">*/
/*                                         <div class="panel-body">*/
/*                                             <div class="slider-range">*/
/*                                                 <div class="min">*/
/*                                                     $<span class="value-lower">19</span>*/
/*                                                 </div>*/
/*                                                 <div class="max">*/
/*                                                     $<span class="value-upper">3000</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top">*/
/*                                     <h6>Out layers</h6>*/
/*                                 </div>*/
/*                                 <div class="col-md-4 col-sm-9">*/
/*                                     <div id="box2" class="panel-collapse in">*/
/*                                         <div class="panel-body">*/
/*                                             <div class="slider-range">*/
/*                                                 <div class="min">*/
/*                                                     $<span class="value-lower">19</span>*/
/*                                                 </div>*/
/*                                                 <div class="max">*/
/*                                                     $<span class="value-upper">3000</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top">*/
/*                                     <h6>Shoes</h6>*/
/*                                 </div>*/
/*                                 <div class="col-md-4 col-sm-9">*/
/*                                     <div id="box2" class="panel-collapse in">*/
/*                                         <div class="panel-body">*/
/*                                             <div class="slider-range">*/
/*                                                 <div class="min">*/
/*                                                     $<span class="value-lower">19</span>*/
/*                                                 </div>*/
/*                                                 <div class="max">*/
/*                                                     $<span class="value-upper">3000</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top">*/
/*                                     <h6>Bags</h6>*/
/*                                 </div>*/
/*                                 <div class="col-md-4 col-sm-9">*/
/*                                     <div id="box2" class="panel-collapse in">*/
/*                                         <div class="panel-body">*/
/*                                             <div class="slider-range">*/
/*                                                 <div class="min">*/
/*                                                     $<span class="value-lower">19</span>*/
/*                                                 </div>*/
/*                                                 <div class="max">*/
/*                                                     $<span class="value-upper">3000</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top">*/
/*                                     <h6>Jewely</h6>*/
/*                                 </div>*/
/*                                 <div class="col-md-4 col-sm-9">*/
/*                                     <div id="box2" class="panel-collapse in">*/
/*                                         <div class="panel-body">*/
/*                                             <div class="slider-range">*/
/*                                                 <div class="min">*/
/*                                                     $<span class="value-lower">19</span>*/
/*                                                 </div>*/
/*                                                 <div class="max">*/
/*                                                     $<span class="value-upper">3000</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-3 col-md-2 col-md-offset-3 margin-col-sm-top">*/
/*                                     <h6>Accessories</h6>*/
/*                                 </div>*/
/*                                 <div class="col-md-4 col-sm-9">*/
/*                                     <div id="box2" class="panel-collapse in">*/
/*                                         <div class="panel-body">*/
/*                                             <div class="slider-range">*/
/*                                                 <div class="min">*/
/*                                                     $<span class="value-lower">19</span>*/
/*                                                 </div>*/
/*                                                 <div class="max">*/
/*                                                     $<span class="value-upper">3000</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-9 col-sm-12 margin-col-sm-top">*/
/*                                     <button type="submit" class="btn btn-cool btn-md-sm btn-bottom margin-col-sm-top pull-right">Save</button>*/
/*                                 </div> */
/*                             </div>*/
/*                         </div>*/
/*                         <!---End of step4!-->*/
/* */
/*                         <!---step5!-->*/
/* */
/*                         <!---End of step5!-->*/
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
