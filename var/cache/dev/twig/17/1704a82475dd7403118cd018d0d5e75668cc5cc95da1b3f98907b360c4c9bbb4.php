<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_3f63d5bf5e5f832105c748b44bd249d8f846434217b291c7b2b599d4fff94a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43b4ba6327fd9080db6012bc55fc7f43ad3da9f1f8b87d8b57dc9d0b1310ac6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b4ba6327fd9080db6012bc55fc7f43ad3da9f1f8b87d8b57dc9d0b1310ac6f->enter($__internal_43b4ba6327fd9080db6012bc55fc7f43ad3da9f1f8b87d8b57dc9d0b1310ac6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_040de5ddbd4d17d1ea39dee0f05145a65ed56bc1061860c849a0376c1b8e1249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040de5ddbd4d17d1ea39dee0f05145a65ed56bc1061860c849a0376c1b8e1249->enter($__internal_040de5ddbd4d17d1ea39dee0f05145a65ed56bc1061860c849a0376c1b8e1249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_43b4ba6327fd9080db6012bc55fc7f43ad3da9f1f8b87d8b57dc9d0b1310ac6f->leave($__internal_43b4ba6327fd9080db6012bc55fc7f43ad3da9f1f8b87d8b57dc9d0b1310ac6f_prof);

        
        $__internal_040de5ddbd4d17d1ea39dee0f05145a65ed56bc1061860c849a0376c1b8e1249->leave($__internal_040de5ddbd4d17d1ea39dee0f05145a65ed56bc1061860c849a0376c1b8e1249_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_34bc4360344535cb9e411a8323df78e67637d5f0635e36defa4ef76cfd1f2758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bc4360344535cb9e411a8323df78e67637d5f0635e36defa4ef76cfd1f2758->enter($__internal_34bc4360344535cb9e411a8323df78e67637d5f0635e36defa4ef76cfd1f2758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e10d5a2a88b0bfb9d18a1f7d52d284b535b62649893ad92844e2946aa43d7a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10d5a2a88b0bfb9d18a1f7d52d284b535b62649893ad92844e2946aa43d7a39->enter($__internal_e10d5a2a88b0bfb9d18a1f7d52d284b535b62649893ad92844e2946aa43d7a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e10d5a2a88b0bfb9d18a1f7d52d284b535b62649893ad92844e2946aa43d7a39->leave($__internal_e10d5a2a88b0bfb9d18a1f7d52d284b535b62649893ad92844e2946aa43d7a39_prof);

        
        $__internal_34bc4360344535cb9e411a8323df78e67637d5f0635e36defa4ef76cfd1f2758->leave($__internal_34bc4360344535cb9e411a8323df78e67637d5f0635e36defa4ef76cfd1f2758_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_87db30d3b90889b0f5d526608b01fd4a56ec1251d649091b93889f99af79d6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87db30d3b90889b0f5d526608b01fd4a56ec1251d649091b93889f99af79d6b7->enter($__internal_87db30d3b90889b0f5d526608b01fd4a56ec1251d649091b93889f99af79d6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23fd57e5b295363c700fc6f8d33b56a0df437061d6909527043fe9585b58406c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fd57e5b295363c700fc6f8d33b56a0df437061d6909527043fe9585b58406c->enter($__internal_23fd57e5b295363c700fc6f8d33b56a0df437061d6909527043fe9585b58406c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_23fd57e5b295363c700fc6f8d33b56a0df437061d6909527043fe9585b58406c->leave($__internal_23fd57e5b295363c700fc6f8d33b56a0df437061d6909527043fe9585b58406c_prof);

        
        $__internal_87db30d3b90889b0f5d526608b01fd4a56ec1251d649091b93889f99af79d6b7->leave($__internal_87db30d3b90889b0f5d526608b01fd4a56ec1251d649091b93889f99af79d6b7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8f48bd6e88dc852bc49019cf31fe52ed15579c38c4f2cb5189228b7105d8798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f48bd6e88dc852bc49019cf31fe52ed15579c38c4f2cb5189228b7105d8798->enter($__internal_d8f48bd6e88dc852bc49019cf31fe52ed15579c38c4f2cb5189228b7105d8798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47f23b3d97319ce9585033454d0defc5f45bc6423c3db1130b40c2c64161f434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f23b3d97319ce9585033454d0defc5f45bc6423c3db1130b40c2c64161f434->enter($__internal_47f23b3d97319ce9585033454d0defc5f45bc6423c3db1130b40c2c64161f434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_47f23b3d97319ce9585033454d0defc5f45bc6423c3db1130b40c2c64161f434->leave($__internal_47f23b3d97319ce9585033454d0defc5f45bc6423c3db1130b40c2c64161f434_prof);

        
        $__internal_d8f48bd6e88dc852bc49019cf31fe52ed15579c38c4f2cb5189228b7105d8798->leave($__internal_d8f48bd6e88dc852bc49019cf31fe52ed15579c38c4f2cb5189228b7105d8798_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
