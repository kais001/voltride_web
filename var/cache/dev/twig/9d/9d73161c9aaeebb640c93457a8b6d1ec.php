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
class __TwigTemplate_0679a7e320a55c4cabca169aca36bb87 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<!-- Basic Page Info -->
\t\t<meta charset=\"utf-8\" />
\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t<!-- Site favicon -->
\t\t<link
\t\t\trel=\"apple-touch-icon\"
\t\t\tsizes=\"180x180\"
\t\t\thref=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO.png"), "html", null, true);
        echo "\"
\t\t/>
\t\t<link
\t\t\trel=\"icon\"
\t\t\ttype=\"image/png\"
\t\t\tsizes=\"32x32\"
\t\t\thref=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO.png"), "html", null, true);
        echo "\"
\t\t/>
\t\t<link
\t\t\trel=\"icon\"
\t\t\ttype=\"image/png\"
\t\t\tsizes=\"16x16\"
\t\t\thref=\" ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO.png"), "html", null, true);
        echo "\"
\t\t/>

\t\t<!-- Mobile Specific Metas -->
\t\t<meta
\t\t\tname=\"viewport\"
\t\t\tcontent=\"width=device-width, initial-scale=1, maximum-scale=1\"
\t\t/>

\t\t<!-- Google Font -->
\t\t<link
\t\t\thref=\" ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"), "html", null, true);
        echo "\"
\t\t\trel=\"stylesheet\"
\t\t/>
\t\t<!-- CSS -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/core.css"), "html", null, true);
        echo "\" />
\t\t<link
\t\t\trel=\"stylesheet\"
\t\t\ttype=\"text/css\"
\t\t\thref=\" ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/icon-font.min.css"), "html", null, true);
        echo "\"
\t\t/>

\t\t
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/style.css"), "html", null, true);
        echo "\" />
\t\t
\t\t
\t</head>
\t<body>
\t\t<div class=\"pre-loader\">
\t\t\t<div class=\"pre-loader-box\">
\t\t\t\t<div class=\"loader-logo small-logo\"> <!-- Ajoutez la classe \"small-logo\" -->
\t\t\t\t\t<img src=\" ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"loader-progress\" id=\"progress_div\">
\t\t\t\t\t<div class=\"bar\" id=\"bar1\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"percent\" id=\"percent1\">0%</div>
\t\t\t\t<div class=\"loading-text\">Loading...</div>
\t\t\t</div>
\t\t</div>
\t\t

\t\t<div class=\"header\">
\t\t\t<div class=\"header-left\">
\t\t\t\t<div class=\"menu-icon bi bi-list\"></div>
\t\t\t\t<div
\t\t\t\t\tclass=\"search-toggle-icon bi bi-search\"
\t\t\t\t\tdata-toggle=\"header_search\"
\t\t\t\t></div>
\t\t\t\t<div class=\"header-search\">
\t\t\t\t\t<form>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"header-right\">
\t\t\t\t<div class=\"dashboard-setting user-notification\">
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\tclass=\"dropdown-toggle no-arrow\"
\t\t\t\t\t\t\thref=\"javascript:;\"
\t\t\t\t\t\t\tdata-toggle=\"right-sidebar\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<i class=\"dw dw-settings2\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t\t<div class=\"right-sidebar\">
\t\t\t<div class=\"sidebar-title\">
\t\t\t\t<h3 class=\"weight-600 font-16 text-blue\">
\t\t\t\t\tLayout Settings
\t\t\t\t\t<span class=\"btn-block font-weight-400 font-12\"
\t\t\t\t\t\t>User Interface Settings</span
\t\t\t\t\t>
\t\t\t\t</h3>
\t\t\t\t<div class=\"close-sidebar\" data-toggle=\"right-sidebar-close\">
\t\t\t\t\t<i class=\"icon-copy ion-close-round\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"right-sidebar-body customscroll\">
\t\t\t\t<div class=\"right-sidebar-body-content\">
\t\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Header Background</h4>
\t\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"javascript:void(0);\"
\t\t\t\t\t\t\tclass=\"btn btn-outline-primary header-white active\"
\t\t\t\t\t\t\t>White</a
\t\t\t\t\t\t>
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"javascript:void(0);\"
\t\t\t\t\t\t\tclass=\"btn btn-outline-primary header-dark\"
\t\t\t\t\t\t\t>Dark</a
\t\t\t\t\t\t>
\t\t\t\t\t</div>

