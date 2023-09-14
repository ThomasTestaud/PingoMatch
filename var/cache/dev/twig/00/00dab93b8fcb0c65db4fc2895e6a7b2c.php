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

/* mached/index.html.twig */
class __TwigTemplate_2aefbaa481ad4f69a9a4e073cc25af1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mached/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mached/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mached/index.html.twig", 1);
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

        echo "Matched";
        
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

    .hoverNavA {
        color: #000;
    }

    .hoverNavA:hover {
        background-color: rgba(219, 233, 238, 0.5);
    }

    .titleName {
        font-family: 'Pacifico', cursive;
    }

    #display {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        width: 100%;
        max-height: 100vh;
        overflow: scroll;
        padding-bottom: 100px;
    }

    #display::-webkit-scrollbar {
        display: none;
    }
    
    .matchedFlex {
        width: 40%;
    }

    .matched-line {
        position: relative;
        padding-top:10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap:15px;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .matched-line:hover {
        background-color: rgba(219, 233, 238, 0.5);
        border-radius: 10px;
    }

    ";
        // line 58
        echo "
    img {
        height: 140px;
        width: auto;
        border-radius: 50%;
        object-fit: cover;
    }

    #pop-up {
        position: absolute;
        z-index: 2;
        border: 1px solid black;
        border-radius: 15px;
        display: flex;
        align-items: center;
        flex-direction: row;
        justify-content: space-evenly;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 90vw;
        height: 90vh;
        background-color: white;
    }

    #pop-up div {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #pop-up img {
        border-radius:0;
        width:40%;
        height: 80%;
        object-fit: cover;
    }

    #cross {
        position: absolute;
        right: 3%;
        top: 3%;
        font-size: 30px;
        color: #000;
    }

    .none {
        display: none !important;
    }
</style>
<nav class=\"navbar navbar-expand-lg navbar-white bg-white\">
    <div class=\"container\">
        <a class=\"navbar-brand titleName\" href=\"/\">PingoMatch</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link btn hoverNavA\" href=\"/\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn hoverNavA\" href=\"/mached\">Vos matchs</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn hoverNavA\" href=\"/profile\">Votre profil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn btn-danger\" href=\"/home\">Déconnexion</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class=\"example-wrapper\">
    <p id=\"user-data\" style=\"display:none;\">";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 135, $this->source); })()), "html", null, true);
        echo "<p>
    <div id=\"display\">
    </div>
    <div id=\"pop-up\" class=\"none\"></div>
</div>

