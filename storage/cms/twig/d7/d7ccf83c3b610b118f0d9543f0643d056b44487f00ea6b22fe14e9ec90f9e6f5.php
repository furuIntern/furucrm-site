<?php

/* D:\Training\install-master/plugins/rainlab/googleanalytics/components/tracker/default.htm */
class __TwigTemplate_126f51a40a5375eaf7ed0699909a4734b1b1eed968e42fd5c7baaf9265295604 extends Twig_Template
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
        echo "<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "trackingId", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "domainName", array()), "html", null, true);
        echo "');
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "forceSSL", array())) {
            echo "ga('set', 'forceSSL', true);";
        }
        // line 9
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "anonymizeIp", array())) {
            echo "ga('set', 'anonymizeIp', true);";
        }
        // line 10
        echo "    ga('send', 'pageview');
</script>
";
    }

    public function getTemplateName()
    {
        return "D:\\Training\\install-master/plugins/rainlab/googleanalytics/components/tracker/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  41 => 9,  37 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '{{ __SELF__.trackingId }}', '{{ __SELF__.domainName }}');
    {% if __SELF__.forceSSL %}ga('set', 'forceSSL', true);{% endif %}
    {% if __SELF__.anonymizeIp %}ga('set', 'anonymizeIp', true);{% endif %}
    ga('send', 'pageview');
</script>
", "D:\\Training\\install-master/plugins/rainlab/googleanalytics/components/tracker/default.htm", "");
    }
}
