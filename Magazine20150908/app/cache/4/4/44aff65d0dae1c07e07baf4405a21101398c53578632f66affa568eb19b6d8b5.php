<?php

/* _base/_fieldset.twig */
class __TwigTemplate_44aff65d0dae1c07e07baf4405a21101398c53578632f66affa568eb19b6d8b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fieldset' => array($this, 'block_fieldset'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["ftype"] = $this->env->getExtension('Bolt')->first(twig_get_array_keys_filter((isset($context["fieldset"]) ? $context["fieldset"] : null)));
        // line 2
        $context["fconf"] = $this->env->getExtension('Bolt')->first((isset($context["fieldset"]) ? $context["fieldset"] : null));
        // line 3
        echo "
<fieldset data-bolt-field=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["ftype"]) ? $context["ftype"] : null), "html", null, true);
        echo "\" data-bolt-fconf=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["fconf"]) ? $context["fconf"] : null)), "html", null, true);
        echo "\">
";
        // line 5
        $this->displayBlock('fieldset', $context, $blocks);
        // line 6
        echo "</fieldset>
";
    }

    // line 5
    public function block_fieldset($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_base/_fieldset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  35 => 6,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
