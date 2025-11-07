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

/* maintenance/index.html.twig */
class __TwigTemplate_ad166046fa46791cfc1adec16b05d29f extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->load((isset($context["baseTemplate"]) || array_key_exists("baseTemplate", $context) ? $context["baseTemplate"] : (function () { throw new RuntimeError('Variable "baseTemplate" does not exist.', 1, $this->source); })()), 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/index.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "Maintenance Management";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    :root {
        --primary: #4361ee;
        --primary-light: #4361ee15;
        --primary-dark: #2f3e9e;
        --secondary: #3f37c9;
        --accent: #4895ef;
        --light: #f8f9fa;
        --dark: #212529;
        --gray: #6c757d;
        --gray-light: #e9ecef;
        --success: #10b981;
        --success-light: #10b98115;
        --danger: #ef4444;
        --danger-light: #ef444415;
        --warning: #f59e0b;
        --warning-light: rgba(245, 158, 11, 0.1);
        --info: #560bad;
        --border-radius: 12px;
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 20px rgba(0, 0, 0, 0.08);
        --shadow-lg: 0 10px 30px rgba(0, 0, 0, 0.1);
        --transition: all 0.25s ease;
    }
    
    body {
        font-family: 'Inter', 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        background: linear-gradient(135deg, #f5f7fb 0%, #eef1f8 100%);
        color: var(--dark);
        line-height: 1.6;
        min-height: 100vh;
        padding-bottom: 3rem;
    }
    
    .container {
        max-width: 1280px;
        margin: 2rem auto;
        padding: 0 1.5rem;
    }
    
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2.5rem;
        background: white;
        padding: 1.5rem 2rem;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
        position: relative;
        overflow: hidden;
    }
    
    .page-header::before {
        content: \"\";
        position: absolute;
        top: 0;
        left: 0;
        width: 8px;
        height: 100%;
        background: var(--primary);
    }
    
    .page-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin: 0;
    }
    
    .page-title svg {
        width: 32px;
        height: 32px;
        color: var(--primary);
    }
    
    .card {
        background: white;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
        padding: 2rem;
        margin-bottom: 2rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .search-form {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 2rem;
        padding: 1.5rem;
        background: var(--light);
        border-radius: var(--border-radius);
        border: 1px solid var(--gray-light);
    }
    
    .search-form select,
    .search-form input {
        padding: 0.75rem 1rem;
        border-radius: 8px;
        border: 1px solid #dee2e6;
        font-size: 0.95rem;
        min-width: 220px;
        background-color: white;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }
    
    .search-form select:focus,
    .search-form input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px var(--primary-light);
    }
    
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: var(--transition);
        border: none;
        font-size: 0.95rem;
        gap: 0.5rem;
        position: relative;
        overflow: hidden;
    }
    
    .btn::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        background-image: radial-gradient(circle, #fff 10%, transparent 10.01%);
        background-repeat: no-repeat;
        background-position: 50%;
        transform: scale(10, 10);
        opacity: 0;
        transition: transform 0.5s, opacity 1s;
    }
    
    .btn:active::after {
        transform: scale(0, 0);
        opacity: 0.3;
        transition: 0s;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
    }
    
    .btn-primary:hover {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--secondary) 100%);
        box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
        transform: translateY(-2px);
    }
    
    .btn-secondary {
        background-color: var(--light);
        color: var(--dark);
        border: 1px solid #dee2e6;
    }
    
    .btn-secondary:hover {
        background-color: #e9ecef;
        box-shadow: var(--shadow-sm);
    }
    
    .btn-danger {
        background: linear-gradient(135deg, var(--danger) 0%, #dc2626 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
    }
    
    .btn-danger:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        box-shadow: 0 6px 15px rgba(239, 68, 68, 0.4);
        transform: translateY(-2px);
    }
    
    .table-container {
        overflow-x: auto;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
    }
    
    .data-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        overflow: hidden;
    }
    
    .data-table thead {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
    }
    
    .data-table th {
        padding: 1.25rem 1.5rem;
        text-align: left;
        font-weight: 600;
        letter-spacing: 0.03em;
        text-transform: uppercase;
        font-size: 0.85rem;
    }
    
    .data-table th:first-child {
        border-top-left-radius: var(--border-radius);
    }
    
    .data-table th:last-child {
        border-top-right-radius: var(--border-radius);
    }
    
    .data-table td {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #eee;
        font-size: 0.95rem;
    }
    
    .data-table tbody tr:last-child td {
        border-bottom: none;
    }
    
    .data-table tbody tr {
        transition: var(--transition);
        background-color: white;
    }
    
    .data-table tbody tr:hover {
        background-color: var(--primary-light);
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
    }
    
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        box-shadow: var(--shadow-sm);
    }
    
    .status-0 { 
        background-color: var(--success-light); 
        color: var(--success); 
        border: 1px solid rgba(16, 185, 129, 0.2);
    }
    
    .status-1 { 
        background-color: var(--warning-light); 
        color: var(--warning); 
        border: 1px solid rgba(245, 158, 11, 0.2);
    }
    
    .status-2 { 
        background-color: var(--danger-light); 
        color: var(--danger); 
        border: 1px solid rgba(239, 68, 68, 0.2);
    }
    
    .actions {
        display: flex;
        gap: 0.75rem;
    }
    
    .actions .btn {
        padding: 0.5rem;
        width: 36px;
        height: 36px;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: var(--gray);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: var(--light);
        border-radius: var(--border-radius);
        min-height: 300px;
    }
    
    .empty-state svg {
        width: 64px;
        height: 64px;
        margin-bottom: 1.5rem;
        opacity: 0.6;
        color: var(--primary);
    }
    
    .empty-state p {
        font-size: 1.1rem;
        font-weight: 500;
        margin-bottom: 1.5rem;
    }
    
    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2.5rem;
    }
    
    .stat-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        display: flex;
        align-items: center;
        gap: 1rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: var(--transition);
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .stat-icon {
        width: 48px;
        height: 48px;
        background: var(--primary-light);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        flex-shrink: 0;
    }
    
    .stat-icon svg {
        width: 24px;
        height: 24px;
    }
    
    .stat-content {
        display: flex;
        flex-direction: column;
    }
    
    .stat-label {
        font-size: 0.85rem;
        color: var(--gray);
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .stat-value {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--dark);
        margin-top: 0.25rem;
    }
    
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .page-header, .card, .stats-container {
        animation: fadeIn 0.5s ease forwards;
    }
    
    .stats-container {
        animation-delay: 0.1s;
    }
    
    .card {
        animation-delay: 0.2s;
    }
    
    /* Fancy header with gradient text */
    .gradient-text {
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        margin-left: 8px;
    }
    
    /* Tooltip for buttons */
    [title] {
        position: relative;
    }
    
    [title]:hover::after {
        content: attr(title);
        position: absolute;
        top: -40px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--dark);
        color: white;
        padding: 0.5rem 0.75rem;
        border-radius: 6px;
        font-size: 0.75rem;
        white-space: nowrap;
        pointer-events: none;
        z-index: 10;
    }
    
    [title]:hover::before {
        content: '';
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 5px;
        border-style: solid;
        border-color: var(--dark) transparent transparent transparent;
        pointer-events: none;
        z-index: 10;
    }
    
    /* Additional styling for maintenance status */
    .warning-light {
        background-color: rgba(245, 158, 11, 0.1);
    }
    
    /* Ripple effect for buttons */
    .ripple {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        width: 100px;
        height: 100px;
        margin-top: -50px;
        margin-left: -50px;
        animation: ripple 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple {
        from {
            opacity: 1;
            transform: scale(0);
        }
        to {
            opacity: 0;
            transform: scale(3);
        }
    }

    .btn-excel {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(16, 185, 129, 0.3);
    }
    
    .btn-excel:hover {
        background: linear-gradient(135deg, #059669 0%, #047857 100%);
        box-shadow: 0 6px 15px rgba(16, 185, 129, 0.4);
        transform: translateY(-2px);
    }

    .export-container {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 1.5rem;
    }

    .sorting-container {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 1.5rem;
    }

    .sorting-container .btn-group {
        box-shadow: 0 4px 10px rgba(94, 96, 206, 0.1);
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .sorting-container .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        white-space: nowrap;
    }

    .sorting-container .btn.active {
        background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        border-color: transparent;
    }

    .sorting-container .btn svg {
        width: 14px;
        height: 14px;
    }
</style>

<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"page-title\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
            </svg>
            Maintenance <span class=\"gradient-text\">Management</span>
        </h1>
        <div>
            <a href=\"";
        // line 531
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maintenance_export_excel");
        yield "\" class=\"btn btn-excel\" style=\"margin-right: 1rem;\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path>
                    <polyline points=\"14 2 14 8 20 8\"></polyline>
                    <path d=\"M16 13H8\"></path>
                    <path d=\"M16 17H8\"></path>
                    <polyline points=\"10 9 9 9 8 9\"></polyline>
                </svg>
                Export to Excel
            </a>
        </div>
    </div>

    <div class=\"stats-container\">
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Total Records</span>
                <span class=\"stat-value\">";
        // line 556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 556, $this->source); })())), "html", null, true);
        yield "</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                    <polyline points=\"12 6 12 12 16 14\"></polyline>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Not In Maintenance</span>
                <span class=\"stat-value\">";
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 569, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 569, $this->source); })()), "status", [], "any", false, false, false, 569) == 0); })), "html", null, true);
        yield "</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">In Maintenance</span>
                <span class=\"stat-value\">";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 581, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 581, $this->source); })()), "status", [], "any", false, false, false, 581) == 1); })), "html", null, true);
        yield "</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <polygon points=\"12 2 2 7 12 12 22 7 12 2\"></polygon>
                    <polyline points=\"2 17 12 22 22 17\"></polyline>
                    <polyline points=\"2 12 12 17 22 12\"></polyline>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Reserved</span>
                <span class=\"stat-value\">";
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 595, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 595, $this->source); })()), "status", [], "any", false, false, false, 595) == 2); })), "html", null, true);
        yield "</span>
            </div>
        </div>
    </div>

    <div class=\"card\">
        <form method=\"GET\" action=\"";
        // line 601
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maintenance_index");
        yield "\" class=\"search-form\">
            <select name=\"category\" class=\"search-category\" onchange=\"this.form.submit()\">
                <option value=\"\">Select Search Category</option>
                <option value=\"vehicle\" ";
        // line 604
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 604, $this->source); })()) == "vehicle")) {
            yield "selected";
        }
        yield ">Vehicle</option>
                <option value=\"service\" ";
        // line 605
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 605, $this->source); })()) == "service")) {
            yield "selected";
        }
        yield ">Service Type</option>
            </select>

            ";
        // line 608
        if (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 608, $this->source); })()) == "vehicle")) {
            // line 609
            yield "                <select name=\"search\" class=\"search-input\" onchange=\"this.form.submit()\">
                    <option value=\"\">Select a Vehicle</option>
                    ";
            // line 611
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 611, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
                // line 612
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 612), "html", null, true);
                yield "\" ";
                if (((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 612, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 612))) {
                    yield "selected";
                }
                yield ">
                            ";
                // line 613
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "type", [], "any", false, false, false, 613), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "brand", [], "any", false, false, false, 613), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 613), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "licensePlate", [], "any", false, false, false, 613), "html", null, true);
                yield ")
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['vehicle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 616
            yield "                </select>
            ";
        } elseif ((        // line 617
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 617, $this->source); })()) == "service")) {
            // line 618
            yield "                <select name=\"search\" class=\"search-input\" onchange=\"this.form.submit()\">
                    <option value=\"\">Select a Service</option>
                    ";
            // line 620
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 620, $this->source); })()));
            foreach ($context['_seq'] as $context["serviceType"] => $context["serviceData"]) {
                // line 621
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["serviceType"], "html", null, true);
                yield "\" ";
                if (((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 621, $this->source); })()) == $context["serviceType"])) {
                    yield "selected";
                }
                yield ">
                            ";
                // line 622
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["serviceType"], "html", null, true);
                yield "
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['serviceType'], $context['serviceData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 625
            yield "                </select>
            ";
        } elseif ((        // line 626
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 626, $this->source); })()) == "provider")) {
            // line 627
            yield "                <select name=\"search\" class=\"search-input\" onchange=\"this.form.submit()\">
                    <option value=\"\">Select a Provider</option>
                    ";
            // line 629
            $context["allProviders"] = [];
            // line 630
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 630, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 631
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "providers", [], "any", false, false, false, 631));
                foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                    // line 632
                    yield "                            ";
                    if (!CoreExtension::inFilter($context["provider"], (isset($context["allProviders"]) || array_key_exists("allProviders", $context) ? $context["allProviders"] : (function () { throw new RuntimeError('Variable "allProviders" does not exist.', 632, $this->source); })()))) {
                        // line 633
                        yield "                                ";
                        $context["allProviders"] = Twig\Extension\CoreExtension::merge((isset($context["allProviders"]) || array_key_exists("allProviders", $context) ? $context["allProviders"] : (function () { throw new RuntimeError('Variable "allProviders" does not exist.', 633, $this->source); })()), [$context["provider"]]);
                        // line 634
                        yield "                            ";
                    }
                    // line 635
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['provider'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 636
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['service'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 637
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allProviders"]) || array_key_exists("allProviders", $context) ? $context["allProviders"] : (function () { throw new RuntimeError('Variable "allProviders" does not exist.', 637, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                // line 638
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 638), "html", null, true);
                yield "\" ";
                if (((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 638, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 638))) {
                    yield "selected";
                }
                yield ">
                            ";
                // line 639
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "name", [], "any", false, false, false, 639), "html", null, true);
                yield "
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['provider'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 642
            yield "                </select>
            ";
        }
        // line 644
        yield "            
            ";
        // line 645
        if ((($tmp = (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 645, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 646
            yield "                <button type=\"submit\" class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                        <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
                    </svg>
                    Search
                </button>
            ";
        }
        // line 654
        yield "        </form>

        ";
        // line 657
        yield "        <div class=\"sorting-container\">
        <div class=\"btn-group\" role=\"group\">
            <a href=\"";
        // line 659
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenances_index", ["sort" => "date_asc", "category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 659, $this->source); })()), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 659, $this->source); })())]), "html", null, true);
        yield "\" 
            class=\"btn btn-outline-primary ";
        // line 660
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 660, $this->source); })()), "request", [], "any", false, false, false, 660), "query", [], "any", false, false, false, 660), "get", ["sort"], "method", false, false, false, 660) == "date_asc")) ? ("active") : (""));
        yield "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z\"></path>
                </svg>
                Date (Oldest)
            </a>
            <a href=\"";
        // line 666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenances_index", ["sort" => "date_desc", "category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 666, $this->source); })()), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 666, $this->source); })())]), "html", null, true);
        yield "\" 
            class=\"btn btn-outline-primary ";
        // line 667
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 667, $this->source); })()), "request", [], "any", false, false, false, 667), "query", [], "any", false, false, false, 667), "get", ["sort"], "method", false, false, false, 667) == "date_desc")) ? ("active") : (""));
        yield "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z\"></path>
                </svg>
                Date (Newest)
            </a>
            <a href=\"";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenances_index", ["sort" => "price_asc", "category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 673, $this->source); })()), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 673, $this->source); })())]), "html", null, true);
        yield "\" 
            class=\"btn btn-outline-primary ";
        // line 674
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 674, $this->source); })()), "request", [], "any", false, false, false, 674), "query", [], "any", false, false, false, 674), "get", ["sort"], "method", false, false, false, 674) == "price_asc")) ? ("active") : (""));
        yield "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <line x1=\"7\" y1=\"17\" x2=\"17\" y2=\"17\"></line>
                    <line x1=\"7\" y1=\"12\" x2=\"17\" y2=\"12\"></line>
                    <line x1=\"7\" y1=\"7\" x2=\"17\" y2=\"7\"></line>
                    <polyline points=\"17 4 21 8 17 12\"></polyline>
                </svg>
                Price (Low to High)
            </a>
            <a href=\"";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenances_index", ["sort" => "price_desc", "category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 683, $this->source); })()), "search" => (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 683, $this->source); })())]), "html", null, true);
        yield "\" 
            class=\"btn btn-outline-primary ";
        // line 684
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 684, $this->source); })()), "request", [], "any", false, false, false, 684), "query", [], "any", false, false, false, 684), "get", ["sort"], "method", false, false, false, 684) == "price_desc")) ? ("active") : (""));
        yield "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <line x1=\"7\" y1=\"17\" x2=\"17\" y2=\"17\"></line>
                    <line x1=\"7\" y1=\"12\" x2=\"17\" y2=\"12\"></line>
                    <line x1=\"7\" y1=\"7\" x2=\"17\" y2=\"7\"></line>
                    <polyline points=\"21 16 17 12 21 8\"></polyline>
                </svg>
                Price (High to Low)
            </a>
        </div>
        </div>

        ";
        // line 696
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 696, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 697
            yield "            <div class=\"table-container\">
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vehicle</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Provider</th>
                            <th>Cost</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 712
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["maintenances"]) || array_key_exists("maintenances", $context) ? $context["maintenances"] : (function () { throw new RuntimeError('Variable "maintenances" does not exist.', 712, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["maintenance"]) {
                // line 713
                yield "                            <tr>
                                <td>";
                // line 714
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 714), "html", null, true);
                yield "</td>
                                <td>
                                    <a href=\"";
                // line 716
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicle_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "vehicle", [], "any", false, false, false, 716), "id", [], "any", false, false, false, 716)]), "html", null, true);
                yield "\" style=\"color: var(--primary); text-decoration: none; font-weight: 500;\">
                                        ";
                // line 717
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "vehicle", [], "any", false, false, false, 717), "brand", [], "any", false, false, false, 717), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "vehicle", [], "any", false, false, false, 717), "model", [], "any", false, false, false, 717), "html", null, true);
                yield "
                                    </a>
                                </td>
                                <td>";
                // line 720
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "maintenanceDate", [], "any", false, false, false, 720), "Y-m-d"), "html", null, true);
                yield "</td>
                                <td>";
                // line 721
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "serviceType", [], "any", false, false, false, 721), "html", null, true);
                yield "</td>
                                <td>";
                // line 722
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "serviceProvider", [], "any", false, false, false, 722), "html", null, true);
                yield "</td>
                                <td>";
                // line 723
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "cost", [], "any", false, false, false, 723), "html", null, true);
                yield " TND</td>
                                <td>
                                    <span class=\"status-badge status-";
                // line 725
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "status", [], "any", false, false, false, 725), "html", null, true);
                yield "\">
                                        ";
                // line 726
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "status", [], "any", false, false, false, 726) == 0)) {
                    // line 727
                    yield "                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                                <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                                            </svg>
                                            Not in maintenance
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 732
$context["maintenance"], "status", [], "any", false, false, false, 732) == 1)) {
                    // line 733
                    yield "                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                                            </svg>
                                            In maintenance
                                        ";
                } else {
                    // line 738
                    yield "                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                <line x1=\"8\" y1=\"12\" x2=\"16\" y2=\"12\"></line>
                                            </svg>
                                            Reserved
                                        ";
                }
                // line 744
                yield "                                    </span>
                                </td>
                                <td>
                                    <div class=\"actions\">
                                        <a href=\"";
                // line 748
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maintenance_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 748)]), "html", null, true);
                yield "\" class=\"btn btn-secondary\" title=\"View Details\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path>
                                                <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
                                            </svg>
                                        </a>
                                        <a href=\"";
                // line 754
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenances_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 754)]), "html", null, true);
                yield "\" class=\"btn btn-primary\" title=\"Edit Record\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                                                <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                                            </svg>
                                        </a>
                                        <form method=\"post\" action=\"";
                // line 760
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenances_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 760)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure you want to delete this maintenance record?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 761
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["maintenance"], "id", [], "any", false, false, false, 761))), "html", null, true);
                yield "\">
                                            <button class=\"btn btn-danger\" title=\"Delete Record\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                    <polyline points=\"3 6 5 6 21 6\"></polyline>
                                                    <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['maintenance'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 773
            yield "                    </tbody>
                </table>
            </div>
        ";
        } else {
            // line 777
            yield "            <div class=\"empty-state\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                    <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                    <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                </svg>
                <p>No maintenance records found.
            </div>
        ";
        }
        // line 786
        yield "    </div>
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
        return "maintenance/index.html.twig";
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
        return array (  1102 => 786,  1091 => 777,  1085 => 773,  1067 => 761,  1063 => 760,  1054 => 754,  1045 => 748,  1039 => 744,  1031 => 738,  1024 => 733,  1022 => 732,  1015 => 727,  1013 => 726,  1009 => 725,  1004 => 723,  1000 => 722,  996 => 721,  992 => 720,  984 => 717,  980 => 716,  975 => 714,  972 => 713,  968 => 712,  951 => 697,  949 => 696,  934 => 684,  930 => 683,  918 => 674,  914 => 673,  905 => 667,  901 => 666,  892 => 660,  888 => 659,  884 => 657,  880 => 654,  870 => 646,  868 => 645,  865 => 644,  861 => 642,  852 => 639,  843 => 638,  838 => 637,  832 => 636,  826 => 635,  823 => 634,  820 => 633,  817 => 632,  812 => 631,  807 => 630,  805 => 629,  801 => 627,  799 => 626,  796 => 625,  787 => 622,  778 => 621,  774 => 620,  770 => 618,  768 => 617,  765 => 616,  750 => 613,  741 => 612,  737 => 611,  733 => 609,  731 => 608,  723 => 605,  717 => 604,  711 => 601,  702 => 595,  685 => 581,  670 => 569,  654 => 556,  626 => 531,  99 => 6,  86 => 5,  63 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends baseTemplate %}

