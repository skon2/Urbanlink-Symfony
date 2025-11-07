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

/* auth/reset_password/reset_email.html.twig */
class __TwigTemplate_7d65dfb8d81eb0fe919649fc93b16cc0 extends Template
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
            'body_html' => [$this, 'block_body_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset_password/reset_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset_password/reset_email.html.twig"));

        // line 2
        yield from $this->unwrap()->yieldBlock('body_html', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_html(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_html"));

        // line 3
        yield "<!DOCTYPE html>
<html>
<head>
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
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: #f8fafc;
            padding: 20px;
            margin: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 1.25rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .email-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .email-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .email-body {
            padding: 2rem;
        }

        .code-container {
            margin: 2rem 0;
            text-align: center;
        }

        .code {
            display: inline-block;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 0.5rem;
            color: var(--primary);
            background: var(--light);
            padding: 1.5rem 2rem;
            border-radius: 0.75rem;
            margin: 1rem 0;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .footer {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
            font-size: 0.875rem;
            color: var(--gray);
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            text-decoration: none;
            border-radius: 0.5rem;
            font-weight: 600;
            margin: 1rem 0;
        }

        @media (max-width: 640px) {
            .email-container {
                border-radius: 0;
            }
            
            .code {
                font-size: 1.5rem;
                padding: 1rem;
                letter-spacing: 0.25rem;
            }
        }
    </style>
</head>
<body>
<div class=\"email-container\">
    <div class=\"email-header\">
        <h1 class=\"email-title\">Password Reset Request</h1>
    </div>

    <div class=\"email-body\">
        <p>Hello,</p>

        <p>You've requested to reset your password. Here's your verification code:</p>

        <div class=\"code-container\">
            <div class=\"code\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 117, $this->source); })()), "html", null, true);
        yield "</div>
        </div>

        <p>Enter this code on the password reset page to continue. This code will expire in 15 minutes.</p>

        <p>If you didn't request this password reset, please ignore this email or contact support if you have concerns.</p>

        <div class=\"footer\">
            <p>Best regards,<br><strong>The UrbanLink Team</strong></p>
            <p><small>This is an automated message - please do not reply directly to this email.</small></p>
        </div>
    </div>
</div>
</body>
</html>
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
        return "auth/reset_password/reset_email.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  188 => 117,  72 => 3,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/auth/reset_password/reset_email.html.twig #}
{% block body_html %}
<!DOCTYPE html>
<html>
<head>
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
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: #f8fafc;
            padding: 20px;
            margin: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 1.25rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .email-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .email-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .email-body {
            padding: 2rem;
        }

        .code-container {
            margin: 2rem 0;
            text-align: center;
        }

        .code {
            display: inline-block;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 0.5rem;
            color: var(--primary);
            background: var(--light);
            padding: 1.5rem 2rem;
            border-radius: 0.75rem;
            margin: 1rem 0;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .footer {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
            font-size: 0.875rem;
            color: var(--gray);
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            text-decoration: none;
            border-radius: 0.5rem;
            font-weight: 600;
            margin: 1rem 0;
        }

        @media (max-width: 640px) {
            .email-container {
                border-radius: 0;
            }
            
            .code {
                font-size: 1.5rem;
                padding: 1rem;
                letter-spacing: 0.25rem;
            }
        }
    </style>
</head>
<body>
<div class=\"email-container\">
    <div class=\"email-header\">
        <h1 class=\"email-title\">Password Reset Request</h1>
    </div>

    <div class=\"email-body\">
        <p>Hello,</p>

        <p>You've requested to reset your password. Here's your verification code:</p>

        <div class=\"code-container\">
            <div class=\"code\">{{ code }}</div>
        </div>

        <p>Enter this code on the password reset page to continue. This code will expire in 15 minutes.</p>

        <p>If you didn't request this password reset, please ignore this email or contact support if you have concerns.</p>

        <div class=\"footer\">
            <p>Best regards,<br><strong>The UrbanLink Team</strong></p>
            <p><small>This is an automated message - please do not reply directly to this email.</small></p>
        </div>
    </div>
</div>
</body>
</html>
{% endblock %}", "auth/reset_password/reset_email.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\auth\\reset_password\\reset_email.html.twig");
    }
}
