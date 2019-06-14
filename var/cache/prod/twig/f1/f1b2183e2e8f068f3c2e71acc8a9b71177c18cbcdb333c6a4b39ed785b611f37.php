<?php

/* turma/index.html.twig */
class __TwigTemplate_070273b8fe7ef033f4733284d2486159ec758b9a951fde5059a3296a6b225279 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "turma/index.html.twig", 1);
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
                <h6 class=\"m-0 font-weight-bold text-primary\">Lista de Turmas</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>
            <div class=\"col-md-6 text-right\">
                ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR")) {
            // line 13
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_new");
            echo "\" class=\"btn btn-primary\">Cadastrar nova</a>
                ";
        }
        // line 15
        echo "            </div>
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["turmas"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["turma"]) {
            // line 42
            echo "                    <tr>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turma"], "nome", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turma"], "etapa", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turma"], "numeroEtapa", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["turma"], "catequista", []), ", ", " e "), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escola_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["turma"], "escola", []), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turma"], "escola", []), "html", null, true);
            echo "</a></td>
                        <td>
                            <div class=\"dropdown mb-4\">
                                <button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Ações
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_show", ["id" => twig_get_attribute($this->env, $this->source, $context["turma"], "id", [])]), "html", null, true);
            echo "\">Mostrar</a>
                                    ";
            // line 54
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR")) {
                // line 55
                echo "                                        <a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["turma"], "id", [])]), "html", null, true);
                echo "\">Editar</a>
                                    ";
            }
            // line 57
            echo "                                    <a class=\"dropdown-item\" href=\"";
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
            // line 63
            echo "                    <tr>
                        <td colspan=\"5\" class=\"alert-warning\">Não possui turmas cadastradas!</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['turma'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </tbody>
            </table>

        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "turma/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 67,  139 => 63,  127 => 57,  121 => 55,  119 => 54,  115 => 53,  103 => 46,  99 => 45,  93 => 44,  89 => 43,  86 => 42,  81 => 41,  53 => 15,  47 => 13,  45 => 12,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "turma/index.html.twig", "/var/www/templates/turma/index.html.twig");
    }
}
