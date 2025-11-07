<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* basef.html.twig */
class __TwigTemplate_8e935bd2a87a8e66437ac4e9cf0234fe extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basef.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basef.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"theme-color\" content=\"#1a1a2e\">

    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-32x32.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-16x16.png"), "html", null, true);
        yield "\">
    <link rel=\"manifest\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/site.webmanifest"), "html", null, true);
        yield "\">
    <link rel=\"mask-icon\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/safari-pinned-tab.svg"), "html", null, true);
        yield "\" color=\"#5bbad5\">
    <meta name=\"msapplication-TileColor\" content=\"#da532c\">

    <title>";
        // line 16
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- CSS via CDN -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">

    ";
        // line 24
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 231
        yield "</head>
<body>
    ";
        // line 233
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 336
        yield "
    <main class=\"main-content\" style=\"padding-top: var(--navbar-height);\">
        <div class=\"container\">
             ";
        // line 339
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 340
        yield "        </div>
    </main>

    ";
        // line 343
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 400
        yield "
    ";
        // line 401
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 407
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "UrbanLink | Mobility Solutions";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        yield "    <style>
        /* CSS Variables */
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4cc9f0;
            --dark: #1a1a2e; /* Primary navbar color */
            --footer-bg: #000000; /* Black footer background */
            --light: #f8f9fa;
            --gradient-accent: linear-gradient(to right, var(--accent), var(--primary));
            --shadow-sm: 0 4px 10px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 5px 15px rgba(0, 0, 0, 0.2);
            --navbar-height: 70px;
            --transition-default: all 0.3s ease;
        }

        /* Global Styles */
        body {
            background-color: #f5f7fa;
            color: #333;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .main-content {
            flex: 1;
            padding-top: 80px;
            padding-bottom: 2rem;
        }

        /* Button Styles */
        .btn-accent {
            background-color: var(--accent);
            color: white;
            border: none;
            transition: var(--transition-default);
        }

        .btn-accent:hover {
            background-color: #3ab7d8;
            color: white;
        }

        /* Navbar Styles - Fixed Size and Color */
        .navbar {
            background: var(--dark);
            box-shadow: var(--shadow-sm);
            padding: 0.75rem 0;
            height: 70px;
            min-height: 70px;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            background: linear-gradient(to right, var(--accent), #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: flex;
            align-items: center;
        }

        .navbar-brand i {
            margin-right: 10px;
            font-size: 1.5rem;
            color: var(--accent);
        }

        .nav-item {
            margin: 1rem;
        }

        .nav-link {
            color: #fff !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            position: relative;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent);
            transition: width 0.3s ease;
        }

        .nav-link:hover::before {
            width: 100%;
        }

        .dropdown-menu {
            background-color: var(--dark);
            border: none;
            box-shadow: var(--shadow-md);
        }

        .dropdown-item {
            color: rgba(255, 255, 255, 0.8);
            transition: var(--transition-default);
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            color: #fff;
            background-color: var(--secondary);
        }

        @media (max-width: 992px) {
            .navbar-collapse {
                background: rgba(26, 26, 46, 0.98);
                padding: 1rem;
                border-radius: 0.5rem;
                margin-top: 0.5rem;
            }
        }

        /* Footer Styles - Black Background */
        .footer {
            background: var(--footer-bg);
            color: #fff;
            padding: 3rem 0 1rem;
            position: relative;
            margin-top: auto;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--accent);
        }

        .footer h5 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .footer h5::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--accent);
        }

        .footer a {
            color: rgba(255, 255, 255, 0.7);
            transition: var(--transition-default);
            text-decoration: none;
        }

        .footer a:hover {
            color: #fff;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
        }

        .footer-links i {
            margin-right: 10px;
            color: var(--accent);
            font-size: 0.8rem;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            transition: var(--transition-default);
        }

        .social-icons a:hover {
            background: var(--accent);
        }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 2rem;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.6);
        }
    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 233
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 234
        yield "    <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" aria-label=\"Main navigation\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 236
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_dashboard");
        yield "\">
                <i class=\"fas fa-bus\" aria-hidden=\"true\"></i> UrbanLink
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                ";
        // line 245
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DRIVER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 246
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownVehicles\" role=\"button\" 
                           data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-car me-1\" aria-hidden=\"true\"></i> Vehicles
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownVehicles\">
                            <li><a class=\"dropdown-item\" href=\"";
            // line 252
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_vehicle");
            yield "\">Vehicle List</a></li>
                        </ul>
                    </li>
                ";
        }
        // line 256
        yield "                 <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTaxi\"
                       role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-taxi me-1\"></i> Taxi
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdownTaxi\">
                        <li><a class=\"dropdown-item\" href=\"";
        // line 262
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_course_new");
        yield "\">
                            <i class=\"fas fa-car-side me-2\"></i> Booking taxi
                        </a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 265
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_courses");
        yield "\">
                            <i class=\"fas fa-clock me-2\"></i> Ride History
                        </a></li>
                    </ul>
                </li>
                

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownRoutes\" role=\"button\" 
                           data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-route me-1\" aria-hidden=\"true\"></i> Routes
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownRoutes\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
        yield "\">Plan a Route</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_list");
        yield "\">My Routes</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownReviews\" role=\"button\" 
                           data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-comment-dots me-1\" aria-hidden=\"true\"></i> Reviews
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownReviews\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 289
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new_front");
        yield "\">Add Review</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 290
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_front");
        yield "\">Review History</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTaxi\" role=\"button\" 
                           data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-taxi me-1\" aria-hidden=\"true\"></i> Subscription
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownAbonnement\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 300
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_mes_reservations");
        yield "\">Mes abonnements</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 301
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_index");
        yield "\">Souscrire un abonnement</a></li>
                        </ul>
                    </li>

                     <li class=\"nav-item dropdown ms-lg-3 my-2 my-lg-0\">
                    <a class=\"nav-link dropdown-toggle p-0\" href=\"#\" id=\"navbarDropdownProfile\"
                       role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" title=\"Mon compte\">
                        ";
        // line 308
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 308, $this->source); })()), "user", [], "any", false, false, false, 308) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 308, $this->source); })()), "user", [], "any", false, false, false, 308), "image", [], "any", false, false, false, 308))) {
            // line 309
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_avatar", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 309, $this->source); })()), "user", [], "any", false, false, false, 309), "id", [], "any", false, false, false, 309)]), "html", null, true);
            yield "\"
                                 alt=\"";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 310, $this->source); })()), "user", [], "any", false, false, false, 310), "username", [], "any", false, false, false, 310), "html", null, true);
            yield "\"
                                 class=\"rounded-circle\"
                                 style=\"width:40px; height:40px; object-fit:cover;\" />
                        ";
        } else {
            // line 314
            yield "                            <i class=\"fas fa-user-circle fa-2x text-secondary\"></i>
                        ";
        }
        // line 316
        yield "                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdownProfile\">
                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 319
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_myprofile");
        yield "\">
                                <i class=\"fas fa-user me-2\"></i> Profil
                            </a>
                        </li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li>
                            <a class=\"dropdown-item\" href=\"";
        // line 325
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                                <i class=\"fas fa-sign-out-alt me-2\"></i> Déconnexion
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 339
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 343
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 344
        yield "    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6\">
                    <h5><i class=\"fas fa-bus me-2\" aria-hidden=\"true\"></i> UrbanLink</h5>
                    <p class=\"mt-3\">Your complete urban mobility solution. We connect people to their destinations safely, efficiently and comfortably.</p>
                    <div class=\"mt-4\">
                        <a href=\"#\" class=\"btn btn-outline-light btn-sm rounded-pill me-2\">
                            <i class=\"fas fa-download me-1\" aria-hidden=\"true\"></i> Download App
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <h5>Quick Links</h5>
                    <ul class=\"footer-links list-unstyled\">
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Home</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Services</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Pricing</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> About</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h5>Services</h5>
                    <ul class=\"footer-links list-unstyled\">
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Urban Transport</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Taxi Services</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Subscriptions</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> School Transport</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Vehicle Rentals</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h5>Contact Us</h5>
                    <ul class=\"footer-links list-unstyled\">
                        <li><i class=\"fas fa-map-marker-alt me-2\" aria-hidden=\"true\"></i> 123 Main Street, City</li>
                        <li><i class=\"fas fa-phone-alt me-2\" aria-hidden=\"true\"></i> +123 456 7890</li>
                        <li><i class=\"fas fa-envelope me-2\" aria-hidden=\"true\"></i> contact@urbanlink.com</li>
                    </ul>
                    <div class=\"social-icons mt-3\">
                        <a href=\"#\" aria-label=\"Facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
                        <a href=\"#\" aria-label=\"Twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
                        <a href=\"#\" aria-label=\"Instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
                        <a href=\"#\" aria-label=\"LinkedIn\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
                        <a href=\"#\" aria-label=\"YouTube\"><i class=\"fab fa-youtube\" aria-hidden=\"true\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"copyright text-center\">
                <p class=\"mb-0\">&copy; ";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " UrbanLink. All rights reserved. | 
                   <a href=\"#\">Privacy Policy</a> | <a href=\"#\">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 401
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 402
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
        // Script cleanup - removed scroll effect to maintain consistent navbar
    </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "basef.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  683 => 402,  670 => 401,  652 => 393,  601 => 344,  588 => 343,  566 => 339,  544 => 325,  535 => 319,  530 => 316,  526 => 314,  519 => 310,  514 => 309,  512 => 308,  502 => 301,  498 => 300,  485 => 290,  481 => 289,  468 => 279,  464 => 278,  448 => 265,  442 => 262,  434 => 256,  427 => 252,  419 => 246,  417 => 245,  405 => 236,  401 => 234,  388 => 233,  172 => 25,  159 => 24,  136 => 16,  124 => 407,  122 => 401,  119 => 400,  117 => 343,  112 => 340,  110 => 339,  105 => 336,  103 => 233,  99 => 231,  97 => 24,  86 => 16,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"theme-color\" content=\"#1a1a2e\">

    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('assets/img/apple-touch-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('assets/img/favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('assets/img/favicon-16x16.png') }}\">
    <link rel=\"manifest\" href=\"{{ asset('assets/site.webmanifest') }}\">
    <link rel=\"mask-icon\" href=\"{{ asset('assets/img/safari-pinned-tab.svg') }}\" color=\"#5bbad5\">
    <meta name=\"msapplication-TileColor\" content=\"#da532c\">

    <title>{% block title %}UrbanLink | Mobility Solutions{% endblock %}</title>

    <!-- CSS via CDN -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css\" rel=\"stylesheet\">

    {% block stylesheets %}
    <style>
        /* CSS Variables */
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4cc9f0;
            --dark: #1a1a2e; /* Primary navbar color */
            --footer-bg: #000000; /* Black footer background */
            --light: #f8f9fa;
            --gradient-accent: linear-gradient(to right, var(--accent), var(--primary));
            --shadow-sm: 0 4px 10px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 5px 15px rgba(0, 0, 0, 0.2);
            --navbar-height: 70px;
            --transition-default: all 0.3s ease;
        }

        /* Global Styles */
        body {
            background-color: #f5f7fa;
            color: #333;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .main-content {
            flex: 1;
            padding-top: 80px;
            padding-bottom: 2rem;
        }

        /* Button Styles */
        .btn-accent {
            background-color: var(--accent);
            color: white;
            border: none;
            transition: var(--transition-default);
        }

        .btn-accent:hover {
            background-color: #3ab7d8;
            color: white;
        }

        /* Navbar Styles - Fixed Size and Color */
        .navbar {
            background: var(--dark);
            box-shadow: var(--shadow-sm);
            padding: 0.75rem 0;
            height: 70px;
            min-height: 70px;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            background: linear-gradient(to right, var(--accent), #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: flex;
            align-items: center;
        }

        .navbar-brand i {
            margin-right: 10px;
            font-size: 1.5rem;
            color: var(--accent);
        }

        .nav-item {
            margin: 1rem;
        }

        .nav-link {
            color: #fff !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            position: relative;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent);
            transition: width 0.3s ease;
        }

        .nav-link:hover::before {
            width: 100%;
        }

        .dropdown-menu {
            background-color: var(--dark);
            border: none;
            box-shadow: var(--shadow-md);
        }

        .dropdown-item {
            color: rgba(255, 255, 255, 0.8);
            transition: var(--transition-default);
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            color: #fff;
            background-color: var(--secondary);
        }

        @media (max-width: 992px) {
            .navbar-collapse {
                background: rgba(26, 26, 46, 0.98);
                padding: 1rem;
                border-radius: 0.5rem;
                margin-top: 0.5rem;
            }
        }

        /* Footer Styles - Black Background */
        .footer {
            background: var(--footer-bg);
            color: #fff;
            padding: 3rem 0 1rem;
            position: relative;
            margin-top: auto;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--accent);
        }

        .footer h5 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .footer h5::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--accent);
        }

        .footer a {
            color: rgba(255, 255, 255, 0.7);
            transition: var(--transition-default);
            text-decoration: none;
        }

        .footer a:hover {
            color: #fff;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
        }

        .footer-links i {
            margin-right: 10px;
            color: var(--accent);
            font-size: 0.8rem;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            transition: var(--transition-default);
        }

        .social-icons a:hover {
            background: var(--accent);
        }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 2rem;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.6);
        }
    </style>
    {% endblock %}
