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

/* reservation/list.html.twig */
class __TwigTemplate_cf6e5f057f5966736d6a50b69832e402 extends Template
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
        // line 1
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/list.html.twig"));

        $this->parent = $this->load("basef.html.twig", 1);
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

        yield "Mes Réservations";
        
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
            /* Modern Gradient Color Palette - Light Mode */
            --primary: #6C5CE7;
            --primary-hover: #5649D6;
            --primary-light: #F1EFFC;
            --secondary: #00CEC9;
            --secondary-hover: #00B4B0;
            --success: #00B894;
            --success-hover: #00A885;
            --danger: #FF7675;
            --danger-hover: #E84342;
            --warning: #FDCB6E;
            --warning-hover: #FFB347;
            --info: #74B9FF;
            --light: #FFFFFF;
            --dark: #2D3436;
            --dark-light: #636E72;
            --gray: #B2BEC3;
            --gray-light: #DFE6E9;
            --gradient-primary: linear-gradient(135deg, #6C5CE7 0%, #A29BFE 100%);
            
            /* Background and text colors for light mode */
            --bg-color: #FAFAFA;
            --text-color: var(--dark);
            --card-bg: var(--light);
            --table-header-bg: var(--light);
            --table-row-bg: var(--light);
            --table-border: var(--gray-light);
            --empty-state-bg: var(--light);
            --alert-bg: rgba(255, 255, 255, 0.9);
            
            /* Spacing */
            --space-unit: 1rem;
            --space-xs: calc(0.5 * var(--space-unit));
            --space-sm: calc(0.75 * var(--space-unit));
            --space-md: var(--space-unit);
            --space-lg: calc(1.5 * var(--space-unit));
            --space-xl: calc(2 * var(--space-unit));
            
            /* Borders */
            --radius-sm: 6px;
            --radius-md: 12px;
            --radius-lg: 18px;
            --radius-full: 9999px;
            
            /* Shadows */
            --shadow-sm: 0 2px 8px rgba(0,0,0,0.08);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.12);
            --shadow-lg: 0 8px 24px rgba(0,0,0,0.16);
            
            /* Transitions */
            --transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Dark Mode Variables */
        [data-theme=\"dark\"] {
            --bg-color: #1A1A1A;
            --text-color: #E0E0E0;
            --card-bg: #2D2D2D;
            --table-header-bg: #333333;
            --table-row-bg: #2D2D2D;
            --table-border: #444444;
            --empty-state-bg: #2D2D2D;
            --alert-bg: rgba(45, 45, 45, 0.9);
            --dark: #E0E0E0;
            --dark-light: #B0B0B0;
            --gray-light: #444444;
            
            --shadow-sm: 0 2px 8px rgba(0,0,0,0.3);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.35);
            --shadow-lg: 0 8px 24px rgba(0,0,0,0.4);
            
            --primary-light: #2A2544;
        }

        /* Theme Toggle Button */
        .theme-toggle {
            background: transparent;
            border: none;
            color: white;
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .theme-toggle svg {
            width: 20px;
            height: 20px;
        }

        /* Base Layout */
        body {
            background-color: var(--bg-color);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text-color);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .content-wrapper {
            padding: var(--space-xl);
            min-height: 100vh;
        }

        /* Card Design */
        .dashboard-card {
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            transition: var(--transition);
            border: none;
        }

        .dashboard-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-4px);
        }

        .card-header {
            padding: var(--space-lg) var(--space-xl);
            background: var(--gradient-primary);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .header-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        /* Alert Styles */
        .deletion-alert,
        .cancellation-alert {
            display: flex;
            align-items: center;
            padding: var(--space-sm) var(--space-md);
            border-radius: var(--radius-sm);
            background-color: var(--alert-bg);
        }

        .deletion-alert {
            border-left: 4px solid var(--info);
            background-color: rgba(116, 185, 255, 0.1);
        }

        .cancellation-alert {
            border-left: 4px solid var(--danger);
            background-color: rgba(255, 118, 117, 0.1);
        }

        .deletion-alert svg,
        .cancellation-alert svg {
            min-width: 20px;
        }

        .deletion-alert svg {
            color: var(--info);
        }

        .cancellation-alert svg {
            color: var(--danger);
        }

        .alert-content {
            flex-grow: 1;
        }

        .alert-title {
            font-weight: 600;
            margin-bottom: 2px;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .deletion-alert .alert-title {
            color: var(--info);
        }

        .cancellation-alert .alert-title {
            color: var(--danger);
        }

        .alert-message {
            font-size: 0.85rem;
            color: var(--dark-light);
        }

        .cancelled-row,
        .deleted-row {
            opacity: 0.8;
            position: relative;
        }

        .cancelled-row::after {
            content: \"\";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(
                -45deg,
                transparent,
                transparent 5px,
                rgba(255, 118, 117, 0.05) 5px,
                rgba(255, 118, 117, 0.05) 10px
            );
            pointer-events: none;
        }

        .deleted-row::after {
            content: \"\";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(
                -45deg,
                transparent,
                transparent 5px,
                rgba(116, 185, 255, 0.05) 5px,
                rgba(116, 185, 255, 0.05) 10px
            );
            pointer-events: none;
        }

        /* Table Design */
        .table-container {
            overflow-x: auto;
            padding: 0 var(--space-lg);
        }

        .data-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 var(--space-sm);
            min-width: 1000px;
        }

        .data-table thead th {
            position: sticky;
            top: 0;
            background-color: var(--table-header-bg);
            color: var(--dark-light);
            padding: var(--space-md) var(--space-lg);
            font-weight: 600;
            text-align: left;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 2px solid var(--table-border);
        }

        .data-table tbody tr {
            transition: var(--transition);
            background-color: var(--table-row-bg);
            box-shadow: var(--shadow-sm);
        }

        .data-table tbody tr:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .data-table td {
            padding: var(--space-lg);
            vertical-align: middle;
            color: var(--text-color);
            font-size: 1rem;
            border-top: 1px solid var(--table-border);
            border-bottom: 1px solid var(--table-border);
        }

        .data-table td:first-child {
            border-left: 1px solid var(--table-border);
            border-radius: var(--radius-md) 0 0 var(--radius-md);
        }

        .data-table td:last-child {
            border-right: 1px solid var(--table-border);
            border-radius: 0 var(--radius-md) var(--radius-md) 0;
        }

        /* Status Badges */
        .badge {
            display: inline-flex;
            align-items: center;
            padding: var(--space-xs) var(--space-sm);
            border-radius: var(--radius-full);
            font-size: 0.875rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .badge-confirmed {
            background-color: rgba(0, 184, 148, 0.1);
            color: var(--success);
        }

        .badge-pending {
            background-color: rgba(253, 203, 110, 0.2);
            color: #E17055;
        }

        .badge-canceled {
            background-color: rgba(255, 118, 117, 0.1);
            color: var(--danger);
        }

        .badge-deleted {
            background-color: rgba(116, 185, 255, 0.1);
            color: var(--info);
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: var(--space-sm) var(--space-md);
            border-radius: var(--radius-md);
            font-size: 0.875rem;
            font-weight: 600;
            line-height: 1.5;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            box-shadow: var(--shadow-sm);
        }

        .btn-sm {
            padding: var(--space-xs) var(--space-sm);
            font-size: 0.875rem;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-success {
            background-color: var(--success);
            color: white;
        }

        .btn-success:hover {
            background-color: var(--success-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-danger {
            background-color: var(--danger);
            color: white;
        }

        .btn-danger:hover {
            background-color: var(--danger-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-info {
            background-color: var(--info);
            color: white;
        }

        .btn-info:hover {
            background-color: #5aa0e0;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--gray-light);
            color: var(--text-color);
        }

        .btn-outline:hover {
            background-color: rgba(0,0,0,0.02);
            transform: translateY(-2px);
        }

        /* Journey Info */
        .journey-info {
            display: flex;
            flex-direction: column;
        }

        .journey-route {
            display: flex;
            align-items: center;
            gap: var(--space-sm);
            font-weight: 600;
            color: var(--text-color);
        }

        .journey-details {
            display: flex;
            gap: var(--space-md);
            margin-top: var(--space-xs);
            font-size: 0.875rem;
            color: var(--dark-light);
        }

        .journey-detail {
            display: flex;
            align-items: center;
            gap: var(--space-xs);
        }

        /* Deleted Trajet Info */
        .deleted-info {
            font-style: italic;
            color: var(--dark-light);
        }

        /* Empty State */
        .empty-state {
            padding: 3rem 2rem;
            text-align: center;
            background-color: var(--empty-state-bg);
            border-radius: var(--radius-md);
            margin: var(--space-lg);
        }

        .empty-state-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            color: var(--gray);
            opacity: 0.5;
        }

        .empty-state-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 0.75rem;
        }

        .empty-state-description {
            color: var(--dark-light);
            margin-bottom: 1.5rem;
            max-width: 32rem;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        /* Action Buttons */
        .action-group {
            display: flex;
            gap: var(--space-sm);
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .content-wrapper {
                padding: var(--space-lg);
            }
        }

        @media (max-width: 992px) {
            .content-wrapper {
                margin-left: 0;
            }
            
            .card-title {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 768px) {
            .content-wrapper {
                padding: var(--space-md);
            }
            
            .empty-state {
                padding: 2rem 1rem;
            }
            
            .header-actions {
                flex-direction: column;
                align-items: flex-end;
                gap: 8px;
            }
            
            .theme-toggle {
                margin-left: 0;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 530
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

        // line 531
        yield "<div class=\"content-wrapper\">
    <div class=\"dashboard-card\">
        <div class=\"card-header\">
            <h1 class=\"card-title\">Mes Réservations</h1>
            <div class=\"header-actions\">
                <a href=\"";
        // line 536
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
        yield "\" class=\"btn btn-outline\" style=\"border-color: white; color: white;\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                    </svg>
                    <span style=\"margin-left: 8px;\">Nouvelle réservation</span>
                </a>
                <button class=\"theme-toggle\" id=\"themeToggle\" aria-label=\"Toggle dark mode\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"sunIcon\">
                        <circle cx=\"12\" cy=\"12\" r=\"5\"></circle>
                        <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"3\"></line>
                        <line x1=\"12\" y1=\"21\" x2=\"12\" y2=\"23\"></line>
                        <line x1=\"4.22\" y1=\"4.22\" x2=\"5.64\" y2=\"5.64\"></line>
                        <line x1=\"18.36\" y1=\"18.36\" x2=\"19.78\" y2=\"19.78\"></line>
                        <line x1=\"1\" y1=\"12\" x2=\"3\" y2=\"12\"></line>
                        <line x1=\"21\" y1=\"12\" x2=\"23\" y2=\"12\"></line>
                        <line x1=\"4.22\" y1=\"19.78\" x2=\"5.64\" y2=\"18.36\"></line>
                        <line x1=\"18.36\" y1=\"5.64\" x2=\"19.78\" y2=\"4.22\"></line>
                    </svg>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"moonIcon\" style=\"display: none;\">
                        <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"></path>
                    </svg>
                </button>
            </div>
        </div>

        ";
        // line 562
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 562, $this->source); })())) > 0)) {
            // line 563
            yield "            <div class=\"table-container\">
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>Trajet</th>
                            <th>Date Réservation</th>
                            <th>Places</th>
                            <th>Prix</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 576
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 576, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 577
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isCancelled", [], "any", false, false, false, 577)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 578
                    yield "                                <tr>
                                    <td colspan=\"6\" style=\"padding: 0;\">
                                        <div class=\"cancellation-alert\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                                                <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                                            </svg>
                                            <div class=\"alert-content\">
                                                <div class=\"alert-title\">Réservation Annulée</div>
                                                <div class=\"alert-message\">
                                                    ";
                    // line 589
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "cancellationReason", [], "any", false, false, false, 589), "html", null, true);
                    yield " • 
                                                    ";
                    // line 590
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "cancellationDate", [], "any", false, false, false, 590), "d/m/Y H:i"), "html", null, true);
                    yield "
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
                } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source,                 // line 596
