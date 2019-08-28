$(document).ready(function()
{
    $("#submt").click(function(e)
    {
      e.preventDefault();
      var username = $("#username").val();
      var password = $("#password").val();
      var data = "username="+username+"&password="+password;
    
      $.ajax(
          {
              url:"data.php",
              method:"POST",
              data:data,
              dataType:"TEXT",
              success:function(data)
              {
                 
                 if(data==1)
                 {
                     alert("successfully logged in");
                     window.location.href="dashboard.php";
                 }
                 else
                 {
                     alert("invalid credentials");
                 }
              }
          }
      )
    });

    $("#regist").click(function(d)
    {
        d.preventDefault();
        var name = $("#name_reg").val();
        var username = $("#username_reg").val();
        var password = $("#password_reg").val();
        var data = "name_reg="+name+"&username_reg="+username+"&password_reg="+password;
        $.ajax(
            {
                url:"data.php",
                method:"POST",
                data:data,
                dataType:"TEXT",
                success:function(data)
                {
                    alert(data);
                }
            }
        )
    })
})