\t\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Sidebar Background</h4>
\t\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"javascript:void(0);\"
\t\t\t\t\t\t\tclass=\"btn btn-outline-primary sidebar-light\"
\t\t\t\t\t\t\t>White</a
\t\t\t\t\t\t>
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"javascript:void(0);\"
\t\t\t\t\t\t\tclass=\"btn btn-outline-primary sidebar-dark active\"
\t\t\t\t\t\t\t>Dark</a
\t\t\t\t\t\t>
\t\t\t\t\t</div>

\t\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu Dropdown Icon</h4>
\t\t\t\t\t<div class=\"sidebar-radio-group pb-10 mb-10\">
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebaricon-1\"
\t\t\t\t\t\t\t\tname=\"menu-dropdown-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-style-1\"
\t\t\t\t\t\t\t\tchecked=\"\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-1\"
\t\t\t\t\t\t\t\t><i class=\"fa fa-angle-down\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebaricon-2\"
\t\t\t\t\t\t\t\tname=\"menu-dropdown-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-style-2\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-2\"
\t\t\t\t\t\t\t\t><i class=\"ion-plus-round\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebaricon-3\"
\t\t\t\t\t\t\t\tname=\"menu-dropdown-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-style-3\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-3\"
\t\t\t\t\t\t\t\t><i class=\"fa fa-angle-double-right\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu List Icon</h4>
\t\t\t\t\t<div class=\"sidebar-radio-group pb-30 mb-10\">
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-1\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-1\"
\t\t\t\t\t\t\t\tchecked=\"\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-1\"
\t\t\t\t\t\t\t\t><i class=\"ion-minus-round\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-2\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-2\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-2\"
\t\t\t\t\t\t\t\t><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-3\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-3\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-3\"
\t\t\t\t\t\t\t\t><i class=\"dw dw-check\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-4\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-4\"
\t\t\t\t\t\t\t\tchecked=\"\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-4\"
\t\t\t\t\t\t\t\t><i class=\"icon-copy dw dw-next-2\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-5\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-5\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-5\"
\t\t\t\t\t\t\t\t><i class=\"dw dw-fast-forward-1\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-6\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-6\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-6\"
\t\t\t\t\t\t\t\t><i class=\"dw dw-next\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"reset-options pt-30 text-center\">
\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"reset-settings\">
\t\t\t\t\t\t\tReset Settings
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"left-side-bar\">
\t\t\t<div class=\"brand-logo\">
\t\t\t\t<a href=\" ";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("base.html.twig"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\" ";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO.png"), "html", null, true);
        echo "\" alt=\"\" class=\"dark-logo\" />
\t\t\t\t\t<img src=\" ";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO.png"), "html", null, true);
        echo "\" alt=\"\" class=\"light-logo\" />
\t\t\t\t\t<span>Voltride</span> <!-- Texte à droite du logo -->
\t\t\t\t</a>
\t\t\t\t<div class=\"close-sidebar\" data-toggle=\"left-sidebar-close\">
\t\t\t\t\t<i class=\"ion-close-round\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
<div class=\"menu-block customscroll\">
    <div class=\"sidebar-menu\">
        <ul id=\"accordion-menu\">
            <style>
                /* Style pour l'image lorsque l'utilisateur survole le bouton */
                .dropdown-toggle:hover .micon img {
                    content: url(\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/22.png"), "html", null, true);
        echo "\");
                }
            </style>

            <li class=\"dropdown\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\">
                    <span class=\"micon\">
                        <img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Sample_User_Icon.png"), "html", null, true);
        echo "\" alt=\"Votre logo\" />
                    </span>
                    <span class=\"mtext\">Gestion Utilisateurs</span>
                </a>
                <ul class=\"submenu\">
                    <li><a href=\"";
        // line 298
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Gestion Admins</a></li>
                    <li><a href=\"";
        // line 299
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur");
        echo "\">Gestion Clients</a></li>
                </ul>
            </li>



            <li class=\"dropdown\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\">
                <span class=\"micon bi bi-file-earmark-text\"></span
                ><span class=\"mtext\">Gestion Voitures</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li><a href=\"\">Ajouter Voiture</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Modifier Voiture</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Afficher Voiture</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<span class=\"micon bi bi-bug\"></span
\t\t\t\t\t\t\t\t><span class=\"mtext\">Gestion Bornes</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li><a href=\"\">Ajouter Bornes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Modifier Bornes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Afficher Bornes</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<span class=\"micon bi bi-back\"></span
\t\t\t\t\t\t\t\t><span class=\"mtext\">Gestion Evenements</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li><a href=\"\">Ajouter Evenement</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Modifier Evenement</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Afficher Evenement</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<span class=\"micon bi bi-hdd-stack\"></span
\t\t\t\t\t\t\t\t><span class=\"mtext\">Service aprés vente</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li><a href=\"\">Ajouter Service aprés vente</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Modifier Service aprés vente</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Afficher Service aprés vente</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"sidebar-small-cap\">Extra</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\" ";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://dropways.github.io/deskapp-free-single-page-website-template/"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\tclass=\"dropdown-toggle no-arrow\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<span class=\"micon bi bi-layout-text-window-reverse\"></span>
\t\t\t\t\t\t\t\t<span class=\"mtext\"
\t\t\t\t\t\t\t\t\t>Landing Page
\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/coming-soon.png"), "html", null, true);
        echo "\" alt=\"\" width=\"25\"
\t\t\t\t\t\t\t\t/></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
        ";
        // line 377
        $this->displayBlock('body', $context, $blocks);
        // line 386
        echo "
\t\t<!-- js -->
\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('a[href=\"/admin\"]').click(function(event) {
            event.preventDefault(); // Empêche le comportement de lien par défaut
            window.location.href = \$(this).attr('href'); // Met à jour l'URL de la page
        });

        \$('a[href=\"/utilisateur\"]').click(function(event) {
            event.preventDefault(); // Empêche le comportement de lien par défaut
            window.location.href = \$(this).attr('href'); // Met à jour l'URL de la page
        });
    });
