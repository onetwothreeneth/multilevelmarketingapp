	<aside id="leftsidebar" class="sidebar">
	    <div class="menu">        
	        <ul class="list">
	            <li>
	                <div class="user-info">
	                    <div class="image">
	                    	@if($info->photo != NULL)
	                    		<a xhref="{{ URL::route('admin.wallet.reload') }}"><img src="{{ URL::asset('public/admin/profile') }}/{{ $info->photo }}" alt="User" style="height: 5em;"></a>
	                    	@else
	                    		<a xhref="{{ URL::route('admin.wallet.reload') }}"><img src="{{ URL::asset('public/images/default.jpg') }}" alt="User" style="height: 5em;"></a>
	                    	@endif
	                    </div>
	                    <div class="detail">
	                        <h6>{{ strtoupper($info->first_name).' '.strtoupper($info->last_name) }}</h6>   
	                        <small>{{ strtoupper($info->type) }}</small>      
	                    </div>                    
	                </div>
	            </li> 
	            <li>
	            	<a <?php if($active=="dashboard") { ?> class="active" <?php } ?> href="{{ URL::route('admin.dashboard') }}" class="xmenu-toggle">
	            		<i class="zmdi zmdi-home"></i>
	            		<span>Dashboard</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a <?php if($active=="mywallet") { ?> class="active menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="zmdi zmdi-balance-wallet"></i>
	            		<span>Wallets</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="history") { ?> class="active" <?php } ?> href="{{ URL::route('admin.wallet.history') }}">History</a></li>
	                    <li><a <?php if($subactive=="topup") { ?> class="active"   <?php } ?> href="{{ URL::route('admin.wallet.reload') }}">Load Up Affiliate</a></li>
	                </ul>
	            </li>  
	            <li>
	            	<a <?php if($active=="billspayment") { ?> class="active menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="zmdi zmdi-bookmark"></i>
	            		<span>Bills & Payments</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="receipts") { ?> class="active" <?php } ?> href="{{ URL::route('admin.bills.logs') }}">Logs</a></li> 
	                </ul>
	            </li>  
	            <li>
	            	<a <?php if($active=="affiliates") { ?> class="active menu-toggle toggled" <?php } ?>href="javascript:void(0);" class="menu-toggle">
	            		<i class="zmdi zmdi-accounts-alt"></i>
	            		<span>Affiliates</span>
	            	</a>
	                <ul class="ml-menu">        

	                    <li><a <?php if($subactive=="listed") { ?>    class="active" <?php } ?> href="{{ URL::route('admin.affiliates.list') }}">List</a></li>     
	                    <li><a <?php if($subactive=="mass") { ?>    class="active" <?php } ?> href="{{ URL::route('admin.affiliates.mass') }}">Mass Generation</a></li>   
	                    <!-- <li><a <?php if($subactive=="addnew") { ?>    class="active" <?php } ?> href="{{ URL::route('admin.affiliates.new') }}">Add Affiliate</a></li>    -->  
	                    <!-- <li><a <?php if($subactive=="addinvite") { ?> class="active" <?php } ?> href="{{ URL::route('admin.affiliates.invite') }}">Add Invite</a></li>    -->         
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="myearnings") { ?> class="active menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="zmdi zmdi-money-box"></i>
	            		<span>Earnings Logs</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="summary") { ?> class="active" <?php } ?> href="{{ URL::route('admin.earnings.logs') }}">Summary</a></li> 
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="mywithdrawal") { ?> class="active menu-toggle toggled" <?php } ?> href="javascript:void(0);" class="menu-toggle">
	            		<i class="zmdi zmdi-swap"></i>
	            		<span>Withdrawals</span>
	            	</a>
	                <ul class="ml-menu">                   
	                    <li><a <?php if($subactive=="requests") { ?> class="active" <?php } ?> href="{{ URL::route('admin.withdrawal.request') }}">Requests</a></li> 
	                </ul>
	            </li> 
	            <li>
	            	<a <?php if($active=="commision") { ?> class="active" <?php } ?> href="{{ URL::route('admin.settings.commission') }}">
	            		<i class="zmdi zmdi-navigation"></i>
	            		<span>Commissions Setup</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a <?php if($active=="account") { ?> class="active" <?php } ?> href="{{ URL::route('admin.settings.account') }}">
	            		<i class="zmdi zmdi-edit"></i>
	            		<span>Account Settings</span>
	            	</a> 
	            </li> 
	            <li>
	            	<a class="confirms" href="{{ URL::route('admin.auth.logout') }}">
	            		<i class="zmdi zmdi-settings"></i>
	            		<span>Logout</span>
	            	</a> 
	            </li> 
	        </ul>
	    </div>
	</aside>