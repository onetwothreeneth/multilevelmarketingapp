	<aside id="leftsidebar" class="sidebar">
	    <div class="menu">        
	        <ul class="list">
	            <li>
	                <div class="user-info">
	                    <div class="image">
	                    	@if($info->photo != NULL)
	                    		<a xhref="{{ URL::route('admin.wallet.reload') }}"><img src="{{ URL::asset('') }}/{{ $info->photo }}" alt="User" style="height: 5em;"></a>
	                    	@else
	                    		<a xhref="{{ URL::route('admin.wallet.reload') }}"><img src="{{ URL::asset('public/images/default.jpg') }}" alt="User" style="height: 5em;"></a>
	                    	@endif
	                    </div>
	                    <div class="detail">
	                    	@if($info->first_name != 'none') 
	                       		<h6>{{ strtoupper($info->first_name).' '.strtoupper($info->last_name) }}</h6>   
	                       	@endif
	                        <small>{{ strtoupper($info->type) }}</small>      
	                    </div>                    
	                </div>
	            </li> 
	            <li>
	            	<a <?php if($active=="dashboard") { ?> style="color:#49c5b6;"<?php } ?> href="{{ URL::route('member.dashboard') }}" class="xmenu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Dashboard</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a <?php if($active=="myinvites") { ?> style="color:#49c5b6;"<?php } ?> href="{{ URL::route('member.invites.tree') }}">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Invites</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a <?php if($active=="mywallet") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Wallet</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="history") { ?> style="color:#49c5b6;"<?php } ?> href="">History</a></li>
	                    <li><a <?php if($subactive=="topup") { ?> style="color:#49c5b6;"<?php } ?> href="">Top Up</a></li>
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="myportal") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?>href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Portal</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="view") { ?> style="color:#49c5b6;"<?php } ?> targxet="_blank" href="">View</a></li>
	                    <li><a <?php if($subactive=="summary") { ?> style="color:#49c5b6;"<?php } ?> href="">Summary</a></li>
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="billspayment") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Bills & Payment</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <!--<li><a <?php if($subactive=="receipts") { ?> style="color:#49c5b6;"<?php } ?> href="user_bills_receipts.php">Receipts</a></li>-->
	                    <li><a <?php if($subactive=="paybills") { ?> style="color:#49c5b6;"<?php } ?> href="">Pay Bills</a></li>
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="myearnings") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Earnings</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="summary") { ?> style="color:#49c5b6;"<?php } ?> href="{{ URL::route('member.earnings') }}">Summary</a></li> 
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="mywithdrawal") { ?> style="color:#49c5b6;" class="menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Withdrawal</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="requests") { ?> style="color:#49c5b6;"<?php } ?> href="{{ URL::route('member.withdrawal') }}">Requests</a></li>
	                    <li><a <?php if($subactive=="invoices") { ?> style="color:#49c5b6;"<?php } ?> href="{{ URL::route('member.withdrawal.invoices') }}">Invoices</a></li>
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="account") { ?> style="color:#49c5b6;"<?php } ?> href="">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>My Account Settings</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a  class="confirms" href="{{ URL::route('member.auth.logout') }}">
	            		<i class="xzmdi zxmdi-home"></i>
	            		<span>Logout</span>
	            	</a> 
	            </li> 
	        </ul>
	    </div>
	</aside>