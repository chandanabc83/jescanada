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

/* __string_template__99403d5054e49fef66b27f7d88ae26afc60c98889e7747b1687f0115b4d7e7f8 */
class __TwigTemplate_5a9e4bd95ff2cb494fd55bfe2d94bb10676625e62540993b4b4e040b5d22896b extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_upload_project_theme_image"] ?? null), 3, $this->source), "html", null, true);
        echo "</div>\t\t\t\t\t
\t<div class=\"content-section col-sm-6\">\t\t\t\t\t\t\t
\t\t<div class=\"title-section\"><h3>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 5, $this->source), "html", null, true);
        echo "</h3></div>\t\t\t\t\t\t
\t\t<div class=\"short-description-section\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_summary"] ?? null), 6, $this->source), "html", null, true);
        echo "</div>\t\t\t\t\t
\t\t<div class=\"cta-button-section btn btn-primary\">Read More</div>
    </div>
</div>\t\t\t\t\t\t
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__99403d5054e49fef66b27f7d88ae26afc60c98889e7747b1687f0115b4d7e7f8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  48 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__99403d5054e49fef66b27f7d88ae26afc60c98889e7747b1687f0115b4d7e7f8", "");
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
