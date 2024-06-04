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
                    <a class="item online-help-tab1-btn" onclick="content('techub_adoptors/Login.html')" href="#">Login<span class="fas fa-caret-down first"></span></a>

                    <ul class="online-help-tab1-subitem">
                        <li><a class="subitem" onclick="content('techub_adoptors/How-to-Login.html')" href="#">How to Login</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/How-to-Register.html')" href="#">How to Register</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/Forgot-Password.html')" href="#">How to request Forgot Password</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/Reset-Password.html')" href="#">How to Reset Password</a></li>
                    </ul>
                </li>
                
                <!-- Default Screen -->
                <li>
                    <a class="item" onclick="content('techub_adoptors/Default-Screen.html')" href="#">Default Screen</a>
                </li>

                <!-- TecHub Module -->
                <li>
                    <a class="item" onclick="content('techub_adoptors/TecHub-Module.html')" href="#">TecHub Module</a>
                </li>

                <!-- Home -->
                <li>
                    <a class="item online-help-tab2-btn" onclick="content('techub_adoptors/Home.html')" href="#">Home<span class="fas fa-caret-down second"></span></a>

                    <ul class="online-help-tab2-subitem">
                        <li><a class="subitem" onclick="content('techub_adoptors/Adopt-Technology.html')" href="#">How to Adopt Technology</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/Track-Status.html')" href="#">How to Track Status</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/Complete-Technology-Information.html')" href="#">How to View Complete Technology Information</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/Technology-filtered-by-Category.html')" href="#">How to View Technology filtered by Category</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/List-of-Technologies-Produced.html')" href="#">How to View all the List of Technologies Produced</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/List-of-Latest-Added-Technologies.html')" href="#">How to View all the List of Latest Added Technologies</a></li>
                    </ul>
                </li>

                <!-- About -->
                <li>
                    <a class="item online-help-tab3-btn" onclick="content('techub_adoptors/About_tab.html')" href="#">About<span class="fas fa-caret-down third"></span></a>

                    <ul class="online-help-tab3-subitem">
                        <li><a class="subitem" onclick="content('techub_adoptors/About.html')" href="#">How to View Information About the System</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/How-the-System-Works.html')" href="#">How to View on How the System Works</a></li>
                    </ul>
                </li>

                <!-- Services -->
                <li>
                    <a class="item online-help-tab4-btn" onclick="content('techub_adoptors/Services.html')" href="#">Services<span class="fas fa-caret-down fourth"></span></a>

                    <ul class="online-help-tab4-subitem">
                        <li><a class="subitem" onclick="content('techub_adoptors/List-of-Technology-Transfer-Commercialization-Program.html')" href="#">How to View List of Technology Transfer & Commercialization Program</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/List-of-Scientific-and-Technical-Services.html')" href="#">How to View List of Scientific & Technical Services</a></li>
                        <li><a class="subitem" onclick="content('techub_adoptors/List-of-S-and-T-Information-Dissemination.html')" href="#">How to View List of S&T Information Dissemination</a></li>
                    </ul>
                </li>

                <!-- User -->
                <li>
                    <a id="item" class="online-help-tab5-btn" onclick="content('techub_adoptors/User.html')" href="#">User<span class="fas fa-caret-down fifth"></span></a>

                    <ul class="online-help-tab5-subitem">
                        <li><a class="subitem" onclick="content('techub_adoptors/Logout.html')" href="#">How to Logout</a></li>
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

                <li><a class="subitem" onclick="content('techub_adoptors/How-to-Register.html')" href="#">How to Register</a></li>
                <li><a class="subitem" onclick="content('techub_adoptors/Forgot-Password.html')" href="#">How to request Forgot Password</a></li>
                <li><a class="subitem" onclick="content('techub_adoptors/Reset-Password.html')" href="#">How to Reset Password</a></li>

                <li><a class="subitem" onclick="content('techub_adoptors/Adopt-Technology.html')" href="#">How to Adopt Technology</a></li>
                <li><a class="subitem" onclick="content('techub_adoptors/Track-Status.html')" href="#">How to Track Status</a></li>
                <li><a class="subitem" onclick="content('techub_adoptors/Complete-Technology-Information.html')" href="#">How to View Complete Technology Information</a></li>
                <li><a class="subitem" onclick="content('techub_adoptors/Technology-filtered-by-Category.html')" href="#">How to View Technology filtered by Category</a></li>
  
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

<script src="js/user.js"></script>