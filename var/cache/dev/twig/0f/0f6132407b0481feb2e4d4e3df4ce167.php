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

        echo "Scroll Page";
        
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
        color: #000;
    }

    .zIndex {
        z-index: 10;
    }

    .example-wrapper {
        position: relative;
        max-width: 100vw;
        height: 100vh;
    }

    .scroll-card {
        position: absolute;
        box-shadow: rgba(0, 0, 0, 0.08) 2px 2px 2px;
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
        transform: translate(-50%, 10%) scale(1.1);
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

    .animation {
        position: fixed;
        z-index: 3;
        height: 150px;
        width: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        left: 50%;
        top: 150px;
        animation: animate 1.1s;
    }

    .like {
        border: 10px solid #00ff11;
        color: #00ff11;
    }

    .match {
        top: 120px;
        font-family: 'Pacifico', cursive;
        text-align: center;
        color: #00ff11;
        font-size: 50px;
        /*font-weight: bold;*/
        text-shadow: 2px 2px 0 grey;
        background-image: url('https:\\/\\/robotdog.thomastestaud.com\\/mancho\\/Pingo.gif');
        background-size: cover;
        background-position: 60% 60%;
         height: 250px;
        width: 250px;
        animation: animate 3s;
    }

    .btn-choice {
        position: fixed;
        top: 600px;
        left: 50%;
        transform: translate(-50%, 0%);
        min-width: 60%;
        display: flex;
        justify-content: space-between;
    }

    .btn-choice button {
        height: 100px;
        width: 100px;
        border-radius: 50%;
        z-index: 3;
        font-weight: bold;
        color: #4F6D7A;
        border: none;
        transition: transform 0.4s;
    }

    .btn-choice button:hover {
        transform: scale(1.1);
    }

    .btn-choice button:active {
        transform: scale(0.95);
    }

    .btn-choice button svg {
        height: 60%;
    }

    .btnlike-btn {
        background-color:#EC3254;
    }

    .like-btn {
        background-color: green;
    }


    .btnlike-btn svg {
        color: white;
    }

    .like-btn svg {
        color: white;
    }


    .dislike {
        border: 10px solid red;
        color: red;
    }

    .animation svg {
        height: 100px;
        width: 100px;
    }

    .none {
        display: none;
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

    @keyframes animate {
        0% {
            opacity: 0;
            transform: rotate(10deg) translate(-50%, 20%) scale(0.5);
        }
        30% {
            opacity: 1;
            transform: rotate(0deg) translate(-50%, 0%) scale(1);
        }
        80% {
            opacity: 1;
            transform: rotate(0deg) translate(-50%, 0%) scale(1);
        }
        100% {
            opacity: 0;
            transform: translate(-50%, 0%) scale(0.5);
        }
    }

    

</style>

<nav class=\"navbar navbar-expand-lg navbar-white bg-white w-100 zIndex\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">PingoMatch</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto \">
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
                    <a class=\"nav-link btn btn-danger\" href=\"/home\">Déconnexion</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class=\"example-wrapper\">
    <p class=\"text-center pt-5\">Vous avez parcouru tous les utilisateurs...</p>
    ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 230
            echo "    <div class=\"scroll-card card border-secondary mb-3\">
        <img src=\"";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 231), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Name", [], "any", false, false, false, 231), "html", null, true);
            echo "\">
        <div class=\"card-body\">
            <h2 class=\"card-title pingo-name\">";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Name", [], "any", false, false, false, 233), "html", null, true);
            echo "</h2>
            <p class=\"card-text\">";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Description", [], "any", false, false, false, 234), "html", null, true);
            echo "</p>
        </div>
    </div>
            <div class=\"btn-choice\">
                <button class=\"btnlike-btn\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" /></svg>
                </button>
                <button class=\"like-btn\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\" /></svg>
                </button>
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "    <p id=\"user-data\" style=\"display:none;\">";
        echo twig_escape_filter($this->env, (isset($context["usersJson"]) || array_key_exists("usersJson", $context) ? $context["usersJson"] : (function () { throw new RuntimeError('Variable "usersJson" does not exist.', 246, $this->source); })()), "html", null, true);
        echo "<p>
    <div id=\"animDisplay\"></div>
</div>

    <footer>
        <p class=\"text-black\">© PingoMatch, Haute-Savoie, Annecy | 2023</p>
    </footer>

<script>
    const scrollCard = document.querySelectorAll('.scroll-card');
    const likeBtn = document.querySelectorAll('.like-btn');
    const dislikeBtn = document.querySelectorAll('.btnlike-btn');
    const pingoName = document.querySelectorAll('.pingo-name');
    const choiceBtn = document.querySelectorAll('.btn-choice');
    const myUser = localStorage.getItem('myUser');
    let userData = JSON.parse(document.getElementById('user-data').innerHTML);
    const animDisplay = document.getElementById('animDisplay');
    let matchedArray = [];
    let like = 0;
    let francisCount =0;
    
    likeBtn.forEach((el, index) => {
        el.addEventListener('click', () => {
            let posX = window.innerWidth/2;
            offset = window.innerWidth/2;
            let opacity = 1;
            let run = setInterval(() => {
                scrollCard[index].style = ` 
                    left: \${posX-150}px;
                    top: \${(Math.abs(posX-offset))/Math.log(Math.abs(posX-offset)*Math.abs(posX-offset))+8}px;
                    transform: rotate(\${(posX-offset)/40}deg) translate(0%, 10%) scale(1.1);
                    opacity: \${opacity};`;
                posX+=10;
                opacity-= 0.007;
            }, 10);
            setTimeout(() => {
                scrollCard[index].classList.add('none');
                choiceBtn[index].classList.add('none');
                clearInterval(run);
            }, 1000);

            if(didTheyMatch()) {
                setTimeout(() => {
                    match();
                }, 1100);
            matchedArray.push(pingoName[index].innerHTML);
            localStorage.setItem(\"matched\", matchedArray);
            //console.log(localStorage.getItem(\"matched\"));likeScore
                if(pingoName[index].innerHTML === 'Francis') {
                    francisCount++;
                    localStorage.setItem(\"francisCount\", francisCount);
                    
                }
            }
            like++;
            localStorage.setItem(\"like\", like);
            
            likePingo();
        });
    });

    dislikeBtn.forEach((el, index) => {
        el.addEventListener('click', () => {
            let posX = window.innerWidth/2;
            offset = window.innerWidth/2;
            let opacity = 1;
            let run = setInterval(() => {
                scrollCard[index].style = ` 
                    left: \${posX-150}px;
                    top: \${(Math.abs(posX-offset))/Math.log(Math.abs(posX-offset)*Math.abs(posX-offset))+8}px;
                    transform: rotate(\${(posX-offset)/40}deg) translate(0%, 10%) scale(1.1);
                    opacity: \${opacity};`;
                posX-=10;
                opacity-= 0.007;
            }, 10);
            setTimeout(() => {
                scrollCard[index].classList.add('none');
                choiceBtn[index].classList.add('none');
                clearInterval(run);
            }, 1000);
            dislike();
        });
    });
    
    userData = JSON.parse(userData);
    scrollCard.forEach((card, index) => {
        if (userData[index].Name === myUser) {
            scrollCard[index].classList.add('none');
            choiceBtn[index].classList.add('none');
            //console.log('doublon');
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
                card.style = `left: \${posX-150}px;
                                top: \${(Math.abs(posX-offset))/Math.log(Math.abs(posX-offset)*Math.abs(posX-offset))+8}px;
                                transform: rotate(\${(posX-offset)/40}deg) translate(0%, 10%) scale(1.1);
                                opacity:\${Math.cos(Math.abs(posX-offset)/200)};`;
                let ww = window.innerWidth;
                
                if(posX-offset > 200) {
                    mouseClick = false;
                    scrollCard[index].classList.add('none');
                    choiceBtn[index].classList.add('none');
                    if(didTheyMatch()) {
                        setTimeout(() => {
                            match();
                        }, 1100);
                    matchedArray.push(pingoName[index].innerHTML);
                    localStorage.setItem(\"matched\", matchedArray);
                    console.log(localStorage.getItem(\"matched\"));
                    }
                    likePingo();
                }
                
                if(posX-offset < -200) {
                    scrollCard[index].classList.add('none');
                    choiceBtn[index].classList.add('none');
                    mouseClick = false;
                    dislike();
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

    function likePingo() {
        animDisplay.innerHTML = `
        <div class=\"animation like\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4.5 12.75l6 6 9-13.5\" /></svg>
        </div>
        `;
        setTimeout(() => {
            animDisplay.innerHTML = '';
        }, 1000);
    }

    function dislike() {
        animDisplay.innerHTML = `
        <div class=\"animation dislike\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" /></svg>
        </div>
        `;
        setTimeout(() => {
            animDisplay.innerHTML = '';
        }, 1000);
    }

    function match() {
        animDisplay.innerHTML = `
        <div class=\"animation match\">
            <p>It's a match!!</p>
        </div>
        `;
        setTimeout(() => {
            animDisplay.innerHTML = '';
        }, 2900);
    }

    function didTheyMatch() {
        let num = Math.random();
        console.log(num)
        if(num > 0.5) {
            return true;
        }else {
            return false;
        }
    }

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
        return array (  349 => 246,  331 => 234,  327 => 233,  320 => 231,  317 => 230,  313 => 229,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Scroll Page{% endblock %}

{% block body %}
<style>

    body {
        color: #000;
    }

    .zIndex {
        z-index: 10;
    }

    .example-wrapper {
        position: relative;
        max-width: 100vw;
        height: 100vh;
    }

    .scroll-card {
        position: absolute;
        box-shadow: rgba(0, 0, 0, 0.08) 2px 2px 2px;
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
        transform: translate(-50%, 10%) scale(1.1);
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

    .animation {
        position: fixed;
        z-index: 3;
        height: 150px;
        width: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        left: 50%;
        top: 150px;
        animation: animate 1.1s;
    }

    .like {
        border: 10px solid #00ff11;
        color: #00ff11;
    }

    .match {
        top: 120px;
        font-family: 'Pacifico', cursive;
        text-align: center;
        color: #00ff11;
        font-size: 50px;
        /*font-weight: bold;*/
        text-shadow: 2px 2px 0 grey;
        background-image: url('https:\\/\\/robotdog.thomastestaud.com\\/mancho\\/Pingo.gif');
        background-size: cover;
        background-position: 60% 60%;
         height: 250px;
        width: 250px;
        animation: animate 3s;
    }

    .btn-choice {
        position: fixed;
        top: 600px;
        left: 50%;
        transform: translate(-50%, 0%);
        min-width: 60%;
        display: flex;
        justify-content: space-between;
    }

    .btn-choice button {
        height: 100px;
        width: 100px;
        border-radius: 50%;
        z-index: 3;
        font-weight: bold;
        color: #4F6D7A;
        border: none;
        transition: transform 0.4s;
    }

    .btn-choice button:hover {
        transform: scale(1.1);
    }

    .btn-choice button:active {
        transform: scale(0.95);
    }

    .btn-choice button svg {
        height: 60%;
    }

    .btnlike-btn {
        background-color:#EC3254;
    }

    .like-btn {
        background-color: green;
    }


    .btnlike-btn svg {
        color: white;
    }

    .like-btn svg {
        color: white;
    }


    .dislike {
        border: 10px solid red;
        color: red;
    }

    .animation svg {
        height: 100px;
        width: 100px;
    }

    .none {
        display: none;
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

    @keyframes animate {
        0% {
            opacity: 0;
            transform: rotate(10deg) translate(-50%, 20%) scale(0.5);
        }
        30% {
            opacity: 1;
            transform: rotate(0deg) translate(-50%, 0%) scale(1);
        }
        80% {
            opacity: 1;
            transform: rotate(0deg) translate(-50%, 0%) scale(1);
        }
        100% {
            opacity: 0;
            transform: translate(-50%, 0%) scale(0.5);
        }
    }

    

</style>

<nav class=\"navbar navbar-expand-lg navbar-white bg-white w-100 zIndex\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">PingoMatch</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto \">
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
                    <a class=\"nav-link btn btn-danger\" href=\"/home\">Déconnexion</a>
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
        </div>
    </div>
            <div class=\"btn-choice\">
                <button class=\"btnlike-btn\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" /></svg>
                </button>
                <button class=\"like-btn\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z\" /></svg>
                </button>
            </div>
    {% endfor %}
    <p id=\"user-data\" style=\"display:none;\">{{usersJson}}<p>
    <div id=\"animDisplay\"></div>
</div>

    <footer>
        <p class=\"text-black\">© PingoMatch, Haute-Savoie, Annecy | 2023</p>
    </footer>

<script>
    const scrollCard = document.querySelectorAll('.scroll-card');
    const likeBtn = document.querySelectorAll('.like-btn');
    const dislikeBtn = document.querySelectorAll('.btnlike-btn');
    const pingoName = document.querySelectorAll('.pingo-name');
    const choiceBtn = document.querySelectorAll('.btn-choice');
    const myUser = localStorage.getItem('myUser');
    let userData = JSON.parse(document.getElementById('user-data').innerHTML);
    const animDisplay = document.getElementById('animDisplay');
    let matchedArray = [];
    let like = 0;
    let francisCount =0;
    
    likeBtn.forEach((el, index) => {
        el.addEventListener('click', () => {
            let posX = window.innerWidth/2;
            offset = window.innerWidth/2;
            let opacity = 1;
            let run = setInterval(() => {
                scrollCard[index].style = ` 
                    left: \${posX-150}px;
                    top: \${(Math.abs(posX-offset))/Math.log(Math.abs(posX-offset)*Math.abs(posX-offset))+8}px;
                    transform: rotate(\${(posX-offset)/40}deg) translate(0%, 10%) scale(1.1);
                    opacity: \${opacity};`;
                posX+=10;
                opacity-= 0.007;
            }, 10);
            setTimeout(() => {
                scrollCard[index].classList.add('none');
                choiceBtn[index].classList.add('none');
                clearInterval(run);
            }, 1000);

            if(didTheyMatch()) {
                setTimeout(() => {
                    match();
                }, 1100);
            matchedArray.push(pingoName[index].innerHTML);
            localStorage.setItem(\"matched\", matchedArray);
            //console.log(localStorage.getItem(\"matched\"));likeScore
                if(pingoName[index].innerHTML === 'Francis') {
                    francisCount++;
                    localStorage.setItem(\"francisCount\", francisCount);
                    
                }
            }
            like++;
            localStorage.setItem(\"like\", like);
            
            likePingo();
        });
    });

    dislikeBtn.forEach((el, index) => {
        el.addEventListener('click', () => {
            let posX = window.innerWidth/2;
            offset = window.innerWidth/2;
            let opacity = 1;
            let run = setInterval(() => {
                scrollCard[index].style = ` 
                    left: \${posX-150}px;
                    top: \${(Math.abs(posX-offset))/Math.log(Math.abs(posX-offset)*Math.abs(posX-offset))+8}px;
                    transform: rotate(\${(posX-offset)/40}deg) translate(0%, 10%) scale(1.1);
                    opacity: \${opacity};`;
                posX-=10;
                opacity-= 0.007;
            }, 10);
            setTimeout(() => {
                scrollCard[index].classList.add('none');
                choiceBtn[index].classList.add('none');
                clearInterval(run);
            }, 1000);
            dislike();
        });
    });
    
    userData = JSON.parse(userData);
    scrollCard.forEach((card, index) => {
        if (userData[index].Name === myUser) {
            scrollCard[index].classList.add('none');
            choiceBtn[index].classList.add('none');
            //console.log('doublon');
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
                card.style = `left: \${posX-150}px;
                                top: \${(Math.abs(posX-offset))/Math.log(Math.abs(posX-offset)*Math.abs(posX-offset))+8}px;
                                transform: rotate(\${(posX-offset)/40}deg) translate(0%, 10%) scale(1.1);
                                opacity:\${Math.cos(Math.abs(posX-offset)/200)};`;
                let ww = window.innerWidth;
                
                if(posX-offset > 200) {
                    mouseClick = false;
                    scrollCard[index].classList.add('none');
                    choiceBtn[index].classList.add('none');
                    if(didTheyMatch()) {
                        setTimeout(() => {
                            match();
                        }, 1100);
                    matchedArray.push(pingoName[index].innerHTML);
                    localStorage.setItem(\"matched\", matchedArray);
                    console.log(localStorage.getItem(\"matched\"));
                    }
                    likePingo();
                }
                
                if(posX-offset < -200) {
                    scrollCard[index].classList.add('none');
                    choiceBtn[index].classList.add('none');
                    mouseClick = false;
                    dislike();
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

    function likePingo() {
        animDisplay.innerHTML = `
        <div class=\"animation like\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4.5 12.75l6 6 9-13.5\" /></svg>
        </div>
        `;
        setTimeout(() => {
            animDisplay.innerHTML = '';
        }, 1000);
    }

    function dislike() {
        animDisplay.innerHTML = `
        <div class=\"animation dislike\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" /></svg>
        </div>
        `;
        setTimeout(() => {
            animDisplay.innerHTML = '';
        }, 1000);
    }

    function match() {
        animDisplay.innerHTML = `
        <div class=\"animation match\">
            <p>It's a match!!</p>
        </div>
        `;
        setTimeout(() => {
            animDisplay.innerHTML = '';
        }, 2900);
    }

    function didTheyMatch() {
        let num = Math.random();
        console.log(num)
        if(num > 0.5) {
            return true;
        }else {
            return false;
        }
    }

</script>
{% endblock %}
", "scroll_page/index.html.twig", "C:\\wamp64\\www\\C_O_D_E\\Pingo_Match\\PingoMatch\\templates\\scroll_page\\index.html.twig");
    }
}
