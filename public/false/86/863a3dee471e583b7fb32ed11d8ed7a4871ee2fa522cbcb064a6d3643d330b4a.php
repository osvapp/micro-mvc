<?php

/* partials/footer.twig */
class __TwigTemplate_ed997df969c5d00b4c304982eb27a3e9d08bab7237bf5e5c511570ae4f6a8d86 extends Twig_Template
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
        echo "        <footer>
            <p>Copyright 2017</p>
        </footer>

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js\"></script>
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "minify", array()), "javascript", array())) {
            // line 7
            echo "            <script src=\"\"></script>
        ";
        } else {
            // line 9
            echo "            <script src=\"\"></script>
        ";
        }
        // line 11
        echo "    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  32 => 9,  28 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/footer.twig", "/Users/greg/Documents/Dev/micro-mvc/app/views/partials/footer.twig");
    }
}
