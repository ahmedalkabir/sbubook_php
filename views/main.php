<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>المكتبة الإلكترونية</title>


        <link rel="stylesheet" href=<?php echo BASE_URL . "css/uikit.min.css"?>>
        <link rel="stylesheet" href=<?php echo BASE_URL . "css/main.css"?>>
        <link rel="stylesheet" href=<?php echo BASE_URL . "css/default.css"?>>
        <link rel="stylesheet" href=<?php echo BASE_URL . "css/post.css"?>>
        <link rel="stylesheet" href=<?php echo BASE_URL . "css/font-awesome.min.css"?>>
    </head>
<body id="bkg">

        <div class="uk-container uk-container-large box">
            <div class="logo">
                <img src=<?php echo BASE_URL ."img/logo.png"?>>
            </div>
        </div>
        <?php require_once($this->navigation); ?>
        <div class="uk-container uk-container-large info-project">
            <div class="uk-grid-medium uk-child-width-expand@s uk-text-center grid-ak " uk-grid>
                <div class="uk-card uk-card-default uk-card-body card-ak">
                    <i class="fa fa-book fa-5x"><h1>المكتبة الإلكترونية</h1></i>
                    <h4>مشروع المكتبة الإلكترونية حيث يستهدف طلبة كليات الهندسة بالمجمل 
                        و نحاول أن نوفر أغلب المراجع الهندسية لطلبةالكليات الهندسية
                        والتقنية في محاولة تقليل من الجهد الطالب عن البحث عن المراجع </h4>
                </div>

                <div class="uk-card uk-card-default uk-card-body card-ak">
                    <i class="fa fa-pencil fa-5x"><h1>المدونة الطالب</h1></i>
                    <h4>لا يقف المشروع عند المكتبة بل أيضا نحاول نشر مقالات التي ترتبط بالطالب
                         في محاولة لمساعدة
                         الطالب في مشواره العلمي</h4>
                </div>
            </div>
        </div>
       
        <div class="uk-container uk-container-large last-blogs">
            <div class="uk-grid-match uk-grid-small" uk-grid>
                <div class="uk-width-3-5@m uk-width-2-3@l">
                    <div class="uk-card uk-card-default uk-card-body card-ak">
                        <h2 class="last-blogs-title"><span>أخر مادون</span></h2>
                        <div class="list-articles">
                        <?php foreach($this->posts as $key => $value):?>
                            <div class="uk-grid-medium uk-child-width-expand@s uk-grid">
                                <article class="article-item">
                                    <a href=<?php echo "/post?id=".$value['post_id'];?> class="blog-item">
                                        <div class="uk-first-column">
                                            <img class="uk-align-center uk-align-right@m uk-margin-remove-adjacent" src="<?= $value['post_image'] ;?>" width="350" alt="">
                                            <h1 class="title-blog"><?= $value['post_title']?></h1>
                                            <p class="entry-details "><?= substr(strip_tags($value['post_content']), 0,120) . ".........."?></p>
                                            <a href=""><p class="author">الكاتب : <?= $value['post_user']?></p></a>                                     
                                        </div>
                                    </a>
                                </article>  
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="uk-width-1-5@m uk-width-1-3@l uk-width-expand">
                    <div class="uk-card uk-card-default uk-padding uk-card-body card-ak">
                        <h2 class="last-blogs-title"><span>أخر الكتب المضافة</span></h2>
                        <div class="uk-grid-small uk-child-width-expand@s uk-grid">

                            <div class="last-book items">
                                <article class="article-item uk-margin-top">
                                    <a href="" class="blog-item">
                                        <div class="uk-first-column">
                                            <a href=""><h1 class="title-blog uk-text-center">Numerical Methods With Matlab Applications</h1></a>
                                            <span class="uk-text-right uk-text-meta">القسم : </span>
                                            <span class="uk-text-right uk-text-meta uk-margin-left">الكهربائية والإتصاللات</span>
                                            <span class="uk-text-right uk-text-meta uk-margin-right">تاريخ الإضافة :</span>
                                            <span class="uk-text-right uk-text-meta">1/2/2001</span>
                                        </div>
                                    </a>
                                </article>
                                <article class="article-item uk-margin-top">
                                    <a href="" class="blog-item">
                                        <div class="uk-first-column">
                                            <a href=""><h1 class="title-blog uk-text-center">Digital Design Morris Mano 5th Edition</h1></a>
                                            <span class="uk-text-right uk-text-meta">القسم : </span>
                                            <span class="uk-text-right uk-text-meta uk-margin-left">الكهربائية والإتصاللات</span>
                                            <span class="uk-text-right uk-text-meta uk-margin-right">تاريخ الإضافة :</span>
                                            <span class="uk-text-right uk-text-meta">1/2/2001</span>
                                        </div>
                                    </a>
                                </article>
                                <article class="article-item uk-margin-top">
                                    <a href="" class="blog-item">
                                        <div class="uk-first-column">
                                            <a href=""><h1 class="title-blog uk-text-center">Digital Systems Principles and Applications</h1></a>
                                            <span class="uk-text-right uk-text-meta">القسم : </span>
                                            <span class="uk-text-right uk-text-meta uk-margin-left">الكهربائية والإتصاللات</span>
                                            <span class="uk-text-right uk-text-meta uk-margin-right">تاريخ الإضافة :</span>
                                            <span class="uk-text-right uk-text-meta">1/2/2001</span>
                                        </div>
                                    </a>
                                </article>                                 
                            </div>

                        </div>
                    </div>
                    <div class="uk-card uk-card-default uk-padding uk-card-body card-ak">
                        <h2 class="last-blogs-title"><span>تابعنا</span></h2>
                        <div class="uk-grid-small uk-child-width-expand@s uk-grid">
                            <iframe class="uk-margin" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBETA-GROUP-1239063602774641%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                                width="500" height="500" 
                                style="border:none;overflow:hidden" 
                                scrolling="no" frameborder="0" 
                                allowTransparency="true"></iframe>                            
                        </div>
                    </div>
                </div>                
            </div>
        </div>

        <footer class="uk-container uk-container-large footer">
            <div class="uk-child-width-expand@s uk-text-center uk-margin-top grid-ak-footer" uk-grid>
                <div>
                    <h4 class="last-blogs-title"><span>مواقع صديقة</span></h4>
                    <ul class="uk-list">
                        <li>جامعة صبراته</li>
                        <li>وازرة التعليم العالي</li>
                    </ul>
                </div>
                <div>
                    <img class="uk-align-center logo-footer" src="img/logo_footer.png">
                    <span class="logo-title-sbu">جامعة صبراته</span>
                </div>
                <div>
                    <h4 class="last-blogs-title"><span>القائم علي المشرع</span></h4>
                    <span class="span-font uk-text-large uk-text-center"> مشروع تطوعي من تنفيذ طلبة كلية الهندسة - جامعة صبراته </span>
                </div>
            </div>
        </footer>
        
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </body>

</html>