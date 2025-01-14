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
                        <input class="search_placeholder" id="search_key" name="search_key" placeholder="Search..." type="text" onkeyup="searchLinks()">                        
                        <span class="fa-solid fa-magnifying-glass"></span>                        
                    </div>
                </li>

                <!-- Login -->
                <li>
                    <a class="item online-help-tab1-btn" onclick="content('issp_admin/Login.html')" href="#">Login<span class="fas fa-caret-down first"></span></a>

                    <ul class="online-help-tab1-subitem">
                        <a class="subitem" onclick="content('issp_admin/How-to-Login.html')" href="#">How to Login</a>
                    </ul>
                </li>

                <!-- Default Screen -->
                <li>
                    <a class="item" onclick="content('issp_admin/Default-Screen.html')" href="#">Default Screen</a>
                </li>

                <!-- ISSP Module -->
                <li>
                    <a class="item" onclick="content('issp_admin/ISSP-Module.html')" href="#">ISSP Module</a>
                </li>

                <!-- Dashboard -->
                <li>
                    <a class="item" onclick="content('issp_admin/Dashboard.html')" href="#">Dashboard</a>
                </li>

                <!-- Agency Profile -->
                <li>
                    <a class="item online-help-tab2-btn" onclick="content('issp_admin/Agency-Profile.html')" href="#">Agency Profile<span class="fas fa-caret-down second"></span></a>

                    <ul class="online-help-tab2-subitem">
                        <a class="subitem" onclick="content('issp_admin/Profile.html')" href="#">How to View Agency Profile</a>
                        <a class="subitem" onclick="content('issp_admin/Mandate.html')" href="#">How to View Agency Mandate</a>
                    </ul>
                </li>

                <!-- Strategic Plan -->
                <li>
                    <a class="item online-help-tab3-btn" onclick="content('issp_admin/Strategic-Plan.html')" href="#">Strategic Plan<span class="fas fa-caret-down third"></span></a>

                    <ul class="online-help-tab3-subitem">
                        <li>
                            <a class="subitem" onclick="content('issp_admin/Organizational-Structure.html')" href="#">Organizational Structure</a>
                            <a class="subitem" onclick="content('issp_admin/IS-Strategy.html')" href="#">IS Strategy</a>
                        
                            <a class="subitem online-help-tab3-1-subitem" onclick="content('issp_admin/ICT-Projects.html')" href="#">ICT Projects<span class="fas fa-caret-down third-1"></span></a>

                            <ul class="online-help-tab3-1-sub-subitem">
                                <a class="subitem subitem2" onclick="content('issp_admin/View-List-Grants-In-Aid-Projects.html')" href="#">How to View the list of Grants-In-Aid (GIA) Projects</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/View-List-Cross-Agency-ICT-Projects.html')" href="#">How to View the list of Cross-Agency ICT Projects</a>
                            </ul>

                            <a class="subitem online-help-tab3-2-subitem" onclick="content('issp_admin/Resource-Requirements.html')" href="#">Resource Requirements<span class="fas fa-caret-down third-2"></span></a>

                            <ul class="online-help-tab3-2-sub-subitem">
                                <a class="subitem subitem2" onclick="content('issp_admin/View-List-Continuing-Costs.html')" href="#">How to View the list of Continuing Costs</a>
                            </ul>
                        </li>

                    </ul>
                </li>

                <!-- Report -->
                <li>
                    <a class="item online-help-tab4-btn" onclick="content('issp_admin/Report.html')" href="#">Report<span class="fas fa-caret-down fourth"></span></a>

                    <ul class="online-help-tab4-subitem">
                        <a class="subitem" onclick="content('issp_admin/Preview-Report.html')" href="#">How to Preview Information Systems Strategic Plan</a>
                    </ul>
                </li>

                 <!-- Library -->
                 <li>
                    <a class="item online-help-tab5-btn" onclick="content('issp_admin/Library.html')" href="#">Library<span class="fas fa-caret-down fifth"></span></a>

                    <ul class="online-help-tab5-subitem">

                        <li>
                            <a class="subitem online-help-tab5-1-subitem" onclick="content('issp_admin/Agency-Institution.html')" href="#">Agency/Institution<span class="fas fa-caret-down fifth-1"></span></a>

                            <ul class="online-help-tab5-1-sub-subitem">
                                <a class="subitem subitem2" onclick="content('issp_admin/Search-Agency-Institution.html')" href="#">How to Search Agency/Institution</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Add-Agency-Institution.html')" href="#">How to Add Agency/Institution</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Edit-Agency-Institution.html')" href="#">How to Edit Agency/Institution</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Delete-Agency-Institution.html')" href="#">How to Delete Agency/Institution</a>
                            </ul>

                            <a class="subitem online-help-tab5-2-subitem" onclick="content('issp_admin/Funding-Source.html')" href="#">Funding Source<span class="fas fa-caret-down fifth-2"></span></a>

                            <ul class="online-help-tab5-2-sub-subitem">
                                <a class="subitem subitem2" onclick="content('issp_admin/Search-Funding-Source.html')" href="#">How to Search Funding Source</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Add-Funding-Source.html')" href="#">How to Add Funding Source</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Edit-Funding-Source.html')" href="#">How to Edit Funding Source</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Delete-Funding-Source.html')" href="#">How to Delete Funding Source</a>
                            </ul>

                            <a class="subitem online-help-tab5-3-subitem" onclick="content('issp_admin/ICT-Categories.html')" href="#">ICT Categories<span class="fas fa-caret-down fifth-3"></span></a>

                            <ul class="online-help-tab5-3-sub-subitem">
                                <a class="subitem subitem2" onclick="content('issp_admin/Search-ICT-Categories.html')" href="#">How to Search ICT Categories</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Add-ICT-Categories.html')" href="#">How to Add ICT Categories</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Edit-ICT-Categories.html')" href="#">How to Edit ICT Categories</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Delete-ICT-Categories.html')" href="#">How to Delete ICT Categories</a>
                            </ul>

                            <a class="subitem online-help-tab5-4-subitem" onclick="content('issp_admin/ICT-Items.html')" href="#">ICT Items<span class="fas fa-caret-down fifth-4"></span></a>

                            <ul class="online-help-tab5-4-sub-subitem">
                                <a class="subitem subitem2" onclick="content('issp_admin/Search-ICT-Items.html')" href="#">How to Search ICT Items</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Add-ICT-Items.html')" href="#">How to Add ICT Items</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Edit-ICT-Items.html')" href="#">How to Edit ICT Items</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Delete-ICT-Items.html')" href="#">How to Delete ICT Items</a>
                            </ul>

                            <a class="subitem online-help-tab5-5-subitem" onclick="content('issp_admin/IS-Classification.html')" href="#">IS Classification<span class="fas fa-caret-down fifth-5"></span></a>

                            <ul class="online-help-tab5-5-sub-subitem">
                                <a class="subitem subitem2" onclick="content('issp_admin/Search-IS-Classification.html')" href="#">How to Search IS Classification</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Add-IS-Classification.html')" href="#">How to Add IS Classification</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Edit-IS-Classification.html')" href="#">How to Edit IS Classification</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Delete-IS-Classification.html')" href="#">How to Delete IS Classification</a>
                            </ul>

                            <a class="subitem online-help-tab5-6-subitem" onclick="content('issp_admin/User-Accounts.html')" href="#">User Accounts<span class="fas fa-caret-down fifth-6"></span></a>

                            <ul class="online-help-tab5-6-sub-subitem">
                                <a class="subitem subitem2" onclick="content('issp_admin/Search-User-Account.html')" href="#">How to Search User Accounts</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Add-User-Account.html')" href="#">How to Add User Account</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Edit-User-Account.html')" href="#">How to Edit User Account</a>
                                <a class="subitem subitem2" onclick="content('issp_admin/Delete-User-Account.html')" href="#">How to Delete User Account</a>
                            </ul>

                        </li>

                    </ul>
                </li>

                <!-- User -->
                <li>
                    <a class="item online-help-tab6-btn" onclick="content('issp_admin/User.html')" href="#">User<span class="fas fa-caret-down sixth"></span></a>

                    <ul class="online-help-tab6-subitem">
                        <a class="subitem" onclick="content('issp_admin/Logout.html')" href="#">How to Logout</a>
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

                <!-- Agency Profile -->
                <li><a class="subitem" onclick="content('issp_admin/Profile.html')" href="#">How to View Agency Profile</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Mandate.html')" href="#">How to View Agency Mandate</a></li>

                <!-- Strategic Plan -->
                <li><a class="subitem" onclick="content('issp_admin/View-List-Grants-In-Aid-Projects.html')" href="#">How to View the list of Grants-In-Aid (GIA) Projects</a></li>
                <li><a class="subitem" onclick="content('issp_admin/View-List-Cross-Agency-ICT-Projects.html')" href="#">How to View the list of Cross-Agency ICT Projects</a></li>
                <li><a class="subitem" onclick="content('issp_admin/View-List-Continuing-Costs.html')" href="#">How to View the list of Continuing Costs</a></li>

                <!-- Report -->
                <li><a class="subitem" onclick="content('issp_admin/Preview-Report.html')" href="#">How to Preview Information Systems Strategic Plan</a></li>

                <!-- Library -->
                <li><a class="subitem" onclick="content('issp_admin/Search-Agency-Institution.html')" href="#">How to Search Agency/Institution</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Add-Agency-Institution.html')" href="#">How to Add Agency/Institution</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Edit-Agency-Institution.html')" href="#">How to Edit Agency/Institution</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Delete-Agency-Institution.html')" href="#">How to Delete Agency/Institution</a></li>

                <li><a class="subitem" onclick="content('issp_admin/Search-Funding-Source.html')" href="#">How to Search Funding Source</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Add-Funding-Source.html')" href="#">How to Add Funding Source</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Edit-Funding-Source.html')" href="#">How to Edit Funding Source</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Delete-Funding-Source.html')" href="#">How to Delete Funding Source</a></li>

                <li><a class="subitem" onclick="content('issp_admin/Search-ICT-Categories.html')" href="#">How to Search ICT Categories</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Add-ICT-Categories.html')" href="#">How to Add ICT Categories</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Edit-ICT-Categories.html')" href="#">How to Edit ICT Categories</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Delete-ICT-Categories.html')" href="#">How to Delete ICT Categories</a></li>

                <li><a class="subitem" onclick="content('issp_admin/Search-ICT-Items.html')" href="#">How to Search ICT Items</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Add-ICT-Items.html')" href="#">How to Add ICT Items</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Edit-ICT-Items.html')" href="#">How to Edit ICT Items</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Delete-ICT-Items.html')" href="#">How to Delete ICT Items</a></li>

                <li><a class="subitem" onclick="content('issp_admin/Search-IS-Classification.html')" href="#">How to Search IS Classification</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Add-IS-Classification.html')" href="#">How to Add IS Classification</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Edit-IS-Classification.html')" href="#">How to Edit IS Classification</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Delete-IS-Classification.html')" href="#">How to Delete IS Classification</a></li>

                <li><a class="subitem" onclick="content('issp_admin/Search-User-Account.html')" href="#">How to Search User Accounts</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Add-User-Account.html')" href="#">How to Add User Account</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Edit-User-Account.html')" href="#">How to Edit User Account</a></li>
                <li><a class="subitem" onclick="content('issp_admin/Delete-User-Account.html')" href="#">How to Delete User Account</a></li>

                <!-- User -->
                <li><a class="subitem" onclick="content('issp_admin/Logout.html')" href="#">How to Logout</a></li>
                
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