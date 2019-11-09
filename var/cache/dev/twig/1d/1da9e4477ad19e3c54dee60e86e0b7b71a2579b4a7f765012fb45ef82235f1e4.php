<?php

/* @App/Project/index.html.twig */
class __TwigTemplate_60a198263c5ae4e261f258fc3a5b483650f4a2c4847c0c3ca546e25e9a322e84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/base.html.twig", "@App/Project/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_449c6c5bf4fe2db87852221372070af937e26957218e5991c14ede4153c5d03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449c6c5bf4fe2db87852221372070af937e26957218e5991c14ede4153c5d03f->enter($__internal_449c6c5bf4fe2db87852221372070af937e26957218e5991c14ede4153c5d03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Project/index.html.twig"));

        $__internal_2ef95dbe6cd7a15ed67bcf99f7a3dac94a5d05b5ee830757f7189083afb5acbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef95dbe6cd7a15ed67bcf99f7a3dac94a5d05b5ee830757f7189083afb5acbe->enter($__internal_2ef95dbe6cd7a15ed67bcf99f7a3dac94a5d05b5ee830757f7189083afb5acbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Project/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_449c6c5bf4fe2db87852221372070af937e26957218e5991c14ede4153c5d03f->leave($__internal_449c6c5bf4fe2db87852221372070af937e26957218e5991c14ede4153c5d03f_prof);

        
        $__internal_2ef95dbe6cd7a15ed67bcf99f7a3dac94a5d05b5ee830757f7189083afb5acbe->leave($__internal_2ef95dbe6cd7a15ed67bcf99f7a3dac94a5d05b5ee830757f7189083afb5acbe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f79367c35dbc0b0ca3620b257c6770065f7d9c02b4b21c402ac88c7afbeeaf81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79367c35dbc0b0ca3620b257c6770065f7d9c02b4b21c402ac88c7afbeeaf81->enter($__internal_f79367c35dbc0b0ca3620b257c6770065f7d9c02b4b21c402ac88c7afbeeaf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2a8a5af3b0681ff775a56ec7a6fc97df7cbd298f24660e0b08a02054f7c0b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a8a5af3b0681ff775a56ec7a6fc97df7cbd298f24660e0b08a02054f7c0b32->enter($__internal_a2a8a5af3b0681ff775a56ec7a6fc97df7cbd298f24660e0b08a02054f7c0b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Project:index";
        
        $__internal_a2a8a5af3b0681ff775a56ec7a6fc97df7cbd298f24660e0b08a02054f7c0b32->leave($__internal_a2a8a5af3b0681ff775a56ec7a6fc97df7cbd298f24660e0b08a02054f7c0b32_prof);

        
        $__internal_f79367c35dbc0b0ca3620b257c6770065f7d9c02b4b21c402ac88c7afbeeaf81->leave($__internal_f79367c35dbc0b0ca3620b257c6770065f7d9c02b4b21c402ac88c7afbeeaf81_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b62501bc9d02cc0b1985c2fc236b653f79d89a2667935fc7e7e96c01fbd204e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b62501bc9d02cc0b1985c2fc236b653f79d89a2667935fc7e7e96c01fbd204e->enter($__internal_0b62501bc9d02cc0b1985c2fc236b653f79d89a2667935fc7e7e96c01fbd204e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7e265f3e41ef1deb7bc3fa4f887453626ea92ed5ee112998dbe4a7c01c162e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e265f3e41ef1deb7bc3fa4f887453626ea92ed5ee112998dbe4a7c01c162e3->enter($__internal_d7e265f3e41ef1deb7bc3fa4f887453626ea92ed5ee112998dbe4a7c01c162e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Project:index page</h1>
";
        
        $__internal_d7e265f3e41ef1deb7bc3fa4f887453626ea92ed5ee112998dbe4a7c01c162e3->leave($__internal_d7e265f3e41ef1deb7bc3fa4f887453626ea92ed5ee112998dbe4a7c01c162e3_prof);

        
        $__internal_0b62501bc9d02cc0b1985c2fc236b653f79d89a2667935fc7e7e96c01fbd204e->leave($__internal_0b62501bc9d02cc0b1985c2fc236b653f79d89a2667935fc7e7e96c01fbd204e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/base.html.twig\" %}

{% block title %}AppBundle:Project:index{% endblock %}

{% block body %}
<h1>Welcome to the Project:index page</h1>
{% endblock %}
", "@App/Project/index.html.twig", "/opt/lampp/htdocs/freelanceur/src/AppBundle/Resources/views/Project/index.html.twig");
    }
}
