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

/* proyecto/listaPeliculas.html.twig */
class __TwigTemplate_00a99a79eb74607e5d5abc5656bf5c759c0c346c7de5854c151e8cac874eaf79 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyecto/listaPeliculas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyecto/listaPeliculas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proyecto/listaPeliculas.html.twig", 1);
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
    <h2>Listado de peliculas</h2>
    <br /><br />
    <div class=\"col-4 col-sm-4 col-xl-4\">
        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'widget');
        echo "
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
    </div>
    <br /><br />
    <div id=\"lista-peliculas\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peliculas"]) || array_key_exists("peliculas", $context) ? $context["peliculas"] : (function () { throw new RuntimeError('Variable "peliculas" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 45
            echo "            <div class=\"row\">
                <div class=\"col-12 col-lg-12 col-xl-4\">
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pelicula", ["id" => twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/imagen" . twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 47)) . ".jpg")), "html", null, true);
            echo "\" class=\"img-responsive fit-image imagenLista\"></a>
                </div>
                <div class=\"col-12 col-lg-12 col-xl-8\">
                    <a class=\"enlacePeli\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pelicula", ["id" => twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pelicula"], "Titulo", [], "any", false, false, false, 50), "html", null, true);
            echo "</h3></a>
                    <p>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pelicula"], "Actores", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>
                    <p>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pelicula"], "Director", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
                    <p>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pelicula"], "Resumen", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                    <a class=\"enlacePeli\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pelicula", ["id" => twig_get_attribute($this->env, $this->source, $context["pelicula"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><p>Leer mas...</p></a>
                </div>
            </div>
            <br /><br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </div>
    
    ";
        // line 61
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), null)) {
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 63
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rol"], "roles", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["rol1"]) {
                    // line 64
                    echo "                ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "username", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, $context["rol"], "username", [], "any", false, false, false, 64)) && 0 === twig_compare($context["rol1"], "admin"))) {
                        // line 65
                        echo "                    <p><a class=\"enlaceboton\" href=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("peliculaNueva");
                        echo "\">Añadir pelicula</a></p>
                ";
                    }
                    // line 67
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "    ";
        }
        // line 70
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proyecto/listaPeliculas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 70,  262 => 69,  256 => 68,  250 => 67,  244 => 65,  241 => 64,  236 => 63,  231 => 62,  229 => 61,  225 => 59,  214 => 54,  210 => 53,  206 => 52,  202 => 51,  196 => 50,  188 => 47,  184 => 45,  180 => 44,  173 => 40,  169 => 39,  165 => 38,  159 => 34,  149 => 33,  137 => 29,  131 => 26,  128 => 25,  122 => 22,  119 => 21,  117 => 20,  112 => 18,  106 => 15,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
    <h2>Listado de peliculas</h2>
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
    
    {% if app.user != null %}
        {% for rol in user %}
            {% for rol1 in rol.roles %}
                {% if app.user.username == rol.username and rol1 == \"admin\" %}
                    <p><a class=\"enlaceboton\" href=\"{{ path('peliculaNueva') }}\">Añadir pelicula</a></p>
                {% endif %}
            {% endfor %}
        {% endfor %}
    {% endif %}
</div>
{% endblock %}", "proyecto/listaPeliculas.html.twig", "C:\\Users\\josef\\Desktop\\proyecto\\CinemaPlus\\templates\\proyecto\\listaPeliculas.html.twig");
    }
}
