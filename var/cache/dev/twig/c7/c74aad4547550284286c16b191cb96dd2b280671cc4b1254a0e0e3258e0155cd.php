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

/* pages/info.html.twig */
class __TwigTemplate_dd65cafa6d1ea45528590cbc89b92be5a0f04819137ad76ab2fd5be9d6179176 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/info.html.twig"));

        // line 1
        echo "

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 4
            echo "    <h3 class=\"lead text-center mb-1\"> Données du service : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "headline", [], "any", false, false, false, 4), "html", null, true);
            echo "</h3>
    <h4 class=\"lead text-center mb-4\"> Coût de la configuration : <strong>";
            // line 5
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, $context["data"], "price", [], "any", false, false, false, 5), 2, "floor"), "html", null, true);
            echo "€/mois</strong></h4>
    ";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, $context["data"], "status", [], "any", false, false, false, 6) != 0)) {
                // line 7
                echo "      <div  id=\"subFin\" class=\"alert alert-danger col-md-4 offset-md-4 mb-2\" >
        Votre abonnement a ce service s'arrete le ";
                // line 8
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "dateFin", [], "any", false, false, false, 8), "d/m/Y"), "html", null, true);
                echo "
      </div>
      ";
            }
            // line 11
            echo "        <div id=\"finSub\" class=\"alert alert-danger col-md-4 offset-md-4 mb-2\" style=\"display: none;\">
        </div>
        <div id=\"issueAPI\" class=\"alert alert-danger col-md-4 offset-md-4 mb-2\" style=\"display: none;\">
        </div>
    <div class=\"container \">
    <div class=\"row custyle\">
    <div class=\"col-md-12 table-responsive mb-5\">
    <table class=\"table table-striped custab mx-auto\" style=\"width:90%\">
    <thead> 
    
        <tr>
            <th>Backup</th>
            <th>Nom</th>
            <th>CPU</th>
            <th>RAM</th>
            <th>Espace disque</th>
            <th>HA</th>
            <th>Replication</th>
            <th>Jour de rétention</th>
            <th>IP</th>
            <th>Statut</th>
          
            
            <th class=\"\">Options</th>
        </tr>
    </thead>
            <tr>
                <td>
                <img title=\"voir les sauvegardes de données\" src=\"dist/img/plus.png\" id=\"imgRetention\">
                </td>
                <td id=\"serviceName\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "cpu", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "ram", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "space", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td><i id=\"protection\"></i></td>
                <td><i id=\"replication\"></i></td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "backup", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "ip", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td id=\"currentStatus\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "currentStatus", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>

                <td class=\"text-center\">
                ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["data"], "currentStatus", [], "any", false, false, false, 52) == "stopped")) {
                // line 53
                echo "                <a class='btn btn-success btn-xs pl-2 pr-2 actionServeur' title=\"Lancer le serveur\"href=\"#\" data-target=\"startCT\" id=\"play\"><span class=\"fas fa-play\"></span></a> 
                 <a style=\"display: none\" href=\"#\" title=\"Arreter le serveur\"class=\"btn btn-danger btn-xs pl-2 pr-2 actionServeur\" data-target=\"stopCT\"id=\"stop\"><span class=\"fas fa-stop\"></span></a>
                ";
            } else {
                // line 56
                echo "                <a href=\"#\" title=\"Arreter le serveur\"class=\"btn btn-danger btn-xs pl-2 pr-2 actionServeur\" data-target=\"stopCT\" id=\"stop\"><span class=\"fas fa-stop\"></span></a>
                <a style=\"display: none\" class='btn btn-success btn-xs pl-2 pr-2 actionServeur' title=\"Lancer le serveur\"href=\"#\" data-target=\"startCT\" id=\"play\"><span class=\"fas fa-play\"></span></a>
                ";
            }
            // line 59
            echo "                <div class=\"btn-group dropup\">
                        <a class='btn btn-warning btn-xs pl-2 pr-2 ' data-toggle=\"dropdown\"  title=\"Options\"href=\"#\"><i class=\"fa fa-caret-up\"  style=\"color:white;\"></i></a>
                        <div class=\"dropdown-menu \">
                             <a class='btn btn-info btn-xs pl-2 pr-2 ml-4'   id=\"desktop\" title=\"Ouvrir la console\"><i class=\"fas fa-desktop\"  style=\"color:white;\"></i></a>
                             <button class='btn btn-success btn-xs pl-2 pr-2 ml-2' id=\"backup\" data-target=\"createBackup\" title=\"Créer un backup\" href=\"#\"><i class=\"fas fa-save\" style=\"color:white;\"></i></button>
                             
                             <a class='btn btn-dark btn-xs pl-2 pr-2 ml-2'   title=\"Options\"href=\"#\"><i class=\"fas fa-cog \"  style=\"color:white;\"></i></a>
                             
                        </div>
                          
                </div>
                ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, $context["data"], "status", [], "any", false, false, false, 70) == 0)) {
                // line 71
                echo "                <a class='btn btn-danger btn-xs pr-2 pl-2 ' data-target=\"unsubUser\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 71), "html", null, true);
                echo "\" id=\"unSub\" title=\"Se désabonner\"  style=\"color: #FFF\" href=\"#\"><i class=\"fas fa-trash\"></i></a>
                <a class='btn  btn-xs pr-2 pl-2 btn-primary' data-target=\"reSubUser\" data-id=\"";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 72), "html", null, true);
                echo "\" id=\"reSub\" title=\"Se réabonner\"  style=\"color: #FFF; display: none\" href=\"#\"><i class=\"fas fa-redo\"></i></a> 
                 ";
            } else {
                // line 74
                echo "                 <a class='btn btn-danger btn-xs pr-2 pl-2 ' data-target=\"unsubUser\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 74), "html", null, true);
                echo "\" id=\"unSub\" title=\"Se désabonner\"  style=\"color: #FFF; display: none\" href=\"#\"><i class=\"fas fa-trash\"></i></a>
                <a class='btn  btn-xs pr-2 pl-2 btn-primary' data-target=\"reSubUser\" data-id=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 75), "html", null, true);
                echo "\" id=\"reSub\" title=\"Se réabonner\"  style=\"color: #FFF\" href=\"#\"><i class=\"fas fa-redo\"></i></a>            
                  ";
            }
            // line 77
            echo "                </td>
            </tr>
          </table>
          ";
            // line 80
            if ((isset($context["dateTime"]) || array_key_exists("dateTime", $context) ? $context["dateTime"] : (function () { throw new RuntimeError('Variable "dateTime" does not exist.', 80, $this->source); })())) {
                // line 81
                echo "            <table class=\"table table-striped custab mx-auto saveTab\" style=\"width:90%;display: none\">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Date</th>
                  <th>Format</th>
                  <th>Taille</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              
                ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dateTime"]) || array_key_exists("dateTime", $context) ? $context["dateTime"] : (function () { throw new RuntimeError('Variable "dateTime" does not exist.', 93, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["volidDate"]) {
                    // line 94
                    echo "                <tr>
                  <td>";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["volidDate"], "name", [], "any", false, false, false, 95), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["volidDate"], "dateBackup", [], "any", false, false, false, 96), "html", null, true);
                    echo " à ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["volidDate"], "timeBackup", [], "any", false, false, false, 96), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 97
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["volidDate"], "format", [], "any", false, false, false, 97), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 98
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["volidDate"], "size", [], "any", false, false, false, 98) / 1024) / 1024), 2), "html", null, true);
                    echo " MB</td>
                  <td><a data-volid=\"";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["volidDate"], "volid", [], "any", false, false, false, 99), "html", null, true);
                    echo "\" class='btn btn-success btn-xs pl-2 pr-2 restore' title=\"Restaurer à partir de cette sauvegarde\" data-target=\"restoreBackup\" href=\"#\"><span class=\"fas fa-undo-alt\"></span></a></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['volidDate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "              </tbody>
            </table> 
            ";
            }
            // line 105
            echo "        </div>
      </div>
    </div>
    <div id=\"stockage\" style=\"display:none;\">
        <span id=\"cpu\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "cpu", [], "any", false, false, false, 109), "html", null, true);
            echo "</span>
        <span id=\"ram\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "ram", [], "any", false, false, false, 110), "html", null, true);
            echo "</span>
        <span id=\"space\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "space", [], "any", false, false, false, 111), "html", null, true);
            echo "</span>
        <span id=\"prot\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "protection", [], "any", false, false, false, 112), "html", null, true);
            echo "</span>
        <span id=\"repli\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "replication", [], "any", false, false, false, 113), "html", null, true);
            echo "</span>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-12 text-center\">
        <h4>CPU</h4>
        
        <canvas id=\"fromageCpu\"></canvas>
        </div>
         <div class=\"col-md-4 col-sm-12 text-center\">
         <h4>RAM</h4>
      
        <canvas id=\"fromageRam\"></canvas>
        </div>
         <div class=\"col-md-4 col-sm-12 text-center\">
         <h4>Espace disque</h4>
       
        <canvas id=\"fromageEspace\"></canvas>
        </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "<div id=\"stockageResources\" style=\"display: none;\">
 
        <span id=\"cpuR\">";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 135, $this->source); })()), "cpu", [], "any", false, false, false, 135), "html", null, true);
        echo "</span>
        <span id=\"ramR\">";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 136, $this->source); })()), "mem", [], "any", false, false, false, 136), "html", null, true);
        echo "</span>
        <span id=\"diskR\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 137, $this->source); })()), "disk", [], "any", false, false, false, 137), "html", null, true);
        echo "</span>        
        <span id=\"maxdisk\">";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 138, $this->source); })()), "maxdisk", [], "any", false, false, false, 138), "html", null, true);
        echo "</span>
        <span id=\"maxram\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 139, $this->source); })()), "maxmem", [], "any", false, false, false, 139), "html", null, true);
        echo "</span>
        <span id=\"maxcpu\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 140, $this->source); })()), "maxcpu", [], "any", false, false, false, 140), "html", null, true);
        echo "</span>
        <span id=\"uptime\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new RuntimeError('Variable "resources" does not exist.', 141, $this->source); })()), "uptime", [], "any", false, false, false, 141), "html", null, true);
        echo "</span>
        
  
