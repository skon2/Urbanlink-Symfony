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

/* auth/reset_password/request.html.twig */
class __TwigTemplate_3a7fadbe392aa6ca7c4283f53920956a extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset_password/request.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
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

        yield "Reset Password Request";
        
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
    <style>
        :root {
            --primary: #3b82f6;
            --primary-light: #93c5fd;
            --primary-dark: #1d4ed8;
            --secondary: #6366f1;
            --accent: #f59e0b;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #94a3b8;
            --danger: #ef4444;
            --success: #10b981;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-primary: 0 4px 14px 0 rgba(59, 130, 246, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background-color: #f1f5f9;
            min-height: 100vh;
            display: flex;
            color: var(--dark);
            line-height: 1.6;
        }

        /* Background animation */
        .auth-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .auth-bg::before {
            content: \"\";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.08) 0%, rgba(99, 102, 241, 0.06) 100%);
            animation: gradientShift 12s ease infinite;
            background-size: 200% 200%;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Auth container */
        .auth-container {
            width: 100%;
            max-width: 28rem;
            margin: auto;
            padding: 2rem;
            animation: fadeInUp 0.6s ease-out;
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

        /* Card styling */
        .auth-card {
            background: white;
            border-radius: 1.25rem;
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .auth-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        /* Header */
        .auth-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .auth-header::before {
            content: \"\";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            transform: rotate(30deg);
            animation: shine 3s infinite linear;
        }

        @keyframes shine {
            from { transform: translateX(-100%) rotate(30deg); }
            to { transform: translateX(100%) rotate(30deg); }
        }

        .auth-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
        }

        .auth-subtitle {
            opacity: 0.9;
            font-size: 0.9375rem;
            font-weight: 400;
            position: relative;
        }

        /* Body */
        .auth-body {
            padding: 2.5rem 2rem;
        }

        /* Form elements */
        .form-group {
            margin-bottom: 1.75rem;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--dark);
            margin-bottom: 0.5rem;
            transition: var(--transition);
        }

        .input-container {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1.25rem 1rem 3rem;
            border: 2px solid #e2e8f0;
            border-radius: 0.75rem;
            font-size: 0.9375rem;
            transition: var(--transition);
            background-color: #f8fafc;
            color: var(--dark);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
            background-color: white;
        }

        .input-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            transition: var(--transition);
        }

        .form-input:focus ~ .input-icon {
            color: var(--primary);
        }

        /* Button */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition);
            cursor: pointer;
            width: 100%;
            position: relative;
            overflow: hidden;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            box-shadow: var(--shadow-primary);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .btn-icon {
            margin-right: 0.75rem;
            font-size: 1.1rem;
        }

        /* Alert */
        .alert {
            padding: 1rem 1.25rem;
            border-radius: 0.75rem;
            margin-bottom: 1.75rem;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .alert-danger {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger);
            border-left: 4px solid var(--danger);
        }

        .alert-icon {
            margin-right: 0.75rem;
            font-size: 1.25rem;
        }

        /* Back link */
        .back-link {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-size: 0.9375rem;
            font-weight: 500;
            margin-top: 2rem;
            text-decoration: none;
            transition: var(--transition);
            justify-content: center;
        }

        .back-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .back-link i {
            margin-right: 0.5rem;
            transition: var(--transition);
        }

        .back-link:hover i {
            transform: translateX(-3px);
        }

        /* Responsive */
        @media (max-width: 640px) {
            .auth-container {
                padding: 1.5rem;
            }
            
            .auth-header {
                padding: 2rem 1.5rem;
            }
            
            .auth-body {
                padding: 2rem 1.5rem;
            }
            
            .auth-title {
                font-size: 1.5rem;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 316
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

        // line 317
        yield "    <div class=\"auth-bg\"></div>
    
    <div class=\"auth-container\">
        <div class=\"auth-card\">
            <div class=\"auth-header\">
                <h1 class=\"auth-title\">Reset Your Password</h1>
                <p class=\"auth-subtitle\">Enter your email to receive a reset link</p>
            </div>

            <div class=\"auth-body\">
                ";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 327, $this->source); })()), "flashes", ["reset_password_error"], "method", false, false, false, 327));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 328
            yield "                    <div class=\"alert alert-danger\">
                        <i class=\"fas fa-exclamation-circle alert-icon\"></i>
                        ";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        yield "
                ";
        // line 334
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 334, $this->source); })()), 'form_start');
        yield "
                    <div class=\"form-group\">
                        ";
        // line 336
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 336, $this->source); })()), "email", [], "any", false, false, false, 336), 'label', ["label_attr" => ["class" => "form-label"]]);
        // line 338
        yield "
                        <div class=\"input-container\">
                            ";
        // line 340
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 340, $this->source); })()), "email", [], "any", false, false, false, 340), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "your@email.com", "autocomplete" => "email"]]);
        // line 346
        yield "
                            <i class=\"fas fa-envelope input-icon\"></i>
                        </div>
                        ";
        // line 349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 349, $this->source); })()), "email", [], "any", false, false, false, 349), 'errors');
        yield "
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane btn-icon\"></i>
                        Send Reset Link
                    </button>
                ";
        // line 356
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 356, $this->source); })()), 'form_end');
        yield "

                <a href=\"";
        // line 358
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"back-link\">
                    <i class=\"fas fa-arrow-left\"></i>
                    Return to sign in
                </a>
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
        return "auth/reset_password/request.html.twig";
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
        return array (  499 => 358,  494 => 356,  484 => 349,  479 => 346,  477 => 340,  473 => 338,  471 => 336,  466 => 334,  463 => 333,  454 => 330,  450 => 328,  446 => 327,  434 => 317,  421 => 316,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/auth/reset_password/request.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Reset Password Request{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <style>
        :root {
            --primary: #3b82f6;
            --primary-light: #93c5fd;
            --primary-dark: #1d4ed8;
            --secondary: #6366f1;
            --accent: #f59e0b;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #94a3b8;
            --danger: #ef4444;
            --success: #10b981;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-primary: 0 4px 14px 0 rgba(59, 130, 246, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background-color: #f1f5f9;
            min-height: 100vh;
            display: flex;
            color: var(--dark);
            line-height: 1.6;
        }

        /* Background animation */
        .auth-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .auth-bg::before {
            content: \"\";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.08) 0%, rgba(99, 102, 241, 0.06) 100%);
            animation: gradientShift 12s ease infinite;
            background-size: 200% 200%;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Auth container */
        .auth-container {
            width: 100%;
            max-width: 28rem;
            margin: auto;
            padding: 2rem;
            animation: fadeInUp 0.6s ease-out;
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

        /* Card styling */
        .auth-card {
            background: white;
            border-radius: 1.25rem;
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .auth-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        /* Header */
        .auth-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .auth-header::before {
            content: \"\";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            transform: rotate(30deg);
            animation: shine 3s infinite linear;
        }

        @keyframes shine {
            from { transform: translateX(-100%) rotate(30deg); }
            to { transform: translateX(100%) rotate(30deg); }
        }

        .auth-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
        }

        .auth-subtitle {
            opacity: 0.9;
            font-size: 0.9375rem;
            font-weight: 400;
            position: relative;
        }

        /* Body */
        .auth-body {
            padding: 2.5rem 2rem;
        }

        /* Form elements */
        .form-group {
            margin-bottom: 1.75rem;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--dark);
            margin-bottom: 0.5rem;
            transition: var(--transition);
        }

        .input-container {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1.25rem 1rem 3rem;
            border: 2px solid #e2e8f0;
            border-radius: 0.75rem;
            font-size: 0.9375rem;
            transition: var(--transition);
            background-color: #f8fafc;
            color: var(--dark);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
            background-color: white;
        }

        .input-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            transition: var(--transition);
        }

        .form-input:focus ~ .input-icon {
            color: var(--primary);
        }

        /* Button */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition);
            cursor: pointer;
            width: 100%;
            position: relative;
            overflow: hidden;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            box-shadow: var(--shadow-primary);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .btn-icon {
            margin-right: 0.75rem;
            font-size: 1.1rem;
        }

        /* Alert */
        .alert {
            padding: 1rem 1.25rem;
            border-radius: 0.75rem;
            margin-bottom: 1.75rem;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .alert-danger {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger);
            border-left: 4px solid var(--danger);
        }

        .alert-icon {
            margin-right: 0.75rem;
            font-size: 1.25rem;
        }

        /* Back link */
        .back-link {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-size: 0.9375rem;
            font-weight: 500;
            margin-top: 2rem;
            text-decoration: none;
            transition: var(--transition);
            justify-content: center;
        }

        .back-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .back-link i {
            margin-right: 0.5rem;
            transition: var(--transition);
        }

        .back-link:hover i {
            transform: translateX(-3px);
        }

        /* Responsive */
        @media (max-width: 640px) {
            .auth-container {
                padding: 1.5rem;
            }
            
            .auth-header {
                padding: 2rem 1.5rem;
            }
            
            .auth-body {
                padding: 2rem 1.5rem;
            }
            
            .auth-title {
                font-size: 1.5rem;
            }
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"auth-bg\"></div>
    
    <div class=\"auth-container\">
        <div class=\"auth-card\">
            <div class=\"auth-header\">
                <h1 class=\"auth-title\">Reset Your Password</h1>
                <p class=\"auth-subtitle\">Enter your email to receive a reset link</p>
            </div>

            <div class=\"auth-body\">
                {% for flash_error in app.flashes('reset_password_error') %}
                    <div class=\"alert alert-danger\">
                        <i class=\"fas fa-exclamation-circle alert-icon\"></i>
                        {{ flash_error }}
                    </div>
                {% endfor %}

                {{ form_start(requestForm) }}
                    <div class=\"form-group\">
                        {{ form_label(requestForm.email, null, {
                            'label_attr': {'class': 'form-label'}
                        }) }}
                        <div class=\"input-container\">
                            {{ form_widget(requestForm.email, {
                                'attr': {
                                    'class': 'form-input',
                                    'placeholder': 'your@email.com',
                                    'autocomplete': 'email'
                                }
                            }) }}
                            <i class=\"fas fa-envelope input-icon\"></i>
                        </div>
                        {{ form_errors(requestForm.email) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane btn-icon\"></i>
                        Send Reset Link
                    </button>
                {{ form_end(requestForm) }}

                <a href=\"{{ path('app_login') }}\" class=\"back-link\">
                    <i class=\"fas fa-arrow-left\"></i>
                    Return to sign in
                </a>
            </div>
        </div>
    </div>
{% endblock %}", "auth/reset_password/request.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\auth\\reset_password\\request.html.twig");
    }
}
