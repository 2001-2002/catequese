<?php

/* escola/show.html.twig */
class __TwigTemplate_985bd4d7dc7f769987e42eba5fc03687b406366b49e52d38ab2e33b809d46a85 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "escola/show.html.twig", 1);
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
                <h6 class=\"m-0 font-weight-bold text-primary\">Escola ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["escola"] ?? null), "nome", []), "html", null, true);
        echo "</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover table-striped\">
                <tbody>
                    <tr>
                        <th>Nome</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["escola"] ?? null), "nome", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Endereco</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["escola"] ?? null), "endereco", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cidade</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["escola"] ?? null), "cidade", []), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escola_index");
        echo "\" class=\"btn btn-secondary\">Voltar</a>
        ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR")) {
            // line 35
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escola_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["escola"] ?? null), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
        ";
        }
        // line 37
        echo "    </div>
</div>
    <div class=\"card shadow mb-4\">

        <div class=\"card-header py-3\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Turmas da ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["escola"] ?? null), "nome", []), "html", null, true);
        echo "</h6>
                    <small>Paroquia São Gabriel Arcanjo</small>
                </div>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"tabela\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Etapa</th>
                        <th>Catequistas</th>
                        <th>Escola</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Etapa</th>
                        <th>Catequistas</th>
                        <th>Escola</th>
                        <th>Ações</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["turma"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["turma"]) {
            // line 72
            echo "                        <tr>
                            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turma"], "nome", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turma"], "etapa", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turma"], "numeroEtapa", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["turma"], "catequista", []), ", ", " e "), "html", null, true);
            echo "</td>
                            <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turma"], "escola", []), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"dropdown mb-4\">
                                    <button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Ações
                                    </button>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_show", ["id" => twig_get_attribute($this->env, $this->source, $context["turma"], "id", [])]), "html", null, true);
            echo "\">Mostrar</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_lista", ["id" => twig_get_attribute($this->env, $this->source, $context["turma"], "id", [])]), "html", null, true);
            echo "\">Ver catequizandos</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "                        <tr>
                            <td colspan=\"5\" class=\"alert-warning\">Não possui turmas cadastradas!</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['turma'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                    </tbody>
                </table>

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "escola/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 94,  176 => 90,  165 => 84,  161 => 83,  151 => 76,  147 => 75,  141 => 74,  137 => 73,  134 => 72,  129 => 71,  99 => 44,  90 => 37,  84 => 35,  82 => 34,  78 => 33,  69 => 27,  62 => 23,  55 => 19,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "escola/show.html.twig", "/var/www/templates/escola/show.html.twig");
    }
}
