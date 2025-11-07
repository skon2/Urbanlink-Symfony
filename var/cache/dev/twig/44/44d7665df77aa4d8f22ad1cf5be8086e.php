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

/* trajet/modifier.html.twig */
class __TwigTemplate_8b1977dee4012b715a77cea5eacd29af extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/modifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/modifier.html.twig"));

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

        yield "Modifier Trajet - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 3, $this->source); })()), "departure", [], "any", false, false, false, 3), "html", null, true);
        yield " vers ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 3, $this->source); })()), "destination", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"container mx-auto px-4 py-8 max-w-3xl\">
    <h1 class=\"text-3xl font-bold mb-8 text-center\">Modifier le Trajet</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "id" => "trajet-form"]]);
        yield "
        ";
        // line 10
        $context["input_class"] = "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500";
        // line 11
        yield "        ";
        $context["label_class"] = "block mb-2 text-sm font-medium text-gray-900";
        // line 12
        yield "        ";
        $context["error_class"] = "text-red-600 font-bold text-sm mt-1";
        // line 13
        yield "
        ";
        // line 15
        yield "        <div class=\"mb-4\">
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "departure", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 16, $this->source); })())], "label" => "Lieu de départ"]);
        yield "
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "departure", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 17, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "departure", [], "any", false, false, false, 18), 'errors');
        yield "</div>
        </div>
        
        ";
        // line 22
        yield "        <div class=\"mb-4\">
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "destination", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 23, $this->source); })())], "label" => "Destination"]);
        yield "
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "destination", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 24, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "destination", [], "any", false, false, false, 25), 'errors');
        yield "</div>
        </div>
        
        ";
        // line 29
        yield "        <div class=\"mb-4\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "distance", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 30, $this->source); })())], "label" => "Distance (km)"]);
        yield "
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "distance", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 31, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "distance", [], "any", false, false, false, 32), 'errors');
        yield "</div>
        </div>
        
        ";
        // line 36
        yield "        <div class=\"mb-4\">
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "duration", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 37, $this->source); })())], "label" => "Durée (HH:MM)"]);
        yield "
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "duration", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" =>         // line 39
(isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 39, $this->source); })()), "placeholder" => "Ex: 01:30 pour 1 heure 30 minutes"]]);
        // line 41
        yield "
            <div class=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "duration", [], "any", false, false, false, 42), 'errors');
        yield "</div>
            <p class=\"text-sm text-gray-500 mt-1\">Format: HH:MM (format 24 heures)</p>
        </div>
        
        ";
        // line 47
        yield "        <div class=\"mb-4\">
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "departureTime", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 48, $this->source); })())], "label" => "Heure de départ"]);
        yield "
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "departureTime", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 49, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 50, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "departureTime", [], "any", false, false, false, 50), 'errors');
        yield "</div>
        </div>
        
        ";
        // line 54
        yield "        <div class=\"mb-4\">
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "price", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 55, $this->source); })())], "label" => "Prix (TND)"]);
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "price", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 56, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 57, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "price", [], "any", false, false, false, 57), 'errors');
        yield "</div>
        </div>

        ";
        // line 61
        yield "        <div class=\"mb-4\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "availableSeats", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 62, $this->source); })())], "label" => "Places disponibles"]);
        yield "
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "availableSeats", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" =>         // line 64
(isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 64, $this->source); })()), "min" => 1]]);
        // line 66
        yield "
            <div class=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 67, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "availableSeats", [], "any", false, false, false, 67), 'errors');
        yield "</div>
        </div>

        ";
        // line 71
        yield "        <div class=\"mb-4\">
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "typeTransport", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 72, $this->source); })())], "label" => "Type de transport"]);
        yield "
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "typeTransport", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" =>         // line 74
(isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 74, $this->source); })()), "data-vehicle-target" => "typeTransport"]]);
        // line 76
        yield "
            <div class=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "typeTransport", [], "any", false, false, false, 77), 'errors');
        yield "</div>
        </div>

        ";
        // line 81
        yield "        <div class=\"mb-4\" id=\"vehicle-field\" style=\"display: none;\">
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "vehicle", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 82, $this->source); })())], "label" => "Véhicule"]);
        yield "
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "vehicle", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 83, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 84, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vehicle", [], "any", false, false, false, 84), 'errors');
        yield "</div>
            <p class=\"text-sm text-gray-500 mt-1\">Seuls les véhicules disponibles sont affichés</p>
        </div>

        ";
        // line 89
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "arrivalTime", [], "any", true, true, false, 89)) {
            // line 90
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "arrivalTime", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "hidden"]]);
            yield "
        ";
        }
        // line 92
        yield "
        <div class=\"mt-6 flex justify-between\">
            <button type=\"submit\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Enregistrer
            </button>
            <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_affichage");
        yield "\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-gray-500 to-gray-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Annuler
            </a>
            ";
        // line 100
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "                <button type=\"button\" onclick=\"confirmDelete(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101), "html", null, true);
            yield ")\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-500 to-red-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                    Supprimer
                </button>
            ";
        }
        // line 105
        yield "        </div>
    ";
        // line 106
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_end');
        yield "

    ";
        // line 109
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 110
            yield "        <form id=\"delete-form-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 110, $this->source); })()), "id", [], "any", false, false, false, 110), "html", null, true);
            yield "\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trajet_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 110, $this->source); })()), "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\" method=\"POST\" style=\"display: none;\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        </form>
    ";
        }
        // line 114
        yield "
    <div class=\"mt-8 rounded-lg overflow-hidden\">
        <div class=\"bg-gradient-to-tl from-blue-500 to-violet-500 text-white px-6 py-3\">
            <h5 class=\"mb-0 text-lg font-semibold\">Informations calculées</h5>
        </div>
        <div class=\"bg-white px-6 py-4 shadow\">
            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <p class=\"font-medium text-gray-700\">Heure de départ:</p>
                    <p>";
        // line 123
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 123, $this->source); })()), "departureTime", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 123, $this->source); })()), "departureTime", [], "any", false, false, false, 123), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
        yield "</p>
                </div>
                <div>
                    <p class=\"font-medium text-gray-700\">Heure d'arrivée estimée:</p>
                    <p>";
        // line 127
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 127, $this->source); })()), "arrivalTime", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 127, $this->source); })()), "arrivalTime", [], "any", false, false, false, 127), "d/m/Y H:i"), "html", null, true)) : ("Non calculée"));
        yield "</p>
                </div>
                <div>
                    <p class=\"font-medium text-gray-700\">Places disponibles:</p>
                    <p>";
        // line 131
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["trajet"] ?? null), "availableSeats", [], "any", true, true, false, 131) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 131, $this->source); })()), "availableSeats", [], "any", false, false, false, 131)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 131, $this->source); })()), "availableSeats", [], "any", false, false, false, 131), "html", null, true)) : ("Non spécifié"));
        yield "</p>
                </div>
                ";
        // line 133
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 133, $this->source); })()), "typeTransport", [], "any", false, false, false, 133) == "Carpooling") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 133, $this->source); })()), "vehicle", [], "any", false, false, false, 133))) {
            // line 134
            yield "                <div>
                    <p class=\"font-medium text-gray-700\">Véhicule:</p>
                    <p>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 136, $this->source); })()), "vehicle", [], "any", false, false, false, 136), "brand", [], "any", false, false, false, 136), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 136, $this->source); })()), "vehicle", [], "any", false, false, false, 136), "model", [], "any", false, false, false, 136), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 136, $this->source); })()), "vehicle", [], "any", false, false, false, 136), "licensePlate", [], "any", false, false, false, 136), "html", null, true);
            yield ")</p>
                </div>
                ";
        }
        // line 139
        yield "            </div>
        </div>
    </div>
