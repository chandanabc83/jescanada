<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/jescanada/templates/page/page--front.html.twig */
class __TwigTemplate_3fec04d99bd4fec01813d51eeb6adad9c9fcb1fd86f5fa86eb54dbad03bd0ff8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "
";
        // line 46
        $this->loadTemplate("@jescanada/includes/header.html.twig", "themes/custom/jescanada/templates/page/page--front.html.twig", 46)->display($context);
        // line 47
        echo "\t<div class=\"intersection-corner-left\">
\t\t";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "frontpage_banner", [], "any", false, false, true, 48)) {
            // line 49
            echo "\t\t\t<section class=\"frontpage-banner container-fluid\">
\t\t\t\t";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "frontpage_banner", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
\t\t\t</section>
\t\t";
        }
        // line 53
        echo "
\t\t";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "frontpage_banner_bottom_quadrants", [], "any", false, false, true, 54)) {
            // line 55
            echo "\t\t\t<section class=\"frontpage-banner-bottom-quadrants container-fluid\">
\t\t\t\t<div class=\"container\">";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "frontpage_banner_bottom_quadrants", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "</div>
\t\t\t</section>
\t\t";
        }
        // line 59
        echo "\t\t<div class=\"intersection-corner\"></div>
\t</div>
";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featurette_6_6", [], "any", false, false, true, 61)) {
            // line 62
            echo "\t<section class=\"featurette-6-6 container-fluid\">
\t\t";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featurette_6_6", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
\t\t<div class=\"featurette-6-6-bottom-shadow\"></div>
\t</section>
";
        }
        // line 67
        echo "
";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_projects", [], "any", false, false, true, 68)) {
            // line 69
            echo "\t<section class=\"featured-projects container-fluid\">
\t\t<div class=\"container\">";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_projects", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "</div>
\t</section>
";
        }
        // line 73
        echo "
<div id=\"maindiv\" class=\"container\">
\t<main id=\"midcontent-area\" class=\"column main-content\">
\t\t<div id=\"content\">";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "</div>
\t</main>
</div>

";
        // line 80
        $this->loadTemplate("@jescanada/includes/footer.html.twig", "themes/custom/jescanada/templates/page/page--front.html.twig", 80)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/jescanada/templates/page/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 80,  107 => 76,  102 => 73,  96 => 70,  93 => 69,  91 => 68,  88 => 67,  81 => 63,  78 => 62,  76 => 61,  72 => 59,  66 => 56,  63 => 55,  61 => 54,  58 => 53,  52 => 50,  49 => 49,  47 => 48,  44 => 47,  42 => 46,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/jescanada/templates/page/page--front.html.twig", "/var/www/html/drupal/web/themes/custom/jescanada/templates/page/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 46, "if" => 48);
        static $filters = array("escape" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
