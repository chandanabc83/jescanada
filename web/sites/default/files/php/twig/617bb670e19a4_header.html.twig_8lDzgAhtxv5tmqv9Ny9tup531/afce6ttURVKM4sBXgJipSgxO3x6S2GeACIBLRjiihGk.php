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

/* @jescanada/includes/header.html.twig */
class __TwigTemplate_8eb966f13a841d80c48654ab9a65fbbc1c0436f66cb63dc60b1fb156075f43d0 extends \Twig\Template
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
        // line 9
        echo "
<header id=\"header-section\">

  <section class=\"header-main container-fluid\"> 
    <div class=\"row\">      
      ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 14)) {
            // line 15
            echo "        <div class=\"header-left col-sm-2\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_left", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 17
        echo "
      <div class=\"header-right col-sm-10\">
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right_top", [], "any", false, false, true, 19)) {
            // line 20
            echo "          <div class=\"header-right-top\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right_top", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 22
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right_bottom", [], "any", false, false, true, 22)) {
            // line 23
            echo "          <div class=\"header-right-bottom\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right_bottom", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 24
        echo "  
      </div>  
    </div>      
  </section>
  
</header>";
    }

    public function getTemplateName()
    {
        return "@jescanada/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  69 => 23,  66 => 22,  60 => 20,  58 => 19,  54 => 17,  48 => 15,  46 => 14,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@jescanada/includes/header.html.twig", "/var/www/html/drupal/web/themes/custom/jescanada/templates/includes/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
