<?php

/* /var/www/html/themes/winelivery/partials/botones.htm */
class __TwigTemplate_c1f0687d9f3d928d9240699960283d3885203fb043c87548f218f8968243ac9c extends Twig_Template
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
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            // line 2
            echo "<a href=\"javascript:;\" data-toggle=\"tooltip\" ";
            if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "stock", array()) > 0)) {
                echo " onClick=\"addToWishlist('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id", array()), "html", null, true);
                echo "');\" ";
            }
            echo " title=\"";
            if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "stock", array()) < 1)) {
                echo "No Disponible ";
            } else {
                echo " Agregar a la lista de deseos ";
            }
            echo " \" class=\"wishlist\">
    <i style=\"";
            // line 3
            if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "stock", array()) < 1)) {
                echo " color:#ccc; ";
            } else {
                echo " color:#fff; ";
            }
            echo " padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i>
</a>
<a href=\"javascript:;\" data-toggle=\"tooltip\" ";
            // line 5
            if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "stock", array()) > 0)) {
                echo " onClick=\"addToCart('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id", array()), "html", null, true);
                echo "'); ";
                if ((twig_test_empty((isset($context["cart"]) ? $context["cart"] : null)) && ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "carrito"))) {
                    echo "setTimeout(function(){ location.reload(); }, 1000); ";
                }
                echo "\" ";
            }
            echo " title=\"";
            if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "stock", array()) < 1)) {
                echo "No Disponible ";
            } else {
                echo " Agregar al carrito ";
            }
            echo "\">
    <i style=\"";
            // line 6
            if (($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "stock", array()) < 1)) {
                echo " color:#ccc; ";
            } else {
                echo " color:#fff; ";
            }
            echo " font-size:18px\" class=\"fa fa-shopping-cart\"></i>
</a>
";
        } else {
            // line 9
            echo "<a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
<a href=\"";
            // line 10
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/partials/botones.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  73 => 9,  63 => 6,  45 => 5,  36 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if loggedIn %}
<a href=\"javascript:;\" data-toggle=\"tooltip\" {% if p.stock > 0 %} onClick=\"addToWishlist('{{p.id}}');\" {% endif %} title=\"{% if p.stock < 1 %}No Disponible {% else %} Agregar a la lista de deseos {% endif %} \" class=\"wishlist\">
    <i style=\"{% if p.stock < 1 %} color:#ccc; {% else %} color:#fff; {%endif%} padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i>
</a>
<a href=\"javascript:;\" data-toggle=\"tooltip\" {% if p.stock > 0 %} onClick=\"addToCart('{{p.id}}'); {% if cart is empty and this.page.id == \"carrito\" %}setTimeout(function(){ location.reload(); }, 1000); {% endif %}\" {% endif %} title=\"{% if p.stock < 1 %}No Disponible {% else %} Agregar al carrito {% endif %}\">
    <i style=\"{% if p.stock < 1 %} color:#ccc; {% else %} color:#fff; {%endif%} font-size:18px\" class=\"fa fa-shopping-cart\"></i>
</a>
{% else %}
<a href=\"{{\"login\"|page}}\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
<a href=\"{{\"login\"|page}}\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
{% endif %}", "/var/www/html/themes/winelivery/partials/botones.htm", "");
    }
}
