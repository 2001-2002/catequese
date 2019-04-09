<?php

/* catequizando/edit.html.twig */
class __TwigTemplate_d22f3d07bb2b9ba0831d9cdd5f7d7c919d37eb9ca22654c26e145bd37e5be1d3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catequizando/edit.html.twig", 1);
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
                <h6 class=\"m-0 font-weight-bold text-primary\">Edição de catequizando</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>

        </div>
    </div>
    <div class=\"card-body\">
            ";
        // line 15
        echo twig_include($this->env, $context, "catequizando/_form.html.twig", ["button_label" => "Editar"]);
        echo "
    </div>



";
    }

    public function getTemplateName()
    {
        return "catequizando/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catequizando/edit.html.twig", "/var/www/templates/catequizando/edit.html.twig");
    }
}
