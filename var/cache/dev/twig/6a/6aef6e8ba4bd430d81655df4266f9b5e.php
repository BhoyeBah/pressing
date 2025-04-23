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

/* security/login.html.twig */
class __TwigTemplate_9ba786a7e5c3c5d7b19f881b5ad2d992 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<html
        lang=\"en\"
        class=\"light-style customizer-hide\"
        dir=\"ltr\"
        data-theme=\"theme-default\"
        data-assets-path=\"../assets/\"
        data-template=\"vertical-menu-template-free\"
>
<head>
    <meta charset=\"utf-8\"/>
    <meta
            name=\"viewport\"
            content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"
    />

    <title>Login Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name=\"description\" content=\"\"/>

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\"/>

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"/>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin/>
    <link
            href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
            rel=\"stylesheet\"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\"/>

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\"
          class=\"template-customizer-theme-css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        yield "\"/>

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\"/>

    <!-- Page CSS -->
    <!-- Page -->
    <link rel=\"stylesheet\" href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\"/>
    <!-- Helpers -->
    <script src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/config.js"), "html", null, true);
        yield "\"></script>
</head>

<body>
<!-- Content -->

<div class=\"container-xxl\">
    <div class=\"authentication-wrapper authentication-basic container-p-y\">
        <div class=\"authentication-inner\">
            <!-- Register -->
            <div class=\"card\">
                <div class=\"card-body\">
                    <!-- Logo -->
                    <div class=\"app-brand justify-content-center\">
                        <a href=\"index.html\" class=\"app-brand-link gap-2\">
                  <span class=\"app-brand-logo demo\">
                    <svg
                            width=\"25\"
                            viewBox=\"0 0 25 42\"
                            version=\"1.1\"
                            xmlns=\"http://www.w3.org/2000/svg\"
                            xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                    >
                      <defs>
                        <path
                                d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\"
                                id=\"path-1\"
                        ></path>
                        <path
                                d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\"
                                id=\"path-3\"
                        ></path>
                        <path
                                d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\"
                                id=\"path-4\"
                        ></path>
                        <path
                                d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\"
                                id=\"path-5\"
                        ></path>
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
                                    transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \"
                            >
                              <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                              <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                            <span class=\"app-brand-text demo text-body fw-bolder\">Sneat</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class=\"mb-2\">Welcome to Sneat! 👋</h4>
                    <p class=\"mb-4\">Veuillez vous connecter à votre compte et commencer l'aventure.</p>

                    <form id=\"formAuthentication\" class=\"mb-3\" action=\"\" method=\"POST\">
                        ";
        // line 131
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 131, $this->source); })())) {
            // line 132
            yield "                            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 132, $this->source); })()), "messageKey", [], "any", false, false, false, 132), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 132, $this->source); })()), "messageData", [], "any", false, false, false, 132), "security"), "html", null, true);
            yield "</div>
                        ";
        }
        // line 134
        yield "                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label\">Email</label>
                            <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\"
                                    value=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 137, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Entrer votre email\" autofocus autocomplete=\"email\" required/>
                        </div>
                        <div class=\"mb-3 form-password-toggle\">
                            <div class=\"d-flex justify-content-between\">
                                <label class=\"form-label\" for=\"password\">Mot de passe</label>
                                <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">
                                    <small>Mot de passe oublié ?</small>
                                </a>
                            </div>

                            <div class=\"input-group input-group-merge\">
                                <input
                                        type=\"password\"
                                        id=\"password\"
                                        class=\"form-control\"
                                        name=\"_password\"
                                        placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\"
                                        aria-describedby=\"password\"
                                        autocomplete=\"current-password\"
                                        required
                                />

                                <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
                        >
                        <div class=\"mb-3\">
                            <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\" class=\"form-check-input\"/>
                                <label class=\"form-check-label\" for=\"_remember_me\"> Se souvenir de moi </label>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <button class=\"btn btn-primary d-grid w-100\" type=\"submit\">Se connecter</button>
                        </div>
                    </form>

                    <p class=\"text-center\">
                        <span>Vous êtes nouveau sur la plateforme?</span>
                        <a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_membre");
        yield "\">
                            <span>Créer un compte</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<!-- / Content -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src=\"https://buttons.github.io/buttons.js\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  311 => 205,  302 => 199,  297 => 197,  293 => 196,  289 => 195,  285 => 194,  266 => 178,  248 => 163,  224 => 142,  216 => 137,  211 => 134,  205 => 132,  203 => 131,  122 => 53,  115 => 49,  110 => 47,  103 => 43,  97 => 40,  92 => 38,  88 => 37,  82 => 34,  68 => 23,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html
        lang=\"en\"
        class=\"light-style customizer-hide\"
        dir=\"ltr\"
        data-theme=\"theme-default\"
        data-assets-path=\"../assets/\"
        data-template=\"vertical-menu-template-free\"
