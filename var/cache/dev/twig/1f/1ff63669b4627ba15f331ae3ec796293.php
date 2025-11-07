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

/* abonnement/edit.html.twig */
class __TwigTemplate_58b8866273664fac4a4f5e73156a171d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/edit.html.twig"));

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

        yield "Modifier l'Abonnement";
        
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
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --primary-light: #4895ef;
            --secondary: #7209b7;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #f8f9fa;
            --dark: #212529;
            --text: #2b2d42;
            --text-light: #8d99ae;
            --bg: #f8f9fa;
            --card-bg: #ffffff;
            --border: #dee2e6;
        }
        
        .dark {
            --primary: #4895ef;
            --primary-dark: #3a0ca3;
            --primary-light: #4cc9f0;
            --secondary: #b5179e;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #343a40;
            --dark: #f8f9fa;
            --text: #f8f9fa;
            --text-light: #adb5bd;
            --bg: #212529;
            --card-bg: #2b2d42;
            --border: #495057;
        }
        
        .form-container {
            transition: margin 0.3s ease;
        }
        
        @media (max-width: 1024px) {
            .form-container {
                margin-left: 0;
            }
        }
        
        .form-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border);
            overflow: hidden;
        }
        
        .dark .form-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        
        .form-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .form-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
        }
        
        .form-back-btn {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .form-back-btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        .form-back-btn svg {
            margin-right: 0.5rem;
            width: 14px;
            height: 14px;
            fill: currentColor;
        }
        
        .form-content {
            padding: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text);
        }
        
        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            background-color: var(--card-bg);
            color: var(--text);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }
        
        .form-error {
            color: var(--danger);
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        
        .form-submit-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .form-submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
        }
        
        .image-preview {
            width: 120px;
            height: 120px;
            border-radius: 8px;
            overflow: hidden;
            margin-top: 1rem;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--light);
        }
        
        .image-preview img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }
        
        .image-preview-placeholder {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .image-preview-placeholder svg {
            width: 40px;
            height: 40px;
            fill: white;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 198
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

        // line 199
        yield "<div class=\"form-container\">
    <div class=\"container mx-auto px-4 py-8\">
        ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "flashes", ["success"], "method", false, false, false, 201));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 202
            yield "            <div class=\"mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded\">
                ";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 206, $this->source); })()), "flashes", ["error"], "method", false, false, false, 206));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 207
            yield "            <div class=\"mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded\">
                ";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "
        <div class=\"form-card\">
            <div class=\"form-header\">
                <h1 class=\"form-title\">Modifier l'Abonnement</h1>
                <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abonnement_list");
        yield "\" class=\"form-back-btn\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z\"/>
                    </svg>
                    Retour à la liste
                </a>
            </div>

            <div class=\"form-content\">
                ";
        // line 224
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "class" => "space-y-6"]]);
        yield "
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                        <div class=\"form-group\">
                            ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "type", [], "any", false, false, false, 227), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type"]);
        yield "
                            ";
        // line 228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "type", [], "any", false, false, false, 228), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updateSubscriptionDetails()"]]);
        // line 231
        yield "
                            ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "type", [], "any", false, false, false, 232), 'errors');
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "prix", [], "any", false, false, false, 236), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix (TND)"]);
        yield "
                            ";
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "prix", [], "any", false, false, false, 237), 'widget', ["attr" => ["class" => "form-control", "readonly" => "readonly", "id" => "abonnement_prix"]]);
        // line 241
        yield "
                            ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "prix", [], "any", false, false, false, 242), 'errors');
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 246
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "date_debut", [], "any", false, false, false, 246), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de début"]);
        yield "
                            ";
        // line 247
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "date_debut", [], "any", false, false, false, 247), 'widget', ["attr" => ["class" => "form-control", "onchange" => "updateSubscriptionDetails()"]]);
        // line 250
        yield "
                            ";
        // line 251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "date_debut", [], "any", false, false, false, 251), 'errors');
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "date_fin", [], "any", false, false, false, 255), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de fin"]);
        yield "
                            ";
        // line 256
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "date_fin", [], "any", false, false, false, 256), 'widget', ["attr" => ["class" => "form-control", "id" => "abonnement_date_fin", "readonly" => true]]);
        // line 260
        yield "
                            ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "date_fin", [], "any", false, false, false, 261), 'errors');
        yield "
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 265
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "imageFile", [], "any", false, false, false, 265), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image"]);
        yield "
                            ";
        // line 266
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "imageFile", [], "any", false, false, false, 266), 'widget', ["attr" => ["class" => "form-control", "onchange" => "previewImage(this)"]]);
        // line 269
        yield "
                            ";
        // line 270
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "imageFile", [], "any", false, false, false, 270), 'errors');
        yield "
                            
                            <div class=\"image-preview mt-4\" id=\"imagePreview\">
                                ";
        // line 273
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 273, $this->source); })()), "image", [], "any", false, false, false, 273)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 274
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/abonnements/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 274, $this->source); })()), "image", [], "any", false, false, false, 274))), "html", null, true);
            yield "\" alt=\"Current image\" id=\"previewImage\">
                                ";
        } else {
            // line 276
            yield "                                    <div class=\"image-preview-placeholder w-full h-full flex items-center justify-center\" id=\"previewPlaceholder\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                            <path d=\"M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z\"/>
                                        </svg>
                                    </div>
                                ";
        }
        // line 282
        yield "                            </div>
                        </div>
                    </div>

                    <div class=\"mt-8\">
                        <button type=\"submit\" class=\"form-submit-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"mr-2\">
                                <path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"/>
                            </svg>
                            Mettre à jour
                        </button>
                    </div>
                ";
        // line 294
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 301
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

        // line 302
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        const PRICES = {
            'mensuel': 50,
            'trimestriel': 140,
            'annuel': 200
        };

        function updateSubscriptionDetails() {
            const typeSelect = document.querySelector('#";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "type", [], "any", false, false, false, 311), "vars", [], "any", false, false, false, 311), "id", [], "any", false, false, false, 311), "html", null, true);
        yield "');
            const priceInput = document.getElementById('abonnement_prix');
            const dateDebutInput = document.querySelector('#";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "date_debut", [], "any", false, false, false, 313), "vars", [], "any", false, false, false, 313), "id", [], "any", false, false, false, 313), "html", null, true);
        yield "');
            const dateFinInput = document.getElementById('abonnement_date_fin');
            
            // Update price
            if (typeSelect && priceInput) {
                priceInput.value = PRICES[typeSelect.value] || 0;
            }
            
            // Update end date
            if (typeSelect && dateDebutInput && dateFinInput && dateDebutInput.value) {
                const dateDebut = new Date(dateDebutInput.value);
                let dateFin = new Date(dateDebut);
                
                switch (typeSelect.value) {
                    case 'mensuel':
                        dateFin.setMonth(dateFin.getMonth() + 1);
                        break;
                    case 'trimestriel':
                        dateFin.setMonth(dateFin.getMonth() + 3);
                        break;
                    case 'annuel':
                        dateFin.setFullYear(dateFin.getFullYear() + 1);
                        break;
                }
                
                dateFinInput.value = dateFin.toISOString().split('T')[0];
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.querySelector('#";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "type", [], "any", false, false, false, 343), "vars", [], "any", false, false, false, 343), "id", [], "any", false, false, false, 343), "html", null, true);
        yield "');
            const dateDebutInput = document.querySelector('#";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), "date_debut", [], "any", false, false, false, 344), "vars", [], "any", false, false, false, 344), "id", [], "any", false, false, false, 344), "html", null, true);
        yield "');
            
            if (typeSelect) {
                typeSelect.addEventListener('change', updateSubscriptionDetails);
                updateSubscriptionDetails();
            }
            
            if (dateDebutInput) {
                dateDebutInput.addEventListener('change', updateSubscriptionDetails);
            }
        });

        function previewImage(input) {
            const preview = document.getElementById('previewImage');
            const placeholder = document.getElementById('previewPlaceholder');
            const file = input.files[0];
            const reader = new FileReader();

            if (file) {
                reader.onload = function(e) {
                    if (preview) {
                        preview.src = e.target.result;
                    } else {
                        const img = document.createElement('img');
                        img.id = 'previewImage';
                        img.src = e.target.result;
                        img.alt = 'Preview';
                        img.className = 'w-full h-full object-cover';
                        
                        const previewContainer = document.getElementById('imagePreview');
                        previewContainer.innerHTML = '';
                        previewContainer.appendChild(img);
                        
                        if (placeholder) {
                            placeholder.remove();
                        }
                    }
                };
                reader.readAsDataURL(file);
            }
        }
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
        return "abonnement/edit.html.twig";
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
        return array (  573 => 344,  569 => 343,  536 => 313,  531 => 311,  518 => 302,  505 => 301,  488 => 294,  474 => 282,  466 => 276,  460 => 274,  458 => 273,  452 => 270,  449 => 269,  447 => 266,  443 => 265,  436 => 261,  433 => 260,  431 => 256,  427 => 255,  420 => 251,  417 => 250,  415 => 247,  411 => 246,  404 => 242,  401 => 241,  399 => 237,  395 => 236,  388 => 232,  385 => 231,  383 => 228,  379 => 227,  373 => 224,  361 => 215,  355 => 211,  346 => 208,  343 => 207,  338 => 206,  329 => 203,  326 => 202,  322 => 201,  318 => 199,  305 => 198,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier l'Abonnement{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --primary-light: #4895ef;
            --secondary: #7209b7;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #f8f9fa;
            --dark: #212529;
            --text: #2b2d42;
            --text-light: #8d99ae;
            --bg: #f8f9fa;
            --card-bg: #ffffff;
            --border: #dee2e6;
        }
        
        .dark {
            --primary: #4895ef;
            --primary-dark: #3a0ca3;
            --primary-light: #4cc9f0;
            --secondary: #b5179e;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #577590;
            --light: #343a40;
            --dark: #f8f9fa;
            --text: #f8f9fa;
            --text-light: #adb5bd;
            --bg: #212529;
            --card-bg: #2b2d42;
            --border: #495057;
        }
        
        .form-container {
            transition: margin 0.3s ease;
        }
        
        @media (max-width: 1024px) {
            .form-container {
                margin-left: 0;
            }
        }
        
        .form-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border);
            overflow: hidden;
        }
        
        .dark .form-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        
        .form-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .form-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
        }
        
        .form-back-btn {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .form-back-btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        .form-back-btn svg {
            margin-right: 0.5rem;
            width: 14px;
            height: 14px;
            fill: currentColor;
        }
        
        .form-content {
            padding: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text);
        }
        
        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            background-color: var(--card-bg);
            color: var(--text);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }
        
        .form-error {
            color: var(--danger);
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        
        .form-submit-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .form-submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
        }
        
        .image-preview {
            width: 120px;
            height: 120px;
            border-radius: 8px;
            overflow: hidden;
            margin-top: 1rem;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--light);
        }
        
        .image-preview img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }
        
        .image-preview-placeholder {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .image-preview-placeholder svg {
            width: 40px;
            height: 40px;
            fill: white;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"form-container\">
    <div class=\"container mx-auto px-4 py-8\">
        {% for message in app.flashes('success') %}
            <div class=\"mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded\">
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded\">
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"form-card\">
            <div class=\"form-header\">
                <h1 class=\"form-title\">Modifier l'Abonnement</h1>
                <a href=\"{{ path('abonnement_list') }}\" class=\"form-back-btn\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                        <path d=\"M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z\"/>
                    </svg>
                    Retour à la liste
                </a>
            </div>

            <div class=\"form-content\">
                {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'class': 'space-y-6'}}) }}
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                        <div class=\"form-group\">
                            {{ form_label(form.type, 'Type', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.type, {'attr': {
                                'class': 'form-control',
                                'onchange': 'updateSubscriptionDetails()'
                            }}) }}
                            {{ form_errors(form.type) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.prix, 'Prix (TND)', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.prix, {'attr': {
                                'class': 'form-control',
                                'readonly': 'readonly',
                                'id': 'abonnement_prix'
                            }}) }}
                            {{ form_errors(form.prix) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.date_debut, 'Date de début', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.date_debut, {'attr': {
                                'class': 'form-control',
                                'onchange': 'updateSubscriptionDetails()'
                            }}) }}
                            {{ form_errors(form.date_debut) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.date_fin, 'Date de fin', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.date_fin, {'attr': {
                                'class': 'form-control',
                                'id': 'abonnement_date_fin',
                                'readonly': true
                            }}) }}
                            {{ form_errors(form.date_fin) }}
                        </div>
                        
                        <div class=\"form-group\">
                            {{ form_label(form.imageFile, 'Image', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.imageFile, {'attr': {
                                'class': 'form-control',
                                'onchange': 'previewImage(this)'
                            }}) }}
                            {{ form_errors(form.imageFile) }}
                            
                            <div class=\"image-preview mt-4\" id=\"imagePreview\">
                                {% if abonnement.image %}
                                    <img src=\"{{ asset('uploads/images/abonnements/' ~ abonnement.image) }}\" alt=\"Current image\" id=\"previewImage\">
                                {% else %}
                                    <div class=\"image-preview-placeholder w-full h-full flex items-center justify-center\" id=\"previewPlaceholder\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                            <path d=\"M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z\"/>
                                        </svg>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-8\">
                        <button type=\"submit\" class=\"form-submit-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"mr-2\">
                                <path d=\"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z\"/>
                            </svg>
                            Mettre à jour
                        </button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        const PRICES = {
            'mensuel': 50,
            'trimestriel': 140,
            'annuel': 200
        };

        function updateSubscriptionDetails() {
            const typeSelect = document.querySelector('#{{ form.type.vars.id }}');
            const priceInput = document.getElementById('abonnement_prix');
            const dateDebutInput = document.querySelector('#{{ form.date_debut.vars.id }}');
            const dateFinInput = document.getElementById('abonnement_date_fin');
            
            // Update price
            if (typeSelect && priceInput) {
                priceInput.value = PRICES[typeSelect.value] || 0;
            }
            
            // Update end date
            if (typeSelect && dateDebutInput && dateFinInput && dateDebutInput.value) {
                const dateDebut = new Date(dateDebutInput.value);
                let dateFin = new Date(dateDebut);
                
                switch (typeSelect.value) {
                    case 'mensuel':
                        dateFin.setMonth(dateFin.getMonth() + 1);
                        break;
                    case 'trimestriel':
                        dateFin.setMonth(dateFin.getMonth() + 3);
                        break;
                    case 'annuel':
                        dateFin.setFullYear(dateFin.getFullYear() + 1);
                        break;
                }
                
                dateFinInput.value = dateFin.toISOString().split('T')[0];
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.querySelector('#{{ form.type.vars.id }}');
            const dateDebutInput = document.querySelector('#{{ form.date_debut.vars.id }}');
            
            if (typeSelect) {
                typeSelect.addEventListener('change', updateSubscriptionDetails);
                updateSubscriptionDetails();
            }
            
            if (dateDebutInput) {
                dateDebutInput.addEventListener('change', updateSubscriptionDetails);
            }
        });

        function previewImage(input) {
            const preview = document.getElementById('previewImage');
            const placeholder = document.getElementById('previewPlaceholder');
            const file = input.files[0];
            const reader = new FileReader();

            if (file) {
                reader.onload = function(e) {
                    if (preview) {
                        preview.src = e.target.result;
                    } else {
                        const img = document.createElement('img');
                        img.id = 'previewImage';
                        img.src = e.target.result;
                        img.alt = 'Preview';
                        img.className = 'w-full h-full object-cover';
                        
                        const previewContainer = document.getElementById('imagePreview');
                        previewContainer.innerHTML = '';
                        previewContainer.appendChild(img);
                        
                        if (placeholder) {
                            placeholder.remove();
                        }
                    }
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
{% endblock %}", "abonnement/edit.html.twig", "C:\\Users\\skonb\\Desktop\\UrbanLink_Symfony-Production\\templates\\abonnement\\edit.html.twig");
    }
}
