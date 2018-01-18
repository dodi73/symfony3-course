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
        $__internal_1e616b5ef7ee8c58719782223c0b09e63b8bf31143b8faf99d90c024d45006c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e616b5ef7ee8c58719782223c0b09e63b8bf31143b8faf99d90c024d45006c4->enter($__internal_1e616b5ef7ee8c58719782223c0b09e63b8bf31143b8faf99d90c024d45006c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_d1274db9fb58bb4988a71ea725421b75f9fdd30b5ef803956a777410901202a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1274db9fb58bb4988a71ea725421b75f9fdd30b5ef803956a777410901202a3->enter($__internal_d1274db9fb58bb4988a71ea725421b75f9fdd30b5ef803956a777410901202a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e616b5ef7ee8c58719782223c0b09e63b8bf31143b8faf99d90c024d45006c4->leave($__internal_1e616b5ef7ee8c58719782223c0b09e63b8bf31143b8faf99d90c024d45006c4_prof);

        
        $__internal_d1274db9fb58bb4988a71ea725421b75f9fdd30b5ef803956a777410901202a3->leave($__internal_d1274db9fb58bb4988a71ea725421b75f9fdd30b5ef803956a777410901202a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6236fa6d39e470b4d212ab7101d3eded421fd8ca3c912fa2de5d98be6a0d8e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6236fa6d39e470b4d212ab7101d3eded421fd8ca3c912fa2de5d98be6a0d8e30->enter($__internal_6236fa6d39e470b4d212ab7101d3eded421fd8ca3c912fa2de5d98be6a0d8e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2579e0719d76c8842df61e41c5ccc325857846e4ffb3aa00b42cb12e529d1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2579e0719d76c8842df61e41c5ccc325857846e4ffb3aa00b42cb12e529d1c4->enter($__internal_f2579e0719d76c8842df61e41c5ccc325857846e4ffb3aa00b42cb12e529d1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <td ng-repeat=\"cell in product\" ng-bind=\"cell\"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_f2579e0719d76c8842df61e41c5ccc325857846e4ffb3aa00b42cb12e529d1c4->leave($__internal_f2579e0719d76c8842df61e41c5ccc325857846e4ffb3aa00b42cb12e529d1c4_prof);

        
        $__internal_6236fa6d39e470b4d212ab7101d3eded421fd8ca3c912fa2de5d98be6a0d8e30->leave($__internal_6236fa6d39e470b4d212ab7101d3eded421fd8ca3c912fa2de5d98be6a0d8e30_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61abad4fbc14060da4cd75e8c706cc1a374840f9f5dd7b964ad62fd19b2a6086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61abad4fbc14060da4cd75e8c706cc1a374840f9f5dd7b964ad62fd19b2a6086->enter($__internal_61abad4fbc14060da4cd75e8c706cc1a374840f9f5dd7b964ad62fd19b2a6086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_62be9b5704190dc3be2189de1efa2a0dc6be700890592971669a1108599f500f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62be9b5704190dc3be2189de1efa2a0dc6be700890592971669a1108599f500f->enter($__internal_62be9b5704190dc3be2189de1efa2a0dc6be700890592971669a1108599f500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/angular/angular.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/product.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_62be9b5704190dc3be2189de1efa2a0dc6be700890592971669a1108599f500f->leave($__internal_62be9b5704190dc3be2189de1efa2a0dc6be700890592971669a1108599f500f_prof);

        
        $__internal_61abad4fbc14060da4cd75e8c706cc1a374840f9f5dd7b964ad62fd19b2a6086->leave($__internal_61abad4fbc14060da4cd75e8c706cc1a374840f9f5dd7b964ad62fd19b2a6086_prof);

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
        return array (  106 => 40,  101 => 39,  92 => 38,  50 => 4,  41 => 3,  11 => 1,);
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
