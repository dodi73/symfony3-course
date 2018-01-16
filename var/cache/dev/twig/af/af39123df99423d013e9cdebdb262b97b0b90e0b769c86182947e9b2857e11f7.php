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
        $__internal_c42720f41e04283856a30a39f86c13a53a0143da5b694de8566ba801fb855cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42720f41e04283856a30a39f86c13a53a0143da5b694de8566ba801fb855cc2->enter($__internal_c42720f41e04283856a30a39f86c13a53a0143da5b694de8566ba801fb855cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_30a59acfea8c133e83374abcedaef25ccdc738b2e247773914ed331710a911b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a59acfea8c133e83374abcedaef25ccdc738b2e247773914ed331710a911b1->enter($__internal_30a59acfea8c133e83374abcedaef25ccdc738b2e247773914ed331710a911b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c42720f41e04283856a30a39f86c13a53a0143da5b694de8566ba801fb855cc2->leave($__internal_c42720f41e04283856a30a39f86c13a53a0143da5b694de8566ba801fb855cc2_prof);

        
        $__internal_30a59acfea8c133e83374abcedaef25ccdc738b2e247773914ed331710a911b1->leave($__internal_30a59acfea8c133e83374abcedaef25ccdc738b2e247773914ed331710a911b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ad992bba54e3084acdf880308cfce10ed527d231a7df7c976bd619f78f65e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad992bba54e3084acdf880308cfce10ed527d231a7df7c976bd619f78f65e70->enter($__internal_7ad992bba54e3084acdf880308cfce10ed527d231a7df7c976bd619f78f65e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cd22bf4fd3a59bff370be4df7b61ba0f284800880d91174e8a0121951b19009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd22bf4fd3a59bff370be4df7b61ba0f284800880d91174e8a0121951b19009->enter($__internal_1cd22bf4fd3a59bff370be4df7b61ba0f284800880d91174e8a0121951b19009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1cd22bf4fd3a59bff370be4df7b61ba0f284800880d91174e8a0121951b19009->leave($__internal_1cd22bf4fd3a59bff370be4df7b61ba0f284800880d91174e8a0121951b19009_prof);

        
        $__internal_7ad992bba54e3084acdf880308cfce10ed527d231a7df7c976bd619f78f65e70->leave($__internal_7ad992bba54e3084acdf880308cfce10ed527d231a7df7c976bd619f78f65e70_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_228e4e88a43be18217e709a25ef48899dd3b750e3de980f43b1627fdfaaa0a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228e4e88a43be18217e709a25ef48899dd3b750e3de980f43b1627fdfaaa0a8d->enter($__internal_228e4e88a43be18217e709a25ef48899dd3b750e3de980f43b1627fdfaaa0a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_21cd826db51461ab93cbcb55c1dfaad88aa169037cfe5273665010ded8ec2596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cd826db51461ab93cbcb55c1dfaad88aa169037cfe5273665010ded8ec2596->enter($__internal_21cd826db51461ab93cbcb55c1dfaad88aa169037cfe5273665010ded8ec2596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!--
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    -->
";
        
        $__internal_21cd826db51461ab93cbcb55c1dfaad88aa169037cfe5273665010ded8ec2596->leave($__internal_21cd826db51461ab93cbcb55c1dfaad88aa169037cfe5273665010ded8ec2596_prof);

        
        $__internal_228e4e88a43be18217e709a25ef48899dd3b750e3de980f43b1627fdfaaa0a8d->leave($__internal_228e4e88a43be18217e709a25ef48899dd3b750e3de980f43b1627fdfaaa0a8d_prof);

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

    <!--
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    -->
{% endblock %}

", "default/index.html.twig", "C:\\wamp64\\www\\symfony3-basic\\app\\Resources\\views\\default\\index.html.twig");
    }
}
