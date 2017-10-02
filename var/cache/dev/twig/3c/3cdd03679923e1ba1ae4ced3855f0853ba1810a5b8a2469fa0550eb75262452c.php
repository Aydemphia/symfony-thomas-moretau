<?php

/* category.html.twig */
class __TwigTemplate_0eed157a7ab50c724a0d93475ac886a2cc2c516da615486dbb2d75551a9fb560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category.html.twig", 1);
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
        $__internal_d66fd07ce103414c5fb0718603be93c0787b070c09da89029c43d7c2be50d556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66fd07ce103414c5fb0718603be93c0787b070c09da89029c43d7c2be50d556->enter($__internal_d66fd07ce103414c5fb0718603be93c0787b070c09da89029c43d7c2be50d556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category.html.twig"));

        $__internal_0aaf9e4a7374d3618b0c1a38d2b6b7d074f0ff581d453f294a9ef7741a524aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aaf9e4a7374d3618b0c1a38d2b6b7d074f0ff581d453f294a9ef7741a524aa5->enter($__internal_0aaf9e4a7374d3618b0c1a38d2b6b7d074f0ff581d453f294a9ef7741a524aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d66fd07ce103414c5fb0718603be93c0787b070c09da89029c43d7c2be50d556->leave($__internal_d66fd07ce103414c5fb0718603be93c0787b070c09da89029c43d7c2be50d556_prof);

        
        $__internal_0aaf9e4a7374d3618b0c1a38d2b6b7d074f0ff581d453f294a9ef7741a524aa5->leave($__internal_0aaf9e4a7374d3618b0c1a38d2b6b7d074f0ff581d453f294a9ef7741a524aa5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2193c882c9f5f8ebeeda1c80bc908cec2faf7137e44461c7957c3eb8854bb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2193c882c9f5f8ebeeda1c80bc908cec2faf7137e44461c7957c3eb8854bb5a->enter($__internal_a2193c882c9f5f8ebeeda1c80bc908cec2faf7137e44461c7957c3eb8854bb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a820703a1e783f4757fd7f102d15a1dff11745c23bf97b4ea58ae3f10021e028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a820703a1e783f4757fd7f102d15a1dff11745c23bf97b4ea58ae3f10021e028->enter($__internal_a820703a1e783f4757fd7f102d15a1dff11745c23bf97b4ea58ae3f10021e028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <h1 class=\"categories_name\">Tous nos ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 4, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h1>

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 6, $this->getSourceContext()); })()), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "        <div class=\"product\">
            <div class=\"product__thumbnail\" style=\"background-image: url('/uploads/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "image", array()), "html", null, true);
            echo "')\"></div>
            <h1 class=\"product__name\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo " | <i class=\"product__price\">";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "price", array()) / 100), "html", null, true);
            echo "€</i></h1>
            <span class=\"product__description\">";
            // line 10
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "description", array());
            echo "</span><br/>
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array()))), "html", null, true);
            echo "\">Go to product page</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        
        $__internal_a820703a1e783f4757fd7f102d15a1dff11745c23bf97b4ea58ae3f10021e028->leave($__internal_a820703a1e783f4757fd7f102d15a1dff11745c23bf97b4ea58ae3f10021e028_prof);

        
        $__internal_a2193c882c9f5f8ebeeda1c80bc908cec2faf7137e44461c7957c3eb8854bb5a->leave($__internal_a2193c882c9f5f8ebeeda1c80bc908cec2faf7137e44461c7957c3eb8854bb5a_prof);

    }

    public function getTemplateName()
    {
        return "category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 14,  78 => 11,  74 => 10,  68 => 9,  64 => 8,  61 => 7,  57 => 6,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

    <h1 class=\"categories_name\">Tous nos {{ category.name }}</h1>

    {% for product in category.products %}
        <div class=\"product\">
            <div class=\"product__thumbnail\" style=\"background-image: url('/uploads/{{ product.image }}')\"></div>
            <h1 class=\"product__name\">{{ product.name }} | <i class=\"product__price\">{{ product.price / 100 }}€</i></h1>
            <span class=\"product__description\">{{ product.description|raw }}</span><br/>
            <a href=\"{{ path('single', { 'id' : product.id }) }}\">Go to product page</a>
        </div>
    {% endfor %}

{% endblock %}


", "category.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/templates/category.html.twig");
    }
}
