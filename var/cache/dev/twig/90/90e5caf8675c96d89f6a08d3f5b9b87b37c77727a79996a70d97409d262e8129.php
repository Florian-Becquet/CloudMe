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

/* pages/facture.html.twig */
class __TwigTemplate_04569d8c88e301fd7ede288314da6b4561ac280cd875f202d8dd2dbd4df9785b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/facture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/facture.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"dist/css/bootstrap.css\" >
<link rel=\"stylesheet\" href=\"dist/css/style.css\" media=\"all\" />
    
      <p class=\"flotte\">
        <img src=\"dist/img/logo1.png\"/></p>
      <p style=\"line-height:65px;font-size:26px;margin-left:300px\">
        Facture n°";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["factureId"]) || array_key_exists("factureId", $context) ? $context["factureId"] : (function () { throw new RuntimeError('Variable "factureId" does not exist.', 7, $this->source); })()), "numeroFacture", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
        <hr>
      <div style=\"margin-top:100px;\">
        <div class=\"text-right position-absolute\" id=\"company\">
          <div>CloudMe</div>
          <div>455 Foggy Heights,<br /> AZ 85004, US</div>
          <div>03 20 20 20 20</div>
          <div><a href=\"mailto:cloudme@example.com\">cloudme@example.com</a></div>
        </div>
        <div class=\"text-left\" style=\"font-size:18px\" id=\"project\">
          <div style=\"font-size:24px\">Information client</div>
          <div><span>CLIENT</span> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "firstName", [], "any", false, false, false, 18), "html", null, true);
        echo "</div>
          <div><span>ADDRESS</span> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "adresse", [], "any", false, false, false, 19), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "ville", [], "any", false, false, false, 19), "html", null, true);
        echo "</div>
          <div><span>EMAIL</span> <a href=\"mailto:";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "</a></div>
          <div><span>Date de facturation:</span> ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["factureId"]) || array_key_exists("factureId", $context) ? $context["factureId"] : (function () { throw new RuntimeError('Variable "factureId" does not exist.', 21, $this->source); })()), "dateEdition", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
        echo "</div>
          <div><span>Somme prélevée à partir</span> ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["factureId"]) || array_key_exists("factureId", $context) ? $context["factureId"] : (function () { throw new RuntimeError('Variable "factureId" does not exist.', 22, $this->source); })()), "dateEcheance", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
        echo "</div>
        </div>
      </div>
      <table style=\"margin-top:190px;font-size:20px;\">
          <tr>
            <th style=\"width: 10%\">Référence</th>
            <th >Désignation</th>
            <th style=\"width: 5%\">Qte</th>
            <th style=\"width: 10%\">PU HT</th>
            <th style=\"width: 10%\">Total HT</th>
          </tr>
          ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userSub"]) || array_key_exists("userSub", $context) ? $context["userSub"] : (function () { throw new RuntimeError('Variable "userSub" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 34
            echo "        <tbody>
          <tr>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "subname", [], "any", false, false, false, 36)), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "headline", [], "any", false, false, false, 37), "html", null, true);
            echo " du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "dateSub", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
            echo " au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "lastDays", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>1</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, (twig_round(twig_get_attribute($this->env, $this->source, $context["data"], "price", [], "any", false, false, false, 39), 2, "floor") * 1), "html", null, true);
            echo "€</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, $context["data"], "price", [], "any", false, false, false, 40), 2, "floor"), "html", null, true);
            echo "€</td>
          </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </table>
      
      <table style=\"width:45%;font-size:18px; margin-left:294%;\">
          <tr>
            <th scope=\"col\">Total HT</th>
            <th scope=\"col\">Taux TVA</th>
            <th scope=\"col\">Total TVA</th>
            <th scope=\"col\">Total TTC</th>
          </tr>
        <tbody>
           <tr>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_round((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 55, $this->source); })()), 2, "floor"), "html", null, true);
        echo "€</td>
            <td>20,00%</td>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, (twig_round((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 57, $this->source); })()), 2, "floor") * twig_get_attribute($this->env, $this->source, (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 57, $this->source); })()), "taux", [], "any", false, false, false, 57)), "html", null, true);
        echo "€</td>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, (twig_round((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 58, $this->source); })()), 1, "floor") * (twig_get_attribute($this->env, $this->source, (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 58, $this->source); })()), "taux", [], "any", false, false, false, 58) + 1)), "html", null, true);
        echo "€</td>
          </tr> 
        </tbody>
      </table>
    <footer>
    Invoice was created on a computer and is valid without the signature and seal.
    </footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 58,  154 => 57,  149 => 55,  136 => 44,  126 => 40,  122 => 39,  113 => 37,  109 => 36,  105 => 34,  101 => 33,  87 => 22,  83 => 21,  77 => 20,  71 => 19,  65 => 18,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"dist/css/bootstrap.css\" >
