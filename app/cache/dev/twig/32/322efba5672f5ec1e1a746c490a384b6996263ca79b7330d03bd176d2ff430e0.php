<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d8c2e2fee12701d5347b439d88611582ddddc1f1b67cb27e85a862fe59d00974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56b22a7e882afdd145943386f1906612752612179fd1a567ae927aaeb0e8e527 = $this->env->getExtension("native_profiler");
        $__internal_56b22a7e882afdd145943386f1906612752612179fd1a567ae927aaeb0e8e527->enter($__internal_56b22a7e882afdd145943386f1906612752612179fd1a567ae927aaeb0e8e527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b22a7e882afdd145943386f1906612752612179fd1a567ae927aaeb0e8e527->leave($__internal_56b22a7e882afdd145943386f1906612752612179fd1a567ae927aaeb0e8e527_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7517e45bdf1ca2f86fde3a94533285e7b47f4579196f4093628634a2ddac40ae = $this->env->getExtension("native_profiler");
        $__internal_7517e45bdf1ca2f86fde3a94533285e7b47f4579196f4093628634a2ddac40ae->enter($__internal_7517e45bdf1ca2f86fde3a94533285e7b47f4579196f4093628634a2ddac40ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7517e45bdf1ca2f86fde3a94533285e7b47f4579196f4093628634a2ddac40ae->leave($__internal_7517e45bdf1ca2f86fde3a94533285e7b47f4579196f4093628634a2ddac40ae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa7798165ac95ba894b994b28724f63df35b3fb76ee6c9c8ddcabefbf94527d0 = $this->env->getExtension("native_profiler");
        $__internal_aa7798165ac95ba894b994b28724f63df35b3fb76ee6c9c8ddcabefbf94527d0->enter($__internal_aa7798165ac95ba894b994b28724f63df35b3fb76ee6c9c8ddcabefbf94527d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa7798165ac95ba894b994b28724f63df35b3fb76ee6c9c8ddcabefbf94527d0->leave($__internal_aa7798165ac95ba894b994b28724f63df35b3fb76ee6c9c8ddcabefbf94527d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_085482e90630171abe12e46fba9501c615c5c5a729962b67e02d17c779657254 = $this->env->getExtension("native_profiler");
        $__internal_085482e90630171abe12e46fba9501c615c5c5a729962b67e02d17c779657254->enter($__internal_085482e90630171abe12e46fba9501c615c5c5a729962b67e02d17c779657254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_085482e90630171abe12e46fba9501c615c5c5a729962b67e02d17c779657254->leave($__internal_085482e90630171abe12e46fba9501c615c5c5a729962b67e02d17c779657254_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
