<?php

/* categories.html.twig */
class __TwigTemplate_7a88e29cdf914792ec4d29b8968605859941878179add388bbd697817d5f84a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categories.html.twig", 1);
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
        $__internal_f556fd03a535caeee2494d30e40297c3eb37aa4c962ff620ca183b41fd7b2c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f556fd03a535caeee2494d30e40297c3eb37aa4c962ff620ca183b41fd7b2c5f->enter($__internal_f556fd03a535caeee2494d30e40297c3eb37aa4c962ff620ca183b41fd7b2c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categories.html.twig"));

        $__internal_cb20bc7cfe45284a84d335e38fdf0189a3dcdfb7c36878ae2c0d934f079705eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb20bc7cfe45284a84d335e38fdf0189a3dcdfb7c36878ae2c0d934f079705eb->enter($__internal_cb20bc7cfe45284a84d335e38fdf0189a3dcdfb7c36878ae2c0d934f079705eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f556fd03a535caeee2494d30e40297c3eb37aa4c962ff620ca183b41fd7b2c5f->leave($__internal_f556fd03a535caeee2494d30e40297c3eb37aa4c962ff620ca183b41fd7b2c5f_prof);

        
        $__internal_cb20bc7cfe45284a84d335e38fdf0189a3dcdfb7c36878ae2c0d934f079705eb->leave($__internal_cb20bc7cfe45284a84d335e38fdf0189a3dcdfb7c36878ae2c0d934f079705eb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd4516c72e62bdec2bdabf72074cb9220020ffd222023dd9e7d229c354112686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4516c72e62bdec2bdabf72074cb9220020ffd222023dd9e7d229c354112686->enter($__internal_cd4516c72e62bdec2bdabf72074cb9220020ffd222023dd9e7d229c354112686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5dace5290d0de4c7e3d6773990e184b70e600ebf3e7b1b49868aa918e78316eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dace5290d0de4c7e3d6773990e184b70e600ebf3e7b1b49868aa918e78316eb->enter($__internal_5dace5290d0de4c7e3d6773990e184b70e600ebf3e7b1b49868aa918e78316eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <header>
        <h1>Our cat categories :</h1>
    </header>

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "        <div class=\"product\">
            <h2 class=\"product__name\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</h2>
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "\" class=\"product__link\">See all products</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        
        $__internal_5dace5290d0de4c7e3d6773990e184b70e600ebf3e7b1b49868aa918e78316eb->leave($__internal_5dace5290d0de4c7e3d6773990e184b70e600ebf3e7b1b49868aa918e78316eb_prof);

        
        $__internal_cd4516c72e62bdec2bdabf72074cb9220020ffd222023dd9e7d229c354112686->leave($__internal_cd4516c72e62bdec2bdabf72074cb9220020ffd222023dd9e7d229c354112686_prof);

    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  67 => 11,  63 => 10,  60 => 9,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

    <header>
        <h1>Our cat categories :</h1>
    </header>

        {% for category in categories %}
        <div class=\"product\">
            <h2 class=\"product__name\">{{ category.name }}</h2>
            <a href=\"{{ category.id }}\" class=\"product__link\">See all products</a>
        </div>
    {% endfor %}

{% endblock %}
", "categories.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/templates/categories.html.twig");
    }
}
