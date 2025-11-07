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

/* front_office/taxi/rate.html.twig */
class __TwigTemplate_662f99497ed4ada0e38ef39dc337c659 extends Template
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
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/taxi/rate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/taxi/rate.html.twig"));

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

        yield "Rate the Taxi Driver";
        
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
        yield "<div class=\"max-w-3xl mx-auto my-8 px-4 space-y-6\">
  <!-- Rating Header -->
  <div class=\"text-center mb-8\">
    <h1 class=\"text-3xl font-bold text-gray-800 mb-2\">Rate Your Driver</h1>
    <div class=\"flex items-center justify-center space-x-2\">
      <svg class=\"w-6 h-6 text-yellow-400\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
        <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"/>
      </svg>
      <span class=\"text-lg text-gray-600\">Share your experience</span>
    </div>
  </div>

  <!-- Taxi Details Card -->
  <div class=\"bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl\">
    <div class=\"flex items-center space-x-4 mb-4\">
      <div class=\"bg-blue-100 p-3 rounded-lg\">
        <svg class=\"w-8 h-8 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\"/>
        </svg>
      </div>
      <div>
        <h2 class=\"text-xl font-semibold text-gray-800\">
          ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 28, $this->source); })()), "marque", [], "any", false, false, false, 28), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 28, $this->source); })()), "modele", [], "any", false, false, false, 28), "html", null, true);
        yield " 
          <span class=\"text-blue-600\">• ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 29, $this->source); })()), "immatriculation", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
        </h2>
        <div class=\"mt-2\">
          ";
        // line 32
        if (((isset($context["totalRatings"]) || array_key_exists("totalRatings", $context) ? $context["totalRatings"] : (function () { throw new RuntimeError('Variable "totalRatings" does not exist.', 32, $this->source); })()) > 0)) {
            // line 33
            yield "            <div class=\"flex items-center space-x-2\">
              <div class=\"flex items-center\">
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 36
                yield "                  <svg class=\"w-5 h-5 ";
                yield ((((isset($context["avgRating"]) || array_key_exists("avgRating", $context) ? $context["avgRating"] : (function () { throw new RuntimeError('Variable "avgRating" does not exist.', 36, $this->source); })()) >= ($context["i"] * 2))) ? ("text-yellow-400") : ("text-gray-300"));
                yield "\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                    <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"/>
                  </svg>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "              </div>
              <span class=\"text-gray-600\">
                ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["avgRating"]) || array_key_exists("avgRating", $context) ? $context["avgRating"] : (function () { throw new RuntimeError('Variable "avgRating" does not exist.', 42, $this->source); })()), 1), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalRatings"]) || array_key_exists("totalRatings", $context) ? $context["totalRatings"] : (function () { throw new RuntimeError('Variable "totalRatings" does not exist.', 42, $this->source); })()), "html", null, true);
            yield " reviews)
              </span>
            </div>
          ";
        } else {
            // line 46
            yield "            <p class=\"text-gray-500\">Be the first to rate this driver</p>
          ";
        }
        // line 48
        yield "        </div>
      </div>
    </div>
  </div>

  <!-- Rating Form -->
  <form action=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        yield "\" method=\"post\" class=\"bg-white rounded-2xl shadow-lg p-6 space-y-6\">
    <!-- Rating Input -->
    <div class=\"space-y-2\">
      <label class=\"block text-lg font-medium text-gray-700\">Your Rating</label>
      <div class=\"rating-stars flex space-x-2\" id=\"starContainer\">
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 60
            yield "          <button type=\"button\" 
                  class=\"star w-8 h-8 transition-colors duration-200 ";
            // line 61
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["rating"] ?? null), "note", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 61, $this->source); })()), "note", [], "any", false, false, false, 61), 0)) : (0)) >= $context["i"])) ? ("text-yellow-400") : ("text-gray-300"));
            yield "\"
                  data-value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">
            ★
          </button>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "      </div>
      <input type=\"hidden\" id=\"note\" name=\"note\" value=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["rating"] ?? null), "note", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 67, $this->source); })()), "note", [], "any", false, false, false, 67), "")) : ("")), "html", null, true);
        yield "\">
    </div>

    <!-- Comment Input -->
    <div class=\"space-y-2\">
      <label class=\"block text-lg font-medium text-gray-700\">Your Feedback</label>
      <textarea id=\"commentaire\" 
                name=\"commentaire\" 
                class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all\"
                rows=\"4\"
                placeholder=\"Share details about your experience...\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["rating"] ?? null), "commentaire", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 77, $this->source); })()), "commentaire", [], "any", false, false, false, 77), "")) : ("")), "html", null, true);
        yield "</textarea>
    </div>

    <!-- Submit Button -->
    <button type=\"submit\" 
            class=\"w-full py-3 px-6 bg-gradient-to-r from-blue-600 to-blue-500 text-white font-semibold rounded-xl shadow-md hover:shadow-lg transition-all duration-200 transform hover:-translate-y-0.5\">
      Submit Review
    </button>
  </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const stars = document.querySelectorAll('.star');
  const noteInput = document.getElementById('note');
  
  // Initialize with existing value
  let currentRating = parseInt(noteInput.value) || 0;
  updateStars(currentRating);

  stars.forEach(star => {
    star.addEventListener('click', function() {
      currentRating = parseInt(this.dataset.value);
      noteInput.value = currentRating;
      updateStars(currentRating);
    });

    star.addEventListener('mouseover', function() {
      const hoverValue = parseInt(this.dataset.value);
      highlightStars(hoverValue);
    });

    star.addEventListener('mouseout', function() {
      updateStars(currentRating);
    });
  });

  function highlightStars(value) {
    stars.forEach(star => {
      const starValue = parseInt(star.dataset.value);
      star.classList.toggle('text-yellow-300', starValue <= value);
      star.classList.toggle('text-gray-300', starValue > value);
    });
  }

  function updateStars(value) {
    stars.forEach(star => {
      const starValue = parseInt(star.dataset.value);
      star.classList.toggle('text-yellow-400', starValue <= value);
      star.classList.toggle('text-gray-300', starValue > value);
      star.classList.remove('text-yellow-300');
    });
  }
});
</script>