</script>

\t\t<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/core.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/script.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/process.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("scripts/layout-settings.js"), "html", null, true);
        echo "\"</script>
\t</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Voltride ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 377
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 378
        echo "    <div class=\"main-container\">
\t <div class=\"content\">
        <div class=\"white-frame\">
            <!-- Votre contenu ici -->
        </div>
\t </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  552 => 378,  542 => 377,  523 => 6,  510 => 406,  506 => 405,  502 => 404,  498 => 403,  479 => 386,  477 => 377,  464 => 367,  454 => 360,  390 => 299,  386 => 298,  378 => 293,  368 => 286,  351 => 272,  347 => 271,  343 => 270,  125 => 55,  114 => 47,  107 => 43,  100 => 39,  93 => 35,  79 => 24,  70 => 18,  61 => 12,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<!-- Basic Page Info -->
\t\t<meta charset=\"utf-8\" />
\t\t<title>{% block title %} Voltride {% endblock %}</title>

\t\t<!-- Site favicon -->
\t\t<link
\t\t\trel=\"apple-touch-icon\"
\t\t\tsizes=\"180x180\"
\t\t\thref=\" {{asset('images/LOGO.png')}}\"
\t\t/>
\t\t<link
\t\t\trel=\"icon\"
\t\t\ttype=\"image/png\"
\t\t\tsizes=\"32x32\"
\t\t\thref=\" {{asset('images/LOGO.png')}}\"
\t\t/>
\t\t<link
\t\t\trel=\"icon\"
\t\t\ttype=\"image/png\"
\t\t\tsizes=\"16x16\"
\t\t\thref=\" {{asset('images/LOGO.png')}}\"
\t\t/>

\t\t<!-- Mobile Specific Metas -->
\t\t<meta
\t\t\tname=\"viewport\"
\t\t\tcontent=\"width=device-width, initial-scale=1, maximum-scale=1\"
\t\t/>

\t\t<!-- Google Font -->
\t\t<link
\t\t\thref=\" {{asset('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap')}}\"
\t\t\trel=\"stylesheet\"
\t\t/>
\t\t<!-- CSS -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" {{asset('styles/core.css')}}\" />
\t\t<link
\t\t\trel=\"stylesheet\"
\t\t\ttype=\"text/css\"
\t\t\thref=\" {{asset('styles/icon-font.min.css')}}\"
\t\t/>

\t\t
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" {{asset('styles/style.css')}}\" />
\t\t
\t\t
\t</head>
\t<body>
\t\t<div class=\"pre-loader\">
\t\t\t<div class=\"pre-loader-box\">
\t\t\t\t<div class=\"loader-logo small-logo\"> <!-- Ajoutez la classe \"small-logo\" -->
\t\t\t\t\t<img src=\" {{asset('images/LOGO.png')}}\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"loader-progress\" id=\"progress_div\">
\t\t\t\t\t<div class=\"bar\" id=\"bar1\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"percent\" id=\"percent1\">0%</div>
\t\t\t\t<div class=\"loading-text\">Loading...</div>
\t\t\t</div>
\t\t</div>
\t\t

