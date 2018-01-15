<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a49730a4415c52dbae0bde59acb7a1499983a905e405c913fd1a90537bf38c4 extends Twig_Template
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
        $__internal_a1843cc7abc086506342311ddfc1b8a6b2074a58bcc2eb543e9a026e333d008c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1843cc7abc086506342311ddfc1b8a6b2074a58bcc2eb543e9a026e333d008c->enter($__internal_a1843cc7abc086506342311ddfc1b8a6b2074a58bcc2eb543e9a026e333d008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6f491df09da2977646a05ce101cb99c0501a505d279b45dc8980ebff13bc6674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f491df09da2977646a05ce101cb99c0501a505d279b45dc8980ebff13bc6674->enter($__internal_6f491df09da2977646a05ce101cb99c0501a505d279b45dc8980ebff13bc6674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1843cc7abc086506342311ddfc1b8a6b2074a58bcc2eb543e9a026e333d008c->leave($__internal_a1843cc7abc086506342311ddfc1b8a6b2074a58bcc2eb543e9a026e333d008c_prof);

        
        $__internal_6f491df09da2977646a05ce101cb99c0501a505d279b45dc8980ebff13bc6674->leave($__internal_6f491df09da2977646a05ce101cb99c0501a505d279b45dc8980ebff13bc6674_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a1b1a4cdc2f81fc277710bcdcb84b009a4bf78359173a36b6263a544ddb5993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a1b1a4cdc2f81fc277710bcdcb84b009a4bf78359173a36b6263a544ddb5993->enter($__internal_0a1b1a4cdc2f81fc277710bcdcb84b009a4bf78359173a36b6263a544ddb5993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fa4faa18aa94ce6a3122801bfb619c8ae25535ee4e84ee5e8f70c38798fa8553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4faa18aa94ce6a3122801bfb619c8ae25535ee4e84ee5e8f70c38798fa8553->enter($__internal_fa4faa18aa94ce6a3122801bfb619c8ae25535ee4e84ee5e8f70c38798fa8553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fa4faa18aa94ce6a3122801bfb619c8ae25535ee4e84ee5e8f70c38798fa8553->leave($__internal_fa4faa18aa94ce6a3122801bfb619c8ae25535ee4e84ee5e8f70c38798fa8553_prof);

        
        $__internal_0a1b1a4cdc2f81fc277710bcdcb84b009a4bf78359173a36b6263a544ddb5993->leave($__internal_0a1b1a4cdc2f81fc277710bcdcb84b009a4bf78359173a36b6263a544ddb5993_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06585026a744abebe72946c41762df580121ad49d46f3d9d9677d55258ba1bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06585026a744abebe72946c41762df580121ad49d46f3d9d9677d55258ba1bcc->enter($__internal_06585026a744abebe72946c41762df580121ad49d46f3d9d9677d55258ba1bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a33901cd94422fc7aaeb7d674401612b71ef71f810757884ab5b0d9a111d29bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33901cd94422fc7aaeb7d674401612b71ef71f810757884ab5b0d9a111d29bb->enter($__internal_a33901cd94422fc7aaeb7d674401612b71ef71f810757884ab5b0d9a111d29bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a33901cd94422fc7aaeb7d674401612b71ef71f810757884ab5b0d9a111d29bb->leave($__internal_a33901cd94422fc7aaeb7d674401612b71ef71f810757884ab5b0d9a111d29bb_prof);

        
        $__internal_06585026a744abebe72946c41762df580121ad49d46f3d9d9677d55258ba1bcc->leave($__internal_06585026a744abebe72946c41762df580121ad49d46f3d9d9677d55258ba1bcc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0515876b129ad8225c4c4ab9cc41f927798dcffb9b1276fe50a36ab08d97b3b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0515876b129ad8225c4c4ab9cc41f927798dcffb9b1276fe50a36ab08d97b3b5->enter($__internal_0515876b129ad8225c4c4ab9cc41f927798dcffb9b1276fe50a36ab08d97b3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e580671ef1d1ad2415f1752d9179dcbe62f12f094cf1d1367ed79b724819d5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e580671ef1d1ad2415f1752d9179dcbe62f12f094cf1d1367ed79b724819d5a5->enter($__internal_e580671ef1d1ad2415f1752d9179dcbe62f12f094cf1d1367ed79b724819d5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e580671ef1d1ad2415f1752d9179dcbe62f12f094cf1d1367ed79b724819d5a5->leave($__internal_e580671ef1d1ad2415f1752d9179dcbe62f12f094cf1d1367ed79b724819d5a5_prof);

        
        $__internal_0515876b129ad8225c4c4ab9cc41f927798dcffb9b1276fe50a36ab08d97b3b5->leave($__internal_0515876b129ad8225c4c4ab9cc41f927798dcffb9b1276fe50a36ab08d97b3b5_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\symfony3-basic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
