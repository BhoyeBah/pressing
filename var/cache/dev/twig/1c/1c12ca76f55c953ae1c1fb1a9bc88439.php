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

/* registration_membre/register_membre.html.twig */
class __TwigTemplate_5ed9389c6f184d7e5020078cc3773622 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration_membre/register_membre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration_membre/register_membre.html.twig"));

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


<div class=\"container-xxl\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\"><span class=\"text-muted fw-light\">Forms/</span> Vertical Layouts</h4>

        <!-- Basic Layout -->
        <div class=\"row\">

            <div class=\"col-md-6\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Basic with Icons</h5>
                        <small class=\"text-muted float-end\">Merged input group</small>
                    </div>
                    <div class=\"card-body\">
                        <form>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"basic-icon-default-fullname\">Votre nom complet</label>
                                <div class=\"input-group input-group-merge\">
                                    <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"><i
                                                class=\"bx bx-user\"></i></span>
                                    <input type=\"text\" class=\"form-control\" id=\"basic-icon-default-fullname\"
                                           placeholder=\"John Doe\" aria-label=\"John Doe\"
                                           aria-describedby=\"basic-icon-default-fullname2\">
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"basic-icon-default-company\">Nom du pressing</label>
                                <div class=\"input-group input-group-merge\">
                                    <span id=\"basic-icon-default-company2\" class=\"input-group-text\"><i
                                                class=\"bx bx-buildings\"></i></span>
                                    <input type=\"text\" id=\"basic-icon-default-company\" class=\"form-control\"
                                           placeholder=\"ACME Inc.\" aria-label=\"ACME Inc.\"
                                           aria-describedby=\"basic-icon-default-company2\">
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"basic-icon-default-email\">Email Utilisateur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    <input type=\"text\" id=\"basic-icon-default-email\" class=\"form-control\"
                                           placeholder=\"john.doe\" aria-label=\"john.doe\"
                                           aria-describedby=\"basic-icon-default-email2\">
                                    <span id=\"basic-icon-default-email2\" class=\"input-group-text\">@example.com</span>
                                </div>
                                <div class=\"form-text\">You can use letters, numbers &amp; periods</div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"basic-icon-default-phone\">Téléphone Utilisateur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i
                                                class=\"bx bx-phone\"></i></span>
                                    <input type=\"text\" id=\"basic-icon-default-phone\" class=\"form-control phone-mask\"
                                           placeholder=\"658 799 8941\" aria-label=\"658 799 8941\"
                                           aria-describedby=\"basic-icon-default-phone2\">
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"basic-icon-default-phone\">Téléphone Utilisateur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i
                                                class=\"bx bx-phone\"></i></span>
                                    <input type=\"text\" id=\"basic-icon-default-phone\" class=\"form-control phone-mask\"
                                           placeholder=\"658 799 8941\" aria-label=\"658 799 8941\"
                                           aria-describedby=\"basic-icon-default-phone2\">
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        return "registration_membre/register_membre.html.twig";
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
        return array (  233 => 146,  224 => 140,  219 => 138,  215 => 137,  211 => 136,  207 => 135,  122 => 53,  115 => 49,  110 => 47,  103 => 43,  97 => 40,  92 => 38,  88 => 37,  82 => 34,  68 => 23,  44 => 1,);
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


<div class=\"container-xxl\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\"><span class=\"text-muted fw-light\">Forms/</span> Vertical Layouts</h4>

        <!-- Basic Layout -->
        <div class=\"row\">

            <div class=\"col-md-6\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Basic with Icons</h5>
                        <small class=\"text-muted float-end\">Merged input group</small>
                    </div>
                    <div class=\"card-body\">
                        <form>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"basic-icon-default-fullname\">Votre nom complet</label>
                                <div class=\"input-group input-group-merge\">
                                    <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"><i
                                                class=\"bx bx-user\"></i></span>
                                    <input type=\"text\" class=\"form-control\" id=\"basic-icon-default-fullname\"
                                           placeholder=\"John Doe\" aria-label=\"John Doe\"
                                           aria-describedby=\"basic-icon-default-fullname2\">
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"basic-icon-default-company\">Nom du pressing</label>
                                <div class=\"input-group input-group-merge\">
                                    <span id=\"basic-icon-default-company2\" class=\"input-group-text\"><i
                                                class=\"bx bx-buildings\"></i></span>
                                    <input type=\"text\" id=\"basic-icon-default-company\" class=\"form-control\"
                                           placeholder=\"ACME Inc.\" aria-label=\"ACME Inc.\"
                                           aria-describedby=\"basic-icon-default-company2\">
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"basic-icon-default-email\">Email Utilisateur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    <input type=\"text\" id=\"basic-icon-default-email\" class=\"form-control\"
                                           placeholder=\"john.doe\" aria-label=\"john.doe\"
                                           aria-describedby=\"basic-icon-default-email2\">
                                    <span id=\"basic-icon-default-email2\" class=\"input-group-text\">@example.com</span>
                                </div>
                                <div class=\"form-text\">You can use letters, numbers &amp; periods</div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"basic-icon-default-phone\">Téléphone Utilisateur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i
                                                class=\"bx bx-phone\"></i></span>
                                    <input type=\"text\" id=\"basic-icon-default-phone\" class=\"form-control phone-mask\"
                                           placeholder=\"658 799 8941\" aria-label=\"658 799 8941\"
                                           aria-describedby=\"basic-icon-default-phone2\">
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"basic-icon-default-phone\">Téléphone Utilisateur</label>
                                <div class=\"input-group input-group-merge\">
                                    <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i
                                                class=\"bx bx-phone\"></i></span>
                                    <input type=\"text\" id=\"basic-icon-default-phone\" class=\"form-control phone-mask\"
                                           placeholder=\"658 799 8941\" aria-label=\"658 799 8941\"
                                           aria-describedby=\"basic-icon-default-phone2\">
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
", "registration_membre/register_membre.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\registration_membre\\register_membre.html.twig");
    }
}
