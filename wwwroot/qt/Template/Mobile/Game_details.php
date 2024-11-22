<html>
<head lang="en"> 
  <title>{:GetVar('webtitle')}</title>
</head>
<body>
  <div id="cs">
    <div id="cptitle">{$result[0]['cptitle']}</div>
    <div id="playtitle">{$result[0]['playtitle']}</div>
    <div id="expect">{$result[0]['expect']}</div>
    <div id="isdraw"><if condition="$result[0]['isdraw'] eq 0">未开奖<elseif condition="$result[0]['isdraw'] eq 1"/>已中奖<elseif condition="$result[0]['isdraw'] eq -1"/>未中奖<elseif condition="$result[0]['isdraw'] eq -2"/>已撤单</if></div>
    <div id="baodi"><if condition="$result[0]['isbaodi'] eq 1">{$result[0]['baodi']*$result[0]['hemaipic']}<else/>未保底</if></div>
    <div id="amount">{$result[0]['amount']}</div>
    <div id="hemaipic">{$result[0]['hemaipic']}</div>
    <div id="tzcode">
      <if condition="$result[0]['showtype'] eq 0">[{$result[0]['playtitle']}]{$result[0]['tzcode']}
        <elseif condition="$result[0]['showtype'] eq 1"/>
        <if condition="($result[0]['username'] eq $_SESSION['userinfo']['username']) OR $result[0]['isdraw'] eq 1 OR $result[0]['isdraw'] eq -1 OR $result[0]['isdraw'] eq -2">
          [{$result[0]['playtitle']}]{$result[0]['tzcode']}
          <else/>
          该方案选择开奖后公开
        </if>
        <elseif condition="$result[0]['showtype'] eq 2"/>
        <if condition="$inlist eq 'false'">
          [{$result[0]['playtitle']}]{$result[0]['tzcode']}
          <else/>
          该方案选择参与可见（仅对加入方案人公开）
        </if>
        <elseif condition="$result[0]['showtype'] eq 3"/>
        <if condition="($result[0]['username'] eq $_SESSION['userinfo']['username'])">
          [{$result[0]['playtitle']}]{$result[0]['tzcode']}
          <else/>
          该方案选择永久保密（仅方案发起人可见）
        </if>
      </if>
    </div>
    <div id="isfull">{$result[0]['isfull']}</div>
    <div id="pid">{$result[0]['id']}</div>
    <if condition="($result[0]['isfull'] neq 0) AND $isstop eq false">
     <div id="buyhave">{$result[0]['isfull']}</div>
     <elseif condition="$isstop eq true"/>
     <div id="buyhave">方案已截止-您可以选择参加其他合买</div>
     <else/>
     <div id="buyhave">方案已满员-您可以选择参加其他合买</div>
   </if>
 </div>
</body>
</html>