<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/listSub.html.twig */
class __TwigTemplate_f50ca1d2cd03b16dfffac84eec5b3434d1fd4705b67431e768ea5c798a6226f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listSub.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listSub.html.twig"));

        // line 1
        echo "<div class=\"col-10 ml-auto mr-auto\">

<i id=\"loupeDisplay\" data-target=\"listSub\" class=\"fas fa-search mt-2 mb-2\" aria-hidden=\"true\"></i>
    <table class=\"table table-striped table-hover table-bordered table-responsive\">
    <thead>
        <tr id=\"liste\" >
            <th scope=\"col\" >Utilisateur</th>
            <th scope=\"col\" data-search=\"email\">email</th>
            <th scope=\"col\" data-search=\"cpu\">CPU</th>
            <th scope=\"col\" data-search=\"ram\">RAM</th>
            <th scope=\"col\" data-search=\"disk_space\">Espace disque</th>
            <th scope=\"col\" data-search=\"date_sub\">Date debut</th>
            <th scope=\"col\" data-search=\"date_fin\">Date de fin</th>
            <th  scope=\"col\" data-search=\"sub_name\">Nom</th>
            <th scope=\"col\" data-search=\"price\">Prix €/mois</th>
            <th scope=\"col\">Options</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 21
            echo "            <tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "firstName", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                 <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "cpu", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "ram", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "space", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "dateSub", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td class=\"dateUnSub\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "dateFin", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "subName", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, $context["sub"], "price", [], "any", false, false, false, 30), 2, "floor"), "html", null, true);
            echo "</td>
                 <td class=\"text-center \">
                 ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["sub"], "status", [], "any", false, false, false, 32) == 0)) {
                // line 33
                echo "                    <a class='btn btn-danger btn-xs pr-2 pl-2 unsub' data-target=\"unsub\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\"title=\"Désactiver la souscription\"  style=\"color: #FFF\" href=\"#\"><i class=\"fas fa-trash\"></i></a>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
$context["sub"], "status", [], "any", false, false, false, 34) == 1)) {
                // line 35
                echo "                    <a class='btn btn-primary btn-xs pr-2 pl-2 resub' data-target=\"reSub\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "\"title=\"Réactiver la souscription\"  style=\"color: #FFF\" href=\"#\"><i class=\"fas fa-redo\"></i></a>
                ";
            } else {
                // line 37
                echo "                   <b class=\"text-danger \" >Souscription terminée</b>
                ";
            }
            // line 39
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </tbody>
    </table>
    <div class=\"pagination justify-content-center\">
        ";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 45, $this->source); })()));
        echo "
    </div>
</div>
<div class=\"offset-md-1\">
<button type=\"button\" id=\"supression\" class=\"btn btn-danger\">Supprimer abonnements passés</button>
</div>
<script src=\"js/pagination.js\"></script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/listSub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 45,  139 => 42,  131 => 39,  127 => 37,  121 => 35,  119 => 34,  114 => 33,  112 => 32,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  73 => 22,  68 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-10 ml-auto mr-auto\">

<i id=\"loupeDisplay\" data-target=\"listSub\" class=\"fas fa-search mt-2 mb-2\" aria-hidden=\"true\"></i>
    <table class=\"table table-striped table-hover table-bordered table-responsive\">
    <thead>
        <tr id=\"liste\" >
            <th scope=\"col\" >Utilisateur</th>
            <th scope=\"col\" data-search=\"email\">email</th>
            <th scope=\"col\" data-search=\"cpu\">CPU</th>
            <th scope=\"col\" data-search=\"ram\">RAM</th>
            <th scope=\"col\" data-search=\"disk_space\">Espace disque</th>
            <th scope=\"col\" data-search=\"date_sub\">Date debut</th>
            <th scope=\"col\" data-search=\"date_fin\">Date de fin</th>
            <th  scope=\"col\" data-search=\"sub_name\">Nom</th>
            <th scope=\"col\" data-search=\"price\">Prix €/mois</th>
            <th scope=\"col\">Options</th>
        </tr>
    </thead>
    <tbody>
        {% for sub in subscriptions %}
            <tr id=\"{{ sub.id }}\">
                <td>{{ sub.name }} {{ sub.firstName}}</td>
                 <td>{{ sub.email }}</td>
                <td>{{ sub.cpu }}</td>
                <td>{{ sub.ram }}</td>
                <td>{{ sub.space }}</td>
                <td>{{ sub.dateSub }}</td>
                <td class=\"dateUnSub\">{{ sub.dateFin }}</td>
                <td>{{ sub.subName }}</td>
                <td>{{ sub.price  | round(2, 'floor') }}</td>
                 <td class=\"text-center \">
                 {% if sub.status == 0 %}
                    <a class='btn btn-danger btn-xs pr-2 pl-2 unsub' data-target=\"unsub\" data-id=\"{{ sub.id }}\"title=\"Désactiver la souscription\"  style=\"color: #FFF\" href=\"#\"><i class=\"fas fa-trash\"></i></a>
                {% elseif  sub.status == 1 %}
                    <a class='btn btn-primary btn-xs pr-2 pl-2 resub' data-target=\"reSub\" data-id=\"{{ sub.id }}\"title=\"Réactiver la souscription\"  style=\"color: #FFF\" href=\"#\"><i class=\"fas fa-redo\"></i></a>
                {% else  %}
                   <b class=\"text-danger \" >Souscription terminée</b>
                {% endif %}
                </td>
            </tr>
        {% endfor %}
    </tbody>
    </table>
    <div class=\"pagination justify-content-center\">
        {{ knp_pagination_render(subscriptions) }}
    </div>
</div>
<div class=\"offset-md-1\">
<button type=\"button\" id=\"supression\" class=\"btn btn-danger\">Supprimer abonnements passés</button>
</div>
<script src=\"js/pagination.js\"></script>

", "admin/listSub.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\admin\\listSub.html.twig");
    }
}
