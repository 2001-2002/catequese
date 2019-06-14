<?php

/* escola/_form.html.twig */
class __TwigTemplate_b311e9144f4bbb52974cea276ca15cf099b4b17b4917ee53212920408a9d1ee1 extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escola_index");
        echo "\" class=\"btn btn-secondary\">Voltar</a>
    <button class=\"btn btn-primary\">";
        // line 4
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Cadastrar")) : ("Cadastrar")), "html", null, true);
        echo "</button>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "escola/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  35 => 4,  31 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "escola/_form.html.twig", "/var/www/templates/escola/_form.html.twig");
    }
}
