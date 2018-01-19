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
        $__internal_62f3f96b4537c0f11c09d4482d19c3c348de74e657603ee2165c03dd31ee7f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f3f96b4537c0f11c09d4482d19c3c348de74e657603ee2165c03dd31ee7f4c->enter($__internal_62f3f96b4537c0f11c09d4482d19c3c348de74e657603ee2165c03dd31ee7f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_81e9b537a5fdfb8afcb6a3711c67d017f75084ecc3c8b4a9b56b739da806180a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e9b537a5fdfb8afcb6a3711c67d017f75084ecc3c8b4a9b56b739da806180a->enter($__internal_81e9b537a5fdfb8afcb6a3711c67d017f75084ecc3c8b4a9b56b739da806180a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62f3f96b4537c0f11c09d4482d19c3c348de74e657603ee2165c03dd31ee7f4c->leave($__internal_62f3f96b4537c0f11c09d4482d19c3c348de74e657603ee2165c03dd31ee7f4c_prof);

        
        $__internal_81e9b537a5fdfb8afcb6a3711c67d017f75084ecc3c8b4a9b56b739da806180a->leave($__internal_81e9b537a5fdfb8afcb6a3711c67d017f75084ecc3c8b4a9b56b739da806180a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9ba44b6dea6d47f2b8c947790e739bfafcd50daf0a6e9645a70d08fd5978c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ba44b6dea6d47f2b8c947790e739bfafcd50daf0a6e9645a70d08fd5978c64->enter($__internal_d9ba44b6dea6d47f2b8c947790e739bfafcd50daf0a6e9645a70d08fd5978c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c9b3495a493b03952f0684766579fb88002d93231c9384bf75a1c56cd7982f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9b3495a493b03952f0684766579fb88002d93231c9384bf75a1c56cd7982f7->enter($__internal_7c9b3495a493b03952f0684766579fb88002d93231c9384bf75a1c56cd7982f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Product list</h2>
    <div class=\"row\" ng-app=\"productApp\">
        <div ng-controller=\"productCtrl\" class=\"col-xs-10 col-xs-offset-1\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th
                           ng-repeat=\"(key, val) in products[0]\"
                           ng-bind=\"key\">
                        </th>
                        <th>
                            command
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td ng-repeat=\"(key, val) in products[0]\">
                            <input ng-model=\"newProduct[key]\" type=\"text\" class=\"form-control\">
                        </td>
                        <td>
                            <button class=\"btn btn-success\"
                            ng-click=\"createProduct()\">New</button>
                        </td>
                    </tr>
                    <tr ng-repeat=\"product in products\">
                        <td ng-repeat=\"(key, val) in product\">
                            <input ng-model=\"product[key]\" type=\"text\" class=\"form-control\">
                        </td>
                        <td>
                            <button class=\"btn btn-info\"
                                    ng-click=\"updateProduct()\">Update</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_7c9b3495a493b03952f0684766579fb88002d93231c9384bf75a1c56cd7982f7->leave($__internal_7c9b3495a493b03952f0684766579fb88002d93231c9384bf75a1c56cd7982f7_prof);

        
        $__internal_d9ba44b6dea6d47f2b8c947790e739bfafcd50daf0a6e9645a70d08fd5978c64->leave($__internal_d9ba44b6dea6d47f2b8c947790e739bfafcd50daf0a6e9645a70d08fd5978c64_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82d4b1d9eb5a78b9498a113e85bf3cc4dd9c0e1d1a7a9f4c5f593a8e7d2021d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d4b1d9eb5a78b9498a113e85bf3cc4dd9c0e1d1a7a9f4c5f593a8e7d2021d1->enter($__internal_82d4b1d9eb5a78b9498a113e85bf3cc4dd9c0e1d1a7a9f4c5f593a8e7d2021d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_373309e22ddd8027ca9830f960806cae3cfa0096fd9b568dd4d0bd156088d23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373309e22ddd8027ca9830f960806cae3cfa0096fd9b568dd4d0bd156088d23e->enter($__internal_373309e22ddd8027ca9830f960806cae3cfa0096fd9b568dd4d0bd156088d23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/angular/angular.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/product.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_373309e22ddd8027ca9830f960806cae3cfa0096fd9b568dd4d0bd156088d23e->leave($__internal_373309e22ddd8027ca9830f960806cae3cfa0096fd9b568dd4d0bd156088d23e_prof);

        
        $__internal_82d4b1d9eb5a78b9498a113e85bf3cc4dd9c0e1d1a7a9f4c5f593a8e7d2021d1->leave($__internal_82d4b1d9eb5a78b9498a113e85bf3cc4dd9c0e1d1a7a9f4c5f593a8e7d2021d1_prof);

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
        return array (  112 => 46,  107 => 45,  98 => 44,  50 => 4,  41 => 3,  11 => 1,);
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
                    <tr>
                        <th
                           ng-repeat=\"(key, val) in products[0]\"
                           ng-bind=\"key\">
                        </th>
                        <th>
                            command
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td ng-repeat=\"(key, val) in products[0]\">
                            <input ng-model=\"newProduct[key]\" type=\"text\" class=\"form-control\">
                        </td>
                        <td>
                            <button class=\"btn btn-success\"
                            ng-click=\"createProduct()\">New</button>
                        </td>
                    </tr>
                    <tr ng-repeat=\"product in products\">
                        <td ng-repeat=\"(key, val) in product\">
                            <input ng-model=\"product[key]\" type=\"text\" class=\"form-control\">
                        </td>
                        <td>
                            <button class=\"btn btn-info\"
                                    ng-click=\"updateProduct()\">Update</button>
                        </td>
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
