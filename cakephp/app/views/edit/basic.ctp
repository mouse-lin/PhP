
<DIV class="container">
	<DIV id="foruminfo" class="clearfix">
		<DIV id="nav"><A href="../homes">HzuPlay</A> » 编辑个人资料</DIV>
	</DIV>
	<DIV class="content">
		  <FORM name="reg" method="post" action="../edit/basic" onSubmit="return validate(this)">
	    <DIV class="mainbox formbox my">
			<DIV class="hd"><H1><SPAN>编辑个人资料</SPAN></H1></DIV>
			<UL class="tabs ">
				<LI><A href="../edit/pwd">修改密码</A></LI>
				<LI class="current"><A href="../edit/basic">基本资料</A></LI>
				<LI><A href="../edit/img">编辑头像</A></LI>
			</UL>
<TABLE summary="编辑个人资料" cellspacing="0" cellpadding="0">


	
	
	<TBODY><TR>
	<TH>性别</TH>
	<TD>
	<LABEL><INPUT class="radio" type="radio" name="sex" value="1"> 男 &nbsp;<LABEL>
	<LABEL><INPUT class="radio" type="radio" name="sex" value="2"> 女 &nbsp;</LABEL>
	<LABEL><INPUT class="radio" type="radio" name="sex" value="0" checked="checked"> 保密</LABEL>
	</LABEL></LABEL></TD></TR>

<TR>
	<TH><LABEL for="birthday">生日</LABEL></TH>
	<TD><INPUT type="text" name="birthday" id="birthday" size="25" onclick="showcalendar(event, this)" onfocus="showcalendar(event, this);if(this.value==&#39;00-00&#39;)this.value=&#39;&#39;" value="00-00"></TD>
	</TR>

	<TR>
	<TH><LABEL for="address">地址</LABEL></TH>
	<TD><INPUT type="text" name="address" id="address" size="25" value=""></TD>
	</TR>


	<TR>
	<TH><LABEL for="qq">QQ</LABEL></TH>
	<TD><INPUT type="text" name="qq" id="qq" size="25" value=""></TD>
	</TR>

	<TR>
	<TH><LABEL for="msn">MSN</LABEL></TH>
	<TD><INPUT type="text" name="msn" id="msn" size="25" value=""></TD>
	</TR>

	<TR>
	<TH><LABEL for="email">邮箱</LABEL></TH>
	<TD><INPUT type="text" name="email" id="email" size="25" value=""></TD>
	</TR>

	<TR>
	<TH><LABEL for="phone">联系方式</LABEL></TH>
	<TD><INPUT type="text" name="phone" id="phone" size="25" value=""></TD>
	</TR>

	<TR>
		<TH>&nbsp;</TH>
		<TD><BUTTON type="submit" class="submit" name="editsubmit" id="editsubmit" value="true">提交</BUTTON></TD>
	</TR>
</TBODY></TABLE>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>

</DIV>


</FORM>



	</DIV>
	<DIV class="side">
<DIV>
<H2>个人管理</H2>
<UL>
			<LI class="side_on">
			<H3>控制面板</H3>
			<UL><LI class="current"><A href="../edit/basic">编辑个人资料</A></LI>
						</UL>
		</LI>
		</UL>
</DIV>

</DIV>
</DIV>

