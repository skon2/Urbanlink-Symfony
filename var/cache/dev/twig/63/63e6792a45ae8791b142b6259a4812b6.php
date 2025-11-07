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

/* avis/index.html.twig */
class __TwigTemplate_d1af97e81a4ef83800883fa5d7b353a5 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

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

        yield "Complaints";
        
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
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
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

        .search-form input {
            padding: 0.5rem 1rem;
            border: 2px solid #fff;
            border-radius: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }
        .search-form input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .stats-grid {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .stat-card {
            flex: 1 1 200px;
            background: #f1f5f9;
            border-radius: 0.75rem;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 6px 16px rgba(0,0,0,0.08);
        }
        .stat-card h4 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .stat-label {
            text-transform: uppercase;
            font-size: 0.875rem;
            font-weight: 600;
            color: #4a5568;
        }
        .chart-container {
            margin: 1rem;
            padding: 1rem;
            background: #fff;
            border-radius: 0.75rem;
            box-shadow: 0 6px 16px rgba(0,0,0,0.08);
            height: 400px;
            position: relative;
        }
        #complaintTypesChart {
            width: 100%;
            height: 100%;
            max-height: 350px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
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

        // line 115
        yield "    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <h4>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalComplaints"]) || array_key_exists("totalComplaints", $context) ? $context["totalComplaints"] : (function () { throw new RuntimeError('Variable "totalComplaints" does not exist.', 117, $this->source); })()), "html", null, true);
        yield "</h4>
            <div class=\"stat-label\">Total Complaints</div>
        </div>
        <div class=\"stat-card\">
            <h4>";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["processedCount"]) || array_key_exists("processedCount", $context) ? $context["processedCount"] : (function () { throw new RuntimeError('Variable "processedCount" does not exist.', 121, $this->source); })()), "html", null, true);
        yield "</h4>
            <div class=\"stat-label\">Processed</div>
        </div>
        <div class=\"stat-card\">
            <h4>";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pendingCount"]) || array_key_exists("pendingCount", $context) ? $context["pendingCount"] : (function () { throw new RuntimeError('Variable "pendingCount" does not exist.', 125, $this->source); })()), "html", null, true);
        yield "</h4>
            <div class=\"stat-label\">Pending</div>
        </div>
                <div class=\"stat-card\">
            <h4>";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["closedCount"]) || array_key_exists("closedCount", $context) ? $context["closedCount"] : (function () { throw new RuntimeError('Variable "closedCount" does not exist.', 129, $this->source); })()), "html", null, true);
        yield "</h4>
            <div class=\"stat-label\">Closed</div>
        </div>
    </div>

    <div class=\"card-3d\">
        <div class=\"header-3d\">
            <h6>Complaints Management</h6>
            <div class=\"flex items-center gap-2\">
                <form method=\"get\" action=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_index");
        yield "\" class=\"search-form\">
                    <input type=\"text\" name=\"search\" id=\"search\"
                           value=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 140, $this->source); })()), "html", null, true);
        yield "\"
                           placeholder=\"Search complaints...\"
                           class=\"mr-2\">
                    <button type=\"submit\" class=\"btn-add\">Search</button>
                </form>

                ";
        // line 146
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "role", [], "any", false, false, false, 146) == "client"))) {
            // line 147
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new");
            yield "\" class=\"btn-add\">+ New Complaint</a>
                ";
        }
        // line 149
        yield "
                <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_pdf");
        yield "\" target=\"_blank\" class=\"btn-add\">Export PDF</a>
            </div>
        </div>

        <div class=\"table-3d overflow-x-auto\">
            <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
                <thead>
                    <tr>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Type</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Description</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Date</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Taxi Registration</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Vehicle License</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Status</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 168, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 169
            yield "                        <tr class=\"border-b border-gray-200\">
                            <td class=\"px-6 py-3\">";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "type", [], "any", false, false, false, 170), "html", null, true);
            yield "</td>
                            <td class=\"px-6 py-3\">";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 171), "html", null, true);
            yield "</td>
                            <td class=\"px-6 py-3\">";
            // line 172
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "dateAvis", [], "any", false, false, false, 172), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                            <td class=\"px-6 py-3\">";
            // line 173
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 173) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 173), "id", [], "any", false, false, false, 173))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "taxi", [], "any", false, false, false, 173), "immatriculation", [], "any", false, false, false, 173), "html", null, true)) : ("N/A"));
            yield "</td>
                            <td class=\"px-6 py-3\">";
            // line 174
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "vehicle", [], "any", false, false, false, 174) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "vehicle", [], "any", false, false, false, 174), "id", [], "any", false, false, false, 174))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "vehicle", [], "any", false, false, false, 174), "licensePlate", [], "any", false, false, false, 174), "html", null, true)) : ("N/A"));
            yield "</td>
                            <td class=\"px-6 py-3 text-center\">
                                ";
            // line 176
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "statut", [], "any", false, false, false, 176) == "processed")) {
                // line 177
                yield "                                    <span class=\"bg-green-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">Processed</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 178
$context["avi"], "statut", [], "any", false, false, false, 178) == "not processed")) {
                // line 179
                yield "                                    <span class=\"bg-yellow-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">Pending</span>
                                ";
            } else {
                // line 181
                yield "                                    <span class=\"bg-red-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">Closed</span>
                                ";
            }
            // line 183
            yield "                            </td>
                            <td class=\"px-6 py-3 space-x-2\">
                                ";
            // line 185
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185), "id", [], "any", false, false, false, 185) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 185), "id", [], "any", false, false, false, 185)))) {
                // line 186
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 186)]), "html", null, true);
                yield "\"
                                       class=\"inline-block px-4 py-1.5 font-bold text-xs text-white rounded-lg\"
                                       style=\"background: #00007d;\">Edit</a>
                                ";
            }
            // line 190
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_reponses", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 190)]), "html", null, true);
            yield "\"
                                   class=\"inline-block px-4 py-1.5 font-bold text-xs text-white rounded-lg\"
                                   style=\"background: #28a745;\">Responses</a>
                                ";
            // line 193
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "role", [], "any", false, false, false, 193) == "client")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "id", [], "any", false, false, false, 193) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "user", [], "any", false, false, false, 193), "id", [], "any", false, false, false, 193)))) {
                // line 194
                yield "                                    <form method=\"post\"
                                          action=\"";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 195)]), "html", null, true);
                yield "\"
                                          class=\"inline\">
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 198))), "html", null, true);
                yield "\">
                                        <button type=\"submit\"
                                                class=\"inline-block px-4 py-1.5 font-bold text-xs text-white rounded-lg\"
                                                style=\"background: #b91c1c;\"
                                                onclick=\"return confirm('Are you sure?')\">Delete
                                        </button>
                                    </form>
                                ";
            }
            // line 206
            yield "                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 208
        if (!$context['_iterated']) {
            // line 209
            yield "                        <tr>
                            <td colspan=\"7\" class=\"px-6 py-3 text-center text-gray-500\">No complaints found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "                </tbody>
            </table>
        </div>

        <div class=\"chart-container\">
            <h6 class=\"mb-4\">Complaint Types Breakdown</h6>
            <div id=\"chart-stats\" class=\"text-center mb-2\">
                <small>Taxi: ";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 220, $this->source); })()), "taxi complaint", [], "array", false, false, false, 220), "html", null, true);
        yield " | Subscription: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 220, $this->source); })()), "subscription complaint", [], "array", false, false, false, 220), "html", null, true);
        yield " | Vehicle: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 220, $this->source); })()), "vehicle complaint", [], "array", false, false, false, 220), "html", null, true);
        yield "</small>
            </div>
            <canvas id=\"complaintTypesChart\"></canvas>
        </div>
    </div>

    <div class=\"pagination-container mt-4\">
        ";
        // line 227
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 227, $this->source); })()));
        yield "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 231
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

        // line 232
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js\"></script>

    <script>
        // Wait for document to be fully loaded
        window.addEventListener('load', function() {
            // Initialize DataTable
            if (\$.fn.DataTable) {
                \$('#datatable-search').DataTable({
                    searching: false,
                    info: false,
                    paging: false,
                    responsive: true,
                    autoWidth: false
                });
            }
            
            // Debug info
            console.log(\"DOM loaded, initializing chart...\");
            
            // Find our chart canvas
            const chartCanvas = document.getElementById('complaintTypesChart');
            
            if (!chartCanvas) {
                console.error(\"Cannot find chart canvas element!\");
                return;
            }
            
            console.log(\"Canvas found, dimensions:\", chartCanvas.width, chartCanvas.height);
            
            // Get the chart data
            const taxiCount = ";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "taxi complaint", [], "array", true, true, false, 265)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 265, $this->source); })()), "taxi complaint", [], "array", false, false, false, 265), 0)) : (0)), "html", null, true);
        yield ";
            const subscriptionCount = ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "subscription complaint", [], "array", true, true, false, 266)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 266, $this->source); })()), "subscription complaint", [], "array", false, false, false, 266), 0)) : (0)), "html", null, true);
        yield ";
            const vehicleCount = ";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "vehicle complaint", [], "array", true, true, false, 267)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 267, $this->source); })()), "vehicle complaint", [], "array", false, false, false, 267), 0)) : (0)), "html", null, true);
        yield ";
            
            console.log(\"Chart data:\", taxiCount, subscriptionCount, vehicleCount);
            
            // Prepare chart data
            const chartData = {
                labels: ['Taxi Complaints', 'Subscription Complaints', 'Vehicle Complaints'],
                datasets: [{
                    data: [taxiCount, subscriptionCount, vehicleCount],
                    backgroundColor: ['#f59e0b', '#10b981', '#3b82f6'],
                    borderColor: ['#fff', '#fff', '#fff'],
                    borderWidth: 2,
                    hoverOffset: 15
                }]
            };
            
            // Check if Chart.js is loaded
            if (typeof Chart === 'undefined') {
                console.error(\"Chart.js is not loaded!\");
                const errorDiv = document.createElement('div');
                errorDiv.innerHTML = \"Chart library not loaded. Please check your internet connection.\";
                errorDiv.style.color = \"red\";
                errorDiv.style.padding = \"20px\";
                errorDiv.style.textAlign = \"center\";
                chartCanvas.parentNode.appendChild(errorDiv);
                return;
            }
            
            // Create chart with alternative renderer
            try {
                const pieChart = new Chart(chartCanvas, {
                    type: 'pie',
                    data: chartData,
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    padding: 20,
                                    boxWidth: 15,
                                    font: {
                                        size: 12
                                    }
                                }
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        const label = context.label || '';
                                        const value = context.raw || 0;
                                        const total = context.dataset.data.reduce((acc, val) => acc + val, 0) || 1;
                                        const percentage = Math.round((value / total) * 100);
                                        return `\${label}: \${value} (\${percentage}%)`;
                                    }
                                }
                            }
                        }
                    }
                });
                
                console.log(\"Chart initialized successfully\");
                
            } catch (error) {
                console.error(\"Error creating chart:\", error);
                
                // Display fallback text representation
                const fallbackDiv = document.createElement('div');
                fallbackDiv.innerHTML = `
                    <div style=\"text-align: center; padding: 20px;\">
                        <p><strong>Chart Data:</strong></p>
                        <p>Taxi Complaints: \${taxiCount}</p>
                        <p>Subscription Complaints: \${subscriptionCount}</p>
                        <p>Vehicle Complaints: \${vehicleCount}</p>
                    </div>
                `;
                chartCanvas.parentNode.replaceChild(fallbackDiv, chartCanvas);
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
        return "avis/index.html.twig";
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
        return array (  516 => 267,  512 => 266,  508 => 265,  471 => 232,  458 => 231,  444 => 227,  430 => 220,  421 => 213,  412 => 209,  410 => 208,  404 => 206,  393 => 198,  387 => 195,  384 => 194,  382 => 193,  375 => 190,  367 => 186,  365 => 185,  361 => 183,  357 => 181,  353 => 179,  351 => 178,  348 => 177,  346 => 176,  341 => 174,  337 => 173,  333 => 172,  329 => 171,  325 => 170,  322 => 169,  317 => 168,  296 => 150,  293 => 149,  287 => 147,  285 => 146,  276 => 140,  271 => 138,  259 => 129,  252 => 125,  245 => 121,  238 => 117,  234 => 115,  221 => 114,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Complaints{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css\">
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

        .search-form input {
            padding: 0.5rem 1rem;
            border: 2px solid #fff;
            border-radius: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }
        .search-form input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .stats-grid {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .stat-card {
            flex: 1 1 200px;
            background: #f1f5f9;
            border-radius: 0.75rem;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 6px 16px rgba(0,0,0,0.08);
        }
        .stat-card h4 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .stat-label {
            text-transform: uppercase;
            font-size: 0.875rem;
            font-weight: 600;
            color: #4a5568;
        }
        .chart-container {
            margin: 1rem;
            padding: 1rem;
            background: #fff;
            border-radius: 0.75rem;
            box-shadow: 0 6px 16px rgba(0,0,0,0.08);
            height: 400px;
            position: relative;
        }
        #complaintTypesChart {
            width: 100%;
            height: 100%;
            max-height: 350px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <h4>{{ totalComplaints }}</h4>
            <div class=\"stat-label\">Total Complaints</div>
        </div>
        <div class=\"stat-card\">
            <h4>{{ processedCount }}</h4>
            <div class=\"stat-label\">Processed</div>
        </div>
        <div class=\"stat-card\">
            <h4>{{ pendingCount }}</h4>
            <div class=\"stat-label\">Pending</div>
        </div>
                <div class=\"stat-card\">
            <h4>{{ closedCount }}</h4>
            <div class=\"stat-label\">Closed</div>
        </div>
    </div>

    <div class=\"card-3d\">
        <div class=\"header-3d\">
            <h6>Complaints Management</h6>
            <div class=\"flex items-center gap-2\">
                <form method=\"get\" action=\"{{ path('app_avis_index') }}\" class=\"search-form\">
                    <input type=\"text\" name=\"search\" id=\"search\"
                           value=\"{{ search }}\"
                           placeholder=\"Search complaints...\"
                           class=\"mr-2\">
                    <button type=\"submit\" class=\"btn-add\">Search</button>
                </form>

                {% if app.user and app.user.role == 'client' %}
                    <a href=\"{{ path('app_avis_new') }}\" class=\"btn-add\">+ New Complaint</a>
                {% endif %}

                <a href=\"{{ path('app_avis_pdf') }}\" target=\"_blank\" class=\"btn-add\">Export PDF</a>
            </div>
        </div>

        <div class=\"table-3d overflow-x-auto\">
            <table id=\"datatable-search\" class=\"w-full text-sm text-left\">
                <thead>
                    <tr>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Type</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Description</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Date</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Taxi Registration</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Vehicle License</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider text-center\">Status</th>
                        <th class=\"px-6 py-3 uppercase tracking-wider\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for avi in avis %}
                        <tr class=\"border-b border-gray-200\">
                            <td class=\"px-6 py-3\">{{ avi.type }}</td>
                            <td class=\"px-6 py-3\">{{ avi.commentaire }}</td>
                            <td class=\"px-6 py-3\">{{ avi.dateAvis ? avi.dateAvis|date('Y-m-d') : '' }}</td>
                            <td class=\"px-6 py-3\">{{ avi.taxi and avi.taxi.id ? avi.taxi.immatriculation : 'N/A' }}</td>
                            <td class=\"px-6 py-3\">{{ avi.vehicle and avi.vehicle.id ? avi.vehicle.licensePlate : 'N/A' }}</td>
                            <td class=\"px-6 py-3 text-center\">
                                {% if avi.statut == 'processed' %}
                                    <span class=\"bg-green-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">Processed</span>
                                {% elseif avi.statut == 'not processed' %}
                                    <span class=\"bg-yellow-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">Pending</span>
                                {% else %}
                                    <span class=\"bg-red-500 text-white py-1 px-3 rounded-full text-xs font-bold uppercase\">Closed</span>
                                {% endif %}
                            </td>
                            <td class=\"px-6 py-3 space-x-2\">
                                {% if app.user and app.user.id == avi.user.id %}
                                    <a href=\"{{ path('app_avis_edit', {'id': avi.id}) }}\"
                                       class=\"inline-block px-4 py-1.5 font-bold text-xs text-white rounded-lg\"
                                       style=\"background: #00007d;\">Edit</a>
                                {% endif %}
                                <a href=\"{{ path('app_avis_reponses', {'id': avi.id}) }}\"
                                   class=\"inline-block px-4 py-1.5 font-bold text-xs text-white rounded-lg\"
                                   style=\"background: #28a745;\">Responses</a>
                                {% if app.user and app.user.role == 'client' and app.user.id == avi.user.id %}
                                    <form method=\"post\"
                                          action=\"{{ path('app_avis_delete', {'id': avi.id}) }}\"
                                          class=\"inline\">
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"{{ csrf_token('delete' ~ avi.id) }}\">
                                        <button type=\"submit\"
                                                class=\"inline-block px-4 py-1.5 font-bold text-xs text-white rounded-lg\"
                                                style=\"background: #b91c1c;\"
                                                onclick=\"return confirm('Are you sure?')\">Delete
                                        </button>
                                    </form>
                                {% endif %}
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\" class=\"px-6 py-3 text-center text-gray-500\">No complaints found</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"chart-container\">
            <h6 class=\"mb-4\">Complaint Types Breakdown</h6>
            <div id=\"chart-stats\" class=\"text-center mb-2\">
                <small>Taxi: {{ stats['taxi complaint'] }} | Subscription: {{ stats['subscription complaint'] }} | Vehicle: {{ stats['vehicle complaint'] }}</small>
            </div>
            <canvas id=\"complaintTypesChart\"></canvas>
        </div>
    </div>

    <div class=\"pagination-container mt-4\">
        {{ knp_pagination_render(avis) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js\"></script>

    <script>
        // Wait for document to be fully loaded
        window.addEventListener('load', function() {
            // Initialize DataTable
            if (\$.fn.DataTable) {
                \$('#datatable-search').DataTable({
                    searching: false,
                    info: false,
                    paging: false,
                    responsive: true,
                    autoWidth: false
                });
            }
            
            // Debug info
            console.log(\"DOM loaded, initializing chart...\");
            
            // Find our chart canvas
            const chartCanvas = document.getElementById('complaintTypesChart');
            
            if (!chartCanvas) {
                console.error(\"Cannot find chart canvas element!\");
                return;
            }
            
            console.log(\"Canvas found, dimensions:\", chartCanvas.width, chartCanvas.height);
            
            // Get the chart data
            const taxiCount = {{ stats['taxi complaint']|default(0) }};
            const subscriptionCount = {{ stats['subscription complaint']|default(0) }};
            const vehicleCount = {{ stats['vehicle complaint']|default(0) }};
            
            console.log(\"Chart data:\", taxiCount, subscriptionCount, vehicleCount);
            
            // Prepare chart data
            const chartData = {
                labels: ['Taxi Complaints', 'Subscription Complaints', 'Vehicle Complaints'],
                datasets: [{
                    data: [taxiCount, subscriptionCount, vehicleCount],
                    backgroundColor: ['#f59e0b', '#10b981', '#3b82f6'],
                    borderColor: ['#fff', '#fff', '#fff'],
                    borderWidth: 2,
                    hoverOffset: 15
                }]
            };
            
            // Check if Chart.js is loaded
            if (typeof Chart === 'undefined') {
                console.error(\"Chart.js is not loaded!\");
                const errorDiv = document.createElement('div');
                errorDiv.innerHTML = \"Chart library not loaded. Please check your internet connection.\";
                errorDiv.style.color = \"red\";
                errorDiv.style.padding = \"20px\";
                errorDiv.style.textAlign = \"center\";
                chartCanvas.parentNode.appendChild(errorDiv);
                return;
            }
            
            // Create chart with alternative renderer
            try {
                const pieChart = new Chart(chartCanvas, {
                    type: 'pie',
                    data: chartData,
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    padding: 20,
                                    boxWidth: 15,
                                    font: {
                                        size: 12
                                    }
                                }
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        const label = context.label || '';
                                        const value = context.raw || 0;
                                        const total = context.dataset.data.reduce((acc, val) => acc + val, 0) || 1;
                                        const percentage = Math.round((value / total) * 100);
                                        return `\${label}: \${value} (\${percentage}%)`;
                                    }
                                }
                            }
                        }
                    }
                });
                
                console.log(\"Chart initialized successfully\");
                
            } catch (error) {
                console.error(\"Error creating chart:\", error);
                
                // Display fallback text representation
                const fallbackDiv = document.createElement('div');
                fallbackDiv.innerHTML = `
                    <div style=\"text-align: center; padding: 20px;\">
                        <p><strong>Chart Data:</strong></p>
                        <p>Taxi Complaints: \${taxiCount}</p>
                        <p>Subscription Complaints: \${subscriptionCount}</p>
                        <p>Vehicle Complaints: \${vehicleCount}</p>
                    </div>
                `;
                chartCanvas.parentNode.replaceChild(fallbackDiv, chartCanvas);
            }
        });
    </script>
{% endblock %}", "avis/index.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\avis\\index.html.twig");
    }
}
