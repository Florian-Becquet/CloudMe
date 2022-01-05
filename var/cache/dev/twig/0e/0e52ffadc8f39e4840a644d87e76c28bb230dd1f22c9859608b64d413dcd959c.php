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

/* admin/listUser.html.twig */
class __TwigTemplate_a7420bdf91d194345e6e068da8122f77956f7db321f5f3494765f328c8ce6875 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listUser.html.twig"));

        // line 1
        echo "<div class=\"col-10 ml-auto mr-auto\">
    <i id=\"loupeDisplay\" data-target=\"listUser\" class=\"fas fa-search mt-2 mb-2\" aria-hidden=\"true\"></i>
    <table class=\"table table-striped table-responsive mx-auto\" style=\"width:90%\">
        <thead>
            <tr id=\"liste\">
                <th scope=\"col-sm-3\" data-search=\"first_name\">Prénom</th>
                <th scope=\"col-sm-3\" data-search=\"name\">Nom</th>
                <th scope=\"col-sm-3\" data-search=\"email\">Email</th>
                <th scope=\"col-sm-3\" >Statut</th>
                <th scope=\"col-sm-3\" >Souscriptions</th>
                <th scope=\"col-sm-3\" class=\"text-center\">Option</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "                <tr>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                    ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 20) == 0)) {
                // line 21
                echo "                    <td class=\"text-center\"><div class=\"btn-group dropup\">
                        <a id=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\" class='btn btn-primary btn-xs pl-2 pr-2 ml-1' data-toggle=\"dropdown\"  title=\"Options\"href=\"#\">Inactif</a>
                        <ul class=\"dropdown-menu\" style=\"min-width: 5rem;\">
                             <li class=\"text-center\" ><a class='btn btn-info btn-xs pr-2 pl-2 status' data-id=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\" data-status=\"1\" href=\"#\">Actif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-primary btn-xs status' data-id=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" data-status=\"0\"href=\"#\">Inactif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-dark btn-xs status' data-id=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" data-status=\"2\"href=\"#\">Expert</a></li>
                        </ul>
                    </div></td>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 29
$context["user"], "status", [], "any", false, false, false, 29) == 1)) {
                // line 30
                echo "                        <td class=\"text-center\"><div class=\"btn-group dropup\">
                        <a id=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\" class='btn btn-info btn-xs pl-3 pr-3 ml-1' data-toggle=\"dropdown\"  title=\"Options\"href=\"#\">Actif</a>
                        <ul class=\"dropdown-menu\" style=\"min-width: 5rem;\">
                             <li class=\"text-center\" ><a class='btn btn-info btn-xs pr-2 pl-2 status' data-id=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\" data-status=\"1\" href=\"#\">Actif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-primary btn-xs status'data-id=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\" data-status=\"0\" href=\"#\">Inactif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-dark btn-xs status'data-id=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "\" data-status=\"2\" href=\"#\">Expert</a></li>
                        </ul>
                    </div></td>
                    ";
            } else {
                // line 39
                echo "                    <td class=\"text-center\"><div class=\"btn-group dropup\">
                        <a id=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\"class='btn btn-dark btn-xs pl-2 pr-2 ml-1' data-toggle=\"dropdown\"  title=\"Options\"href=\"#\">Expert</a>
                        <ul class=\"dropdown-menu\" style=\"min-width: 5rem;\">
                             <li class=\"text-center\" ><a class='btn btn-info btn-xs pr-2 pl-2 status' data-id=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\" data-status=\"1\" href=\"#\">Actif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-primary btn-xs status'data-id=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\" data-status=\"0\" href=\"#\">Inactif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-dark btn-xs status' data-id=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\" data-status=\"2\" href=\"#\">Expert</a></li>
                             
                        </ul>
                    </div></td>
                    ";
            }
            // line 49
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "count", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td class=\"text-center \">
                    <a class='btn btn-success btn-xs pr-2 pl-2 tabAccueil' data-target=\"modifUser\" title=\"Modifier les données de l'utilisateur\" data-id=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" style=\"color: #FFF\" href=\"#\">Modifier</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
    <div class=\"pagination justify-content-center\">
        ";
        // line 58
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 58, $this->source); })()));
        echo "
    </div>
