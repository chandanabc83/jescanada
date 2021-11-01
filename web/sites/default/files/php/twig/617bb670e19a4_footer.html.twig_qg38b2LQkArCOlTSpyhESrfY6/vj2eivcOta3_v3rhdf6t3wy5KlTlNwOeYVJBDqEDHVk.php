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

/* @jescanada/includes/footer.html.twig */
class __TwigTemplate_c130a2d950d036620b4e4e49fbaf76cc30f8dbd7da1e260b156171ad3a1e138f extends \Twig\Template
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

<footer id=\"footer-section\">
  ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_with_bgcolor", [], "any", false, false, true, 12)) {
            // line 13
            echo "    <div class=\"footer-top-with-bgcolor container-fluid\">
      <div class=\"container\">";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_with_bgcolor", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</div>
    </div>
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_with_bgmap", [], "any", false, false, true, 18)) {
            // line 19
            echo "    <div class=\"footer-top-with-bgmap container-fluid\">
      <div class=\"container\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_with_bgmap", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</div>
    </div>
  ";
        }
        // line 23
        echo "
  <section class=\"footer-main-top container-fluid\">
    <div class=\"row\">      
      ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_column_first", [], "any", false, false, true, 26)) {
            // line 27
            echo "        <div class=\"footer-main-column-1 col-sm-3\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_column_first", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 29
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_column_second", [], "any", false, false, true, 29)) {
            // line 30
            echo "        <div class=\"footer-main-column-2 col-sm-5\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_column_second", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 32
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_column_third", [], "any", false, false, true, 32)) {
            // line 33
            echo "        <div class=\"footer-main-column-3 col-sm-2\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_column_third", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 35
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_column_fourth", [], "any", false, false, true, 35)) {
            // line 36
            echo "        <div class=\"footer-main-column-4 col-sm-2\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_column_fourth", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 37
        echo "  
    </div>    
  </section> 

  <section class=\"footer-main-bottom container-fluid\">
    <div class=\"row\">
      ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 43)) {
            // line 44
            echo "        <div class=\"footer-bottom-left col-sm-6\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 46
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 46)) {
            // line 47
            echo "        <div class=\"footer-bottom-right col-sm-6\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 49
        echo "    </div>
  </section>

</footer>";
    }

    public function getTemplateName()
    {
        return "@jescanada/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 49,  128 => 47,  125 => 46,  119 => 44,  117 => 43,  109 => 37,  103 => 36,  100 => 35,  94 => 33,  91 => 32,  85 => 30,  82 => 29,  76 => 27,  74 => 26,  69 => 23,  63 => 20,  60 => 19,  58 => 18,  55 => 17,  49 => 14,  46 => 13,  44 => 12,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@jescanada/includes/footer.html.twig", "/var/www/html/drupal/web/themes/custom/jescanada/templates/includes/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array("escape" => 14);
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
