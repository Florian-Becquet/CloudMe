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

/* resetting/forgotPassword.html.twig */
class __TwigTemplate_f15c54b571f691965e5ae926637d93184b389ce46fc9cdac0298c4a3e2110163 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resetting/forgotPassword.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resetting/forgotPassword.html.twig"));

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
  <link rel=\"stylesheet\" href=\"/plugins/fontawesome-free/css/all.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- icheck bootstrap -->
  <link rel=\"stylesheet\" href=\"/plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"/dist/css/adminlte.min.css\">
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
    <b>Cloud</b>Me</a>
  </div>
  <div class=\"card col-12 text-center\">
    <div class=\"card-body register-card-body ml-4 \" >
      <p class=\"login-box-msg\">Mot de passe oublié</p>
      <p>Demandez à réinitialiser votre mot de passe en renseignant votre mail.</p>
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            echo "      <div class=\"alert alert-danger text-center\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
        <!-- /.col -->
        <div class=\"row mt-2 mb-2  d-flex justify-content-center\">
          <div class=\"col-6\">
          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'row');
        echo "
            <button type=\"submit\" id=\"buttonRegister\" class=\"btn btn-primary pr-3 pl-3\">Envoyer</button>
          </div>
        </div>
      ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src=\"/plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"/dist/js/adminlte.min.js\"></script>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "resetting/forgotPassword.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  117 => 38,  109 => 34,  100 => 32,  96 => 31,  85 => 22,  66 => 21,  44 => 1,);
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
  <link rel=\"stylesheet\" href=\"/plugins/fontawesome-free/css/all.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- icheck bootstrap -->
  <link rel=\"stylesheet\" href=\"/plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"/dist/css/adminlte.min.css\">
  <!-- Google Font: Source Sans Pro -->
  <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
{% block body %}
<body class=\"hold-transition register-page\">
<div class=\"register-box col-6\">
  <div class=\"register-logo\">
    <b>Cloud</b>Me</a>
  </div>
  <div class=\"card col-12 text-center\">
    <div class=\"card-body register-card-body ml-4 \" >
      <p class=\"login-box-msg\">Mot de passe oublié</p>
      <p>Demandez à réinitialiser votre mot de passe en renseignant votre mail.</p>
    {% for message in app.flashes('danger') %}
      <div class=\"alert alert-danger text-center\">{{ message }}</div>
    {% endfor %}
      {{ form_start(form) }}
        <!-- /.col -->
        <div class=\"row mt-2 mb-2  d-flex justify-content-center\">
          <div class=\"col-6\">
          {{form_row(form.email)}}
            <button type=\"submit\" id=\"buttonRegister\" class=\"btn btn-primary pr-3 pl-3\">Envoyer</button>
          </div>
        </div>
      {{ form_end(form) }}
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src=\"/plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"/dist/js/adminlte.min.js\"></script>
</body>

</html>
{% endblock %}
", "resetting/forgotPassword.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\resetting\\forgotPassword.html.twig");
    }
}
