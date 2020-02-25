	<aside id="leftsidebar" class="sidebar">
	    <div class="menu">        
	        <ul class="list">
	            <li>
	                <div class="user-info">
	                    <div class="image"><a href=""><img src="../assets/images/sm/avatar5.jpg" alt="User"></a></div>
	                    <div class="detail">
	                        <h4>Dark Man Thanos</h4>   
	                        <small>Administrator</small>      
	                    </div>                    
	                </div>
	            </li>
	            <li class="header">Menu</li>
	            <li>
	            	<a <?php if($active=="dashboard") { ?> style="color:#49c5b6;"<?php } ?> href="admin_dasboard.php" class="xmenu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Dashboard</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a <?php if($active=="mywallet") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Wallet Management</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="history") { ?> style="color:#49c5b6;"<?php } ?> href="admin_wallet_history.php">History</a></li>
	                    <li><a <?php if($subactive=="topup") { ?> style="color:#49c5b6;"<?php } ?> href="admin_wallet_topup.php">Load Up Affiliate</a></li>
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="myportal") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?>href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Affiliate Portals</span>
	            	</a>
	                <ul class="ml-menu">        

	                    <li><a <?php if($subactive=="view") { ?> style="color:#49c5b6;"<?php } ?> href="admin_portals_list.php">List</a></li>           
	                    <!-- <li><a <?php if($subactive=="view") { ?> style="color:#49c5b6;"<?php } ?> target="_blank" href="bills/onetwothreeneth">List</a></li> -->
	                    <!-- <li><a <?php if($subactive=="summary") { ?> style="color:#49c5b6;"<?php } ?> href="admin_portal_summary.php">Summary</a></li> -->
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="billspayment") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Bills & Payments Logs</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="receipts") { ?> style="color:#49c5b6;"<?php } ?> href="admin_bills_receipts.php">Logs</a></li> 
	                </ul>
	            </li>  
	            <li>
	            	<a <?php if($active=="affiliates") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?>href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Affiliate Management</span>
	            	</a>
	                <ul class="ml-menu">        

	                    <li><a <?php if($subactive=="listed") { ?> style="color:#49c5b6;"<?php } ?> href="admin_affiliates_list.php">List</a></li>     
	                    <li><a <?php if($subactive=="addnew") { ?> style="color:#49c5b6;"<?php } ?> href="admin_affiliates_addnew.php">Add Affiliate</a></li>     
	                    <li><a <?php if($subactive=="addinvite") { ?> style="color:#49c5b6;"<?php } ?> href="admin_affiliates_addinvite.php">Add Invite</a></li>            
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="myearnings") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Earnings Logs</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="summary") { ?> style="color:#49c5b6;"<?php } ?> href="admin_earnings_summary.php">Summary</a></li> 
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="mywithdrawal") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Withdrawal Request</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="requests") { ?> style="color:#49c5b6;"<?php } ?> href="admin_withdrawal_request.php">Requests</a></li> 
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="commision") { ?> style="color:#49c5b6;"<?php } ?> href="admin_commision.php">
	            		<i class="xzmdi zxmdi-star"></i>
	            		<span>Commissions Setup</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a <?php if($active=="account") { ?> style="color:#49c5b6;"<?php } ?> href="admin_settings.php">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Admin Account Settings</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a href="index.php">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Logout</span>
	            	</a> 
	            </li> 
	        </ul>
	    </div>
	</aside>