<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1f39cc316dbded925ff69006bf06f639d30bcc75083a0c4320d29c2c1aaff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c867a08b70768a3e38c9aaf00be35429dbf011dcb81c06e59a8d4075caab117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c867a08b70768a3e38c9aaf00be35429dbf011dcb81c06e59a8d4075caab117->enter($__internal_8c867a08b70768a3e38c9aaf00be35429dbf011dcb81c06e59a8d4075caab117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_99df6a2c399a25122e6c9d79090af92389cd439aedfe45d04c11f14cc2214a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99df6a2c399a25122e6c9d79090af92389cd439aedfe45d04c11f14cc2214a52->enter($__internal_99df6a2c399a25122e6c9d79090af92389cd439aedfe45d04c11f14cc2214a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8c867a08b70768a3e38c9aaf00be35429dbf011dcb81c06e59a8d4075caab117->leave($__internal_8c867a08b70768a3e38c9aaf00be35429dbf011dcb81c06e59a8d4075caab117_prof);

        
        $__internal_99df6a2c399a25122e6c9d79090af92389cd439aedfe45d04c11f14cc2214a52->leave($__internal_99df6a2c399a25122e6c9d79090af92389cd439aedfe45d04c11f14cc2214a52_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_200a5679953ad7b25a2da0df1d1725f604bc8fc2f0018d2720767f7029833525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200a5679953ad7b25a2da0df1d1725f604bc8fc2f0018d2720767f7029833525->enter($__internal_200a5679953ad7b25a2da0df1d1725f604bc8fc2f0018d2720767f7029833525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84d349987f6117798b5fc78da9a222f604c884185b8051b6e4101274dfdc4928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d349987f6117798b5fc78da9a222f604c884185b8051b6e4101274dfdc4928->enter($__internal_84d349987f6117798b5fc78da9a222f604c884185b8051b6e4101274dfdc4928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_84d349987f6117798b5fc78da9a222f604c884185b8051b6e4101274dfdc4928->leave($__internal_84d349987f6117798b5fc78da9a222f604c884185b8051b6e4101274dfdc4928_prof);

        
        $__internal_200a5679953ad7b25a2da0df1d1725f604bc8fc2f0018d2720767f7029833525->leave($__internal_200a5679953ad7b25a2da0df1d1725f604bc8fc2f0018d2720767f7029833525_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7118545652977f0387bd73b05567aabf3cd5dea4fcc025d54edef076b91d01aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7118545652977f0387bd73b05567aabf3cd5dea4fcc025d54edef076b91d01aa->enter($__internal_7118545652977f0387bd73b05567aabf3cd5dea4fcc025d54edef076b91d01aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_938de6e2a084295aacade8c2b9ccf0944c694da40037b6206d9c0d89600df15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938de6e2a084295aacade8c2b9ccf0944c694da40037b6206d9c0d89600df15e->enter($__internal_938de6e2a084295aacade8c2b9ccf0944c694da40037b6206d9c0d89600df15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_938de6e2a084295aacade8c2b9ccf0944c694da40037b6206d9c0d89600df15e->leave($__internal_938de6e2a084295aacade8c2b9ccf0944c694da40037b6206d9c0d89600df15e_prof);

        
        $__internal_7118545652977f0387bd73b05567aabf3cd5dea4fcc025d54edef076b91d01aa->leave($__internal_7118545652977f0387bd73b05567aabf3cd5dea4fcc025d54edef076b91d01aa_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe7413a691932aa6dbc8b5aad27062c740dcb8d85b7045fb7f4581e2d5bd5c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7413a691932aa6dbc8b5aad27062c740dcb8d85b7045fb7f4581e2d5bd5c43->enter($__internal_fe7413a691932aa6dbc8b5aad27062c740dcb8d85b7045fb7f4581e2d5bd5c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07566f4a262360d401dd2b1a67042f3da36dd94eba358464d9c8339995a2ceda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07566f4a262360d401dd2b1a67042f3da36dd94eba358464d9c8339995a2ceda->enter($__internal_07566f4a262360d401dd2b1a67042f3da36dd94eba358464d9c8339995a2ceda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_07566f4a262360d401dd2b1a67042f3da36dd94eba358464d9c8339995a2ceda->leave($__internal_07566f4a262360d401dd2b1a67042f3da36dd94eba358464d9c8339995a2ceda_prof);

        
        $__internal_fe7413a691932aa6dbc8b5aad27062c740dcb8d85b7045fb7f4581e2d5bd5c43->leave($__internal_fe7413a691932aa6dbc8b5aad27062c740dcb8d85b7045fb7f4581e2d5bd5c43_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\symfony3-basic\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
