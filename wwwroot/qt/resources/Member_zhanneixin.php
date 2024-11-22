<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{:GetVar('webtitle')} - 系统中心</title>
	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/vendor.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<div class="user-top-to">
		<div class="user-top-to2">
			<div class="sub-container">
				<div class="subPagNav">
					<ul class="navl1">
						<li class=""><a href="/memberCenter/personalInfo" style="color: #fff;">个人中心</a></li> 
						<if condition="$userinfo.proxy eq '1'">
							<li class=""><a href="/memberCenter/agentReport" style="color: #fff;">团队中心</a></li>
						</if>
						<li class=""><a href="/payment/ebankPay" style="color: #fff;">财务中心</a></li> 
						<li class="cur">系统中心</li>
						<li class=""><a href="/memberCenter/yeb" style="color: #fff;">余额宝系统</a></li>
					</ul> 
					<div class="navl2">
						<span><a href="/activity" class="">活动中心</a></span> 
						<span><a href="{:GetVar('kefuthree')}" class="">客服中心</a></span> 
						<span><a href="/memberCenter/Notice" class="">公告中心</a></span> 
						<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">消息中心</a></span> 
						<span><a href="/byhelp" class="">帮助中心</a></span> 
						<span><a href="#/funds/accountRecord/self" class="">下载中心</a></span> 
						<span><a href="/memberCenter/memberlog" class="">登录记录</a></span> 
					</div>
				</div> 
				<div class="subPageMain">
