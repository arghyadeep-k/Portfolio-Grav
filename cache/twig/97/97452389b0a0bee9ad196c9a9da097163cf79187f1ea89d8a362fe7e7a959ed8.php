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

/* modular/portfolio.html.twig */
class __TwigTemplate_07c391dc6c6521a24da4edc0335cc92fde29d5fac6127557baa3220c812daf7b extends \Twig\Template
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
        echo "<section id=\"portfolio\">
    <div class=\"row\">
        <div class=\"twelve columns collapsed\">
            ";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            <div id=\"portfolio-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                <div class=\"columns portfolio-item\">
                    <div class=\"item-wrap\">
                        <a href=\"#modal-";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\" title=\"\">
                            ";
            // line 10
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "img", []), [], "array"), "cropZoom", [0 => 215, 1 => 215], "method"), "html", [], "method");
            echo "
                            <div class=\"overlay\">
                                <div class=\"portfolio-item-meta\">
                                    <h5>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
            echo "</h5>
                                    <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", []), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                            <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                        </a>
                    </div>
                </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
        </div>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "        <div id=\"modal-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\" class=\"popup-modal mfp-hide\">
            <img class=\"scale-with-grid\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "img", []), [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"\" />
            <div class=\"description-box\">
                <h4>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
            echo "</h4>
                <p>";
            // line 29
            echo $this->getAttribute($context["item"], "content", []);
            echo ".</p>
                <span class=\"categories\"><i class=\"fa fa-tag\"></i>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tags", []), "html", null, true);
            echo "</span>
            </div>
            <div class=\"link-box\">
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "details", []), "html", null, true);
            echo "\">Details</a>
                <a class=\"popup-modal-dismiss\">Close</a>
            </div>
        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 38,  142 => 33,  136 => 30,  132 => 29,  128 => 28,  123 => 26,  118 => 25,  101 => 24,  97 => 22,  75 => 14,  71 => 13,  65 => 10,  61 => 9,  57 => 7,  40 => 6,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"portfolio\">
    <div class=\"row\">
        <div class=\"twelve columns collapsed\">
            {{ page.content|raw }}
            <div id=\"portfolio-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
                {% for item in page.header.portfolio %}
                <div class=\"columns portfolio-item\">
                    <div class=\"item-wrap\">
                        <a href=\"#modal-{{ loop.index }}\" title=\"\">
                            {{ page.media[item.img].cropZoom(215, 215).html()|raw }}
                            <div class=\"overlay\">
                                <div class=\"portfolio-item-meta\">
                                    <h5>{{ item.title }}</h5>
                                    <p>{{ item.description }}</p>
                                </div>
                            </div>
                            <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
        {% for item in page.header.portfolio %}
        <div id=\"modal-{{ loop.index }}\" class=\"popup-modal mfp-hide\">
            <img class=\"scale-with-grid\" src=\"{{ page.media[item.img].url }}\" alt=\"\" />
            <div class=\"description-box\">
                <h4>{{ item.title }}</h4>
                <p>{{ item.content|raw }}.</p>
                <span class=\"categories\"><i class=\"fa fa-tag\"></i>{{ item.tags }}</span>
            </div>
            <div class=\"link-box\">
                <a href=\"{{ item.details }}\">Details</a>
                <a class=\"popup-modal-dismiss\">Close</a>
            </div>
        </div>
        {% endfor %}
    </div>
</section>
", "modular/portfolio.html.twig", "/home/arghya/Documents/Code/Portfolio-Grav/user/themes/ceevee/templates/modular/portfolio.html.twig");
    }
}
