<?php

/* catequizando/new.html.twig */
class __TwigTemplate_996f40fbdde6a610cbc94d3c9b860fcccd67106c8ada599744532fb7beee676b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catequizando/new.html.twig", 1);
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
                <h6 class=\"m-0 font-weight-bold text-primary\">Cadastro de catequizandos</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>

        </div>
    </div>
    <div class=\"card-body\">

            ";
        // line 16
        echo twig_include($this->env, $context, "catequizando/_form.html.twig");
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "catequizando/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catequizando/new.html.twig", "/var/www/templates/catequizando/new.html.twig");
    }
}
