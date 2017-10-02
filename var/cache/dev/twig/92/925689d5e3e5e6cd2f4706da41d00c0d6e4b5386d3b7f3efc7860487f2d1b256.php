<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7cda97283d63f988086287c064bd82723ddfd716a0b873a4be9b7c325b323e70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9592bf8a7ec20e07e19b7909283573224a74ebbef845a1c3b6b139534ca0e872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9592bf8a7ec20e07e19b7909283573224a74ebbef845a1c3b6b139534ca0e872->enter($__internal_9592bf8a7ec20e07e19b7909283573224a74ebbef845a1c3b6b139534ca0e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_50d3e3e07a20ecce93bcadcb015df9dddf342b4de0a88afe8c275e60c2db6945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d3e3e07a20ecce93bcadcb015df9dddf342b4de0a88afe8c275e60c2db6945->enter($__internal_50d3e3e07a20ecce93bcadcb015df9dddf342b4de0a88afe8c275e60c2db6945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9592bf8a7ec20e07e19b7909283573224a74ebbef845a1c3b6b139534ca0e872->leave($__internal_9592bf8a7ec20e07e19b7909283573224a74ebbef845a1c3b6b139534ca0e872_prof);

        
        $__internal_50d3e3e07a20ecce93bcadcb015df9dddf342b4de0a88afe8c275e60c2db6945->leave($__internal_50d3e3e07a20ecce93bcadcb015df9dddf342b4de0a88afe8c275e60c2db6945_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a05673e47b3ff8ed1a7a8ebc5a57e5dd98acd66365f989a6aef9fd8e87ec8772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05673e47b3ff8ed1a7a8ebc5a57e5dd98acd66365f989a6aef9fd8e87ec8772->enter($__internal_a05673e47b3ff8ed1a7a8ebc5a57e5dd98acd66365f989a6aef9fd8e87ec8772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc95bd961c77831c257d6a6521ac5c1da01c5b71ddb4646c5229fda963ceae28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc95bd961c77831c257d6a6521ac5c1da01c5b71ddb4646c5229fda963ceae28->enter($__internal_dc95bd961c77831c257d6a6521ac5c1da01c5b71ddb4646c5229fda963ceae28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc95bd961c77831c257d6a6521ac5c1da01c5b71ddb4646c5229fda963ceae28->leave($__internal_dc95bd961c77831c257d6a6521ac5c1da01c5b71ddb4646c5229fda963ceae28_prof);

        
        $__internal_a05673e47b3ff8ed1a7a8ebc5a57e5dd98acd66365f989a6aef9fd8e87ec8772->leave($__internal_a05673e47b3ff8ed1a7a8ebc5a57e5dd98acd66365f989a6aef9fd8e87ec8772_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_923d25e2fb5553c45b37187c92971d421224e16b076ca3976f5832f41afb8653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923d25e2fb5553c45b37187c92971d421224e16b076ca3976f5832f41afb8653->enter($__internal_923d25e2fb5553c45b37187c92971d421224e16b076ca3976f5832f41afb8653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7eeada8eb5a5577b78a39a9a69343975ffd065737ad983bddc42a0e7c0df561c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eeada8eb5a5577b78a39a9a69343975ffd065737ad983bddc42a0e7c0df561c->enter($__internal_7eeada8eb5a5577b78a39a9a69343975ffd065737ad983bddc42a0e7c0df561c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7eeada8eb5a5577b78a39a9a69343975ffd065737ad983bddc42a0e7c0df561c->leave($__internal_7eeada8eb5a5577b78a39a9a69343975ffd065737ad983bddc42a0e7c0df561c_prof);

        
        $__internal_923d25e2fb5553c45b37187c92971d421224e16b076ca3976f5832f41afb8653->leave($__internal_923d25e2fb5553c45b37187c92971d421224e16b076ca3976f5832f41afb8653_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0cef01406de983996c98356f1c827d6ee06e83f2dac507b477324aff37693905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cef01406de983996c98356f1c827d6ee06e83f2dac507b477324aff37693905->enter($__internal_0cef01406de983996c98356f1c827d6ee06e83f2dac507b477324aff37693905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81f06bfdfdef870044b366db6f085bcf94fa39222a4e4111bf02262e3697c8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f06bfdfdef870044b366db6f085bcf94fa39222a4e4111bf02262e3697c8cf->enter($__internal_81f06bfdfdef870044b366db6f085bcf94fa39222a4e4111bf02262e3697c8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_81f06bfdfdef870044b366db6f085bcf94fa39222a4e4111bf02262e3697c8cf->leave($__internal_81f06bfdfdef870044b366db6f085bcf94fa39222a4e4111bf02262e3697c8cf_prof);

        
        $__internal_0cef01406de983996c98356f1c827d6ee06e83f2dac507b477324aff37693905->leave($__internal_0cef01406de983996c98356f1c827d6ee06e83f2dac507b477324aff37693905_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
