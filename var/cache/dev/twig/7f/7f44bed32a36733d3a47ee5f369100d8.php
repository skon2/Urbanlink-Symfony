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

/* avis/reponses.html.twig */
class __TwigTemplate_7e58256d6a5bfbb32bd71426cd275bb5 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/reponses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/reponses.html.twig"));

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

        yield "Responses for complaints ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
<style>
    .card-3d {
        background-color: #fff;
        border-radius: 0.75rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 1rem;
    }

    .header-3d {
        padding: 1.25rem;
        background: linear-gradient(135deg, #2D3748, #4A5568);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .header-3d h6 {
        font-size: 1.25rem;
        font-weight: 600;
        margin: 0;
        color: #fff;
    }

    .btn-add {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        font-weight: 700;
        text-transform: uppercase;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        background: transparent;
        border: 2px solid #fff;
        border-radius: 0.5rem;
        cursor: pointer;
        font-size: 0.75rem;
        color: #fff;
        text-decoration: none;
    }

    .btn-add:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
    }

    .table-3d {
        padding: 1rem;
    }

    table.dataTable tbody tr:hover {
        background-color: #f7fafc !important;
    }

    .bg-green-500 { background-color: #28a745; }
    .bg-yellow-500 { background-color: #ffc107; }
    .bg-red-500 { background-color: #dc3545; }

    .text-gray-500 { color: #696969; }
    .border-gray-300 { border-color: #98FB98; }
    
    /* Rating styles */
    .rate-container {
        display: inline-block;
        margin-bottom: 10px;
    }
    
    .jq-ry-container {
        margin-bottom: 5px;
    }
    
    .rating-submit-btn {
        margin-top: 10px;
        padding: 5px 10px;
        background-color: #4A5568;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    .rating-submit-btn:hover {
        background-color: #2D3748;
    }

    .chart-container {
        margin: 1rem auto;
        padding: 1rem;
        max-width: 500px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        height: 350px;
    }

    #ratingsChart {
        max-width: 100%;
        max-height: 300px;
        margin: 0 auto;
    }
    
    /* Ensure rating stars are visible */
    .rating {
        min-height: 30px;
        min-width: 120px;
        display: inline-block;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
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

        // line 122
        yield "<div class=\"card-3d\">
    <div class=\"header-3d\">
        <h6>Responses for Complaint</h6>
        ";
        // line 125
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125), "roles", [], "any", false, false, false, 125)))) {
            // line 126
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["avisId" => (isset($context["avis_id"]) || array_key_exists("avis_id", $context) ? $context["avis_id"] : (function () { throw new RuntimeError('Variable "avis_id" does not exist.', 126, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn-add\">
                + New Response
            </a>
        ";
        }
        // line 130
        yield "    </div>

    <div class=\"table-3d overflow-x-auto\">
        <table class=\"w-full text-sm text-left\">
            <thead>
                <tr>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Comment</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Date</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Admin's Email</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Rating</th>
                    ";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "roles", [], "any", false, false, false, 140)))) {
            // line 141
            yield "                        <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Actions</th>
                    ";
        }
        // line 143
        yield "                </tr>
            </thead>
            <tbody>
                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 146, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 147
            yield "                    <tr class=\"border-b border-gray-200\">
                        <td class=\"px-6 py-3\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "commentaire", [], "any", false, false, false, 148), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-3\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 149), "Y-m-d"), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-3\">
                            ";
            // line 151
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "user", [], "any", false, false, false, 151), "username", [], "any", false, false, false, 151), "html", null, true)) : ("Unknown"));
            yield "
                        </td>
                        <td class=\"px-6 py-3\">
                            <div class=\"rate-container\">
                                <div class=\"rating\" id=\"rating-";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 155), "html", null, true);
            yield "\" 
                                    data-rating=\"";
            // line 156
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", true, true, false, 156) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 156)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 156), "html", null, true)) : (0));
            yield "\" 
                                    data-readonly=\"";
            // line 157
            yield ((( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 157)) ||  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157) && CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "roles", [], "any", false, false, false, 157))))) ? ("true") : ("false"));
            yield "\"></div>
                                ";
            // line 158
            if ((((null === CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "rate", [], "any", false, false, false, 158)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158)) && CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "roles", [], "any", false, false, false, 158)))) {
                // line 159
                yield "                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 159)]), "html", null, true);
                yield "\" class=\"rating-form\">
                                        <input type=\"hidden\" name=\"rate\" id=\"rate-value-";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 160), "html", null, true);
                yield "\" value=\"0\">
                                        <button type=\"submit\" class=\"rating-submit-btn\">Submit Rating</button>
                                    </form>
                                ";
            }
            // line 164
            yield "                            </div>
                        </td>
                        ";
            // line 166
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166), "roles", [], "any", false, false, false, 166)))) {
                // line 167
                yield "                            <td class=\"px-6 py-3 space-x-2 text-center\">
                                <a href=\"";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 168)]), "html", null, true);
                yield "\" 
                                   class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                   style=\"background: #00007d;\">
                                    Edit
                                </a>
                                <form method=\"post\" action=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                yield "\" 
                                      class=\"inline-block\" 
                                      onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 176))), "html", null, true);
                yield "\">
                                    <button type=\"submit\"
                                            class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                            style=\"background: #b91c1c;\">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        ";
            }
            // line 185
            yield "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 186
        if (!$context['_iterated']) {
            // line 187
            yield "                    <tr>
                        <td colspan=\"";
            // line 188
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "roles", [], "any", false, false, false, 188)))) {
                yield "5";
            } else {
                yield "4";
            }
            yield "\" 
                            class=\"px-6 py-3 text-center text-gray-500\">
                            No responses found for this complaint.
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "            </tbody>
        </table>
    </div>

    ";
        // line 198
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "user", [], "any", false, false, false, 198) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "user", [], "any", false, false, false, 198), "roles", [], "any", false, false, false, 198)))) {
            // line 199
            yield "    <div class=\"chart-container\">
        <h6 class=\"mb-4 text-center\">Global Rating Distribution</h6>
        <canvas id=\"ratingsChart\"></canvas>
    </div>
    ";
        }
        // line 204
        yield "
    <div class=\"text-center mt-4 mb-4\">
       <a
           href=\"";
        // line 207
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index")) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_front")));
        // line 209
        yield "\"
           class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
           style=\"background: #696969;\"
           >
           Back to complaints list
       </a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 219
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

        // line 220
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>

