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

/* pages/infoFacture.html.twig */
class __TwigTemplate_881b1b3360b561e0e0a80f0a5f47c53a67a5b61849948159fe41c982cd0410f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/infoFacture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/infoFacture.html.twig"));

        // line 1
        echo "<div class=\"col-10 ml-auto mr-auto\">
  <i id=\"loupeDisplay\" data-target=\"infofacture\" class=\"fas fa-search mt-2 mb-2\" aria-hidden=\"true\"></i>
</div>
<table class=\"table table-striped table-responsive mx-auto\" style=\"width:90%\">
  <thead>
    <tr id=\"liste\">
      <th scope=\"col-sm-3\" data-search=\"numero_facture\">N°facture</th>
      <th scope=\"col-sm-3\" data-search=\"date_edition\">Date édition</th>
      <th scope=\"col-sm-3\">Type de paiement</th>
      <th scope=\"col-sm-3\">Etat</th>
      <th scope=\"col-sm-3\">Total TTC</th>
      <th scope=\"col-sm-3\">Export</th>
    </tr>
  </thead>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 16
            echo "  <tbody>
    <tr>
      <th>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "numeroFacture", [], "any", false, false, false, 18), "html", null, true);
            echo "</th>
      <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateEdition", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
            echo "</td>
      <td>CB</td>
      <td>";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 21) == "Payé")) {
                // line 22
                echo "      <span class=\"badge badge-success\">
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 23
$context["facture"], "etat", [], "any", false, false, false, 23) == "En attente")) {
                // line 24
                echo "      <span class=\"badge badge-warning\">
      ";
            } else {
                // line 26
                echo "      <span class=\"badge badge-danger\">
      ";
            }
            // line 28
            echo "      ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "etat", [], "any", false, false, false, 28), "html", null, true);
            echo "</span></td>
      
      <td>";
            // line 30
            echo twig_escape_filter($this->env, (twig_round(twig_get_attribute($this->env, $this->source, $context["facture"], "price", [], "any", false, false, false, 30), 1, "floor") * (twig_get_attribute($this->env, $this->source, (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 30, $this->source); })()), "taux", [], "any", false, false, false, 30) + 1)), "html", null, true);
            echo "€</td>
      <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">
        <i class=\"fas fa-file-pdf\"></i> PDF
        </a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  </tbody>
</table>
<div class=\"pagination justify-content-center\">
  ";
        // line 39
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 39, $this->source); })()));
        echo "
  </div>
<script src=\"js/pagination.js\"></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/infoFacture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 39,  112 => 36,  101 => 31,  97 => 30,  91 => 28,  87 => 26,  83 => 24,  81 => 23,  78 => 22,  76 => 21,  71 => 19,  67 => 18,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-10 ml-auto mr-auto\">
  <i id=\"loupeDisplay\" data-target=\"infofacture\" class=\"fas fa-search mt-2 mb-2\" aria-hidden=\"true\"></i>
</div>
<table class=\"table table-striped table-responsive mx-auto\" style=\"width:90%\">
  <thead>
    <tr id=\"liste\">
      <th scope=\"col-sm-3\" data-search=\"numero_facture\">N°facture</th>
      <th scope=\"col-sm-3\" data-search=\"date_edition\">Date édition</th>
      <th scope=\"col-sm-3\">Type de paiement</th>
      <th scope=\"col-sm-3\">Etat</th>
      <th scope=\"col-sm-3\">Total TTC</th>
      <th scope=\"col-sm-3\">Export</th>
    </tr>
  </thead>
  {% for facture in factures %}
  <tbody>
    <tr>
      <th>{{facture.numeroFacture}}</th>
      <td>{{facture.dateEdition | date('d/m/Y')}}</td>
      <td>CB</td>
      <td>{% if facture.etat == \"Payé\" %}
      <span class=\"badge badge-success\">
      {% elseif facture.etat == \"En attente\" %}
      <span class=\"badge badge-warning\">
      {% else %}
      <span class=\"badge badge-danger\">
      {% endif %}
      {{facture.etat}}</span></td>
      
      <td>{{facture.price | round(1, 'floor')  * (tva.taux + 1) }}€</td>
      <td><a href=\"{{path('facture', {'id':facture.id}) }}\">
        <i class=\"fas fa-file-pdf\"></i> PDF
        </a></td>
    </tr>
    {% endfor %}
  </tbody>
</table>
<div class=\"pagination justify-content-center\">
  {{ knp_pagination_render(factures) }}
  </div>
<script src=\"js/pagination.js\"></script>
", "pages/infoFacture.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\pages\\infoFacture.html.twig");
    }
}
