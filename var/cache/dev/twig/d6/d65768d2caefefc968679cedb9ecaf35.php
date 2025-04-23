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

/* commande/facture_print.html.twig */
class __TwigTemplate_75f81cd38744ceb7dbdbbd06eefe3e82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/facture_print.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/facture_print.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Facture Nourou Pressing</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap\" rel=\"stylesheet\">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            /* Police plus simple pour l'impression */
            font-size: 9pt;
            /* Utilisation de points pour l'impression */
            line-height: 1.3;
        }

        body {
            background-color: #f5f5f5;
            padding: 5px;
        }

        .invoice {
            width: 230px;
            margin: 0 auto;
            background: white;
            padding: 10px;
            border-radius: 3px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 5px;
        }

        .logo {
            width: 70px;
            /* Logo plus petit */
            margin-bottom: 3px;
        }

        .company-info {
            font-size: 7px;
            /* Texte plus petit */
            line-height: 1.2;
            margin-bottom: 3px;
        }

        .company-name {
            font-weight: 600;
            font-size: 8px;
        }

        .divider {
            height: 1px;
            background: #eee;
            margin: 5px 0;
        }

        .invoice-meta {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 7px;
            margin-bottom: 3px;
        }

        .client-section {
            margin: 8px 0;
        }

        .client-info {
            display: block;
            /* Passage sur une colonne */
            margin-bottom: 5px;
        }

        .client-details {
            width: 100%;
            margin-bottom: 3px;
        }

        .client-name {
            font-weight: 600;
            font-size: 9px;
            margin-bottom: 2px;
            text-transform: uppercase;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 8px 0;
            font-size: 7px;
        }

        th,
        td {
            padding: 3px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #f9f9f9;
            font-weight: 600;
        }

        .summary {
            margin-top: 8px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 2px 0;
            font-size: 7px;
        }

        .text-right {
            text-align: right;
        }

        .total {
            border-top: 1px solid #eee;
            padding-top: 3px;
            font-weight: 600;
        }

        .status {
            display: inline-block;
            padding: 2px 5px;
            border-radius: 2px;
            font-size: 12px;
            background: #dc3545;
            color: white;
        }

        .footer {
            text-align: center;
            margin-top: 10px;
            font-size: 6px;
            color: #666;
        }
    </style>
</head>

