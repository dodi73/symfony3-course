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
        $__internal_eea9ac02bda03efbe6bb42595c393f411fe8bd14a44890229b3669f5e1b3288d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea9ac02bda03efbe6bb42595c393f411fe8bd14a44890229b3669f5e1b3288d->enter($__internal_eea9ac02bda03efbe6bb42595c393f411fe8bd14a44890229b3669f5e1b3288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bafe08b208d6182bd6168898313e59329ee8b859100226a785d85d2e0033c4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafe08b208d6182bd6168898313e59329ee8b859100226a785d85d2e0033c4ec->enter($__internal_bafe08b208d6182bd6168898313e59329ee8b859100226a785d85d2e0033c4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">

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
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
    </div> <!-- /container -->

</body>
</html>

";
        
        $__internal_eea9ac02bda03efbe6bb42595c393f411fe8bd14a44890229b3669f5e1b3288d->leave($__internal_eea9ac02bda03efbe6bb42595c393f411fe8bd14a44890229b3669f5e1b3288d_prof);

        
        $__internal_bafe08b208d6182bd6168898313e59329ee8b859100226a785d85d2e0033c4ec->leave($__internal_bafe08b208d6182bd6168898313e59329ee8b859100226a785d85d2e0033c4ec_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_023af59924a38a83b89fdf4a407ce4b2038df9be8855ff0d71ba39a7df89d0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023af59924a38a83b89fdf4a407ce4b2038df9be8855ff0d71ba39a7df89d0d7->enter($__internal_023af59924a38a83b89fdf4a407ce4b2038df9be8855ff0d71ba39a7df89d0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_865b7b83697593396bd99239448a62767118f1d87100d0cba31fdb1e4106a22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865b7b83697593396bd99239448a62767118f1d87100d0cba31fdb1e4106a22a->enter($__internal_865b7b83697593396bd99239448a62767118f1d87100d0cba31fdb1e4106a22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_865b7b83697593396bd99239448a62767118f1d87100d0cba31fdb1e4106a22a->leave($__internal_865b7b83697593396bd99239448a62767118f1d87100d0cba31fdb1e4106a22a_prof);

        
        $__internal_023af59924a38a83b89fdf4a407ce4b2038df9be8855ff0d71ba39a7df89d0d7->leave($__internal_023af59924a38a83b89fdf4a407ce4b2038df9be8855ff0d71ba39a7df89d0d7_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_63eaa990e29f380863b87117be36ee968ddb294c17a25f02d7e7904c7ffdd23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63eaa990e29f380863b87117be36ee968ddb294c17a25f02d7e7904c7ffdd23b->enter($__internal_63eaa990e29f380863b87117be36ee968ddb294c17a25f02d7e7904c7ffdd23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bafb8bd6c7886310ccd9a0c74763641db92aac2559e64ba229b994cfa82c93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bafb8bd6c7886310ccd9a0c74763641db92aac2559e64ba229b994cfa82c93e->enter($__internal_2bafb8bd6c7886310ccd9a0c74763641db92aac2559e64ba229b994cfa82c93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2bafb8bd6c7886310ccd9a0c74763641db92aac2559e64ba229b994cfa82c93e->leave($__internal_2bafb8bd6c7886310ccd9a0c74763641db92aac2559e64ba229b994cfa82c93e_prof);

        
        $__internal_63eaa990e29f380863b87117be36ee968ddb294c17a25f02d7e7904c7ffdd23b->leave($__internal_63eaa990e29f380863b87117be36ee968ddb294c17a25f02d7e7904c7ffdd23b_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b013065a30f30b10081ce9519782aa8c966ef657387f355285f2e3d3cb389255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b013065a30f30b10081ce9519782aa8c966ef657387f355285f2e3d3cb389255->enter($__internal_b013065a30f30b10081ce9519782aa8c966ef657387f355285f2e3d3cb389255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6c25573f658bcc3d9c4abb7db5b418a237022fd8e2e3b7354dd855e08805fb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c25573f658bcc3d9c4abb7db5b418a237022fd8e2e3b7354dd855e08805fb3a->enter($__internal_6c25573f658bcc3d9c4abb7db5b418a237022fd8e2e3b7354dd855e08805fb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6c25573f658bcc3d9c4abb7db5b418a237022fd8e2e3b7354dd855e08805fb3a->leave($__internal_6c25573f658bcc3d9c4abb7db5b418a237022fd8e2e3b7354dd855e08805fb3a_prof);

        
        $__internal_b013065a30f30b10081ce9519782aa8c966ef657387f355285f2e3d3cb389255->leave($__internal_b013065a30f30b10081ce9519782aa8c966ef657387f355285f2e3d3cb389255_prof);

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
        return array (  124 => 28,  107 => 26,  90 => 18,  74 => 29,  71 => 28,  68 => 27,  65 => 26,  63 => 25,  55 => 19,  53 => 18,  48 => 16,  37 => 8,  28 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/justified-nav.css') }}\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
</head>

<body>

    <div class=\"container\">

        {% include 'default/nav.html.twig' %}
        {% block body %}{% endblock %}
        {% include 'default/footer.html.twig' %}
        {% block javascripts %}{% endblock %}

    </div> <!-- /container -->

</body>
</html>

", "base.html.twig", "C:\\wamp64\\www\\symfony3-basic\\app\\Resources\\views\\base.html.twig");
    }
}
