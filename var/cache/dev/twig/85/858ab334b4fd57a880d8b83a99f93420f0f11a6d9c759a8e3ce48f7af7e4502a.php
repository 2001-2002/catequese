<?php

/* turma/lista.html.twig */
class __TwigTemplate_d146d2ce4ab7409bd555271985beb94f44daabb8f133bc3a7ee20728fa9535db extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "turma/lista.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "turma/lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Turma ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 8, $this->source); })()), "nome", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 8, $this->source); })()), "etapa", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 8, $this->source); })()), "numeroEtapa", []), "html", null, true);
        echo "</h6>
                    <small>Paroquia São Gabriel Arcanjo</small>
                </div>
                <div class=\"col-md-6 text-right\">
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_chamada", ["turma" => twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 12, $this->source); })()), "id", []), "option" => 0]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Lista de chamada</a>
                </div>
            </div>
        </div>
        <div class=\"card-body\">
        ";
        // line 17
        $this->loadTemplate("includes/message.html.twig", "turma/lista.html.twig", 17)->display($context);
        // line 18
        echo "             <table class=\"table table-bordered\" id=\"tabela\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Pendências</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista"]) || array_key_exists("lista", $context) ? $context["lista"] : (function () { throw new Twig_Error_Runtime('Variable "lista" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["catequizando"]) {
            // line 27
            echo "                        <tr>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catequizando"], "nome", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["catequizando"], "pendencias", []), ", ", " e "), "html", null, true);
            echo "</td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "                        <tr>
                            <td colspan=\"2\" class=\"alert-warning\">Não possui catequizandos nessa turma!</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catequizando'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </tbody>
                </table>

        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "turma/lista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  101 => 32,  93 => 29,  89 => 28,  86 => 27,  81 => 26,  71 => 18,  69 => 17,  61 => 12,  50 => 8,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Turma {{ turma.nome }} {{ turma.etapa }} {{ turma.numeroEtapa }}</h6>
                    <small>Paroquia São Gabriel Arcanjo</small>
                </div>
                <div class=\"col-md-6 text-right\">
                    <a href=\"{{ path('turma_chamada', {'turma' : turma.id, 'option': 0}) }}\" class=\"btn btn-primary\">Lista de chamada</a>
                </div>
            </div>
        </div>
        <div class=\"card-body\">
        {% include 'includes/message.html.twig' %}
             <table class=\"table table-bordered\" id=\"tabela\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Pendências</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for catequizando in lista %}
                        <tr>
                            <td>{{ catequizando.nome }}</td>
                            <td>{{ catequizando.pendencias|join(', ', ' e ') }}</td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"2\" class=\"alert-warning\">Não possui catequizandos nessa turma!</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

        </div>

    </div>
{% endblock %}
", "turma/lista.html.twig", "/var/www/catequese/templates/turma/lista.html.twig");
    }
}
