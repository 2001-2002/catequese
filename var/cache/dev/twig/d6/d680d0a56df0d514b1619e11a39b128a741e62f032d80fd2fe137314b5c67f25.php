<?php

/* catequizando/show.html.twig */
class __TwigTemplate_318c9f9cc6e92b9b2076c758f2109cdec501124f8897db59cb322759c761c25b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catequizando/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catequizando/show.html.twig"));

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
            <div class=\"col-md-12\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Dados do catequizando</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>

        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">

            <table class=\"table table-hover table-striped\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 21, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 25, $this->source); })()), "nome", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Sexo</th>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 29, $this->source); })()), "sexo", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 33, $this->source); })()), "dataNascimento", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 33, $this->source); })()), "dataNascimento", []), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Naturalidade</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 37, $this->source); })()), "naturalidade", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 41, $this->source); })()), "endereco", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 45, $this->source); })()), "telefone", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Documento </th>
                        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 49, $this->source); })()), "documento", [])) {
            // line 50
            echo "                            <td>
                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/comprovantes/" . twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 51, $this->source); })()), "documento", []))), "html", null, true);
            echo "\">Ver documento</a>
                            </td>
                        ";
        } else {
            // line 54
            echo "                            <td>
                                Não apresentado
                            </td>
                        ";
        }
        // line 58
        echo "                    </tr>
                    <tr>
                        <th>Batizado? </th>
                        <td>";
        // line 61
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 61, $this->source); })()), "batizado", [])) ? ("Sim") : ("Não"));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Comprovante de Batismo </th>
                        ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 65, $this->source); })()), "comprovanteBatizado", [])) {
            // line 66
            echo "                            <td>
                                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/comprovantes/" . twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 67, $this->source); })()), "comprovanteBatizado", []))), "html", null, true);
            echo "\">Ver comprovante</a>
                            </td>
                        ";
        } else {
            // line 70
            echo "                            <td>
                                Não apresentado
                            </td>
                        ";
        }
        // line 74
        echo "                    </tr>
                    <tr>
                        <th>Eucaristia? </th>
                        <td>";
        // line 77
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 77, $this->source); })()), "eucaristia", [])) ? ("Sim") : ("Não"));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Comprovante de Eucaristia </th>
                        ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 81, $this->source); })()), "comprovanteEucaristia", [])) {
            // line 82
            echo "                            <td>
                                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/comprovantes/" . twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 83, $this->source); })()), "comprovanteEucaristia", []))), "html", null, true);
            echo "\">Ver comprovante</a>
                            </td>
                        ";
        } else {
            // line 86
            echo "                            <td>
                                Não apresentado
                            </td>
                        ";
        }
        // line 90
        echo "                    </tr>
                    <tr>
                        <th>Nome do pai</th>
                        <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 93, $this->source); })()), "nomePai", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nome da mae</th>
                        <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 97, $this->source); })()), "nomeMae", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Casado? </th>
                        <td>";
        // line 101
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 101, $this->source); })()), "casado", [])) ? ("Sim") : ("Não"));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Comprovante de Casamento </th>
                        ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 105, $this->source); })()), "comprovanteCasamento", [])) {
            // line 106
            echo "                            <td>
                                <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/comprovantes/" . twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 107, $this->source); })()), "comprovanteCasamento", []))), "html", null, true);
            echo "\">Ver comprovante</a>
                            </td>
                        ";
        } else {
            // line 110
            echo "                            <td>
                                Não apresentado
                            </td>
                        ";
        }
        // line 114
        echo "                    </tr>
                    <tr>
                        <th>Telefone do pai</th>
                        <td>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 117, $this->source); })()), "telefonePai", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telefone da mãe</th>
                        <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 121, $this->source); })()), "telefoneMae", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nome do padrinho de crisma</th>
                        <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 125, $this->source); })()), "nomePadrinhoCrisma", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telefone do padrinho</th>
                        <td>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 129, $this->source); })()), "telPadrinho", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Endereço do padrinho</th>
                        <td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 133, $this->source); })()), "enderecoPadrinho", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cidade do catequizando</th>
                        <td>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 137, $this->source); })()), "cidadeCatequizando", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cidade do padrinho</th>
                        <td>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 141, $this->source); })()), "cidadePadrinho", []), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    <a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_index");
        echo "\" class=\"btn btn-secondary\">Voltar</a>

    <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["catequizando"]) || array_key_exists("catequizando", $context) ? $context["catequizando"] : (function () { throw new Twig_Error_Runtime('Variable "catequizando" does not exist.', 148, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Editar</a>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "catequizando/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 148,  285 => 146,  277 => 141,  270 => 137,  263 => 133,  256 => 129,  249 => 125,  242 => 121,  235 => 117,  230 => 114,  224 => 110,  218 => 107,  215 => 106,  213 => 105,  206 => 101,  199 => 97,  192 => 93,  187 => 90,  181 => 86,  175 => 83,  172 => 82,  170 => 81,  163 => 77,  158 => 74,  152 => 70,  146 => 67,  143 => 66,  141 => 65,  134 => 61,  129 => 58,  123 => 54,  117 => 51,  114 => 50,  112 => 49,  105 => 45,  98 => 41,  91 => 37,  84 => 33,  77 => 29,  70 => 25,  63 => 21,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Dados do catequizando</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>

        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">

            <table class=\"table table-hover table-striped\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ catequizando.id }}</td>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <td>{{ catequizando.nome }}</td>
                    </tr>
                    <tr>
                        <th>Sexo</th>
                        <td>{{ catequizando.sexo }}</td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td>{{ catequizando.dataNascimento ? catequizando.dataNascimento|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Naturalidade</th>
                        <td>{{ catequizando.naturalidade }}</td>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <td>{{ catequizando.endereco }}</td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        <td>{{ catequizando.telefone }}</td>
                    </tr>
                    <tr>
                        <th>Documento </th>
                        {% if catequizando.documento %}
                            <td>
                                <a href=\"{{ asset('/uploads/comprovantes/' ~ catequizando.documento) }}\">Ver documento</a>
                            </td>
                        {% else %}
                            <td>
                                Não apresentado
                            </td>
                        {% endif %}
                    </tr>
                    <tr>
                        <th>Batizado? </th>
                        <td>{{ catequizando.batizado ? 'Sim' : 'Não' }}</td>
                    </tr>
                    <tr>
                        <th>Comprovante de Batismo </th>
                        {% if catequizando.comprovanteBatizado %}
                            <td>
                                <a href=\"{{ asset('/uploads/comprovantes/' ~ catequizando.comprovanteBatizado) }}\">Ver comprovante</a>
                            </td>
                        {% else %}
                            <td>
                                Não apresentado
                            </td>
                        {% endif %}
                    </tr>
                    <tr>
                        <th>Eucaristia? </th>
                        <td>{{ catequizando.eucaristia ? 'Sim' : 'Não' }}</td>
                    </tr>
                    <tr>
                        <th>Comprovante de Eucaristia </th>
                        {% if catequizando.comprovanteEucaristia %}
                            <td>
                                <a href=\"{{ asset('/uploads/comprovantes/' ~ catequizando.comprovanteEucaristia) }}\">Ver comprovante</a>
                            </td>
                        {% else %}
                            <td>
                                Não apresentado
                            </td>
                        {% endif %}
                    </tr>
                    <tr>
                        <th>Nome do pai</th>
                        <td>{{ catequizando.nomePai }}</td>
                    </tr>
                    <tr>
                        <th>Nome da mae</th>
                        <td>{{ catequizando.nomeMae }}</td>
                    </tr>
                    <tr>
                        <th>Casado? </th>
                        <td>{{ catequizando.casado ? 'Sim' : 'Não' }}</td>
                    </tr>
                    <tr>
                        <th>Comprovante de Casamento </th>
                        {% if catequizando.comprovanteCasamento %}
                            <td>
                                <a href=\"{{ asset('/uploads/comprovantes/' ~ catequizando.comprovanteCasamento) }}\">Ver comprovante</a>
                            </td>
                        {% else %}
                            <td>
                                Não apresentado
                            </td>
                        {% endif %}
                    </tr>
                    <tr>
                        <th>Telefone do pai</th>
                        <td>{{ catequizando.telefonePai }}</td>
                    </tr>
                    <tr>
                        <th>Telefone da mãe</th>
                        <td>{{ catequizando.telefoneMae }}</td>
                    </tr>
                    <tr>
                        <th>Nome do padrinho de crisma</th>
                        <td>{{ catequizando.nomePadrinhoCrisma }}</td>
                    </tr>
                    <tr>
                        <th>Telefone do padrinho</th>
                        <td>{{ catequizando.telPadrinho }}</td>
                    </tr>
                    <tr>
                        <th>Endereço do padrinho</th>
                        <td>{{ catequizando.enderecoPadrinho }}</td>
                    </tr>
                    <tr>
                        <th>Cidade do catequizando</th>
                        <td>{{ catequizando.cidadeCatequizando }}</td>
                    </tr>
                    <tr>
                        <th>Cidade do padrinho</th>
                        <td>{{ catequizando.cidadePadrinho }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    <a href=\"{{ path('catequizando_index') }}\" class=\"btn btn-secondary\">Voltar</a>

    <a href=\"{{ path('catequizando_edit', {'id': catequizando.id}) }}\" class=\"btn btn-primary\">Editar</a>

    </div>
{% endblock %}
", "catequizando/show.html.twig", "/var/www/catequese/templates/catequizando/show.html.twig");
    }
}
