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
class __TwigTemplate_c7b74168b4017f0e787a1ae24dbe6263 extends Template
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
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css\"
          integrity=\"sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

    <style>
        *,
        *::after,
        *::before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        :root {
            --blue-color: #0c2f54;
            --dark-color: #535b61;
            --white-color: #fff;
        }
        .separator {
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }
        ul {
            list-style-type: none;
        }

        ul li {
            margin: 2px 0;
        }

        /* text colors */
        .text-dark {
            color: var(--dark-color);
        }

        .text-blue {
            color: var(--blue-color);
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .text-start {
            text-align: left;
        }

        .text-bold {
            font-weight: 700;
        }

        /* hr line */
        .hr {
            height: 1px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* border-bottom */
        .border-bottom {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
            font-size: 14px;
        }

        .invoice-wrapper {
            min-height: 100vh;
            background-color: rgba(0, 0, 0, 0.1);
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .invoice {
            max-width: 850px;
            margin-right: auto;
            margin-left: auto;
            background-color: var(--white-color);
            padding: 70px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            min-height: 920px;
        }

        .invoice-head-top-left img {
            width: 130px;
        }

        .invoice-head-top-right h3 {
            font-weight: 500;
            font-size: 27px;
            color: var(--blue-color);
        }

        .invoice-head-middle, .invoice-head-bottom {
            padding: 16px 0;
        }

        .invoice-body {
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            overflow: hidden;
        }

        .invoice-body table {
            border-collapse: collapse;
            border-radius: 4px;
            width: 100%;
        }

        .invoice-body table td, .invoice-body table th {
            padding: 12px;
        }

        .invoice-body table tr {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .invoice-body table thead {
            background-color: rgba(0, 0, 0, 0.02);
        }

        .invoice-body-info-item {
            display: grid;
            grid-template-columns: 80% 20%;
        }

        .invoice-body-info-item .info-item-td {
            padding: 12px;
            background-color: rgba(0, 0, 0, 0.02);
        }

        .invoice-foot {
            padding: 30px 0;
        }

        .invoice-foot p {
            font-size: 12px;
        }

        .invoice-btns {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .invoice-btn {
            padding: 3px 9px;
            color: var(--dark-color);
            font-family: inherit;
            border: 1px solid rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .invoice-head-top, .invoice-head-middle, .invoice-head-bottom {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            padding-bottom: 10px;
        }

        @media screen and (max-width: 992px) {
            .invoice {
                padding: 40px;
            }
        }

        @media screen and (max-width: 576px) {
            .invoice-head-top, .invoice-head-middle, .invoice-head-bottom {
                grid-template-columns: repeat(1, 1fr);
            }

            .invoice-head-bottom-right {
                margin-top: 12px;
                margin-bottom: 12px;
            }

            .invoice * {
                text-align: left;
            }

            .invoice {
                padding: 28px;
            }
        }

        /*.overflow-view {*/
        /*    overflow-x: scroll;*/
        /*}*/

        .invoice-body {
            min-width: 600px;
        }

        @media print {
            .print-area {
                visibility: visible;
                width: 100%;
                position: absolute;
                left: 0;
                top: 0;
                overflow: hidden;
            }

            .overflow-view {
                overflow-x: hidden;
            }

            .invoice-btns {
                display: none;
            }
        }
    </style>
</head>
<body onload=\"print()\" onafterprint=\"document.location.href='";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
        yield "'\">

<div class=\"invoice-wrapper\" id=\"print-area\">
    <div class=\"invoice\">
        <div class=\"invoice-container\">
            <div class=\"invoice-head\">
                <div class=\"invoice-head-top\">
                    <div class=\"invoice-head-top-left text-start\">
                        <img src=\"images/logo.png\">
                    </div>
                    <div class=\"invoice-head-top-right text-end\">
                        <h3>Facture</h3>
                    </div>
                </div>
                <div class=\"hr\"></div>
                <div class=\"invoice-head-middle\">
                    <div class=\"invoice-head-middle-left text-start\">
                        <p>
                            <span class=\"text-bold\">Date rendez-vous</span>: ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 251, $this->source); })()), "dateLivraison", [], "any", false, false, false, 251), "h:i:s d-m-Y"), "html", null, true);
        yield "
                        </p>
                    </div>
                    <div class=\"invoice-head-middle-right text-end\">
                        <p>
                            <spanf class=\"text-bold\">No Facture:</span> ";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 256, $this->source); })()), "numero", [], "any", false, false, false, 256), "html", null, true);
        yield "
                        </p>
                    </div>
                </div>
                <div class=\"hr\"></div>
                <div class=\"invoice-head-bottom\">
                    <div class=\"invoice-head-bottom-left\">
                        <ul>
                            <li class='text-bold'>Facture de :</li>
                            <li> ";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 265, $this->source); })()), "client", [], "any", false, false, false, 265), "nom", [], "any", false, false, false, 265), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 265, $this->source); })()), "client", [], "any", false, false, false, 265), "prenom", [], "any", false, false, false, 265), "html", null, true);
        yield " </li>
                            <li> ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 266, $this->source); })()), "client", [], "any", false, false, false, 266), "telephone", [], "any", false, false, false, 266), "html", null, true);
        yield " </li>
                            <li> ";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 267, $this->source); })()), "client", [], "any", false, false, false, 267), "adresse", [], "any", false, false, false, 267), "html", null, true);
        yield " </li>
                        </ul>
                    </div>
                    <div class=\"invoice-head-bottom-right align-items-center\">
                        <ul class=\"text-center\">
                            <li class='text-bold'>Fait par :</li>
                            <li>Nourou Pressing 2</li>
                            <li>Maristes</li>
                            <li>00 221 777215233</li>
                            <li>contact@nouroupressing.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"overflow-view\">
                <div class=\"invoice-body\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>Article</th>
                            <th>Quantité</th>
                            <th>Prix Unitaire</th>
                            <th>Remise</th>
                            <th>Montant</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "commandeDetails", [], "any", false, false, false, 294));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 295
            yield "                            <tr>
                                <td>";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "articles", [], "any", false, false, false, 296), "designation", [], "any", false, false, false, 296), "html", null, true);
            yield "</td>
                                <td>";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "quantity", [], "any", false, false, false, 297), "html", null, true);
            yield "</td>
                                <td>";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prixUnitaire", [], "any", false, false, false, 298), 2, ",", " "), "html", null, true);
            yield " FCFA</td>
                                <td>";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "remise", [], "any", false, false, false, 299), 2, ",", " "), "html", null, true);
            yield " FCFA</td>
                                <td>";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prixTotal", [], "any", false, false, false, 300), 2, ",", " "), "html", null, true);
            yield " FCFA</td>
                            </tr>

                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 304
            yield "                            <tr>
                                <td colspan=\"4\" class=\"text-center\">Aucun détail de commande trouvé</td>
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        yield "                        </tbody>
                    </table>


                    <div class=\"invoice-body-bottom\">
                        <div class=\"invoice-body-info-item border-bottom\">
                            <div class=\"info-item-td text-end text-bold\">Montant Total:</div>
                            <div class=\"info-item-td text-end\">  ";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 316, $this->source); })()), "montantTotal", [], "any", false, false, false, 316), 2, ",", " "), "html", null, true);
        yield "
                                FCFA
                            </div>
                        </div>
                        <div class=\"invoice-body-info-item border-bottom\">
                            <div class=\"info-item-td text-end text-bold\">Remise:</div>
                            <div class=\"info-item-td text-end\"> ";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 322, $this->source); })()), "remise", [], "any", false, false, false, 322), 2, ",", " "), "html", null, true);
        yield "FCFA
                            </div>
                        </div>
                        <div class=\"invoice-body-info-item\">
                            ";
        // line 326
        $context["montantRecu"] = 0;
        // line 327
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 327, $this->source); })()), "paiements", [], "any", false, false, false, 327));
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 328
            yield "                                ";
            $context["montantRecu"] = ((isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 328, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["paiement"], "montantRecu", [], "any", false, false, false, 328));
            // line 329
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        yield "                                <div class=\"info-item-td text-end text-bold\">Montant Reçu:</div>
                                <div class=\"info-item-td text-end\"> ";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 331, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "
                                FCFA
                            </div>

                        </div>
                        <div class=\"invoice-body-info-item\">
                            <div class=\"info-item-td text-end text-bold\">Net à payer:</div>
                            <div class=\"info-item-td text-end\"> ";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 338, $this->source); })()), "montantTotal", [], "any", false, false, false, 338) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 338, $this->source); })()), "remise", [], "any", false, false, false, 338)) - (isset($context["montantRecu"]) || array_key_exists("montantRecu", $context) ? $context["montantRecu"] : (function () { throw new RuntimeError('Variable "montantRecu" does not exist.', 338, $this->source); })())), 2, ",", " "), "html", null, true);
        yield "
                                FCFA
                            </div>
                        </div>
                        <div class=\"invoice-body-info-item\">
                            <div class=\"info-item-td text-end text-bold\">Status de la commande</div>
                            <div class=\"info-item-td text-end\">
                                ";
        // line 345
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 345, $this->source); })()), "status", [], "any", false, false, false, 345) == "payé")) {
            // line 346
            yield "                                    <span class=\"badge bg-success\">Payé</span>
                                ";
        } else {
            // line 348
            yield "                                    <span class=\"badge bg-danger\">Non payé</span>
                                ";
        }
        // line 350
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return array (  476 => 350,  472 => 348,  468 => 346,  466 => 345,  456 => 338,  446 => 331,  443 => 330,  437 => 329,  434 => 328,  429 => 327,  427 => 326,  420 => 322,  411 => 316,  402 => 309,  392 => 304,  383 => 300,  379 => 299,  375 => 298,  371 => 297,  367 => 296,  364 => 295,  359 => 294,  329 => 267,  325 => 266,  319 => 265,  307 => 256,  299 => 251,  278 => 233,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css\"
          integrity=\"sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

    <style>
        *,
        *::after,
        *::before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        :root {
            --blue-color: #0c2f54;
            --dark-color: #535b61;
            --white-color: #fff;
        }
        .separator {
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }
        ul {
            list-style-type: none;
        }

        ul li {
            margin: 2px 0;
        }

        /* text colors */
        .text-dark {
            color: var(--dark-color);
        }

        .text-blue {
            color: var(--blue-color);
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .text-start {
            text-align: left;
        }

        .text-bold {
            font-weight: 700;
        }

        /* hr line */
        .hr {
            height: 1px;
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* border-bottom */
        .border-bottom {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
            font-size: 14px;
        }

        .invoice-wrapper {
            min-height: 100vh;
            background-color: rgba(0, 0, 0, 0.1);
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .invoice {
            max-width: 850px;
            margin-right: auto;
            margin-left: auto;
            background-color: var(--white-color);
            padding: 70px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            min-height: 920px;
        }

        .invoice-head-top-left img {
            width: 130px;
        }

        .invoice-head-top-right h3 {
            font-weight: 500;
            font-size: 27px;
            color: var(--blue-color);
        }

        .invoice-head-middle, .invoice-head-bottom {
            padding: 16px 0;
        }

        .invoice-body {
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            overflow: hidden;
        }

        .invoice-body table {
            border-collapse: collapse;
            border-radius: 4px;
            width: 100%;
        }

        .invoice-body table td, .invoice-body table th {
            padding: 12px;
        }

        .invoice-body table tr {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .invoice-body table thead {
            background-color: rgba(0, 0, 0, 0.02);
        }

        .invoice-body-info-item {
            display: grid;
            grid-template-columns: 80% 20%;
        }

        .invoice-body-info-item .info-item-td {
            padding: 12px;
            background-color: rgba(0, 0, 0, 0.02);
        }

        .invoice-foot {
            padding: 30px 0;
        }

        .invoice-foot p {
            font-size: 12px;
        }

        .invoice-btns {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .invoice-btn {
            padding: 3px 9px;
            color: var(--dark-color);
            font-family: inherit;
            border: 1px solid rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .invoice-head-top, .invoice-head-middle, .invoice-head-bottom {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            padding-bottom: 10px;
        }

        @media screen and (max-width: 992px) {
            .invoice {
                padding: 40px;
            }
        }

        @media screen and (max-width: 576px) {
            .invoice-head-top, .invoice-head-middle, .invoice-head-bottom {
                grid-template-columns: repeat(1, 1fr);
            }

            .invoice-head-bottom-right {
                margin-top: 12px;
                margin-bottom: 12px;
            }

            .invoice * {
                text-align: left;
            }

            .invoice {
                padding: 28px;
            }
        }

        /*.overflow-view {*/
        /*    overflow-x: scroll;*/
        /*}*/

        .invoice-body {
            min-width: 600px;
        }

        @media print {
            .print-area {
                visibility: visible;
                width: 100%;
                position: absolute;
                left: 0;
                top: 0;
                overflow: hidden;
            }

            .overflow-view {
                overflow-x: hidden;
            }

            .invoice-btns {
                display: none;
            }
        }
    </style>
</head>
<body onload=\"print()\" onafterprint=\"document.location.href='{{ path('app_commande_index') }}'\">

<div class=\"invoice-wrapper\" id=\"print-area\">
    <div class=\"invoice\">
        <div class=\"invoice-container\">
            <div class=\"invoice-head\">
                <div class=\"invoice-head-top\">
                    <div class=\"invoice-head-top-left text-start\">
                        <img src=\"images/logo.png\">
                    </div>
                    <div class=\"invoice-head-top-right text-end\">
                        <h3>Facture</h3>
                    </div>
                </div>
                <div class=\"hr\"></div>
                <div class=\"invoice-head-middle\">
                    <div class=\"invoice-head-middle-left text-start\">
                        <p>
                            <span class=\"text-bold\">Date rendez-vous</span>: {{ commande.dateLivraison|date('h:i:s d-m-Y') }}
                        </p>
                    </div>
                    <div class=\"invoice-head-middle-right text-end\">
                        <p>
                            <spanf class=\"text-bold\">No Facture:</span> {{ commande.numero }}
                        </p>
                    </div>
                </div>
                <div class=\"hr\"></div>
                <div class=\"invoice-head-bottom\">
                    <div class=\"invoice-head-bottom-left\">
                        <ul>
                            <li class='text-bold'>Facture de :</li>
                            <li> {{ commande.client.nom }} {{ commande.client.prenom }} </li>
                            <li> {{ commande.client.telephone }} </li>
                            <li> {{ commande.client.adresse }} </li>
                        </ul>
                    </div>
                    <div class=\"invoice-head-bottom-right align-items-center\">
                        <ul class=\"text-center\">
                            <li class='text-bold'>Fait par :</li>
                            <li>Nourou Pressing 2</li>
                            <li>Maristes</li>
                            <li>00 221 777215233</li>
                            <li>contact@nouroupressing.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"overflow-view\">
                <div class=\"invoice-body\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
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
                                <td>{{ commande.articles.designation }}</td>
                                <td>{{ commande.quantity }}</td>
                                <td>{{ commande.prixUnitaire|number_format(2, ',', ' ') }} FCFA</td>
                                <td>{{ commande.remise|number_format(2, ',', ' ') }} FCFA</td>
                                <td>{{ commande.prixTotal|number_format(2, ',', ' ') }} FCFA</td>
                            </tr>

                        {% else %}
                            <tr>
                                <td colspan=\"4\" class=\"text-center\">Aucun détail de commande trouvé</td>
                            </tr>

                        {% endfor %}
                        </tbody>
                    </table>


                    <div class=\"invoice-body-bottom\">
                        <div class=\"invoice-body-info-item border-bottom\">
                            <div class=\"info-item-td text-end text-bold\">Montant Total:</div>
                            <div class=\"info-item-td text-end\">  {{ commande.montantTotal|number_format(2, ',', ' ') }}
                                FCFA
                            </div>
                        </div>
                        <div class=\"invoice-body-info-item border-bottom\">
                            <div class=\"info-item-td text-end text-bold\">Remise:</div>
                            <div class=\"info-item-td text-end\"> {{ commande.remise|number_format(2, ',', ' ') }}FCFA
                            </div>
                        </div>
                        <div class=\"invoice-body-info-item\">
                            {% set montantRecu = 0 %}
                            {% for paiement in commande.paiements %}
                                {% set montantRecu = montantRecu + paiement.montantRecu %}
                            {% endfor %}
                                <div class=\"info-item-td text-end text-bold\">Montant Reçu:</div>
                                <div class=\"info-item-td text-end\"> {{ montantRecu|number_format(2, ',', ' ') }}
                                FCFA
                            </div>

                        </div>
                        <div class=\"invoice-body-info-item\">
                            <div class=\"info-item-td text-end text-bold\">Net à payer:</div>
                            <div class=\"info-item-td text-end\"> {{ (commande.montantTotal - commande.remise - montantRecu)|number_format(2, ',',' ') }}
                                FCFA
                            </div>
                        </div>
                        <div class=\"invoice-body-info-item\">
                            <div class=\"info-item-td text-end text-bold\">Status de la commande</div>
                            <div class=\"info-item-td text-end\">
                                {% if commande.status == 'payé' %}
                                    <span class=\"badge bg-success\">Payé</span>
                                {% else %}
                                    <span class=\"badge bg-danger\">Non payé</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>", "commande/facture_print.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\commande\\facture_print.html.twig");
    }
}
