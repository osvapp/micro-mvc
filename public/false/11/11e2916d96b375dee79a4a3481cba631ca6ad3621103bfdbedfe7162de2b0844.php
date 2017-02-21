<?php

/* layouts/default.twig */
class __TwigTemplate_56408e2ee24bc3e1b0bfed8a17d525762a519abec28313d59d21d0f6e4b93f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("partials/header.twig", "layouts/default.twig", 1)->display($context);
        // line 2
        echo "
        <div class=\"content\">
            ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 6
        echo "        </div>

";
        // line 8
        $this->loadTemplate("partials/footer.twig", "layouts/default.twig", 8)->display($context);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layouts/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  36 => 4,  32 => 8,  28 => 6,  26 => 4,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/default.twig", "/Users/greg/Documents/Dev/micro-mvc/app/views/layouts/default.twig");
    }
}
