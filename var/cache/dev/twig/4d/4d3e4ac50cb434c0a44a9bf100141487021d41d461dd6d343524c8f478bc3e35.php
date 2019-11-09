<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7092ce351d4f33093c91a322d3bf7cc4352a3e23a6bcc49210ff30e24e819f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_807a322abefa77207994ae77d34c149ed474896c627442984b7b5fbdc37d67bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807a322abefa77207994ae77d34c149ed474896c627442984b7b5fbdc37d67bb->enter($__internal_807a322abefa77207994ae77d34c149ed474896c627442984b7b5fbdc37d67bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5bf7a2478d35f92aab802adb98de4c4a02a2d6f8c9c45dbc36855adae0e41d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf7a2478d35f92aab802adb98de4c4a02a2d6f8c9c45dbc36855adae0e41d17->enter($__internal_5bf7a2478d35f92aab802adb98de4c4a02a2d6f8c9c45dbc36855adae0e41d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_807a322abefa77207994ae77d34c149ed474896c627442984b7b5fbdc37d67bb->leave($__internal_807a322abefa77207994ae77d34c149ed474896c627442984b7b5fbdc37d67bb_prof);

        
        $__internal_5bf7a2478d35f92aab802adb98de4c4a02a2d6f8c9c45dbc36855adae0e41d17->leave($__internal_5bf7a2478d35f92aab802adb98de4c4a02a2d6f8c9c45dbc36855adae0e41d17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47213f45a8d575faddb4b0dc1b1ccb228bbd59cb8412426d03339d0ff238ab87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47213f45a8d575faddb4b0dc1b1ccb228bbd59cb8412426d03339d0ff238ab87->enter($__internal_47213f45a8d575faddb4b0dc1b1ccb228bbd59cb8412426d03339d0ff238ab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f18cac7143d5d84222aa3ffbba8bd704e9ca586021e407fb1b510988d02215e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f18cac7143d5d84222aa3ffbba8bd704e9ca586021e407fb1b510988d02215e->enter($__internal_7f18cac7143d5d84222aa3ffbba8bd704e9ca586021e407fb1b510988d02215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7f18cac7143d5d84222aa3ffbba8bd704e9ca586021e407fb1b510988d02215e->leave($__internal_7f18cac7143d5d84222aa3ffbba8bd704e9ca586021e407fb1b510988d02215e_prof);

        
        $__internal_47213f45a8d575faddb4b0dc1b1ccb228bbd59cb8412426d03339d0ff238ab87->leave($__internal_47213f45a8d575faddb4b0dc1b1ccb228bbd59cb8412426d03339d0ff238ab87_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_baeeb9bad187098912cb9fcc57dad4e547eeecd0563ad1181fe2884ed60b65ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baeeb9bad187098912cb9fcc57dad4e547eeecd0563ad1181fe2884ed60b65ff->enter($__internal_baeeb9bad187098912cb9fcc57dad4e547eeecd0563ad1181fe2884ed60b65ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_829813d3261c2cd8e488816851073ff6a1427bfeb3cb2165cbd494f5e54db4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829813d3261c2cd8e488816851073ff6a1427bfeb3cb2165cbd494f5e54db4fb->enter($__internal_829813d3261c2cd8e488816851073ff6a1427bfeb3cb2165cbd494f5e54db4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_829813d3261c2cd8e488816851073ff6a1427bfeb3cb2165cbd494f5e54db4fb->leave($__internal_829813d3261c2cd8e488816851073ff6a1427bfeb3cb2165cbd494f5e54db4fb_prof);

        
        $__internal_baeeb9bad187098912cb9fcc57dad4e547eeecd0563ad1181fe2884ed60b65ff->leave($__internal_baeeb9bad187098912cb9fcc57dad4e547eeecd0563ad1181fe2884ed60b65ff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77bf1a0352ce47cd73ce0f5a018a449cf374fe35bb021ad2bea0bf109d582a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77bf1a0352ce47cd73ce0f5a018a449cf374fe35bb021ad2bea0bf109d582a8e->enter($__internal_77bf1a0352ce47cd73ce0f5a018a449cf374fe35bb021ad2bea0bf109d582a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee9f28041e75137ca84822229c16dc237b6f4d4801f5b6af764666ada4501f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9f28041e75137ca84822229c16dc237b6f4d4801f5b6af764666ada4501f27->enter($__internal_ee9f28041e75137ca84822229c16dc237b6f4d4801f5b6af764666ada4501f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ee9f28041e75137ca84822229c16dc237b6f4d4801f5b6af764666ada4501f27->leave($__internal_ee9f28041e75137ca84822229c16dc237b6f4d4801f5b6af764666ada4501f27_prof);

        
        $__internal_77bf1a0352ce47cd73ce0f5a018a449cf374fe35bb021ad2bea0bf109d582a8e->leave($__internal_77bf1a0352ce47cd73ce0f5a018a449cf374fe35bb021ad2bea0bf109d582a8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/freelanceur/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
