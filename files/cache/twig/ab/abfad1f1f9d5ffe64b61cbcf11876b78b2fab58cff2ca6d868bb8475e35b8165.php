<?php

/* lostpwd-typ.html.twig */
class __TwigTemplate_0ef24e69a898c47acb807b0b3d13e72a2b9582da979e52d68cb01dd641633db3 extends Twig_Template
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
        echo "<div class=\"homepage__row homepage__row--gray\">
    <div><i class=\"fa fa-check\"></i></div>
    <p>
        ";
        // line 4
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
    </p>
    <br/><br/>
</div>
<div class=\"homepage__row row\">
    <div class=\"col-xs-12 col-sm-6 col-sm-offset-3\">
        <br/>
        <a class=\"forma-button forma-button--orange\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["loginAction"] ?? null), "html", null, true);
        echo "\" style=\"margin-bottom: 10px;\">";
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Lang::t", array(0 => "_GO_TO_HOME", 1 => "standard")));
        echo "</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "lostpwd-typ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lostpwd-typ.html.twig", "/var/www/formalms/formalms/templates/standard/layout/appCore/homepage/lostpwd-typ.html.twig");
    }
}
