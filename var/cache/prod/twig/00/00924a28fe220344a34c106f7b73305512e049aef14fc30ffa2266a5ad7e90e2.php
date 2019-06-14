<?php

/* turma/new.html.twig */
class __TwigTemplate_f307212edc2352b41c7471a53544d66885d313bbd4638f67feebca9233a1b3bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "turma/new.html.twig", 1);
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
                <h6 class=\"m-0 font-weight-bold text-primary\">Cadastro de Turma</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>
        </div>
    </div>
    <div class=\"card-body\">
        ";
        // line 14
        echo twig_include($this->env, $context, "turma/_form.html.twig");
        echo "

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "turma/new.html.twig";
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
        return new Twig_Source("", "turma/new.html.twig", "/var/www/templates/turma/new.html.twig");
    }
}
