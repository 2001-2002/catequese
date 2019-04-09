<?php

/* turma/show.html.twig */
class __TwigTemplate_72d60c6bb799cbe2be3e0d5ce08dda8e03ebe717b1fb266c346da74a4c7bd9f2 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "turma/show.html.twig"));

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
                <h6 class=\"m-0 font-weight-bold text-primary\">Turma ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 8, $this->source); })()), "nome", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 8, $this->source); })()), "etapa", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 8, $this->source); })()), "numeroEtapa", []), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 20, $this->source); })()), "nome", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Etapa</th>
                        <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 24, $this->source); })()), "etapa", []), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Numero da etapa</th>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 28, $this->source); })()), "numeroEtapa", []), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["turma"]) || array_key_exists("turma", $context) ? $context["turma"] : (function () { throw new Twig_Error_Runtime('Variable "turma" does not exist.', 35, $this->source); })()), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Editar</a>
        ";
        }
        // line 37
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  103 => 37,  97 => 35,  95 => 34,  91 => 33,  83 => 28,  76 => 24,  69 => 20,  50 => 8,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Turma {{ turma.nome }} {{ turma.etapa }} {{ turma.numeroEtapa }}</h6>
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
                        <td>{{ turma.nome }}</td>
                    </tr>
                    <tr>
                        <th>Etapa</th>
                        <td>{{ turma.etapa }}</td>
                    </tr>
                    <tr>
                        <th>Numero da etapa</th>
                        <td>{{ turma.numeroEtapa }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href=\"{{ path('turma_index') }}\" class=\"btn btn-secondary\">Voltar</a>
        {% if is_granted('ROLE_COORDENADOR') %}
            <a href=\"{{ path('turma_edit', {'id': turma.id}) }}\" class=\"btn btn-primary\">Editar</a>
        {% endif %}
    </div>
</div>
{% endblock %}
", "turma/show.html.twig", "/var/www/catequese/templates/turma/show.html.twig");
    }
}
