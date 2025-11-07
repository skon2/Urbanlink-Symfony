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

/* dashboard/client.html.twig */
class __TwigTemplate_3dbcd9b9517b2dcbf84a3e54aa49221b extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/client.html.twig"));

        $this->parent = $this->load("basef.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "My Dashboard | RideShare";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #f0f4ff;
            --secondary: #3a0ca3;
            --accent: #f72585;
            --light: #ffffff;
            --dark: #212529;
            --success: #4cc9f0;
            --warning: #f8961e;
            --danger: #ef233c;
            --card-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
            --card-radius: 16px;
            --sidebar-width: 280px;
            --neutral-100: #f9fafb;
            --neutral-200: #f3f4f6;
            --neutral-300: #e5e7eb;
            --neutral-400: #d1d5db;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --text-tertiary: #9ca3af;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--neutral-100);
            color: var(--text-primary);
            overflow-x: hidden;
        }
        
        .dashboard-header {
            background: var(--light);
            color: var(--text-primary);
            border-radius: 0 0 24px 24px;
            box-shadow: var(--card-shadow);
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid var(--neutral-200);
        }
        
        .dashboard-header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, var(--primary-light) 0%, rgba(255,255,255,0) 70%);
            opacity: 0.8;
        }
        
        .transport-card {
            background: var(--light);
            border-radius: var(--card-radius);
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            border: 1px solid var(--neutral-200);
            overflow: hidden;
            position: relative;
        }
        
        .transport-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }
        
        .transport-card.gradient-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary);
        }
        
        .card-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--primary);
            background: var(--primary-light);
            transition: all 0.3s ease;
        }
        
        .transport-card:hover .card-icon {
            transform: scale(1.05);
        }
        
        .action-btn {
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
            background: var(--primary-light);
            color: var(--primary);
            border: 1px solid rgba(67, 97, 238, 0.15);
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.06);
            background: rgba(67, 97, 238, 0.1);
        }
        
        .action-btn i {
            margin-right: 8px;
            transition: transform 0.3s ease;
        }
        
        .action-btn:hover i {
            transform: scale(1.1);
        }
        
        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }
        
        .user-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .user-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0,0,0,0.12);
        }
        
        .progress-container {
            height: 6px;
            border-radius: 3px;
            background-color: var(--neutral-200);
            overflow: hidden;
        }
        
        .progress-bar {
            background: var(--primary);
            border-radius: 3px;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                90deg,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.4) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .rating-stars {
            color: #f59e0b;
        }
        
        .rating-stars .empty {
            color: var(--neutral-300);
        }
        
        .nav-pill {
            display: flex;
            align-items: center;
            padding: 10px 16px;
            border-radius: 12px;
            transition: all 0.2s ease;
        }
        
        .nav-pill:hover {
            background-color: var(--primary-light);
        }
        
        .nav-pill.active {
            background-color: var(--primary-light);
            color: var(--primary);
            font-weight: 600;
        }
        
        .notification-badge {
            position: absolute;
            top: -4px;
            right: -4px;
            width: 18px;
            height: 18px;
            background-color: var(--accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: bold;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .time-pill {
            background: var(--primary-light);
            color: var(--primary);
            border-radius: 50px;
            padding: 4px 12px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .trip-dot {
            position: relative;
            padding-left: 20px;
        }
        
        .trip-dot::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: var(--primary);
        }
        
        .trip-dot.end::before {
            background-color: var(--accent);
        }
        
        .trip-line {
            position: relative;
            padding-left: 20px;
            margin-left: 5px;
        }
        
        .trip-line::before {
            content: '';
            position: absolute;
            left: 4px;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: var(--neutral-300);
        }
        
        .driver-avatar {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        
        .floating-action-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.25);
            z-index: 50;
            transition: all 0.3s ease;
        }
        
        .floating-action-btn:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 8px 16px rgba(67, 97, 238, 0.3);
        }
        
        .skeleton {
            background-color: var(--neutral-200);
            border-radius: 4px;
            position: relative;
            overflow: hidden;
        }
        
        .skeleton::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                90deg,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.5) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            animation: shimmer 2s infinite;
        }
        
        .weather-card {
            background: var(--light);
            color: var(--text-primary);
            border-radius: var(--card-radius);
            position: relative;
            overflow: hidden;
            border: 1px solid var(--neutral-200);
        }
        
        .weather-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.03) 0%, rgba(247, 37, 133, 0.03) 100%);
        }
        
        .activity-item {
            transition: all 0.2s ease;
            border-left: 2px solid transparent;
            padding-left: 10px;
            margin-left: -12px;
        }
        
        .activity-item:hover {
            border-left: 2px solid var(--primary);
            background-color: var(--primary-light);
            border-radius: 0 8px 8px 0;
        }
        
        .activity-icon {
            transition: all 0.2s ease;
        }
        
        .activity-item:hover .activity-icon {
            background: var(--primary);
            color: white;
        }
        
        /* Light dashboard panels */
        .dashboard-panel {
            background: var(--light);
            border-radius: var(--card-radius);
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            border: 1px solid var(--neutral-200);
        }
        
        .dashboard-panel-header {
            border-bottom: 1px solid var(--neutral-200);
            padding: 16px 20px;
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-3px);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .dashboard-header {
                border-radius: 0 0 16px 16px;
            }
            
            .action-btn {
                padding: 10px 16px;
                font-size: 14px;
            }
            
            .user-avatar {
                width: 40px;
                height: 40px;
            }
        }
        .driver-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
    }
    
    .progress-container {
        height: 6px;
        background-color: #e5e7eb;
        border-radius: 3px;
        overflow: hidden;
    }
    
    .progress-bar {
        height: 100%;
        background-color: #3b82f6;
        border-radius: 3px;
        transition: width 0.5s ease;
    }
    
    .trip-dot {
        position: relative;
        padding-left: 18px;
    }
    
    .trip-dot:before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        width: 10px;
        height: 10px;
        background-color: #3b82f6;
        border-radius: 50%;
        transform: translateY(-50%);
    }
    
    .trip-dot.end:before {
        background-color: #10b981;
    }
    
    .trip-line {
        position: relative;
        margin-top: 16px;
    }
    
    .status-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 16px;
        font-size: 14px;
    }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 480
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

        // line 481
        yield "    <div class=\"min-h-screen\">
        <!-- Header -->
        <header class=\"dashboard-header px-6 pt-8 pb-6 animate__animated animate__fadeIn\">
            <div class=\"flex justify-between items-start mb-8 relative\">
                <div>
                    <h1 class=\"text-2xl font-bold\">Welcome back, ";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 486, $this->source); })()), "user", [], "any", false, false, false, 486), "name", [], "any", false, false, false, 486), "html", null, true);
        yield "</h1>
                    <p class=\"text-gray-500 mt-1\">Ready for your next ride?</p>
                </div>
                <div class=\"flex items-center space-x-4\">
                    <div class=\"relative\">
                        <button class=\"p-2 rounded-full bg-white hover:bg-gray-50 transition border border-gray-100\">
                            <i class=\"fas fa-bell text-gray-600\"></i>
                            <span class=\"notification-badge\">3</span>
                        </button>
                    </div>
                    <div class=\"flex items-center\">
                        ";
        // line 497
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 497, $this->source); })()), "user", [], "any", false, false, false, 497), "image", [], "any", false, false, false, 497)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 498
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_avatar", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 498, $this->source); })()), "user", [], "any", false, false, false, 498), "id", [], "any", false, false, false, 498)]), "html", null, true);
            yield "\" alt=\"User\" class=\"user-avatar\">
                        ";
        } else {
            // line 500
            yield "                            <img src=\"https://ui-avatars.com/api/?name=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 500, $this->source); })()), "user", [], "any", false, false, false, 500), "name", [], "any", false, false, false, 500)), "html", null, true);
            yield "&background=random\" alt=\"User\" class=\"user-avatar\">
                        ";
        }
        // line 502
        yield "                    </div>
                </div>
            </div>
            
            <!-- Quick Stats -->
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4 animate__animated animate__fadeInUp animate__delay-1s\">
                <!-- Completed Rides -->
                <div class=\"transport-card p-4 gradient-border\">
                    <div class=\"flex justify-between items-center\">
                        <div>
                            <p class=\"text-sm text-gray-500\">Completed Rides</p>
                            <h3 class=\"text-2xl font-bold\">
                                ";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 514, $this->source); })()), "user", [], "any", false, false, false, 514), "reservations", [], "any", false, false, false, 514), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 514, $this->source); })()), "status", [], "any", false, false, false, 514) == "Confirmed") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 514, $this->source); })()), "isCancelled", [], "any", false, false, false, 514)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 514, $this->source); })()), "trajet", [], "any", false, false, false, 514)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 514, $this->source); })()), "trajet", [], "any", false, false, false, 514), "arrivalTime", [], "any", false, false, false, 514) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())); })), "html", null, true);
        yield "
                            </h3>
                            ";
        // line 516
        $context["lastMonthCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 516, $this->source); })()), "user", [], "any", false, false, false, 516), "reservations", [], "any", false, false, false, 516), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 516, $this->source); })()), "status", [], "any", false, false, false, 516) == "Confirmed") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 516, $this->source); })()), "isCancelled", [], "any", false, false, false, 516)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 516, $this->source); })()), "trajet", [], "any", false, false, false, 516)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 516, $this->source); })()), "trajet", [], "any", false, false, false, 516), "arrivalTime", [], "any", false, false, false, 516) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 516, $this->source); })()), "trajet", [], "any", false, false, false, 516), "arrivalTime", [], "any", false, false, false, 516) > $this->extensions['Twig\Extension\CoreExtension']->convertDate("-1 month"))); }));
        // line 517
        yield "                            ";
        $context["prevMonthCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 517, $this->source); })()), "user", [], "any", false, false, false, 517), "reservations", [], "any", false, false, false, 517), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 517, $this->source); })()), "status", [], "any", false, false, false, 517) == "Confirmed") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 517, $this->source); })()), "isCancelled", [], "any", false, false, false, 517)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 517, $this->source); })()), "trajet", [], "any", false, false, false, 517)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 517, $this->source); })()), "trajet", [], "any", false, false, false, 517), "arrivalTime", [], "any", false, false, false, 517) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("-1 month"))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 517, $this->source); })()), "trajet", [], "any", false, false, false, 517), "arrivalTime", [], "any", false, false, false, 517) > $this->extensions['Twig\Extension\CoreExtension']->convertDate("-2 months"))); }));
        // line 518
        yield "                            ";
        $context["growth"] = (((((isset($context["lastMonthCount"]) || array_key_exists("lastMonthCount", $context) ? $context["lastMonthCount"] : (function () { throw new RuntimeError('Variable "lastMonthCount" does not exist.', 518, $this->source); })()) > 0) && ((isset($context["prevMonthCount"]) || array_key_exists("prevMonthCount", $context) ? $context["prevMonthCount"] : (function () { throw new RuntimeError('Variable "prevMonthCount" does not exist.', 518, $this->source); })()) > 0))) ? (Twig\Extension\CoreExtension::round(((((isset($context["lastMonthCount"]) || array_key_exists("lastMonthCount", $context) ? $context["lastMonthCount"] : (function () { throw new RuntimeError('Variable "lastMonthCount" does not exist.', 518, $this->source); })()) - (isset($context["prevMonthCount"]) || array_key_exists("prevMonthCount", $context) ? $context["prevMonthCount"] : (function () { throw new RuntimeError('Variable "prevMonthCount" does not exist.', 518, $this->source); })())) / (isset($context["prevMonthCount"]) || array_key_exists("prevMonthCount", $context) ? $context["prevMonthCount"] : (function () { throw new RuntimeError('Variable "prevMonthCount" does not exist.', 518, $this->source); })())) * 100))) : (0));
        // line 519
        yield "                            <p class=\"text-xs ";
        yield ((((isset($context["growth"]) || array_key_exists("growth", $context) ? $context["growth"] : (function () { throw new RuntimeError('Variable "growth" does not exist.', 519, $this->source); })()) >= 0)) ? ("text-green-500") : ("text-red-500"));
        yield " mt-1\">
                                <i class=\"fas ";
        // line 520
        yield ((((isset($context["growth"]) || array_key_exists("growth", $context) ? $context["growth"] : (function () { throw new RuntimeError('Variable "growth" does not exist.', 520, $this->source); })()) >= 0)) ? ("fa-arrow-up") : ("fa-arrow-down"));
        yield " mr-1\"></i> 
                                ";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(abs((isset($context["growth"]) || array_key_exists("growth", $context) ? $context["growth"] : (function () { throw new RuntimeError('Variable "growth" does not exist.', 521, $this->source); })())), "html", null, true);
        yield "% from last month
                            </p>
                        </div>
                        <div class=\"card-icon\">
                            <i class=\"fas fa-car\"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Money Saved -->
                <div class=\"transport-card p-4 gradient-border\">
                    <div class=\"flex justify-between items-center\">
                        <div>
                            <p class=\"text-sm text-gray-500\">Money Saved</p>
                            ";
        // line 535
        $context["totalSaved"] = 0;
        // line 536
        yield "                            ";
        $context["weeklySaved"] = 0;
        // line 537
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 537, $this->source); })()), "user", [], "any", false, false, false, 537), "reservations", [], "any", false, false, false, 537), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 537, $this->source); })()), "status", [], "any", false, false, false, 537) == "Confirmed") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 537, $this->source); })()), "isCancelled", [], "any", false, false, false, 537)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 537, $this->source); })()), "trajet", [], "any", false, false, false, 537)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 538
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 538), "typeTransport", [], "any", false, false, false, 538) == "Carpooling")) {
                // line 539
                yield "                                    ";
                $context["estimatedIndividualCost"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 539), "price", [], "any", false, false, false, 539) * 0.7);
                yield " ";
                // line 540
                yield "                                    ";
                $context["saved"] = ((isset($context["estimatedIndividualCost"]) || array_key_exists("estimatedIndividualCost", $context) ? $context["estimatedIndividualCost"] : (function () { throw new RuntimeError('Variable "estimatedIndividualCost" does not exist.', 540, $this->source); })()) - (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "totalPrice", [], "any", false, false, false, 540) / CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "numberOfSeats", [], "any", false, false, false, 540)));
                // line 541
                yield "                                    ";
                $context["totalSaved"] = ((isset($context["totalSaved"]) || array_key_exists("totalSaved", $context) ? $context["totalSaved"] : (function () { throw new RuntimeError('Variable "totalSaved" does not exist.', 541, $this->source); })()) + (isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 541, $this->source); })()));
                // line 542
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 542), "departureTime", [], "any", false, false, false, 542) > $this->extensions['Twig\Extension\CoreExtension']->convertDate("-1 week"))) {
                    // line 543
                    yield "                                        ";
                    $context["weeklySaved"] = ((isset($context["weeklySaved"]) || array_key_exists("weeklySaved", $context) ? $context["weeklySaved"] : (function () { throw new RuntimeError('Variable "weeklySaved" does not exist.', 543, $this->source); })()) + (isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 543, $this->source); })()));
                    // line 544
                    yield "                                    ";
                }
                // line 545
                yield "                                ";
            }
            // line 546
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 547
        yield "                            <h3 class=\"text-2xl font-bold\">\$";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalSaved"]) || array_key_exists("totalSaved", $context) ? $context["totalSaved"] : (function () { throw new RuntimeError('Variable "totalSaved" does not exist.', 547, $this->source); })()), 2), "html", null, true);
        yield "</h3>
                            <p class=\"text-xs text-green-500 mt-1\">
                                <i class=\"fas fa-piggy-bank mr-1\"></i> 
                                \$";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["weeklySaved"]) || array_key_exists("weeklySaved", $context) ? $context["weeklySaved"] : (function () { throw new RuntimeError('Variable "weeklySaved" does not exist.', 550, $this->source); })()), 2), "html", null, true);
        yield " this week
                            </p>
                        </div>
                        <div class=\"card-icon\">
                            <i class=\"fas fa-piggy-bank\"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Carbon Saved -->
                <div class=\"transport-card p-4 gradient-border\">
                    <div class=\"flex justify-between items-center\">
                        <div>
                            <p class=\"text-sm text-gray-500\">Carbon Saved</p>
                            ";
        // line 564
        $context["carbonTotal"] = 0;
        // line 565
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 565, $this->source); })()), "user", [], "any", false, false, false, 565), "reservations", [], "any", false, false, false, 565), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 565, $this->source); })()), "status", [], "any", false, false, false, 565) == "Confirmed") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 565, $this->source); })()), "isCancelled", [], "any", false, false, false, 565)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 565, $this->source); })()), "trajet", [], "any", false, false, false, 565)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 566
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 566), "typeTransport", [], "any", false, false, false, 566) == "Carpooling")) {
                // line 567
                yield "                                    ";
                // line 568
                yield "                                    ";
                $context["carbonTotal"] = ((isset($context["carbonTotal"]) || array_key_exists("carbonTotal", $context) ? $context["carbonTotal"] : (function () { throw new RuntimeError('Variable "carbonTotal" does not exist.', 568, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 568), "distance", [], "any", false, false, false, 568) * 0.2));
                // line 569
                yield "                                ";
            }
            // line 570
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 571
        yield "                            <h3 class=\"text-2xl font-bold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["carbonTotal"]) || array_key_exists("carbonTotal", $context) ? $context["carbonTotal"] : (function () { throw new RuntimeError('Variable "carbonTotal" does not exist.', 571, $this->source); })())), "html", null, true);
        yield "kg</h3>
                            <p class=\"text-xs text-green-500 mt-1\">
                                <i class=\"fas fa-leaf mr-1\"></i> 
                                Equivalent to ";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((isset($context["carbonTotal"]) || array_key_exists("carbonTotal", $context) ? $context["carbonTotal"] : (function () { throw new RuntimeError('Variable "carbonTotal" does not exist.', 574, $this->source); })()) / 14)), "html", null, true);
        yield " trees
                            </p>
                        </div>
                        <div class=\"card-icon\">
                            <i class=\"fas fa-leaf\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Main Content -->
        <div class=\"p-6\">
            ";
        // line 587
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 588
            yield "                <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
                    <!-- Left Column -->
                    <div class=\"lg:col-span-2 space-y-6\">
                        <!-- Quick Actions -->
                        <div class=\"transport-card p-6 animate__animated animate__fadeInLeft\">
                            <h2 class=\"text-xl font-bold mb-6\">Get Around</h2>
                            <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4\">
                                <a href=\"";
            // line 595
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
            yield "\" class=\"action-btn\">
                                    <i class=\"fas fa-car\"></i> Book Ride
                                </a>
                                <a href=\"";
            // line 598
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_index");
            yield "\" class=\"action-btn\">
                                    <i class=\"fas fa-bus\"></i> Subscription
                                </a>
                                <a href=\"";
            // line 601
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_list");
            yield "\" class=\"action-btn\">
                                    <i class=\"fas fa-bicycle\"></i> My Reservation
                                </a>
                                <a href=\"";
            // line 604
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_mes_reservations");
            yield "\" class=\"action-btn\">
                                    <i class=\"fas fa-train\"></i> My subscription
                                </a>
                            </div>
                        </div>
                        
                        <!-- Active Trip -->
                        ";
            // line 612
            yield "
                        ";
            // line 614
            yield "                        ";
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i:s");
            // line 615
            yield "                        ";
            $context["currentTrip"] = null;
            // line 616
            yield "
                        ";
            // line 618
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 618, $this->source); })()), "user", [], "any", false, false, false, 618)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 619
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 619, $this->source); })()), "user", [], "any", false, false, false, 619), "reservations", [], "any", false, false, false, 619));
                foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                    // line 620
                    yield "                                ";
                    if ((((null === (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 620, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 620) == "Confirmed")) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isCancelled", [], "any", false, false, false, 620))) {
                        // line 621
                        yield "                                    ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 621) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 621), "departureTime", [], "any", false, false, false, 621), "Y-m-d H:i:s") <= (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 621, $this->source); })()))) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 621), "arrivalTime", [], "any", false, false, false, 621), "Y-m-d H:i:s") >= (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 621, $this->source); })())))) {
                            // line 622
                            yield "                                        ";
                            $context["currentTrip"] = $context["reservation"];
                            // line 623
                            yield "                                    ";
                        }
                        // line 624
                        yield "                                ";
                    }
                    // line 625
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 626
                yield "                        ";
            }
            // line 627
            yield "
                        <div class=\"transport-card p-6 animate__animated animate__fadeInLeft animate__delay-1s\">
                            <!-- Current Trip Section -->
                        ";
            // line 630
            if ((($tmp = (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 630, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 631
                yield "                            ";
                // line 632
                yield "                            ";
                $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U");
                // line 633
                yield "                            ";
                $context["departure_time"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 633, $this->source); })()), "trajet", [], "any", false, false, false, 633), "departureTime", [], "any", false, false, false, 633), "U");
                // line 634
                yield "                            ";
                $context["arrival_time"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 634, $this->source); })()), "trajet", [], "any", false, false, false, 634), "arrivalTime", [], "any", false, false, false, 634), "U");
                // line 635
                yield "                            ";
                $context["total_duration"] = ((isset($context["arrival_time"]) || array_key_exists("arrival_time", $context) ? $context["arrival_time"] : (function () { throw new RuntimeError('Variable "arrival_time" does not exist.', 635, $this->source); })()) - (isset($context["departure_time"]) || array_key_exists("departure_time", $context) ? $context["departure_time"] : (function () { throw new RuntimeError('Variable "departure_time" does not exist.', 635, $this->source); })()));
                // line 636
                yield "                            ";
                $context["elapsed"] = ((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 636, $this->source); })()) - (isset($context["departure_time"]) || array_key_exists("departure_time", $context) ? $context["departure_time"] : (function () { throw new RuntimeError('Variable "departure_time" does not exist.', 636, $this->source); })()));
                // line 637
                yield "                            ";
                $context["remaining"] = ((isset($context["arrival_time"]) || array_key_exists("arrival_time", $context) ? $context["arrival_time"] : (function () { throw new RuntimeError('Variable "arrival_time" does not exist.', 637, $this->source); })()) - (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 637, $this->source); })()));
                // line 638
                yield "                            
                            ";
                // line 640
                yield "                            ";
                if (((isset($context["total_duration"]) || array_key_exists("total_duration", $context) ? $context["total_duration"] : (function () { throw new RuntimeError('Variable "total_duration" does not exist.', 640, $this->source); })()) > 0)) {
                    // line 641
                    yield "                                ";
                    if (((isset($context["elapsed"]) || array_key_exists("elapsed", $context) ? $context["elapsed"] : (function () { throw new RuntimeError('Variable "elapsed" does not exist.', 641, $this->source); })()) < 0)) {
                        // line 642
                        yield "                                    ";
                        // line 643
                        yield "                                    ";
                        $context["percentage_remaining"] = 100;
                        // line 644
                        yield "                                    ";
                        $context["status_text"] = (("Starts in " . Twig\Extension\CoreExtension::round((((isset($context["elapsed"]) || array_key_exists("elapsed", $context) ? $context["elapsed"] : (function () { throw new RuntimeError('Variable "elapsed" does not exist.', 644, $this->source); })()) *  -1) / 60))) . " minutes");
                        // line 645
                        yield "                                ";
                    } elseif (((isset($context["elapsed"]) || array_key_exists("elapsed", $context) ? $context["elapsed"] : (function () { throw new RuntimeError('Variable "elapsed" does not exist.', 645, $this->source); })()) < (isset($context["total_duration"]) || array_key_exists("total_duration", $context) ? $context["total_duration"] : (function () { throw new RuntimeError('Variable "total_duration" does not exist.', 645, $this->source); })()))) {
                        // line 646
                        yield "                                    ";
                        // line 647
                        yield "                                    ";
                        $context["percentage_remaining"] = (100 - Twig\Extension\CoreExtension::round((((isset($context["elapsed"]) || array_key_exists("elapsed", $context) ? $context["elapsed"] : (function () { throw new RuntimeError('Variable "elapsed" does not exist.', 647, $this->source); })()) / (isset($context["total_duration"]) || array_key_exists("total_duration", $context) ? $context["total_duration"] : (function () { throw new RuntimeError('Variable "total_duration" does not exist.', 647, $this->source); })())) * 100)));
                        // line 648
                        yield "                                    ";
                        $context["status_text"] = (Twig\Extension\CoreExtension::round(((isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 648, $this->source); })()) / 60)) . " minutes remaining");
                        // line 649
                        yield "                                ";
                    } else {
                        // line 650
                        yield "                                    ";
                        // line 651
                        yield "                                    ";
                        $context["percentage_remaining"] = 0;
                        // line 652
                        yield "                                    ";
                        $context["status_text"] = "Trip completed";
                        // line 653
                        yield "                                ";
                    }
                    // line 654
                    yield "                            ";
                } else {
                    // line 655
                    yield "                                ";
                    // line 656
                    yield "                                ";
                    $context["percentage_remaining"] = 0;
                    // line 657
                    yield "                                ";
                    $context["status_text"] = "Completed";
                    // line 658
                    yield "                            ";
                }
                // line 659
                yield "                            
                            ";
                // line 661
                yield "                            ";
                $context["percentage_remaining"] = ((((isset($context["percentage_remaining"]) || array_key_exists("percentage_remaining", $context) ? $context["percentage_remaining"] : (function () { throw new RuntimeError('Variable "percentage_remaining" does not exist.', 661, $this->source); })()) > 100)) ? (100) : (((((isset($context["percentage_remaining"]) || array_key_exists("percentage_remaining", $context) ? $context["percentage_remaining"] : (function () { throw new RuntimeError('Variable "percentage_remaining" does not exist.', 661, $this->source); })()) < 0)) ? (0) : ((isset($context["percentage_remaining"]) || array_key_exists("percentage_remaining", $context) ? $context["percentage_remaining"] : (function () { throw new RuntimeError('Variable "percentage_remaining" does not exist.', 661, $this->source); })())))));
                // line 662
                yield "                            
                            ";
                // line 664
                yield "                            ";
                $context["progress_percent"] = (100 - (isset($context["percentage_remaining"]) || array_key_exists("percentage_remaining", $context) ? $context["percentage_remaining"] : (function () { throw new RuntimeError('Variable "percentage_remaining" does not exist.', 664, $this->source); })()));
                // line 665
                yield "
                            <div class=\"flex justify-between items-center mb-6\">
                                <h2 class=\"text-xl font-bold\">Current Trip</h2>
                                <span class=\"status-badge bg-blue-50 text-blue-600\">
                                    <span class=\"w-2 h-2 bg-blue-500 rounded-full mr-2 animate-pulse\"></span>
                                    ";
                // line 670
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage_remaining"]) || array_key_exists("percentage_remaining", $context) ? $context["percentage_remaining"] : (function () { throw new RuntimeError('Variable "percentage_remaining" does not exist.', 670, $this->source); })()), "html", null, true);
                yield "% remaining
                                </span>
                            </div>
                            
                            <div class=\"mb-6 p-4 bg-gray-50 rounded-lg\">
                                <div class=\"flex justify-between mb-2\">
                                    <div class=\"trip-dot\">
                                        <p class=\"text-sm text-gray-500\">From</p>
                                        <p class=\"font-medium\">";
                // line 678
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 678, $this->source); })()), "trajet", [], "any", false, false, false, 678), "departure", [], "any", false, false, false, 678), "html", null, true);
                yield "</p>
                                    </div>
                                    <div class=\"trip-dot end\">
                                        <p class=\"text-sm text-gray-500 text-right\">To</p>
                                        <p class=\"font-medium text-right\">";
                // line 682
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 682, $this->source); })()), "trajet", [], "any", false, false, false, 682), "destination", [], "any", false, false, false, 682), "html", null, true);
                yield "</p>
                                    </div>
                                </div>
                                
                                <div class=\"trip-line\">
                                    <div class=\"progress-container mb-2\">
                                        <div class=\"progress-bar\" style=\"width: ";
                // line 688
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress_percent"]) || array_key_exists("progress_percent", $context) ? $context["progress_percent"] : (function () { throw new RuntimeError('Variable "progress_percent" does not exist.', 688, $this->source); })()), "html", null, true);
                yield "%\"></div>
                                    </div>
                                    <p class=\"text-sm text-gray-500 text-center\">
                                        ";
                // line 691
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 691, $this->source); })()), "html", null, true);
                yield "
                                        ";
                // line 692
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 692, $this->source); })()), "trajet", [], "any", false, false, false, 692), "distance", [], "any", false, false, false, 692) && ((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 692, $this->source); })()) != "Trip completed"))) {
                    // line 693
                    yield "                                            (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 693, $this->source); })()), "trajet", [], "any", false, false, false, 693), "distance", [], "any", false, false, false, 693), "html", null, true);
                    yield "km left)
                                        ";
                }
                // line 695
                yield "                                    </p>
                                </div>
                            </div>

                            ";
                // line 700
                yield "                            <div class=\"flex items-center justify-between pt-4 border-t border-gray-100\">
                                ";
                // line 701
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 701, $this->source); })()), "trajet", [], "any", false, false, false, 701), "vehicle", [], "any", false, false, false, 701) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 701, $this->source); })()), "trajet", [], "any", false, false, false, 701), "vehicle", [], "any", false, false, false, 701), "driver", [], "any", false, false, false, 701))) {
                    // line 702
                    yield "                                    ";
                    $context["driver"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 702, $this->source); })()), "trajet", [], "any", false, false, false, 702), "vehicle", [], "any", false, false, false, 702), "driver", [], "any", false, false, false, 702);
                    // line 703
                    yield "                                    <div class=\"flex items-center\">
                                        ";
                    // line 704
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 704, $this->source); })()), "image", [], "any", false, false, false, 704)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 705
                        yield "                                            <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_avatar", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 705, $this->source); })()), "id", [], "any", false, false, false, 705)]), "html", null, true);
                        yield "\" alt=\"Driver\" class=\"driver-avatar mr-4\">
                                        ";
                    } else {
                        // line 707
                        yield "                                            <div class=\"driver-avatar mr-4 bg-gray-200 flex items-center justify-center\">
                                                <span class=\"text-gray-500\">";
                        // line 708
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 708, $this->source); })()), "name", [], "any", false, false, false, 708))), "html", null, true);
                        yield "</span>
                                            </div>
                                        ";
                    }
                    // line 711
                    yield "                                        <div>
                                            <p class=\"font-medium\">";
                    // line 712
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 712, $this->source); })()), "name", [], "any", false, false, false, 712), "html", null, true);
                    yield "</p>
                                            ";
                    // line 713
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["driver"] ?? null), "rating", [], "any", true, true, false, 713)) {
                        // line 714
                        yield "                                                <div class=\"rating-stars\">
                                                    ";
                        // line 715
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 716
                            yield "                                                        ";
                            if (($context["i"] <= Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 716, $this->source); })()), "rating", [], "any", false, false, false, 716), 0, "floor"))) {
                                // line 717
                                yield "                                                            <i class=\"fas fa-star\"></i>
                                                        ";
                            } elseif ((                            // line 718
$context["i"] <= CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 718, $this->source); })()), "rating", [], "any", false, false, false, 718))) {
                                // line 719
                                yield "                                                            <i class=\"fas fa-star-half-alt\"></i>
                                                        ";
                            } else {
                                // line 721
                                yield "                                                            <i class=\"far fa-star\"></i>
                                                        ";
                            }
                            // line 723
                            yield "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 724
                        yield "                                                    <span class=\"text-gray-500 text-sm ml-1\">
                                                        ";
                        // line 725
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 725, $this->source); })()), "rating", [], "any", false, false, false, 725), 1), "html", null, true);
                        yield "
                                                        ";
                        // line 726
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["driver"] ?? null), "rideCount", [], "any", true, true, false, 726)) {
                            // line 727
                            yield "                                                            (";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["driver"]) || array_key_exists("driver", $context) ? $context["driver"] : (function () { throw new RuntimeError('Variable "driver" does not exist.', 727, $this->source); })()), "rideCount", [], "any", false, false, false, 727), "html", null, true);
                            yield " rides)
                                                        ";
                        }
                        // line 729
                        yield "                                                    </span>
                                                </div>
                                            ";
                    }
                    // line 732
                    yield "                                            
                                            ";
                    // line 734
                    yield "                                            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 734, $this->source); })()), "trajet", [], "any", false, false, false, 734), "vehicle", [], "any", false, false, false, 734)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 735
                        yield "                                                <div class=\"mt-2 text-sm text-gray-600\">
                                                    <div class=\"flex items-center\">
                                                        <i class=\"fas fa-car text-blue-500 mr-2\"></i>
                                                        <span>";
                        // line 738
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 738, $this->source); })()), "trajet", [], "any", false, false, false, 738), "vehicle", [], "any", false, false, false, 738), "brand", [], "any", false, false, false, 738), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 738, $this->source); })()), "trajet", [], "any", false, false, false, 738), "vehicle", [], "any", false, false, false, 738), "model", [], "any", false, false, false, 738), "html", null, true);
                        yield "</span>
                                                    </div>
                                                    <div class=\"flex items-center mt-1\">
                                                        <i class=\"fas fa-palette text-blue-500 mr-2\"></i>
                                                        <span style=\"display:inline-block; width:20px; height:20px; border-radius:50%; background-color: ";
                        // line 742
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 742, $this->source); })()), "trajet", [], "any", false, false, false, 742), "vehicle", [], "any", false, false, false, 742), "color", [], "any", false, false, false, 742), "html", null, true);
                        yield ";\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 742, $this->source); })()), "trajet", [], "any", false, false, false, 742), "vehicle", [], "any", false, false, false, 742), "color", [], "any", false, false, false, 742)), "html", null, true);
                        yield "\"></span>
                                                        <span class=\"mx-2\">•</span>
                                                        <i class=\"fas fa-id-card text-blue-500 mr-1\"></i>
                                                        <span>";
                        // line 745
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 745, $this->source); })()), "trajet", [], "any", false, false, false, 745), "vehicle", [], "any", false, false, false, 745), "licensePlate", [], "any", false, false, false, 745), "html", null, true);
                        yield "</span>
                                                    </div>
                                                </div>
                                            ";
                    }
                    // line 749
                    yield "                                        </div>
                                    </div>
                                ";
                } else {
                    // line 752
                    yield "                                    <div class=\"flex items-center\">
                                        <div class=\"driver-avatar mr-4 bg-gray-200 flex items-center justify-center\">
                                            <span class=\"text-gray-500\">?</span>
                                        </div>
                                        <div>
                                            <p class=\"font-medium\">Driver information unavailable</p>
                                            ";
                    // line 758
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 758, $this->source); })()), "trajet", [], "any", false, false, false, 758), "vehicle", [], "any", false, false, false, 758)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 759
                        yield "                                                <div class=\"mt-2 text-sm text-gray-600\">
                                                    <div class=\"flex items-center\">
                                                        <i class=\"fas fa-car text-blue-500 mr-2\"></i>
                                                        <span>";
                        // line 762
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 762, $this->source); })()), "trajet", [], "any", false, false, false, 762), "vehicle", [], "any", false, false, false, 762), "brand", [], "any", false, false, false, 762), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 762, $this->source); })()), "trajet", [], "any", false, false, false, 762), "vehicle", [], "any", false, false, false, 762), "model", [], "any", false, false, false, 762), "html", null, true);
                        yield "</span>
                                                    </div>
                                                    <div class=\"flex items-center mt-1\">
                                                        <i class=\"fas fa-palette text-blue-500 mr-2\"></i>
                                                        <span style=\"display:inline-block; width:20px; height:20px; border-radius:50%; background-color: ";
                        // line 766
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 766, $this->source); })()), "trajet", [], "any", false, false, false, 766), "vehicle", [], "any", false, false, false, 766), "color", [], "any", false, false, false, 766), "html", null, true);
                        yield ";\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 766, $this->source); })()), "trajet", [], "any", false, false, false, 766), "vehicle", [], "any", false, false, false, 766), "color", [], "any", false, false, false, 766)), "html", null, true);
                        yield "\"></span>
                                                        <span class=\"mx-2\">•</span>
                                                        <i class=\"fas fa-id-card text-blue-500 mr-1\"></i>
                                                        <span>";
                        // line 769
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentTrip"]) || array_key_exists("currentTrip", $context) ? $context["currentTrip"] : (function () { throw new RuntimeError('Variable "currentTrip" does not exist.', 769, $this->source); })()), "trajet", [], "any", false, false, false, 769), "vehicle", [], "any", false, false, false, 769), "licensePlate", [], "any", false, false, false, 769), "html", null, true);
                        yield "</span>
                                                    </div>
                                                </div>
                                            ";
                    }
                    // line 773
                    yield "                                        </div>
                                    </div>
                                ";
                }
                // line 776
                yield "                                <div class=\"flex space-x-2\">
                                    <button class=\"p-3 bg-gray-50 text-blue-600 rounded-full hover:bg-blue-50 transition\">
                                        <i class=\"fas fa-phone-alt\"></i>
                                    </button>
                                    <button class=\"p-3 bg-gray-50 text-blue-600 rounded-full hover:bg-blue-50 transition\">
                                        <i class=\"fas fa-comment\"></i>
                                    </button>
                                    <a href=\"";
                // line 783
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mapcontroller");
                yield "\" class=\"p-3 bg-gray-50 text-blue-600 rounded-full hover:bg-blue-50 transition\">
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                    </a>
                                </div>
                            </div>
                        ";
            } else {
                // line 789
                yield "                            <div class=\"text-center py-8\">
                                <div class=\"mb-4\">
                                    <svg class=\"w-16 h-16 mx-auto text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\" />
                                    </svg>
                                </div>
                                <h2 class=\"text-xl font-bold mb-2\">No Current Rides</h2>
                                <p class=\"text-gray-500\">You don't have any active trips at the moment.</p>
                                <a href=\"";
                // line 797
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
                yield "\" class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition inline-block\">
                                    Book a New Trip
                                </a>
                            </div>
                        ";
            }
            // line 802
            yield "                        </div>

                        <!-- Upcoming Trips -->
                        <div class=\"transport-card p-6\">
                            <div class=\"flex justify-between items-center mb-6\">
                                <h2 class=\"text-xl font-bold\">Upcoming Trips</h2>
                                <a href=\"#\" class=\"text-sm text-blue-600 hover:text-blue-800\">View All</a>
                            </div>
                            
                            <div class=\"space-y-4\">
                                <div class=\"flex items-center justify-between p-4 bg-gray-50 rounded-lg hover-lift\">
                                    <div class=\"flex items-center\">
                                        <div class=\"mr-4 p-3 bg-blue-50 rounded-lg\">
                                            <i class=\"fas fa-car text-blue-600\"></i>
                                        </div>
                                        <div>
                                            <p class=\"font-medium\">Airport Transfer</p>
                                            <p class=\"text-sm text-gray-500\">Tomorrow, 6:30 AM</p>
                                        </div>
                                    </div>
                                    <span class=\"time-pill\">Confirmed</span>
                                </div>
                                
                                <div class=\"flex items-center justify-between p-4 bg-gray-50 rounded-lg hover-lift\">
                                    <div class=\"flex items-center\">
                                        <div class=\"mr-4 p-3 bg-purple-50 rounded-lg\">
                                            <i class=\"fas fa-users text-purple-600\"></i>
                                        </div>
                                        <div>
                                            <p class=\"font-medium\">Office Carpool</p>
                                            <p class=\"text-sm text-gray-500\">Mon, 8:00 AM</p>
                                        </div>
                                    </div>
                                    <span class=\"time-pill bg-yellow-50 text-yellow-600\">Pending</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class=\"space-y-6\">
                        <!-- User Profile -->
                        <div class=\"transport-card p-6 animate__animated animate__fadeInRight\">
                            <div class=\"flex items-center justify-between mb-6\">
                                <h2 class=\"text-xl font-bold\">Your Profile</h2>
                                <a href=\"";
            // line 847
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_myprofile");
            yield "\" class=\"text-sm text-blue-600 hover:text-blue-800 flex items-center\">
                                    Edit <i class=\"fas fa-edit ml-1\"></i>
                                </a>
                            </div>
                            
                            <div class=\"flex items-center mb-6\">
                                ";
            // line 853
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 853, $this->source); })()), "user", [], "any", false, false, false, 853), "image", [], "any", false, false, false, 853)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " 
                                    <img src=\"";
                // line 854
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_avatar", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 854, $this->source); })()), "user", [], "any", false, false, false, 854), "id", [], "any", false, false, false, 854)]), "html", null, true);
                yield "\" alt=\"User\" class=\"user-avatar\">
                                ";
            } else {
                // line 856
                yield "                                    <img src=\"https://ui-avatars.com/api/?name=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 856, $this->source); })()), "user", [], "any", false, false, false, 856), "name", [], "any", false, false, false, 856)), "html", null, true);
                yield "&background=random\" alt=\"User\" class=\"user-avatar\">
                                ";
            }
            // line 858
            yield "                                <div>
                                    <h3 class=\"font-bold\">";
            // line 859
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 859, $this->source); })()), "user", [], "any", false, false, false, 859), "name", [], "any", false, false, false, 859), "html", null, true);
            yield "</h3>
                                    <p class=\"text-sm text-gray-500\">";
            // line 860
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 860, $this->source); })()), "email", [], "any", false, false, false, 860), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            
                            <div class=\"space-y-3\">
                                <div class=\"flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition\">
                                    <div class=\"mr-3 p-2 bg-blue-50 rounded-lg\">
                                        <i class=\"fas fa-phone text-blue-600\"></i>
                                    </div>
                                    <div>
                                        <p class=\"text-sm text-gray-500\">Phone</p>
                                        <p class=\"font-medium\">";
            // line 871
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 871, $this->source); })()), "phone", [], "any", false, false, false, 871), "html", null, true);
            yield "</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition\">
                                    <div class=\"mr-3 p-2 bg-purple-50 rounded-lg\">
                                        <i class=\"fas fa-id-card text-purple-600\"></i>
                                    </div>
                                    <div>
                                        <p class=\"text-sm text-gray-500\">Member Since</p>
                                        <p class=\"font-medium\">January 2023</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition\">
                                    <div class=\"mr-3 p-2 bg-amber-50 rounded-lg\">
                                        <i class=\"fas fa-star text-amber-500\"></i>
                                    </div>
                                    <div>
                                        <p class=\"text-sm text-gray-500\">Your Rating</p>
                                        <div class=\"flex items-center\">
                                            <div class=\"rating-stars mr-2\">
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star-half-alt empty\"></i>
                                            </div>
                                            <span class=\"text-sm\">4.5</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition\">
                                    <div class=\"mr-3 p-2 bg-red-50 rounded-lg\">
                                        <i class=\"fas fa-credit-card text-red-500\"></i>
                                    </div>
                                    <div>
                                        <p class=\"text-sm text-gray-500\">Payment Method</p>
                                        <p class=\"font-medium\">•••• •••• •••• 4242</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Weather & Traffic -->
                        <div 
                        class=\"weather-card p-6 cursor-pointer\" 
                        onclick=\"window.location.href='";
            // line 919
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wathercontroller");
            yield "'\"
                    >
                        <div class=\"flex justify-between items-center mb-4 relative\">
                            <div>
                                <h2 class=\"text-xl font-bold\">Current Weather</h2>
                                <p class=\"text-sm text-gray-500\">Sunny, 24°C</p>
                            </div>
                            <i class=\"fas fa-sun text-4xl text-amber-500\"></i>
                        </div>
                        <div class=\"flex justify-between text-sm relative\">
                            <div>
                                <p class=\"text-gray-500\">Humidity</p>
                                <p class=\"font-medium\">42%</p>
                            </div>
                            <div>
                                <p class=\"text-gray-500\">Wind</p>
                                <p class=\"font-medium\">12 km/h</p>
                            </div>
                            <div>
                                <p class=\"text-gray-500\">Traffic</p>
                                <p class=\"font-medium\">Moderate</p>
                            </div>
                        </div>
                    </div>
                        
                        <!-- Recent Activity -->
                        <div class=\"transport-card p-6\">
                            <h2 class=\"text-xl font-bold mb-6\">Recent Activity</h2>
                            <div class=\"space-y-4\">
                                <div class=\"flex items-start activity-item p-2\">
                                    <div class=\"mr-3 mt-1\">
                                        <div class=\"w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center activity-icon\">
                                            <i class=\"fas fa-car\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class=\"font-medium\">Ride completed</p>
                                        <p class=\"text-sm text-gray-500\">Downtown to Tech Park</p>
                                        <p class=\"text-xs text-gray-400 mt-1\">Today, 8:30 AM • \$12.50</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-start activity-item p-2\">
                                    <div class=\"mr-3 mt-1\">
                                        <div class=\"w-10 h-10 rounded-full bg-green-50 text-green-600 flex items-center justify-center activity-icon\">
                                            <i class=\"fas fa-users\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class=\"font-medium\">Carpool joined</p>
                                        <p class=\"text-sm text-gray-500\">North Station to Mall</p>
                                        <p class=\"text-xs text-gray-400 mt-1\">Yesterday, 5:15 PM • \$8.20</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-start activity-item p-2\">
                                    <div class=\"mr-3 mt-1\">
                                        <div class=\"w-10 h-10 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center activity-icon\">
                                            <i class=\"fas fa-subscription\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class=\"font-medium\">Subscription renewed</p>
                                        <p class=\"text-sm text-gray-500\">Monthly Premium Plan</p>
                                        <p class=\"text-xs text-gray-400 mt-1\">Yesterday, 10:45 AM • \$24.99</p>
                                    </div>
                                </div>
                                
                                <a href=\"#\" class=\"text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center justify-center pt-2\">
                                    View all activity <i class=\"fas fa-chevron-right ml-1\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Action Button -->
                <a href=\"";
            // line 996
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
            yield "\" class=\"floating-action-btn animate__animated animate__bounceIn animate__delay-2s\">
                    <i class=\"fas fa-plus\"></i>
                </a>
            ";
        } else {
            // line 1000
            yield "                <div class=\"transport-card p-6 animate__animated animate__shakeX\">
                    <div class=\"flex items-center p-4 bg-red-50 rounded-lg\">
                        <div class=\"mr-3 p-2 bg-red-100 rounded-full\">
                            <i class=\"fas fa-exclamation-circle text-red-600\"></i>
                        </div>
                        <div>
                            <h3 class=\"font-bold text-red-800\">Access Restricted</h3>
                            <p class=\"text-sm text-red-600\">You don't have client privileges to view this dashboard.</p>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 1012
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1016
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

        // line 1017
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on hover
            const cards = document.querySelectorAll('.transport-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.classList.add('shadow-lg');
                });
                card.addEventListener('mouseleave', function() {
                    this.classList.remove('shadow-lg');
                });
            });
            
            // Notification badge animation
            const notificationBadge = document.querySelector('.notification-badge');
            if (notificationBadge) {
                setInterval(() => {
                    notificationBadge.classList.toggle('animate-pulse');
                }, 2000);
            }
            
            // Add click handlers for activity items
            const activityItems = document.querySelectorAll('.activity-item');
            activityItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Add your click handler logic here
                    console.log('Activity item clicked');
                });
            });
        });
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
        return "dashboard/client.html.twig";
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
        return array (  1511 => 1017,  1498 => 1016,  1485 => 1012,  1471 => 1000,  1464 => 996,  1384 => 919,  1333 => 871,  1319 => 860,  1315 => 859,  1312 => 858,  1306 => 856,  1301 => 854,  1297 => 853,  1288 => 847,  1241 => 802,  1233 => 797,  1223 => 789,  1214 => 783,  1205 => 776,  1200 => 773,  1193 => 769,  1185 => 766,  1176 => 762,  1171 => 759,  1169 => 758,  1161 => 752,  1156 => 749,  1149 => 745,  1141 => 742,  1132 => 738,  1127 => 735,  1124 => 734,  1121 => 732,  1116 => 729,  1110 => 727,  1108 => 726,  1104 => 725,  1101 => 724,  1095 => 723,  1091 => 721,  1087 => 719,  1085 => 718,  1082 => 717,  1079 => 716,  1075 => 715,  1072 => 714,  1070 => 713,  1066 => 712,  1063 => 711,  1057 => 708,  1054 => 707,  1048 => 705,  1046 => 704,  1043 => 703,  1040 => 702,  1038 => 701,  1035 => 700,  1029 => 695,  1023 => 693,  1021 => 692,  1017 => 691,  1011 => 688,  1002 => 682,  995 => 678,  984 => 670,  977 => 665,  974 => 664,  971 => 662,  968 => 661,  965 => 659,  962 => 658,  959 => 657,  956 => 656,  954 => 655,  951 => 654,  948 => 653,  945 => 652,  942 => 651,  940 => 650,  937 => 649,  934 => 648,  931 => 647,  929 => 646,  926 => 645,  923 => 644,  920 => 643,  918 => 642,  915 => 641,  912 => 640,  909 => 638,  906 => 637,  903 => 636,  900 => 635,  897 => 634,  894 => 633,  891 => 632,  889 => 631,  887 => 630,  882 => 627,  879 => 626,  873 => 625,  870 => 624,  867 => 623,  864 => 622,  861 => 621,  858 => 620,  853 => 619,  850 => 618,  847 => 616,  844 => 615,  841 => 614,  838 => 612,  828 => 604,  822 => 601,  816 => 598,  810 => 595,  801 => 588,  799 => 587,  783 => 574,  776 => 571,  770 => 570,  767 => 569,  764 => 568,  762 => 567,  759 => 566,  754 => 565,  752 => 564,  735 => 550,  728 => 547,  722 => 546,  719 => 545,  716 => 544,  713 => 543,  710 => 542,  707 => 541,  704 => 540,  700 => 539,  697 => 538,  692 => 537,  689 => 536,  687 => 535,  670 => 521,  666 => 520,  661 => 519,  658 => 518,  655 => 517,  653 => 516,  648 => 514,  634 => 502,  628 => 500,  622 => 498,  620 => 497,  606 => 486,  599 => 481,  586 => 480,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/dashboard/client.html.twig #}
{% extends 'basef.html.twig' %}

{% block title %}My Dashboard | RideShare{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"/>
    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #f0f4ff;
            --secondary: #3a0ca3;
            --accent: #f72585;
            --light: #ffffff;
            --dark: #212529;
            --success: #4cc9f0;
            --warning: #f8961e;
            --danger: #ef233c;
            --card-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
            --card-radius: 16px;
            --sidebar-width: 280px;
            --neutral-100: #f9fafb;
            --neutral-200: #f3f4f6;
            --neutral-300: #e5e7eb;
            --neutral-400: #d1d5db;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --text-tertiary: #9ca3af;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--neutral-100);
            color: var(--text-primary);
            overflow-x: hidden;
        }
        
        .dashboard-header {
            background: var(--light);
            color: var(--text-primary);
            border-radius: 0 0 24px 24px;
            box-shadow: var(--card-shadow);
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid var(--neutral-200);
        }
        
        .dashboard-header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, var(--primary-light) 0%, rgba(255,255,255,0) 70%);
            opacity: 0.8;
        }
        
        .transport-card {
            background: var(--light);
            border-radius: var(--card-radius);
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            border: 1px solid var(--neutral-200);
            overflow: hidden;
            position: relative;
        }
        
        .transport-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }
        
        .transport-card.gradient-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary);
        }
        
        .card-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--primary);
            background: var(--primary-light);
            transition: all 0.3s ease;
        }
        
        .transport-card:hover .card-icon {
            transform: scale(1.05);
        }
        
        .action-btn {
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
            background: var(--primary-light);
            color: var(--primary);
            border: 1px solid rgba(67, 97, 238, 0.15);
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.06);
            background: rgba(67, 97, 238, 0.1);
        }
        
        .action-btn i {
            margin-right: 8px;
            transition: transform 0.3s ease;
        }
        
        .action-btn:hover i {
            transform: scale(1.1);
        }
        
        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }
        
        .user-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .user-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0,0,0,0.12);
        }
        
        .progress-container {
            height: 6px;
            border-radius: 3px;
            background-color: var(--neutral-200);
            overflow: hidden;
        }
        
        .progress-bar {
            background: var(--primary);
            border-radius: 3px;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                90deg,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.4) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .rating-stars {
            color: #f59e0b;
        }
        
        .rating-stars .empty {
            color: var(--neutral-300);
        }
        
        .nav-pill {
            display: flex;
            align-items: center;
            padding: 10px 16px;
            border-radius: 12px;
            transition: all 0.2s ease;
        }
        
        .nav-pill:hover {
            background-color: var(--primary-light);
        }
        
        .nav-pill.active {
            background-color: var(--primary-light);
            color: var(--primary);
            font-weight: 600;
        }
        
        .notification-badge {
            position: absolute;
            top: -4px;
            right: -4px;
            width: 18px;
            height: 18px;
            background-color: var(--accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: bold;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .time-pill {
            background: var(--primary-light);
            color: var(--primary);
            border-radius: 50px;
            padding: 4px 12px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .trip-dot {
            position: relative;
            padding-left: 20px;
        }
        
        .trip-dot::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: var(--primary);
        }
        
        .trip-dot.end::before {
            background-color: var(--accent);
        }
        
        .trip-line {
            position: relative;
            padding-left: 20px;
            margin-left: 5px;
        }
        
        .trip-line::before {
            content: '';
            position: absolute;
            left: 4px;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: var(--neutral-300);
        }
        
        .driver-avatar {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        
        .floating-action-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.25);
            z-index: 50;
            transition: all 0.3s ease;
        }
        
        .floating-action-btn:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 8px 16px rgba(67, 97, 238, 0.3);
        }
        
        .skeleton {
            background-color: var(--neutral-200);
            border-radius: 4px;
            position: relative;
            overflow: hidden;
        }
        
        .skeleton::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                90deg,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.5) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            animation: shimmer 2s infinite;
        }
        
        .weather-card {
            background: var(--light);
            color: var(--text-primary);
            border-radius: var(--card-radius);
            position: relative;
            overflow: hidden;
            border: 1px solid var(--neutral-200);
        }
        
        .weather-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.03) 0%, rgba(247, 37, 133, 0.03) 100%);
        }
        
        .activity-item {
            transition: all 0.2s ease;
            border-left: 2px solid transparent;
            padding-left: 10px;
            margin-left: -12px;
        }
        
        .activity-item:hover {
            border-left: 2px solid var(--primary);
            background-color: var(--primary-light);
            border-radius: 0 8px 8px 0;
        }
        
        .activity-icon {
            transition: all 0.2s ease;
        }
        
        .activity-item:hover .activity-icon {
            background: var(--primary);
            color: white;
        }
        
        /* Light dashboard panels */
        .dashboard-panel {
            background: var(--light);
            border-radius: var(--card-radius);
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            border: 1px solid var(--neutral-200);
        }
        
        .dashboard-panel-header {
            border-bottom: 1px solid var(--neutral-200);
            padding: 16px 20px;
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-3px);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .dashboard-header {
                border-radius: 0 0 16px 16px;
            }
            
            .action-btn {
                padding: 10px 16px;
                font-size: 14px;
            }
            
            .user-avatar {
                width: 40px;
                height: 40px;
            }
        }
        .driver-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
    }
    
    .progress-container {
        height: 6px;
        background-color: #e5e7eb;
        border-radius: 3px;
        overflow: hidden;
    }
    
    .progress-bar {
        height: 100%;
        background-color: #3b82f6;
        border-radius: 3px;
        transition: width 0.5s ease;
    }
    
    .trip-dot {
        position: relative;
        padding-left: 18px;
    }
    
    .trip-dot:before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        width: 10px;
        height: 10px;
        background-color: #3b82f6;
        border-radius: 50%;
        transform: translateY(-50%);
    }
    
    .trip-dot.end:before {
        background-color: #10b981;
    }
    
    .trip-line {
        position: relative;
        margin-top: 16px;
    }
    
    .status-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 16px;
        font-size: 14px;
    }
    </style>
{% endblock %}

