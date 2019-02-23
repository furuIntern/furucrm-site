<?php

/* D:\Training\install-master/themes/demo/pages/home.htm */
class __TwigTemplate_dea9499a49fcc0ea2914e47d343980cb008d7baf80ada9e8eb142771ecf9ebcd extends Twig_Template
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
        echo "<main>
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/top"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    <section class=\"sectionalt\" id=\"about\">
        <div class=\"container\">
            <div class=\"left-container\">
                <h1>About Us</h1>
                <p>
";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("私たちは、Salesforceの大規模なISV、 SIベンダーと提携しましてアプリケーション開発、カスタマイズ、連携開発、プラットフォームのエキスパートサービスを提供しております。
                    Salesforce, Heroku, AWS, GCPプラットフォームに深い専門知識を活用して柔軟で拡張性の高いし開発費用削減のソリューションを日本、オーストラリア、ベトナムのお客様に提供します。"));
        // line 9
        echo "
                </p>
            </div>
            <div class=\"right-container\">
                <ul>
                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar \" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%\"></div>
                        </div>
                        <div class=\"desc-container\">
                            <span>10+ <span>Happy Customers</span></span>
                        </div>
                    </li>
                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 98%\"></div>
                        </div>
                        <div class=\"desc-container\">
                            <span>30+ <span>Projects</span></span>
                        </div>
                    </li>
                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 94%\"></div>
                        </div>
                        <div class=\"desc-container\">
                            <span>9+ <span>appexchange Apps</span></span>
                        </div>
                    </li>
                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\"></div>
                        </div>
                        <div class=\"desc-container\">
                            <span>10+ <span>App Cloud Experts</span></span>
                        </div>
                    </li>
                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\"></div>
                        </div>
                        <div class=\"desc-container\">
                            <span>8+ <span>Certified Specialist</span></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class=\"services-container\" id=\"services\">
        <div class=\"service-header\">
            <h1>Our Services</h1>
            <ul class=\"mainservices\">
                <li><a href=\"javascript:void(0)\" style=\"font-size:15px\" data-toggle=\"modal\" data-target=\"#firstModal\">AppExchange";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("化支援サービス"));
        echo "</a></li>
                <li><a href=\"javascript:void(0)\" style=\"font-size:15px\" data-toggle=\"modal\" data-target=\"#secondModal\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("受託開発"));
        echo "</a></li>
                <li><a href=\"javascript:void(0)\" style=\"font-size:15px\" data-toggle=\"modal\" data-target=\"#thirdModal\">";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("ラボ型開発"));
        echo "</a></li>
            </ul>
        </div>
        <div class=\"services-inner\">
            <div class=\"container\">
                <div class=\"services-container-inner first\" >
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/6.png");
        echo "\" alt=\"service\" />
                    </div>
                </div>
                <div class=\"services-container-inner second\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/5.png");
        echo "\" alt=\"製品開発\" />
                    </div>
                    <div class=\"salesforce-block-text\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("製品開発"));
        echo "</div>
                </div>
                <div class=\"services-container-inner third\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/1.png");
        echo "\" alt=\"モビリティ\"/>
                    </div>
                    <div class=\"salesforce-block-text\">";
        // line 84
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("モビリティ"));
        echo "</div>
                </div>
                <div class=\"services-container-inner forth\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/2.png");
        echo "\" alt=\"システム間連携開発\"/>
                    </div>
                    <div class=\"salesforce-block-text\">";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("システム間連携開発"));
        echo "</div>
                </div>
                <div class=\"services-container-inner fifth\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/3.png");
        echo "\" alt=\"ライトニングの開発\"/>
                    </div>
                    <div class=\"salesforce-block-text\">";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("ライトニングの開発"));
        echo "</div>
                </div>
                <div class=\"services-container-inner sixth\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-opensource.png");
        echo "\" />
                    </div>
                    <!-- <div class=\"salesforce-block-text\">ライトニングのデザイン</div> -->
                </div>
                <div class=\"services-container-inner seventh\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/7.png");
        echo "\" alt=\"セキュリティレビュー\"/>
                    </div>
                    <div class=\"salesforce-block-text\">";
        // line 108
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("セキュリティレビュー"));
        echo "</div>
                </div>
                <div class=\"first-rode\"></div>
                <div class=\"second-rode\"></div>
                <div class=\"third-rode\"></div>
                <div class=\"forth-rode\"></div>
                <div class=\"sixth-rode\"></div>
                <div class=\"seventh-rode\"></div>
                <div class=\"eighth-rode\"></div>
                <div class=\"ninth-rode\"></div>
                <div class=\"tenth-rode\"></div>
                <div class=\"eleventh-rode\"></div>
                <div class=\"twelveth-rode\"></div>
                <div class=\"thirteenth-rode\"></div>
            </div>
        </div>
        <div class=\"services-inner\">
            <div class=\"container\">
                <div class=\"services-container-inner first\" >
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/6.png");
        echo "\" alt=\"service\" />
                    </div>
                </div>
                <div class=\"services-container-inner second\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/5.png");
        echo "\" alt=\"製品開発\" />
                    </div>
                    <div class=\"salesforce-block-text\">";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("製品開発"));
        echo "</div>
                </div>
                <div class=\"services-container-inner third\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/1.png");
        echo "\" alt=\"モビリティ\"/>
                    </div>
                    <div class=\"salesforce-block-text\">";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("モビリティ"));
        echo "</div>
                </div>
                <div class=\"services-container-inner forth\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/2.png");
        echo "\" alt=\"システム間連携開発\"/>
                    </div>
                    <div class=\"salesforce-block-text\">";
        // line 147
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("システム間連携開発"));
        echo "</div>
                </div>
                <div class=\"services-container-inner fifth\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/3.png");
        echo "\" alt=\"ライトニングの開発\"/>
                    </div>
                    <div class=\"salesforce-block-text\">";
        // line 153
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("ライトニングの開発"));
        echo "</div>
                </div>
                <div class=\"services-container-inner sixth icon_opensource\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icon-opensource.png");
        echo "\"/>
                    </div>
                    <!-- <div class=\"salesforce-block-text\">ライトニングのデザイン</div> -->
                </div>
                <div class=\"services-container-inner seventh\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/7.png");
        echo "\" alt=\"セキュリティレビュー\"/>
                    </div>
                    <div class=\"salesforce-block-text\">";
        // line 165
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("セキュリティレビュー"));
        echo "</div>
                </div>
                <div class=\"first-rode\"></div>
                <div class=\"second-rode\"></div>
                <div class=\"third-rode\"></div>
                <div class=\"forth-rode\"></div>
                <div class=\"sixth-rode\"></div>
                <div class=\"seventh-rode\"></div>
                <div class=\"eighth-rode\"></div>
                <div class=\"ninth-rode\"></div>
                <div class=\"tenth-rode\"></div>
                <div class=\"eleventh-rode\"></div>
                <div class=\"twelveth-rode\"></div>
                <div class=\"thirteenth-rode\"></div>
            </div>
        </div>
    </section>
    <section class=\"about-section\" id=\"team\">
        <div class=\"about-container-body\">
            <h3>Our Leadership</h3>
            <div class=\"about-crew-container\">
                <div class=\"about-crew-block\" >
                    <div class=\"top-crew-block\">
                        <div class=\"dashed-border\"></div>
                        <div class=\"flipper\">
                            <div class=\"front\"></div>
                            <div class=\"back\">
                                <ul>
                                    <li>Chief Executive Officer</li>
                                    <li><a href=\"https://www.linkedin.com/in/hoang-kagawa-24b7b16b/\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"bottom-crew-block\">
                        <div class=\"title\">
                            <span class=\"name\">Kagawa Hoang</span>
                        </div>
                    </div>
                </div>
                <div class=\"about-crew-block\" >
                    <div class=\"top-crew-block\">
                        <div class=\"dashed-border\"></div>
                        <div class=\"flipper\">
                            <div class=\"front team3\"></div>
                            <div class=\"back\">
                                <ul>
                                    <li>Sales Engineer</li>
                                   <!-- <li><a href=\"https://www.linkedin.com/in/tran-thanh-191870bb/\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"bottom-crew-block\">
                        <div class=\"title\">
                            <span class=\"name\">Tran Minh</span>
                        </div>
                    </div>
                </div>
                <div class=\"about-crew-block\" >
                    <div class=\"top-crew-block\">
                        <div class=\"dashed-border\"></div>
                        <div class=\"flipper\">
                            <div class=\"front team2\"></div>
                            <div class=\"back\">
                                <ul>
                                    <li>Salesforce Platform Specialist</li>
                                    <li><a href=\"https://www.linkedin.com/in/dinh-minh-tam-164726138/\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"bottom-crew-block\">
                        <div class=\"title\">
                            <span class=\"name\">Dinh Tam</span>
                        </div>
                    </div>
                </div>
                <div class=\"about-crew-block\" >
                    <div class=\"top-crew-block\">
                        <div class=\"dashed-border\"></div>
                        <div class=\"flipper\">
                            <div class=\"front team4\"></div>
                            <div class=\"back\">
                                <ul>
                                    <li>Heroku Platform Specialist</li>
                                    <li><a href=\"https://www.linkedin.com/in/le-anh-58241a174/\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"bottom-crew-block\">
                        <div class=\"title\">
                            <span class=\"name\">Le Anh</span>
                        </div>
                    </div>
                </div>
                <div class=\"about-crew-block\" >
                    <div class=\"top-crew-block\">
                        <div class=\"dashed-border\"></div>
                        <div class=\"flipper\">
                            <div class=\"front team5\"></div>
                            <div class=\"back\">
                                <ul>
                                    <li>Google Clound PlatForm Specialist</li>
                                    <li><a href=\"https://www.linkedin.com/in/huy-đỗ-quang-287733151\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"bottom-crew-block\">
                        <div class=\"title\">
                            <span class=\"name\">Do Huy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"bot_client-container\" id=\"customers\">
        <div class=\"bot_client-header\">Developement Partners</div>
        <div class=\"customer-logos container\">
            <div class=\"customer-img-container\"><img src=\"";
        // line 287
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image7.png");
        echo "\" alt=\"FELL\"></div>
            <div class=\"customer-img-container\"><img src=\"";
        // line 288
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image8.png");
        echo "\" alt=\"DevSamurai\"></div>
            <div class=\"customer-img-container\"><img src=\"";
        // line 289
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image9.png");
        echo "\" alt=\"Mulodo\"></div>
            <div class=\"customer-img-container\"><img src=\"";
        // line 290
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image10.png");
        echo "\" alt=\"EarlyWell\"></div>
            <div class=\"customer-img-container\"><img src=\"";
        // line 291
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image11.png");
        echo "\" alt=\"MSC\"></div>
            <div class=\"customer-img-container\"><img src=\"";
        // line 292
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image12.png");
        echo "\" alt=\"clickDeploy.io\"></div>
        </div>
    </section>
    <section class=\"bot_footer-outer\" id=\"contact\">
        <div class=\"bot_footer\" >
            <div class=\"container\">
                <div class=\"bot-left\">
                    <div class=\"left-container\" >
                        <h1>Contact Us</h1>
                        <span class=\"bot_footer-head\">Japan</span>
                        <span class=\"body\" >
                            ";
        // line 303
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("本社： 千葉県柏市常盤台16-70"));
        echo "
                            <br/>
                            ";
        // line 305
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("駐在員事務所：東京都品川区北品川１丁目１０−２　ピラミッド品川ビル4F"));
        echo "
                        </span>
                        <span class=\"bot_footer-head\">Vietnam</span>
                        <span class=\"body\">  
                            60/16C1 Lam Van Ben Street, Tan Kieng Ward, District 7, Ho Chi Minh City, Viet Nam
                        </span>
                        <span class=\"bot_footer-head\">Australia</span>
                        <span class=\"body\">  
                            Coming Soon
                        </span>
                        <ul class=\"footer-info\"><li><a href=\"mailto:contact@furucrm.com\">contact@furucrm.com</a></li><li><a href=\"tel:+8108040953562\">(+81)080-4095-3562</a></li></ul>
                        <ul>
                            <li><a href=\"https://www.facebook.com/furucrm/\" class=\"facebook\"  target=\"blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
                            <li><a href=\"#\"  target=\"blank\"><i class=\"fab fa-twitter\"></i></a></li>
                            <li><a href=\"#\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                        </ul>
                        ";
        // line 321
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("genericForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "    
                        <!-- <div class=\"img\">
                            <script type=\"text/javascript\" src=\"//seal.securecore.co.jp/js/ss_150-58.js\"></script>
                            <a href=\"https://seal.securecore.co.jp/profile.php?p1=www.furucrm.com\" onclick=\"return op();\"><img src=\"https://seal.securecore.co.jp/seal.php?p1=www.furucrm.com&amp;p2=150-58\" width=\"150\" height=\"58\"></a>
                            <noscript><img src=\"//seal.securecore.co.jp/image/noscript_150x58.png\"></noscript>
                        </div> -->
                        <div style=\"margin:5% 0\"></div>
                        <div class=\"fb-page\" data-href=\"https://www.facebook.com/furucrm\" data-tabs=\"timeline\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/furucrm\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/furucrm\">Furucrm株式会社</a></blockquote></div>
                        <span class=\"copyright\">
                                &copy; 2018 by Furu Team.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div class=\"modal\" id=\"firstModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">AppExchange化支援サービス</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        <div class=\"modal-body service-popupBody\">
            <ul>
                <li>
                   ";
        // line 350
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("テクニカルコンサルティング"));
        echo "
                </li>
                <li>
                    ";
        // line 353
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("製品開発支援"));
        echo "
                </li>
                <li>
                    ";
        // line 356
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("製品保守"));
        echo "
                </li>
            </ul>
        </div>
        </div>
    </div>
