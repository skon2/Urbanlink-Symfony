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

/* abonnement_reservation/pdf.html.twig */
class __TwigTemplate_977a9990731a81e88cc347861cd224ad extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement_reservation/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Carte d'Abonnement - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 5, $this->source); })()), "abonnement", [], "any", false, false, false, 5), "type", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .subscription-card {
            width: 350px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            position: relative;
        }
        .card-header {
            background: #4a6fa5;
            color: white;
            padding: 25px;
            text-align: center;
            position: relative;
        }
        .card-title {
            font-size: 22px;
            font-weight: 600;
            margin: 0;
        }
        .card-status {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 3px 12px;
            background: #27ae60;
            color: white;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 500;
        }
        .card-body {
            padding: 25px;
        }
        .subscription-type {
            font-size: 24px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
            text-align: center;
        }
        .subscription-duration {
            color: #7f8c8d;
            font-size: 14px;
            text-align: center;
            margin-bottom: 25px;
        }
        .subscription-price {
            font-size: 36px;
            font-weight: 700;
            color: #4a6fa5;
            text-align: center;
            margin: 25px 0;
        }
        .divider {
            height: 1px;
            background: #eee;
            margin: 20px 0;
        }
        .card-details {
            margin-top: 20px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 12px;
        }
        .detail-label {
            width: 120px;
            color: #7f8c8d;
            font-size: 14px;
        }
        .detail-value {
            flex: 1;
            font-weight: 500;
            font-size: 14px;
        }
        .card-footer {
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #95a5a6;
            border-top: 1px solid #eee;
        }
        .valid-dates {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            margin: 15px 0;
        }
        .valid-date {
            font-size: 14px;
            margin: 5px 0;
        }
        .barcode {
            text-align: center;
            margin: 20px 0;
            color: #333;
            letter-spacing: 3px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class=\"subscription-card\">
        <div class=\"card-header\">
            <div class=\"card-status\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 123, $this->source); })()), "statut", [], "any", false, false, false, 123), "html", null, true);
        yield "</div>
            <h1 class=\"card-title\">Carte d'Abonnement</h1>
        </div>
        
        <div class=\"card-body\">
            <div class=\"subscription-type\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 128, $this->source); })()), "abonnement", [], "any", false, false, false, 128), "type", [], "any", false, false, false, 128), "html", null, true);
        yield "</div>
            <div class=\"subscription-duration\">
                ";
        // line 130
        $context["difference"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 130, $this->source); })()), "dateFin", [], "any", false, false, false, 130)), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 130, $this->source); })()), "dateDebut", [], "any", false, false, false, 130))], "method", false, false, false, 130);
        // line 131
        yield "                ";
        $context["months"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 131, $this->source); })()), "m", [], "any", false, false, false, 131);
        // line 132
        yield "                ";
        $context["days"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 132, $this->source); })()), "d", [], "any", false, false, false, 132);
        // line 133
        yield "                Durée: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 133, $this->source); })()), "html", null, true);
        yield " mois et ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 133, $this->source); })()), "html", null, true);
        yield " jours
            </div>
            
            <div class=\"valid-dates\">
                <div class=\"valid-date\"><strong>Valide du:</strong> ";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 137, $this->source); })()), "dateDebut", [], "any", false, false, false, 137), "d/m/Y"), "html", null, true);
        yield "</div>
                <div class=\"valid-date\"><strong>Au:</strong> ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 138, $this->source); })()), "dateFin", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true);
        yield "</div>
            </div>
            
            <div class=\"subscription-price\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 141, $this->source); })()), "abonnement", [], "any", false, false, false, 141), "prix", [], "any", false, false, false, 141), "html", null, true);
        yield " €</div>
            
            <div class=\"barcode\">| | | | ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143), "html", null, true);
        yield " | | | |</div>
            
            <div class=\"divider\"></div>
            
            <div class=\"card-details\">
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Nom du client:</div>
                    <div class=\"detail-value\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "name", [], "any", false, false, false, 150), "html", null, true);
        yield "</div>
                </div>
                <div class=\"detail-row\">
                    <div class=\"detail-label\">N° d'abonnement:</div>
                    <div class=\"detail-value\">#";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 154, $this->source); })()), "id", [], "any", false, false, false, 154), "html", null, true);
        yield "</div>
                </div>
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Date d'émission:</div>
                    <div class=\"detail-value\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
        
        <div class=\"card-footer\">
            <p>Présentez cette carte pour accéder à votre abonnement</p>
            <p>© ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " [Votre Entreprise]</p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "abonnement_reservation/pdf.html.twig";
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
        return array (  255 => 165,  245 => 158,  238 => 154,  231 => 150,  221 => 143,  216 => 141,  210 => 138,  206 => 137,  196 => 133,  193 => 132,  190 => 131,  188 => 130,  183 => 128,  175 => 123,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Carte d'Abonnement - {{ reservation.abonnement.type }}</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .subscription-card {
            width: 350px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            position: relative;
        }
        .card-header {
            background: #4a6fa5;
            color: white;
            padding: 25px;
            text-align: center;
            position: relative;
        }
        .card-title {
            font-size: 22px;
            font-weight: 600;
            margin: 0;
        }
        .card-status {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 3px 12px;
            background: #27ae60;
            color: white;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 500;
        }
        .card-body {
            padding: 25px;
        }
        .subscription-type {
            font-size: 24px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
            text-align: center;
        }
        .subscription-duration {
            color: #7f8c8d;
            font-size: 14px;
            text-align: center;
            margin-bottom: 25px;
        }
        .subscription-price {
            font-size: 36px;
            font-weight: 700;
            color: #4a6fa5;
            text-align: center;
            margin: 25px 0;
        }
        .divider {
            height: 1px;
            background: #eee;
            margin: 20px 0;
        }
        .card-details {
            margin-top: 20px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 12px;
        }
        .detail-label {
            width: 120px;
            color: #7f8c8d;
            font-size: 14px;
        }
        .detail-value {
            flex: 1;
            font-weight: 500;
            font-size: 14px;
        }
        .card-footer {
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #95a5a6;
            border-top: 1px solid #eee;
        }
        .valid-dates {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            margin: 15px 0;
        }
        .valid-date {
            font-size: 14px;
            margin: 5px 0;
        }
        .barcode {
            text-align: center;
            margin: 20px 0;
            color: #333;
            letter-spacing: 3px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class=\"subscription-card\">
        <div class=\"card-header\">
            <div class=\"card-status\">{{ reservation.statut }}</div>
            <h1 class=\"card-title\">Carte d'Abonnement</h1>
        </div>
        
        <div class=\"card-body\">
            <div class=\"subscription-type\">{{ reservation.abonnement.type }}</div>
            <div class=\"subscription-duration\">
                {% set difference = date(reservation.dateFin).diff(date(reservation.dateDebut)) %}
                {% set months = difference.m %}
                {% set days = difference.d %}
                Durée: {{ months }} mois et {{ days }} jours
            </div>
            
            <div class=\"valid-dates\">
                <div class=\"valid-date\"><strong>Valide du:</strong> {{ reservation.dateDebut|date('d/m/Y') }}</div>
                <div class=\"valid-date\"><strong>Au:</strong> {{ reservation.dateFin|date('d/m/Y') }}</div>
            </div>
            
            <div class=\"subscription-price\">{{ reservation.abonnement.prix }} €</div>
            
            <div class=\"barcode\">| | | | {{ reservation.id }} | | | |</div>
            
            <div class=\"divider\"></div>
            
            <div class=\"card-details\">
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Nom du client:</div>
                    <div class=\"detail-value\">{{ reservation.user.name }}</div>
                </div>
                <div class=\"detail-row\">
                    <div class=\"detail-label\">N° d'abonnement:</div>
                    <div class=\"detail-value\">#{{ reservation.id }}</div>
                </div>
                <div class=\"detail-row\">
                    <div class=\"detail-label\">Date d'émission:</div>
                    <div class=\"detail-value\">{{ \"now\"|date('d/m/Y') }}</div>
                </div>
            </div>
        </div>
        
        <div class=\"card-footer\">
            <p>Présentez cette carte pour accéder à votre abonnement</p>
            <p>© {{ \"now\"|date('Y') }} [Votre Entreprise]</p>
        </div>
    </div>
</body>
</html>", "abonnement_reservation/pdf.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\abonnement_reservation\\pdf.html.twig");
    }
}
