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

/* commande/new.html.twig */
class __TwigTemplate_e986304748bfddfa01837d5f5c4e4425 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'new_facture' => [$this, 'block_new_facture'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/new.html.twig", 1);
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

        yield "Créer une nouvelle facture";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_new_facture($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_facture"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_facture"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<div class=\"card\">
    <div class=\"card-header text-center fw-bold\">
        <h4>Nouvelle facture</h4>
    </div>
    <div class=\"card-body\">
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        yield "
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mb-3\">
                    <div class=\"input-group\">
                        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "client", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-select searchselect"]]);
        yield "
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_new");
        yield "\" class=\"btn btn-primary\">Nouveau client</a>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <span class=\"input-group-text fw-bold\">Date Rendez-vous</span>
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "dateLivraison", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>
                <div class=\"input-group mb-3\">
                    <span class=\"input-group-text fw-bold\">Montant Reçu:</span>
                    ";
        // line 26
        yield "                    <input type=\"number\" class=\"form-control text-end montantRecu\" id=\"montantRecu\"
                        name=\"montantRecu\" step=\"0.01\">
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"input-group-text mb-3\">
                    <span class=\"fw-bold\">Date Dépôt : </span> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["curentdate"]) || array_key_exists("curentdate", $context) ? $context["curentdate"] : (function () { throw new RuntimeError('Variable "curentdate" does not exist.', 32, $this->source); })()), "H:i:s d/m/Y", "Africa/Dakar"), "html", null, true);
        yield "
                </div>
                <div class=\"input-group-text mb-3\">
                    <span class=\"fw-bold\">Numéro Commande : </span>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numeroCommande"]) || array_key_exists("numeroCommande", $context) ? $context["numeroCommande"] : (function () { throw new RuntimeError('Variable "numeroCommande" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "
                </div>

            </div>
        </div>

        <table class=\"table table-bordered mt-4\">
            <thead>
                <tr>
                    <th>Articles</th>
                    <th class=\"text-end\">Prix unitaire</th>
                    <th class=\"text-end\">Quantité</th>
                    <th class=\"text-end\">Remise</th>
                    <th class=\"text-end\">Prix total</th>
                    <th class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-success\" id=\"addBtn\">
                            <i class=\"bx bx-plus\"></i>
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody id=\"dynamicadd\">
                <tr>
                    <td id=\"row w-100\">
                        <select name=\"articles_id[]\" class=\"form-select searchselect articles_id\" id=\"articles_id[]\">
                            <option value=\"\">Selectionnez un article</option>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 62
            yield "                            <option data-price=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 62), "html", null, true);
            yield "\"
                                value=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "designation", [], "any", false, false, false, 63), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                        </select>
                    </td>
                    <td><input type=\"number\" class=\"form-control text-end price\" id=\"price\" name=\"price[]\" readonly>
                    </td>
                    <td><input type=\"number\" class=\"form-control text-end quantity\" id=\"quantity\" name=\"quantity[]\">
                    </td>
                    <td><input type=\"number\" class=\"form-control text-end remise\" id=\"remise\" name=\"remise[]\"></td>
                    <td><input type=\"number\" class=\"form-control text-end total_amount\" id=\"total_amount\"
                            name=\"total_amount[]\" readonly></td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger delete\"><i class='bx bxs-x-square'></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class=\"row mt-4\">
            <div class=\"col-md-8\"></div>
            <div class=\"col-md-4\">
                <div class=\"text-end mb-3\">
                    <span class=\"fw-bold\">Prix Total: <b class=\"totalAvecRemise\">0.00</b></span>
                </div>
                <div class=\"text-end mb-3\">
                    <span class=\"fw-bold\">Remise: <b class=\"totalRemise\">0.00</b></span>
                </div>
                <div class=\"text-end mb-3\">
                    <span class=\"fw-bold\">Montant total: <b class=\"total\">0.00</b></span>
                </div>
                <div class=\"text-end mb-3\">
                    <span class=\"fw-bold\">Montant Reçu: <b class=\"montantRecu\">0.00</b></span>
                </div>
                <div class=\"text-end mb-3\">
                    <span class=\"fw-bold\">Reste à payer: <b class=\"resteAPayer\">0.00</b></span>
                </div>

                <button id=\"print\" type=\"submit\" class=\"btn rounded-pill btn-info\">Validez</button>
            </div>
        </div>
        ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
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
        return "commande/new.html.twig";
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
        return array (  248 => 104,  207 => 65,  197 => 63,  192 => 62,  188 => 61,  159 => 35,  153 => 32,  145 => 26,  138 => 21,  130 => 16,  126 => 15,  118 => 10,  111 => 5,  101 => 4,  81 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Créer une nouvelle facture{% endblock %}
{% block new_facture %}active{% endblock %}
{% block body %}
<div class=\"card\">
    <div class=\"card-header text-center fw-bold\">
        <h4>Nouvelle facture</h4>
    </div>
    <div class=\"card-body\">
        {{ form_start(form, { 'attr': { 'class': 'form' } }) }}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"mb-3\">
                    <div class=\"input-group\">
                        {{ form_widget(form.client, { 'attr': { 'class': 'form-select searchselect' } }) }}
                        <a href=\"{{ path('app_client_new') }}\" class=\"btn btn-primary\">Nouveau client</a>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <span class=\"input-group-text fw-bold\">Date Rendez-vous</span>
                    {{ form_widget(form.dateLivraison, { 'attr': { 'class': 'form-control' } }) }}
                </div>
                <div class=\"input-group mb-3\">
                    <span class=\"input-group-text fw-bold\">Montant Reçu:</span>
                    {#                            <input type=\"number\" class=\"form-control montantRecu\" id=\"montantRecu\" name=\"montantRecu\" step=\"0.01\">#}
                    <input type=\"number\" class=\"form-control text-end montantRecu\" id=\"montantRecu\"
                        name=\"montantRecu\" step=\"0.01\">
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"input-group-text mb-3\">
                    <span class=\"fw-bold\">Date Dépôt : </span> {{ curentdate|date('H:i:s d/m/Y', 'Africa/Dakar') }}
                </div>
                <div class=\"input-group-text mb-3\">
                    <span class=\"fw-bold\">Numéro Commande : </span>{{ numeroCommande }}
                </div>

            </div>
        </div>

        <table class=\"table table-bordered mt-4\">
            <thead>
                <tr>
                    <th>Articles</th>
                    <th class=\"text-end\">Prix unitaire</th>
                    <th class=\"text-end\">Quantité</th>
                    <th class=\"text-end\">Remise</th>
                    <th class=\"text-end\">Prix total</th>
                    <th class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-success\" id=\"addBtn\">
                            <i class=\"bx bx-plus\"></i>
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody id=\"dynamicadd\">
                <tr>
                    <td id=\"row w-100\">
                        <select name=\"articles_id[]\" class=\"form-select searchselect articles_id\" id=\"articles_id[]\">
                            <option value=\"\">Selectionnez un article</option>
                            {% for article in articles %}
                            <option data-price=\"{{ article.prix }}\"
                                value=\"{{ article.id }}\">{{ article.designation }}</option>
                            {% endfor %}
                        </select>
                    </td>
                    <td><input type=\"number\" class=\"form-control text-end price\" id=\"price\" name=\"price[]\" readonly>
                    </td>
                    <td><input type=\"number\" class=\"form-control text-end quantity\" id=\"quantity\" name=\"quantity[]\">
                    </td>
                    <td><input type=\"number\" class=\"form-control text-end remise\" id=\"remise\" name=\"remise[]\"></td>
                    <td><input type=\"number\" class=\"form-control text-end total_amount\" id=\"total_amount\"
                            name=\"total_amount[]\" readonly></td>
                    <td class=\"text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger delete\"><i class='bx bxs-x-square'></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class=\"row mt-4\">
            <div class=\"col-md-8\"></div>
            <div class=\"col-md-4\">
                <div class=\"text-end mb-3\">
                    <span class=\"fw-bold\">Prix Total: <b class=\"totalAvecRemise\">0.00</b></span>
                </div>
                <div class=\"text-end mb-3\">
                    <span class=\"fw-bold\">Remise: <b class=\"totalRemise\">0.00</b></span>
                </div>
                <div class=\"text-end mb-3\">
                    <span class=\"fw-bold\">Montant total: <b class=\"total\">0.00</b></span>
                </div>
                <div class=\"text-end mb-3\">
                    <span class=\"fw-bold\">Montant Reçu: <b class=\"montantRecu\">0.00</b></span>
                </div>
                <div class=\"text-end mb-3\">
                    <span class=\"fw-bold\">Reste à payer: <b class=\"resteAPayer\">0.00</b></span>
                </div>

                <button id=\"print\" type=\"submit\" class=\"btn rounded-pill btn-info\">Validez</button>
            </div>
        </div>
        {{ form_end(form) }}
    </div>

</div>
{% endblock %}", "commande/new.html.twig", "C:\\xampp\\htdocs\\pressing\\templates\\commande\\new.html.twig");
    }
}
