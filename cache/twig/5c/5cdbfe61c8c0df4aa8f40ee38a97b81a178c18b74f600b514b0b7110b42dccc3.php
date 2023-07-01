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

/* modular/about.html.twig */
class __TwigTemplate_1d00e3949816a991dd1c3e53ce71a452b04f7e70451cd5b64a91ed23ed0cc739 extends \Twig\Template
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
        echo "<section id=\"about\">
    <div class=\"row\">
        <div class=\"three columns\">
            <img class=\"profile-pic\"  src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), "profilepic.jpg", [], "array"), "url", []), "html", null, true);
        echo "\" alt=\"\" />
        </div>

        <div class=\"nine columns main-col\">
            ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            <div class=\"row\">
                <div class=\"columns contact-details\">
                    ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) {
            // line 12
            echo "                    <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title2", []), "html", null, true);
            echo "</h2>
                    ";
        }
        // line 14
        echo "                    <p class=\"address\">
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "line", []), "html", null, true);
            echo " <br />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "email", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                        ";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->safeEmailFilter($this->getAttribute($context["item"], "address", []));
            echo " <br />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </p>
                </div>
                ";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", [])) {
            // line 24
            echo "                <div class=\"columns download\">
                    <p>
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 27
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "url", []), "html", null, true);
                echo "\" class=\"button\"><i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "icon", []), "html", null, true);
                echo "\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "text", []), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </p>
                </div>
                ";
        }
        // line 32
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  113 => 29,  100 => 27,  96 => 26,  92 => 24,  90 => 23,  86 => 21,  77 => 19,  72 => 18,  63 => 16,  59 => 15,  56 => 14,  50 => 12,  48 => 11,  42 => 8,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about\">
    <div class=\"row\">
        <div class=\"three columns\">
            <img class=\"profile-pic\"  src=\"{{ page.media.images['profilepic.jpg'].url }}\" alt=\"\" />
        </div>

        <div class=\"nine columns main-col\">
            {{ page.content|raw }}
            <div class=\"row\">
                <div class=\"columns contact-details\">
                    {% if page.header.address %}
                    <h2>{{ page.header.title2 }}</h2>
                    {% endif %}
                    <p class=\"address\">
                        {% for item in page.header.address %}
                        {{ item.line }} <br />
                        {% endfor %}
                        {% for item in page.header.email %}
                        {{ item.address|safe_email }} <br />
                        {% endfor %}
                    </p>
                </div>
                {% if page.header.buttons %}
                <div class=\"columns download\">
                    <p>
                        {% for button in page.header.buttons %}
                            <a href=\"{{ button.url }}\" class=\"button\"><i class=\"fa fa-{{ button.icon }}\"></i>{{ button.text }}</a>
                        {% endfor %}
                    </p>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</section>
", "modular/about.html.twig", "/home/arghya/Documents/Code/Portfolio-Grav/user/themes/ceevee/templates/modular/about.html.twig");
    }
}
