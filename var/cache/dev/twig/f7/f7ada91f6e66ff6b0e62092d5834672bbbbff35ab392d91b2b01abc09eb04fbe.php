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

/* admin/modifyUser.html.twig */
class __TwigTemplate_f3eb0e3d65dd008fe693dbffc325772ca91de23ff515673663e8b24c705118ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modifyUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modifyUser.html.twig"));

        // line 1
        echo "
<style>
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
            ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 17
            echo "              <div class=\"text-left\">
                <button class=\"btn btn-outline-secondary setAdmin\" data-target=\"setAdminUser\" data-admin=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">Changer en admin</button>
              </div>
              ";
        }
        // line 21
        echo "              <div class=\"text-right\">
                <div><small>Membre depuis le ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "dateInscription", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
        echo "</small></div>
              </div>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 25, $this->source); })()), "_token", [], "any", false, false, false, 25), 'widget');
        echo "
              <div class=\"tab-content pt-3\">
                <div class=\"tab-pane active\">
                    <div class=\"row\">
                      <div class=\"col\">
                        <div class=\"row\">
                          <div class=\"col\">
                            <label>Nom de l'entreprise</label>
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 33, $this->source); })()), "society_name", [], "any", false, false, false, 33), 'row');
        echo "
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Nom</label>
                              ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), 'row');
        echo "
                          </div>
                          <div class=\"col\">
                              <label>Prenom</label>
                              ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 43, $this->source); })()), "first_name", [], "any", false, false, false, 43), 'row');
        echo "
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Email</label>
                              ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'row');
        echo "
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Adresse</label>
                              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 55, $this->source); })()), "adresse", [], "any", false, false, false, 55), 'row');
        echo "
                          </div>
                        </div>
                    </div>
                      <div class=\"col-12 col-sm-6 mb-3\">
                          <div class=\"row\">
                            <div class=\"col\">
                              <label>Forme Juridique</label>
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 63, $this->source); })()), "forme_juridique", [], "any", false, false, false, 63), 'row');
        echo "
                            </div>
                            <div class=\"col\">
                              <label>Numéro de SIRET</label>
                              ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 67, $this->source); })()), "num_siret", [], "any", false, false, false, 67), 'row');
        echo "
                            </div>
                          </div>
                          <div class=\"col\">
                              <label>Numero de téléphone</label>
                              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 72, $this->source); })()), "numero_tel", [], "any", false, false, false, 72), 'row');
        echo "
                        </div>
                        <div class=\"col\">
                              <label>Pays</label>
                              ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 76, $this->source); })()), "pays", [], "any", false, false, false, 76), 'row');
        echo "
                        </div>
                        <div class=\"row\">
                          <div class=\"col\">
                              <label>Code Postal</label>
                              ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 81, $this->source); })()), "codePostal", [], "any", false, false, false, 81), 'row');
        echo "
                          </div>
                          <div class=\"col\">
                              <label>Ville</label>
                              ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 85, $this->source); })()), "ville", [], "any", false, false, false, 85), 'row');
        echo "
                          </div>
                            <div class=\"col\">
                              <label>Remise</label>
                              ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 89, $this->source); })()), "remise", [], "any", false, false, false, 89), 'row');
        echo "
                          </div>
                          <input type=\"hidden\" name=\"id\" value =\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91), "html", null, true);
        echo "\">
                        </div>
                      <div class=\"col d-flex justify-content-end\">
                        <button class=\"btn btn-primary\" type=\"submit\">Sauvegarder</button>
                    </div>
                    ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 96, $this->source); })()), 'form_start');
        echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
</div>
<script src=\"js/pagination.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/modifyUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 96,  188 => 91,  183 => 89,  176 => 85,  169 => 81,  161 => 76,  154 => 72,  146 => 67,  139 => 63,  128 => 55,  119 => 49,  110 => 43,  103 => 39,  94 => 33,  83 => 25,  79 => 24,  74 => 22,  71 => 21,  65 => 18,  62 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<style>
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
            {% if is_granted('ROLE_SUPER_ADMIN') %}
              <div class=\"text-left\">
                <button class=\"btn btn-outline-secondary setAdmin\" data-target=\"setAdminUser\" data-admin=\"{{ user.id }}\">Changer en admin</button>
              </div>
              {% endif %}
              <div class=\"text-right\">
                <div><small>Membre depuis le {{user.dateInscription|date('d/m/Y')}}</small></div>
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
                            <div class=\"col\">
                              <label>Remise</label>
                              {{ form_row(formProfil.remise) }}
                          </div>
                          <input type=\"hidden\" name=\"id\" value =\"{{ user.id }}\">
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
</div>
<script src=\"js/pagination.js\"></script>", "admin/modifyUser.html.twig", "C:\\Users\\Clément\\Desktop\\cloudMe\\cloudme\\templates\\admin\\modifyUser.html.twig");
    }
}
