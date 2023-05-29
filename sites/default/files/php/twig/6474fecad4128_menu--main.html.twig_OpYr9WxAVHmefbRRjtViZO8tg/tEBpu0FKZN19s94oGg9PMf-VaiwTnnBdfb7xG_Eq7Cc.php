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

/* themes/custom/endossmp_theme/templates/menu/menu--main.html.twig */
class __TwigTemplate_991fb765ee559e744305bcbcc4f22096 extends Template
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
        // line 20
        echo "<nav class=\"navbar navbar-default navbar-custom\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      ";
        // line 24
        $this->loadTemplate("@endossmp_theme/templates/block/block--system-branding-block.html.twig", "themes/custom/endossmp_theme/templates/menu/menu--main.html.twig", 24)->display($context);
        // line 25
        echo "      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
      ";
        // line 35
        $this->loadTemplate("menu.html.twig", "themes/custom/endossmp_theme/templates/menu/menu--main.html.twig", 35)->display(twig_array_merge($context, ["classes" => [0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), 2 => "nav", 3 => "navbar-nav"]]));
        // line 36
        echo "    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "themes/custom/endossmp_theme/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 36,  59 => 35,  47 => 25,  45 => 24,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/endossmp_theme/templates/menu/menu--main.html.twig", "/opt/drupal/web/themes/custom/endossmp_theme/templates/menu/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 24);
        static $filters = array("clean_class" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['clean_class'],
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
