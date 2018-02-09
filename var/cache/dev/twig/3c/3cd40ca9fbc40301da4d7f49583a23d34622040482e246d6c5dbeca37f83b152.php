<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f6960812d52ff761d96d0b183d83de0326cdddbd6e9ad8cdd7c7d4794099e68a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a96676ae292c60bbb9ae1e81df31ba27820538fd4a8fe10d5224b791af82525b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96676ae292c60bbb9ae1e81df31ba27820538fd4a8fe10d5224b791af82525b->enter($__internal_a96676ae292c60bbb9ae1e81df31ba27820538fd4a8fe10d5224b791af82525b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c4dcd2688a6bdc1c88d653c352e69da27ff28038a27dbabb5dd05af81b23118c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dcd2688a6bdc1c88d653c352e69da27ff28038a27dbabb5dd05af81b23118c->enter($__internal_c4dcd2688a6bdc1c88d653c352e69da27ff28038a27dbabb5dd05af81b23118c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a96676ae292c60bbb9ae1e81df31ba27820538fd4a8fe10d5224b791af82525b->leave($__internal_a96676ae292c60bbb9ae1e81df31ba27820538fd4a8fe10d5224b791af82525b_prof);

        
        $__internal_c4dcd2688a6bdc1c88d653c352e69da27ff28038a27dbabb5dd05af81b23118c->leave($__internal_c4dcd2688a6bdc1c88d653c352e69da27ff28038a27dbabb5dd05af81b23118c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b26a623dd7d435f1b496b40bbc06a679c98dbcd9ebeab3233e8af46a012b765b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26a623dd7d435f1b496b40bbc06a679c98dbcd9ebeab3233e8af46a012b765b->enter($__internal_b26a623dd7d435f1b496b40bbc06a679c98dbcd9ebeab3233e8af46a012b765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_394688f67ce2cd2fa20605cef1b3317c26bc19ed3c4165c8a56a2392550cd599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394688f67ce2cd2fa20605cef1b3317c26bc19ed3c4165c8a56a2392550cd599->enter($__internal_394688f67ce2cd2fa20605cef1b3317c26bc19ed3c4165c8a56a2392550cd599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_394688f67ce2cd2fa20605cef1b3317c26bc19ed3c4165c8a56a2392550cd599->leave($__internal_394688f67ce2cd2fa20605cef1b3317c26bc19ed3c4165c8a56a2392550cd599_prof);

        
        $__internal_b26a623dd7d435f1b496b40bbc06a679c98dbcd9ebeab3233e8af46a012b765b->leave($__internal_b26a623dd7d435f1b496b40bbc06a679c98dbcd9ebeab3233e8af46a012b765b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a181895c782faa2ecb62d513a406b41f1d12a89916c10d316ec45b13b8d2104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a181895c782faa2ecb62d513a406b41f1d12a89916c10d316ec45b13b8d2104->enter($__internal_0a181895c782faa2ecb62d513a406b41f1d12a89916c10d316ec45b13b8d2104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_88a68627c9aa91c58dd8ccd74c2e95f7ca16a581d016ae58650ee83a4ebf19db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a68627c9aa91c58dd8ccd74c2e95f7ca16a581d016ae58650ee83a4ebf19db->enter($__internal_88a68627c9aa91c58dd8ccd74c2e95f7ca16a581d016ae58650ee83a4ebf19db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_88a68627c9aa91c58dd8ccd74c2e95f7ca16a581d016ae58650ee83a4ebf19db->leave($__internal_88a68627c9aa91c58dd8ccd74c2e95f7ca16a581d016ae58650ee83a4ebf19db_prof);

        
        $__internal_0a181895c782faa2ecb62d513a406b41f1d12a89916c10d316ec45b13b8d2104->leave($__internal_0a181895c782faa2ecb62d513a406b41f1d12a89916c10d316ec45b13b8d2104_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c433f9d1d23f7ae28cfd07f7b13fc1973be22ec7e2f1495d1fee661ee2945da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c433f9d1d23f7ae28cfd07f7b13fc1973be22ec7e2f1495d1fee661ee2945da->enter($__internal_2c433f9d1d23f7ae28cfd07f7b13fc1973be22ec7e2f1495d1fee661ee2945da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25f0191a0402821a28f0954daa952ba2bc33be43dd0db3c9b9180fb635ceabb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f0191a0402821a28f0954daa952ba2bc33be43dd0db3c9b9180fb635ceabb0->enter($__internal_25f0191a0402821a28f0954daa952ba2bc33be43dd0db3c9b9180fb635ceabb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_25f0191a0402821a28f0954daa952ba2bc33be43dd0db3c9b9180fb635ceabb0->leave($__internal_25f0191a0402821a28f0954daa952ba2bc33be43dd0db3c9b9180fb635ceabb0_prof);

        
        $__internal_2c433f9d1d23f7ae28cfd07f7b13fc1973be22ec7e2f1495d1fee661ee2945da->leave($__internal_2c433f9d1d23f7ae28cfd07f7b13fc1973be22ec7e2f1495d1fee661ee2945da_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