</div>
<div class=\"modal \" id=\"secondModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">受託開発</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        <div class=\"modal-body service-popupBody\">
            <ul>
                <li>
                    ";
        // line 375
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("お客様のWebサービスやスマホアプリを新しくつくります。企画段階からクライアントと一緒に考え、システム設計・開発、デザイン設計・制作を行い、世の中に生み出します。"));
        echo "
                </li>
                <li>
                    ";
        // line 378
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("主な開発言語：PHP, Java, Ruby, NodeJs, Apex, AngularJs,Vue Js, Jquery"));
        echo "
                </li>
            </ul>
        </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"thirdModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">ラボ型開発</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        <div class=\"modal-body service-popupBody\">
            <ul>
                <li>
                    ";
        // line 397
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("お客様の既存Webサービスやスマホアプリを、継続してブラッシュアップしていきます。ラボ型開発というスタイルで、ベトナムにいるエンジニアが、クライアントのチームの一員として、日々変化する競争環境に対応して機能追加や改善を行います。"));
        echo "
                </li>
                <li>
                    ";
        // line 400
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("主な開発言語：PHP, Java, Ruby, NodeJs, Apex, AngularJs,Vue Js, Jquery"));
        echo "
                </li>
            </ul>
        </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"forthModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">QA Services</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body service-popupBody\">
                <ul>
                    <li>
                        We offer independent end-to-end validation service. We help ISVs to perform UAT or become their exclusive qa team.
                    </li>
                    <li>
                        <span>Test Automation : </span>
                        We are strong believers that automation builds a mature product. We have seamlessly been able to perform test automation on apps on App Cloud. We offer both on premise and cloud test automation solutions
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"fifthModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Lightning Design</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body service-popupBody\">
                <ul>
                    <li>
                        <span>Lightning UI : </span>
                        As one of the early adopters of Lightning Design Systems, we have built numerous apps adhering to Salesforce’s Lightning Ready motto.  You can leverage our robust adaptability framework that has been built over years of experience on the App Cloud platform. Our framework seamlessly transforms your classic aloha based application to lightning UI within no time
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"sixthModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Security Review & App Listing</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body service-popupBody\">
                <ul>
                    <li>
                        <span>Success Rate : </span>
                        With a dedicated team following a matured in-house stringent review process, we ensure the apps pass the security review in a timely manner and list them successfully
                    </li>
                    <li>
                        <span>Review Process : </span>
                        Drawing experience from 5 years of appexchange listing, we have meticulously developed proprietary review processes. These guidelines maximize our success
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\Training\\install-master/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 400,  555 => 397,  533 => 378,  527 => 375,  505 => 356,  499 => 353,  493 => 350,  459 => 321,  440 => 305,  435 => 303,  421 => 292,  417 => 291,  413 => 290,  409 => 289,  405 => 288,  401 => 287,  276 => 165,  271 => 163,  262 => 157,  255 => 153,  250 => 151,  243 => 147,  238 => 145,  231 => 141,  226 => 139,  219 => 135,  214 => 133,  206 => 128,  183 => 108,  178 => 106,  169 => 100,  162 => 96,  157 => 94,  150 => 90,  145 => 88,  138 => 84,  133 => 82,  126 => 78,  121 => 76,  113 => 71,  103 => 64,  99 => 63,  95 => 62,  40 => 9,  37 => 8,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<main>
    {% partial 'site/top' %}
    <section class=\"sectionalt\" id=\"about\">
        <div class=\"container\">
            <div class=\"left-container\">
                <h1>About Us</h1>
                <p>
{{'私たちは、Salesforceの大規模なISV、 SIベンダーと提携しましてアプリケーション開発、カスタマイズ、連携開発、プラットフォームのエキスパートサービスを提供しております。
                    Salesforce, Heroku, AWS, GCPプラットフォームに深い専門知識を活用して柔軟で拡張性の高いし開発費用削減のソリューションを日本、オーストラリア、ベトナムのお客様に提供します。'|_}}
                </p>
            </div>
            <div class=\"right-container\">
                <ul>
                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar \" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%\"></div>
                        </div>
                        <div class=\"desc-container\">
                            <span>10+ <span>Happy Customers</span></span>
                        </div>
                    </li>
                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 98%\"></div>
                        </div>
                        <div class=\"desc-container\">
                            <span>30+ <span>Projects</span></span>
                        </div>
                    </li>
                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 94%\"></div>
                        </div>
                        <div class=\"desc-container\">
                            <span>9+ <span>appexchange Apps</span></span>
                        </div>
                    </li>
                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\"></div>
                        </div>
                        <div class=\"desc-container\">
                            <span>10+ <span>App Cloud Experts</span></span>
                        </div>
                    </li>
                    <li>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\"></div>
                        </div>
                        <div class=\"desc-container\">
                            <span>8+ <span>Certified Specialist</span></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class=\"services-container\" id=\"services\">
        <div class=\"service-header\">
            <h1>Our Services</h1>
            <ul class=\"mainservices\">
                <li><a href=\"javascript:void(0)\" style=\"font-size:15px\" data-toggle=\"modal\" data-target=\"#firstModal\">AppExchange{{'化支援サービス'|_}}</a></li>
                <li><a href=\"javascript:void(0)\" style=\"font-size:15px\" data-toggle=\"modal\" data-target=\"#secondModal\">{{'受託開発'|_}}</a></li>
                <li><a href=\"javascript:void(0)\" style=\"font-size:15px\" data-toggle=\"modal\" data-target=\"#thirdModal\">{{'ラボ型開発'|_}}</a></li>
            </ul>
        </div>
        <div class=\"services-inner\">
            <div class=\"container\">
                <div class=\"services-container-inner first\" >
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/6.png'|theme }}\" alt=\"service\" />
                    </div>
                </div>
                <div class=\"services-container-inner second\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/5.png'|theme }}\" alt=\"製品開発\" />
                    </div>
                    <div class=\"salesforce-block-text\">{{'製品開発'|_}}</div>
                </div>
                <div class=\"services-container-inner third\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/1.png'|theme }}\" alt=\"モビリティ\"/>
                    </div>
                    <div class=\"salesforce-block-text\">{{'モビリティ'|_}}</div>
                </div>
                <div class=\"services-container-inner forth\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/2.png'|theme }}\" alt=\"システム間連携開発\"/>
                    </div>
                    <div class=\"salesforce-block-text\">{{'システム間連携開発'|_}}</div>
                </div>
                <div class=\"services-container-inner fifth\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/3.png'|theme }}\" alt=\"ライトニングの開発\"/>
                    </div>
                    <div class=\"salesforce-block-text\">{{'ライトニングの開発'|_}}</div>
                </div>
                <div class=\"services-container-inner sixth\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/icon-opensource.png'|theme }}\" />
                    </div>
                    <!-- <div class=\"salesforce-block-text\">ライトニングのデザイン</div> -->
                </div>
                <div class=\"services-container-inner seventh\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/7.png'|theme }}\" alt=\"セキュリティレビュー\"/>
                    </div>
                    <div class=\"salesforce-block-text\">{{'セキュリティレビュー'|_}}</div>
                </div>
                <div class=\"first-rode\"></div>
                <div class=\"second-rode\"></div>
                <div class=\"third-rode\"></div>
                <div class=\"forth-rode\"></div>
                <div class=\"sixth-rode\"></div>
                <div class=\"seventh-rode\"></div>
                <div class=\"eighth-rode\"></div>
                <div class=\"ninth-rode\"></div>
                <div class=\"tenth-rode\"></div>
                <div class=\"eleventh-rode\"></div>
                <div class=\"twelveth-rode\"></div>
                <div class=\"thirteenth-rode\"></div>
            </div>
        </div>
        <div class=\"services-inner\">
            <div class=\"container\">
                <div class=\"services-container-inner first\" >
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/6.png'|theme }}\" alt=\"service\" />
                    </div>
                </div>
                <div class=\"services-container-inner second\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/5.png'|theme }}\" alt=\"製品開発\" />
                    </div>
                    <div class=\"salesforce-block-text\">{{'製品開発'|_}}</div>
                </div>
                <div class=\"services-container-inner third\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/1.png'|theme }}\" alt=\"モビリティ\"/>
                    </div>
                    <div class=\"salesforce-block-text\">{{'モビリティ'|_}}</div>
                </div>
                <div class=\"services-container-inner forth\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/2.png'|theme }}\" alt=\"システム間連携開発\"/>
                    </div>
                    <div class=\"salesforce-block-text\">{{'システム間連携開発'|_}}</div>
                </div>
                <div class=\"services-container-inner fifth\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/3.png'|theme }}\" alt=\"ライトニングの開発\"/>
                    </div>
                    <div class=\"salesforce-block-text\">{{'ライトニングの開発'|_}}</div>
                </div>
                <div class=\"services-container-inner sixth icon_opensource\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/icon-opensource.png'|theme }}\"/>
                    </div>
                    <!-- <div class=\"salesforce-block-text\">ライトニングのデザイン</div> -->
                </div>
                <div class=\"services-container-inner seventh\">
                    <div class=\"salesforce-block-img\">
                        <img src=\"{{'assets/images/7.png'|theme }}\" alt=\"セキュリティレビュー\"/>
                    </div>
                    <div class=\"salesforce-block-text\">{{'セキュリティレビュー'|_}}</div>
                </div>
                <div class=\"first-rode\"></div>
                <div class=\"second-rode\"></div>
                <div class=\"third-rode\"></div>
                <div class=\"forth-rode\"></div>
                <div class=\"sixth-rode\"></div>
                <div class=\"seventh-rode\"></div>
                <div class=\"eighth-rode\"></div>
                <div class=\"ninth-rode\"></div>
                <div class=\"tenth-rode\"></div>
                <div class=\"eleventh-rode\"></div>
                <div class=\"twelveth-rode\"></div>
                <div class=\"thirteenth-rode\"></div>
            </div>
        </div>
    </section>
    <section class=\"about-section\" id=\"team\">
        <div class=\"about-container-body\">
            <h3>Our Leadership</h3>
            <div class=\"about-crew-container\">
                <div class=\"about-crew-block\" >
                    <div class=\"top-crew-block\">
                        <div class=\"dashed-border\"></div>
                        <div class=\"flipper\">
                            <div class=\"front\"></div>
                            <div class=\"back\">
                                <ul>
                                    <li>Chief Executive Officer</li>
                                    <li><a href=\"https://www.linkedin.com/in/hoang-kagawa-24b7b16b/\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"bottom-crew-block\">
                        <div class=\"title\">
                            <span class=\"name\">Kagawa Hoang</span>
                        </div>
                    </div>
                </div>
                <div class=\"about-crew-block\" >
                    <div class=\"top-crew-block\">
                        <div class=\"dashed-border\"></div>
                        <div class=\"flipper\">
                            <div class=\"front team3\"></div>
                            <div class=\"back\">
                                <ul>
                                    <li>Sales Engineer</li>
                                   <!-- <li><a href=\"https://www.linkedin.com/in/tran-thanh-191870bb/\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"bottom-crew-block\">
                        <div class=\"title\">
                            <span class=\"name\">Tran Minh</span>
                        </div>
                    </div>
                </div>
                <div class=\"about-crew-block\" >
                    <div class=\"top-crew-block\">
                        <div class=\"dashed-border\"></div>
                        <div class=\"flipper\">
                            <div class=\"front team2\"></div>
                            <div class=\"back\">
                                <ul>
                                    <li>Salesforce Platform Specialist</li>
                                    <li><a href=\"https://www.linkedin.com/in/dinh-minh-tam-164726138/\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"bottom-crew-block\">
                        <div class=\"title\">
                            <span class=\"name\">Dinh Tam</span>
                        </div>
                    </div>
                </div>
                <div class=\"about-crew-block\" >
                    <div class=\"top-crew-block\">
                        <div class=\"dashed-border\"></div>
                        <div class=\"flipper\">
                            <div class=\"front team4\"></div>
                            <div class=\"back\">
                                <ul>
                                    <li>Heroku Platform Specialist</li>
                                    <li><a href=\"https://www.linkedin.com/in/le-anh-58241a174/\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"bottom-crew-block\">
                        <div class=\"title\">
                            <span class=\"name\">Le Anh</span>
                        </div>
                    </div>
                </div>
                <div class=\"about-crew-block\" >
                    <div class=\"top-crew-block\">
                        <div class=\"dashed-border\"></div>
                        <div class=\"flipper\">
                            <div class=\"front team5\"></div>
                            <div class=\"back\">
                                <ul>
                                    <li>Google Clound PlatForm Specialist</li>
                                    <li><a href=\"https://www.linkedin.com/in/huy-đỗ-quang-287733151\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"bottom-crew-block\">
                        <div class=\"title\">
                            <span class=\"name\">Do Huy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"bot_client-container\" id=\"customers\">
        <div class=\"bot_client-header\">Developement Partners</div>
        <div class=\"customer-logos container\">
            <div class=\"customer-img-container\"><img src=\"{{'assets/images/image7.png'|theme }}\" alt=\"FELL\"></div>
            <div class=\"customer-img-container\"><img src=\"{{'assets/images/image8.png'|theme }}\" alt=\"DevSamurai\"></div>
            <div class=\"customer-img-container\"><img src=\"{{'assets/images/image9.png'|theme }}\" alt=\"Mulodo\"></div>
            <div class=\"customer-img-container\"><img src=\"{{'assets/images/image10.png'|theme }}\" alt=\"EarlyWell\"></div>
            <div class=\"customer-img-container\"><img src=\"{{'assets/images/image11.png'|theme }}\" alt=\"MSC\"></div>
            <div class=\"customer-img-container\"><img src=\"{{'assets/images/image12.png'|theme }}\" alt=\"clickDeploy.io\"></div>
        </div>
    </section>
    <section class=\"bot_footer-outer\" id=\"contact\">
        <div class=\"bot_footer\" >
            <div class=\"container\">
                <div class=\"bot-left\">
                    <div class=\"left-container\" >
                        <h1>Contact Us</h1>
                        <span class=\"bot_footer-head\">Japan</span>
                        <span class=\"body\" >
                            {{'本社： 千葉県柏市常盤台16-70'|_}}
                            <br/>
                            {{'駐在員事務所：東京都品川区北品川１丁目１０−２　ピラミッド品川ビル4F'|_}}
                        </span>
                        <span class=\"bot_footer-head\">Vietnam</span>
                        <span class=\"body\">  
                            60/16C1 Lam Van Ben Street, Tan Kieng Ward, District 7, Ho Chi Minh City, Viet Nam
                        </span>
                        <span class=\"bot_footer-head\">Australia</span>
                        <span class=\"body\">  
                            Coming Soon
                        </span>
                        <ul class=\"footer-info\"><li><a href=\"mailto:contact@furucrm.com\">contact@furucrm.com</a></li><li><a href=\"tel:+8108040953562\">(+81)080-4095-3562</a></li></ul>
                        <ul>
                            <li><a href=\"https://www.facebook.com/furucrm/\" class=\"facebook\"  target=\"blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
                            <li><a href=\"#\"  target=\"blank\"><i class=\"fab fa-twitter\"></i></a></li>
                            <li><a href=\"#\" target=\"blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                        </ul>
                        {% component 'genericForm' %}    
                        <!-- <div class=\"img\">
                            <script type=\"text/javascript\" src=\"//seal.securecore.co.jp/js/ss_150-58.js\"></script>
                            <a href=\"https://seal.securecore.co.jp/profile.php?p1=www.furucrm.com\" onclick=\"return op();\"><img src=\"https://seal.securecore.co.jp/seal.php?p1=www.furucrm.com&amp;p2=150-58\" width=\"150\" height=\"58\"></a>
                            <noscript><img src=\"//seal.securecore.co.jp/image/noscript_150x58.png\"></noscript>
                        </div> -->
                        <div style=\"margin:5% 0\"></div>
                        <div class=\"fb-page\" data-href=\"https://www.facebook.com/furucrm\" data-tabs=\"timeline\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/furucrm\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/furucrm\">Furucrm株式会社</a></blockquote></div>
                        <span class=\"copyright\">
                                &copy; 2018 by Furu Team.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div class=\"modal\" id=\"firstModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">AppExchange化支援サービス</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        <div class=\"modal-body service-popupBody\">
            <ul>
                <li>
                   {{'テクニカルコンサルティング'|_}}
                </li>
                <li>
                    {{'製品開発支援'|_}}
                </li>
                <li>
                    {{'製品保守'|_}}
                </li>
            </ul>
        </div>
        </div>
    </div>
</div>
<div class=\"modal \" id=\"secondModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">受託開発</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        <div class=\"modal-body service-popupBody\">
            <ul>
                <li>
                    {{'お客様のWebサービスやスマホアプリを新しくつくります。企画段階からクライアントと一緒に考え、システム設計・開発、デザイン設計・制作を行い、世の中に生み出します。'|_}}
                </li>
                <li>
                    {{'主な開発言語：PHP, Java, Ruby, NodeJs, Apex, AngularJs,Vue Js, Jquery'|_}}
                </li>
            </ul>
        </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"thirdModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">ラボ型開発</h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
        <div class=\"modal-body service-popupBody\">
            <ul>
                <li>
                    {{'お客様の既存Webサービスやスマホアプリを、継続してブラッシュアップしていきます。ラボ型開発というスタイルで、ベトナムにいるエンジニアが、クライアントのチームの一員として、日々変化する競争環境に対応して機能追加や改善を行います。'|_}}
                </li>
                <li>
                    {{'主な開発言語：PHP, Java, Ruby, NodeJs, Apex, AngularJs,Vue Js, Jquery'|_}}
                </li>
            </ul>
        </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"forthModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">QA Services</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body service-popupBody\">
                <ul>
                    <li>
                        We offer independent end-to-end validation service. We help ISVs to perform UAT or become their exclusive qa team.
                    </li>
                    <li>
                        <span>Test Automation : </span>
                        We are strong believers that automation builds a mature product. We have seamlessly been able to perform test automation on apps on App Cloud. We offer both on premise and cloud test automation solutions
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"fifthModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Lightning Design</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body service-popupBody\">
                <ul>
                    <li>
                        <span>Lightning UI : </span>
                        As one of the early adopters of Lightning Design Systems, we have built numerous apps adhering to Salesforce’s Lightning Ready motto.  You can leverage our robust adaptability framework that has been built over years of experience on the App Cloud platform. Our framework seamlessly transforms your classic aloha based application to lightning UI within no time
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"modal\" id=\"sixthModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content service-popup\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Security Review & App Listing</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body service-popupBody\">
                <ul>
                    <li>
                        <span>Success Rate : </span>
                        With a dedicated team following a matured in-house stringent review process, we ensure the apps pass the security review in a timely manner and list them successfully
                    </li>
                    <li>
                        <span>Review Process : </span>
                        Drawing experience from 5 years of appexchange listing, we have meticulously developed proprietary review processes. These guidelines maximize our success
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>", "D:\\Training\\install-master/themes/demo/pages/home.htm", "");
    }
}
