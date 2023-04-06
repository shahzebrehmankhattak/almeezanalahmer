<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


    <!-- home slider main -->



<script>
$( "#addslider" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#addslider')); 


$.ajax
({
url: "insertslider.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('slider.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>
    
    <!-- home slider main end -->



    <!-- initiatives -->


    <script>
$( "#addinitiative" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#addinitiative')); 


$.ajax
({
url: "insertinitiative.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('initiatives.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>
    <!-- end initiatives -->



    <!-- time -->
    <script>
$( "#addtime" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#addtime')); 


$.ajax
({
url: "inserttime.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('time.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>

    <!-- end time -->



    <!-- top  certificates -->

    <script>
$( "#addcertificate" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#addcertificate')); 


$.ajax
({
url: "insertcertificate.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('certificatedb.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>
    <!-- end top certificates -->


  


    <!-- central directorate -->

    <script>
$( "#addcdinfo" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#addcdinfo')); 


$.ajax
({
url: "insertcdinfo.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('centraldirectorate.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>

    <!-- end central directorate -->




    <!-- incpection audit -->

    <script>
$( "#addiainfo" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#addiainfo')); 


$.ajax
({
url: "insertiainfo.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('incpectionaudit.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>

    <!-- incpection audit -->



    <!-- ziaos -->
    <script>
$( "#addziaoinfo" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#addziaoinfo')); 


$.ajax
({
url: "insertziaoinfo.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('ziaos.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>


    <!-- ziaos -->



    <!-- regional director -->

    <script>
$( "#addrdinfo" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#addrdinfo')); 


$.ajax
({
url: "insertrdinfo.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('regionaldirectors.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>

    <!-- end regional director -->



    <!-- tins -->

    <script>
$( "#addtinsinfo" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#addtinsinfo')); 


$.ajax
({
url: "inserttinsinfo.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('tins.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>

    <!-- end tins -->


    <!-- behbood saving -->

    <script>
$( "#addbehboodsavingdb" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#addbehboodsavingdb')); 


$.ajax
({
url: "insertbehboodsavingdb.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('behboodsavedb.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>


    <!-- end behbood saving -->


    <!-- defencce saving -->
    <script>
$( "#adddefencesavingdb" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#adddefencesavingdb')); 


$.ajax
({
url: "insertdefencesavingdb.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('defencesavedb.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>




    <!-- end defence saving -->
</body>

</html>