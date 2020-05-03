<?php

/* profile.html.twig */
class __TwigTemplate_b1fd206ea16aa0f1e58d574444ed7e45bf37863eada9bef5602b3940852672ca extends Twig_Template
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
        echo "<li class=\"green_menu\">                                
    <div id=\"o-wrapper\" class=\"o-wrapper\">
        <button id=\"c-button--slide-right\" class=\"c-button\" >
            <a data-toggle=\"dropdown\" href=\"#\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PROFILE", "menu_course")), "html", null, true);
        echo "\">
                <span class=\"username icon--profile\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getUserName", array(), "method"), "html", null, true);
        echo "</span>
            </a>
        </button>
    </div>
</li>
<div id=\"c-menu--slide-right\" class=\"c-menu c-menu--slide-right user-panel\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xs-6\">
                <a href=\"javascript:void(0)\" class=\"c-menu__close\"><span class=\"glyphicon glyphicon-remove\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PROFILE", "organization")), "html", null, true);
        echo "</span></a>
            </div>
            <div class=\"col-xs-6\">
                <a title=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_LOGOUT", "standard")), "html", null, true);
        echo "\" href=\"";
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Get::rel_path", array(0 => "base")));
        echo "/index.php?r=";
        echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("constant", array(0 => "_logout_")));
        echo "\">
                    <span class=\"glyphicon glyphicon-off\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_LOGOUT", "standard")), "html", null, true);
        echo "</span>
                </a>
            </div>
        </div>
        <div class=\"tabnav js-tabnav\">
            ";
        // line 23
        if ((($context["profile"] ?? null) || ($context["credits"] ?? null))) {
            // line 24
            echo "                <div class=\"tabnav__label-wrapper\">
                ";
            // line 25
            if (($context["profile"] ?? null)) {
                // line 26
                echo "                    <div class=\"tabnav__label selected\" data-tab=\"profile\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_PROFILE", "standard")), "html", null, true);
                echo "</div>
                ";
            }
            // line 28
            echo "                ";
            if (($context["credits"] ?? null)) {
                // line 29
                echo "                    <div class=\"tabnav__label";
                if ( !($context["profile"] ?? null)) {
                    echo " selected";
                }
                echo "\" data-tab=\"credits\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_TIME_PERIODS", "standard")), "html", null, true);
                echo "</div>
                ";
            }
            // line 31
            echo "                </div>
            ";
        }
        // line 33
        echo "        </div>
        <div class=\"tabnav__content-wrapper\">
        ";
        // line 35
        if (($context["profile"] ?? null)) {
            // line 36
            echo "            <div class=\"tabnav__content tabnav__content--profile is-visible\">";
            echo $this->getAttribute(($context["profile"] ?? null), "homeUserProfile", array(0 => "normal", 1 => false, 2 => false), "method");
            echo "</div>
        ";
        }
        // line 38
        echo "        ";
        if (($context["credits"] ?? null)) {
            // line 39
            echo "            <div class=\"tabnav__content tabnav__content--profile";
            if ( !($context["profile"] ?? null)) {
                echo " is-visible";
            }
            echo "\">
                <div class=\"row credits\">
                    <div class=\"col-xs-12\">
                        <div class=\"js-credits-ajax-container\">";
            // line 42
            echo ($context["credits"] ?? null);
            echo "</div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 47
        echo "        </div>
        <div class=\"row course-subscription\">
            <div class=\"col-xs-12\">
                ";
        // line 50
        echo ($context["subscribeCourse"] ?? null);
        echo "
            </div>
        </div>
        <div class=\"row news\">
            <div class=\"col-xs-12\">
                ";
        // line 55
        echo ($context["news"] ?? null);
        echo "
            </div>
        </div>
        ";
        // line 58
        if ((call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("count", array(0 => ($context["languages"] ?? null)))) > 1)) {
            // line 59
            echo "        <div class=\"row lang\">
            <div class=\"col-xs-6\">
                <p>";
            // line 61
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("_CHANGELANG", "register")), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col-xs-6\">
                ";
            // line 64
            echo call_user_func_array($this->env->getFunction('evalPhp')->getCallable(), array("Layout::buildLanguages"));
            echo "
            </div>
        </div>
        ";
        }
        // line 68
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 68,  155 => 64,  149 => 61,  145 => 59,  143 => 58,  137 => 55,  129 => 50,  124 => 47,  116 => 42,  107 => 39,  104 => 38,  98 => 36,  96 => 35,  92 => 33,  88 => 31,  78 => 29,  75 => 28,  69 => 26,  67 => 25,  64 => 24,  62 => 23,  54 => 18,  46 => 17,  40 => 14,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile.html.twig", "/var/www/formalms/formalms/templates/standard/layout/appLms/profile.html.twig");
    }
}
