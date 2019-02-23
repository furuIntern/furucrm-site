<?php

/* D:\Training\install-master/themes/demo/partials/site/top.htm */
class __TwigTemplate_7cc8ee6e438101c1bccc980a357e93c19d529628236b83e97b02f7fc3f6677f5 extends Twig_Template
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
        echo "<section class=\"section\" id=\"top\">
            <div class=\"hero\">
                <div id=\"particle-target\">
                    <div class=\"container-fluid\">
                        <div class=\"inner-container\">
                            <div class=\"logo-container\">
                                <h2 style=\"color:white;\">
                                    furuCRM";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("株式会社"));
        echo "<br />Let's dream with us
                                </h2>
                            </div>
                            <div class=\"hashTag-container\">
                                <div class=\"app-container\">
                                    <a href=\"#services\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("#アプリケーション開発"));
        echo "</a>
                                </div>
                                <div class=\"element\"><img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/designed_logo2.png");
        echo "\" alt=\"salesforce\" /></div>
                                <div class=\"app-container alt\">
                                    <a href=\"#services\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("#システム間連携開発"));
        echo "</a>
                                </div>
                            </div>
                            <div class=\"tagLine-container\">
                                <p style=\"margin:0;\">
                                     ";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("私たちは日々進化する技術を学び、取り入れ、磨き続けることで、ベトナムオフショア開発の価値上と"));
        echo "
                                     <br class=\"visible_mobile\"/>";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("競争優位を支えていく役割を担っています。"));
        echo "
                                </p>
                                <p style=\"margin:0;\">
                                    ";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("人々の役に立ってこそ、テクノロジーは光り輝く。これからも顧客や社会に対して新しい価値を提供して"));
        echo "
                                    <br class=\"visible_mobile\"/>";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("いく存在でありたいと思っています。"));
        echo "
                                </p>
                            </div>
                        </div>
                        <div class=\"arrow-container\">
                            <a href=\"#about\"><span></span></a>
                        </div>
                    </div>
                </div>
                <!-- nav -->
                <nav id=\"nav\" class=\"going-up\">
                    <div class=\"fixed-logo\"><h2 style=\"color:white;\">furuCRM Inc.</h2></div>
                    <div class=\"container\">
                        <div class=\"nav-content\">
                            <ul>
                            <li class=\"active\">
                                <a href=\"#about\" class=\"special\">
                                <span class=\"type\">About us</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#services\" class=\"special\">
                                <span class=\"type\">Services</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#team\" class=\"special\">
                                <span class=\"type\">Leadership</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#contact\" class=\"special\">
                                <span class=\"type\">Contact</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/blog\" class=\"special\">
                                <span class=\"type\">Blog Me</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/category/recruitment\" class=\"special\">
                                <span class=\"type\">RECRUIT ME</span>
                                </a>
                            </li>
                            <li class='change-lang'>
                                ";
        // line 73
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 74
        echo "                            </li>
                            <span class=\"active-state\"></span>
                            </ul>
                            
                        </div>
                    </div>
                </nav>
                <nav class=\"alt\">
                    <button class=\"hamburger pull-left\" type=\"button\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- <div class=\"hamburger mobile-logo\" style=\"width: 90px;height: 90px;float: left;\">
                        <img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/bot-logo-mobile.svg");
        echo "\" alt=\"bot logo\">
                    </div> -->
                    <div class=\"salesforce-mobile\">
                        <img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/designed_logo2.png");
        echo "\" alt=\"salesforce\" />
                    </div>
                    <button class=\"hamburger pull-right\" type=\"button\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </nav>
            </div>
        </section>";
    }

    public function getTemplateName()
    {
        return "D:\\Training\\install-master/themes/demo/partials/site/top.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 91,  141 => 88,  125 => 74,  121 => 73,  72 => 27,  68 => 26,  62 => 23,  58 => 22,  50 => 17,  45 => 15,  40 => 13,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section\" id=\"top\">
            <div class=\"hero\">
                <div id=\"particle-target\">
                    <div class=\"container-fluid\">
                        <div class=\"inner-container\">
                            <div class=\"logo-container\">
                                <h2 style=\"color:white;\">
                                    furuCRM{{'株式会社'|_}}<br />Let's dream with us
                                </h2>
                            </div>
                            <div class=\"hashTag-container\">
                                <div class=\"app-container\">
                                    <a href=\"#services\">{{'#アプリケーション開発'|_}}</a>
                                </div>
                                <div class=\"element\"><img src=\"{{ 'assets/images/designed_logo2.png'|theme }}\" alt=\"salesforce\" /></div>
                                <div class=\"app-container alt\">
                                    <a href=\"#services\">{{'#システム間連携開発'|_}}</a>
                                </div>
                            </div>
                            <div class=\"tagLine-container\">
                                <p style=\"margin:0;\">
                                     {{'私たちは日々進化する技術を学び、取り入れ、磨き続けることで、ベトナムオフショア開発の価値上と'|_}}
                                     <br class=\"visible_mobile\"/>{{'競争優位を支えていく役割を担っています。'|_}}
                                </p>
                                <p style=\"margin:0;\">
                                    {{'人々の役に立ってこそ、テクノロジーは光り輝く。これからも顧客や社会に対して新しい価値を提供して'|_}}
                                    <br class=\"visible_mobile\"/>{{'いく存在でありたいと思っています。'|_}}
                                </p>
                            </div>
                        </div>
                        <div class=\"arrow-container\">
                            <a href=\"#about\"><span></span></a>
                        </div>
                    </div>
                </div>
                <!-- nav -->
                <nav id=\"nav\" class=\"going-up\">
                    <div class=\"fixed-logo\"><h2 style=\"color:white;\">furuCRM Inc.</h2></div>
                    <div class=\"container\">
                        <div class=\"nav-content\">
                            <ul>
                            <li class=\"active\">
                                <a href=\"#about\" class=\"special\">
                                <span class=\"type\">About us</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#services\" class=\"special\">
                                <span class=\"type\">Services</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#team\" class=\"special\">
                                <span class=\"type\">Leadership</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#contact\" class=\"special\">
                                <span class=\"type\">Contact</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/blog\" class=\"special\">
                                <span class=\"type\">Blog Me</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/category/recruitment\" class=\"special\">
                                <span class=\"type\">RECRUIT ME</span>
                                </a>
                            </li>
                            <li class='change-lang'>
                                {% component 'localePicker' %}
                            </li>
                            <span class=\"active-state\"></span>
                            </ul>
                            
                        </div>
                    </div>
                </nav>
                <nav class=\"alt\">
                    <button class=\"hamburger pull-left\" type=\"button\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- <div class=\"hamburger mobile-logo\" style=\"width: 90px;height: 90px;float: left;\">
                        <img src=\"{{ 'assets/images/bot-logo-mobile.svg'|theme }}\" alt=\"bot logo\">
                    </div> -->
                    <div class=\"salesforce-mobile\">
                        <img src=\"{{ 'assets/images/designed_logo2.png'|theme }}\" alt=\"salesforce\" />
                    </div>
                    <button class=\"hamburger pull-right\" type=\"button\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </nav>
            </div>
        </section>", "D:\\Training\\install-master/themes/demo/partials/site/top.htm", "");
    }
}
