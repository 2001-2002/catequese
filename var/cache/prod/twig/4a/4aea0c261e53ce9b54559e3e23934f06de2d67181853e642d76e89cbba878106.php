<?php

/* turma/_delete_form.html.twig */
class __TwigTemplate_27f506890b13146683022d1edb6de8b3d1ee5cd94cc24c5c02179c003b292327 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("turma_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "id", [])]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, ($context["turma"] ?? null), "id", []))), "html", null, true);
        echo "\">
    <button class=\"btn\">Delete</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "turma/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "turma/_delete_form.html.twig", "/var/www/templates/turma/_delete_form.html.twig");
    }
}
