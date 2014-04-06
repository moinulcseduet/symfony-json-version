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
        $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) ? $context["lists"] : $this->getContext($context, "lists")));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 24
            echo "                <li class=\"thumbnail phone-listing\">
                    <a href=\"/phone-details/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "id"), "html", null, true);
            echo "\" class=\"thumb\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "imageUrl"), "html", null, true);
            echo "\"></a>
                    <a href=\"/phone-details/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "name"), "html", null, true);
            echo "</a>
                    <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "snippet"), "html", null, true);
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
        return array (  80 => 30,  71 => 27,  65 => 26,  59 => 25,  56 => 24,  52 => 23,  31 => 4,  28 => 3,);
    }
}
