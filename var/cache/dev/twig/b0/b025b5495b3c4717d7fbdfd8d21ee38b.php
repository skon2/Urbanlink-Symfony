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

/* trajet/ajouter.html.twig */
class __TwigTemplate_5a01ad5b3a62a55a58db951a3257f288 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/ajouter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/ajouter.html.twig"));

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

        yield "Ajouter un Trajet";
        
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
    <h1 class=\"text-3xl font-bold mb-8 text-center\">Ajouter un Trajet</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "trajet-form"]]);
        yield "

        ";
        // line 11
        $context["input_class"] = "w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500";
        // line 12
        yield "        ";
        $context["label_class"] = "block mb-2 text-sm font-medium text-gray-900";
        // line 13
        yield "        ";
        $context["error_class"] = "text-red-600 font-bold";
        // line 14
        yield "
        ";
        // line 16
        yield "        <div class=\"mb-4\">
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "departure", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 17, $this->source); })())], "label" => "Lieu de départ"]);
        yield "
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "departure", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 18, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "departure", [], "any", false, false, false, 19), 'errors');
        yield "</div>
        </div>

        ";
        // line 23
        yield "        <div class=\"mb-4\">
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "destination", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 24, $this->source); })())], "label" => "Destination"]);
        yield "
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "destination", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 25, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "destination", [], "any", false, false, false, 26), 'errors');
        yield "</div>
        </div>

        ";
        // line 30
        yield "        <div class=\"mb-4\">
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "distance", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 31, $this->source); })())], "label" => "Distance (km)"]);
        yield "
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "distance", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 32, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "distance", [], "any", false, false, false, 33), 'errors');
        yield "</div>
        </div>

        ";
        // line 37
        yield "        <div class=\"mb-4\">
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "duration", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 38, $this->source); })())], "label" => "Durée (HH:MM)"]);
        yield "
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "duration", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 39, $this->source); })()), "placeholder" => "Ex: 01:30 pour 1 heure 30 minutes"]]);
        yield "
            <div class=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "duration", [], "any", false, false, false, 40), 'errors');
        yield "</div>
            <p class=\"text-sm text-gray-500 mt-1\">Format: HH:MM (format 24 heures)</p>
        </div>

        ";
        // line 45
        yield "        <div class=\"mb-4\">
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "departureTime", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 46, $this->source); })())], "label" => "Heure de départ"]);
        yield "
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "departureTime", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 47, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 48, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "departureTime", [], "any", false, false, false, 48), 'errors');
        yield "</div>
        </div>

        ";
        // line 52
        yield "        <div class=\"mb-4\">
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "price", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 53, $this->source); })())], "label" => "Prix (TND)"]);
        yield "
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "price", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 54, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "price", [], "any", false, false, false, 55), 'errors');
        yield "</div>
        </div>

        ";
        // line 59
        yield "        <div class=\"mb-4\">
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "availableSeats", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 60, $this->source); })())], "label" => "Places disponibles"]);
        yield "
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "availableSeats", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 61, $this->source); })()), "min" => 1]]);
        yield "
            <div class=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "availableSeats", [], "any", false, false, false, 62), 'errors');
        yield "</div>
        </div>

        ";
        // line 66
        yield "        <div class=\"mb-4\">
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "typeTransport", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 67, $this->source); })())], "label" => "Type de transport"]);
        yield "
            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "typeTransport", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 68, $this->source); })()), "data-vehicle-target" => "typeTransport"]]);
        yield "
            <div class=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 69, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "typeTransport", [], "any", false, false, false, 69), 'errors');
        yield "</div>
        </div>

        ";
        // line 73
        yield "        <div class=\"mb-4\" id=\"vehicle-field\" style=\"display: none;\">
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vehicle", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new RuntimeError('Variable "label_class" does not exist.', 74, $this->source); })())], "label" => "Véhicule"]);
        yield "
            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "vehicle", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => (isset($context["input_class"]) || array_key_exists("input_class", $context) ? $context["input_class"] : (function () { throw new RuntimeError('Variable "input_class" does not exist.', 75, $this->source); })())]]);
        yield "
            <div class=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_class"]) || array_key_exists("error_class", $context) ? $context["error_class"] : (function () { throw new RuntimeError('Variable "error_class" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vehicle", [], "any", false, false, false, 76), 'errors');
        yield "</div>
            <p class=\"text-sm text-gray-500 mt-1\">Seuls les véhicules disponibles sont affichés</p>
        </div>

        ";
        // line 81
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'rest');
        yield "

        <div class=\"mt-6\">
            <button type=\"submit\" class=\"inline-block w-full px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Ajouter
            </button>
        </div>
    ";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        yield "
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const typeTransportSelect = document.querySelector('[data-vehicle-target=\"typeTransport\"]');
    const vehicleField = document.getElementById('vehicle-field');
    const vehicleSelect = document.getElementById('";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vehicle", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95), "html", null, true);
        yield "');
    const seatsInput = document.getElementById('";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "availableSeats", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "html", null, true);
        yield "');

    function toggleVehicleField() {
        if (typeTransportSelect?.value === 'Carpooling') {
            vehicleField.style.display = 'block';
        } else {
            vehicleField.style.display = 'none';
        }
    }

    toggleVehicleField();
    typeTransportSelect?.addEventListener('change', toggleVehicleField);

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
        return "trajet/ajouter.html.twig";
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
        return array (  319 => 96,  315 => 95,  305 => 88,  294 => 81,  285 => 76,  281 => 75,  277 => 74,  274 => 73,  266 => 69,  262 => 68,  258 => 67,  255 => 66,  247 => 62,  243 => 61,  239 => 60,  236 => 59,  228 => 55,  224 => 54,  220 => 53,  217 => 52,  209 => 48,  205 => 47,  201 => 46,  198 => 45,  189 => 40,  185 => 39,  181 => 38,  178 => 37,  170 => 33,  166 => 32,  162 => 31,  159 => 30,  151 => 26,  147 => 25,  143 => 24,  140 => 23,  132 => 19,  128 => 18,  124 => 17,  121 => 16,  118 => 14,  115 => 13,  112 => 12,  110 => 11,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un Trajet{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8 max-w-3xl\">
    <h1 class=\"text-3xl font-bold mb-8 text-center\">Ajouter un Trajet</h1>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'trajet-form'}}) }}

        {% set input_class = 'w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500' %}
        {% set label_class = 'block mb-2 text-sm font-medium text-gray-900' %}
        {% set error_class = 'text-red-600 font-bold' %}

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
            {{ form_widget(form.duration, {'attr': {'class': input_class, 'placeholder': 'Ex: 01:30 pour 1 heure 30 minutes'}}) }}
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
            {{ form_widget(form.availableSeats, {'attr': {'class': input_class, 'min': 1}}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.availableSeats) }}</div>
        </div>

        {# Transport Type #}
        <div class=\"mb-4\">
            {{ form_label(form.typeTransport, 'Type de transport', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.typeTransport, {'attr': {'class': input_class, 'data-vehicle-target': 'typeTransport'}}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.typeTransport) }}</div>
        </div>

        {# Vehicle #}
        <div class=\"mb-4\" id=\"vehicle-field\" style=\"display: none;\">
            {{ form_label(form.vehicle, 'Véhicule', {'label_attr': {'class': label_class}}) }}
            {{ form_widget(form.vehicle, {'attr': {'class': input_class}}) }}
            <div class=\"{{ error_class }}\">{{ form_errors(form.vehicle) }}</div>
            <p class=\"text-sm text-gray-500 mt-1\">Seuls les véhicules disponibles sont affichés</p>
        </div>

        {# Catch hidden or undefined fields like arrivalTime #}
        {{ form_rest(form) }}

        <div class=\"mt-6\">
            <button type=\"submit\" class=\"inline-block w-full px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md\">
                Ajouter
            </button>
        </div>
    {{ form_end(form) }}
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
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

    toggleVehicleField();
    typeTransportSelect?.addEventListener('change', toggleVehicleField);

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
});
</script>
{% endblock %}
", "trajet/ajouter.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\trajet\\ajouter.html.twig");
    }
}
