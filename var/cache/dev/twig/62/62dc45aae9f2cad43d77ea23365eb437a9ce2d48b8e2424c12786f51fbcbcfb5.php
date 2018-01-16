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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ead36deee906ef9128f1cfa626f5c95a8dc95c5911d6afef8675c72d895839e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead36deee906ef9128f1cfa626f5c95a8dc95c5911d6afef8675c72d895839e9->enter($__internal_ead36deee906ef9128f1cfa626f5c95a8dc95c5911d6afef8675c72d895839e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_841b53285760cdebc44729de7a8feebca293fa361e11bd92329d0e08fcf7be12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841b53285760cdebc44729de7a8feebca293fa361e11bd92329d0e08fcf7be12->enter($__internal_841b53285760cdebc44729de7a8feebca293fa361e11bd92329d0e08fcf7be12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead36deee906ef9128f1cfa626f5c95a8dc95c5911d6afef8675c72d895839e9->leave($__internal_ead36deee906ef9128f1cfa626f5c95a8dc95c5911d6afef8675c72d895839e9_prof);

        
        $__internal_841b53285760cdebc44729de7a8feebca293fa361e11bd92329d0e08fcf7be12->leave($__internal_841b53285760cdebc44729de7a8feebca293fa361e11bd92329d0e08fcf7be12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d651d96fe96c1493b471a6cb00e5a6e02700f1a57d090f2f26691ca7b7990e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d651d96fe96c1493b471a6cb00e5a6e02700f1a57d090f2f26691ca7b7990e0e->enter($__internal_d651d96fe96c1493b471a6cb00e5a6e02700f1a57d090f2f26691ca7b7990e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55fa1dc691f4de9b0d341c64c1c084ac5dc119f586f900ea42be3d836b39e606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fa1dc691f4de9b0d341c64c1c084ac5dc119f586f900ea42be3d836b39e606->enter($__internal_55fa1dc691f4de9b0d341c64c1c084ac5dc119f586f900ea42be3d836b39e606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Product list</h2>
    <div class=\"row\" ng-app=\"productApp\">
        <div ng-controller=\"productCtrl\" class=\"col-xs-10 col-xs-offset-1\">
            <table class=\"table table-striped\">
                <thead>
                    <tr >
                        <th
                           ng-repeat=\"(key, val) in products[0]\"
                           ng-bind=\"key\">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat=\"product in products\">
                        <td ng-repeat=\"cell in product\" ng-bind=\"cell\"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_55fa1dc691f4de9b0d341c64c1c084ac5dc119f586f900ea42be3d836b39e606->leave($__internal_55fa1dc691f4de9b0d341c64c1c084ac5dc119f586f900ea42be3d836b39e606_prof);

        
        $__internal_d651d96fe96c1493b471a6cb00e5a6e02700f1a57d090f2f26691ca7b7990e0e->leave($__internal_d651d96fe96c1493b471a6cb00e5a6e02700f1a57d090f2f26691ca7b7990e0e_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b1f40a559e3fa86138b74338e09a6cfe33eb7eab5a0d23df68f1faab1e1a8a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1f40a559e3fa86138b74338e09a6cfe33eb7eab5a0d23df68f1faab1e1a8a9->enter($__internal_8b1f40a559e3fa86138b74338e09a6cfe33eb7eab5a0d23df68f1faab1e1a8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d77b52da9126286d94fd8b35673ef4a1b49abad9f7a33ab3a510edb35d6ada73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77b52da9126286d94fd8b35673ef4a1b49abad9f7a33ab3a510edb35d6ada73->enter($__internal_d77b52da9126286d94fd8b35673ef4a1b49abad9f7a33ab3a510edb35d6ada73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/angular/angular.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/product.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d77b52da9126286d94fd8b35673ef4a1b49abad9f7a33ab3a510edb35d6ada73->leave($__internal_d77b52da9126286d94fd8b35673ef4a1b49abad9f7a33ab3a510edb35d6ada73_prof);

        
        $__internal_8b1f40a559e3fa86138b74338e09a6cfe33eb7eab5a0d23df68f1faab1e1a8a9->leave($__internal_8b1f40a559e3fa86138b74338e09a6cfe33eb7eab5a0d23df68f1faab1e1a8a9_prof);

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
        return array (  94 => 28,  89 => 27,  80 => 26,  50 => 4,  41 => 3,  11 => 1,);
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
    <h2>Product list</h2>
    <div class=\"row\" ng-app=\"productApp\">
        <div ng-controller=\"productCtrl\" class=\"col-xs-10 col-xs-offset-1\">
            <table class=\"table table-striped\">
                <thead>
                    <tr >
                        <th
                           ng-repeat=\"(key, val) in products[0]\"
                           ng-bind=\"key\">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat=\"product in products\">
                        <td ng-repeat=\"cell in product\" ng-bind=\"cell\"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('bower_components/angular/angular.js') }}\"></script>
    <script src=\"{{ asset('js/product.js') }}\"></script>
{% endblock %}


", "product/index.html.twig", "C:\\wamp64\\www\\symfony3-basic\\app\\Resources\\views\\product\\index.html.twig");
    }
}
