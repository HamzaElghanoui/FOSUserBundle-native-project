<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f5e4db57c402c050e54645ff14bbbb062587624c20a13ece2d999fe543945d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5262970ab5ab93f4887c4e079121387eb0b5ca922e291b83d899cad2768be4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5262970ab5ab93f4887c4e079121387eb0b5ca922e291b83d899cad2768be4df->enter($__internal_5262970ab5ab93f4887c4e079121387eb0b5ca922e291b83d899cad2768be4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a198b193d6a76ae01bc37e646f29df57c4c39ef52eb24d505ea51574a1469644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a198b193d6a76ae01bc37e646f29df57c4c39ef52eb24d505ea51574a1469644->enter($__internal_a198b193d6a76ae01bc37e646f29df57c4c39ef52eb24d505ea51574a1469644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5262970ab5ab93f4887c4e079121387eb0b5ca922e291b83d899cad2768be4df->leave($__internal_5262970ab5ab93f4887c4e079121387eb0b5ca922e291b83d899cad2768be4df_prof);

        
        $__internal_a198b193d6a76ae01bc37e646f29df57c4c39ef52eb24d505ea51574a1469644->leave($__internal_a198b193d6a76ae01bc37e646f29df57c4c39ef52eb24d505ea51574a1469644_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f57f0a233186b085d58e19de79f50d3d0d4e853d81947c0818859ce24cbe9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f57f0a233186b085d58e19de79f50d3d0d4e853d81947c0818859ce24cbe9ee->enter($__internal_2f57f0a233186b085d58e19de79f50d3d0d4e853d81947c0818859ce24cbe9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e89ac5aa24d17c99947e20ac2faa604a5e9dd35d94fa8a272efdfaec8ebbe82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e89ac5aa24d17c99947e20ac2faa604a5e9dd35d94fa8a272efdfaec8ebbe82->enter($__internal_2e89ac5aa24d17c99947e20ac2faa604a5e9dd35d94fa8a272efdfaec8ebbe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2e89ac5aa24d17c99947e20ac2faa604a5e9dd35d94fa8a272efdfaec8ebbe82->leave($__internal_2e89ac5aa24d17c99947e20ac2faa604a5e9dd35d94fa8a272efdfaec8ebbe82_prof);

        
        $__internal_2f57f0a233186b085d58e19de79f50d3d0d4e853d81947c0818859ce24cbe9ee->leave($__internal_2f57f0a233186b085d58e19de79f50d3d0d4e853d81947c0818859ce24cbe9ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/opt/lampp/htdocs/freelanceur/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
