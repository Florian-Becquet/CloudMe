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

/* registration/register.html.twig */
class __TwigTemplate_b7eb78bee4dd316e01edbda5bfdff1fefd3330b3c5a21fd498b98b53b935ab7d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>CloudMe Page de création de compte</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- icheck bootstrap -->
  <link rel=\"stylesheet\" href=\"plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
  <!-- Google Font: Source Sans Pro -->
  <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "<body class=\"hold-transition register-page\">
<div class=\"register-box col-6\">
  <div class=\"register-logo\">
    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><b>Cloud</b>Me</a>
  </div>

  <div class=\"card col-12 text-center\">
    <div class=\"card-body register-card-body ml-4 \" >
      <p class=\"login-box-msg\">Créer un compte</p>
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "valid", [], "any", false, false, false, 34)) {
            // line 35
            echo "    <ul class=\"alert alert-danger\">
        ";
            // line 37
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "children", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 38
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 39
                    echo "                <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 39), "html", null, true);
                    echo " </li> ";
                    // line 40
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    </ul>
";
        }
        // line 44
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), 'form_start');
        echo "
        <div class=\"input-group mb-3 d-flex justify-content-around\">
        <div class=\"d-flex\" >
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), 'row');
        echo "
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\" >
              <span class=\"fas fa-user\"></span>
            </div>
          </div>
        </div>
        
             <div class=\"d-flex\">
          ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "first_name", [], "any", false, false, false, 56), 'row');
        echo "
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-user\"></span>
            </div>
          </div>
          </div>
        </div>
        <div class=\"input-group mb-3 d-flex justify-content-around\">
        <div class=\"d-flex\">
          ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'row');
        echo "
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-envelope\"></span>
            </div>
          </div>
        </div>
        <div class=\"d-flex\">
          ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "numero_tel", [], "any", false, false, false, 74), 'row');
        echo "
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-phone\"></span>
            </div>
          </div>
          </div>
        </div>
        <div class=\"input-group mb-3 d-flex justify-content-around\">
        <div class=\"d-flex\">
          ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "plainPassword", [], "any", false, false, false, 84), 'row');
        echo "
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
        </div>
        <div class=\"d-flex\">
        <div>
          <input type=\"password\" class=\"form-control\" placeholder=\"Vérification du mot de passe\" id=\"verifPwd\">
          
          </div>
          
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
          </div>
        </div>
        <div class=\"mb-2\">
        <span id=\"messagePwd\"></span>
        </div>
        <div class=\"input-group mb-3 d-flex justify-content-around\">
        <div class=\"d-flex\">
          ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), "adresse", [], "any", false, false, false, 109), 'row');
        echo "
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-map\"></span>
            </div>
          </div>
        </div>
        <div class=\"d-flex\">
          ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 117, $this->source); })()), "pays", [], "any", false, false, false, 117), 'row');
        echo "
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-flag\"></span>
            </div>
          </div>
          </div>
        </div>
        <div class=\"input-group mb-3 justify-content-around\">
        <div class=\"d-flex\">
          ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 127, $this->source); })()), "ville", [], "any", false, false, false, 127), 'row');
        echo "
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-city\"></span>
            </div>
          </div>
        </div>
        <div class=\"d-flex\">
          ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 135, $this->source); })()), "codePostal", [], "any", false, false, false, 135), 'row');
        echo "
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-building\"></span>
            </div>
          </div>
          </div>
        </div>
      
        <div class=\"input-group mb-3   d-flex justify-content-center\">
          ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 145, $this->source); })()), "formeJuridique", [], "any", false, false, false, 145), 'row');
        echo "
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-hand-pointer\"></span>
            </div>
          </div>
        </div>
        <div style=\"display:none;\" id=\"infoEntreprise\">
          <div class=\"input-group mb-3 d-flex justify-content-around\" >
          <div class=\"d-flex\">
            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 155, $this->source); })()), "societyName", [], "any", false, false, false, 155), 'row');
        echo "
            <div class=\"input-group-append\" style=\"height: 38px\">
              <div class=\"input-group-text\">
                <span class=\"fas fa-address-card\"></span>
              </div>
            </div>
            </div>
            <div class=\"d-flex\">
            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 163, $this->source); })()), "num_siret", [], "any", false, false, false, 163), 'row');
        echo "
            <div class=\"input-group-append\" style=\"height: 38px\">
              <div class=\"input-group-text\">
                <span class=\"fas fa-sort-numeric-up-alt\"></span>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class=\"row d-flex \">
          <div class=\"col-8 \">
            <div class=\"icheck-primary d-flex ml-5\"  >
            ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 175, $this->source); })()), "agreeTerms", [], "any", false, false, false, 175), 'row');
        echo "
              <label for=\"agreeTerms\">
              
               J'accepte les <a href=\"#\">conditions générales</a>
              </label>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"row mt-2 mb-2  d-flex justify-content-center\">
          <div class=\"col-6\">
            <button type=\"submit\" id=\"buttonRegister\" class=\"btn btn-primary pr-3 pl-3\">Valider</button>
          </div>
        </div>
      ";
        // line 189
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 189, $this->source); })()), 'form_end');
        echo "

      <a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"text-center \">J'ai déja un compte.</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src=\"plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/adminlte.min.js\"></script>

