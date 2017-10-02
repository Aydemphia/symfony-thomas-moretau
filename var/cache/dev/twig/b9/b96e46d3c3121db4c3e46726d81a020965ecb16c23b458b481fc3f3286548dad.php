<?php

/* @EasyAdmin/data_collector/easyadmin.html.twig */
class __TwigTemplate_fe9aa9ccc3ada5d2fb9d48d8eb133e11c069ed236162d0034e7b089b598a59d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/data_collector/easyadmin.html.twig", 1);
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
        $__internal_e4eb60ba6972b157df75e6d99f9c709cb05c8b2b9460a579858738446f6fdbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4eb60ba6972b157df75e6d99f9c709cb05c8b2b9460a579858738446f6fdbdb->enter($__internal_e4eb60ba6972b157df75e6d99f9c709cb05c8b2b9460a579858738446f6fdbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $__internal_2f2923f3d8a69e197d615887ace37c302c192e1cec313c358b321073771f6a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2923f3d8a69e197d615887ace37c302c192e1cec313c358b321073771f6a11->enter($__internal_2f2923f3d8a69e197d615887ace37c302c192e1cec313c358b321073771f6a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4eb60ba6972b157df75e6d99f9c709cb05c8b2b9460a579858738446f6fdbdb->leave($__internal_e4eb60ba6972b157df75e6d99f9c709cb05c8b2b9460a579858738446f6fdbdb_prof);

        
        $__internal_2f2923f3d8a69e197d615887ace37c302c192e1cec313c358b321073771f6a11->leave($__internal_2f2923f3d8a69e197d615887ace37c302c192e1cec313c358b321073771f6a11_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db9964049cf7fdeaa8aaeaf71c1946b6487a8aaf1d7113ebdbffcebf5dd5813d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9964049cf7fdeaa8aaeaf71c1946b6487a8aaf1d7113ebdbffcebf5dd5813d->enter($__internal_db9964049cf7fdeaa8aaeaf71c1946b6487a8aaf1d7113ebdbffcebf5dd5813d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b7d5c87afd177811f1511467e7f348572185b0f209062c9fe69e8a04822e0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7d5c87afd177811f1511467e7f348572185b0f209062c9fe69e8a04822e0f2->enter($__internal_2b7d5c87afd177811f1511467e7f348572185b0f209062c9fe69e8a04822e0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 4, $this->getSourceContext()); })()), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        $context["icon_fill_color"] = ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 7, $this->getSourceContext()); })()) == 1)) ? ("#222") : ("#AAA"));
        // line 8
        echo "        ";
        $context["icon_height"] = ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 8, $this->getSourceContext()); })()) == 1)) ? ("28") : ("24"));
        // line 9
        echo "        <span class=\"icon\">";
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => (isset($context["icon_fill_color"]) || array_key_exists("icon_fill_color", $context) ? $context["icon_fill_color"] : (function () { throw new Twig_Error_Runtime('Variable "icon_fill_color" does not exist.', 9, $this->getSourceContext()); })()), "height" => (isset($context["icon_height"]) || array_key_exists("icon_height", $context) ? $context["icon_height"] : (function () { throw new Twig_Error_Runtime('Variable "icon_height" does not exist.', 9, $this->getSourceContext()); })())));
        echo "</span>
        <span class=\"sf-toolbar-value sf-toolbar-status\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "numEntities", array()), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>EasyAdmin version</b>
        <span class=\"sf-toolbar-status\">";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Managed entities</b>
        <span class=\"sf-toolbar-status\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 20, $this->getSourceContext()); })()), "numEntities", array()), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "
