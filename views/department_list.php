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
        <?php require_once($this->navigation); ?>
            <div class="uk-container uk-container-large list-book">
                <div class="uk-section uk-section-secondary uk-light">
                    <div class="uk-container">
                        <ul class="uk-breadcrumb">
                            <li><a href="#">الرئيسية</a></li>
                        </ul>
    
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-striped uk-table-hover">
                                <thead>
                                    <tr>
                                        <th>القسم</th>
                                        <th>كود القسم</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($this->departmentList as $key => $value): ?>
                                    <tr>
                                        <td><a href=<?php echo BASE_URL ."department/".$value['code_department']?>><?= $value['name_department']?></a></td>
                                        <td><a href=<?php echo BASE_URL ."department/".$value['code_department']?>><?= $value['code_department']?></a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                     </div>
                </div>            
            </div>

        <footer class="uk-container uk-container-expand footer">
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
        <script src=<?php echo BASE_URL . "js/main.js"?>></script>
        <script src=<?php echo BASE_URL . "js/uikit-icons.min.js"?>></script>
    </body>

</html>