<body onload=\"print()\" onafterprint=\"document.location.href='";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
        yield "'\">

    <div class=\"invoice\">
        <!-- En-tête avec logo et coordonnées -->
        <div class=\"header\">
            <img class=\"logo\" src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logor.jpg"), "html", null, true);
        yield "\">
            <div class=\"company-info\">
                <div class=\"company-name\">ROYAL PRESSING</div>
                <div>Tivaoune peulh / rond-point AAD <br>771217506 / 778344200</div>
                <div>contact@nouroupressing.com</div>
            </div>
        </div>

        <div class=\"divider\"></div>

        <!-- Métadonnées facture -->
        <div class=\"invoice-meta\">
            <div>Facture N°: ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 171, $this->source); })()), "numero", [], "any", false, false, false, 171), "html", null, true);
        yield "</div>
        </div>

        <!-- Section Client -->
        <div class=\"client-section\">
            <div class=\"client-info\">
                <div class=\"client-details\">
                    <div class=\"client-name\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 178, $this->source); })()), "client", [], "any", false, false, false, 178), "nom", [], "any", false, false, false, 178), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 178, $this->source); })()), "client", [], "any", false, false, false, 178), "prenom", [], "any", false, false, false, 178), "html", null, true);
        yield "</div>
                    <div style=\"text-align: center;\">Tél:";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 179, $this->source); })()), "client", [], "any", false, false, false, 179), "telephone", [], "any", false, false, false, 179), "html", null, true);
        yield "</div>
                    <div style=\"text-align: center;\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 180, $this->source); })()), "client", [], "any", false, false, false, 180), "adresse", [], "any", false, false, false, 180), "html", null, true);
        yield " </div>
                </div>
                <div class=\"client-details\" style=\"text-align: center; margin-top: 5px;\">
                    <div>Date facture: 15/05/2024</div>
                    <div>Date RDV: ";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 184, $this->source); })()), "dateLivraison", [], "any", false, false, false, 184), "d/m/Y"), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>

        <div class=\"divider\"></div>

        <!-- Détails de la commande -->
        <table>
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Qte</th>
                    <th class=\"text-right\">Total</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "commandeDetails", [], "any", false, false, false, 201));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 202
            yield "                <tr>
                    <td>";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "articles", [], "any", false, false, false, 203), "designation", [], "any", false, false, false, 203), "html", null, true);
            yield "</td>
                    <td>";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "quantity", [], "any", false, false, false, 204), "html", null, true);
            yield "</td>
                    <td class=\"text-right\">";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prixUnitaire", [], "any", false, false, false, 205), 2, ",", " "), "html", null, true);
            yield " FCFA</td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 208
            yield "                <tr>
                    <td colspan=\"4\" class=\"text-center\">Aucun détail de commande trouvé</td>
                </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "            </tbody>
        </table>

        <!-- Récapitulatif -->
        <div class=\"summary\">
            <div class=\"summary-row\">
                <span>Total:</span>
                <span>
                    ";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 221, $this->source); })()), "montantTotal", [], "any", false, false, false, 221), 2, ",", " "), "html", null, true);
        yield " FCFA
                </span>
            </div>
            <div class=\"summary-row\">
                <span>Remise:</span>
                <span>";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 226, $this->source); })()), "remise", [], "any", false, false, false, 226), 2, ",", " "), "html", null, true);
        yield "FCFA</span>
            </div>
            <div class=\"summary-row\">
                ";
        // line 229
        $context["montantRecu"] = 0;
        // line 230
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 230, $this->source); })()), "paiements", [], "any", false, false, false, 230));
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 231
            yield "                ";
            $context["montantRecu"] = ((isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 231, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "montantRecu", [], "any", false, false, false, 231));
            // line 232
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        yield "                <span>Montant Reçu:</span>
                <span> ";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 234, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "FCFA</span>
            </div>
            <div class=\"summary-row total\">
                <span>Net à payer:</span>
                <span>";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 238, $this->source); })()), "montantTotal", [], "any", false, false, false, 238) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 238, $this->source); })()), "remise", [], "any", false, false, false, 238)) - (isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 238, $this->source); })())), 2, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            <div class=\"summary-row\" style=\"justify-content: flex-end; margin-top: 3px;\">
                ";
        // line 241
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 241, $this->source); })()), "status", [], "any", false, false, false, 241) == "payé")) {
            // line 242
            yield "                <span class=\"status\">PAYÉ</span>
                ";
        } else {
            // line 244
            yield "                <span class=\"status\">NON PAYÉ</span>
                ";
        }
        // line 246
        yield "            </div>
        </div>

        <div class=\"divider\"></div>

        <!-- Pied de page -->
        <div class=\"footer\">
            <div style=\"margin-top: 5px;\">Merci pour votre confiance!</div>
        </div>
    </div>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "commande/facture_print.html.twig";
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
        return array (  369 => 246,  365 => 244,  361 => 242,  359 => 241,  353 => 238,  346 => 234,  343 => 233,  337 => 232,  334 => 231,  329 => 230,  327 => 229,  321 => 226,  313 => 221,  303 => 213,  293 => 208,  285 => 205,  281 => 204,  277 => 203,  274 => 202,  269 => 201,  249 => 184,  242 => 180,  238 => 179,  232 => 178,  222 => 171,  207 => 159,  199 => 154,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Facture Nourou Pressing</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap\" rel=\"stylesheet\">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            /* Police plus simple pour l'impression */
            font-size: 9pt;
            /* Utilisation de points pour l'impression */
            line-height: 1.3;
        }

        body {
            background-color: #f5f5f5;
            padding: 5px;
        }

        .invoice {
            width: 230px;
            margin: 0 auto;
            background: white;
            padding: 10px;
            border-radius: 3px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 5px;
        }

        .logo {
            width: 70px;
            /* Logo plus petit */
            margin-bottom: 3px;
        }

        .company-info {
            font-size: 7px;
            /* Texte plus petit */
            line-height: 1.2;
            margin-bottom: 3px;
        }

        .company-name {
            font-weight: 600;
            font-size: 8px;
        }

        .divider {
            height: 1px;
            background: #eee;
            margin: 5px 0;
        }

        .invoice-meta {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 7px;
            margin-bottom: 3px;
        }

        .client-section {
            margin: 8px 0;
        }

        .client-info {
            display: block;
            /* Passage sur une colonne */
            margin-bottom: 5px;
        }

        .client-details {
            width: 100%;
            margin-bottom: 3px;
        }

        .client-name {
            font-weight: 600;
            font-size: 9px;
            margin-bottom: 2px;
            text-transform: uppercase;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 8px 0;
            font-size: 7px;
        }

        th,
        td {
            padding: 3px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #f9f9f9;
            font-weight: 600;
        }

        .summary {
            margin-top: 8px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 2px 0;
            font-size: 7px;
        }

        .text-right {
            text-align: right;
        }

        .total {
            border-top: 1px solid #eee;
            padding-top: 3px;
            font-weight: 600;
        }

        .status {
            display: inline-block;
            padding: 2px 5px;
            border-radius: 2px;
            font-size: 12px;
            background: #dc3545;
            color: white;
        }

        .footer {
            text-align: center;
            margin-top: 10px;
            font-size: 6px;
            color: #666;
        }
    </style>
