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

/* base.html.twig */
class __TwigTemplate_351fc8ba687f2d5ffa06af311e0470fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'dashboard' => [$this, 'block_dashboard'],
            'gestion' => [$this, 'block_gestion'],
            'new_facture' => [$this, 'block_new_facture'],
            'facture_impaye' => [$this, 'block_facture_impaye'],
            'facture_paye' => [$this, 'block_facture_paye'],
            'all_facture' => [$this, 'block_all_facture'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html
    lang=\"en\"
    class=\"light-style layout-menu-fixed\"
    dir=\"ltr\"
    data-theme=\"theme-default\"
    data-assets-path=\"assets/\"
    data-template=\"vertical-menu-template-free\">

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\"
        content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
        href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
        rel=\"stylesheet\" />

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\"
        class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        yield "\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\" />

    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        yield "\" />

    <!-- Page CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <!-- Helpers -->
    <script src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/config.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css\">
    <script src=\"https://cdn.datatables.net/2.1.3/js/dataTables.js\"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Menu -->

            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
                <div class=\"app-brand demo\">
                    <a href=\"/\" class=\"app-brand-link\">
                        <span class=\"app-brand-logo demo\">
                            <svg
                                width=\"25\"
                                viewBox=\"0 0 25 42\"
                                version=\"1.1\"
                                xmlns=\"http://www.w3.org/2000/svg\"
                                xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                <defs>
                                    <path
                                        d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\"
                                        id=\"path-1\"></path>
                                    <path
                                        d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\"
                                        id=\"path-3\"></path>
                                    <path
                                        d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\"
                                        id=\"path-4\"></path>
                                    <path
                                        d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\"
                                        id=\"path-5\"></path>
                                </defs>
                                <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
                                        <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
                                            <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
                                                <mask id=\"mask-2\" fill=\"white\">
                                                    <use xlink:href=\"#path-1\"></use>
                                                </mask>
                                                <use fill=\"#696cff\" xlink:href=\"#path-1\"></use>
                                                <g id=\"Path-3\" mask=\"url(#mask-2)\">
                                                    <use fill=\"#696cff\" xlink:href=\"#path-3\"></use>
                                                    <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
                                                </g>
                                                <g id=\"Path-4\" mask=\"url(#mask-2)\">
                                                    <use fill=\"#696cff\" xlink:href=\"#path-4\"></use>
                                                    <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
                                                </g>
                                            </g>
                                            <g
                                                id=\"Triangle\"
                                                transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \">
                                                <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                                                <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Sneat</span>
                    </a>

                    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
                        <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
                    </a>
                </div>

                <div class=\"menu-inner-shadow\"></div>

                <ul class=\"menu-inner py-1\">
                    <!-- Dashboard -->
                    <li class=\"menu-item ";
        // line 128
        yield from $this->unwrap()->yieldBlock('dashboard', $context, $blocks);
        yield "\">
                        <a href=\"/\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                            <div data-i18n=\"Analytics\">Tableau de board</div>
                        </a>
                    </li>

                    <!-- Layouts -->

                    <li class=\"menu-item ";
        // line 137
        yield from $this->unwrap()->yieldBlock('gestion', $context, $blocks);
        yield "\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bxs-printer\"></i>
                            <div data-i18n=\"Layouts\">Gestion des factures</div>
                        </a>

                        <ul class=\"menu-sub\">
                            ";
        // line 144
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 145
            yield "                            <li class=\"menu-item ";
            yield from $this->unwrap()->yieldBlock('new_facture', $context, $blocks);
            yield "\">
                                <a href=\"";
            // line 146
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Nouvel facture</div>
                                </a>
                            </li>
                            <li class=\"menu-item ";
            // line 150
            yield from $this->unwrap()->yieldBlock('facture_impaye', $context, $blocks);
            yield "\">
                                <a href=\"";
            // line 151
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_impaye");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Container\">Factures non payées</div>
                                </a>
                            </li>
                            <li class=\"menu-item ";
            // line 155
            yield from $this->unwrap()->yieldBlock('facture_paye', $context, $blocks);
            yield "\">
                                <a href=\"";
            // line 156
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_paye");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without navbar\">Factures payées</div>
                                </a>
                            </li>
                            <li class=\"menu-item ";
            // line 160
            yield from $this->unwrap()->yieldBlock('all_facture', $context, $blocks);
            yield "\">
                                <a href=\"";
            // line 161
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Container\">Listes des factures</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bx-layout\"></i>
                            <div data-i18n=\"Layouts\">Configuration</div>
                        </a>

                        <ul class=\"menu-sub\">
                            <li class=\"menu-item\">
                                <a href=\"";
            // line 175
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Clients</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"";
            // line 180
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Articles</div>
                                </a>
                            </li>
                            ";
        }
        // line 185
        yield "                        </ul>
                    </li>

                    ";
        // line 188
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 189
            yield "                    <li class=\"menu-item\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bx-layout\"></i>
                            <div data-i18n=\"Layouts\">Administration</div>
                        </a>

                        <ul class=\"menu-sub\">

                            <li class=\"menu-item\">
                                <a href=\"";
            // line 198
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Container\">Utilisateurs</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"";
            // line 203
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pressing_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Pressing</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"";
            // line 208
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Membres</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"";
            // line 213
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Employés</div>
                                </a>
                            </li>
                            ";
        }
        // line 218
        yield "
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->

                <nav
                    class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\"
                    id=\"layout-navbar\">
                    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
                        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                            <i class=\"bx bx-menu bx-sm\"></i>
                        </a>
                    </div>

                    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                        <!-- Search -->
                        <form method=\"get\" action=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche_dashboard");
        yield "\" class=\"navbar-nav align-items-center\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    name=\"query\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher une facture ou un client...\"
                                    aria-label=\"Search...\" />
                            </div>
                        </form>
                        <!-- /Search -->

                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- Place this tag where you want the button to render. -->
                            <li class=\"nav-item lh-1 me-3\">
                                <a
                                    class=\"github-button\"
                                    href=\"https://github.com/themeselection/sneat-html-admin-template-free\"
                                    data-icon=\"octicon-star\"
                                    data-size=\"large\"
                                    data-show-count=\"true\"
                                    aria-label=\"Star themeselection/sneat-html-admin-template-free on GitHub\">Star</a>
                            </li>
                            ";
        // line 264
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 264, $this->source); })()), "user", [], "any", false, false, false, 264)) {
            // line 265
            yield "                            <!-- User -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\"
                                    data-bs-toggle=\"dropdown\">
                                    <div class=\"avatar avatar-online\">
                                        <img src=\"assets/img/avatars/1.png\" alt class=\"w-px-40 h-auto rounded-circle\" />
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar avatar-online\">
                                                        <img src=\"assets/img/avatars/1.png\" alt
                                                            class=\"w-px-40 h-auto rounded-circle\" />
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <span class=\"fw-semibold d-block\">";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "user", [], "any", false, false, false, 284), "nom", [], "any", false, false, false, 284), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "user", [], "any", false, false, false, 284), "prenom", [], "any", false, false, false, 284), "html", null, true);
            yield "</span>
                                                    <small class=\"text-muted\">";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 285, $this->source); })()), "user", [], "any", false, false, false, 285), "roles", [], "any", false, false, false, 285), ", "), "html", null, true);
            yield "</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"dropdown-divider\"></div>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"bx bx-user me-2\"></i>
                                            <span class=\"align-middle\">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"bx bx-cog me-2\"></i>
                                            <span class=\"align-middle\">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"dropdown-divider\"></div>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 309
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                            <i class=\"bx bx-power-off me-2\"></i>
                                            <span class=\"align-middle\">Se déconnecter</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                        ";
        }
        // line 319
        yield "                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <!-- Content -->
                <div class=\"content-wrapper\">
                    <!-- Content -->

                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        ";
        // line 330
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 333
        yield "                    </div>

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
                            <div class=\"mb-2 mb-md-0\">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href=\"https://themeselection.com\" target=\"_blank\" class=\"footer-link fw-bolder\">ThemeSelection</a>
                            </div>
                            <div>
                                <a href=\"https://themeselection.com/license/\" class=\"footer-link me-4\" target=\"_blank\">License</a>
                                <a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link me-4\">More
                                    Themes</a>

                                <a
                                    href=\"https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/\"
                                    target=\"_blank\"
                                    class=\"footer-link me-4\">Documentation</a>

                                <a
                                    href=\"https://github.com/themeselection/sneat-html-admin-template-free/issues\"
                                    target=\"_blank\"
                                    class=\"footer-link me-4\">Support</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class=\"layout-overlay layout-menu-toggle\"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src=\"";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src=\"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Page JS -->
    <script src=\"";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboards-analytics.js"), "html", null, true);
        yield "\"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>

    <script src=\"//cdn.datatables.net/2.1.0/js/dataTables.min.js\"></script>
    <script src=\"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/javascript.js"), "html", null, true);
        yield "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 128
    public function block_dashboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 137
    public function block_gestion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "gestion"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "gestion"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 145
    public function block_new_facture($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_facture"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_facture"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 150
    public function block_facture_impaye($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "facture_impaye"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "facture_impaye"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 155
    public function block_facture_paye($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "facture_paye"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "facture_paye"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 160
    public function block_all_facture($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_facture"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_facture"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 330
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 331
        yield "
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
        return "base.html.twig";
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
        return array (  724 => 331,  714 => 330,  695 => 160,  676 => 155,  657 => 150,  638 => 145,  619 => 137,  600 => 128,  584 => 404,  573 => 396,  567 => 393,  561 => 390,  554 => 386,  549 => 384,  545 => 383,  541 => 382,  537 => 381,  487 => 333,  485 => 330,  472 => 319,  459 => 309,  432 => 285,  426 => 284,  405 => 265,  403 => 264,  376 => 240,  352 => 218,  344 => 213,  336 => 208,  328 => 203,  320 => 198,  309 => 189,  307 => 188,  302 => 185,  294 => 180,  286 => 175,  269 => 161,  265 => 160,  258 => 156,  254 => 155,  247 => 151,  243 => 150,  236 => 146,  231 => 145,  229 => 144,  219 => 137,  207 => 128,  128 => 52,  121 => 48,  113 => 43,  108 => 41,  102 => 38,  97 => 36,  93 => 35,  87 => 32,  72 => 20,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html
    lang=\"en\"
    class=\"light-style layout-menu-fixed\"
    dir=\"ltr\"
    data-theme=\"theme-default\"
    data-assets-path=\"assets/\"
    data-template=\"vertical-menu-template-free\">

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\"
        content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name=\"description\" content=\"\" />

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/favicon/favicon.ico') }}\" />

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link
        href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
        rel=\"stylesheet\" />

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\" />

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/theme-default.css') }}\"
        class=\"template-customizer-theme-css\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\" />

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />

    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}\" />

    <!-- Page CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <!-- Helpers -->
    <script src=\"{{ asset('assets/vendor/js/helpers.js') }}\"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=\"{{ asset('assets/js/config.js') }}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css\">
    <script src=\"https://cdn.datatables.net/2.1.3/js/dataTables.js\"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Menu -->

            <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
                <div class=\"app-brand demo\">
                    <a href=\"/\" class=\"app-brand-link\">
                        <span class=\"app-brand-logo demo\">
                            <svg
                                width=\"25\"
                                viewBox=\"0 0 25 42\"
                                version=\"1.1\"
                                xmlns=\"http://www.w3.org/2000/svg\"
                                xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                <defs>
                                    <path
                                        d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\"
                                        id=\"path-1\"></path>
                                    <path
                                        d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\"
                                        id=\"path-3\"></path>
                                    <path
                                        d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\"
                                        id=\"path-4\"></path>
                                    <path
                                        d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\"
                                        id=\"path-5\"></path>
                                </defs>
                                <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
                                        <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
                                            <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
                                                <mask id=\"mask-2\" fill=\"white\">
                                                    <use xlink:href=\"#path-1\"></use>
                                                </mask>
                                                <use fill=\"#696cff\" xlink:href=\"#path-1\"></use>
                                                <g id=\"Path-3\" mask=\"url(#mask-2)\">
                                                    <use fill=\"#696cff\" xlink:href=\"#path-3\"></use>
                                                    <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
                                                </g>
                                                <g id=\"Path-4\" mask=\"url(#mask-2)\">
                                                    <use fill=\"#696cff\" xlink:href=\"#path-4\"></use>
                                                    <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
                                                </g>
                                            </g>
                                            <g
                                                id=\"Triangle\"
                                                transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \">
                                                <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                                                <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">Sneat</span>
                    </a>

                    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
                        <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
                    </a>
                </div>

                <div class=\"menu-inner-shadow\"></div>

                <ul class=\"menu-inner py-1\">
                    <!-- Dashboard -->
                    <li class=\"menu-item {% block dashboard %}{% endblock %}\">
                        <a href=\"/\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                            <div data-i18n=\"Analytics\">Tableau de board</div>
                        </a>
                    </li>

                    <!-- Layouts -->

                    <li class=\"menu-item {% block gestion %}{% endblock %}\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bxs-printer\"></i>
                            <div data-i18n=\"Layouts\">Gestion des factures</div>
                        </a>

                        <ul class=\"menu-sub\">
                            {% if is_granted('ROLE_USER') %}
                            <li class=\"menu-item {% block new_facture %}{% endblock %}\">
                                <a href=\"{{ path('app_commande_new') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Nouvel facture</div>
                                </a>
                            </li>
                            <li class=\"menu-item {% block facture_impaye %}{% endblock %}\">
                                <a href=\"{{ path('commande_impaye') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Container\">Factures non payées</div>
                                </a>
                            </li>
                            <li class=\"menu-item {% block facture_paye %}{% endblock %}\">
                                <a href=\"{{ path('commande_paye') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Without navbar\">Factures payées</div>
                                </a>
                            </li>
                            <li class=\"menu-item {% block all_facture %}{% endblock %}\">
                                <a href=\"{{ path('app_commande_index') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Container\">Listes des factures</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"menu-item\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bx-layout\"></i>
                            <div data-i18n=\"Layouts\">Configuration</div>
                        </a>

                        <ul class=\"menu-sub\">
                            <li class=\"menu-item\">
                                <a href=\"{{ path('app_client_index') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Clients</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"{{ path('app_articles_index') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Articles</div>
                                </a>
                            </li>
                            {% endif %}
                        </ul>
                    </li>

                    {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"menu-item\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bx-layout\"></i>
                            <div data-i18n=\"Layouts\">Administration</div>
                        </a>

                        <ul class=\"menu-sub\">

                            <li class=\"menu-item\">
                                <a href=\"{{ path('app_users_index') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Container\">Utilisateurs</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"{{ path('app_pressing_index') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Pressing</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"{{ path('app_membre_index') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Membres</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"{{ path('app_employe_index') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Employés</div>
                                </a>
                            </li>
                            {% endif %}

                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar -->

                <nav
                    class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\"
                    id=\"layout-navbar\">
                    <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
                        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                            <i class=\"bx bx-menu bx-sm\"></i>
                        </a>
                    </div>

                    <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                        <!-- Search -->
                        <form method=\"get\" action=\"{{ path('recherche_dashboard') }}\" class=\"navbar-nav align-items-center\">
                            <div class=\"nav-item d-flex align-items-center\">
                                <i class=\"bx bx-search fs-4 lh-0\"></i>
                                <input
                                    type=\"text\"
                                    name=\"query\"
                                    class=\"form-control border-0 shadow-none\"
                                    placeholder=\"Rechercher une facture ou un client...\"
                                    aria-label=\"Search...\" />
                            </div>
                        </form>
                        <!-- /Search -->

                        <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
                            <!-- Place this tag where you want the button to render. -->
                            <li class=\"nav-item lh-1 me-3\">
                                <a
                                    class=\"github-button\"
                                    href=\"https://github.com/themeselection/sneat-html-admin-template-free\"
                                    data-icon=\"octicon-star\"
                                    data-size=\"large\"
                                    data-show-count=\"true\"
                                    aria-label=\"Star themeselection/sneat-html-admin-template-free on GitHub\">Star</a>
                            </li>
                            {% if app.user %}
                            <!-- User -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\"
                                    data-bs-toggle=\"dropdown\">
                                    <div class=\"avatar avatar-online\">
                                        <img src=\"assets/img/avatars/1.png\" alt class=\"w-px-40 h-auto rounded-circle\" />
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar avatar-online\">
                                                        <img src=\"assets/img/avatars/1.png\" alt
                                                            class=\"w-px-40 h-auto rounded-circle\" />
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <span class=\"fw-semibold d-block\">{{ app.user.nom }} {{ app.user.prenom }}</span>
                                                    <small class=\"text-muted\">{{ app.user.roles |join(', ') }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"dropdown-divider\"></div>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"bx bx-user me-2\"></i>
                                            <span class=\"align-middle\">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <i class=\"bx bx-cog me-2\"></i>
                                            <span class=\"align-middle\">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"dropdown-divider\"></div>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                                            <i class=\"bx bx-power-off me-2\"></i>
                                            <span class=\"align-middle\">Se déconnecter</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                        {% endif %}
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <!-- Content -->
                <div class=\"content-wrapper\">
                    <!-- Content -->

                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        {% block body %}

                        {% endblock %}
                    </div>

                    <!-- Footer -->
                    <footer class=\"content-footer footer bg-footer-theme\">
                        <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
                            <div class=\"mb-2 mb-md-0\">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href=\"https://themeselection.com\" target=\"_blank\" class=\"footer-link fw-bolder\">ThemeSelection</a>
                            </div>
                            <div>
                                <a href=\"https://themeselection.com/license/\" class=\"footer-link me-4\" target=\"_blank\">License</a>
                                <a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link me-4\">More
                                    Themes</a>

                                <a
                                    href=\"https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/\"
                                    target=\"_blank\"
                                    class=\"footer-link me-4\">Documentation</a>

                                <a
                                    href=\"https://github.com/themeselection/sneat-html-admin-template-free/issues\"
                                    target=\"_blank\"
                                    class=\"footer-link me-4\">Support</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class=\"content-backdrop fade\"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class=\"layout-overlay layout-menu-toggle\"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src=\"{{ asset('assets/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>

    <script src=\"{{ asset('assets/vendor/js/menu.js') }}\"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src=\"{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}\"></script>

    <!-- Main JS -->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>

    <!-- Page JS -->
    <script src=\"{{ asset('assets/js/dashboards-analytics.js') }}\"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>

    <script src=\"//cdn.datatables.net/2.1.0/js/dataTables.min.js\"></script>
    <script src=\"{{ asset('assets/js/javascript.js') }}\"></script>

</body>

</html>", "base.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\base.html.twig");
    }
}
