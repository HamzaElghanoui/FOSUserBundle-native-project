<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_64f97aae9150057886ec4991226951dad47658a058aa160152659ba2c22bc034 extends Twig_Template
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
        $__internal_766151553dfd7c92ee305745ca53f3a8da82363af2f32f265d764cef36737a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766151553dfd7c92ee305745ca53f3a8da82363af2f32f265d764cef36737a76->enter($__internal_766151553dfd7c92ee305745ca53f3a8da82363af2f32f265d764cef36737a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_d65989d729446c7b9c95803d7234a704abd0ca945fd76f8ad950838d7c10cefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65989d729446c7b9c95803d7234a704abd0ca945fd76f8ad950838d7c10cefb->enter($__internal_d65989d729446c7b9c95803d7234a704abd0ca945fd76f8ad950838d7c10cefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_766151553dfd7c92ee305745ca53f3a8da82363af2f32f265d764cef36737a76->leave($__internal_766151553dfd7c92ee305745ca53f3a8da82363af2f32f265d764cef36737a76_prof);

        
        $__internal_d65989d729446c7b9c95803d7234a704abd0ca945fd76f8ad950838d7c10cefb->leave($__internal_d65989d729446c7b9c95803d7234a704abd0ca945fd76f8ad950838d7c10cefb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a02541fb8d8c168c5cc7e5aeb960a8b2d680c2252c87a2e4a6ac5b8e768b8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a02541fb8d8c168c5cc7e5aeb960a8b2d680c2252c87a2e4a6ac5b8e768b8b5->enter($__internal_7a02541fb8d8c168c5cc7e5aeb960a8b2d680c2252c87a2e4a6ac5b8e768b8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aaa7e50917fde373ce72b0a8795e141b5ef37ce8a4a629c107c842ece5916f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa7e50917fde373ce72b0a8795e141b5ef37ce8a4a629c107c842ece5916f55->enter($__internal_aaa7e50917fde373ce72b0a8795e141b5ef37ce8a4a629c107c842ece5916f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    </div>
";
        
        $__internal_aaa7e50917fde373ce72b0a8795e141b5ef37ce8a4a629c107c842ece5916f55->leave($__internal_aaa7e50917fde373ce72b0a8795e141b5ef37ce8a4a629c107c842ece5916f55_prof);

        
        $__internal_7a02541fb8d8c168c5cc7e5aeb960a8b2d680c2252c87a2e4a6ac5b8e768b8b5->leave($__internal_7a02541fb8d8c168c5cc7e5aeb960a8b2d680c2252c87a2e4a6ac5b8e768b8b5_prof);

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
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {{ include('@FOSUser/Security/login_content.html.twig') }}
    </div>
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/freelanceur/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
