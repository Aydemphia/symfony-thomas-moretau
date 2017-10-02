<?php

/* home.html.twig */
class __TwigTemplate_8b1ed61b930d9041ef2325df6c087987dc2ddb978fc93156863f410e097c2009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        $__internal_6eae8a9f5d55a654072f8daa784598b6ea1dc341d561c0e26c5b09f06722131e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eae8a9f5d55a654072f8daa784598b6ea1dc341d561c0e26c5b09f06722131e->enter($__internal_6eae8a9f5d55a654072f8daa784598b6ea1dc341d561c0e26c5b09f06722131e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_7265532d35464e8a594c0631574e646e2e88029d013b85e09dce43c8bf311223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7265532d35464e8a594c0631574e646e2e88029d013b85e09dce43c8bf311223->enter($__internal_7265532d35464e8a594c0631574e646e2e88029d013b85e09dce43c8bf311223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eae8a9f5d55a654072f8daa784598b6ea1dc341d561c0e26c5b09f06722131e->leave($__internal_6eae8a9f5d55a654072f8daa784598b6ea1dc341d561c0e26c5b09f06722131e_prof);

        
        $__internal_7265532d35464e8a594c0631574e646e2e88029d013b85e09dce43c8bf311223->leave($__internal_7265532d35464e8a594c0631574e646e2e88029d013b85e09dce43c8bf311223_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_df08bbd78ce4ac600d16758a8388082f1467292653dfd0cbca22e3abf9cfa27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df08bbd78ce4ac600d16758a8388082f1467292653dfd0cbca22e3abf9cfa27c->enter($__internal_df08bbd78ce4ac600d16758a8388082f1467292653dfd0cbca22e3abf9cfa27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2def3bfb1cfd50949817c14a4cf86435f3269f0a03570d452b5c0ca31d423d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2def3bfb1cfd50949817c14a4cf86435f3269f0a03570d452b5c0ca31d423d18->enter($__internal_2def3bfb1cfd50949817c14a4cf86435f3269f0a03570d452b5c0ca31d423d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div>

        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productsList");
        echo "\" class=\"product__link\">Go to product list</a><br>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categories");
        echo "\" class=\"product__link\">Go to categories list</a>

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "
            ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo "

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    </div>
";
        
        $__internal_2def3bfb1cfd50949817c14a4cf86435f3269f0a03570d452b5c0ca31d423d18->leave($__internal_2def3bfb1cfd50949817c14a4cf86435f3269f0a03570d452b5c0ca31d423d18_prof);

        
        $__internal_df08bbd78ce4ac600d16758a8388082f1467292653dfd0cbca22e3abf9cfa27c->leave($__internal_df08bbd78ce4ac600d16758a8388082f1467292653dfd0cbca22e3abf9cfa27c_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  69 => 10,  66 => 9,  62 => 8,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div>

        <a href=\"{{ path('productsList') }}\" class=\"product__link\">Go to product list</a><br>
        <a href=\"{{ path('categories') }}\" class=\"product__link\">Go to categories list</a>

        {% for product in products %}

            {{ product.name }}

        {% endfor %}

    </div>
{% endblock %}", "home.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/templates/home.html.twig");
    }
}
