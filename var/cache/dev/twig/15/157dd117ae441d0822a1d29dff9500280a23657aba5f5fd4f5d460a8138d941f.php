<?php

/* includes/message.html.twig */
class __TwigTemplate_e33244719a8809330eefabe0a442e816ffbbe8fb2b2d39c57d884707a70162e4 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/message.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "session", []), "flashBag", []), "get", [0 => "success"], "method"));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "session", []), "flashBag", []), "get", [0 => "success-lista"], "method"));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_chamada", ["turma" => twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 9, $this->source); })()), "id", []), "option" => 1]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "session", []), "flashBag", []), "get", [0 => "warning"], "method"));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "session", []), "flashBag", []), "get", [0 => "error"], "method"));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  86 => 18,  82 => 17,  79 => 16,  70 => 14,  66 => 13,  63 => 12,  54 => 9,  49 => 7,  46 => 6,  42 => 5,  39 => 4,  30 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for msg in app.session.flashBag.get('success') %}
    <div class=\"alert alert-success\">{{ msg }}</div>
{% endfor %}

{% for msg in app.session.flashBag.get('success-lista') %}
    <div class=\"alert alert-success\">
    {{ msg }}
        <br>
    <a href=\"{{ path('turma_chamada', {'turma' : turma.id, 'option': 1}) }}\" class=\"fas fa-link\">Faça o download da sua lista de chamada!</a>
    </div>
{% endfor %}

{% for msg in app.session.flashBag.get('warning') %}
    <div class=\"alert alert-warning\">{{ msg }}</div>
{% endfor %}

{% for msg in app.session.flashBag.get('error') %}
    <div class=\"alert alert-danger\">{{ msg }}</div>
{% endfor %}", "includes/message.html.twig", "/var/www/catequese/templates/includes/message.html.twig");
    }
}
