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

/* auth/reset_password/reset_password.html.twig */
class __TwigTemplate_89b3d4d90749cc622ff361805463f80d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset_password/reset_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset_password/reset_password.html.twig"));

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

        yield "Reset Your Password";
        
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

        /* Password strength indicator */
        .password-strength {
            height: 4px;
            background: #e2e8f0;
            border-radius: 2px;
            margin-top: 0.5rem;
            overflow: hidden;
        }

        .strength-meter {
            height: 100%;
            width: 0;
            transition: width 0.3s ease, background-color 0.3s ease;
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

    // line 304
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

        // line 305
        yield "    <div class=\"auth-bg\"></div>
    
    <div class=\"auth-container\">
        <div class=\"auth-card\">
            <div class=\"auth-header\">
                <h1 class=\"auth-title\">Reset Your Password</h1>
                <p class=\"auth-subtitle\">Create a new secure password</p>
            </div>

            <div class=\"auth-body\">
                ";
        // line 315
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 315, $this->source); })()), 'form_start');
        yield "
                    <div class=\"form-group\">
                        ";
        // line 317
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 317, $this->source); })()), "plainPassword", [], "any", false, false, false, 317), "first", [], "any", false, false, false, 317), 'label', ["label_attr" => ["class" => "form-label"]]);
        // line 319
        yield "
                        <div class=\"input-container\">
                            ";
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 321, $this->source); })()), "plainPassword", [], "any", false, false, false, 321), "first", [], "any", false, false, false, 321), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Enter new password", "autocomplete" => "new-password"]]);
        // line 327
        yield "
                            <i class=\"fas fa-lock input-icon\"></i>
                        </div>
                        ";
        // line 330
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 330, $this->source); })()), "plainPassword", [], "any", false, false, false, 330), "first", [], "any", false, false, false, 330), 'errors');
        yield "
                        <div class=\"password-strength\">
                            <div class=\"strength-meter\" id=\"passwordStrength\"></div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 337
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 337, $this->source); })()), "plainPassword", [], "any", false, false, false, 337), "second", [], "any", false, false, false, 337), 'label', ["label_attr" => ["class" => "form-label"]]);
        // line 339
        yield "
                        <div class=\"input-container\">
                            ";
        // line 341
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 341, $this->source); })()), "plainPassword", [], "any", false, false, false, 341), "second", [], "any", false, false, false, 341), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Confirm new password", "autocomplete" => "new-password"]]);
        // line 347
        yield "
                            <i class=\"fas fa-lock input-icon\"></i>
                        </div>
                        ";
        // line 350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 350, $this->source); })()), "plainPassword", [], "any", false, false, false, 350), "second", [], "any", false, false, false, 350), 'errors');
        yield "
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-sync-alt btn-icon\"></i>
                        Reset Password
                    </button>
                ";
        // line 357
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 357, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.querySelector('#";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 364, $this->source); })()), "plainPassword", [], "any", false, false, false, 364), "first", [], "any", false, false, false, 364), "vars", [], "any", false, false, false, 364), "id", [], "any", false, false, false, 364), "html", null, true);
        yield "');
            const strengthMeter = document.getElementById('passwordStrength');
            
            if (passwordInput && strengthMeter) {
                passwordInput.addEventListener('input', function() {
                    const password = this.value;
                    let strength = 0;
                    
                    // Length check
                    if (password.length > 0) strength += 20;
                    if (password.length >= 8) strength += 20;
                    
                    // Complexity checks
                    if (/[A-Z]/.test(password)) strength += 20;
                    if (/[0-9]/.test(password)) strength += 20;
                    if (/[^A-Za-z0-9]/.test(password)) strength += 20;
                    
                    // Update meter
                    strengthMeter.style.width = strength + '%';
                    
                    // Update color based on strength
                    if (strength < 40) {
                        strengthMeter.style.backgroundColor = 'var(--danger)';
                    } else if (strength < 80) {
                        strengthMeter.style.backgroundColor = 'var(--accent)';
                    } else {
                        strengthMeter.style.backgroundColor = 'var(--success)';
                    }
                });
            }
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
        return "auth/reset_password/reset_password.html.twig";
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
        return array (  495 => 364,  485 => 357,  475 => 350,  470 => 347,  468 => 341,  464 => 339,  462 => 337,  452 => 330,  447 => 327,  445 => 321,  441 => 319,  439 => 317,  434 => 315,  422 => 305,  409 => 304,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/auth/reset_password/reset_password.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Reset Your Password{% endblock %}

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

        /* Password strength indicator */
        .password-strength {
            height: 4px;
            background: #e2e8f0;
            border-radius: 2px;
            margin-top: 0.5rem;
            overflow: hidden;
        }

        .strength-meter {
            height: 100%;
            width: 0;
            transition: width 0.3s ease, background-color 0.3s ease;
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
                <p class=\"auth-subtitle\">Create a new secure password</p>
            </div>

            <div class=\"auth-body\">
                {{ form_start(resetForm) }}
                    <div class=\"form-group\">
                        {{ form_label(resetForm.plainPassword.first, null, {
                            'label_attr': {'class': 'form-label'}
                        }) }}
                        <div class=\"input-container\">
                            {{ form_widget(resetForm.plainPassword.first, {
                                'attr': {
                                    'class': 'form-input',
                                    'placeholder': 'Enter new password',
                                    'autocomplete': 'new-password'
                                }
                            }) }}
                            <i class=\"fas fa-lock input-icon\"></i>
                        </div>
                        {{ form_errors(resetForm.plainPassword.first) }}
                        <div class=\"password-strength\">
                            <div class=\"strength-meter\" id=\"passwordStrength\"></div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(resetForm.plainPassword.second, null, {
                            'label_attr': {'class': 'form-label'}
                        }) }}
                        <div class=\"input-container\">
                            {{ form_widget(resetForm.plainPassword.second, {
                                'attr': {
                                    'class': 'form-input',
                                    'placeholder': 'Confirm new password',
                                    'autocomplete': 'new-password'
                                }
                            }) }}
                            <i class=\"fas fa-lock input-icon\"></i>
                        </div>
                        {{ form_errors(resetForm.plainPassword.second) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-sync-alt btn-icon\"></i>
                        Reset Password
                    </button>
                {{ form_end(resetForm) }}
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.querySelector('#{{ resetForm.plainPassword.first.vars.id }}');
            const strengthMeter = document.getElementById('passwordStrength');
            
            if (passwordInput && strengthMeter) {
                passwordInput.addEventListener('input', function() {
                    const password = this.value;
                    let strength = 0;
                    
                    // Length check
                    if (password.length > 0) strength += 20;
                    if (password.length >= 8) strength += 20;
                    
                    // Complexity checks
                    if (/[A-Z]/.test(password)) strength += 20;
                    if (/[0-9]/.test(password)) strength += 20;
                    if (/[^A-Za-z0-9]/.test(password)) strength += 20;
                    
                    // Update meter
                    strengthMeter.style.width = strength + '%';
                    
                    // Update color based on strength
                    if (strength < 40) {
                        strengthMeter.style.backgroundColor = 'var(--danger)';
                    } else if (strength < 80) {
                        strengthMeter.style.backgroundColor = 'var(--accent)';
                    } else {
                        strengthMeter.style.backgroundColor = 'var(--success)';
                    }
                });
            }
        });
    </script>
{% endblock %}", "auth/reset_password/reset_password.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\auth\\reset_password\\reset_password.html.twig");
    }
}
