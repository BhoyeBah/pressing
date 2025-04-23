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

/* commande/index.html.twig */
class __TwigTemplate_6fcff1443183e825977c8035e89a52df extends Template
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
            'all_facture' => [$this, 'block_all_facture'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/index.html.twig", 1);
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
    public function block_all_facture($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_facture"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_facture"));

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
        yield "    <div class=\"card\">
        <h5 class=\"card-header\">
            Liste des Factures
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
        yield "\" class=\"btn btn-info mx-3\">Nouvelle facture</a>
        </h5>
        <div class=\"card-body\">
            <div class=\"table-responsive text-nowrap\">
                <table class=\"table table-bordered\" id=\"myTable\">
                    <thead>
                    <tr>
                        <th>#N° Commande</th>
                        ";
        // line 19
        yield "                        <th>Date Livraison</th>
                        ";
        // line 21
        yield "                        <th>Téléphone</th>
                        ";
        // line 23
        yield "                        ";
        // line 24
        yield "                        <th>Montant total</th>
                        <th>Montant Reçu</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 32
            yield "
                        <tr>
                        <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numero", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                        ";
            // line 36
            yield "                        <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateLivraison", [], "any", false, false, false, 36), "h:i:s d-m-Y"), "html", null, true);
            yield "</td>
                        ";
            // line 38
            yield "                        <td> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "client", [], "any", false, false, false, 38), "telephone", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                        ";
            // line 40
            yield "                        ";
            // line 41
            yield "                        <td class=\"text-end\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montantTotal", [], "any", false, false, false, 41), 2, ",", " "), "html", null, true);
            yield " FCFA</td>

                            <td class=\"text-end\">
                                ";
            // line 44
            $context["totalRecu"] = 0;
            // line 45
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiements", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
                // line 46
                yield "                                ";
                $context["totalRecu"] = ((isset($context["totalRecu"]) || array_key_exists("totalRecu", $context) ? $context["totalRecu"] : (function () { throw new RuntimeError('Variable "totalRecu" does not exist.', 46, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "montantRecu", [], "any", false, false, false, 46));
                // line 47
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalRecu"]) || array_key_exists("totalRecu", $context) ? $context["totalRecu"] : (function () { throw new RuntimeError('Variable "totalRecu" does not exist.', 48, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " FCFA
                            </td>

                        <td>

                            ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 53) == "payé")) {
                // line 54
                yield "                                <span class=\"badge bg-success\">Payé</span>
                            ";
            } else {
                // line 56
                yield "                                <span class=\"badge bg-danger\">Non payé</span>
                            ";
            }
            // line 58
            yield "
                        </td>
                        <td>
                        <a id=\"print\" onclick=\"load('print')\"
                           href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_print_Detail", ["commande" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\"
                           class=\"btn btn-primary btn-sm\">
                            <i class=\"bx bx-printer\"></i>
                        </a>
                        ";
            // line 67
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\"
                           class=\"btn btn-success btn-sm\"><i class=\"bx bx-book\"></i>
                        </a>

                        <!-- Large Modal -->
                        ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 72) == "non payé")) {
                // line 73
                yield "                            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#paymentModal\"
                                    data-commande-id=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 74), "html", null, true);
                yield "\" data-numero-commande=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numero", [], "any", false, false, false, 74), "html", null, true);
                yield "\"
                                    data-montant-restant=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montantTotal", [], "any", false, false, false, 75) - CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "remise", [], "any", false, false, false, 75)) - (isset($context["totalRecu"]) || array_key_exists("totalRecu", $context) ? $context["totalRecu"] : (function () { throw new RuntimeError('Variable "totalRecu" does not exist.', 75, $this->source); })())), 2, ",", " "), "html", null, true);
                yield "\">
                                Payé
                            </button>
                        ";
            }
            // line 79
            yield "
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Aucune commande trouvée</td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"card-body\">
        <div class=\"row gy-3\">
            <!-- Modal Sizes -->
            <div class=\"col-lg-4 col-md-6\">
                <small class=\"text-light fw-semibold\"></small>
                <!-- Small Modal -->
                <div class=\"modal fade\" id=\"paymentModal\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-sm\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel2\">Paiement</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>

                            <form action=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_payer");
        yield "\" id=\"paymentForm\" method=\"post\">
                                <input type=\"hidden\" id=\"commandeId\" name=\"commandeId\" value=\"\">
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        <div class=\"mb-3\">
                                            <label for=\"amount\" class=\"form-label\">Montant à payer</label>
                                            <input type=\"text\" id=\"amount\" name=\"amount\" class=\"form-control\" readonly>
                                        </div>
                                    </div>
                                    <div class=\"row g-2\">
                                        <div class=\"col mb-0\">
                                            <label class=\"form-label\" for=\"emailSmall\">Montant reçu</label>
                                            <input type=\"number\" name=\"paymentAmount\" class=\"form-control\" id=\"paymentAmount\" placeholder=\"12354\" step=\"0.01\" min=\"0\" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                                        Close
                                    </button>
                                    <button type=\"submit\" class=\"btn btn-primary\">Payer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    var paymentModal = document.getElementById('paymentModal');
    paymentModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var commandeId = button.getAttribute('data-commande-id');
        var commandeNumero = button.getAttribute('data-numero-commande');
        var montantRestant = button.getAttribute('data-montant-restant');
        var modalTitle = paymentModal.querySelector('.modal-title');
        var commandeIdInput = paymentModal.querySelector('#commandeId');
        var amountInput = paymentModal.querySelector('#amount');



        // modification du contenu de la modal
        modalTitle.textContent = \"Paiement de la commande \" + commandeNumero;
        commandeIdInput.value = commandeId;
        amountInput.value = montantRestant;
    });