<script>
    \$(document).ready(function() {
        console.log(\"Document ready\");
        
        // Initialize DataTable
        \$('table').DataTable({
            searching: false,
            info: false,
            paging: false,
            responsive: true,
            autoWidth: false
        });

        // Debug - Check if jQuery and plugins are loaded
        if (typeof \$.fn.rateYo === 'undefined') {
            console.error(\"RateYo plugin not loaded\");
        } else {
            console.log(\"RateYo plugin loaded\");
            
            // Make sure RateYo is properly initialized
            setTimeout(function() {
                initializeRatings();
            }, 300);
        }
        
        if (typeof Chart === 'undefined') {
            console.error(\"Chart.js not loaded\");
        } else {
            console.log(\"Chart.js loaded\");
        }
        
        // Function to initialize ratings
        function initializeRatings() {
            \$(\".rating\").each(function() {
                let \$this = \$(this);
                let id = \$this.attr('id').split('-')[1];
                let currentRating = parseFloat(\$this.data('rating')) || 0;
                let isReadonly = \$this.data('readonly') === 'true';
                
                console.log(\"Initializing rating:\", \$this.attr('id'), \"Rating:\", currentRating, \"ReadOnly:\", isReadonly);
                
                try {
                    // Force destroy if already initialized
                    if (\$this.rateYo('method') !== undefined) {
                        \$this.rateYo(\"destroy\");
                    }
                } catch (e) {
                    // Ignore error if it's not initialized
                }
                
                try {
                    \$this.rateYo({
                        rating: currentRating,
                        readOnly: isReadonly,
                        starWidth: \"20px\",
                        normalFill: \"#A0A0A0\",
                        ratedFill: \"#FFD700\",
                        fullStar: true,
                        onSet: function(rating) {
                            // Update the hidden input value when rating changes
                            \$('#rate-value-' + id).val(rating);
                        }
                    });
                } catch (e) {
                    console.error(\"Error initializing RateYo:\", e);
                }
            });
        }

        // Initialize Ratings Chart - Only for ROLE_ADMIN
        ";
        // line 296
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 296, $this->source); })()), "user", [], "any", false, false, false, 296) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 296, $this->source); })()), "user", [], "any", false, false, false, 296), "roles", [], "any", false, false, false, 296)))) {
            // line 297
            yield "        try {
            const ratingsCtx = document.getElementById('ratingsChart');
            if (ratingsCtx) {
                console.log(\"Ratings chart canvas found\");
                
                ";
            // line 302
            if (array_key_exists("globalRatingStats", $context)) {
                // line 303
                yield "                    console.log(\"Global ratings stats defined\");
                    const stats = {
                        1: ";
                // line 305
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["globalRatingStats"] ?? null), 1, [], "array", true, true, false, 305) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 305, $this->source); })()), 1, [], "array", false, false, false, 305)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 305, $this->source); })()), 1, [], "array", false, false, false, 305), "html", null, true)) : (0));
                yield ",
                        2: ";
                // line 306
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["globalRatingStats"] ?? null), 2, [], "array", true, true, false, 306) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 306, $this->source); })()), 2, [], "array", false, false, false, 306)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 306, $this->source); })()), 2, [], "array", false, false, false, 306), "html", null, true)) : (0));
                yield ",
                        3: ";
                // line 307
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["globalRatingStats"] ?? null), 3, [], "array", true, true, false, 307) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 307, $this->source); })()), 3, [], "array", false, false, false, 307)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 307, $this->source); })()), 3, [], "array", false, false, false, 307), "html", null, true)) : (0));
                yield ",
                        4: ";
                // line 308
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["globalRatingStats"] ?? null), 4, [], "array", true, true, false, 308) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 308, $this->source); })()), 4, [], "array", false, false, false, 308)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 308, $this->source); })()), 4, [], "array", false, false, false, 308), "html", null, true)) : (0));
                yield ",
                        5: ";
                // line 309
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["globalRatingStats"] ?? null), 5, [], "array", true, true, false, 309) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 309, $this->source); })()), 5, [], "array", false, false, false, 309)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["globalRatingStats"]) || array_key_exists("globalRatingStats", $context) ? $context["globalRatingStats"] : (function () { throw new RuntimeError('Variable "globalRatingStats" does not exist.', 309, $this->source); })()), 5, [], "array", false, false, false, 309), "html", null, true)) : (0));
                yield "
                    };
                    
                    const totalRatings = stats[1] + stats[2] + stats[3] + stats[4] + stats[5];
                    console.log(\"Global Stats:\", stats, \"Total:\", totalRatings);
                    
                    const chartData = {
                        labels: [
                            '1 Star (' + stats[1] + ')',
                            '2 Stars (' + stats[2] + ')',
                            '3 Stars (' + stats[3] + ')',
                            '4 Stars (' + stats[4] + ')',
                            '5 Stars (' + stats[5] + ')'
                        ],
                        datasets: [{
                            data: [stats[1], stats[2], stats[3], stats[4], stats[5]],
                            backgroundColor: [
                                '#ff6384', '#ff9f40', '#ffcd56', '#4bc0c0', '#36a2eb'
                            ],
                            borderWidth: 1
                        }]
                    };
                    
                    new Chart(ratingsCtx, {
                        type: 'pie',
                        data: chartData,
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Global Rating Distribution (All Complaints)'
                                },
                                legend: {
                                    position: 'right'
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                            const value = context.raw;
                                            const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                                            return `\${value} ratings (\${percentage}%)`;
                                        }
                                    }
                                }
                            }
                        }
                    });
                ";
            } else {
                // line 360
                yield "                    console.log(\"Global ratings stats NOT defined\");
                    // Default chart with no data
                    new Chart(ratingsCtx, {
                        type: 'pie',
                        data: {
                            labels: ['No Rating Data Available'],
                            datasets: [{
                                data: [1],
                                backgroundColor: ['#e0e0e0'],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Global Rating Distribution (All Complaints)'
                                },
                                legend: {
                                    position: 'right'
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function() {
                                            return 'No ratings available';
                                        }
                                    }
                                }
                            }
                        }
                    });
                ";
            }
            // line 394
            yield "            } else {
                console.error(\"Ratings chart canvas NOT found\");
            }
        } catch (e) {
            console.error(\"Error initializing chart:\", e);
        }
        ";
        }
        // line 401
        yield "    });
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
        return "avis/reponses.html.twig";
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
        return array (  653 => 401,  644 => 394,  608 => 360,  554 => 309,  550 => 308,  546 => 307,  542 => 306,  538 => 305,  534 => 303,  532 => 302,  525 => 297,  523 => 296,  444 => 220,  431 => 219,  412 => 209,  410 => 207,  405 => 204,  398 => 199,  396 => 198,  390 => 194,  374 => 188,  371 => 187,  369 => 186,  364 => 185,  352 => 176,  346 => 173,  338 => 168,  335 => 167,  333 => 166,  329 => 164,  322 => 160,  317 => 159,  315 => 158,  311 => 157,  307 => 156,  303 => 155,  296 => 151,  291 => 149,  287 => 148,  284 => 147,  279 => 146,  274 => 143,  270 => 141,  268 => 140,  256 => 130,  248 => 126,  246 => 125,  241 => 122,  228 => 121,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}
 
