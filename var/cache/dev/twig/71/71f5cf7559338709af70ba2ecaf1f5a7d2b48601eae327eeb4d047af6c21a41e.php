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

/* base.html.twig */
class __TwigTemplate_138d114dc7177f60e1986de818fe666b0775a3dc056152dce60c3337a5c55c97 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

            <!-- Font Awesome Icons -->
            <link rel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
            <!-- overlayScrollbars -->
            <link rel=\"stylesheet\" href=\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
            <!-- Theme style -->
            <link rel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
            <link rel=\"stylesheet\" href=\"dist/css/pagination.css\">
            <!-- Google Font: Source Sans Pro -->
            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
            <style>
              .border1{
                background-image: url(\"dist/img/border.png\");
                background-color: #f9f9f9;
              }

              .card-body1{
                padding: 0rem !important;
              }
            </style>
           
        <title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    </head>
  
        <body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
<div class=\"wrapper\">
  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-dark navbar-dark\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"fa fa-shopping-basket\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-xs dropdown-menu-left text-align border1\" style=\"top: 71% !important;\">
            <div class=\"row mt-1\">
              <div class=\"card-body card-body1 col-xs-6 col-6 d-flex justify-content-center\">
                <a href=\"#\" data-description=\"Souscrire à un VPS\"class=\"subscription\" data-target=\"vps\" style=\"color: #343A40\">
                 <img src=\"dist/img/cloud.png\">
                  <p class=\"mt-1 text-center\"><small>VPS</small></p></a>
              </div>
              
              <div class=\"card-body card-body1 col-xs-6 col-6 d-flex justify-content-center\">
                <a href=\"#\" data-description=\"Souscrire à un Serveur\" class=\"subscription\" data-target=\"srv\" style=\"color: #343A40\">
                 <img src=\"dist/img/server.png\">
                  <p class=\"mt-1\" style=\"margin-left:-8%\"><small>Serveur</small></p></a>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"card-body card-body1 col-xs-6 col-6 d-flex justify-content-center\">
                <a href=\"#\" class=\"subscription\" data-description=\"Souscrire à un Bureau Virtuel\" data-target=\"vdi\" style=\"color: #343A40\">
                 <img src=\"dist/img/computer.png\">
                  <p class=\"mt-1 text-center\"><small>Cloud</small></p></a>
              </div>
              <div class=\"card-body card-body1 col-xs-6 col-6 d-flex justify-content-center\">
               <a href=\"#\" class=\"subscription\" data-target=\"bdd\" data-description=\"Souscrire à une Base de données\" style=\"color: #343A40\">
                 <img src=\"dist/img/database.png\">
                  <p class=\"mt-1 text-center\"><small>BDD</small></p></a>
              </div>
            </div>
      </li>
      ";
        // line 76
        echo "      ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 77
            echo "      <li>
        <div class=\"dropdown\">
          <a data-toggle=\"dropdown\" class=\"nav-link\" href=\"#\" title=\"back-office\">
            <i class=\"fas fa-users-cog\"></i>
          </a>
          <div class=\"dropdown-menu\" style=\"height: 220px; width: 202px;\" aria-labelledby=\"dropdownMenuButton\">
          <h6 class=\"dropdown-header\">Admin</h6>
          <div class=\"dropdown-divider\"></div>
            <div class=\"nav-item \" >
            <a data-target=\"listUser\" data-def=\"listUser\" data-description=\"Liste des utilisateurs\"href=\"#\" class=\"nav-link navigation\">
              <p style=\"color: black\">
                Liste des utilisateurs
              </p>
            </a>
          </div>
          <div class=\"nav-item \" >
            <a data-target=\"listServ\" data-def=\"listServ\" data-description=\"Liste de serveurs\"href=\"#\" class=\"nav-link navigation\">
              <p style=\"color: black\">
                Liste des Serveurs
              </p>
            </a>
          </div>
          <div class=\"nav-item \" >
            <a data-target=\"listSub\" data-def=\"listSub\" data-description=\"Liste des souscriptions\"href=\"#\" class=\"nav-link navigation\">
              <p style=\"color: black\">
                Liste des souscriptions
              </p>
            </a>
          </div>
          <div class=\"nav-item \" >
            <a data-target=\"changePrice\" data-def=\"ChangePrice\" data-description=\"Table des prix\"href=\"#\" class=\"nav-link navigation\">
              <p style=\"color: black\">
                Table des prix
              </p>
            </a>
          </div>
        </div>
      </div>
    </li>
      ";
        }
        // line 117
        echo "    </ul>
    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
        <!-- SEARCH FORM -->
        ";
        // line 131
        echo "      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-user\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <span class=\"dropdown-header\" style=\"text-transform: uppercase; color:black\"><b>";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "name", [], "any", false, false, false, 136), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "firstName", [], "any", false, false, false, 136), "html", null, true);
        echo "</b></span>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" data-target=\"mon-compte/profil\" data-def=\"Profil\" data-description=\"Profil\"class=\"dropdown-item navigation\">
            <i class=\"fas fa-user-cog\"></i> Paramètre de compte
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" data-target=\"infofacture\" data-def=\"infofacture\"  data-description=\"Factures\"class=\"dropdown-item navigation\">
            <i class=\"fas fa-file-invoice\"></i> Mes factures
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"dropdown-item\">
            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
          </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar  -->

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"#\" class=\"brand-link\">
      <img src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
           style=\"opacity: .8\">
      <span data-target=\"intro\" data-def=\"home\" data-description=\" \" class=\"brand-text font-weight-light navigation\">CloudMe</span>
    </a>
    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item\">
            <a data-target=\"intro\" data-def=\"home\" data-description=\" \"href=\"#\" class=\"nav-link navigation\">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
              <p> 
                Dashboard
                ";
        // line 177
        echo "              </p>
            </a>
          </li>
          <li id=\"vps\" class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-cloud\"></i>
              <p>
                VPS
                <i class=\"fas fa-angle-left right\"></i>
                ";
        // line 187
        echo "              </p>
            </a>
            <ul class=\"nav nav-treeview\">
             ";
        // line 190
        if ((isset($context["vps"]) || array_key_exists("vps", $context) ? $context["vps"] : (function () { throw new RuntimeError('Variable "vps" does not exist.', 190, $this->source); })())) {
            // line 191
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vps"]) || array_key_exists("vps", $context) ? $context["vps"] : (function () { throw new RuntimeError('Variable "vps" does not exist.', 191, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["vips"]) {
                // line 192
                echo "                  <li class=\"nav-item\">
                    <a id=\"";
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vips"], "id", [], "any", false, false, false, 193), "html", null, true);
                echo "\" data-target= \"info\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vips"], "id", [], "any", false, false, false, 193), "html", null, true);
                echo "\" data-def=\"VPS\" data-description=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vips"], "name", [], "any", false, false, false, 193), "html", null, true);
                echo "\" href=\"#\" class=\"nav-link navigation\">
                      <i class=\"far fa-dot-circle nav-icon\"></i>
                      <p>";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vips"], "name", [], "any", false, false, false, 195), "html", null, true);
                echo "</p>
                    </a>
                  </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vips'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "                  ";
        } else {
            // line 200
            echo "                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                      <p>Pas de souscriptions</p>
                    </a>
                  </li>
              ";
        }
        // line 206
        echo "              
            </ul>
          </li>
          <li id=\"srv\" class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-server\"></i>
              <p>
                Serveur
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
          <ul class=\"nav nav-treeview\">
             ";
        // line 218
        if ((isset($context["serveur"]) || array_key_exists("serveur", $context) ? $context["serveur"] : (function () { throw new RuntimeError('Variable "serveur" does not exist.', 218, $this->source); })())) {
            // line 219
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["serveur"]) || array_key_exists("serveur", $context) ? $context["serveur"] : (function () { throw new RuntimeError('Variable "serveur" does not exist.', 219, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["serv"]) {
                // line 220
                echo "                  <li class=\"nav-item\">
                    <a id=\"";
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serv"], "id", [], "any", false, false, false, 221), "html", null, true);
                echo "\" data-target= \"info\" data-def=\"Serveur\" data-description=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serv"], "name", [], "any", false, false, false, 221), "html", null, true);
                echo "\"data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serv"], "id", [], "any", false, false, false, 221), "html", null, true);
                echo "\" href=\"#\" class=\"nav-link navigation\">
                      <i class=\"far fa-dot-circle nav-icon\"></i>
                      <p>";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serv"], "name", [], "any", false, false, false, 223), "html", null, true);
                echo "</p>
                    </a>
                  </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                  ";
        } else {
            // line 228
            echo "                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                      <p>Pas de souscriptions</p>
                    </a>
                  </li>
              ";
        }
        // line 234
        echo "              
            </ul>
          </li>
          <li id=\"vdi\" class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-desktop\"></i>
              <p>
                Bureau Virtuel
                <i class=\"fas fa-angle-left right\"></i>
                ";
        // line 244
        echo "              </p>
            </a>
           <ul class=\"nav nav-treeview\">
             ";
        // line 247
        if ((isset($context["bureauVirtuel"]) || array_key_exists("bureauVirtuel", $context) ? $context["bureauVirtuel"] : (function () { throw new RuntimeError('Variable "bureauVirtuel" does not exist.', 247, $this->source); })())) {
            // line 248
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bureauVirtuel"]) || array_key_exists("bureauVirtuel", $context) ? $context["bureauVirtuel"] : (function () { throw new RuntimeError('Variable "bureauVirtuel" does not exist.', 248, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bv"]) {
                // line 249
                echo "                  <li class=\"nav-item\">
                    <a id=\"";
                // line 250
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bv"], "id", [], "any", false, false, false, 250), "html", null, true);
                echo "\" data-target= \"info\" data-def=\"Bureau virtuel\" data-description=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bv"], "name", [], "any", false, false, false, 250), "html", null, true);
                echo "\"data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bv"], "id", [], "any", false, false, false, 250), "html", null, true);
                echo "\" href=\"#\" class=\"nav-link navigation\">
                      <i class=\"far fa-dot-circle nav-icon\"></i>
                      <p>";
                // line 252
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bv"], "name", [], "any", false, false, false, 252), "html", null, true);
                echo "</p>
                    </a>
                  </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "                  ";
        } else {
            // line 257
            echo "                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                      <p>Pas de souscriptions</p>
                    </a>
                  </li>
              ";
        }
        // line 263
        echo "              
            </ul>
           
          </li>
          <li id=\"bdd\" class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-database\"></i>
              <p>
                Base de donnée
                <i class=\"fas fa-angle-left right\"></i>
                ";
        // line 274
        echo "              </p>
            </a>
            
            <ul class=\"nav nav-treeview\">
             ";
        // line 278
        if ((isset($context["bdd"]) || array_key_exists("bdd", $context) ? $context["bdd"] : (function () { throw new RuntimeError('Variable "bdd" does not exist.', 278, $this->source); })())) {
            // line 279
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bdd"]) || array_key_exists("bdd", $context) ? $context["bdd"] : (function () { throw new RuntimeError('Variable "bdd" does not exist.', 279, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["db"]) {
                // line 280
                echo "                  <li class=\"nav-item \">
                    <a id=\"";
                // line 281
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["db"], "id", [], "any", false, false, false, 281), "html", null, true);
                echo "\" data-target= \"info\" data-def=\"Base de donnée\" data-description=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["db"], "name", [], "any", false, false, false, 281), "html", null, true);
                echo "\"data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["db"], "id", [], "any", false, false, false, 281), "html", null, true);
                echo "\"href=\"#\" class=\"nav-link navigation\">
                      <i class=\"far fa-dot-circle nav-icon\"></i>
                      <p>";
                // line 283
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["db"], "name", [], "any", false, false, false, 283), "html", null, true);
                echo "</p>
                    </a>
                  </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['db'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "                  ";
        } else {
            // line 288
            echo "                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                      <p>Pas de souscriptions</p>
                    </a>
                  </li>
              ";
        }
        // line 294
        echo "              
            </ul>
          </li>
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



    <!-- Main content -->
     
              ";
        // line 308
        $this->displayBlock('body', $context, $blocks);
        // line 309
        echo "              <div class=\"content-wrapper\">
                 <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1 class=\"m-0 text-dark\" id=\"def2\">Accueil</h1>
          </div><!-- /.col -->
          ";
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 316));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 317
            echo "            <div class=\"toast position-absolute \" data-delay=\"3000\" style=\"right:0;top:0;z-index:100\">
              <div class=\"toast-body\" style=\"background-color:green;color:white;\">
                ";
            // line 319
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 323, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 323));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 324
            echo "            <div class=\"toast position-absolute\" data-delay=\"3000\" style=\"right:0;top:0;z-index:100\">
              <div class=\"toast-body\" style=\"background-color:red;color:white;\">
                ";
            // line 326
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "          <div id=\"toastError\"class=\"toast position-absolute hide\" data-delay=\"3000\" style=\"right:0;top:0;z-index:100; display:none\">
              <div class=\"toast-body\" style=\"background-color:red;color:white;\">
                Une erreur s'est produite ...
              </div>
            </div>
            <div id=\"toastSuccess\"class=\"toast position-absolute hide\" data-delay=\"3000\" style=\"right:0;top:0;z-index:100; display:none\">
              <div class=\"toast-body\" style=\"background-color:green;color:white;\">
                <span id=\"successMessage\"></span>
              </div>
            </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 342
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></li>
              <li class=\"breadcrumb-item active\" id=\"def\"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <noscript><span  style=\"margin-left: auto; margin-right: auto\">Veuillez activez votre JavaScript pour acceder à l'application</span></noscript>
    ";
        // line 351
        echo "    <div id=\"recherche\" style=\"display: none;\">   
                <div class=\"row\">
                <form class=\"offset-md-1\">
                    <div class=\"col-md-12\">
                      <div class=\"input-group\"> 
                        <div class=\"input-group-btn\">
                            <button id=\"actionButton\" style=\"background:#515559;color: #fff;  font-size: 0.93em\"type=\"button\" class=\"btn btn-search dropdown-toggle ml-2\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span id=\"selectedAction\">Recherche par </span><span class=\"caret ml-1\"></span></button>
                          <div id=\"searchAction\" class=\"dropdown-menu\" role=\"menu\">
                          </div>
                        </div><!-- /btn-group -->
                        <input id=\"valueSearch\" class=\"form-control\" type=\"text\" placeholder=\"Recherche\"
                      aria-label=\"Search\">
                      <button id=\"loupe\" type=\"submit\" style=\"background:#515559;color: #fff;  font-size: 0.9em\" class=\"btn btn-search\" type=\"button\"><i class=\"fa fa-search fa-fw\"></i></button>
                        <input id=\"actionInput\" type=\"hidden\" value=\"\"> 
                        <span class=\"input-group-addon\"><a><span class=\"glyphicon glyphicon-search\"></span></a> </span>
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </form>
            </div><!-- /.row -->
            
