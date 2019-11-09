<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_247d8ade41a589682b44245d4778092c2f0d87066e321af87d6290b6a7a0738d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_ce69fc30ff76f55c2b03677bbc9ee285028bb05269c7a03245289fed818bb225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce69fc30ff76f55c2b03677bbc9ee285028bb05269c7a03245289fed818bb225->enter($__internal_ce69fc30ff76f55c2b03677bbc9ee285028bb05269c7a03245289fed818bb225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_762255bb2d5463bf220733d7fba95b94c447fcada3884dfb8ac8c4f0b2b09468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762255bb2d5463bf220733d7fba95b94c447fcada3884dfb8ac8c4f0b2b09468->enter($__internal_762255bb2d5463bf220733d7fba95b94c447fcada3884dfb8ac8c4f0b2b09468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce69fc30ff76f55c2b03677bbc9ee285028bb05269c7a03245289fed818bb225->leave($__internal_ce69fc30ff76f55c2b03677bbc9ee285028bb05269c7a03245289fed818bb225_prof);

        
        $__internal_762255bb2d5463bf220733d7fba95b94c447fcada3884dfb8ac8c4f0b2b09468->leave($__internal_762255bb2d5463bf220733d7fba95b94c447fcada3884dfb8ac8c4f0b2b09468_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b998f0f79692ab3e6294293eed77f0467f1eade1e719e2d15a43309504cfb51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b998f0f79692ab3e6294293eed77f0467f1eade1e719e2d15a43309504cfb51d->enter($__internal_b998f0f79692ab3e6294293eed77f0467f1eade1e719e2d15a43309504cfb51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb12e1b6ff80378d0f9f2f7c9845fbbccf6f07e298be08533663803953c6fb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb12e1b6ff80378d0f9f2f7c9845fbbccf6f07e298be08533663803953c6fb3a->enter($__internal_bb12e1b6ff80378d0f9f2f7c9845fbbccf6f07e298be08533663803953c6fb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bb12e1b6ff80378d0f9f2f7c9845fbbccf6f07e298be08533663803953c6fb3a->leave($__internal_bb12e1b6ff80378d0f9f2f7c9845fbbccf6f07e298be08533663803953c6fb3a_prof);

        
        $__internal_b998f0f79692ab3e6294293eed77f0467f1eade1e719e2d15a43309504cfb51d->leave($__internal_b998f0f79692ab3e6294293eed77f0467f1eade1e719e2d15a43309504cfb51d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/freelanceur/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
