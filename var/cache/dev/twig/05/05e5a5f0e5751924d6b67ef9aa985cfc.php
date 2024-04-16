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

/* baseF.html.twig */
class __TwigTemplate_158fb8b90b906255635389dd70a2ad6e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'titre' => [$this, 'block_titre'],
            'center' => [$this, 'block_center'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseF.html.twig"));

        // line 1
        echo "
<!doctype html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"author\" content=\"Untree.co\">
  <link rel=\"shortcut icon\" href=\"images/LOGO.png\">

  <meta name=\"description\" content=\"\" />
  <meta name=\"keywords\" content=\"bootstrap, bootstrap4\" />
";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 19
        echo "\t\t<title>";
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
\t</head>

\t<body>

\t\t<!-- Start Header/Navigation -->
\t\t<nav class=\"custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark\" arial-label=\"Furni navigation bar\">

\t\t\t<div class=\"container\">
\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO.png"), "html", null, true);
        echo "\" alt=\"Logo Voltride\" class=\"logo\">
\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Voltride<span>.</span></a>

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsFurni\" aria-controls=\"navbarsFurni\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarsFurni\">
\t\t\t\t\t<ul class=\"custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">Home</a>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a class=\"nav-link\" href=\"\">Reserver Voiture</a></li>
\t\t\t\t\t\t<li><a class=\"nav-link\" href=\"\">Reserver Evenement</a></li>
\t\t\t\t\t\t<li><a class=\"nav-link\" href=\"\">Service aprés vente</a></li>
\t\t\t\t\t</ul>

\t\t\t\t\t<ul class=\"custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5\">
                       <li><a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.svg"), "html", null, true);
        echo "\" /></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t</nav>
\t\t<!-- End Header/Navigation -->

\t\t<!-- Start Hero Section -->
\t\t";
        // line 55
        $this->displayBlock('center', $context, $blocks);
        // line 64
        echo "\t\t<!-- End Hero Section -->


\t\t<!-- End Product Section -->


\t\t

\t\t

\t\t

\t\t<!-- Start Footer Section -->
\t\t<footer class=\"footer-section\">
\t\t\t<div class=\"container relative\">

\t\t\t\t<div class=\"border-top copyright\">
\t\t\t\t\t<div class=\"row pt-4\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<p class=\"mb-2 text-center text-lg-start\">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved.<!-- License information: https://untree.co/license/ -->
            </p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</footer>
\t\t<!-- End Footer Section -->\t

";
        // line 96
        $this->displayBlock('js', $context, $blocks);
        // line 101
        echo "\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 13
        echo "\t\t<!-- Bootstrap CSS -->
\t\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/tiny-slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo " Voltride ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_center($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "center"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "center"));

        // line 56
        echo "\t\t\t<div class=\"hero\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 96
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 97
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tiny-slider.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "js/custom.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseF.html.twig";
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
        return array (  263 => 99,  259 => 98,  254 => 97,  244 => 96,  227 => 56,  217 => 55,  198 => 19,  186 => 17,  182 => 16,  178 => 15,  174 => 14,  171 => 13,  161 => 12,  148 => 101,  146 => 96,  112 => 64,  110 => 55,  96 => 46,  75 => 28,  62 => 19,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"author\" content=\"Untree.co\">
  <link rel=\"shortcut icon\" href=\"images/LOGO.png\">

  <meta name=\"description\" content=\"\" />
  <meta name=\"keywords\" content=\"bootstrap, bootstrap4\" />
{% block css %}
\t\t<!-- Bootstrap CSS -->
\t\t<link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('css/tiny-slider.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">
{% endblock %}
\t\t<title>{% block titre %} Voltride {% endblock %}</title>
\t</head>

\t<body>

\t\t<!-- Start Header/Navigation -->
\t\t<nav class=\"custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark\" arial-label=\"Furni navigation bar\">

\t\t\t<div class=\"container\">
\t\t\t\t<img src=\"{{asset('images/LOGO.png')}}\" alt=\"Logo Voltride\" class=\"logo\">
\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Voltride<span>.</span></a>

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsFurni\" aria-controls=\"navbarsFurni\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarsFurni\">
\t\t\t\t\t<ul class=\"custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">Home</a>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a class=\"nav-link\" href=\"\">Reserver Voiture</a></li>
\t\t\t\t\t\t<li><a class=\"nav-link\" href=\"\">Reserver Evenement</a></li>
\t\t\t\t\t\t<li><a class=\"nav-link\" href=\"\">Service aprés vente</a></li>
\t\t\t\t\t</ul>

\t\t\t\t\t<ul class=\"custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5\">
                       <li><a class=\"nav-link\" href=\"{{ path('app_login') }}\"><img src=\"{{ asset('images/user.svg') }}\" /></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t</nav>
\t\t<!-- End Header/Navigation -->

\t\t<!-- Start Hero Section -->
\t\t{% block center %}
\t\t\t<div class=\"hero\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row justify-content-between\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endblock %}
\t\t<!-- End Hero Section -->


\t\t<!-- End Product Section -->


\t\t

\t\t

\t\t

\t\t<!-- Start Footer Section -->
\t\t<footer class=\"footer-section\">
\t\t\t<div class=\"container relative\">

\t\t\t\t<div class=\"border-top copyright\">
\t\t\t\t\t<div class=\"row pt-4\">
\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t<p class=\"mb-2 text-center text-lg-start\">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved.<!-- License information: https://untree.co/license/ -->
            </p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</footer>
\t\t<!-- End Footer Section -->\t

{% block js %}
\t\t<script src=\"{{asset('js/bootstrap.bundle.min.js')}}\"></script>
\t\t<script src=\"{{asset('js/tiny-slider.js')}}\"></script>
\t\t<script src=\"{{asset('js/custom.js')}}js/custom.js\"></script>
{% endblock %}
\t</body>

</html>
", "baseF.html.twig", "C:\\Users\\Kais\\Desktop\\backupweb\\pidev_web\\templates\\baseF.html.twig");
    }
}
