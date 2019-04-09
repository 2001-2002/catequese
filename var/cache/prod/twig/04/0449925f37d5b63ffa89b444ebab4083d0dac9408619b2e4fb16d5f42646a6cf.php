<?php

/* catequizando/show.html.twig */
class __TwigTemplate_2505407a638f469b9ac933f1cb0738431771cf74b5981819ea883edddaaf15ea extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "id", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "nome", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Sexo</th>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "sexo", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "dataNascimento", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "dataNascimento", []), "Y-m-d")) : ("")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Naturalidade</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "naturalidade", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "endereco", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "telefone", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Documento </th>
                        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "documento", [])) {
            // line 50
            echo "                            <td>
                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/comprovantes/" . twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "documento", []))), "html", null, true);
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
        echo ((twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "batizado", [])) ? ("Sim") : ("Não"));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Comprovante de Batismo </th>
                        ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "comprovanteBatizado", [])) {
            // line 66
            echo "                            <td>
                                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/comprovantes/" . twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "comprovanteBatizado", []))), "html", null, true);
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
        echo ((twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "eucaristia", [])) ? ("Sim") : ("Não"));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Comprovante de Eucaristia </th>
                        ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "comprovanteEucaristia", [])) {
            // line 82
            echo "                            <td>
                                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/comprovantes/" . twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "comprovanteEucaristia", []))), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "nomePai", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nome da mae</th>
                        <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "nomeMae", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Casado? </th>
                        <td>";
        // line 101
        echo ((twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "casado", [])) ? ("Sim") : ("Não"));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Comprovante de Casamento </th>
                        ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "comprovanteCasamento", [])) {
            // line 106
            echo "                            <td>
                                <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/comprovantes/" . twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "comprovanteCasamento", []))), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "telefonePai", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telefone da mãe</th>
                        <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "telefoneMae", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nome do padrinho de crisma</th>
                        <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "nomePadrinhoCrisma", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telefone do padrinho</th>
                        <td>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "telPadrinho", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Endereço do padrinho</th>
                        <td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "enderecoPadrinho", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cidade do catequizando</th>
                        <td>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "cidadeCatequizando", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cidade do padrinho</th>
                        <td>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "cidadePadrinho", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["catequizando"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Editar</a>

    </div>
";
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
        return array (  281 => 148,  276 => 146,  268 => 141,  261 => 137,  254 => 133,  247 => 129,  240 => 125,  233 => 121,  226 => 117,  221 => 114,  215 => 110,  209 => 107,  206 => 106,  204 => 105,  197 => 101,  190 => 97,  183 => 93,  178 => 90,  172 => 86,  166 => 83,  163 => 82,  161 => 81,  154 => 77,  149 => 74,  143 => 70,  137 => 67,  134 => 66,  132 => 65,  125 => 61,  120 => 58,  114 => 54,  108 => 51,  105 => 50,  103 => 49,  96 => 45,  89 => 41,  82 => 37,  75 => 33,  68 => 29,  61 => 25,  54 => 21,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catequizando/show.html.twig", "/var/www/templates/catequizando/show.html.twig");
    }
}
