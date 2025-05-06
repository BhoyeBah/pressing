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
class __TwigTemplate_3576ab491f005a768f6044c84d9b488a extends Template
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
  data-template=\"vertical-menu-template-free\">

<head>
  <meta charset=\"utf-8\" />
  <meta
    name=\"viewport\"
    content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

  <title>Connexion</title>

  <meta name=\"description\" content=\"\" />

  <!-- Favicon -->
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

  <!-- Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
  <link
    href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
    rel=\"stylesheet\" />

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

  <!-- Page CSS -->
  <!-- Page -->
  <link rel=\"stylesheet\" href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\" />
  <!-- Helpers -->
  <script src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src=\"";
        // line 51
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
                <span class=\"app-brand-text demo text-body fw-bolder\">Royal Pressing</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class=\"mb-2\">Bienvenu! 👋</h4>
            <p class=\"mb-4\">Veuillez vous connecter à votre compte et commencer l'aventure.</p>

            <form id=\"formAuthentication\" class=\"mb-3\" action=\"\" method=\"POST\">
              ";
        // line 74
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 74, $this->source); })())) {
            // line 75
            yield "              <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 75, $this->source); })()), "messageKey", [], "any", false, false, false, 75), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 75, $this->source); })()), "messageData", [], "any", false, false, false, 75), "security"), "html", null, true);
            yield "</div>
              ";
        }
        // line 77
        yield "              <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\"
                  value=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 80, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Entrer votre email\" autofocus autocomplete=\"email\" required />
              </div>
              <div class=\"mb-3 form-password-toggle\">
                <div class=\"d-flex justify-content-between\">
                  <label class=\"form-label\" for=\"password\">Mot de passe</label>
                  <a href=\"";
        // line 85
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
                    required />

                  <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                </div>
              </div>
              <input type=\"hidden\" name=\"_csrf_token\"
                value=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
              <div class=\"mb-3\">
                <div class=\"form-check\">
                  <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\" class=\"form-check-input\" />
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
        // line 119
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
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>

  <script src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
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
        return array (  252 => 146,  243 => 140,  238 => 138,  234 => 137,  230 => 136,  226 => 135,  207 => 119,  190 => 105,  167 => 85,  159 => 80,  154 => 77,  148 => 75,  146 => 74,  120 => 51,  113 => 47,  108 => 45,  101 => 41,  95 => 38,  90 => 36,  86 => 35,  80 => 32,  67 => 22,  44 => 1,);
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
  data-template=\"vertical-menu-template-free\">

<head>
  <meta charset=\"utf-8\" />
  <meta
    name=\"viewport\"
    content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

  <title>Connexion</title>

  <meta name=\"description\" content=\"\" />

  <!-- Favicon -->
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/favicon/favicon.ico') }}\" />

  <!-- Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
  <link
    href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
    rel=\"stylesheet\" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\" />

  <!-- Core CSS -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/core.css') }}\" class=\"template-customizer-core-css\" />
  <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/theme-default.css') }}\"
    class=\"template-customizer-theme-css\" />
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\" />

  <!-- Vendors CSS -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/css/pages/page-auth.css') }}\" />
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
                <span class=\"app-brand-text demo text-body fw-bolder\">Royal Pressing</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class=\"mb-2\">Bienvenu! 👋</h4>
            <p class=\"mb-4\">Veuillez vous connecter à votre compte et commencer l'aventure.</p>

            <form id=\"formAuthentication\" class=\"mb-3\" action=\"\" method=\"POST\">
              {% if error %}
              <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
              {% endif %}
              <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\"
                  value=\"{{ last_username }}\" placeholder=\"Entrer votre email\" autofocus autocomplete=\"email\" required />
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
                    required />

                  <span class=\"input-group-text cursor-pointer\"><i class=\"bx bx-hide\"></i></span>
                </div>
              </div>
              <input type=\"hidden\" name=\"_csrf_token\"
                value=\"{{ csrf_token('authenticate') }}\">
              <div class=\"mb-3\">
                <div class=\"form-check\">
                  <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\" class=\"form-check-input\" />
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

</html>", "security/login.html.twig", "C:\\xampp\\htdocs\\pressing\\templates\\security\\login.html.twig");
    }
}
