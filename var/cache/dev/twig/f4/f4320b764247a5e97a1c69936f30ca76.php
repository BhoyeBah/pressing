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

/* client/_form.html.twig */
class __TwigTemplate_c4ba7895f08ce3f2dbc42ec9fdb30a4a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
                    <div class=\"mb-3\">
                        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        yield "
                            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield "
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre prenom"]]);
        yield "
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "telephone", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-phone-call\"></i></span>
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "telephone", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre telephone"]]);
        yield "
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "telephone", [], "any", false, false, false, 32), 'errors');
        yield "
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "adresse", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse"]);
        yield "
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-location-plus\"></i></span>
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "adresse", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre adresse"]]);
        yield "
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "adresse", [], "any", false, false, false, 40), 'errors');
        yield "
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Enrégistrer")) : ("Enrégistrer")), "html", null, true);
        yield "</button>
                    ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
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
        return "client/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  152 => 45,  148 => 44,  141 => 40,  137 => 39,  131 => 36,  124 => 32,  120 => 31,  114 => 28,  107 => 24,  103 => 23,  97 => 20,  90 => 16,  86 => 15,  80 => 12,  75 => 10,  65 => 2,  45 => 1,);
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
                    {{ form_start(form) }}
                    <div class=\"mb-3\">
                        {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Votre nom'}}) }}
                            {{ form_errors(form.nom) }}
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.prenom, 'Prénom', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Votre prenom'}}) }}
                            {{ form_errors(form.prenom) }}
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.telephone, 'Téléphone', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-phone-call\"></i></span>
                            {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Votre telephone'}}) }}
                            {{ form_errors(form.telephone) }}
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        {{ form_label(form.adresse, 'Adresse', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-location-plus\"></i></span>
                            {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Votre adresse'}}) }}
                            {{ form_errors(form.adresse) }}
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Enrégistrer') }}</button>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "client/_form.html.twig", "C:\\xampp\\htdocs\\pressing\\templates\\client\\_form.html.twig");
    }
}
