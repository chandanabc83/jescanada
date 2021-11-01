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

/* themes/custom/jescanada/templates/block/block--bundle--front_page_banner.html.twig */
class __TwigTemplate_736468bca20d8108bcb1f9508a92fc3a2965b770221255f7bfe171b15ae483f4 extends \Twig\Template
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
        // line 48
        echo "
";
        // line 50
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 52
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 52), 52, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["plugin_id"] ?? null), 53, $this->source))), 3 => "clearfix"];
        // line 57
        echo "
";
        // line 58
        $context["backgroundimageUrl"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_upload_image", [], "any", false, false, true, 58), 0, [], "any", false, false, true, 58)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#item"] ?? null) : null), "entity", [], "any", false, false, true, 58), "uri", [], "any", false, false, true, 58), "value", [], "any", false, false, true, 58), 58, $this->source)]);
        // line 59
        echo "
<div class=\"block-front-page-banner-section\">
  ";
        // line 61
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_upload_image", [], "any", false, false, true, 61)))) {
            // line 62
            echo "    <section class=\"section block-banner-type-section\"  style=\"background: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["backgroundimageUrl"] ?? null), 62, $this->source), "html", null, true);
            echo " ) no-repeat right;min-height: 558px; max-height: 558px ;\">
      <div class=\"block-front-page-banner-type-content container\">
        <div class=\"row\">
          <div class=\"heading\"><h1>";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "</h1></div>
          <div class=\"description\">";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "</div>
          <div class=\"cta-button btn btn-primary\">";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cta_button", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "</div>
        </div>      
      </div>
    </section>
  ";
        }
        // line 72
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/jescanada/templates/block/block--bundle--front_page_banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 72,  72 => 67,  68 => 66,  64 => 65,  57 => 62,  55 => 61,  51 => 59,  49 => 58,  46 => 57,  44 => 53,  43 => 52,  42 => 50,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/jescanada/templates/block/block--bundle--front_page_banner.html.twig", "/var/www/html/drupal/web/themes/custom/jescanada/templates/block/block--bundle--front_page_banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 50, "if" => 61);
        static $filters = array("clean_class" => 52, "render" => 61, "escape" => 62);
        static $functions = array("file_url" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'render', 'escape'],
                ['file_url']
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
