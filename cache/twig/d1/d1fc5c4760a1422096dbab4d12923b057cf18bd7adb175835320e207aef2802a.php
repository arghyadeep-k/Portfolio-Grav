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

/* modular/form.html.twig */
class __TwigTemplate_9d6acf215893ecc5755cb444325fe5bbf3e6a168686c85e846045f8d0c901c94 extends \Twig\Template
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
        echo "<section id=\"contact\">
    <div class=\"row section-head\">
        <div class=\"two columns header-col\">
            <h1><span>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</span></h1>
        </div>
        <div class=\"ten columns\">
            <p class=\"lead\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lead", []), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"eight columns\">
            ";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            ";
        // line 13
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 13)->display($context);
        // line 14
        echo "        </div>
        <aside class=\"four columns footer-widgets\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "widgets", []));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 17
            echo "            <div class=\"widget widget_contact\">
                <h4>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "title", []), "html", null, true);
            echo "</h4>
                <p class=\"address\">
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "content", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "line", []), "html", null, true);
                echo " <br />
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            <div class=\"widget widget_tweets\">
                <h4 class=\"widget-title\">Latest Tweets</h4>
                <div id=\"tw-widget1\">
                </div>
            </div>
        </aside>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 26,  84 => 23,  75 => 21,  71 => 20,  66 => 18,  63 => 17,  59 => 16,  55 => 14,  53 => 13,  49 => 12,  41 => 7,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact\">
    <div class=\"row section-head\">
        <div class=\"two columns header-col\">
            <h1><span>{{ page.header.title }}</span></h1>
        </div>
        <div class=\"ten columns\">
            <p class=\"lead\">{{ page.header.lead }}</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"eight columns\">
            {{ page.content|raw }}
            {% include \"forms/form.html.twig\" %}
        </div>
        <aside class=\"four columns footer-widgets\">
            {% for widget in page.header.widgets %}
            <div class=\"widget widget_contact\">
                <h4>{{ widget.title }}</h4>
                <p class=\"address\">
                    {% for item in widget.content %}
                    {{ item.line }} <br />
                    {% endfor %}
                </p>
            </div>
            {% endfor %}
            <div class=\"widget widget_tweets\">
                <h4 class=\"widget-title\">Latest Tweets</h4>
                <div id=\"tw-widget1\">
                </div>
            </div>
        </aside>
    </div>
</section>
", "modular/form.html.twig", "/home/arghya/Documents/Code/Portfolio-Grav/user/themes/ceevee/templates/modular/form.html.twig");
    }
}
