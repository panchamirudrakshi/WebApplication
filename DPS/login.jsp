<%@page import="java.sql.*"%>


<%
Connection con;
Statement stmt;
try
   {
Class.forName("com.mysql.jdbc.Driver");  
con = DriverManager.getConnection("jdbc:mysql://localhost:3306/department","root","root123");				
stmt=con.createStatement();

  String s1,s2;
	s1=request.getParameter("T1");
	s2=request.getParameter("T2");

      ResultSet rs=stmt.executeQuery("select * from login where username='"+s1+"' ");
     if(rs.next())
      {
          
	String pwd=rs.getString(2);
	if(s2.equals(pwd))
	{
  		session.setAttribute("uname",s1);

	   String type=rs.getString(3);
	   if(type.equals("student"))
	   {
	    %>
		<jsp:forward page="student.htm"/>
	    <%
	   }
	
	      if(type.equals("staff"))
	   {
	    %>
		<jsp:forward page="staff.htm"/>
	    <%
	   }
	   if(type.equals("alumni"))
	   {
	    %>
		<jsp:forward page="alumni.htm"/>
	    <%
	   }
                 if(type.equals("focusadmin"))
	   {
	    %>
		<jsp:forward page="focusadmin.htm"/>
	    <%
	   }
	    if(type.equals("library"))
	   {
	    %>
		<jsp:forward page="library.htm"/>
	    <%
	   }
	    if(type.equals("administrator"))
	   {
	    %>
		<jsp:forward page="administration.htm"/>
	    <%
	   }
             if(type.equals("receptionist"))
	   {
	    %>
		<jsp:forward page="receptionist.htm"/>
	    <%
	   }
      }
   	else
	{
	//out.println(s1);
	//out.println("check password");
   
  %>

		<script>
		alert("Ceck Your Passord");
		history.back();
		</script>
	    <%
	
	}

      }
    else
     {
     %>
  <script>
  alert("Invalid User Name");
  </script>
<%
     }
   
   %>
   
   <%
}
catch(Exception e)
	{
    out.println(e);
	}

%>