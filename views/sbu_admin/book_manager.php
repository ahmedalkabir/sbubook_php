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
                <li class="uk-active"><a href="#">أضف كتاب</a></li>
                <li><a href="#">حذف كتاب</a></li>
                <li><a href="#">تعديل الكتب</a></li>
            </ul>


            <ul class="uk-switcher uk-margin">
                <li>
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">تحديد القسم والمادة لإضافة الكتب والمراجع</legend>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <?php foreach($this->departmentList as $key => $value): ?>
                                <label><input class="uk-radio uk-margin-left" type="radio" name="department" value=<?= $value['code_department']?>><?= $value['name_department']?></label>
                            <?php endforeach; ?>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label uk-margin-left" for="form-horizontal-text">أختار المادة لإضافة المراجع</label>
                            <div class="uk-margin-right" uk-form-custom="target: > * > span:first">

                                <select class="ADDactivitySelector">
                                    <option value="0">أختار</option>
                                </select>

                                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        
                        <form class="uk-grid-small uk-margin-top" uk-grid>
                            <div class = "uk-width-1-2@s">
                                <label class="uk-form-label uk-margin-bottom" for="form-horizontal-text">أسم الكتاب</label>
                                <input class="uk-input uk-margin-top book_input" type="text" placeholder="أسم الكتاب" disabled>
                            </div>

                            <div class = "uk-width-1-2@s">
                                <label class="uk-form-label uk-margin-bottom" for="form-horizontal-text">نوع الكتاب</label>
                                <input class="uk-input uk-margin-top book_input" type="text" placeholder="نوع الكتاب" disabled>
                            </div>

                            
                            <div class = "uk-width-1-2@s">
                                <label class="uk-form-label uk-margin-bottom" for="form-horizontal-text">حجم الكتاب</label>
                                <input class="uk-input uk-margin-top book_input" type="text" placeholder="حجم الكتاب" disabled>
                            </div>

                            
                            <div class = "uk-width-1-2@s">
                                <label class="uk-form-label uk-margin-bottom" for="form-horizontal-text">رابط التحميل</label>
                                <input class="uk-input uk-margin-top book_input" type="text" placeholder="رابط التحميل" disabled>
                            </div>
                        </form>

                        <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-top" id="addBook">إضف الكتاب</button>

                    </fieldset>
                </li>


                <li>
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">تحديد القسم والمادة</legend>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <?php foreach($this->departmentList as $key => $value): ?>
                                <label><input class="uk-radio uk-margin-left" type="radio" name="department" value=<?= $value['code_department']?>><?= $value['name_department']?></label>
                            <?php endforeach; ?>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label uk-margin-left" for="form-horizontal-text">أختار المادة المناسبة</label>
                            <div class="uk-margin-right" uk-form-custom="target: > * > span:first">

                                <select class="DELETEactivitySelector">
                                    <option value="0">أختار</option>
                                </select>

                                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>

                        <div class="uk-section">
                            <div id="DeleteTable" class="uk-container">
                                <table class="uk-table uk-table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>رقم الكتاب</th>
                                            <th>أسم الكتاب</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                            
                        
                    </fieldset>
                </li>

                <li>
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">تحديد القسم والمادة</legend>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <?php foreach($this->departmentList as $key => $value): ?>
                                <label><input class="uk-radio uk-margin-left" type="radio" name="department" value=<?= $value['code_department']?>><?= $value['name_department']?></label>
                            <?php endforeach; ?>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label uk-margin-left" for="form-horizontal-text">أختار المادة المناسبة</label>
                            <div class="uk-margin-right" uk-form-custom="target: > * > span:first">

                                <select class="EDITactivitySelector">
                                    <option value="0">أختار</option>
                                </select>

                                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>

                            <label class="uk-form-label uk-margin-left uk-margin-right" for="form-horizontal-text">اختار المرجع المناسب للتعديل</label>
                            <div class="uk-margin-right" uk-form-custom="target: > * > span:first">

                                <select class="bookSelector">
                                    <option value="0">أختار</option>
                                </select>

                                <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>

                        <form class="uk-grid-small uk-margin-top" uk-grid>
                            <div class = "uk-width-1-2@s">
                                <label class="uk-form-label uk-margin-bottom" for="form-horizontal-text">أسم الكتاب</label>
                                <input class="uk-input uk-margin-top edit_book" type="text" placeholder="أسم الكتاب" >
                            </div>

                            <div class = "uk-width-1-2@s">
                                <label class="uk-form-label uk-margin-bottom" for="form-horizontal-text">نوع الكتاب</label>
                                <input class="uk-input uk-margin-top edit_book" type="text" placeholder="نوع الكتاب" >
                            </div>

                            
                            <div class = "uk-width-1-2@s">
                                <label class="uk-form-label uk-margin-bottom" for="form-horizontal-text">حجم الكتاب</label>
                                <input class="uk-input uk-margin-top edit_book" type="text" placeholder="حجم الكتاب" >
                            </div>

                            
                            <div class = "uk-width-1-2@s">
                                <label class="uk-form-label uk-margin-bottom" for="form-horizontal-text">رابط التحميل</label>
                                <input class="uk-input uk-margin-top edit_book" type="text" placeholder="رابط التحميل">
                            </div>
                        </form>
                        
                        <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-top" id="editBook">تعديل الكتاب</button>
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
        <script src=<?php echo BASE_URL . "js/login/book.js"?>></script>
        <script src=<?php echo BASE_URL . "js/jquery-3.2.1.min.js"?>></script>
        <script src=<?php echo BASE_URL . "js/uikit.min.js"?>></script>
        <script src=<?php echo BASE_URL . "js/uikit-icons.min.js"?>></script>
    </body>

</html>