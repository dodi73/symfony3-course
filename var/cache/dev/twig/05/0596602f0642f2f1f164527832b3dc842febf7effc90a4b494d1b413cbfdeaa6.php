<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e12506caa6aa0b489a5a6e3aed6a7d8b525d78ffcaed02e7eb56bb15cc405767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4b097df90d8a85290e618a82204d497c5bc293c196f321fd899712574dd82500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b097df90d8a85290e618a82204d497c5bc293c196f321fd899712574dd82500->enter($__internal_4b097df90d8a85290e618a82204d497c5bc293c196f321fd899712574dd82500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_84fc15338ccc9f8a296652233088383b8a0728e11af0955a910e1ab74ab47fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fc15338ccc9f8a296652233088383b8a0728e11af0955a910e1ab74ab47fba->enter($__internal_84fc15338ccc9f8a296652233088383b8a0728e11af0955a910e1ab74ab47fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b097df90d8a85290e618a82204d497c5bc293c196f321fd899712574dd82500->leave($__internal_4b097df90d8a85290e618a82204d497c5bc293c196f321fd899712574dd82500_prof);

        
        $__internal_84fc15338ccc9f8a296652233088383b8a0728e11af0955a910e1ab74ab47fba->leave($__internal_84fc15338ccc9f8a296652233088383b8a0728e11af0955a910e1ab74ab47fba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08724b4113c4c470f36cd6f664da6d12932ce4d7a59565ac6b0296a84d4d5398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08724b4113c4c470f36cd6f664da6d12932ce4d7a59565ac6b0296a84d4d5398->enter($__internal_08724b4113c4c470f36cd6f664da6d12932ce4d7a59565ac6b0296a84d4d5398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f2fd960ca366321f3c289a9b0d0f48c47b127abd523bdc61a869afe8ffc0aafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fd960ca366321f3c289a9b0d0f48c47b127abd523bdc61a869afe8ffc0aafd->enter($__internal_f2fd960ca366321f3c289a9b0d0f48c47b127abd523bdc61a869afe8ffc0aafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f2fd960ca366321f3c289a9b0d0f48c47b127abd523bdc61a869afe8ffc0aafd->leave($__internal_f2fd960ca366321f3c289a9b0d0f48c47b127abd523bdc61a869afe8ffc0aafd_prof);

        
        $__internal_08724b4113c4c470f36cd6f664da6d12932ce4d7a59565ac6b0296a84d4d5398->leave($__internal_08724b4113c4c470f36cd6f664da6d12932ce4d7a59565ac6b0296a84d4d5398_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_85e04a2682ecfc0d2e6fe37a8ef5b4816bdc97cf6d85c75674afd81f3fd854c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e04a2682ecfc0d2e6fe37a8ef5b4816bdc97cf6d85c75674afd81f3fd854c8->enter($__internal_85e04a2682ecfc0d2e6fe37a8ef5b4816bdc97cf6d85c75674afd81f3fd854c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_084b18e3db26c72a0457d6560b8c3d6b157ba176dd01881de6de88047306585e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084b18e3db26c72a0457d6560b8c3d6b157ba176dd01881de6de88047306585e->enter($__internal_084b18e3db26c72a0457d6560b8c3d6b157ba176dd01881de6de88047306585e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_084b18e3db26c72a0457d6560b8c3d6b157ba176dd01881de6de88047306585e->leave($__internal_084b18e3db26c72a0457d6560b8c3d6b157ba176dd01881de6de88047306585e_prof);

        
        $__internal_85e04a2682ecfc0d2e6fe37a8ef5b4816bdc97cf6d85c75674afd81f3fd854c8->leave($__internal_85e04a2682ecfc0d2e6fe37a8ef5b4816bdc97cf6d85c75674afd81f3fd854c8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e749849ea1c1140bc58fdbf34b962ed69272f8b8720a5b0d42fabc81a271f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e749849ea1c1140bc58fdbf34b962ed69272f8b8720a5b0d42fabc81a271f09->enter($__internal_7e749849ea1c1140bc58fdbf34b962ed69272f8b8720a5b0d42fabc81a271f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ae0e55f1a4e33fdf70e92eaaed495b2754881a8516dd11e05bd16ddf61dbddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae0e55f1a4e33fdf70e92eaaed495b2754881a8516dd11e05bd16ddf61dbddd->enter($__internal_0ae0e55f1a4e33fdf70e92eaaed495b2754881a8516dd11e05bd16ddf61dbddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0ae0e55f1a4e33fdf70e92eaaed495b2754881a8516dd11e05bd16ddf61dbddd->leave($__internal_0ae0e55f1a4e33fdf70e92eaaed495b2754881a8516dd11e05bd16ddf61dbddd_prof);

        
        $__internal_7e749849ea1c1140bc58fdbf34b962ed69272f8b8720a5b0d42fabc81a271f09->leave($__internal_7e749849ea1c1140bc58fdbf34b962ed69272f8b8720a5b0d42fabc81a271f09_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\symfony3-basic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
