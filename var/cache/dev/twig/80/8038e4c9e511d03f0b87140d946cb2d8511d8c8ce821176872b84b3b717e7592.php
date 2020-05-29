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

/* proyecto/peliculasBuscadas.html.twig */
class __TwigTemplate_1f58bd07221692e824483bc4094ab93ba3ad3083643b7f004d8b5db4b076de8c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyecto/peliculasBuscadas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyecto/peliculasBuscadas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proyecto/peliculasBuscadas.html.twig", 1);
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

        echo "CinemaPlus-ListaPeliculas";
        
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
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\">Inicio</a>
        </li>
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("peliculas");
        echo "\">Peliculas</a>
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
        echo "<div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
    <h2>Buscador de Películas</h2>
    <br />
    <h4>Has buscado '";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 37, $this->source); })()), "buscar", [], "any", false, false, false, 37), "html", null, true);
        echo "'</h4>
    <br /><br />
    <div class=\"col-4 col-sm-4 col-xl-4\">
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'widget');
        echo "
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
    </div>
    <br /><br />
    <div id=\"lista-peliculas\">
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculas"]) || array_key_exists("peliculas", $context) ? $context["peliculas"] : (function () { throw new RuntimeError('Variable "peliculas" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 47
            echo "            <div class=\"row\">
                <div class=\"col-12 col-lg-12 col-xl-4\">
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pelicula", ["id" => twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/imagen" . twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 49)) . ".jpg")), "html", null, true);
            echo "\" class=\"img-responsive fit-image imagenLista\"></a>
                </div>
                <div class=\"col-12 col-lg-12 col-xl-8\">
                    <a class=\"enlacePeli\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pelicula", ["id" => twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pelicula"], "Titulo", [], "any", false, false, false, 52), "html", null, true);
            echo "</h3></a>
                    <p>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pelicula"], "Actores", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                    <p>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pelicula"], "Director", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                    <p>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pelicula"], "Resumen", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
                    <a class=\"enlacePeli\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pelicula", ["id" => twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"><p>Leer mas...</p></a>
                </div>
            </div>
            <br /><br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proyecto/peliculasBuscadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 61,  219 => 56,  215 => 55,  211 => 54,  207 => 53,  201 => 52,  193 => 49,  189 => 47,  185 => 46,  178 => 42,  174 => 41,  170 => 40,  164 => 37,  159 => 34,  149 => 33,  137 => 29,  131 => 26,  128 => 25,  122 => 22,  119 => 21,  117 => 20,  112 => 18,  106 => 15,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CinemaPlus-ListaPeliculas{% endblock %}

{% block menu %}
<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('inicio') }}\">Inicio</a>
        </li>
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('peliculas') }}\">Peliculas</a>
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
<div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
    <h2>Buscador de Películas</h2>
    <br />
    <h4>Has buscado '{{ search.buscar }}'</h4>
    <br /><br />
    <div class=\"col-4 col-sm-4 col-xl-4\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    </div>
    <br /><br />
    <div id=\"lista-peliculas\">
        {% for pelicula in peliculas %}
            <div class=\"row\">
                <div class=\"col-12 col-lg-12 col-xl-4\">
                    <a href=\"{{ path('pelicula', {'id': pelicula.id}) }}\"><img src=\"{{ asset('images/imagen' ~ pelicula.id ~ '.jpg') }}\" class=\"img-responsive fit-image imagenLista\"></a>
                </div>
                <div class=\"col-12 col-lg-12 col-xl-8\">
                    <a class=\"enlacePeli\" href=\"{{ path('pelicula', {'id': pelicula.id}) }}\"><h3>{{ pelicula.Titulo }}</h3></a>
                    <p>{{ pelicula.Actores }}</p>
                    <p>{{ pelicula.Director }}</p>
                    <p>{{ pelicula.Resumen }}</p>
                    <a class=\"enlacePeli\" href=\"{{ path('pelicula', {'id': pelicula.id}) }}\"><p>Leer mas...</p></a>
                </div>
            </div>
            <br /><br />
        {% endfor %}
    </div>
</div>
{% endblock %}", "proyecto/peliculasBuscadas.html.twig", "C:\\Users\\josef\\Desktop\\proyecto\\CinemaPlus\\templates\\proyecto\\peliculasBuscadas.html.twig");
    }
}
