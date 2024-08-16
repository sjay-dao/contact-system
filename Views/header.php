<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div id="header" style='background:#aabdda; padding:10px; text-align:right'></div>



<?php echo
"<script>
console.log(localStorage.getItem('isLoggedIn'));
    if(!localStorage.getItem('isLoggedIn')){
    $('#header').html(\"<a href='login.php'>Logout</a>\");
    }else
         $('#header').html(\"<label>Welcome</label>\");
    
</script>";
?>