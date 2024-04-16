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

/* inscri.html.twig */
class __TwigTemplate_8ad06cd51e21d476c977f3060035fa2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscri.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscri.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>Inscription</title>
    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <!-- Font-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sourcesanspro-font.css"), "html", null, true);
        echo "\" />
    <!-- Main Style Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    ";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "</head>
<body class=\"form-v8\">
    <div class=\"page-content\">
        <div class=\"form-v8-content\">
            <div class=\"form-left\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/form-v8.png"), "html", null, true);
        echo "\" alt=\"form\" />
            </div>
            <div class=\"form-right\">
                <div class=\"tab\">
                    <div class=\"tab-inner\">
                        
                    </div>
                </div>
                <form class=\"form-detail\" action=\"#\" method=\"post\" enctype=\"multipart/form-data\">
                
                    ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "                </form>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName(\"tabcontent\");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = \"none\";
            }
            tablinks = document.getElementsByClassName(\"tablinks\");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
            }
            document.getElementById(cityName).style.display = \"block\";
            evt.currentTarget.className += \" active\";
        }

        // Get the element with id=\"defaultOpen\" and click on it
        document.getElementById(\"defaultOpen\").click();
    </script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 13
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "                       
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "inscri.html.twig";
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
        return array (  155 => 31,  145 => 30,  132 => 13,  122 => 12,  88 => 33,  86 => 30,  73 => 20,  66 => 15,  64 => 12,  60 => 11,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>Inscription</title>
    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <!-- Font-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/sourcesanspro-font.css') }}\" />
    <!-- Main Style Css -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
    {% block head %}
    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
    {% endblock %}
</head>
<body class=\"form-v8\">
    <div class=\"page-content\">
        <div class=\"form-v8-content\">
            <div class=\"form-left\">
                <img src=\"{{ asset('images/form-v8.png') }}\" alt=\"form\" />
            </div>
            <div class=\"form-right\">
                <div class=\"tab\">
                    <div class=\"tab-inner\">
                        
                    </div>
                </div>
                <form class=\"form-detail\" action=\"#\" method=\"post\" enctype=\"multipart/form-data\">
                
                    {% block body %}
                       
                    {% endblock %}
                </form>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName(\"tabcontent\");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = \"none\";
            }
            tablinks = document.getElementsByClassName(\"tablinks\");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
            }
            document.getElementById(cityName).style.display = \"block\";
            evt.currentTarget.className += \" active\";
        }

        // Get the element with id=\"defaultOpen\" and click on it
        document.getElementById(\"defaultOpen\").click();
    </script>
</body>
</html>
", "inscri.html.twig", "C:\\Users\\Kais\\Desktop\\backupweb\\pidev_web\\templates\\inscri.html.twig");
    }
}
