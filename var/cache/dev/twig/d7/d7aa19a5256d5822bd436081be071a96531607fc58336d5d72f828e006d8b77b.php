<?php

/* base.html.twig */
class __TwigTemplate_88e846bac44f71154e95138330195bf7c1906fada9f4c723c6e0727e49ce4a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_883b3bad2302b9c9f3d57ba5f4a3b06eeda652ad5ca03e34b59a94b0f02d4d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883b3bad2302b9c9f3d57ba5f4a3b06eeda652ad5ca03e34b59a94b0f02d4d0d->enter($__internal_883b3bad2302b9c9f3d57ba5f4a3b06eeda652ad5ca03e34b59a94b0f02d4d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b062c480930694e2838d10c1308932fa2079bf16ce4495f7e899df01be87066f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b062c480930694e2838d10c1308932fa2079bf16ce4495f7e899df01be87066f->enter($__internal_b062c480930694e2838d10c1308932fa2079bf16ce4495f7e899df01be87066f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    </head>
    <body>

    <nav class=\"navbar\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productsList");
        echo "\">The 🐱 market</a>
    </nav>

        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_883b3bad2302b9c9f3d57ba5f4a3b06eeda652ad5ca03e34b59a94b0f02d4d0d->leave($__internal_883b3bad2302b9c9f3d57ba5f4a3b06eeda652ad5ca03e34b59a94b0f02d4d0d_prof);

        
        $__internal_b062c480930694e2838d10c1308932fa2079bf16ce4495f7e899df01be87066f->leave($__internal_b062c480930694e2838d10c1308932fa2079bf16ce4495f7e899df01be87066f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e48e431c6c4060a349d4044e34f4cb95d2ace890ef45e83f49ae6adf6dc86adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48e431c6c4060a349d4044e34f4cb95d2ace890ef45e83f49ae6adf6dc86adb->enter($__internal_e48e431c6c4060a349d4044e34f4cb95d2ace890ef45e83f49ae6adf6dc86adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c5321fdd98b5712c5f960f831a0478a70b304ed81fc6dc26bb297fce1748d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5321fdd98b5712c5f960f831a0478a70b304ed81fc6dc26bb297fce1748d3e->enter($__internal_1c5321fdd98b5712c5f960f831a0478a70b304ed81fc6dc26bb297fce1748d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c5321fdd98b5712c5f960f831a0478a70b304ed81fc6dc26bb297fce1748d3e->leave($__internal_1c5321fdd98b5712c5f960f831a0478a70b304ed81fc6dc26bb297fce1748d3e_prof);

        
        $__internal_e48e431c6c4060a349d4044e34f4cb95d2ace890ef45e83f49ae6adf6dc86adb->leave($__internal_e48e431c6c4060a349d4044e34f4cb95d2ace890ef45e83f49ae6adf6dc86adb_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f45508a83030437535cbe4fbbc689d84a44a15387f6660e755d92531a92cf529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45508a83030437535cbe4fbbc689d84a44a15387f6660e755d92531a92cf529->enter($__internal_f45508a83030437535cbe4fbbc689d84a44a15387f6660e755d92531a92cf529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ca467c4d8806f7e504e468d8108bca1cd6c6fe44e63e9702fe3559d5993d045a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca467c4d8806f7e504e468d8108bca1cd6c6fe44e63e9702fe3559d5993d045a->enter($__internal_ca467c4d8806f7e504e468d8108bca1cd6c6fe44e63e9702fe3559d5993d045a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca467c4d8806f7e504e468d8108bca1cd6c6fe44e63e9702fe3559d5993d045a->leave($__internal_ca467c4d8806f7e504e468d8108bca1cd6c6fe44e63e9702fe3559d5993d045a_prof);

        
        $__internal_f45508a83030437535cbe4fbbc689d84a44a15387f6660e755d92531a92cf529->leave($__internal_f45508a83030437535cbe4fbbc689d84a44a15387f6660e755d92531a92cf529_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_baa2f5ca28534c275d5e99d9fd1040200551a0481844d2a2c1cbfa584a3e7f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa2f5ca28534c275d5e99d9fd1040200551a0481844d2a2c1cbfa584a3e7f30->enter($__internal_baa2f5ca28534c275d5e99d9fd1040200551a0481844d2a2c1cbfa584a3e7f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06e590b2dec294c13038a763a5a90895101738e8eef8cfcdfacb3e909b9a292d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e590b2dec294c13038a763a5a90895101738e8eef8cfcdfacb3e909b9a292d->enter($__internal_06e590b2dec294c13038a763a5a90895101738e8eef8cfcdfacb3e909b9a292d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_06e590b2dec294c13038a763a5a90895101738e8eef8cfcdfacb3e909b9a292d->leave($__internal_06e590b2dec294c13038a763a5a90895101738e8eef8cfcdfacb3e909b9a292d_prof);

        
        $__internal_baa2f5ca28534c275d5e99d9fd1040200551a0481844d2a2c1cbfa584a3e7f30->leave($__internal_baa2f5ca28534c275d5e99d9fd1040200551a0481844d2a2c1cbfa584a3e7f30_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59d61c424e7f559b8d663ac2b03b54ac190c971488de22986a37dc2be4897852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d61c424e7f559b8d663ac2b03b54ac190c971488de22986a37dc2be4897852->enter($__internal_59d61c424e7f559b8d663ac2b03b54ac190c971488de22986a37dc2be4897852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b3366f464534ccd6edf7ece8e68e476607110b93e1312dd1933f11a8c05d39c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3366f464534ccd6edf7ece8e68e476607110b93e1312dd1933f11a8c05d39c7->enter($__internal_b3366f464534ccd6edf7ece8e68e476607110b93e1312dd1933f11a8c05d39c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b3366f464534ccd6edf7ece8e68e476607110b93e1312dd1933f11a8c05d39c7->leave($__internal_b3366f464534ccd6edf7ece8e68e476607110b93e1312dd1933f11a8c05d39c7_prof);

        
        $__internal_59d61c424e7f559b8d663ac2b03b54ac190c971488de22986a37dc2be4897852->leave($__internal_59d61c424e7f559b8d663ac2b03b54ac190c971488de22986a37dc2be4897852_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 16,  109 => 15,  92 => 7,  74 => 5,  62 => 17,  59 => 16,  57 => 15,  51 => 12,  45 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>

    <nav class=\"navbar\">
        <a href=\"{{ path('productsList') }}\">The 🐱 market</a>
    </nav>

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/templates/base.html.twig");
    }
}
