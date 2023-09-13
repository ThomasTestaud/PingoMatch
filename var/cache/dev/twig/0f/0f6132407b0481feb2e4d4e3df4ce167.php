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
        max-width: 100vw;
        height: 100vh;
        overflow: hidden;
/*background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='500' height='560' preserveAspectRatio='none' viewBox='0 0 500 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1013%26quot%3b)' fill='none'%3e%3crect width='500' height='560' x='0' y='0' fill='rgba(76%2c 146%2c 219%2c 1)'%3e%3c/rect%3e%3cpath d='M32.79 531.61 a114.49 114.49 0 1 0 228.98 0 a114.49 114.49 0 1 0 -228.98 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M338.38%2c316.833C360.349%2c316.581%2c380.81%2c305.638%2c392.005%2c286.734C403.418%2c267.461%2c403.779%2c243.861%2c393.323%2c224.052C382.095%2c202.78%2c362.431%2c185.519%2c338.38%2c185.14C313.77%2c184.752%2c292.087%2c200.636%2c280.35%2c222.27C269.148%2c242.919%2c270.296%2c267.965%2c282.583%2c287.988C294.32%2c307.114%2c315.941%2c317.09%2c338.38%2c316.833' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M362.55 415.89 a106.68 106.68 0 1 0 213.36 0 a106.68 106.68 0 1 0 -213.36 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M262.44%2c218.845C296.129%2c218.629%2c328.166%2c201.557%2c344.258%2c171.959C359.717%2c143.526%2c352.85%2c109.891%2c337.025%2c81.66C320.767%2c52.656%2c295.671%2c24.876%2c262.44%2c25.994C230.395%2c27.072%2c211.927%2c58.535%2c196.071%2c86.403C180.465%2c113.83%2c164.647%2c144.808%2c178.784%2c173.02C194.051%2c203.487%2c228.363%2c219.063%2c262.44%2c218.845' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M323.65 54.61 a108.99 108.99 0 1 0 217.98 0 a108.99 108.99 0 1 0 -217.98 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M340.717%2c341.408C355.058%2c341.005%2c367.031%2c331.478%2c373.999%2c318.937C380.751%2c306.785%2c381.27%2c292.349%2c374.821%2c280.033C367.847%2c266.713%2c355.739%2c254.755%2c340.717%2c255.377C326.361%2c255.971%2c318.197%2c270.131%2c311.178%2c282.668C304.389%2c294.794%2c297.787%2c308.487%2c304.031%2c320.903C310.777%2c334.317%2c325.708%2c341.83%2c340.717%2c341.408' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1013'%3e%3crect width='500' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e\");        
background-size: cover;*/
            background-image: linear-gradient(to bottom, #d16ba5, #aa619d, #845790, #614c7f, #41406a, #394973, #2f527a, #255b7f, #1f81a4, #1ca9c4, #33d2de, #5ffbf1) ;

    }

    .scroll-card {
        position: absolute;
        box-shadow: 2px 2px 2px, 4px 4px 4px 4px inset;
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
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 161, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 162
            echo "    <div class=\"scroll-card secondary mb-3\">
        <img src=\"";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 163), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Name", [], "any", false, false, false, 163), "html", null, true);
            echo "\">
        <div class=\"card-body\">
            <h2 class=\"card-title pingo-name\">";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Name", [], "any", false, false, false, 165), "html", null, true);
            echo "</h2>
            <p class=\"card-text\">";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Description", [], "any", false, false, false, 166), "html", null, true);
            echo "</p>
            <div class=\"\">
                <button class=\"btn btn-danger btnlike-btn\">Dislike</button>
                <button class=\"btn btn-success like-btn\">Like</button>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "    <p id=\"user-data\" style=\"display:none;\">";
        echo twig_escape_filter($this->env, (isset($context["usersJson"]) || array_key_exists("usersJson", $context) ? $context["usersJson"] : (function () { throw new RuntimeError('Variable "usersJson" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "<p>
    <div id=\"animDisplay\"></div>
</div>

<script>
    const scrollCard = document.querySelectorAll('.scroll-card');
    const likeBtn = document.querySelectorAll('.like-btn');
    const dislikeBtn = document.querySelectorAll('.btnlike-btn');
    const pingoName = document.querySelectorAll('.pingo-name');
    const myUser = localStorage.getItem('myUser');
    let userData = JSON.parse(document.getElementById('user-data').innerHTML);
    const animDisplay = document.getElementById('animDisplay');
    let matchedArray = [];

    
    likeBtn.forEach((el, index) => {
        el.addEventListener('click', () => {
            let posX = window.innerWidth/2;
            offset = window.innerWidth/2;
            let opacity = 1;
            let run = setInterval(() => {
                scrollCard[index].style = ` 
                    left: \${posX-150}px;
                    top: \${(Math.abs(posX-offset))/Math.log(Math.abs(posX-offset)*Math.abs(posX-offset))+8}px;
                    transform: rotate(\${(posX-offset)/40}deg);
                    opacity: \${opacity};`;
                posX+=10;
                opacity-= 0.007;
            }, 10);
            setTimeout(() => {
                scrollCard[index].classList.add('none');
                clearInterval(run);
            }, 1000);

            if(didTheyMatch()) {
                setTimeout(() => {
                    match();
                }, 1100);
            matchedArray.push(pingoName[index].innerHTML);
            localStorage.setItem(\"matched\", matchedArray);
            console.log(localStorage.getItem(\"matched\"));
            }
            
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
                    transform: rotate(\${(posX-offset)/40}deg);
                    opacity: \${opacity};`;
                posX-=10;
                opacity-= 0.007;
            }, 10);
            setTimeout(() => {
                scrollCard[index].classList.add('none');
                clearInterval(run);
            }, 1000);
            dislike();
        });
    });
    
    userData = JSON.parse(userData);
    scrollCard.forEach((card, index) => {
        if (userData[index].Name === myUser) {
            scrollCard[index].classList.add('none');
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
                                transform: rotate(\${(posX-offset)/40}deg);
                                opacity:\${Math.cos(Math.abs(posX-offset)/200)};`;
                let ww = window.innerWidth;
                
                if(posX-offset > 200) {
                    mouseClick = false;
                    scrollCard[index].classList.add('none');
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
        return array (  277 => 174,  263 => 166,  259 => 165,  252 => 163,  249 => 162,  245 => 161,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ScrollPageController!{% endblock %}

{% block body %}
<style>

    .example-wrapper {
        position: relative;
        max-width: 100vw;
        height: 100vh;
        overflow: hidden;
/*background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='500' height='560' preserveAspectRatio='none' viewBox='0 0 500 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1013%26quot%3b)' fill='none'%3e%3crect width='500' height='560' x='0' y='0' fill='rgba(76%2c 146%2c 219%2c 1)'%3e%3c/rect%3e%3cpath d='M32.79 531.61 a114.49 114.49 0 1 0 228.98 0 a114.49 114.49 0 1 0 -228.98 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M338.38%2c316.833C360.349%2c316.581%2c380.81%2c305.638%2c392.005%2c286.734C403.418%2c267.461%2c403.779%2c243.861%2c393.323%2c224.052C382.095%2c202.78%2c362.431%2c185.519%2c338.38%2c185.14C313.77%2c184.752%2c292.087%2c200.636%2c280.35%2c222.27C269.148%2c242.919%2c270.296%2c267.965%2c282.583%2c287.988C294.32%2c307.114%2c315.941%2c317.09%2c338.38%2c316.833' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M362.55 415.89 a106.68 106.68 0 1 0 213.36 0 a106.68 106.68 0 1 0 -213.36 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M262.44%2c218.845C296.129%2c218.629%2c328.166%2c201.557%2c344.258%2c171.959C359.717%2c143.526%2c352.85%2c109.891%2c337.025%2c81.66C320.767%2c52.656%2c295.671%2c24.876%2c262.44%2c25.994C230.395%2c27.072%2c211.927%2c58.535%2c196.071%2c86.403C180.465%2c113.83%2c164.647%2c144.808%2c178.784%2c173.02C194.051%2c203.487%2c228.363%2c219.063%2c262.44%2c218.845' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M323.65 54.61 a108.99 108.99 0 1 0 217.98 0 a108.99 108.99 0 1 0 -217.98 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M340.717%2c341.408C355.058%2c341.005%2c367.031%2c331.478%2c373.999%2c318.937C380.751%2c306.785%2c381.27%2c292.349%2c374.821%2c280.033C367.847%2c266.713%2c355.739%2c254.755%2c340.717%2c255.377C326.361%2c255.971%2c318.197%2c270.131%2c311.178%2c282.668C304.389%2c294.794%2c297.787%2c308.487%2c304.031%2c320.903C310.777%2c334.317%2c325.708%2c341.83%2c340.717%2c341.408' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1013'%3e%3crect width='500' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e\");        
background-size: cover;*/
            background-image: linear-gradient(to bottom, #d16ba5, #aa619d, #845790, #614c7f, #41406a, #394973, #2f527a, #255b7f, #1f81a4, #1ca9c4, #33d2de, #5ffbf1) ;

    }

    .scroll-card {
        position: absolute;
        box-shadow: 2px 2px 2px, 4px 4px 4px 4px inset;
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
    <div class=\"scroll-card secondary mb-3\">
        <img src=\"{{ item.img }}\" class=\"card-img-top\" alt=\"{{ item.Name }}\">
        <div class=\"card-body\">
            <h2 class=\"card-title pingo-name\">{{ item.Name }}</h2>
            <p class=\"card-text\">{{ item.Description }}</p>
            <div class=\"\">
                <button class=\"btn btn-danger btnlike-btn\">Dislike</button>
                <button class=\"btn btn-success like-btn\">Like</button>
            </div>
        </div>
    </div>
    {% endfor %}
    <p id=\"user-data\" style=\"display:none;\">{{usersJson}}<p>
    <div id=\"animDisplay\"></div>
</div>

<script>
    const scrollCard = document.querySelectorAll('.scroll-card');
    const likeBtn = document.querySelectorAll('.like-btn');
    const dislikeBtn = document.querySelectorAll('.btnlike-btn');
    const pingoName = document.querySelectorAll('.pingo-name');
    const myUser = localStorage.getItem('myUser');
    let userData = JSON.parse(document.getElementById('user-data').innerHTML);
    const animDisplay = document.getElementById('animDisplay');
    let matchedArray = [];

    
    likeBtn.forEach((el, index) => {
        el.addEventListener('click', () => {
            let posX = window.innerWidth/2;
            offset = window.innerWidth/2;
            let opacity = 1;
            let run = setInterval(() => {
                scrollCard[index].style = ` 
                    left: \${posX-150}px;
                    top: \${(Math.abs(posX-offset))/Math.log(Math.abs(posX-offset)*Math.abs(posX-offset))+8}px;
                    transform: rotate(\${(posX-offset)/40}deg);
                    opacity: \${opacity};`;
                posX+=10;
                opacity-= 0.007;
            }, 10);
            setTimeout(() => {
                scrollCard[index].classList.add('none');
                clearInterval(run);
            }, 1000);

            if(didTheyMatch()) {
                setTimeout(() => {
                    match();
                }, 1100);
            matchedArray.push(pingoName[index].innerHTML);
            localStorage.setItem(\"matched\", matchedArray);
            console.log(localStorage.getItem(\"matched\"));
            }
            
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
                    transform: rotate(\${(posX-offset)/40}deg);
                    opacity: \${opacity};`;
                posX-=10;
                opacity-= 0.007;
            }, 10);
            setTimeout(() => {
                scrollCard[index].classList.add('none');
                clearInterval(run);
            }, 1000);
            dislike();
        });
    });
    
    userData = JSON.parse(userData);
    scrollCard.forEach((card, index) => {
        if (userData[index].Name === myUser) {
            scrollCard[index].classList.add('none');
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
                                transform: rotate(\${(posX-offset)/40}deg);
                                opacity:\${Math.cos(Math.abs(posX-offset)/200)};`;
                let ww = window.innerWidth;
                
                if(posX-offset > 200) {
                    mouseClick = false;
                    scrollCard[index].classList.add('none');
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
