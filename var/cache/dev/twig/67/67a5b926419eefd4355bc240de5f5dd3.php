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

/* reservation/new.html.twig */
class __TwigTemplate_6e9b9c166ee69fc550e51df65c1a11f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent = $this->load("basef.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "  <div class=\"container mx-auto px-4 py-6\">
    <div class=\"bg-white p-6 rounded-lg shadow-md\">
      <h1 class=\"text-2xl font-bold mb-4\">Réserver: ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 6, $this->source); })()), "departure", [], "any", false, false, false, 6), "html", null, true);
        yield " → ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 6, $this->source); })()), "destination", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>
      
      ";
        // line 9
        yield "      <div class=\"mb-6 p-4 bg-gray-50 rounded-lg\">
        <h2 class=\"text-lg font-semibold mb-3\">Détails du trajet</h2>
        <div class=\"grid grid-cols-2 gap-4\">
          <div>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Départ:</span> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 13, $this->source); })()), "departure", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Destination:</span> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 14, $this->source); })()), "destination", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Date/Heure:</span> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 15, $this->source); })()), "departureTime", [], "any", false, false, false, 15), "d/m/Y H:i"), "html", null, true);
        yield "</p>
          </div>
          <div>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Type:</span> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 18, $this->source); })()), "typeTransport", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Prix par place:</span> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19), 2, ",", " "), "html", null, true);
        yield " €</p>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Places disponibles:</span> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 20, $this->source); })()), "availableSeats", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
          </div>
        </div>
      </div>

      ";
        // line 26
        yield "      ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["id" => "reservation-form", "class" => "space-y-4"]]);
        yield "

        <div class=\"mb-4\">
          ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Nombre de places"]);
        // line 31
        yield "

          ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm", "min" => 1, "max" => CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 37, $this->source); })()), "availableSeats", [], "any", false, false, false, 37), "oninput" => "updateTotalPrice(this.value)"]]);
        // line 40
        yield "

          ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 42), 'errors');
        yield "
        </div>

        ";
        // line 46
        yield "        <div class=\"p-3 bg-blue-50 rounded-lg mb-4\">
          <p class=\"text-sm text-gray-700\">
            <span class=\"font-medium\">Total à payer:</span>
            <strong id=\"total-price-preview\">
              ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 50, $this->source); })()), "price", [], "any", false, false, false, 50) * ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numberOfSeats", [], "any", false, true, false, 50), "vars", [], "any", false, true, false, 50), "data", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "data", [], "any", false, false, false, 50), 1)) : (1))), 2, ",", " "), "html", null, true);
        yield " €
            </strong>
            <span id=\"place-count\"> (pour ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "numberOfSeats", [], "any", false, true, false, 52), "vars", [], "any", false, true, false, 52), "data", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "data", [], "any", false, false, false, 52), 1)) : (1)), "html", null, true);
        yield " place";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "data", [], "any", false, false, false, 52) > 1)) ? ("s") : (""));
        yield ")</span>
          </p>
        </div>

        <div class=\"flex justify-end space-x-4\">
          <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_affichage");
        yield "\" class=\"px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500\">
            Annuler
          </a>
          <button type=\"submit\" class=\"inline-block px-6 py-3 font-bold text-white uppercase transition-all rounded-lg bg-gradient-to-tl from-blue-800 to-blue-500 hover:shadow-lg hover:-translate-y-0.5 active:opacity-85\">
          Payer maintenant
        </button>
        
        </div>

      ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        yield "
    </div>
  </div>

<script>
// Get the exact price from PHP to avoid floating point issues
const pricePerSeat = ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 72, $this->source); })()), "price", [], "any", false, false, false, 72), "html", null, true);
        yield ";
const maxSeats = ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trajet"]) || array_key_exists("trajet", $context) ? $context["trajet"] : (function () { throw new RuntimeError('Variable "trajet" does not exist.', 73, $this->source); })()), "availableSeats", [], "any", false, false, false, 73), "html", null, true);
        yield ";

function updateTotalPrice(seats) {
    // Ensure seats is within valid range
    let count = parseInt(seats) || 1;
    count = Math.max(1, Math.min(count, maxSeats));
    
    // Calculate total price (same calculation as in PHP)
    const total = pricePerSeat * count;
    
    // Format for display
    const formattedTotal = total.toLocaleString('fr-FR', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });

    // Update display
    document.getElementById('total-price-preview').textContent = formattedTotal + ' €';
    document.getElementById('place-count').textContent = `(pour \${count} place\${count > 1 ? 's' : ''})`;
    
    // Update input value in case it was corrected
    document.getElementById('";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "').value = count;
}

