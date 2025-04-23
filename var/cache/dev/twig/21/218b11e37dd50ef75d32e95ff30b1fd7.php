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
class __TwigTemplate_1a681cdab8bf87af2d62671e5c553866 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/index.html.twig", 1);
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

        yield "Liste des commandes";
        
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
            Liste des commandes
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
        yield "\" class=\"btn btn-info mx-3\">Nouvelle Commande</a>
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
                yield "                                ";
                $context["totalRecu"] = ((isset($context["totalRecu"]) || array_key_exists("totalRecu", $context) ? $context["totalRecu"] : (function () { throw new RuntimeError('Variable "totalRecu" does not exist.', 45, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "montantRecu", [], "any", false, false, false, 45));
                // line 46
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalRecu"]) || array_key_exists("totalRecu", $context) ? $context["totalRecu"] : (function () { throw new RuntimeError('Variable "totalRecu" does not exist.', 47, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " FCFA
                            </td>

                        <td>

                            ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 52) == "payé")) {
                // line 53
                yield "                                <span class=\"badge bg-success\">Payé</span>
                            ";
            } else {
                // line 55
                yield "                                <span class=\"badge bg-danger\">Non payé</span>
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
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\"
                           class=\"btn btn-success btn-sm\"><i class=\"bx bx-money\"></i>
                        </a>

                        <!-- Large Modal -->
                        ";
            // line 71
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 71) == "non payé")) {
                // line 72
                yield "                            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#paymentModal\"
                                    data-commande-id=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 73), "html", null, true);
                yield "\" data-numero-commande=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numero", [], "any", false, false, false, 73), "html", null, true);
                yield "\"
                                    data-montant-restant=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montantTotal", [], "any", false, false, false, 74) - CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "remise", [], "any", false, false, false, 74)) - (isset($context["totalRecu"]) || array_key_exists("totalRecu", $context) ? $context["totalRecu"] : (function () { throw new RuntimeError('Variable "totalRecu" does not exist.', 74, $this->source); })())), 2, ",", " "), "html", null, true);
                yield "\">
                                Payé
                            </button>
                        ";
            }
            // line 78
            yield "
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Aucune commande trouvée</td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
        // line 105
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
        return array (  268 => 105,  246 => 85,  236 => 80,  230 => 78,  223 => 74,  217 => 73,  214 => 72,  212 => 71,  203 => 66,  196 => 61,  190 => 57,  186 => 55,  182 => 53,  180 => 52,  171 => 47,  165 => 46,  162 => 45,  157 => 44,  155 => 43,  148 => 40,  146 => 39,  141 => 37,  136 => 35,  132 => 33,  128 => 31,  123 => 30,  114 => 23,  112 => 22,  109 => 20,  106 => 18,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des commandes{% endblock %}

{% block body %}
    <div class=\"card\">
        <h5 class=\"card-header\">
            Liste des commandes
            <a href=\"{{ path('app_commande_new') }}\" class=\"btn btn-info mx-3\">Nouvelle Commande</a>
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
                           class=\"btn btn-success btn-sm\"><i class=\"bx bx-money\"></i>
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