<div class="sub-page">
   <div>
    <ul role="menubar" class="subNavbar el-menu--horizontal el-menu">
     <li role="menuitem" tabindex="0" class="el-menu-item is-active" style=""><a href="#/message/inbox" class="router-link-exact-active router-link-active">收件箱</a></li> 
     <li role="menuitem" tabindex="0" class="el-menu-item" style="border-bottom-color: transparent;"><a href="#/message/outbox" class="">发件箱</a></li> 
     <li role="menuitem" tabindex="0" class="el-menu-item" style="border-bottom-color: transparent;"><a href="#/message/send" class="">发消息</a></li>
    </ul> 
 <div class="page-container">
   <div class="el-button-group" style="margin-top: 10px;">
    <button type="button" class="el-button el-button--primary el-button--mini">
     <!---->
     <!----><span><i class="el-icon-view"></i> 标记已读 </span></button> 
    <button type="button" class="el-button el-button--primary el-button--mini">
     <!---->
     <!----><span><i class="el-icon-delete"></i> 批量删除 </span></button>
   </div> 
   <div class="el-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--enable-row-transition" style="width: 100%; text-align: center; margin: 10px 0px;">
    <div class="hidden-columns">
     <div></div> 
     <div></div> 
     <div></div> 
     <div></div> 
     <div></div> 
     <div></div> 
     <div></div>
    </div>
    <div class="el-table__header-wrapper">
     <table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 1169px;">
      <colgroup>
       <col name="el-table_1_column_1" width="55" />
       <col name="el-table_1_column_2" width="100" />
       <col name="el-table_1_column_3" width="180" />
       <col name="el-table_1_column_4" width="246" />
       <col name="el-table_1_column_5" width="244" />
       <col name="el-table_1_column_6" width="244" />
       <col name="el-table_1_column_7" width="100" />
       <col name="gutter" width="0" />
      </colgroup>
      <thead class="has-gutter">
       <tr class="">
        <th colspan="1" rowspan="1" class="el-table_1_column_1   el-table-column--selection  is-leaf">
         <div class="cell">
          <label role="checkbox" class="el-checkbox"><span aria-checked="mixed" class="el-checkbox__input"><span class="el-checkbox__inner"></span><input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="" /></span>
           <!----></label>
         </div></th>
        <th colspan="1" rowspan="1" class="el-table_1_column_2 is-leaf"style="padding:7px 0;">
         <div class="cell">
          发件人
         </div></th>
        <th colspan="1" rowspan="1" class="el-table_1_column_3 is-leaf">
         <div class="cell">
          标题
         </div></th>
        <th colspan="1" rowspan="1" class="el-table_1_column_4 is-leaf">
         <div class="cell">
          类别
         </div></th>
        <th colspan="1" rowspan="1" class="el-table_1_column_5 is-leaf">
         <div class="cell">
          时间
         </div></th>
        <th colspan="1" rowspan="1" class="el-table_1_column_6 is-leaf">
         <div class="cell">
          状态
         </div></th>
        <th colspan="1" rowspan="1" class="el-table_1_column_7 is-leaf">
         <div class="cell">
          操作
         </div></th>
       </tr>
      </thead>
     </table>
    </div>
    <div class="el-table__body-wrapper is-scrolling-none">
     <table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 1169px;">
      <colgroup>
       <col name="el-table_1_column_1" width="55" />
       <col name="el-table_1_column_2" width="100" />
       <col name="el-table_1_column_3" width="180" />
       <col name="el-table_1_column_4" width="246" />
       <col name="el-table_1_column_5" width="244" />
       <col name="el-table_1_column_6" width="244" />
       <col name="el-table_1_column_7" width="100" />
      </colgroup>
      <tbody>
       <tr class="el-table__row">
        <td rowspan="1" colspan="1" class="el-table_1_column_1  el-table-column--selection">
         <div class="cell">
          <label role="checkbox" class="el-checkbox"><span aria-checked="mixed" class="el-checkbox__input"><span class="el-checkbox__inner"></span><input type="checkbox" aria-hidden="true" class="el-checkbox__original" value="" /></span>
           <!----></label>
         </div></td>
        <td rowspan="1" colspan="1" class="el-table_1_column_2  ">
         <div class="cell">
          上级代理
         </div></td>
        <td rowspan="1" colspan="1" class="el-table_1_column_3  ">
         <div class="cell">
          你好你好你好你
         </div></td>
        <td rowspan="1" colspan="1" class="el-table_1_column_4  ">
         <div class="cell">
          上级消息
         </div></td>
        <td rowspan="1" colspan="1" class="el-table_1_column_5  ">
         <div class="cell">
          2021-03-04 12:12:13
         </div></td>
        <td rowspan="1" colspan="1" class="el-table_1_column_6  ">
         <div class="cell">
          已读
         </div></td>
        <td rowspan="1" colspan="1" class="el-table_1_column_7  ">
         <div class="cell">
          <button type="button" class="el-button el-button--text el-button--small">
           <!---->
           <!----><span>查看</span></button> 
          <button type="button" class="el-button el-button--text el-button--small">
           <!---->
           <!----><span>删除</span></button>
         </div></td>
       </tr>
       <!---->
      </tbody>
     </table>
     <!---->
     <!---->
    </div>
    <!---->
    <!---->
    <!---->
    <!---->
   </div> 
 
   <div class="el-dialog__wrapper" style="z-index: 2005; display: none;">
    <div role="dialog" aria-modal="true" aria-label="消息详情" class="el-dialog" style="margin-top: 15vh;">
     <div class="el-dialog__header">
      <span class="el-dialog__title">消息详情</span>
      <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button>
     </div>
     <div class="el-dialog__body">
      <div class="message_detail">
       <div class="el-row" style="margin-left: -10px; margin-right: -10px;">
        <div class="el-col el-col-4" style="padding-left: 10px; padding-right: 10px; text-align: right;">
         发件人
        </div> 
        <div class="el-col el-col-20" style="padding-left: 10px; padding-right: 10px;">
         上级代理
        </div>
       </div> 
       <div class="el-row" style="margin-left: -10px; margin-right: -10px;">
        <div class="el-col el-col-4" style="padding-left: 10px; padding-right: 10px; text-align: right;">
         发送时间
        </div> 
        <div class="el-col el-col-20" style="padding-left: 10px; padding-right: 10px;">
         2021-03-04 12:12:13
        </div>
       </div> 
       <div class="el-row" style="margin-left: -10px; margin-right: -10px;">
        <div class="el-col el-col-4" style="padding-left: 10px; padding-right: 10px; text-align: right;">
         标题
        </div> 
        <div class="el-col el-col-20" style="padding-left: 10px; padding-right: 10px;">
         你好你好你好你
        </div>
       </div> 
       <div class="el-row" style="margin-left: -10px; margin-right: -10px;">
        <div class="el-col el-col-4" style="padding-left: 10px; padding-right: 10px; text-align: right;">
         内容
        </div> 
        <div class="el-col el-col-20" style="padding-left: 10px; padding-right: 10px;">
         哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈
        </div>
       </div>
      </div> 
     </div>
     <div class="el-dialog__footer">
      <div class="dialog-footer">
       <button type="button" class="el-button el-button--primary">
        <!---->
        <!----><span>确 定</span></button>
      </div>
     </div>
    </div>
   </div>
  </div>
  </div>
</div>
				</div>
			</div>
		</div>
		<include file="Public/footer" />
	</div>
</body>
</html>