<script>
    const display = document.getElementById('display');
    const popUp = document.getElementById('pop-up');
    const userData = JSON.parse(document.getElementById('user-data').innerHTML);
    const matched = localStorage.getItem('matched').split(',').map(item => item.trim());
    
    let score = matched.length;
    let highestScore = localStorage.getItem(\"HighestScore\");
    let likeScore = localStorage.getItem(\"like\");
    let francisCount = localStorage.getItem(\"francisCount\");
    let HfrancisCount = localStorage.getItem(\"HfrancisCount\");

    console.log(\"Avec \"+likeScore+\" likes\");
    console.log(\"Francis count = \"+ francisCount);
    if(francisCount > HfrancisCount) {
        console.log('Vous avez battu le Highest Francis Scord !!!');
        console.log(\"Nouveau Highest Francis Score \" + francisCount);
        console.log(\"Ancien Highest Francis Score : \" + HfrancisCount);
        localStorage.setItem(\"HfrancisCount\", francisCount);
    }else {
    console.log(\"Vous avez une Score Francis de \" + francisCount + \" matchs !\");
    console.log(\"Highest Francis Score : \" + HfrancisCount);
    }
    if(score > highestScore) {
        console.log('Vous avez battu le Highest Scord !!!');
        console.log(\"Nouveau Highest Score \" + matched.length);
        console.log(\"Ancien Highest Score : \" + highestScore);
        localStorage.setItem(\"HighestScore\", matched.length);
    }else {
    console.log(\"Vous avez une Score de \" + matched.length + \" matchs !\");
    console.log(\"Highest Score : \" + highestScore);
    }

    let list = \"\";

    userData.forEach((allData) => {
        matched.forEach((maEl) => {
            if(allData.Name === maEl) {
                list += `
                <div class=\"matchedFlex\">
                    <div class=\"matched-line\">
                        <img src=\"\${allData.img}\"/>
                        <h3 class=\"name\">\${allData.Name}</h3>
                    </div>
                </div>`;
            }
        })
    });

    display.innerHTML = list;

    const guys = document.querySelectorAll('.matched-line');
    const names = document.querySelectorAll('.name');

    let count = 0;
    guys.forEach((guy, index) => {
        guy.addEventListener('click', () => {
            /*
            let popupContent = '';

            popUp.classList.remove('none');

            userData.forEach((allData) => {
                if(allData.Name === names[index].innerHTML) {
                popupContent += `
                    <div>
                        <img src=\"\${allData.img}\"/>
                    </div>
                    <div>
                        <h2 id=\"cross\">X</h2>
                        <h3 class=\"name\">\${allData.Name}</h3>
                        <p>\${allData.Description}</p>
                    </div>
                    `;
            }
            });
            
            popUp.innerHTML = popupContent;
           
            const cross = document.getElementById('cross');
            cross.addEventListener('click', () => {
                popUp.classList.add('none');
                popUp.innerHTML = \"\";
            })
            */

            localStorage.setItem(\"visitProfile\", names[index].innerHTML);
            window.location.href = \"/otherprofiles\";

        })
    })


</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "mached/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 135,  139 => 58,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Matched{% endblock %}

{% block body %}
<style>

    .hoverNavA {
        color: #000;
    }

    .hoverNavA:hover {
        background-color: rgba(219, 233, 238, 0.5);
    }

    .titleName {
        font-family: 'Pacifico', cursive;
    }

    #display {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        width: 100%;
        max-height: 100vh;
        overflow: scroll;
        padding-bottom: 100px;
    }

    #display::-webkit-scrollbar {
        display: none;
    }
    
    .matchedFlex {
        width: 40%;
    }

    .matched-line {
        position: relative;
        padding-top:10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap:15px;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .matched-line:hover {
        background-color: rgba(219, 233, 238, 0.5);
        border-radius: 10px;
    }

    {# .matched-line + .matched-line {
        border-top: 1px dashed grey;
    } #}

    img {
        height: 140px;
        width: auto;
        border-radius: 50%;
        object-fit: cover;
    }

    #pop-up {
        position: absolute;
        z-index: 2;
        border: 1px solid black;
        border-radius: 15px;
        display: flex;
        align-items: center;
        flex-direction: row;
        justify-content: space-evenly;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 90vw;
        height: 90vh;
        background-color: white;
    }

    #pop-up div {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #pop-up img {
        border-radius:0;
        width:40%;
        height: 80%;
        object-fit: cover;
    }

    #cross {
        position: absolute;
        right: 3%;
        top: 3%;
        font-size: 30px;
        color: #000;
    }

    .none {
        display: none !important;
    }
</style>
<nav class=\"navbar navbar-expand-lg navbar-white bg-white\">
    <div class=\"container\">
        <a class=\"navbar-brand titleName\" href=\"/\">PingoMatch</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link btn hoverNavA\" href=\"/\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn hoverNavA\" href=\"/mached\">Vos matchs</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn hoverNavA\" href=\"/profile\">Votre profil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn btn-danger\" href=\"/home\">Déconnexion</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class=\"example-wrapper\">
    <p id=\"user-data\" style=\"display:none;\">{{users}}<p>
    <div id=\"display\">
    </div>
    <div id=\"pop-up\" class=\"none\"></div>
</div>

<script>
    const display = document.getElementById('display');
    const popUp = document.getElementById('pop-up');
    const userData = JSON.parse(document.getElementById('user-data').innerHTML);
    const matched = localStorage.getItem('matched').split(',').map(item => item.trim());
    
    let score = matched.length;
    let highestScore = localStorage.getItem(\"HighestScore\");
    let likeScore = localStorage.getItem(\"like\");
    let francisCount = localStorage.getItem(\"francisCount\");
    let HfrancisCount = localStorage.getItem(\"HfrancisCount\");

    console.log(\"Avec \"+likeScore+\" likes\");
    console.log(\"Francis count = \"+ francisCount);
    if(francisCount > HfrancisCount) {
        console.log('Vous avez battu le Highest Francis Scord !!!');
        console.log(\"Nouveau Highest Francis Score \" + francisCount);
        console.log(\"Ancien Highest Francis Score : \" + HfrancisCount);
        localStorage.setItem(\"HfrancisCount\", francisCount);
    }else {
    console.log(\"Vous avez une Score Francis de \" + francisCount + \" matchs !\");
    console.log(\"Highest Francis Score : \" + HfrancisCount);
    }
    if(score > highestScore) {
        console.log('Vous avez battu le Highest Scord !!!');
        console.log(\"Nouveau Highest Score \" + matched.length);
        console.log(\"Ancien Highest Score : \" + highestScore);
        localStorage.setItem(\"HighestScore\", matched.length);
    }else {
    console.log(\"Vous avez une Score de \" + matched.length + \" matchs !\");
    console.log(\"Highest Score : \" + highestScore);
    }

    let list = \"\";

    userData.forEach((allData) => {
        matched.forEach((maEl) => {
            if(allData.Name === maEl) {
                list += `
                <div class=\"matchedFlex\">
                    <div class=\"matched-line\">
                        <img src=\"\${allData.img}\"/>
                        <h3 class=\"name\">\${allData.Name}</h3>
                    </div>
                </div>`;
            }
        })
    });

    display.innerHTML = list;

    const guys = document.querySelectorAll('.matched-line');
    const names = document.querySelectorAll('.name');

    let count = 0;
    guys.forEach((guy, index) => {
        guy.addEventListener('click', () => {
            /*
            let popupContent = '';

            popUp.classList.remove('none');

            userData.forEach((allData) => {
                if(allData.Name === names[index].innerHTML) {
                popupContent += `
                    <div>
                        <img src=\"\${allData.img}\"/>
                    </div>
                    <div>
                        <h2 id=\"cross\">X</h2>
                        <h3 class=\"name\">\${allData.Name}</h3>
                        <p>\${allData.Description}</p>
                    </div>
                    `;
            }
            });
            
            popUp.innerHTML = popupContent;
           
            const cross = document.getElementById('cross');
            cross.addEventListener('click', () => {
                popUp.classList.add('none');
                popUp.innerHTML = \"\";
            })
            */

            localStorage.setItem(\"visitProfile\", names[index].innerHTML);
            window.location.href = \"/otherprofiles\";

        })
    })


</script>
{% endblock %}", "mached/index.html.twig", "C:\\wamp64\\www\\C_O_D_E\\Pingo_Match\\PingoMatch\\templates\\mached\\index.html.twig");
    }
}
