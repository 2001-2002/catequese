<?php

/* escola/index.html.twig */
class __TwigTemplate_f7caa085667b9db8ce3997da1f752984e2caa9c2a9e863370d4cf397cea0390f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "escola/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "escola/index.html.twig"));

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
                <h6 class=\"m-0 font-weight-bold text-primary\">Lista de escolas</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>
            <div class=\"col-md-6 text-right\">
                ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR")) {
            // line 13
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escola_new");
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
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
                <tbody>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["escolas"]) || array_key_exists("escolas", $context) ? $context["escolas"] : (function () { throw new Twig_Error_Runtime('Variable "escolas" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["escola"]) {
            // line 40
            echo "                    <tr>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escola"], "nome", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escola"], "endereco", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escola"], "cidade", []), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"dropdown mb-4\">
                                <button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Ações
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escola_show", ["id" => twig_get_attribute($this->env, $this->source, $context["escola"], "id", [])]), "html", null, true);
            echo "\">Mostrar</a>
                                    ";
            // line 51
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR")) {
                // line 52
                echo "                                        <a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escola_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["escola"], "id", [])]), "html", null, true);
                echo "\">Editar</a>
                                    ";
            }
            // line 54
            echo "                                </div>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                    <tr>
                        <td colspan=\"5\" class=\"alert-warning\">Não possui escolas cadastradas!</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['escola'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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
        return "escola/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 63,  135 => 59,  126 => 54,  120 => 52,  118 => 51,  114 => 50,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  88 => 39,  62 => 15,  56 => 13,  54 => 12,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Lista de escolas</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>
            <div class=\"col-md-6 text-right\">
                {% if is_granted('ROLE_COORDENADOR') %}
                    <a href=\"{{ path('escola_new') }}\" class=\"btn btn-primary\">Cadastrar nova</a>
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"card-body\">

        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"tabela\" width=\"100%\" cellspacing=\"0\">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
                <tbody>
                {% for escola in escolas %}
                    <tr>
                        <td>{{ escola.nome }}</td>
                        <td>{{ escola.endereco }}</td>
                        <td>{{ escola.cidade }}</td>
                        <td>
                            <div class=\"dropdown mb-4\">
                                <button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    Ações
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                    <a class=\"dropdown-item\" href=\"{{ path('escola_show', {'id': escola.id}) }}\">Mostrar</a>
                                    {% if is_granted('ROLE_COORDENADOR') %}
                                        <a class=\"dropdown-item\" href=\"{{ path('escola_edit', {'id': escola.id}) }}\">Editar</a>
                                    {% endif %}
                                </div>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"alert-warning\">Não possui escolas cadastradas!</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}
", "escola/index.html.twig", "/var/www/catequese/templates/escola/index.html.twig");
    }
}