<style>
  .star {
    transition: all 0.2s ease;
    cursor: pointer;
    font-size: 1.5rem;
  }
  .star:hover {
    transform: scale(1.2);
  }
  .text-yellow-300 { color: #fcd34d; } /* Hover color */
  .text-yellow-400 { color: #fbbf24; } /* Selected color */
  .text-gray-300 { color: #d1d5db; }   /* Inactive color */
</style>
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
        return "front_office/taxi/rate.html.twig";
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
        return array (  227 => 77,  214 => 67,  211 => 66,  201 => 62,  197 => 61,  194 => 60,  190 => 59,  182 => 54,  174 => 48,  170 => 46,  161 => 42,  157 => 40,  146 => 36,  142 => 35,  138 => 33,  136 => 32,  130 => 29,  124 => 28,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Rate the Taxi Driver{% endblock %}

{% block body %}
<div class=\"max-w-3xl mx-auto my-8 px-4 space-y-6\">
  <!-- Rating Header -->
  <div class=\"text-center mb-8\">
    <h1 class=\"text-3xl font-bold text-gray-800 mb-2\">Rate Your Driver</h1>
    <div class=\"flex items-center justify-center space-x-2\">
      <svg class=\"w-6 h-6 text-yellow-400\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
        <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"/>
      </svg>
      <span class=\"text-lg text-gray-600\">Share your experience</span>
    </div>
  </div>

  <!-- Taxi Details Card -->
  <div class=\"bg-white rounded-2xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl\">
    <div class=\"flex items-center space-x-4 mb-4\">
      <div class=\"bg-blue-100 p-3 rounded-lg\">
        <svg class=\"w-8 h-8 text-blue-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7\"/>
        </svg>
      </div>
      <div>
        <h2 class=\"text-xl font-semibold text-gray-800\">
          {{ taxi.marque }} {{ taxi.modele }} 
          <span class=\"text-blue-600\">• {{ taxi.immatriculation }}</span>
        </h2>
        <div class=\"mt-2\">
          {% if totalRatings > 0 %}
            <div class=\"flex items-center space-x-2\">
              <div class=\"flex items-center\">
                {% for i in 1..5 %}
                  <svg class=\"w-5 h-5 {{ avgRating >= i*2 ? 'text-yellow-400' : 'text-gray-300' }}\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                    <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\"/>
                  </svg>
                {% endfor %}
              </div>
              <span class=\"text-gray-600\">
                {{ avgRating|number_format(1) }} ({{ totalRatings }} reviews)
              </span>
            </div>
          {% else %}
            <p class=\"text-gray-500\">Be the first to rate this driver</p>
          {% endif %}
        </div>
      </div>
    </div>
  </div>

  <!-- Rating Form -->
  <form action=\"{{ path('taxi_rate', {'id': taxi.id}) }}\" method=\"post\" class=\"bg-white rounded-2xl shadow-lg p-6 space-y-6\">
    <!-- Rating Input -->
    <div class=\"space-y-2\">
      <label class=\"block text-lg font-medium text-gray-700\">Your Rating</label>
      <div class=\"rating-stars flex space-x-2\" id=\"starContainer\">
        {% for i in 1..10 %}
          <button type=\"button\" 
                  class=\"star w-8 h-8 transition-colors duration-200 {{ (rating.note|default(0)) >= i ? 'text-yellow-400' : 'text-gray-300' }}\"
                  data-value=\"{{ i }}\">
            ★
          </button>
        {% endfor %}
      </div>
      <input type=\"hidden\" id=\"note\" name=\"note\" value=\"{{ rating.note|default('') }}\">
    </div>

    <!-- Comment Input -->
    <div class=\"space-y-2\">
      <label class=\"block text-lg font-medium text-gray-700\">Your Feedback</label>
      <textarea id=\"commentaire\" 
                name=\"commentaire\" 
                class=\"w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all\"
                rows=\"4\"
                placeholder=\"Share details about your experience...\">{{ rating.commentaire|default('') }}</textarea>
    </div>

    <!-- Submit Button -->
    <button type=\"submit\" 
            class=\"w-full py-3 px-6 bg-gradient-to-r from-blue-600 to-blue-500 text-white font-semibold rounded-xl shadow-md hover:shadow-lg transition-all duration-200 transform hover:-translate-y-0.5\">
      Submit Review
    </button>
  </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const stars = document.querySelectorAll('.star');
  const noteInput = document.getElementById('note');
  
  // Initialize with existing value
  let currentRating = parseInt(noteInput.value) || 0;
  updateStars(currentRating);

  stars.forEach(star => {
    star.addEventListener('click', function() {
      currentRating = parseInt(this.dataset.value);
      noteInput.value = currentRating;
      updateStars(currentRating);
    });

    star.addEventListener('mouseover', function() {
      const hoverValue = parseInt(this.dataset.value);
      highlightStars(hoverValue);
    });

    star.addEventListener('mouseout', function() {
      updateStars(currentRating);
    });
  });

  function highlightStars(value) {
    stars.forEach(star => {
      const starValue = parseInt(star.dataset.value);
      star.classList.toggle('text-yellow-300', starValue <= value);
      star.classList.toggle('text-gray-300', starValue > value);
    });
  }

  function updateStars(value) {
    stars.forEach(star => {
      const starValue = parseInt(star.dataset.value);
      star.classList.toggle('text-yellow-400', starValue <= value);
      star.classList.toggle('text-gray-300', starValue > value);
      star.classList.remove('text-yellow-300');
    });
  }
});
</script>

<style>
  .star {
    transition: all 0.2s ease;
    cursor: pointer;
    font-size: 1.5rem;
  }
  .star:hover {
    transform: scale(1.2);
  }
  .text-yellow-300 { color: #fcd34d; } /* Hover color */
  .text-yellow-400 { color: #fbbf24; } /* Selected color */
  .text-gray-300 { color: #d1d5db; }   /* Inactive color */
</style>
{% endblock %}", "front_office/taxi/rate.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\front_office\\taxi\\rate.html.twig");
    }
}
