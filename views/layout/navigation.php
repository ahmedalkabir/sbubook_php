<nav class="uk-navbar-container" uk-navbar="mode: click" >
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav menu">
                    <li class="uk-parent"><a href=<?php echo BASE_URL; ?>>الرئيسية</a></li>
                    <li>
                        <a href="">أقسام الكتب</a>
                        <div class="uk-navbar-dropdown">
                             <ul class="uk-nav uk-navbar-dropdown-nav">
                                <?php foreach($this->departmentList as $key => $value):?>
                                <li><a href=<?php echo BASE_URL ."department/"?><?= $value['code_department'] ?>><?= $value['name_department'] ?></a>
                                <?php endforeach; ?>
                             </ul>
                        </div>
                    </li>
                    <li><a href="">المدونة</a></li>
                </ul>
            </div>

             <div class="uk-navbar-left menu">
                <ul class="uk-navbar-nav">
                    <li class="uk-parent about"><button class="uk-button uk-button-primary"><a href=""></a>حول المشروع</button></li>
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
                            <li class="uk-active"><a href=<?php echo BASE_URL; ?>>الرئيسية</a></li>
                            <li class="uk-parent">
                                <a href="#">أقسام الكتب</a>
                                <ul class="uk-nav-sub">
                                    <?php foreach($this->departmentList as $key => $value):?>
                                        <li><a href=<?php echo BASE_URL ."department/"?><?= $value['code_department'] ?>><?= $value['name_department'] ?></a>
                                    <?php endforeach; ?>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">المدونة</a></li>
                        </ul>
                    </div>
                </div>       