<?php

/* base.html.twig */
class __TwigTemplate_791107f994ec1020f1b9b7f8c57ac789a7753a9e79b4c607f0f6854cf2a64c0d extends Twig_Template
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
        $__internal_56d5a12b57dd12cfbcabdd9e899e28c24e2b930135589c39ade1ea2c018c84ef = $this->env->getExtension("native_profiler");
        $__internal_56d5a12b57dd12cfbcabdd9e899e28c24e2b930135589c39ade1ea2c018c84ef->enter($__internal_56d5a12b57dd12cfbcabdd9e899e28c24e2b930135589c39ade1ea2c018c84ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_56d5a12b57dd12cfbcabdd9e899e28c24e2b930135589c39ade1ea2c018c84ef->leave($__internal_56d5a12b57dd12cfbcabdd9e899e28c24e2b930135589c39ade1ea2c018c84ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9a88c5a0e45054e0ca98816744518e762a3aec6eb65dfe1c0e244fdf7c2b52c = $this->env->getExtension("native_profiler");
        $__internal_f9a88c5a0e45054e0ca98816744518e762a3aec6eb65dfe1c0e244fdf7c2b52c->enter($__internal_f9a88c5a0e45054e0ca98816744518e762a3aec6eb65dfe1c0e244fdf7c2b52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f9a88c5a0e45054e0ca98816744518e762a3aec6eb65dfe1c0e244fdf7c2b52c->leave($__internal_f9a88c5a0e45054e0ca98816744518e762a3aec6eb65dfe1c0e244fdf7c2b52c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15d5c59ddd7fe849c398199bf6b2f18269b09165ae7a784c7f23f8ce4855c1a8 = $this->env->getExtension("native_profiler");
        $__internal_15d5c59ddd7fe849c398199bf6b2f18269b09165ae7a784c7f23f8ce4855c1a8->enter($__internal_15d5c59ddd7fe849c398199bf6b2f18269b09165ae7a784c7f23f8ce4855c1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_15d5c59ddd7fe849c398199bf6b2f18269b09165ae7a784c7f23f8ce4855c1a8->leave($__internal_15d5c59ddd7fe849c398199bf6b2f18269b09165ae7a784c7f23f8ce4855c1a8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b64b301f296b0d3df546405bbb0d3664cfc06bdb6c9e15e78af0fd92731ce7b = $this->env->getExtension("native_profiler");
        $__internal_1b64b301f296b0d3df546405bbb0d3664cfc06bdb6c9e15e78af0fd92731ce7b->enter($__internal_1b64b301f296b0d3df546405bbb0d3664cfc06bdb6c9e15e78af0fd92731ce7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1b64b301f296b0d3df546405bbb0d3664cfc06bdb6c9e15e78af0fd92731ce7b->leave($__internal_1b64b301f296b0d3df546405bbb0d3664cfc06bdb6c9e15e78af0fd92731ce7b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6569063e73ee246345322b738fd24f97f94c897640844757b761f929bd0bcc3 = $this->env->getExtension("native_profiler");
        $__internal_a6569063e73ee246345322b738fd24f97f94c897640844757b761f929bd0bcc3->enter($__internal_a6569063e73ee246345322b738fd24f97f94c897640844757b761f929bd0bcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a6569063e73ee246345322b738fd24f97f94c897640844757b761f929bd0bcc3->leave($__internal_a6569063e73ee246345322b738fd24f97f94c897640844757b761f929bd0bcc3_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
