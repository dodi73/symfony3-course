<?php

/* default/index.html.twig */
class __TwigTemplate_ae65ad19fa9b9c2c21cb065392d9edc5f9d3e4adbf2234decb9064ac4157f718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_b047ec5d1182ed560c6cdcea5df64437fe91693be43dec68207027ce7ddf41a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b047ec5d1182ed560c6cdcea5df64437fe91693be43dec68207027ce7ddf41a5->enter($__internal_b047ec5d1182ed560c6cdcea5df64437fe91693be43dec68207027ce7ddf41a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_90dc241c3ee0d66d5fcdddee3863127d726e05d0228ae794d4e643709c78c25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90dc241c3ee0d66d5fcdddee3863127d726e05d0228ae794d4e643709c78c25d->enter($__internal_90dc241c3ee0d66d5fcdddee3863127d726e05d0228ae794d4e643709c78c25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b047ec5d1182ed560c6cdcea5df64437fe91693be43dec68207027ce7ddf41a5->leave($__internal_b047ec5d1182ed560c6cdcea5df64437fe91693be43dec68207027ce7ddf41a5_prof);

        
        $__internal_90dc241c3ee0d66d5fcdddee3863127d726e05d0228ae794d4e643709c78c25d->leave($__internal_90dc241c3ee0d66d5fcdddee3863127d726e05d0228ae794d4e643709c78c25d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc8be5385de791de0bf5446d059788b439ab5a1d5524b1d402cb79e8b43d9c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8be5385de791de0bf5446d059788b439ab5a1d5524b1d402cb79e8b43d9c47->enter($__internal_dc8be5385de791de0bf5446d059788b439ab5a1d5524b1d402cb79e8b43d9c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7958d4af35128fa00f66efa11c6ec955f012ce257213ad2b102ce6f208aa71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7958d4af35128fa00f66efa11c6ec955f012ce257213ad2b102ce6f208aa71d->enter($__internal_d7958d4af35128fa00f66efa11c6ec955f012ce257213ad2b102ce6f208aa71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
      <header class=\"masthead\">
        <h3 class=\"text-muted\">Project name</h3>
      </header>

      <main role=\"main\">

        <!-- Jumbotron -->
        <div class=\"jumbotron\">
          <h1>Marketing stuff!</h1>
          <p class=\"lead\">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
          <p><a class=\"btn btn-lg btn-success\" href=\"#\" role=\"button\">Get started today</a></p>
        </div>

        <!-- Example row of columns -->
        <div class=\"row\">
          <div class=\"col-lg-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
          </div>
          <div class=\"col-lg-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
          </div>
          <div class=\"col-lg-4\">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
          </div>
        </div>

      </main>

";
        
        $__internal_d7958d4af35128fa00f66efa11c6ec955f012ce257213ad2b102ce6f208aa71d->leave($__internal_d7958d4af35128fa00f66efa11c6ec955f012ce257213ad2b102ce6f208aa71d_prof);

        
        $__internal_dc8be5385de791de0bf5446d059788b439ab5a1d5524b1d402cb79e8b43d9c47->leave($__internal_dc8be5385de791de0bf5446d059788b439ab5a1d5524b1d402cb79e8b43d9c47_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aeed994986df14a07d3882864585bb84a0d9ba2e436a6c671f084596bebaa7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeed994986df14a07d3882864585bb84a0d9ba2e436a6c671f084596bebaa7ed->enter($__internal_aeed994986df14a07d3882864585bb84a0d9ba2e436a6c671f084596bebaa7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e1e6aeeef8fb1bc82f6f0c6b3b9391e74189aab89616f2a80702f3f88997422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1e6aeeef8fb1bc82f6f0c6b3b9391e74189aab89616f2a80702f3f88997422->enter($__internal_4e1e6aeeef8fb1bc82f6f0c6b3b9391e74189aab89616f2a80702f3f88997422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script>window.jQuery || document.write('<script src=\"../../../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_4e1e6aeeef8fb1bc82f6f0c6b3b9391e74189aab89616f2a80702f3f88997422->leave($__internal_4e1e6aeeef8fb1bc82f6f0c6b3b9391e74189aab89616f2a80702f3f88997422_prof);

        
        $__internal_aeed994986df14a07d3882864585bb84a0d9ba2e436a6c671f084596bebaa7ed->leave($__internal_aeed994986df14a07d3882864585bb84a0d9ba2e436a6c671f084596bebaa7ed_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  95 => 41,  50 => 4,  41 => 3,  11 => 1,);
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

      <header class=\"masthead\">
        <h3 class=\"text-muted\">Project name</h3>
      </header>

      <main role=\"main\">

        <!-- Jumbotron -->
        <div class=\"jumbotron\">
          <h1>Marketing stuff!</h1>
          <p class=\"lead\">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
          <p><a class=\"btn btn-lg btn-success\" href=\"#\" role=\"button\">Get started today</a></p>
        </div>

        <!-- Example row of columns -->
        <div class=\"row\">
          <div class=\"col-lg-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
          </div>
          <div class=\"col-lg-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
          </div>
          <div class=\"col-lg-4\">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
          </div>
        </div>

      </main>

{% endblock %}

{% block javascripts %}

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script>window.jQuery || document.write('<script src=\"../../../../assets/js/vendor/jquery-slim.min.js\"><\\/script>')</script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
{% endblock %}

", "default/index.html.twig", "C:\\wamp64\\www\\symfony3-basic\\app\\Resources\\views\\default\\index.html.twig");
    }
}
