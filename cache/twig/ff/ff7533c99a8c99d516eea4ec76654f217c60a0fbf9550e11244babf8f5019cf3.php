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

/* modular/testimonials.html.twig */
class __TwigTemplate_23f86c5dace91696a6376550049b85a95998a6875df9526519a50ba5077b5239 extends \Twig\Template
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
        echo "<section id=\"testimonials\">
    <div class=\"text-container\">
        <div class=\"row\">
            <div class=\"two columns header-col\">
                <h1><span>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</span></h1>
            </div>
            ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            <div class=\"ten columns flex-container\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "testimonials", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "                        <li>
                            <blockquote>
                                <p>";
            // line 14
            echo $this->getAttribute($context["item"], "content", []);
            echo "</p>
                                <cite>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", []), "html", null, true);
            echo "</cite>
                            </blockquote>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  60 => 15,  56 => 14,  52 => 12,  48 => 11,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"testimonials\">
    <div class=\"text-container\">
        <div class=\"row\">
            <div class=\"two columns header-col\">
                <h1><span>{{ page.header.title }}</span></h1>
            </div>
            {{ page.content|raw }}
            <div class=\"ten columns flex-container\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        {% for item in page.header.testimonials %}
                        <li>
                            <blockquote>
                                <p>{{ item.content|raw }}</p>
                                <cite>{{ item.author }}</cite>
                            </blockquote>
                        </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
", "modular/testimonials.html.twig", "/home/arghya/Documents/Code/Portfolio-Grav/user/themes/ceevee/templates/modular/testimonials.html.twig");
    }
}
