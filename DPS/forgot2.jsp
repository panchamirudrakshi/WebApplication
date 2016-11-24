<%@page import="java.sql.*"%>
<%
Connection con;
Statement stmt;
try
   {
Class.forName("com.mysql.jdbc.Driver");  
con = DriverManager.getConnection("jdbc:mysql://localhost:3306/department","root","root123");				
stmt=con.createStatement();


  String s1;
String hq="";
  s1=request.getParameter("T1");
  ResultSet rs=stmt.executeQuery("select * from login where username='"+s1+"' ");
 if(rs.next())
  {
 session.setAttribute("suser",s1);
    
  hq=rs.getString(4);
  }
  else
  {
    out.println("username not found");
  }
%>

<html>


<body background="flash/te/1.jpg">

<form method="POST" action="forgot3.jsp">
 <p align="center">&nbsp;&nbsp;&nbsp;<font size="5"> </font><u><b>
 <font size="5">Forgot Password</font></b></u></p>
  <p align="center">&nbsp;Hint Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="T1" value="<%=hq %>"  size="20"></p>
  <p align="center">&nbsp; Hint Ans&nbsp;&nbsp;&nbsp;
  <input type="text" name="T2" size="20"></p>
  <p align="center"><input type="submit" value="Show Password" name="B1"></p>
</form>

</body>
<%
}
catch(Exception e)
	{
    out.println(e);
	}
%>
</html>