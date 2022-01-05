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

/* pages/formSub.html.twig */
class __TwigTemplate_47323e45bad636e6ff9eb7da125a0c41bf5f8b82bcb173416c5a181edc861b68 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/formSub.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/formSub.html.twig"));

        // line 1
        echo "
                                ";
        // line 2
        if ((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "<div class=\"col-md-5\" style=\"margin-left: auto; margin-right: auto;\">
  <div class=\"card text-center\">
  
           <div id=\"price\" style=\"display:none\">
           ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 8
                echo "            <span id=\"price_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 8), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "price", [], "any", false, false, false, 8), "html", null, true);
                echo "</span>
            <p id=\"unit\">";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "unit", [], "any", false, false, false, 9), "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
            
           </div>   
             <!-- /.card-header -->     
             <div class=\"card-header\" style=\"background-color:#0069d9;\" >

                <h2 style=\"color:#FFF\"><b>";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["choix"]) || array_key_exists("choix", $context) ? $context["choix"] : (function () { throw new RuntimeError('Variable "choix" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "</b></h2>
             </div>
            
             
              <div class=\"card-body\">
              <nav class=\"nav nav-tabs mb-3\">
                <a class=\"nav-item nav-link tabNav onglet active \" href=\"#\" data-target=\"page1\" id=\"onglet1\" data-toggle=\"tab\">Config</a>
                <a class=\"nav-item nav-link tabNav onglet\" href=\"#\" data-target=\"page2\" id=\"onglet2\" data-toggle=\"tab\">Options</a>
                <a class=\"nav-item nav-link tabNav onglet prix\" href=\"#\" data-target=\"page3\" id=\"onglet3\" data-toggle=\"tab\">Récap</a>
              </nav>
                ";
            // line 27
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 27, $this->source); })()), 'form_start');
            echo "
                 
                  
                  
                  <div class=\"row \">
                    <div class=\"col-md-8 ml-auto mr-auto\">
                    
                        <div id=\"page1\" >
                              <h3 class=\"mb-4\">Configuration du service</h3>
                            <div class=\"form-group\">
                              ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 37, $this->source); })()), "cpu", [], "any", false, false, false, 37), 'label');
            echo " : <b class=\"ml-auto mr-auto text-danger\" id=\"valCpu\">1</b>
                             <div class=\"row\">
                                <div class=\"d-flex col-md-12\">
                              <h6 class=\"mr-1\">1</h6>";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 40, $this->source); })()), "cpu", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "custom-range custom-range-danger", "data-unit" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "unit", [], "any", false, false, false, 40), "data-price" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "price", [], "any", false, false, false, 40), "data-target" => "valCpu"]]);
            echo " <h6 class=\"ml-1\">4</h6>
                              </div>
                              
                              </div>
                             
                            </div>
                            <div class=\"form-group\">
                              ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 47, $this->source); })()), "ram", [], "any", false, false, false, 47), 'label');
            echo " : <b class=\"ml-auto mr-auto text-info\" id=\"valRam\">1</b>
                               <div class=\"row\">
                                <div class=\"d-flex col-md-12\">
                              <h6 class=\"mr-1\">1</h6> ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 50, $this->source); })()), "ram", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "custom-range custom-range-info", "data-unit" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 50, $this->source); })()), 1, [], "array", false, false, false, 50), "unit", [], "any", false, false, false, 50), "data-price" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 50, $this->source); })()), 1, [], "array", false, false, false, 50), "price", [], "any", false, false, false, 50), "data-target" => "valRam"]]);
            echo " <h6 class=\"ml-1\">8</h6>
                              </div>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 55, $this->source); })()), "disk_space", [], "any", false, false, false, 55), 'label');
            echo " : <b class=\"ml-auto mr-auto text-success\" id=\"valDisk\">50</b>
                                <div class=\"row\">
                                <div class=\"d-flex col-md-12\">
                               <h6 class=\"mr-1\">5</h6> ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 58, $this->source); })()), "disk_space", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "custom-range custom-range-success", "data-unit" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 58, $this->source); })()), 2, [], "array", false, false, false, 58), "unit", [], "any", false, false, false, 58), "data-price" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 58, $this->source); })()), 2, [], "array", false, false, false, 58), "price", [], "any", false, false, false, 58), "data-target" => "valDisk"]]);
            echo "<h6 class=\"ml-1\">500</h6>
                              </div>
                              </div>
                            </div>
                             <div class=\"d-flex\">
                                    <select id=\"subscription_name\" class=\"custom-select mb-3 form-group\" name=\"serveur\">
                                    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 64, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 65
                echo "                                      <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "id", [], "any", false, false, false, 65), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "headline", [], "any", false, false, false, 65), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                                    </select>
                                </div>
                            <button  class=\"btn btn-primary pr-3 pl-3 tabNav\" data-target=\"page2\">Suivante</button>
                        </div>
                    </div>
                  </div>
                
                 <div class=\"row\">
                
                    <div class=\"col-md-8 ml-auto mr-auto\">
                       <div id=\"page2\" style=\"display:none\">
                        <h3 class=\"h3 mb-4\">Options avancées</h3>
                       
                        <div class=\"form-group\">
                        <label><b>IP</b></label>
                          ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 82, $this->source); })()), "IP", [], "any", false, false, false, 82), 'widget');
            echo "
                          </div>
                           <div class=\"mb-3\">
                          <div class=\"\">
                                <label><b>Haute disponibilité</b></label>
                              ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 87, $this->source); })()), "high_availability", [], "any", false, false, false, 87), 'widget');
            echo "
                            </div>
                        </div>
                          <div class=\"form-group\">
                            
                            ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 92, $this->source); })()), "backup", [], "any", false, false, false, 92), 'label');
            echo "
                            ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 93, $this->source); })()), "backup", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => ""]]);
            echo "
                  
                          </div>
                          
                          <div class=\"row mt-2 mb-2  d-flex justify-content-center\">
                            <div class=\"col-6\">
                              <button  class=\"btn btn-primary pr-3 pl-3 tabNav\" data-target=\"page1\">Précédente</button>
                            </div>
                            <div class=\"col-6\">
                               <button  class=\"btn btn-primary pr-3 pl-3 tabNav prix\" data-target=\"page3\">Suivante</button>
                              </div>
                          </div>
                       </div>
                    </div>
         
                    </div> 
                    <div class=\"row\">
                      <div class=\"col-md-12 ml-auto mr-auto\">
                          <div id=\"page3\" style=\"display:none\">
                            <h3 class=\"mb-4\">Récapitulatif de la commande</h3>
                            <div class=\"\">
                            <table class=\"table table-striped table-sm\">
                              <tbody>
                                <tr>
                                  <th>Nom:</th>
                                  <td id=\"tabName\"></td>
                                </tr>
                                <tr>
                                  <th>CPU:</th>
                                  <td id=\"tabCpu\"></td>
                                </tr>
                                <tr>
                                  <th>RAM:</th>
                                  <td id=\"tabRam\"></td>
                                </tr>
                                <tr>
                                  <th>Espace disque</th>
                                  <td id=\"tabDisk\"></td>
                                </tr>
                                <tr>
                                  <th>Protection par HA:</th>
                                  <td id=\"tabProtection\"></td>
                                </tr>
                                <tr>
                                  <th>Réplication du service:</th>
                                  <td id=\"tabReplication\"></td>
                                </tr>
                                <tr>
                                  <th>IP:</th>
                                  <td id=\"tabIp\"></td>
                                </tr>
                                <tr>
                                  <th>Rétention des données:</th>
                                  <td id=\"tabRetention\"></td>
                                </tr>
                              </tbody>
                            </table>
                            </div>

                            <div class=\"d-flex justify-content-center\">
                              <div class=\"ml-5\">
                                <b>Solde: </b><h5  class=\"text-danger\"><span id=\"prixTotal\" class=\"fas fa-euro-sign\" style=\"color: #dc3545;\"></span><span>/mois</span></h5>
                                <input type=\"hidden\" name=\"prixService\" id=\"prixService\">
                              </div>
                              <div class=\"form-group ml-3\">
                                <label for=\"pwd\">Mot de passe du ";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["choix"]) || array_key_exists("choix", $context) ? $context["choix"] : (function () { throw new RuntimeError('Variable "choix" does not exist.', 158, $this->source); })()), "html", null, true);
            echo ":</label>
                                <div class=\"d-flex justify-content-around\">
                                <input type=\"password\" name=\"pwdService\" id=\"pwdServ\" class=\"form-control w-75 ml-5 mr-2\" minlength=5 required><i id=\"eyePwd\" class=\"far fa-eye mt-2\"></i>
                              </div>
                              </div>
                            </div>
                            <div class=\"row mt-2 mb-2  d-flex justify-content-center\">
                              <div class=\"col-6\">
                                <button  class=\"btn btn-primary pr-3 pl-3 tabNav\" data-target=\"page2\">Précédente</button>
                              </div>
                              <div class=\"col-6\">
                                  <button id=\"validate\" type=\"submit\" class=\"btn btn-primary pr-3 pl-3\">Valider <img id=\"loading\"class=\"ml-2\" src=\"../dist/img/spinner.gif\" style=\"width:23px; display:none;\"></button>
                                </div>
                            </div>
                          </div>
                      </div>
                            
                      ";
            // line 175
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["subscriptionForm"]) || array_key_exists("subscriptionForm", $context) ? $context["subscriptionForm"] : (function () { throw new RuntimeError('Variable "subscriptionForm" does not exist.', 175, $this->source); })()), 'form_end');
            echo "
                    </div>
          
               
              </div>
              <!-- /.card-body -->
            </div>
            ";
        } else {
            // line 183
            echo "            <h1 class=\"text-center text-danger\">Pas de ";
            echo twig_escape_filter($this->env, (isset($context["choix"]) || array_key_exists("choix", $context) ? $context["choix"] : (function () { throw new RuntimeError('Variable "choix" does not exist.', 183, $this->source); })()), "html", null, true);
            echo " disponible</h1>
            
                                  ";
        }
        // line 186
        echo "<script src=\"js/tabNav.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/formSub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 186,  303 => 183,  292 => 175,  272 => 158,  204 => 93,  200 => 92,  192 => 87,  184 => 82,  167 => 67,  156 => 65,  152 => 64,  143 => 58,  137 => 55,  129 => 50,  123 => 47,  113 => 40,  107 => 37,  94 => 27,  81 => 17,  73 => 11,  65 => 9,  58 => 8,  54 => 7,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
                                {% if liste %}