</div>
<script src=\"js/pagination.js\"></script>
<script src=\"js/Nav.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 58,  167 => 55,  157 => 51,  151 => 49,  143 => 44,  139 => 43,  135 => 42,  130 => 40,  127 => 39,  120 => 35,  116 => 34,  112 => 33,  107 => 31,  104 => 30,  102 => 29,  96 => 26,  92 => 25,  88 => 24,  83 => 22,  80 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-10 ml-auto mr-auto\">
    <i id=\"loupeDisplay\" data-target=\"listUser\" class=\"fas fa-search mt-2 mb-2\" aria-hidden=\"true\"></i>
    <table class=\"table table-striped table-responsive mx-auto\" style=\"width:90%\">
        <thead>
            <tr id=\"liste\">
                <th scope=\"col-sm-3\" data-search=\"first_name\">Prénom</th>
                <th scope=\"col-sm-3\" data-search=\"name\">Nom</th>
                <th scope=\"col-sm-3\" data-search=\"email\">Email</th>
                <th scope=\"col-sm-3\" >Statut</th>
                <th scope=\"col-sm-3\" >Souscriptions</th>
                <th scope=\"col-sm-3\" class=\"text-center\">Option</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                <tr>
                    <td>{{ user.firstName }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    {% if user.status == 0 %}
                    <td class=\"text-center\"><div class=\"btn-group dropup\">
                        <a id=\"{{ user.id }}\" class='btn btn-primary btn-xs pl-2 pr-2 ml-1' data-toggle=\"dropdown\"  title=\"Options\"href=\"#\">Inactif</a>
                        <ul class=\"dropdown-menu\" style=\"min-width: 5rem;\">
                             <li class=\"text-center\" ><a class='btn btn-info btn-xs pr-2 pl-2 status' data-id=\"{{ user.id }}\" data-status=\"1\" href=\"#\">Actif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-primary btn-xs status' data-id=\"{{ user.id }}\" data-status=\"0\"href=\"#\">Inactif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-dark btn-xs status' data-id=\"{{ user.id }}\" data-status=\"2\"href=\"#\">Expert</a></li>
                        </ul>
                    </div></td>
                    {% elseif user.status == 1 %}
                        <td class=\"text-center\"><div class=\"btn-group dropup\">
                        <a id=\"{{ user.id }}\" class='btn btn-info btn-xs pl-3 pr-3 ml-1' data-toggle=\"dropdown\"  title=\"Options\"href=\"#\">Actif</a>
                        <ul class=\"dropdown-menu\" style=\"min-width: 5rem;\">
                             <li class=\"text-center\" ><a class='btn btn-info btn-xs pr-2 pl-2 status' data-id=\"{{ user.id }}\" data-status=\"1\" href=\"#\">Actif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-primary btn-xs status'data-id=\"{{ user.id }}\" data-status=\"0\" href=\"#\">Inactif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-dark btn-xs status'data-id=\"{{ user.id }}\" data-status=\"2\" href=\"#\">Expert</a></li>
                        </ul>
                    </div></td>
                    {% else %}
                    <td class=\"text-center\"><div class=\"btn-group dropup\">
                        <a id=\"{{ user.id }}\"class='btn btn-dark btn-xs pl-2 pr-2 ml-1' data-toggle=\"dropdown\"  title=\"Options\"href=\"#\">Expert</a>
                        <ul class=\"dropdown-menu\" style=\"min-width: 5rem;\">
                             <li class=\"text-center\" ><a class='btn btn-info btn-xs pr-2 pl-2 status' data-id=\"{{ user.id }}\" data-status=\"1\" href=\"#\">Actif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-primary btn-xs status'data-id=\"{{ user.id }}\" data-status=\"0\" href=\"#\">Inactif</a></li>
                             <li class=\"text-center\" ><a class='btn btn-dark btn-xs status' data-id=\"{{ user.id }}\" data-status=\"2\" href=\"#\">Expert</a></li>
                             
                        </ul>
                    </div></td>
                    {% endif %}
                    <td>{{ user.count }}</td>
                    <td class=\"text-center \">
                    <a class='btn btn-success btn-xs pr-2 pl-2 tabAccueil' data-target=\"modifUser\" title=\"Modifier les données de l'utilisateur\" data-id=\"{{ user.id }}\" style=\"color: #FFF\" href=\"#\">Modifier</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div class=\"pagination justify-content-center\">
        {{ knp_pagination_render(users) }}
    </div>
</div>
<script src=\"js/pagination.js\"></script>
<script src=\"js/Nav.js\"></script>", "admin/listUser.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\admin\\listUser.html.twig");
    }
}
