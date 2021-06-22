 <!-- Main Footer -->
      <footer class="main-footer">

        <!-- To the right -->
        <div class="pull-right hidden-xs">

          Anything you want

        </div>

        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Waters</a>.</strong> All rights reserved.

      </footer>
      
      <!-- Control Sidebar -->      
      <aside class="control-sidebar control-sidebar-dark">

        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">

            <h3 class="control-sidebar-heading">Recent Activity</h3>

            <ul class='control-sidebar-menu'>

              <li>

                <a href='javascript::;'>

                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                  <div class="menu-info">

                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                    <p>Will be 23 on April 24th</p>

                  </div>

                </a>

              </li> 

            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3> 

            <ul class='control-sidebar-menu'>

              <li>

                <a href='javascript::;'>

                  <h4 class="control-sidebar-subheading">

                    Custom Template Design

                    <span class="label label-danger pull-right">70%</span>

                  </h4>

                  <div class="progress progress-xxs">

                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>

                  </div>

                </a>

              </li>

            </ul><!-- /.control-sidebar-menu -->         

          </div><!-- /.tab-pane -->


          <!-- Stats tab content -->

          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->

          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">  

            <form method="post">

              <h3 class="control-sidebar-heading">General Settings</h3>

              <div class="form-group">

                <label class="control-sidebar-subheading">

                  Report panel usage

                  <input type="checkbox" class="pull-right" checked />

                </label>

                <p>

                  Some information about this general settings option

                </p>

              </div><!-- /.form-group -->

            </form>

          </div><!-- /.tab-pane -->

        </div>

      </aside><!-- /.control-sidebar -->

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->

      <div class='control-sidebar-bg'></div>

    </div><!-- ./wrapper -->
   

    <!-- REQUIRED JS SCRIPTS -->
    
    
   

    <!-- jQuery 2.1.4 -->
    
    <script src="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    

   
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
   

    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1/plugins/datepicker/bootstrap-datepicker.js"></script> 

    <!-- AdminLTE App -->
    <script src="<?php echo base_url(''); ?>templates/AdminLTE-2.1.1/dist/js/app.min.js" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
          
          
    

 
          
          <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
    
    <script>
        function hello(){
            
            alert("echo echo echo echo echo");
        }
    </script>
    <script> $(document).ready(function () {
                
                $('.dateTest1').datepicker({
                    format: "yyyy/mm/dd"
                });  
            
            });</script>
            
    <script>
        function showHint() {
            
               
            
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        
                        
                        
                        //document.getElementsByClassName("notify").innerHTML = xmlhttp.responseText;
                        var x = document.getElementsByClassName("notify");
                        var i;
                        for (i = 0; i < x.length; i++) {
                            x[i].innerHTML = xmlhttp.responseText;
                        }
                        
                    }
                };
                
                xmlhttp.open("GET", "<?php echo base_url('index.php');?>/status/gethint", true);
                xmlhttp.send();
                
                
                
        }
        
        setInterval( showHint,3000);
        
        
    </script>
    
    <script>
    function showNotification() {
            
               
            
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        
                        
                        
                        document.getElementById("notification").innerHTML = xmlhttp.responseText;
                        
                        
                    }
                };
                
                xmlhttp.open("GET", "<?php echo base_url('index.php');?>/status/get_notification", true);
                xmlhttp.send();
                
                
                
        }
    </script>

  </body>
  
</html>