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

/* home_page/dashboard.html.twig */
class __TwigTemplate_ce8baac7b5a866ea06a1e7e3a2b0ad67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/dashboard.html.twig", 1);
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

        yield "Tableau de bord du Pressing";
        
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
        yield "    <!-- / Content -->
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8 mb-4 order-0\">
                <div class=\"card\">
                    <div class=\"d-flex align-items-end row\">
                        <div class=\"col-sm-7\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-primary\">
                                    ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            yield "                                        Bienvenue, Mr ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "prenom", [], "any", false, false, false, 16), "html", null, true);
            yield " ! 🎉
                                    ";
        }
        // line 18
        yield "                                </h5>
                                <p class=\"mb-4\">
                                    Tableau de bord du pressing.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-sm-5 text-center text-sm-left\">
                            <div class=\"card-body pb-0 px-0 px-md-4\">
                                <img
                                        src=\"../assets/img/illustrations/man-with-laptop-light.png\"
                                        height=\"140\"
                                        alt=\"Vue de l'utilisateur\"
                                        data-app-dark-img=\"illustrations/man-with-laptop-dark.png\"
                                        data-app-light-img=\"illustrations/man-with-laptop-light.png\"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 order-1\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title d-flex align-items-start justify-content-between\">
                                    <div class=\"avatar flex-shrink-0\">
                                        <i class=\"bx bx-user-plus rounded\"></i>
                                        <img
                                                src=\"../assets/img/icons/unicons/chart-success.png\"
                                                alt=\"Nombre de clients\"
                                                class=\"rounded\"
                                        />
                                    </div>
                                    <div class=\"dropdown\">
                                        <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt3\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                        >
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt3\">
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Voir plus</a>
                                        </div>
                                    </div>
                                </div>
                                <span class=\"fw-semibold d-block mb-1\">Total Clients</span>
                                <h3 class=\"card-title mb-2\">250</h3>
                                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> +72.80%</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title d-flex align-items-start justify-content-between\">
                                    <div class=\"avatar flex-shrink-0\">
                                        <i class=\"bx bx-cart-alt rounded\"></i>
                                        <img
                                                src=\"../assets/img/icons/unicons/wallet-info.png\"
                                                alt=\"Nombre de commandes\"
                                                class=\"rounded\"
                                        />
                                    </div>
                                    <div class=\"dropdown\">
                                        <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt6\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                        >
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt6\">
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Voir plus</a>
                                        </div>
                                    </div>
                                </div>
                                <span>Total Commandes</span>
                                <h3 class=\"card-title text-nowrap mb-1\">500</h3>
                                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> +28.42%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Revenue -->
            <div class=\"col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4\">
                <div class=\"card\">
                    <div class=\"row row-bordered g-0\">
                        <div class=\"col-md-8\">
                            <h5 class=\"card-header m-0 me-2 pb-3\">Chiffre d'affaires</h5>
                            <div id=\"totalRevenueChart\" class=\"px-2\"></div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <div class=\"dropdown\">
                                        <button
                                                class=\"btn btn-sm btn-outline-primary dropdown-toggle\"
                                                type=\"button\"
                                                id=\"growthReportId\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                        >
                                            2023
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"growthReportId\">
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">2022</a>
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">2021</a>
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"growthChart\"></div>
                            <div class=\"text-center fw-semibold pt-3 mb-2\">Taux de croissance de l'entreprise</div>

                            <div class=\"d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between\">
                                <div class=\"d-flex\">
                                    <div class=\"me-2\">
                                        <span class=\"badge bg-label-primary p-2\"><i class=\"bx bx-dollar text-primary\"></i></span>
                                    </div>
                                    <div class=\"d-flex flex-column\">
                                        <small>2023</small>
                                        <h6 class=\"mb-0\">15 000 €</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Revenue -->
            <div class=\"col-12 col-md-8 col-lg-4 order-3 order-md-2\">
                <div class=\"row\">
                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title d-flex align-items-start justify-content-between\">
                                    <div class=\"avatar flex-shrink-0\">
                                        <i class=\"bx bx-check-circle rounded\"></i>
                                        <img src=\"../assets/img/icons/unicons/paypal.png\" alt=\"Commandes payées\" class=\"rounded\" />
                                    </div>
                                    <div class=\"dropdown\">
                                        <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt4\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                        >
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt4\">
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Voir plus</a>
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                                <span class=\"d-block mb-1\">Commandes Payées</span>
                                <h3 class=\"card-title text-nowrap mb-2\">400</h3>
                                <small class=\"text-danger fw-semibold\"><i class=\"bx bx-down-arrow-alt\"></i> -14.82%</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title d-flex align-items-start justify-content-between\">
                                    <div class=\"avatar flex-shrink-0\">
                                        <i class=\"bx bx-x-circle rounded\"></i>
                                        <img src=\"../assets/img/icons/unicons/cc-primary.png\" alt=\"Commandes non payées\" class=\"rounded\" />
                                    </div>
                                    <div class=\"dropdown\">
                                        <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt1\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                        >
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"cardOpt1\">
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Voir plus</a>
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                                <span class=\"fw-semibold d-block mb-1\">Commandes Non Payées</span>
                                <h3 class=\"card-title mb-2\">100</h3>
                                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> +28.14%</small>
                            </div>
                        </div>
                    </div>
                    <!-- </div>
    <div class=\"row\"> -->
                    <div class=\"col-12 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between flex-sm-row flex-column gap-3\">
                                    <div class=\"d-flex flex-sm-column flex-row align-items-start justify-content-between\">
                                        <div class=\"card-title\">
                                            <h5 class=\"text-nowrap mb-2\">Rapport de profil</h5>
                                            <span class=\"badge bg-label-warning rounded-pill\">Année 2021</span>
                                        </div>
                                        <div class=\"mt-sm-auto\">
                                            <small class=\"text-success text-nowrap fw-semibold\"
                                            ><i class=\"bx bx-chevron-up\"></i> 68.2%</small
                                            >
                                            <h3 class=\"mb-0\">\$84,686k</h3>
                                        </div>
                                    </div>
                                    <div id=\"profileReportChart\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <!-- Order Statistics -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 order-0 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-header d-flex align-items-center justify-content-between pb-0\">
                        <div class=\"card-title mb-0\">
                            <h5 class=\"m-0 me-2\">Statistiques des commandes</h5>
                            <small class=\"text-muted\">42.82k Total Ventes</small>
                        </div>
                        <div class=\"dropdown\">
                            <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"orederStatistics\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"orederStatistics\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Sélectionner tout</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Actualiser</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Partager</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <div class=\"d-flex flex-column align-items-center gap-1\">
                                <h2 class=\"mb-2\">500</h2>
                                <span>Total Commandes</span>
                            </div>
                            <div id=\"orderStatisticsChart\"></div>
                        </div>
                        <ul class=\"p-0 m-0\">
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                            <span class=\"avatar-initial rounded bg-label-primary\"
                            ><i class=\"bx bx-mobile-alt\"></i
                                ></span>
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">Chemise</h6>
                                        <small class=\"text-muted\">Chemise en coton, Lin</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">82.5k</small>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <span class=\"avatar-initial rounded bg-label-success\"><i class=\"bx bx-closet\"></i></span>
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">Pantalon</h6>
                                        <small class=\"text-muted\">Pantalon en laine, Chino</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">23.8k</small>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <span class=\"avatar-initial rounded bg-label-info\"><i class=\"bx bx-home-alt\"></i></span>
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">Costume</h6>
                                        <small class=\"text-muted\">Costume en laine, Soie</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">849k</small>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                            <span class=\"avatar-initial rounded bg-label-secondary\"
                            ><i class=\"bx bx-football\"></i
                                ></span>
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">Veste</h6>
                                        <small class=\"text-muted\">Veste en cuir, Blazer</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">99</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Order Statistics -->

            <!-- Expense Overview -->
            <div class=\"col-md-6 col-lg-4 order-1 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-header\">
                        <ul class=\"nav nav-pills\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <button
                                        type=\"button\"
                                        class=\"nav-link active\"
                                        role=\"tab\"
                                        data-bs-toggle=\"tab\"
                                        data-bs-target=\"#navs-tabs-line-card-income\"
                                        aria-controls=\"navs-tabs-line-card-income\"
                                        aria-selected=\"true\"
                                >
                                    Revenus
                                </button>
                            </li>
                            <li class=\"nav-item\">
                                <button type=\"button\" class=\"nav-link\" role=\"tab\">Dépenses</button>
                            </li>
                            <li class=\"nav-item\">
                                <button type=\"button\" class=\"nav-link\" role=\"tab\">Bénéfices</button>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body px-0\">
                        <div class=\"tab-content p-0\">
                            <div class=\"tab-pane fade show active\" id=\"navs-tabs-line-card-income\" role=\"tabpanel\">
                                <div class=\"d-flex p-4 pt-3\">
                                    <div class=\"avatar flex-shrink-0 me-3\">
                                        <img src=\"../assets/img/icons/unicons/wallet.png\" alt=\"Solde total\" />
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Solde total</small>
                                        <div class=\"d-flex align-items-center\">
                                            <h6 class=\"mb-0 me-1\">12 000 €</h6>
                                            <small class=\"text-success fw-semibold\">
                                                <i class=\"bx bx-chevron-up\"></i>
                                                42.9%
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"incomeChart\"></div>
                                <div class=\"d-flex justify-content-center pt-4 gap-2\">
                                    <div class=\"flex-shrink-0\">
                                        <div id=\"expensesOfWeek\"></div>
                                    </div>
                                    <div>
                                        <p class=\"mb-n1 mt-1\">Dépenses de la semaine</p>
                                        <small class=\"text-muted\">39€ de moins que la semaine dernière</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Expense Overview -->

            <!-- Transactions -->
            <div class=\"col-md-6 col-lg-4 order-2 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-header d-flex align-items-center justify-content-between\">
                        <h5 class=\"card-title m-0 me-2\">Transactions</h5>
                        <div class=\"dropdown\">
                            <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"transactionID\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"transactionID\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Derniers 28 jours</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Mois dernier</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Année dernière</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"p-0 m-0\">
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/paypal.png\" alt=\"Paiement Paypal\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Paypal</small>
                                        <h6 class=\"mb-0\">Envoyer de l'argent</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">+82.6</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/wallet.png\" alt=\"Paiement porte-monnaie\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Porte-monnaie</small>
                                        <h6 class=\"mb-0\">Mac'D</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">+270.69</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/chart.png\" alt=\"Transfert d'argent\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Transfert</small>
                                        <h6 class=\"mb-0\">Remboursement</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">+637.91</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/cc-success.png\" alt=\"Paiement carte bancaire\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Carte bancaire</small>
                                        <h6 class=\"mb-0\">Commande de nourriture</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">-838.71</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/wallet.png\" alt=\"Paiement porte-monnaie\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Porte-monnaie</small>
                                        <h6 class=\"mb-0\">Starbucks</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">+203.33</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/cc-warning.png\" alt=\"Paiement carte bancaire\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Mastercard</small>
                                        <h6 class=\"mb-0\">Commande de nourriture</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">-92.45</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->
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
        return "home_page/dashboard.html.twig";
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
        return array (  111 => 18,  103 => 16,  101 => 15,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord du Pressing{% endblock %}

{% block body %}
    <!-- / Content -->
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8 mb-4 order-0\">
                <div class=\"card\">
                    <div class=\"d-flex align-items-end row\">
                        <div class=\"col-sm-7\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-primary\">
                                    {% if app.user %}
                                        Bienvenue, Mr {{ app.user.nom }} {{ app.user.prenom }} ! 🎉
                                    {% endif %}
                                </h5>
                                <p class=\"mb-4\">
                                    Tableau de bord du pressing.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-sm-5 text-center text-sm-left\">
                            <div class=\"card-body pb-0 px-0 px-md-4\">
                                <img
                                        src=\"../assets/img/illustrations/man-with-laptop-light.png\"
                                        height=\"140\"
                                        alt=\"Vue de l'utilisateur\"
                                        data-app-dark-img=\"illustrations/man-with-laptop-dark.png\"
                                        data-app-light-img=\"illustrations/man-with-laptop-light.png\"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 order-1\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title d-flex align-items-start justify-content-between\">
                                    <div class=\"avatar flex-shrink-0\">
                                        <i class=\"bx bx-user-plus rounded\"></i>
                                        <img
                                                src=\"../assets/img/icons/unicons/chart-success.png\"
                                                alt=\"Nombre de clients\"
                                                class=\"rounded\"
                                        />
                                    </div>
                                    <div class=\"dropdown\">
                                        <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt3\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                        >
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt3\">
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Voir plus</a>
                                        </div>
                                    </div>
                                </div>
                                <span class=\"fw-semibold d-block mb-1\">Total Clients</span>
                                <h3 class=\"card-title mb-2\">250</h3>
                                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> +72.80%</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title d-flex align-items-start justify-content-between\">
                                    <div class=\"avatar flex-shrink-0\">
                                        <i class=\"bx bx-cart-alt rounded\"></i>
                                        <img
                                                src=\"../assets/img/icons/unicons/wallet-info.png\"
                                                alt=\"Nombre de commandes\"
                                                class=\"rounded\"
                                        />
                                    </div>
                                    <div class=\"dropdown\">
                                        <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt6\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                        >
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt6\">
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Voir plus</a>
                                        </div>
                                    </div>
                                </div>
                                <span>Total Commandes</span>
                                <h3 class=\"card-title text-nowrap mb-1\">500</h3>
                                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> +28.42%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Revenue -->
            <div class=\"col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4\">
                <div class=\"card\">
                    <div class=\"row row-bordered g-0\">
                        <div class=\"col-md-8\">
                            <h5 class=\"card-header m-0 me-2 pb-3\">Chiffre d'affaires</h5>
                            <div id=\"totalRevenueChart\" class=\"px-2\"></div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <div class=\"dropdown\">
                                        <button
                                                class=\"btn btn-sm btn-outline-primary dropdown-toggle\"
                                                type=\"button\"
                                                id=\"growthReportId\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                        >
                                            2023
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"growthReportId\">
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">2022</a>
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">2021</a>
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"growthChart\"></div>
                            <div class=\"text-center fw-semibold pt-3 mb-2\">Taux de croissance de l'entreprise</div>

                            <div class=\"d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between\">
                                <div class=\"d-flex\">
                                    <div class=\"me-2\">
                                        <span class=\"badge bg-label-primary p-2\"><i class=\"bx bx-dollar text-primary\"></i></span>
                                    </div>
                                    <div class=\"d-flex flex-column\">
                                        <small>2023</small>
                                        <h6 class=\"mb-0\">15 000 €</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Revenue -->
            <div class=\"col-12 col-md-8 col-lg-4 order-3 order-md-2\">
                <div class=\"row\">
                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title d-flex align-items-start justify-content-between\">
                                    <div class=\"avatar flex-shrink-0\">
                                        <i class=\"bx bx-check-circle rounded\"></i>
                                        <img src=\"../assets/img/icons/unicons/paypal.png\" alt=\"Commandes payées\" class=\"rounded\" />
                                    </div>
                                    <div class=\"dropdown\">
                                        <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt4\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                        >
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt4\">
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Voir plus</a>
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                                <span class=\"d-block mb-1\">Commandes Payées</span>
                                <h3 class=\"card-title text-nowrap mb-2\">400</h3>
                                <small class=\"text-danger fw-semibold\"><i class=\"bx bx-down-arrow-alt\"></i> -14.82%</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"card-title d-flex align-items-start justify-content-between\">
                                    <div class=\"avatar flex-shrink-0\">
                                        <i class=\"bx bx-x-circle rounded\"></i>
                                        <img src=\"../assets/img/icons/unicons/cc-primary.png\" alt=\"Commandes non payées\" class=\"rounded\" />
                                    </div>
                                    <div class=\"dropdown\">
                                        <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt1\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                        >
                                            <i class=\"bx bx-dots-vertical-rounded\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"cardOpt1\">
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Voir plus</a>
                                            <a class=\"dropdown-item\" href=\"javascript:void(0);\">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                                <span class=\"fw-semibold d-block mb-1\">Commandes Non Payées</span>
                                <h3 class=\"card-title mb-2\">100</h3>
                                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> +28.14%</small>
                            </div>
                        </div>
                    </div>
                    <!-- </div>
    <div class=\"row\"> -->
                    <div class=\"col-12 mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between flex-sm-row flex-column gap-3\">
                                    <div class=\"d-flex flex-sm-column flex-row align-items-start justify-content-between\">
                                        <div class=\"card-title\">
                                            <h5 class=\"text-nowrap mb-2\">Rapport de profil</h5>
                                            <span class=\"badge bg-label-warning rounded-pill\">Année 2021</span>
                                        </div>
                                        <div class=\"mt-sm-auto\">
                                            <small class=\"text-success text-nowrap fw-semibold\"
                                            ><i class=\"bx bx-chevron-up\"></i> 68.2%</small
                                            >
                                            <h3 class=\"mb-0\">\$84,686k</h3>
                                        </div>
                                    </div>
                                    <div id=\"profileReportChart\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <!-- Order Statistics -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 order-0 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-header d-flex align-items-center justify-content-between pb-0\">
                        <div class=\"card-title mb-0\">
                            <h5 class=\"m-0 me-2\">Statistiques des commandes</h5>
                            <small class=\"text-muted\">42.82k Total Ventes</small>
                        </div>
                        <div class=\"dropdown\">
                            <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"orederStatistics\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"orederStatistics\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Sélectionner tout</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Actualiser</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Partager</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <div class=\"d-flex flex-column align-items-center gap-1\">
                                <h2 class=\"mb-2\">500</h2>
                                <span>Total Commandes</span>
                            </div>
                            <div id=\"orderStatisticsChart\"></div>
                        </div>
                        <ul class=\"p-0 m-0\">
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                            <span class=\"avatar-initial rounded bg-label-primary\"
                            ><i class=\"bx bx-mobile-alt\"></i
                                ></span>
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">Chemise</h6>
                                        <small class=\"text-muted\">Chemise en coton, Lin</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">82.5k</small>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <span class=\"avatar-initial rounded bg-label-success\"><i class=\"bx bx-closet\"></i></span>
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">Pantalon</h6>
                                        <small class=\"text-muted\">Pantalon en laine, Chino</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">23.8k</small>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <span class=\"avatar-initial rounded bg-label-info\"><i class=\"bx bx-home-alt\"></i></span>
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">Costume</h6>
                                        <small class=\"text-muted\">Costume en laine, Soie</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">849k</small>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                            <span class=\"avatar-initial rounded bg-label-secondary\"
                            ><i class=\"bx bx-football\"></i
                                ></span>
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">Veste</h6>
                                        <small class=\"text-muted\">Veste en cuir, Blazer</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">99</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Order Statistics -->

            <!-- Expense Overview -->
            <div class=\"col-md-6 col-lg-4 order-1 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-header\">
                        <ul class=\"nav nav-pills\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <button
                                        type=\"button\"
                                        class=\"nav-link active\"
                                        role=\"tab\"
                                        data-bs-toggle=\"tab\"
                                        data-bs-target=\"#navs-tabs-line-card-income\"
                                        aria-controls=\"navs-tabs-line-card-income\"
                                        aria-selected=\"true\"
                                >
                                    Revenus
                                </button>
                            </li>
                            <li class=\"nav-item\">
                                <button type=\"button\" class=\"nav-link\" role=\"tab\">Dépenses</button>
                            </li>
                            <li class=\"nav-item\">
                                <button type=\"button\" class=\"nav-link\" role=\"tab\">Bénéfices</button>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body px-0\">
                        <div class=\"tab-content p-0\">
                            <div class=\"tab-pane fade show active\" id=\"navs-tabs-line-card-income\" role=\"tabpanel\">
                                <div class=\"d-flex p-4 pt-3\">
                                    <div class=\"avatar flex-shrink-0 me-3\">
                                        <img src=\"../assets/img/icons/unicons/wallet.png\" alt=\"Solde total\" />
                                    </div>
                                    <div>
                                        <small class=\"text-muted d-block\">Solde total</small>
                                        <div class=\"d-flex align-items-center\">
                                            <h6 class=\"mb-0 me-1\">12 000 €</h6>
                                            <small class=\"text-success fw-semibold\">
                                                <i class=\"bx bx-chevron-up\"></i>
                                                42.9%
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"incomeChart\"></div>
                                <div class=\"d-flex justify-content-center pt-4 gap-2\">
                                    <div class=\"flex-shrink-0\">
                                        <div id=\"expensesOfWeek\"></div>
                                    </div>
                                    <div>
                                        <p class=\"mb-n1 mt-1\">Dépenses de la semaine</p>
                                        <small class=\"text-muted\">39€ de moins que la semaine dernière</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Expense Overview -->

            <!-- Transactions -->
            <div class=\"col-md-6 col-lg-4 order-2 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-header d-flex align-items-center justify-content-between\">
                        <h5 class=\"card-title m-0 me-2\">Transactions</h5>
                        <div class=\"dropdown\">
                            <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"transactionID\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"transactionID\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Derniers 28 jours</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Mois dernier</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Année dernière</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <ul class=\"p-0 m-0\">
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/paypal.png\" alt=\"Paiement Paypal\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Paypal</small>
                                        <h6 class=\"mb-0\">Envoyer de l'argent</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">+82.6</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/wallet.png\" alt=\"Paiement porte-monnaie\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Porte-monnaie</small>
                                        <h6 class=\"mb-0\">Mac'D</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">+270.69</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/chart.png\" alt=\"Transfert d'argent\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Transfert</small>
                                        <h6 class=\"mb-0\">Remboursement</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">+637.91</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/cc-success.png\" alt=\"Paiement carte bancaire\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Carte bancaire</small>
                                        <h6 class=\"mb-0\">Commande de nourriture</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">-838.71</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/wallet.png\" alt=\"Paiement porte-monnaie\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Porte-monnaie</small>
                                        <h6 class=\"mb-0\">Starbucks</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">+203.33</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"d-flex\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"../assets/img/icons/unicons/cc-warning.png\" alt=\"Paiement carte bancaire\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">Mastercard</small>
                                        <h6 class=\"mb-0\">Commande de nourriture</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">-92.45</h6>
                                        <span class=\"text-muted\">USD</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->
        </div>
    </div>
    <!-- / Content -->
{% endblock %}", "home_page/dashboard.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\home_page\\dashboard.html.twig");
    }
}
