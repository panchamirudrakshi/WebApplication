<%@page import="java.sql.*"%>
<%@ include file="dbcon.jsp"%>
<%


String ss=session.getAttribute("uname").toString();

java.util.Date d1=new java.util.Date();

int d=d1.getDate();
int m=d1.getMonth()+1;
int y=d1.getYear()+1900;

String sd=d+"/"+m+"/"+y;
String  s1,s2,s3;
s1=request.getParameter("T1");
s2=request.getParameter("T2");
s3=request.getParameter("S1");

int k=stmt.executeUpdate("insert into feedback values('"+ss+"','"+s1+"','"+s2+"','"+s3+"','"+sd+"')");
out.println("feedback information Sent");

%>