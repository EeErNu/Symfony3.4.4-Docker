<?php

/* base.html.twig */
class __TwigTemplate_ed45d23023317ce521da9a17a8da9a688de933a5ef20cb31d83840bb2acc402c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e9f1269f36ca40281ccdb8a828f40805d566eac2ae11252fecf5ae99443edb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9f1269f36ca40281ccdb8a828f40805d566eac2ae11252fecf5ae99443edb7->enter($__internal_6e9f1269f36ca40281ccdb8a828f40805d566eac2ae11252fecf5ae99443edb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_beec4675f94f3e3c93c1898fb28c6fefbe9d475bd0084975afa859188f3bf802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beec4675f94f3e3c93c1898fb28c6fefbe9d475bd0084975afa859188f3bf802->enter($__internal_beec4675f94f3e3c93c1898fb28c6fefbe9d475bd0084975afa859188f3bf802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6e9f1269f36ca40281ccdb8a828f40805d566eac2ae11252fecf5ae99443edb7->leave($__internal_6e9f1269f36ca40281ccdb8a828f40805d566eac2ae11252fecf5ae99443edb7_prof);

        
        $__internal_beec4675f94f3e3c93c1898fb28c6fefbe9d475bd0084975afa859188f3bf802->leave($__internal_beec4675f94f3e3c93c1898fb28c6fefbe9d475bd0084975afa859188f3bf802_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_574fd8a0469da719f3d837993e82f96537e0098b0e8d1c2229df95711f1ccbf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574fd8a0469da719f3d837993e82f96537e0098b0e8d1c2229df95711f1ccbf8->enter($__internal_574fd8a0469da719f3d837993e82f96537e0098b0e8d1c2229df95711f1ccbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03311e983d47ae9a9c68ed507d8e0d07619020300de5b09b875eee523b39029f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03311e983d47ae9a9c68ed507d8e0d07619020300de5b09b875eee523b39029f->enter($__internal_03311e983d47ae9a9c68ed507d8e0d07619020300de5b09b875eee523b39029f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03311e983d47ae9a9c68ed507d8e0d07619020300de5b09b875eee523b39029f->leave($__internal_03311e983d47ae9a9c68ed507d8e0d07619020300de5b09b875eee523b39029f_prof);

        
        $__internal_574fd8a0469da719f3d837993e82f96537e0098b0e8d1c2229df95711f1ccbf8->leave($__internal_574fd8a0469da719f3d837993e82f96537e0098b0e8d1c2229df95711f1ccbf8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_247648d2c1fa03276ae907ed4d4d717c3504a6648ae952b41a13c51bb48f976a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247648d2c1fa03276ae907ed4d4d717c3504a6648ae952b41a13c51bb48f976a->enter($__internal_247648d2c1fa03276ae907ed4d4d717c3504a6648ae952b41a13c51bb48f976a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bcdd7ce7a5f5f3af140b7ded912e03f7c9018ad8f008c283c03f9af23bbe2126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdd7ce7a5f5f3af140b7ded912e03f7c9018ad8f008c283c03f9af23bbe2126->enter($__internal_bcdd7ce7a5f5f3af140b7ded912e03f7c9018ad8f008c283c03f9af23bbe2126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bcdd7ce7a5f5f3af140b7ded912e03f7c9018ad8f008c283c03f9af23bbe2126->leave($__internal_bcdd7ce7a5f5f3af140b7ded912e03f7c9018ad8f008c283c03f9af23bbe2126_prof);

        
        $__internal_247648d2c1fa03276ae907ed4d4d717c3504a6648ae952b41a13c51bb48f976a->leave($__internal_247648d2c1fa03276ae907ed4d4d717c3504a6648ae952b41a13c51bb48f976a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd424f800fc4491d8e69dc688ef1f0a34c0189868862956087ab204fc916dadc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd424f800fc4491d8e69dc688ef1f0a34c0189868862956087ab204fc916dadc->enter($__internal_fd424f800fc4491d8e69dc688ef1f0a34c0189868862956087ab204fc916dadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f71b19d1c99deaae9cac51118222547acea9a9dcc7f1486dba4827ce997342f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f71b19d1c99deaae9cac51118222547acea9a9dcc7f1486dba4827ce997342f->enter($__internal_4f71b19d1c99deaae9cac51118222547acea9a9dcc7f1486dba4827ce997342f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f71b19d1c99deaae9cac51118222547acea9a9dcc7f1486dba4827ce997342f->leave($__internal_4f71b19d1c99deaae9cac51118222547acea9a9dcc7f1486dba4827ce997342f_prof);

        
        $__internal_fd424f800fc4491d8e69dc688ef1f0a34c0189868862956087ab204fc916dadc->leave($__internal_fd424f800fc4491d8e69dc688ef1f0a34c0189868862956087ab204fc916dadc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2de82d0abc20d93186b86f36cb4ed250de1a1ee26aec4e7b6bca0beb2222113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2de82d0abc20d93186b86f36cb4ed250de1a1ee26aec4e7b6bca0beb2222113->enter($__internal_f2de82d0abc20d93186b86f36cb4ed250de1a1ee26aec4e7b6bca0beb2222113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b4c54f44772ca0b7e6ee5b39133ca203b5d2d3b38ca5b0dd9612e7f8ad3c4e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c54f44772ca0b7e6ee5b39133ca203b5d2d3b38ca5b0dd9612e7f8ad3c4e7d->enter($__internal_b4c54f44772ca0b7e6ee5b39133ca203b5d2d3b38ca5b0dd9612e7f8ad3c4e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b4c54f44772ca0b7e6ee5b39133ca203b5d2d3b38ca5b0dd9612e7f8ad3c4e7d->leave($__internal_b4c54f44772ca0b7e6ee5b39133ca203b5d2d3b38ca5b0dd9612e7f8ad3c4e7d_prof);

        
        $__internal_f2de82d0abc20d93186b86f36cb4ed250de1a1ee26aec4e7b6bca0beb2222113->leave($__internal_f2de82d0abc20d93186b86f36cb4ed250de1a1ee26aec4e7b6bca0beb2222113_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/app/app/Resources/views/base.html.twig");
    }
}
