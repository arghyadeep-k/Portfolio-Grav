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

/* modular/call.html.twig */
class __TwigTemplate_e6a0d4a455992994c6fcd2e6d74b4c0cfff66da16f6180d5f0639f1a45c30f86 extends \Twig\Template
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
        echo "<section id=\"call-to-action\">
  <div class=\"row\">
    <div class=\"two columns header-col\">
      <h1><span>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</span></h1>
    </div>
    <div class=\"seven columns\">
      ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>
    <div class=\"three columns action\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 11
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "url", []), "html", null, true);
            echo "\" class=\"button\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "text", []), "html", null, true);
            echo "</a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/call.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  51 => 11,  47 => 10,  41 => 7,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"call-to-action\">
  <div class=\"row\">
    <div class=\"two columns header-col\">
      <h1><span>{{ page.header.title }}</span></h1>
    </div>
    <div class=\"seven columns\">
      {{ page.content|raw }}
    </div>
    <div class=\"three columns action\">
      {% for button in page.header.buttons %}
      <a href=\"{{ button.url }}\" class=\"button\">{{ button.text }}</a>
      {% endfor %}
    </div>
  </div>
</section>
", "modular/call.html.twig", "/home/arghya/Documents/Code/Portfolio-Grav/user/themes/ceevee/templates/modular/call.html.twig");
    }
}
