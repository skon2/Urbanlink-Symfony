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

/* auth/login/login.html.twig */
class __TwigTemplate_75547f737bbad45e8fe1050c9ab48924 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Log in to UrbanLink";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        :root {
            --primary: #3b82f6;
            --primary-light: #93c5fd;
            --primary-dark: #1d4ed8;
            --secondary: #10b981;
            --secondary-light: #6ee7b7;
            --accent: #f59e0b;
            --accent-light: #fcd34d;
            --dark: #1e293b;
            --dark-light: #334155;
            --light: #f8fafc;
            --light-dark: #e2e8f0;
            --danger: #ef4444;
            --danger-light: #fca5a5;
            --success: #22c55e;
            --success-light: #86efac;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --shadow-primary: 0 4px 14px 0 rgba(59, 130, 246, 0.3);
            --shadow-primary-hover: 0 6px 20px 0 rgba(59, 130, 246, 0.4);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, sans-serif;
        }
        
        body {
            background: transparent;
            color: var(--dark);
            min-height: 100vh;
            line-height: 1.6;
        }
        
        /* Enhanced Navbar with glass morphism */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: var(--shadow-sm);
            padding: 1rem 2rem;
            z-index: 100;
            border-radius: 0 0 16px 16px;
            transition: var(--transition);
        }
        
        .navbar.scrolled {
            box-shadow: var(--shadow);
            padding: 0.75rem 2rem;
        }
        
        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1280px;
            margin: 0 auto;
        }
        
        .logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--dark);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .logo:hover {
            color: var(--primary);
        }
        
        .logo img {
            height: 2rem;
            margin-right: 0.75rem;
            transition: transform 0.3s ease;
        }
        
        .logo:hover img {
            transform: rotate(-5deg) scale(1.05);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 1rem;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            color: var(--dark);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            transition: var(--transition);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--primary);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after {
            width: 60%;
        }
        
        .nav-link i {
            margin-right: 0.5rem;
            opacity: 0.75;
        }
        
        main {
            padding-top: 6rem;
            min-height: calc(100vh - 6rem);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Enhanced Login Container */
        .login-container {
            display: flex;
            flex-direction: row-reverse; /* Changed to row-reverse to swap positions */
            width: 96%;
            max-width: 1200px;
            margin: 2rem auto;
            box-shadow: var(--shadow-xl);
            border-radius: 24px;
            overflow: hidden;
            background: white;
            position: relative;
            transform: translateY(0);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        
        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }
        
        /* Login Form Container */
        .login-form-container {
            flex: 1;
            padding: 3rem;
            z-index: 2;
            animation: fadeIn 0.6s ease;
        }
        
        /* Enhanced Image Section with your requested image */
        .login-image {
            flex: 1;
            background-image: url('https://reneeroaming.com/wp-content/uploads/2020/08/Best-National-Park-Road-Trip-Itinerary-Grand-Teton-National-Park-Van-Life-819x1024.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 600px;
            overflow: hidden;
        }
        
        .login-image::before {
            content: \"\";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.85) 0%, rgba(16, 185, 129, 0.75) 100%);
            z-index: 1;
        }
        
        .login-image-content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            padding: 2rem;
            width: 90%;
            animation: fadeInUp 0.8s ease;
        }
        
        .login-image-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .login-image-content p {
            font-size: 1.125rem;
            line-height: 1.7;
            max-width: 80%;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }
        
        /* Form Header */
        .form-header {
            margin-bottom: 2.5rem;
            animation: fadeIn 0.6s ease;
        }
        
        .form-header h1 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 0.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }
        
        .form-header p {
            color: #64748b;
            font-size: 0.95rem;
        }
        
        /* Form Groups */
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        /* Enhanced Form Controls */
        .form-control {
            width: 100%;
            padding: 0.85rem 1.25rem;
            font-size: 0.95rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            transition: var(--transition);
            background-color: #f8fafc;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
            background-color: white;
        }
        
        .form-control::placeholder {
            color: #94a3b8;
            opacity: 1;
        }
        
        /* Button Styles */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 12px;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 1rem;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            box-shadow: var(--shadow-primary);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-primary-hover);
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-block {
            width: 100%;
        }
        
        /* Divider Styles */
        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            color: #94a3b8;
            position: relative;
            overflow: hidden;
        }
        
        .divider::before,
        .divider::after {
            content: \"\";
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
        }
        
        .divider-text {
            padding: 0 1rem;
            font-size: 0.875rem;
            background: white;
            position: relative;
            z-index: 1;
        }
        
        /* Social Buttons */
        .social-buttons {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        
        .btn-social {
            background-color: white;
            border: 1px solid #e2e8f0;
            color: var(--dark);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }
        
        .btn-social:hover {
            background-color: #f8fafc;
            transform: translateY(-2px);
            box-shadow: var(--shadow);
            border-color: var(--primary-light);
        }
        
        .btn-social i {
            margin-right: 0.75rem;
            font-size: 1.1rem;
        }
        
        .btn-google i {
            color: #ea4335;
        }
        
        /* Form Footer */
        .form-footer {
            margin-top: 2rem;
            text-align: center;
            animation: fadeIn 0.6s ease forwards;
            opacity: 0;
            animation-delay: 0.3s;
        }
        
        .form-footer p {
            color: #64748b;
            font-size: 0.875rem;
            margin-bottom: 0.75rem;
        }
        
        .form-footer a {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .form-footer a:hover {
            text-decoration: underline;
            color: var(--primary-dark);
        }
        
        /* Alert Styles */
        .alert {
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: 12px;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            animation: fadeIn 0.5s ease;
        }
        
        .alert i {
            margin-right: 0.75rem;
            font-size: 1.25rem;
        }
        
        .alert-success {
            background-color: rgba(34, 197, 94, 0.1);
            color: var(--success);
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
        
        .alert-danger {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger);
            border: 1px solid rgba(239, 68, 68, 0.2);
        }
        
        .error-text {
            color: var(--danger);
            font-size: 0.75rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
        }
        
        .error-text i {
            margin-right: 0.25rem;
            font-size: 0.9em;
        }
        
        /* reCAPTCHA Container */
        .recaptcha-container {
            margin-bottom: 1.5rem;
            animation: fadeIn 0.6s ease forwards;
            opacity: 0;
            animation-delay: 0.2s;
        }
        
        /* Background Animation */
        .moving-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .moving-background::before {
            content: \"\";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background-image: 
                radial-gradient(circle at 80% 30%, rgba(59, 130, 246, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 20% 80%, rgba(16, 185, 129, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 50% 50%, rgba(245, 158, 11, 0.08) 0%, transparent 30%);
            animation: backgroundMove 25s infinite linear;
        }

        /* Full-page background image */
        .fullpage-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background-image: url('https://wallpapercat.com/w/full/c/0/4/738962-3840x2160-desktop-4k-highway-background-photo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Overlay for background image */
        .bg-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.2) 0%, rgba(16, 185, 129, 0.15) 100%);
        }
        
        /* City Skyline Animation */
        .city-animation {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1000 200' preserveAspectRatio='none'%3E%3Cpath fill='rgba(255,255,255,0.25)' d='M0,200 L0,160 L30,160 L30,150 L45,150 L45,140 L60,140 L60,130 L75,130 L75,150 L90,150 L90,140 L105,140 L105,160 L120,160 L120,170 L135,170 L135,160 L150,160 L150,140 L165,140 L165,130 L180,130 L180,120 L195,120 L195,140 L210,140 L210,150 L225,150 L225,130 L240,130 L240,140 L255,140 L255,130 L270,130 L270,140 L285,140 L285,120 L300,120 L300,100 L315,100 L315,120 L330,120 L330,130 L345,130 L345,140 L360,140 L360,130 L375,130 L375,110 L390,110 L390,100 L405,100 L405,90 L420,90 L420,100 L435,100 L435,120 L450,120 L450,130 L465,130 L465,140 L480,140 L480,130 L495,130 L495,120 L510,120 L510,100 L525,100 L525,110 L540,110 L540,130 L555,130 L555,120 L570,120 L570,100 L585,100 L585,90 L600,90 L600,80 L615,80 L615,100 L630,100 L630,110 L645,110 L645,100 L660,100 L660,90 L675,90 L675,110 L690,110 L690,120 L705,120 L705,130 L720,130 L720,120 L735,120 L735,100 L750,100 L750,90 L765,90 L765,110 L780,110 L780,130 L795,130 L795,120 L810,120 L810,100 L825,100 L825,110 L840,110 L840,130 L855,130 L855,140 L870,140 L870,130 L885,130 L885,120 L900,120 L900,130 L915,130 L915,140 L930,140 L930,150 L945,150 L945,160 L960,160 L960,170 L975,170 L975,180 L990,180 L990,190 L1000,190 L1000,200 L0,200 Z'%3E%3C/path%3E%3C/svg%3E\");
            background-size: cover;
            z-index: 1;
            animation: cityMove 30s infinite linear;
        }
        
        /* Animations */
        @keyframes backgroundMove {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        
        @keyframes cityMove {
            0% {
                background-position-x: 0;
            }
            100% {
                background-position-x: 1000px;
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .login-image {
                display: none;
            }
            
            .login-form-container {
                padding: 2.5rem;
            }
            
            .login-container {
                width: 90%;
                margin: 1.5rem auto;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                padding: 0.75rem 1.5rem;
            }
            
            .login-form-container {
                padding: 2rem;
            }
            
            .form-header h1 {
                font-size: 1.75rem;
            }
        }
        
        @media (max-width: 576px) {
            .navbar {
                padding: 0.75rem 1rem;
            }
            
            .nav-links {
                gap: 0.5rem;
            }
            
            .nav-link {
                padding: 0.5rem;
            }
            
            .login-form-container {
                padding: 1.5rem;
            }
            
            .form-header h1 {
                font-size: 1.5rem;
            }
            
            .btn {
                padding: 0.85rem 1.5rem;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 644
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

        // line 645
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- reCAPTCHA v2 script -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add scroll effect to navbar
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 10) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                });
            }
            
            // Form submission validation
            const loginForm = document.getElementById('loginForm');
            if (loginForm) {
                loginForm.addEventListener('submit', function(e) {
                    const response = grecaptcha.getResponse();
                    if (response.length === 0) {
                        e.preventDefault();
                        
                        // Show error message
                        const errorDiv = document.getElementById('recaptchaError');
                        if (errorDiv) {
                            errorDiv.textContent = 'Please complete the reCAPTCHA verification';
                            errorDiv.style.display = 'block';
                        }
                        return false;
                    }
                    return true;
                });
            }
            
            // Show blocked user popup if flash message exists
            ";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 684, $this->source); })()), "flashes", ["blocked"], "method", false, false, false, 684));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 685
            yield "            const blockedMsg = '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "';
            const errorDiv = document.createElement('div');
            errorDiv.classList.add('alert', 'alert-danger');
            errorDiv.innerHTML = `<i class=\"fas fa-exclamation-circle\"></i> \${blockedMsg}`;
            document.querySelector('.form-header').after(errorDiv);
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 691
        yield "            
            // Add floating elements dynamically
            const movingBackground = document.querySelector('.moving-background');
            if (movingBackground) {
                for (let i = 0; i < 3; i++) {
                    const element = document.createElement('div');
                    element.className = 'floating-element';
                    movingBackground.appendChild(element);
                }
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 705
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

        // line 706
        yield "    <div class=\"fullpage-bg\"></div>
    <div class=\"bg-overlay\"></div>
    <div class=\"moving-background\"></div>
        <div class=\"login-container\">
            <div class=\"login-image\">
                <div class=\"city-animation\"></div>
                <div class=\"login-image-content\">
                    <h2>Go Further Together</h2>
                    <p>Connect with fellow commuters and discover smarter ways to navigate your city with UrbanLink.</p>
                </div>
            </div>
            
            <div class=\"login-form-container\">
                <div class=\"form-header\">
                    <h1>Welcome Back</h1>
                    <p>Sign in to access your UrbanLink account</p>
                </div>

                ";
        // line 724
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 724, $this->source); })()), "user", [], "any", false, false, false, 724)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 725
            yield "                    <div class=\"alert alert-success\">
                        You are logged in as ";
            // line 726
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 726, $this->source); })()), "user", [], "any", false, false, false, 726), "userIdentifier", [], "any", false, false, false, 726), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                    </div>
                ";
        }
        // line 729
        yield "
                <form method=\"post\" id=\"loginForm\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"form-label\">Email</label>
                        <input
                            name=\"_username\"
                            id=\"inputEmail\"
                            class=\"form-control\"
                            placeholder=\"Enter your email\"
                            value=\"";
        // line 738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 738, $this->source); })()), "html", null, true);
        yield "\"
                            autofocus
                        >
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputPassword\" class=\"form-label\">Password</label>
                        <input
                            name=\"_password\"
                            id=\"inputPassword\"
                            class=\"form-control\"
                            placeholder=\"Enter your password\"
                            type=\"password\"
                        >
                    </div>

                    <!-- reCAPTCHA v2 Widget -->
                    <div class=\"recaptcha-container\">
                        <div class=\"g-recaptcha\" data-sitekey=\"";
        // line 756
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 756, $this->source); })()), "html", null, true);
        yield "\"></div>
                        <div id=\"recaptchaError\" class=\"error-text\" style=\"display: none;\"></div>
                    </div>
                    
                    ";
        // line 760
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 760, $this->source); })()), "flashes", ["error"], "method", false, false, false, 760));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 761
            yield "                        <div class=\"error-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashError"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashError'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 763
        yield "
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 764
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <button type=\"submit\" class=\"btn btn-primary btn-block\">
                        <i class=\"fas fa-sign-in-alt mr-2\"></i> Sign In
                    </button>
                </form>

                ";
        // line 771
        if ((($tmp = (isset($context["oauth_enabled"]) || array_key_exists("oauth_enabled", $context) ? $context["oauth_enabled"] : (function () { throw new RuntimeError('Variable "oauth_enabled" does not exist.', 771, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 772
            yield "                    <div class=\"divider\">
                        <span class=\"divider-text\">Or continue with</span>
                    </div>

                    <div class=\"social-buttons\">
                        ";
            // line 777
            if ((($tmp = (isset($context["oauth_google_enabled"]) || array_key_exists("oauth_google_enabled", $context) ? $context["oauth_google_enabled"] : (function () { throw new RuntimeError('Variable "oauth_google_enabled" does not exist.', 777, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 778
                yield "                            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_service_redirect", ["service" => "google"]);
                yield "\"
                               class=\"btn btn-social btn-google\">
                                <i class=\"fab fa-google\"></i> Google
                            </a>
                        ";
            }
            // line 783
            yield "                    </div>
                ";
        }
        // line 785
        yield "
                <div class=\"form-footer\">
                    <p>
                        Forgot your password?
                        <a href=\"";
        // line 789
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">Reset it here</a>
                    </p>
                    <p>
                        Don't have an account?
                        <a href=\"";
        // line 793
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
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
        return "auth/login/login.html.twig";
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
        return array (  995 => 793,  988 => 789,  982 => 785,  978 => 783,  969 => 778,  967 => 777,  960 => 772,  958 => 771,  948 => 764,  945 => 763,  936 => 761,  932 => 760,  925 => 756,  904 => 738,  893 => 729,  885 => 726,  882 => 725,  880 => 724,  860 => 706,  847 => 705,  824 => 691,  811 => 685,  807 => 684,  764 => 645,  751 => 644,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in to UrbanLink{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --primary: #3b82f6;
            --primary-light: #93c5fd;
            --primary-dark: #1d4ed8;
            --secondary: #10b981;
            --secondary-light: #6ee7b7;
            --accent: #f59e0b;
            --accent-light: #fcd34d;
            --dark: #1e293b;
            --dark-light: #334155;
            --light: #f8fafc;
            --light-dark: #e2e8f0;
            --danger: #ef4444;
            --danger-light: #fca5a5;
            --success: #22c55e;
            --success-light: #86efac;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --shadow-primary: 0 4px 14px 0 rgba(59, 130, 246, 0.3);
            --shadow-primary-hover: 0 6px 20px 0 rgba(59, 130, 246, 0.4);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, sans-serif;
        }
        
        body {
            background: transparent;
            color: var(--dark);
            min-height: 100vh;
            line-height: 1.6;
        }
        
        /* Enhanced Navbar with glass morphism */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: var(--shadow-sm);
            padding: 1rem 2rem;
            z-index: 100;
            border-radius: 0 0 16px 16px;
            transition: var(--transition);
        }
        
        .navbar.scrolled {
            box-shadow: var(--shadow);
            padding: 0.75rem 2rem;
        }
        
        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1280px;
            margin: 0 auto;
        }
        
        .logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--dark);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .logo:hover {
            color: var(--primary);
        }
        
        .logo img {
            height: 2rem;
            margin-right: 0.75rem;
            transition: transform 0.3s ease;
        }
        
        .logo:hover img {
            transform: rotate(-5deg) scale(1.05);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 1rem;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            color: var(--dark);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            transition: var(--transition);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            position: relative;
        }
        
        .nav-link:hover {
            color: var(--primary);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after {
            width: 60%;
        }
        
        .nav-link i {
            margin-right: 0.5rem;
            opacity: 0.75;
        }
        
        main {
            padding-top: 6rem;
            min-height: calc(100vh - 6rem);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Enhanced Login Container */
        .login-container {
            display: flex;
            flex-direction: row-reverse; /* Changed to row-reverse to swap positions */
            width: 96%;
            max-width: 1200px;
            margin: 2rem auto;
            box-shadow: var(--shadow-xl);
            border-radius: 24px;
            overflow: hidden;
            background: white;
            position: relative;
            transform: translateY(0);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        
        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }
        
        /* Login Form Container */
        .login-form-container {
            flex: 1;
            padding: 3rem;
            z-index: 2;
            animation: fadeIn 0.6s ease;
        }
        
        /* Enhanced Image Section with your requested image */
        .login-image {
            flex: 1;
            background-image: url('https://reneeroaming.com/wp-content/uploads/2020/08/Best-National-Park-Road-Trip-Itinerary-Grand-Teton-National-Park-Van-Life-819x1024.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 600px;
            overflow: hidden;
        }
        
        .login-image::before {
            content: \"\";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.85) 0%, rgba(16, 185, 129, 0.75) 100%);
            z-index: 1;
        }
        
        .login-image-content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            padding: 2rem;
            width: 90%;
            animation: fadeInUp 0.8s ease;
        }
        
        .login-image-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .login-image-content p {
            font-size: 1.125rem;
            line-height: 1.7;
            max-width: 80%;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }
        
        /* Form Header */
        .form-header {
            margin-bottom: 2.5rem;
            animation: fadeIn 0.6s ease;
        }
        
        .form-header h1 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 0.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }
        
        .form-header p {
            color: #64748b;
            font-size: 0.95rem;
        }
        
        /* Form Groups */
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        /* Enhanced Form Controls */
        .form-control {
            width: 100%;
            padding: 0.85rem 1.25rem;
            font-size: 0.95rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            transition: var(--transition);
            background-color: #f8fafc;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
            background-color: white;
        }
        
        .form-control::placeholder {
            color: #94a3b8;
            opacity: 1;
        }
        
        /* Button Styles */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 12px;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 1rem;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            box-shadow: var(--shadow-primary);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-primary-hover);
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-block {
            width: 100%;
        }
        
        /* Divider Styles */
        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            color: #94a3b8;
            position: relative;
            overflow: hidden;
        }
        
        .divider::before,
        .divider::after {
            content: \"\";
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
        }
        
        .divider-text {
            padding: 0 1rem;
            font-size: 0.875rem;
            background: white;
            position: relative;
            z-index: 1;
        }
        
        /* Social Buttons */
        .social-buttons {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        
        .btn-social {
            background-color: white;
            border: 1px solid #e2e8f0;
            color: var(--dark);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }
        
        .btn-social:hover {
            background-color: #f8fafc;
            transform: translateY(-2px);
            box-shadow: var(--shadow);
            border-color: var(--primary-light);
        }
        
        .btn-social i {
            margin-right: 0.75rem;
            font-size: 1.1rem;
        }
        
        .btn-google i {
            color: #ea4335;
        }
        
        /* Form Footer */
        .form-footer {
            margin-top: 2rem;
            text-align: center;
            animation: fadeIn 0.6s ease forwards;
            opacity: 0;
            animation-delay: 0.3s;
        }
        
        .form-footer p {
            color: #64748b;
            font-size: 0.875rem;
            margin-bottom: 0.75rem;
        }
        
        .form-footer a {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .form-footer a:hover {
            text-decoration: underline;
            color: var(--primary-dark);
        }
        
        /* Alert Styles */
        .alert {
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: 12px;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            animation: fadeIn 0.5s ease;
        }
        
        .alert i {
            margin-right: 0.75rem;
            font-size: 1.25rem;
        }
        
        .alert-success {
            background-color: rgba(34, 197, 94, 0.1);
            color: var(--success);
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
        
        .alert-danger {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger);
            border: 1px solid rgba(239, 68, 68, 0.2);
        }
        
        .error-text {
            color: var(--danger);
            font-size: 0.75rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
        }
        
        .error-text i {
            margin-right: 0.25rem;
            font-size: 0.9em;
        }
        
        /* reCAPTCHA Container */
        .recaptcha-container {
            margin-bottom: 1.5rem;
            animation: fadeIn 0.6s ease forwards;
            opacity: 0;
            animation-delay: 0.2s;
        }
        
        /* Background Animation */
        .moving-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .moving-background::before {
            content: \"\";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background-image: 
                radial-gradient(circle at 80% 30%, rgba(59, 130, 246, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 20% 80%, rgba(16, 185, 129, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 50% 50%, rgba(245, 158, 11, 0.08) 0%, transparent 30%);
            animation: backgroundMove 25s infinite linear;
        }

        /* Full-page background image */
        .fullpage-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background-image: url('https://wallpapercat.com/w/full/c/0/4/738962-3840x2160-desktop-4k-highway-background-photo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Overlay for background image */
        .bg-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.2) 0%, rgba(16, 185, 129, 0.15) 100%);
        }
        
        /* City Skyline Animation */
        .city-animation {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1000 200' preserveAspectRatio='none'%3E%3Cpath fill='rgba(255,255,255,0.25)' d='M0,200 L0,160 L30,160 L30,150 L45,150 L45,140 L60,140 L60,130 L75,130 L75,150 L90,150 L90,140 L105,140 L105,160 L120,160 L120,170 L135,170 L135,160 L150,160 L150,140 L165,140 L165,130 L180,130 L180,120 L195,120 L195,140 L210,140 L210,150 L225,150 L225,130 L240,130 L240,140 L255,140 L255,130 L270,130 L270,140 L285,140 L285,120 L300,120 L300,100 L315,100 L315,120 L330,120 L330,130 L345,130 L345,140 L360,140 L360,130 L375,130 L375,110 L390,110 L390,100 L405,100 L405,90 L420,90 L420,100 L435,100 L435,120 L450,120 L450,130 L465,130 L465,140 L480,140 L480,130 L495,130 L495,120 L510,120 L510,100 L525,100 L525,110 L540,110 L540,130 L555,130 L555,120 L570,120 L570,100 L585,100 L585,90 L600,90 L600,80 L615,80 L615,100 L630,100 L630,110 L645,110 L645,100 L660,100 L660,90 L675,90 L675,110 L690,110 L690,120 L705,120 L705,130 L720,130 L720,120 L735,120 L735,100 L750,100 L750,90 L765,90 L765,110 L780,110 L780,130 L795,130 L795,120 L810,120 L810,100 L825,100 L825,110 L840,110 L840,130 L855,130 L855,140 L870,140 L870,130 L885,130 L885,120 L900,120 L900,130 L915,130 L915,140 L930,140 L930,150 L945,150 L945,160 L960,160 L960,170 L975,170 L975,180 L990,180 L990,190 L1000,190 L1000,200 L0,200 Z'%3E%3C/path%3E%3C/svg%3E\");
            background-size: cover;
            z-index: 1;
            animation: cityMove 30s infinite linear;
        }
        
        /* Animations */
        @keyframes backgroundMove {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        
        @keyframes cityMove {
            0% {
                background-position-x: 0;
            }
            100% {
                background-position-x: 1000px;
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .login-image {
                display: none;
            }
            
            .login-form-container {
                padding: 2.5rem;
            }
            
            .login-container {
                width: 90%;
                margin: 1.5rem auto;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                padding: 0.75rem 1.5rem;
            }
            
            .login-form-container {
                padding: 2rem;
            }
            
            .form-header h1 {
                font-size: 1.75rem;
            }
        }
        
        @media (max-width: 576px) {
            .navbar {
                padding: 0.75rem 1rem;
            }
            
            .nav-links {
                gap: 0.5rem;
            }
            
            .nav-link {
                padding: 0.5rem;
            }
            
            .login-form-container {
                padding: 1.5rem;
            }
            
            .form-header h1 {
                font-size: 1.5rem;
            }
            
            .btn {
                padding: 0.85rem 1.5rem;
            }
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- reCAPTCHA v2 script -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add scroll effect to navbar
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 10) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                });
            }
            
            // Form submission validation
            const loginForm = document.getElementById('loginForm');
            if (loginForm) {
                loginForm.addEventListener('submit', function(e) {
                    const response = grecaptcha.getResponse();
                    if (response.length === 0) {
                        e.preventDefault();
                        
                        // Show error message
                        const errorDiv = document.getElementById('recaptchaError');
                        if (errorDiv) {
                            errorDiv.textContent = 'Please complete the reCAPTCHA verification';
                            errorDiv.style.display = 'block';
                        }
                        return false;
                    }
                    return true;
                });
            }
            
            // Show blocked user popup if flash message exists
            {% for message in app.flashes('blocked') %}
            const blockedMsg = '{{ message }}';
            const errorDiv = document.createElement('div');
            errorDiv.classList.add('alert', 'alert-danger');
            errorDiv.innerHTML = `<i class=\"fas fa-exclamation-circle\"></i> \${blockedMsg}`;
            document.querySelector('.form-header').after(errorDiv);
            {% endfor %}
            
            // Add floating elements dynamically
            const movingBackground = document.querySelector('.moving-background');
            if (movingBackground) {
                for (let i = 0; i < 3; i++) {
                    const element = document.createElement('div');
                    element.className = 'floating-element';
                    movingBackground.appendChild(element);
                }
            }
        });
    </script>
{% endblock %}

{% block body %}
    <div class=\"fullpage-bg\"></div>
    <div class=\"bg-overlay\"></div>
    <div class=\"moving-background\"></div>
        <div class=\"login-container\">
            <div class=\"login-image\">
                <div class=\"city-animation\"></div>
                <div class=\"login-image-content\">
                    <h2>Go Further Together</h2>
                    <p>Connect with fellow commuters and discover smarter ways to navigate your city with UrbanLink.</p>
                </div>
            </div>
            
            <div class=\"login-form-container\">
                <div class=\"form-header\">
                    <h1>Welcome Back</h1>
                    <p>Sign in to access your UrbanLink account</p>
                </div>

                {% if app.user %}
                    <div class=\"alert alert-success\">
                        You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                {% endif %}

                <form method=\"post\" id=\"loginForm\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail\" class=\"form-label\">Email</label>
                        <input
                            name=\"_username\"
                            id=\"inputEmail\"
                            class=\"form-control\"
                            placeholder=\"Enter your email\"
                            value=\"{{ last_username }}\"
                            autofocus
                        >
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputPassword\" class=\"form-label\">Password</label>
                        <input
                            name=\"_password\"
                            id=\"inputPassword\"
                            class=\"form-control\"
                            placeholder=\"Enter your password\"
                            type=\"password\"
                        >
                    </div>

                    <!-- reCAPTCHA v2 Widget -->
                    <div class=\"recaptcha-container\">
                        <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha_site_key }}\"></div>
                        <div id=\"recaptchaError\" class=\"error-text\" style=\"display: none;\"></div>
                    </div>
                    
                    {% for flashError in app.flashes('error') %}
                        <div class=\"error-text\">{{ flashError }}</div>
                    {% endfor %}

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                    <button type=\"submit\" class=\"btn btn-primary btn-block\">
                        <i class=\"fas fa-sign-in-alt mr-2\"></i> Sign In
                    </button>
                </form>

                {% if oauth_enabled %}
                    <div class=\"divider\">
                        <span class=\"divider-text\">Or continue with</span>
                    </div>

                    <div class=\"social-buttons\">
                        {% if oauth_google_enabled %}
                            <a href=\"{{ path('hwi_oauth_service_redirect', {'service': 'google'}) }}\"
                               class=\"btn btn-social btn-google\">
                                <i class=\"fab fa-google\"></i> Google
                            </a>
                        {% endif %}
                    </div>
                {% endif %}

                <div class=\"form-footer\">
                    <p>
                        Forgot your password?
                        <a href=\"{{ path('app_forgot_password_request') }}\">Reset it here</a>
                    </p>
                    <p>
                        Don't have an account?
                        <a href=\"{{ path('app_register') }}\">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
{% endblock %}", "auth/login/login.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\auth\\login\\login.html.twig");
    }
}
