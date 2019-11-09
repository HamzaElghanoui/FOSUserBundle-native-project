<?php

/* project/index.html.twig */
class __TwigTemplate_7917149780e410d231449dcc0b805467c1c4515732db72e928308b55f728b9c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/base.html.twig", "project/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_043aa493018ae8f429e393943e5ada37e2767e32b3bb375bb31f2c16a2f7339a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043aa493018ae8f429e393943e5ada37e2767e32b3bb375bb31f2c16a2f7339a->enter($__internal_043aa493018ae8f429e393943e5ada37e2767e32b3bb375bb31f2c16a2f7339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_bab9b54c1bbf91652acec4d46e6c368a0c5021efd1ca484a6e110380a0b737ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab9b54c1bbf91652acec4d46e6c368a0c5021efd1ca484a6e110380a0b737ee->enter($__internal_bab9b54c1bbf91652acec4d46e6c368a0c5021efd1ca484a6e110380a0b737ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_043aa493018ae8f429e393943e5ada37e2767e32b3bb375bb31f2c16a2f7339a->leave($__internal_043aa493018ae8f429e393943e5ada37e2767e32b3bb375bb31f2c16a2f7339a_prof);

        
        $__internal_bab9b54c1bbf91652acec4d46e6c368a0c5021efd1ca484a6e110380a0b737ee->leave($__internal_bab9b54c1bbf91652acec4d46e6c368a0c5021efd1ca484a6e110380a0b737ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a0b8fb3b4854ecdd938004735144edb542d424b127b4e8784f57bab674a8822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0b8fb3b4854ecdd938004735144edb542d424b127b4e8784f57bab674a8822->enter($__internal_5a0b8fb3b4854ecdd938004735144edb542d424b127b4e8784f57bab674a8822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0d0d6cbd1b210e43b3b2fa7b8b58be8a63ad06f05ca35037cc272be131e1a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d0d6cbd1b210e43b3b2fa7b8b58be8a63ad06f05ca35037cc272be131e1a3a->enter($__internal_d0d0d6cbd1b210e43b3b2fa7b8b58be8a63ad06f05ca35037cc272be131e1a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projects list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "price", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_new");
        echo "\">Create a new project</a>
        </li>
    </ul>
";
        
        $__internal_d0d0d6cbd1b210e43b3b2fa7b8b58be8a63ad06f05ca35037cc272be131e1a3a->leave($__internal_d0d0d6cbd1b210e43b3b2fa7b8b58be8a63ad06f05ca35037cc272be131e1a3a_prof);

        
        $__internal_5a0b8fb3b4854ecdd938004735144edb542d424b127b4e8784f57bab674a8822->leave($__internal_5a0b8fb3b4854ecdd938004735144edb542d424b127b4e8784f57bab674a8822_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/base.html.twig\" %}

{% block body %}
    <h1>Projects list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for project in projects %}
            <tr>
                <td><a href=\"{{ path('project_show', { 'id': project.id }) }}\">{{ project.id }}</a></td>
                <td>{{ project.name }}</td>
                <td>{{ project.description }}</td>
                <td>{{ project.price }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('project_show', { 'id': project.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('project_edit', { 'id': project.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('project_new') }}\">Create a new project</a>
        </li>
    </ul>
{% endblock %}
", "project/index.html.twig", "/opt/lampp/htdocs/freelanceur/app/Resources/views/project/index.html.twig");
    }
}
