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

/* security/login.html.twig */
class __TwigTemplate_bb86e9667e3adfbaf08e8dc424f845e7eded7479436fb5bf80a373e0156d85b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>CloudMe | Page de connexion</title>
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
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
  <div class=\"login-logo\">
    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><b>Cloud</b>Me</a>
  </div>
  <!-- /.login-logo -->
  <div class=\"card\">
    <div class=\"card-body login-card-body\">
      <p class=\"login-box-msg\">Se connecter pour accéder à la plateforme</p>
      ";
        // line 30
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "      <div class=\"alert alert-danger text-center\">
        ";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageKey", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageData", [], "any", false, false, false, 32), "security"), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 35
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            echo "        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      <form method=\"post\">
        <div class=\"input-group mb-3\">
          <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\">
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-envelope\"></span>
            </div>
          </div>
        </div>
        <div class=\"input-group mb-3\">
          <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\">
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <div class=\"row\">
          <div class=\"col-12  text-center\">
            <button class=\"btn btn-primary btn-block\">Se connecter</button>
          </div>
          <!-- /.col -->
        </div>
      </form></br>
      <p class=\"mb-1 text-center\">
        <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_resetting");
        echo "\">Mot de passe oublié ?</a>
      </p>
      <span>
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "      <span>
      <p class=\"mb-0 text-center\">
        <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"text-center\">Créer un compte</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=\"plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/adminlte.min.js\"></script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 72,  152 => 70,  143 => 68,  139 => 67,  133 => 64,  121 => 55,  102 => 38,  93 => 36,  88 => 35,  82 => 32,  79 => 31,  77 => 30,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>CloudMe | Page de connexion</title>
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
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
  <div class=\"login-logo\">
    <a href=\"{{ path('app_login')}}\"><b>Cloud</b>Me</a>
  </div>
  <!-- /.login-logo -->
  <div class=\"card\">
    <div class=\"card-body login-card-body\">
      <p class=\"login-box-msg\">Se connecter pour accéder à la plateforme</p>
      {% if error %}
      <div class=\"alert alert-danger text-center\">
        {{ error.messageKey | trans(error.messageData, 'security')}}
      </div>
      {% endif %}
      {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">{{ message }}</div>
      {% endfor %}
      <form method=\"post\">
        <div class=\"input-group mb-3\">
          <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\">
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-envelope\"></span>
            </div>
          </div>
        </div>
        <div class=\"input-group mb-3\">
          <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\">
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <div class=\"row\">
          <div class=\"col-12  text-center\">
            <button class=\"btn btn-primary btn-block\">Se connecter</button>
          </div>
          <!-- /.col -->
        </div>
      </form></br>
      <p class=\"mb-1 text-center\">
        <a href=\"{{path('request_resetting')}}\">Mot de passe oublié ?</a>
      </p>
      <span>
        {% for message in app.flashes('danger') %}
        <div class=\"alert alert-danger\">{{ message }}</div>
        {% endfor %}
      <span>
      <p class=\"mb-0 text-center\">
        <a href=\"{{path('app_register')}}\" class=\"text-center\">Créer un compte</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=\"plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/adminlte.min.js\"></script>

</body>
</html>
", "security/login.html.twig", "C:\\Users\\Flo\\Desktop\\dev\\cloudme\\templates\\security\\login.html.twig");
    }
}
