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

/* modular/resume.html.twig */
class __TwigTemplate_14101ca91979bf8a8c7cd1460efc66484cf28a81eab33d3e02e699ea363fbb07 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"resume\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sections", []));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 3
            echo "    <div class=\"row ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "css_class", []), "html", null, true);
            echo "\">
        <div class=\"three columns header-col\">
            <h1><span>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "title", []), "html", null, true);
            echo "</span></h1>
        </div>
        <div class=\"nine columns main-col\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "            <div class=\"row item\">
                <div class=\"twelve columns\">
                    ";
                // line 11
                if ($this->getAttribute($context["item"], "title", [])) {
                    // line 12
                    echo "                    <h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                    echo "</h3>
                    ";
                }
                // line 14
                echo "                    ";
                if (($this->getAttribute($context["item"], "info", []) || $this->getAttribute($context["item"], "date", []))) {
                    // line 15
                    echo "                    <p class=\"info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "info", []), "html", null, true);
                    echo " <span>&bull;</span> <em class=\"date\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "date", []), "html", null, true);
                    echo "</em></p>
                    ";
                }
                // line 17
                echo "                    <p>
                        ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", []), "html", null, true);
                echo "
                    </p>

                    ";
                // line 21
                if ($this->getAttribute($context["item"], "skills", [])) {
                    // line 22
                    echo "                    <div class=\"bars\">
                        <ul class=\"skills\">
                            ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "skills", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                        // line 25
                        echo "                            <li><span class=\"bar-expand\" style=\"width: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "level", []), "html", null, true);
                        echo "%;animation: ";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["skill"], "name", [])), "html", null, true);
                        echo " 2s ease;\"></span><em>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "name", []), "html", null, true);
                        echo "</em></li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                        </ul>
                    </div>
                    ";
                }
                // line 30
                echo "
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "modular/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  122 => 34,  113 => 30,  108 => 27,  95 => 25,  91 => 24,  87 => 22,  85 => 21,  79 => 18,  76 => 17,  68 => 15,  65 => 14,  59 => 12,  57 => 11,  53 => 9,  49 => 8,  43 => 5,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"resume\">
    {% for section in page.header.sections %}
    <div class=\"row {{ section.css_class }}\">
        <div class=\"three columns header-col\">
            <h1><span>{{ section.title }}</span></h1>
        </div>
        <div class=\"nine columns main-col\">
            {% for item in section.items %}
            <div class=\"row item\">
                <div class=\"twelve columns\">
                    {% if item.title %}
                    <h3>{{ item.title }}</h3>
                    {% endif %}
                    {% if item.info or item.date %}
                    <p class=\"info\">{{ item.info }} <span>&bull;</span> <em class=\"date\">{{ item.date }}</em></p>
                    {% endif %}
                    <p>
                        {{ item.description }}
                    </p>

                    {% if item.skills %}
                    <div class=\"bars\">
                        <ul class=\"skills\">
                            {% for skill in item.skills %}
                            <li><span class=\"bar-expand\" style=\"width: {{ skill.level }}%;animation: {{ skill.name|lower }} 2s ease;\"></span><em>{{ skill.name }}</em></li>
                            {% endfor %}
                        </ul>
                    </div>
                    {% endif %}

                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% endfor %}
</section>
", "modular/resume.html.twig", "/home/arghya/Documents/Code/Portfolio-Grav/user/themes/ceevee/templates/modular/resume.html.twig");
    }
}