\t\t<div class=\"header\">
\t\t\t<div class=\"header-left\">
\t\t\t\t<div class=\"menu-icon bi bi-list\"></div>
\t\t\t\t<div
\t\t\t\t\tclass=\"search-toggle-icon bi bi-search\"
\t\t\t\t\tdata-toggle=\"header_search\"
\t\t\t\t></div>
\t\t\t\t<div class=\"header-search\">
\t\t\t\t\t<form>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"header-right\">
\t\t\t\t<div class=\"dashboard-setting user-notification\">
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\tclass=\"dropdown-toggle no-arrow\"
\t\t\t\t\t\t\thref=\"javascript:;\"
\t\t\t\t\t\t\tdata-toggle=\"right-sidebar\"
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<i class=\"dw dw-settings2\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t\t<div class=\"right-sidebar\">
\t\t\t<div class=\"sidebar-title\">
\t\t\t\t<h3 class=\"weight-600 font-16 text-blue\">
\t\t\t\t\tLayout Settings
\t\t\t\t\t<span class=\"btn-block font-weight-400 font-12\"
\t\t\t\t\t\t>User Interface Settings</span
\t\t\t\t\t>
\t\t\t\t</h3>
\t\t\t\t<div class=\"close-sidebar\" data-toggle=\"right-sidebar-close\">
\t\t\t\t\t<i class=\"icon-copy ion-close-round\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"right-sidebar-body customscroll\">
\t\t\t\t<div class=\"right-sidebar-body-content\">
\t\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Header Background</h4>
\t\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"javascript:void(0);\"
\t\t\t\t\t\t\tclass=\"btn btn-outline-primary header-white active\"
\t\t\t\t\t\t\t>White</a
\t\t\t\t\t\t>
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"javascript:void(0);\"
\t\t\t\t\t\t\tclass=\"btn btn-outline-primary header-dark\"
\t\t\t\t\t\t\t>Dark</a
\t\t\t\t\t\t>
\t\t\t\t\t</div>

\t\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Sidebar Background</h4>
\t\t\t\t\t<div class=\"sidebar-btn-group pb-30 mb-10\">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"javascript:void(0);\"
\t\t\t\t\t\t\tclass=\"btn btn-outline-primary sidebar-light\"
\t\t\t\t\t\t\t>White</a
\t\t\t\t\t\t>
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"javascript:void(0);\"
\t\t\t\t\t\t\tclass=\"btn btn-outline-primary sidebar-dark active\"
\t\t\t\t\t\t\t>Dark</a
\t\t\t\t\t\t>
\t\t\t\t\t</div>

