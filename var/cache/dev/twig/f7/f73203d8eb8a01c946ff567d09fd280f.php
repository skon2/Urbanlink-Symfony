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

/* front_office/course/index.html.twig */
class __TwigTemplate_f53db68016c471f2b4c99dcfafb9d37a extends Template
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
        // line 2
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/course/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/course/index.html.twig"));

        $this->parent = $this->load("basef.html.twig", 2);
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

        yield "My Rides";
        
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
        yield "<div style=\"max-width: 1200px; margin: 0 auto; background-color: #f8fafc; min-height: 100vh; padding: 2rem; font-family: 'Inter', system-ui, sans-serif;\">
  
  <!-- Title + Add Ride button -->
  <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;\">
    <h2 style=\"font-size: 1.5rem; font-weight: 700; color: #0f172a; margin: 0;\">
      <span style=\"
        display: inline-block;
        padding: 0.75rem 1.75rem;
        background: linear-gradient(135deg, #3b82f6, #06b6d4);
        color: #FFFFFF;
        border-radius: 1rem;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
      \">
        My Rides
      </span>
    </h2>
    <!-- Add Ride button -->
    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_course_new");
        yield "\"
       style=\"
         display: inline-flex;
         align-items: center;
         padding: 0.75rem 1.5rem;
         background-color: #0ea5e9;
         color: #FFFFFF;
         border-radius: 0.75rem;
         font-weight: 600;
         text-transform: uppercase;
         text-decoration: none;
         transition: all 0.3s ease;
         box-shadow: 0 4px 12px rgba(14, 165, 233, 0.25);
       \"
       onmouseover=\"this.style.backgroundColor='#0284c7'; this.style.transform='translateY(-2px)';\"
       onmouseout=\"this.style.backgroundColor='#0ea5e9'; this.style.transform='translateY(0)';\"
    >
      <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
      </svg>
      Add Ride
    </a>
  </div>

  <!-- Loop through rides -->
  ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 50
            yield "    <div style=\"
         margin-bottom: 1.25rem;
         border-radius: 1rem;
         box-shadow: 0 4px 12px rgba(0,0,0,0.08);
         transition: all 0.3s ease;
         font-size: 0.925rem;
         color: #334155;
         background-color:
           ";
            // line 58
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 58) == "Acceptée")) {
                yield "#ecfdf5
           ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 59
$context["course"], "statut", [], "any", false, false, false, 59) == "Refusée")) {
                yield "#fef2f2
           ";
            } else {
                // line 60
                yield "#fffbeb";
            }
            yield ";
         border-left: 8px solid
           ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 62) == "Acceptée")) {
                yield "#10b981
           ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 63
$context["course"], "statut", [], "any", false, false, false, 63) == "Refusée")) {
                yield "#ef4444
           ";
            } else {
                // line 64
                yield "#f59e0b";
            }
            yield ";
       \"
       onmouseover=\"this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.12)';\"
       onmouseout=\"this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)';\">
      <div style=\"display: flex; padding: 1.25rem; flex-wrap: wrap;\">
        
        <!-- Block 1: Client / Driver / Date -->
        <div style=\"border-right: 1px solid #e2e8f0; padding-right: 1.25rem; margin-right: 1.25rem;\">
          <div style=\"font-weight: 600; margin-bottom: 0.5rem;\">
            <span style=\"font-size: 0.75rem; color: #64748b; display: block; margin-bottom: 0.25rem;\">Client</span>
            ";
            // line 74
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "user", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true)) : ("--"));
            yield "
          </div>
          <div style=\"font-weight: 600; margin-bottom: 0.5rem;\">
            <span style=\"font-size: 0.75rem; color: #64748b; display: block; margin-bottom: 0.25rem;\">Driver</span>
            ";
            // line 78
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 78), "user", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true)) : ("--"));
            yield "
          </div>
          <div style=\"font-weight: 600; background-color: #f1f5f9; padding: 0.5rem; border-radius: 0.5rem; display: inline-block;\">
            ";
            // line 81
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["course"], "dateCourse", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "dateCourse", [], "any", false, false, false, 81), "d/m/Y H:i"), "html", null, true)) : ("--"));
            yield "
          </div>
        </div>

        <!-- Block 2: Make / Model, Departure, Arrival -->
        <div style=\"flex: 1;\">
          <div style=\"margin-bottom: 0.5rem; padding-right: 1.25rem; border-right: 1px solid #e2e8f0;\">
            <div style=\"margin-left: 1rem; margin-bottom: 0.5rem; font-size: 1.125rem; font-weight: 600; color: #0f172a;\">
              ";
            // line 89
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 89), "marque", [], "any", false, false, false, 89) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 89), "modele", [], "any", false, false, false, 89)), "html", null, true)) : ("--"));
            yield "
            </div>
            <div style=\"margin-left: 1rem; margin-bottom: 0.5rem; display: flex; align-items: center;\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1rem; height: 1rem; margin-right: 0.5rem; color: #64748b;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
              </svg>
              <span style=\"font-size: 0.75rem; color: #64748b; margin-right: 0.5rem;\">Departure:</span>
              <span style=\"font-weight: 500;\">
                ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["presentation"]) || array_key_exists("presentation", $context) ? $context["presentation"] : (function () { throw new RuntimeError('Variable "presentation" does not exist.', 97, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 97), [], "array", false, false, false, 97), "depart", [], "any", false, false, false, 97), "html", null, true);
            yield "
              </span>
            </div>
            <div style=\"margin-left: 1rem; display: flex; align-items: center;\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1rem; height: 1rem; margin-right: 0.5rem; color: #64748b;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h14\" />
              </svg>
              <span style=\"font-size: 0.75rem; color: #64748b; margin-right: 0.5rem;\">Arrival:</span>
              <span style=\"font-weight: 500;\">
                ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["presentation"]) || array_key_exists("presentation", $context) ? $context["presentation"] : (function () { throw new RuntimeError('Variable "presentation" does not exist.', 106, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 106), [], "array", false, false, false, 106), "arrivee", [], "any", false, false, false, 106), "html", null, true);
            yield "
              </span>
            </div>
          </div>
        </div>

        <!-- Block 3: License Plate -->
        <div style=\"border-right: 1px solid #e2e8f0; padding-right: 1.25rem; margin-right: 1.25rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #cbd5e1; background-color: #f8fafc; padding: 0.5rem; border-radius: 0.5rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600; color: #64748b; margin-bottom: 0.25rem;\">License Plate</div>
              <div style=\"font-size: 0.925rem; font-weight: 700; color: #0f172a; letter-spacing: 1px;\">
                ";
            // line 118
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 118), "immatriculation", [], "any", false, false, false, 118), "html", null, true)) : ("--"));
            yield "
              </div>
            </div>
          </div>
        </div>

        <!-- Block 4: Distance -->
        <div style=\"border-right: 1px solid #e2e8f0; padding-right: 1.25rem; margin-right: 1.25rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #cbd5e1; background-color: #f8fafc; padding: 0.5rem; border-radius: 0.5rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600; color: #64748b; margin-bottom: 0.25rem;\">Distance</div>
              <div style=\"font-size: 0.925rem; font-weight: 700; color: #0f172a;\">
                <span style=\"
                  display: inline-block;
                  padding: 0.25rem 0.75rem;
                  background: linear-gradient(135deg, #3b82f6, #06b6d4);
                  color: #FFFFFF;
                  text-transform: uppercase;
                  font-weight: bold;
                  border-radius: 0.375rem;
                  box-shadow: 0 2px 6px rgba(59, 130, 246, 0.25);
                \">
                  ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "distanceKm", [], "any", false, false, false, 140), "html", null, true);
            yield " km
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Block 5: Amount -->
        <div style=\"border-right: 1px solid #e2e8f0; padding-right: 1.25rem; margin-right: 1.25rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #cbd5e1; background-color: #f8fafc; padding: 0.5rem; border-radius: 0.5rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600; color: #64748b; margin-bottom: 0.25rem;\">Amount</div>
              <div style=\"font-size: 1rem; font-weight: 700; color: #0f172a;\">
                ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["course"], "montant", [], "any", false, false, false, 153), "html", null, true);
            yield " TND
              </div>
            </div>
          </div>
        </div>

        <!-- Block 6: Status + Buttons -->
        <div style=\"margin-left: 1rem;\">
          <div style=\"
            margin-top: 0.5rem;
            width: 6rem;
            text-align: center;
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: bold;
            color: #FFFFFF;
            border-radius: 0.375rem;
            padding: 0.375rem 0;
            background-color:
              ";
            // line 172
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 172) == "Acceptée")) {
                yield "#10b981
              ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 173
$context["course"], "statut", [], "any", false, false, false, 173) == "Refusée")) {
                yield "#ef4444
              ";
            } else {
                // line 174
                yield "#f59e0b";
            }
            yield ";
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
          \">
            ";
            // line 177
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 177) == "Acceptée")) {
                yield "Accepted
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 178
$context["course"], "statut", [], "any", false, false, false, 178) == "Refusée")) {
                yield "Declined
            ";
            } else {
                // line 179
                yield "Pending";
            }
            // line 180
            yield "          </div>
          <div style=\"display: flex; flex-direction: column; margin-top: 0.75rem; gap: 0.375rem;\">
            <div style=\"display: flex; gap: 0.375rem; margin-top: 0.25rem;\">
              <form method=\"post\" action=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_course_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 183)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Cancel this ride?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 184))), "html", null, true);
            yield "\">
                <button type=\"submit\"
                        style=\"background-color: #f97316; color: #FFFFFF; padding: 0.5rem 0.75rem; border-radius: 0.375rem; font-size: 0.75rem; font-weight: 600; text-decoration: none; border: none; cursor: pointer; box-shadow: 0 2px 6px rgba(249, 115, 22, 0.25); transition: all 0.3s ease;\"
                        onmouseover=\"this.style.backgroundColor='#ea580c'; this.style.transform='translateY(-2px)';\"
                        onmouseout=\"this.style.backgroundColor='#f97316'; this.style.transform='translateY(0)';\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 0.875rem; height: 0.875rem; margin-right: 0.25rem; display: inline-block; vertical-align: -1px;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                  </svg>
                  Cancel
                </button>
              </form>
              ";
            // line 195
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["course"], "statut", [], "any", false, false, false, 195) == "Terminée") && CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 195))) {
                // line 196
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("taxi_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["course"], "taxi", [], "any", false, false, false, 196), "id", [], "any", false, false, false, 196)]), "html", null, true);
                yield "\"
                   style=\"background: linear-gradient(135deg, #3b82f6, #8b5cf6); color: #FFFFFF; padding: 0.5rem 0.75rem; border-radius: 0.375rem; font-size: 0.75rem; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; box-shadow: 0 2px 6px rgba(59, 130, 246, 0.25); transition: all 0.3s ease;\"
                   onmouseover=\"this.style.opacity='0.9'; this.style.transform='translateY(-2px)';\"
                   onmouseout=\"this.style.opacity='1'; this.style.transform='translateY(0)';\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 0.875rem; height: 0.875rem; margin-right: 0.25rem;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                  </svg>
                  Rate
                </a>
              ";
            }
            // line 206
            yield "            </div>
          </div>
        </div>
      </div>
    </div>
  ";
            $context['_iterated'] = true;
        }
        // line 211
        if (!$context['_iterated']) {
            // line 212
            yield "    <div style=\"
      background-color: #f1f5f9;
      margin: 0 auto;
      border: 1px solid #cbd5e1;
      border-radius: 1rem;
      color: #334155;
      margin-bottom: 1.5rem;
      padding: 3rem 2rem;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    \">
      <div style=\"margin-bottom: 1.5rem;\">
        <span style=\"
          display: inline-block;
          padding: 0.5rem 1rem;
          font-size: 0.875rem;
          border-radius: 0.5rem;
          background: linear-gradient(135deg, #94a3b8, #cbd5e1);
          text-transform: uppercase;
          font-weight: bold;
          color: #334155;
        \">
          No data
        </span>
      </div>
      <p style=\"font-size: 1rem; color: #64748b;\">Your rides will appear here</p>
      <div style=\"margin-top: 1.5rem;\">
        <a href=\"";
            // line 239
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_course_new");
            yield "\"
           style=\"
             display: inline-flex;
             align-items: center;
             padding: 0.75rem 1.5rem;
             background-color: #0ea5e9;
             color: #FFFFFF;
             border-radius: 0.75rem;
             font-weight: 600;
             text-decoration: none;
             transition: all 0.3s ease;
             box-shadow: 0 4px 12px rgba(14, 165, 233, 0.25);
           \"
           onmouseover=\"this.style.backgroundColor='#0284c7'; this.style.transform='translateY(-2px)';\"
           onmouseout=\"this.style.backgroundColor='#0ea5e9'; this.style.transform='translateY(0)';\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
          </svg>
          Book your first ride
        </a>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['course'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        yield "
  <!-- Footer -->
  <div style=\"
       background-color: #f8fafc;
       padding: 1.5rem;
       border: 1px solid #e2e8f0;
       border-radius: 1rem;
       margin-top: 1.5rem;
       box-shadow: 0 4px 12px rgba(0,0,0,0.05);
       display: flex;
       justify-content: space-between;
       align-items: center;
     \">
    <span style=\"
         display: inline-block;
         padding: 0.375rem 0.75rem;
         background: linear-gradient(135deg, #1e293b, #0f172a);
         text-transform: uppercase;
         font-weight: bold;
         font-size: 0.875rem;
         color: white;
         border-radius: 0.5rem;
         box-shadow: 0 2px 6px rgba(15, 23, 42, 0.25);
       \">
      Total: ";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 286, $this->source); })())), "html", null, true);
        yield " rides
    </span>
    ";
        // line 288
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 288, $this->source); })())) > 0)) {
            // line 289
            yield "      <span style=\"font-size: 0.875rem; color: #64748b; display: flex; align-items: center;\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1rem; height: 1rem; margin-right: 0.5rem;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
        </svg>
        Last ride: ";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 293, $this->source); })())), "dateCourse", [], "any", false, false, false, 293), "d/m/Y"), "html", null, true);
            yield "
      </span>
    ";
        }
        // line 296
        yield "  </div>

  <!-- Report download section -->
  <div style=\"text-align: center; margin-top: 3rem; margin-bottom: 3rem; background-color: #f8fafc; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05);\">
    <h3 style=\"font-size: 1.25rem; font-weight: 600; color: #0f172a; margin-bottom: 1.5rem;\">Download your PDF report</h3>

    <div style=\"margin: 1.5rem auto; width: 200px; height: 200px; padding: 0.5rem; background-color: white; border-radius: 1rem; box-shadow: 0 4px 12px rgba(0,0,0,0.08);\">
      <img
        src=\"";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_qr", ["userId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 304, $this->source); })()), "user", [], "any", false, false, false, 304), "id", [], "any", false, false, false, 304)]), "html", null, true);
        yield "\"
        alt=\"Report QR Code\"
        style=\"width:100%; height:100%; border-radius: 0.75rem;\"
      />
    </div>

    <a
      href=\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_pdf", ["userId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 311, $this->source); })()), "user", [], "any", false, false, false, 311), "id", [], "any", false, false, false, 311)]), "html", null, true);
        yield "\"
      style=\"
        display: inline-flex;
        align-items: center;
        padding: 0.75rem 1.75rem;
        background: linear-gradient(135deg, #3b82f6, #0ea5e9);
        color: #FFFFFF;
        border-radius: 0.75rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.25);
      \"
      onmouseover=\"this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 16px rgba(59, 130, 246, 0.3)';\"
      onmouseout=\"this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(59, 130, 246, 0.25)';\"
    >
      <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\" />
      </svg>
      Download PDF
    </a>
  </div>
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
        return "front_office/course/index.html.twig";
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
        return array (  526 => 311,  516 => 304,  506 => 296,  500 => 293,  494 => 289,  492 => 288,  487 => 286,  461 => 262,  432 => 239,  403 => 212,  401 => 211,  392 => 206,  378 => 196,  376 => 195,  362 => 184,  358 => 183,  353 => 180,  350 => 179,  345 => 178,  341 => 177,  334 => 174,  329 => 173,  325 => 172,  303 => 153,  287 => 140,  262 => 118,  247 => 106,  235 => 97,  224 => 89,  213 => 81,  207 => 78,  200 => 74,  186 => 64,  181 => 63,  177 => 62,  171 => 60,  166 => 59,  162 => 58,  152 => 50,  147 => 49,  119 => 24,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front_office/course/index.html.twig #}
{% extends 'basef.html.twig' %}

{% block title %}My Rides{% endblock %}

{% block body %}
<div style=\"max-width: 1200px; margin: 0 auto; background-color: #f8fafc; min-height: 100vh; padding: 2rem; font-family: 'Inter', system-ui, sans-serif;\">
  
  <!-- Title + Add Ride button -->
  <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;\">
    <h2 style=\"font-size: 1.5rem; font-weight: 700; color: #0f172a; margin: 0;\">
      <span style=\"
        display: inline-block;
        padding: 0.75rem 1.75rem;
        background: linear-gradient(135deg, #3b82f6, #06b6d4);
        color: #FFFFFF;
        border-radius: 1rem;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
      \">
        My Rides
      </span>
    </h2>
    <!-- Add Ride button -->
    <a href=\"{{ path('user_course_new') }}\"
       style=\"
         display: inline-flex;
         align-items: center;
         padding: 0.75rem 1.5rem;
         background-color: #0ea5e9;
         color: #FFFFFF;
         border-radius: 0.75rem;
         font-weight: 600;
         text-transform: uppercase;
         text-decoration: none;
         transition: all 0.3s ease;
         box-shadow: 0 4px 12px rgba(14, 165, 233, 0.25);
       \"
       onmouseover=\"this.style.backgroundColor='#0284c7'; this.style.transform='translateY(-2px)';\"
       onmouseout=\"this.style.backgroundColor='#0ea5e9'; this.style.transform='translateY(0)';\"
    >
      <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
      </svg>
      Add Ride
    </a>
  </div>

  <!-- Loop through rides -->
  {% for course in courses %}
    <div style=\"
         margin-bottom: 1.25rem;
         border-radius: 1rem;
         box-shadow: 0 4px 12px rgba(0,0,0,0.08);
         transition: all 0.3s ease;
         font-size: 0.925rem;
         color: #334155;
         background-color:
           {% if course.statut == 'Acceptée' %}#ecfdf5
           {% elseif course.statut == 'Refusée' %}#fef2f2
           {% else %}#fffbeb{% endif %};
         border-left: 8px solid
           {% if course.statut == 'Acceptée' %}#10b981
           {% elseif course.statut == 'Refusée' %}#ef4444
           {% else %}#f59e0b{% endif %};
       \"
       onmouseover=\"this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 16px rgba(0,0,0,0.12)';\"
       onmouseout=\"this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)';\">
      <div style=\"display: flex; padding: 1.25rem; flex-wrap: wrap;\">
        
        <!-- Block 1: Client / Driver / Date -->
        <div style=\"border-right: 1px solid #e2e8f0; padding-right: 1.25rem; margin-right: 1.25rem;\">
          <div style=\"font-weight: 600; margin-bottom: 0.5rem;\">
            <span style=\"font-size: 0.75rem; color: #64748b; display: block; margin-bottom: 0.25rem;\">Client</span>
            {{ course.user ? course.user.name : '--' }}
          </div>
          <div style=\"font-weight: 600; margin-bottom: 0.5rem;\">
            <span style=\"font-size: 0.75rem; color: #64748b; display: block; margin-bottom: 0.25rem;\">Driver</span>
            {{ course.taxi ? course.taxi.user.name : '--' }}
          </div>
          <div style=\"font-weight: 600; background-color: #f1f5f9; padding: 0.5rem; border-radius: 0.5rem; display: inline-block;\">
            {{ course.dateCourse ? course.dateCourse|date('d/m/Y H:i') : '--' }}
          </div>
        </div>

        <!-- Block 2: Make / Model, Departure, Arrival -->
        <div style=\"flex: 1;\">
          <div style=\"margin-bottom: 0.5rem; padding-right: 1.25rem; border-right: 1px solid #e2e8f0;\">
            <div style=\"margin-left: 1rem; margin-bottom: 0.5rem; font-size: 1.125rem; font-weight: 600; color: #0f172a;\">
              {{ course.taxi ? course.taxi.marque ~ ' ' ~ course.taxi.modele : '--' }}
            </div>
            <div style=\"margin-left: 1rem; margin-bottom: 0.5rem; display: flex; align-items: center;\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1rem; height: 1rem; margin-right: 0.5rem; color: #64748b;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
              </svg>
              <span style=\"font-size: 0.75rem; color: #64748b; margin-right: 0.5rem;\">Departure:</span>
              <span style=\"font-weight: 500;\">
                {{ presentation[course.id].depart }}
              </span>
            </div>
            <div style=\"margin-left: 1rem; display: flex; align-items: center;\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1rem; height: 1rem; margin-right: 0.5rem; color: #64748b;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h14\" />
              </svg>
              <span style=\"font-size: 0.75rem; color: #64748b; margin-right: 0.5rem;\">Arrival:</span>
              <span style=\"font-weight: 500;\">
                {{ presentation[course.id].arrivee }}
              </span>
            </div>
          </div>
        </div>

        <!-- Block 3: License Plate -->
        <div style=\"border-right: 1px solid #e2e8f0; padding-right: 1.25rem; margin-right: 1.25rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #cbd5e1; background-color: #f8fafc; padding: 0.5rem; border-radius: 0.5rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600; color: #64748b; margin-bottom: 0.25rem;\">License Plate</div>
              <div style=\"font-size: 0.925rem; font-weight: 700; color: #0f172a; letter-spacing: 1px;\">
                {{ course.taxi ? course.taxi.immatriculation : '--' }}
              </div>
            </div>
          </div>
        </div>

        <!-- Block 4: Distance -->
        <div style=\"border-right: 1px solid #e2e8f0; padding-right: 1.25rem; margin-right: 1.25rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #cbd5e1; background-color: #f8fafc; padding: 0.5rem; border-radius: 0.5rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600; color: #64748b; margin-bottom: 0.25rem;\">Distance</div>
              <div style=\"font-size: 0.925rem; font-weight: 700; color: #0f172a;\">
                <span style=\"
                  display: inline-block;
                  padding: 0.25rem 0.75rem;
                  background: linear-gradient(135deg, #3b82f6, #06b6d4);
                  color: #FFFFFF;
                  text-transform: uppercase;
                  font-weight: bold;
                  border-radius: 0.375rem;
                  box-shadow: 0 2px 6px rgba(59, 130, 246, 0.25);
                \">
                  {{ course.distanceKm }} km
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Block 5: Amount -->
        <div style=\"border-right: 1px solid #e2e8f0; padding-right: 1.25rem; margin-right: 1.25rem;\">
          <div style=\"margin-left: 1rem; margin-top: 0.5rem;\">
            <div style=\"border: 1px solid #cbd5e1; background-color: #f8fafc; padding: 0.5rem; border-radius: 0.5rem; text-align: center;\">
              <div style=\"font-size: 0.75rem; text-transform: uppercase; font-weight: 600; color: #64748b; margin-bottom: 0.25rem;\">Amount</div>
              <div style=\"font-size: 1rem; font-weight: 700; color: #0f172a;\">
                {{ course.montant }} TND
              </div>
            </div>
          </div>
        </div>

        <!-- Block 6: Status + Buttons -->
        <div style=\"margin-left: 1rem;\">
          <div style=\"
            margin-top: 0.5rem;
            width: 6rem;
            text-align: center;
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: bold;
            color: #FFFFFF;
            border-radius: 0.375rem;
            padding: 0.375rem 0;
            background-color:
              {% if course.statut == 'Acceptée' %}#10b981
              {% elseif course.statut == 'Refusée' %}#ef4444
              {% else %}#f59e0b{% endif %};
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
          \">
            {% if course.statut == 'Acceptée' %}Accepted
            {% elseif course.statut == 'Refusée' %}Declined
            {% else %}Pending{% endif %}
          </div>
          <div style=\"display: flex; flex-direction: column; margin-top: 0.75rem; gap: 0.375rem;\">
            <div style=\"display: flex; gap: 0.375rem; margin-top: 0.25rem;\">
              <form method=\"post\" action=\"{{ path('user_course_cancel', {'id': course.id}) }}\" onsubmit=\"return confirm('Cancel this ride?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ course.id) }}\">
                <button type=\"submit\"
                        style=\"background-color: #f97316; color: #FFFFFF; padding: 0.5rem 0.75rem; border-radius: 0.375rem; font-size: 0.75rem; font-weight: 600; text-decoration: none; border: none; cursor: pointer; box-shadow: 0 2px 6px rgba(249, 115, 22, 0.25); transition: all 0.3s ease;\"
                        onmouseover=\"this.style.backgroundColor='#ea580c'; this.style.transform='translateY(-2px)';\"
                        onmouseout=\"this.style.backgroundColor='#f97316'; this.style.transform='translateY(0)';\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 0.875rem; height: 0.875rem; margin-right: 0.25rem; display: inline-block; vertical-align: -1px;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                  </svg>
                  Cancel
                </button>
              </form>
              {% if course.statut == 'Terminée' and course.taxi %}
                <a href=\"{{ path('taxi_rate', {'id': course.taxi.id}) }}\"
                   style=\"background: linear-gradient(135deg, #3b82f6, #8b5cf6); color: #FFFFFF; padding: 0.5rem 0.75rem; border-radius: 0.375rem; font-size: 0.75rem; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; box-shadow: 0 2px 6px rgba(59, 130, 246, 0.25); transition: all 0.3s ease;\"
                   onmouseover=\"this.style.opacity='0.9'; this.style.transform='translateY(-2px)';\"
                   onmouseout=\"this.style.opacity='1'; this.style.transform='translateY(0)';\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 0.875rem; height: 0.875rem; margin-right: 0.25rem;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z\" />
                  </svg>
                  Rate
                </a>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    </div>
  {% else %}
    <div style=\"
      background-color: #f1f5f9;
      margin: 0 auto;
      border: 1px solid #cbd5e1;
      border-radius: 1rem;
      color: #334155;
      margin-bottom: 1.5rem;
      padding: 3rem 2rem;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    \">
      <div style=\"margin-bottom: 1.5rem;\">
        <span style=\"
          display: inline-block;
          padding: 0.5rem 1rem;
          font-size: 0.875rem;
          border-radius: 0.5rem;
          background: linear-gradient(135deg, #94a3b8, #cbd5e1);
          text-transform: uppercase;
          font-weight: bold;
          color: #334155;
        \">
          No data
        </span>
      </div>
      <p style=\"font-size: 1rem; color: #64748b;\">Your rides will appear here</p>
      <div style=\"margin-top: 1.5rem;\">
        <a href=\"{{ path('user_course_new') }}\"
           style=\"
             display: inline-flex;
             align-items: center;
             padding: 0.75rem 1.5rem;
             background-color: #0ea5e9;
             color: #FFFFFF;
             border-radius: 0.75rem;
             font-weight: 600;
             text-decoration: none;
             transition: all 0.3s ease;
             box-shadow: 0 4px 12px rgba(14, 165, 233, 0.25);
           \"
           onmouseover=\"this.style.backgroundColor='#0284c7'; this.style.transform='translateY(-2px)';\"
           onmouseout=\"this.style.backgroundColor='#0ea5e9'; this.style.transform='translateY(0)';\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
          </svg>
          Book your first ride
        </a>
      </div>
    </div>
  {% endfor %}

  <!-- Footer -->
  <div style=\"
       background-color: #f8fafc;
       padding: 1.5rem;
       border: 1px solid #e2e8f0;
       border-radius: 1rem;
       margin-top: 1.5rem;
       box-shadow: 0 4px 12px rgba(0,0,0,0.05);
       display: flex;
       justify-content: space-between;
       align-items: center;
     \">
    <span style=\"
         display: inline-block;
         padding: 0.375rem 0.75rem;
         background: linear-gradient(135deg, #1e293b, #0f172a);
         text-transform: uppercase;
         font-weight: bold;
         font-size: 0.875rem;
         color: white;
         border-radius: 0.5rem;
         box-shadow: 0 2px 6px rgba(15, 23, 42, 0.25);
       \">
      Total: {{ courses|length }} rides
    </span>
    {% if courses|length > 0 %}
      <span style=\"font-size: 0.875rem; color: #64748b; display: flex; align-items: center;\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1rem; height: 1rem; margin-right: 0.5rem;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\" />
        </svg>
        Last ride: {{ courses|first.dateCourse|date('d/m/Y') }}
      </span>
    {% endif %}
  </div>

  <!-- Report download section -->
  <div style=\"text-align: center; margin-top: 3rem; margin-bottom: 3rem; background-color: #f8fafc; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05);\">
    <h3 style=\"font-size: 1.25rem; font-weight: 600; color: #0f172a; margin-bottom: 1.5rem;\">Download your PDF report</h3>

    <div style=\"margin: 1.5rem auto; width: 200px; height: 200px; padding: 0.5rem; background-color: white; border-radius: 1rem; box-shadow: 0 4px 12px rgba(0,0,0,0.08);\">
      <img
        src=\"{{ path('report_qr', {'userId': app.user.id}) }}\"
        alt=\"Report QR Code\"
        style=\"width:100%; height:100%; border-radius: 0.75rem;\"
      />
    </div>

    <a
      href=\"{{ path('report_pdf', {'userId': app.user.id}) }}\"
      style=\"
        display: inline-flex;
        align-items: center;
        padding: 0.75rem 1.75rem;
        background: linear-gradient(135deg, #3b82f6, #0ea5e9);
        color: #FFFFFF;
        border-radius: 0.75rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.25);
      \"
      onmouseover=\"this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 16px rgba(59, 130, 246, 0.3)';\"
      onmouseout=\"this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(59, 130, 246, 0.25)';\"
    >
      <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"width: 1.25rem; height: 1.25rem; margin-right: 0.5rem;\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\" />
      </svg>
      Download PDF
    </a>
  </div>
</div>
{% endblock %}", "front_office/course/index.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\front_office\\course\\index.html.twig");
    }
}
