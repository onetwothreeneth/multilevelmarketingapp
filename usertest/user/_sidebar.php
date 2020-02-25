	<aside id="leftsidebar" class="sidebar">
	    <div class="menu">        
	        <ul class="list">
	            <li>
	                <div class="user-info">
	                    <?php if($user['photo'] != NULL){ ?>
	                        <div class="image"><a href=""><img src="http://admin.ewallet.legendarywordpress.com/<?php echo $user['photo']; ?>" alt="User" height="80px"></a></div>
	                    <?php } else { ?>
	                        <div class="image"><a href=""><img src="http://admin.ewallet.legendarywordpress.com/public/images/default.jpg" alt="User" height="80px"></a></div>
	                    <?php } ?>
	                    <div class="detail">
	                        <h4><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></h4>   
	                        <small>Affiliate</small>      
	                    </div>                    
	                </div>
	            </li>
	            <li class="header">Menu</li>
	            <li>
	            	<a <?php if($active=="dashboard") { ?> style="color:#49c5b6;"<?php } ?> href="user_dasboard.php" class="xmenu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Dashboard</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a <?php if($active=="mywallet") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Wallet</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="history") { ?> style="color:#49c5b6;"<?php } ?> href="user_wallet_history.php">History</a></li>
	                    <li><a <?php if($subactive=="topup") { ?> style="color:#49c5b6;"<?php } ?> href="user_wallet_topup.php">Top Up</a></li>
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="myportal") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?>href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Portal</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="view") { ?> style="color:#49c5b6;"<?php } ?> target="_blank" href="bills/onetwothreeneth">View</a></li>
	                    <li><a <?php if($subactive=="summary") { ?> style="color:#49c5b6;"<?php } ?> href="user_portal_summary.php">Summary</a></li>
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="account") { ?> style="color:#49c5b6;"<?php } ?> href="user_settings.php">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Account Settings</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a <?php if($active=="billspayment") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Bills & Payment</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <!--<li><a <?php if($subactive=="receipts") { ?> style="color:#49c5b6;"<?php } ?> href="user_bills_receipts.php">Receipts</a></li>-->
	                    <li><a <?php if($subactive=="paybills") { ?> style="color:#49c5b6;"<?php } ?> href="user_bills_new.php">Pay Bills</a></li>
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="myinvites") { ?> style="color:#49c5b6;"<?php } ?> href="users_invites.php">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Invites</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a <?php if($active=="myearnings") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Earnings</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="summary") { ?> style="color:#49c5b6;"<?php } ?> href="user_earnings_summary.php">Summary</a></li> 
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="mywithdrawal") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Withdrawal</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="requests") { ?> style="color:#49c5b6;"<?php } ?> href="user_withdrawal_request.php">Requests</a></li>
	                    <li><a <?php if($subactive=="invoices") { ?> style="color:#49c5b6;"<?php } ?> href="user_withdrawal_invoices.php">Invoices</a></li>
	                </ul>
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