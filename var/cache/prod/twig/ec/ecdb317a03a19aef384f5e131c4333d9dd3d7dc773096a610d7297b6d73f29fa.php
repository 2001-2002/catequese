<?php

/* catequista/index.html.twig */
class __TwigTemplate_5dbd0f1ffb72136cb18b6396cc4ae1485644794697f117377525512dfb8222d9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catequista/index.html.twig", 1);
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
                <h6 class=\"m-0 font-weight-bold text-primary\">Lista de catequistas</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>
            <div class=\"col-md-6 text-right\">
                ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_new");
            echo "\" class=\"btn btn-primary\">Cadastrar novo</a>
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
                        <th>Idade</th>
                        <th>Sexo</th>
                        <th>Data de nascimento</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Usuario</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Sexo</th>
                        <th>Data de nascimento</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Usuario</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
                <tbody>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["catequistas"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["catequistum"]) {
            // line 48
            echo "                    <tr>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catequistum"], "nome", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catequistum"], "idade", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catequistum"], "sexo", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["catequistum"], "dataNascimento", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catequistum"], "dataNascimento", []), "d/m/Y")) : ("")), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catequistum"], "telefone", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catequistum"], "email", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catequistum"], "usuario", []), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"dropdown mb-4\">
                                <button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Ações
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_show", ["id" => twig_get_attribute($this->env, $this->source, $context["catequistum"], "id", [])]), "html", null, true);
            echo "\">Mostrar</a>
                                    ";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 64
                echo "                                        <a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["catequistum"], "id", [])]), "html", null, true);
                echo "\">Editar</a>
                                    ";
            }
            // line 66
            echo "                                </div>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                    <tr>
                        <td colspan=\"12\" class=\"alert-warning\">Não possui catequistas cadastrados(as)!</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catequistum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </tbody>
            </table>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "catequista/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 75,  150 => 71,  141 => 66,  135 => 64,  133 => 63,  129 => 62,  119 => 55,  115 => 54,  111 => 53,  107 => 52,  103 => 51,  99 => 50,  95 => 49,  92 => 48,  87 => 47,  53 => 15,  47 => 13,  45 => 12,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catequista/index.html.twig", "/var/www/templates/catequista/index.html.twig");
    }
}
