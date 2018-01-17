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
        $__internal_2aa59e6472b485b9a09602e19b4e250c3c2ee86d1bdc345d1abfc7d3dd84da1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa59e6472b485b9a09602e19b4e250c3c2ee86d1bdc345d1abfc7d3dd84da1e->enter($__internal_2aa59e6472b485b9a09602e19b4e250c3c2ee86d1bdc345d1abfc7d3dd84da1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_8935ae3135dfc1237745c507908be5584beec80c80e89f812aeffccf0ad80de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8935ae3135dfc1237745c507908be5584beec80c80e89f812aeffccf0ad80de9->enter($__internal_8935ae3135dfc1237745c507908be5584beec80c80e89f812aeffccf0ad80de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa59e6472b485b9a09602e19b4e250c3c2ee86d1bdc345d1abfc7d3dd84da1e->leave($__internal_2aa59e6472b485b9a09602e19b4e250c3c2ee86d1bdc345d1abfc7d3dd84da1e_prof);

        
        $__internal_8935ae3135dfc1237745c507908be5584beec80c80e89f812aeffccf0ad80de9->leave($__internal_8935ae3135dfc1237745c507908be5584beec80c80e89f812aeffccf0ad80de9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6becfcf41c6e4c839019e71d0f0e95b93de8d890e190febb4cae8ed0929afd5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6becfcf41c6e4c839019e71d0f0e95b93de8d890e190febb4cae8ed0929afd5d->enter($__internal_6becfcf41c6e4c839019e71d0f0e95b93de8d890e190febb4cae8ed0929afd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d23ee7b0c5905cf638c7c793bbd2fe8ce8904d055233d7a4de4183a1eabbc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d23ee7b0c5905cf638c7c793bbd2fe8ce8904d055233d7a4de4183a1eabbc43->enter($__internal_3d23ee7b0c5905cf638c7c793bbd2fe8ce8904d055233d7a4de4183a1eabbc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d23ee7b0c5905cf638c7c793bbd2fe8ce8904d055233d7a4de4183a1eabbc43->leave($__internal_3d23ee7b0c5905cf638c7c793bbd2fe8ce8904d055233d7a4de4183a1eabbc43_prof);

        
        $__internal_6becfcf41c6e4c839019e71d0f0e95b93de8d890e190febb4cae8ed0929afd5d->leave($__internal_6becfcf41c6e4c839019e71d0f0e95b93de8d890e190febb4cae8ed0929afd5d_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91a13e352f3c67bfd484a1217964e5f2170e37aaf373e127ac92ca01c5deef07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a13e352f3c67bfd484a1217964e5f2170e37aaf373e127ac92ca01c5deef07->enter($__internal_91a13e352f3c67bfd484a1217964e5f2170e37aaf373e127ac92ca01c5deef07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_db94c5259cf1e3dba2b4cd6c4f0bd7c71c3b2b5c37c0b97bae570caef59f2506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db94c5259cf1e3dba2b4cd6c4f0bd7c71c3b2b5c37c0b97bae570caef59f2506->enter($__internal_db94c5259cf1e3dba2b4cd6c4f0bd7c71c3b2b5c37c0b97bae570caef59f2506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/angular/angular.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/product.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_db94c5259cf1e3dba2b4cd6c4f0bd7c71c3b2b5c37c0b97bae570caef59f2506->leave($__internal_db94c5259cf1e3dba2b4cd6c4f0bd7c71c3b2b5c37c0b97bae570caef59f2506_prof);

        
        $__internal_91a13e352f3c67bfd484a1217964e5f2170e37aaf373e127ac92ca01c5deef07->leave($__internal_91a13e352f3c67bfd484a1217964e5f2170e37aaf373e127ac92ca01c5deef07_prof);

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
                    <tr>
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
