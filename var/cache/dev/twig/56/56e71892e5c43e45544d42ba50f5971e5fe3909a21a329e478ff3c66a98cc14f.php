<?php

/* @App/base.html.twig */
class __TwigTemplate_2dc52b120c5a1f2cef8a7014276ceb05f7d6c3f240fb68dd7ab01887289afa83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d73e98225dc925e17f1dc45bb9abacba8be8b6dabd3f52afbc6cdfc6827b5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d73e98225dc925e17f1dc45bb9abacba8be8b6dabd3f52afbc6cdfc6827b5a9->enter($__internal_3d73e98225dc925e17f1dc45bb9abacba8be8b6dabd3f52afbc6cdfc6827b5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        $__internal_a5b63119296ff0d0f24a97caba2eb81a208c48b56815108ff94cef8f3883b71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b63119296ff0d0f24a97caba2eb81a208c48b56815108ff94cef8f3883b71d->enter($__internal_a5b63119296ff0d0f24a97caba2eb81a208c48b56815108ff94cef8f3883b71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"UTF-8\">
<title>Title of the document</title>
";
        // line 7
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" >
";
        // line 8
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 9
        echo "</head>

<body>
    ";
        // line 12
        $this->loadTemplate("@App/Partial/menu.html.twig", "@App/base.html.twig", 12)->display($context);
        // line 13
        echo "    <div class=\"container\">
        ";
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    </div>

    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 22
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "</body>

</html>";
        
        $__internal_3d73e98225dc925e17f1dc45bb9abacba8be8b6dabd3f52afbc6cdfc6827b5a9->leave($__internal_3d73e98225dc925e17f1dc45bb9abacba8be8b6dabd3f52afbc6cdfc6827b5a9_prof);

        
        $__internal_a5b63119296ff0d0f24a97caba2eb81a208c48b56815108ff94cef8f3883b71d->leave($__internal_a5b63119296ff0d0f24a97caba2eb81a208c48b56815108ff94cef8f3883b71d_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_6dc0eeb96d38d9e59749b4ab9a84072d4b6155074fb480c8d46b22bbac6412ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc0eeb96d38d9e59749b4ab9a84072d4b6155074fb480c8d46b22bbac6412ac->enter($__internal_6dc0eeb96d38d9e59749b4ab9a84072d4b6155074fb480c8d46b22bbac6412ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_a31b295520b071785880a938a959729179dcd0f695e04d38c74b7289a27da039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31b295520b071785880a938a959729179dcd0f695e04d38c74b7289a27da039->enter($__internal_a31b295520b071785880a938a959729179dcd0f695e04d38c74b7289a27da039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_a31b295520b071785880a938a959729179dcd0f695e04d38c74b7289a27da039->leave($__internal_a31b295520b071785880a938a959729179dcd0f695e04d38c74b7289a27da039_prof);

        
        $__internal_6dc0eeb96d38d9e59749b4ab9a84072d4b6155074fb480c8d46b22bbac6412ac->leave($__internal_6dc0eeb96d38d9e59749b4ab9a84072d4b6155074fb480c8d46b22bbac6412ac_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c556f51f4f09a071b82d74072fe8d5956725f169d557cec8c7298b2c5bb644e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c556f51f4f09a071b82d74072fe8d5956725f169d557cec8c7298b2c5bb644e0->enter($__internal_c556f51f4f09a071b82d74072fe8d5956725f169d557cec8c7298b2c5bb644e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8de72d1ffa4c7fcba261781e6de74b9b9e229ad451c50cc0831877d4dbc1c347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de72d1ffa4c7fcba261781e6de74b9b9e229ad451c50cc0831877d4dbc1c347->enter($__internal_8de72d1ffa4c7fcba261781e6de74b9b9e229ad451c50cc0831877d4dbc1c347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
        
        ";
        
        $__internal_8de72d1ffa4c7fcba261781e6de74b9b9e229ad451c50cc0831877d4dbc1c347->leave($__internal_8de72d1ffa4c7fcba261781e6de74b9b9e229ad451c50cc0831877d4dbc1c347_prof);

        
        $__internal_c556f51f4f09a071b82d74072fe8d5956725f169d557cec8c7298b2c5bb644e0->leave($__internal_c556f51f4f09a071b82d74072fe8d5956725f169d557cec8c7298b2c5bb644e0_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_69d575f02f8a059d3c4deb1362ece7578225106bdfb2e19f3c187526756e60ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d575f02f8a059d3c4deb1362ece7578225106bdfb2e19f3c187526756e60ca->enter($__internal_69d575f02f8a059d3c4deb1362ece7578225106bdfb2e19f3c187526756e60ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_47e79c51ca527e68262baa55cf360aa9948e48118afec275e416ddf904fbf55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e79c51ca527e68262baa55cf360aa9948e48118afec275e416ddf904fbf55e->enter($__internal_47e79c51ca527e68262baa55cf360aa9948e48118afec275e416ddf904fbf55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " 

    ";
        
        $__internal_47e79c51ca527e68262baa55cf360aa9948e48118afec275e416ddf904fbf55e->leave($__internal_47e79c51ca527e68262baa55cf360aa9948e48118afec275e416ddf904fbf55e_prof);

        
        $__internal_69d575f02f8a059d3c4deb1362ece7578225106bdfb2e19f3c187526756e60ca->leave($__internal_69d575f02f8a059d3c4deb1362ece7578225106bdfb2e19f3c187526756e60ca_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 22,  98 => 15,  81 => 8,  69 => 25,  67 => 22,  63 => 21,  59 => 20,  55 => 18,  52 => 15,  49 => 13,  47 => 12,  42 => 9,  40 => 8,  35 => 7,  28 => 1,);
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
<meta charset=\"UTF-8\">
<title>Title of the document</title>
{# <link rel=\"stylesheet\" href=\"{{ asset('front/bootstrap.min.css') }}\" > #}
<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" >
{% block stylesheet %}{% endblock %}
</head>

<body>
    {% include(\"@App/Partial/menu.html.twig\") %}
    <div class=\"container\">
        {# {{ include('category/alert.html.twig') }} #}
        {% block body %} 
        
        {% endblock %}
    </div>

    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    {% block footer %} 

    {% endblock %}
</body>

</html>", "@App/base.html.twig", "/opt/lampp/htdocs/freelanceur/src/AppBundle/Resources/views/base.html.twig");
    }
}
