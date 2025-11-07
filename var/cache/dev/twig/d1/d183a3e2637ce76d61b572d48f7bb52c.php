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

/* profile/myprofile.html.twig */
class __TwigTemplate_d2e28bc0c1e505fc48171999c847d7b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprofile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/myprofile.html.twig"));

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

        yield "Edit Profile - UrbanLink";
        
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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\" />
    <style>
        .input-field {
            transition: all 0.3s ease;
            border: 1px solid #d1d5db;
        }
        .input-field:hover {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .input-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            outline: none;
        }
        .password-field {
            border: 1px solid #d1d5db;
            transition: all 0.3s ease;
        }
        .password-field:hover, .password-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
        .section-header {
            position: relative;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        .section-header:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 3rem;
            height: 3px;
            background: #3b82f6;
            border-radius: 3px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
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

        // line 49
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "vars", [], "any", false, false, false, 49), "errors", [], "any", false, false, false, 49)) > 0)) {
            // line 50
            yield "    <div class=\"mb-4 p-4 bg-red-100 text-red-500 border border-red-300 rounded\">
      ";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'errors');
            yield "
    </div>
  ";
        }
        // line 54
        yield "
  ";
        // line 56
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    <div class=\"min-h-screen bg-gray-50\">
        <div class=\"bg-gradient-to-r from-blue-600 to-blue-500 shadow\">
            <div class=\"max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8\">
                <h1 class=\"text-3xl font-bold text-white\">
                    Edit Your Profile
                </h1>
            </div>
        </div>

        <main class=\"py-8\">
            <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
                <div class=\"bg-white shadow-xl rounded-lg overflow-hidden\">
                    <div class=\"divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x\">
                        <aside class=\"py-6 lg:col-span-3\">
                            <nav class=\"space-y-1\">
                                <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" class=\"border-l-4 border-blue-600 bg-blue-50 text-blue-700 group flex items-center px-3 py-2 text-sm font-medium\">
                                    <i class=\"fas fa-user-edit text-blue-500 group-hover:text-blue-600 flex-shrink-0 -ml-1 mr-3 h-6 w-6\"></i>
                                    <span class=\"truncate\">Edit Profile</span>
                                </a>
                            </nav>
                        </aside>

                        <div class=\"lg:col-span-9 p-8\">
                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "flashes", ["success"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 82
            yield "                                <div class=\"rounded-md bg-green-50 p-4 mb-6\">
                                    <div class=\"flex\">
                                        <div class=\"flex-shrink-0\">
                                            <i class=\"fas fa-check-circle h-5 w-5 text-green-400\"></i>
                                        </div>
                                        <div class=\"ml-3\">
                                            <p class=\"text-sm font-medium text-green-800\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "</p>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "
                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "flashes", ["error"], "method", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 95
            yield "                                <div class=\"rounded-md bg-red-50 p-4 mb-6\">
                                    <div class=\"flex\">
                                        <div class=\"flex-shrink-0\">
                                            <i class=\"fas fa-exclamation-circle h-5 w-5 text-red-400\"></i>
                                        </div>
                                        <div class=\"ml-3\">
                                            <p class=\"text-sm font-medium text-red-800\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash"], "html", null, true);
            yield "</p>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "
                            ";
        // line 107
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-8", "enctype" => "multipart/form-data"]]);
        yield "
                            ";
        // line 108
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "image", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "                            <div class=\"mt-2\">
                            <img src=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "image", [], "any", false, false, false, 110)), "html", null, true);
            yield "\" alt=\"Current Profile Picture\" class=\"rounded-full h-16 w-16 object-cover shadow-sm\">
                        
                                </div>
                                
                                
                            ";
        } else {
            // line 116
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.png"), "html", null, true);
            yield "\"
                                    alt=\"default avatar\"
                                    class=\"rounded-circle\"
                                    style=\"width:40px; height:40px; object-fit:cover;\" />
                            ";
        }
        // line 121
        yield "

                            <div class=\"space-y-6\">
                                <div>
                                    <h2 class=\"section-header text-2xl font-semibold leading-7 text-gray-900\">Personal Information</h2>
                                    <p class=\"mt-2 text-sm text-gray-600\">Update your personal details to keep your account information current.</p>
                                </div>

                                <div class=\"grid grid-cols-1 gap-y-6 gap-x-6 sm:grid-cols-6\">
                                    <div class=\"sm:col-span-3\">
                                        ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "name", [], "any", false, false, false, 131), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Full Name"]);
        yield "
                                        <div class=\"relative rounded-md shadow-sm\">
                                            ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "name", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
        yield "
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "name", [], "any", false, false, false, 136), 'errors');
        yield "
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-4\">
                                        ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "email", [], "any", false, false, false, 141), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Email Address"]);
        yield "
                                        <div class=\"relative rounded-md shadow-sm\">
                                            ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "email", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
        yield "
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "email", [], "any", false, false, false, 146), 'errors');
        yield "
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-4\">
                                        <label for=\"phone\" class=\"block text-sm font-medium text-gray-700 mb-1\">Phone Number</label>
                                        <div class=\"flex rounded-md shadow-sm\">
                                            <select id=\"countryCode\" class=\"inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm\">
                                                <option value=\"+1\">US +1</option>
                                                <option value=\"+216\">TN +216</option>
                                                <option value=\"+33\">FR +33</option>
                                                <option value=\"+49\">DE +49</option>
                                                <option value=\"+44\">UK +44</option>
                                            </select>
                                            <div class=\"relative flex-grow\">
                                                ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "phone", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "input-field pl-3 block w-full min-w-0 flex-1 rounded-none rounded-r-md py-2 px-3 sm:text-sm", "id" => "phone"]]);
        yield "
                                            </div>
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "phone", [], "any", false, false, false, 165), 'errors');
        yield "
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-6\">
                                        ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "homeAddress", [], "any", false, false, false, 170), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Home Address"]);
        yield "
                                        <div class=\"relative rounded-md shadow-sm\">
                                            ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "homeAddress", [], "any", false, false, false, 172), 'widget', ["attr" => ["class" => "input-field block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
        yield "
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "homeAddress", [], "any", false, false, false, 175), 'errors');
        yield "
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-6\">
                                        ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "image", [], "any", false, false, false, 180), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Profile Image"]);
        yield "
                                        <div class=\"mt-1 relative rounded-md shadow-sm\">
                                            ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "image", [], "any", false, false, false, 182), 'widget', ["attr" => ["class" => "input-field block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
        yield "
                                        </div>
                                        <p class=\"mt-1 text-sm text-gray-500\">Upload a new profile picture (JPEG, PNG, GIF - max 2MB).</p>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "image", [], "any", false, false, false, 186), 'errors');
        yield "
                                        </div>
                                        

                                    ";
        // line 190
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", true, true, false, 190)) {
            // line 191
            yield "                                        <div class=\"sm:col-span-6 pt-6 border-t border-gray-200\">
                                            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Password Update</h3>

                                            <div class=\"sm:col-span-4 mb-4\">
                                                ";
            // line 195
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "plainPassword", [], "any", false, false, false, 195), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "New Password"]);
            yield "
                                                <div class=\"relative rounded-md shadow-sm\">
                                                    <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                                                        <i class=\"fas fa-lock text-gray-400\"></i>
                                                    </div>
                                                    ";
            // line 200
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "plainPassword", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "password-field pl-10 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
            yield "
                                                </div>
                                                <div class=\"mt-1 text-sm text-red-600\">
                                                    ";
            // line 203
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "plainPassword", [], "any", false, false, false, 203), 'errors');
            yield "
                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        // line 208
        yield "
                                </div>
                            </div>

                            ";
        // line 212
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "license", [], "any", true, true, false, 212)) {
            // line 213
            yield "                                <div class=\"pt-8 border-t border-gray-200\">
                                    <div>
                                        <h2 class=\"section-header text-xl font-semibold leading-6 text-gray-900\">License Information</h2>
                                        <p class=\"mt-2 text-sm text-gray-600\">Your driving license details for verification purposes.</p>
                                    </div>

                                    <div class=\"mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6\">
                                        <div class=\"sm:col-span-4\">
                                            ";
            // line 221
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "license", [], "any", false, false, false, 221), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "License Number"]);
            yield "
                                            <div class=\"relative rounded-md shadow-sm\">
                                                <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                                                    <i class=\"fas fa-id-card text-gray-400\"></i>
                                                </div>
                                                ";
            // line 226
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "license", [], "any", false, false, false, 226), 'widget', ["attr" => ["class" => "input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm"]]);
            yield "
                                            </div>
                                            <div class=\"mt-1 text-sm text-red-600\">
                                                ";
            // line 229
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "license", [], "any", false, false, false, 229), 'errors');
            yield "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 235
        yield "
                            <div class=\"pt-8 border-t border-gray-200\">
                                <div class=\"flex justify-end\">
                                    <button type=\"submit\" class=\"inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 py-2 px-6 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200\">
                                        <i class=\"fas fa-save mr-2\"></i> Save Changes
                                    </button>
                                </div>
                            </div>
                            ";
        // line 243
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 252
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

        // line 253
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set the country code based on the current phone number
            const phoneInput = document.getElementById('phone');
            const countryCodeSelect = document.getElementById('countryCode');

            if (phoneInput.value) {
                // Extract country code from phone number
                const phoneValue = phoneInput.value;
                const plusIndex = phoneValue.indexOf('+');

                if (plusIndex !== -1) {
                    const spaceIndex = phoneValue.indexOf(' ');
                    const code = phoneValue.substring(plusIndex, spaceIndex !== -1 ? spaceIndex : undefined);

                    // Find matching option
                    for (let i = 0; i < countryCodeSelect.options.length; i++) {
                        if (countryCodeSelect.options[i].value === code) {
                            countryCodeSelect.selectedIndex = i;
                            break;
                        }
                    }

                    // Remove country code from display
                    if (spaceIndex !== -1) {
                        phoneInput.value = phoneValue.substring(spaceIndex + 1);
                    } else if (plusIndex === 0) {
                        phoneInput.value = '';
                    }
                }
            }

            // Update phone number with country code before form submission
            const form = document.querySelector('form');
            form.addEventListener('submit', function() {
                const selectedCode = countryCodeSelect.options[countryCodeSelect.selectedIndex].value;
                if (!phoneInput.value.startsWith(selectedCode)) {
                    phoneInput.value = selectedCode + ' ' + phoneInput.value;
                }
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
        return "profile/myprofile.html.twig";
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
        return array (  519 => 253,  506 => 252,  487 => 243,  477 => 235,  468 => 229,  462 => 226,  454 => 221,  444 => 213,  442 => 212,  436 => 208,  428 => 203,  422 => 200,  414 => 195,  408 => 191,  406 => 190,  399 => 186,  392 => 182,  387 => 180,  379 => 175,  373 => 172,  368 => 170,  360 => 165,  353 => 161,  335 => 146,  329 => 143,  324 => 141,  316 => 136,  310 => 133,  305 => 131,  293 => 121,  284 => 116,  275 => 110,  272 => 109,  270 => 108,  266 => 107,  263 => 106,  252 => 101,  244 => 95,  240 => 94,  237 => 93,  226 => 88,  218 => 82,  214 => 81,  203 => 73,  182 => 56,  179 => 54,  173 => 51,  170 => 50,  168 => 49,  155 => 48,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basef.html.twig' %}

{% block title %}Edit Profile - UrbanLink{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\" />
    <style>
        .input-field {
            transition: all 0.3s ease;
            border: 1px solid #d1d5db;
        }
        .input-field:hover {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .input-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            outline: none;
        }
        .password-field {
            border: 1px solid #d1d5db;
            transition: all 0.3s ease;
        }
        .password-field:hover, .password-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
        .section-header {
            position: relative;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        .section-header:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 3rem;
            height: 3px;
            background: #3b82f6;
            border-radius: 3px;
        }
    </style>
{% endblock %}

{% block body %}
{% if form.vars.errors|length > 0 %}
    <div class=\"mb-4 p-4 bg-red-100 text-red-500 border border-red-300 rounded\">
      {{ form_errors(form) }}
    </div>
  {% endif %}

  {# Démarrage du formulaire (validation HTML5 désactivée) #}
  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <div class=\"min-h-screen bg-gray-50\">
        <div class=\"bg-gradient-to-r from-blue-600 to-blue-500 shadow\">
            <div class=\"max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8\">
                <h1 class=\"text-3xl font-bold text-white\">
                    Edit Your Profile
                </h1>
            </div>
        </div>

        <main class=\"py-8\">
            <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
                <div class=\"bg-white shadow-xl rounded-lg overflow-hidden\">
                    <div class=\"divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x\">
                        <aside class=\"py-6 lg:col-span-3\">
                            <nav class=\"space-y-1\">
                                <a href=\"{{ path('app_profile_edit') }}\" class=\"border-l-4 border-blue-600 bg-blue-50 text-blue-700 group flex items-center px-3 py-2 text-sm font-medium\">
                                    <i class=\"fas fa-user-edit text-blue-500 group-hover:text-blue-600 flex-shrink-0 -ml-1 mr-3 h-6 w-6\"></i>
                                    <span class=\"truncate\">Edit Profile</span>
                                </a>
                            </nav>
                        </aside>

                        <div class=\"lg:col-span-9 p-8\">
                            {% for flash in app.flashes('success') %}
                                <div class=\"rounded-md bg-green-50 p-4 mb-6\">
                                    <div class=\"flex\">
                                        <div class=\"flex-shrink-0\">
                                            <i class=\"fas fa-check-circle h-5 w-5 text-green-400\"></i>
                                        </div>
                                        <div class=\"ml-3\">
                                            <p class=\"text-sm font-medium text-green-800\">{{ flash }}</p>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}

                            {% for flash in app.flashes('error') %}
                                <div class=\"rounded-md bg-red-50 p-4 mb-6\">
                                    <div class=\"flex\">
                                        <div class=\"flex-shrink-0\">
                                            <i class=\"fas fa-exclamation-circle h-5 w-5 text-red-400\"></i>
                                        </div>
                                        <div class=\"ml-3\">
                                            <p class=\"text-sm font-medium text-red-800\">{{ flash }}</p>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}

                            {{ form_start(form, {'attr': {'class': 'space-y-8', 'enctype': 'multipart/form-data'}}) }}
                            {% if app.user.image %}
                            <div class=\"mt-2\">
                            <img src=\"{{ asset(app.user.image) }}\" alt=\"Current Profile Picture\" class=\"rounded-full h-16 w-16 object-cover shadow-sm\">
                        
                                </div>
                                
                                
                            {% else %}
                                <img src=\"{{ asset('images/default.png') }}\"
                                    alt=\"default avatar\"
                                    class=\"rounded-circle\"
                                    style=\"width:40px; height:40px; object-fit:cover;\" />
                            {% endif %}


                            <div class=\"space-y-6\">
                                <div>
                                    <h2 class=\"section-header text-2xl font-semibold leading-7 text-gray-900\">Personal Information</h2>
                                    <p class=\"mt-2 text-sm text-gray-600\">Update your personal details to keep your account information current.</p>
                                </div>

                                <div class=\"grid grid-cols-1 gap-y-6 gap-x-6 sm:grid-cols-6\">
                                    <div class=\"sm:col-span-3\">
                                        {{ form_label(form.name, 'Full Name', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                        <div class=\"relative rounded-md shadow-sm\">
                                            {{ form_widget(form.name, {'attr': {'class': 'input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            {{ form_errors(form.name) }}
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-4\">
                                        {{ form_label(form.email, 'Email Address', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                        <div class=\"relative rounded-md shadow-sm\">
                                            {{ form_widget(form.email, {'attr': {'class': 'input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            {{ form_errors(form.email) }}
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-4\">
                                        <label for=\"phone\" class=\"block text-sm font-medium text-gray-700 mb-1\">Phone Number</label>
                                        <div class=\"flex rounded-md shadow-sm\">
                                            <select id=\"countryCode\" class=\"inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm\">
                                                <option value=\"+1\">US +1</option>
                                                <option value=\"+216\">TN +216</option>
                                                <option value=\"+33\">FR +33</option>
                                                <option value=\"+49\">DE +49</option>
                                                <option value=\"+44\">UK +44</option>
                                            </select>
                                            <div class=\"relative flex-grow\">
                                                {{ form_widget(form.phone, {'attr': {'class': 'input-field pl-3 block w-full min-w-0 flex-1 rounded-none rounded-r-md py-2 px-3 sm:text-sm', 'id': 'phone'}}) }}
                                            </div>
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            {{ form_errors(form.phone) }}
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-6\">
                                        {{ form_label(form.homeAddress, 'Home Address', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                        <div class=\"relative rounded-md shadow-sm\">
                                            {{ form_widget(form.homeAddress, {'attr': {'class': 'input-field block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                        </div>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            {{ form_errors(form.homeAddress) }}
                                        </div>
                                    </div>

                                    <div class=\"sm:col-span-6\">
                                        {{ form_label(form.image, 'Profile Image', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                        <div class=\"mt-1 relative rounded-md shadow-sm\">
                                            {{ form_widget(form.image, {'attr': {'class': 'input-field block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                        </div>
                                        <p class=\"mt-1 text-sm text-gray-500\">Upload a new profile picture (JPEG, PNG, GIF - max 2MB).</p>
                                        <div class=\"mt-1 text-sm text-red-600\">
                                            {{ form_errors(form.image) }}
                                        </div>
                                        

                                    {% if form.plainPassword is defined %}
                                        <div class=\"sm:col-span-6 pt-6 border-t border-gray-200\">
                                            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Password Update</h3>

                                            <div class=\"sm:col-span-4 mb-4\">
                                                {{ form_label(form.plainPassword, 'New Password', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                                <div class=\"relative rounded-md shadow-sm\">
                                                    <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                                                        <i class=\"fas fa-lock text-gray-400\"></i>
                                                    </div>
                                                    {{ form_widget(form.plainPassword, {'attr': {'class': 'password-field pl-10 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                                </div>
                                                <div class=\"mt-1 text-sm text-red-600\">
                                                    {{ form_errors(form.plainPassword) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}

                                </div>
                            </div>

                            {% if form.license is defined %}
                                <div class=\"pt-8 border-t border-gray-200\">
                                    <div>
                                        <h2 class=\"section-header text-xl font-semibold leading-6 text-gray-900\">License Information</h2>
                                        <p class=\"mt-2 text-sm text-gray-600\">Your driving license details for verification purposes.</p>
                                    </div>

                                    <div class=\"mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6\">
                                        <div class=\"sm:col-span-4\">
                                            {{ form_label(form.license, 'License Number', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                                            <div class=\"relative rounded-md shadow-sm\">
                                                <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                                                    <i class=\"fas fa-id-card text-gray-400\"></i>
                                                </div>
                                                {{ form_widget(form.license, {'attr': {'class': 'input-field pl-3 block w-full rounded-md py-2 px-3 shadow-sm sm:text-sm'}}) }}
                                            </div>
                                            <div class=\"mt-1 text-sm text-red-600\">
                                                {{ form_errors(form.license) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}

                            <div class=\"pt-8 border-t border-gray-200\">
                                <div class=\"flex justify-end\">
                                    <button type=\"submit\" class=\"inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 py-2 px-6 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200\">
                                        <i class=\"fas fa-save mr-2\"></i> Save Changes
                                    </button>
                                </div>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set the country code based on the current phone number
            const phoneInput = document.getElementById('phone');
            const countryCodeSelect = document.getElementById('countryCode');

            if (phoneInput.value) {
                // Extract country code from phone number
                const phoneValue = phoneInput.value;
                const plusIndex = phoneValue.indexOf('+');

                if (plusIndex !== -1) {
                    const spaceIndex = phoneValue.indexOf(' ');
                    const code = phoneValue.substring(plusIndex, spaceIndex !== -1 ? spaceIndex : undefined);

                    // Find matching option
                    for (let i = 0; i < countryCodeSelect.options.length; i++) {
                        if (countryCodeSelect.options[i].value === code) {
                            countryCodeSelect.selectedIndex = i;
                            break;
                        }
                    }

                    // Remove country code from display
                    if (spaceIndex !== -1) {
                        phoneInput.value = phoneValue.substring(spaceIndex + 1);
                    } else if (plusIndex === 0) {
                        phoneInput.value = '';
                    }
                }
            }

            // Update phone number with country code before form submission
            const form = document.querySelector('form');
            form.addEventListener('submit', function() {
                const selectedCode = countryCodeSelect.options[countryCodeSelect.selectedIndex].value;
                if (!phoneInput.value.startsWith(selectedCode)) {
                    phoneInput.value = selectedCode + ' ' + phoneInput.value;
                }
            });
        });
    </script>
{% endblock %}", "profile/myprofile.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\profile\\myprofile.html.twig");
    }
}