$context["reservation"], "trajet", [], "any", false, false, false, 596)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 597
                    yield "                                <tr>
                                    <td colspan=\"6\" style=\"padding: 0;\">
                                        <div class=\"deletion-alert\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                                                <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                                            </svg>
                                            <div class=\"alert-content\">
                                                <div class=\"alert-title\">Trajet Supprimé</div>
                                                <div class=\"alert-message\">
                                                    Le conducteur a supprimé ce trajet
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
                }
                // line 615
                yield "
                            <tr ";
                // line 616
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "isCancelled", [], "any", false, false, false, 616)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "class=\"cancelled-row\"";
                } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 616)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "class=\"deleted-row\"";
                }
                yield ">
                                <td>
                                    <div class=\"journey-info\">
                                        <div class=\"journey-route\">
                                            <span>";
                // line 620
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 620)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 620), "departure", [], "any", false, false, false, 620), "html", null, true)) : ("Trajet supprimé"));
                yield "</span>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M5 12h14\"></path>
                                                <path d=\"M12 5l7 7-7 7\"></path>
                                            </svg>
                                            <span>";
                // line 625
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 625)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 625), "destination", [], "any", false, false, false, 625), "html", null, true)) : ("Trajet supprimé"));
                yield "</span>
                                        </div>
                                        <div class=\"journey-details\">
                                            ";
                // line 628
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 628)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 629
                    yield "                                                <span class=\"journey-detail\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                        <polyline points=\"12 6 12 12 16 14\"></polyline>
                                                    </svg>
                                                    ";
                    // line 634
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 634), "departureTime", [], "any", false, false, false, 634), "d/m/Y H:i"), "html", null, true);
                    yield "
                                                </span>
                                                <span class=\"journey-detail\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                        <polyline points=\"12 6 12 12 16 14\"></polyline>
                                                    </svg>
                                                    ";
                    // line 641
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 641), "duration", [], "any", false, false, false, 641), "html", null, true);
                    yield "
                                                </span>
                                            ";
                } else {
                    // line 644
                    yield "                                                <span class=\"journey-detail deleted-info\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                        <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                                                        <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                                                    </svg>
                                                    Ce trajet a été supprimé par le conducteur
                                                </span>
                                            ";
                }
                // line 653
                yield "                                        </div>
                                    </div>
                                </td>
                                <td>";
                // line 656
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "reservationDate", [], "any", false, false, false, 656), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                <td>";
                // line 657
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "numberOfSeats", [], "any", false, false, false, 657), "html", null, true);
                yield "</td>
                                <td>";
                // line 658
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "totalPrice", [], "any", false, false, false, 658), "html", null, true);
                yield " DT</td>
                                <td>
                                    <span class=\"badge 
                                        ";
                // line 661
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 661)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "badge-deleted
                                        ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 662
