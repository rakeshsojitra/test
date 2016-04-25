<?php

/* ClothstudioBundle:Form:bootstrap_3_cool.html.twig */
class __TwigTemplate_51c9abcf02747727ae93a3452a8b34284eb00a040dfc2b89fc185e75fc9f0668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "ClothstudioBundle:Form:bootstrap_3_cool.html.twig", 1);
        $this->blocks = array(
            'form_help' => array($this, 'block_form_help'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_help($context, array $blocks = array())
    {
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 5
            echo "            ";
            if (($context["attrname"] == "data-help")) {
                // line 6
                echo "                <span class=\"help-block\">";
                echo $context["attrvalue"];
                echo "</span>
            ";
            }
            // line 8
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 11
    public function block_form_errors($context, array $blocks = array())
    {
        // line 12
        $this->displayParentBlock("form_errors", $context, $blocks);
        // line 13
        $this->displayBlock("form_help", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "ClothstudioBundle:Form:bootstrap_3_cool.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  56 => 12,  53 => 11,  45 => 8,  39 => 6,  36 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/*     {% extends 'bootstrap_3_horizontal_layout.html.twig' %}*/
/*      */
/*     {% block form_help -%}*/
/*         {% for attrname, attrvalue in attr %}*/
/*             {% if attrname == 'data-help' %}*/
/*                 <span class="help-block">{{ attrvalue|raw }}</span>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {%- endblock form_help %}*/
/*      */
/*     {% block form_errors -%}*/
/*         {{ parent() }}*/
/*         {{- block('form_help') -}}*/
/*     {%- endblock form_errors %}*/
