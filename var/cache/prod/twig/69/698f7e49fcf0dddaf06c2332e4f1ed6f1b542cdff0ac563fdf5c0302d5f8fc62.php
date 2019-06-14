<?php

/* catequista/new.html.twig */
class __TwigTemplate_715b0412ac856c6e84ed51bafd434d4f1ce7fc929cf787dc7d97eb5a1d75fa4e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catequista/new.html.twig", 1);
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
            <div class=\"col-md-12\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Cadastrar Catequista</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>
        </div>
    </div>
    <div class=\"card-body\">
        ";
        // line 14
        echo twig_include($this->env, $context, "catequista/_form.html.twig");
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catequista/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catequista/new.html.twig", "/var/www/templates/catequista/new.html.twig");
    }
}