\t\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu Dropdown Icon</h4>
\t\t\t\t\t<div class=\"sidebar-radio-group pb-10 mb-10\">
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebaricon-1\"
\t\t\t\t\t\t\t\tname=\"menu-dropdown-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-style-1\"
\t\t\t\t\t\t\t\tchecked=\"\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-1\"
\t\t\t\t\t\t\t\t><i class=\"fa fa-angle-down\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebaricon-2\"
\t\t\t\t\t\t\t\tname=\"menu-dropdown-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-style-2\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-2\"
\t\t\t\t\t\t\t\t><i class=\"ion-plus-round\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebaricon-3\"
\t\t\t\t\t\t\t\tname=\"menu-dropdown-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-style-3\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebaricon-3\"
\t\t\t\t\t\t\t\t><i class=\"fa fa-angle-double-right\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<h4 class=\"weight-600 font-18 pb-10\">Menu List Icon</h4>
\t\t\t\t\t<div class=\"sidebar-radio-group pb-30 mb-10\">
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-1\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-1\"
\t\t\t\t\t\t\t\tchecked=\"\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-1\"
\t\t\t\t\t\t\t\t><i class=\"ion-minus-round\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-2\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-2\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-2\"
\t\t\t\t\t\t\t\t><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-3\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-3\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-3\"
\t\t\t\t\t\t\t\t><i class=\"dw dw-check\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-4\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-4\"
\t\t\t\t\t\t\t\tchecked=\"\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-4\"
\t\t\t\t\t\t\t\t><i class=\"icon-copy dw dw-next-2\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-5\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-5\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-5\"
\t\t\t\t\t\t\t\t><i class=\"dw dw-fast-forward-1\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"custom-control custom-radio custom-control-inline\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\tid=\"sidebariconlist-6\"
\t\t\t\t\t\t\t\tname=\"menu-list-icon\"
\t\t\t\t\t\t\t\tclass=\"custom-control-input\"
\t\t\t\t\t\t\t\tvalue=\"icon-list-style-6\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label class=\"custom-control-label\" for=\"sidebariconlist-6\"
\t\t\t\t\t\t\t\t><i class=\"dw dw-next\"></i
\t\t\t\t\t\t\t></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"reset-options pt-30 text-center\">
\t\t\t\t\t\t<button class=\"btn btn-danger\" id=\"reset-settings\">
\t\t\t\t\t\t\tReset Settings
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"left-side-bar\">
\t\t\t<div class=\"brand-logo\">
\t\t\t\t<a href=\" {{asset('base.html.twig')}}\">
\t\t\t\t\t<img src=\" {{asset('images/LOGO.png')}}\" alt=\"\" class=\"dark-logo\" />
\t\t\t\t\t<img src=\" {{asset('images/LOGO.png')}}\" alt=\"\" class=\"light-logo\" />
\t\t\t\t\t<span>Voltride</span> <!-- Texte à droite du logo -->
\t\t\t\t</a>
\t\t\t\t<div class=\"close-sidebar\" data-toggle=\"left-sidebar-close\">
\t\t\t\t\t<i class=\"ion-close-round\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
<div class=\"menu-block customscroll\">
    <div class=\"sidebar-menu\">
        <ul id=\"accordion-menu\">
            <style>
                /* Style pour l'image lorsque l'utilisateur survole le bouton */
                .dropdown-toggle:hover .micon img {
                    content: url(\"{{ asset('images/22.png') }}\");
                }
            </style>

            <li class=\"dropdown\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\">
                    <span class=\"micon\">
                        <img src=\"{{ asset('images/Sample_User_Icon.png') }}\" alt=\"Votre logo\" />
                    </span>
                    <span class=\"mtext\">Gestion Utilisateurs</span>
                </a>
                <ul class=\"submenu\">
                    <li><a href=\"{{ path('admin') }}\">Gestion Admins</a></li>
                    <li><a href=\"{{ path('utilisateur') }}\">Gestion Clients</a></li>
                </ul>
            </li>



            <li class=\"dropdown\">
              <a href=\"javascript:;\" class=\"dropdown-toggle\">
                <span class=\"micon bi bi-file-earmark-text\"></span
                ><span class=\"mtext\">Gestion Voitures</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li><a href=\"\">Ajouter Voiture</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Modifier Voiture</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Afficher Voiture</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<span class=\"micon bi bi-bug\"></span
\t\t\t\t\t\t\t\t><span class=\"mtext\">Gestion Bornes</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li><a href=\"\">Ajouter Bornes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Modifier Bornes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Afficher Bornes</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<span class=\"micon bi bi-back\"></span
\t\t\t\t\t\t\t\t><span class=\"mtext\">Gestion Evenements</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li><a href=\"\">Ajouter Evenement</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Modifier Evenement</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Afficher Evenement</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<span class=\"micon bi bi-hdd-stack\"></span
\t\t\t\t\t\t\t\t><span class=\"mtext\">Service aprés vente</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li><a href=\"\">Ajouter Service aprés vente</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Modifier Service aprés vente</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Afficher Service aprés vente</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"sidebar-small-cap\">Extra</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\thref=\" {{asset('https://dropways.github.io/deskapp-free-single-page-website-template/')}}\"
\t\t\t\t\t\t\t\ttarget=\"_blank\"
\t\t\t\t\t\t\t\tclass=\"dropdown-toggle no-arrow\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<span class=\"micon bi bi-layout-text-window-reverse\"></span>
\t\t\t\t\t\t\t\t<span class=\"mtext\"
\t\t\t\t\t\t\t\t\t>Landing Page
\t\t\t\t\t\t\t\t\t<img src=\" {{asset('images/coming-soon.png')}}\" alt=\"\" width=\"25\"
\t\t\t\t\t\t\t\t/></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
        {% block body %}
    <div class=\"main-container\">
\t <div class=\"content\">
        <div class=\"white-frame\">
            <!-- Votre contenu ici -->
        </div>
\t </div>
    </div>
{% endblock %}

\t\t<!-- js -->
\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('a[href=\"/admin\"]').click(function(event) {
            event.preventDefault(); // Empêche le comportement de lien par défaut
            window.location.href = \$(this).attr('href'); // Met à jour l'URL de la page
        });

        \$('a[href=\"/utilisateur\"]').click(function(event) {
            event.preventDefault(); // Empêche le comportement de lien par défaut
            window.location.href = \$(this).attr('href'); // Met à jour l'URL de la page
        });
    });
</script>

\t\t<script src=\"{{asset('scripts/core.js')}}\"></script>
\t\t<script src=\"{{asset('scripts/script.min.js')}}\"></script>
\t\t<script src=\"{{asset('scripts/process.js')}}\"></script>
\t\t<script src=\"{{asset('scripts/layout-settings.js')}}\"</script>
\t</body>
</html>", "base.html.twig", "C:\\Users\\Kais\\Desktop\\backupweb\\pidev_web\\templates\\base.html.twig");
    }
}
