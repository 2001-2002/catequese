<?php

/* includes/404.html.twig */
class __TwigTemplate_61b700098296b05d36d8e4135fb2e3cf35836abcd7fe973cc0b2f8e927f61af7 extends Twig_Template
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
        return array (  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "includes/404.html.twig", "/var/www/templates/includes/404.html.twig");
    }
}
