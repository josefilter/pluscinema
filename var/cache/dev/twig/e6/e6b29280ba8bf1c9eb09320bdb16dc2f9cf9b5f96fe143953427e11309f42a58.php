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

/* proyecto/pelipdf.html.twig */
class __TwigTemplate_b7f07d641668f43edf8f5d833ed0f730067025cfc534bbcf4f90da6457bfe698 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyecto/pelipdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyecto/pelipdf.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proyecto/pelipdf.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 4, $this->source); })()), "Titulo", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "  <div class=\"row\">
    <div class=\"col-12 col-sm-12 col-xl-12 detallePeli\">
      <h2>Titulo: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 9, $this->source); })()), "Titulo", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
      <p><strong>Resumen:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 10, $this->source); })()), "Resumen", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
      <p><strong>Director:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 11, $this->source); })()), "Director", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
      <p><strong>Actores:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 12, $this->source); })()), "Actores", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
      <p><strong>Escritores:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 13, $this->source); })()), "Escritores", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
      <p><strong>Edad recomendada:</strong> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 14, $this->source); })()), "Edad", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
      <p><strong>Duracion:</strong> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 15, $this->source); })()), "Duracion", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
      <p><strong>Genero:</strong> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 16, $this->source); })()), "Genero", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
      <p><strong>Fecha de lanzamiento:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 17, $this->source); })()), "fechaSalida", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo "</p>
      ";
        // line 18
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 18, $this->source); })()), "valoracions", [], "any", false, false, false, 18), "count", [], "method", false, false, false, 18), 0)) {
            // line 19
            echo "        <p><strong>Valoracion media:</strong> Esta película aún no ha sido valorada.</p>
      ";
        } else {
            // line 21
            echo "        ";
            $context["suma"] = 0;
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 22, $this->source); })()), "valoracions", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["valoracion"]) {
                // line 23
                echo "          ";
                $context["numeros"] = twig_get_attribute($this->env, $this->source, $context["valoracion"], "valoracion", [], "any", false, false, false, 23);
                // line 24
                echo "          ";
                $context["suma"] = ((isset($context["numeros"]) || array_key_exists("numeros", $context) ? $context["numeros"] : (function () { throw new RuntimeError('Variable "numeros" does not exist.', 24, $this->source); })()) + (isset($context["suma"]) || array_key_exists("suma", $context) ? $context["suma"] : (function () { throw new RuntimeError('Variable "suma" does not exist.', 24, $this->source); })()));
                // line 25
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valoracion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
            $context["media"] = ((isset($context["suma"]) || array_key_exists("suma", $context) ? $context["suma"] : (function () { throw new RuntimeError('Variable "suma" does not exist.', 26, $this->source); })()) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 26, $this->source); })()), "valoracions", [], "any", false, false, false, 26), "count", [], "method", false, false, false, 26));
            // line 27
            echo "        <p><strong>Valoracion media:</strong> ";
            echo twig_escape_filter($this->env, twig_round((isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 27, $this->source); })()), 1, "floor"), "html", null, true);
            echo "/10</p>
      ";
        }
        // line 29
        echo "    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proyecto/pelipdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 33,  164 => 29,  158 => 27,  155 => 26,  149 => 25,  146 => 24,  143 => 23,  138 => 22,  135 => 21,  131 => 19,  129 => 18,  125 => 17,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  105 => 12,  101 => 11,  97 => 10,  93 => 9,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/proyecto/pelipdf.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ pelicula.Titulo }}{% endblock %}

{% block body %}
  <div class=\"row\">
    <div class=\"col-12 col-sm-12 col-xl-12 detallePeli\">
      <h2>Titulo: {{ pelicula.Titulo }}</h2>
      <p><strong>Resumen:</strong> {{ pelicula.Resumen }}</p>
      <p><strong>Director:</strong> {{ pelicula.Director }}</p>
      <p><strong>Actores:</strong> {{ pelicula.Actores }}</p>
      <p><strong>Escritores:</strong> {{ pelicula.Escritores }}</p>
      <p><strong>Edad recomendada:</strong> {{ pelicula.Edad }}</p>
      <p><strong>Duracion:</strong> {{ pelicula.Duracion }}</p>
      <p><strong>Genero:</strong> {{ pelicula.Genero }}</p>
      <p><strong>Fecha de lanzamiento:</strong> {{ pelicula.fechaSalida|date(\"d/m/Y\") }}</p>
      {% if pelicula.valoracions.count() == 0 %}
        <p><strong>Valoracion media:</strong> Esta película aún no ha sido valorada.</p>
      {% else %}
        {% set suma = 0 %}
        {% for valoracion in pelicula.valoracions %}
          {% set numeros = valoracion.valoracion %}
          {% set suma = numeros + suma %}
        {% endfor %}
        {% set media = suma / pelicula.valoracions.count() %}
        <p><strong>Valoracion media:</strong> {{ media|round(1, 'floor') }}/10</p>
      {% endif %}
    </div>
  </div>
{% endblock %}

{% block footer %}
{% endblock %}", "proyecto/pelipdf.html.twig", "C:\\Users\\josef\\Desktop\\proyecto\\CinemaPlus\\templates\\proyecto\\pelipdf.html.twig");
    }
}
