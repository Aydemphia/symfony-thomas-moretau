<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_862cf6799d88259b8720dcd6d7567870feefd8362518c93e6a47f689752d0c46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_630c4752fde3090ca68f86ddce144f7323734b817ffd6d2214c87d81f62c5043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630c4752fde3090ca68f86ddce144f7323734b817ffd6d2214c87d81f62c5043->enter($__internal_630c4752fde3090ca68f86ddce144f7323734b817ffd6d2214c87d81f62c5043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3b3c202fe8e054653c824418b714a1b4d27c1949ae6fa0487dbcf2890cd1420b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3c202fe8e054653c824418b714a1b4d27c1949ae6fa0487dbcf2890cd1420b->enter($__internal_3b3c202fe8e054653c824418b714a1b4d27c1949ae6fa0487dbcf2890cd1420b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_630c4752fde3090ca68f86ddce144f7323734b817ffd6d2214c87d81f62c5043->leave($__internal_630c4752fde3090ca68f86ddce144f7323734b817ffd6d2214c87d81f62c5043_prof);

        
        $__internal_3b3c202fe8e054653c824418b714a1b4d27c1949ae6fa0487dbcf2890cd1420b->leave($__internal_3b3c202fe8e054653c824418b714a1b4d27c1949ae6fa0487dbcf2890cd1420b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8eb6c02e46fb6dd38c3d7993b1e251598635a37d9f8750f61827a7b8099ff4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb6c02e46fb6dd38c3d7993b1e251598635a37d9f8750f61827a7b8099ff4d1->enter($__internal_8eb6c02e46fb6dd38c3d7993b1e251598635a37d9f8750f61827a7b8099ff4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18f7cd0410113a6e597f7e6ad8c88cb420f5a93ecb5284b260f322578d54b4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f7cd0410113a6e597f7e6ad8c88cb420f5a93ecb5284b260f322578d54b4d0->enter($__internal_18f7cd0410113a6e597f7e6ad8c88cb420f5a93ecb5284b260f322578d54b4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_18f7cd0410113a6e597f7e6ad8c88cb420f5a93ecb5284b260f322578d54b4d0->leave($__internal_18f7cd0410113a6e597f7e6ad8c88cb420f5a93ecb5284b260f322578d54b4d0_prof);

        
        $__internal_8eb6c02e46fb6dd38c3d7993b1e251598635a37d9f8750f61827a7b8099ff4d1->leave($__internal_8eb6c02e46fb6dd38c3d7993b1e251598635a37d9f8750f61827a7b8099ff4d1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82cc4912a7300cebc76d3489494af68fb122cff7fb9a6ffdce42a2a70d2449c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cc4912a7300cebc76d3489494af68fb122cff7fb9a6ffdce42a2a70d2449c6->enter($__internal_82cc4912a7300cebc76d3489494af68fb122cff7fb9a6ffdce42a2a70d2449c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_86e87cf2467d7185694a06aa661cb29c07a05a4fcdfd51435d02a6f3c033b6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e87cf2467d7185694a06aa661cb29c07a05a4fcdfd51435d02a6f3c033b6fd->enter($__internal_86e87cf2467d7185694a06aa661cb29c07a05a4fcdfd51435d02a6f3c033b6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_86e87cf2467d7185694a06aa661cb29c07a05a4fcdfd51435d02a6f3c033b6fd->leave($__internal_86e87cf2467d7185694a06aa661cb29c07a05a4fcdfd51435d02a6f3c033b6fd_prof);

        
        $__internal_82cc4912a7300cebc76d3489494af68fb122cff7fb9a6ffdce42a2a70d2449c6->leave($__internal_82cc4912a7300cebc76d3489494af68fb122cff7fb9a6ffdce42a2a70d2449c6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_275581fcd27bfb3367795f5748024e5b9a0a93d93e780aa43cd04383c0aa61a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275581fcd27bfb3367795f5748024e5b9a0a93d93e780aa43cd04383c0aa61a7->enter($__internal_275581fcd27bfb3367795f5748024e5b9a0a93d93e780aa43cd04383c0aa61a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff7824c40537e203dfb518c7f6eee37534ce48c70ce9f600037655a2fe8ab07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7824c40537e203dfb518c7f6eee37534ce48c70ce9f600037655a2fe8ab07d->enter($__internal_ff7824c40537e203dfb518c7f6eee37534ce48c70ce9f600037655a2fe8ab07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_ff7824c40537e203dfb518c7f6eee37534ce48c70ce9f600037655a2fe8ab07d->leave($__internal_ff7824c40537e203dfb518c7f6eee37534ce48c70ce9f600037655a2fe8ab07d_prof);

        
        $__internal_275581fcd27bfb3367795f5748024e5b9a0a93d93e780aa43cd04383c0aa61a7->leave($__internal_275581fcd27bfb3367795f5748024e5b9a0a93d93e780aa43cd04383c0aa61a7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
