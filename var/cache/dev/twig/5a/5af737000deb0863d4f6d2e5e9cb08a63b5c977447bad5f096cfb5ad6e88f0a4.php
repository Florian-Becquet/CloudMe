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

/* admin/listServ.html.twig */
class __TwigTemplate_6f1e56de45de476c79338e7624f8687923f8df7d7425a67fa7deb8925899fdbd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listServ.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listServ.html.twig"));

        // line 1
        echo "

<div class=\"col-10 ml-auto mr-auto\">

<i id=\"loupeDisplay\" data-target=\"listServ\" class=\"fas fa-search mt-2 mb-2\" aria-hidden=\"true\"></i>
    <table class=\"table table-responsive table-sm table-striped table-hover \">
    <thead>
        <tr id=\"liste\">
            <th scope=\"col\" data-search=\"headline\">headline</th>
            <th scope=\"col\" data-search=\"OS\">OS</th>
            <th scope=\"col\" data-search=\"package\">package</th>
            <th scope=\"col\" data-search=\"section\">section</th>
            <th scope=\"col\" data-search=\"type\">type</th>
            <th scope=\"col\" data-search=\"version\">version</th>
            <th scope=\"col\">disponible</th>
            <th scope=\"col\" data-search=\"service_type\">Type de service</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 21
            echo "            <tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "Id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "headline", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "os", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "package", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "section", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "type", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "version", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["service"], "available", [], "any", false, false, false, 28) == 1)) {
                // line 29
                echo "                    <td class=\"text-center\"><i class=\"fas fa-square text-success\" data-target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "Id", [], "any", false, false, false, 29), "html", null, true);
                echo "\"></i></td>
                ";
            } else {
                // line 31
                echo "                    <td class=\"text-center\"><i class=\"fas fa-square text-danger\" data-target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "Id", [], "any", false, false, false, 31), "html", null, true);
                echo "\"></i></td>
                ";
            }
            // line 33
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "serviceType", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
    </table>
    <div class=\"pagination justify-content-center\">
        ";
        // line 39
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 39, $this->source); })()));
        echo "
    </div>
</div>

<script src=\"js/pagination.js\"></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/listServ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  121 => 36,  111 => 33,  105 => 31,  99 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  68 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div class=\"col-10 ml-auto mr-auto\">

<i id=\"loupeDisplay\" data-target=\"listServ\" class=\"fas fa-search mt-2 mb-2\" aria-hidden=\"true\"></i>
    <table class=\"table table-responsive table-sm table-striped table-hover \">
    <thead>
        <tr id=\"liste\">
            <th scope=\"col\" data-search=\"headline\">headline</th>
            <th scope=\"col\" data-search=\"OS\">OS</th>
            <th scope=\"col\" data-search=\"package\">package</th>
            <th scope=\"col\" data-search=\"section\">section</th>
            <th scope=\"col\" data-search=\"type\">type</th>
            <th scope=\"col\" data-search=\"version\">version</th>
            <th scope=\"col\">disponible</th>
            <th scope=\"col\" data-search=\"service_type\">Type de service</th>
        </tr>
    </thead>
    <tbody>
        {% for service in services %}
            <tr id=\"{{ service.Id }}\">
                <td>{{ service.headline }}</td>
                <td>{{ service.os }}</td>
                <td>{{ service.package }}</td>
                <td>{{ service.section }}</td>
                <td>{{ service.type }}</td>
                <td>{{ service.version }}</td>
                {% if service.available == 1 %}
                    <td class=\"text-center\"><i class=\"fas fa-square text-success\" data-target=\"{{ service.Id }}\"></i></td>
                {% else %}
                    <td class=\"text-center\"><i class=\"fas fa-square text-danger\" data-target=\"{{ service.Id }}\"></i></td>
                {% endif %}
                <td>{{ service.serviceType }}</td>
            </tr>
        {% endfor %}
    </tbody>
    </table>
    <div class=\"pagination justify-content-center\">
        {{ knp_pagination_render(services) }}
    </div>
</div>

<script src=\"js/pagination.js\"></script>
", "admin/listServ.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\admin\\listServ.html.twig");
    }
}
