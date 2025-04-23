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

/* membre/show.html.twig */
class __TwigTemplate_855346e69b22d8a196101f9d14a0da84 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "membre/show.html.twig", 1);
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

        yield "Membre";
        
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
        yield "    <center>
        <div class=\"col-lg-6\">
            <small class=\"text-light fw-semibold\">Informations</small>
            <div class=\"demo-inline-spacing mt-3\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Image: </strong> <img src=\"\" alt=\"\">
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Nom: </strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        yield "
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Prénom: </strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), "html", null, true);
        yield "
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-location-plus me-2\"></i> Adresse:
                        </strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 26, $this->source); })()), "adresse", [], "any", false, false, false, 26), "html", null, true);
        yield "
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-phone-call me-2\"></i> Téléphone:
                        </strong> ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 31, $this->source); })()), "telephone", [], "any", false, false, false, 31), "html", null, true);
        yield "
                    </li>
                    </li>
                </ul>
            </div>
        </div>

    </center>
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
        return "membre/show.html.twig";
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
        return array (  126 => 31,  118 => 26,  110 => 21,  103 => 17,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Membre{% endblock %}

{% block body %}
    <center>
        <div class=\"col-lg-6\">
            <small class=\"text-light fw-semibold\">Informations</small>
            <div class=\"demo-inline-spacing mt-3\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Image: </strong> <img src=\"\" alt=\"\">
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Nom: </strong> {{ membre.nom }}
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Prénom: </strong> {{ membre.prenom }}
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-location-plus me-2\"></i> Adresse:
                        </strong> {{ membre.adresse }}
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-phone-call me-2\"></i> Téléphone:
                        </strong> {{ membre.telephone }}
                    </li>
                    </li>
                </ul>
            </div>
        </div>

    </center>
{% endblock %}
", "membre/show.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\membre\\show.html.twig");
    }
}
