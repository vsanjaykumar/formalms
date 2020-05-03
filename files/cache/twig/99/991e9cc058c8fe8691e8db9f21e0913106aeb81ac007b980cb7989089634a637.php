<?php

/* logo.html.twig */
class __TwigTemplate_f7a2cf91d4ae8e1fb0b1e560a654bc3b90c6cea2d3bb24f01c554667fc06a7f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a class=\"navbar-brand\" href=\"";
        echo twig_escape_filter($this->env, ($context["homePage"] ?? null), "html", null, true);
        echo "\">
    <img class=\"left_logo\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["logo"] ?? null), "html", null, true);
        echo "\" alt=\"logo di sinistra\"/>
</a> ";
    }

    public function getTemplateName()
    {
        return "logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "logo.html.twig", "/var/www/formalms/formalms/templates/standard/layout/appLms/logo.html.twig");
    }
}