</head>
<body>
    {% block header %}
    <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" aria-label=\"Main navigation\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{ path('client_dashboard') }}\">
                <i class=\"fas fa-bus\" aria-hidden=\"true\"></i> UrbanLink
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
                    aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                {% if is_granted('ROLE_DRIVER') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownVehicles\" role=\"button\" 
                           data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-car me-1\" aria-hidden=\"true\"></i> Vehicles
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownVehicles\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('my_vehicle')}}\">Vehicle List</a></li>
                        </ul>
                    </li>
                {% endif %}
                 <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTaxi\"
                       role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-taxi me-1\"></i> Taxi
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdownTaxi\">
                        <li><a class=\"dropdown-item\" href=\"{{ path('user_course_new') }}\">
                            <i class=\"fas fa-car-side me-2\"></i> Booking taxi
                        </a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('user_courses') }}\">
                            <i class=\"fas fa-clock me-2\"></i> Ride History
                        </a></li>
                    </ul>
                </li>
                

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownRoutes\" role=\"button\" 
                           data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-route me-1\" aria-hidden=\"true\"></i> Routes
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownRoutes\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('reservation_affichage')}}\">Plan a Route</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('reservation_list')}}\">My Routes</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownReviews\" role=\"button\" 
                           data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-comment-dots me-1\" aria-hidden=\"true\"></i> Reviews
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownReviews\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_avis_new_front') }}\">Add Review</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_avis_front') }}\">Review History</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownTaxi\" role=\"button\" 
                           data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-taxi me-1\" aria-hidden=\"true\"></i> Subscription
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownAbonnement\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_abonnement_mes_reservations') }}\">Mes abonnements</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_abonnement_index') }}\">Souscrire un abonnement</a></li>
                        </ul>
                    </li>

                     <li class=\"nav-item dropdown ms-lg-3 my-2 my-lg-0\">
                    <a class=\"nav-link dropdown-toggle p-0\" href=\"#\" id=\"navbarDropdownProfile\"
                       role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" title=\"Mon compte\">
                        {% if app.user and app.user.image %}
                            <img src=\"{{ path('user_avatar', {id: app.user.id}) }}\"
                                 alt=\"{{ app.user.username }}\"
                                 class=\"rounded-circle\"
                                 style=\"width:40px; height:40px; object-fit:cover;\" />
                        {% else %}
                            <i class=\"fas fa-user-circle fa-2x text-secondary\"></i>
                        {% endif %}
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdownProfile\">
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('app_profile_myprofile') }}\">
                                <i class=\"fas fa-user me-2\"></i> Profil
                            </a>
                        </li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li>
                            <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                                <i class=\"fas fa-sign-out-alt me-2\"></i> Déconnexion
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    {% endblock %}

    <main class=\"main-content\" style=\"padding-top: var(--navbar-height);\">
        <div class=\"container\">
             {% block body %}{% endblock %}
        </div>
    </main>

    {% block footer %}
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <div class=\"col-lg-4 col-md-6\">
                    <h5><i class=\"fas fa-bus me-2\" aria-hidden=\"true\"></i> UrbanLink</h5>
                    <p class=\"mt-3\">Your complete urban mobility solution. We connect people to their destinations safely, efficiently and comfortably.</p>
                    <div class=\"mt-4\">
                        <a href=\"#\" class=\"btn btn-outline-light btn-sm rounded-pill me-2\">
                            <i class=\"fas fa-download me-1\" aria-hidden=\"true\"></i> Download App
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <h5>Quick Links</h5>
                    <ul class=\"footer-links list-unstyled\">
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Home</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Services</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Pricing</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> About</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h5>Services</h5>
                    <ul class=\"footer-links list-unstyled\">
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Urban Transport</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Taxi Services</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Subscriptions</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> School Transport</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-chevron-right\" aria-hidden=\"true\"></i> Vehicle Rentals</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <h5>Contact Us</h5>
                    <ul class=\"footer-links list-unstyled\">
                        <li><i class=\"fas fa-map-marker-alt me-2\" aria-hidden=\"true\"></i> 123 Main Street, City</li>
                        <li><i class=\"fas fa-phone-alt me-2\" aria-hidden=\"true\"></i> +123 456 7890</li>
                        <li><i class=\"fas fa-envelope me-2\" aria-hidden=\"true\"></i> contact@urbanlink.com</li>
                    </ul>
                    <div class=\"social-icons mt-3\">
                        <a href=\"#\" aria-label=\"Facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
                        <a href=\"#\" aria-label=\"Twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
                        <a href=\"#\" aria-label=\"Instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
                        <a href=\"#\" aria-label=\"LinkedIn\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
                        <a href=\"#\" aria-label=\"YouTube\"><i class=\"fab fa-youtube\" aria-hidden=\"true\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"copyright text-center\">
                <p class=\"mb-0\">&copy; {{ \"now\"|date(\"Y\") }} UrbanLink. All rights reserved. | 
                   <a href=\"#\">Privacy Policy</a> | <a href=\"#\">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>
    {% endblock %}

    {% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
        // Script cleanup - removed scroll effect to maintain consistent navbar
    </script>
    {% endblock %}
</body>
</html>", "basef.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\basef.html.twig");
    }
}
