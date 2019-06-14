<?php

/* catequizando/index.html.twig */
class __TwigTemplate_ca621f7971754cdbaf2d326562bbf1b789b02f4f74594decde4fff63ce2761d8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catequizando/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catequizando/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Lista de catequizandos</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>
            <div class=\"col-md-6 text-right\">
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_new");
        echo "\" class=\"btn btn-primary\">Cadastrar novo</a>
            </div>
        </div>
    </div>
    <div class=\"card-body\">

        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"tabela\" width=\"100%\" cellspacing=\"0\">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>Turma</th>
                        <th>Pendências</th>
                        <th>Ações</th>
                    </tr>
                </thead>


                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>Turma</th>
                        <th>Pendências</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>

                <tbody>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catequizandos"]) || array_key_exists("catequizandos", $context) ? $context["catequizandos"] : (function () { throw new Twig_Error_Runtime('Variable "catequizandos" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["catequizando"]) {
            // line 45
            echo "                    <tr>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catequizando"], "nome", []), "html", null, true);
            echo "</td>
                        ";
            // line 47
            if (((twig_get_attribute($this->env, $this->source, $context["catequizando"], "sexo", []) == "m") || (twig_get_attribute($this->env, $this->source, $context["catequizando"], "sexo", []) == "M"))) {
                // line 48
                echo "                            <td>Masculino</td>
                        ";
            } else {
                // line 50
                echo "                            <td>Feminino</td>
                        ";
            }
            // line 52
            echo "                        <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["catequizando"], "dataNascimento", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catequizando"], "dataNascimento", []), "d/m/Y")) : ("")), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_lista", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["catequizando"], "turma", []), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["catequizando"], "turma", []), "nome", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["catequizando"], "turma", []), "etapa", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["catequizando"], "turma", []), "numeroEtapa", []), "html", null, true);
            echo "</a></td>

                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["catequizando"], "pendencias", []), ", ", " e "), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"dropdown mb-4\">
                                <button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Ações
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_show", ["id" => twig_get_attribute($this->env, $this->source, $context["catequizando"], "id", [])]), "html", null, true);
            echo "\">Mostrar</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["catequizando"], "id", [])]), "html", null, true);
            echo "\">Editar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "                    <tr>
                        <td colspan=\"21\" class=\"alert-warning\">Não possui catequizandos cadastrados!</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catequizando'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "catequizando/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 73,  152 => 69,  141 => 63,  137 => 62,  127 => 55,  116 => 53,  111 => 52,  107 => 50,  103 => 48,  101 => 47,  97 => 46,  94 => 45,  89 => 44,  54 => 12,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Lista de catequizandos</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>
            <div class=\"col-md-6 text-right\">
                    <a href=\"{{ path('catequizando_new') }}\" class=\"btn btn-primary\">Cadastrar novo</a>
            </div>
        </div>
    </div>
    <div class=\"card-body\">

        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"tabela\" width=\"100%\" cellspacing=\"0\">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>Turma</th>
                        <th>Pendências</th>
                        <th>Ações</th>
                    </tr>
                </thead>


                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>Turma</th>
                        <th>Pendências</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>

                <tbody>
                {% for catequizando in catequizandos %}
                    <tr>
                        <td>{{ catequizando.nome }}</td>
                        {% if catequizando.sexo == 'm' or catequizando.sexo == 'M' %}
                            <td>Masculino</td>
                        {% else %}
                            <td>Feminino</td>
                        {% endif %}
                        <td>{{ catequizando.dataNascimento ? catequizando.dataNascimento|date('d/m/Y') : '' }}</td>
                        <td><a href=\"{{ path('turma_lista', {'id': catequizando.turma.id}) }}\">{{ catequizando.turma.nome }} - {{ catequizando.turma.etapa }} {{ catequizando.turma.numeroEtapa }}</a></td>

                        <td>{{ catequizando.pendencias|join(', ', ' e ') }}</td>
                        <td>
                            <div class=\"dropdown mb-4\">
                                <button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Ações
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"{{ path('catequizando_show', {'id': catequizando.id}) }}\">Mostrar</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('catequizando_edit', {'id': catequizando.id}) }}\">Editar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"21\" class=\"alert-warning\">Não possui catequizandos cadastrados!</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>


{% endblock %}
", "catequizando/index.html.twig", "/var/www/templates/catequizando/index.html.twig");
    }
}
