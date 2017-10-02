<?php

/* form.html.twig */
class __TwigTemplate_b85cb7090e6e194a781925ceb9eb811712267cb3458cb31185c0fcb2ff87c099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "form.html.twig", 1);
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
        $__internal_eb15c8b9e38cc4d6811dc86b8d4accc2237bb43f93d7c5666fe5b53bad20f9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb15c8b9e38cc4d6811dc86b8d4accc2237bb43f93d7c5666fe5b53bad20f9bc->enter($__internal_eb15c8b9e38cc4d6811dc86b8d4accc2237bb43f93d7c5666fe5b53bad20f9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form.html.twig"));

        $__internal_d957c7c654d43e67921be19b45f03ec6f0f7539da83f60b9d14b1ea56477762c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d957c7c654d43e67921be19b45f03ec6f0f7539da83f60b9d14b1ea56477762c->enter($__internal_d957c7c654d43e67921be19b45f03ec6f0f7539da83f60b9d14b1ea56477762c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb15c8b9e38cc4d6811dc86b8d4accc2237bb43f93d7c5666fe5b53bad20f9bc->leave($__internal_eb15c8b9e38cc4d6811dc86b8d4accc2237bb43f93d7c5666fe5b53bad20f9bc_prof);

        
        $__internal_d957c7c654d43e67921be19b45f03ec6f0f7539da83f60b9d14b1ea56477762c->leave($__internal_d957c7c654d43e67921be19b45f03ec6f0f7539da83f60b9d14b1ea56477762c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee6b00a8924970b79d1e1ae974ec3816d4c52a32b4892cc63a13a70b61a6e4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6b00a8924970b79d1e1ae974ec3816d4c52a32b4892cc63a13a70b61a6e4b7->enter($__internal_ee6b00a8924970b79d1e1ae974ec3816d4c52a32b4892cc63a13a70b61a6e4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e806a1357dd48ca733d56288efdf15776fa17951bd15dd6c437d3d371fa058c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e806a1357dd48ca733d56288efdf15776fa17951bd15dd6c437d3d371fa058c0->enter($__internal_e806a1357dd48ca733d56288efdf15776fa17951bd15dd6c437d3d371fa058c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form_start');
        echo "


    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "


    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_e806a1357dd48ca733d56288efdf15776fa17951bd15dd6c437d3d371fa058c0->leave($__internal_e806a1357dd48ca733d56288efdf15776fa17951bd15dd6c437d3d371fa058c0_prof);

        
        $__internal_ee6b00a8924970b79d1e1ae974ec3816d4c52a32b4892cc63a13a70b61a6e4b7->leave($__internal_ee6b00a8924970b79d1e1ae974ec3816d4c52a32b4892cc63a13a70b61a6e4b7_prof);

    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  58 => 7,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

    {{ form_start(form) }}


    {{ form_widget(form) }}


    {{ form_end(form) }}

{% endblock %}
", "form.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/templates/form.html.twig");
    }
}
