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

/* commande/show.html.twig */
class __TwigTemplate_f6372ec07dd300f1b343e383ce89acda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/show.html.twig", 1);
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

        yield "Détails de la commande";
        
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
        yield "    <div class=\"card\">
        <h5 class=\"card-header\">
            Numéro de la Commande ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 8, $this->source); })()), "numero", [], "any", false, false, false, 8), "html", null, true);
        yield "
        </h5>

        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        <p><strong>Date de Commande :</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 15, $this->source); })()), "dateCommande", [], "any", false, false, false, 15), "h:i:s d-m-Y"), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"input-group mb-3\">
                        <p><strong>Date de Livraison :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 18, $this->source); })()), "dateLivraison", [], "any", false, false, false, 18), "h:i:s d-m-Y"), "html", null, true);
        yield "</p>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\" mb-3\">
                        <p><strong>Nom et Prénom :</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 23, $this->source); })()), "client", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 23, $this->source); })()), "client", [], "any", false, false, false, 23), "prenom", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\" mb-3\">
                        <p><strong>Téléphone :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 26, $this->source); })()), "client", [], "any", false, false, false, 26), "telephone", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\" mb-3\">
                        <p><strong>Adresse :</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 29, $this->source); })()), "client", [], "any", false, false, false, 29), "adresse", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>

            ";
        // line 35
        yield "            ";
        // line 36
        yield "            ";
        // line 37
        yield "            ";
        // line 38
        yield "            ";
        // line 39
        yield "            ";
        // line 40
        yield "            ";
        // line 41
        yield "            <h5 class=\"fw-bold\">Détails des Articles</h5>

            <div class=\"card-body\">

                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Article</th>
                        <th>Quantité</th>
                        <th>Prix Unitaire</th>
                        <th>Remise</th>
                        <th>Montant</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "commandeDetails", [], "any", false, false, false, 57));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 58
            yield "                        <tr>
                            <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "articles", [], "any", false, false, false, 59), "numero", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                            <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "articles", [], "any", false, false, false, 60), "designation", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                            <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "quantity", [], "any", false, false, false, 61), "html", null, true);
            yield "</td>
                            <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prixUnitaire", [], "any", false, false, false, 62), 2, ",", " "), "html", null, true);
            yield " FCFA</td>
                            <td>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "remise", [], "any", false, false, false, 63), 2, ",", " "), "html", null, true);
            yield " FCFA</td>
                            <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prixTotal", [], "any", false, false, false, 64), 2, ",", " "), "html", null, true);
            yield " FCFA</td>
                        </tr>

                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Aucun détail de commande trouvé</td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "                    <tr>
                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            Prix total sans remise :
                        </td>
                        <td>
                            <span id=\"\"
                                  class=\"text-nowrap\"> ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 79, $this->source); })()), "montantTotal", [], "any", false, false, false, 79), 2, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            Prix total avec remise :
                        </td>
                        <td>
                            <span id=\"\"
                                  class=\"text-nowrap\"> ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 88, $this->source); })()), "montantTotal", [], "any", false, false, false, 88) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 88, $this->source); })()), "remise", [], "any", false, false, false, 88)), 2, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            Rémise
                        </td>
                        <td>
                            <span id=\"\" class=\"text-nowrap\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 96, $this->source); })()), "remise", [], "any", false, false, false, 96), 2, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </td>
                    </tr>
                    <tr>

                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            ";
        // line 102
        $context["montantRecu"] = 0;
        // line 103
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 103, $this->source); })()), "paiements", [], "any", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 104
            yield "                                ";
            $context["montantRecu"] = ((isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 104, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "montantRecu", [], "any", false, false, false, 104));
            // line 105
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "                            Montant Payé
                        </td>
                        <td>
                            <span id=\"\"
                                  class=\"text-nowrap\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 110, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </td>
                    </tr>


                    <tr>

                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            Status de la commande
                        </td>
                        <td>

                            ";
        // line 122
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 122, $this->source); })()), "status", [], "any", false, false, false, 122) == "payé")) {
            // line 123
            yield "                                <span class=\"badge bg-success\">Payé</span>
                            ";
        } else {
            // line 125
            yield "                                <span class=\"badge bg-danger\">Non payé</span>
                            ";
        }
        // line 127
        yield "
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            Reste à payer
                        </td>
                        <td>
                                <span id=\"\"
                                      class=\"text-nowrap\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 136, $this->source); })()), "montantTotal", [], "any", false, false, false, 136) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 136, $this->source); })()), "remise", [], "any", false, false, false, 136)) - (isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 136, $this->source); })())), 2, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"row mt-4\">
                <div class=\"col-md-8\"></div>
                <div class=\"col-md-4\">
                    <a id=\"print\" href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
        yield "\" class=\"btn rounded-pill btn-warning\">
                        <i class=\"bx bx-subdirectory-left\"></i>
                        Retour
                    </a>
                    <a id=\"print\" onclick=\"load('print')\"
                       href=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_print_Detail", ["commande" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 150, $this->source); })()), "id", [], "any", false, false, false, 150)]), "html", null, true);
        yield "\"
                       class=\"btn rounded-pill btn-primary\">
                        <i class=\"bx bx-printer\"></i>
                        Imprimer
                    </a>
                </div>
            </div>
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
        return "commande/show.html.twig";
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
        return array (  335 => 150,  327 => 145,  315 => 136,  304 => 127,  300 => 125,  296 => 123,  294 => 122,  279 => 110,  273 => 106,  267 => 105,  264 => 104,  259 => 103,  257 => 102,  248 => 96,  237 => 88,  225 => 79,  217 => 73,  207 => 68,  198 => 64,  194 => 63,  190 => 62,  186 => 61,  182 => 60,  178 => 59,  175 => 58,  170 => 57,  152 => 41,  150 => 40,  148 => 39,  146 => 38,  144 => 37,  142 => 36,  140 => 35,  132 => 29,  126 => 26,  118 => 23,  110 => 18,  104 => 15,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la commande{% endblock %}

{% block body %}
    <div class=\"card\">
        <h5 class=\"card-header\">
            Numéro de la Commande {{ commande.numero }}
        </h5>

        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"mb-3\">
                        <p><strong>Date de Commande :</strong> {{ commande.dateCommande|date('h:i:s d-m-Y') }}</p>
                    </div>
                    <div class=\"input-group mb-3\">
                        <p><strong>Date de Livraison :</strong> {{ commande.dateLivraison|date('h:i:s d-m-Y') }}</p>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\" mb-3\">
                        <p><strong>Nom et Prénom :</strong> {{ commande.client.nom }} {{ commande.client.prenom }}</p>
                    </div>
                    <div class=\" mb-3\">
                        <p><strong>Téléphone :</strong> {{ commande.client.telephone }}</p>
                    </div>
                    <div class=\" mb-3\">
                        <p><strong>Adresse :</strong> {{ commande.client.adresse }}</p>
                    </div>
                </div>
            </div>

            {#        <p><strong>Statut de Paiement :</strong>#}
            {#            {% if commande.statut == 'payé' %}#}
            {#                <span class=\"badge bg-success\">Payé</span>#}
            {#            {% else %}#}
            {#                <span class=\"badge bg-danger\">Non payé</span>#}
            {#            {% endif %}#}
            {#        </p>#}
            <h5 class=\"fw-bold\">Détails des Articles</h5>

            <div class=\"card-body\">

                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Article</th>
                        <th>Quantité</th>
                        <th>Prix Unitaire</th>
                        <th>Remise</th>
                        <th>Montant</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for commande in commande.commandeDetails %}
                        <tr>
                            <td>{{ commande.articles.numero }}</td>
                            <td>{{ commande.articles.designation }}</td>
                            <td>{{ commande.quantity }}</td>
                            <td>{{ commande.prixUnitaire|number_format(2, ',', ' ') }} FCFA</td>
                            <td>{{ commande.remise|number_format(2, ',', ' ') }} FCFA</td>
                            <td>{{ commande.prixTotal|number_format(2, ',', ' ') }} FCFA</td>
                        </tr>

                    {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Aucun détail de commande trouvé</td>
                        </tr>

                    {% endfor %}
                    <tr>
                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            Prix total sans remise :
                        </td>
                        <td>
                            <span id=\"\"
                                  class=\"text-nowrap\"> {{ commande.montantTotal|number_format(2, ',', ' ') }} FCFA</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            Prix total avec remise :
                        </td>
                        <td>
                            <span id=\"\"
                                  class=\"text-nowrap\"> {{ (commande.montantTotal - commande.remise)|number_format(2, ',',' ') }} FCFA</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            Rémise
                        </td>
                        <td>
                            <span id=\"\" class=\"text-nowrap\">{{ commande.remise|number_format(2, ',', ' ') }} FCFA</span>
                        </td>
                    </tr>
                    <tr>

                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            {% set montantRecu = 0 %}
                            {% for paiement in commande.paiements %}
                                {% set montantRecu = montantRecu + paiement.montantRecu %}
                            {% endfor %}
                            Montant Payé
                        </td>
                        <td>
                            <span id=\"\"
                                  class=\"text-nowrap\">{{ montantRecu|number_format(2, ',', ' ') }} FCFA</span>
                        </td>
                    </tr>


                    <tr>

                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            Status de la commande
                        </td>
                        <td>

                            {% if commande.status == 'payé' %}
                                <span class=\"badge bg-success\">Payé</span>
                            {% else %}
                                <span class=\"badge bg-danger\">Non payé</span>
                            {% endif %}

                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"5\" class=\"text-end fw-bold\">
                            Reste à payer
                        </td>
                        <td>
                                <span id=\"\"
                                      class=\"text-nowrap\">{{ (commande.montantTotal - commande.remise - montantRecu)|number_format(2, ',',' ') }} FCFA</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"row mt-4\">
                <div class=\"col-md-8\"></div>
                <div class=\"col-md-4\">
                    <a id=\"print\" href=\"{{ path(\"app_commande_index\") }}\" class=\"btn rounded-pill btn-warning\">
                        <i class=\"bx bx-subdirectory-left\"></i>
                        Retour
                    </a>
                    <a id=\"print\" onclick=\"load('print')\"
                       href=\"{{ path(\"commande_print_Detail\", { 'commande': commande.id }) }}\"
                       class=\"btn rounded-pill btn-primary\">
                        <i class=\"bx bx-printer\"></i>
                        Imprimer
                    </a>
                </div>
            </div>
        </div>
    </div>


{% endblock %}
", "commande/show.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\commande\\show.html.twig");
    }
}
