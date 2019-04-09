<?php

/* turma/show.html.twig */
class __TwigTemplate_4b4eeeef5f7c080158b1c7ec1e7464f8890f8cd2886c1a951ce05368bd540f7b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "turma/show.html.twig", 1);
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
                <h6 class=\"m-0 font-weight-bold text-primary\">Turma ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "nome", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "etapa", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "numeroEtapa", []), "html", null, true);
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
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "nome", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Etapa</th>
                        <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "etapa", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Numero da etapa</th>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "numeroEtapa", []), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_index");
        echo "\" class=\"btn btn-secondary\">Voltar</a>
        ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR")) {
            // line 35
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
        ";
        }
        // line 37
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "turma/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 37,  88 => 35,  86 => 34,  82 => 33,  74 => 28,  67 => 24,  60 => 20,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "turma/show.html.twig", "/var/www/templates/turma/show.html.twig");
    }
}
