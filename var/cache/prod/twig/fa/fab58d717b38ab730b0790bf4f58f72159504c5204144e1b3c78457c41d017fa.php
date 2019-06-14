<?php

/* catequista/show.html.twig */
class __TwigTemplate_866b634ba1554117b0351654c93ed8da4a0e0a81f089100b429e31a2c8f562a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catequista/show.html.twig", 1);
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
        if (((twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "id", [])) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR"))) {
            // line 5
            echo "        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Perfil Catequista</h6>
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
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "nome", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Idade</th>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "idade", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Endereço</th>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "endereco", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Cidade</th>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "cidade", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Sexo</th>
                                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "sexo", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Data de nascimento</th>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "dataNascimento", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "dataNascimento", []), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Telefone</th>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "telefone", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "email", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Usuario</th>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "usuario", []), "html", null, true);
            echo "</td>
                                    </tr>

                                </tbody>
                            </table>
                </div>

            </div>
        </div>
            ";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 64
                echo "                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_index");
                echo "\" class=\"btn btn-secondary\">Voltar</a>

                <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Editar</a>
            ";
            } else {
                // line 68
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Editar</a>
                <a href=\"";
                // line 69
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_index");
                echo "\" class=\"btn btn-secondary\">Voltar</a>

            ";
            }
            // line 72
            echo "    ";
        } else {
            // line 73
            echo "        ";
            $this->loadTemplate("includes/404.html.twig", "catequista/show.html.twig", 73)->display($context);
            // line 74
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "catequista/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 74,  151 => 73,  148 => 72,  142 => 69,  137 => 68,  132 => 66,  126 => 64,  124 => 63,  112 => 54,  105 => 50,  98 => 46,  91 => 42,  84 => 38,  77 => 34,  70 => 30,  63 => 26,  56 => 22,  37 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catequista/show.html.twig", "/var/www/templates/catequista/show.html.twig");
    }
}
