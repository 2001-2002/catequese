<?php

/* includes/404.html.twig */
class __TwigTemplate_e6cdbf997ebaf2d8e73bc63ca966f562610f8eb8867e60814cbcbc1f9b7d60a3 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/404.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">

  <!-- 404 Error Text -->
  <div class=\"text-center\">
    <div class=\"error mx-auto\" data-text=\"404\">404</div>
    <p class=\"lead text-gray-800 mb-5\">Página não encontrada</p>
    <p class=\"text-gray-500 mb-0\">Parece que você tentou acessar um conteúdo inexistente...</p>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catequizando_index");
        echo "\">&larr; Volte para a nossa página inicial!</a>
  </div>

</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid\">

  <!-- 404 Error Text -->
  <div class=\"text-center\">
    <div class=\"error mx-auto\" data-text=\"404\">404</div>
    <p class=\"lead text-gray-800 mb-5\">Página não encontrada</p>
    <p class=\"text-gray-500 mb-0\">Parece que você tentou acessar um conteúdo inexistente...</p>
    <a href=\"{{ path('catequizando_index') }}\">&larr; Volte para a nossa página inicial!</a>
  </div>

</div>", "includes/404.html.twig", "/var/www/catequese/templates/includes/404.html.twig");
    }
}
