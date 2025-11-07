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

/* taxiste/dashboard.html.twig */
class __TwigTemplate_bda14ce4b5f4c5c42bb3852bfd06fa34 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base_taxiste.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxiste/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxiste/dashboard.html.twig"));

        $this->parent = $this->load("base_taxiste.html.twig", 2);
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

        yield "Taxi Driver Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"min-h-screen bg-gray-50\">
  <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8\">
    ";
        // line 10
        yield "    <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4\">
      <div>
        <h1 class=\"text-3xl font-bold text-gray-900\">Dashboard</h1>
        <p class=\"text-indigo-600 mt-1 flex items-center\">
          <span class=\"relative flex h-3 w-3 mr-2\">
            <span class=\"animate-ping absolute inline-flex h-full w-full rounded-full ";
        // line 15
        if (CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 15, $this->source); })()), "statut", [], "any", false, false, false, 15)), ["disponible", "en course"])) {
            yield "bg-green-400";
        } else {
            yield "bg-red-400";
        }
        yield " opacity-75\"></span>
            <span class=\"relative inline-flex rounded-full h-3 w-3 ";
        // line 16
        if (CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 16, $this->source); })()), "statut", [], "any", false, false, false, 16)), ["disponible", "en course"])) {
            yield "bg-green-500";
        } else {
            yield "bg-red-500";
        }
        yield "\"></span>
          </span>
          Status: ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 18, $this->source); })()), "statut", [], "any", false, false, false, 18), "html", null, true);
        yield "
        </p>
      </div>
      
      ";
        // line 23
        yield "      <div class=\"relative\">
        <button id=\"notifToggle\" class=\"relative p-2 rounded-full bg-white shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
          <svg class=\"h-6 w-6 text-gray-600\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9\"/>
          </svg>
          <span id=\"notifCount\" class=\"absolute -top-1 -right-1 inline-flex items-center justify-center px-2 py-1 text-xs font-bold text-white bg-red-600 rounded-full hidden\">0</span>
        </button>
        
        <div id=\"notifList\" class=\"hidden origin-top-right absolute right-0 mt-2 w-80 max-h-96 overflow-y-auto bg-white rounded-lg shadow-xl ring-1 ring-black ring-opacity-5 transition-all transform opacity-0 scale-95 z-10\">
          <div class=\"py-1\">
            <ul id=\"notifItems\" class=\"divide-y divide-gray-100\"></ul>
          </div>
        </div>
      </div>
    </div>
    
    ";
        // line 40
        yield "    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
      ";
        // line 42
        yield "      <div class=\"lg:col-span-1\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg\">
          <div class=\"px-4 py-5 sm:px-6 bg-indigo-700\">
            <h3 class=\"text-lg font-medium text-white\">Your Vehicle</h3>
          </div>
          <div class=\"px-4 py-5 sm:p-6\">
            <div class=\"flex items-center\">
              <div class=\"flex-shrink-0 bg-indigo-100 rounded-md p-3\">
                <svg class=\"h-8 w-8 text-indigo-700\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4\"/>
                </svg>
              </div>
              <div class=\"ml-4\">
                <h4 class=\"text-lg font-semibold text-gray-900\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 55, $this->source); })()), "marque", [], "any", false, false, false, 55), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 55, $this->source); })()), "modele", [], "any", false, false, false, 55), "html", null, true);
        yield "</h4>
                <p class=\"text-sm text-gray-500\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 56, $this->source); })()), "immatriculation", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>
              </div>
            </div>
            
            <div class=\"mt-6\">
              <form action=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_taxi_change_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
        yield "\" method=\"post\">
                ";
        // line 62
        $context["st"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 62, $this->source); })()), "statut", [], "any", false, false, false, 62));
        // line 63
        yield "                <button type=\"submit\" class=\"w-full flex items-center justify-center px-4 py-3 border border-transparent rounded-md shadow-sm text-sm font-medium text-white ";
        if (CoreExtension::inFilter((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 63, $this->source); })()), ["disponible", "en course"])) {
            yield "bg-red-600 hover:bg-red-700";
        } else {
            yield "bg-green-600 hover:bg-green-700";
        }
        yield " focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200\">
                  ";
        // line 64
        if (CoreExtension::inFilter((isset($context["st"]) || array_key_exists("st", $context) ? $context["st"] : (function () { throw new RuntimeError('Variable "st" does not exist.', 64, $this->source); })()), ["disponible", "en course"])) {
            // line 65
            yield "                    <svg class=\"-ml-1 mr-2 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\"/>
                    </svg>
                    Set as Unavailable
                  ";
        } else {
            // line 70
            yield "                    <svg class=\"-ml-1 mr-2 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
                    </svg>
                    Set as Available
                  ";
        }
        // line 75
        yield "                </button>
              </form>
            </div>
          </div>
        </div>
        
        ";
        // line 82
        yield "        <div class=\"mt-6 bg-white overflow-hidden shadow rounded-lg\">
          <div class=\"px-4 py-5 sm:px-6 bg-indigo-700\">
            <h3 class=\"text-lg font-medium text-white\">Statistics</h3>
          </div>
          <div class=\"px-4 py-5 sm:p-6\">
            <dl class=\"grid grid-cols-1 gap-5 sm:grid-cols-2\">
              <div class=\"px-4 py-2 bg-gray-50 rounded-lg overflow-hidden\">
                <dt class=\"text-sm font-medium text-gray-500 truncate\">Rides Today</dt>
                <dd class=\"mt-1 text-2xl font-semibold text-gray-900\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 90, $this->source); })()), "today", [], "any", false, false, false, 90), "courses", [], "any", false, false, false, 90), "html", null, true);
        yield "</dd>
              </div>
              <div class=\"px-4 py-2 bg-gray-50 rounded-lg overflow-hidden\">
                <dt class=\"text-sm font-medium text-gray-500 truncate\">Today's Earnings</dt>
                <dd class=\"mt-1 text-2xl font-semibold text-gray-900\"> ";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 94, $this->source); })()), "today", [], "any", false, false, false, 94), "earnings", [], "any", false, false, false, 94), 2), "html", null, true);
        yield " DT</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
      
      ";
        // line 102
        yield "      <div class=\"lg:col-span-2\">
        <div class=\"bg-white shadow overflow-hidden sm:rounded-lg\">
          <div class=\"px-4 py-5 sm:px-6 bg-indigo-700\">
            <h3 class=\"text-lg font-medium text-white\">Ride History</h3>
          </div>
          <div class=\"overflow-x-auto\">
            <table class=\"min-w-full divide-y divide-gray-200\">
              <thead class=\"bg-gray-50\">
                <tr>
                  <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date</th>
                  <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Route</th>
                  <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Amount</th>
                  <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Status</th>
                  <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                </tr>
              </thead>
              <tbody class=\"bg-white divide-y divide-gray-200\">
                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 119, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 120
            yield "                <tr class=\"hover:bg-gray-50 transition-colors duration-150\">
                  <td class=\"px-6 py-4 whitespace-nowrap\">
                    <div class=\"text-sm font-medium text-gray-900\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "dateCourse", [], "any", false, false, false, 122), "d/m/Y"), "html", null, true);
            yield "</div>
                    <div class=\"text-sm text-gray-500\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "dateCourse", [], "any", false, false, false, 123), "H:i"), "html", null, true);
            yield "</div>
                  </td>
                  <td class=\"px-6 py-4\">
                    <div class=\"flex items-center\">
                      <div class=\"flex-shrink-0 h-10 w-10 bg-indigo-100 rounded-full flex items-center justify-center\">
                        <svg class=\"h-6 w-6 text-indigo-600\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"/>
                          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/>
                        </svg>
                      </div>
                      <div class=\"ml-4\">
                        <div class=\"text-sm font-medium text-gray-900\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 134), "name", [], "any", false, false, false, 134), "html", null, true);
            yield "</div>
                        <div class=\"text-sm text-gray-500\">
                          <span class=\"geo\" data-coords=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "villeDepart", [], "any", false, false, false, 136), "html", null, true);
            yield "\">...</span> →
                          <span class=\"geo\" data-coords=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "villeArrivee", [], "any", false, false, false, 137), "html", null, true);
            yield "\">...</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class=\"px-6 py-4 whitespace-nowrap\">
                    <div class=\"text-sm text-gray-900 font-semibold\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "montant", [], "any", false, false, false, 143), "html", null, true);
            yield " DT</div>
                    <div class=\"text-sm text-gray-500\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "distanceKm", [], "any", false, false, false, 144), "html", null, true);
            yield " km</div>
                  </td>
                  <td class=\"px-6 py-4 whitespace-nowrap\">
                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                      ";
            // line 148
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 148)) == "en attente")) {
                yield "bg-yellow-100 text-yellow-800
                      ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 149
$context["course"], "statut", [], "any", false, false, false, 149)) == "acceptée")) {
                yield "bg-blue-100 text-blue-800
                      ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 150
$context["course"], "statut", [], "any", false, false, false, 150)) == "en course")) {
                yield "bg-purple-100 text-purple-800
                      ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 151
$context["course"], "statut", [], "any", false, false, false, 151)) == "terminée")) {
                yield "bg-green-100 text-green-800
                      ";
            } else {
                // line 152
                yield "bg-gray-100 text-gray-800";
            }
            yield "\">
                      ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 153), "html", null, true);
            yield "
                    </span>
                  </td>
                  <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium\">
                    ";
            // line 157
            $context["cs"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 157));
            // line 158
            yield "                    ";
            if (((isset($context["cs"]) || array_key_exists("cs", $context) ? $context["cs"] : (function () { throw new RuntimeError('Variable "cs" does not exist.', 158, $this->source); })()) == "en attente")) {
                // line 159
                yield "                      <div class=\"flex space-x-2\">
                        <form action=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 160)]), "html", null, true);
                yield "\" method=\"post\">
                          <button type=\"submit\" class=\"text-indigo-600 hover:text-indigo-900 bg-indigo-50 px-3 py-1 rounded-md hover:bg-indigo-100 transition-colors duration-200\">
                            Accept
                          </button>
                        </form>
                        <form action=\"";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_refuse", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 165)]), "html", null, true);
                yield "\" method=\"post\" onsubmit=\"return confirm('Decline this ride?');\">
                          <button type=\"submit\" class=\"text-red-600 hover:text-red-900 bg-red-50 px-3 py-1 rounded-md hover:bg-red-100 transition-colors duration-200\">
                            Decline
                          </button>
                        </form>
                      </div>
                    ";
            } elseif ((            // line 171
(isset($context["cs"]) || array_key_exists("cs", $context) ? $context["cs"] : (function () { throw new RuntimeError('Variable "cs" does not exist.', 171, $this->source); })()) == "acceptée")) {
                // line 172
                yield "                      <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_start", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 172)]), "html", null, true);
                yield "\" method=\"post\">
                        <button type=\"submit\" class=\"text-white bg-indigo-600 hover:bg-indigo-700 px-3 py-1 rounded-md transition-colors duration-200\">
                          Start
                        </button>
                      </form>
                    ";
            } elseif ((            // line 177
(isset($context["cs"]) || array_key_exists("cs", $context) ? $context["cs"] : (function () { throw new RuntimeError('Variable "cs" does not exist.', 177, $this->source); })()) == "en course")) {
                // line 178
                yield "                      <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_course_finish", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 178)]), "html", null, true);
                yield "\" method=\"post\">
                        <button type=\"submit\" class=\"text-white bg-purple-600 hover:bg-purple-700 px-3 py-1 rounded-md transition-colors duration-200\">
                          Finish
                        </button>
                      </form>
                    ";
            } else {
                // line 184
                yield "                      <span class=\"text-gray-500\">—</span>
                    ";
            }
            // line 186
            yield "                  </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 188
        if (!$context['_iterated']) {
            // line 189
            yield "                <tr>
                  <td colspan=\"5\" class=\"px-6 py-4 text-center text-gray-500\">
                    No rides found.
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 205
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 206
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
  // --- Notifications pop-up ---
  const toggleBtn  = document.getElementById('notifToggle'),
        notifList  = document.getElementById('notifList'),
        notifItems = document.getElementById('notifItems'),
        notifCount = document.getElementById('notifCount');

  // stopPropagation in list
  notifList.addEventListener('click', e => e.stopPropagation());

  async function toggleNotifications() {
    const hidden = notifList.classList.contains('hidden');
    if (hidden) {
      const resp = await fetch('";
        // line 220
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxiste_notifications_ajax");
        yield "');
      const courses = await resp.json();
      notifItems.innerHTML = '';
      if (courses.length) {
        courses.forEach(c => {
          const dateTxt = c.date ? `<span class=\"text-xs text-gray-500\">\${c.date}</span>` : '';
          const li = document.createElement('li');
          li.className = 'px-4 py-3 hover:bg-gray-50 cursor-pointer transition-colors duration-150';
          li.innerHTML = `
            <div class=\"flex items-start\">
              <div class=\"flex-shrink-0 pt-0.5\">
                <div class=\"h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center\">
                  <svg class=\"h-6 w-6 text-indigo-600\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 7h8m0 0v8m0-8l-8 8-4-4-6 6\"/>
                  </svg>
                </div>
              </div>
              <div class=\"ml-3 flex-1\">
                <p class=\"text-sm font-medium text-gray-900\">New ride #\${c.id}</p>
                <p class=\"text-sm text-gray-500 mt-1\">From \${c.depart} to \${c.arrivee}</p>
                \${dateTxt}
              </div>
            </div>
          `;
          notifItems.appendChild(li);
        });
        notifCount.textContent = courses.length;
        notifCount.classList.remove('hidden');
      } else {
        const li = document.createElement('li');
        li.className = 'px-4 py-3 text-gray-500 text-center';
        li.textContent = 'No new notifications';
        notifItems.appendChild(li);
        notifCount.classList.add('hidden');
      }
      notifList.classList.remove('hidden');
      requestAnimationFrame(() => {
        notifList.classList.replace('opacity-0','opacity-100');
        notifList.classList.replace('scale-95','scale-100');
      });
    } else {
      notifList.classList.replace('opacity-100','opacity-0');
      notifList.classList.replace('scale-100','scale-95');
      notifList.addEventListener('transitionend', () => notifList.classList.add('hidden'), { once: true });
    }
  }

  toggleBtn.addEventListener('click', e => {
    e.stopPropagation();
    toggleNotifications();
  });
  document.addEventListener('click', () => {
    if (!notifList.classList.contains('hidden')) toggleNotifications();
  });

  // --- Reverse-geocoding for table ---
  async function reverseGeocode(lat, lng) {
    const url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=\${lat}&lon=\${lng}`;
    try {
      const r = await fetch(url);
      if (!r.ok) throw '';
      const j = await r.json();
      const addr = j.address || {};
      const city = addr.city || addr.town || addr.village || addr.county || 'Unknown location';
      const road = addr.road || 'Unnamed road';
      return `\${city} – \${road}`;
    } catch {
      return `\${lat}, \${lng}`;
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('span.geo').forEach(async el => {
      const [lat, lng] = el.dataset.coords.split(',').map(s => s.trim());
      el.textContent = await reverseGeocode(lat, lng);
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
        return "taxiste/dashboard.html.twig";
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
        return array (  476 => 220,  459 => 206,  446 => 205,  427 => 195,  416 => 189,  414 => 188,  408 => 186,  404 => 184,  394 => 178,  392 => 177,  383 => 172,  381 => 171,  372 => 165,  364 => 160,  361 => 159,  358 => 158,  356 => 157,  349 => 153,  344 => 152,  339 => 151,  335 => 150,  331 => 149,  327 => 148,  320 => 144,  316 => 143,  307 => 137,  303 => 136,  298 => 134,  284 => 123,  280 => 122,  276 => 120,  271 => 119,  252 => 102,  242 => 94,  235 => 90,  225 => 82,  217 => 75,  210 => 70,  203 => 65,  201 => 64,  192 => 63,  190 => 62,  186 => 61,  178 => 56,  172 => 55,  157 => 42,  154 => 40,  136 => 23,  129 => 18,  120 => 16,  112 => 15,  105 => 10,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/taxiste/dashboard.html.twig #}
{% extends 'base_taxiste.html.twig' %}

{% block title %}Taxi Driver Dashboard{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-50\">
  <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8\">
    {# Header with status and notifications #}
    <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4\">
      <div>
        <h1 class=\"text-3xl font-bold text-gray-900\">Dashboard</h1>
        <p class=\"text-indigo-600 mt-1 flex items-center\">
          <span class=\"relative flex h-3 w-3 mr-2\">
            <span class=\"animate-ping absolute inline-flex h-full w-full rounded-full {% if taxi.statut|lower in ['disponible','en course'] %}bg-green-400{% else %}bg-red-400{% endif %} opacity-75\"></span>
            <span class=\"relative inline-flex rounded-full h-3 w-3 {% if taxi.statut|lower in ['disponible','en course'] %}bg-green-500{% else %}bg-red-500{% endif %}\"></span>
          </span>
          Status: {{ taxi.statut }}
        </p>
      </div>
      
      {# Notification bell with dropdown #}
      <div class=\"relative\">
        <button id=\"notifToggle\" class=\"relative p-2 rounded-full bg-white shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
          <svg class=\"h-6 w-6 text-gray-600\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9\"/>
          </svg>
          <span id=\"notifCount\" class=\"absolute -top-1 -right-1 inline-flex items-center justify-center px-2 py-1 text-xs font-bold text-white bg-red-600 rounded-full hidden\">0</span>
        </button>
        
        <div id=\"notifList\" class=\"hidden origin-top-right absolute right-0 mt-2 w-80 max-h-96 overflow-y-auto bg-white rounded-lg shadow-xl ring-1 ring-black ring-opacity-5 transition-all transform opacity-0 scale-95 z-10\">
          <div class=\"py-1\">
            <ul id=\"notifItems\" class=\"divide-y divide-gray-100\"></ul>
          </div>
        </div>
      </div>
    </div>
    
    {# Main content grid #}
    <div class=\"grid grid-cols-1 lg:grid-cols-3 gap-6\">
      {# Vehicle card #}
      <div class=\"lg:col-span-1\">
        <div class=\"bg-white overflow-hidden shadow rounded-lg\">
          <div class=\"px-4 py-5 sm:px-6 bg-indigo-700\">
            <h3 class=\"text-lg font-medium text-white\">Your Vehicle</h3>
          </div>
          <div class=\"px-4 py-5 sm:p-6\">
            <div class=\"flex items-center\">
              <div class=\"flex-shrink-0 bg-indigo-100 rounded-md p-3\">
                <svg class=\"h-8 w-8 text-indigo-700\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4\"/>
                </svg>
              </div>
              <div class=\"ml-4\">
                <h4 class=\"text-lg font-semibold text-gray-900\">{{ taxi.marque }} {{ taxi.modele }}</h4>
                <p class=\"text-sm text-gray-500\">{{ taxi.immatriculation }}</p>
              </div>
            </div>
            
            <div class=\"mt-6\">
              <form action=\"{{ path('taxiste_taxi_change_status', {'id': taxi.id}) }}\" method=\"post\">
                {% set st = taxi.statut|lower %}
                <button type=\"submit\" class=\"w-full flex items-center justify-center px-4 py-3 border border-transparent rounded-md shadow-sm text-sm font-medium text-white {% if st in ['disponible','en course'] %}bg-red-600 hover:bg-red-700{% else %}bg-green-600 hover:bg-green-700{% endif %} focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200\">
                  {% if st in ['disponible','en course'] %}
                    <svg class=\"-ml-1 mr-2 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\"/>
                    </svg>
                    Set as Unavailable
                  {% else %}
                    <svg class=\"-ml-1 mr-2 h-5 w-5\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
                    </svg>
                    Set as Available
                  {% endif %}
                </button>
              </form>
            </div>
          </div>
        </div>
        
        {# Stats card #}
        <div class=\"mt-6 bg-white overflow-hidden shadow rounded-lg\">
          <div class=\"px-4 py-5 sm:px-6 bg-indigo-700\">
            <h3 class=\"text-lg font-medium text-white\">Statistics</h3>
          </div>
          <div class=\"px-4 py-5 sm:p-6\">
            <dl class=\"grid grid-cols-1 gap-5 sm:grid-cols-2\">
              <div class=\"px-4 py-2 bg-gray-50 rounded-lg overflow-hidden\">
                <dt class=\"text-sm font-medium text-gray-500 truncate\">Rides Today</dt>
                <dd class=\"mt-1 text-2xl font-semibold text-gray-900\">{{ stats.today.courses }}</dd>
              </div>
              <div class=\"px-4 py-2 bg-gray-50 rounded-lg overflow-hidden\">
                <dt class=\"text-sm font-medium text-gray-500 truncate\">Today's Earnings</dt>
                <dd class=\"mt-1 text-2xl font-semibold text-gray-900\"> {{ stats.today.earnings|number_format(2)}} DT</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
      
      {# Rides table #}
      <div class=\"lg:col-span-2\">
        <div class=\"bg-white shadow overflow-hidden sm:rounded-lg\">
          <div class=\"px-4 py-5 sm:px-6 bg-indigo-700\">
            <h3 class=\"text-lg font-medium text-white\">Ride History</h3>
          </div>
          <div class=\"overflow-x-auto\">
            <table class=\"min-w-full divide-y divide-gray-200\">
              <thead class=\"bg-gray-50\">
                <tr>
                  <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Date</th>
                  <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Route</th>
                  <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Amount</th>
                  <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Status</th>
                  <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                </tr>
              </thead>
              <tbody class=\"bg-white divide-y divide-gray-200\">
                {% for course in courses %}
                <tr class=\"hover:bg-gray-50 transition-colors duration-150\">
                  <td class=\"px-6 py-4 whitespace-nowrap\">
                    <div class=\"text-sm font-medium text-gray-900\">{{ course.dateCourse|date('d/m/Y') }}</div>
                    <div class=\"text-sm text-gray-500\">{{ course.dateCourse|date('H:i') }}</div>
                  </td>
                  <td class=\"px-6 py-4\">
                    <div class=\"flex items-center\">
                      <div class=\"flex-shrink-0 h-10 w-10 bg-indigo-100 rounded-full flex items-center justify-center\">
                        <svg class=\"h-6 w-6 text-indigo-600\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"/>
                          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/>
                        </svg>
                      </div>
                      <div class=\"ml-4\">
                        <div class=\"text-sm font-medium text-gray-900\">{{ course.user.name }}</div>
                        <div class=\"text-sm text-gray-500\">
                          <span class=\"geo\" data-coords=\"{{ course.villeDepart }}\">...</span> →
                          <span class=\"geo\" data-coords=\"{{ course.villeArrivee }}\">...</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class=\"px-6 py-4 whitespace-nowrap\">
                    <div class=\"text-sm text-gray-900 font-semibold\">{{ course.montant }} DT</div>
                    <div class=\"text-sm text-gray-500\">{{ course.distanceKm }} km</div>
                  </td>
                  <td class=\"px-6 py-4 whitespace-nowrap\">
                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                      {% if course.statut|lower == 'en attente' %}bg-yellow-100 text-yellow-800
                      {% elseif course.statut|lower == 'acceptée' %}bg-blue-100 text-blue-800
                      {% elseif course.statut|lower == 'en course' %}bg-purple-100 text-purple-800
                      {% elseif course.statut|lower == 'terminée' %}bg-green-100 text-green-800
                      {% else %}bg-gray-100 text-gray-800{% endif %}\">
                      {{ course.statut }}
                    </span>
                  </td>
                  <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium\">
                    {% set cs = course.statut|lower %}
                    {% if cs == 'en attente' %}
                      <div class=\"flex space-x-2\">
                        <form action=\"{{ path('taxiste_course_accept', {'id': course.id}) }}\" method=\"post\">
                          <button type=\"submit\" class=\"text-indigo-600 hover:text-indigo-900 bg-indigo-50 px-3 py-1 rounded-md hover:bg-indigo-100 transition-colors duration-200\">
                            Accept
                          </button>
                        </form>
                        <form action=\"{{ path('taxiste_course_refuse', {'id': course.id}) }}\" method=\"post\" onsubmit=\"return confirm('Decline this ride?');\">
                          <button type=\"submit\" class=\"text-red-600 hover:text-red-900 bg-red-50 px-3 py-1 rounded-md hover:bg-red-100 transition-colors duration-200\">
                            Decline
                          </button>
                        </form>
                      </div>
                    {% elseif cs == 'acceptée' %}
                      <form action=\"{{ path('taxiste_course_start', {'id': course.id}) }}\" method=\"post\">
                        <button type=\"submit\" class=\"text-white bg-indigo-600 hover:bg-indigo-700 px-3 py-1 rounded-md transition-colors duration-200\">
                          Start
                        </button>
                      </form>
                    {% elseif cs == 'en course' %}
                      <form action=\"{{ path('taxiste_course_finish', {'id': course.id}) }}\" method=\"post\">
                        <button type=\"submit\" class=\"text-white bg-purple-600 hover:bg-purple-700 px-3 py-1 rounded-md transition-colors duration-200\">
                          Finish
                        </button>
                      </form>
                    {% else %}
                      <span class=\"text-gray-500\">—</span>
                    {% endif %}
                  </td>
                </tr>
                {% else %}
                <tr>
                  <td colspan=\"5\" class=\"px-6 py-4 text-center text-gray-500\">
                    No rides found.
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
  // --- Notifications pop-up ---
  const toggleBtn  = document.getElementById('notifToggle'),
        notifList  = document.getElementById('notifList'),
        notifItems = document.getElementById('notifItems'),
        notifCount = document.getElementById('notifCount');

  // stopPropagation in list
  notifList.addEventListener('click', e => e.stopPropagation());

  async function toggleNotifications() {
    const hidden = notifList.classList.contains('hidden');
    if (hidden) {
      const resp = await fetch('{{ path(\"taxiste_notifications_ajax\") }}');
      const courses = await resp.json();
      notifItems.innerHTML = '';
      if (courses.length) {
        courses.forEach(c => {
          const dateTxt = c.date ? `<span class=\"text-xs text-gray-500\">\${c.date}</span>` : '';
          const li = document.createElement('li');
          li.className = 'px-4 py-3 hover:bg-gray-50 cursor-pointer transition-colors duration-150';
          li.innerHTML = `
            <div class=\"flex items-start\">
              <div class=\"flex-shrink-0 pt-0.5\">
                <div class=\"h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center\">
                  <svg class=\"h-6 w-6 text-indigo-600\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13 7h8m0 0v8m0-8l-8 8-4-4-6 6\"/>
                  </svg>
                </div>
              </div>
              <div class=\"ml-3 flex-1\">
                <p class=\"text-sm font-medium text-gray-900\">New ride #\${c.id}</p>
                <p class=\"text-sm text-gray-500 mt-1\">From \${c.depart} to \${c.arrivee}</p>
                \${dateTxt}
              </div>
            </div>
          `;
          notifItems.appendChild(li);
        });
        notifCount.textContent = courses.length;
        notifCount.classList.remove('hidden');
      } else {
        const li = document.createElement('li');
        li.className = 'px-4 py-3 text-gray-500 text-center';
        li.textContent = 'No new notifications';
        notifItems.appendChild(li);
        notifCount.classList.add('hidden');
      }
      notifList.classList.remove('hidden');
      requestAnimationFrame(() => {
        notifList.classList.replace('opacity-0','opacity-100');
        notifList.classList.replace('scale-95','scale-100');
      });
    } else {
      notifList.classList.replace('opacity-100','opacity-0');
      notifList.classList.replace('scale-100','scale-95');
      notifList.addEventListener('transitionend', () => notifList.classList.add('hidden'), { once: true });
    }
  }

  toggleBtn.addEventListener('click', e => {
    e.stopPropagation();
    toggleNotifications();
  });
  document.addEventListener('click', () => {
    if (!notifList.classList.contains('hidden')) toggleNotifications();
  });

  // --- Reverse-geocoding for table ---
  async function reverseGeocode(lat, lng) {
    const url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=\${lat}&lon=\${lng}`;
    try {
      const r = await fetch(url);
      if (!r.ok) throw '';
      const j = await r.json();
      const addr = j.address || {};
      const city = addr.city || addr.town || addr.village || addr.county || 'Unknown location';
      const road = addr.road || 'Unnamed road';
      return `\${city} – \${road}`;
    } catch {
      return `\${lat}, \${lng}`;
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('span.geo').forEach(async el => {
      const [lat, lng] = el.dataset.coords.split(',').map(s => s.trim());
      el.textContent = await reverseGeocode(lat, lng);
    });
  });
</script>
{# mmh #}
{% endblock %}", "taxiste/dashboard.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\taxiste\\dashboard.html.twig");
    }
}
