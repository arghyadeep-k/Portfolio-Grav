<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_36f3559a8b60ac9b32adb7efb6d044b7d608b69501f5a9607e726862a1cc3418 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["html_lang"] = (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        // line 3
        echo "<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["html_lang"] ?? null), "html", null, true);
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "    </head>
    <body>
        ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 39
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "        
        ";
        // line 51
        $this->displayBlock('bottom', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
        ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />

         ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://js/modernizr.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 23
        $this->displayBlock('assets', $context, $blocks);
        // line 27
        echo "        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/default.css"], "method");
        // line 16
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/layout.css"], "method");
        // line 17
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/media-queries.css"], "method");
        // line 18
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/magnific-popup.css"], "method");
        // line 19
        echo "        ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 23
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 24
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 25
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 30
    public function block_header($context, array $blocks = [])
    {
        // line 31
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 31)->display($context);
        // line 32
        echo "        ";
    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        // line 34
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "        ";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
    }

    // line 36
    public function block_footer($context, array $blocks = [])
    {
        // line 37
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 37)->display($context);
        // line 38
        echo "        ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 41
        echo "            <script>window.jQuery || document.write('<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
            <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 43
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.flexslider.js"], "method");
        // line 44
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/waypoints.js"], "method");
        // line 45
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.fittext.js"], "method");
        // line 46
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/magnific-popup.js"], "method");
        // line 47
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/init.js"], "method");
        // line 48
        echo "            ";
        $this->loadTemplate("partials/twFetcher.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "        ";
    }

    // line 51
    public function block_bottom($context, array $blocks = [])
    {
        // line 52
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
            ";
        // line 53
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 53,  241 => 52,  238 => 51,  234 => 49,  231 => 48,  228 => 47,  225 => 46,  222 => 45,  219 => 44,  217 => 43,  213 => 42,  208 => 41,  205 => 40,  202 => 39,  198 => 38,  195 => 37,  192 => 36,  187 => 34,  183 => 35,  180 => 34,  177 => 33,  173 => 32,  170 => 31,  167 => 30,  160 => 25,  155 => 24,  152 => 23,  143 => 19,  140 => 18,  137 => 17,  134 => 16,  131 => 15,  128 => 14,  124 => 27,  122 => 23,  117 => 21,  114 => 20,  112 => 14,  107 => 12,  104 => 11,  102 => 10,  94 => 9,  91 => 8,  88 => 7,  81 => 55,  79 => 51,  76 => 50,  73 => 39,  70 => 36,  67 => 33,  65 => 30,  61 => 28,  59 => 7,  54 => 5,  50 => 4,  45 => 3,  43 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{% set html_lang = grav.language.getActive ?: grav.config.site.default_lang %}
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ html_lang }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />

         {% block stylesheets %}
                {% do assets.addCss('theme://css/default.css') %}
                {% do assets.addCss('theme://css/layout.css') %}
                {% do assets.addCss('theme://css/media-queries.css') %}
                {% do assets.addCss('theme://css/magnific-popup.css') %}
        {% endblock %}

        <script src=\"{{ url('theme://js/modernizr.js') }}\"></script>

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}
        {% endblock head%}
    </head>
    <body>
        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}
        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}
        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}
        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            <script>window.jQuery || document.write('<script src=\"{{ url('theme://js/jquery-1.10.2.min.js') }}\"><\\/script>')</script>
            <script type=\"text/javascript\" src=\"{{ url('theme://js/jquery-migrate-1.2.1.min.js') }}\"></script>
            {% do assets.addJs('theme://js/jquery.flexslider.js') %}
            {% do assets.addJs('theme://js/waypoints.js') %}
            {% do assets.addJs('theme://js/jquery.fittext.js') %}
            {% do assets.addJs('theme://js/magnific-popup.js') %}
            {% do assets.addJs('theme://js/init.js') %}
            {% include 'partials/twFetcher.html.twig' %}
        {% endblock %}
        
        {% block bottom %}
            {{ assets.js()|raw }}
            {{ assets.js('bottom')|raw }}
        {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "/home/arghya/Documents/Code/Portfolio-Grav/user/themes/ceevee/templates/partials/base.html.twig");
    }
    private $deferred;
}
