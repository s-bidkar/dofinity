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

/* themes/restaurant_zymphonies_theme/templates/field/field--comment.html.twig */
class __TwigTemplate_407b81fa96bdc84fcc379fd49dabad5e5b618f357cb042791a0156c1d1ea403d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29, "if" => 44];
        $filters = ["clean_class" => 31, "t" => 53];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 't'],
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
        // line 29
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 31
(isset($context["field_name"]) ? $context["field_name"] : null)))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
(isset($context["field_type"]) ? $context["field_type"] : null)))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 33
(isset($context["label_display"]) ? $context["label_display"] : null))), 4 => "comment-wrapper"];
        // line 38
        $context["title_classes"] = [0 => "title", 1 => (((        // line 40
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 43
        echo "<section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", [0 => (isset($context["classes"]) ? $context["classes"] : null)], "method")), "html", null, true);
        echo ">
  ";
        // line 44
        if (((isset($context["comments"]) ? $context["comments"] : null) &&  !(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 45
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_prefix"]) ? $context["title_prefix"] : null)), "html", null, true);
            echo "
    <h2";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", [0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
            echo "</h2>
    ";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_suffix"]) ? $context["title_suffix"] : null)), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["comments"]) ? $context["comments"] : null)), "html", null, true);
        echo "

  ";
        // line 52
        if ((isset($context["comment_form"]) ? $context["comment_form"] : null)) {
            // line 53
            echo "    <h2 class=\"title comment-form__title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Add new comment"));
            echo "</h2>
    ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["comment_form"]) ? $context["comment_form"] : null)), "html", null, true);
            echo "
  ";
        }
        // line 56
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/restaurant_zymphonies_theme/templates/field/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 56,  101 => 54,  96 => 53,  94 => 52,  89 => 50,  86 => 49,  81 => 47,  75 => 46,  70 => 45,  68 => 44,  63 => 43,  61 => 40,  60 => 38,  58 => 33,  57 => 32,  56 => 31,  55 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/restaurant_zymphonies_theme/templates/field/field--comment.html.twig", "C:\\wamp64\\www\\dofinity\\themes\\restaurant_zymphonies_theme\\templates\\field\\field--comment.html.twig");
    }
}
