<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_60d8643d9a424004b491b110c2077b78ef495991834ee9e0c37046972b66ecee extends Twig_Template
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
        $__internal_adb8e7f77f66a785c39d79fc562473212d531fc6d41f719273c1821ec6d63ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb8e7f77f66a785c39d79fc562473212d531fc6d41f719273c1821ec6d63ba9->enter($__internal_adb8e7f77f66a785c39d79fc562473212d531fc6d41f719273c1821ec6d63ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_1fd9f6b04170ec41a71f7968a8e879d8f4af38c574b3c4057d983a1b167340c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd9f6b04170ec41a71f7968a8e879d8f4af38c574b3c4057d983a1b167340c4->enter($__internal_1fd9f6b04170ec41a71f7968a8e879d8f4af38c574b3c4057d983a1b167340c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_adb8e7f77f66a785c39d79fc562473212d531fc6d41f719273c1821ec6d63ba9->leave($__internal_adb8e7f77f66a785c39d79fc562473212d531fc6d41f719273c1821ec6d63ba9_prof);

        
        $__internal_1fd9f6b04170ec41a71f7968a8e879d8f4af38c574b3c4057d983a1b167340c4->leave($__internal_1fd9f6b04170ec41a71f7968a8e879d8f4af38c574b3c4057d983a1b167340c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/opt/lampp/htdocs/freelanceur/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