</script>
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
        return "commande/index.html.twig";
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
        return array (  310 => 106,  288 => 86,  278 => 81,  272 => 79,  265 => 75,  259 => 74,  256 => 73,  254 => 72,  245 => 67,  238 => 62,  232 => 58,  228 => 56,  224 => 54,  222 => 53,  213 => 48,  207 => 47,  204 => 46,  199 => 45,  197 => 44,  190 => 41,  188 => 40,  183 => 38,  178 => 36,  174 => 34,  170 => 32,  165 => 31,  156 => 24,  154 => 23,  151 => 21,  148 => 19,  137 => 10,  132 => 7,  122 => 6,  102 => 4,  82 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Liste des commandes{% endblock %}
{% block gestion %}active{% endblock %}
{% block all_facture %}active{% endblock %}

{% block body %}
    <div class=\"card\">
        <h5 class=\"card-header\">
            Liste des Factures
            <a href=\"{{ path('app_commande_new') }}\" class=\"btn btn-info mx-3\">Nouvelle facture</a>
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

                        <!-- Large Modal -->
                        {% if commande.status == 'non payé' %}
                            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#paymentModal\"
                                    data-commande-id=\"{{ commande.id }}\" data-numero-commande=\"{{ commande.numero }}\"
                                    data-montant-restant=\"{{ (commande.montantTotal - commande.remise - totalRecu)|number_format(2, ',',' ') }}\">
                                Payé
                            </button>
                        {% endif %}

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

    <div class=\"card-body\">
        <div class=\"row gy-3\">
            <!-- Modal Sizes -->
            <div class=\"col-lg-4 col-md-6\">
                <small class=\"text-light fw-semibold\"></small>
                <!-- Small Modal -->
                <div class=\"modal fade\" id=\"paymentModal\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-sm\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel2\">Paiement</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>

                            <form action=\"{{ path('app_commande_payer') }}\" id=\"paymentForm\" method=\"post\">
                                <input type=\"hidden\" id=\"commandeId\" name=\"commandeId\" value=\"\">
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        <div class=\"mb-3\">
                                            <label for=\"amount\" class=\"form-label\">Montant à payer</label>
                                            <input type=\"text\" id=\"amount\" name=\"amount\" class=\"form-control\" readonly>
                                        </div>
                                    </div>
                                    <div class=\"row g-2\">
                                        <div class=\"col mb-0\">
                                            <label class=\"form-label\" for=\"emailSmall\">Montant reçu</label>
                                            <input type=\"number\" name=\"paymentAmount\" class=\"form-control\" id=\"paymentAmount\" placeholder=\"12354\" step=\"0.01\" min=\"0\" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                                        Close
                                    </button>
                                    <button type=\"submit\" class=\"btn btn-primary\">Payer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    var paymentModal = document.getElementById('paymentModal');
    paymentModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var commandeId = button.getAttribute('data-commande-id');
        var commandeNumero = button.getAttribute('data-numero-commande');
        var montantRestant = button.getAttribute('data-montant-restant');
        var modalTitle = paymentModal.querySelector('.modal-title');
        var commandeIdInput = paymentModal.querySelector('#commandeId');
        var amountInput = paymentModal.querySelector('#amount');



        // modification du contenu de la modal
        modalTitle.textContent = \"Paiement de la commande \" + commandeNumero;
        commandeIdInput.value = commandeId;
        amountInput.value = montantRestant;
    });

</script>
{% endblock %}
", "commande/index.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\commande\\index.html.twig");
    }
}
