<?php

/* products.html.twig */
class __TwigTemplate_226bd0a1ce6d871bfc82cf2f8b88381c5a585f138156611f91693f57efa66345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "products.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_261ea7ef837ddc2f00e766f14ad541d697c2e4c7c0544ba6e555772d429b345c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261ea7ef837ddc2f00e766f14ad541d697c2e4c7c0544ba6e555772d429b345c->enter($__internal_261ea7ef837ddc2f00e766f14ad541d697c2e4c7c0544ba6e555772d429b345c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products.html.twig"));

        $__internal_2983124dc05283cc6bcd13daaf49e7f7c418314ea8874dec3e78e4bc5ce27a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2983124dc05283cc6bcd13daaf49e7f7c418314ea8874dec3e78e4bc5ce27a16->enter($__internal_2983124dc05283cc6bcd13daaf49e7f7c418314ea8874dec3e78e4bc5ce27a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261ea7ef837ddc2f00e766f14ad541d697c2e4c7c0544ba6e555772d429b345c->leave($__internal_261ea7ef837ddc2f00e766f14ad541d697c2e4c7c0544ba6e555772d429b345c_prof);

        
        $__internal_2983124dc05283cc6bcd13daaf49e7f7c418314ea8874dec3e78e4bc5ce27a16->leave($__internal_2983124dc05283cc6bcd13daaf49e7f7c418314ea8874dec3e78e4bc5ce27a16_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_116f982da28c3243230fb4859f23eecdb670260a3b9d74fb02a94a13d27eae96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116f982da28c3243230fb4859f23eecdb670260a3b9d74fb02a94a13d27eae96->enter($__internal_116f982da28c3243230fb4859f23eecdb670260a3b9d74fb02a94a13d27eae96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd5e9e296bf7cebd18882fe6caba462f6838153b62142ca9cc90e49677eda905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5e9e296bf7cebd18882fe6caba462f6838153b62142ca9cc90e49677eda905->enter($__internal_dd5e9e296bf7cebd18882fe6caba462f6838153b62142ca9cc90e49677eda905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <header>
        <h1>Our cats</h1>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form");
        echo "\" class=\"product__link\">Add a product</a>
    </header>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 9, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()), "html", null, true);
            echo "\">
            <div class=\"product\">
                <div class=\"product__thumbnail\" style=\"background-image: url('/uploads/";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "image", array()), "html", null, true);
            echo "')\"></div>
                <h1 class=\"product__name\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo " <br/><i class=\"product__price\">\$";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "price", array()) / 100), "html", null, true);
            echo "</i>
                </h1>
                <span class=\"product__description\">";
            // line 16
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "description", array());
            echo "</span><br/>
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()), "html", null, true);
            echo "\" class=\"product__link\">More details about this cat</a>
            </div>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        
        $__internal_dd5e9e296bf7cebd18882fe6caba462f6838153b62142ca9cc90e49677eda905->leave($__internal_dd5e9e296bf7cebd18882fe6caba462f6838153b62142ca9cc90e49677eda905_prof);

        
        $__internal_116f982da28c3243230fb4859f23eecdb670260a3b9d74fb02a94a13d27eae96->leave($__internal_116f982da28c3243230fb4859f23eecdb670260a3b9d74fb02a94a13d27eae96_prof);

    }

    public function getTemplateName()
    {
        return "products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  87 => 17,  83 => 16,  76 => 14,  72 => 13,  67 => 11,  64 => 10,  60 => 9,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

    <header>
        <h1>Our cats</h1>
        <a href=\"{{ path('form') }}\" class=\"product__link\">Add a product</a>
    </header>

    {% for product in products %}

        <a href=\"{{ product.id }}\">
            <div class=\"product\">
                <div class=\"product__thumbnail\" style=\"background-image: url('/uploads/{{ product.image }}')\"></div>
                <h1 class=\"product__name\">{{ product.name }} <br/><i class=\"product__price\">\${{ product.price / 100 }}</i>
                </h1>
                <span class=\"product__description\">{{ product.description|raw }}</span><br/>
                <a href=\"{{ product.id }}\" class=\"product__link\">More details about this cat</a>
            </div>
        </a>
    {% endfor %}

{% endblock %}
", "products.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/templates/products.html.twig");
    }
}
