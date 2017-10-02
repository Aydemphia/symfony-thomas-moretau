<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.twig */
class __TwigTemplate_895aefb53c2ceeca9bd06d0390976154fe73eed2aad97c696e23d7dd8f2b951d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
            'ckeditor_javascript' => array($this, 'block_ckeditor_javascript'),
            '_ckeditor_javascript' => array($this, 'block__ckeditor_javascript'),
            'ckeditor_widget_extra' => array($this, 'block_ckeditor_widget_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56f04e8f86f28813ffaa511a7e3dd1f1fa5b22d22ef3b74edf354caaf42b723a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f04e8f86f28813ffaa511a7e3dd1f1fa5b22d22ef3b74edf354caaf42b723a->enter($__internal_56f04e8f86f28813ffaa511a7e3dd1f1fa5b22d22ef3b74edf354caaf42b723a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.twig"));

        $__internal_2acc7985ab81078d74f1631df2e1f601941cf2afea3cbe8762c5ea66158caa67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2acc7985ab81078d74f1631df2e1f601941cf2afea3cbe8762c5ea66158caa67->enter($__internal_2acc7985ab81078d74f1631df2e1f601941cf2afea3cbe8762c5ea66158caa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('ckeditor_javascript', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_ckeditor_javascript', $context, $blocks);
        
        $__internal_56f04e8f86f28813ffaa511a7e3dd1f1fa5b22d22ef3b74edf354caaf42b723a->leave($__internal_56f04e8f86f28813ffaa511a7e3dd1f1fa5b22d22ef3b74edf354caaf42b723a_prof);

        
        $__internal_2acc7985ab81078d74f1631df2e1f601941cf2afea3cbe8762c5ea66158caa67->leave($__internal_2acc7985ab81078d74f1631df2e1f601941cf2afea3cbe8762c5ea66158caa67_prof);

    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_7fe8522f919069716b9de3826290f7b7f8992b1d07b00ed44f9dd40466a8849b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe8522f919069716b9de3826290f7b7f8992b1d07b00ed44f9dd40466a8849b->enter($__internal_7fe8522f919069716b9de3826290f7b7f8992b1d07b00ed44f9dd40466a8849b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        $__internal_1080ca3ee47b21783d4ee737bb37af2d4502d89f47754de8efa51e567b6dbce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1080ca3ee47b21783d4ee737bb37af2d4502d89f47754de8efa51e567b6dbce5->enter($__internal_1080ca3ee47b21783d4ee737bb37af2d4502d89f47754de8efa51e567b6dbce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if (((isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () { throw new Twig_Error_Runtime('Variable "enable" does not exist.', 4, $this->getSourceContext()); })()) &&  !(isset($context["async"]) || array_key_exists("async", $context) ? $context["async"] : (function () { throw new Twig_Error_Runtime('Variable "async" does not exist.', 4, $this->getSourceContext()); })()))) {
            // line 5
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_1080ca3ee47b21783d4ee737bb37af2d4502d89f47754de8efa51e567b6dbce5->leave($__internal_1080ca3ee47b21783d4ee737bb37af2d4502d89f47754de8efa51e567b6dbce5_prof);

        
        $__internal_7fe8522f919069716b9de3826290f7b7f8992b1d07b00ed44f9dd40466a8849b->leave($__internal_7fe8522f919069716b9de3826290f7b7f8992b1d07b00ed44f9dd40466a8849b_prof);

    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_002915c1756b17dc78dff24a0c28b4a471950adf8dbac630b004b4420b574796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002915c1756b17dc78dff24a0c28b4a471950adf8dbac630b004b4420b574796->enter($__internal_002915c1756b17dc78dff24a0c28b4a471950adf8dbac630b004b4420b574796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        $__internal_c1ff996073f359bcb917c361d44d326251a014a9180735baa2570e96612360ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ff996073f359bcb917c361d44d326251a014a9180735baa2570e96612360ae->enter($__internal_c1ff996073f359bcb917c361d44d326251a014a9180735baa2570e96612360ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        // line 10
        echo "    ";
        if (((isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () { throw new Twig_Error_Runtime('Variable "enable" does not exist.', 10, $this->getSourceContext()); })()) && (isset($context["async"]) || array_key_exists("async", $context) ? $context["async"] : (function () { throw new Twig_Error_Runtime('Variable "async" does not exist.', 10, $this->getSourceContext()); })()))) {
            // line 11
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_c1ff996073f359bcb917c361d44d326251a014a9180735baa2570e96612360ae->leave($__internal_c1ff996073f359bcb917c361d44d326251a014a9180735baa2570e96612360ae_prof);

        
        $__internal_002915c1756b17dc78dff24a0c28b4a471950adf8dbac630b004b4420b574796->leave($__internal_002915c1756b17dc78dff24a0c28b4a471950adf8dbac630b004b4420b574796_prof);

    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_1360caa54d1b47d0a00bb6a3417483e891df5ca66f581c1acdcfeae8820caf25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1360caa54d1b47d0a00bb6a3417483e891df5ca66f581c1acdcfeae8820caf25->enter($__internal_1360caa54d1b47d0a00bb6a3417483e891df5ca66f581c1acdcfeae8820caf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        $__internal_4db960c5f30dd2fec7769998e71c7a536f748c55ca5dfc93b045ed2e830f5753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db960c5f30dd2fec7769998e71c7a536f748c55ca5dfc93b045ed2e830f5753->enter($__internal_4db960c5f30dd2fec7769998e71c7a536f748c55ca5dfc93b045ed2e830f5753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        // line 16
        echo "    ";
        if ((isset($context["autoload"]) || array_key_exists("autoload", $context) ? $context["autoload"] : (function () { throw new Twig_Error_Runtime('Variable "autoload" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 18
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderBasePath((isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new Twig_Error_Runtime('Variable "base_path" does not exist.', 18, $this->getSourceContext()); })()));
            echo "\";
        </script>
        <script type=\"text/javascript\" src=\"";
            // line 20
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath((isset($context["js_path"]) || array_key_exists("js_path", $context) ? $context["js_path"] : (function () { throw new Twig_Error_Runtime('Variable "js_path" does not exist.', 20, $this->getSourceContext()); })()));
            echo "\"></script>
        ";
            // line 21
            if ((isset($context["jquery"]) || array_key_exists("jquery", $context) ? $context["jquery"] : (function () { throw new Twig_Error_Runtime('Variable "jquery" does not exist.', 21, $this->getSourceContext()); })())) {
                // line 22
                echo "            <script type=\"text/javascript\" src=\"";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath((isset($context["jquery_path"]) || array_key_exists("jquery_path", $context) ? $context["jquery_path"] : (function () { throw new Twig_Error_Runtime('Variable "jquery_path" does not exist.', 22, $this->getSourceContext()); })()));
                echo "\"></script>
        ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <script type=\"text/javascript\">
        ";
        // line 26
        if ((isset($context["jquery"]) || array_key_exists("jquery", $context) ? $context["jquery"] : (function () { throw new Twig_Error_Runtime('Variable "jquery" does not exist.', 26, $this->getSourceContext()); })())) {
            // line 27
            echo "            \$(function () {
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        if ((isset($context["require_js"]) || array_key_exists("require_js", $context) ? $context["require_js"] : (function () { throw new Twig_Error_Runtime('Variable "require_js" does not exist.', 30, $this->getSourceContext()); })())) {
            // line 31
            echo "            require(['ckeditor'], function() {
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 34, $this->getSourceContext()); })()));
        echo "

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new Twig_Error_Runtime('Variable "plugins" does not exist.', 36, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 37
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new Twig_Error_Runtime('Variable "styles" does not exist.', 40, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
            // line 41
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderStylesSet($context["style_name"], $context["style"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new Twig_Error_Runtime('Variable "templates" does not exist.', 44, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 45
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderTemplate($context["template_name"], $context["template"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('ckeditor_widget_extra', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 50, $this->getSourceContext()); })()), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 50, $this->getSourceContext()); })()), array("auto_inline" =>         // line 51
(isset($context["auto_inline"]) || array_key_exists("auto_inline", $context) ? $context["auto_inline"] : (function () { throw new Twig_Error_Runtime('Variable "auto_inline" does not exist.', 51, $this->getSourceContext()); })()), "inline" =>         // line 52
(isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 52, $this->getSourceContext()); })()), "input_sync" =>         // line 53
(isset($context["input_sync"]) || array_key_exists("input_sync", $context) ? $context["input_sync"] : (function () { throw new Twig_Error_Runtime('Variable "input_sync" does not exist.', 53, $this->getSourceContext()); })()), "filebrowsers" =>         // line 54
(isset($context["filebrowsers"]) || array_key_exists("filebrowsers", $context) ? $context["filebrowsers"] : (function () { throw new Twig_Error_Runtime('Variable "filebrowsers" does not exist.', 54, $this->getSourceContext()); })())));
        // line 55
        echo "

        ";
        // line 57
        if ((isset($context["require_js"]) || array_key_exists("require_js", $context) ? $context["require_js"] : (function () { throw new Twig_Error_Runtime('Variable "require_js" does not exist.', 57, $this->getSourceContext()); })())) {
            // line 58
            echo "            });
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ((isset($context["jquery"]) || array_key_exists("jquery", $context) ? $context["jquery"] : (function () { throw new Twig_Error_Runtime('Variable "jquery" does not exist.', 61, $this->getSourceContext()); })())) {
            // line 62
            echo "            });
        ";
        }
        // line 64
        echo "    </script>
";
        
        $__internal_4db960c5f30dd2fec7769998e71c7a536f748c55ca5dfc93b045ed2e830f5753->leave($__internal_4db960c5f30dd2fec7769998e71c7a536f748c55ca5dfc93b045ed2e830f5753_prof);

        
        $__internal_1360caa54d1b47d0a00bb6a3417483e891df5ca66f581c1acdcfeae8820caf25->leave($__internal_1360caa54d1b47d0a00bb6a3417483e891df5ca66f581c1acdcfeae8820caf25_prof);

    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = array())
    {
        $__internal_3c95d521f2107fb01058fd982c28463993734ef42b2363c2d6c96cd28f33e289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c95d521f2107fb01058fd982c28463993734ef42b2363c2d6c96cd28f33e289->enter($__internal_3c95d521f2107fb01058fd982c28463993734ef42b2363c2d6c96cd28f33e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        $__internal_6dd97c0ff88bd3495c1f4eaa0906048d3b369d8b5bc25931e30defc018059df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd97c0ff88bd3495c1f4eaa0906048d3b369d8b5bc25931e30defc018059df6->enter($__internal_6dd97c0ff88bd3495c1f4eaa0906048d3b369d8b5bc25931e30defc018059df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        
        $__internal_6dd97c0ff88bd3495c1f4eaa0906048d3b369d8b5bc25931e30defc018059df6->leave($__internal_6dd97c0ff88bd3495c1f4eaa0906048d3b369d8b5bc25931e30defc018059df6_prof);

        
        $__internal_3c95d521f2107fb01058fd982c28463993734ef42b2363c2d6c96cd28f33e289->leave($__internal_3c95d521f2107fb01058fd982c28463993734ef42b2363c2d6c96cd28f33e289_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 48,  247 => 64,  243 => 62,  241 => 61,  238 => 60,  234 => 58,  232 => 57,  228 => 55,  226 => 54,  225 => 53,  224 => 52,  223 => 51,  222 => 50,  219 => 49,  217 => 48,  214 => 47,  205 => 45,  201 => 44,  198 => 43,  189 => 41,  185 => 40,  182 => 39,  173 => 37,  169 => 36,  164 => 34,  161 => 33,  157 => 31,  155 => 30,  152 => 29,  148 => 27,  146 => 26,  143 => 25,  140 => 24,  134 => 22,  132 => 21,  128 => 20,  123 => 18,  120 => 17,  117 => 16,  108 => 15,  94 => 11,  91 => 10,  82 => 9,  68 => 5,  66 => 4,  58 => 2,  49 => 1,  39 => 15,  36 => 14,  34 => 9,  31 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ckeditor_widget %}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

    {% if enable and not async %}
        {{ block('_ckeditor_javascript') }}
    {% endif %}
{% endblock %}

{% block ckeditor_javascript %}
    {% if enable and async %}
        {{ block('_ckeditor_javascript') }}
    {% endif %}
{% endblock %}

{% block _ckeditor_javascript %}
    {% if autoload %}
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"{{ ckeditor_base_path(base_path) }}\";
        </script>
        <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(js_path) }}\"></script>
        {% if jquery %}
            <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(jquery_path) }}\"></script>
        {% endif %}
    {% endif %}
    <script type=\"text/javascript\">
        {% if jquery %}
            \$(function () {
        {% endif %}

        {% if require_js %}
            require(['ckeditor'], function() {
        {% endif %}

        {{ ckeditor_destroy(id) }}

        {% for plugin_name, plugin in plugins %}
            {{ ckeditor_plugin(plugin_name, plugin) }}
        {% endfor %}

        {% for style_name, style in styles %}
            {{ ckeditor_styles_set(style_name, style) }}
        {% endfor %}

        {% for template_name, template in templates %}
            {{ ckeditor_template(template_name, template) }}
        {% endfor %}

        {% block ckeditor_widget_extra %}{% endblock ckeditor_widget_extra %}

        {{ ckeditor_widget(id, config, {
            auto_inline: auto_inline,
            inline: inline,
            input_sync: input_sync,
            filebrowsers: filebrowsers
        }) }}

        {% if require_js %}
            });
        {% endif %}

        {% if jquery %}
            });
        {% endif %}
    </script>
{% endblock %}
", "@IvoryCKEditor/Form/ckeditor_widget.html.twig", "/Users/aydemphia/Desktop/cours/3A/symfony/projet_symfony/projet_symphony/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
