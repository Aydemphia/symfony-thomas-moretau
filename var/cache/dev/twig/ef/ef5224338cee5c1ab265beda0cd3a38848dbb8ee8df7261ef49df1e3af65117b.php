<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0c35494faa4a739e8b3e5c072d9e6f9f1bcd57f9b7f336ff31f1cef7c7a2ba04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_681f0d58b033f73259ad7bc83020bf590f6fd45e6648fff1c2e0bcb48eac5be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681f0d58b033f73259ad7bc83020bf590f6fd45e6648fff1c2e0bcb48eac5be9->enter($__internal_681f0d58b033f73259ad7bc83020bf590f6fd45e6648fff1c2e0bcb48eac5be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_97c20f23c29fcdf148a46a6814d8fa7041bede0e1a00abbe160508da921893e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c20f23c29fcdf148a46a6814d8fa7041bede0e1a00abbe160508da921893e6->enter($__internal_97c20f23c29fcdf148a46a6814d8fa7041bede0e1a00abbe160508da921893e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_681f0d58b033f73259ad7bc83020bf590f6fd45e6648fff1c2e0bcb48eac5be9->leave($__internal_681f0d58b033f73259ad7bc83020bf590f6fd45e6648fff1c2e0bcb48eac5be9_prof);

        
        $__internal_97c20f23c29fcdf148a46a6814d8fa7041bede0e1a00abbe160508da921893e6->leave($__internal_97c20f23c29fcdf148a46a6814d8fa7041bede0e1a00abbe160508da921893e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18c7fb2ec551eb03532f09c9fb936ac773a954e8034e14a9a284fd6bb9a63989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c7fb2ec551eb03532f09c9fb936ac773a954e8034e14a9a284fd6bb9a63989->enter($__internal_18c7fb2ec551eb03532f09c9fb936ac773a954e8034e14a9a284fd6bb9a63989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c92e42af3f28d9fdc27632cfb21de2c09ae0dcde6560089c7cc9f00455d2b000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92e42af3f28d9fdc27632cfb21de2c09ae0dcde6560089c7cc9f00455d2b000->enter($__internal_c92e42af3f28d9fdc27632cfb21de2c09ae0dcde6560089c7cc9f00455d2b000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c92e42af3f28d9fdc27632cfb21de2c09ae0dcde6560089c7cc9f00455d2b000->leave($__internal_c92e42af3f28d9fdc27632cfb21de2c09ae0dcde6560089c7cc9f00455d2b000_prof);

        
        $__internal_18c7fb2ec551eb03532f09c9fb936ac773a954e8034e14a9a284fd6bb9a63989->leave($__internal_18c7fb2ec551eb03532f09c9fb936ac773a954e8034e14a9a284fd6bb9a63989_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
