<?php

/* editcontent/_live-editor.twig */
class __TwigTemplate_e77608482becec27c1e83fed10e67da8d4c7c741a9f66b10ffe4193fa329ee1f extends Twig_Template
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
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 2
            echo "<div class=\"live-editor\">
    <iframe id=\"live-editor-iframe\" name=\"live-editor-iframe\"></iframe>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "editcontent/_live-editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
