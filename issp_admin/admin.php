<div>
    <nav class="sidebar">

        <ul>
            <li class="btn-online-help">
                <span><i class="fa-solid fa-circle-question fa-2x"></i></span>
                &nbsp;
                <span class="leftside-tab">Online Help</span>
            </li>

            <div class="div-online-help">

                <!-- Search -->
                <li>
                    <div class="search_textbox">
                        <input class="search_placeholder" id="search_key" name="search_key" placeholder="Search..." type="text">                        
                        <span class="fa-solid fa-magnifying-glass"></span>                        
                    </div>
                </li>

                <!-- Login -->
                <li>
                    <a class="item online-help-tab1-btn" onclick="content('techub_admin/Login.html')" href="#">Login<span class="fas fa-caret-down first"></span></a>

                    <ul class="online-help-tab1-subitem">
                        <li><a class="subitem" onclick="content('techub_admin/How-to-Login.html')" href="#">How to Login</a></li>
                    </ul>
                </li>

                <li style="padding-top: 25px; background-color: white;"></li>
                
            </div>

            <li class="btn-faqs">
                <span><i class="fa-sharp fa-solid fa-comments fa-2x"></i></span>
                &nbsp;
                <span class="leftside-tab">FAQs</span>
            </li>                    

            <div class="div-faqs">

                <li><a class="subitem" onclick="content('techub_admin/Add-Technology.html')" href="#">How to Add Technology</a></li>
                
                <li style="padding-top: 25px; background-color: white;"></li>   
                             
            </div>

            <li class="btn-about" onclick="content('about.html')">
                <span><i class="fa-sharp fa-solid fa-circle-info fa-2x"></i></span>
                &nbsp;
                <span class="leftside-tab">About</span>
            </li>
        </ul>

    </nav>

    <div id="div_content">
        <!-- Page Content  -->
    </div>
    
</div>    

<div class="footer">
    <div class="footer-img">
        <img src="img_asset/dost_logo.png">
    </div>

    <div>
        <span>© 2022 DEPARTMENT OF SCIENCE AND TECHNOLOGY - ALL RIGHTS RESERVED</span>
    </div>
</div>

<script src="js/admin.js"></script>