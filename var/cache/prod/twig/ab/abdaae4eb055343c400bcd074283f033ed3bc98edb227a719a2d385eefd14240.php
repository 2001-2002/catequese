<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6e99cf9269bff2a70920335a4cbbf53551ff7ca6f5c39e8941f3d44737649300 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', ['type' => isset(\$type) ? \$type : 'text']) ?> %
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/percent_widget.html.php", "/var/www/vendor/symfony/framework-bundle/Resources/views/Form/percent_widget.html.php");
    }
}
