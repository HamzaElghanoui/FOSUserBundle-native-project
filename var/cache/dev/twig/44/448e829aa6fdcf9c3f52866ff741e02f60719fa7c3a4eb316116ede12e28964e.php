<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c1e5f61aff07fb7172e13811c8c88ec3ebafe0c6a5958f25495ce671b6172ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@FOSUser/layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eeea3dda3bf939ce46ff9ebb9f8fb87dee1b72c165d9041cf464ed603ec9b96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeea3dda3bf939ce46ff9ebb9f8fb87dee1b72c165d9041cf464ed603ec9b96f->enter($__internal_eeea3dda3bf939ce46ff9ebb9f8fb87dee1b72c165d9041cf464ed603ec9b96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_5cdb94e4b7d337a6e39533555eb5c9c88f148fbe7635c61b371edabf7bd634bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdb94e4b7d337a6e39533555eb5c9c88f148fbe7635c61b371edabf7bd634bf->enter($__internal_5cdb94e4b7d337a6e39533555eb5c9c88f148fbe7635c61b371edabf7bd634bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeea3dda3bf939ce46ff9ebb9f8fb87dee1b72c165d9041cf464ed603ec9b96f->leave($__internal_eeea3dda3bf939ce46ff9ebb9f8fb87dee1b72c165d9041cf464ed603ec9b96f_prof);

        
        $__internal_5cdb94e4b7d337a6e39533555eb5c9c88f148fbe7635c61b371edabf7bd634bf->leave($__internal_5cdb94e4b7d337a6e39533555eb5c9c88f148fbe7635c61b371edabf7bd634bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_09ce91145f5aa6b0b129f0414e3e4c62b6ffc67b88e0d85b1c8387f923061f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ce91145f5aa6b0b129f0414e3e4c62b6ffc67b88e0d85b1c8387f923061f47->enter($__internal_09ce91145f5aa6b0b129f0414e3e4c62b6ffc67b88e0d85b1c8387f923061f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19be478baf740eb89dc63ca9a1f1b8d30f3ca448346f9fc890b63a900b022ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19be478baf740eb89dc63ca9a1f1b8d30f3ca448346f9fc890b63a900b022ad3->enter($__internal_19be478baf740eb89dc63ca9a1f1b8d30f3ca448346f9fc890b63a900b022ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PostBundle:Post:index";
        
        $__internal_19be478baf740eb89dc63ca9a1f1b8d30f3ca448346f9fc890b63a900b022ad3->leave($__internal_19be478baf740eb89dc63ca9a1f1b8d30f3ca448346f9fc890b63a900b022ad3_prof);

        
        $__internal_09ce91145f5aa6b0b129f0414e3e4c62b6ffc67b88e0d85b1c8387f923061f47->leave($__internal_09ce91145f5aa6b0b129f0414e3e4c62b6ffc67b88e0d85b1c8387f923061f47_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d48d2baed83a5bfb2340fd909d0b9c85742b98ff370d88bbe8f538dc9071ae09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48d2baed83a5bfb2340fd909d0b9c85742b98ff370d88bbe8f538dc9071ae09->enter($__internal_d48d2baed83a5bfb2340fd909d0b9c85742b98ff370d88bbe8f538dc9071ae09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_443e4cb57a1ca62335614b0834a3909d3c1e8a9b02884ba852c2025ba0fba168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443e4cb57a1ca62335614b0834a3909d3c1e8a9b02884ba852c2025ba0fba168->enter($__internal_443e4cb57a1ca62335614b0834a3909d3c1e8a9b02884ba852c2025ba0fba168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "        <div>
            ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 10
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 15
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>

        ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 21
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 22
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 23
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        }
        // line 28
        echo "
        <div>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>

";
        
        $__internal_443e4cb57a1ca62335614b0834a3909d3c1e8a9b02884ba852c2025ba0fba168->leave($__internal_443e4cb57a1ca62335614b0834a3909d3c1e8a9b02884ba852c2025ba0fba168_prof);

        
        $__internal_d48d2baed83a5bfb2340fd909d0b9c85742b98ff370d88bbe8f538dc9071ae09->leave($__internal_d48d2baed83a5bfb2340fd909d0b9c85742b98ff370d88bbe8f538dc9071ae09_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73d63cee900bb974b7916ee7de018fef9d5d61870fd2394747501ef30a420c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d63cee900bb974b7916ee7de018fef9d5d61870fd2394747501ef30a420c8c->enter($__internal_73d63cee900bb974b7916ee7de018fef9d5d61870fd2394747501ef30a420c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5c774888e74140bb5ee94fbb07499b18e978363a5d8835507442371e0b6b5245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c774888e74140bb5ee94fbb07499b18e978363a5d8835507442371e0b6b5245->enter($__internal_5c774888e74140bb5ee94fbb07499b18e978363a5d8835507442371e0b6b5245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_5c774888e74140bb5ee94fbb07499b18e978363a5d8835507442371e0b6b5245->leave($__internal_5c774888e74140bb5ee94fbb07499b18e978363a5d8835507442371e0b6b5245_prof);

        
        $__internal_73d63cee900bb974b7916ee7de018fef9d5d61870fd2394747501ef30a420c8c->leave($__internal_73d63cee900bb974b7916ee7de018fef9d5d61870fd2394747501ef30a420c8c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 31,  154 => 30,  142 => 32,  140 => 30,  136 => 28,  133 => 27,  127 => 26,  118 => 23,  113 => 22,  108 => 21,  103 => 20,  101 => 19,  97 => 17,  89 => 15,  83 => 12,  79 => 11,  74 => 10,  72 => 9,  69 => 8,  60 => 7,  42 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"AppBundle::base.html.twig\" %}


{% block title %}PostBundle:Post:index{% endblock %}

{% block body %}
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>

{% endblock %}", "@FOSUser/layout.html.twig", "/opt/lampp/htdocs/freelanceur/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
