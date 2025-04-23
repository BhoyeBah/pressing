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

/* register_membre/index.html.twig */
class __TwigTemplate_7dd2cce10634a13cf8bda326b808f1f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register_membre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register_membre/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"light-style customizer-hide\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"../assets/\" data-template=\"vertical-menu-template-free\">
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"/>
    <title>Multi-Step Form - Sneat</title>
    <meta name=\"description\" content=\"Multi-step registration form for Sneat Admin Template\"/>

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\"/>

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"/>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin/>
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\"/>

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\"/>

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/core.css"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/theme-default.css"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        yield "\"/>

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\"/>

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\"/>

    <!-- Helpers -->
    <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>

    <!-- Config -->
    <script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/config.js"), "html", null, true);
        yield "\"></script>

    <!-- Custom CSS -->
    <style>
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
        }
        .form-control {
            margin-bottom: 1rem; /* Espace entre les champs de saisie */
        }
        .btn-spacing {
            margin-top: 1rem; /* Espace entre le dernier champ et le bouton Next */
        }
        .btn-disabled {
            opacity: 0.65;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
<div class=\"container-xxl\">
    <div class=\"authentication-wrapper authentication-basic container-p-y\">
        <div class=\"authentication-inner\">
            <!-- Register Card -->
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

                    <h4 class=\"mb-2 text-center\">L'aventure commence ici 🚀</h4>
                    <p class=\"mb-4 text-center\">Rendez la gestion de votre pressing simple et amusante !</p>

                    <!-- Multi-Step Form -->
                    ";
        // line 132
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_start', ["attr" => ["id" => "multi-step-form"]]);
        yield "

                    <!-- Step 1 -->
                    <div class=\"form-step active\" id=\"step-1\">
                        <h5 class=\"section-title\">Information Pressing</h5>
                        ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "pressing", [], "any", false, false, false, 137), "nom", [], "any", false, false, false, 137), 'row', ["attr" => ["class" => "form-control", "id" => "pressing-nom", "placeholder" => "Le nom de votre pressing..."]]);
        yield "
                        ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "pressing", [], "any", false, false, false, 138), "email", [], "any", false, false, false, 138), 'row', ["attr" => ["class" => "form-control", "id" => "pressing-email", "placeholder" => "L'email de votre pressing..."]]);
        yield "
                        ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "pressing", [], "any", false, false, false, 139), "adresse", [], "any", false, false, false, 139), 'row', ["attr" => ["class" => "form-control", "id" => "pressing-adresse", "placeholder" => "L'adresse de votre pressing..."]]);
        yield "
                        ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "pressing", [], "any", false, false, false, 140), "telephone", [], "any", false, false, false, 140), 'row', ["attr" => ["class" => "form-control", "id" => "pressing-telephone", "placeholder" => "Le numéro de votre pressing..."]]);
        yield "
                        <button type=\"button\" class=\"btn btn-primary d-grid w-100 btn-spacing\" id=\"next-button\" disabled>Entrer les informations de l'utilisateur</button>
                    </div>

                    <!-- Step 2 -->
                    <div class=\"form-step\" id=\"step-2\">
                        <h5 class=\"section-title\">Information Utilisateur</h5>
                        ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "membre", [], "any", false, false, false, 147), "nom", [], "any", false, false, false, 147), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom..."]]);
        yield "
                        ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "membre", [], "any", false, false, false, 148), "prenom", [], "any", false, false, false, 148), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Votre prénom..."]]);
        yield "
                        ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "membre", [], "any", false, false, false, 149), "email", [], "any", false, false, false, 149), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Votre email..."]]);
        yield "
                        ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "membre", [], "any", false, false, false, 150), "adresse", [], "any", false, false, false, 150), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Votre adresse..."]]);
        yield "
                        ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "membre", [], "any", false, false, false, 151), "telephone", [], "any", false, false, false, 151), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Votre numéro..."]]);
        yield "
";
        // line 153
        yield "                        <button type=\"button\" class=\"btn btn-secondary d-grid w-100 btn-spacing\" id=\"prev-button\">Voir les informations du pressing</button>
                        <button type=\"submit\" class=\"btn btn-primary d-grid w-100 mt-2\" id=\"submit-button\" disabled>S'inscrire</button>
                    </div>

                    ";
        // line 157
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
            <!-- /Register Card -->
        </div>
    </div>
