				 <?php 
				    if(strstr($_SERVER['PHP_SELF'],"quickRecharge")) {
						$quickRecharge = 'class="active"';
					};
				    if(strstr($_SERVER['PHP_SELF'],"zfbRecharge")) {
						$zfbRecharge = 'class="active"';
					};
				    if(strstr($_SERVER['PHP_SELF'],"wxRecharge")) {
						$wxRecharge = 'class="active"';
					};
				    if(strstr($_SERVER['PHP_SELF'],"jbfRecharge")) {
						$jbfRecharge = 'class="active"';
					};
				 
				 ?>
				<ul class="tab clearfix recharge_main_tab">
				    
					<li ><a href="{:U('Account/quickRecharge')}">快捷支付</a></li>-->
					 <li {$zfbRecharge} style="width:120px;"><a href="{:U('Account/zfbRecharge')}" style="width:100px;">QQ扫码充值</a></li>
					 <li {$wxRecharge}><a href="/payment/juhePay">聚合扫码充值</a></li>
 			         <li {$jbfRecharge}><a href="{:U('Account/jbfRecharge')}">吉宝付</a></li> 
		 			<li {$quickRecharge}><a href="/payment/ebankPay">银行转账</a></li>
					<li style="width:120px;"><a href="{:U('Account/fourRecharge')}" style="width:100px;">四合一在线充值</a></li>
				</ul>