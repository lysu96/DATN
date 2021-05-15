		<script>
	        var MenuItems = document.getElementById("MenuItems");
	        
	        MenuItems.style.maxHeight = "0px";

	        function menutoggle(){
	            if(MenuItems.style.maxHeight == "0px")
	            {
	                MenuItems.style.maxHeight = "200px";
	            }
	        else
	            {
	                MenuItems.style.maxHeight = "0px";
	            }
	        }

	    </script>

        <!-- ------------------- js for Account form-------------- -->
        <script>
            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");

            function register() {
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";

            }
            function login() {
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";
            }


        </script>
        

    <!-- Bootstrap core JavaScript-->
    <script src="Public/System_ad/vendor/jquery/jquery.min.js"></script>
    <script src="Public/System_ad/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="Public/System_ad/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="Public/System_ad/vendor/chart.js/Chart.min.js"></script>
    <script src="Public/System_ad/vendor/datatables/jquery.dataTables.js"></script>
    <script src="Public/System_ad/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="Public/System_ad/js/sb-admin.min.js"></script>
    <!-- Demo scripts for this page-->
    <script src="Public/System_ad/js/demo/datatables-demo.js"></script>
    <script src="Public/System_ad/js/demo/chart-area-demo.js"></script>
    <!-- cart -->
    <script src="Public/System_ad/js/cart.js"></script>
</body>
</html>