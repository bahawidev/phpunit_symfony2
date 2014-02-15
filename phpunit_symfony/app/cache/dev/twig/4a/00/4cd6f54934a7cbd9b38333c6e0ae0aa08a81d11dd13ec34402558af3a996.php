<?php

/* testBundle:Default:index.html.twig */
class __TwigTemplate_4a004cd6f54934a7cbd9b38333c6e0ae0aa08a81d11dd13ec34402558af3a996 extends Twig_Template
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
        echo "
<html>
    <body>

    <center>
        <fieldset>
            <legend><h1>PHPUnit web tests</h1></legend>
            <a href=\"#\" id=\"run\">
                Run tests
            </a>
            <div id=\"output\"></div>
        </fieldset>


    </center>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" ></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {



            \$('#run').click(function() {

                \$.ajax({
                    type: 'POST',
                    url: \"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("test_ajax");
        echo "\",
                    success: function(data) {

                        \$('#output').html(data);
                    }
                });

            });

        });
    </script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "testBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 26,  19 => 1,);
    }
}
