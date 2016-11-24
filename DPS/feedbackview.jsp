

<body  background="flash/vector_design_2-1366x768%20(2).jpg">

<div align="center">
  <center>

<table border=5 style="border-style:solid; border-collapse:collapse" cellspacing="5" cellpadding="5">
<tr><td><font size="5" color="#FF9900">FROM</font></td>
  <td><font size="5" color="#FF9900">SUB</font></td>
  <td><b><font size="5" color="#FF9900">FEEDBACK</font></b></td>
  <td><b>
  <font size="5" color="#FF9900">DATE</font></tr>
<%@page import="java.sql.*"%>
<%@ include file="dbcon.jsp"%>
<%


String ss=session.getAttribute("uname").toString();
ResultSet rs=stmt.executeQuery("select * from feedback where to1='"+ss+"' ");
while(rs.next())
{
out.println("<tr><td>");

out.println(rs.getString(1));
out.println("</td><td>");

out.println(rs.getString(3));
out.println("</td><td>");
out.println(rs.getString(4));
out.println("</td><td>");
out.println(rs.getString(5));

out.println("</td></tr>");
}

%>
</table></center>
</div>