{% block title %}Maintenance Management{% endblock %}

{% block body %}
<style>
    :root {
        --primary: #4361ee;
        --primary-light: #4361ee15;
        --primary-dark: #2f3e9e;
        --secondary: #3f37c9;
        --accent: #4895ef;
        --light: #f8f9fa;
        --dark: #212529;
        --gray: #6c757d;
        --gray-light: #e9ecef;
        --success: #10b981;
        --success-light: #10b98115;
        --danger: #ef4444;
        --danger-light: #ef444415;
        --warning: #f59e0b;
        --warning-light: rgba(245, 158, 11, 0.1);
        --info: #560bad;
        --border-radius: 12px;
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 20px rgba(0, 0, 0, 0.08);
        --shadow-lg: 0 10px 30px rgba(0, 0, 0, 0.1);
        --transition: all 0.25s ease;
    }
    
    body {
        font-family: 'Inter', 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        background: linear-gradient(135deg, #f5f7fb 0%, #eef1f8 100%);
        color: var(--dark);
        line-height: 1.6;
        min-height: 100vh;
        padding-bottom: 3rem;
    }
    
    .container {
        max-width: 1280px;
        margin: 2rem auto;
        padding: 0 1.5rem;
    }
    
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2.5rem;
        background: white;
        padding: 1.5rem 2rem;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
        position: relative;
        overflow: hidden;
    }
    
    .page-header::before {
        content: \"\";
        position: absolute;
        top: 0;
        left: 0;
        width: 8px;
        height: 100%;
        background: var(--primary);
    }
    
    .page-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin: 0;
    }
    
    .page-title svg {
        width: 32px;
        height: 32px;
        color: var(--primary);
    }
    
    .card {
        background: white;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
        padding: 2rem;
        margin-bottom: 2rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .search-form {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 2rem;
        padding: 1.5rem;
        background: var(--light);
        border-radius: var(--border-radius);
        border: 1px solid var(--gray-light);
    }
    
    .search-form select,
    .search-form input {
        padding: 0.75rem 1rem;
        border-radius: 8px;
        border: 1px solid #dee2e6;
        font-size: 0.95rem;
        min-width: 220px;
        background-color: white;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }
    
    .search-form select:focus,
    .search-form input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px var(--primary-light);
    }
    
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: var(--transition);
        border: none;
        font-size: 0.95rem;
        gap: 0.5rem;
        position: relative;
        overflow: hidden;
    }
    
    .btn::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        background-image: radial-gradient(circle, #fff 10%, transparent 10.01%);
        background-repeat: no-repeat;
        background-position: 50%;
        transform: scale(10, 10);
        opacity: 0;
        transition: transform 0.5s, opacity 1s;
    }
    
    .btn:active::after {
        transform: scale(0, 0);
        opacity: 0.3;
        transition: 0s;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
    }
    
    .btn-primary:hover {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--secondary) 100%);
        box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
        transform: translateY(-2px);
    }
    
    .btn-secondary {
        background-color: var(--light);
        color: var(--dark);
        border: 1px solid #dee2e6;
    }
    
    .btn-secondary:hover {
        background-color: #e9ecef;
        box-shadow: var(--shadow-sm);
    }
    
    .btn-danger {
        background: linear-gradient(135deg, var(--danger) 0%, #dc2626 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
    }
    
    .btn-danger:hover {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
        box-shadow: 0 6px 15px rgba(239, 68, 68, 0.4);
        transform: translateY(-2px);
    }
    
    .table-container {
        overflow-x: auto;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-md);
    }
    
    .data-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        overflow: hidden;
    }
    
    .data-table thead {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
    }
    
    .data-table th {
        padding: 1.25rem 1.5rem;
        text-align: left;
        font-weight: 600;
        letter-spacing: 0.03em;
        text-transform: uppercase;
        font-size: 0.85rem;
    }
    
    .data-table th:first-child {
        border-top-left-radius: var(--border-radius);
    }
    
    .data-table th:last-child {
        border-top-right-radius: var(--border-radius);
    }
    
    .data-table td {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid #eee;
        font-size: 0.95rem;
    }
    
    .data-table tbody tr:last-child td {
        border-bottom: none;
    }
    
    .data-table tbody tr {
        transition: var(--transition);
        background-color: white;
    }
    
    .data-table tbody tr:hover {
        background-color: var(--primary-light);
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
    }
    
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        box-shadow: var(--shadow-sm);
    }
    
    .status-0 { 
        background-color: var(--success-light); 
        color: var(--success); 
        border: 1px solid rgba(16, 185, 129, 0.2);
    }
    
    .status-1 { 
        background-color: var(--warning-light); 
        color: var(--warning); 
        border: 1px solid rgba(245, 158, 11, 0.2);
    }
    
    .status-2 { 
        background-color: var(--danger-light); 
        color: var(--danger); 
        border: 1px solid rgba(239, 68, 68, 0.2);
    }
    
    .actions {
        display: flex;
        gap: 0.75rem;
    }
    
    .actions .btn {
        padding: 0.5rem;
        width: 36px;
        height: 36px;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: var(--gray);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: var(--light);
        border-radius: var(--border-radius);
        min-height: 300px;
    }
    
    .empty-state svg {
        width: 64px;
        height: 64px;
        margin-bottom: 1.5rem;
        opacity: 0.6;
        color: var(--primary);
    }
    
    .empty-state p {
        font-size: 1.1rem;
        font-weight: 500;
        margin-bottom: 1.5rem;
    }
    
    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2.5rem;
    }
    
    .stat-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        display: flex;
        align-items: center;
        gap: 1rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
        transition: var(--transition);
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .stat-icon {
        width: 48px;
        height: 48px;
        background: var(--primary-light);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        flex-shrink: 0;
    }
    
    .stat-icon svg {
        width: 24px;
        height: 24px;
    }
    
    .stat-content {
        display: flex;
        flex-direction: column;
    }
    
    .stat-label {
        font-size: 0.85rem;
        color: var(--gray);
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .stat-value {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--dark);
        margin-top: 0.25rem;
    }
    
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .page-header, .card, .stats-container {
        animation: fadeIn 0.5s ease forwards;
    }
    
    .stats-container {
        animation-delay: 0.1s;
    }
    
    .card {
        animation-delay: 0.2s;
    }
    
    /* Fancy header with gradient text */
    .gradient-text {
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        margin-left: 8px;
    }
    
    /* Tooltip for buttons */
    [title] {
        position: relative;
    }
    
    [title]:hover::after {
        content: attr(title);
        position: absolute;
        top: -40px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--dark);
        color: white;
        padding: 0.5rem 0.75rem;
        border-radius: 6px;
        font-size: 0.75rem;
        white-space: nowrap;
        pointer-events: none;
        z-index: 10;
    }
    
    [title]:hover::before {
        content: '';
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 5px;
        border-style: solid;
        border-color: var(--dark) transparent transparent transparent;
        pointer-events: none;
        z-index: 10;
    }
    
    /* Additional styling for maintenance status */
    .warning-light {
        background-color: rgba(245, 158, 11, 0.1);
    }
    
    /* Ripple effect for buttons */
    .ripple {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        width: 100px;
        height: 100px;
        margin-top: -50px;
        margin-left: -50px;
        animation: ripple 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple {
        from {
            opacity: 1;
            transform: scale(0);
        }
        to {
            opacity: 0;
            transform: scale(3);
        }
    }

    .btn-excel {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        box-shadow: 0 4px 10px rgba(16, 185, 129, 0.3);
    }
    
    .btn-excel:hover {
        background: linear-gradient(135deg, #059669 0%, #047857 100%);
        box-shadow: 0 6px 15px rgba(16, 185, 129, 0.4);
        transform: translateY(-2px);
    }

    .export-container {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 1.5rem;
    }

    .sorting-container {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 1.5rem;
    }

    .sorting-container .btn-group {
        box-shadow: 0 4px 10px rgba(94, 96, 206, 0.1);
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .sorting-container .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        white-space: nowrap;
    }

    .sorting-container .btn.active {
        background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        border-color: transparent;
    }

    .sorting-container .btn svg {
        width: 14px;
        height: 14px;
    }
</style>

<div class=\"container\">
    <div class=\"page-header\">
        <h1 class=\"page-title\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
            </svg>
            Maintenance <span class=\"gradient-text\">Management</span>
        </h1>
        <div>
            <a href=\"{{ path('maintenance_export_excel') }}\" class=\"btn btn-excel\" style=\"margin-right: 1rem;\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path>
                    <polyline points=\"14 2 14 8 20 8\"></polyline>
                    <path d=\"M16 13H8\"></path>
                    <path d=\"M16 17H8\"></path>
                    <polyline points=\"10 9 9 9 8 9\"></polyline>
                </svg>
                Export to Excel
            </a>
        </div>
    </div>

    <div class=\"stats-container\">
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"18\" rx=\"2\" ry=\"2\"></rect>
                    <line x1=\"16\" y1=\"2\" x2=\"16\" y2=\"6\"></line>
                    <line x1=\"8\" y1=\"2\" x2=\"8\" y2=\"6\"></line>
                    <line x1=\"3\" y1=\"10\" x2=\"21\" y2=\"10\"></line>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Total Records</span>
                <span class=\"stat-value\">{{ maintenances|length }}</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                    <polyline points=\"12 6 12 12 16 14\"></polyline>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Not In Maintenance</span>
                <span class=\"stat-value\">{{ maintenances|filter(m => m.status == 0)|length }}</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">In Maintenance</span>
                <span class=\"stat-value\">{{ maintenances|filter(m => m.status == 1)|length }}</span>
            </div>
        </div>
        
        <div class=\"stat-card\">
            <div class=\"stat-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <polygon points=\"12 2 2 7 12 12 22 7 12 2\"></polygon>
                    <polyline points=\"2 17 12 22 22 17\"></polyline>
                    <polyline points=\"2 12 12 17 22 12\"></polyline>
                </svg>
            </div>
            <div class=\"stat-content\">
                <span class=\"stat-label\">Reserved</span>
                <span class=\"stat-value\">{{ maintenances|filter(m => m.status == 2)|length }}</span>
            </div>
        </div>
    </div>

    <div class=\"card\">
        <form method=\"GET\" action=\"{{ path('maintenance_index') }}\" class=\"search-form\">
            <select name=\"category\" class=\"search-category\" onchange=\"this.form.submit()\">
                <option value=\"\">Select Search Category</option>
                <option value=\"vehicle\" {% if category == 'vehicle' %}selected{% endif %}>Vehicle</option>
                <option value=\"service\" {% if category == 'service' %}selected{% endif %}>Service Type</option>
            </select>

            {% if category == 'vehicle' %}
                <select name=\"search\" class=\"search-input\" onchange=\"this.form.submit()\">
                    <option value=\"\">Select a Vehicle</option>
                    {% for vehicle in vehicles %}
                        <option value=\"{{ vehicle.id }}\" {% if searchTerm == vehicle.id %}selected{% endif %}>
                            {{ vehicle.type }} {{ vehicle.brand }} {{ vehicle.model }} ({{ vehicle.licensePlate }})
                        </option>
                    {% endfor %}
                </select>
            {% elseif category == 'service' %}
                <select name=\"search\" class=\"search-input\" onchange=\"this.form.submit()\">
                    <option value=\"\">Select a Service</option>
                    {% for serviceType, serviceData in services %}
                        <option value=\"{{ serviceType }}\" {% if searchTerm == serviceType %}selected{% endif %}>
                            {{ serviceType }}
                        </option>
                    {% endfor %}
                </select>
            {% elseif category == 'provider' %}
                <select name=\"search\" class=\"search-input\" onchange=\"this.form.submit()\">
                    <option value=\"\">Select a Provider</option>
                    {% set allProviders = [] %}
                    {% for service in services %}
                        {% for provider in service.providers %}
                            {% if provider not in allProviders %}
                                {% set allProviders = allProviders|merge([provider]) %}
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                    {% for provider in allProviders %}
                        <option value=\"{{ provider.id }}\" {% if searchTerm == provider.id %}selected{% endif %}>
                            {{ provider.name }}
                        </option>
                    {% endfor %}
                </select>
            {% endif %}
            
            {% if category %}
                <button type=\"submit\" class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                        <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
                    </svg>
                    Search
                </button>
            {% endif %}
        </form>

        {# Add this after the search form #}
        <div class=\"sorting-container\">
        <div class=\"btn-group\" role=\"group\">
            <a href=\"{{ path('admin_maintenances_index', {'sort': 'date_asc', 'category': category, 'search': searchTerm}) }}\" 
            class=\"btn btn-outline-primary {{ app.request.query.get('sort') == 'date_asc' ? 'active' }}\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z\"></path>
                </svg>
                Date (Oldest)
            </a>
            <a href=\"{{ path('admin_maintenances_index', {'sort': 'date_desc', 'category': category, 'search': searchTerm}) }}\" 
            class=\"btn btn-outline-primary {{ app.request.query.get('sort') == 'date_desc' ? 'active' }}\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path d=\"M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z\"></path>
                </svg>
                Date (Newest)
            </a>
            <a href=\"{{ path('admin_maintenances_index', {'sort': 'price_asc', 'category': category, 'search': searchTerm}) }}\" 
            class=\"btn btn-outline-primary {{ app.request.query.get('sort') == 'price_asc' ? 'active' }}\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <line x1=\"7\" y1=\"17\" x2=\"17\" y2=\"17\"></line>
                    <line x1=\"7\" y1=\"12\" x2=\"17\" y2=\"12\"></line>
                    <line x1=\"7\" y1=\"7\" x2=\"17\" y2=\"7\"></line>
                    <polyline points=\"17 4 21 8 17 12\"></polyline>
                </svg>
                Price (Low to High)
            </a>
            <a href=\"{{ path('admin_maintenances_index', {'sort': 'price_desc', 'category': category, 'search': searchTerm}) }}\" 
            class=\"btn btn-outline-primary {{ app.request.query.get('sort') == 'price_desc' ? 'active' }}\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <line x1=\"7\" y1=\"17\" x2=\"17\" y2=\"17\"></line>
                    <line x1=\"7\" y1=\"12\" x2=\"17\" y2=\"12\"></line>
                    <line x1=\"7\" y1=\"7\" x2=\"17\" y2=\"7\"></line>
                    <polyline points=\"21 16 17 12 21 8\"></polyline>
                </svg>
                Price (High to Low)
            </a>
        </div>
        </div>

        {% if maintenances is not empty %}
            <div class=\"table-container\">
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vehicle</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Provider</th>
                            <th>Cost</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for maintenance in maintenances %}
                            <tr>
                                <td>{{ maintenance.id }}</td>
                                <td>
                                    <a href=\"{{ path('vehicle_show', {id: maintenance.vehicle.id}) }}\" style=\"color: var(--primary); text-decoration: none; font-weight: 500;\">
                                        {{ maintenance.vehicle.brand }} {{ maintenance.vehicle.model }}
                                    </a>
                                </td>
                                <td>{{ maintenance.maintenanceDate|date('Y-m-d') }}</td>
                                <td>{{ maintenance.serviceType }}</td>
                                <td>{{ maintenance.serviceProvider }}</td>
                                <td>{{ maintenance.cost }} TND</td>
                                <td>
                                    <span class=\"status-badge status-{{ maintenance.status }}\">
                                        {% if maintenance.status == 0 %}
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M22 11.08V12a10 10 0 1 1-5.93-9.14\"></path>
                                                <polyline points=\"22 4 12 14.01 9 11.01\"></polyline>
                                            </svg>
                                            Not in maintenance
                                        {% elseif maintenance.status == 1 %}
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z\"></path>
                                            </svg>
                                            In maintenance
                                        {% else %}
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                <line x1=\"8\" y1=\"12\" x2=\"16\" y2=\"12\"></line>
                                            </svg>
                                            Reserved
                                        {% endif %}
                                    </span>
                                </td>
                                <td>
                                    <div class=\"actions\">
                                        <a href=\"{{ path('maintenance_show', {id: maintenance.id}) }}\" class=\"btn btn-secondary\" title=\"View Details\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z\"></path>
                                                <circle cx=\"12\" cy=\"12\" r=\"3\"></circle>
                                            </svg>
                                        </a>
                                        <a href=\"{{ path('admin_maintenances_edit', {id: maintenance.id}) }}\" class=\"btn btn-primary\" title=\"Edit Record\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                                                <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                                            </svg>
                                        </a>
                                        <form method=\"post\" action=\"{{ path('admin_maintenances_delete', {id: maintenance.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this maintenance record?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ maintenance.id) }}\">
                                            <button class=\"btn btn-danger\" title=\"Delete Record\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                    <polyline points=\"3 6 5 6 21 6\"></polyline>
                                                    <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% else %}
            <div class=\"empty-state\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                    <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                    <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                </svg>
                <p>No maintenance records found.
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}", "maintenance/index.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\maintenance\\index.html.twig");
    }
}
