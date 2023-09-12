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

/* login/index.html.twig */
class __TwigTemplate_98b05711dd0b434d40295e6c0a1347c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
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

        echo "Hello LoginController!";
        
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
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"mb-4\">
            <div class=\"text-center bg-primary text-white py-4\">
                <h1 class=\"display-4\">PingoMatch</h1>
                <p class=\"lead\">Pôle de Rencontres</p>
            </div>
        </div>

<div class=\"example-wrapper\">
    <div>
        <label for=\"username\" class=\"form-label\">Username:</label>
        <input type=\"text\" name=\"username\" id=\"username\" class=\"form-control\"><br>
        <label for=\"password\" class=\"form-label\">Password:</label>
        <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\"><br>
        <p id=\"user-data\" style=\"display:none;\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</p>
        <p style=\"color:red;\" id=\"errors\"></p>
        <button id=\"connect\" class=\"btn btn-primary\">Connexion</button>
    </div>
    <a href=\"/signin\" class=\"btn btn-secondary\">Créer un compte</a>
</div>


<script>
    const userData = JSON.parse(document.getElementById('user-data').innerHTML);
    const connectBtn = document.getElementById('connect');
    const errors = document.getElementById('errors');
    console.log(typeof userData);

    function connect() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        if(username !== '' && password !== \"\") {
            const result = userData.find((user) => user.Name === username);
            if(result.Password === password) {
                localStorage.setItem(\"myUser\", username);
                errors.innerHTML = \"\";
                window.location.href = \"/\";
            }else {
                errors.innerHTML = \"Nom d'utilisateur ou MDP inccorect\";
            }
        }else {
            errors.innerHTML = \"Nom d'utilisateur ou MDP inccorect\";
        }

    }

    connectBtn.addEventListener('click', () => {
        connect();
    })
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello LoginController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"mb-4\">
            <div class=\"text-center bg-primary text-white py-4\">
                <h1 class=\"display-4\">PingoMatch</h1>
                <p class=\"lead\">Pôle de Rencontres</p>
            </div>
        </div>

<div class=\"example-wrapper\">
    <div>
        <label for=\"username\" class=\"form-label\">Username:</label>
        <input type=\"text\" name=\"username\" id=\"username\" class=\"form-control\"><br>
        <label for=\"password\" class=\"form-label\">Password:</label>
        <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\"><br>
        <p id=\"user-data\" style=\"display:none;\">{{users}}</p>
        <p style=\"color:red;\" id=\"errors\"></p>
        <button id=\"connect\" class=\"btn btn-primary\">Connexion</button>
    </div>
    <a href=\"/signin\" class=\"btn btn-secondary\">Créer un compte</a>
</div>


<script>
    const userData = JSON.parse(document.getElementById('user-data').innerHTML);
    const connectBtn = document.getElementById('connect');
    const errors = document.getElementById('errors');
    console.log(typeof userData);

    function connect() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        if(username !== '' && password !== \"\") {
            const result = userData.find((user) => user.Name === username);
            if(result.Password === password) {
                localStorage.setItem(\"myUser\", username);
                errors.innerHTML = \"\";
                window.location.href = \"/\";
            }else {
                errors.innerHTML = \"Nom d'utilisateur ou MDP inccorect\";
            }
        }else {
            errors.innerHTML = \"Nom d'utilisateur ou MDP inccorect\";
        }

    }

    connectBtn.addEventListener('click', () => {
        connect();
    })
</script>
{% endblock %}
", "login/index.html.twig", "C:\\wamp64\\www\\C_O_D_E\\Pingo_Match\\PingoMatch\\templates\\login\\index.html.twig");
    }
}
