<?php

/* security/login.html.twig */
class __TwigTemplate_a879192a1e8b36627587f7d8b3a17e36adfdea274b5da021f09118b66caf5a22 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Catequese - Login</title>

    <!-- Custom fonts for this template-->
    <link href=\"/admin/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"/admin/css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head>

<body class=\"bg-gradient-primary\">

<div class=\"container\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

        <div class=\"col-xl-10 col-lg-12 col-md-9\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-4\">Faça seu login!</h1>
                                </div>
                                ";
        // line 41
        if (($context["error"] ?? null)) {
            // line 42
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", []), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", []), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 44
        echo "                                <form class=\"user\" method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"usuario\" id=\"inputUsuario\" class=\"form-control\" placeholder=\"Usuario\" required autofocus>
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Senha\" required>
                                    </div>
                                    ";
        // line 52
        echo "                                        ";
        // line 53
        echo "                                            ";
        // line 54
        echo "                                            ";
        // line 55
        echo "                                        ";
        // line 56
        echo "                                    ";
        // line 57
        echo "                                    <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                    >
                                    <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                                        Entrar
                                    </button>
                                    ";
        // line 64
        echo "                                    ";
        // line 65
        echo "                                        ";
        // line 66
        echo "                                    ";
        // line 67
        echo "                                    ";
        // line 68
        echo "                                        ";
        // line 69
        echo "                                    ";
        // line 70
        echo "                                ";
        // line 71
        echo "                                ";
        // line 72
        echo "                                ";
        // line 73
        echo "                                    ";
        // line 74
        echo "                                ";
        // line 75
        echo "                                ";
        // line 76
        echo "                                    ";
        // line 77
        echo "                                ";
        // line 78
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src=\"/admin/vendor/jquery/jquery.min.js\"></script>
<script src=\"/admin/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

<!-- Core plugin JavaScript-->
<script src=\"/admin/vendor/jquery-easing/jquery.easing.min.js\"></script>

<!-- Custom scripts for all pages-->
<script src=\"/admin/js/sb-admin-2.min.js\"></script>

</body>

</html>



";
        // line 107
        echo "
";
        // line 110
        echo "    ";
        // line 111
        echo "        ";
        // line 112
        echo "    ";
        // line 113
        echo "
    ";
        // line 115
        echo "    ";
        // line 116
        echo "    ";
        // line 117
        echo "    ";
        // line 118
        echo "    ";
        // line 119
        echo "
    ";
        // line 121
        echo "           ";
        // line 122
        echo "    ";
        // line 123
        echo "
    ";
        // line 125
        echo "        ";
        // line 126
        echo "        ";
        // line 127
        echo "
        ";
        // line 129
        echo "            ";
        // line 130
        echo "                ";
        // line 131
        echo "            ";
        // line 132
        echo "        ";
        // line 133
        echo "    ";
        // line 134
        echo "
    ";
        // line 136
        echo "        ";
        // line 137
        echo "    ";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 137,  216 => 136,  213 => 134,  211 => 133,  209 => 132,  207 => 131,  205 => 130,  203 => 129,  200 => 127,  198 => 126,  196 => 125,  193 => 123,  191 => 122,  189 => 121,  186 => 119,  184 => 118,  182 => 117,  180 => 116,  178 => 115,  175 => 113,  173 => 112,  171 => 111,  169 => 110,  166 => 107,  136 => 78,  134 => 77,  132 => 76,  130 => 75,  128 => 74,  126 => 73,  124 => 72,  122 => 71,  120 => 70,  118 => 69,  116 => 68,  114 => 67,  112 => 66,  110 => 65,  108 => 64,  100 => 58,  97 => 57,  95 => 56,  93 => 55,  91 => 54,  89 => 53,  87 => 52,  79 => 46,  73 => 44,  67 => 42,  65 => 41,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.html.twig", "/var/www/templates/security/login.html.twig");
    }
}
