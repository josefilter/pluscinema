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

/* proyecto/pelicula.html.twig */
class __TwigTemplate_3ae0f4cf12727aba616ef6b6199ad77ebe3e6ca78db0764736875dfb776bedb2 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyecto/pelicula.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyecto/pelicula.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proyecto/pelicula.html.twig", 2);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 3, $this->source); })()), "Titulo", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pelicula", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 12, $this->source); })()), "Titulo", [], "any", false, false, false, 12), "html", null, true);
        echo "</a>
        </li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div class=\"row\">

        <div class=\"col-12 col-sm-8 col-xl-3 detallePeli\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/imagen" . twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)) . ".jpg")), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-12 col-sm-8 col-xl-8 detallePeli\">
            <h2>Título: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 24, $this->source); })()), "Titulo", [], "any", false, false, false, 24), "html", null, true);
        echo "</h2>
            <p><strong>Resumen:</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 25, $this->source); })()), "Resumen", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
            <p><strong>Director:</strong> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 26, $this->source); })()), "Director", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
            <p><strong>Actores:</strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 27, $this->source); })()), "Actores", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
            <p><strong>Escritores:</strong> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 28, $this->source); })()), "Escritores", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
            <p><strong>Edad recomendada:</strong> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 29, $this->source); })()), "Edad", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
            <p><strong>Duración:</strong> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 30, $this->source); })()), "Duracion", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
            <p><strong>Género:</strong> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 31, $this->source); })()), "Genero", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
            <p><strong>Fecha de lanzamiento:</strong> ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 32, $this->source); })()), "fechaSalida", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
        echo "</p>
            ";
        // line 33
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 33, $this->source); })()), "valoracions", [], "any", false, false, false, 33), "count", [], "method", false, false, false, 33), 0)) {
            // line 34
            echo "                <p><strong>Valoración media:</strong> Esta película aún no ha sido valorada.</p>
            ";
        } else {
            // line 36
            echo "                ";
            $context["suma"] = 0;
            // line 37
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 37, $this->source); })()), "valoracions", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["valoracion"]) {
                // line 38
                echo "                    ";
                $context["numeros"] = twig_get_attribute($this->env, $this->source, $context["valoracion"], "valoracion", [], "any", false, false, false, 38);
                // line 39
                echo "                    ";
                $context["suma"] = ((isset($context["numeros"]) || array_key_exists("numeros", $context) ? $context["numeros"] : (function () { throw new RuntimeError('Variable "numeros" does not exist.', 39, $this->source); })()) + (isset($context["suma"]) || array_key_exists("suma", $context) ? $context["suma"] : (function () { throw new RuntimeError('Variable "suma" does not exist.', 39, $this->source); })()));
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valoracion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                ";
            $context["media"] = ((isset($context["suma"]) || array_key_exists("suma", $context) ? $context["suma"] : (function () { throw new RuntimeError('Variable "suma" does not exist.', 41, $this->source); })()) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 41, $this->source); })()), "valoracions", [], "any", false, false, false, 41), "count", [], "method", false, false, false, 41));
            // line 42
            echo "                <p><strong>Valoración media:</strong> ";
            echo twig_escape_filter($this->env, twig_round((isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 42, $this->source); })()), 1, "floor"), "html", null, true);
            echo "/10</p>
            ";
        }
        // line 44
        echo "            <br />
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start');
        echo "
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'widget');
        echo "
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    <br /><br />
    <div class=\"row comentario\">
        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 53, $this->source); })()), 'widget');
        echo "
        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 54, $this->source); })()), 'form_end');
        echo "

        <ul>
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 57, $this->source); })()), "comentarios", [], "any", false, false, false, 57));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 58
            echo "            <li class='bloqueComentario'>
                <p>
                    ";
            // line 60
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["comentario"], "Autor", [], "any", false, false, false, 60), null)) {
                // line 61
                echo "                        <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comentario"], "Autor", [], "any", false, false, false, 61), "username", [], "any", false, false, false, 61), "html", null, true);
                echo "</strong>
                    ";
            } else {
                // line 63
                echo "                        <strong>Anónimo</strong>
                    ";
            }
            // line 65
            echo "                    en ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentario"], "fecha", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true);
            echo ":
                </p>
                <p>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentario"], "texto", [], "any", false, false, false, 67), "html", null, true);
            echo "</p>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "            <li>No hay comentarios</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </ul>
    </div>


    <br /><br />
    <div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
        <p><a class=\"enlaceboton\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descargarPDFPeli", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
        echo "\">Descargar PDF</a></p>
    </div>

    <div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
        ";
        // line 82
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), null)) {
            // line 83
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 84
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rol"], "roles", [], "any", false, false, false, 84));
                foreach ($context['_seq'] as $context["_key"] => $context["rol1"]) {
                    // line 85
                    echo "                    ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "username", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, $context["rol"], "username", [], "any", false, false, false, 85)) && 0 === twig_compare($context["rol1"], "admin"))) {
                        // line 86
                        echo "                        <p><a class=\"enlaceboton\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarPelicula", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)]), "html", null, true);
                        echo "\">Borrar pelicula</a></p>
                    ";
                    }
                    // line 88
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "        ";
        }
        // line 91
        echo "    </div>

    <div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
        ";
        // line 94
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), null)) {
            // line 95
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 96
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rol"], "roles", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["rol1"]) {
                    // line 97
                    echo "                    ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "username", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, $context["rol"], "username", [], "any", false, false, false, 97)) && 0 === twig_compare($context["rol1"], "admin"))) {
                        // line 98
                        echo "                        <p><a class=\"enlaceboton\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editarPelicula", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pelicula"]) || array_key_exists("pelicula", $context) ? $context["pelicula"] : (function () { throw new RuntimeError('Variable "pelicula" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)]), "html", null, true);
                        echo "\">Editar pelicula</a></p>
                    ";
                    }
                    // line 100
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "        ";
        }
        // line 103
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proyecto/pelicula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 103,  373 => 102,  367 => 101,  361 => 100,  355 => 98,  352 => 97,  347 => 96,  342 => 95,  340 => 94,  335 => 91,  332 => 90,  326 => 89,  320 => 88,  314 => 86,  311 => 85,  306 => 84,  301 => 83,  299 => 82,  292 => 78,  284 => 72,  277 => 70,  269 => 67,  263 => 65,  259 => 63,  253 => 61,  251 => 60,  247 => 58,  242 => 57,  236 => 54,  232 => 53,  228 => 52,  220 => 47,  216 => 46,  212 => 45,  209 => 44,  203 => 42,  200 => 41,  194 => 40,  191 => 39,  188 => 38,  183 => 37,  180 => 36,  176 => 34,  174 => 33,  170 => 32,  166 => 31,  162 => 30,  158 => 29,  154 => 28,  150 => 27,  146 => 26,  142 => 25,  138 => 24,  132 => 21,  127 => 18,  117 => 17,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/proyecto/noticia.html.twig #}
{% extends 'base.html.twig' %}
{% block title %}{{ pelicula.Titulo }}{% endblock %}