</div>

<!-- Core JS -->
<script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

<!-- Main JS -->
<script src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

<!-- Custom JS for Multi-Step Form -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nextButton = document.getElementById('next-button');
        const prevButton = document.getElementById('prev-button');
        const submitButton = document.getElementById('submit-button');
        const step1 = document.getElementById('step-1');
        const step2 = document.getElementById('step-2');
        const step1Inputs = document.querySelectorAll('#step-1 .form-control');
        const step2Inputs = document.querySelectorAll('#step-2 .form-control');

        // Function to validate fields in Step 1
        function validateStep1() {
            let allFilled = true;
            step1Inputs.forEach(input => {
                if (input.value.trim() === '') {
                    allFilled = false;
                }
            });
            nextButton.disabled = !allFilled;
            nextButton.classList.toggle('btn-disabled', !allFilled);
        }

        // Function to validate fields in Step 2
        function validateStep2() {
            let allFilled = true;
            step2Inputs.forEach(input => {
                if (input.value.trim() === '') {
                    allFilled = false;
                }
            });
            submitButton.disabled = !allFilled;
            submitButton.classList.toggle('btn-disabled', !allFilled);
        }

        // Next button click event
        nextButton.addEventListener('click', function () {
            step1.classList.remove('active');
            step2.classList.add('active');
        });

        // Previous button click event
        prevButton.addEventListener('click', function () {
            step2.classList.remove('active');
            step1.classList.add('active');
        });

        // Add event listeners to input fields to check validity
        step1Inputs.forEach(input => {
            input.addEventListener('input', validateStep1);
        });

        step2Inputs.forEach(input => {
            input.addEventListener('input', validateStep2);
        });

        // Initial validation on page load
        validateStep1();
        validateStep2();
    });
