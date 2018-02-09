<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4a2caf42d9ed577f8de29a774d5f08470bc87c78e068fc3a28e98609d62a77f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_423ff329920ca4d3109cf668ebcc37e71ba809134d3ce869117161f8ee536588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423ff329920ca4d3109cf668ebcc37e71ba809134d3ce869117161f8ee536588->enter($__internal_423ff329920ca4d3109cf668ebcc37e71ba809134d3ce869117161f8ee536588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7f3149ac739df7403bbabf27c5cb931228c204788106ce6f8791b3233f74c0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3149ac739df7403bbabf27c5cb931228c204788106ce6f8791b3233f74c0ac->enter($__internal_7f3149ac739df7403bbabf27c5cb931228c204788106ce6f8791b3233f74c0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_423ff329920ca4d3109cf668ebcc37e71ba809134d3ce869117161f8ee536588->leave($__internal_423ff329920ca4d3109cf668ebcc37e71ba809134d3ce869117161f8ee536588_prof);

        
        $__internal_7f3149ac739df7403bbabf27c5cb931228c204788106ce6f8791b3233f74c0ac->leave($__internal_7f3149ac739df7403bbabf27c5cb931228c204788106ce6f8791b3233f74c0ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_377f210208f81b6f00919ebbe64ea2ad4ee4c6f42de353e85eb2174b299ca433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377f210208f81b6f00919ebbe64ea2ad4ee4c6f42de353e85eb2174b299ca433->enter($__internal_377f210208f81b6f00919ebbe64ea2ad4ee4c6f42de353e85eb2174b299ca433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d9e8b047d2e4c8798ec0624f2c99b24bd882191eb898b2887cc192de48109b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e8b047d2e4c8798ec0624f2c99b24bd882191eb898b2887cc192de48109b6b->enter($__internal_d9e8b047d2e4c8798ec0624f2c99b24bd882191eb898b2887cc192de48109b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d9e8b047d2e4c8798ec0624f2c99b24bd882191eb898b2887cc192de48109b6b->leave($__internal_d9e8b047d2e4c8798ec0624f2c99b24bd882191eb898b2887cc192de48109b6b_prof);

        
        $__internal_377f210208f81b6f00919ebbe64ea2ad4ee4c6f42de353e85eb2174b299ca433->leave($__internal_377f210208f81b6f00919ebbe64ea2ad4ee4c6f42de353e85eb2174b299ca433_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
