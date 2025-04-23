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

/* commande/facture_paye.html.twig */
class __TwigTemplate_233150aa0948c06f9b944b5bc7066ec0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'gestion' => [$this, 'block_gestion'],
            'facture_paye' => [$this, 'block_facture_paye'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/facture_paye.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/facture_paye.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/facture_paye.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des commandes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_gestion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "gestion"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "gestion"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_facture_paye($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "facture_paye"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "facture_paye"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"card\">
    <h5 class=\"card-header\">
        Liste des Factures payée(s)
    </h5>
    <div class=\"card-body\">
        <div class=\"table-responsive text-nowrap\">
            <table class=\"table table-bordered\" id=\"myTable\">
                <thead>
                    <tr>
                        <th>#N° Commande</th>
                        ";
        // line 18
        yield "                        <th>Date Livraison</th>
                        ";
        // line 20
        yield "                        <th>Téléphone</th>
                        ";
        // line 22
        yield "                        ";
        // line 23
        yield "                        <th>Montant total</th>
                        <th>Montant Reçu</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 31
            yield "
                    <tr>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numero", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                        ";
            // line 35
            yield "                        <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateLivraison", [], "any", false, false, false, 35), "h:i:s d-m-Y"), "html", null, true);
            yield "</td>
                        ";
            // line 37
            yield "                        <td> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "client", [], "any", false, false, false, 37), "telephone", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                        ";
            // line 39
            yield "                        ";
            // line 40
            yield "                        <td class=\"text-end\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montantTotal", [], "any", false, false, false, 40), 2, ",", " "), "html", null, true);
            yield " FCFA</td>

                        <td class=\"text-end\">
                            ";
            // line 43
            $context["totalRecu"] = 0;
            // line 44
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiements", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
                // line 45
                yield "                            ";
                $context["totalRecu"] = ((isset($context["totalRecu"]) || array_key_exists("totalRecu", $context) ? $context["totalRecu"] : (function () { throw new RuntimeError('Variable "totalRecu" does not exist.', 45, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "montantRecu", [], "any", false, false, false, 45));
                // line 46
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalRecu"]) || array_key_exists("totalRecu", $context) ? $context["totalRecu"] : (function () { throw new RuntimeError('Variable "totalRecu" does not exist.', 47, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " FCFA
                        </td>

                        <td>

                            ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 52) == "payé")) {
                // line 53
                yield "                            <span class=\"badge bg-success\">Payé</span>
                            ";
            } else {
                // line 55
                yield "                            <span class=\"badge bg-danger\">Non payé</span>
                            ";
            }
            // line 57
            yield "
                        </td>
                        <td>
                            <a id=\"print\" onclick=\"load('print')\"
                                href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_print_Detail", ["commande" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\"
                                class=\"btn btn-primary btn-sm\">
                                <i class=\"bx bx-printer\"></i>
                            </a>
                            ";
            // line 66
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\"
                                class=\"btn btn-success btn-sm\"><i class=\"bx bx-book\"></i>
                            </a>

                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            yield "                    <tr>
                        <td colspan=\"5\" class=\"text-center\">Aucune commande trouvée</td>
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                </tbody>
            </table>
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
        return "commande/facture_paye.html.twig";
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
        return array (  262 => 76,  252 => 71,  241 => 66,  234 => 61,  228 => 57,  224 => 55,  220 => 53,  218 => 52,  209 => 47,  203 => 46,  200 => 45,  195 => 44,  193 => 43,  186 => 40,  184 => 39,  179 => 37,  174 => 35,  170 => 33,  166 => 31,  161 => 30,  152 => 23,  150 => 22,  147 => 20,  144 => 18,  132 => 7,  122 => 6,  102 => 4,  82 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Liste des commandes{% endblock %}
{% block gestion %}active{% endblock %}
{% block facture_paye %}active{% endblock %}

{% block body %}
<div class=\"card\">
    <h5 class=\"card-header\">
        Liste des Factures payée(s)
    </h5>
    <div class=\"card-body\">
        <div class=\"table-responsive text-nowrap\">
            <table class=\"table table-bordered\" id=\"myTable\">
                <thead>
                    <tr>
                        <th>#N° Commande</th>
                        {#                        <th>Date Commande</th>#}
                        <th>Date Livraison</th>
                        {#                        <th>Nom et prénom</th>#}
                        <th>Téléphone</th>
                        {#                        <th>Rémises</th>#}
                        {#                        <th>Prix total</th>#}
                        <th>Montant total</th>
                        <th>Montant Reçu</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for commande in commandes %}

                    <tr>
                        <td>{{ commande.numero }}</td>
                        {#                            <td>{{ commande.dateCommande|date('h:i:s d-m-Y') }}</td>#}
                        <td>{{ commande.dateLivraison|date('h:i:s d-m-Y') }}</td>
                        {#                            <td>{{ commande.client.nom }} {{ commande.client.prenom }}</td>#}
                        <td> {{ commande.client.telephone }}</td>
                        {#                            <td class=\"text-end\">{{ commande.remise|number_format(2, ',', ' ') }} FCFA</td>#}
                        {#                            <td class=\"text-end\">{{ (commande.montantTotal - commande.remise)|number_format(2, ',', ' ') }} FCFA</td>#}
                        <td class=\"text-end\">{{ commande.montantTotal|number_format(2, ',', ' ') }} FCFA</td>

                        <td class=\"text-end\">
                            {% set totalRecu = 0 %}
                            {% for paiement in commande.paiements %}
                            {% set totalRecu = totalRecu + paiement.montantRecu %}
                            {% endfor %}
                            {{ totalRecu|number_format(2, ',', ' ') }} FCFA
                        </td>

                        <td>

                            {% if commande.status == 'payé' %}
                            <span class=\"badge bg-success\">Payé</span>
                            {% else %}
                            <span class=\"badge bg-danger\">Non payé</span>
                            {% endif %}

                        </td>
                        <td>
                            <a id=\"print\" onclick=\"load('print')\"
                                href=\"{{ path(\"commande_print_Detail\", { 'commande': commande.id }) }}\"
                                class=\"btn btn-primary btn-sm\">
                                <i class=\"bx bx-printer\"></i>
                            </a>
                            {#                                {% if commande.status == 'non payé' %}#}
                            <a href=\"{{ path('app_commande_show', {'id': commande.id}) }}\"
                                class=\"btn btn-success btn-sm\"><i class=\"bx bx-book\"></i>
                            </a>

                            {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"text-center\">Aucune commande trouvée</td>
                    </tr>

                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>

{% endblock %}", "commande/facture_paye.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\commande\\facture_paye.html.twig");
    }
}
