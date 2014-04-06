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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "images"));
        foreach ($context['_seq'] as $context["key"] => $context["img"]) {
            // line 11
            echo "
                <img src=\"../";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
            echo "\" class=\"phone ";
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) == 0)) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "name"), "html", null, true);
        echo "</h1>

            <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "description"), "html", null, true);
        echo "</p>

            <ul class=\"phone-thumbs\">
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 23
            echo "                <li>
                    <img src=\"../";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
            echo "\" onclick=\"setImage('";
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "availability"));
        foreach ($context['_seq'] as $context["_key"] => $context["availability"]) {
            // line 35
            echo "                        <dd>";
            echo twig_escape_filter($this->env, (isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "battery"), "type"), "html", null, true);
        echo "</dd>
                        <dt>Talk Time</dt>
                        <dd>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "battery"), "talkTime"), "html", null, true);
        echo "</dd>
                        <dt>Standby time (max)</dt>
                        <dd>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "battery"), "standbyTime"), "html", null, true);
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Storage and Memory</span>
                    <dl>
                        <dt>RAM</dt>
                        <dd>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "storage"), "ram"), "html", null, true);
        echo "</dd>
                        <dt>Internal Storage</dt>
                        <dd>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "storage"), "flash"), "html", null, true);
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Connectivity</span>
                    <dl>
                        <dt>Network Support</dt>
                        <dd>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "connectivity"), "cell"), "html", null, true);
        echo "</dd>
                        <dt>WiFi</dt>
                        <dd>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "connectivity"), "wifi"), "html", null, true);
        echo "</dd>
                        <dt>Bluetooth</dt>
                        <dd>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "connectivity"), "bluetooth"), "html", null, true);
        echo "</dd>
                        <dt>Infrared</dt>
                        <dd>";
        // line 69
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "connectivity"), "infrared"));
        echo "</dd>
                        <dt>GPS</dt>
                        <dd>";
        // line 71
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "connectivity"), "gps"));
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Android</span>
                    <dl>
                        <dt>OS Version</dt>
                        <dd>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "android"), "os"), "html", null, true);
        echo "</dd>
                        <dt>UI</dt>
                        <dd>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "android"), "ui"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "sizeAndWeight"), "dimensions"));
        foreach ($context['_seq'] as $context["_key"] => $context["dim"]) {
            // line 88
            echo "                        <dd>";
            echo twig_escape_filter($this->env, (isset($context["dim"]) ? $context["dim"] : $this->getContext($context, "dim")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "sizeAndWeight"), "weight"), "html", null, true);
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Display</span>
                    <dl>
                        <dt>Screen size</dt>
                        <dd>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "display"), "screenSize"), "html", null, true);
        echo "</dd>
                        <dt>Screen resolution</dt>
                        <dd>";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "display"), "screenResolution"), "html", null, true);
        echo "</dd>
                        <dt>Touch screen</dt>
                        <dd>";
        // line 102
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "display"), "touchScreen"));
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Hardware</span>
                    <dl>
                        <dt>CPU</dt>
                        <dd>";
        // line 109
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "hardware"), "cpu"));
        echo "</dd>
                        <dt>USB</dt>
                        <dd>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "hardware"), "usb"), "html", null, true);
        echo "</dd>
                        <dt>Audio / headphone jack</dt>
                        <dd>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "hardware"), "audioJack"), "html", null, true);
        echo "</dd>
                        <dt>FM Radio</dt>
                        <dd>";
        // line 115
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "hardware"), "fmRadio"));
        echo "</dd>
                        <dt>Accelerometer</dt>
                        <dd>";
        // line 117
        echo $this->env->getExtension('mark_extension')->checkMarkFilter($this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "hardware"), "accelerometer"));
        echo "</dd>
                    </dl>
                </li>
                <li>
                    <span>Camera</span>
                    <dl>
                        <dt>Primary</dt>
                        <dd>";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "camera"), "primary"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "additionalFeatures"), "html", null, true);
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
        return array (  289 => 131,  283 => 127,  278 => 124,  268 => 117,  263 => 115,  258 => 113,  253 => 111,  248 => 109,  238 => 102,  233 => 100,  228 => 98,  218 => 91,  215 => 90,  206 => 88,  202 => 87,  192 => 80,  187 => 78,  177 => 71,  172 => 69,  167 => 67,  162 => 65,  157 => 63,  147 => 56,  142 => 54,  132 => 47,  127 => 45,  122 => 43,  114 => 37,  105 => 35,  101 => 34,  92 => 27,  81 => 24,  78 => 23,  74 => 22,  68 => 19,  63 => 17,  59 => 15,  46 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
