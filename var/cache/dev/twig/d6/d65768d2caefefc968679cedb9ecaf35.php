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
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <title>Facture - Nourou Pressing</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap\" rel=\"stylesheet\">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            font-size: 9pt;
        }

        body {
            background-color: #f9f9f9;
            padding: 10px;
        }

        .invoice {
            width: 250px;
            margin: auto;
            background: #fff;
            padding: 12px;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .logo {
            width: 60px;
            margin-bottom: 5px;
        }

        .company-info {
            border: 1px solid #222;
            padding: 6px;
            font-size: 8pt;
            line-height: 1.3;
            text-align: center;
            white-space: nowrap;
        }

        .company-info div {
            font-weight: 600;
        }

        .divider {
            border-top: 1px dashed #ccc;
            margin: 10px 0;
        }

        .invoice-meta {
            text-align: center;
            font-size: 8pt;
            margin-bottom: 6px;
        }


        .client-info {
            text-align: left;
            font-size: 8pt;
            margin-bottom: 6px;
            line-height: 1.4;
            background: #f8f8f8;
            padding: 6px;
            border-radius: 4px;
            border: 1px solid #e0e0e0;
        }

        .client-info .client-name {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 9pt;
            margin-bottom: 4px;
            text-align: center;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 7.5pt;
            margin-top: 8px;
        }

        th,
        td {
            padding: 3px;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #f0f0f0;
            font-weight: 600;
        }

        .text-right {
            text-align: right;
        }

        .summary {
            font-size: 8pt;
            margin-top: 10px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin: 3px 0;
        }

        .total {
            font-weight: bold;
            border-top: 1px solid #ccc;
            padding-top: 4px;
        }

        .status {
            display: inline-block;
            font-size: 8pt;
            padding: 3px 8px;
            border-radius: 3px;
            background: #28a745;
            color: #fff;
            font-weight: bold;
            margin-top: 5px;
        }

        .status.unpaid {
            background: #dc3545;
        }

        .footer {
            text-align: center;
            font-size: 6pt;
            color: #666;
            margin-top: 10px;
        }
    </style>
</head>

<body onload=\"print()\" onafterprint=\"document.location.href='";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
        yield "'\">

    <div class=\"invoice\">
        <div class=\"header\">
            <img class=\"logo\" src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logor.jpg"), "html", null, true);
        yield "\" alt=\"Logo\">
            <div class=\"company-info\">
                <div class=\"company-name\">ROYAL PRESSING</div>
                <div class=\"company-name\">NETTOYAGE À SEC</div>
                <div class=\"company-name\">LIVRAISON À DOMICILE</div>
                <div class=\"company-name\">TIVAOANE PEULH/ROND-POINT AAD</div>
                <div class=\"company-name\">Tél : 77 121 75 06 - 77 834 42 00</div>
            </div>
        </div>

        <div class=\"invoice-meta\">
            <strong>Facture N°:</strong> ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 165, $this->source); })()), "numero", [], "any", false, false, false, 165), "html", null, true);
        yield "
        </div>

        <div class=\"client-info\">
            <div class=\"client-name\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 169, $this->source); })()), "client", [], "any", false, false, false, 169), "nom", [], "any", false, false, false, 169)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 169, $this->source); })()), "client", [], "any", false, false, false, 169), "prenom", [], "any", false, false, false, 169), "html", null, true);
        yield "</div>
            <div><strong>📞 Tél :</strong> ";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 170, $this->source); })()), "client", [], "any", false, false, false, 170), "telephone", [], "any", false, false, false, 170), "html", null, true);
        yield "</div>
            <div><strong>🏠 Adresse :</strong> ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 171, $this->source); })()), "client", [], "any", false, false, false, 171), "adresse", [], "any", false, false, false, 171), "html", null, true);
        yield "</div>
            <div style=\"margin-top: 6px;\"><strong>📅 Date facture :</strong> ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</div>
            <div><strong>🕒 Date RDV :</strong> ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 173, $this->source); })()), "dateLivraison", [], "any", false, false, false, 173), "d/m/Y"), "html", null, true);
        yield "</div>
        </div>

        <div class=\"divider\"></div>

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
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "commandeDetails", [], "any", false, false, false, 187));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 188
            yield "                <tr>
                    <td>";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "articles", [], "any", false, false, false, 189), "designation", [], "any", false, false, false, 189), "html", null, true);
            yield "</td>
                    <td>";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "quantity", [], "any", false, false, false, 190), "html", null, true);
            yield "</td>
                    <td class=\"text-right\">";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prixUnitaire", [], "any", false, false, false, 191), 2, ",", " "), "html", null, true);
            yield " FCFA</td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 194
            yield "                <tr>
                    <td colspan=\"3\" style=\"text-align: center;\">Aucun détail de commande</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "            </tbody>
        </table>

        <div class=\"summary\">
            <div class=\"summary-row\"><span>Total:</span><span>";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 202, $this->source); })()), "montantTotal", [], "any", false, false, false, 202), 2, ",", " "), "html", null, true);
        yield " FCFA</span></div>
            <div class=\"summary-row\"><span>Remise:</span><span>";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 203, $this->source); })()), "remise", [], "any", false, false, false, 203), 2, ",", " "), "html", null, true);
        yield " FCFA</span></div>
            <div class=\"summary-row\">
                ";
        // line 205
        $context["montantRecu"] = 0;
        // line 206
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 206, $this->source); })()), "paiements", [], "any", false, false, false, 206));
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 207
            yield "                ";
            $context["montantRecu"] = ((isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 207, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "montantRecu", [], "any", false, false, false, 207));
            // line 208
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "                <span>Montant Reçu:</span><span>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 209, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            <div class=\"summary-row total\">
                <span>Net à payer:</span>
                <span>";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 213, $this->source); })()), "montantTotal", [], "any", false, false, false, 213) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 213, $this->source); })()), "remise", [], "any", false, false, false, 213)) - (isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 213, $this->source); })())), 2, ",", " "), "html", null, true);
        yield " FCFA</span>
            </div>
            <div class=\"summary-row\" style=\"justify-content: center;\">
                ";
        // line 216
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 216, $this->source); })()), "status", [], "any", false, false, false, 216) == "payé")) {
            // line 217
            yield "                <span class=\"status\">PAYÉ</span>
                ";
        } else {
            // line 219
            yield "                <span class=\"status unpaid\">NON PAYÉ</span>
                ";
        }
        // line 221
        yield "            </div>
        </div>

        <div class=\"divider\"></div>

        <div class=\"footer\">
            Merci pour votre confiance !
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
        return array (  346 => 221,  342 => 219,  338 => 217,  336 => 216,  330 => 213,  322 => 209,  316 => 208,  313 => 207,  308 => 206,  306 => 205,  301 => 203,  297 => 202,  291 => 198,  282 => 194,  274 => 191,  270 => 190,  266 => 189,  263 => 188,  258 => 187,  241 => 173,  237 => 172,  233 => 171,  229 => 170,  223 => 169,  216 => 165,  202 => 154,  195 => 150,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <title>Facture - Nourou Pressing</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap\" rel=\"stylesheet\">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            font-size: 9pt;
        }

        body {
            background-color: #f9f9f9;
            padding: 10px;
        }

        .invoice {
            width: 250px;
            margin: auto;
            background: #fff;
            padding: 12px;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .logo {
            width: 60px;
            margin-bottom: 5px;
        }

        .company-info {
            border: 1px solid #222;
            padding: 6px;
            font-size: 8pt;
            line-height: 1.3;
            text-align: center;
            white-space: nowrap;
        }

        .company-info div {
            font-weight: 600;
        }

        .divider {
            border-top: 1px dashed #ccc;
            margin: 10px 0;
        }

        .invoice-meta {
            text-align: center;
            font-size: 8pt;
            margin-bottom: 6px;
        }


        .client-info {
            text-align: left;
            font-size: 8pt;
            margin-bottom: 6px;
            line-height: 1.4;
            background: #f8f8f8;
            padding: 6px;
            border-radius: 4px;
            border: 1px solid #e0e0e0;
        }

        .client-info .client-name {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 9pt;
            margin-bottom: 4px;
            text-align: center;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 7.5pt;
            margin-top: 8px;
        }

        th,
        td {
            padding: 3px;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #f0f0f0;
            font-weight: 600;
        }

        .text-right {
            text-align: right;
        }

        .summary {
            font-size: 8pt;
            margin-top: 10px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin: 3px 0;
        }

        .total {
            font-weight: bold;
            border-top: 1px solid #ccc;
            padding-top: 4px;
        }

        .status {
            display: inline-block;
            font-size: 8pt;
            padding: 3px 8px;
            border-radius: 3px;
            background: #28a745;
            color: #fff;
            font-weight: bold;
            margin-top: 5px;
        }

        .status.unpaid {
            background: #dc3545;
        }

        .footer {
            text-align: center;
            font-size: 6pt;
            color: #666;
            margin-top: 10px;
        }
    </style>
</head>

<body onload=\"print()\" onafterprint=\"document.location.href='{{ path('app_commande_index') }}'\">

    <div class=\"invoice\">
        <div class=\"header\">
            <img class=\"logo\" src=\"{{ asset('assets/img/logor.jpg') }}\" alt=\"Logo\">
            <div class=\"company-info\">
                <div class=\"company-name\">ROYAL PRESSING</div>
                <div class=\"company-name\">NETTOYAGE À SEC</div>
                <div class=\"company-name\">LIVRAISON À DOMICILE</div>
                <div class=\"company-name\">TIVAOANE PEULH/ROND-POINT AAD</div>
                <div class=\"company-name\">Tél : 77 121 75 06 - 77 834 42 00</div>
            </div>
        </div>

        <div class=\"invoice-meta\">
            <strong>Facture N°:</strong> {{ commande.numero }}
        </div>

        <div class=\"client-info\">
            <div class=\"client-name\">{{ commande.client.nom|upper }} {{ commande.client.prenom }}</div>
            <div><strong>📞 Tél :</strong> {{ commande.client.telephone }}</div>
            <div><strong>🏠 Adresse :</strong> {{ commande.client.adresse }}</div>
            <div style=\"margin-top: 6px;\"><strong>📅 Date facture :</strong> {{ \"now\"|date(\"d/m/Y\") }}</div>
            <div><strong>🕒 Date RDV :</strong> {{ commande.dateLivraison|date('d/m/Y') }}</div>
        </div>

        <div class=\"divider\"></div>

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
                    <td colspan=\"3\" style=\"text-align: center;\">Aucun détail de commande</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>

        <div class=\"summary\">
            <div class=\"summary-row\"><span>Total:</span><span>{{ commande.montantTotal|number_format(2, ',', ' ') }} FCFA</span></div>
            <div class=\"summary-row\"><span>Remise:</span><span>{{ commande.remise|number_format(2, ',', ' ') }} FCFA</span></div>
            <div class=\"summary-row\">
                {% set montantRecu = 0 %}
                {% for paiement in commande.paiements %}
                {% set montantRecu = montantRecu + paiement.montantRecu %}
                {% endfor %}
                <span>Montant Reçu:</span><span>{{ montantRecu|number_format(2, ',', ' ') }} FCFA</span>
            </div>
            <div class=\"summary-row total\">
                <span>Net à payer:</span>
                <span>{{ (commande.montantTotal - commande.remise - montantRecu)|number_format(2, ',', ' ') }} FCFA</span>
            </div>
            <div class=\"summary-row\" style=\"justify-content: center;\">
                {% if commande.status == 'payé' %}
                <span class=\"status\">PAYÉ</span>
                {% else %}
                <span class=\"status unpaid\">NON PAYÉ</span>
                {% endif %}
            </div>
        </div>

        <div class=\"divider\"></div>

        <div class=\"footer\">
            Merci pour votre confiance !
        </div>
    </div>

</body>

</html>", "commande/facture_print.html.twig", "C:\\xampp\\htdocs\\pressing\\templates\\commande\\facture_print.html.twig");
    }
}
