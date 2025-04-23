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

/* user/index.html.twig */
class __TwigTemplate_ecf9c0c1cff2cdf320827dc1bd6f062a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        yield "Users Index";
        
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
        yield "    <div class=\"card\">
        <!-- Display flash messages -->
        ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", [], "any", false, false, false, 8), "flashBag", [], "any", false, false, false, 8), "has", ["success"], "method", false, false, false, 8)) {
            // line 9
            yield "            <div class=\"alert alert-success\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "flashBag", [], "any", false, false, false, 10), "get", ["success"], "method", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "            </div>
        ";
        }
        // line 15
        yield "
        ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "session", [], "any", false, false, false, 16), "flashBag", [], "any", false, false, false, 16), "has", ["error"], "method", false, false, false, 16)) {
            // line 17
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "flashBag", [], "any", false, false, false, 18), "get", ["error"], "method", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "            </div>
        ";
        }
        // line 23
        yield "
        <h5 class=\"card-header\">
            Liste des utilisateurs 
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_new");
        yield "\" class=\"btn btn-info mx-3\">Nouvel utilisateur</a>
        </h5>

        <div class=\"card-body\">
            <div class=\"table-responsive text-nowrap\">
                <table class=\"table table-bordered\" id=\"myTable\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Adresse</th>
                            <th>État</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 45
            yield "                            <tr>
                                <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                                <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                <td>
                                    <form action=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_state", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" method=\"POST\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle_user"), "html", null, true);
            yield "\">
                                        ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "state", [], "any", false, false, false, 54) == false)) {
                // line 55
                yield "                                            <button class=\"btn\" type=\"submit\" onclick=\"return confirm('Voulez-vous activer l\\'utilisateur ?');\">
                                                <span class=\"badge bg-label-danger me-1\">Désactivé</span>
                                            </button>
                                        ";
            } else {
                // line 59
                yield "                                            <button class=\"btn\" type=\"submit\" onclick=\"return confirm('Voulez-vous désactiver l\\'utilisateur ?');\">
                                                <span class=\"badge bg-label-success me-1\">Activé</span>
                                            </button>
                                        ";
            }
            // line 63
            yield "                                    </form>
                                </td>
                                <td>
                                    <a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"bx bx-show\"></i>
                                    </a>
                                    <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                        <i class=\"bx bx-edit\"></i>
                                    </a>
                                    ";
            // line 72
            yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
            yield "
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 76
            yield "                            <tr>
                                <td colspan=\"7\">Aucun enregistrement trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "                    </tbody>
                </table>
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
        return "user/index.html.twig";
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
        return array (  274 => 80,  265 => 76,  248 => 72,  242 => 69,  236 => 66,  231 => 63,  225 => 59,  219 => 55,  217 => 54,  213 => 53,  209 => 52,  204 => 50,  200 => 49,  196 => 48,  192 => 47,  188 => 46,  185 => 45,  167 => 44,  146 => 26,  141 => 23,  137 => 21,  128 => 19,  124 => 18,  121 => 17,  119 => 16,  116 => 15,  112 => 13,  103 => 11,  99 => 10,  96 => 9,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Users Index{% endblock %}

{% block body %}
    <div class=\"card\">
        <!-- Display flash messages -->
        {% if app.session.flashBag.has('success') %}
            <div class=\"alert alert-success\">
                {% for message in app.session.flashBag.get('success') %}
                    {{ message }}
                {% endfor %}
            </div>
        {% endif %}

        {% if app.session.flashBag.has('error') %}
            <div class=\"alert alert-danger\">
                {% for message in app.session.flashBag.get('error') %}
                    {{ message }}
                {% endfor %}
            </div>
        {% endif %}

        <h5 class=\"card-header\">
            Liste des utilisateurs 
            <a href=\"{{ path('app_users_new') }}\" class=\"btn btn-info mx-3\">Nouvel utilisateur</a>
        </h5>

        <div class=\"card-body\">
            <div class=\"table-responsive text-nowrap\">
                <table class=\"table table-bordered\" id=\"myTable\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Adresse</th>
                            <th>État</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.nom }}</td>
                                <td>{{ user.prenom }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.telephone }}</td>
                                <td>{{ user.adresse }}</td>
                                <td>
                                    <form action=\"{{ path('app_users_state', { 'id': user.id }) }}\" method=\"POST\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_user') }}\">
                                        {% if user.state == false %}
                                            <button class=\"btn\" type=\"submit\" onclick=\"return confirm('Voulez-vous activer l\\'utilisateur ?');\">
                                                <span class=\"badge bg-label-danger me-1\">Désactivé</span>
                                            </button>
                                        {% else %}
                                            <button class=\"btn\" type=\"submit\" onclick=\"return confirm('Voulez-vous désactiver l\\'utilisateur ?');\">
                                                <span class=\"badge bg-label-success me-1\">Activé</span>
                                            </button>
                                        {% endif %}
                                    </form>
                                </td>
                                <td>
                                    <a href=\"{{ path('app_users_show', {'id': user.id}) }}\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"bx bx-show\"></i>
                                    </a>
                                    <a href=\"{{ path('app_users_edit', {'id': user.id}) }}\" class=\"btn btn-info btn-sm\">
                                        <i class=\"bx bx-edit\"></i>
                                    </a>
                                    {{ include('user/_delete_form.html.twig') }}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\">Aucun enregistrement trouvé</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "user/index.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\user\\index.html.twig");
    }
}
