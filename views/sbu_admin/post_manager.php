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
        <link rel="stylesheet" href=<?php echo BASE_URL . "css/trumbowyg.min.css"?>>
        
        <style>
            .trumbowyg-box, .trumbowyg-editor{                
                margin-top: 0px;
                margin-bottom: 0px;
            }
        </style>
    </head>



    <body id="bkg">

        <div class="uk-container uk-container-large box">
            <div class="logo">
                <img src=<?php echo BASE_URL . "img/logo.png"?>>
            </div>
        </div>

        <nav class="uk-navbar-container" uk-navbar="mode: click" >
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav menu">
                <li class="uk-parent"><a href="">إدارة الأقسام</a></li>
                <li><a href="">إدارة المواد</a></li>
                <li><a href="">إدارة الكتب</a></li>
                <li><a href="">إدارة المدونة</a></li>
            </ul>
        </div>

         <div class="uk-navbar-left menu">
            <ul class="uk-navbar-nav">
                <li class="uk-parent about"><button class="uk-button uk-button-primary"><a href=""></a>تسجيل الخروج</button></li>
            </ul>
        </div>   

        <div class="uk-navbar-container menu-toggle" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-slide" href=""></a>
            </div>
        </div>
    </nav>
    <!-- side nav -->
            <div id="offcanvas-slide" uk-offcanvas="flip:true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-text-center">

                    <button class="uk-offcanvas-close uk-close-large" type="button" uk-close></button>

                    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical uk-nav-parent-icon" uk-nav>
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a>
                                    <ul>
                                        <li><a href="#">Sub item</a></li>
                                        <li><a href="#">Sub item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#js-options">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>

                    <div>
                        <div class="uk-grid-small uk-child-width-auto uk-flex-inline" uk-grid>
                            <div>
                                <a class="uk-icon-button" href="#" uk-icon="icon: facebook"></a>
                            </div>
                            <div>
                                <a class="uk-icon-button" href="#" uk-icon="icon: twitter"></a>
                            </div>
                            <div>
                                <a class="uk-icon-button" href="#" uk-icon="icon: mail"></a>
                            </div>
                            <div>
                                <a class="uk-icon-button" href="#" uk-icon="icon: receiver"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>     

            <div class="uk-section uk-section-secondary">
                <div class="uk-container uk-container-expand">
                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-radio uk-margin-left" type="radio" name="opt" checked> إضافة المقالة</label>
                        <label><input class="uk-radio uk-margin-left" type="radio" name="opt">تعديل المقالة</label>
                    </div>
                    <form class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-2@s">
                            <label class="uk-form-label" for="form-stacked-text">عنوان المقالة</label>
                            <input class="uk-input" type="text" id="title" placeholder="عنوان المقال">
                        </div>
                        <div class="uk-width-1-2@s">
                            <label class="uk-form-label" for="form-stacked-text">الكاتب</label>
                            <input class="uk-input" type="text" id="author" placeholder="الكاتب">
                        </div>
                        <input class="uk-input uk-width-1-2" id="url_image" type="text" placeholder="ضع رابط هنا أو أضف صورة منك">
                        <div class="uk-margin-right" uk-form-custom>
                            <input type="file">
                            <button class="uk-button uk-button-default" type="button" tabindex="-1">أختار صورة معينة</button>
                        </div>   
                    </form>
                </div>
            </div>
            <div>
                <textarea dir="ltr" id="trump" ></textarea>
            <div>
            <div class="uk-section uk-section-secondary">
                <div class="uk-container uk-container-expand">
                    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-top uk-margin-bottom" id="addPost">أضف المقالة</button>
                </div>

                <div id="DeleteTable" class="uk-container">
                    <table class="uk-table uk-table-striped">
                        <thead>
                            <tr>
                                <th>رقم المقالة</th>
                                <th>أسم المقالة</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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
                    <img class="uk-align-center logo-footer" src=<?php echo BASE_URL . "img/logo_footer.png"?>>
                    <span class="logo-title-sbu">جامعة صبراته</span>
                </div>
                <div>
                    <h4 class="last-blogs-title"><span>القائم علي المشرع</span></h4>
                    <span class="span-font uk-text-large uk-text-center"> مشروع تطوعي من تنفيذ طلبة كلية الهندسة - جامعة صبراته </span>
                </div>
            </div>
        </footer>
        <script src=<?php echo BASE_URL . "js/jquery-3.2.1.min.js"?>></script>
        <script src=<?php echo BASE_URL . "js/uikit.min.js"?>></script>
        <script src=<?php echo BASE_URL . "js/uikit-icons.min.js"?>></script>
        <script src=<?php echo BASE_URL . "js/trumbowyg.min.js"?>></script>
        <script src=<?php echo BASE_URL . "tinymce/tinymce.min.js"?>></script>
        <script src=<?php echo BASE_URL . "js/login/posts.js"?>></script>
    </body>

</html>