";
        
        $__internal_2b7d5c87afd177811f1511467e7f348572185b0f209062c9fe69e8a04822e0f2->leave($__internal_2b7d5c87afd177811f1511467e7f348572185b0f209062c9fe69e8a04822e0f2_prof);

        
        $__internal_db9964049cf7fdeaa8aaeaf71c1946b6487a8aaf1d7113ebdbffcebf5dd5813d->leave($__internal_db9964049cf7fdeaa8aaeaf71c1946b6487a8aaf1d7113ebdbffcebf5dd5813d_prof);

    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d123dd6affc15992cee5e3c30c8724153ad8cce65f35292229ccee37547b31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d123dd6affc15992cee5e3c30c8724153ad8cce65f35292229ccee37547b31d->enter($__internal_1d123dd6affc15992cee5e3c30c8724153ad8cce65f35292229ccee37547b31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_666b0d8d822df15eeeb33ed322e1da767538652d72f095fd9f3b415d360a89b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666b0d8d822df15eeeb33ed322e1da767538652d72f095fd9f3b415d360a89b7->enter($__internal_666b0d8d822df15eeeb33ed322e1da767538652d72f095fd9f3b415d360a89b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        echo "    <span class=\"label status-";
        echo (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 28, $this->getSourceContext()); })()), "requestParameters", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 29
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        
        $__internal_666b0d8d822df15eeeb33ed322e1da767538652d72f095fd9f3b415d360a89b7->leave($__internal_666b0d8d822df15eeeb33ed322e1da767538652d72f095fd9f3b415d360a89b7_prof);

        
        $__internal_1d123dd6affc15992cee5e3c30c8724153ad8cce65f35292229ccee37547b31d->leave($__internal_1d123dd6affc15992cee5e3c30c8724153ad8cce65f35292229ccee37547b31d_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_034b3aa9be6e6bec17b5221d04fa4993d57eb5b40611919dea14f2cc8928c611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034b3aa9be6e6bec17b5221d04fa4993d57eb5b40611919dea14f2cc8928c611->enter($__internal_034b3aa9be6e6bec17b5221d04fa4993d57eb5b40611919dea14f2cc8928c611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0e77f2812248fd0abe7944c19efcc1b137e4d2d6b06d4b90e9e485cd5730b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e77f2812248fd0abe7944c19efcc1b137e4d2d6b06d4b90e9e485cd5730b7f->enter($__internal_d0e77f2812248fd0abe7944c19efcc1b137e4d2d6b06d4b90e9e485cd5730b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 35, $this->getSourceContext()); })()), 1)) : (1));
        // line 36
        echo "
    <h2>EasyAdmin <small>(";
        // line 37
        echo twig_escape_filter($this->env, twig_constant("JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 39
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 39, $this->getSourceContext()); })()) == 1)) {
            // line 40
            echo "
        <h3>Request Parameters</h3>
        ";
            // line 42
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 42, $this->getSourceContext()); })()), "requestParameters", array())));
            echo "

    ";
        } else {
            // line 45
            echo "
        ";
            // line 46
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "requestParameters", array())) {
                // line 47
                echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
                // line 49
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array()), "-")) : ("-")), "html", null, true);
                echo "</span>
                <span class=\"label\">Action</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
                // line 54
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array()), "-")) : ("-")), "html", null, true);
                echo "</span>
                <span class=\"label\">Entity Name</span>
            </div>

            ";
                // line 58
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 58, $this->getSourceContext()); })()), "requestParameters", array()), "id", array())) {
                    // line 59
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 60, $this->getSourceContext()); })()), "requestParameters", array()), "id", array()), "html", null, true);
                    echo "</span>
                    <span class=\"label\">ID</span>
                </div>
            ";
                } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                 // line 63
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 63, $this->getSourceContext()); })()), "requestParameters", array()), "sort_field", array())) {
                    // line 64
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->getSourceContext()); })()), "requestParameters", array()), "sort_field", array()), "html", null, true);
                    echo " <span class=\"unit\">(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->getSourceContext()); })()), "requestParameters", array()), "sort_direction", array()), "html", null, true);
                    echo ")</span></span>
                    <span class=\"label\">Sorting</span>
                </div>
            ";
                }
                // line 69
                echo "        </div>
        ";
            }
            // line 71
            echo "
    ";
        }
        // line 73
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Current Entity Configuration</h3>
            <div class=\"tab-content\">
                ";
        // line 78
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 78, $this->getSourceContext()); })()), "dump", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 78, $this->getSourceContext()); })()), "currentEntityConfig", array())), "method");
        echo "
            </div>

            <br>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Full Backend Configuration</h3>
            <div class=\"tab-content\">

                <h4>Basic Configuration</h4>
                ";
        // line 89
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 89, $this->getSourceContext()); })()), "dump", array(0 => array("site_name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 90
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 90, $this->getSourceContext()); })()), "backendConfig", array()), "site_name", array(), "array"), "formats" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 91
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 91, $this->getSourceContext()); })()), "backendConfig", array()), "formats", array(), "array"))), "method");
        // line 92
        echo "

                <h4>Design Configuration</h4>
                ";
        // line 95
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 95, $this->getSourceContext()); })()), "dump", array(0 => array("design" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 96
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 96, $this->getSourceContext()); })()), "backendConfig", array()), "design", array(), "array"))), "method");
        // line 97
        echo "

                <h4>Actions Configuration</h4>
                ";
        // line 100
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 100, $this->getSourceContext()); })()), "dump", array(0 => array("disabled_actions" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 101
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 101, $this->getSourceContext()); })()), "backendConfig", array()), "disabled_actions", array(), "array"), "list" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 102
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 102, $this->getSourceContext()); })()), "backendConfig", array()), "list", array(), "array"), "edit" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 103
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 103, $this->getSourceContext()); })()), "backendConfig", array()), "edit", array(), "array"), "new" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 104
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 104, $this->getSourceContext()); })()), "backendConfig", array()), "new", array(), "array"), "show" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 105
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 105, $this->getSourceContext()); })()), "backendConfig", array()), "show", array(), "array"))), "method");
        // line 106
        echo "

                <h4>Entities Configuration</h4>
                ";
        // line 109
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 109, $this->getSourceContext()); })()), "dump", array(0 => array("entities" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 110
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 110, $this->getSourceContext()); })()), "backendConfig", array()), "entities", array(), "array"))), "method");
        // line 111
        echo "

                <h4>Full Backend Configuration</h4>
                ";
        // line 114
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 114, $this->getSourceContext()); })()), "dump", array(0 => array("easy_admin" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 115
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 115, $this->getSourceContext()); })()), "backendConfig", array()))), "method");
        // line 116
        echo "
            </div>
        </div>
    </div>

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

