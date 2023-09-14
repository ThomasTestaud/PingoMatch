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

/* sign_in/index.html.twig */
class __TwigTemplate_72e1a44c2ae1b0661758a34b456f5f8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sign_in/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sign_in/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sign_in/index.html.twig", 1);
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

        echo "Sign In";
        
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
        height: 100vh;
        font-family: 'Poppins', sans-serif;
    }

    .example-wrapper { 
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 1em auto; 
        max-width: 800px;
        width: 80%;
        font: 18px/1.5 sans-serif; 
    }

    .example-wrapper form {
        display:flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
    }

    .example-wrapper code { 
        background: #F5F5F5; 
        padding: 2px 6px; 
    }

    a, .styleBtn {
        text-decoration: none;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 14px;
    }

    a:hover {
        color: #fff;
    }

    .headLogin {
        height:200px;
    }

    .lead {
        font-size:17px;
    }

    label {
        font-size: 16px;
        font-family: 'Poppins', sans-serif;
    }

    .btnConnection, .btnCreation {
        background-color: #EC3254;
        color: #fff;
        border: 0;
        border-radius: 30px;
        height: 45px;
        width: 220px;
    }

    .btnConnection {
        background-image: linear-gradient(to left bottom, #ef5773, #ef516d, #ee4b68, #ee4462, #ed3d5c, #ec3857, #ea3253, #e92c4e, #e72749, #e52244, #e21c3f, #e0153a);
    }

    .btnCreation {
        background-color: #EF8557;
        background-image: linear-gradient(to left bottom, #f3a07c, #f29b75, #f2966e, #f19167, #f08c60, #ef875a, #ef8354, #ee7e4e, #ee7947, #ed7440, #ed6f39, #ec6a32);
    }

    #btnLogin {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        height: 200px;
        transition: box-shadow 0.2s;
    }

    .btnConnection:hover {
        box-shadow: 2px 2px 5px rgba(0,0,0,0.4);
    }

    .btnConnection:active {
        box-shadow: 2px 2px 5px rgba(0,0,0,0.4) inset;
    }

    .btnCreation:hover {
        box-shadow: 2px 2px 5px rgba(0,0,0,0.4);
    }

    .btnCreation:active {
        box-shadow: 2px 2px 5px rgba(0,0,0,0.4) inset;
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


<div class=\"mb-4\">
            <div class=\"text-center text-black py-4 headLogin\">
                <h1 class=\"display-4\">PingoMatch</h1>
                <p class=\"lead\">Pôle de Rencontres</p>
            </div>
        </div>
<div class=\"example-wrapper\">
    <form method=\"POST\" action=\"\">
        <div class=\"mb-3\">
            <label for=\"login\" class=\"form-label\">Nom</label>
            <input type=\"text\" name=\"login\" class=\"form-control\">
        </div>
        <div class=\"mb-3\">
            <label for=\"password\" class=\"form-label\">Mot de passe</label>
            <input type=\"password\" name=\"password\" class=\"form-control\">
        </div>
        <div class=\"mb-3\">
            <label for=\"description\" class=\"form-label\">Description</label>
            <textarea name=\"description\" class=\"form-control\" cols=\"40\" rows=\"5\"></textarea>
        </div>
        <p style=\"color: red\">";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "</p>
        <div id=\"btnLogin\">
            <button type=\"submit\" class=\"btnConnection styleBtn\">Envoyer</button>
            <button class=\"btnCreation styleBtn\"><a href=\"/signin\">Créer un compte<a/></button>
        </div>
    </form>
</div>

<footer>
    <p>© PingoMatch, Haute-Savoie, Annecy | 2023</p>
</footer>

<script>
    

</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sign_in/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 139,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sign In{% endblock %}

{% block body %}
<style>
    body {
        height: 100vh;
        font-family: 'Poppins', sans-serif;
    }

    .example-wrapper { 
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 1em auto; 
        max-width: 800px;
        width: 80%;
        font: 18px/1.5 sans-serif; 
    }

    .example-wrapper form {
        display:flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
    }

    .example-wrapper code { 
        background: #F5F5F5; 
        padding: 2px 6px; 
    }

    a, .styleBtn {
        text-decoration: none;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 14px;
    }

    a:hover {
        color: #fff;
    }

    .headLogin {
        height:200px;
    }

    .lead {
        font-size:17px;
    }

    label {
        font-size: 16px;
        font-family: 'Poppins', sans-serif;
    }

    .btnConnection, .btnCreation {
        background-color: #EC3254;
        color: #fff;
        border: 0;
        border-radius: 30px;
        height: 45px;
        width: 220px;
    }

    .btnConnection {
        background-image: linear-gradient(to left bottom, #ef5773, #ef516d, #ee4b68, #ee4462, #ed3d5c, #ec3857, #ea3253, #e92c4e, #e72749, #e52244, #e21c3f, #e0153a);
    }

    .btnCreation {
        background-color: #EF8557;
        background-image: linear-gradient(to left bottom, #f3a07c, #f29b75, #f2966e, #f19167, #f08c60, #ef875a, #ef8354, #ee7e4e, #ee7947, #ed7440, #ed6f39, #ec6a32);
    }

    #btnLogin {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        height: 200px;
        transition: box-shadow 0.2s;
    }

    .btnConnection:hover {
        box-shadow: 2px 2px 5px rgba(0,0,0,0.4);
    }

    .btnConnection:active {
        box-shadow: 2px 2px 5px rgba(0,0,0,0.4) inset;
    }

    .btnCreation:hover {
        box-shadow: 2px 2px 5px rgba(0,0,0,0.4);
    }

    .btnCreation:active {
        box-shadow: 2px 2px 5px rgba(0,0,0,0.4) inset;
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


<div class=\"mb-4\">
            <div class=\"text-center text-black py-4 headLogin\">
                <h1 class=\"display-4\">PingoMatch</h1>
                <p class=\"lead\">Pôle de Rencontres</p>
            </div>
        </div>
<div class=\"example-wrapper\">
    <form method=\"POST\" action=\"\">
        <div class=\"mb-3\">
            <label for=\"login\" class=\"form-label\">Nom</label>
            <input type=\"text\" name=\"login\" class=\"form-control\">
        </div>
        <div class=\"mb-3\">
            <label for=\"password\" class=\"form-label\">Mot de passe</label>
            <input type=\"password\" name=\"password\" class=\"form-control\">
        </div>
        <div class=\"mb-3\">
            <label for=\"description\" class=\"form-label\">Description</label>
            <textarea name=\"description\" class=\"form-control\" cols=\"40\" rows=\"5\"></textarea>
        </div>
        <p style=\"color: red\">{{result}}</p>
        <div id=\"btnLogin\">
            <button type=\"submit\" class=\"btnConnection styleBtn\">Envoyer</button>
            <button class=\"btnCreation styleBtn\"><a href=\"/signin\">Créer un compte<a/></button>
        </div>
    </form>
</div>

<footer>
    <p>© PingoMatch, Haute-Savoie, Annecy | 2023</p>
</footer>

<script>
    

</script>

{% endblock %}
", "sign_in/index.html.twig", "C:\\wamp64\\www\\C_O_D_E\\Pingo_Match\\PingoMatch\\templates\\sign_in\\index.html.twig");
    }
}
