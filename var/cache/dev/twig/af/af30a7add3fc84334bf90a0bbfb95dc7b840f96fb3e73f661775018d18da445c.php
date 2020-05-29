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

/* proyecto/serie.html.twig */
class __TwigTemplate_4d2babba94830929ab8d257694b066180ce4954fb84f9aefd76b6463c39ba173 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyecto/serie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proyecto/serie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proyecto/serie.html.twig", 2);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 4, $this->source); })()), "Titulo", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\">Inicio</a>
        </li>
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("serie", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 13, $this->source); })()), "Titulo", [], "any", false, false, false, 13), "html", null, true);
        echo "</a>
        </li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"row\">

        <div class=\"col-12 col-sm-8 col-xl-3 detallePeli\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/serie" . twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)) . ".jpg")), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-12 col-sm-8 col-xl-8 detallePeli\">
            <h2>Título: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 25, $this->source); })()), "Titulo", [], "any", false, false, false, 25), "html", null, true);
        echo "</h2>
            <p><strong>Resumen:</strong> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 26, $this->source); })()), "Resumen", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
            <p><strong>Actores:</strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 27, $this->source); })()), "Actores", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
            <p><strong>Número de temporadas:</strong> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 28, $this->source); })()), "Temporadas", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
            <p><strong>Número de capitulos:</strong> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 29, $this->source); })()), "Capitulos", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
            <p><strong>Género:</strong> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 30, $this->source); })()), "Genero", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
            ";
        // line 31
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 31, $this->source); })()), "valoracions", [], "any", false, false, false, 31), "count", [], "method", false, false, false, 31), 0)) {
            // line 32
            echo "                <p><strong>Valoración media:</strong> Esta serie aún no ha sido valorada.</p>
            ";
        } else {
            // line 34
            echo "                ";
            $context["suma"] = 0;
            // line 35
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 35, $this->source); })()), "valoracions", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["valoracion"]) {
                // line 36
                echo "                    ";
                $context["numeros"] = twig_get_attribute($this->env, $this->source, $context["valoracion"], "valoracion", [], "any", false, false, false, 36);
                // line 37
                echo "                    ";
                $context["suma"] = ((isset($context["numeros"]) || array_key_exists("numeros", $context) ? $context["numeros"] : (function () { throw new RuntimeError('Variable "numeros" does not exist.', 37, $this->source); })()) + (isset($context["suma"]) || array_key_exists("suma", $context) ? $context["suma"] : (function () { throw new RuntimeError('Variable "suma" does not exist.', 37, $this->source); })()));
                // line 38
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valoracion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                ";
            $context["media"] = ((isset($context["suma"]) || array_key_exists("suma", $context) ? $context["suma"] : (function () { throw new RuntimeError('Variable "suma" does not exist.', 39, $this->source); })()) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 39, $this->source); })()), "valoracions", [], "any", false, false, false, 39), "count", [], "method", false, false, false, 39));
            // line 40
            echo "                <p><strong>Valoración media:</strong> ";
            echo twig_escape_filter($this->env, twig_round((isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 40, $this->source); })()), 1, "floor"), "html", null, true);
            echo "/10</p>
            ";
        }
        // line 42
        echo "            <br />
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start');
        echo "
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'widget');
        echo "
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    <br /><br />
    <div class=\"row comentario\">
        ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 50, $this->source); })()), 'form_start');
        echo "
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 51, $this->source); })()), 'widget');
        echo "
        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 52, $this->source); })()), 'form_end');
        echo "

        <ul>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 55, $this->source); })()), "comentarios", [], "any", false, false, false, 55));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 56
            echo "            <li class='bloqueComentario'>
                <p>
                    ";
            // line 58
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["comentario"], "Autor", [], "any", false, false, false, 58), null)) {
                // line 59
                echo "                        <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comentario"], "Autor", [], "any", false, false, false, 59), "username", [], "any", false, false, false, 59), "html", null, true);
                echo "</strong>
                    ";
            } else {
                // line 61
                echo "                        <strong>Anónimo</strong>
                    ";
            }
            // line 63
            echo "                    en ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentario"], "fecha", [], "any", false, false, false, 63), "d/m/Y"), "html", null, true);
            echo ":
                </p>
                <p>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentario"], "texto", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "            <li>No hay comentarios</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </ul>
    </div>

    <br /><br />
    <div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
        <p><a class=\"enlaceboton\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descargarPDFSerie", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        echo "\">Descargar PDF</a></p>
    </div>

    <div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
        ";
        // line 79
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), null)) {
            // line 80
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 81
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rol"], "roles", [], "any", false, false, false, 81));
                foreach ($context['_seq'] as $context["_key"] => $context["rol1"]) {
                    // line 82
                    echo "                    ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "username", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, $context["rol"], "username", [], "any", false, false, false, 82)) && 0 === twig_compare($context["rol1"], "admin"))) {
                        // line 83
                        echo "                        <p><a class=\"enlaceboton\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrarSerie", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
                        echo "\">Borrar serie</a></p>
                    ";
                    }
                    // line 85
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        ";
        }
        // line 88
        echo "    </div>

    <div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
        ";
        // line 91
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), null)) {
            // line 92
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 93
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rol"], "roles", [], "any", false, false, false, 93));
                foreach ($context['_seq'] as $context["_key"] => $context["rol1"]) {
                    // line 94
                    echo "                    ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "username", [], "any", false, false, false, 94), twig_get_attribute($this->env, $this->source, $context["rol"], "username", [], "any", false, false, false, 94)) && 0 === twig_compare($context["rol1"], "admin"))) {
                        // line 95
                        echo "                        <p><a class=\"enlaceboton\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editarSerie", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
                        echo "\">Editar serie</a></p>
                    ";
                    }
                    // line 97
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "        ";
        }
        // line 100
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proyecto/serie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 100,  360 => 99,  354 => 98,  348 => 97,  342 => 95,  339 => 94,  334 => 93,  329 => 92,  327 => 91,  322 => 88,  319 => 87,  313 => 86,  307 => 85,  301 => 83,  298 => 82,  293 => 81,  288 => 80,  286 => 79,  279 => 75,  272 => 70,  265 => 68,  257 => 65,  251 => 63,  247 => 61,  241 => 59,  239 => 58,  235 => 56,  230 => 55,  224 => 52,  220 => 51,  216 => 50,  208 => 45,  204 => 44,  200 => 43,  197 => 42,  191 => 40,  188 => 39,  182 => 38,  179 => 37,  176 => 36,  171 => 35,  168 => 34,  164 => 32,  162 => 31,  158 => 30,  154 => 29,  150 => 28,  146 => 27,  142 => 26,  138 => 25,  132 => 22,  127 => 19,  117 => 18,  100 => 13,  94 => 10,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/proyecto/noticia.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ serie.Titulo }}{% endblock %}

