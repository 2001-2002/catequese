<?php

/* escola/show.html.twig */
class __TwigTemplate_457041cfc992e19a4a36c9f8e9cecdf5ff580bb987fc66d195b99e41bbd42541 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "escola/show.html.twig"));

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
                <h6 class=\"m-0 font-weight-bold text-primary\">Escola ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escola"]) || array_key_exists("escola", $context) ? $context["escola"] : (function () { throw new Twig_Error_Runtime('Variable "escola" does not exist.', 8, $this->source); })()), "nome", []), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escola"]) || array_key_exists("escola", $context) ? $context["escola"] : (function () { throw new Twig_Error_Runtime('Variable "escola" does not exist.', 19, $this->source); })()), "nome", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Endereco</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escola"]) || array_key_exists("escola", $context) ? $context["escola"] : (function () { throw new Twig_Error_Runtime('Variable "escola" does not exist.', 23, $this->source); })()), "endereco", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cidade</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escola"]) || array_key_exists("escola", $context) ? $context["escola"] : (function () { throw new Twig_Error_Runtime('Variable "escola" does not exist.', 27, $this->source); })()), "cidade", []), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escola_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["escola"]) || array_key_exists("escola", $context) ? $context["escola"] : (function () { throw new Twig_Error_Runtime('Variable "escola" does not exist.', 35, $this->source); })()), "id", [])]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escola"]) || array_key_exists("escola", $context) ? $context["escola"] : (function () { throw new Twig_Error_Runtime('Variable "escola" does not exist.', 44, $this->source); })()), "nome", []), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  194 => 94,  185 => 90,  174 => 84,  170 => 83,  160 => 76,  156 => 75,  150 => 74,  146 => 73,  143 => 72,  138 => 71,  108 => 44,  99 => 37,  93 => 35,  91 => 34,  87 => 33,  78 => 27,  71 => 23,  64 => 19,  50 => 8,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Escola {{ escola.nome }}</h6>
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
                        <td>{{ escola.nome }}</td>
                    </tr>
                    <tr>
                        <th>Endereco</th>
                        <td>{{ escola.endereco }}</td>
                    </tr>
                    <tr>
                        <th>Cidade</th>
                        <td>{{ escola.cidade }}</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <a href=\"{{ path('escola_index') }}\" class=\"btn btn-secondary\">Voltar</a>
        {% if is_granted('ROLE_COORDENADOR') %}
            <a href=\"{{ path('escola_edit', {'id': escola.id}) }}\" class=\"btn btn-primary\">Editar</a>
        {% endif %}
    </div>
</div>
    <div class=\"card shadow mb-4\">

        <div class=\"card-header py-3\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Turmas da {{ escola.nome }}</h6>
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
                    {% for turma in turma %}
                        <tr>
                            <td>{{ turma.nome }}</td>
                            <td>{{ turma.etapa }} {{ turma.numeroEtapa }}</td>
                            <td>{{ turma.catequista|join(', ', ' e ') }}</td>
                            <td>{{ turma.escola }}</td>
                            <td>
                                <div class=\"dropdown mb-4\">
                                    <button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Ações
                                    </button>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        <a class=\"dropdown-item\" href=\"{{ path('turma_show', {'id': turma.id}) }}\">Mostrar</a>
                                        <a class=\"dropdown-item\" href=\"{{ path('turma_lista', {'id': turma.id}) }}\">Ver catequizandos</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"alert-warning\">Não possui turmas cadastradas!</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

            </div>
        </div>
    </div>
{% endblock %}
", "escola/show.html.twig", "/var/www/catequese/templates/escola/show.html.twig");
    }
}
