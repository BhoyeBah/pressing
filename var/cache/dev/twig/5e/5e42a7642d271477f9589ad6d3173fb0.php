<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home_page/recherche.html.twig */
class __TwigTemplate_0b79254c9a11e8cda206f08f321ee1df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/recherche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/recherche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/recherche.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "Résultats de recherche";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "<div class=\"card\">
    <h5 class=\"card-header\">Résultats de la recherche : \"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\"</h5>
    <div class=\"card-body\">

        ";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "            <!-- Résultats Clients -->
            <h6>Clients trouvés :</h6>
            <div class=\"table-responsive text-nowrap mb-4\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Téléphone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 24
                yield "                            <tr>
                                <td>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 25), "html", null, true);
                yield "</td>
                                <td>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "telephone", [], "any", false, false, false, 26), "html", null, true);
                yield "</td>
                                <td>
                                    <a href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-primary\">Voir</a>
                                    <a href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info\">Modifier</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 37
        yield "
        ";
        // line 38
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 38, $this->source); })()))) {
            // line 39
            yield "            <!-- Résultats Factures -->
            <h6>Factures trouvées :</h6>
            <div class=\"table-responsive text-nowrap\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>Numéro</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 51
                yield "                            <tr>
                                <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "numero", [], "any", false, false, false, 52), "html", null, true);
                yield "</td>
                                <td>
                                    <a href=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-primary\">Voir</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 62
        yield "
        ";
        // line 63
        if ((Twig\Extension\CoreExtension::testEmpty((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 63, $this->source); })())) && Twig\Extension\CoreExtension::testEmpty((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 63, $this->source); })())))) {
            // line 64
            yield "            <div class=\"alert alert-warning mt-3\">Aucun résultat trouvé pour \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "\".</div>
        ";
        }
        // line 66
        yield "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home_page/recherche.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  208 => 66,  202 => 64,  200 => 63,  197 => 62,  191 => 58,  181 => 54,  176 => 52,  173 => 51,  169 => 50,  156 => 39,  154 => 38,  151 => 37,  145 => 33,  135 => 29,  131 => 28,  126 => 26,  122 => 25,  119 => 24,  115 => 23,  101 => 11,  99 => 10,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Résultats de recherche{% endblock %}

{% block body %}
<div class=\"card\">
    <h5 class=\"card-header\">Résultats de la recherche : \"{{ query }}\"</h5>
    <div class=\"card-body\">

        {% if client is not empty %}
            <!-- Résultats Clients -->
            <h6>Clients trouvés :</h6>
            <div class=\"table-responsive text-nowrap mb-4\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Téléphone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for c in client %}
                            <tr>
                                <td>{{ c.nom }}</td>
                                <td>{{ c.telephone }}</td>
                                <td>
                                    <a href=\"{{ path('app_client_show', {'id': c.id}) }}\" class=\"btn btn-sm btn-primary\">Voir</a>
                                    <a href=\"{{ path('app_client_edit', {'id': c.id}) }}\" class=\"btn btn-sm btn-info\">Modifier</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}

        {% if facture is not empty %}
            <!-- Résultats Factures -->
            <h6>Factures trouvées :</h6>
            <div class=\"table-responsive text-nowrap\">
                <table class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>Numéro</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for f in facture %}
                            <tr>
                                <td>{{ f.numero }}</td>
                                <td>
                                    <a href=\"{{ path('app_commande_show', {'id': f.id}) }}\" class=\"btn btn-sm btn-primary\">Voir</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}

        {% if client is empty and facture is empty %}
            <div class=\"alert alert-warning mt-3\">Aucun résultat trouvé pour \"{{ query }}\".</div>
        {% endif %}

    </div>
</div>
{% endblock %}
", "home_page/recherche.html.twig", "C:\\xampp\\htdocs\\pressing\\templates\\home_page\\recherche.html.twig");
    }
}
