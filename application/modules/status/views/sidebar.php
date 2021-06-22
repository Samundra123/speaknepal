<!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?php echo base_url('index.php');?>/overview"><i class='fa fa-dashboard'></i> <span>Overview</span></a></li>
            <li><a href="<?php echo base_url('index.php');?>/app_user"><i class='fa fa-sitemap'></i> <span>App Users</span></a></li>
             <li><a href="<?php echo base_url('index.php');?>/notice"><i class='fa fa-file'></i> <span>Notice</span></a></li>
            <li><a href="<?php echo base_url('index.php');?>/chat_management"><i class='fa fa-file'></i> <span>Chat Management</span></a></li>
            
            
            
            
            
                <li><a href="<?php echo base_url('index.php');?>/usermanagement"><i class='fa fa-arrows-alt'></i> <span>Admin Users</span></a></li>
                
        
            
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>


                  <script>
          var app = angular.module('myApp', []);
          app.controller('myCtrl', function($scope) {
          $scope.x1 = "<?php echo $this->session->userdata('id'); ?>";
          $scope.image = "<?php echo base_url(''); ?>images/profile_image_upload/<?php echo $this->session->userdata('user_image')?>";
            $scope.tab ="hello&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hello";
      });
      </script>