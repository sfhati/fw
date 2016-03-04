<?php global $lezaz;?><!DOCTYPE html>
<html>
    <head>
        <!-- basic meta -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="HTML TO PHP framework lezaz" />
        <meta name="author" content="Bassam Alessawi" />

        <title>
            لزاز  1.0 بيئة عمل ونظام إدارة محتوى تعتمد على PHP , سريعه و آمنه  وسهلة الإستخدام !
        </title>

        <!-- Bootstrap -->
        <link href="http://fw.cms/template/sample/css/bootstrap.css" rel="stylesheet" />

        <style>
            body {
                padding-top: 60px;
                direction: rtl;
                font-size: 18px;
            }
            .tab-pane{padding: 5px;}
            .pln{color:#fffefe!important;}
            pre .str{color:#f4645f;}
            pre .kwd{color:#4bb1b1;}
            pre .com{color:#888888;}
            pre .typ{color:#ef7c61;}
            pre .lit{color:#bcd42a;}
            pre .pun,pre .opn,pre .clo{color:#ffffff;}
            pre .tag{color:#4bb1b1;}
            pre .atn{color:#ef7c61;}
            pre .atv{color:#bcd42a;}
            pre .dec,pre .var{color:#660066;}
            pre .fun{color:#ff0000;}
            .prettyprint{display:block;font-family:Monaco,Consolas, "Lucida Console ",monospace;background-color:#333;font-size:13px;border:0;color:#e9e4e5;line-height:1.9em;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;-moz-background-clip:padding-box;-webkit-background-clip:padding-box;background-clip:padding-box;padding:5px!important;white-space:pre;overflow:hidden;}
            .prettyprint .pln{color:#e9e4e5;}
            .prettyprint .com{color:#888;}
            .prettyprint .pun,.prettyprint .opn,.prettyprint .clo{color:#fff;}
            .prettyprint .dec,.prettyprint .var{color:#606;}
            .prettyprint .fun{color:red;}
            .prettyprint code{font-family:Monaco,Consolas, "Lucida Console ",monospace;font-size:12px;}
            .prettyprint .str,.prettyprint .lit,.prettyprint .atv{color:#bcd42a;}
            .prettyprint .kwd,.prettyprint .tag{color:#4bb1b1;}
            .prettyprint .typ,.prettyprint .atn{color:#ef7c61;}
            pre {direction: ltr;    text-align: left;}
            code {display: inline-block;direction: ltr;}
            .tdfirst{ width:215px;}
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://lezaz.org">
                     lezaz website 
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a target="_blank" href="https://github.com/sfhati/lezaz">
                               Github
                            </a></li>                     
                        <li><a target="_blank" href="http://www.phpclasses.org/package/9630-PHP-Template-engine-that-compiles-tags-into-PHP-code.html">
                                PHPClasses
                            </a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="container">

            <!-- Logo -->
            <div class="row text-center center-block" style="margin-top: 20px;">
                <h1> ليزاز1.0  </h1>
                <b class="small text-muted"> " بيئة عمل ونظام إدارة محتوى " </b>
                <br /><br />
                <div class="text-center center-block">
                    <span><iframe src="http://ghbtns.com/github-btn.html?user=sfhati&repo=lezaz&type=watch&count=true" height="30" width="118" frameborder="0" scrolling="0" style="width:118px; height: 30px;" allowTransparency="true"></iframe></span>
                    <span><iframe src="http://ghbtns.com/github-btn.html?user=sfhati&repo=lezaz&type=fork&count=true" height="30" width="118" frameborder="0" scrolling="0" style="width:118px; height: 30px;" allowTransparency="true"></iframe></span>
                    <span><iframe src="http://ghbtns.com/github-btn.html?user=sfhati&type=follow&count=true" height="30" width="168" frameborder="0" scrolling="0" style="width:168px; height: 30px;" allowTransparency="true"></iframe></span>
                </div>
            </div>
            <!-- End Logo --> 

            <hr /> 

            <!-- SIDE.BARS -->
            <div class="col-md-3 tabs">

                <!-- SIDE.BAR-1 --> 
                <p class="lead"> <span class="glyphicon glyphicon-bookmark"></span> نظام لزاز <small class="text-muted"> "مقدمه" </small> </p>
                <div class="list-group nav-tabs tabs">
                    <a class="list-group-item" data-toggle="tab" href="#intro">ماهي لزاز</a>
                    <a class="list-group-item" data-toggle="tab" href="#download">تحميل</a>
                    <a class="list-group-item" data-toggle="tab" href="#setup">إعداد</a>
                    <a class="list-group-item" data-toggle="tab" href="#how">كيف تعمل</a>
                </div>
                <!-- SIDE.BAR-1 -->

                <!-- SIDE.BAR-2 -->
                <p class="lead"> <span class="glyphicon glyphicon-bookmark"></span> نظام لزاز<small class="text-muted"> الرئيسي </small> </p>
                <div class="list-group tabs">
                    <a class="list-group-item" data-toggle="tab" href="#router">Router - العناوين الذكيه</a>
                    <a class="list-group-item" data-toggle="tab" href="#eventshock">الأحداث والصياد</a>
                    <a class="list-group-item" data-toggle="tab" href="#helpers">مساعد</a>
                </div>
                <!-- SIDE.BAR-2 --> 

                <!-- SIDE.BAR-3 -->
                <p class="lead"> <span class="glyphicon glyphicon-bookmark"></span> إضافات لزاز<small class="text-muted"> "classes addons" </small> </p>
                <div class="list-group tabs">
                    <a class="list-group-item" data-toggle="tab" href="#db">قواعد البيانات</a>
                    <a class="list-group-item" data-toggle="tab" href="#files">الملفات</a>
                    <a class="list-group-item" data-toggle="tab" href="#string">النصوص</a>
                </div>
                <!-- SIDE.BAR-3 --> 

                <!-- SIDE.BAR-3 -->
                <p class="lead"> <span class="glyphicon glyphicon-bookmark"></span>القوالب<small class="text-muted"> "&lt;lezaz/&gt;" </small> </p>
                <div class="list-group tabs">
                    <a class="list-group-item" data-toggle="tab" href="#thelper">مساعد</a>
                    <a class="list-group-item" data-toggle="tab" href="#lezazif">الجمل الشرطيه</a>
                    <a class="list-group-item" data-toggle="tab" href="#lezazfor">التكرار</a>
                    <a class="list-group-item" data-toggle="tab" href="#lezazeach">التكرار للشيء</a>
                    <a class="list-group-item" data-toggle="tab" href="#lezazblock">تضمين القوالب</a>
                    <a class="list-group-item" data-toggle="tab" href="#lezazimport">تضمين الستايل والجافاسكريبت</a>
                    <a class="list-group-item" data-toggle="tab" href="#lezazsql">قواعد البيانات</a>
                    <a class="list-group-item" data-toggle="tab" href="#lezazinput">الحقول والنماذج</a>
                    <a class="list-group-item" data-toggle="tab" href="#lezazselect">القوائم</a>
                    <a class="list-group-item" data-toggle="tab" href="#lezazphp">لغة بي أتش بي</a>
                </div>
                <!-- SIDE.BAR-3 --> 

            </div>
            <!-- SIDE.BARS --> 

            <!-- BODY -->
            <div class="col-md-8">

                <!-- CONTENTS -->
                <div class="tab-content">

                    <!-- intro -->
                    <div id="intro" class="tab-pane in active fade">

                        <h1> <span class="glyphicon glyphicon-road"></span> مقدمه</h1>
                        <p class="lead"><blockquote>
                            في كثير من الأحيان نجد أن وقتا كبيرا يضيع بسبب عمليات روتينيه مثل إدخال البيانات في قاعدة بيانات وإسترجاعها 
                            وعمليات التعديل عليها كل هذا عمله بسيط ولكنه يأخذ وقت فأنت بحاجه إلى إنشاء قاعدة البيانات ثم إنشاء صفحة 
                            <code>HTML</code>
                            وفيها تكتب كود لإنشاء نموذج وتقوم بعمل التحقق عن طريق الجافاسكريبت ثم عمليه إرسال النموذج إلى صفحة 
                            <code>PHP</code>
                            وهناك تتحقق من عدة أمور مثل صلاحيات المستخدم وفلترة المتغيرات بحيث لا تحتوي على كود إختراق وتخريب ومثل هذا لعميله التعديل على
                            المدخلات بحيث يتم إسترجاعها وهكذا , 
                            <br>
                            كما أن هنا مشاكل في عمليه تنظيم الروابط أو مايسمى بال
                            <code>Router</code>
                            بحيث تواجه مشاكل لكل رابط وربما تحتاج إلى مكتبه أو كود جاهز لهذه العمليه أو تضطر لعملها بنفسك من خلال ملف 
                            <code>.htaccess</code>
                            والأهم من كل هذا هو التأكد من أن عملك لايتظرر بعدد الزوار الكبير ويكون سريع وهذا يحتاج إلى أنظمة كاش لتخزين المخرجات مدة معينه بحيث 
                            لا تؤثر بعمل الموقع والكثير الكثير في عملية التصميم وإستخدام مكتبات لجعل منظر الصفحة جميل وفعال بحيث تستخدم كاليندر أو قوائم ونصوص يتم تعبئتها تلقائيا 
                            <br>
                            هذا كله قامت هذه البيئة بتسهيله وجعله من الماضي 

                            -- <a target="_blank" href="https://www.facebook.com/sfhaticom">بسام العيساوي</a>
                        </blockquote></p>

                        <hr />

                        <h1> <span class="glyphicon glyphicon-flash"></span> مزايا النظام</h1>
                        <ul>
                            <li>بسيط وسهل التعلم</li>
                            <li>نظام قوالب لإستخدامات كبيرة وجمل برمجيه بسيطه عباره عن جمل 
                                <code>HTML</code>
                                عاديه </li>
                            <li> <code>addons syntax</code>
                                إمكانيه إضافة المزيد من الجمل البرمجيه للقوالب بحيث يكون لك جميلك البرمجيه الخاصه  </li>
                            <li>عدة طبقات لتنفيذ الكود بحيث يمكنك ترتيب الأولويات وبذلك سرعة في تنفيذ المهام</li>
                            <li>
                                أستخدام معظم قواعد البيانات

                                <code>PDO</code>
                                المتوفره بدون الحاجه لتغيير أي كود على شيفرتك التي قمت بكاتبتها فقط تغيير إعدادات ربط قاعدة البيانات 
                            </li>
                            <li>روابط ذكيه يمكنك إستخدام ماتريد بالإضافه إلى عمليات تحقق تلقائيه لأي رابط لتجنب الإختراق</li>
                            <li>مدمج نظام التحقق الكامل لأي متغيرات تأتي من الخارج 
                                <code>GET & POST</code>
                            </li>
                            <li>يقبل الإضافات 
                                <code>plgins</code>                               
                            </li>
                            <li>تحميل تلقائي للكلاس ودمج تلقائي مع الكلاس الرئيسي بالإضافه إلى إمكانيه تحميل الكلاسات بشكل عادي</li>
                            <li>أنظمة كاش متعدده لأي جملة إستعلام وتحديد وقت الكاش كما يوجد كاش لأي مخرجات بحيث يتم تخفيف الضغط على الخادم بشكل كبير </li>
                            <li>نظام تشفير كامل لقواعد البيانات والملفات والمتغيرات </li>
                            <li>نظام ضغط ودمج  لملفات الجافاسكريبت والستايل </li>
                            <li>تحميل تلقائي مع التحقق من وجود ملفات الجافاسكريبت والستايل</li>
                            <li>نظام رفع الملفات والتحقق من حجمها ونوعها </li>
                            <li>مدمج بعض الإضافات المهمه مثل نظام الأعظاء ونظام إدارة المحتوى </li>
                            <li>نظام تعدد اللغات</li>
                            <li>مدمج لوحة تحكم تحتوي على أهم العناصر التي تحتاجها لأي مشروع ويب </li>
                            <li>نظام إنشاء النماذج </li>
                            <li>نظام إنشاء الجداول </li>
                            <li>نظام متكامل لإنشاء عمليات الإضافه والحذف والتعديل للبيانات داخل قواعد البيانات دون الحاجه لكتابه أي كود أو إنشاء أي جداول</li>
                            <li>نظام إرسال البريد الإلكتروني بقوالب سهل التحكم بها </li>
                            <li>نظام تعدد الصفحات لعرض بيانات من قواعد البيانات</li>
                            <li>حفظ متغيرات </li>

                        </ul>

                    </div>
                    <!-- intro -->


                    <!-- download -->
                    <div id="download" class="tab-pane fade">

                        <h1> <span class="glyphicon glyphicon-download"></span> تحميل لزاز</h1>
                        <ul>
                            <li>من <a target="_blank" href="https://github.com/sfhati/lezaz">Github</a></li>
                            <li>من <a target="_blank" href="http://www.phpclasses.org/package/9630-PHP-Template-engine-that-compiles-tags-into-PHP-code.html">PHPClasses</a></li>
                        </ul>

                    </div>
                    <!-- download -->

                    <!-- setup -->
                    <div id="setup" class="tab-pane fade">

                        <h1> <span class="glyphicon glyphicon-cog"></span>إعدادات لزاز</h1>
                        <ul>
                            <li>بعد تحميل نسخة لزاز , قم بفك الضغط عنها</li>
                            <li>ستجد ملف 
                                <code>conf.php</code>
                                يحتوي هذا الملف على الإعدادات الرئيسيه , ربما لن تحتاج إلا لإعدادات ربط قواعد البيانات من خلال تعديل هذه السطور في الملف المذكور 
                                <br>
                                <pre class="prettyprint">
// database mysql configration 
    define('db_type', 'mysql'); // نوع قاعدة البيانات
    define('db_host', 'localhost'); // الهوست الخاص بقاعدة البانات معظم الأحيان لاتحتاج إلى تعديله 
    define('db_port', '');//البورت 
    define('db_name', ''); // إسم قاعدة البيانات
    define('db_user', 'root'); // إسم المستخدم 
    define('db_pass', ''); // الرمز السري 
                                    
                                </pre>
                            </li>
                            <li>بعض الإعدادات التي يمكنك تعديلها هي:
                                <br>
                                <pre class="prettyprint">
date_default_timezone_set('Asia/Amman'); // الوقت المحلي المعتمد 
لمزيد من الحمايه والأمان يمكنك تعديل أسماء المجلدات الرئيسيه 
define('TEMPLATE_FOLDER', 'template'); //  مجلد القوالب 
define('UPLOADED_FOLDER', 'uploaded'); // مجلد التحميلات الخاص بالصور وغيرها من الملفات
define('CLASSES_FOLDER', 'classes'); // مجلد الكلاسات 
define('CACHE_FOLDER', 'cache'); // مجلد الكاش 
define('TMP_FOLDER', 'tmp'); // مجلد الملفات المؤقته
define('PLUGIN_FOLDER', 'plugin'); // مجلد الإضافات 
define('THEME_FOLDER', 'my_theme'); // مجلد الثيم الرئيسي 
//يحتوي الثيم الرئيسي على جميع القوالب والصور والستالات والجافاسكريبت الخاص بمشروعك 

define('SQL_CACHE', '20'); // وقت الإحتفاظ بملفات الكاش بالثواني
define('CRYPT_CACHE', true); // لعمل تشفير لملفات الكاش وقواعد البيانات مهم للبيانات الحساسه ولكنه يستهلك بعض من موارد الخادم
define('SALT','FR4d32cdvTYdw2s#gt54');//في حال أردت إستخدام التشفير وهو بالأصل مفعل , يجب تغيير هذا الكود بأي كود تريديه كلما كان أكبر كلما كان أأمن وبنفس الوقت أكثر إستخدام لموارد النظام 
                                </pre>
                            </li>
                        </ul>

                    </div>
                    <!-- setup -->

                    <!-- how-it-works -->
                    <div id="how" class="tab-pane fade">

                        <h1> <span class="glyphicons glyphicons-question-sign"></span> كيف تعمل لزاز ؟</h1>
                        <ul>
                            <li>عند طلب الصفحة أو عمل أي طلب 
                                <code>Request</code>
                                يبدأ العمل بالصفحة الرئيسيه 
                                <code>index.php</code>
                                في هذا الملف يتم إنشاء الجلسه 
                                <code>session</code>
                                ثم إستدعاء الملف 
                                <code>conf.php</code>
                                أخيرا يتم طباعه المخرجات والإنتهاء من العمل 



                            </li>
                            <li>في ملف 
                                <code>conf.php</code>
                                يتم تعريف الإعدادات اللازمه للنظام ومن ثم إستدعاء الملف الرئيسي 
                                <code>___core.php</code>                               
                                الخاص ببيئة العمل لزاز ثم إستدعاء وتحميل الملفات من مجلد 
                                <code>/classes/autoinclude/</code>
                                الملفات في هذا المجلد لا تحتاج إلى كود 
                                <pre class="prettyprint">import(file.php)</pre>
                                وبهذا توفر على نفسك عمل التحميل فقط بوصع الملف في هذا المجلد 
                                <br>
                                ثم إستدعاء ودمج الكلاسات في الملفات الموجوده في مجلد 
                                <code>/classes/autoload/</code>
                                وفي هذا المجلد يجب أن يحتوي الكلاس داخل الملف على مسمى معين وهيكله خاصه سيتم شرحها لاحقا 
                                , ويصبح الكلاس محمل ومستدعى داخل الكلاس الأساسي لزاز ليتم إستدعاؤه كما يلي 

                                <pre class="prettyprint">$lezaz->yourclassname();</pre>




                            </li>
                            <li>
                                يتم إنشاء المتغير 

                                <code>$lezaz</code> 
                                وعند تنفيذ الأمر 
                                <pre class="prettyprint">echo $lezaz->run();</pre>
                                في الصفحة الرئيسيه يتم تنفيذ جميع الملفات في طبقة البدء أي الملفات التي بالإسم 
                                <code>init.php</code>    
                                في كل مجلد داخل مجلد الإضافات 
                                <code>/plugin/folder/init.php</code>    
                                وفي هذه الطبقه يمكن إنشاء المتصنت 
                                <code>listener</code> 
                                لكي يتم تنفيذها عند إنشاء حدث في الطبقات الأخرى 

                            </li>
                            <li>التحقق من أن الطلب قادم من متصفح أي شخص وليس من بوت ويمكنك بناء على ذلك إتخاذ أي إجراء من خلال الصياد والأحداث 
                                <code>hock and events</code> 
                            </li>

                            <li>
                                تنفيذ الملفات في الطبقه الثانيه وهي الملفات ذات الإسم 
                                <code>/plugin/folder/index.php</code> 
                                وهذه الطبقه يفضل أن يتم تنفيذ الأوامر التي يجب فيها أن يكون الزائر شخص وليس بوت مثل تسجيل الدخول وادخال بيانات من النماذج إلى قاعدة البيانات 
                                فهناك جدار ناري قبل هذه الطبقه يمكن من خلاله إيقاف العمليات المشبوهه قبل الوصول إلى هذه الطبقه 
                            </li>

                            <li>
                                تنفيذ الملفات في الطبقه الثالثه والتي تحمل الإسم 
                                <code>/plugin/folder/footer.php</code> 
                                وفي هذه الطبقه يمكنك  إكمال أي برمجيه تريدها من الإضافات الأخرى والتي تم تنفيذها في الطبقه السابقه 
                            </li>
                            <li>
                                إستدعاء القالب الذي تم التأشير عليه من خلال الداله 
                                <pre class="prettyprint">$lezaz->main_template="my_template.inc";</pre>
                                وفي هذه المرحله يتم التأكد بأن القالب تم تفسيره عبر محرك القوالب لزاز , وفي حال لم يتم تفسيره فسيقوم المفسر تلقائيا بعمليه التفسير ووضع النسخه المفسره في مجلد الكاش 
                                كما يقوم المفسر بالتأكد من عدم حدوث تعديلات على القالب وفي حال وجود تعديلات يقوم تلقائيا بحذف النسخه المفسره وإعادة تفسيرها , وفي حال لم يجد ملف القالب فإنه يقوم تلقائيا بإستدعاء قالب 
                                <code>404.inc</code> 
                                وسيتم شرح هذا بشكل مفصل في قسم القوالب 
                            </li>
                            <li>
                                تنفيذ طبقة الإنهاء وهي الملفات في مجلد الإضافات تحمل الإسم 
                                <code>/plugin/folder/term.php</code> 
                            </li>
                            <li>
                                طباعه المخرجات والإنهاء 
                            </li>
                        </ul>

                    </div>
                    <!-- how-it-works -->


                    <!-- router -->
                    <div id="router" class="tab-pane fade">

                        <h1><span class="glyphicon glyphicon-cog"></span> العناوين الذكيه - Router</h1> <br />

                        <h3> &rsaquo; ماهي العناوين الذكيه؟ </h3>
                        <p>
                            هي نظام يعمل على جعل العنوان في المتصفح مقروء ويمكن أن يوضح معني الصفحة وماهي الكلمات المفتاحيه لها 
                            وبذلك تعمل هذه العناوين على أرشفه صحيحه لمحركات البحث وتعطي لصفحاتها قيمة أكبر ليصل لها أكبر عدد من المهتمين بمحتوى الصفحة 
                            , فيما مضى كنا نستخدم المتغيرات لمعرفة مايطلبه المستخدم وذلك عن طريق روابط كهذا الرابط 
                            <br>
                            <code>http://www.site.com/?p=about_us&c=amman</code>
                            <br/>
                            وكما ترى فإن الرابط لايعبر عن محتوى الصفحة , الآن يمكنك إستخدام مثل هذا الرابط لإنشاء نفس الرابط السابق 
                            <br/>
                            <code>http://www.site.com/about_us/amman/</code>
                            <br/>
                            وهذه أمثله لكيفيه إستخدام الروابط وأيضا التخلص من المخترقين والمخربين وذلك من خلال الفلتره والتحقق التلقائي لجميع المدخلات 
                            <br/>
                            <br/>


                        </p>

                        <h3> &rsaquo; الإستخدام :</h3>
                        <p>
                        <pre class="prettyprint"><code>&lt;? php
        // هنا يتم تنفيذ الأمر عند إستدعاء الرابط   
        // site.com/hi or site.com/hi/
        $lezaz->router('/hi', function(){
            echo 'HI'; // site.com/hi/ >> "HI"
        });

        // يتم تنفيذ الأمر التالي عند إستدعاء الرابط متبوعا بأي قيمة أخرى مثل 
        // site.com/hi/1 or site.com/hi/my_url/any_other_url/any/any
        $lezaz->router('/hi/@*', function(){
            echo 'HI'; // site.com/hi/me >> "HI"
        });

        // في هذا المثال نفس المثال السابق ولكن نريد أخذ القيمة المتبوع بكلمة هاي 
        $lezaz->router('/hi/@*', function($e){
            echo 'HI and '.$e; // site.com/hi/me >> "HI and me"
        });


        // هنا نريد إستخدام أكثر من رابط لتنفيذ الأوامر 
        $lezaz->router(array('/hi/','/my/','/any/other/word/'), function(){
            echo 'hi my any other word'; // site.com/my/ >> "hi my any other word"
        });

        /*في هذا المثال نريد إستخدام المكتبه الرئيسيه لزاز داخل الداله مثلا لتغيير القالب إلى الإسم الذي نريده لعمل إستدعاء لهذا القالب 
        , في هذه الحاله نحتاج إلى إستخدام المكتبه ونكتب الكود بالطريقه التاليه 
        */
        $lezaz->router('/admin/@str', function($b) use ($lezaz) {
            $lezaz->main_template = '{template}admin/'.$b; // site.com/admin/myfile >> load /template/admin/myfile.inc            
        });

        // بعض الأمثله السريعه 
        $lezaz->router(array('/test/@num/@str', 'test'), function($num,$str) use ($lezaz) {    
                $lezaz->main_template = '{template}admin/test'; // إستدعاء القالب تست من المجلد أدمن داخل مجلد القوالب الرئيسي 
                echo "Number=$num & String=$str";   // طباعه المتغيرات القادمة من الرابط ويجب أن تكون رقم ثم نص 
                //الرباط يكون كالتالي 
                // http://site.com/test/1/test
        });


</code></pre>

                        <h3> &rsaquo; الرموز أو المفاتيح :</h3>
                        <p>
                        <pre class="prettyprint"><code>
'@num' => '([0-9\.,]+)', // رقم ويمكن أن يحتوي على الفارزه والنقطه
'@alpha' => '([a-zA-Z]+)',  // حروف كبيره وصغيره فقط 
'@alnum' => '([a-zA-Z0-9\.\w]+)', // حروف كبيرة وصغيره بالإضافه إلى الأرقام والنقطه  
'@str' => '([a-zA-Z0-9-_\.\w]+)', //  حروف كبيرة وصغيره بالإضافه إلى الأرقام والنقطه وإشارة الناقص والشرطه 
'@*' => '(.*)', // يقبل كل الحروف والرموز 
'@date' => '(([0-9]{1,2})\/([0-9]{1,2})\/(([0-9]{2})(.{0}|.{2})))', // التاريخ بفورمات كالتالي 00/00/0000
'@null' => '^'); // لايقبل أي حرف , يجب أن يكون فارغ 
</code></pre>                     


                        <h3> &rsaquo;  إضافة مفتاح جديد </h3>

                        ماذا لو أردنا مثلا إضافة مفتاح جديد للتاريخ بحيث تكون الفورمات كالتالي 
                        <br>
                        <code>00-00-0000</code>
                        <br>
                        يمكننا ذلك من خلال إضافة مفتاح عن طريق الكود التالي ولكن يجب الإنتباه إلى أن عمليه إضافة المفتاح يجب أن تتم قبل كود العنوان 

                        <p>
                        <pre class="prettyprint"><code>

$lezaz->add_router('@mydate','(([0-9]{1,2})-([0-9]{1,2})-(([0-9]{2})(.{0}|.{2})))');
        $lezaz->router('/@mydate', function($date) {
           echo "your date is $date";        
        });
// url : http://site.com/1-7-2001

</code></pre>                                             




                        <h3> &rsaquo; مثال  </h3>
                        قم بإنشاء مجلد داخل مجلد الإضافات بإسم 
                        <br />
                        <code>/plugin/my_test/</code>
                        أنشيء ملف بإسم 
                        <code>/plugin/my_test/index.php</code>
                        وأكتب هذا الكود داخله 

                        <pre class="prettyprint"><code>&lt;? php
/* سيتم إستدعاء القالب     
/template/my_template/test.inc
عند كتابة العنوان التالي 
http://your_domain.com/test or http://your_domain.com/test/any_thing
*/
$lezaz->router(array('/test/@*', 'test'), function($file) use ($lezaz) {    
 $lezaz->main_template = '{template}my_template/'.$file;    
});

</code></pre>

                        <br/>
                        الآن أنشيء مجلد داخل مجلد القوالب  بإسم 
                        <code>/template/my_template/</code>
                        ثم أنشئ ملفات داخل المجلد بإسم 
                        <code>/template/my_template/test.inc</code>
                        <code>/template/my_template/other.inc</code>
                        وقم بإضافة هذا الكود داخل الملفات بالترتيب 
                        <pre class="prettyprint"><code>&lt;html&gt;
this is &lt;b&gt;test.inc&lt;/b&gt; content!
&lt;/html&gt;
</code></pre>

                        <pre class="prettyprint"><code>&lt;html&gt;
this is &lt;b&gt;other.inc&lt;/b&gt; content!
&lt;/html&gt;
</code></pre>

                        الآن عند الدخول إلى الرابط 
                        <code>/test/test </code>
                        يجب رؤية مافي داخل الملف الأول 
                        <code>test.inc </code><br/>
                        وفي حال تصفح الرابط 
                        <code>/test/other</code>
                        ستظهر محتويات الملف الثاني 
                        <code>other.inc</code> <br/>
                        وفي الحاله الأخيرة وهو الدخول إلى أي رابط غير متوفر الملف له مثل 
                        <code>/test/anyword</code>
                        ستظهر لنا عبارة تفيد بأن القالب غير متوفر 











                    </div>
                    <!-- router -->


                    <!-- Events/Hooks -->
                    <div id="eventshock" class="tab-pane fade">

                        <h1> <span class="glyphicon glyphicon-download"></span> الأحداث والصياد <small>"زناد وتنصت"</small></h1>
                        <b></b> 
                        الأمر هنا وكأننا نصطاد , فلدينا زناد ومستمع للطلقه أو الحدث 
                        <br/>
                        قبل كل هذا لنرى مايحدث فعليا ... هناك مساعد للصياد يمتلك أداوت مثل الشبكه أو كلب صيد وهذا الصياد ينتظر الزناد وذلك بالإستماع إلى صوت الطلقه 
                        , عند إطلاق الرصاصه يقوم المساعد بتنفيذ أمر إطلاق كلب الصيد أو تهيئة الشباك 
                        <br>
                        هذا مايحدث فعليا في هذه المرحله , فهناك صياد 
                        <code>trigger</code> ولدينا أيضا مستمع للزناد وهو عباره عن داله لتنفيذ الأوامر
                        <code>listen</code><br > 

                        الأحداث أو الزناد مثل الحصول على مخرجات التطبيق وقبل عرضها يتم عمل حدث لتتمكن من خلال المتنصت من عمل فلترة لهذه المخرجات , 
                        أيضا هناك مثال آخر , عند تخزين مدخلات في قاعدة البيانات هنا نحتاج إلى حدث لنتمكن من معرفة المعرف الخاص بهذه المدخلات ويمكن أن نحتاج إلى المدخلات قبل إدخالها لقاعدة البيانات 
                        حتى نتمكن من فلترة بعضها مثلا 
                        <br/>
                        هناك الكثير من الأمثله تستوجب مثل هذه التقنيه لجعل النظام الخاص بك مرن إلى أبعد حد 

                        <h3>&raquo; الإستخدام </h3>

                        إضافة مستمع , ويكون في الطبقه العليا لنظمن سماع الزناد في أي طبقه أسفلها , أي في ملفات ال
                        <code> init.php</code> <br>


                        <pre class="prettyprint"><code>
//$lezaz->listen($tag,$callable,$priority);
     // $tag: الحدث .
    // $callable: داله لتنفيذ الأوامر
    // $priority:الأولويه وهو رقم كلما كان أقل كانت أعلى 
    // examples:
 $lezaz->listen('test.action.1', function(){
        echo "this is 1 ...&lt;br/&gt;";
    });
    $lezaz->listen('test.action.1', function(){
        echo "this is 2 ...&lt;br/&gt;";
    });    
    $lezaz->listen('test.action.1', function($arg1,$arg2){
        echo "this is 3 ...", " you have passed an argument it is: &lt;br/&gt;", $arg1,'|',$arg2;
    });   
// لتنفيذ الأوامر السابقة فقط قم بضغط الزناد عبر الأمر 
$lezaz->trigger('test.action.1',array( 'arg_1','arg_2'));
/*
النتيجه 
this is 1 ...
this is 2 ...
this is 3 ... you have passed an argument it is: 
arg_1|arg_2
*/


// نفس المثال السابق ولكن بأولويه معينه لكل أمر 
$lezaz->listen('test.action.1', function(){
        echo "&lt;br/&gt;this is 1 ...&lt;br/&gt;";
    },5);
    $lezaz->listen('test.action.1', function(){
        echo "&lt;br/&gt;this is 2 ...&lt;br/&gt;";
    },10);    
    $lezaz->listen('test.action.1', function($arg1,$arg2){
        echo "&lt;br/&gt;this is 3 ...", " you have passed an argument it is: &lt;br/&gt;", $arg1,'|',$arg2,'&lt;br/&gt;';
    },0);   

$lezaz->trigger('test.action.1',array( 'arg_1','arg_2'));
/*
النتيجه 
this is 3 ... you have passed an argument it is: 
arg_1|arg_2

this is 1 ...

this is 2 ...
*/


// مثال لكيفية إستخدام الفلاتر 
// إرجاع القيمة الأوليه مع أقواس 
 $lezaz->listen('test.filter.1', function($word){
        return "($word)";
    });

    // إرجاع آخر تعديل على القيمة بين إشارتي ناقص 
    $lezaz->listen('test.filter.1', function($word, $last_filtered){
        return "-$last_filtered-";
    });

    // إرجاع القيمة الأوليه والقيمة المعدله بين إشارتي يساوي وبتنسيق خط كبير 
    $lezaz->listen('test.filter.1', function($word, $last_filtered){
         return "$word:&lt;h1&gt;=$last_filtered=&lt;/h1&gt;";
    });
    
    // لنختار كلمة 
    $myword = 'test';
    // الآن نمرر الكلمة على الفلاتر السابقة من خلال ضغط الزناد
    echo $lezaz->trigger('test.filter.1', $myword);
/*
النتيجه 
test:&lt;h1&gt;=-(test)-=&lt;/h1&gt;
*/
</code></pre>

                        <h3>&raquo; أحداث مدمجه وجاهزه للإستماع</h3>
                        هناك أحداث كثيرة مدمجه مع النظام ويمكن أن تزداد في كل تحديث كما تحتوي بعض الإضافات على أحداث جاهزه لتتمكن من التعامل مع المخرجات وتدمج الإضافات 
                        أو أعمالك مع هذه الإضافات 

                        <br />
                        <pre class="prettyprint"><code>
    // new.guset            --->  زائر جديد كليا ويمكن أن يكون بوت
    // session.guset        --->  بداية جلسه لزائر حقيقي أي شخص تم التأكد منه
    // requset.guset        --->  زائر يقوم بالتصفح
    // layer.init.start     --->  بدء تنفيذ ملفات الطبقة الأولى 
    // layer.init.done      --->  الإنتهاء من تنفيذ ملفات الطبقه الأولى 
    // layer.index.start    --->  بدء تنفيذ ملفات الطبقة الثانيه 
    // layer.index.done     --->  الإنتهاء من تنفيذ ملفات الطبقه الثانيه 
    // layer.footer.start   --->  بدء تنفيذ ملفات الطبقة الثالثه 
    // layer.footer.done    --->  الإنتهاء من تنفيذ ملفات الطبقه الثالثه 
    // layer.term.start     --->  بدء تنفيذ ملفات الطبقة الرابعه 
    // layer.term.done      --->  الإنتهاء من تنفيذ ملفات الطبقه الرابعه 
    // output.filter        --->  فلتر المخرجات قبل الطباعه
    
</code></pre>
                    </div>
                    <!-- Events/Hooks -->

                    <!-- helpers -->
                    <div id="helpers" class="tab-pane fade">

                        <h1> <span class="glyphicon glyphicon-download"></span>مساعد</h1>
                        <h3>&rsaquo; ثوابت</h3>

                        <table class="table table-responsive table-borderd">

                            <tr>
                                <td><code>SITE_DOMAIN</code></td>
                                <td>إسم النطاق مثل 
                                    <br>
                                    site.com

                                </td>
                            </tr>
                            <tr>
                                <td><code>SITE_PATH</code></td>
                                <td>المسار الفعلي للمجلد الجذر الخاص بالموقع أو التطبيق الذي نعمل عليه
                                    <br>
                                    /home/antfolder/www/ or c:/xampp/htdocs/www/                             
                                </td>
                            </tr>
                            <tr>
                                <td><code>SITE_IP</code></td>
                                <td>عنوان الآي بي للموقع</td>
                            </tr>
                            <tr>
                                <td><code>SITE_LINK</code></td>
                                <td>رابط الموقع مثل 
                                    <br>
                                    http://site.com/
                                </td>
                            </tr>
                            <tr>
                                <td><code>Version</code></td>
                                <td>رقم النسخة الخاصه بلزاز الذي تعمل عليه</td>
                            </tr>

                            <tr>
                                <td><code>TEMPLATE_PATH</code></td>
                                <td>المسار الحقيقي لمجلد القوالب</td>
                            </tr>
                            <tr>
                                <td><code>UPLOADED_PATH</code></td>
                                <td>المسار الحقيقي لمجلد الملفات المحمله</td>
                            </tr>
                            <tr>
                                <td><code>CLASSES_PATH</code></td>
                                <td>المسار الحقيقي لمجلد ملفات الكلاس</td>
                            </tr>
                            <tr>
                                <td><code>CACHE_PATH</code></td>
                                <td>المسار الحقيقي لمجلد الكاش أو النسخ المخبئه</td>
                            </tr>
                            <tr>
                                <td><code>TMP_PATH</code></td>
                                <td>المسار الحقيقي لمجلد الملفات المؤقته</td>
                            </tr>
                            <tr>
                                <td><code>PLUGIN_PATH</code></td>
                                <td>المسار الحقيقي لمجلد الإضافات</td>
                            </tr>
                            <tr>
                                <td><code>THEME_PATH</code></td>
                                <td>المسار الحقيقي لمجلد الثيم أو التصميم الرئيسي داخل مجلد القوالب</td>
                            </tr>


                            <tr>
                                <td><code>TEMPLATE_LINK</code></td>
                                <td>الرابط أو عنوان الويب لمجلد القوالب</td>
                            </tr>
                            <tr>
                                <td><code>UPLOADED_LINK</code></td>
                                <td>الرابط أو عنوان الويب لمجلد الملفات المحمله</td>
                            </tr>
                            <tr>
                                <td><code>CLASSES_LINK</code></td>
                                <td>الرابط أو عنوان الويب لمجلد  ملفات الكلاس</td>
                            </tr>
                            <tr>
                                <td><code>CACHE_LINK</code></td>
                                <td>الرابط أو عنوان الويب لمجلد الكاش أو النسخ المخبئه</td>
                            </tr>
                            <tr>
                                <td><code>TMP_LINK</code></td>
                                <td>الرابط أو عنوان الويب لمجلد الملفات المؤقته</td>
                            </tr>
                            <tr>
                                <td><code>PLUGIN_LINK</code></td>
                                <td>الرابط أو عنوان الويب لمجلد الإضافات</td>
                            </tr>
                            <tr>
                                <td><code>THEME_LINK</code></td>
                                <td>الرابط أو عنوان الويب لمجلد الثيم أو التصميم الرئيسي داخل مجلد القوالب</td>
                            </tr>
                        </table>

                        <hr />

                        <h3>&rsaquo; أحداث مساعدة  <small><strong>تتعلق بالمتغير 
                                    <code>$lezaz</code>
                                </strong></small></h3>
                        <table class="table table-responsive table-borderd table-striped">
                            <tr>
                                <td class='tdfirst'><code>run();</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    تنفيذ نظام لزاز وإرجاع المخرجات جاهزه للطباعه                                    
                                    <code>echo $lezaz->run();</code>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>address();</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    إرجاع عنوان الصفحة التي تم طلبها بالإضافه إلى علامة الإستفهام أو الضم لتتمكن من إضافة متغيرات بعد الرابط 
                                    <code>echo $lezaz->address();</code>
                                    <code>result >> http://www.site.com/? or http://www.site.com/?id=1&</code>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>language(optional $str);</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    <code>$lezaz->language(optional $str);</code><br>
                                    إسترجاع اللغه الحاليه أو تحديد لغه أخرى في حال تم تمرير متغير يحمل اللغه الجديد 
                                    <br><code>echo $lezaz->language() // en</code>
                                    <br><code>$lezaz->language('ar') // set language arabic</code>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>set_tpl($tpl)</code></td>
                                <td><code>Null</code></td>
                                <td colspan="2">
                                    لتحديد القالب الذي تريد تنفيذه من مجلد القوالب<br/>
                                    لتحديد قالب موجود في مجلد القوالب داخل مجلد بإسم أدمن نكتب كالتالي<br/>
                                    <code>$lezaz->set_tpl({template}admin/my_template.inc)</code><br/>
                                    ولتحديد قالب موجود في نفس مجلد الثيم الرئيسي فقط نكتب إسم ملف القالب كما يلي <br/>
                                    <code>$lezaz->set_tpl(my_template.inc)</code><br/>
                                    مسميات يمكن إستخدامها داخل القوالب لتحديد رابط المجلد : <br/>
                                    {template} , {plugin} , {tmp} , {classes} , {theme} , {cahce}
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>encrypt($str)</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    لتشفير النصوص
                                    <code>echo $lezaz->encrypt($string);</code>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>decrypt($str)</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    فك تشفير النصوص
                                    <code>echo $lezaz->decrypt($string);</code>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>go($to,$using)</code></td>
                                <td><code>Null</code></td>
                                <td colspan="2">
                                    لعمل إعادة توجيه بإستخدام عدة طرق <br/>
                                    <code># using HTTP 302 <br> $lezaz->go('page/1');</code><br/>
                                    <code># using HTTP 301 <br> $lezaz->go('page/1',301);</code><br/>
                                    <code># using HTML & redirect after 3 seconds <br> $lezaz->go('page/1','html:3');</code><br/>
                                    <code># using JS & redirect after 6 seconds <br> $lezaz->go('page/1','js:6');</code><br/>
                                    <code># redirect to external url  <br> $lezaz->go('http://google.com','html:8');</code><br/>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>statics()</code></td>
                                <td><code>Array</code></td>
                                <td colspan="2">
                                    إرجاع بعض الإحصائيات مثل مدة التنفيذ
                                    <code>print_r( $lezaz->statics());</code>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>set($key, $value)</code></td>
                                <td><code>Null</code></td>
                                <td colspan="2">
                                    لإضافة متغير لتتمكن من إستخدامه في القوالب أو في صفحات أخرى لأن جميع المتغرات في الملفات التي تنفذ داخل الطبقات 
                                    ستكون خاصه بالملف الذي هي فيه وهذه الداله تساعدك لنقل المتغير إلى الطبقات الأخرى في حال أردت إستخدامها
                                    <code>$lezaz->set('my_var',$my_var);</code>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>get($key, $item(optional))</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    إرجاع قيمة المتغيرات القادمه من الطريقه 
                                    <code>$_GET</code>
                                    وفي حال عدم وجودها يقوم النظام بالبحث عن المتغيرات التي قمت بإسنادها عن طريق الداله السابقة 
                                    <code>set()</code>
                                    <br>
                                    في حال كان المتغير القادم من الطريقه 
                                    <code>$_GET</code> 
                                    عباره عن مصفوفه يمكنك الوصول إلى المستوى الأول من المصفوفه بإستخدام المتغير الثاني 
                                    <code>$_GET[id] is same $lezaz->get('id');</code><br/>
                                    <code>$_GET[array][item] is same $lezaz->get('array','item');</code><br/>
                                    <code>$lezaz->set('x','1'); echo $lezaz->get('x'); // result is 1</code><br/>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>post($key, $item(optional))</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    إرجاع قيمة المتغيرات القادمه من الطريقه 
                                    <code>$_POST</code>
                                    <br>
                                    في حال كان المتغير القادم من الطريقه 
                                    <code>$_POST</code> 
                                    عباره عن مصفوفه يمكنك الوصول إلى المستوى الأول من المصفوفه بإستخدام المتغير الثاني 
                                    <code>$_POST[id] is same $lezaz->post('id');</code><br/>
                                    <code>$_POST[array][item] is same $lezaz->post('array','item');</code><br/>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>sess($key, $item(optional))</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    إرجاع قيمة المتغيرات القادمه من الطريقه 
                                    <code>$_SESSION</code>
                                    <br>
                                    في حال كان المتغير القادم من الطريقه 
                                    <code>$_SESSION</code> 
                                    عباره عن مصفوفه يمكنك الوصول إلى المستوى الأول من المصفوفه بإستخدام المتغير الثاني 
                                    <code>$_SESSION[id] is same $lezaz->sess('id');</code><br/>
                                    <code>$_SESSION[array][item] is same $lezaz->sess('array','item');</code><br/>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>cons($key, $item(optional))</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    إرجاع قيمة المتغيرات القادمه من الطريقه 
                                    <code>defined</code>
                                    <br>
                                    في حال كان المتغير القادم من الطريقه 
                                    <code>defined</code> 
                                    عباره عن مصفوفه يمكنك الوصول إلى المستوى الأول من المصفوفه بإستخدام المتغير الثاني 
                                    <code>SITE_DOMAIN is same $lezaz->cons('SITE_DOMAIN');</code><br/>
                                    <code>ANYCONSIPT[item] is same $lezaz->cons('ANYCONSIPT','item');</code><br/>
                                </td>
                            </tr>


                            <tr>
                                <td class='tdfirst'><code>setsetting($parametr, $value = '')</code></td>
                                <td><code>Null</code></td>
                                <td colspan="2">
                                    لحفظ متغيرات على مستوى عالمي  ولمدة طويله , 
                                    يمكن إستخدام هذه المتغيرات كإعدادات للموقع مثل إسم الموقع وماهي اللغه الرئيسيه 
                                    <br/>
                                    يتم حفظ البيانات داخل ملف في القالب الرئيسي بإسم 
                                    <code>setting.ini</code> بشكل مشفر للحمايه القصوى 

                                    <code>$lezaz->setsetting('my_var','my value');</code>  <br>
                                    لحذف متغير فقط قم بإسناد المتغير بدون قيمه 
                                    <code>$lezaz->setsetting('my_var'); // delete my_var</code>  <br>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>setting($key, $defult (optional))</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    لإسترجاع  قيمة متغير تم حفظها كإعداد من الداله 
                                    <br>
                                    <code>echo $lezaz->setsetting('my_var','my value');</code><br>
                                    <code>echo $lezaz->setting('my_var'); // result : my value</code><br>
                                    في حال أردت وجود قيمه إفتراضيه يمكنك إستخدام المتغير الثاني , وفي هذه الحاله إذا لم توجد قيمة للمتغير ستظهر القيمة الإفتراضيه 

                                    <br>
                                    <code>echo $lezaz->setting(Null,'my defult value'); // result : my defult value</code><br>

                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>set_msg($msg, $type)</code></td>
                                <td><code>Null</code></td>
                                <td colspan="2">
                                    لإضافة رسائل أو تنبيهات يمكن إظهارها للمستخدم 
                                    <br>
                                    المتغير الأول نص الرساله والمتغير الثاني نوع الرساله وأنواع الرسائل هي 
                                    <br>

                                    <code>danger</code>
                                    <code>success</code>
                                    <code>warning</code>
                                    <code>info</code>
                                    <br>
                                    <code>$lezaz->set_msg('this is error with your file!', 'danger')</code>
                                </td>
                            </tr>
                            <tr>
                                <td class='tdfirst'><code>msg()</code></td>
                                <td><code>string</code></td>
                                <td colspan="2">
                                    إسترجاع كامل الرسائل التي تم حفظها في الطلب 
                                    <code>echo $lezaz->msg();</code>
                                </td>
                            </tr>                                   
                        </table>


                    </div>
                    <!-- helpers -->

                    <!-- db -->
                    <div id="db" class="tab-pane fade">

                        <h1> <span class="glyphicon glyphicon-download"></span> قواعد البيانات <small>"$lezaz->db"</small></h1>
                        يمكنك إستخدام أي نوع من أنواع قواعد البيانات ولكن لم يتم التأكد إلا من 
                        <code>MYSQL</code>
                        حتى الآن , يمكنك تجربة أي قاعدة بيانات وإخبارنا بنجاحها 


                        <h3>&raquo; <code>$lezaz->db</code></h3>
                        لدينا الكثير من الدوال التي توفر عليك الوقت والجهد كما أننا تركنا لك المجال لإستخدام الدوال الجاهزه في 
                        <code>PDO</code>
                        <br>
                        <code>transaction</code>
                        <pre class="prettyprint"><code>
                        $lezaz->db->transaction($type);
                        //$type = B=begin, C=commit & R=rollback
                        </code></pre>  


                        <br>
                        <code>execute</code>
                        <pre class="prettyprint"><code>
                        $lezaz->db->execute($sp_query);
                        //تنفيذ إستعلامات عن طريق دوال بي أتس بي الجاهزه 
                        </code></pre>                          

                        <br>
                        <code>ShowTables</code>
                        <pre class="prettyprint"><code>
                        $lezaz->db->ShowTables();
                        // عرض جميع الجداول في قاعدة البيانات داخل مصفوفه  

print_r($lezaz->db->ShowTables());
/*
Result:
Array
(
    [1] => Array
        (
            [Tables_in_mydatabase] => pages
        )
    [2] => Array
        (
            [Tables_in_mydatabase] => memb_perm
        )
    [3] => Array
        (
            [Tables_in_mydatabase] => members
        )  
)
*/
                        </code></pre>                          

                        <br>
                        <code> tableExists</code>
                        <pre class="prettyprint"><code>
$lezaz->db->tableExists($table);
//التاكد من وجود الجدول في قاعدة البيانات , تعيد الداله 
//True , False 
                        </code></pre>                          

                        <br>
                        <code>create_table</code>
                        <pre class="prettyprint"><code>
$lezaz->db->create_table($tbl_name, $fields = array())
// تستخدم هذه الداله لإنشاء جدول والتعديل عليه مثل إضافة حقول جديده أو حذفها أو تغيير نوعها 
$field['info1']='VARCHAR(250)';
$field['info2']='int(11)';
$field['any_field']='VARCHAR(15) NOT NULL';

$lezaz->db->create_table('my_table',  $field); 

// في حال لم تقم بإنشاء حقل معرف 
// ID 
// سيتم تعريفه بشكل تلقائي 
// وإذا قمت بتنفيذ نفس الكود السابق مع حذف وإضافه حقول أخرى وتغيير نوع أحد الحقول فسيتم تعديل ذلك فورا 

$field['info1']='VARCHAR(20)';
$field['info3']='int(14)';
$field['any_field']='VARCHAR(15) NOT NULL';

$lezaz->db->create_table('my_table',  $field); 

                        </code></pre>                          


                        <br>
                        <code>query</code>
                        تتميز هذه الداله بعمل نسخة مخبئة من النتائج لمدة معينه ممايخفف الضغط عن الخادم في حال أن النتائج لا يتم تحديها طوال فترة معينه , مثل 
                        صفحات الموقع الثابته والأخبار والمنتجات فجميعها فقط يتم تحديثها من قبل المدير لذلك فهذه البيانات لاتحتاج إلى إعادة تحميلها لكل زائر ويمكنك
                        جعل مدة حفظ نسخة منها مدة سنه ولا تقلق فالنظام يقوم بحذف النسخ المخبئة في حال إدخال أو تعديل أو حذف أي خبر أو منتج 
                        <pre class="prettyprint"><code>
$lezaz->db->query($query, $cacheTime = 0);
// للإستعلام عن جمل سيكول وإرجاع مصفوفه بجميع النتائج 
// المتغير كاش تايم الثاني إختياري , في حال لم يتم إضافته فسيتم أخذ نسخة مخبئة مدة الإعداد 
//SQL_CACHE
//في حال لم ترد أخذ نسخة مخبئة وتريد البيانات مباشرة من قاعدة البيانات فقط قم بجعل قيمة الكاش واحد 

  $rows = $lezaz->db->query("select * from user");
         if (is_array($rows))
        foreach ($rows as $row) {            
            echo "$row[id] | $row[name] | $row[age] \n";
        }
//result
1 | afnan | 8 
2 | ahmed | 10 
3 | bassam | 36 
                        </code></pre>                          


                        <br>
                        <code>num_row</code>
                        لإرجاع عدد السجلات الناتجه عن جملة إستعلام سيكول
                        <pre class="prettyprint"><code>
$lezaz->db->num_row($query);
echo  $lezaz->db->num_row("select * from user"); // 43
//  النتيجه تكون رقم وهو عدد السجلات
                        </code></pre>                          


                        <br>
                        <code>row</code>
                        <pre class="prettyprint"><code>
row($table, $condetion, $row = '*');
//$table : إسم الجدول
//$condetion :  الشرط 
//$row :  الحقول التي سيتم إرجاعها , وهو إختياري والقيمة التلقائيه جميع الحقول , في حال تم وضع إسم حقل واحد يتم إرجاع قيمة نصيه وهي قيمة الحقل أما تركها فارغا فيتم إرجاع مصفوفه 


// إعادة العمر من جدول المستخدمين للحقل إسم يساوي أفنان
echo $lezaz->db->row('user', 'name="afnan"','age'); // 8

// إعادة جميع الحقول من الجدول مستخدمين للحقل إسم يساوي أفنان
print_r(  $lezaz->db->row('user', 'name="afnan"'));
/*
Array
(
    [id] => 1
    [name] => afnan
    [age] => 8
)
*/

// إذا كان الشرط رقم سيعتبر أنك تبحث عن الآي دي رقم 1 مثلا 
print_r(  $lezaz->db->row('user', 1));
/*
Array
(
    [id] => 1
    [name] => afnan
    [age] => 8
)
*/
                        </code></pre>                          

                        <br>
                        <code>save</code>
                        حفظ أو تعديل أي بيانات أي عمليات 
                        <code>insert & update</code> 
                        المتغيرات المطلوبه هي إسم الجدول والحقول مع قيمتها كمصفوفه لعمليه الإدخال أما التعديل فتحتاج إلى باقي المتغيرات وهي الشرط ونوع العمليه 
                        يتم جعل قيمتها واحد 
                        <pre class="prettyprint"><code>
$lezaz->db->save($table, $feilds, $condetion = '', $type = 0) ;
/*
$table : إسم الجدول
$feilds : الحقول كمصفوفه
$condetion : إختياري , الشرط 
$type : إختياري , صفر معناها إدخل وواحد معناها تعديل 
*/
$fields['name']='bassam';
$fields['age']='36';

// إدخال البيانات في قاعدة البيانات
$lezaz->db->save('user',$fields);

// تعديل البيانات بشرط الإسم يساوي أفنان
$lezaz->db->save('user',$fields,'name="afnan"',1);
                        </code></pre>                          

                        <br>
                        <code>delete</code>
                        لحذف سجل من قاعدة البيانات , المتغير الأول لإسم الجدول والثاني للشرط 
                        <br>
                        يمكن أن يكون الشرط فقط رقم ليتم حذف الآي دي لهذا السجل
                        <pre class="prettyprint"><code>
$lezaz->db->delete($table, $condetion);
/*
$table: إسم الجدول
$condetion: الشرط 
ترجع الداله مصفوفه بالسجلات التي تم حذفها
*/

print_r($lezaz->db->delete('user','`name`="bassam"'));
/*
Array
(
    [1] => Array
        (
            [id] => 8
            [name] => bassam
            [age] => 36
        )
    [2] => Array
        (
            [id] => 9
            [name] => bassam
            [age] => 36
        )
)
*/

// لحذف السجل الذي له آي دي 5  أي 
// delete from user where id=5 
$lezaz->db->delete('user',5)); 
                        </code></pre>                          



                    </div>
                    <!-- db -->

                    <!-- files -->
                    <div id="files" class="tab-pane fade">

                        <h1> <span class="glyphicon glyphicon-download"></span> التعامل مع الملفات <small><code>$lezaz->file</code></small></h1>
                        هذه الدوال خاصه بالملفات كتحميلها والتعامل مع والكتابه والقراءه وغيرها من الأمور 

                        <h3>&raquo; <code>$lezaz->file</code></h3>

                        <code>save</code><br/>
                        لحفظ الملفات المرفوعه 
                        <pre class="prettyprint"><code>
$lezaz->file->save($file, $saveto = '', $validation = '');
/*
$file: إسم المتغير القادم من المصفوفه $_FILES
$saveto: المجلد الذي سيتم حفظ الملف به ويكون وداخل المجلد أبلوديدuploaded
$validation: للتحقق من الملف ويكون التحقق بمصفوفه 
*/

if ($_FILES[file1]) {
    $valid[whitelist] = array("gif", "png", "jpg", "jpeg");
    $valid[blacklist] = array("exe", "php");
    $valid[size] = array(20, 30);

    echo $lezaz->file->save($_FILES[file1], 'folder', $valid);
}

/*
result if success 
1452285393.png
>> file save in : /uploaded/folder/1452285393.png

* result if error type 
[danger] [ERR_TYPE]full.txt 

* result if error size 
[danger] [ERR_SIZE]23_pv-micro-inverters-105259-6801101.jpg:52.267KB 
*/
                        </code></pre>                      


                        <code>mkdir</code><br/>
                        لإنشاء مجلد حتى لو كان المجلد الأب غير موجود فيتم إنشاؤه 
                        <pre class="prettyprint"><code>
$lezaz->file->mkdir($path);
/*
$path : مسار المجلد الذي نود إنشاؤه 
ترجع الداله صح أو خطا لتأكيد نجاح العمليه أو فشلها 
*/

echo $lezaz->file->mkdir(UPLOADED_PATH.'bassam'); // 1 
echo $lezaz->file->mkdir(UPLOADED_PATH.'bas~ ^$#*&*(`sam'); // Null
echo $lezaz->file->mkdir(UPLOADED_PATH.'a/s/d/f/g/h'); // 1 

 
                        </code></pre>                      


                        <code>write</code><br/>
                        إنشاء ملف نصي وحذف الملف إن كان موجودا وإعادة إنشاؤه 
                        <pre class="prettyprint"><code>
$lezaz->file->write($file, $content);
 /*
$file : إسم الملف مع المسار كامل 
$content : المحتوى الخاص بالملف لإضافته 
لا تعيد الداله أي قيمة 
*/

$lezaz->file->write(UPLOADED_PATH.'a/a.txt', "this is a test \n new line here!");
/*
create file in /uploaded/a/a.txt with content:
this is a test 
 new line here!
*/

                        </code></pre>                      



                        <code>listfile</code><br/>
                        لإرجاع مصفوفه تحتوي على قائمة بجميع الملفات في مجلد معين بالإضافة لإمكانيه البحث داخل المجلدات الفرعيه للمجلد المطلوب 
                        , كما يمكنك البحث عن ملفات ذات إمتداد معين 
                        <pre class="prettyprint"><code>
$lezaz->file->listfile($dir, $ext = '', $sub = 0) ;
 /*
$dir: مسار المجلد المطلوب البحث فيه 
$ext: إختياري , للبحث عن إمتداد ملفات معينه
$sub: إختياري , للبحث في المجلدات الفرعيه في حال كان له قيمه 
تعيد هذه الداله مصفوفه بجميع الملفات 
*/

$dir = UPLOADED_PATH;
print_r($lezaz->file->listfile($dir));
/*
Array
(
    [C:\xampp\htdocs\fw\uploaded\] => Array
        (
            [0] => .htaccess
            [1] => 1451032564.png
        )

    [C:\xampp\htdocs\fw\uploaded\a/] => Array
        (
            [0] => a.txt
        )

    [C:\xampp\htdocs\fw\uploaded\setting/] => Array
        (
            [0] => 1451033222.png
        )

    [C:\xampp\htdocs\fw\uploaded\site/] => Array
        (
            [0] => 1447581949.png
        )

)
*/


print_r($lezaz->file->listfile($dir, $ext = 'png', 1));
/*
Array
(
    [C:\xampp\htdocs\fw\uploaded\] => Array
        (
            [0] => 1451032564.png
        )

)
*/

                        </code></pre>                      



                        <code>view</code><br/>
                        لعرض ملفات مخبئة بصيغه 
                        <code>HTML</code>
                        <pre class="prettyprint"><code>
$lezaz->file->view($cachefile);
 /*
$cachefile: مسار ملف الويب الكامل
*/

$lezaz->file->view(UPLOADED_PATH.'a/a.txt');
/*
result wll be content of file : 

this is a test 
 new line here!

*/
                        </code></pre>                      



                    </div>
                    <!-- files -->

                    <!-- string -->
                    <div id="string" class="tab-pane fade">

                        <h1> <span class="glyphicon glyphicon-download"></span>النصوص <small><code>$lezaz->string</code> </small></h1>
                        تتضمن لزاز إضافة البحث داخل النصوص لتوفير الوقت والجهد , وهي دوال بسيطه يمكن من خلالها البحث عن أي نص بكل سهوله 
                        <br />

                        <h3>&raquo; $lezaz->string</h3>




                        <code>after</code><br/>

                        <pre class="prettyprint"><code>
$lezaz->string->after($strthis, $inthat);
 
$strthis='abscdefsghijklmnopqrstuvswxyz';
$find= $lezaz->string->after('s',$strthis );
echo "result search for 's' after $strthis is : \n $find";

/*
result search for 's' after abscdefsghijklmnopqrstuvswxyz is : 
 cdefsghijklmnopqrstuvswxyz
*/
                        </code></pre>    



                        <code>after_last</code><br/>

                        <pre class="prettyprint"><code>
$lezaz->string->after_last($strthis, $inthat);
 
$strthis='abscdefsghijklmnopqrstuvswxyz';
$find= $lezaz->string->after_last('s',$strthis );
echo "result search for 's' after_last $strthis is : \n $find";

/*
result search for 's' after_last abscdefsghijklmnopqrstuvswxyz is : 
 wxyz
*/

                        </code></pre>    

                        <code>before</code><br/>

                        <pre class="prettyprint"><code>
$lezaz->string->before($strthis, $inthat);
 
$strthis='abscdefsghijklmnopqrstuvswxyz';
$find= $lezaz->string->before('s',$strthis );
echo "result search for 's' before $strthis is : \n $find";

/*
result search for 's' after_last abscdefsghijklmnopqrstuvswxyz is : 
 ab
*/

                        </code></pre>    

                        <code>after_last</code><br/>

                        <pre class="prettyprint"><code>
$lezaz->string->before_last($strthis, $inthat);
 
$strthis='abscdefsghijklmnopqrstuvswxyz';
$find= $lezaz->string->before_last('s',$strthis );
echo "result search for 's' before_last $strthis is : \n $find";

/*
result search for 's' before_last abscdefsghijklmnopqrstuvswxyz is : 
 abscdefsghijklmnopqrstuv
*/

                        </code></pre>    

                        <code>between</code><br/>

                        <pre class="prettyprint"><code>
$lezaz->string->between($strthis, $that, $inthat);
 
$strthis='abscdefsghijklmnopqrstuvswxyz';
$find= $lezaz->string->between('s','s',$strthis );
echo "result search for between 's' and 's' in $strthis is : \n $find";

/*
result search for between 's' and 's' in abscdefsghijklmnopqrstuvswxyz is : 
 cdef
*/

                        </code></pre>    

                        <code>between_last</code><br/>

                        <pre class="prettyprint"><code>
$lezaz->string->between_last($strthis, $that, $inthat);
 
$strthis='abscdefsghijklmnopqrstuvswxyz';
$find= $lezaz->string->between_last('s','s',$strthis );
echo "result search for between_last 's' and 's' in $strthis is : \n $find";

/*
result search for between_last 's' and 's' in abscdefsghijklmnopqrstuvswxyz is : 
 tuv
*/

                        </code></pre>    

                    </div>
                    <!-- string -->

                    
                    

                


                    <!--/ lezaz -->


                </div>
                <!-- CONTENTS -->
            </div>
            <!-- BODY -->
        </div>
        <!-- /.container -->

        <!-- JavaScript -->
        <script src="http://fw.cms/template/sample/js/jquery.js"></script>
        <script src="http://fw.cms/template/sample/js/bootstrap.js"></script>
     
        <script type="text/javascript">
            $(document).ready(function() {
                $('[data-toggle="tooltip"').tooltip();
                $('tabs a').click(function(e) {
                    e.preventDefault();
                    $(this).tab('show');
                });
            });
        </script>
    </body>
</html>





