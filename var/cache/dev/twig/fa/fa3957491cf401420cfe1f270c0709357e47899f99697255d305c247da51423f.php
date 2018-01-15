<?php

/* default/footer.html.twig */
class __TwigTemplate_48c1686263a5a6920674bd927d4f9767215eaad8faf9be16c018284770afc58d extends Twig_Template
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
        $__internal_de5f4f135c4695bc09f441d17d60555d7070fa0db1590918e22253ac36318b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5f4f135c4695bc09f441d17d60555d7070fa0db1590918e22253ac36318b25->enter($__internal_de5f4f135c4695bc09f441d17d60555d7070fa0db1590918e22253ac36318b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        $__internal_a998d9d434844e17f1d5136d58263d99cbfe3b1a3450bb6389f7cac36b9df1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a998d9d434844e17f1d5136d58263d99cbfe3b1a3450bb6389f7cac36b9df1ef->enter($__internal_a998d9d434844e17f1d5136d58263d99cbfe3b1a3450bb6389f7cac36b9df1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        echo "<!-- Site footer -->
<footer class=\"footer\">
    <p>&copy; Company 2018</p>
</footer>";
        
        $__internal_de5f4f135c4695bc09f441d17d60555d7070fa0db1590918e22253ac36318b25->leave($__internal_de5f4f135c4695bc09f441d17d60555d7070fa0db1590918e22253ac36318b25_prof);

        
        $__internal_a998d9d434844e17f1d5136d58263d99cbfe3b1a3450bb6389f7cac36b9df1ef->leave($__internal_a998d9d434844e17f1d5136d58263d99cbfe3b1a3450bb6389f7cac36b9df1ef_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Site footer -->
<footer class=\"footer\">
    <p>&copy; Company 2018</p>
</footer>", "default/footer.html.twig", "C:\\wamp64\\www\\symfony3-basic\\app\\Resources\\views\\default\\footer.html.twig");
    }
}
