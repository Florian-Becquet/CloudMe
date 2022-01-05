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

/* pages/monProfil.html.twig */
class __TwigTemplate_585f11e63929fd39d8ab01bc144569d5c7176604f985745c670699411d38f344 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/monProfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/monProfil.html.twig"));

        // line 1
        echo "<style>
body{
    margin-top:20px;
    background:#f8f8f8
}
</style>
<div class=\"container\">

  <div class=\"col\">
    <div class=\"row\">
      <div class=\"col mb-3\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"e-profile\">
                <div class=\"text-right\">
                    <div><small>Membre depuis le ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "dateInscription", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
        echo "</small></div>
                </div>
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 19, $this->source); })()), "_token", [], "any", false, false, false, 19), 'widget');
        echo "
              <div class=\"tab-content pt-3\">
                <div class=\"tab-pane active\">
                    <div class=\"row\">
                      <div class=\"col\">
                        <div class=\"row\">
                          <div class=\"col\">
                            <label>Nom de l'entreprise</label>
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 27, $this->source); })()), "society_name", [], "any", false, false, false, 27), 'row');
        echo "
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Nom</label>
                              ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), 'row');
        echo "
                          </div>
                          <div class=\"col\">
                              <label>Prenom</label>
                              ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 37, $this->source); })()), "first_name", [], "any", false, false, false, 37), 'row');
        echo "
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Email</label>
                              ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'row');
        echo "
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Adresse</label>
                              ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 49, $this->source); })()), "adresse", [], "any", false, false, false, 49), 'row');
        echo "
                          </div>
                        </div>
                    </div>
                      <div class=\"col-12 col-sm-6 mb-3\">
                          <div class=\"row\">
                            <div class=\"col\">
                              <label>Forme Juridique</label>
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 57, $this->source); })()), "forme_juridique", [], "any", false, false, false, 57), 'row');
        echo "
                            </div>
                            <div class=\"col\">
                              <label>Numéro de SIRET</label>
                              ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 61, $this->source); })()), "num_siret", [], "any", false, false, false, 61), 'row');
        echo "
                            </div>
                          </div>
                          <div class=\"col\">
                              <label>Numero de téléphone</label>
                              ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 66, $this->source); })()), "numero_tel", [], "any", false, false, false, 66), 'row');
        echo "
                        </div>
                        <div class=\"col\">
                              <label>Pays</label>
                              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 70, $this->source); })()), "pays", [], "any", false, false, false, 70), 'row');
        echo "
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Code Postal</label>
                              ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 75, $this->source); })()), "codePostal", [], "any", false, false, false, 75), 'row');
        echo "
                          </div>
                          <div class=\"col\">
                              <label>Ville</label>
                              ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 79, $this->source); })()), "ville", [], "any", false, false, false, 79), 'row');
        echo "
                          </div>
                        </div>
                      <div class=\"col d-flex justify-content-end\">
                        <button class=\"btn btn-primary\" type=\"submit\">Sauvegarder</button>
                    </div>
                    ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 85, $this->source); })()), 'form_start');
        echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/monProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 85,  162 => 79,  155 => 75,  147 => 70,  140 => 66,  132 => 61,  125 => 57,  114 => 49,  105 => 43,  96 => 37,  89 => 33,  80 => 27,  69 => 19,  65 => 18,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
body{
    margin-top:20px;
    background:#f8f8f8
}
</style>
<div class=\"container\">

  <div class=\"col\">
    <div class=\"row\">
      <div class=\"col mb-3\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"e-profile\">
                <div class=\"text-right\">
                    <div><small>Membre depuis le {{app.user.dateInscription|date('d/m/Y')}}</small></div>
                </div>
                {{ form_start(formProfil) }}
                {{ form_widget(formProfil._token) }}
              <div class=\"tab-content pt-3\">
                <div class=\"tab-pane active\">
                    <div class=\"row\">
                      <div class=\"col\">
                        <div class=\"row\">
                          <div class=\"col\">
                            <label>Nom de l'entreprise</label>
                            {{ form_row(formProfil.society_name) }}
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Nom</label>
                              {{ form_row(formProfil.name) }}
                          </div>
                          <div class=\"col\">
                              <label>Prenom</label>
                              {{ form_row(formProfil.first_name) }}
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Email</label>
                              {{ form_row(formProfil.email) }}
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Adresse</label>
                              {{ form_row(formProfil.adresse) }}
                          </div>
                        </div>
                    </div>
                      <div class=\"col-12 col-sm-6 mb-3\">
                          <div class=\"row\">
                            <div class=\"col\">
                              <label>Forme Juridique</label>
                                {{ form_row(formProfil.forme_juridique) }}
                            </div>
                            <div class=\"col\">
                              <label>Numéro de SIRET</label>
                              {{ form_row(formProfil.num_siret) }}
                            </div>
                          </div>
                          <div class=\"col\">
                              <label>Numero de téléphone</label>
                              {{ form_row(formProfil.numero_tel) }}
                        </div>
                        <div class=\"col\">
                              <label>Pays</label>
                              {{ form_row(formProfil.pays) }}
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Code Postal</label>
                              {{ form_row(formProfil.codePostal) }}
                          </div>
                          <div class=\"col\">
                              <label>Ville</label>
                              {{ form_row(formProfil.ville) }}
                          </div>
                        </div>
                      <div class=\"col d-flex justify-content-end\">
                        <button class=\"btn btn-primary\" type=\"submit\">Sauvegarder</button>
                    </div>
                    {{ form_start(formProfil) }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
</div>", "pages/monProfil.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\pages\\monProfil.html.twig");
    }
}
