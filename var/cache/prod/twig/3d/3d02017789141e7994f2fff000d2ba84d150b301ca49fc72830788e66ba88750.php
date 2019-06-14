<?php

/* includes/message.html.twig */
class __TwigTemplate_25129f73d858e14fa8f45ce15792833ccb79a4b48e8e2dfc8c0f16dcb1051c2d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", []), "flashBag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 2
            echo "    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", []), "flashBag", []), "get", [0 => "success-lista"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 6
            echo "    <div class=\"alert alert-success\">
    ";
            // line 7
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
        <br>
    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_chamada", ["turma" => twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "id", []), "option" => 1]), "html", null, true);
            echo "\" class=\"fas fa-link\">Faça o download da sua lista de chamada!</a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", []), "flashBag", []), "get", [0 => "warning"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 14
            echo "    <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", []), "flashBag", []), "get", [0 => "error"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 18
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "includes/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  79 => 17,  76 => 16,  67 => 14,  63 => 13,  60 => 12,  51 => 9,  46 => 7,  43 => 6,  39 => 5,  36 => 4,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "includes/message.html.twig", "/var/www/templates/includes/message.html.twig");
    }
}
