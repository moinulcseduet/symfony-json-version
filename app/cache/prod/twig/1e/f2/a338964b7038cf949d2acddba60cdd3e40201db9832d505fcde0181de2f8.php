<?php

/* AsadCoreBundle:Default:phone-details.html.twig */
class __TwigTemplate_1ef2a338964b7038cf949d2acddba60cdd3e40201db9832d505fcde0181de2f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AsadCoreBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AsadCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

    <div class=\"row-fluid\" style=\" margin-top: 10px !important;\">

            <div class=\"phone-images\">

                ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "images"));
        foreach ($context['_seq'] as $context["key"] => $context["img"]) {
            // line 11
            echo "
                <img src=\"../";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
            echo "\" class=\"phone ";
            if (((isset($context["key"]) ? $context["key"] : null) == 0)) {
                echo " active ";
            }
            echo "\">

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </div>

            <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "name"), "html", null, true);
        echo "</h1>

            <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "description"), "html", null, true);
        echo "</p>

            <ul class=\"phone-thumbs\">
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 23
            echo "                <li>
                    <img src=\"../";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
            echo "\" onclick=\"setImage('";
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
            echo "')\">
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </ul>

            <ul class=\"specs\">
                <li>
                    <span>Availability and Networks</span>
                    <dl>
                        <dt>Availability</dt>
                        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "availability"));
        foreach ($context['_seq'] as $context["_key"] => $context["availability"]) {
            // line 35
            echo "                        <dd>";
            echo twig_escape_filter($this->env, (isset($context["availability"]) ? $context["availability"] : null), "html", null, true);
            echo "</dd>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['availability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </dl>
                </li>
                <li>
                    <span>Battery</span>
                    <dl>
                        <dt>Type</dt>
                        <dd>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "battery"), "type"), "html", null, true);
        echo "</dd>
                        <dt>Talk Time</dt>
                        <dd>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "battery"), "talkTime"), "html", null, true);
        echo "</dd>
                        <dt>Standby time (max)</dt>
                        <dd>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "battery"), "standbyTime"), "html", null, true);
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Storage and Memory</span>
                    <dl>
                        <dt>RAM</dt>
                        <dd>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "storage"), "ram"), "html", null, true);
        echo "</dd>
                        <dt>Internal Storage</dt>
                        <dd>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "storage"), "flash"), "html", null, true);
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Connectivity</span>
                    <dl>
                        <dt>Network Support</dt>
                        <dd>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "connectivity"), "cell"), "html", null, true);
        echo "</dd>
                        <dt>WiFi</dt>
                        <dd>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "connectivity"), "wifi"), "html", null, true);
        echo "</dd>
                        <dt>Bluetooth</dt>
                        <dd>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "connectivity"), "bluetooth"), "html", null, true);
        echo "</dd>
                        <dt>Infrared</dt>
                        <dd>";
        // line 69
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "connectivity"), "infrared"));
        echo "</dd>
                        <dt>GPS</dt>
                        <dd>";
        // line 71
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "connectivity"), "gps"));
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Android</span>
                    <dl>
                        <dt>OS Version</dt>
                        <dd>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "android"), "os"), "html", null, true);
        echo "</dd>
                        <dt>UI</dt>
                        <dd>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "android"), "ui"), "html", null, true);
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Size and Weight</span>
                    <dl>
                        <dt>Dimensions</dt>
                        ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "sizeAndWeight"), "dimensions"));
        foreach ($context['_seq'] as $context["_key"] => $context["dim"]) {
            // line 88
            echo "                        <dd>";
            echo twig_escape_filter($this->env, (isset($context["dim"]) ? $context["dim"] : null), "html", null, true);
            echo "</dd>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dim'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                        <dt>Weight</dt>
                        <dd>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "sizeAndWeight"), "weight"), "html", null, true);
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Display</span>
                    <dl>
                        <dt>Screen size</dt>
                        <dd>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "display"), "screenSize"), "html", null, true);
        echo "</dd>
                        <dt>Screen resolution</dt>
                        <dd>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "display"), "screenResolution"), "html", null, true);
        echo "</dd>
                        <dt>Touch screen</dt>
                        <dd>";
        // line 102
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "display"), "touchScreen"));
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Hardware</span>
                    <dl>
                        <dt>CPU</dt>
                        <dd>";
        // line 109
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "hardware"), "cpu"));
        echo "</dd>
                        <dt>USB</dt>
                        <dd>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "hardware"), "usb"), "html", null, true);
        echo "</dd>
                        <dt>Audio / headphone jack</dt>
                        <dd>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "hardware"), "audioJack"), "html", null, true);
        echo "</dd>
                        <dt>FM Radio</dt>
                        <dd>";
        // line 115
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "hardware"), "fmRadio"));
        echo "</dd>
                        <dt>Accelerometer</dt>
                        <dd>";
        // line 117
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "hardware"), "accelerometer"));
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Camera</span>
                    <dl>
                        <dt>Primary</dt>
                        <dd>";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "camera"), "primary"), "html", null, true);
        echo "</dd>
                        <dt>Features</dt>
                        ";
        // line 127
        echo "                    </dl>
                </li>
                <li>
                    <span>Additional Features</span>
                    <dd>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "additionalFeatures"), "html", null, true);
        echo "</dd>
                </li>
            </ul>

    </div>

";
    }

    public function getTemplateName()
    {
        return "AsadCoreBundle:Default:phone-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 131,  263 => 115,  253 => 111,  248 => 109,  233 => 100,  228 => 98,  218 => 91,  215 => 90,  206 => 88,  202 => 87,  192 => 80,  172 => 69,  167 => 67,  157 => 63,  127 => 45,  114 => 37,  81 => 24,  74 => 22,  104 => 23,  53 => 13,  65 => 26,  52 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 127,  278 => 124,  268 => 117,  264 => 84,  258 => 113,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 71,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 102,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 59,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 27,  67 => 15,  63 => 17,  59 => 15,  47 => 9,  98 => 31,  93 => 28,  88 => 6,  78 => 23,  40 => 8,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 19,  56 => 14,  50 => 10,  27 => 4,  87 => 25,  72 => 16,  55 => 15,  44 => 12,  25 => 3,  21 => 1,  38 => 6,  46 => 12,  35 => 5,  43 => 11,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 64,  142 => 54,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 35,  101 => 34,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  32 => 4,  31 => 4,  29 => 7,  26 => 6,  24 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 78,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 63,  162 => 65,  154 => 58,  149 => 63,  147 => 56,  144 => 60,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 27,  86 => 28,  82 => 22,  80 => 30,  73 => 19,  64 => 17,  60 => 21,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 11,  30 => 7,);
    }
}