// Initialize event listener
document.addEventListener('DOMContentLoaded', function() {
    const seatsInput = document.getElementById('";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "numberOfSeats", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99), "html", null, true);
        yield "');
    seatsInput.addEventListener('input', function() {
        updateTotalPrice(this.value);
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
        return "reservation/new.html.twig";
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
        return array (  227 => 99,  219 => 94,  195 => 73,  191 => 72,  182 => 66,  170 => 57,  160 => 52,  155 => 50,  149 => 46,  143 => 42,  139 => 40,  137 => 37,  136 => 33,  132 => 31,  130 => 29,  123 => 26,  115 => 20,  111 => 19,  107 => 18,  101 => 15,  97 => 14,  93 => 13,  87 => 9,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block body %}
  <div class=\"container mx-auto px-4 py-6\">
    <div class=\"bg-white p-6 rounded-lg shadow-md\">
      <h1 class=\"text-2xl font-bold mb-4\">Réserver: {{ trajet.departure }} → {{ trajet.destination }}</h1>
      
      {# Détails du trajet #}
      <div class=\"mb-6 p-4 bg-gray-50 rounded-lg\">
        <h2 class=\"text-lg font-semibold mb-3\">Détails du trajet</h2>
        <div class=\"grid grid-cols-2 gap-4\">
          <div>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Départ:</span> {{ trajet.departure }}</p>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Destination:</span> {{ trajet.destination }}</p>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Date/Heure:</span> {{ trajet.departureTime|date('d/m/Y H:i') }}</p>
          </div>
          <div>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Type:</span> {{ trajet.typeTransport }}</p>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Prix par place:</span> {{ trajet.price|number_format(2, ',', ' ') }} €</p>
            <p class=\"text-sm text-gray-600\"><span class=\"font-medium\">Places disponibles:</span> {{ trajet.availableSeats }}</p>
          </div>
        </div>
      </div>

      {# Formulaire de réservation #}
      {{ form_start(form, { 'attr': { 'id': 'reservation-form', 'class': 'space-y-4' } }) }}

        <div class=\"mb-4\">
          {{ form_label(form.numberOfSeats, 'Nombre de places', {
            'label_attr': { 'class': 'block text-sm font-medium text-gray-700 mb-1' }
          }) }}

          {{ form_widget(form.numberOfSeats, {
            'attr': {
              'class': 'mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm',
              'min': 1,
              'max': trajet.availableSeats,
              'oninput': 'updateTotalPrice(this.value)'
            }
          }) }}

          {{ form_errors(form.numberOfSeats) }}
        </div>

        {# Aperçu du paiement #}
        <div class=\"p-3 bg-blue-50 rounded-lg mb-4\">
          <p class=\"text-sm text-gray-700\">
            <span class=\"font-medium\">Total à payer:</span>
            <strong id=\"total-price-preview\">
              {{ (trajet.price * (form.numberOfSeats.vars.data|default(1)))|number_format(2, ',', ' ') }} €
            </strong>
            <span id=\"place-count\"> (pour {{ form.numberOfSeats.vars.data|default(1) }} place{{ form.numberOfSeats.vars.data > 1 ? 's' : '' }})</span>
          </p>
        </div>

        <div class=\"flex justify-end space-x-4\">
          <a href=\"{{ path('reservation_affichage') }}\" class=\"px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500\">
            Annuler
          </a>
          <button type=\"submit\" class=\"inline-block px-6 py-3 font-bold text-white uppercase transition-all rounded-lg bg-gradient-to-tl from-blue-800 to-blue-500 hover:shadow-lg hover:-translate-y-0.5 active:opacity-85\">
          Payer maintenant
        </button>
        
        </div>

      {{ form_end(form) }}
    </div>
  </div>

<script>
// Get the exact price from PHP to avoid floating point issues
const pricePerSeat = {{ trajet.price }};
const maxSeats = {{ trajet.availableSeats }};

function updateTotalPrice(seats) {
    // Ensure seats is within valid range
    let count = parseInt(seats) || 1;
    count = Math.max(1, Math.min(count, maxSeats));
    
    // Calculate total price (same calculation as in PHP)
    const total = pricePerSeat * count;
    
    // Format for display
    const formattedTotal = total.toLocaleString('fr-FR', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });

    // Update display
    document.getElementById('total-price-preview').textContent = formattedTotal + ' €';
    document.getElementById('place-count').textContent = `(pour \${count} place\${count > 1 ? 's' : ''})`;
    
    // Update input value in case it was corrected
    document.getElementById('{{ form.numberOfSeats.vars.id }}').value = count;
}

// Initialize event listener
document.addEventListener('DOMContentLoaded', function() {
    const seatsInput = document.getElementById('{{ form.numberOfSeats.vars.id }}');
    seatsInput.addEventListener('input', function() {
        updateTotalPrice(this.value);
    });
});
</script>
{% endblock %}", "reservation/new.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\reservation\\new.html.twig");
    }
}