</div>

    ";
        // line 374
        echo "     <div id=\"spinner\" style=\"display:none;\">
      <h1 class=\"ml9\">
        <span class=\"text-wrapper\">
          <span class=\"letters\">Veuillez patienter quelques instants...</span>
        </span>
      </h1>
      </div>
     
    <div id=\"root\">
   
    </div>
    </div>
        <!-- /.row -->

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class=\"main-footer\">
    <small>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</small>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- overlayScrollbars -->
<script src=\"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/adminlte.js\"></script>

<!-- OPTIONAL SCRIPTS -->
<script src=\"dist/js/demo.js\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"plugins/jquery-mousewheel/jquery.mousewheel.js\"></script>
<script src=\"plugins/raphael/raphael.min.js\"></script>
<script src=\"plugins/jquery-mapael/jquery.mapael.min.js\"></script>
<script src=\"plugins/jquery-mapael/maps/usa_states.min.js\"></script>
<!-- ChartJS -->
<script src=\"plugins/chart.js/Chart.min.js\"></script>

<!-- PAGE SCRIPTS -->
<script src=\"dist/js/pages/dashboard2.js\"></script>
<script src=\"js/global.js\"></script>
<script src=\"js/animejs.js\"></script>
        ";
        // line 428
        $this->displayBlock('javascripts', $context, $blocks);
        // line 429
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cloudme";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 308
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 428
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 428,  677 => 308,  659 => 30,  640 => 29,  628 => 429,  626 => 428,  570 => 374,  546 => 351,  535 => 342,  521 => 330,  511 => 326,  507 => 324,  502 => 323,  492 => 319,  488 => 317,  484 => 316,  475 => 309,  473 => 308,  457 => 294,  449 => 288,  446 => 287,  436 => 283,  427 => 281,  424 => 280,  419 => 279,  417 => 278,  411 => 274,  399 => 263,  391 => 257,  388 => 256,  378 => 252,  369 => 250,  366 => 249,  361 => 248,  359 => 247,  354 => 244,  343 => 234,  335 => 228,  332 => 227,  322 => 223,  313 => 221,  310 => 220,  305 => 219,  303 => 218,  289 => 206,  281 => 200,  278 => 199,  268 => 195,  259 => 193,  256 => 192,  251 => 191,  249 => 190,  244 => 187,  233 => 177,  200 => 146,  185 => 136,  178 => 131,  172 => 117,  130 => 77,  127 => 76,  83 => 31,  81 => 30,  77 => 29,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

            <!-- Font Awesome Icons -->
            <link rel=\"stylesheet\" href=\"plugins/fontawesome-free/css/all.min.css\">
            <!-- overlayScrollbars -->
            <link rel=\"stylesheet\" href=\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
            <!-- Theme style -->
            <link rel=\"stylesheet\" href=\"dist/css/adminlte.min.css\">
            <link rel=\"stylesheet\" href=\"dist/css/pagination.css\">
            <!-- Google Font: Source Sans Pro -->
            <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
            <style>
              .border1{
                background-image: url(\"dist/img/border.png\");
                background-color: #f9f9f9;
              }

              .card-body1{
                padding: 0rem !important;
              }
            </style>
           
        <title>{% block title %}Cloudme{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
  
        <body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
<div class=\"wrapper\">
  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-dark navbar-dark\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"fa fa-shopping-basket\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-xs dropdown-menu-left text-align border1\" style=\"top: 71% !important;\">
            <div class=\"row mt-1\">
              <div class=\"card-body card-body1 col-xs-6 col-6 d-flex justify-content-center\">
                <a href=\"#\" data-description=\"Souscrire à un VPS\"class=\"subscription\" data-target=\"vps\" style=\"color: #343A40\">
                 <img src=\"dist/img/cloud.png\">
                  <p class=\"mt-1 text-center\"><small>VPS</small></p></a>
              </div>
              
              <div class=\"card-body card-body1 col-xs-6 col-6 d-flex justify-content-center\">
                <a href=\"#\" data-description=\"Souscrire à un Serveur\" class=\"subscription\" data-target=\"srv\" style=\"color: #343A40\">
                 <img src=\"dist/img/server.png\">
                  <p class=\"mt-1\" style=\"margin-left:-8%\"><small>Serveur</small></p></a>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"card-body card-body1 col-xs-6 col-6 d-flex justify-content-center\">
                <a href=\"#\" class=\"subscription\" data-description=\"Souscrire à un Bureau Virtuel\" data-target=\"vdi\" style=\"color: #343A40\">
                 <img src=\"dist/img/computer.png\">
                  <p class=\"mt-1 text-center\"><small>Cloud</small></p></a>
              </div>
              <div class=\"card-body card-body1 col-xs-6 col-6 d-flex justify-content-center\">
               <a href=\"#\" class=\"subscription\" data-target=\"bdd\" data-description=\"Souscrire à une Base de données\" style=\"color: #343A40\">
                 <img src=\"dist/img/database.png\">
                  <p class=\"mt-1 text-center\"><small>BDD</small></p></a>
              </div>
            </div>
      </li>
      {# <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>  #}
      {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_SUPER_ADMIN') %}
      <li>
        <div class=\"dropdown\">
          <a data-toggle=\"dropdown\" class=\"nav-link\" href=\"#\" title=\"back-office\">
            <i class=\"fas fa-users-cog\"></i>
          </a>
          <div class=\"dropdown-menu\" style=\"height: 220px; width: 202px;\" aria-labelledby=\"dropdownMenuButton\">
          <h6 class=\"dropdown-header\">Admin</h6>
          <div class=\"dropdown-divider\"></div>
            <div class=\"nav-item \" >
            <a data-target=\"listUser\" data-def=\"listUser\" data-description=\"Liste des utilisateurs\"href=\"#\" class=\"nav-link navigation\">
              <p style=\"color: black\">
                Liste des utilisateurs
              </p>
            </a>
          </div>
          <div class=\"nav-item \" >
            <a data-target=\"listServ\" data-def=\"listServ\" data-description=\"Liste de serveurs\"href=\"#\" class=\"nav-link navigation\">
              <p style=\"color: black\">
                Liste des Serveurs
              </p>
            </a>
          </div>
          <div class=\"nav-item \" >
            <a data-target=\"listSub\" data-def=\"listSub\" data-description=\"Liste des souscriptions\"href=\"#\" class=\"nav-link navigation\">
              <p style=\"color: black\">
                Liste des souscriptions
              </p>
            </a>
          </div>
          <div class=\"nav-item \" >
            <a data-target=\"changePrice\" data-def=\"ChangePrice\" data-description=\"Table des prix\"href=\"#\" class=\"nav-link navigation\">
              <p style=\"color: black\">
                Table des prix
              </p>
            </a>
          </div>
        </div>
      </div>
    </li>
      {% endif %}
    </ul>
    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
        <!-- SEARCH FORM -->
        {# <form class=\"form-inline ml-3\">
          <div class=\"input-group input-group-sm\">
            <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <div class=\"input-group-append\">
              <button class=\"btn btn-navbar\" type=\"submit\">
                <i class=\"fas fa-search\"></i>
              </button>
            </div>
          </div>
        </form> #}
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-user\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <span class=\"dropdown-header\" style=\"text-transform: uppercase; color:black\"><b>{{app.user.name}} {{app.user.firstName}}</b></span>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" data-target=\"mon-compte/profil\" data-def=\"Profil\" data-description=\"Profil\"class=\"dropdown-item navigation\">
            <i class=\"fas fa-user-cog\"></i> Paramètre de compte
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" data-target=\"infofacture\" data-def=\"infofacture\"  data-description=\"Factures\"class=\"dropdown-item navigation\">
            <i class=\"fas fa-file-invoice\"></i> Mes factures
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"{{path('app_logout')}}\" class=\"dropdown-item\">
            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
          </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar  -->

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"#\" class=\"brand-link\">
      <img src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
           style=\"opacity: .8\">
      <span data-target=\"intro\" data-def=\"home\" data-description=\" \" class=\"brand-text font-weight-light navigation\">CloudMe</span>
    </a>
    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item\">
            <a data-target=\"intro\" data-def=\"home\" data-description=\" \"href=\"#\" class=\"nav-link navigation\">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
              <p> 
                Dashboard
                {# <span class=\"right badge badge-danger\">New</span> #}
              </p>
            </a>
          </li>
          <li id=\"vps\" class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-cloud\"></i>
              <p>
                VPS
                <i class=\"fas fa-angle-left right\"></i>
                {# <span class=\"badge badge-info right\">6</span> #}
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
             {% if vps %}
               {% for vips in vps %}
                  <li class=\"nav-item\">
                    <a id=\"{{ vips.id }}\" data-target= \"info\" data-id=\"{{ vips.id }}\" data-def=\"VPS\" data-description=\"{{ vips.name }}\" href=\"#\" class=\"nav-link navigation\">
                      <i class=\"far fa-dot-circle nav-icon\"></i>
                      <p>{{ vips.name }}</p>
                    </a>
                  </li>
                  {% endfor %}
                  {% else %}
                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                      <p>Pas de souscriptions</p>
                    </a>
                  </li>
              {% endif %}
              
            </ul>
          </li>
          <li id=\"srv\" class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-server\"></i>
              <p>
                Serveur
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
          <ul class=\"nav nav-treeview\">
             {% if serveur %}
               {% for serv in serveur %}
                  <li class=\"nav-item\">
                    <a id=\"{{ serv.id }}\" data-target= \"info\" data-def=\"Serveur\" data-description=\"{{ serv.name }}\"data-id=\"{{ serv.id }}\" href=\"#\" class=\"nav-link navigation\">
                      <i class=\"far fa-dot-circle nav-icon\"></i>
                      <p>{{ serv.name }}</p>
                    </a>
                  </li>
                  {% endfor %}
                  {% else %}
                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                      <p>Pas de souscriptions</p>
                    </a>
                  </li>
              {% endif %}
              
            </ul>
          </li>
          <li id=\"vdi\" class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-desktop\"></i>
              <p>
                Bureau Virtuel
                <i class=\"fas fa-angle-left right\"></i>
                {# <span class=\"badge badge-info right\">6</span> #}
              </p>
            </a>
           <ul class=\"nav nav-treeview\">
             {% if bureauVirtuel %}
               {% for bv in bureauVirtuel %}
                  <li class=\"nav-item\">
                    <a id=\"{{ bv.id }}\" data-target= \"info\" data-def=\"Bureau virtuel\" data-description=\"{{ bv.name }}\"data-id=\"{{ bv.id }}\" href=\"#\" class=\"nav-link navigation\">
                      <i class=\"far fa-dot-circle nav-icon\"></i>
                      <p>{{ bv.name }}</p>
                    </a>
                  </li>
                  {% endfor %}
                  {% else %}
                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                      <p>Pas de souscriptions</p>
                    </a>
                  </li>
              {% endif %}
              
            </ul>
           
          </li>
          <li id=\"bdd\" class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-database\"></i>
              <p>
                Base de donnée
                <i class=\"fas fa-angle-left right\"></i>
                {# <span class=\"badge badge-info right\">6</span> #}
              </p>
            </a>
            
            <ul class=\"nav nav-treeview\">
             {% if bdd %}
               {% for db in bdd %}
                  <li class=\"nav-item \">
                    <a id=\"{{ db.id }}\" data-target= \"info\" data-def=\"Base de donnée\" data-description=\"{{ db.name }}\"data-id=\"{{ db.id }}\"href=\"#\" class=\"nav-link navigation\">
                      <i class=\"far fa-dot-circle nav-icon\"></i>
                      <p>{{ db.name }}</p>
                    </a>
                  </li>
                  {% endfor %}
                  {% else %}
                    <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                      <p>Pas de souscriptions</p>
                    </a>
                  </li>
              {% endif %}
              
            </ul>
          </li>
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



    <!-- Main content -->
     
              {% block body %}{% endblock %}
              <div class=\"content-wrapper\">
                 <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1 class=\"m-0 text-dark\" id=\"def2\">Accueil</h1>
          </div><!-- /.col -->
          {% for message in app.flashes('success') %}
            <div class=\"toast position-absolute \" data-delay=\"3000\" style=\"right:0;top:0;z-index:100\">
              <div class=\"toast-body\" style=\"background-color:green;color:white;\">
                {{message}}
              </div>
            </div>
          {% endfor %}
          {% for message in app.flashes('error') %}
            <div class=\"toast position-absolute\" data-delay=\"3000\" style=\"right:0;top:0;z-index:100\">
              <div class=\"toast-body\" style=\"background-color:red;color:white;\">
                {{message}}
              </div>
            </div>
          {% endfor %}
          <div id=\"toastError\"class=\"toast position-absolute hide\" data-delay=\"3000\" style=\"right:0;top:0;z-index:100; display:none\">
              <div class=\"toast-body\" style=\"background-color:red;color:white;\">
                Une erreur s'est produite ...
              </div>
            </div>
            <div id=\"toastSuccess\"class=\"toast position-absolute hide\" data-delay=\"3000\" style=\"right:0;top:0;z-index:100; display:none\">
              <div class=\"toast-body\" style=\"background-color:green;color:white;\">
                <span id=\"successMessage\"></span>
              </div>
            </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"{{path('home')}}\">Accueil</a></li>
              <li class=\"breadcrumb-item active\" id=\"def\"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <noscript><span  style=\"margin-left: auto; margin-right: auto\">Veuillez activez votre JavaScript pour acceder à l'application</span></noscript>
    {# Chargement de la barre recherche pour les paginations #}
    <div id=\"recherche\" style=\"display: none;\">   
                <div class=\"row\">
                <form class=\"offset-md-1\">
                    <div class=\"col-md-12\">
                      <div class=\"input-group\"> 
                        <div class=\"input-group-btn\">
                            <button id=\"actionButton\" style=\"background:#515559;color: #fff;  font-size: 0.93em\"type=\"button\" class=\"btn btn-search dropdown-toggle ml-2\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span id=\"selectedAction\">Recherche par </span><span class=\"caret ml-1\"></span></button>
                          <div id=\"searchAction\" class=\"dropdown-menu\" role=\"menu\">
                          </div>
                        </div><!-- /btn-group -->
                        <input id=\"valueSearch\" class=\"form-control\" type=\"text\" placeholder=\"Recherche\"
                      aria-label=\"Search\">
                      <button id=\"loupe\" type=\"submit\" style=\"background:#515559;color: #fff;  font-size: 0.9em\" class=\"btn btn-search\" type=\"button\"><i class=\"fa fa-search fa-fw\"></i></button>
                        <input id=\"actionInput\" type=\"hidden\" value=\"\"> 
                        <span class=\"input-group-addon\"><a><span class=\"glyphicon glyphicon-search\"></span></a> </span>
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </form>
            </div><!-- /.row -->
            
</div>

    {# Chargement du contenu general en Ajax dans la div root #}
     <div id=\"spinner\" style=\"display:none;\">
      <h1 class=\"ml9\">
        <span class=\"text-wrapper\">
          <span class=\"letters\">Veuillez patienter quelques instants...</span>
        </span>
      </h1>
      </div>
     
    <div id=\"root\">
   
    </div>
    </div>
        <!-- /.row -->

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class=\"main-footer\">
    <small>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</small>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- overlayScrollbars -->
<script src=\"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/adminlte.js\"></script>

<!-- OPTIONAL SCRIPTS -->
<script src=\"dist/js/demo.js\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"plugins/jquery-mousewheel/jquery.mousewheel.js\"></script>
<script src=\"plugins/raphael/raphael.min.js\"></script>
<script src=\"plugins/jquery-mapael/jquery.mapael.min.js\"></script>
<script src=\"plugins/jquery-mapael/maps/usa_states.min.js\"></script>
<!-- ChartJS -->
<script src=\"plugins/chart.js/Chart.min.js\"></script>

<!-- PAGE SCRIPTS -->
<script src=\"dist/js/pages/dashboard2.js\"></script>
<script src=\"js/global.js\"></script>
<script src=\"js/animejs.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\wamp\\www\\cloudme\\templates\\base.html.twig");
    }
}
