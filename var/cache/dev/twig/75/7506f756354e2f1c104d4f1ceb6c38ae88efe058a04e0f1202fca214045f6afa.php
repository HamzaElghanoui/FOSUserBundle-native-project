<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_2240eb0978e829274f33154694b88df0d68bf79c33985e9ab161988957a38315 extends Twig_Template
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
        $__internal_48b874090728d332b47f0fbfc4378e8ae374bb682d2a867687b3e6ab80218676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b874090728d332b47f0fbfc4378e8ae374bb682d2a867687b3e6ab80218676->enter($__internal_48b874090728d332b47f0fbfc4378e8ae374bb682d2a867687b3e6ab80218676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_ec559ca980b46082c8edaf9900fae96f30b56115133589ec19e12266bc2d3411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec559ca980b46082c8edaf9900fae96f30b56115133589ec19e12266bc2d3411->enter($__internal_ec559ca980b46082c8edaf9900fae96f30b56115133589ec19e12266bc2d3411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        <div>
            <input class=\"btn btn-primary btn-block\" type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
        <div class=\"d-flex justify-content-around mt-3\">
            <a class=\"btn btn-link\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" >
            <i class=\"fas fa-user\"></i> All ready have account
            </a>
        </div>
    ";
        // line 17
        echo "    <div>
        <input type=\"submit\" class=\"btn btn-default\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_48b874090728d332b47f0fbfc4378e8ae374bb682d2a867687b3e6ab80218676->leave($__internal_48b874090728d332b47f0fbfc4378e8ae374bb682d2a867687b3e6ab80218676_prof);

        
        $__internal_ec559ca980b46082c8edaf9900fae96f30b56115133589ec19e12266bc2d3411->leave($__internal_ec559ca980b46082c8edaf9900fae96f30b56115133589ec19e12266bc2d3411_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  65 => 18,  62 => 17,  55 => 12,  49 => 9,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        {{ form_row(form.email, {'attr': {'class':'form-control'}}) }}
        {{ form_row(form.username, {'attr': {'class':'form-control'}}) }}
        {{ form_row(form.plainPassword.first, {'attr': {'class':'form-control'}}) }}
        {{ form_row(form.plainPassword.second, {'attr': {'class':'form-control'}}) }}
        <div>
            <input class=\"btn btn-primary btn-block\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
        </div>
        <div class=\"d-flex justify-content-around mt-3\">
            <a class=\"btn btn-link\" href=\"{{ path('fos_user_security_login') }}\" >
            <i class=\"fas fa-user\"></i> All ready have account
            </a>
        </div>
    {# {{ form_widget(form) }} #}
    <div>
        <input type=\"submit\" class=\"btn btn-default\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/opt/lampp/htdocs/freelanceur/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
