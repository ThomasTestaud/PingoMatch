<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profile/index.html.twig */
class __TwigTemplate_fcbaa8d6f547324caacd32113f6ead27 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>

    body {
        background-image: url(\"https://cdn.discordapp.com/attachments/1078070575697776650/1151662884867276810/layered-waves-haikei.png\") ;
        background-size: 100% 120%;
        background-repeat: no-repeat;
        height: 100vh;
    }

    a {
        text-decoration: none;
        color:#4F6D7A;
    }

    svg {
        position: fixed;
        width: 31px;
        height: auto;
        border-radius:50%;
        transition: 0.2s all ease-in-out;
    }

    svg:hover {
        background-color:rgba(0,0,0,0.1);
    }

    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

    img {
        height: 250px;
        width: 250px;
        border-radius: 50%;
        margin: auto;
    }
    #display {
        display: flex;
        flex-direction: column;
        padding: 20px;
    }

    p {
        font-family: 'Poppins', sans-serif;
    }

    h2, h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 17px;
        font-weight: bold;
    }

    .titleProfile {
        font-weight: bold;
        font-family: 'Pacifico', cursive;
        font-size: 23px;
        text-align: center;
        padding-bottom: 70px;
        color: #EC3254;
    }

    .contentDescription {
        padding-top: 70px;
    }

    .nameUser {
        padding-bottom: 20px;
    }

    footer {
        position: absolute;
        bottom: 3%;
        left: 50%;
        transform: translate(-50%, -2%);
    }

    footer p {
        font-size: 10px;
        font-weight:300;
        text-transform: capitalize;
    }

</style>

";
        // line 114
        echo "<div class=\"example-wrapper\">
   <a href=\"/mached\"> 
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75\" />
        </svg>
    </a>
    <p id=\"user-data\" style=\"display:none;\">";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "<p>
    <div id=\"display\"></div>
</div>

<footer>
    <p>© PingoMatch, Haute-Savoie, Annecy | 2023</p>
</footer>

<script>
    const display = document.getElementById('display');
    const userData = JSON.parse(document.getElementById('user-data').innerHTML);
    let myUser = localStorage.getItem('myUser');

    myUser = userData.find((user) => user.Name === myUser);
    console.log(myUser);

    display.innerHTML = `
        <img src=\"\${myUser.img}\"/>
        <div class=\"contentDescription\">
            <h2 class=\"titleProfile\">Bienvenue sur mon profil</h2>
            <p>Nom</p>
            <h2 class=\"nameUser\">\${myUser.Name}</h2>
            <p>Description</p>
            <h3>\${myUser.Description}</h3>
        </div>
    `;

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 120,  173 => 114,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}
<style>

    body {
        background-image: url(\"https://cdn.discordapp.com/attachments/1078070575697776650/1151662884867276810/layered-waves-haikei.png\") ;
        background-size: 100% 120%;
        background-repeat: no-repeat;
        height: 100vh;
    }

    a {
        text-decoration: none;
        color:#4F6D7A;
    }

    svg {
        position: fixed;
        width: 31px;
        height: auto;
        border-radius:50%;
        transition: 0.2s all ease-in-out;
    }

    svg:hover {
        background-color:rgba(0,0,0,0.1);
    }

    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

    img {
        height: 250px;
        width: 250px;
        border-radius: 50%;
        margin: auto;
    }
    #display {
        display: flex;
        flex-direction: column;
        padding: 20px;
    }

    p {
        font-family: 'Poppins', sans-serif;
    }

    h2, h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 17px;
        font-weight: bold;
    }

    .titleProfile {
        font-weight: bold;
        font-family: 'Pacifico', cursive;
        font-size: 23px;
        text-align: center;
        padding-bottom: 70px;
        color: #EC3254;
    }

    .contentDescription {
        padding-top: 70px;
    }

    .nameUser {
        padding-bottom: 20px;
    }

    footer {
        position: absolute;
        bottom: 3%;
        left: 50%;
        transform: translate(-50%, -2%);
    }

    footer p {
        font-size: 10px;
        font-weight:300;
        text-transform: capitalize;
    }

</style>

{# <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">PingoMatch</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link btn\" href=\"/\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn\" href=\"/mached\">Vos matchs</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn\" href=\"/profile\">Votre profil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn btn-danger\" href=\"/login\">Déconnexion</a>
                </li>

            </ul>
        </div>
    </div>
</nav> #}
<div class=\"example-wrapper\">
   <a href=\"/mached\"> 
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75\" />
        </svg>
    </a>
    <p id=\"user-data\" style=\"display:none;\">{{users}}<p>
    <div id=\"display\"></div>
</div>

<footer>
    <p>© PingoMatch, Haute-Savoie, Annecy | 2023</p>
</footer>

<script>
    const display = document.getElementById('display');
    const userData = JSON.parse(document.getElementById('user-data').innerHTML);
    let myUser = localStorage.getItem('myUser');

    myUser = userData.find((user) => user.Name === myUser);
    console.log(myUser);

    display.innerHTML = `
        <img src=\"\${myUser.img}\"/>
        <div class=\"contentDescription\">
            <h2 class=\"titleProfile\">Bienvenue sur mon profil</h2>
            <p>Nom</p>
            <h2 class=\"nameUser\">\${myUser.Name}</h2>
            <p>Description</p>
            <h3>\${myUser.Description}</h3>
        </div>
    `;

</script>
{% endblock %}
", "profile/index.html.twig", "C:\\wamp64\\www\\C_O_D_E\\Pingo_Match\\PingoMatch\\templates\\profile\\index.html.twig");
    }
}
