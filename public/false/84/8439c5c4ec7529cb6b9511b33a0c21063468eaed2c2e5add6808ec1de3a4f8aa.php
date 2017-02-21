<?php

/* partials/header.twig */
class __TwigTemplate_67d489197d6aa8ad9486233aaa2af982f7c6b2477af83cf9212024647522bc4d extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        <title>";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (($context["title"] ?? null)) : ("")), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"\" />

        ";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "minify", array()), "stylesheet", array())) {
            // line 12
            echo "            <link rel=\"stylesheet\" href=\"\">
        ";
        } else {
            // line 14
            echo "            <link rel=\"stylesheet\" href=\"\">
        ";
        }
        // line 16
        echo "    </head>

    <body>
        <header>
            <h1>Hello World</h1>
        </header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  40 => 14,  36 => 12,  34 => 11,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/header.twig", "/Users/greg/Documents/Dev/micro-mvc/app/views/partials/header.twig");
    }
}
