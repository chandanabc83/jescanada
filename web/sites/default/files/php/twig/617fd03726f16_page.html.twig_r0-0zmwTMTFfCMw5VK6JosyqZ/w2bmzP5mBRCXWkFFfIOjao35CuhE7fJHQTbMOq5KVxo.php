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

/* themes/custom/jescanada/templates/page/page.html.twig */
class __TwigTemplate_f6b450fdeb10e8d3d9e95f63992e856e0817cc3e55eaebe292278eb1b1bbb443 extends \Twig\Template
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
        $this->loadTemplate("@jescanada/includes/header.html.twig", "themes/custom/jescanada/templates/page/page.html.twig", 46)->display($context);
        // line 47
        echo "    <div class=\"corner-main\">
\t\t<div id=\"maindiv\" class=\"container\">\t\t\t
\t\t\t<div class=\"breadcrumb-section\">";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</div>
\t\t\t<h1 class=\"page-header\">";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "</h1>\t\t\t
\t\t\t<main id=\"midcontent-area\" class=\"column main-content\">
\t\t\t\t<div id=\"content\">";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "</div>
\t\t\t</main>\t\t\t
\t\t</div>
\t</div>
    ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 56)) {
            // line 57
            echo "        <div id=\"content-top-with-bgcolor\" class=\"container-fluid\">
            ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_middle", [], "any", false, false, true, 62)) {
            // line 63
            echo "        <div class=\"content-middle-with-bgcolor container\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_middle", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 65
        echo "
    ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 66)) {
            // line 67
            echo "        <div id=\"content-bottom-with-bgcolor\" class=\"container-fluid\">
            <div class=\"container\">";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "</div>
        </div>
    ";
        }
        // line 71
        echo "    
    <div class=\"footer-with-bgcolor-shadow-main container-fluid\">
        <div class=\"footer-top-with-bgcolor-shadow\"></div> 
    </div>

";
        // line 76
        $this->loadTemplate("@jescanada/includes/footer.html.twig", "themes/custom/jescanada/templates/page/page.html.twig", 76)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/jescanada/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 76,  100 => 71,  94 => 68,  91 => 67,  89 => 66,  86 => 65,  80 => 63,  78 => 62,  75 => 61,  69 => 58,  66 => 57,  64 => 56,  57 => 52,  52 => 50,  48 => 49,  44 => 47,  42 => 46,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/jescanada/templates/page/page.html.twig", "/var/www/html/drupal/web/themes/custom/jescanada/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 46, "if" => 56);
        static $filters = array("escape" => 49);
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
