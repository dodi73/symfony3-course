<?php

/* base.html.twig */
class __TwigTemplate_35a788ca461558bba9038e4c3f84ff08bc8c4a644fa3eb1893a42b9f45e0624c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed6186019d8c88efccb61c5bfe0c5053772707832eca1bf38793b0766ddeafab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6186019d8c88efccb61c5bfe0c5053772707832eca1bf38793b0766ddeafab->enter($__internal_ed6186019d8c88efccb61c5bfe0c5053772707832eca1bf38793b0766ddeafab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1363e3061eefb2f944fe869f043352894ad0828e3ed7911118d6793ebc5c999d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1363e3061eefb2f944fe869f043352894ad0828e3ed7911118d6793ebc5c999d->enter($__internal_1363e3061eefb2f944fe869f043352894ad0828e3ed7911118d6793ebc5c999d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/justified-nav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>

<body>

    <div class=\"container\">

        ";
        // line 25
        $this->loadTemplate("default/nav.html.twig", "base.html.twig", 25)->display($context);
        // line 26
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        ";
        $this->loadTemplate("default/footer.html.twig", "base.html.twig", 27)->display($context);
        // line 28
        echo "
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "
    </div> <!-- /container -->

</body>
</html>

";
        
        $__internal_ed6186019d8c88efccb61c5bfe0c5053772707832eca1bf38793b0766ddeafab->leave($__internal_ed6186019d8c88efccb61c5bfe0c5053772707832eca1bf38793b0766ddeafab_prof);

        
        $__internal_1363e3061eefb2f944fe869f043352894ad0828e3ed7911118d6793ebc5c999d->leave($__internal_1363e3061eefb2f944fe869f043352894ad0828e3ed7911118d6793ebc5c999d_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c4cc8d9753f3472a218550acaeb03d745b0680e350db6b0b09bd9f746530aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4cc8d9753f3472a218550acaeb03d745b0680e350db6b0b09bd9f746530aaf->enter($__internal_6c4cc8d9753f3472a218550acaeb03d745b0680e350db6b0b09bd9f746530aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_87847d9ad022a2da32d6dd24d71c270e3657ad4f59889e897da56e932428c738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87847d9ad022a2da32d6dd24d71c270e3657ad4f59889e897da56e932428c738->enter($__internal_87847d9ad022a2da32d6dd24d71c270e3657ad4f59889e897da56e932428c738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87847d9ad022a2da32d6dd24d71c270e3657ad4f59889e897da56e932428c738->leave($__internal_87847d9ad022a2da32d6dd24d71c270e3657ad4f59889e897da56e932428c738_prof);

        
        $__internal_6c4cc8d9753f3472a218550acaeb03d745b0680e350db6b0b09bd9f746530aaf->leave($__internal_6c4cc8d9753f3472a218550acaeb03d745b0680e350db6b0b09bd9f746530aaf_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_18ad4a3a60dd6383c2d77a4f119491b7021c8377e1725c9357c55faaf9a228bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ad4a3a60dd6383c2d77a4f119491b7021c8377e1725c9357c55faaf9a228bd->enter($__internal_18ad4a3a60dd6383c2d77a4f119491b7021c8377e1725c9357c55faaf9a228bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7835ab5f6c1a87ef3087e46b0ea75939f93ee692dcc297f2ed11a30ac4c942a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7835ab5f6c1a87ef3087e46b0ea75939f93ee692dcc297f2ed11a30ac4c942a7->enter($__internal_7835ab5f6c1a87ef3087e46b0ea75939f93ee692dcc297f2ed11a30ac4c942a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7835ab5f6c1a87ef3087e46b0ea75939f93ee692dcc297f2ed11a30ac4c942a7->leave($__internal_7835ab5f6c1a87ef3087e46b0ea75939f93ee692dcc297f2ed11a30ac4c942a7_prof);

        
        $__internal_18ad4a3a60dd6383c2d77a4f119491b7021c8377e1725c9357c55faaf9a228bd->leave($__internal_18ad4a3a60dd6383c2d77a4f119491b7021c8377e1725c9357c55faaf9a228bd_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18a675a20252e6d9e2550bea031f815a07d8ada5a1f2324f8382c827a86ec9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a675a20252e6d9e2550bea031f815a07d8ada5a1f2324f8382c827a86ec9a3->enter($__internal_18a675a20252e6d9e2550bea031f815a07d8ada5a1f2324f8382c827a86ec9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_90f853c71c0b09a573327190f1a399f13b6544f08b757806dfc886bc08fdfcd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f853c71c0b09a573327190f1a399f13b6544f08b757806dfc886bc08fdfcd2->enter($__internal_90f853c71c0b09a573327190f1a399f13b6544f08b757806dfc886bc08fdfcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_90f853c71c0b09a573327190f1a399f13b6544f08b757806dfc886bc08fdfcd2->leave($__internal_90f853c71c0b09a573327190f1a399f13b6544f08b757806dfc886bc08fdfcd2_prof);

        
        $__internal_18a675a20252e6d9e2550bea031f815a07d8ada5a1f2324f8382c827a86ec9a3->leave($__internal_18a675a20252e6d9e2550bea031f815a07d8ada5a1f2324f8382c827a86ec9a3_prof);

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
        return array (  142 => 33,  125 => 26,  108 => 18,  92 => 34,  90 => 33,  85 => 31,  81 => 30,  77 => 29,  74 => 28,  71 => 27,  68 => 26,  66 => 25,  58 => 19,  56 => 18,  51 => 16,  45 => 13,  37 => 8,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/justified-nav.css') }}\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
</head>

<body>

    <div class=\"container\">

        {% include 'default/nav.html.twig' %}
        {% block body %}{% endblock %}
        {% include 'default/footer.html.twig' %}

        <script src=\"{{ asset('bower_components/jquery/dist/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('js/popper.min.js') }}\"></script>
        <script src=\"{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>

        {% block javascripts %}{% endblock %}

    </div> <!-- /container -->

</body>
</html>

", "base.html.twig", "C:\\wamp64\\www\\symfony3-basic\\app\\Resources\\views\\base.html.twig");
    }
}
