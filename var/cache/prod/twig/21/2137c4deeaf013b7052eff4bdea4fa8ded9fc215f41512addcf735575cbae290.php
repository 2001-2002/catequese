<?php

/* turma/lista.html.twig */
class __TwigTemplate_53eb49654f776ee94fbc50c9426be141131eed907640d8725500f818f46cccbf extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"card shadow mb-4\">
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
                <div class=\"col-md-6 text-right\">
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_chamada", ["turma" => twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "id", []), "option" => 0]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["lista"] ?? null));
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
        return array (  101 => 36,  92 => 32,  84 => 29,  80 => 28,  77 => 27,  72 => 26,  62 => 18,  60 => 17,  52 => 12,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "turma/lista.html.twig", "/var/www/templates/turma/lista.html.twig");
    }
}