$context["reservation"], "isCancelled", [], "any", false, false, false, 662)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "badge-canceled
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 663
$context["reservation"], "status", [], "any", false, false, false, 663) == "Confirmed")) {
                    yield "badge-confirmed
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 664
$context["reservation"], "status", [], "any", false, false, false, 664) == "Pending")) {
                    yield "badge-pending
                                        ";
                }
                // line 665
                yield "\">
                                        ";
                // line 666
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 666)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Trajet supprimé
                                        ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 667
$context["reservation"], "isCancelled", [], "any", false, false, false, 667)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Annulé
                                        ";
                } else {
                    // line 668
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 668), "html", null, true);
                    yield "
                                        ";
                }
                // line 670
                yield "                                    </span>
                                </td>
                                <td>
                                    <div class=\"action-group\">
                                        ";
                // line 674
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "trajet", [], "any", false, false, false, 674)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 675
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_trajet_supprime", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 675)]), "html", null, true);
                    yield "\" class=\"btn btn-info btn-sm\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"margin-right: 4px;\">
                                                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                    <line x1=\"12\" y1=\"16\" x2=\"12\" y2=\"12\"></line>
                                                    <line x1=\"12\" y1=\"8\" x2=\"12.01\" y2=\"8\"></line>
                                                </svg>
                                                Détails
                                            </a>
                                        ";
                } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source,                 // line 683