{% block body %}
    <div class=\"min-h-screen\">
        <!-- Header -->
        <header class=\"dashboard-header px-6 pt-8 pb-6 animate__animated animate__fadeIn\">
            <div class=\"flex justify-between items-start mb-8 relative\">
                <div>
                    <h1 class=\"text-2xl font-bold\">Welcome back, {{ app.user.name }}</h1>
                    <p class=\"text-gray-500 mt-1\">Ready for your next ride?</p>
                </div>
                <div class=\"flex items-center space-x-4\">
                    <div class=\"relative\">
                        <button class=\"p-2 rounded-full bg-white hover:bg-gray-50 transition border border-gray-100\">
                            <i class=\"fas fa-bell text-gray-600\"></i>
                            <span class=\"notification-badge\">3</span>
                        </button>
                    </div>
                    <div class=\"flex items-center\">
                        {% if app.user.image %}
                            <img src=\"{{ path('user_avatar', {id: app.user.id}) }}\" alt=\"User\" class=\"user-avatar\">
                        {% else %}
                            <img src=\"https://ui-avatars.com/api/?name={{ app.user.name|url_encode }}&background=random\" alt=\"User\" class=\"user-avatar\">
                        {% endif %}
                    </div>
                </div>
            </div>
            
            <!-- Quick Stats -->
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4 animate__animated animate__fadeInUp animate__delay-1s\">
                <!-- Completed Rides -->
                <div class=\"transport-card p-4 gradient-border\">
                    <div class=\"flex justify-between items-center\">
                        <div>
                            <p class=\"text-sm text-gray-500\">Completed Rides</p>
                            <h3 class=\"text-2xl font-bold\">
                                {{ app.user.reservations|filter(r => r.status == 'Confirmed' and not r.isCancelled and r.trajet and r.trajet.arrivalTime < date() )|length }}
                            </h3>
                            {% set lastMonthCount = app.user.reservations|filter(r => r.status == 'Confirmed' and not r.isCancelled and r.trajet and r.trajet.arrivalTime < date() and r.trajet.arrivalTime > date('-1 month'))|length %}
                            {% set prevMonthCount = app.user.reservations|filter(r => r.status == 'Confirmed' and not r.isCancelled and r.trajet and r.trajet.arrivalTime < date('-1 month') and r.trajet.arrivalTime > date('-2 months'))|length %}
                            {% set growth = lastMonthCount > 0 and prevMonthCount > 0 ? ((lastMonthCount - prevMonthCount) / prevMonthCount * 100)|round : 0 %}
                            <p class=\"text-xs {{ growth >= 0 ? 'text-green-500' : 'text-red-500' }} mt-1\">
                                <i class=\"fas {{ growth >= 0 ? 'fa-arrow-up' : 'fa-arrow-down' }} mr-1\"></i> 
                                {{ growth|abs }}% from last month
                            </p>
                        </div>
                        <div class=\"card-icon\">
                            <i class=\"fas fa-car\"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Money Saved -->
                <div class=\"transport-card p-4 gradient-border\">
                    <div class=\"flex justify-between items-center\">
                        <div>
                            <p class=\"text-sm text-gray-500\">Money Saved</p>
                            {% set totalSaved = 0 %}
                            {% set weeklySaved = 0 %}
                            {% for reservation in app.user.reservations|filter(r => r.status == 'Confirmed' and not r.isCancelled and r.trajet) %}
                                {% if reservation.trajet.typeTransport == 'Carpooling' %}
                                    {% set estimatedIndividualCost = reservation.trajet.price * 0.7 %} {# Assuming 30% savings #}
                                    {% set saved = estimatedIndividualCost - (reservation.totalPrice / reservation.numberOfSeats) %}
                                    {% set totalSaved = totalSaved + saved %}
                                    {% if reservation.trajet.departureTime > date('-1 week') %}
                                        {% set weeklySaved = weeklySaved + saved %}
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                            <h3 class=\"text-2xl font-bold\">\${{ totalSaved|number_format(2) }}</h3>
                            <p class=\"text-xs text-green-500 mt-1\">
                                <i class=\"fas fa-piggy-bank mr-1\"></i> 
                                \${{ weeklySaved|number_format(2) }} this week
                            </p>
                        </div>
                        <div class=\"card-icon\">
                            <i class=\"fas fa-piggy-bank\"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Carbon Saved -->
                <div class=\"transport-card p-4 gradient-border\">
                    <div class=\"flex justify-between items-center\">
                        <div>
                            <p class=\"text-sm text-gray-500\">Carbon Saved</p>
                            {% set carbonTotal = 0 %}
                            {% for reservation in app.user.reservations|filter(r => r.status == 'Confirmed' and not r.isCancelled and r.trajet) %}
                                {% if reservation.trajet.typeTransport == 'Carpooling' %}
                                    {# Assuming 0.2kg CO2 per km saved by carpooling #}
                                    {% set carbonTotal = carbonTotal + (reservation.trajet.distance * 0.2) %}
                                {% endif %}
                            {% endfor %}
                            <h3 class=\"text-2xl font-bold\">{{ carbonTotal|round }}kg</h3>
                            <p class=\"text-xs text-green-500 mt-1\">
                                <i class=\"fas fa-leaf mr-1\"></i> 
                                Equivalent to {{ (carbonTotal / 14)|round }} trees
                            </p>
                        </div>
                        <div class=\"card-icon\">
                            <i class=\"fas fa-leaf\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Main Content -->
        <div class=\"p-6\">
            {% if is_granted('ROLE_CLIENT') %}
                <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
                    <!-- Left Column -->
                    <div class=\"lg:col-span-2 space-y-6\">
                        <!-- Quick Actions -->
                        <div class=\"transport-card p-6 animate__animated animate__fadeInLeft\">
                            <h2 class=\"text-xl font-bold mb-6\">Get Around</h2>
                            <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4\">
                                <a href=\"{{ path('reservation_affichage')}}\" class=\"action-btn\">
                                    <i class=\"fas fa-car\"></i> Book Ride
                                </a>
                                <a href=\"{{ path('app_abonnement_index')}}\" class=\"action-btn\">
                                    <i class=\"fas fa-bus\"></i> Subscription
                                </a>
                                <a href=\"{{ path('reservation_list')}}\" class=\"action-btn\">
                                    <i class=\"fas fa-bicycle\"></i> My Reservation
                                </a>
                                <a href=\"{{ path('app_abonnement_mes_reservations')}}\" class=\"action-btn\">
                                    <i class=\"fas fa-train\"></i> My subscription
                                </a>
                            </div>
                        </div>
                        
                        <!-- Active Trip -->
                        {# templates/reservation/current_trip.html.twig #}

                        {# Check if there is a current trip #}
                        {% set now = \"now\"|date(\"Y-m-d H:i:s\") %}
                        {% set currentTrip = null %}

                        {# Find the current trip from user's reservations #}
                        {% if app.user %}
                            {% for reservation in app.user.reservations %}
                                {% if currentTrip is null and reservation.status == 'Confirmed' and not reservation.isCancelled %}
                                    {% if reservation.trajet and reservation.trajet.departureTime|date(\"Y-m-d H:i:s\") <= now and reservation.trajet.arrivalTime|date(\"Y-m-d H:i:s\") >= now %}
                                        {% set currentTrip = reservation %}
                                    {% endif %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}

                        <div class=\"transport-card p-6 animate__animated animate__fadeInLeft animate__delay-1s\">
                            <!-- Current Trip Section -->
                        {% if currentTrip %}
                            {# Calculate time values #}
                            {% set now = \"now\"|date(\"U\") %}
                            {% set departure_time = currentTrip.trajet.departureTime|date(\"U\") %}
                            {% set arrival_time = currentTrip.trajet.arrivalTime|date(\"U\") %}
                            {% set total_duration = arrival_time - departure_time %}
                            {% set elapsed = now - departure_time %}
                            {% set remaining = arrival_time - now %}
                            
                            {# Calculate percentage remaining #}
                            {% if total_duration > 0 %}
                                {% if elapsed < 0 %}
                                    {# Trip hasn't started yet #}
                                    {% set percentage_remaining = 100 %}
                                    {% set status_text = \"Starts in \" ~ ((elapsed * -1)/60)|round ~ \" minutes\" %}
                                {% elseif elapsed < total_duration %}
                                    {# Trip in progress #}
                                    {% set percentage_remaining = 100 - ((elapsed / total_duration) * 100)|round %}
                                    {% set status_text = (remaining/60)|round ~ \" minutes remaining\" %}
                                {% else %}
                                    {# Trip completed #}
                                    {% set percentage_remaining = 0 %}
                                    {% set status_text = \"Trip completed\" %}
                                {% endif %}
                            {% else %}
                                {# Invalid duration #}
                                {% set percentage_remaining = 0 %}
                                {% set status_text = \"Completed\" %}
                            {% endif %}
                            
                            {# Ensure percentage stays between 0-100 #}
                            {% set percentage_remaining = percentage_remaining > 100 ? 100 : (percentage_remaining < 0 ? 0 : percentage_remaining) %}
                            
                            {# Calculate progress percentage for the bar (inverse of remaining) #}
                            {% set progress_percent = 100 - percentage_remaining %}

                            <div class=\"flex justify-between items-center mb-6\">
                                <h2 class=\"text-xl font-bold\">Current Trip</h2>
                                <span class=\"status-badge bg-blue-50 text-blue-600\">
                                    <span class=\"w-2 h-2 bg-blue-500 rounded-full mr-2 animate-pulse\"></span>
                                    {{ percentage_remaining }}% remaining
                                </span>
                            </div>
                            
                            <div class=\"mb-6 p-4 bg-gray-50 rounded-lg\">
                                <div class=\"flex justify-between mb-2\">
                                    <div class=\"trip-dot\">
                                        <p class=\"text-sm text-gray-500\">From</p>
                                        <p class=\"font-medium\">{{ currentTrip.trajet.departure }}</p>
                                    </div>
                                    <div class=\"trip-dot end\">
                                        <p class=\"text-sm text-gray-500 text-right\">To</p>
                                        <p class=\"font-medium text-right\">{{ currentTrip.trajet.destination }}</p>
                                    </div>
                                </div>
                                
                                <div class=\"trip-line\">
                                    <div class=\"progress-container mb-2\">
                                        <div class=\"progress-bar\" style=\"width: {{ progress_percent }}%\"></div>
                                    </div>
                                    <p class=\"text-sm text-gray-500 text-center\">
                                        {{ status_text }}
                                        {% if currentTrip.trajet.distance and status_text != \"Trip completed\" %}
                                            ({{ currentTrip.trajet.distance }}km left)
                                        {% endif %}
                                    </p>
                                </div>
                            </div>

                            {# Rest of your driver/vehicle display code #}
                            <div class=\"flex items-center justify-between pt-4 border-t border-gray-100\">
                                {% if currentTrip.trajet.vehicle and currentTrip.trajet.vehicle.driver %}
                                    {% set driver = currentTrip.trajet.vehicle.driver %}
                                    <div class=\"flex items-center\">
                                        {% if driver.image %}
                                            <img src=\"{{ path('user_avatar', {id: driver.id}) }}\" alt=\"Driver\" class=\"driver-avatar mr-4\">
                                        {% else %}
                                            <div class=\"driver-avatar mr-4 bg-gray-200 flex items-center justify-center\">
                                                <span class=\"text-gray-500\">{{ driver.name|first|upper }}</span>
                                            </div>
                                        {% endif %}
                                        <div>
                                            <p class=\"font-medium\">{{ driver.name }}</p>
                                            {% if driver.rating is defined %}
                                                <div class=\"rating-stars\">
                                                    {% for i in 1..5 %}
                                                        {% if i <= driver.rating|round(0, 'floor') %}
                                                            <i class=\"fas fa-star\"></i>
                                                        {% elseif i <= driver.rating %}
                                                            <i class=\"fas fa-star-half-alt\"></i>
                                                        {% else %}
                                                            <i class=\"far fa-star\"></i>
                                                        {% endif %}
                                                    {% endfor %}
                                                    <span class=\"text-gray-500 text-sm ml-1\">
                                                        {{ driver.rating|number_format(1) }}
                                                        {% if driver.rideCount is defined %}
                                                            ({{ driver.rideCount }} rides)
                                                        {% endif %}
                                                    </span>
                                                </div>
                                            {% endif %}
                                            
                                            {# Vehicle details #}
                                            {% if currentTrip.trajet.vehicle %}
                                                <div class=\"mt-2 text-sm text-gray-600\">
                                                    <div class=\"flex items-center\">
                                                        <i class=\"fas fa-car text-blue-500 mr-2\"></i>
                                                        <span>{{ currentTrip.trajet.vehicle.brand }} {{ currentTrip.trajet.vehicle.model }}</span>
                                                    </div>
                                                    <div class=\"flex items-center mt-1\">
                                                        <i class=\"fas fa-palette text-blue-500 mr-2\"></i>
                                                        <span style=\"display:inline-block; width:20px; height:20px; border-radius:50%; background-color: {{ currentTrip.trajet.vehicle.color }};\" title=\"{{ currentTrip.trajet.vehicle.color|capitalize }}\"></span>
                                                        <span class=\"mx-2\">•</span>
                                                        <i class=\"fas fa-id-card text-blue-500 mr-1\"></i>
                                                        <span>{{ currentTrip.trajet.vehicle.licensePlate }}</span>
                                                    </div>
                                                </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% else %}
                                    <div class=\"flex items-center\">
                                        <div class=\"driver-avatar mr-4 bg-gray-200 flex items-center justify-center\">
                                            <span class=\"text-gray-500\">?</span>
                                        </div>
                                        <div>
                                            <p class=\"font-medium\">Driver information unavailable</p>
                                            {% if currentTrip.trajet.vehicle %}
                                                <div class=\"mt-2 text-sm text-gray-600\">
                                                    <div class=\"flex items-center\">
                                                        <i class=\"fas fa-car text-blue-500 mr-2\"></i>
                                                        <span>{{ currentTrip.trajet.vehicle.brand }} {{ currentTrip.trajet.vehicle.model }}</span>
                                                    </div>
                                                    <div class=\"flex items-center mt-1\">
                                                        <i class=\"fas fa-palette text-blue-500 mr-2\"></i>
                                                        <span style=\"display:inline-block; width:20px; height:20px; border-radius:50%; background-color: {{ currentTrip.trajet.vehicle.color }};\" title=\"{{ currentTrip.trajet.vehicle.color|capitalize }}\"></span>
                                                        <span class=\"mx-2\">•</span>
                                                        <i class=\"fas fa-id-card text-blue-500 mr-1\"></i>
                                                        <span>{{ currentTrip.trajet.vehicle.licensePlate }}</span>
                                                    </div>
                                                </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"flex space-x-2\">
                                    <button class=\"p-3 bg-gray-50 text-blue-600 rounded-full hover:bg-blue-50 transition\">
                                        <i class=\"fas fa-phone-alt\"></i>
                                    </button>
                                    <button class=\"p-3 bg-gray-50 text-blue-600 rounded-full hover:bg-blue-50 transition\">
                                        <i class=\"fas fa-comment\"></i>
                                    </button>
                                    <a href=\"{{ path('app_mapcontroller') }}\" class=\"p-3 bg-gray-50 text-blue-600 rounded-full hover:bg-blue-50 transition\">
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                    </a>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"text-center py-8\">
                                <div class=\"mb-4\">
                                    <svg class=\"w-16 h-16 mx-auto text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 19l9 2-9-18-9 18 9-2zm0 0v-8\" />
                                    </svg>
                                </div>
                                <h2 class=\"text-xl font-bold mb-2\">No Current Rides</h2>
                                <p class=\"text-gray-500\">You don't have any active trips at the moment.</p>
                                <a href=\"{{ path('reservation_affichage') }}\" class=\"mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition inline-block\">
                                    Book a New Trip
                                </a>
                            </div>
                        {% endif %}
                        </div>

                        <!-- Upcoming Trips -->
                        <div class=\"transport-card p-6\">
                            <div class=\"flex justify-between items-center mb-6\">
                                <h2 class=\"text-xl font-bold\">Upcoming Trips</h2>
                                <a href=\"#\" class=\"text-sm text-blue-600 hover:text-blue-800\">View All</a>
                            </div>
                            
                            <div class=\"space-y-4\">
                                <div class=\"flex items-center justify-between p-4 bg-gray-50 rounded-lg hover-lift\">
                                    <div class=\"flex items-center\">
                                        <div class=\"mr-4 p-3 bg-blue-50 rounded-lg\">
                                            <i class=\"fas fa-car text-blue-600\"></i>
                                        </div>
                                        <div>
                                            <p class=\"font-medium\">Airport Transfer</p>
                                            <p class=\"text-sm text-gray-500\">Tomorrow, 6:30 AM</p>
                                        </div>
                                    </div>
                                    <span class=\"time-pill\">Confirmed</span>
                                </div>
                                
                                <div class=\"flex items-center justify-between p-4 bg-gray-50 rounded-lg hover-lift\">
                                    <div class=\"flex items-center\">
                                        <div class=\"mr-4 p-3 bg-purple-50 rounded-lg\">
                                            <i class=\"fas fa-users text-purple-600\"></i>
                                        </div>
                                        <div>
                                            <p class=\"font-medium\">Office Carpool</p>
                                            <p class=\"text-sm text-gray-500\">Mon, 8:00 AM</p>
                                        </div>
                                    </div>
                                    <span class=\"time-pill bg-yellow-50 text-yellow-600\">Pending</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class=\"space-y-6\">
                        <!-- User Profile -->
                        <div class=\"transport-card p-6 animate__animated animate__fadeInRight\">
                            <div class=\"flex items-center justify-between mb-6\">
                                <h2 class=\"text-xl font-bold\">Your Profile</h2>
                                <a href=\"{{ path('app_profile_myprofile') }}\" class=\"text-sm text-blue-600 hover:text-blue-800 flex items-center\">
                                    Edit <i class=\"fas fa-edit ml-1\"></i>
                                </a>
                            </div>
                            
                            <div class=\"flex items-center mb-6\">
                                {% if app.user.image %} 
                                    <img src=\"{{ path('user_avatar', {id: app.user.id}) }}\" alt=\"User\" class=\"user-avatar\">
                                {% else %}
                                    <img src=\"https://ui-avatars.com/api/?name={{ app.user.name|url_encode }}&background=random\" alt=\"User\" class=\"user-avatar\">
                                {% endif %}
                                <div>
                                    <h3 class=\"font-bold\">{{ app.user.name }}</h3>
                                    <p class=\"text-sm text-gray-500\">{{ user.email }}</p>
                                </div>
                            </div>
                            
                            <div class=\"space-y-3\">
                                <div class=\"flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition\">
                                    <div class=\"mr-3 p-2 bg-blue-50 rounded-lg\">
                                        <i class=\"fas fa-phone text-blue-600\"></i>
                                    </div>
                                    <div>
                                        <p class=\"text-sm text-gray-500\">Phone</p>
                                        <p class=\"font-medium\">{{ user.phone }}</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition\">
                                    <div class=\"mr-3 p-2 bg-purple-50 rounded-lg\">
                                        <i class=\"fas fa-id-card text-purple-600\"></i>
                                    </div>
                                    <div>
                                        <p class=\"text-sm text-gray-500\">Member Since</p>
                                        <p class=\"font-medium\">January 2023</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition\">
                                    <div class=\"mr-3 p-2 bg-amber-50 rounded-lg\">
                                        <i class=\"fas fa-star text-amber-500\"></i>
                                    </div>
                                    <div>
                                        <p class=\"text-sm text-gray-500\">Your Rating</p>
                                        <div class=\"flex items-center\">
                                            <div class=\"rating-stars mr-2\">
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star\"></i>
                                                <i class=\"fas fa-star-half-alt empty\"></i>
                                            </div>
                                            <span class=\"text-sm\">4.5</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition\">
                                    <div class=\"mr-3 p-2 bg-red-50 rounded-lg\">
                                        <i class=\"fas fa-credit-card text-red-500\"></i>
                                    </div>
                                    <div>
                                        <p class=\"text-sm text-gray-500\">Payment Method</p>
                                        <p class=\"font-medium\">•••• •••• •••• 4242</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Weather & Traffic -->
                        <div 
                        class=\"weather-card p-6 cursor-pointer\" 
                        onclick=\"window.location.href='{{ path('app_wathercontroller') }}'\"
                    >
                        <div class=\"flex justify-between items-center mb-4 relative\">
                            <div>
                                <h2 class=\"text-xl font-bold\">Current Weather</h2>
                                <p class=\"text-sm text-gray-500\">Sunny, 24°C</p>
                            </div>
                            <i class=\"fas fa-sun text-4xl text-amber-500\"></i>
                        </div>
                        <div class=\"flex justify-between text-sm relative\">
                            <div>
                                <p class=\"text-gray-500\">Humidity</p>
                                <p class=\"font-medium\">42%</p>
                            </div>
                            <div>
                                <p class=\"text-gray-500\">Wind</p>
                                <p class=\"font-medium\">12 km/h</p>
                            </div>
                            <div>
                                <p class=\"text-gray-500\">Traffic</p>
                                <p class=\"font-medium\">Moderate</p>
                            </div>
                        </div>
                    </div>
                        
                        <!-- Recent Activity -->
                        <div class=\"transport-card p-6\">
                            <h2 class=\"text-xl font-bold mb-6\">Recent Activity</h2>
                            <div class=\"space-y-4\">
                                <div class=\"flex items-start activity-item p-2\">
                                    <div class=\"mr-3 mt-1\">
                                        <div class=\"w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center activity-icon\">
                                            <i class=\"fas fa-car\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class=\"font-medium\">Ride completed</p>
                                        <p class=\"text-sm text-gray-500\">Downtown to Tech Park</p>
                                        <p class=\"text-xs text-gray-400 mt-1\">Today, 8:30 AM • \$12.50</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-start activity-item p-2\">
                                    <div class=\"mr-3 mt-1\">
                                        <div class=\"w-10 h-10 rounded-full bg-green-50 text-green-600 flex items-center justify-center activity-icon\">
                                            <i class=\"fas fa-users\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class=\"font-medium\">Carpool joined</p>
                                        <p class=\"text-sm text-gray-500\">North Station to Mall</p>
                                        <p class=\"text-xs text-gray-400 mt-1\">Yesterday, 5:15 PM • \$8.20</p>
                                    </div>
                                </div>
                                
                                <div class=\"flex items-start activity-item p-2\">
                                    <div class=\"mr-3 mt-1\">
                                        <div class=\"w-10 h-10 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center activity-icon\">
                                            <i class=\"fas fa-subscription\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class=\"font-medium\">Subscription renewed</p>
                                        <p class=\"text-sm text-gray-500\">Monthly Premium Plan</p>
                                        <p class=\"text-xs text-gray-400 mt-1\">Yesterday, 10:45 AM • \$24.99</p>
                                    </div>
                                </div>
                                
                                <a href=\"#\" class=\"text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center justify-center pt-2\">
                                    View all activity <i class=\"fas fa-chevron-right ml-1\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Action Button -->
                <a href=\"{{ path('reservation_affichage')}}\" class=\"floating-action-btn animate__animated animate__bounceIn animate__delay-2s\">
                    <i class=\"fas fa-plus\"></i>
                </a>
            {% else %}
                <div class=\"transport-card p-6 animate__animated animate__shakeX\">
                    <div class=\"flex items-center p-4 bg-red-50 rounded-lg\">
                        <div class=\"mr-3 p-2 bg-red-100 rounded-full\">
                            <i class=\"fas fa-exclamation-circle text-red-600\"></i>
                        </div>
                        <div>
                            <h3 class=\"font-bold text-red-800\">Access Restricted</h3>
                            <p class=\"text-sm text-red-600\">You don't have client privileges to view this dashboard.</p>
                        </div>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on hover
            const cards = document.querySelectorAll('.transport-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.classList.add('shadow-lg');
                });
                card.addEventListener('mouseleave', function() {
                    this.classList.remove('shadow-lg');
                });
            });
            
            // Notification badge animation
            const notificationBadge = document.querySelector('.notification-badge');
            if (notificationBadge) {
                setInterval(() => {
                    notificationBadge.classList.toggle('animate-pulse');
                }, 2000);
            }
            
            // Add click handlers for activity items
            const activityItems = document.querySelectorAll('.activity-item');
            activityItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Add your click handler logic here
                    console.log('Activity item clicked');
                });
            });
        });
    </script>
{% endblock %}", "dashboard/client.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\dashboard\\client.html.twig");
    }
}
