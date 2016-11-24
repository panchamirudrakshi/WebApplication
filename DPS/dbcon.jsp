<%@page import="java.sql.*" %>
<%!Connection con; %>
<%!Statement stmt; %>
<%
try
 {
Class.forName("com.mysql.jdbc.Driver");  
con = DriverManager.getConnection("Jdbc:mysql://localhost:3306/department","root","root123");				
stmt=con.createStatement();
}
catch(Exception e)
{
   out.println(e);
}

%>