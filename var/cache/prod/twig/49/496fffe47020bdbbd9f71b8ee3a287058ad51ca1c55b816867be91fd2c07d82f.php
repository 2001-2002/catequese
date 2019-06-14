<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_43acc905346edffaf215e05f9d17731d913603046f6f93cb15e8c4fea3fe1ab3 extends Twig_Template
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
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/hidden_row.html.php", "/var/www/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
