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

/* user/_form.html.twig */
class __TwigTemplate_e075635564a690e85dc66757a0acfa1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        yield "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Basic with Icons</h5>
                    <small class=\"text-muted float-end\">Merged input group</small>
                </div>
                <div class=\"card-body\">
                    ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
                    
                    <!-- Nom -->
                    <div class=\"mb-3\">
                        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        yield "
                            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Prénom -->
                    <div class=\"mb-3\">
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield "
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre prenom"]]);
        yield "
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Email -->
                    <div class=\"mb-3\">
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre email"]]);
        yield "
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class=\"mb-3\">
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 44, $this->source); })()), "telephone", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 47, $this->source); })()), "telephone", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre telephone"]]);
        yield "
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 48, $this->source); })()), "telephone", [], "any", false, false, false, 48), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Adresse -->
                    <div class=\"mb-3\">
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 54, $this->source); })()), "adresse", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse"]);
        yield "
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-map\"></i></span>
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 57, $this->source); })()), "adresse", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre adresse"]]);
        yield "
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 58, $this->source); })()), "adresse", [], "any", false, false, false, 58), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Mot de passe -->
                    <div class=\"mb-3\">
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 64, $this->source); })()), "plainPassword", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de passe"]);
        yield "
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-lock\"></i></span>
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 67, $this->source); })()), "plainPassword", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre mot de passe"]]);
        yield "
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 68, $this->source); })()), "plainPassword", [], "any", false, false, false, 68), 'errors');
        yield "
                        </div>
                    </div>

                    <!-- Sélection des rôles -->
                    <div class=\"mb-3\">
                        <small class=\"text-light fw-semibold\">Role</small>
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 75, $this->source); })()), "roles", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 76
            yield "                            <div class=\"form-check mt-3\">
                                ";
            // line 77
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["role"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                ";
            // line 78
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["role"], 'label', ["label_attr" => ["class" => "form-check-label"]]);
            yield "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                    </div>

                    <!-- Bouton Envoyer -->
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 84, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        yield "</button>

                    ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 86, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
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
        return "user/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  227 => 86,  222 => 84,  217 => 81,  208 => 78,  204 => 77,  201 => 76,  197 => 75,  187 => 68,  183 => 67,  177 => 64,  168 => 58,  164 => 57,  158 => 54,  149 => 48,  145 => 47,  139 => 44,  130 => 38,  126 => 37,  120 => 34,  111 => 28,  107 => 27,  101 => 24,  92 => 18,  88 => 17,  82 => 14,  75 => 10,  65 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Basic with Icons</h5>
                    <small class=\"text-muted float-end\">Merged input group</small>
                </div>
                <div class=\"card-body\">
                    {{ form_start(formUser) }}
                    
                    <!-- Nom -->
                    <div class=\"mb-3\">
                        {{ form_label(formUser.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            {{ form_widget(formUser.nom, {'attr': {'class': 'form-control', 'placeholder': 'Votre nom'}}) }}
                            {{ form_errors(formUser.nom) }}
                        </div>
                    </div>

                    <!-- Prénom -->
                    <div class=\"mb-3\">
                        {{ form_label(formUser.prenom, 'Prénom', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            {{ form_widget(formUser.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Votre prenom'}}) }}
                            {{ form_errors(formUser.prenom) }}
                        </div>
                    </div>

                    <!-- Email -->
                    <div class=\"mb-3\">
                        {{ form_label(formUser.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            {{ form_widget(formUser.email, {'attr': {'class': 'form-control', 'placeholder': 'Votre email'}}) }}
                            {{ form_errors(formUser.email) }}
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class=\"mb-3\">
                        {{ form_label(formUser.telephone, 'Téléphone', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            {{ form_widget(formUser.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Votre telephone'}}) }}
                            {{ form_errors(formUser.telephone) }}
                        </div>
                    </div>

                    <!-- Adresse -->
                    <div class=\"mb-3\">
                        {{ form_label(formUser.adresse, 'Adresse', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-map\"></i></span>
                            {{ form_widget(formUser.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Votre adresse'}}) }}
                            {{ form_errors(formUser.adresse) }}
                        </div>
                    </div>

                    <!-- Mot de passe -->
                    <div class=\"mb-3\">
                        {{ form_label(formUser.plainPassword, 'Mot de passe', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-lock\"></i></span>
                            {{ form_widget(formUser.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Votre mot de passe'}}) }}
                            {{ form_errors(formUser.plainPassword) }}
                        </div>
                    </div>

                    <!-- Sélection des rôles -->
                    <div class=\"mb-3\">
                        <small class=\"text-light fw-semibold\">Role</small>
                        {% for role in formUser.roles %}
                            <div class=\"form-check mt-3\">
                                {{ form_widget(role, {'attr': {'class': 'form-check-input'}}) }}
                                {{ form_label(role, null, {'label_attr': {'class': 'form-check-label'}}) }}
                            </div>
                        {% endfor %}
                    </div>

                    <!-- Bouton Envoyer -->
                    <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Envoyer') }}</button>

                    {{ form_end(formUser) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "user/_form.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\user\\_form.html.twig");
    }
}
