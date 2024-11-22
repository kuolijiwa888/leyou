
<table class="table table-border table-bordered table-hover">
{volist name="wanfa" id="vo"}
<form method="post">
<thead>
<tr>
	<th colspan="3" bgcolor="#f9f9f9"><div class="l">{$vo.title}</div></th>
</tr>
<tr>
	<th bgcolor="#f9f9f9">玩法\返点</th>
	<th bgcolor="#f9f9f9">max</th>
	<th bgcolor="#f9f9f9">min</th>
</tr>
</thead>
<tbody>
{volist name="vo['list']" id="item"}
<tr>
	<td>{$item.title}：</td>
	<td>
		<input style="width:70px;" type="text" name="odds[{$item.playid}][]" value="{$odds[$item['playid']]['9']}">
	</td>
	<td>
		<input style="width:70px;" type="text" name="odds[{$item.playid}][]" value="{$odds[$item['playid']]['0']}">
	</td>
</tr>
{/volist}
<tr>
	<td colspan="20" bgcolor="#f9f9f9"><button>submit</button></td>
</tr>
</tbody>
</form>
{/volist}
</table>

<!-- <table  border="1">
	<thead>
		<tr>
		<th colspan="2">{$wanfa.title}</th>
		</tr>
		<tr>
		<th>返点</th>
		<th>赔率</th>
		</tr>
	</thead>
	<tbody>
		{php}for($i=0;$i<10;$i++){{/php}
		<tr>
		<td>{$i}.0</td>
		<td><input type="text" name="odds[{$i}]" value="{$data[$i]}"></td>
		</tr>
		{php}}{/php}
	</tbody>
</table> -->

