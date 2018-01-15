<?php

/* product/index.html.twig */
class __TwigTemplate_bb08cb4721406a93a60fcaa878277c7aaccd667ecdbfc538f6aeb75d69e403a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9385f8f365792c6fd25ed2d369e147b05791360f0610c1db72763a422eef28d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9385f8f365792c6fd25ed2d369e147b05791360f0610c1db72763a422eef28d2->enter($__internal_9385f8f365792c6fd25ed2d369e147b05791360f0610c1db72763a422eef28d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_c07a760ae359f36efb3169fceb0e633958e05cef66d2a0511b483040ffcfb656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07a760ae359f36efb3169fceb0e633958e05cef66d2a0511b483040ffcfb656->enter($__internal_c07a760ae359f36efb3169fceb0e633958e05cef66d2a0511b483040ffcfb656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9385f8f365792c6fd25ed2d369e147b05791360f0610c1db72763a422eef28d2->leave($__internal_9385f8f365792c6fd25ed2d369e147b05791360f0610c1db72763a422eef28d2_prof);

        
        $__internal_c07a760ae359f36efb3169fceb0e633958e05cef66d2a0511b483040ffcfb656->leave($__internal_c07a760ae359f36efb3169fceb0e633958e05cef66d2a0511b483040ffcfb656_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70ef5c91d2756f7e296ea1df5620c6150cd5c759374693156d7ff0cb0a139449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ef5c91d2756f7e296ea1df5620c6150cd5c759374693156d7ff0cb0a139449->enter($__internal_70ef5c91d2756f7e296ea1df5620c6150cd5c759374693156d7ff0cb0a139449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_077cdbf0db1e3bbc1bd74e607d736586407ad766c666882b027a181bd509b896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077cdbf0db1e3bbc1bd74e607d736586407ad766c666882b027a181bd509b896->enter($__internal_077cdbf0db1e3bbc1bd74e607d736586407ad766c666882b027a181bd509b896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>This is the product page...</h2>
";
        
        $__internal_077cdbf0db1e3bbc1bd74e607d736586407ad766c666882b027a181bd509b896->leave($__internal_077cdbf0db1e3bbc1bd74e607d736586407ad766c666882b027a181bd509b896_prof);

        
        $__internal_70ef5c91d2756f7e296ea1df5620c6150cd5c759374693156d7ff0cb0a139449->leave($__internal_70ef5c91d2756f7e296ea1df5620c6150cd5c759374693156d7ff0cb0a139449_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h2>This is the product page...</h2>
{% endblock %}


", "product/index.html.twig", "C:\\wamp64\\www\\symfony3-basic\\app\\Resources\\views\\product\\index.html.twig");
    }
}
