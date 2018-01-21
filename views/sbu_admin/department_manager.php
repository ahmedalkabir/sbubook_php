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
        <div class="uk-container">
            <legend class="uk-legend">إضافة قسم للقواعد البيانات</legend>
            <form class="uk-grid-small uk-margin-top" uk-grid>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" id="code" type="text" placeholder="رمز القسم">
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input" id="name" type="text" placeholder="أسم القسم">
                </div>
            </form>   
            <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-top" id="addDepartment">إضف الفسم</button>     
        </div>

        <div class="uk-container uk-margin-top">
            <legend class="uk-legend">حذف الأقسام <span class="uk-margin-small-right refresh" uk-icon="icon: refresh; ratio: 2"></span></legend>
            
                <div class="uk-section">
                    <div id="DeleteTable" class="uk-container">
                        <table class="uk-table uk-table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>رمز القسم</th>
                                    <th>أسم القسم</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>      
        </div>


        <div class="uk-container">
            <legend class="uk-legend">تعديل القسم</legend>
            <label class="uk-form-label uk-margin-left uk-margin-right" for="form-horizontal-text">أختار القسم للتعديل</label>
            <div class="uk-margin-right" uk-form-custom="target: > * > span:first">

                <select class="departmentSelector">
                    <option value="0">أختار</option>
                </select>

                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                    <span></span>
                    <span uk-icon="icon: chevron-down"></span>
                </button>
            </div>
            <form class="uk-grid-small uk-margin-top" uk-grid>
                <div class="uk-width-1-2@s">
                    <input class="uk-input edit" id="code" type="text" placeholder="رمز القسم">
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input edit" id="name" type="text" placeholder="أسم القسم">
                </div>
            </form>   
            <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-top" id="editDepartment">تعديل القسم</button>     
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
        <script src=<?php echo BASE_URL . "js/login/department.js"?>></script>
        <script src=<?php echo BASE_URL . "js/jquery-3.2.1.min.js"?>></script>
        <script src=<?php echo BASE_URL . "js/uikit.min.js"?>></script>
        <script src=<?php echo BASE_URL . "js/uikit-icons.min.js"?>></script>
    </body>

</html>