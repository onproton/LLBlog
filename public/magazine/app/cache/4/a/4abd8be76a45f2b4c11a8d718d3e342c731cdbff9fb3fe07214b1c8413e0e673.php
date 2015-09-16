<?php

/* components/panel-lastmodified.twig */
class __TwigTemplate_4abd8be76a45f2b4c11a8d718d3e342c731cdbff9fb3fe07214b1c8413e0e673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("_base/_panel.twig", "components/panel-lastmodified.twig", 5);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-lastmodified";
    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-clock-o";
    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
        // line 13
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) : (""))) {
            // line 14
            echo "        ";
            echo "Recent modifications";
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.last-modified", array("%contenttypes%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
    ";
        }
        // line 18
        echo "
";
    }

    // line 21
    public function block_panel_body($context, array $blocks = array())
    {
        // line 22
        echo "
    ";
        // line 23
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "components/panel-lastmodified.twig", 23);
        // line 24
        echo "    ";
        $context["__internal_7918112e2ce0dce0e1e2a2f60928947a761c11bb48715f7d96f2d21b99be5a86"] = $this->loadTemplate("changelog/_macros.twig", "components/panel-lastmodified.twig", 24);
        // line 25
        echo "
    <ul>
        ";
        // line 27
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array(), "any", true, true)) {
            // line 28
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["index"] => $context["entry"]) {
                // line 29
                echo "                <li>
                    ";
                // line 30
                if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) : (""))) {
                    // line 31
                    echo "                        ";
                    $context["title"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_name", array());
                    // line 32
                    echo "                    ";
                } else {
                    // line 33
                    echo "                        ";
                    if ($this->getAttribute($context["entry"], "title", array())) {
                        // line 34
                        echo "                            ";
                        $context["title"] = $context["macro"]->getcontentlink_by_id($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $this->getAttribute($context["entry"], "title", array()), $this->getAttribute($context["entry"], "contentid", array()));
                        // line 35
                        echo "                        ";
                    } else {
                        // line 36
                        echo "                            ";
                        $context["title"] = $this->env->getExtension('Bolt')->trans("%name% № %id%", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_name", array()), "%id%" => $this->getAttribute($context["entry"], "contentid", array())));
                        // line 37
                        echo "                        ";
                    }
                    // line 38
                    echo "                        № ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "contentid", array()), "html", null, true);
                    echo ".
                    ";
                }
                // line 40
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "
                    ";
                // line 41
                echo $context["__internal_7918112e2ce0dce0e1e2a2f60928947a761c11bb48715f7d96f2d21b99be5a86"]->getchangelog_mutation($this->getAttribute($context["entry"], "mutation_type", array()));
                echo "
                    ";
                // line 42
                echo $this->env->getExtension('Bolt')->trans("by");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "username", array()), "html", null, true);
                echo "
                    <small>(";
                // line 43
                echo $context["macro"]->getdatetime($this->getAttribute($context["entry"], "date", array()));
                echo ")</small>
                    <small><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changelogrecordsingle", array("contenttype" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute($context["entry"], "contentid", array()), "id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">view</a></small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 47
                echo "                <li><em>";
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        ";
        } else {
            // line 50
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "latest", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 51
                echo "                <li>
                    № ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "id", array()), "html", null, true);
                echo ".
                    ";
                // line 53
                echo $context["macro"]->getcontentlink($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $context["content"]);
                echo "
                    <small>(";
                // line 54
                echo $context["macro"]->getdatetime($this->getAttribute($context["content"], "datechanged", array()));
                echo ")</small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 57
                echo "                <li><em>";
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        ";
        }
        // line 60
        echo "    </ul>
    ";
        // line 61
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array(), "any", true, true) && $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contentid", array())) && $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) {
            // line 62
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changelogrecordall", array("contenttype" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contentid", array()))), "html", null, true);
            echo "\">
            ";
            // line 63
            echo $this->env->getExtension('Bolt')->trans("Full list …");
            echo "
        </a>
    ";
        }
        // line 66
        echo "
";
    }

    public function getTemplateName()
    {
        return "components/panel-lastmodified.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 66,  209 => 63,  204 => 62,  202 => 61,  199 => 60,  196 => 59,  187 => 57,  179 => 54,  175 => 53,  171 => 52,  168 => 51,  162 => 50,  159 => 49,  150 => 47,  142 => 44,  138 => 43,  132 => 42,  128 => 41,  123 => 40,  117 => 38,  114 => 37,  111 => 36,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  94 => 30,  91 => 29,  85 => 28,  83 => 27,  79 => 25,  76 => 24,  74 => 23,  71 => 22,  68 => 21,  63 => 18,  57 => 16,  51 => 14,  49 => 13,  46 => 12,  43 => 11,  37 => 9,  31 => 7,  11 => 5,);
    }
}