</script>
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
        return "register_membre/index.html.twig";
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
        return array (  294 => 173,  288 => 170,  284 => 169,  280 => 168,  276 => 167,  272 => 166,  260 => 157,  254 => 153,  250 => 151,  246 => 150,  242 => 149,  238 => 148,  234 => 147,  224 => 140,  220 => 139,  216 => 138,  212 => 137,  204 => 132,  104 => 35,  98 => 32,  92 => 29,  86 => 26,  80 => 23,  76 => 22,  72 => 21,  66 => 18,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"light-style customizer-hide\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"../assets/\" data-template=\"vertical-menu-template-free\">
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"/>
    <title>Multi-Step Form - Sneat</title>
    <meta name=\"description\" content=\"Multi-step registration form for Sneat Admin Template\"/>

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/favicon/favicon.ico') }}\"/>

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"/>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin/>
    <link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\" rel=\"stylesheet\"/>

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\"/>

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/theme-default.css') }}\" class=\"template-customizer-theme-css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\"/>

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\"/>

    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/pages/page-auth.css') }}\"/>

    <!-- Helpers -->
    <script src=\"{{ asset('assets/vendor/js/helpers.js') }}\"></script>

    <!-- Config -->
    <script src=\"{{ asset('assets/js/config.js') }}\"></script>

    <!-- Custom CSS -->
    <style>
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
        }
        .form-control {
            margin-bottom: 1rem; /* Espace entre les champs de saisie */
        }
        .btn-spacing {
            margin-top: 1rem; /* Espace entre le dernier champ et le bouton Next */
        }
        .btn-disabled {
            opacity: 0.65;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
<div class=\"container-xxl\">
    <div class=\"authentication-wrapper authentication-basic container-p-y\">
        <div class=\"authentication-inner\">
            <!-- Register Card -->
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

                    <h4 class=\"mb-2 text-center\">L'aventure commence ici 🚀</h4>
                    <p class=\"mb-4 text-center\">Rendez la gestion de votre pressing simple et amusante !</p>

                    <!-- Multi-Step Form -->
                    {{ form_start(form, {'attr': {'id': 'multi-step-form'}}) }}

                    <!-- Step 1 -->
                    <div class=\"form-step active\" id=\"step-1\">
                        <h5 class=\"section-title\">Information Pressing</h5>
                        {{ form_row(form.pressing.nom, {'attr': {'class': 'form-control', 'id': 'pressing-nom', 'placeholder': 'Le nom de votre pressing...'}}) }}
                        {{ form_row(form.pressing.email, {'attr': {'class': 'form-control', 'id': 'pressing-email', 'placeholder': 'L\\'email de votre pressing...'}}) }}
                        {{ form_row(form.pressing.adresse, {'attr': {'class': 'form-control', 'id': 'pressing-adresse', 'placeholder': 'L\\'adresse de votre pressing...'}}) }}
                        {{ form_row(form.pressing.telephone, {'attr': {'class': 'form-control', 'id': 'pressing-telephone', 'placeholder': 'Le numéro de votre pressing...'}}) }}
                        <button type=\"button\" class=\"btn btn-primary d-grid w-100 btn-spacing\" id=\"next-button\" disabled>Entrer les informations de l'utilisateur</button>
                    </div>

                    <!-- Step 2 -->
                    <div class=\"form-step\" id=\"step-2\">
                        <h5 class=\"section-title\">Information Utilisateur</h5>
                        {{ form_row(form.membre.nom, {'attr': {'class': 'form-control', 'placeholder': 'Votre nom...'}}) }}
                        {{ form_row(form.membre.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Votre prénom...'}}) }}
                        {{ form_row(form.membre.email, {'attr': {'class': 'form-control', 'placeholder': 'Votre email...'}}) }}
                        {{ form_row(form.membre.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Votre adresse...'}}) }}
                        {{ form_row(form.membre.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Votre numéro...'}}) }}
{#                        {{ form_row(form.membre.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Mot de passe'}}, {label: 'Password'}) }}#}
                        <button type=\"button\" class=\"btn btn-secondary d-grid w-100 btn-spacing\" id=\"prev-button\">Voir les informations du pressing</button>
                        <button type=\"submit\" class=\"btn btn-primary d-grid w-100 mt-2\" id=\"submit-button\" disabled>S'inscrire</button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
            <!-- /Register Card -->
        </div>
    </div>
</div>

<!-- Core JS -->
<script src=\"{{ asset('assets/vendor/libs/jquery/jquery.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/libs/popper/popper.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/js/menu.js') }}\"></script>

<!-- Main JS -->
<script src=\"{{ asset('assets/js/main.js') }}\"></script>

<!-- Custom JS for Multi-Step Form -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nextButton = document.getElementById('next-button');
        const prevButton = document.getElementById('prev-button');
        const submitButton = document.getElementById('submit-button');
        const step1 = document.getElementById('step-1');
        const step2 = document.getElementById('step-2');
        const step1Inputs = document.querySelectorAll('#step-1 .form-control');
        const step2Inputs = document.querySelectorAll('#step-2 .form-control');

        // Function to validate fields in Step 1
        function validateStep1() {
            let allFilled = true;
            step1Inputs.forEach(input => {
                if (input.value.trim() === '') {
                    allFilled = false;
                }
            });
            nextButton.disabled = !allFilled;
            nextButton.classList.toggle('btn-disabled', !allFilled);
        }

        // Function to validate fields in Step 2
        function validateStep2() {
            let allFilled = true;
            step2Inputs.forEach(input => {
                if (input.value.trim() === '') {
                    allFilled = false;
                }
            });
            submitButton.disabled = !allFilled;
            submitButton.classList.toggle('btn-disabled', !allFilled);
        }

        // Next button click event
        nextButton.addEventListener('click', function () {
            step1.classList.remove('active');
            step2.classList.add('active');
        });

        // Previous button click event
        prevButton.addEventListener('click', function () {
            step2.classList.remove('active');
            step1.classList.add('active');
        });

        // Add event listeners to input fields to check validity
        step1Inputs.forEach(input => {
            input.addEventListener('input', validateStep1);
        });

        step2Inputs.forEach(input => {
            input.addEventListener('input', validateStep2);
        });

        // Initial validation on page load
        validateStep1();
        validateStep2();
    });
</script>
</body>
</html>
", "register_membre/index.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\register_membre\\index.html.twig");
    }
}
