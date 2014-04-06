<?php

/* ::base.html.twig */
class __TwigTemplate_89c26589988bcba8a3b4fc731e40d3ba59e97d0180531b77993062a3e4411bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'closure' => array($this, 'block_closure'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Phone List Panel</title>

    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "16d4e1a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_16d4e1a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/16d4e1a_bootstrap.min_1.css");
            // line 11
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "16d4e1a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_16d4e1a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/16d4e1a_app_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "16d4e1a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_16d4e1a") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/16d4e1a.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "
    ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ee67187_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ee67187_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ee67187_jquery-1.8.2.min_1.js");
            // line 21
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ee67187_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ee67187_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ee67187_underscore-min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ee67187_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ee67187_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ee67187_bootstrap.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ee67187_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ee67187_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ee67187_bootstrap-datepicker_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ee67187_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ee67187_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ee67187_Templates_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ee67187_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ee67187_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ee67187_admin_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "ee67187"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ee67187") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ee67187.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "
</head>

<body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\">

            <div class=\"navbar-inner\">

                <div class=\"container-fluid\">

                    <a class=\"brand\" href=\"/hello/admin\">My Admin</a>

                    <div class=\"navbar\">

                        <ul class=\"nav admin-nav\">
                            <li><a href=\"/hello/moinul\">Welcome</a></li>
                            <li><a href=\"/phone-list\">Phone List</a></li>
                        </ul>

                    </div>
                    <!--/.nav-collapse -->

                </div>

            </div>
    </div>
    <br/>

    <div class=\"clearfix\"></div>

    <div class=\"container-fluid\">

        <div class=\"clearfix\"></div>
        <div class=\"sandbox-alert alert alert-danger\" style=\"display: none !important;\"></div>

        ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "
    </div>

    ";
        // line 63
        $this->displayBlock('closure', $context, $blocks);
        // line 64
        echo "
</body>
</html>

";
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    // line 63
    public function block_closure($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 63,  159 => 59,  151 => 64,  149 => 63,  144 => 60,  104 => 23,  60 => 21,  56 => 14,  53 => 13,  33 => 11,  29 => 7,  21 => 1,  289 => 131,  283 => 127,  278 => 124,  268 => 117,  263 => 115,  258 => 113,  253 => 111,  248 => 109,  238 => 102,  233 => 100,  228 => 98,  218 => 91,  215 => 90,  206 => 88,  202 => 87,  192 => 80,  187 => 78,  177 => 71,  172 => 69,  167 => 67,  162 => 65,  157 => 63,  147 => 56,  142 => 59,  132 => 47,  127 => 45,  122 => 43,  114 => 37,  105 => 35,  101 => 34,  92 => 27,  81 => 24,  78 => 23,  74 => 22,  68 => 19,  63 => 17,  59 => 15,  46 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
