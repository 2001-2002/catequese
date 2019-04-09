<?php

/* catequizando/index.html.twig */
class __TwigTemplate_ea8131201f974ed577c2ae0e46288f1353089642d1462c347a36ff5a5d775238 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["catequizandos"] ?? null));
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
        return array (  152 => 73,  143 => 69,  132 => 63,  128 => 62,  118 => 55,  107 => 53,  102 => 52,  98 => 50,  94 => 48,  92 => 47,  88 => 46,  85 => 45,  80 => 44,  45 => 12,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catequizando/index.html.twig", "/var/www/templates/catequizando/index.html.twig");
    }
}
