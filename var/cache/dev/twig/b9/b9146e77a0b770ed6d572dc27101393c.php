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

/* pressing/index.html.twig */
class __TwigTemplate_1861917c447d6a4214f25bfb7d811686 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pressing/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pressing/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pressing/index.html.twig", 1);
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

        yield "Pressing index";
        
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
        yield "
    <div class=\"card\">
        <h5 class=\"card-header\">Liste des clients <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pressing_new");
        yield "\" class=\"btn btn-info mx-3\">Nouvel
                Pressing</a></h5>
        <div class=\"card-body\">
            <div class=\"table-responsive text-nowrap\">
                <table class=\"table table-bordered\" id=\"myTable\">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pressings"]) || array_key_exists("pressings", $context) ? $context["pressings"] : (function () { throw new RuntimeError('Variable "pressings" does not exist.', 23, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["pressing"]) {
            // line 24
            yield "                        <tr>
                            <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pressing"], "nom", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                            <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pressing"], "adresse", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pressing"], "telephone", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                            <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pressing"], "email", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pressing_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pressing"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\"
                                   class=\"btn btn-primary btn-sm\"><i class=\"bx bx-show\"></i></a>
                                <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pressing_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pressing"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\"
                                   class=\"btn btn-info btn-sm\"><i class=\"bx bx-edit\"></i></a>
                                ";
            // line 34
            yield Twig\Extension\CoreExtension::include($this->env, $context, "pressing/_delete_form.html.twig");
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
            // line 38
            yield "                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pressing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "pressing/index.html.twig";
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
        return array (  186 => 42,  177 => 38,  160 => 34,  155 => 32,  150 => 30,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  130 => 24,  112 => 23,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pressing index{% endblock %}

{% block body %}

    <div class=\"card\">
        <h5 class=\"card-header\">Liste des clients <a href=\"{{ path('app_pressing_new') }}\" class=\"btn btn-info mx-3\">Nouvel
                Pressing</a></h5>
        <div class=\"card-body\">
            <div class=\"table-responsive text-nowrap\">
                <table class=\"table table-bordered\" id=\"myTable\">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for pressing in pressings %}
                        <tr>
                            <td>{{ pressing.nom }}</td>
                            <td>{{ pressing.adresse }}</td>
                            <td>{{ pressing.telephone }}</td>
                            <td>{{ pressing.email }}</td>
                            <td>
                                <a href=\"{{ path('app_pressing_show', {'id': pressing.id}) }}\"
                                   class=\"btn btn-primary btn-sm\"><i class=\"bx bx-show\"></i></a>
                                <a href=\"{{ path('app_pressing_edit', {'id': pressing.id}) }}\"
                                   class=\"btn btn-info btn-sm\"><i class=\"bx bx-edit\"></i></a>
                                {{ include('pressing/_delete_form.html.twig') }}
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "pressing/index.html.twig", "C:\\xampp\\htdocs\\myapp\\templates\\pressing\\index.html.twig");
    }
}
