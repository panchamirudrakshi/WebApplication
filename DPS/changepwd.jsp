<%@page import="java.sql.*"%>
<%@ include file="dbcon.jsp"%>
<%


String s1,s2,s3;
s1=request.getParameter("T1");
s2=request.getParameter("T2");
s3=request.getParameter("T3");
String suser=session.getAttribute("uname").toString();

ResultSet rs=stmt.executeQuery("select * from login where username='"+suser+"' ");
if(rs.next())
{
  String u=rs.getString(2);
  if(s1.equals(u))
  {
	if(s2.equals(s3))
	{
	int k=stmt.executeUpdate("update login set password='"+s2+"' where username='"+suser+"' ");
	out.println("<p>&nbsp<p>&nbsp<p>&nbsp<p>&nbsp<p>&nbsp<p><font size=8 color=#800000><b><marquee behavior=slide scrollamount=115 scrolldelay=8>Password Changed</marquee></b></font></p></p></p></p></p></p>");
	}
	else
	{
	out.println("<p><font size=8 color=#800000><b><marquee behavior=slide scrollamount=115 scrolldelay=8>Check your New password</marquee></b></font></p>");
	}
	
  }
  else
  {
%>

<script>
alert('check your old password');
history.back();
</script>
<%
  }
}
else
{
out.println("UN not found");
}
%>
  
    <body background="images/wrong-pwd.jpg">