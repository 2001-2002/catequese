<?php

/* security/login.html.twig */
class __TwigTemplate_281701eb0c42fbe2bfa0db8907a8d150367da19a3cd8bb807ee7206b91e9e6e6 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 42, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 42, $this->source); })()), "messageData", []), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 46, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  221 => 137,  219 => 136,  216 => 134,  214 => 133,  212 => 132,  210 => 131,  208 => 130,  206 => 129,  203 => 127,  201 => 126,  199 => 125,  196 => 123,  194 => 122,  192 => 121,  189 => 119,  187 => 118,  185 => 117,  183 => 116,  181 => 115,  178 => 113,  176 => 112,  174 => 111,  172 => 110,  169 => 107,  139 => 78,  137 => 77,  135 => 76,  133 => 75,  131 => 74,  129 => 73,  127 => 72,  125 => 71,  123 => 70,  121 => 69,  119 => 68,  117 => 67,  115 => 66,  113 => 65,  111 => 64,  103 => 58,  100 => 57,  98 => 56,  96 => 55,  94 => 54,  92 => 53,  90 => 52,  82 => 46,  76 => 44,  70 => 42,  68 => 41,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
                                {% if error %}
                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}
                                <form class=\"user\" method=\"post\" action=\"{{ path('app_login') }}\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" value=\"{{ last_username }}\" name=\"usuario\" id=\"inputUsuario\" class=\"form-control\" placeholder=\"Usuario\" required autofocus>
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Senha\" required>
                                    </div>
                                    {#<div class=\"form-group\">#}
                                        {#<div class=\"custom-control custom-checkbox small\">#}
                                            {#<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">#}
                                            {#<label class=\"custom-control-label\" for=\"customCheck\">Remember Me</label>#}
                                        {#</div>#}
                                    {#</div>#}
                                    <input type=\"hidden\" name=\"_csrf_token\"
                                           value=\"{{ csrf_token('authenticate') }}\"
                                    >
                                    <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                                        Entrar
                                    </button>
                                    {#<hr>#}
                                    {#<a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">#}
                                        {#<i class=\"fab fa-google fa-fw\"></i> Login with Google#}
                                    {#</a>#}
                                    {#<a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">#}
                                        {#<i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook#}
                                    {#</a>#}
                                {#</form>#}
                                {#<hr>#}
                                {#<div class=\"text-center\">#}
                                    {#<a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>#}
                                {#</div>#}
                                {#<div class=\"text-center\">#}
                                    {#<a class=\"small\" href=\"register.html\">Create an Account!</a>#}
                                {#</div>#}
                            </div>
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



{#{% block title %}Log in!{% endblock %}#}

{#{% block body %}#}
{#<form method=\"post\">#}
    {#{% if error %}#}
        {#<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}
    {#{% endif %}#}

    {#<h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>#}
    {#<label for=\"inputUsuario\" class=\"sr-only\">Usuario</label>#}
    {#<input type=\"text\" value=\"{{ last_username }}\" name=\"usuario\" id=\"inputUsuario\" class=\"form-control\" placeholder=\"Usuario\" required autofocus>#}
    {#<label for=\"inputPassword\" class=\"sr-only\">Password</label>#}
    {#<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>#}

    {#<input type=\"hidden\" name=\"_csrf_token\"#}
           {#value=\"{{ csrf_token('authenticate') }}\"#}
    {#>#}

    {##}
        {#Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.#}
        {#See https://symfony.com/doc/current/security/remember_me.html#}

        {#<div class=\"checkbox mb-3\">#}
            {#<label>#}
                {#<input type=\"checkbox\" name=\"_remember_me\"> Remember me#}
            {#</label>#}
        {#</div>#}
    {##}

    {#<button class=\"btn btn-lg btn-primary\" type=\"submit\">#}
        {#Sign in#}
    {#</button>#}
{#</form>#}
{#{% endblock %}#}
", "security/login.html.twig", "/var/www/catequese/templates/security/login.html.twig");
    }
}
