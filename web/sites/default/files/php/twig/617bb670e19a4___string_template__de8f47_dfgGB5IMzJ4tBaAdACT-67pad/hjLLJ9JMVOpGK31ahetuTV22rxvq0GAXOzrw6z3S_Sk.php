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

/* __string_template__de8f472cb0e5009896de538889b94e56017357ee5bffc476c8a23aa037995636 */
class __TwigTemplate_f732030f1bd0639e8f58ce791b63a0870b23ee51d9193024eee5363e3c00f01d extends \Twig\Template
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
        // line 1
        echo "<div id=\"image-heading-text-button container-fluid\">
   <div class=\"row\">
\t<div class=\"image-section col-sm-6\">";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_upload_image"] ?? null), 3, $this->source), "html", null, true);
        echo "</div>\t\t\t\t\t
\t<div class=\"content-section col-sm-6\">\t\t\t\t\t\t
\t\t<div class=\"heading-section\"><b>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_heading"] ?? null), 5, $this->source), "html", null, true);
        echo "</b></div>\t\t\t\t\t\t\t
\t\t<div class=\"title-section\"><h3>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_title"] ?? null), 6, $this->source), "html", null, true);
        echo "</h3></div>\t\t\t\t\t\t
\t\t<div class=\"short-description-section\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_short_description"] ?? null), 7, $this->source), "html", null, true);
        echo "</div>\t\t\t\t\t
\t\t<div class=\"cta-button-section btn btn-primary\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_cta_button"] ?? null), 8, $this->source), "html", null, true);
        echo "</div>
    </div>
</div>\t\t\t\t\t\t
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__de8f472cb0e5009896de538889b94e56017357ee5bffc476c8a23aa037995636";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  56 => 7,  52 => 6,  48 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__de8f472cb0e5009896de538889b94e56017357ee5bffc476c8a23aa037995636", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
