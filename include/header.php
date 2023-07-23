<div class="header-main">
    <div class="header-left">
        <div class="logo-name">
            <a href="index"> <h1>eTranscript</h1> 
           <!--<img id="logo" src="" alt="Logo"/>--> 
            </a> 								
        </div>
        <!--search-box-->
       
        <div class="clearfix"> </div>
    </div>
    <div class="header-right">
        
        <!--notification menu end -->
        <div class="profile_details">		
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">	
                            <span class="prfil-img"><img src="images/tick.png" alt=""> </span> 
                            <div class="user-name">
                                <p><?php echo $userid; ?></p>
                                <span><?php echo $role; ?></span>
                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>	
                        </div>	
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                       
                        <li> <a href="logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>				
    </div>
    <div class="clearfix"> </div>	
</div>