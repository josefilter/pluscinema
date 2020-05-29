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

/* home/index.html.twig */
class __TwigTemplate_6bc7264198fc44db0203bf96a6016a270ea0f7518c97d4711ac1a8aa244b1a6e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CinemaPlus";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\">Inicio</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("peliculas");
        echo "\">Películas</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("series");
        echo "\">Series</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Registrar</a>
        </li>
        ";
        // line 20
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), null)) {
            // line 21
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Salir</a>
        </li>
        ";
        } else {
            // line 25
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a>
        </li>
        ";
        }
        // line 29
        echo "    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "<div class=\"example-wrapper\">
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "        <div class=\"mb-3\">
            Bienvenido <span class=\"nombre\"> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true);
            echo " </span>
        </div>
    ";
        } else {
            // line 40
            echo "        <div class=\"mb-3\">
            Bienvenido. <br />
            <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Loguéate</a>
        </div>
    ";
        }
        // line 45
        echo "</div>

<div class=\"container-fluid col-12 col-sm-8 col-xl-5\">
    <div class=\"row\">
        <div class=\"col-md-6 mx-auto\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 60
            echo "                        ";
            if (0 === twig_compare($context["i"], 1)) {
                // line 61
                echo "                            <div class=\"carousel-item active\">
                                <img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/imagen" . $context["i"]) . ".jpg")), "html", null, true);
                echo "\" class=\"d-block img-fluid\" />
                            </div>
                        ";
            } else {
                // line 65
                echo "                            <div class=\"carousel-item\">
                                <img src=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/imagen" . $context["i"]) . ".jpg")), "html", null, true);
                echo "\" class=\"d-block img-fluid\" />
                            </div>
                        ";
            }
            // line 68
            echo "                   
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br /><br />

<div class=\"container-fluid col-12 col-sm-10 col-xl-8 titulosCentrados\">
    <h2>Películas Recomendadas</h2>
    <div class=\"row\">
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculas"]) || array_key_exists("peliculas", $context) ? $context["peliculas"] : (function () { throw new RuntimeError('Variable "peliculas" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 89
            echo "            ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 89), 9)) {
                // line 90
                echo "                <div class=\"col-9 col-sm-6 col-xl-3 recomendaciones\">
                    <h3>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pelicula"], "titulo", [], "any", false, false, false, 91), "html", null, true);
                echo "</h3>
                    <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pelicula", ["id" => twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/imagen" . twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 92)) . ".jpg")), "html", null, true);
                echo "\" class=\"d-block img-responsive fit-image\"></a>
                    <br /><br />
                </div>
            ";
            }
            // line 96
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "    </div>
</div>

<br />

<div class=\"container-fluid col-12 col-sm-10 col-xl-8 titulosCentrados\">
    <h2>Series Recomendadas</h2>
    <div class=\"row\">
        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 106
            echo "            ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 106), 9)) {
                // line 107
                echo "                <div class=\"col-9 col-sm-6 col-xl-3 recomendaciones\">
                    <h3>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "titulo", [], "any", false, false, false, 108), "html", null, true);
                echo "</h3>
                    <a href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("serie", ["id" => twig_get_attribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/serie" . twig_get_attribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 109)) . ".jpg")), "html", null, true);
                echo "\" class=\"d-block img-responsive fit-image\"></a>
                    <br /><br />
                </div>
            ";
            }
            // line 113
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 114,  313 => 113,  304 => 109,  300 => 108,  297 => 107,  294 => 106,  290 => 105,  280 => 97,  274 => 96,  265 => 92,  261 => 91,  258 => 90,  255 => 89,  251 => 88,  231 => 70,  224 => 68,  218 => 66,  215 => 65,  209 => 62,  206 => 61,  203 => 60,  199 => 59,  183 => 45,  177 => 42,  173 => 40,  167 => 37,  164 => 36,  162 => 35,  159 => 34,  149 => 33,  137 => 29,  131 => 26,  128 => 25,  122 => 22,  119 => 21,  117 => 20,  112 => 18,  106 => 15,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CinemaPlus{% endblock %}

{% block menu %}
<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('inicio') }}\">Inicio</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('peliculas') }}\">Películas</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('series') }}\">Series</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('register') }}\">Registrar</a>
        </li>
        {% if app.user != null %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('logout') }}\">Salir</a>
        </li>
        {% else %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('login') }}\">Login</a>
        </li>
        {% endif %}
    </ul>
</div>
{% endblock %}

{% block body %}
<div class=\"example-wrapper\">
    {% if app.user %}
        <div class=\"mb-3\">
            Bienvenido <span class=\"nombre\"> {{ app.user.username }} </span>
        </div>
    {% else %}
        <div class=\"mb-3\">
            Bienvenido. <br />
            <a href=\"{{ path('login') }}\">Loguéate</a>
        </div>
    {% endif %}
</div>

<div class=\"container-fluid col-12 col-sm-8 col-xl-5\">
    <div class=\"row\">
        <div class=\"col-md-6 mx-auto\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    {% for i in 1..5 %}
                        {% if i == 1 %}
                            <div class=\"carousel-item active\">
                                <img src=\"{{ asset('images/imagen' ~ i ~ '.jpg') }}\" class=\"d-block img-fluid\" />
                            </div>
                        {% else %}
                            <div class=\"carousel-item\">
                                <img src=\"{{ asset('images/imagen' ~ i ~ '.jpg') }}\" class=\"d-block img-fluid\" />
                            </div>
                        {% endif %}                   
                    {% endfor %}

                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<br /><br />

<div class=\"container-fluid col-12 col-sm-10 col-xl-8 titulosCentrados\">
    <h2>Películas Recomendadas</h2>
    <div class=\"row\">
        {% for pelicula in peliculas %}
            {% if pelicula.id < 9 %}
                <div class=\"col-9 col-sm-6 col-xl-3 recomendaciones\">
                    <h3>{{ pelicula.titulo }}</h3>
                    <a href=\"{{ path('pelicula', {'id': pelicula.id}) }}\"><img src=\"{{ asset('images/imagen' ~ pelicula.id ~ '.jpg') }}\" class=\"d-block img-responsive fit-image\"></a>
                    <br /><br />
                </div>
            {% endif %}
        {% endfor %}
    </div>
</div>

<br />

<div class=\"container-fluid col-12 col-sm-10 col-xl-8 titulosCentrados\">
    <h2>Series Recomendadas</h2>
    <div class=\"row\">
        {% for serie in series %}
            {% if serie.id < 9 %}
                <div class=\"col-9 col-sm-6 col-xl-3 recomendaciones\">
                    <h3>{{ serie.titulo }}</h3>
                    <a href=\"{{ path('serie', {'id': serie.id}) }}\"><img src=\"{{ asset('images/serie' ~ serie.id ~ '.jpg') }}\" class=\"d-block img-responsive fit-image\"></a>
                    <br /><br />
                </div>
            {% endif %}
        {% endfor %}
    </div>
</div>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\josef\\Desktop\\proyecto\\CinemaPlus\\templates\\home\\index.html.twig");
    }
}
