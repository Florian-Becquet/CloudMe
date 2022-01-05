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

/* pages/home.html.twig */
class __TwigTemplate_2e1ed61a303cf6b0c762044fdccdd52f60fb7ca75e8179a51c14d9604c85d033 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        // line 1
        echo "
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
  <div id=\"stockage\" style=\"display:none;\">
        <span id=\"totalCpu\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["maxCpu"]) || array_key_exists("maxCpu", $context) ? $context["maxCpu"] : (function () { throw new RuntimeError('Variable "maxCpu" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</span>
        <span id=\"totalRam\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["maxRam"]) || array_key_exists("maxRam", $context) ? $context["maxRam"] : (function () { throw new RuntimeError('Variable "maxRam" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</span>
        <span id=\"totalDisk\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["maxDisk"]) || array_key_exists("maxDisk", $context) ? $context["maxDisk"] : (function () { throw new RuntimeError('Variable "maxDisk" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</span>
        <span id=\"useCpu\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["CPU"]) || array_key_exists("CPU", $context) ? $context["CPU"] : (function () { throw new RuntimeError('Variable "CPU" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</span>
        <span id=\"useRam\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["RAM"]) || array_key_exists("RAM", $context) ? $context["RAM"] : (function () { throw new RuntimeError('Variable "RAM" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</span>
        <span id=\"useDisk\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["Disque"]) || array_key_exists("Disque", $context) ? $context["Disque"] : (function () { throw new RuntimeError('Variable "Disque" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</span>
    </div>
    <!-- /.content-header -->
   <section class=\"content\">
      <div class=\"container-fluid\">
        <!-- /.row -->
        <h1 class=\"text-center\"> Bonjour ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "firstName", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
        <hr>
        ";
        // line 19
        if ((isset($context["souscription"]) || array_key_exists("souscription", $context) ? $context["souscription"] : (function () { throw new RuntimeError('Variable "souscription" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "      <div class=\"row mt-4 justify-content-center text-right\">
        <div class=\"card col-12 col-sm-4 col-md-3\">
            <div class=\"card-body\">
                <h5 class=\"text-center\">CPU(";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["CPU"]) || array_key_exists("CPU", $context) ? $context["CPU"] : (function () { throw new RuntimeError('Variable "CPU" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["maxCpu"]) || array_key_exists("maxCpu", $context) ? $context["maxCpu"] : (function () { throw new RuntimeError('Variable "maxCpu" does not exist.', 23, $this->source); })()), "html", null, true);
            echo ")</h5>
                <p><canvas id=\"fromageTotalCpu\"></canvas></p>
                <h6 class=\"text-center\">Consommation:<span id=\"consoCpu\"></span> %</h6>
            </div>
        </div>
        <div class=\"card col-12 col-sm-4 col-md-3 ml-4 mr-4\">
          <div class=\"card-body\">
            <h5 class=\"text-center\">RAM(";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["RAM"]) || array_key_exists("RAM", $context) ? $context["RAM"] : (function () { throw new RuntimeError('Variable "RAM" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["maxRam"]) || array_key_exists("maxRam", $context) ? $context["maxRam"] : (function () { throw new RuntimeError('Variable "maxRam" does not exist.', 30, $this->source); })()), "html", null, true);
            echo " GB)</h5>
            <p><canvas id=\"fromageTotalRam\"></canvas></p>
            <h6 class=\"text-center\">Consommation:<span id=\"consoRam\"></span> %</h6>
          </div>
        </div>

          <!-- fix for small devices only -->
          <div class=\"clearfix hidden-md-up\"></div>

        <div class=\"card col-12 col-sm-4 col-md-3\">
          <div class=\"card-body\">
            <h5 class=\"text-center\">Disque(";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["Disque"]) || array_key_exists("Disque", $context) ? $context["Disque"] : (function () { throw new RuntimeError('Variable "Disque" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["maxDisk"]) || array_key_exists("maxDisk", $context) ? $context["maxDisk"] : (function () { throw new RuntimeError('Variable "maxDisk" does not exist.', 41, $this->source); })()), "html", null, true);
            echo " GB)</h5>
            <p><canvas id=\"fromageTotalDisk\"></canvas></p>
            <h6 class=\"text-center\">Consommation:<span id=\"consoDisk\"></span> %</h6>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 mr-auto ml-auto\">
        <table class=\"table table-head-fixed table-striped table-hover table-bordered table-sm\">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Headline</th>
                      <th>Type</th>
                      <th>Statut</th>
                    </tr>
                  </thead>
                  <tbody>
                  ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["souscription"]) || array_key_exists("souscription", $context) ? $context["souscription"] : (function () { throw new RuntimeError('Variable "souscription" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["allSub"]) {
                // line 59
                echo "                    <tr class=\"tabAccueil\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allSub"], "id", [], "any", false, false, false, 59), "html", null, true);
                echo "\" data-target =\"info\" data-class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allSub"], "type", [], "any", false, false, false, 59), "html", null, true);
                echo "\" style=\"cursor: pointer\">
                      <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allSub"], "name", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                      <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allSub"], "headline", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                      <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["allSub"], "type", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                      ";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["allSub"], "status", [], "any", false, false, false, 63) == "stopped")) {
                    // line 64
                    echo "                      <td class=\"text-danger text-center\"><i class=\"fas fa-times-circle\"></i></td>
                      ";
                } else {
                    // line 66
                    echo "                      <td class=\"text-success text-center\"><i class=\"fas fa-check\"></i></td>
                      ";
                }
                // line 68
                echo "                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allSub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                  </tbody>
                </table>
              </div>
            ";
        } else {
            // line 74
            echo "            <h1 class=\"text-center\">Vous n'avez souscris à aucun service</h1>
            ";
        }
        // line 76
        echo "          <!-- ./col -->
  <script src='js/Nav.js'></script>
  <script src=\"js/camembertTotal.js\"></script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 76,  189 => 74,  183 => 70,  176 => 68,  172 => 66,  168 => 64,  166 => 63,  162 => 62,  158 => 61,  154 => 60,  147 => 59,  143 => 58,  121 => 41,  105 => 30,  93 => 23,  88 => 20,  86 => 19,  79 => 17,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
  <div id=\"stockage\" style=\"display:none;\">
        <span id=\"totalCpu\">{{ maxCpu }}</span>
        <span id=\"totalRam\">{{ maxRam }}</span>
        <span id=\"totalDisk\">{{ maxDisk }}</span>
        <span id=\"useCpu\">{{ CPU }}</span>
        <span id=\"useRam\">{{ RAM }}</span>
        <span id=\"useDisk\">{{ Disque }}</span>
    </div>
    <!-- /.content-header -->
   <section class=\"content\">
      <div class=\"container-fluid\">
        <!-- /.row -->
        <h1 class=\"text-center\"> Bonjour {{app.user.name}} {{app.user.firstName}}</h1>
        <hr>
        {% if souscription %}
      <div class=\"row mt-4 justify-content-center text-right\">
        <div class=\"card col-12 col-sm-4 col-md-3\">
            <div class=\"card-body\">
                <h5 class=\"text-center\">CPU({{ CPU }}/{{ maxCpu }})</h5>
                <p><canvas id=\"fromageTotalCpu\"></canvas></p>
                <h6 class=\"text-center\">Consommation:<span id=\"consoCpu\"></span> %</h6>
            </div>
        </div>
        <div class=\"card col-12 col-sm-4 col-md-3 ml-4 mr-4\">
          <div class=\"card-body\">
            <h5 class=\"text-center\">RAM({{ RAM }}/{{ maxRam }} GB)</h5>
            <p><canvas id=\"fromageTotalRam\"></canvas></p>
            <h6 class=\"text-center\">Consommation:<span id=\"consoRam\"></span> %</h6>
          </div>
        </div>

          <!-- fix for small devices only -->
          <div class=\"clearfix hidden-md-up\"></div>

        <div class=\"card col-12 col-sm-4 col-md-3\">
          <div class=\"card-body\">
            <h5 class=\"text-center\">Disque({{ Disque }}/{{ maxDisk }} GB)</h5>
            <p><canvas id=\"fromageTotalDisk\"></canvas></p>
            <h6 class=\"text-center\">Consommation:<span id=\"consoDisk\"></span> %</h6>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 mr-auto ml-auto\">
        <table class=\"table table-head-fixed table-striped table-hover table-bordered table-sm\">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Headline</th>
                      <th>Type</th>
                      <th>Statut</th>
                    </tr>
                  </thead>
                  <tbody>
                  {% for allSub in souscription %}
                    <tr class=\"tabAccueil\" data-id=\"{{ allSub.id }}\" data-target =\"info\" data-class=\"{{ allSub.type }}\" style=\"cursor: pointer\">
                      <td>{{ allSub.name }}</td>
                      <td>{{ allSub.headline }}</td>
                      <td>{{ allSub.type }}</td>
                      {% if allSub.status == \"stopped\" %}
                      <td class=\"text-danger text-center\"><i class=\"fas fa-times-circle\"></i></td>
                      {% else %}
                      <td class=\"text-success text-center\"><i class=\"fas fa-check\"></i></td>
                      {% endif %}
                    </tr>
                  {% endfor %}
                  </tbody>
                </table>
              </div>
            {% else %}
            <h1 class=\"text-center\">Vous n'avez souscris à aucun service</h1>
            {% endif %}
          <!-- ./col -->
  <script src='js/Nav.js'></script>
  <script src=\"js/camembertTotal.js\"></script>

", "pages/home.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\pages\\home.html.twig");
    }
}
