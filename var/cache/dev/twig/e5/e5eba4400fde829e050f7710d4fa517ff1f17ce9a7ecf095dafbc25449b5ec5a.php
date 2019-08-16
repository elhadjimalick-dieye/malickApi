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

/* envoi/show.html.twig */
class __TwigTemplate_16f5abac348533e663efac8e0c7a3a65b9acde3b3417c9b3045129f9eef7bd4a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "envoi/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "envoi/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Envoi";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Envoi</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envoi"]) || array_key_exists("envoi", $context) ? $context["envoi"] : (function () { throw new RuntimeError('Variable "envoi" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envoi"]) || array_key_exists("envoi", $context) ? $context["envoi"] : (function () { throw new RuntimeError('Variable "envoi" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envoi"]) || array_key_exists("envoi", $context) ? $context["envoi"] : (function () { throw new RuntimeError('Variable "envoi" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envoi"]) || array_key_exists("envoi", $context) ? $context["envoi"] : (function () { throw new RuntimeError('Variable "envoi" does not exist.', 24, $this->source); })()), "telephone", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envoi"]) || array_key_exists("envoi", $context) ? $context["envoi"] : (function () { throw new RuntimeError('Variable "envoi" does not exist.', 28, $this->source); })()), "montant", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomRecepteur</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envoi"]) || array_key_exists("envoi", $context) ? $context["envoi"] : (function () { throw new RuntimeError('Variable "envoi" does not exist.', 32, $this->source); })()), "NomRecepteur", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrenomRecepteur</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envoi"]) || array_key_exists("envoi", $context) ? $context["envoi"] : (function () { throw new RuntimeError('Variable "envoi" does not exist.', 36, $this->source); })()), "PrenomRecepteur", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumeroRecepteur</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envoi"]) || array_key_exists("envoi", $context) ? $context["envoi"] : (function () { throw new RuntimeError('Variable "envoi" does not exist.', 40, $this->source); })()), "NumeroRecepteur", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumeroTransaction</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["envoi"]) || array_key_exists("envoi", $context) ? $context["envoi"] : (function () { throw new RuntimeError('Variable "envoi" does not exist.', 44, $this->source); })()), "numeroTransaction", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("envoi_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("envoi_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["envoi"]) || array_key_exists("envoi", $context) ? $context["envoi"] : (function () { throw new RuntimeError('Variable "envoi" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 53
        echo twig_include($this->env, $context, "envoi/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "envoi/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  150 => 51,  145 => 49,  137 => 44,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Envoi{% endblock %}

{% block body %}
    <h1>Envoi</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ envoi.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ envoi.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ envoi.prenom }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ envoi.telephone }}</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>{{ envoi.montant }}</td>
            </tr>
            <tr>
                <th>NomRecepteur</th>
                <td>{{ envoi.NomRecepteur }}</td>
            </tr>
            <tr>
                <th>PrenomRecepteur</th>
                <td>{{ envoi.PrenomRecepteur }}</td>
            </tr>
            <tr>
                <th>NumeroRecepteur</th>
                <td>{{ envoi.NumeroRecepteur }}</td>
            </tr>
            <tr>
                <th>NumeroTransaction</th>
                <td>{{ envoi.numeroTransaction }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('envoi_index') }}\">back to list</a>

    <a href=\"{{ path('envoi_edit', {'id': envoi.id}) }}\">edit</a>

    {{ include('envoi/_delete_form.html.twig') }}
{% endblock %}
", "envoi/show.html.twig", "/home/elhadji-malick/Documents/Test/templates/envoi/show.html.twig");
    }
}
