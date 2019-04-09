<?php

/* catequista/show.html.twig */
class __TwigTemplate_481fffdcbc2a3b19e72e30101f70ac4d09394fe453f4fb796edf9b86288863d5 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catequista/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if (((twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 4, $this->source); })()), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "user", []), "id", [])) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COORDENADOR"))) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 22, $this->source); })()), "nome", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Idade</th>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 26, $this->source); })()), "idade", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Endereço</th>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 30, $this->source); })()), "endereco", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Cidade</th>
                                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 34, $this->source); })()), "cidade", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Sexo</th>
                                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 38, $this->source); })()), "sexo", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Data de nascimento</th>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 42, $this->source); })()), "dataNascimento", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 42, $this->source); })()), "dataNascimento", []), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Telefone</th>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 46, $this->source); })()), "telefone", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 50, $this->source); })()), "email", []), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Usuario</th>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 54, $this->source); })()), "usuario", []), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 66, $this->source); })()), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Editar</a>
            ";
            } else {
                // line 68
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequista_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["catequistum"]) || array_key_exists("catequistum", $context) ? $context["catequistum"] : (function () { throw new Twig_Error_Runtime('Variable "catequistum" does not exist.', 68, $this->source); })()), "id", [])]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  163 => 74,  160 => 73,  157 => 72,  151 => 69,  146 => 68,  141 => 66,  135 => 64,  133 => 63,  121 => 54,  114 => 50,  107 => 46,  100 => 42,  93 => 38,  86 => 34,  79 => 30,  72 => 26,  65 => 22,  46 => 5,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
{% if catequistum.id == app.user.id or is_granted('ROLE_COORDENADOR')%}
        <div class=\"card shadow mb-4\">
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
                                        <td>{{ catequistum.nome }}</td>
                                    </tr>
                                    <tr>
                                        <th>Idade</th>
                                        <td>{{ catequistum.idade }}</td>
                                    </tr>
                                    <tr>
                                        <th>Endereço</th>
                                        <td>{{ catequistum.endereco }}</td>
                                    </tr>
                                    <tr>
                                        <th>Cidade</th>
                                        <td>{{ catequistum.cidade }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sexo</th>
                                        <td>{{ catequistum.sexo }}</td>
                                    </tr>
                                    <tr>
                                        <th>Data de nascimento</th>
                                        <td>{{ catequistum.dataNascimento ? catequistum.dataNascimento|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Telefone</th>
                                        <td>{{ catequistum.telefone }}</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td>{{ catequistum.email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Usuario</th>
                                        <td>{{ catequistum.usuario }}</td>
                                    </tr>

                                </tbody>
                            </table>
                </div>

            </div>
        </div>
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('catequista_index') }}\" class=\"btn btn-secondary\">Voltar</a>

                <a href=\"{{ path('catequista_edit', {'id': catequistum.id}) }}\" class=\"btn btn-primary\">Editar</a>
            {% else %}
                <a href=\"{{ path('catequista_edit', {'id': catequistum.id}) }}\" class=\"btn btn-primary\">Editar</a>
                <a href=\"{{ path('catequizando_index') }}\" class=\"btn btn-secondary\">Voltar</a>

            {% endif %}
    {% else %}
        {% include 'includes/404.html.twig' %}
    {% endif %}
{% endblock %}
", "catequista/show.html.twig", "/var/www/catequese/templates/catequista/show.html.twig");
    }
}
