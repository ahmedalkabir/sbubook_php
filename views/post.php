<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?= $this->posts[0]['post_title'] ?></title>


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

        <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('<?php echo $this->posts[0]['post_image']; ?>')" >
        </div>

        <div class="uk-section uk-section-secondary uk-preserve-color">
            <div class="uk-container uk-container-large blog">
                <div class="uk-card uk-card-default uk-padding uk-card-body card-ak">
                    <div class="header-meta-data uk-margin-top">
                        <h1 class="uk-heading-primary"><?= $this->posts[0]['post_title'] ?></h1>
                        <ul class="uk-breadcrumb">
                            <li><a href="#">الرئيسية</a></li>
                            <li><a href="#">المدونة</a></li>
                        </ul>
                                
                        <div class="author-img">
                            <img alt src="img/fpo.png" height="64" width="64">
                        </div>
                
                        <div class="author-info">
                            <a href="#" rel="author"><?= $this->posts[0]['post_user'] ?></a>
                        </div>

                    </div>

                    <div class="uk-section article-section">
                            <div class="uk-container">
                                <span class="uk-text-lead"><?= $this->posts[0]['post_content'] ?></span>
                            </div>
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