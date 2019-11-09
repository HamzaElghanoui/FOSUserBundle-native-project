<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f5afab45071921ce20ca61a8cf7b9714d4bca976193bdc00134b53ee7fda2fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6729cbd5e692ad673f962c6b7d535bef3cfc5d6cfd7a63e97f212c7b438e68cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6729cbd5e692ad673f962c6b7d535bef3cfc5d6cfd7a63e97f212c7b438e68cd->enter($__internal_6729cbd5e692ad673f962c6b7d535bef3cfc5d6cfd7a63e97f212c7b438e68cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_503c1e112cb504effba90e8c0ec46f1d216c4b19c649cf8b033e6c4ee4c5a2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503c1e112cb504effba90e8c0ec46f1d216c4b19c649cf8b033e6c4ee4c5a2cb->enter($__internal_503c1e112cb504effba90e8c0ec46f1d216c4b19c649cf8b033e6c4ee4c5a2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6729cbd5e692ad673f962c6b7d535bef3cfc5d6cfd7a63e97f212c7b438e68cd->leave($__internal_6729cbd5e692ad673f962c6b7d535bef3cfc5d6cfd7a63e97f212c7b438e68cd_prof);

        
        $__internal_503c1e112cb504effba90e8c0ec46f1d216c4b19c649cf8b033e6c4ee4c5a2cb->leave($__internal_503c1e112cb504effba90e8c0ec46f1d216c4b19c649cf8b033e6c4ee4c5a2cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa18309852c52e565b8259510aa9282f281948dd380080d479e4784eb2ef7db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa18309852c52e565b8259510aa9282f281948dd380080d479e4784eb2ef7db5->enter($__internal_aa18309852c52e565b8259510aa9282f281948dd380080d479e4784eb2ef7db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_68d75f69c2832c9a3faa70ff4a0c4ad3892162c9db64c29a1ee480fda1fd8a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d75f69c2832c9a3faa70ff4a0c4ad3892162c9db64c29a1ee480fda1fd8a7e->enter($__internal_68d75f69c2832c9a3faa70ff4a0c4ad3892162c9db64c29a1ee480fda1fd8a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_68d75f69c2832c9a3faa70ff4a0c4ad3892162c9db64c29a1ee480fda1fd8a7e->leave($__internal_68d75f69c2832c9a3faa70ff4a0c4ad3892162c9db64c29a1ee480fda1fd8a7e_prof);

        
        $__internal_aa18309852c52e565b8259510aa9282f281948dd380080d479e4784eb2ef7db5->leave($__internal_aa18309852c52e565b8259510aa9282f281948dd380080d479e4784eb2ef7db5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_280674e7b843ddb68eed7fa01e50e36b322e3686934e2689cc10614b74305b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280674e7b843ddb68eed7fa01e50e36b322e3686934e2689cc10614b74305b55->enter($__internal_280674e7b843ddb68eed7fa01e50e36b322e3686934e2689cc10614b74305b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02c9b669bed3fc6a404703cf1e1b84c488282dc0f28dcec228f80e3aad7ad0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c9b669bed3fc6a404703cf1e1b84c488282dc0f28dcec228f80e3aad7ad0d2->enter($__internal_02c9b669bed3fc6a404703cf1e1b84c488282dc0f28dcec228f80e3aad7ad0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02c9b669bed3fc6a404703cf1e1b84c488282dc0f28dcec228f80e3aad7ad0d2->leave($__internal_02c9b669bed3fc6a404703cf1e1b84c488282dc0f28dcec228f80e3aad7ad0d2_prof);

        
        $__internal_280674e7b843ddb68eed7fa01e50e36b322e3686934e2689cc10614b74305b55->leave($__internal_280674e7b843ddb68eed7fa01e50e36b322e3686934e2689cc10614b74305b55_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccd849d4547bf4cc449b0c81c2091358bbeb081d8ee8f48298f39b851a557bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd849d4547bf4cc449b0c81c2091358bbeb081d8ee8f48298f39b851a557bac->enter($__internal_ccd849d4547bf4cc449b0c81c2091358bbeb081d8ee8f48298f39b851a557bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e442857ea7d14367c4bdd069f0493713ad915b57e737af7698d48c8dd06e675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e442857ea7d14367c4bdd069f0493713ad915b57e737af7698d48c8dd06e675->enter($__internal_8e442857ea7d14367c4bdd069f0493713ad915b57e737af7698d48c8dd06e675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8e442857ea7d14367c4bdd069f0493713ad915b57e737af7698d48c8dd06e675->leave($__internal_8e442857ea7d14367c4bdd069f0493713ad915b57e737af7698d48c8dd06e675_prof);

        
        $__internal_ccd849d4547bf4cc449b0c81c2091358bbeb081d8ee8f48298f39b851a557bac->leave($__internal_ccd849d4547bf4cc449b0c81c2091358bbeb081d8ee8f48298f39b851a557bac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/freelanceur/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