<link rel=\"stylesheet\" href=\"dist/css/style.css\" media=\"all\" />
    
      <p class=\"flotte\">
        <img src=\"dist/img/logo1.png\"/></p>
      <p style=\"line-height:65px;font-size:26px;margin-left:300px\">
        Facture n°{{factureId.numeroFacture}}</p>
        <hr>
      <div style=\"margin-top:100px;\">
        <div class=\"text-right position-absolute\" id=\"company\">
          <div>CloudMe</div>
          <div>455 Foggy Heights,<br /> AZ 85004, US</div>
          <div>03 20 20 20 20</div>
          <div><a href=\"mailto:cloudme@example.com\">cloudme@example.com</a></div>
        </div>
        <div class=\"text-left\" style=\"font-size:18px\" id=\"project\">
          <div style=\"font-size:24px\">Information client</div>
          <div><span>CLIENT</span> {{app.user.name}} {{app.user.firstName}}</div>
          <div><span>ADDRESS</span> {{app.user.adresse}},{{app.user.ville}}</div>
          <div><span>EMAIL</span> <a href=\"mailto:{{app.user.email}}\">{{app.user.email}}</a></div>
          <div><span>Date de facturation:</span> {{factureId.dateEdition | date('d/m/Y')}}</div>
          <div><span>Somme prélevée à partir</span> {{factureId.dateEcheance | date('d/m/Y')}}</div>
        </div>
      </div>
      <table style=\"margin-top:190px;font-size:20px;\">
          <tr>
            <th style=\"width: 10%\">Référence</th>
            <th >Désignation</th>
            <th style=\"width: 5%\">Qte</th>
            <th style=\"width: 10%\">PU HT</th>
            <th style=\"width: 10%\">Total HT</th>
          </tr>
          {% for data in userSub %}
        <tbody>
          <tr>
            <td>{{data.subname | upper}}</td>
            <td>{{data.headline}} du {{data.dateSub | date('d/m/Y')}} au {{data.lastDays | date('d/m/Y')}}</td>
            <td>1</td>
            <td>{{data.price  | round(2, 'floor') * 1}}€</td>
            <td>{{data.price | round(2, 'floor') }}€</td>
          </tr>
        </tbody>
        {% endfor %}
      </table>
      
      <table style=\"width:45%;font-size:18px; margin-left:294%;\">
          <tr>
            <th scope=\"col\">Total HT</th>
            <th scope=\"col\">Taux TVA</th>
            <th scope=\"col\">Total TVA</th>
            <th scope=\"col\">Total TTC</th>
          </tr>
        <tbody>
           <tr>
            <td>{{totalPrice  | round(2, 'floor') }}€</td>
            <td>20,00%</td>
            <td>{{totalPrice  | round(2, 'floor') * tva.taux}}€</td>
            <td>{{totalPrice  | round(1, 'floor')  * (tva.taux + 1)}}€</td>
          </tr> 
        </tbody>
      </table>
    <footer>
    Invoice was created on a computer and is valid without the signature and seal.
    </footer>", "pages/facture.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\pages\\facture.html.twig");
    }
}
