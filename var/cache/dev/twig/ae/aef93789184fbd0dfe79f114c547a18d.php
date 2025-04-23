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
class __TwigTemplate_cc88555283e4f3f61037e2f511201258 extends Template
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

        yield "users index";
        
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
                <h5 class=\"card-header\">Liste des users <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_new");
        yield "\" class=\"btn btn-info mx-3\">Nouvel user</a></h5>
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
                          <th>State</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 23, $this->source); })()));
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
            // line 24
            yield "                        <tr>
                            <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                            <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                            <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                            <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                           <td>
                               <form action=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_state", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" method=\"POST\">
                                
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle_user"), "html", null, true);
            yield "\">
                                ";
            // line 34
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isState", [], "method", false, false, false, 34) != true)) {
                // line 35
                yield "                                    <button class=\"btn\" type=\"submit\" onclick=\"return confirm('Voulez-vous activer le user ?');\">
                                        <span class=\"badge bg-label-danger me-1\">Désactivé</span>
                                    </button>
                                ";
            } else {
                // line 39
                yield "                                    <button class=\"btn\" type=\"submit\" onclick=\"return confirm('Voulez-vous désactiver le user ?');\">
                                        <span class=\"badge bg-label-success me-1\">Activé</span>
                                    </button>
                                ";
            }
            // line 43
            yield "                            </form>
                           </td>
                            
                            <td>
                                <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\"><i class=\"bx bx-show\"></i></a>
                                <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\"><i class=\"bx bx-edit\"></i></a>
                                ";
            // line 49
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
            // line 53
            yield "                        <tr>
                            <td colspan=\"9\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "              
                      </tbody>
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
        return array (  217 => 56,  208 => 53,  191 => 49,  187 => 48,  183 => 47,  177 => 43,  171 => 39,  165 => 35,  163 => 34,  159 => 33,  154 => 31,  149 => 29,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  130 => 24,  112 => 23,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}users index{% endblock %}

{% block body %}
    <div class=\"card\">
                <h5 class=\"card-header\">Liste des users <a href=\"{{ path('app_users_new') }}\" class=\"btn btn-info mx-3\">Nouvel user</a></h5>
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
                          <th>State</th>
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
                                {% if user.isState() != true %}
                                    <button class=\"btn\" type=\"submit\" onclick=\"return confirm('Voulez-vous activer le user ?');\">
                                        <span class=\"badge bg-label-danger me-1\">Désactivé</span>
                                    </button>
                                {% else %}
                                    <button class=\"btn\" type=\"submit\" onclick=\"return confirm('Voulez-vous désactiver le user ?');\">
                                        <span class=\"badge bg-label-success me-1\">Activé</span>
                                    </button>
                                {% endif %}
                            </form>
                           </td>
                            
                            <td>
                                <a href=\"{{ path('app_users_show', {'id': user.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"bx bx-show\"></i></a>
                                <a href=\"{{ path('app_users_edit', {'id': user.id}) }}\" class=\"btn btn-info btn-sm\"><i class=\"bx bx-edit\"></i></a>
                                {{ include('user/_delete_form.html.twig') }}
                            </td>
                        </tr>  
                         {% else %}
                        <tr>
                            <td colspan=\"9\">no records found</td>
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
