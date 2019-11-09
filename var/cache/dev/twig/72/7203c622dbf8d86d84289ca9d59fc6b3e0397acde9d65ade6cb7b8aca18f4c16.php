<?php

/* @App/Partial/menu.html.twig */
class __TwigTemplate_523a3c5ec7ce32fd233a7e2e89acacab246355b13141a8acdf58ffc4807604f2 extends Twig_Template
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
        $__internal_99dde9215249aa36a2c6a8224442ea273b7668acdc5c87f0a766b862d56cd05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99dde9215249aa36a2c6a8224442ea273b7668acdc5c87f0a766b862d56cd05f->enter($__internal_99dde9215249aa36a2c6a8224442ea273b7668acdc5c87f0a766b862d56cd05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Partial/menu.html.twig"));

        $__internal_3e34e6abd18a5100adcbf3c173313d1b32659ed3b3a218d81787d0b644545bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e34e6abd18a5100adcbf3c173313d1b32659ed3b3a218d81787d0b644545bd7->enter($__internal_3e34e6abd18a5100adcbf3c173313d1b32659ed3b3a218d81787d0b644545bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Partial/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"\">Home <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"\">Service</a></li>
        <li><a href=\"\">Contact</a></li>
        <li><a href=\"\">Post</a></li>
      </ul>
      <form class=\"navbar-form navbar-left\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
    <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
          </ul>
        </li>
        ";
        } else {
            // line 41
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connection</a></li>
        <li><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
        ";
        }
        // line 44
        echo "      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_99dde9215249aa36a2c6a8224442ea273b7668acdc5c87f0a766b862d56cd05f->leave($__internal_99dde9215249aa36a2c6a8224442ea273b7668acdc5c87f0a766b862d56cd05f_prof);

        
        $__internal_3e34e6abd18a5100adcbf3c173313d1b32659ed3b3a218d81787d0b644545bd7->leave($__internal_3e34e6abd18a5100adcbf3c173313d1b32659ed3b3a218d81787d0b644545bd7_prof);

    }

    public function getTemplateName()
    {
        return "@App/Partial/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  83 => 42,  78 => 41,  69 => 37,  60 => 31,  57 => 30,  55 => 29,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"\">Home <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"\">Service</a></li>
        <li><a href=\"\">Contact</a></li>
        <li><a href=\"\">Post</a></li>
      </ul>
      <form class=\"navbar-form navbar-left\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
    <ul class=\"nav navbar-nav navbar-right\">
      {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.user.username }} <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"{{ path('fos_user_security_logout') }}\">{{ \"layout.logout\" | trans({}, 'FOSUserBundle')}}</a></li>
          </ul>
        </li>
        {% else %}
        <li><a href=\"{{ path('fos_user_security_login') }}\">Connection</a></li>
        <li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a></li>
        {% endif %}
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>", "@App/Partial/menu.html.twig", "/opt/lampp/htdocs/freelanceur/src/AppBundle/Resources/views/Partial/menu.html.twig");
    }
}
