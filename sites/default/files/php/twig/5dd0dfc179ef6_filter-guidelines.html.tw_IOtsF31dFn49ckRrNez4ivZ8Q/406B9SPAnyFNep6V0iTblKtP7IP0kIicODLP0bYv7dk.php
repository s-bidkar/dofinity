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

/* themes/restaurant_zymphonies_theme/templates/content-edit/filter-guidelines.html.twig */
class __TwigTemplate_93b04c4cdc950128403c15cbf4eb691785c8352fe6d27310fbbfaaa7cf6c820a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 21];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 21
        $context["classes"] = [0 => "filter-guidelines-item", 1 => ("filter-guidelines-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 23
(isset($context["format"]) ? $context["format"] : null), "id", [])))];
        // line 26
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", [0 => (isset($context["classes"]) ? $context["classes"] : null)], "method")), "html", null, true);
        echo ">
  <h4 class=\"label\">";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["format"]) ? $context["format"] : null), "label", [])), "html", null, true);
        echo "</h4>
  ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["tips"]) ? $context["tips"] : null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/restaurant_zymphonies_theme/templates/content-edit/filter-guidelines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 28,  63 => 27,  58 => 26,  56 => 23,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/restaurant_zymphonies_theme/templates/content-edit/filter-guidelines.html.twig", "C:\\wamp64\\www\\dofinity\\themes\\restaurant_zymphonies_theme\\templates\\content-edit\\filter-guidelines.html.twig");
    }
}
