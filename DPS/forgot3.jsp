<style type="text/css">
<!--
.style1 {font-size: 24px}
-->
</style>
<%@page import="java.sql.*"%>

<%
Connection con;
Statement stmt;
try
   {
Class.forName("com.mysql.jdbc.Driver");  
con = DriverManager.getConnection("jdbc:mysql://localhost:3306/department","root","root123");				
stmt=con.createStatement();


 
  String s1,s2,s3;

  s1= session.getAttribute("suser").toString();
  s2=request.getParameter("T1");
  s3=request.getParameter("T2");
    ResultSet rs=stmt.executeQuery("select * from login where username='"+s1+"' ");
   rs.next();

  String pwd=rs.getString(2);
  String ha=rs.getString(5);

  if(s3.equals(ha))
  {
     out.println("Your password is:"+pwd);
  }
  else
  {
    out.println("check hint ans");
  }
  }
catch(Exception e)
	{
    out.println(e);
	}

%>