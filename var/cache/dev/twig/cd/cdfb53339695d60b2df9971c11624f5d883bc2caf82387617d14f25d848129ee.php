<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_32d72451998159f403ca43780c96b71e16216f7d66294525b847451498e13fe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a418dbaf49cd045249a9798474392004a5985d94ae758ca84b0a3bfa8e3dec90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a418dbaf49cd045249a9798474392004a5985d94ae758ca84b0a3bfa8e3dec90->enter($__internal_a418dbaf49cd045249a9798474392004a5985d94ae758ca84b0a3bfa8e3dec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2d071728bd52d344c06c0c305d199c976315f8ae85a2ae9b067cafdf0b375832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d071728bd52d344c06c0c305d199c976315f8ae85a2ae9b067cafdf0b375832->enter($__internal_2d071728bd52d344c06c0c305d199c976315f8ae85a2ae9b067cafdf0b375832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a418dbaf49cd045249a9798474392004a5985d94ae758ca84b0a3bfa8e3dec90->leave($__internal_a418dbaf49cd045249a9798474392004a5985d94ae758ca84b0a3bfa8e3dec90_prof);

        
        $__internal_2d071728bd52d344c06c0c305d199c976315f8ae85a2ae9b067cafdf0b375832->leave($__internal_2d071728bd52d344c06c0c305d199c976315f8ae85a2ae9b067cafdf0b375832_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d7329d49fd54e0e8665b8ffe22fa7f40d3ade012492f756f5744a921bac3622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7329d49fd54e0e8665b8ffe22fa7f40d3ade012492f756f5744a921bac3622->enter($__internal_7d7329d49fd54e0e8665b8ffe22fa7f40d3ade012492f756f5744a921bac3622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_caf8caa865104118803e08319e3c32c715ff3f6859e73b4f7a2a74dd1b7b6d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf8caa865104118803e08319e3c32c715ff3f6859e73b4f7a2a74dd1b7b6d4f->enter($__internal_caf8caa865104118803e08319e3c32c715ff3f6859e73b4f7a2a74dd1b7b6d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_caf8caa865104118803e08319e3c32c715ff3f6859e73b4f7a2a74dd1b7b6d4f->leave($__internal_caf8caa865104118803e08319e3c32c715ff3f6859e73b4f7a2a74dd1b7b6d4f_prof);

        
        $__internal_7d7329d49fd54e0e8665b8ffe22fa7f40d3ade012492f756f5744a921bac3622->leave($__internal_7d7329d49fd54e0e8665b8ffe22fa7f40d3ade012492f756f5744a921bac3622_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9bfe09ef5aef99b897ba5c0d9f40e9536ec5fb4fde5a7babb36c192f30f79474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfe09ef5aef99b897ba5c0d9f40e9536ec5fb4fde5a7babb36c192f30f79474->enter($__internal_9bfe09ef5aef99b897ba5c0d9f40e9536ec5fb4fde5a7babb36c192f30f79474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_25fccc3dfe807ecb91748d4a6eeaacea5efe1cb0d9711dceb30ae4f9a01f5cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fccc3dfe807ecb91748d4a6eeaacea5efe1cb0d9711dceb30ae4f9a01f5cc2->enter($__internal_25fccc3dfe807ecb91748d4a6eeaacea5efe1cb0d9711dceb30ae4f9a01f5cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25fccc3dfe807ecb91748d4a6eeaacea5efe1cb0d9711dceb30ae4f9a01f5cc2->leave($__internal_25fccc3dfe807ecb91748d4a6eeaacea5efe1cb0d9711dceb30ae4f9a01f5cc2_prof);

        
        $__internal_9bfe09ef5aef99b897ba5c0d9f40e9536ec5fb4fde5a7babb36c192f30f79474->leave($__internal_9bfe09ef5aef99b897ba5c0d9f40e9536ec5fb4fde5a7babb36c192f30f79474_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba5537c84de628f6a032e871fd8033d07f8a86a6478ef7898e5495328853ca53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5537c84de628f6a032e871fd8033d07f8a86a6478ef7898e5495328853ca53->enter($__internal_ba5537c84de628f6a032e871fd8033d07f8a86a6478ef7898e5495328853ca53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b6afffe461b8db48277420f17cc4890406b450cd16ca601925803a826f68501a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6afffe461b8db48277420f17cc4890406b450cd16ca601925803a826f68501a->enter($__internal_b6afffe461b8db48277420f17cc4890406b450cd16ca601925803a826f68501a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b6afffe461b8db48277420f17cc4890406b450cd16ca601925803a826f68501a->leave($__internal_b6afffe461b8db48277420f17cc4890406b450cd16ca601925803a826f68501a_prof);

        
        $__internal_ba5537c84de628f6a032e871fd8033d07f8a86a6478ef7898e5495328853ca53->leave($__internal_ba5537c84de628f6a032e871fd8033d07f8a86a6478ef7898e5495328853ca53_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/freelanceur/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
