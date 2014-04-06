<?php

/* AsadCoreBundle::layout.html.twig */
class __TwigTemplate_18951c5e41876927cf1a6b1c3aecbb9acd88fb95464b914bb44e512efe93d698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "AsadCoreBundle::layout.html.twig";
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