{% block menu %}
<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('inicio') }}\">Inicio</a>
        </li>
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('pelicula', {'id': pelicula.id}) }}\">{{ pelicula.Titulo }}</a>
        </li>
    </ul>
</div>
{% endblock %}
{% block body %}
    <div class=\"row\">

        <div class=\"col-12 col-sm-8 col-xl-3 detallePeli\">
            <img src=\"{{ asset('images/imagen' ~ pelicula.id ~ '.jpg') }}\" />
        </div>
        <div class=\"col-12 col-sm-8 col-xl-8 detallePeli\">
            <h2>Título: {{ pelicula.Titulo }}</h2>
            <p><strong>Resumen:</strong> {{ pelicula.Resumen }}</p>
            <p><strong>Director:</strong> {{ pelicula.Director }}</p>
            <p><strong>Actores:</strong> {{ pelicula.Actores }}</p>
            <p><strong>Escritores:</strong> {{ pelicula.Escritores }}</p>
            <p><strong>Edad recomendada:</strong> {{ pelicula.Edad }}</p>
            <p><strong>Duración:</strong> {{ pelicula.Duracion }}</p>
            <p><strong>Género:</strong> {{ pelicula.Genero }}</p>
            <p><strong>Fecha de lanzamiento:</strong> {{ pelicula.fechaSalida|date(\"d/m/Y\") }}</p>
            {% if pelicula.valoracions.count() == 0 %}
                <p><strong>Valoración media:</strong> Esta película aún no ha sido valorada.</p>
            {% else %}
                {% set suma = 0 %}
                {% for valoracion in pelicula.valoracions %}
                    {% set numeros = valoracion.valoracion %}
                    {% set suma = numeros + suma %}
                {% endfor %}
                {% set media = suma / pelicula.valoracions.count() %}
                <p><strong>Valoración media:</strong> {{ media|round(1, 'floor') }}/10</p>
            {% endif %}
            <br />
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        </div>
    </div>
    <br /><br />
    <div class=\"row comentario\">
        {{ form_start(form2) }}
        {{ form_widget(form2) }}
        {{ form_end(form2) }}

        <ul>
        {% for comentario in pelicula.comentarios %}
            <li class='bloqueComentario'>
                <p>
                    {% if comentario.Autor != null %}
                        <strong>{{ comentario.Autor.username }}</strong>
                    {% else %}
                        <strong>Anónimo</strong>
                    {% endif %}
                    en {{ comentario.fecha|date(\"d/m/Y\") }}:
                </p>
                <p>{{ comentario.texto }}</p>
            </li>
        {% else %}
            <li>No hay comentarios</li>
        {% endfor %}
        </ul>
    </div>


    <br /><br />
    <div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
        <p><a class=\"enlaceboton\" href=\"{{ path('descargarPDFPeli', {'id' : pelicula.id}) }}\">Descargar PDF</a></p>
    </div>

    <div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
        {% if app.user != null %}
            {% for rol in user %}
                {% for rol1 in rol.roles %}
                    {% if app.user.username == rol.username and rol1 == \"admin\" %}
                        <p><a class=\"enlaceboton\" href=\"{{ path('borrarPelicula', {'id' : pelicula.id}) }}\">Borrar pelicula</a></p>
                    {% endif %}
                {% endfor %}
            {% endfor %}
        {% endif %}
    </div>

    <div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
        {% if app.user != null %}
            {% for rol in user %}
                {% for rol1 in rol.roles %}
                    {% if app.user.username == rol.username and rol1 == \"admin\" %}
                        <p><a class=\"enlaceboton\" href=\"{{ path('editarPelicula', {'id' : pelicula.id}) }}\">Editar pelicula</a></p>
                    {% endif %}
                {% endfor %}
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}", "proyecto/pelicula.html.twig", "C:\\Users\\josef\\Desktop\\proyecto\\CinemaPlus\\templates\\proyecto\\pelicula.html.twig");
    }
}
