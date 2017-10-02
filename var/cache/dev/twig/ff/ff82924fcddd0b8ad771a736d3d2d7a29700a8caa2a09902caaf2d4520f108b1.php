<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d8857549449c6e3af81b1bdccc739f9f2911b960a199cc620f417d7199a59d3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de37c0b877dc1cf55320fb6aed36b39a4c3b8e2d914f20e0cee60cefe5f1c3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de37c0b877dc1cf55320fb6aed36b39a4c3b8e2d914f20e0cee60cefe5f1c3c0->enter($__internal_de37c0b877dc1cf55320fb6aed36b39a4c3b8e2d914f20e0cee60cefe5f1c3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_81ebeae176262de550357fe7847cdfa44cfa6944bdaaa40cc5df4a0d65ff31ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ebeae176262de550357fe7847cdfa44cfa6944bdaaa40cc5df4a0d65ff31ef->enter($__internal_81ebeae176262de550357fe7847cdfa44cfa6944bdaaa40cc5df4a0d65ff31ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de37c0b877dc1cf55320fb6aed36b39a4c3b8e2d914f20e0cee60cefe5f1c3c0->leave($__internal_de37c0b877dc1cf55320fb6aed36b39a4c3b8e2d914f20e0cee60cefe5f1c3c0_prof);

        
        $__internal_81ebeae176262de550357fe7847cdfa44cfa6944bdaaa40cc5df4a0d65ff31ef->leave($__internal_81ebeae176262de550357fe7847cdfa44cfa6944bdaaa40cc5df4a0d65ff31ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9eddf98fe61f11542293ea40e1d951d55aadb688a141c668f1af8659404b09c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eddf98fe61f11542293ea40e1d951d55aadb688a141c668f1af8659404b09c1->enter($__internal_9eddf98fe61f11542293ea40e1d951d55aadb688a141c668f1af8659404b09c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a99a17d96cebf5f74d9f769e905fca4e672264cc20cb34ecd24daf60e28c4dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a99a17d96cebf5f74d9f769e905fca4e672264cc20cb34ecd24daf60e28c4dc->enter($__internal_3a99a17d96cebf5f74d9f769e905fca4e672264cc20cb34ecd24daf60e28c4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3a99a17d96cebf5f74d9f769e905fca4e672264cc20cb34ecd24daf60e28c4dc->leave($__internal_3a99a17d96cebf5f74d9f769e905fca4e672264cc20cb34ecd24daf60e28c4dc_prof);

        
        $__internal_9eddf98fe61f11542293ea40e1d951d55aadb688a141c668f1af8659404b09c1->leave($__internal_9eddf98fe61f11542293ea40e1d951d55aadb688a141c668f1af8659404b09c1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_68a6e12844e077b82ae91d9e2c074d2f2e9aa4871270a959fd23a2cbe3d8b9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a6e12844e077b82ae91d9e2c074d2f2e9aa4871270a959fd23a2cbe3d8b9b6->enter($__internal_68a6e12844e077b82ae91d9e2c074d2f2e9aa4871270a959fd23a2cbe3d8b9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50517d2c69cb43b875f5434020311e8fd467fdd023871881708a2bcc1d12bc8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50517d2c69cb43b875f5434020311e8fd467fdd023871881708a2bcc1d12bc8f->enter($__internal_50517d2c69cb43b875f5434020311e8fd467fdd023871881708a2bcc1d12bc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_50517d2c69cb43b875f5434020311e8fd467fdd023871881708a2bcc1d12bc8f->leave($__internal_50517d2c69cb43b875f5434020311e8fd467fdd023871881708a2bcc1d12bc8f_prof);

        
        $__internal_68a6e12844e077b82ae91d9e2c074d2f2e9aa4871270a959fd23a2cbe3d8b9b6->leave($__internal_68a6e12844e077b82ae91d9e2c074d2f2e9aa4871270a959fd23a2cbe3d8b9b6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_77ae7b02c360b727a4f67feb13efc933c963fb93191ac0d21fde7df1c77836b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ae7b02c360b727a4f67feb13efc933c963fb93191ac0d21fde7df1c77836b1->enter($__internal_77ae7b02c360b727a4f67feb13efc933c963fb93191ac0d21fde7df1c77836b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c73ebb2084b5cb94be08090820ed25a14ba4d9d41a640a38b9f52b91cee6afb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73ebb2084b5cb94be08090820ed25a14ba4d9d41a640a38b9f52b91cee6afb7->enter($__internal_c73ebb2084b5cb94be08090820ed25a14ba4d9d41a640a38b9f52b91cee6afb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c73ebb2084b5cb94be08090820ed25a14ba4d9d41a640a38b9f52b91cee6afb7->leave($__internal_c73ebb2084b5cb94be08090820ed25a14ba4d9d41a640a38b9f52b91cee6afb7_prof);

        
        $__internal_77ae7b02c360b727a4f67feb13efc933c963fb93191ac0d21fde7df1c77836b1->leave($__internal_77ae7b02c360b727a4f67feb13efc933c963fb93191ac0d21fde7df1c77836b1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
