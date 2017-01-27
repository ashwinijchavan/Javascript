<script>  
function validateform(){  
var name=document.myform.name.value;    //babu
var password=document.myform.password.value;  //213
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script>  
<body>  
<form name="myform" method="post" action="abc.jsp" onsubmit="return validateform()" >  
Name: <input type="text" name="name" ><br/>  
Password: <input type="password" name="password"><br/>  
Number: <input type="number" name="num" ><br/>
<input type="submit" value="register">  
</form>  