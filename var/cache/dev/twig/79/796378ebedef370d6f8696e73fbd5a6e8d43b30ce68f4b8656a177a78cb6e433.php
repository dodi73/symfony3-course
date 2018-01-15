<?php

/* default/nav.html.twig */
class __TwigTemplate_08a66035cbbe1bb82cb435949be52212db56dae6203fd3e9cbcc67a7cfa6d2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74f8ca7468ad814438eb1984bb34b74da35ef9f213ebea23b03d79e659d7a43c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f8ca7468ad814438eb1984bb34b74da35ef9f213ebea23b03d79e659d7a43c->enter($__internal_74f8ca7468ad814438eb1984bb34b74da35ef9f213ebea23b03d79e659d7a43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/nav.html.twig"));

        $__internal_16bbefa2cd0e0d8a060586647e1330d7d2a30222ed724a171752a48dd72039cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bbefa2cd0e0d8a060586647e1330d7d2a30222ed724a171752a48dd72039cf->enter($__internal_16bbefa2cd0e0d8a060586647e1330d7d2a30222ed724a171752a48dd72039cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-light bg-light rounded mb-3\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav text-md-center nav-justified w-100\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("products");
        echo "\">Products</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Downloads</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_74f8ca7468ad814438eb1984bb34b74da35ef9f213ebea23b03d79e659d7a43c->leave($__internal_74f8ca7468ad814438eb1984bb34b74da35ef9f213ebea23b03d79e659d7a43c_prof);

        
        $__internal_16bbefa2cd0e0d8a060586647e1330d7d2a30222ed724a171752a48dd72039cf->leave($__internal_16bbefa2cd0e0d8a060586647e1330d7d2a30222ed724a171752a48dd72039cf_prof);

    }

    public function getTemplateName()
    {
        return "default/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-md navbar-light bg-light rounded mb-3\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav text-md-center nav-justified w-100\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('products') }}\">Products</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Downloads</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>", "default/nav.html.twig", "C:\\wamp64\\www\\symfony3-basic\\app\\Resources\\views\\default\\nav.html.twig");
    }
}