";
        
        $__internal_d0e77f2812248fd0abe7944c19efcc1b137e4d2d6b06d4b90e9e485cd5730b7f->leave($__internal_d0e77f2812248fd0abe7944c19efcc1b137e4d2d6b06d4b90e9e485cd5730b7f_prof);

        
        $__internal_034b3aa9be6e6bec17b5221d04fa4993d57eb5b40611919dea14f2cc8928c611->leave($__internal_034b3aa9be6e6bec17b5221d04fa4993d57eb5b40611919dea14f2cc8928c611_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/data_collector/easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 116,  288 => 115,  287 => 114,  282 => 111,  280 => 110,  279 => 109,  274 => 106,  272 => 105,  271 => 104,  270 => 103,  269 => 102,  268 => 101,  267 => 100,  262 => 97,  260 => 96,  259 => 95,  254 => 92,  252 => 91,  251 => 90,  250 => 89,  236 => 78,  229 => 73,  225 => 71,  221 => 69,  212 => 65,  209 => 64,  207 => 63,  201 => 60,  198 => 59,  196 => 58,  189 => 54,  181 => 49,  177 => 47,  175 => 46,  172 => 45,  166 => 42,  162 => 40,  160 => 39,  155 => 37,  152 => 36,  149 => 35,  140 => 34,  126 => 29,  121 => 28,  112 => 27,  100 => 24,  97 => 23,  91 => 20,  84 => 16,  80 => 14,  78 => 13,  75 => 12,  70 => 10,  65 => 9,  62 => 8,  59 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set icon %}
        {% set icon_fill_color = profiler_markup_version == 1 ? '#222' : '#AAA' %}
        {% set icon_height = profiler_markup_version == 1 ? '28' : '24' %}
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { fill_color: icon_fill_color, height: icon_height }) }}</span>
        <span class=\"sf-toolbar-value sf-toolbar-status\">{{ collector.numEntities }}</span>
    {% endset %}

    {% set text %}
    <div class=\"sf-toolbar-info-piece\">
        <b>EasyAdmin version</b>
        <span class=\"sf-toolbar-status\">{{ constant('JavierEguiluz\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Managed entities</b>
        <span class=\"sf-toolbar-status\">{{ collector.numEntities }}</span>
    </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block menu %}
    <span class=\"label status-{{ not collector.requestParameters ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { height: 32 }) }}</span>
        <strong>EasyAdmin</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>EasyAdmin <small>({{ constant('JavierEguiluz\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }})</small></h2>

    {% if profiler_markup_version == 1 %}

        <h3>Request Parameters</h3>
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.requestParameters }) }}

    {% else %}

        {% if collector.requestParameters %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestParameters.action|default('-') }}</span>
                <span class=\"label\">Action</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestParameters.entity|default('-') }}</span>
                <span class=\"label\">Entity Name</span>
            </div>

            {% if collector.requestParameters.id %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.id }}</span>
                    <span class=\"label\">ID</span>
                </div>
            {% elseif collector.requestParameters.sort_field %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.sort_field }} <span class=\"unit\">({{ collector.requestParameters.sort_direction }})</span></span>
                    <span class=\"label\">Sorting</span>
                </div>
            {% endif %}
        </div>
        {% endif %}

    {% endif %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Current Entity Configuration</h3>
            <div class=\"tab-content\">
                {{ collector.dump(collector.currentEntityConfig)|raw }}
            </div>

            <br>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Full Backend Configuration</h3>
            <div class=\"tab-content\">

                <h4>Basic Configuration</h4>
                {{ collector.dump({
                    'site_name': collector.backendConfig['site_name'],
                    'formats': collector.backendConfig['formats']
                })|raw }}

                <h4>Design Configuration</h4>
                {{ collector.dump({
                    'design': collector.backendConfig['design']
                })|raw }}

                <h4>Actions Configuration</h4>
                {{ collector.dump({
                    'disabled_actions': collector.backendConfig['disabled_actions'],
                    'list': collector.backendConfig['list'],
                    'edit': collector.backendConfig['edit'],
                    'new': collector.backendConfig['new'],
                    'show': collector.backendConfig['show'],
                })|raw }}

                <h4>Entities Configuration</h4>
                {{ collector.dump({
                    'entities': collector.backendConfig['entities']
                })|raw }}

                <h4>Full Backend Configuration</h4>
                {{ collector.dump({
                    'easy_admin': collector.backendConfig
                })|raw }}
            </div>
        </div>
    </div>

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

{% endblock %}
", "@EasyAdmin/data_collector/easyadmin.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/data_collector/easyadmin.html.twig");
    }
}