<div class=\"col-md-5\" style=\"margin-left: auto; margin-right: auto;\">
  <div class=\"card text-center\">
  
           <div id=\"price\" style=\"display:none\">
           {% for data in price %}
            <span id=\"price_{{ data.id }}\">{{ data.price }}</span>
            <p id=\"unit\">{{ data.unit }}</p>
            {% endfor %}

            
           </div>   
             <!-- /.card-header -->     
             <div class=\"card-header\" style=\"background-color:#0069d9;\" >

                <h2 style=\"color:#FFF\"><b>{{ choix }}</b></h2>
             </div>
            
             
              <div class=\"card-body\">
              <nav class=\"nav nav-tabs mb-3\">
                <a class=\"nav-item nav-link tabNav onglet active \" href=\"#\" data-target=\"page1\" id=\"onglet1\" data-toggle=\"tab\">Config</a>
                <a class=\"nav-item nav-link tabNav onglet\" href=\"#\" data-target=\"page2\" id=\"onglet2\" data-toggle=\"tab\">Options</a>
                <a class=\"nav-item nav-link tabNav onglet prix\" href=\"#\" data-target=\"page3\" id=\"onglet3\" data-toggle=\"tab\">Récap</a>
              </nav>
                {{ form_start(subscriptionForm)}}
                 
                  
                  
                  <div class=\"row \">
                    <div class=\"col-md-8 ml-auto mr-auto\">
                    
                        <div id=\"page1\" >
                              <h3 class=\"mb-4\">Configuration du service</h3>
                            <div class=\"form-group\">
                              {{ form_label(subscriptionForm.cpu) }} : <b class=\"ml-auto mr-auto text-danger\" id=\"valCpu\">1</b>
                             <div class=\"row\">
                                <div class=\"d-flex col-md-12\">
                              <h6 class=\"mr-1\">1</h6>{{ form_widget(subscriptionForm.cpu,{'attr': {'class': 'custom-range custom-range-danger','data-unit': price[0].unit,  'data-price': price[0].price, 'data-target': 'valCpu' }}) }} <h6 class=\"ml-1\">4</h6>
                              </div>
                              
                              </div>
                             
                            </div>
                            <div class=\"form-group\">
                              {{ form_label(subscriptionForm.ram) }} : <b class=\"ml-auto mr-auto text-info\" id=\"valRam\">1</b>
                               <div class=\"row\">
                                <div class=\"d-flex col-md-12\">
                              <h6 class=\"mr-1\">1</h6> {{ form_widget(subscriptionForm.ram,{'attr': {'class': 'custom-range custom-range-info','data-unit': price[1].unit,  'data-price': price[1].price, 'data-target': 'valRam' }}) }} <h6 class=\"ml-1\">8</h6>
                              </div>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              {{ form_label(subscriptionForm.disk_space) }} : <b class=\"ml-auto mr-auto text-success\" id=\"valDisk\">50</b>
                                <div class=\"row\">
                                <div class=\"d-flex col-md-12\">
                               <h6 class=\"mr-1\">5</h6> {{ form_widget(subscriptionForm.disk_space,{'attr': {'class': 'custom-range custom-range-success','data-unit': price[2].unit,  'data-price': price[2].price, 'data-target': 'valDisk' }}) }}<h6 class=\"ml-1\">500</h6>
                              </div>
                              </div>
                            </div>
                             <div class=\"d-flex\">
                                    <select id=\"subscription_name\" class=\"custom-select mb-3 form-group\" name=\"serveur\">
                                    {% for info in liste %}
                                      <option value=\"{{ info.id }}\">{{ info.headline }}</option>
                                    {% endfor %}
                                    </select>
                                </div>
                            <button  class=\"btn btn-primary pr-3 pl-3 tabNav\" data-target=\"page2\">Suivante</button>
                        </div>
                    </div>
                  </div>
                
                 <div class=\"row\">
                
                    <div class=\"col-md-8 ml-auto mr-auto\">
                       <div id=\"page2\" style=\"display:none\">
                        <h3 class=\"h3 mb-4\">Options avancées</h3>
                       
                        <div class=\"form-group\">
                        <label><b>IP</b></label>
                          {{ form_widget(subscriptionForm.IP)}}
                          </div>
                           <div class=\"mb-3\">
                          <div class=\"\">
                                <label><b>Haute disponibilité</b></label>
                              {{ form_widget(subscriptionForm.high_availability) }}
                            </div>
                        </div>
                          <div class=\"form-group\">
                            
                            {{ form_label(subscriptionForm.backup) }}
                            {{ form_widget(subscriptionForm.backup, {'attr': {'class': ''}} ) }}
                  
                          </div>
                          
                          <div class=\"row mt-2 mb-2  d-flex justify-content-center\">
                            <div class=\"col-6\">
                              <button  class=\"btn btn-primary pr-3 pl-3 tabNav\" data-target=\"page1\">Précédente</button>
                            </div>
                            <div class=\"col-6\">
                               <button  class=\"btn btn-primary pr-3 pl-3 tabNav prix\" data-target=\"page3\">Suivante</button>
                              </div>
                          </div>
                       </div>
                    </div>
         
                    </div> 
                    <div class=\"row\">
                      <div class=\"col-md-12 ml-auto mr-auto\">
                          <div id=\"page3\" style=\"display:none\">
                            <h3 class=\"mb-4\">Récapitulatif de la commande</h3>
                            <div class=\"\">
                            <table class=\"table table-striped table-sm\">
                              <tbody>
                                <tr>
                                  <th>Nom:</th>
                                  <td id=\"tabName\"></td>
                                </tr>
                                <tr>
                                  <th>CPU:</th>
                                  <td id=\"tabCpu\"></td>
                                </tr>
                                <tr>
                                  <th>RAM:</th>
                                  <td id=\"tabRam\"></td>
                                </tr>
                                <tr>
                                  <th>Espace disque</th>
                                  <td id=\"tabDisk\"></td>
                                </tr>
                                <tr>
                                  <th>Protection par HA:</th>
                                  <td id=\"tabProtection\"></td>
                                </tr>
                                <tr>
                                  <th>Réplication du service:</th>
                                  <td id=\"tabReplication\"></td>
                                </tr>
                                <tr>
                                  <th>IP:</th>
                                  <td id=\"tabIp\"></td>
                                </tr>
                                <tr>
                                  <th>Rétention des données:</th>
                                  <td id=\"tabRetention\"></td>
                                </tr>
                              </tbody>
                            </table>
                            </div>

                            <div class=\"d-flex justify-content-center\">
                              <div class=\"ml-5\">
                                <b>Solde: </b><h5  class=\"text-danger\"><span id=\"prixTotal\" class=\"fas fa-euro-sign\" style=\"color: #dc3545;\"></span><span>/mois</span></h5>
                                <input type=\"hidden\" name=\"prixService\" id=\"prixService\">
                              </div>
                              <div class=\"form-group ml-3\">
                                <label for=\"pwd\">Mot de passe du {{ choix }}:</label>
                                <div class=\"d-flex justify-content-around\">
                                <input type=\"password\" name=\"pwdService\" id=\"pwdServ\" class=\"form-control w-75 ml-5 mr-2\" minlength=5 required><i id=\"eyePwd\" class=\"far fa-eye mt-2\"></i>
                              </div>
                              </div>
                            </div>
                            <div class=\"row mt-2 mb-2  d-flex justify-content-center\">
                              <div class=\"col-6\">
                                <button  class=\"btn btn-primary pr-3 pl-3 tabNav\" data-target=\"page2\">Précédente</button>
                              </div>
                              <div class=\"col-6\">
                                  <button id=\"validate\" type=\"submit\" class=\"btn btn-primary pr-3 pl-3\">Valider <img id=\"loading\"class=\"ml-2\" src=\"../dist/img/spinner.gif\" style=\"width:23px; display:none;\"></button>
                                </div>
                            </div>
                          </div>
                      </div>
                            
                      {{ form_end(subscriptionForm)}}
                    </div>
          
               
              </div>
              <!-- /.card-body -->
            </div>
            {% else %}
            <h1 class=\"text-center text-danger\">Pas de {{ choix }} disponible</h1>
            
                                  {% endif %}
<script src=\"js/tabNav.js\"></script>", "pages/formSub.html.twig", "D:\\wamp\\www\\cloudme\\templates\\pages\\formSub.html.twig");
    }
}
