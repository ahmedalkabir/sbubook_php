<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>لوحة التحكم</title>


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
       
        <div class="uk-section uk-section-muted uk-margin-bottom">
            <div class="uk-container">
                <form class=" uk-text-left" action="login/in" method="post">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                            <input class="uk-input uk-text-left" name="username" type="text" placeholder="Enter User Name">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input uk-text-left" name="password" type="password" placeholder="Enter Password">
                        </div>

                        <input class="uk-button uk-button-default uk-width-1-1" type="submit" name="submit" value="login">
                    </fieldset>
                </form>                    
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
        <script src=<?php echo BASE_URL . "js/main.js"?>></script>
        <script src=<?php echo BASE_URL . "js/uikit-icons.min.js"?>></script>
    </body>

</html>