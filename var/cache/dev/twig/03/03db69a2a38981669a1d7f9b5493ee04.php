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

/* pressing/show.html.twig */
class __TwigTemplate_7df36666b2ee7a180a32a74a20e65ef0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pressing/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pressing/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pressing/show.html.twig", 1);
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

        yield "Pressing";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pressing"]) || array_key_exists("pressing", $context) ? $context["pressing"] : (function () { throw new RuntimeError('Variable "pressing" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        yield "
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-location-plus me-2\"></i> Adresse:
                        </strong> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pressing"]) || array_key_exists("pressing", $context) ? $context["pressing"] : (function () { throw new RuntimeError('Variable "pressing" does not exist.', 22, $this->source); })()), "adresse", [], "any", false, false, false, 22), "html", null, true);
        yield "
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-phone-call me-2\"></i> Téléphone:
                        </strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pressing"]) || array_key_exists("pressing", $context) ? $context["pressing"] : (function () { throw new RuntimeError('Variable "pressing" does not exist.', 27, $this->source); })()), "telephone", [], "any", false, false, false, 27), "html", null, true);
        yield "
                    </li>

                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"> <i class=\"bx bx-calendar me-2\"></i> Date de création: </strong>
                        ";
        // line 33
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pressing"]) || array_key_exists("pressing", $context) ? $context["pressing"] : (function () { throw new RuntimeError('Variable "pressing" does not exist.', 33, $this->source); })()), "createdAt", [], "any", false, false, false, 33)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pressing"]) || array_key_exists("pressing", $context) ? $context["pressing"] : (function () { throw new RuntimeError('Variable "pressing" does not exist.', 33, $this->source); })()), "createdAt", [], "any", false, false, false, 33), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "
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
        return "pressing/show.html.twig";
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
        return array (  128 => 33,  119 => 27,  111 => 22,  103 => 17,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pressing{% endblock %}

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

                        <strong class=\"mx-3\"><i class=\"bx bx-id-card me-2\"></i> Nom: </strong> {{ pressing.nom }}
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-location-plus me-2\"></i> Adresse:
                        </strong> {{ pressing.adresse }}
                    </li>
                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"><i class=\"bx bx-phone-call me-2\"></i> Téléphone:
                        </strong> {{ pressing.telephone }}
                    </li>

                    <li class=\"list-group-item d-flex align-items-center\">

                        <strong class=\"mx-3\"> <i class=\"bx bx-calendar me-2\"></i> Date de création: </strong>
                        {{ pressing.createdAt ? pressing.createdAt|date('Y-m-d H:i:s') : '' }}
                    </li>

                </ul>
            </div>
        </div>

    </center>
{% endblock %}
", "pressing/show.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\pressing\\show.html.twig");
    }
}
