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
            <ul uk-tab>
                <li class="uk-active"><a href="#">أضف مادة</a></li>
                <li><a href="#">حذف مادة</a></li>
                <li><a href="#">تعديل المادة</a></li>
            </ul>


            <ul class="uk-switcher uk-margin">
                <li>
                    <fieldset class="uk-fieldset">

                        <div style="display:none" class="uk-alert-danger uk-margin-top uk-margin-bottom" uk-alert id="alert">
                            <a class="uk-alert-close" uk-close></a>
                            <p class="uk-margin-right">الرجاء التعبئة الحقول الثلاثة الأولة وتحديد القسم المناسب لإضافة المادة</p>
                        </div>

                        <legend class="uk-legend">تحديد القسم لإضافة المادة</legend>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <?php foreach($this->departmentList as $key => $value): ?>
                                <label><input class="uk-radio uk-margin-left" type="radio" name="department" value=<?= $value['code_department']?>><?= $value['name_department']?></label>
                            <?php endforeach; ?>
                        </div>

                        <div id="editList">
                            <div class="uk-margin">
                                <input name="code" id="code" class="uk-input" rows="5" placeholder="كود المادة">
                            </div>

                            <div class="uk-margin">
                                    <input name="name" id="name" class="uk-input" rows="5" placeholder="أسم المادة">
                            </div>
                            
                            <div class="uk-margin">
                                    <input name="units" id="units" class="uk-input" rows="5" placeholder="عدد الوحدات المادة">
                            </div>

                            <div class="uk-margin">
                                    <input name="prereq" id="prereq" class="uk-input" rows="5" placeholder="المتطلبات المادة">
                            </div>
                        </div>
                        <button class="uk-button uk-button-primary uk-width-1-1" id="addSubject">إضف المادة</button>
                    </fieldset>
                </li>


                <li>
                    <fieldset class="uk-fieldset">

                        <div style="display:none" class="uk-alert-danger uk-margin-top uk-margin-bottom" uk-alert id="alert">
                            <a class="uk-alert-close" uk-close></a>
                            <p class="uk-margin-right">الرجاء التعبئة الحقول الثلاثة الأولة وتحديد القسم المناسب لإضافة المادة</p>
                        </div>

                        <legend class="uk-legend">تحديد القسم المناسب</legend>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <?php foreach($this->departmentList as $key => $value): ?>
                                <label><input class="uk-radio uk-margin-left" type="radio"  id="deleteSubject" name="department" value=<?= $value['code_department']?>><?= $value['name_department']?></label>
                            <?php endforeach; ?>
                        </div>

                        <legend class="uk-legend uk-margin-top">تحديد المواد للحذف</legend>

                        <div class="uk-section">
                            <div id="DeleteTable" class="uk-container">
                                <table class="uk-table uk-table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>كود المادة</th>
                                            <th>أسم المادة</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                </li>
            </ul>

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
        <script src=<?php echo BASE_URL . "js/login/subject.js"?>></script>
        <script src=<?php echo BASE_URL . "js/jquery-3.2.1.min.js"?>></script>
        <script src=<?php echo BASE_URL . "js/uikit.min.js"?>></script>
        <script src=<?php echo BASE_URL . "js/uikit-icons.min.js"?>></script>
    </body>

</html>