{% block title %}Responses for complaints {{ avis_id }}{% endblock %}
 
{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
<style>
    .card-3d {
        background-color: #fff;
        border-radius: 0.75rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 1rem;
    }

    .header-3d {
        padding: 1.25rem;
        background: linear-gradient(135deg, #2D3748, #4A5568);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .header-3d h6 {
        font-size: 1.25rem;
        font-weight: 600;
        margin: 0;
        color: #fff;
    }

    .btn-add {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        font-weight: 700;
        text-transform: uppercase;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        background: transparent;
        border: 2px solid #fff;
        border-radius: 0.5rem;
        cursor: pointer;
        font-size: 0.75rem;
        color: #fff;
        text-decoration: none;
    }

    .btn-add:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
    }

    .table-3d {
        padding: 1rem;
    }

    table.dataTable tbody tr:hover {
        background-color: #f7fafc !important;
    }

    .bg-green-500 { background-color: #28a745; }
    .bg-yellow-500 { background-color: #ffc107; }
    .bg-red-500 { background-color: #dc3545; }

    .text-gray-500 { color: #696969; }
    .border-gray-300 { border-color: #98FB98; }
    
    /* Rating styles */
    .rate-container {
        display: inline-block;
        margin-bottom: 10px;
    }
    
    .jq-ry-container {
        margin-bottom: 5px;
    }
    
    .rating-submit-btn {
        margin-top: 10px;
        padding: 5px 10px;
        background-color: #4A5568;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    .rating-submit-btn:hover {
        background-color: #2D3748;
    }

    .chart-container {
        margin: 1rem auto;
        padding: 1rem;
        max-width: 500px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        height: 350px;
    }

    #ratingsChart {
        max-width: 100%;
        max-height: 300px;
        margin: 0 auto;
    }
    
    /* Ensure rating stars are visible */
    .rating {
        min-height: 30px;
        min-width: 120px;
        display: inline-block;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"card-3d\">
    <div class=\"header-3d\">
        <h6>Responses for Complaint</h6>
        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
            <a href=\"{{ path('app_reponse_new', {'avisId': avis_id}) }}\" class=\"btn-add\">
                + New Response
            </a>
        {% endif %}
    </div>

    <div class=\"table-3d overflow-x-auto\">
        <table class=\"w-full text-sm text-left\">
            <thead>
                <tr>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Comment</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Date</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Admin's Email</th>
                    <th class=\"px-6 py-3 uppercase tracking-wider\">Rating</th>
                    {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                        <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Actions</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
                {% for reponse in reponses %}
                    <tr class=\"border-b border-gray-200\">
                        <td class=\"px-6 py-3\">{{ reponse.commentaire }}</td>
                        <td class=\"px-6 py-3\">{{ reponse.dateReponse|date('Y-m-d') }}</td>
                        <td class=\"px-6 py-3\">
                            {{ reponse.user ? reponse.user.username : 'Unknown' }}
                        </td>
                        <td class=\"px-6 py-3\">
                            <div class=\"rate-container\">
                                <div class=\"rating\" id=\"rating-{{ reponse.id }}\" 
                                    data-rating=\"{{ reponse.rate ?? 0 }}\" 
                                    data-readonly=\"{{ (reponse.rate is not null or not (app.user and 'ROLE_CLIENT' in app.user.roles)) ? 'true' : 'false' }}\"></div>
                                {% if reponse.rate is null and app.user and 'ROLE_CLIENT' in app.user.roles %}
                                    <form method=\"post\" action=\"{{ path('app_reponse_rate', {'id': reponse.id}) }}\" class=\"rating-form\">
                                        <input type=\"hidden\" name=\"rate\" id=\"rate-value-{{ reponse.id }}\" value=\"0\">
                                        <button type=\"submit\" class=\"rating-submit-btn\">Submit Rating</button>
                                    </form>
                                {% endif %}
                            </div>
                        </td>
                        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
                            <td class=\"px-6 py-3 space-x-2 text-center\">
                                <a href=\"{{ path('app_reponse_edit', {'id': reponse.id}) }}\" 
                                   class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                   style=\"background: #00007d;\">
                                    Edit
                                </a>
                                <form method=\"post\" action=\"{{ path('app_reponse_delete', {'id': reponse.id}) }}\" 
                                      class=\"inline-block\" 
                                      onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponse.id) }}\">
                                    <button type=\"submit\"
                                            class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
                                            style=\"background: #b91c1c;\">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        {% endif %}
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"{% if app.user and 'ROLE_ADMIN' in app.user.roles %}5{% else %}4{% endif %}\" 
                            class=\"px-6 py-3 text-center text-gray-500\">
                            No responses found for this complaint.
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
    <div class=\"chart-container\">
        <h6 class=\"mb-4 text-center\">Global Rating Distribution</h6>
        <canvas id=\"ratingsChart\"></canvas>
    </div>
    {% endif %}

    <div class=\"text-center mt-4 mb-4\">
       <a
           href=\"{{ is_granted('ROLE_ADMIN')
               ? path('app_avis_index')
               : path('app_avis_front') }}\"
           class=\"inline-block px-4 py-1.5 font-bold text-center uppercase align-middle transition-all rounded-lg cursor-pointer text-xs text-white\"
           style=\"background: #696969;\"
           >
           Back to complaints list
       </a>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>

<script>
    \$(document).ready(function() {
        console.log(\"Document ready\");
        
        // Initialize DataTable
        \$('table').DataTable({
            searching: false,
            info: false,
            paging: false,
            responsive: true,
            autoWidth: false
        });

        // Debug - Check if jQuery and plugins are loaded
        if (typeof \$.fn.rateYo === 'undefined') {
            console.error(\"RateYo plugin not loaded\");
        } else {
            console.log(\"RateYo plugin loaded\");
            
            // Make sure RateYo is properly initialized
            setTimeout(function() {
                initializeRatings();
            }, 300);
        }
        
        if (typeof Chart === 'undefined') {
            console.error(\"Chart.js not loaded\");
        } else {
            console.log(\"Chart.js loaded\");
        }
        
        // Function to initialize ratings
        function initializeRatings() {
            \$(\".rating\").each(function() {
                let \$this = \$(this);
                let id = \$this.attr('id').split('-')[1];
                let currentRating = parseFloat(\$this.data('rating')) || 0;
                let isReadonly = \$this.data('readonly') === 'true';
                
                console.log(\"Initializing rating:\", \$this.attr('id'), \"Rating:\", currentRating, \"ReadOnly:\", isReadonly);
                
                try {
                    // Force destroy if already initialized
                    if (\$this.rateYo('method') !== undefined) {
                        \$this.rateYo(\"destroy\");
                    }
                } catch (e) {
                    // Ignore error if it's not initialized
                }
                
                try {
                    \$this.rateYo({
                        rating: currentRating,
                        readOnly: isReadonly,
                        starWidth: \"20px\",
                        normalFill: \"#A0A0A0\",
                        ratedFill: \"#FFD700\",
                        fullStar: true,
                        onSet: function(rating) {
                            // Update the hidden input value when rating changes
                            \$('#rate-value-' + id).val(rating);
                        }
                    });
                } catch (e) {
                    console.error(\"Error initializing RateYo:\", e);
                }
            });
        }

        // Initialize Ratings Chart - Only for ROLE_ADMIN
        {% if app.user and 'ROLE_ADMIN' in app.user.roles %}
        try {
            const ratingsCtx = document.getElementById('ratingsChart');
            if (ratingsCtx) {
                console.log(\"Ratings chart canvas found\");
                
                {% if globalRatingStats is defined %}
                    console.log(\"Global ratings stats defined\");
                    const stats = {
                        1: {{ globalRatingStats[1] ?? 0 }},
                        2: {{ globalRatingStats[2] ?? 0 }},
                        3: {{ globalRatingStats[3] ?? 0 }},
                        4: {{ globalRatingStats[4] ?? 0 }},
                        5: {{ globalRatingStats[5] ?? 0 }}
                    };
                    
                    const totalRatings = stats[1] + stats[2] + stats[3] + stats[4] + stats[5];
                    console.log(\"Global Stats:\", stats, \"Total:\", totalRatings);
                    
                    const chartData = {
                        labels: [
                            '1 Star (' + stats[1] + ')',
                            '2 Stars (' + stats[2] + ')',
                            '3 Stars (' + stats[3] + ')',
                            '4 Stars (' + stats[4] + ')',
                            '5 Stars (' + stats[5] + ')'
                        ],
                        datasets: [{
                            data: [stats[1], stats[2], stats[3], stats[4], stats[5]],
                            backgroundColor: [
                                '#ff6384', '#ff9f40', '#ffcd56', '#4bc0c0', '#36a2eb'
                            ],
                            borderWidth: 1
                        }]
                    };
                    
                    new Chart(ratingsCtx, {
                        type: 'pie',
                        data: chartData,
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Global Rating Distribution (All Complaints)'
                                },
                                legend: {
                                    position: 'right'
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                            const value = context.raw;
                                            const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                                            return `\${value} ratings (\${percentage}%)`;
                                        }
                                    }
                                }
                            }
                        }
                    });
                {% else %}
                    console.log(\"Global ratings stats NOT defined\");
                    // Default chart with no data
                    new Chart(ratingsCtx, {
                        type: 'pie',
                        data: {
                            labels: ['No Rating Data Available'],
                            datasets: [{
                                data: [1],
                                backgroundColor: ['#e0e0e0'],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Global Rating Distribution (All Complaints)'
                                },
                                legend: {
                                    position: 'right'
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function() {
                                            return 'No ratings available';
                                        }
                                    }
                                }
                            }
                        }
                    });
                {% endif %}
            } else {
                console.error(\"Ratings chart canvas NOT found\");
            }
        } catch (e) {
            console.error(\"Error initializing chart:\", e);
        }
        {% endif %}
    });
</script>
{% endblock %}", "avis/reponses.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\avis\\reponses.html.twig");
    }
}
