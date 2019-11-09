<?php

/* project/new.html.twig */
class __TwigTemplate_c15902c85768cd3e6f43246ed0326b18b23c11c64e33e9ee10e1e76829b89809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69889b740429e31dc1be047869a8aec235ddcd53b40641664ded4195db6eed6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69889b740429e31dc1be047869a8aec235ddcd53b40641664ded4195db6eed6d->enter($__internal_69889b740429e31dc1be047869a8aec235ddcd53b40641664ded4195db6eed6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/new.html.twig"));

        $__internal_ab7abf6afe9ce9bd7ff03e2b62eb6ffa331caaecd413a7a3cb952650b4b379f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7abf6afe9ce9bd7ff03e2b62eb6ffa331caaecd413a7a3cb952650b4b379f9->enter($__internal_ab7abf6afe9ce9bd7ff03e2b62eb6ffa331caaecd413a7a3cb952650b4b379f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69889b740429e31dc1be047869a8aec235ddcd53b40641664ded4195db6eed6d->leave($__internal_69889b740429e31dc1be047869a8aec235ddcd53b40641664ded4195db6eed6d_prof);

        
        $__internal_ab7abf6afe9ce9bd7ff03e2b62eb6ffa331caaecd413a7a3cb952650b4b379f9->leave($__internal_ab7abf6afe9ce9bd7ff03e2b62eb6ffa331caaecd413a7a3cb952650b4b379f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2350899fe95d696d144e66685dc727a6b76e450b91d388d95a7d8e8567066b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2350899fe95d696d144e66685dc727a6b76e450b91d388d95a7d8e8567066b3->enter($__internal_a2350899fe95d696d144e66685dc727a6b76e450b91d388d95a7d8e8567066b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6dfb028dbb40d7658217260e93585ba76e9a081045c900de0bb8cbe43ab8665f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfb028dbb40d7658217260e93585ba76e9a081045c900de0bb8cbe43ab8665f->enter($__internal_6dfb028dbb40d7658217260e93585ba76e9a081045c900de0bb8cbe43ab8665f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Project creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6dfb028dbb40d7658217260e93585ba76e9a081045c900de0bb8cbe43ab8665f->leave($__internal_6dfb028dbb40d7658217260e93585ba76e9a081045c900de0bb8cbe43ab8665f_prof);

        
        $__internal_a2350899fe95d696d144e66685dc727a6b76e450b91d388d95a7d8e8567066b3->leave($__internal_a2350899fe95d696d144e66685dc727a6b76e450b91d388d95a7d8e8567066b3_prof);

    }

    public function getTemplateName()
    {
        return "project/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Project creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('project_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "project/new.html.twig", "/opt/lampp/htdocs/freelanceur/app/Resources/views/project/new.html.twig");
    }
}
