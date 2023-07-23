<div class="sidebar-menu">
    <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
          <!--<img id="logo" src="" alt="Logo"/>--> 
        </a> </div>		  
    <div class="menu">
        <ul id="menu">
            <?php
            if ($role == "admin") {
                ?>
                <li id="menu-home" ><a href="admin-dashboard"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                <li><a href="transcript-app"><i class="fa fa-bar-chart"></i><span>Transcript Applications</span></a></li>
                <li><a href="logout"><i class="fa fa-power-off"></i><span>Logout</span></a></li>
                <?php
            } else {
                ?>
                <li id="menu-home" ><a href="home"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                <li><a href="Application"><i class="fa fa-bar-chart"></i><span>My Applications</span></a></li>
                <li><a href="logout"><i class="fa fa-power-off"></i><span>Logout</span></a></li>
                            <?php
                        }
                        ?>
        </ul>
    </div>
</div>