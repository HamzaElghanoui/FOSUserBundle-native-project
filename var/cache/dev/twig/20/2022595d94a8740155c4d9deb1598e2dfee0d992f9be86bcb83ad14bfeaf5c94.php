<?php

/* base.html.twig */
class __TwigTemplate_f17cdba953d61a5dcec05f617b0222b90f9b690274a6b47630bf1fd9bc36e270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f42fbd8eaa1082b5776e32cbd646a721f738cc3d0bb786b167347655a9f7ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f42fbd8eaa1082b5776e32cbd646a721f738cc3d0bb786b167347655a9f7ad1->enter($__internal_5f42fbd8eaa1082b5776e32cbd646a721f738cc3d0bb786b167347655a9f7ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c79ddd3505985bb6733c2b9419c7068ad206fd1cd97a484fe770037bcf4a8463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79ddd3505985bb6733c2b9419c7068ad206fd1cd97a484fe770037bcf4a8463->enter($__internal_c79ddd3505985bb6733c2b9419c7068ad206fd1cd97a484fe770037bcf4a8463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5f42fbd8eaa1082b5776e32cbd646a721f738cc3d0bb786b167347655a9f7ad1->leave($__internal_5f42fbd8eaa1082b5776e32cbd646a721f738cc3d0bb786b167347655a9f7ad1_prof);

        
        $__internal_c79ddd3505985bb6733c2b9419c7068ad206fd1cd97a484fe770037bcf4a8463->leave($__internal_c79ddd3505985bb6733c2b9419c7068ad206fd1cd97a484fe770037bcf4a8463_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_de50492f1d0d8251edc9f4089273e04eb0466273e6541314b9e4b21f3f656427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de50492f1d0d8251edc9f4089273e04eb0466273e6541314b9e4b21f3f656427->enter($__internal_de50492f1d0d8251edc9f4089273e04eb0466273e6541314b9e4b21f3f656427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98096f7c0cc9b81c5d1ff20ecbae22faa577ac8d7eb7b37d3fba075900d488de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98096f7c0cc9b81c5d1ff20ecbae22faa577ac8d7eb7b37d3fba075900d488de->enter($__internal_98096f7c0cc9b81c5d1ff20ecbae22faa577ac8d7eb7b37d3fba075900d488de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_98096f7c0cc9b81c5d1ff20ecbae22faa577ac8d7eb7b37d3fba075900d488de->leave($__internal_98096f7c0cc9b81c5d1ff20ecbae22faa577ac8d7eb7b37d3fba075900d488de_prof);

        
        $__internal_de50492f1d0d8251edc9f4089273e04eb0466273e6541314b9e4b21f3f656427->leave($__internal_de50492f1d0d8251edc9f4089273e04eb0466273e6541314b9e4b21f3f656427_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4f1fbdedd499367810218085ede4a34a98a3e8b94499604ada9f28aac5903ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f1fbdedd499367810218085ede4a34a98a3e8b94499604ada9f28aac5903ea->enter($__internal_d4f1fbdedd499367810218085ede4a34a98a3e8b94499604ada9f28aac5903ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ce3e4199f7b8324ea7317565683e652dc3feea8d0f1c966f3137c6585f00043a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3e4199f7b8324ea7317565683e652dc3feea8d0f1c966f3137c6585f00043a->enter($__internal_ce3e4199f7b8324ea7317565683e652dc3feea8d0f1c966f3137c6585f00043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce3e4199f7b8324ea7317565683e652dc3feea8d0f1c966f3137c6585f00043a->leave($__internal_ce3e4199f7b8324ea7317565683e652dc3feea8d0f1c966f3137c6585f00043a_prof);

        
        $__internal_d4f1fbdedd499367810218085ede4a34a98a3e8b94499604ada9f28aac5903ea->leave($__internal_d4f1fbdedd499367810218085ede4a34a98a3e8b94499604ada9f28aac5903ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e63047592579da04f6a56ad2796313991592609ccfdb306ade6deaa614360dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63047592579da04f6a56ad2796313991592609ccfdb306ade6deaa614360dff->enter($__internal_e63047592579da04f6a56ad2796313991592609ccfdb306ade6deaa614360dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a7e32d97c1ba448a632143eafb0fe5f2014a39bedab5eb4dd62a534974c5ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7e32d97c1ba448a632143eafb0fe5f2014a39bedab5eb4dd62a534974c5ee4->enter($__internal_6a7e32d97c1ba448a632143eafb0fe5f2014a39bedab5eb4dd62a534974c5ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a7e32d97c1ba448a632143eafb0fe5f2014a39bedab5eb4dd62a534974c5ee4->leave($__internal_6a7e32d97c1ba448a632143eafb0fe5f2014a39bedab5eb4dd62a534974c5ee4_prof);

        
        $__internal_e63047592579da04f6a56ad2796313991592609ccfdb306ade6deaa614360dff->leave($__internal_e63047592579da04f6a56ad2796313991592609ccfdb306ade6deaa614360dff_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1f72b29f4fecf4e8fd44a8449499b8a30fc58b2174d6e4bdac418c83b97354f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f72b29f4fecf4e8fd44a8449499b8a30fc58b2174d6e4bdac418c83b97354f->enter($__internal_e1f72b29f4fecf4e8fd44a8449499b8a30fc58b2174d6e4bdac418c83b97354f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e63789126cf72fc7abb005d3e6b894298189f78272481f5f410fbc8ce17937ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63789126cf72fc7abb005d3e6b894298189f78272481f5f410fbc8ce17937ed->enter($__internal_e63789126cf72fc7abb005d3e6b894298189f78272481f5f410fbc8ce17937ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e63789126cf72fc7abb005d3e6b894298189f78272481f5f410fbc8ce17937ed->leave($__internal_e63789126cf72fc7abb005d3e6b894298189f78272481f5f410fbc8ce17937ed_prof);

        
        $__internal_e1f72b29f4fecf4e8fd44a8449499b8a30fc58b2174d6e4bdac418c83b97354f->leave($__internal_e1f72b29f4fecf4e8fd44a8449499b8a30fc58b2174d6e4bdac418c83b97354f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/freelanceur/app/Resources/views/base.html.twig");
    }
}
