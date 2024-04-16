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

/* login.html.twig */
class __TwigTemplate_4324ba58aebd04e0f3bd65e70daed363 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login Voltride</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: \"Poppins\", sans-serif;
            background-color: #080710;
        }

        .background {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-image: url(\"images/bg.jpg\"); /* Chemin vers votre image locale */
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.13);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
            text-align: center;
        }

        .form-container img {
            width: 150px; /* Ajustez la taille de votre logo selon vos besoins */
            margin-bottom: 30px;
        }

        .form-container label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
        }

        .form-container input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
            color: #ffffff;
            outline: none;
            border: none;
        }

        .form-container input::placeholder {
            color: #e5e5e5;
        }

        .form-container .input-group {
            margin-bottom: 20px; /* Ajout de marge entre les champs */
        }

        .form-container button {
            margin-top: 20px; /* Réduit la marge au-dessus du bouton */
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            border: none;
            outline: none;
        }

        .social {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
            margin-right: 10px;
            cursor: pointer; /* Ajout d'un curseur pour indiquer l'interactivité */
            transition: background-color 0.3s ease; /* Ajout d'une transition pour une meilleure expérience utilisateur */
        }

        .social div:hover {
            background-color: rgba(
                255,
                255,
                255,
                0.47
            ); /* Changement de couleur au survol */
        }

        .social i {
            margin-right: 4px;
        }
    </style>
</head>
<body>
    <div class=\"background\"></div>
    <div class=\"form-container\">
        <img src=\"images/LOGO.png\" alt=\"Logo\" />
        <h2>Login to Your Account</h2>
                ";
        // line 139
        $this->displayBlock('body', $context, $blocks);
        // line 142
        echo "
    </div>
</body>
</html>



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 139
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 140
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
        return "login.html.twig";
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
        return array (  219 => 140,  209 => 139,  192 => 142,  190 => 139,  56 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login Voltride</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/all.min.css') }}\">
    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap') }}\" rel=\"stylesheet\">
    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: \"Poppins\", sans-serif;
            background-color: #080710;
        }

        .background {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-image: url(\"images/bg.jpg\"); /* Chemin vers votre image locale */
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.13);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
            text-align: center;
        }

        .form-container img {
            width: 150px; /* Ajustez la taille de votre logo selon vos besoins */
            margin-bottom: 30px;
        }

        .form-container label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
        }

        .form-container input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
            color: #ffffff;
            outline: none;
            border: none;
        }

        .form-container input::placeholder {
            color: #e5e5e5;
        }

        .form-container .input-group {
            margin-bottom: 20px; /* Ajout de marge entre les champs */
        }

        .form-container button {
            margin-top: 20px; /* Réduit la marge au-dessus du bouton */
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
            border: none;
            outline: none;
        }

        .social {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
            margin-right: 10px;
            cursor: pointer; /* Ajout d'un curseur pour indiquer l'interactivité */
            transition: background-color 0.3s ease; /* Ajout d'une transition pour une meilleure expérience utilisateur */
        }

        .social div:hover {
            background-color: rgba(
                255,
                255,
                255,
                0.47
            ); /* Changement de couleur au survol */
        }

        .social i {
            margin-right: 4px;
        }
    </style>
</head>
<body>
    <div class=\"background\"></div>
    <div class=\"form-container\">
        <img src=\"images/LOGO.png\" alt=\"Logo\" />
        <h2>Login to Your Account</h2>
                {% block body %}
        
        {% endblock %}

    </div>
</body>
</html>



", "login.html.twig", "C:\\Users\\Kais\\Desktop\\backupweb\\pidev_web\\templates\\login.html.twig");
    }
}
