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

/* scroll_page/index.html.twig */
class __TwigTemplate_409d43030cba83fb328ea21d6efea7ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scroll_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scroll_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "scroll_page/index.html.twig", 1);
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

        echo "Hello ScrollPageController!";
        
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

    .example-wrapper {
        position: relative;
    }

    .scroll-card {
        position: absolute;
        box-shadow: 2px 2px 2px;
        border-radius: 15px;
        background-color: white;
        width: 300px;
        height: 430px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        top: 10px;
        overflow: hidden;
        left: 50%;
        transform: translate(-50%, 0%);
        user-select: none;
    }
    
    h2 {
        margin: 1px;
        
    }

    .scroll-card img {
        height: 300px;
        object-fit: contain;
        transition: transform 0.3s;
         pointer-events: none; 
         user-select: none;
    }

    img:hover {
        transform: scale(1.02) rotate(1deg);
    }

    .card-body {
        width: 100%;
        background-color: white;
        z-index:2;
        line-height: 1;
        text-align: center;
    }

    .none {
        display: none;
    }

</style>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
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
</nav>
<div class=\"example-wrapper\">
    <p class=\"text-center pt-5\">Vous avez parcouru tous les utilisateurs...</p>
    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 89
            echo "    <div class=\"scroll-card card border-secondary mb-3\">
        <img src=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 90), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Name", [], "any", false, false, false, 90), "html", null, true);
            echo "\">
        <div class=\"card-body\">
            <h2 class=\"card-title pingo-name\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Name", [], "any", false, false, false, 92), "html", null, true);
            echo "</h2>
            <p class=\"card-text\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Description", [], "any", false, false, false, 93), "html", null, true);
            echo "</p>
            <div class=\"\">
                <button class=\"btn btn-success like-btn\">Like</button>
                <button class=\"btn btn-danger btnlike-btn\">Dislike</button>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "    <p id=\"user-data\" style=\"display:none;\">";
        echo twig_escape_filter($this->env, (isset($context["usersJson"]) || array_key_exists("usersJson", $context) ? $context["usersJson"] : (function () { throw new RuntimeError('Variable "usersJson" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "<p>
</div>

<script>
    const scrollCard = document.querySelectorAll('.scroll-card');
    const likeBtn = document.querySelectorAll('.like-btn');
    const dislikeBtn = document.querySelectorAll('.btnlike-btn');
    const pingoName = document.querySelectorAll('.pingo-name');
    const myUser = localStorage.getItem('myUser');
    let userData = JSON.parse(document.getElementById('user-data').innerHTML);
    let matchedArray = [];

    
    likeBtn.forEach((el, index) => {
        el.addEventListener('click', () => {
            scrollCard[index].classList.add('none');
            
            matchedArray.push(pingoName[index].innerHTML);
            localStorage.setItem(\"matched\", matchedArray);
            console.log(localStorage.getItem(\"matched\"));
        });
    });

    dislikeBtn.forEach((el, index) => {
        el.addEventListener('click', () => {
            scrollCard[index].classList.add('none');
            console.log(el.Name);
        });
    });
    
    userData = JSON.parse(userData);
    scrollCard.forEach((card, index) => {
        if (userData[index].Name === myUser) {
            scrollCard[index].classList.add('none');
            console.log('doublon');
        }
    });

    let mouseClick = false;
    let offset = null;
    scrollCard.forEach((card, index) => {
        card.addEventListener('mousemove', () => {
            if (mouseClick) {
                let e = window.event;
                var posX = e.clientX;
                var posY = e.clientY;
                card.style = ` left: \${posX}px;`;
                let ww = window.innerWidth;
                console.log(posX - offset);
                
                if(posX-offset > 200) {
                    scrollCard[index].classList.add('none');
                    matchedArray.push(pingoName[index].innerHTML);
                    localStorage.setItem(\"matched\", matchedArray);
                    mouseClick = false;
                }
                
                if(posX-offset < -200) {
                    scrollCard[index].classList.add('none');
                    mouseClick = false;
                }
                
            }

        })
        card.addEventListener('mousedown', () => {
            mouseClick = true;

            let e = window.event;
            var posX = e.clientX;
            offset = posX;
        })
        card.addEventListener('mouseup', () => {
            mouseClick = false;
            offset = null;
        })
    });

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "scroll_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 101,  190 => 93,  186 => 92,  179 => 90,  176 => 89,  172 => 88,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ScrollPageController!{% endblock %}

{% block body %}
<style>

    .example-wrapper {
        position: relative;
    }

    .scroll-card {
        position: absolute;
        box-shadow: 2px 2px 2px;
        border-radius: 15px;
        background-color: white;
        width: 300px;
        height: 430px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        top: 10px;
        overflow: hidden;
        left: 50%;
        transform: translate(-50%, 0%);
        user-select: none;
    }
    
    h2 {
        margin: 1px;
        
    }

    .scroll-card img {
        height: 300px;
        object-fit: contain;
        transition: transform 0.3s;
         pointer-events: none; 
         user-select: none;
    }

    img:hover {
        transform: scale(1.02) rotate(1deg);
    }

    .card-body {
        width: 100%;
        background-color: white;
        z-index:2;
        line-height: 1;
        text-align: center;
    }

    .none {
        display: none;
    }

</style>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
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
</nav>
<div class=\"example-wrapper\">
    <p class=\"text-center pt-5\">Vous avez parcouru tous les utilisateurs...</p>
    {% for item in users %}
    <div class=\"scroll-card card border-secondary mb-3\">
        <img src=\"{{ item.img }}\" class=\"card-img-top\" alt=\"{{ item.Name }}\">
        <div class=\"card-body\">
            <h2 class=\"card-title pingo-name\">{{ item.Name }}</h2>
            <p class=\"card-text\">{{ item.Description }}</p>
            <div class=\"\">
                <button class=\"btn btn-success like-btn\">Like</button>
                <button class=\"btn btn-danger btnlike-btn\">Dislike</button>
            </div>
        </div>
    </div>
    {% endfor %}
    <p id=\"user-data\" style=\"display:none;\">{{usersJson}}<p>
</div>

<script>
    const scrollCard = document.querySelectorAll('.scroll-card');
    const likeBtn = document.querySelectorAll('.like-btn');
    const dislikeBtn = document.querySelectorAll('.btnlike-btn');
    const pingoName = document.querySelectorAll('.pingo-name');
    const myUser = localStorage.getItem('myUser');
    let userData = JSON.parse(document.getElementById('user-data').innerHTML);
    let matchedArray = [];

    
    likeBtn.forEach((el, index) => {
        el.addEventListener('click', () => {
            scrollCard[index].classList.add('none');
            
            matchedArray.push(pingoName[index].innerHTML);
            localStorage.setItem(\"matched\", matchedArray);
            console.log(localStorage.getItem(\"matched\"));
        });
    });

    dislikeBtn.forEach((el, index) => {
        el.addEventListener('click', () => {
            scrollCard[index].classList.add('none');
            console.log(el.Name);
        });
    });
    
    userData = JSON.parse(userData);
    scrollCard.forEach((card, index) => {
        if (userData[index].Name === myUser) {
            scrollCard[index].classList.add('none');
            console.log('doublon');
        }
    });

    let mouseClick = false;
    let offset = null;
    scrollCard.forEach((card, index) => {
        card.addEventListener('mousemove', () => {
            if (mouseClick) {
                let e = window.event;
                var posX = e.clientX;
                var posY = e.clientY;
                card.style = ` left: \${posX}px;`;
                let ww = window.innerWidth;
                console.log(posX - offset);
                
                if(posX-offset > 200) {
                    scrollCard[index].classList.add('none');
                    matchedArray.push(pingoName[index].innerHTML);
                    localStorage.setItem(\"matched\", matchedArray);
                    mouseClick = false;
                }
                
                if(posX-offset < -200) {
                    scrollCard[index].classList.add('none');
                    mouseClick = false;
                }
                
            }

        })
        card.addEventListener('mousedown', () => {
            mouseClick = true;

            let e = window.event;
            var posX = e.clientX;
            offset = posX;
        })
        card.addEventListener('mouseup', () => {
            mouseClick = false;
            offset = null;
        })
    });

</script>
{% endblock %}
", "scroll_page/index.html.twig", "C:\\wamp64\\www\\C_O_D_E\\Pingo_Match\\PingoMatch\\templates\\scroll_page\\index.html.twig");
    }
}
