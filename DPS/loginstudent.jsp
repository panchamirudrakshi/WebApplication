
<%@page import="java.sql.*"%>
<%@ include file="dbcon.jsp"%>
<%
	String s1,s2;
	s1=request.getParameter("T1");
	s2=request.getParameter("T2");
	
	ResultSet rs=stmt.executeQuery("select * from login where username='"+s1+"' and status='active' ");

	if(rs.next())
	{
		String password=rs.getString(2);
		if(s2.equals(password))
		{
		session.setAttribute("uname",s1);
			String ty=rs.getString(3);
			if(ty.equals("student"))
			{
%>



		
		<jsp:forward page="student.htm"/>
	<%
			}
	
		
		}

		else
		{
			out.println("Invalid Password");
		}
		}		
		else
	{
		out.println("Invalid User Name");
	}

%>