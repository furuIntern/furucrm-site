<?php

/* D:\Training\install-master/themes/demo/layouts/default.htm */
class __TwigTemplate_41056d372f8b96f8a6e55850a21e70ed93ac530449aa0b5c89568bda026441cf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"google-site-verification\" content=\"4SnUlvGp-ZkN4dMGPdilOMoGYcf9wwkQxMdvVbfbDMI\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/bootstrap/css/bootstrap.min.css");
        echo "\" type=\"text/css\" >
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/fontawesome/css/fontawesome-all.min.css");
        echo "\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600\" rel=\"stylesheet\">
\t    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.min.css");
        echo "\" type=\"text/css\">
        ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleTracker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "    </head>
    <body>
        <div id=\"fb-root\"></div>
        <script async defer src=\"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2\"></script>
        ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/side_manu_mobile"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "        
        ";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 24
        echo "
        <!-- Scripts -->
        <script>
            window.\$ctrlData = window.\$ctrlData || {};
            \$ctrlData.pneumonic_blue = \"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pneumonic-blue.png");
        echo "\";
        </script>
        <script src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/jquery.min.js");
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/popper.min.js");
        echo "\"></script>
        <script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/bootstrap/js/bootstrap.bundle.min.js");
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/custom.min.js");
        echo "\" type=\"text/javascript\"></script>
        ";
        // line 34
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 35
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 36
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\Training\\install-master/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 36,  125 => 35,  110 => 34,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  89 => 28,  83 => 24,  81 => 23,  78 => 22,  74 => 21,  68 => 17,  63 => 16,  60 => 15,  56 => 14,  51 => 12,  47 => 11,  43 => 10,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"google-site-verification\" content=\"4SnUlvGp-ZkN4dMGPdilOMoGYcf9wwkQxMdvVbfbDMI\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon.ico'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/vendors/bootstrap/css/bootstrap.min.css'|theme }}\" type=\"text/css\" >
        <link rel=\"stylesheet\" href=\"{{ 'assets/vendors/fontawesome/css/fontawesome-all.min.css'|theme }}\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600\" rel=\"stylesheet\">
\t    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.min.css'|theme }}\" type=\"text/css\">
        {% styles %}
        {% component 'googleTracker' %}
    </head>
    <body>
        <div id=\"fb-root\"></div>
        <script async defer src=\"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2\"></script>
        {% partial 'site/side_manu_mobile' %}
        
        {% page %}

        <!-- Scripts -->
        <script>
            window.\$ctrlData = window.\$ctrlData || {};
            \$ctrlData.pneumonic_blue = \"{{ 'assets/images/pneumonic-blue.png'|theme}}\";
        </script>
        <script src=\"{{ 'assets/vendors/jquery.min.js'|theme }}\" type=\"text/javascript\"></script>
        <script src=\"{{ 'assets/vendors/popper.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendors/bootstrap/js/bootstrap.bundle.min.js'|theme }}\" type=\"text/javascript\"></script>
        <script src=\"{{ 'assets/javascript/custom.min.js'|theme }}\" type=\"text/javascript\"></script>
        {% framework extras %}
        {% scripts %}
    </body>
</html>", "D:\\Training\\install-master/themes/demo/layouts/default.htm", "");
    }
}