<script src=\"js/register.js\"></script>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  341 => 191,  336 => 189,  319 => 175,  304 => 163,  293 => 155,  280 => 145,  267 => 135,  256 => 127,  243 => 117,  232 => 109,  204 => 84,  191 => 74,  180 => 66,  167 => 56,  155 => 47,  148 => 44,  144 => 42,  138 => 41,  132 => 40,  128 => 39,  123 => 38,  118 => 37,  115 => 35,  112 => 34,  103 => 32,  99 => 31,  90 => 25,  85 => 22,  66 => 21,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>CloudMe Page de création de compte</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- icheck bootstrap -->
  <link rel=\"stylesheet\" href=\"plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
  <!-- Google Font: Source Sans Pro -->
  <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
{% block body %}
<body class=\"hold-transition register-page\">
<div class=\"register-box col-6\">
  <div class=\"register-logo\">
    <a href=\"{{path('app_login')}}\"><b>Cloud</b>Me</a>
  </div>

  <div class=\"card col-12 text-center\">
    <div class=\"card-body register-card-body ml-4 \" >
      <p class=\"login-box-msg\">Créer un compte</p>
      {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger\">{{ message }}</div>
      {% endfor %}
    {% if not registrationForm.vars.valid %}
    <ul class=\"alert alert-danger\">
        {# ainsi que les erreurs concernant chaque champs #}
        {% for child in registrationForm.children %}
            {% for error in child.vars.errors %}
                <li>{{error.message}} </li> {# on ajoute le label du champ devant l'erreur pour plus de précisions. #}
            {% endfor %}
        {% endfor %}
    </ul>
{% endif %}
      {{ form_start(registrationForm) }}
        <div class=\"input-group mb-3 d-flex justify-content-around\">
        <div class=\"d-flex\" >
          {{ form_row(registrationForm.name) }}
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\" >
              <span class=\"fas fa-user\"></span>
            </div>
          </div>
        </div>
        
             <div class=\"d-flex\">
          {{ form_row(registrationForm.first_name) }}
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-user\"></span>
            </div>
          </div>
          </div>
        </div>
        <div class=\"input-group mb-3 d-flex justify-content-around\">
        <div class=\"d-flex\">
          {{ form_row(registrationForm.email) }}
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-envelope\"></span>
            </div>
          </div>
        </div>
        <div class=\"d-flex\">
          {{ form_row(registrationForm.numero_tel) }}
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-phone\"></span>
            </div>
          </div>
          </div>
        </div>
        <div class=\"input-group mb-3 d-flex justify-content-around\">
        <div class=\"d-flex\">
          {{ form_row(registrationForm.plainPassword) }}
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
        </div>
        <div class=\"d-flex\">
        <div>
          <input type=\"password\" class=\"form-control\" placeholder=\"Vérification du mot de passe\" id=\"verifPwd\">
          
          </div>
          
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
          </div>
        </div>
        <div class=\"mb-2\">
        <span id=\"messagePwd\"></span>
        </div>
        <div class=\"input-group mb-3 d-flex justify-content-around\">
        <div class=\"d-flex\">
          {{ form_row(registrationForm.adresse) }}
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-map\"></span>
            </div>
          </div>
        </div>
        <div class=\"d-flex\">
          {{ form_row(registrationForm.pays) }}
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-flag\"></span>
            </div>
          </div>
          </div>
        </div>
        <div class=\"input-group mb-3 justify-content-around\">
        <div class=\"d-flex\">
          {{ form_row(registrationForm.ville) }}
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-city\"></span>
            </div>
          </div>
        </div>
        <div class=\"d-flex\">
          {{ form_row(registrationForm.codePostal) }}
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-building\"></span>
            </div>
          </div>
          </div>
        </div>
      
        <div class=\"input-group mb-3   d-flex justify-content-center\">
          {{ form_row(registrationForm.formeJuridique) }}
          <div class=\"input-group-append\" style=\"height: 38px\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-hand-pointer\"></span>
            </div>
          </div>
        </div>
        <div style=\"display:none;\" id=\"infoEntreprise\">
          <div class=\"input-group mb-3 d-flex justify-content-around\" >
          <div class=\"d-flex\">
            {{ form_row(registrationForm.societyName) }}
            <div class=\"input-group-append\" style=\"height: 38px\">
              <div class=\"input-group-text\">
                <span class=\"fas fa-address-card\"></span>
              </div>
            </div>
            </div>
            <div class=\"d-flex\">
            {{ form_row(registrationForm.num_siret) }}
            <div class=\"input-group-append\" style=\"height: 38px\">
              <div class=\"input-group-text\">
                <span class=\"fas fa-sort-numeric-up-alt\"></span>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class=\"row d-flex \">
          <div class=\"col-8 \">
            <div class=\"icheck-primary d-flex ml-5\"  >
            {{ form_row(registrationForm.agreeTerms) }}
              <label for=\"agreeTerms\">
              
               J'accepte les <a href=\"#\">conditions générales</a>
              </label>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class=\"row mt-2 mb-2  d-flex justify-content-center\">
          <div class=\"col-6\">
            <button type=\"submit\" id=\"buttonRegister\" class=\"btn btn-primary pr-3 pl-3\">Valider</button>
          </div>
        </div>
      {{ form_end(registrationForm) }}

      <a href=\"{{path('app_login')}}\" class=\"text-center \">J'ai déja un compte.</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src=\"plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/adminlte.min.js\"></script>

<script src=\"js/register.js\"></script>
</body>

</html>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\registration\\register.html.twig");
    }
}
