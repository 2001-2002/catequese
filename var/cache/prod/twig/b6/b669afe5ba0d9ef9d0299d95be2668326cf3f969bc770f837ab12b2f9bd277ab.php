<?php

/* catequista/edit.html.twig */
class __TwigTemplate_ee9077c28cae189daf98db720fb77f5abdba62a6d6c801427ce49e541a9a0fb1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catequista/edit.html.twig", 1);
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
        if (((twig_get_attribute($this->env, $this->source, ($context["catequistum"] ?? null), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "id", [])) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 5
            echo "<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Editar Catequista</h6>
                <small>Paroquia São Gabriel Arcanjo</small>
            </div>
        </div>
    </div>
    <div class=\"card-body\">

            ";
            // line 16
            echo twig_include($this->env, $context, "catequista/_form.html.twig", ["button_label" => "Editar"]);
            echo "

    </div>

</div>
";
        } else {
            // line 22
            echo "    ";
            $this->loadTemplate("includes/404.html.twig", "catequista/edit.html.twig", 22)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "catequista/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  50 => 16,  37 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catequista/edit.html.twig", "/var/www/templates/catequista/edit.html.twig");
    }
}
