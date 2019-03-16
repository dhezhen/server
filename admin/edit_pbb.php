<%-- 
    Document   : input_test
    Created on : Dec 9, 2017, 6:25:09 PM
    Author     : ero
--%>

<%@page import="java.util.List"%>
<%-- 
    Document   : input_biodata
    Created on : Dec 8, 2017, 10:06:41 AM
    Author     : ero
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
         <link href="css/bootstrap.min.css" rel="stylesheet"/>

    </head>
    <body>
        <%@page import="function.dosen,function.fdosen"%>
<%
String id_dosen = request.getParameter("id_dosen");

fdosen u = dosen.getRecordById(Integer.parseInt(id_dosen));
%>

        
<form action="proses_edit_dosen.jsp" method="post">
    <div class="container" >
       <div class="panel panel-info">
        <div class="panel-heading"><center><label>EDIT DATA DOSEN</label></center></div>
        <div class="panel-body">
            <div class="form-group">
            <label for="id" class="col-sm-2 control-label">Id Dosen</label>
                <div class="col-sm-4">
                        <input type="text" class="form-control" name="id_dosen" value=<%=u.getId_dosen()%> readonly>
                </div>
            </div>
            
        </div> 
                       
                        
                    
        <div class="panel-body">
            <div class="form-group">
            <label for="Nama" class="col-sm-2 control-label">Nama Dosen</label>
                <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama_dosen" value=<%=u.getNama_dosen()%> >
                </div>
            </div>
        </div>   
        <div class="panel-body">
            <div class="form-group">
            <label for="Nama" class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-4">
                        <input type="text" class="form-control" name="jk" value=<%=u.getJk()%>  >
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="form-group">
            <label for="Nama" class="col-sm-2 control-label" >Alamat</label>
                <div class="col-sm-4">
                    <textarea name="alamat" placeholder="Alamat" required autofocus ><%=u.getAlamat()%> </textarea>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="form-group">
            <label for="Nama" class="col-sm-2 control-label"  >Gelar</label>
                <div class="col-sm-4">
                        <input type="text" class="form-control" name="gelar" value=<%=u.getGelar()%>
                </div>
            </div>
        </div>
         
        
        <div class="panel-body">
        <div class="form-group">  
     <div class="col-sm-offset-2 col-sm-10">
       <button type="submit" class="btn btn-primary">Simpan</button>
  
     </div>
   </div>
        </div>
                
            </div>   



    </div>
      
               

            
                </form>
        
    </body>
</html>