</div>

<!-- SweetAlert for delete confirmation -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Vehicle field toggle
    const typeTransportSelect = document.querySelector('[data-vehicle-target=\"typeTransport\"]');
    const vehicleField = document.getElementById('vehicle-field');
    const vehicleSelect = document.getElementById('";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "vehicle", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151), "html", null, true);
        yield "');
    const seatsInput = document.getElementById('";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "availableSeats", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152), "html", null, true);
        yield "');

    function toggleVehicleField() {
        if (typeTransportSelect?.value === 'Carpooling') {
            vehicleField.style.display = 'block';
        } else {
            vehicleField.style.display = 'none';
        }
    }

    // Initialize based on current value
    toggleVehicleField();
    
    // Add event listener for changes
    typeTransportSelect?.addEventListener('change', toggleVehicleField);

    // Update seats limit when vehicle changes
    if (vehicleSelect && seatsInput) {
        vehicleSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const maxSeats = selectedOption.getAttribute('data-max-seats');
            if (maxSeats) {
                seatsInput.max = maxSeats;
                if (parseInt(seatsInput.value) > parseInt(maxSeats)) {
                    seatsInput.value = maxSeats;
                }
            }
        });
    }

    // Delete confirmation
    window.confirmDelete = function(trajetId) {
        Swal.fire({
            title: 'Êtes-vous sûr ?',
            text: \"Vous ne pourrez pas annuler cette action !\",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Oui, supprimer !',
            cancelButtonText: 'Annuler',
            customClass: {
                confirmButton: 'inline-block px-6 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-emerald-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md',
                cancelButton: 'inline-block px-6 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all bg-red-600 rounded-lg cursor-pointer leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md'
            },
            buttonsStyling: false
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + trajetId).submit();
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
        return "trajet/modifier.html.twig";
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
        return array (  419 => 152,  415 => 151,  401 => 139,  391 => 136,  387 => 134,  385 => 133,  380 => 131,  373 => 127,  366 => 123,  355 => 114,  345 => 110,  342 => 109,  337 => 106,  334 => 105,  326 => 101,  324 => 100,  318 => 97,  311 => 92,  305 => 90,  302 => 89,  293 => 84,  289 => 83,  285 => 82,  282 => 81,  274 => 77,  271 => 76,  269 => 74,  268 => 73,  264 => 72,  261 => 71,  253 => 67,  250 => 66,  248 => 64,  247 => 63,  243 => 62,  240 => 61,  232 => 57,  228 => 56,  224 => 55,  221 => 54,  213 => 50,  209 => 49,  205 => 48,  202 => 47,  193 => 42,  190 => 41,  188 => 39,  187 => 38,  183 => 37,  180 => 36,  172 => 32,  168 => 31,  164 => 30,  161 => 29,  153 => 25,  149 => 24,  145 => 23,  142 => 22,  134 => 18,  130 => 17,  126 => 16,  123 => 15,  120 => 13,  117 => 12,  114 => 11,  112 => 10,  108 => 9,  103 => 6,  90 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Trajet - {{ trajet.departure }} vers {{ trajet.destination }}{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8 max-w-3xl\">
    <h1 class=\"text-3xl font-bold mb-8 text-center\">Modifier le Trajet</h1>

    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'id': 'trajet-form'}}) }}
        {% set input_class = 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500' %}
        {% set label_class = 'block mb-2 text-sm font-medium text-gray-900' %}
        {% set error_class = 'text-red-600 font-bold text-sm mt-1' %}

        {# Departure #}
        <div class=\"mb-4\">
            {{ form_label(form.departure, 'Lieu de départ', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.departure, {'attr': {'class': input_class}}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.departure) }}</div>
        </div>
        
        {# Destination #}
        <div class=\"mb-4\">
            {{ form_label(form.destination, 'Destination', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.destination, {'attr': {'class': input_class}}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.destination) }}</div>
        </div>
        
        {# Distance #}
        <div class=\"mb-4\">
            {{ form_label(form.distance, 'Distance (km)', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.distance, {'attr': {'class': input_class}}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.distance) }}</div>
        </div>
        
        {# Duration #}
        <div class=\"mb-4\">
            {{ form_label(form.duration, 'Durée (HH:MM)', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.duration, {'attr': {
                'class': input_class,
                'placeholder': 'Ex: 01:30 pour 1 heure 30 minutes'
            }}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.duration) }}</div>
            <p class=\"text-sm text-gray-500 mt-1\">Format: HH:MM (format 24 heures)</p>
        </div>
        
        {# Departure Time #}
        <div class=\"mb-4\">
            {{ form_label(form.departureTime, 'Heure de départ', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.departureTime, {'attr': {'class': input_class}}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.departureTime) }}</div>
        </div>
        
        {# Price #}
        <div class=\"mb-4\">
            {{ form_label(form.price, 'Prix (TND)', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.price, {'attr': {'class': input_class}}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.price) }}</div>
        </div>

        {# Available Seats #}
        <div class=\"mb-4\">
            {{ form_label(form.availableSeats, 'Places disponibles', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.availableSeats, {'attr': {
                'class': input_class,
                'min': 1
            }}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.availableSeats) }}</div>
        </div>

        {# Transport Type #}
        <div class=\"mb-4\">
            {{ form_label(form.typeTransport, 'Type de transport', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.typeTransport, {'attr': {
                'class': input_class,
                'data-vehicle-target': 'typeTransport'
            }}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.typeTransport) }}</div>
        </div>

        {# Vehicle Field - Only shown for Carpooling #}
        <div class=\"mb-4\" id=\"vehicle-field\" style=\"display: none;\">
            {{ form_label(form.vehicle, 'Véhicule', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.vehicle, {'attr': {'class': input_class}}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.vehicle) }}</div>
            <p class=\"text-sm text-gray-500 mt-1\">Seuls les véhicules disponibles sont affichés</p>
        </div>

        {# Hidden arrivalTime field #}
        {% if form.arrivalTime is defined %}
            {{ form_widget(form.arrivalTime, {'attr': {'class': 'hidden'}}) }}
        {% endif %}

        <div class=\"mt-6 flex justify-between\">
            <button type=\"submit\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Enregistrer
            </button>
            <a href=\"{{ path('trajet_affichage') }}\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-gray-500 to-gray-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Annuler
            </a>
            {% if trajet.id %}
                <button type=\"button\" onclick=\"confirmDelete({{ trajet.id }})\" class=\"inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-500 to-red-700 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                    Supprimer
                </button>
            {% endif %}
        </div>
    {{ form_end(form) }}

    {# Delete Form (outside the main form) #}
    {% if trajet.id %}
        <form id=\"delete-form-{{ trajet.id }}\" action=\"{{ path('trajet_supprimer', {'id': trajet.id}) }}\" method=\"POST\" style=\"display: none;\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        </form>
    {% endif %}

    <div class=\"mt-8 rounded-lg overflow-hidden\">
        <div class=\"bg-gradient-to-tl from-blue-500 to-violet-500 text-white px-6 py-3\">
            <h5 class=\"mb-0 text-lg font-semibold\">Informations calculées</h5>
        </div>
        <div class=\"bg-white px-6 py-4 shadow\">
            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    <p class=\"font-medium text-gray-700\">Heure de départ:</p>
                    <p>{{ trajet.departureTime ? trajet.departureTime|date('d/m/Y H:i') : 'Non définie' }}</p>
                </div>
                <div>
                    <p class=\"font-medium text-gray-700\">Heure d'arrivée estimée:</p>
                    <p>{{ trajet.arrivalTime ? trajet.arrivalTime|date('d/m/Y H:i') : 'Non calculée' }}</p>
                </div>
                <div>
                    <p class=\"font-medium text-gray-700\">Places disponibles:</p>
                    <p>{{ trajet.availableSeats ?? 'Non spécifié' }}</p>
                </div>
                {% if trajet.typeTransport == 'Carpooling' and trajet.vehicle %}
                <div>
                    <p class=\"font-medium text-gray-700\">Véhicule:</p>
                    <p>{{ trajet.vehicle.brand }} {{ trajet.vehicle.model }} ({{ trajet.vehicle.licensePlate }})</p>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert for delete confirmation -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Vehicle field toggle
    const typeTransportSelect = document.querySelector('[data-vehicle-target=\"typeTransport\"]');
    const vehicleField = document.getElementById('vehicle-field');
    const vehicleSelect = document.getElementById('{{ form.vehicle.vars.id }}');
    const seatsInput = document.getElementById('{{ form.availableSeats.vars.id }}');

    function toggleVehicleField() {
        if (typeTransportSelect?.value === 'Carpooling') {
            vehicleField.style.display = 'block';
        } else {
            vehicleField.style.display = 'none';
        }
    }

    // Initialize based on current value
    toggleVehicleField();
    
    // Add event listener for changes
    typeTransportSelect?.addEventListener('change', toggleVehicleField);

    // Update seats limit when vehicle changes
    if (vehicleSelect && seatsInput) {
        vehicleSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const maxSeats = selectedOption.getAttribute('data-max-seats');
            if (maxSeats) {
                seatsInput.max = maxSeats;
                if (parseInt(seatsInput.value) > parseInt(maxSeats)) {
                    seatsInput.value = maxSeats;
                }
            }
        });
    }

    // Delete confirmation
    window.confirmDelete = function(trajetId) {
        Swal.fire({
            title: 'Êtes-vous sûr ?',
            text: \"Vous ne pourrez pas annuler cette action !\",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Oui, supprimer !',
            cancelButtonText: 'Annuler',
            customClass: {
                confirmButton: 'inline-block px-6 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-emerald-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md',
                cancelButton: 'inline-block px-6 py-3 mr-3 font-bold text-center text-white uppercase align-middle transition-all bg-red-600 rounded-lg cursor-pointer leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md'
            },
            buttonsStyling: false
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + trajetId).submit();
            }
        });
    }
});
</script>
{% endblock %}", "trajet/modifier.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\trajet\\modifier.html.twig");
    }
}