$context["reservation"], "isCancelled", [], "any", false, false, false, 683)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 684
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 684) == "Pending")) {
                        // line 685
                        yield "                                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_payment", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 685)]), "html", null, true);
                        yield "\" class=\"btn btn-primary btn-sm\">
                                                    Payer
                                                </a>
                                                <a href=\"";
                        // line 688
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 688)]), "html", null, true);
                        yield "\" class=\"btn btn-danger btn-sm\">
                                                    Annuler
                                                </a>
                                            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 691
$context["reservation"], "status", [], "any", false, false, false, 691) == "Confirmed")) {
                        // line 692
                        yield "                                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 692)]), "html", null, true);
                        yield "\" class=\"btn btn-success btn-sm\" target=\"_blank\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"margin-right: 4px;\">
                                                        <path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"></path>
                                                        <polyline points=\"7 10 12 15 17 10\"></polyline>
                                                        <line x1=\"12\" y1=\"15\" x2=\"12\" y2=\"3\"></line>
                                                    </svg>
                                                    PDF
                                                </a>
                                                <a href=\"";
                        // line 700
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_success", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 700)]), "html", null, true);
                        yield "\" class=\"btn btn-outline btn-sm\">
                                                    Détails
                                                </a>
                                            ";
                    }
                    // line 704
                    yield "                                        ";
                } else {
                    // line 705
                    yield "                                            <span class=\"btn btn-outline btn-sm\" style=\"cursor: not-allowed; opacity: 0.7;\">
                                                Actions non disponibles
                                            </span>
                                        ";
                }
                // line 709
                yield "                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 713
            yield "                    </tbody>
                </table>
            </div>
        ";
        } else {
            // line 717
            yield "            <div class=\"empty-state\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"empty-state-icon\" width=\"64\" height=\"64\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                    <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                    <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                </svg>
                <h3 class=\"empty-state-title\">Aucune réservation trouvée</h3>
                <p class=\"empty-state-description\">Vous n'avez aucune réservation pour le moment. Commencez par rechercher un trajet disponible.</p>
                <a href=\"";
            // line 725
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
            yield "\" class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"margin-right: 8px;\">
                        <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                    </svg>
                    Trouver un trajet
                </a>
            </div>
        ";
        }
        // line 734
        yield "    </div>
</div>

