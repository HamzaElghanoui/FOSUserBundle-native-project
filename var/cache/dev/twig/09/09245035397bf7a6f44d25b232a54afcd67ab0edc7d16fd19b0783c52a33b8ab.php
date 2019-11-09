<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b7b4bd1728aa7393d1d2e95c22d4ab1f72a6242d45038f81dfb663db0e2e4bb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e75dc3fb0a685aa5d862a9a58ae02c79db2732e3a92e767a7a9743e5a77330c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e75dc3fb0a685aa5d862a9a58ae02c79db2732e3a92e767a7a9743e5a77330c->enter($__internal_1e75dc3fb0a685aa5d862a9a58ae02c79db2732e3a92e767a7a9743e5a77330c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_5b96efb74a7971c34bc2d1ad4834387e3e0340cdf73a5ba56d47ee32f2a84026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b96efb74a7971c34bc2d1ad4834387e3e0340cdf73a5ba56d47ee32f2a84026->enter($__internal_5b96efb74a7971c34bc2d1ad4834387e3e0340cdf73a5ba56d47ee32f2a84026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e75dc3fb0a685aa5d862a9a58ae02c79db2732e3a92e767a7a9743e5a77330c->leave($__internal_1e75dc3fb0a685aa5d862a9a58ae02c79db2732e3a92e767a7a9743e5a77330c_prof);

        
        $__internal_5b96efb74a7971c34bc2d1ad4834387e3e0340cdf73a5ba56d47ee32f2a84026->leave($__internal_5b96efb74a7971c34bc2d1ad4834387e3e0340cdf73a5ba56d47ee32f2a84026_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_359f9df7ef208daa0d5017c549afb43e26df2001383cbf733e39542e41fba597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359f9df7ef208daa0d5017c549afb43e26df2001383cbf733e39542e41fba597->enter($__internal_359f9df7ef208daa0d5017c549afb43e26df2001383cbf733e39542e41fba597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_55114f41c5201718d207be6bc1b51da53d11c74e6e0daebc9dd7eb8e7b3aff5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55114f41c5201718d207be6bc1b51da53d11c74e6e0daebc9dd7eb8e7b3aff5e->enter($__internal_55114f41c5201718d207be6bc1b51da53d11c74e6e0daebc9dd7eb8e7b3aff5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
";
        
        $__internal_55114f41c5201718d207be6bc1b51da53d11c74e6e0daebc9dd7eb8e7b3aff5e->leave($__internal_55114f41c5201718d207be6bc1b51da53d11c74e6e0daebc9dd7eb8e7b3aff5e_prof);

        
        $__internal_359f9df7ef208daa0d5017c549afb43e26df2001383cbf733e39542e41fba597->leave($__internal_359f9df7ef208daa0d5017c549afb43e26df2001383cbf733e39542e41fba597_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    <div class=\"container\">
        {% include \"@FOSUser/Registration/register_content.html.twig\" %}
    </div>
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/opt/lampp/htdocs/freelanceur/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
