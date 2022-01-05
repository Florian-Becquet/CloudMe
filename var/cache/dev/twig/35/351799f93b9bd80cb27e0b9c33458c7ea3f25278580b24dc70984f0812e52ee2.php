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

/* admin/changePrice.html.twig */
class __TwigTemplate_9d64197b6b91341c6471c4211133ec7dc467197df92c39010db92d6b1b47e69c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/changePrice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/changePrice.html.twig"));

        // line 1
        echo "<div class=\"col-4 ml-auto mr-auto\">
    <table class=\"table table-striped table-hover table-bordered table-sm\">
        <thead>
            <tr>
            <th scope=\"col\">Categories</th>
            <th scope=\"col\">Unité</th>
            <th scope=\"col\">Prix</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new RuntimeError('Variable "prices" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 12
            echo "            <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "categories", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "unit", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            <td class=\"modifPrice\" data-id=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "categories", [], "any", false, false, false, 15), "html", null, true);
            echo "\" contenteditable=\"true\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "price", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </tbody>
    </table>
    <div class=\"text-right\">
        <button class=\"btn btn-primary\" id=\"changePrice\">Modifier les prix</button>
    </div>
</div>
<script src=\"js/changePrice.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/changePrice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  70 => 15,  66 => 14,  62 => 13,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-4 ml-auto mr-auto\">
    <table class=\"table table-striped table-hover table-bordered table-sm\">
        <thead>
            <tr>
            <th scope=\"col\">Categories</th>
            <th scope=\"col\">Unité</th>
            <th scope=\"col\">Prix</th>
            </tr>
        </thead>
        <tbody>
            {% for price in prices %}
            <tr>
            <td>{{ price.categories }}</td>
            <td>{{ price.unit }}</td>
            <td class=\"modifPrice\" data-id=\"{{ price.categories }}\" contenteditable=\"true\">{{ price.price }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    <div class=\"text-right\">
        <button class=\"btn btn-primary\" id=\"changePrice\">Modifier les prix</button>
    </div>
</div>
<script src=\"js/changePrice.js\"></script>", "admin/changePrice.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\admin\\changePrice.html.twig");
    }
}