{% block menu %}
<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('inicio') }}\">Inicio</a>
        </li>
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('serie', {'id': serie.id}) }}\">{{ serie.Titulo }}</a>
        </li>
    </ul>
</div>
{% endblock %}
{% block body %}
    <div class=\"row\">

        <div class=\"col-12 col-sm-8 col-xl-3 detallePeli\">
            <img src=\"{{ asset('images/serie' ~ serie.id ~ '.jpg') }}\" />
        </div>
        <div class=\"col-12 col-sm-8 col-xl-8 detallePeli\">
            <h2>Título: {{ serie.Titulo }}</h2>
            <p><strong>Resumen:</strong> {{ serie.Resumen }}</p>
            <p><strong>Actores:</strong> {{ serie.Actores }}</p>
            <p><strong>Número de temporadas:</strong> {{ serie.Temporadas }}</p>
            <p><strong>Número de capitulos:</strong> {{ serie.Capitulos }}</p>
            <p><strong>Género:</strong> {{ serie.Genero }}</p>
            {% if serie.valoracions.count() == 0 %}
                <p><strong>Valoración media:</strong> Esta serie aún no ha sido valorada.</p>
            {% else %}
                {% set suma = 0 %}
                {% for valoracion in serie.valoracions %}
                    {% set numeros = valoracion.valoracion %}
                    {% set suma = numeros + suma %}
                {% endfor %}
                {% set media = suma / serie.valoracions.count() %}
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
        {% for comentario in serie.comentarios %}
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
        <p><a class=\"enlaceboton\" href=\"{{ path('descargarPDFSerie', {'id' : serie.id}) }}\">Descargar PDF</a></p>
    </div>

    <div class=\"container-fluid col-12 col-sm-12 col-xl-12 MargenSuper\">
        {% if app.user != null %}
            {% for rol in user %}
                {% for rol1 in rol.roles %}
                    {% if app.user.username == rol.username and rol1 == \"admin\" %}
                        <p><a class=\"enlaceboton\" href=\"{{ path('borrarSerie', {'id' : serie.id}) }}\">Borrar serie</a></p>
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
                        <p><a class=\"enlaceboton\" href=\"{{ path('editarSerie', {'id' : serie.id}) }}\">Editar serie</a></p>
                    {% endif %}
                {% endfor %}
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}", "proyecto/serie.html.twig", "C:\\Users\\josef\\Desktop\\proyecto\\CinemaPlus\\templates\\proyecto\\serie.html.twig");
    }
}