<script>
    // Theme toggle functionality
    const themeToggle = document.getElementById('themeToggle');
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');
    
    // Check for saved theme preference or use system preference
    const savedTheme = localStorage.getItem('theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    // Apply the initial theme
    if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
        document.documentElement.setAttribute('data-theme', 'dark');
        sunIcon.style.display = 'none';
        moonIcon.style.display = 'block';
    } else {
        document.documentElement.removeAttribute('data-theme');
        sunIcon.style.display = 'block';
        moonIcon.style.display = 'none';
    }
    
    // Toggle theme on button click
    themeToggle.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        
        if (currentTheme === 'dark') {
            document.documentElement.removeAttribute('data-theme');
            localStorage.setItem('theme', 'light');
            sunIcon.style.display = 'block';
            moonIcon.style.display = 'none';
        } else {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'block';
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
        return "reservation/list.html.twig";
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
        return array (  979 => 734,  967 => 725,  957 => 717,  951 => 713,  942 => 709,  936 => 705,  933 => 704,  926 => 700,  914 => 692,  912 => 691,  906 => 688,  899 => 685,  896 => 684,  894 => 683,  882 => 675,  880 => 674,  874 => 670,  869 => 668,  864 => 667,  860 => 666,  857 => 665,  852 => 664,  848 => 663,  844 => 662,  840 => 661,  834 => 658,  830 => 657,  826 => 656,  821 => 653,  810 => 644,  804 => 641,  794 => 634,  787 => 629,  785 => 628,  779 => 625,  771 => 620,  760 => 616,  757 => 615,  737 => 597,  735 => 596,  726 => 590,  722 => 589,  709 => 578,  706 => 577,  702 => 576,  687 => 563,  685 => 562,  656 => 536,  649 => 531,  636 => 530,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Mes Réservations{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            /* Modern Gradient Color Palette - Light Mode */
            --primary: #6C5CE7;
            --primary-hover: #5649D6;
            --primary-light: #F1EFFC;
            --secondary: #00CEC9;
            --secondary-hover: #00B4B0;
            --success: #00B894;
            --success-hover: #00A885;
            --danger: #FF7675;
            --danger-hover: #E84342;
            --warning: #FDCB6E;
            --warning-hover: #FFB347;
            --info: #74B9FF;
            --light: #FFFFFF;
            --dark: #2D3436;
            --dark-light: #636E72;
            --gray: #B2BEC3;
            --gray-light: #DFE6E9;
            --gradient-primary: linear-gradient(135deg, #6C5CE7 0%, #A29BFE 100%);
            
            /* Background and text colors for light mode */
            --bg-color: #FAFAFA;
            --text-color: var(--dark);
            --card-bg: var(--light);
            --table-header-bg: var(--light);
            --table-row-bg: var(--light);
            --table-border: var(--gray-light);
            --empty-state-bg: var(--light);
            --alert-bg: rgba(255, 255, 255, 0.9);
            
            /* Spacing */
            --space-unit: 1rem;
            --space-xs: calc(0.5 * var(--space-unit));
            --space-sm: calc(0.75 * var(--space-unit));
            --space-md: var(--space-unit);
            --space-lg: calc(1.5 * var(--space-unit));
            --space-xl: calc(2 * var(--space-unit));
            
            /* Borders */
            --radius-sm: 6px;
            --radius-md: 12px;
            --radius-lg: 18px;
            --radius-full: 9999px;
            
            /* Shadows */
            --shadow-sm: 0 2px 8px rgba(0,0,0,0.08);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.12);
            --shadow-lg: 0 8px 24px rgba(0,0,0,0.16);
            
            /* Transitions */
            --transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Dark Mode Variables */
        [data-theme=\"dark\"] {
            --bg-color: #1A1A1A;
            --text-color: #E0E0E0;
            --card-bg: #2D2D2D;
            --table-header-bg: #333333;
            --table-row-bg: #2D2D2D;
            --table-border: #444444;
            --empty-state-bg: #2D2D2D;
            --alert-bg: rgba(45, 45, 45, 0.9);
            --dark: #E0E0E0;
            --dark-light: #B0B0B0;
            --gray-light: #444444;
            
            --shadow-sm: 0 2px 8px rgba(0,0,0,0.3);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.35);
            --shadow-lg: 0 8px 24px rgba(0,0,0,0.4);
            
            --primary-light: #2A2544;
        }

        /* Theme Toggle Button */
        .theme-toggle {
            background: transparent;
            border: none;
            color: white;
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .theme-toggle svg {
            width: 20px;
            height: 20px;
        }

        /* Base Layout */
        body {
            background-color: var(--bg-color);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text-color);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .content-wrapper {
            padding: var(--space-xl);
            min-height: 100vh;
        }

        /* Card Design */
        .dashboard-card {
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            transition: var(--transition);
            border: none;
        }

        .dashboard-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-4px);
        }

        .card-header {
            padding: var(--space-lg) var(--space-xl);
            background: var(--gradient-primary);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .header-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        /* Alert Styles */
        .deletion-alert,
        .cancellation-alert {
            display: flex;
            align-items: center;
            padding: var(--space-sm) var(--space-md);
            border-radius: var(--radius-sm);
            background-color: var(--alert-bg);
        }

        .deletion-alert {
            border-left: 4px solid var(--info);
            background-color: rgba(116, 185, 255, 0.1);
        }

        .cancellation-alert {
            border-left: 4px solid var(--danger);
            background-color: rgba(255, 118, 117, 0.1);
        }

        .deletion-alert svg,
        .cancellation-alert svg {
            min-width: 20px;
        }

        .deletion-alert svg {
            color: var(--info);
        }

        .cancellation-alert svg {
            color: var(--danger);
        }

        .alert-content {
            flex-grow: 1;
        }

        .alert-title {
            font-weight: 600;
            margin-bottom: 2px;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .deletion-alert .alert-title {
            color: var(--info);
        }

        .cancellation-alert .alert-title {
            color: var(--danger);
        }

        .alert-message {
            font-size: 0.85rem;
            color: var(--dark-light);
        }

        .cancelled-row,
        .deleted-row {
            opacity: 0.8;
            position: relative;
        }

        .cancelled-row::after {
            content: \"\";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(
                -45deg,
                transparent,
                transparent 5px,
                rgba(255, 118, 117, 0.05) 5px,
                rgba(255, 118, 117, 0.05) 10px
            );
            pointer-events: none;
        }

        .deleted-row::after {
            content: \"\";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(
                -45deg,
                transparent,
                transparent 5px,
                rgba(116, 185, 255, 0.05) 5px,
                rgba(116, 185, 255, 0.05) 10px
            );
            pointer-events: none;
        }

        /* Table Design */
        .table-container {
            overflow-x: auto;
            padding: 0 var(--space-lg);
        }

        .data-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 var(--space-sm);
            min-width: 1000px;
        }

        .data-table thead th {
            position: sticky;
            top: 0;
            background-color: var(--table-header-bg);
            color: var(--dark-light);
            padding: var(--space-md) var(--space-lg);
            font-weight: 600;
            text-align: left;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 2px solid var(--table-border);
        }

        .data-table tbody tr {
            transition: var(--transition);
            background-color: var(--table-row-bg);
            box-shadow: var(--shadow-sm);
        }

        .data-table tbody tr:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .data-table td {
            padding: var(--space-lg);
            vertical-align: middle;
            color: var(--text-color);
            font-size: 1rem;
            border-top: 1px solid var(--table-border);
            border-bottom: 1px solid var(--table-border);
        }

        .data-table td:first-child {
            border-left: 1px solid var(--table-border);
            border-radius: var(--radius-md) 0 0 var(--radius-md);
        }

        .data-table td:last-child {
            border-right: 1px solid var(--table-border);
            border-radius: 0 var(--radius-md) var(--radius-md) 0;
        }

        /* Status Badges */
        .badge {
            display: inline-flex;
            align-items: center;
            padding: var(--space-xs) var(--space-sm);
            border-radius: var(--radius-full);
            font-size: 0.875rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .badge-confirmed {
            background-color: rgba(0, 184, 148, 0.1);
            color: var(--success);
        }

        .badge-pending {
            background-color: rgba(253, 203, 110, 0.2);
            color: #E17055;
        }

        .badge-canceled {
            background-color: rgba(255, 118, 117, 0.1);
            color: var(--danger);
        }

        .badge-deleted {
            background-color: rgba(116, 185, 255, 0.1);
            color: var(--info);
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: var(--space-sm) var(--space-md);
            border-radius: var(--radius-md);
            font-size: 0.875rem;
            font-weight: 600;
            line-height: 1.5;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            box-shadow: var(--shadow-sm);
        }

        .btn-sm {
            padding: var(--space-xs) var(--space-sm);
            font-size: 0.875rem;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-success {
            background-color: var(--success);
            color: white;
        }

        .btn-success:hover {
            background-color: var(--success-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-danger {
            background-color: var(--danger);
            color: white;
        }

        .btn-danger:hover {
            background-color: var(--danger-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-info {
            background-color: var(--info);
            color: white;
        }

        .btn-info:hover {
            background-color: #5aa0e0;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--gray-light);
            color: var(--text-color);
        }

        .btn-outline:hover {
            background-color: rgba(0,0,0,0.02);
            transform: translateY(-2px);
        }

        /* Journey Info */
        .journey-info {
            display: flex;
            flex-direction: column;
        }

        .journey-route {
            display: flex;
            align-items: center;
            gap: var(--space-sm);
            font-weight: 600;
            color: var(--text-color);
        }

        .journey-details {
            display: flex;
            gap: var(--space-md);
            margin-top: var(--space-xs);
            font-size: 0.875rem;
            color: var(--dark-light);
        }

        .journey-detail {
            display: flex;
            align-items: center;
            gap: var(--space-xs);
        }

        /* Deleted Trajet Info */
        .deleted-info {
            font-style: italic;
            color: var(--dark-light);
        }

        /* Empty State */
        .empty-state {
            padding: 3rem 2rem;
            text-align: center;
            background-color: var(--empty-state-bg);
            border-radius: var(--radius-md);
            margin: var(--space-lg);
        }

        .empty-state-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            color: var(--gray);
            opacity: 0.5;
        }

        .empty-state-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 0.75rem;
        }

        .empty-state-description {
            color: var(--dark-light);
            margin-bottom: 1.5rem;
            max-width: 32rem;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        /* Action Buttons */
        .action-group {
            display: flex;
            gap: var(--space-sm);
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .content-wrapper {
                padding: var(--space-lg);
            }
        }

        @media (max-width: 992px) {
            .content-wrapper {
                margin-left: 0;
            }
            
            .card-title {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 768px) {
            .content-wrapper {
                padding: var(--space-md);
            }
            
            .empty-state {
                padding: 2rem 1rem;
            }
            
            .header-actions {
                flex-direction: column;
                align-items: flex-end;
                gap: 8px;
            }
            
            .theme-toggle {
                margin-left: 0;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"content-wrapper\">
    <div class=\"dashboard-card\">
        <div class=\"card-header\">
            <h1 class=\"card-title\">Mes Réservations</h1>
            <div class=\"header-actions\">
                <a href=\"{{ path('reservation_affichage') }}\" class=\"btn btn-outline\" style=\"border-color: white; color: white;\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                    </svg>
                    <span style=\"margin-left: 8px;\">Nouvelle réservation</span>
                </a>
                <button class=\"theme-toggle\" id=\"themeToggle\" aria-label=\"Toggle dark mode\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"sunIcon\">
                        <circle cx=\"12\" cy=\"12\" r=\"5\"></circle>
                        <line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"3\"></line>
                        <line x1=\"12\" y1=\"21\" x2=\"12\" y2=\"23\"></line>
                        <line x1=\"4.22\" y1=\"4.22\" x2=\"5.64\" y2=\"5.64\"></line>
                        <line x1=\"18.36\" y1=\"18.36\" x2=\"19.78\" y2=\"19.78\"></line>
                        <line x1=\"1\" y1=\"12\" x2=\"3\" y2=\"12\"></line>
                        <line x1=\"21\" y1=\"12\" x2=\"23\" y2=\"12\"></line>
                        <line x1=\"4.22\" y1=\"19.78\" x2=\"5.64\" y2=\"18.36\"></line>
                        <line x1=\"18.36\" y1=\"5.64\" x2=\"19.78\" y2=\"4.22\"></line>
                    </svg>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" id=\"moonIcon\" style=\"display: none;\">
                        <path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"></path>
                    </svg>
                </button>
            </div>
        </div>

        {% if reservations|length > 0 %}
            <div class=\"table-container\">
                <table class=\"data-table\">
                    <thead>
                        <tr>
                            <th>Trajet</th>
                            <th>Date Réservation</th>
                            <th>Places</th>
                            <th>Prix</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for reservation in reservations %}
                            {% if reservation.isCancelled %}
                                <tr>
                                    <td colspan=\"6\" style=\"padding: 0;\">
                                        <div class=\"cancellation-alert\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                                                <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                                            </svg>
                                            <div class=\"alert-content\">
                                                <div class=\"alert-title\">Réservation Annulée</div>
                                                <div class=\"alert-message\">
                                                    {{ reservation.cancellationReason }} • 
                                                    {{ reservation.cancellationDate|date('d/m/Y H:i') }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {% elseif not reservation.trajet %}
                                <tr>
                                    <td colspan=\"6\" style=\"padding: 0;\">
                                        <div class=\"deletion-alert\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                                                <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                                            </svg>
                                            <div class=\"alert-content\">
                                                <div class=\"alert-title\">Trajet Supprimé</div>
                                                <div class=\"alert-message\">
                                                    Le conducteur a supprimé ce trajet
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {% endif %}

                            <tr {% if reservation.isCancelled %}class=\"cancelled-row\"{% elseif not reservation.trajet %}class=\"deleted-row\"{% endif %}>
                                <td>
                                    <div class=\"journey-info\">
                                        <div class=\"journey-route\">
                                            <span>{{ reservation.trajet ? reservation.trajet.departure : 'Trajet supprimé' }}</span>
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <path d=\"M5 12h14\"></path>
                                                <path d=\"M12 5l7 7-7 7\"></path>
                                            </svg>
                                            <span>{{ reservation.trajet ? reservation.trajet.destination : 'Trajet supprimé' }}</span>
                                        </div>
                                        <div class=\"journey-details\">
                                            {% if reservation.trajet %}
                                                <span class=\"journey-detail\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                        <polyline points=\"12 6 12 12 16 14\"></polyline>
                                                    </svg>
                                                    {{ reservation.trajet.departureTime|date('d/m/Y H:i') }}
                                                </span>
                                                <span class=\"journey-detail\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                        <polyline points=\"12 6 12 12 16 14\"></polyline>
                                                    </svg>
                                                    {{ reservation.trajet.duration }}
                                                </span>
                                            {% else %}
                                                <span class=\"journey-detail deleted-info\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                        <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                        <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                                                        <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                                                    </svg>
                                                    Ce trajet a été supprimé par le conducteur
                                                </span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </td>
                                <td>{{ reservation.reservationDate|date('d/m/Y H:i') }}</td>
                                <td>{{ reservation.numberOfSeats }}</td>
                                <td>{{ reservation.totalPrice }} DT</td>
                                <td>
                                    <span class=\"badge 
                                        {% if not reservation.trajet %}badge-deleted
                                        {% elseif reservation.isCancelled %}badge-canceled
                                        {% elseif reservation.status == 'Confirmed' %}badge-confirmed
                                        {% elseif reservation.status == 'Pending' %}badge-pending
                                        {% endif %}\">
                                        {% if not reservation.trajet %}Trajet supprimé
                                        {% elseif reservation.isCancelled %}Annulé
                                        {% else %}{{ reservation.status }}
                                        {% endif %}
                                    </span>
                                </td>
                                <td>
                                    <div class=\"action-group\">
                                        {% if not reservation.trajet %}
                                            <a href=\"{{ path('reservation_trajet_supprime', {'id': reservation.id}) }}\" class=\"btn btn-info btn-sm\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"margin-right: 4px;\">
                                                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                                                    <line x1=\"12\" y1=\"16\" x2=\"12\" y2=\"12\"></line>
                                                    <line x1=\"12\" y1=\"8\" x2=\"12.01\" y2=\"8\"></line>
                                                </svg>
                                                Détails
                                            </a>
                                        {% elseif not reservation.isCancelled %}
                                            {% if reservation.status == 'Pending' %}
                                                <a href=\"{{ path('reservation_payment', {'id': reservation.id}) }}\" class=\"btn btn-primary btn-sm\">
                                                    Payer
                                                </a>
                                                <a href=\"{{ path('reservation_cancel', {'id': reservation.id}) }}\" class=\"btn btn-danger btn-sm\">
                                                    Annuler
                                                </a>
                                            {% elseif reservation.status == 'Confirmed' %}
                                                <a href=\"{{ path('reservation_pdf', {'id': reservation.id}) }}\" class=\"btn btn-success btn-sm\" target=\"_blank\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"margin-right: 4px;\">
                                                        <path d=\"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4\"></path>
                                                        <polyline points=\"7 10 12 15 17 10\"></polyline>
                                                        <line x1=\"12\" y1=\"15\" x2=\"12\" y2=\"3\"></line>
                                                    </svg>
                                                    PDF
                                                </a>
                                                <a href=\"{{ path('reservation_success', {'id': reservation.id}) }}\" class=\"btn btn-outline btn-sm\">
                                                    Détails
                                                </a>
                                            {% endif %}
                                        {% else %}
                                            <span class=\"btn btn-outline btn-sm\" style=\"cursor: not-allowed; opacity: 0.7;\">
                                                Actions non disponibles
                                            </span>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% else %}
            <div class=\"empty-state\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"empty-state-icon\" width=\"64\" height=\"64\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                    <line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"></line>
                    <line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"></line>
                </svg>
                <h3 class=\"empty-state-title\">Aucune réservation trouvée</h3>
                <p class=\"empty-state-description\">Vous n'avez aucune réservation pour le moment. Commencez par rechercher un trajet disponible.</p>
                <a href=\"{{ path('reservation_affichage') }}\" class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" style=\"margin-right: 8px;\">
                        <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
                        <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
                    </svg>
                    Trouver un trajet
                </a>
            </div>
        {% endif %}
    </div>
</div>

<script>
    // Theme toggle functionality
    const themeToggle = document.getElementById('themeToggle');
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');
    
    // Check for saved theme preference or use system preference
    const savedTheme = localStorage.getItem('theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    // Apply the initial theme
    if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
        document.documentElement.setAttribute('data-theme', 'dark');
        sunIcon.style.display = 'none';
        moonIcon.style.display = 'block';
    } else {
        document.documentElement.removeAttribute('data-theme');
        sunIcon.style.display = 'block';
        moonIcon.style.display = 'none';
    }
    
    // Toggle theme on button click
    themeToggle.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        
        if (currentTheme === 'dark') {
            document.documentElement.removeAttribute('data-theme');
            localStorage.setItem('theme', 'light');
            sunIcon.style.display = 'block';
            moonIcon.style.display = 'none';
        } else {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'block';
        }
    });
</script>
{% endblock %}", "reservation/list.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\reservation\\list.html.twig");
    }
}