</head>

<body onload=\"print()\" onafterprint=\"document.location.href='{{ path('app_commande_index') }}'\">

    <div class=\"invoice\">
        <!-- En-tête avec logo et coordonnées -->
        <div class=\"header\">
            <img class=\"logo\" src=\"{{ asset('assets/img/logor.jpg') }}\">
            <div class=\"company-info\">
                <div class=\"company-name\">ROYAL PRESSING</div>
                <div>Tivaoune peulh / rond-point AAD <br>771217506 / 778344200</div>
                <div>contact@nouroupressing.com</div>
            </div>
        </div>

        <div class=\"divider\"></div>

        <!-- Métadonnées facture -->
        <div class=\"invoice-meta\">
            <div>Facture N°: {{ commande.numero }}</div>
        </div>

        <!-- Section Client -->
        <div class=\"client-section\">
            <div class=\"client-info\">
                <div class=\"client-details\">
                    <div class=\"client-name\">{{ commande.client.nom }} {{ commande.client.prenom }}</div>
                    <div style=\"text-align: center;\">Tél:{{ commande.client.telephone }}</div>
                    <div style=\"text-align: center;\">{{ commande.client.adresse }} </div>
                </div>
                <div class=\"client-details\" style=\"text-align: center; margin-top: 5px;\">
                    <div>Date facture: 15/05/2024</div>
                    <div>Date RDV: {{ commande.dateLivraison|date('d/m/Y') }}</div>
                </div>
            </div>
        </div>

        <div class=\"divider\"></div>

        <!-- Détails de la commande -->
        <table>
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Qte</th>
                    <th class=\"text-right\">Total</th>
                </tr>
            </thead>
            <tbody>
                {% for commande in commande.commandeDetails %}
                <tr>
                    <td>{{ commande.articles.designation }}</td>
                    <td>{{ commande.quantity }}</td>
                    <td class=\"text-right\">{{ commande.prixUnitaire|number_format(2, ',', ' ') }} FCFA</td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"4\" class=\"text-center\">Aucun détail de commande trouvé</td>
                </tr>

                {% endfor %}
            </tbody>
        </table>

        <!-- Récapitulatif -->
        <div class=\"summary\">
            <div class=\"summary-row\">
                <span>Total:</span>
                <span>
                    {{ commande.montantTotal|number_format(2, ',', ' ') }} FCFA
                </span>
            </div>
            <div class=\"summary-row\">
                <span>Remise:</span>
                <span>{{ commande.remise|number_format(2, ',', ' ') }}FCFA</span>
            </div>
            <div class=\"summary-row\">
                {% set montantRecu = 0 %}
                {% for paiement in commande.paiements %}
                {% set montantRecu = montantRecu + paiement.montantRecu %}
                {% endfor %}
                <span>Montant Reçu:</span>
                <span> {{ montantRecu|number_format(2, ',', ' ') }}FCFA</span>
            </div>
            <div class=\"summary-row total\">
                <span>Net à payer:</span>
                <span>{{ (commande.montantTotal - commande.remise - montantRecu)|number_format(2, ',',' ') }} FCFA</span>
            </div>
            <div class=\"summary-row\" style=\"justify-content: flex-end; margin-top: 3px;\">
                {% if commande.status == 'payé' %}
                <span class=\"status\">PAYÉ</span>
                {% else %}
                <span class=\"status\">NON PAYÉ</span>
                {% endif %}
            </div>
        </div>

        <div class=\"divider\"></div>

        <!-- Pied de page -->
        <div class=\"footer\">
            <div style=\"margin-top: 5px;\">Merci pour votre confiance!</div>
        </div>
    </div>

</body>

</html>", "commande/facture_print.html.twig", "C:\\xampp\\htdocs\\pressing\\templates\\commande\\facture_print.html.twig");
    }
}