>
<head>
    <meta charset=\"utf-8\"/>
    <meta
            name=\"viewport\"
            content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"
    />

    <title>Login Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name=\"description\" content=\"\"/>

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/favicon/favicon.ico') }}\"/>

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"/>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin/>
    <link
            href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
            rel=\"stylesheet\"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\"/>

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/theme-default.css') }}\"
          class=\"template-customizer-theme-css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\"/>

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\"/>

    <!-- Page CSS -->
    <!-- Page -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/pages/page-auth.css') }}\"/>
    <!-- Helpers -->
    <script src=\"{{ asset('assets/vendor/js/helpers.js') }}\"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=\"{{ asset('assets/js/config.js') }}\"></script>
</head>

<body>
<!-- Content -->

<div class=\"container-xxl\">
    <div class=\"authentication-wrapper authentication-basic container-p-y\">
        <div class=\"authentication-inner\">
            <!-- Register -->
            <div class=\"card\">
                <div class=\"card-body\">
                    <!-- Logo -->
                    <div class=\"app-brand justify-content-center\">
                        <a href=\"index.html\" class=\"app-brand-link gap-2\">
                  <span class=\"app-brand-logo demo\">
                    <svg
                            width=\"25\"
                            viewBox=\"0 0 25 42\"
                            version=\"1.1\"
                            xmlns=\"http://www.w3.org/2000/svg\"
                            xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                    >
                      <defs>
                        <path
                                d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\"
                                id=\"path-1\"
                        ></path>
                        <path
                                d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\"
                                id=\"path-3\"
                        ></path>
                        <path
                                d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\"
                                id=\"path-4\"
                        ></path>
                        <path
                                d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\"
                                id=\"path-5\"
                        ></path>
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
                                    transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \"
                            >
                              <use fill=\"#696cff\" xlink:href=\"#path-5\"></use>
                              <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                            <span class=\"app-brand-text demo text-body fw-bolder\">Sneat</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class=\"mb-2\">Welcome to Sneat! 👋</h4>
                    <p class=\"mb-4\">Veuillez vous connecter à votre compte et commencer l'aventure.</p>

                    <form id=\"formAuthentication\" class=\"mb-3\" action=\"\" method=\"POST\">
                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}
                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label\">Email</label>
                            <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\"
                                    value=\"{{ last_username }}\" placeholder=\"Entrer votre email\" autofocus autocomplete=\"email\" required/>
                        </div>
                        <div class=\"mb-3 form-password-toggle\">
                            <div class=\"d-flex justify-content-between\">
                                <label class=\"form-label\" for=\"password\">Mot de passe</label>
                                <a href=\"{{ path('app_forgot_password_request') }}\">
                                    <small>Mot de passe oublié ?</small>
                                </a>
                            </div>

                            <div class=\"input-group input-group-merge\">
                                <input
                                        type=\"password\"
                                        id=\"password\"
                                        class=\"form-control\"
                                        name=\"_password\"
                                        placeholder=\"&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;\"
                                        aria-describedby=\"password\"
                                        autocomplete=\"current-password\"
                                        required
                                />

                                <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"{{ csrf_token('authenticate') }}\"
                        >
                        <div class=\"mb-3\">
                            <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\" class=\"form-check-input\"/>
                                <label class=\"form-check-label\" for=\"_remember_me\"> Se souvenir de moi </label>
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <button class=\"btn btn-primary d-grid w-100\" type=\"submit\">Se connecter</button>
                        </div>
                    </form>

                    <p class=\"text-center\">
                        <span>Vous êtes nouveau sur la plateforme?</span>
                        <a href=\"{{ path('app_register_membre') }}\">
                            <span>Créer un compte</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<!-- / Content -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src=\"{{ asset('assets/vendor/libs/jquery/jquery.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/libs/popper/popper.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>

<script src=\"{{ asset('assets/vendor/js/menu.js') }}\"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src=\"{{ asset('assets/js/main.js') }}\"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src=\"https://buttons.github.io/buttons.js\"></script>
</body>
</html>
", "security/login.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\security\\login.html.twig");
    }
}