</div>
<div class=\"d-flex justify-content-around mt-2\">
  <h5 id=\"cpuPourcent\"></h5>
  <h5 id=\"ramPourcent\"></h5>
  <h5 id=\"spacePourcent\"></h5>
</div>
<script src=\"js/camembert.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 141,  314 => 140,  310 => 139,  306 => 138,  302 => 137,  298 => 136,  294 => 135,  290 => 133,  264 => 113,  260 => 112,  256 => 111,  252 => 110,  248 => 109,  242 => 105,  237 => 102,  228 => 99,  224 => 98,  220 => 97,  214 => 96,  210 => 95,  207 => 94,  203 => 93,  189 => 81,  187 => 80,  182 => 77,  177 => 75,  172 => 74,  167 => 72,  162 => 71,  160 => 70,  147 => 59,  142 => 56,  137 => 53,  135 => 52,  129 => 49,  125 => 48,  121 => 47,  115 => 44,  111 => 43,  107 => 42,  103 => 41,  71 => 11,  65 => 8,  62 => 7,  60 => 6,  56 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% for data in info %}
    <h3 class=\"lead text-center mb-1\"> Données du service : {{ data.headline }}</h3>
    <h4 class=\"lead text-center mb-4\"> Coût de la configuration : <strong>{{ data.price | round(2, 'floor') }}€/mois</strong></h4>
    {% if data.status != 0 %}
      <div  id=\"subFin\" class=\"alert alert-danger col-md-4 offset-md-4 mb-2\" >
        Votre abonnement a ce service s'arrete le {{ data.dateFin | date('d/m/Y')}}
      </div>
      {% endif %}
        <div id=\"finSub\" class=\"alert alert-danger col-md-4 offset-md-4 mb-2\" style=\"display: none;\">
        </div>
        <div id=\"issueAPI\" class=\"alert alert-danger col-md-4 offset-md-4 mb-2\" style=\"display: none;\">
        </div>
    <div class=\"container \">
    <div class=\"row custyle\">
    <div class=\"col-md-12 table-responsive mb-5\">
    <table class=\"table table-striped custab mx-auto\" style=\"width:90%\">
    <thead> 
    
        <tr>
            <th>Backup</th>
            <th>Nom</th>
            <th>CPU</th>
            <th>RAM</th>
            <th>Espace disque</th>
            <th>HA</th>
            <th>Replication</th>
            <th>Jour de rétention</th>
            <th>IP</th>
            <th>Statut</th>
          
            
            <th class=\"\">Options</th>
        </tr>
    </thead>
            <tr>
                <td>
                <img title=\"voir les sauvegardes de données\" src=\"dist/img/plus.png\" id=\"imgRetention\">
                </td>
                <td id=\"serviceName\">{{ data.name }}</td>
                <td>{{data.cpu}}</td>
                <td>{{ data.ram }}</td>
                <td>{{ data.space }}</td>
                <td><i id=\"protection\"></i></td>
                <td><i id=\"replication\"></i></td>
                <td>{{data.backup}}</td>
                <td>{{data.ip}}</td>
                <td id=\"currentStatus\">{{ data.currentStatus }}</td>

                <td class=\"text-center\">
                {% if data.currentStatus == \"stopped\" %}
                <a class='btn btn-success btn-xs pl-2 pr-2 actionServeur' title=\"Lancer le serveur\"href=\"#\" data-target=\"startCT\" id=\"play\"><span class=\"fas fa-play\"></span></a> 
                 <a style=\"display: none\" href=\"#\" title=\"Arreter le serveur\"class=\"btn btn-danger btn-xs pl-2 pr-2 actionServeur\" data-target=\"stopCT\"id=\"stop\"><span class=\"fas fa-stop\"></span></a>
                {% else %}
                <a href=\"#\" title=\"Arreter le serveur\"class=\"btn btn-danger btn-xs pl-2 pr-2 actionServeur\" data-target=\"stopCT\" id=\"stop\"><span class=\"fas fa-stop\"></span></a>
                <a style=\"display: none\" class='btn btn-success btn-xs pl-2 pr-2 actionServeur' title=\"Lancer le serveur\"href=\"#\" data-target=\"startCT\" id=\"play\"><span class=\"fas fa-play\"></span></a>
                {% endif %}
                <div class=\"btn-group dropup\">
                        <a class='btn btn-warning btn-xs pl-2 pr-2 ' data-toggle=\"dropdown\"  title=\"Options\"href=\"#\"><i class=\"fa fa-caret-up\"  style=\"color:white;\"></i></a>
                        <div class=\"dropdown-menu \">
                             <a class='btn btn-info btn-xs pl-2 pr-2 ml-4'   id=\"desktop\" title=\"Ouvrir la console\"><i class=\"fas fa-desktop\"  style=\"color:white;\"></i></a>
                             <button class='btn btn-success btn-xs pl-2 pr-2 ml-2' id=\"backup\" data-target=\"createBackup\" title=\"Créer un backup\" href=\"#\"><i class=\"fas fa-save\" style=\"color:white;\"></i></button>
                             
                             <a class='btn btn-dark btn-xs pl-2 pr-2 ml-2'   title=\"Options\"href=\"#\"><i class=\"fas fa-cog \"  style=\"color:white;\"></i></a>
                             
                        </div>
                          
                </div>
                {% if data.status == 0 %}
                <a class='btn btn-danger btn-xs pr-2 pl-2 ' data-target=\"unsubUser\" data-id=\"{{ data.id }}\" id=\"unSub\" title=\"Se désabonner\"  style=\"color: #FFF\" href=\"#\"><i class=\"fas fa-trash\"></i></a>
                <a class='btn  btn-xs pr-2 pl-2 btn-primary' data-target=\"reSubUser\" data-id=\"{{ data.id }}\" id=\"reSub\" title=\"Se réabonner\"  style=\"color: #FFF; display: none\" href=\"#\"><i class=\"fas fa-redo\"></i></a> 
                 {% else %}
                 <a class='btn btn-danger btn-xs pr-2 pl-2 ' data-target=\"unsubUser\" data-id=\"{{ data.id }}\" id=\"unSub\" title=\"Se désabonner\"  style=\"color: #FFF; display: none\" href=\"#\"><i class=\"fas fa-trash\"></i></a>
                <a class='btn  btn-xs pr-2 pl-2 btn-primary' data-target=\"reSubUser\" data-id=\"{{ data.id }}\" id=\"reSub\" title=\"Se réabonner\"  style=\"color: #FFF\" href=\"#\"><i class=\"fas fa-redo\"></i></a>            
                  {% endif %}
                </td>
            </tr>
          </table>
          {% if dateTime %}
            <table class=\"table table-striped custab mx-auto saveTab\" style=\"width:90%;display: none\">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Date</th>
                  <th>Format</th>
                  <th>Taille</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              
                {% for volidDate in dateTime %}
                <tr>
                  <td>{{ volidDate.name }}</td>
                  <td>{{ volidDate.dateBackup}} à {{ volidDate.timeBackup }}</td>
                  <td>{{ volidDate.format }}</td>
                  <td>{{ (volidDate.size / 1024 / 1024) | number_format(2)}} MB</td>
                  <td><a data-volid=\"{{volidDate.volid}}\" class='btn btn-success btn-xs pl-2 pr-2 restore' title=\"Restaurer à partir de cette sauvegarde\" data-target=\"restoreBackup\" href=\"#\"><span class=\"fas fa-undo-alt\"></span></a></td>
                </tr>
                {% endfor %}
              </tbody>
            </table> 
            {% endif %}
        </div>
      </div>
    </div>
    <div id=\"stockage\" style=\"display:none;\">
        <span id=\"cpu\">{{ data.cpu }}</span>
        <span id=\"ram\">{{ data.ram }}</span>
        <span id=\"space\">{{ data.space }}</span>
        <span id=\"prot\">{{ data.protection }}</span>
        <span id=\"repli\">{{ data.replication }}</span>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-12 text-center\">
        <h4>CPU</h4>
        
        <canvas id=\"fromageCpu\"></canvas>
        </div>
         <div class=\"col-md-4 col-sm-12 text-center\">
         <h4>RAM</h4>
      
        <canvas id=\"fromageRam\"></canvas>
        </div>
         <div class=\"col-md-4 col-sm-12 text-center\">
         <h4>Espace disque</h4>
       
        <canvas id=\"fromageEspace\"></canvas>
        </div>
</div>
{% endfor %}
<div id=\"stockageResources\" style=\"display: none;\">
 
        <span id=\"cpuR\">{{ resources.cpu }}</span>
        <span id=\"ramR\">{{ resources.mem }}</span>
        <span id=\"diskR\">{{ resources.disk }}</span>        
        <span id=\"maxdisk\">{{ resources.maxdisk }}</span>
        <span id=\"maxram\">{{ resources.maxmem }}</span>
        <span id=\"maxcpu\">{{ resources.maxcpu }}</span>
        <span id=\"uptime\">{{ resources.uptime }}</span>
        
  
</div>
<div class=\"d-flex justify-content-around mt-2\">
  <h5 id=\"cpuPourcent\"></h5>
  <h5 id=\"ramPourcent\"></h5>
  <h5 id=\"spacePourcent\"></h5>
</div>
<script src=\"js/camembert.js\"></script>", "pages/info.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\pages\\info.html.twig");
    }
}
