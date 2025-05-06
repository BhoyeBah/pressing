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
            'new_facture' => [$this, 'block_new_facture'],
            'gestion' => [$this, 'block_gestion'],
            'facture_impaye' => [$this, 'block_facture_impaye'],
            'facture_paye' => [$this, 'block_facture_paye'],
            'all_facture' => [$this, 'block_all_facture'],
            'config' => [$this, 'block_config'],
            'client' => [$this, 'block_client'],
            'articles' => [$this, 'block_articles'],
            'employes' => [$this, 'block_employes'],
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

    <title>Tableau de board</title>

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

                        <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">ROYAL-PRESSING</span>
                    </a>

                    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none\">
                        <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
                    </a>
                </div>

                <div class=\"menu-inner-shadow\"></div>

                <ul class=\"menu-inner py-1\">
                    <!-- Dashboard -->
                    <li class=\"menu-item ";
        // line 80
        yield from $this->unwrap()->yieldBlock('dashboard', $context, $blocks);
        yield "\">
                        <a href=\"/\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                            <div data-i18n=\"Analytics\">Tableau de board</div>
                        </a>
                    </li>

                    ";
        // line 87
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 88
            yield "
                    <li class=\"menu-item ";
            // line 89
            yield from $this->unwrap()->yieldBlock('new_facture', $context, $blocks);
            yield "\">
                        <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
            yield "\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                            <div data-i18n=\"Analytics\">Nouvelle facture</div>
                        </a>
                    </li>

                    <!-- Layouts -->

                    <li class=\"menu-item ";
            // line 98
            yield from $this->unwrap()->yieldBlock('gestion', $context, $blocks);
            yield "\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bxs-printer\"></i>
                            <div data-i18n=\"Layouts\">Gestion des factures</div>
                        </a>

                        <ul class=\"menu-sub\">
                            <li class=\"menu-item ";
            // line 105
            yield from $this->unwrap()->yieldBlock('facture_impaye', $context, $blocks);
            yield "\">
                                <a href=\"";
            // line 106
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_impaye");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Container\">Factures non payées</div>
                                </a>
                            </li>
                            <li class=\"menu-item ";
            // line 110
            yield from $this->unwrap()->yieldBlock('facture_paye', $context, $blocks);
            yield "\">
                                <a href=\"";
            // line 111
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_paye");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without navbar\">Factures payées</div>
                                </a>
                            </li>
                            <li class=\"menu-item ";
            // line 115
            yield from $this->unwrap()->yieldBlock('all_facture', $context, $blocks);
            yield "\">
                                <a href=\"";
            // line 116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Container\">Listes des factures</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"menu-item ";
            // line 122
            yield from $this->unwrap()->yieldBlock('config', $context, $blocks);
            yield "\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bx-cog\"></i>
                            <div data-i18n=\"Layouts\">Configuration</div>
                        </a>

                        <ul class=\"menu-sub\">
                            <li class=\"menu-item ";
            // line 129
            yield from $this->unwrap()->yieldBlock('client', $context, $blocks);
            yield "\">
                                <a href=\"";
            // line 130
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Clients</div>
                                </a>
                            </li>
                            <li class=\"menu-item ";
            // line 134
            yield from $this->unwrap()->yieldBlock('articles', $context, $blocks);
            yield "\">
                                <a href=\"";
            // line 135
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Articles</div>
                                </a>
                            </li>
                            <li class=\"menu-item ";
            // line 139
            yield from $this->unwrap()->yieldBlock('employes', $context, $blocks);
            yield "\">
                                <a href=\"";
            // line 140
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Employés</div>
                                </a>
                            </li>
                            ";
        }
        // line 145
        yield "                        </ul>
                    </li>

                    ";
        // line 148
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 149
            yield "                    <li class=\"menu-item\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bx-layout\"></i>
                            <div data-i18n=\"Layouts\">Administration</div>
                        </a>

                        <ul class=\"menu-sub\">

                            <li class=\"menu-item\">
                                <a href=\"";
            // line 158
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Container\">Utilisateurs</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"";
            // line 163
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pressing_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Pressing</div>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"";
            // line 168
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_index");
            yield "\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Membres</div>
                                </a>
                            </li>
                            ";
        }
        // line 173
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
        // line 195
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

                            ";
        // line 211
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "user", [], "any", false, false, false, 211)) {
            // line 212
            yield "                            <!-- User -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\"
                                    data-bs-toggle=\"dropdown\">
                                    <div class=\"avatar avatar-online\">
                                        <img src=\"";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.jpg"), "html", null, true);
            yield "\" alt class=\"w-px-40 h-auto rounded-circle\" />
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar avatar-online\">
                                                        <img src=\"";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.jpg"), "html", null, true);
            yield "\" alt
                                                            class=\"w-px-40 h-auto rounded-circle\" />
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <span class=\"fw-semibold d-block\">";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231), "nom", [], "any", false, false, false, 231), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231), "prenom", [], "any", false, false, false, 231), "html", null, true);
            yield "</span>
                                                    <small class=\"text-muted\">
                                                        ";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 233, $this->source); })()), "user", [], "any", false, false, false, 233), "roles", [], "any", false, false, false, 233));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 234
                yield "                                                        ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 235
                    yield "                                                        Administrateur
                                                        ";
                } elseif ((                // line 236
$context["role"] == "ROLE_USER")) {
                    // line 237
                    yield "                                                        Utilisateur
                                                        ";
                }
                // line 239
                yield "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            yield "                                                    </small>
                                                </div>

                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"dropdown-divider\"></div>
                                    </li>
                                    <!-- <li>
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
                                    </li> -->
                                    <li>
                                        <div class=\"dropdown-divider\"></div>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 265
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
        // line 275
        yield "                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <!-- Content -->
                <div class=\"content-wrapper\">
                    <!-- Content -->

                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        ";
        // line 286
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 289
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
                                <a href=\"https://dymotechnologie.com\" target=\"_blank\" class=\"footer-link fw-bolder\">DymoTechnologie</a>
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
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src=\"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Page JS -->
    <script src=\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboards-analytics.js"), "html", null, true);
        yield "\"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>

    <script src=\"//cdn.datatables.net/2.1.0/js/dataTables.min.js\"></script>
    <script src=\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/javascript.js"), "html", null, true);
        yield "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 80
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

    // line 89
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

    // line 98
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

    // line 105
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

    // line 110
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

    // line 115
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

    // line 122
    public function block_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "config"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "config"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 129
    public function block_client($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 134
    public function block_articles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "articles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "articles"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 139
    public function block_employes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employes"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 286
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 287
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
        return array (  778 => 287,  768 => 286,  749 => 139,  730 => 134,  711 => 129,  692 => 122,  673 => 115,  654 => 110,  635 => 105,  616 => 98,  597 => 89,  578 => 80,  562 => 345,  551 => 337,  545 => 334,  539 => 331,  532 => 327,  527 => 325,  523 => 324,  519 => 323,  515 => 322,  480 => 289,  478 => 286,  465 => 275,  452 => 265,  425 => 240,  419 => 239,  415 => 237,  413 => 236,  410 => 235,  407 => 234,  403 => 233,  396 => 231,  388 => 226,  376 => 217,  369 => 212,  367 => 211,  348 => 195,  324 => 173,  316 => 168,  308 => 163,  300 => 158,  289 => 149,  287 => 148,  282 => 145,  274 => 140,  270 => 139,  263 => 135,  259 => 134,  252 => 130,  248 => 129,  238 => 122,  229 => 116,  225 => 115,  218 => 111,  214 => 110,  207 => 106,  203 => 105,  193 => 98,  182 => 90,  178 => 89,  175 => 88,  173 => 87,  163 => 80,  132 => 52,  125 => 48,  117 => 43,  112 => 41,  106 => 38,  101 => 36,  97 => 35,  91 => 32,  76 => 20,  55 => 1,);
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

    <title>Tableau de board</title>

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

                        <span class=\"app-brand-text demo menu-text fw-bolder ms-2\">ROYAL-PRESSING</span>
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

                    {% if is_granted('ROLE_USER') %}

                    <li class=\"menu-item {% block new_facture %}{% endblock %}\">
                        <a href=\"{{ path('app_commande_new') }}\" class=\"menu-link\">
                            <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                            <div data-i18n=\"Analytics\">Nouvelle facture</div>
                        </a>
                    </li>

                    <!-- Layouts -->

                    <li class=\"menu-item {% block gestion %}{% endblock %}\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bxs-printer\"></i>
                            <div data-i18n=\"Layouts\">Gestion des factures</div>
                        </a>

                        <ul class=\"menu-sub\">
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
                    <li class=\"menu-item {% block config %}{% endblock %}\">
                        <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                            <i class=\"menu-icon tf-icons bx bx-cog\"></i>
                            <div data-i18n=\"Layouts\">Configuration</div>
                        </a>

                        <ul class=\"menu-sub\">
                            <li class=\"menu-item {% block client %}{% endblock %}\">
                                <a href=\"{{ path('app_client_index') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Clients</div>
                                </a>
                            </li>
                            <li class=\"menu-item {% block articles %}{% endblock %}\">
                                <a href=\"{{ path('app_articles_index') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Articles</div>
                                </a>
                            </li>
                            <li class=\"menu-item {% block employes %}{% endblock %}\">
                                <a href=\"{{ path('app_employe_index') }}\" class=\"menu-link\">
                                    <div data-i18n=\"Without menu\">Employés</div>
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

                            {% if app.user %}
                            <!-- User -->
                            <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                                <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\"
                                    data-bs-toggle=\"dropdown\">
                                    <div class=\"avatar avatar-online\">
                                        <img src=\"{{ asset('assets/img/logo.jpg') }}\" alt class=\"w-px-40 h-auto rounded-circle\" />
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"#\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar avatar-online\">
                                                        <img src=\"{{ asset('assets/img/logo.jpg') }}\" alt
                                                            class=\"w-px-40 h-auto rounded-circle\" />
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <span class=\"fw-semibold d-block\">{{ app.user.nom }} {{ app.user.prenom }}</span>
                                                    <small class=\"text-muted\">
                                                        {% for role in app.user.roles %}
                                                        {% if role == 'ROLE_ADMIN' %}
                                                        Administrateur
                                                        {% elseif role == 'ROLE_USER' %}
                                                        Utilisateur
                                                        {% endif %}
                                                        {% endfor %}
                                                    </small>
                                                </div>

                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"dropdown-divider\"></div>
                                    </li>
                                    <!-- <li>
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
                                    </li> -->
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
                                <a href=\"https://dymotechnologie.com\" target=\"_blank\" class=\"footer-link fw-bolder\">DymoTechnologie</a>
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

</html>", "base.html.twig", "C:\\xampp\\htdocs\\pressing\\templates\\base.html.twig");
    }
}
