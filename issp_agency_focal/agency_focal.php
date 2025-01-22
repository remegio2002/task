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
                    <a class="item online-help-tab1-btn" onclick="content('issp_agency_focal/Login.html')" href="#">Login<span class="fas fa-caret-down first"></span></a>

                    <ul class="online-help-tab1-subitem">
                        <a class="subitem" onclick="content('issp_agency_focal/Chabge-Default-Password.html')" href="#">How to Chabge Default Password</a>
                        <a class="subitem" onclick="content('issp_agency_focal/Initiate-Password-Reset.html')" href="#">How to Initiate Password Reset</a>
                        <a class="subitem" onclick="content('issp_agency_focal/How-to-Login.html')" href="#">How to Login</a>
                    </ul>
                </li>

                <!-- Default Screen -->
                <li>
                    <a class="item" onclick="content('issp_agency_focal/Default-Screen.html')" href="#">Default Screen</a>
                </li>

                <!-- ISSP Module -->
                <li>
                    <a class="item" onclick="content('issp_agency_focal/ISSP-Module.html')" href="#">ISSP Module</a>
                </li>

                <!-- Dashboard -->
                <li>
                    <a class="item" onclick="content('issp_agency_focal/Dashboard.html')" href="#">Dashboard</a>
                </li>

                <!-- Agency Profile -->
                <li>
                    <a class="item online-help-tab2-btn" onclick="content('issp_agency_focal/Agency-Profile.html')" href="#">Agency Profile<span class="fas fa-caret-down second"></span></a>

                    <ul class="online-help-tab2-subitem">

                        <li>
                            <!-- Profile -->
                            <a class="subitem online-help-tab2-1-subitem" onclick="content('issp_agency_focal/Profile.html')" href="#">Profile<span class="fas fa-caret-down second-1"></span></a>

                            <ul class="online-help-tab2-1-sub-subitem">
                                <a class="subitem subitem2" onclick="content('issp_agency_focal/.html')" href="#">Dashboard</a>
                            </ul>

                            <!-- Mandate -->
                            <a class="subitem online-help-tab2-2-subitem" onclick="content('issp_agency_focal/Mandate.html')" href="#">Mandate<span class="fas fa-caret-down second-2"></span></a>

                            <ul class="online-help-tab2-2-sub-subitem">
                                <a class="subitem subitem2" onclick="content('issp_agency_focal/.html')" href="#">Dashboard</a>
                            </ul>
                        </li>

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

<script src="js/agency_focal.js"></script>