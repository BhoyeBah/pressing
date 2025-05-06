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

/* home_page/index.html.twig */
class __TwigTemplate_fe879fb43139c12bbcccbeed8946c75f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'dashboard' => [$this, 'block_dashboard'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
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

        yield "Tableau de board ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_dashboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

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
        yield "<!-- / Content -->
<div class=\"row\">
    <div class=\"col-lg-6 col-md-4 order-1\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-x-circle avatar-icon text-danger\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt6\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt6\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"d-block mb-1\">Facture Non Payées</span>
                        <h3 class=\"card-title text-nowrap mb-2\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["factureNonPaye"]) || array_key_exists("factureNonPaye", $context) ? $context["factureNonPaye"] : (function () { throw new RuntimeError('Variable "factureNonPaye" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-check-circle avatar-icon text-success\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt6\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt6\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span>Facture Payé</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["facturePaye"]) || array_key_exists("facturePaye", $context) ? $context["facturePaye"] : (function () { throw new RuntimeError('Variable "facturePaye" does not exist.', 61, $this->source); })()), "html", null, true);
        yield "</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Revenue -->

    <!--/ Total Revenue -->
    <div class=\"col-12 col-md-8 col-lg-6 order-3 order-md-2\">
        <div class=\"row\">
            <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-receipt avatar-icon\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt4\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt4\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span>Facture</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 97, $this->source); })()), "html", null, true);
        yield "</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-id-card avatar-icon\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt1\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"cardOpt1\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Client</span>
                        <h3 class=\"card-title mb-2\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 125, $this->source); })()), "html", null, true);
        yield "</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-12 col-md-8 col-lg-6 order-3 order-md-2\">
        <div class=\"row\">
        <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-money avatar-icon text-danger\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt1\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"cardOpt1\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Montant Total impayé</span>
                        <h3 class=\"card-title mb-2\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalImPaye"]) || array_key_exists("totalImPaye", $context) ? $context["totalImPaye"] : (function () { throw new RuntimeError('Variable "totalImPaye" does not exist.', 157, $this->source); })()), 0, "", " "), "html", null, true);
        yield " FCFA </h3>
                    </div>
                </div>
            </div>
            <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-money avatar-icon text-success\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt1\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"cardOpt1\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Montant Total</span>
                        <h3 class=\"card-title mb-2\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalPaye"]) || array_key_exists("totalPaye", $context) ? $context["totalPaye"] : (function () { throw new RuntimeError('Variable "totalPaye" does not exist.', 185, $this->source); })()), 0, "", " "), "html", null, true);
        yield " FCFA </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- / Content -->
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
        return "home_page/index.html.twig";
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
        return array (  308 => 185,  277 => 157,  242 => 125,  211 => 97,  172 => 61,  141 => 33,  111 => 5,  101 => 4,  81 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Tableau de board {% endblock %}
{% block dashboard %}active{% endblock %}
{% block body %}
<!-- / Content -->
<div class=\"row\">
    <div class=\"col-lg-6 col-md-4 order-1\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-x-circle avatar-icon text-danger\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt6\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt6\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"d-block mb-1\">Facture Non Payées</span>
                        <h3 class=\"card-title text-nowrap mb-2\">{{ factureNonPaye }}</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-check-circle avatar-icon text-success\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt6\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt6\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span>Facture Payé</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ facturePaye }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Revenue -->

    <!--/ Total Revenue -->
    <div class=\"col-12 col-md-8 col-lg-6 order-3 order-md-2\">
        <div class=\"row\">
            <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-receipt avatar-icon\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt4\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt4\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span>Facture</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ facture }}</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-id-card avatar-icon\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt1\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"cardOpt1\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Client</span>
                        <h3 class=\"card-title mb-2\">{{ client }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-12 col-md-8 col-lg-6 order-3 order-md-2\">
        <div class=\"row\">
        <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-money avatar-icon text-danger\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt1\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"cardOpt1\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Montant Total impayé</span>
                        <h3 class=\"card-title mb-2\">{{ totalImPaye|number_format(0,'',' ') }} FCFA </h3>
                    </div>
                </div>
            </div>
            <div class=\"col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <i class=\"bx bx-money avatar-icon text-success\"></i>
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOpt1\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu\" aria-labelledby=\"cardOpt1\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">View More</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Montant Total</span>
                        <h3 class=\"card-title mb-2\">{{ totalPaye|number_format(0,'',' ') }} FCFA </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- / Content -->
{% endblock %}", "home_page/index.html.twig", "C:\\xampp\\htdocs\\pressing\\templates\\home_page\\index.html.twig");
    }
}
