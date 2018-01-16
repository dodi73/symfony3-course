<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_91696a6e0cc9aad2b2a6ffbbf8651f1b29e3cbc2e48bd5dda9ee8ccabf53e928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4aedad6535c2a7bff9e6c3ca6f336ef8226fb6f62bc8dd48002e99d4d5b11e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4aedad6535c2a7bff9e6c3ca6f336ef8226fb6f62bc8dd48002e99d4d5b11e5->enter($__internal_e4aedad6535c2a7bff9e6c3ca6f336ef8226fb6f62bc8dd48002e99d4d5b11e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a76285c60147006bd89f641bcbce70d902058c6028dbce670844f550208d8d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76285c60147006bd89f641bcbce70d902058c6028dbce670844f550208d8d48->enter($__internal_a76285c60147006bd89f641bcbce70d902058c6028dbce670844f550208d8d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4aedad6535c2a7bff9e6c3ca6f336ef8226fb6f62bc8dd48002e99d4d5b11e5->leave($__internal_e4aedad6535c2a7bff9e6c3ca6f336ef8226fb6f62bc8dd48002e99d4d5b11e5_prof);

        
        $__internal_a76285c60147006bd89f641bcbce70d902058c6028dbce670844f550208d8d48->leave($__internal_a76285c60147006bd89f641bcbce70d902058c6028dbce670844f550208d8d48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15f757f63b1cbfd841b5494a3ab1d057d1969f028bf70e6933193b825f065cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f757f63b1cbfd841b5494a3ab1d057d1969f028bf70e6933193b825f065cc3->enter($__internal_15f757f63b1cbfd841b5494a3ab1d057d1969f028bf70e6933193b825f065cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6c20b31b7d225c7be9b4b5a7ab4648916374de52890957a6ff7ae0246acfe01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c20b31b7d225c7be9b4b5a7ab4648916374de52890957a6ff7ae0246acfe01->enter($__internal_c6c20b31b7d225c7be9b4b5a7ab4648916374de52890957a6ff7ae0246acfe01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c6c20b31b7d225c7be9b4b5a7ab4648916374de52890957a6ff7ae0246acfe01->leave($__internal_c6c20b31b7d225c7be9b4b5a7ab4648916374de52890957a6ff7ae0246acfe01_prof);

        
        $__internal_15f757f63b1cbfd841b5494a3ab1d057d1969f028bf70e6933193b825f065cc3->leave($__internal_15f757f63b1cbfd841b5494a3ab1d057d1969f028bf70e6933193b825f065cc3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6802085acc94513542a95f9150fb78f2961dc9a2da4b5083b800bfd62c0c048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6802085acc94513542a95f9150fb78f2961dc9a2da4b5083b800bfd62c0c048->enter($__internal_d6802085acc94513542a95f9150fb78f2961dc9a2da4b5083b800bfd62c0c048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07d9f80ac351d6fd37d7d6b2470408d3410cd01ab614cb728f6f275eb5e6fb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d9f80ac351d6fd37d7d6b2470408d3410cd01ab614cb728f6f275eb5e6fb27->enter($__internal_07d9f80ac351d6fd37d7d6b2470408d3410cd01ab614cb728f6f275eb5e6fb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_07d9f80ac351d6fd37d7d6b2470408d3410cd01ab614cb728f6f275eb5e6fb27->leave($__internal_07d9f80ac351d6fd37d7d6b2470408d3410cd01ab614cb728f6f275eb5e6fb27_prof);

        
        $__internal_d6802085acc94513542a95f9150fb78f2961dc9a2da4b5083b800bfd62c0c048->leave($__internal_d6802085acc94513542a95f9150fb78f2961dc9a2da4b5083b800bfd62c0c048_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\symfony3-basic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
