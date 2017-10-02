<?php

/* single.html.twig */
class __TwigTemplate_b94927093d50cec33995b877389d7ac471abeaf4e5658de4ab318405e976cf18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "single.html.twig", 1);
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
        $__internal_17673a50c098eaf35f165d4a056d6c860758dcc0809f0a07a9f3bd058a5e7863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17673a50c098eaf35f165d4a056d6c860758dcc0809f0a07a9f3bd058a5e7863->enter($__internal_17673a50c098eaf35f165d4a056d6c860758dcc0809f0a07a9f3bd058a5e7863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "single.html.twig"));

        $__internal_9af9be2938b4d22534b5881c60fa2146bbcc959b5a6b9275fa47467b73095176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af9be2938b4d22534b5881c60fa2146bbcc959b5a6b9275fa47467b73095176->enter($__internal_9af9be2938b4d22534b5881c60fa2146bbcc959b5a6b9275fa47467b73095176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17673a50c098eaf35f165d4a056d6c860758dcc0809f0a07a9f3bd058a5e7863->leave($__internal_17673a50c098eaf35f165d4a056d6c860758dcc0809f0a07a9f3bd058a5e7863_prof);

        
        $__internal_9af9be2938b4d22534b5881c60fa2146bbcc959b5a6b9275fa47467b73095176->leave($__internal_9af9be2938b4d22534b5881c60fa2146bbcc959b5a6b9275fa47467b73095176_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4121b5d0234c43abf5d281f270041eee400e62fe40517b6a598aa4da8e9d0e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4121b5d0234c43abf5d281f270041eee400e62fe40517b6a598aa4da8e9d0e89->enter($__internal_4121b5d0234c43abf5d281f270041eee400e62fe40517b6a598aa4da8e9d0e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56b988354bbc92800a64126ac2955526862588c55cab2805ae955fb95aa0171d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b988354bbc92800a64126ac2955526862588c55cab2805ae955fb95aa0171d->enter($__internal_56b988354bbc92800a64126ac2955526862588c55cab2805ae955fb95aa0171d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <p class=\"center\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productsList");
        echo "\" class=\"product__link\">Go back to cat list</a>
    </p>

    <div class=\"product single\">

        <div class=\"product__thumbnail\" style=\"background-image: url('/uploads/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 10, $this->getSourceContext()); })()), "image", array()), "html", null, true);
        echo "')\"></div>
        <h1 class=\"product__name\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 11, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo " | <i class=\"product__price\">";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 11, $this->getSourceContext()); })()), "price", array()) / 100), "html", null, true);
        echo "€</i></h1>
        <span class=\"product__description\">";
        // line 12
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->getSourceContext()); })()), "description", array());
        echo "</span><br/>

    </div>

    <div class=\"product__comments\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_end');
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "            <ul>
                <li>Author : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "html", null, true);
            echo "</li>
                <p>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "commentText", array()), "html", null, true);
            echo "</p>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    </div>
";
        
        $__internal_56b988354bbc92800a64126ac2955526862588c55cab2805ae955fb95aa0171d->leave($__internal_56b988354bbc92800a64126ac2955526862588c55cab2805ae955fb95aa0171d_prof);

        
        $__internal_4121b5d0234c43abf5d281f270041eee400e62fe40517b6a598aa4da8e9d0e89->leave($__internal_4121b5d0234c43abf5d281f270041eee400e62fe40517b6a598aa4da8e9d0e89_prof);

    }

    public function getTemplateName()
    {
        return "single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 26,  102 => 23,  98 => 22,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  71 => 12,  65 => 11,  61 => 10,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

    <p class=\"center\">
        <a href=\"{{ path('productsList') }}\" class=\"product__link\">Go back to cat list</a>
    </p>

    <div class=\"product single\">

        <div class=\"product__thumbnail\" style=\"background-image: url('/uploads/{{ product.image }}')\"></div>
        <h1 class=\"product__name\">{{ product.name }} | <i class=\"product__price\">{{ product.price / 100 }}€</i></h1>
        <span class=\"product__description\">{{ product.description|raw }}</span><br/>

    </div>

    <div class=\"product__comments\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
        {% for comment in comments %}
            <ul>
                <li>Author : {{ comment.author }}</li>
                <p>{{ comment.commentText }}</p>
            </ul>
        {% endfor %}

    </div>
{% endblock %}
", "single.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/templates/single.html.twig");
    }
}
