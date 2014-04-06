<?php

/* AsadCoreBundle:Default:phone-list.html.twig */
class __TwigTemplate_6846d9b17626c7a2a34f0df29d69667f396582708d17d8c921401e689ff9f3ca extends Twig_Template
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
        <div class=\"span2\">
            <!--Sidebar content-->

            Search: <input name=\"query\" type=\"text\" value=\"\" onkeyup=\"searchList(this.value)\" class=\"search\" />
            Sort by:
            <select name=\"order_prop\" onchange=\"sortSearch(this.value)\">
                <option value=\"name\">Alphabetical</option>
                <option value=\"age\">Newest</option>
                <option value=\"-age\">Oldest</option>
            </select>

        </div>
        <div class=\"span10\">
            <!--Body content-->

            <ul class=\"phones\">
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) ? $context["lists"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 24
            echo "                <li class=\"thumbnail phone-listing\">
                    <a href=\"/phone-details/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "id"), "html", null, true);
            echo "\" class=\"thumb\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "imageUrl"), "html", null, true);
            echo "\"></a>
                    <a href=\"/phone-details/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "name"), "html", null, true);
            echo "</a>
                    <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : null), "snippet"), "html", null, true);
            echo "</p>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AsadCoreBundle:Default:phone-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 26,  52 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 27,  67 => 15,  63 => 15,  59 => 25,  47 => 9,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  40 => 8,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 24,  50 => 10,  27 => 4,  87 => 25,  72 => 16,  55 => 15,  44 => 12,  25 => 3,  21 => 2,  38 => 6,  46 => 7,  35 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  32 => 4,  31 => 4,  29 => 3,  26 => 6,  24 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 30,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
