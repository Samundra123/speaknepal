

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">


          <ol class="breadcrumb">


            <li class="active"><?php echo $this->session->flashdata('email_sent'); ?></li>


           

           
                    
            

          </ol>

        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->


          

           <div class="col-md-8">
                              
          

                <div class="col-md-6">

                 <div class="example-modal">
              
              
                      <div class="modal modal-primary add-exel-users">
                      
                      
                        <div class="modal-dialog">
                        
                        
                          <div class="modal-content">
                          
                          
                            <div class="modal-header">
                            
                            
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              
                              <h4 class="modal-title">Add APP USER</h4>
                              
                              
                            </div>
                            
                            
                            <div class="modal-body">
                            
                               <?php echo form_open_multipart('usermanagement/insert_registered_user') ?>


         

                                <div class="form-group has-feedback">
                                  <input type="text" class="form-control"  onchange="verifyorg(this.value)" id="org" value="<?php echo set_value('orgname'); ?>" name="fullname" placeholder="FULL NAME"/>
                                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                  <p id="returnMessageOrg" style="color:red"></p>
                                </div>

                                <div class="form-group has-feedback">
                                  <input type="text" class="form-control"   onchange="verifyuser(this.value)" value="<?php echo set_value('username'); ?>" name="username" placeholder="USER NAME"/>
                                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                  <p id="txtHint" style="color:red"></p>
                                </div>

                              <div class="form-group has-feedback">
                                <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email"/>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                              </div>
                              <div class="form-group has-feedback">
                                <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                              </div>
                              <div class="form-group has-feedback">
                                <input type="password" class="form-control" name="cpassword" value="<?php echo set_value('cpassword'); ?>" placeholder="Retype password"/>
                                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                              </div>

                              <div class="form-group has-feedback">
                                <input type="file" name="userfile" size="20"  />
                                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                              </div>
                              

                            </div>
                            
                            <div class="modal-footer">
                            
                            
                            
                              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                              
                              <button type="submit" class="btn btn-outline">Save changes</button>
                              </form>
                              
                            </div>
                            
                          </div><!-- /.modal-content -->
                          
                        </div><!-- /.modal-dialog -->
                        
                      </div><!-- /.modal -->
                      
                    </div><!-- /.example-modal -->

                    <!-- Large modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add-exel-users">Add New User with Excel Sheet</button>

                    </div>


                </div>



                <br><br>
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"></h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>NO.</th>
                          <th>Email</th>
                          <th>User Name</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                    <tbody>

                    <?php for($i=0;$i<count($admin_user);$i++){ ?>
                      <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $admin_user[$i]->email; ?></td>
                        <td><?php echo $admin_user[$i]->username; ?></td>
                        <td> 


                                      <div class="item-modal">
                        <div class="modal modal-primary modal-inflow-<?php echo $i; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Add Catagory</h4>
                                    </div>
                                 <?php echo form_open_multipart('usermanagement/update_registered_user') ?>
                                    <div class="modal-body">
                                       <br />
                                      
                                        


                                       <div>

                                            <input type="hidden" name="item_id" value="<?php echo $admin_user[$i]->a_id ?>" />

                                        </div>


                                        
                                            


                                            <div class="form-group">

                                            User Name<br>
                                               
                                              <input type="text" name="username" style="color:#333" value="<?php echo $admin_user[$i]->username; ?>" />            
                                            </div>

                                            <br>
                                            <br>

                                            <div class="form-group">

                                              Email <br>
                                              <input type="text" name="notice_title" style="color:#333" value="<?php echo $admin_user[$i]->email; ?>">                 
                                                                    
                                            </div> 

                                            <br>
                                            <br>


                                            <div class="form-group">

                                              password <br>

                                              <input type="password" name="notice_title" style="color:#333" value="<?php echo $admin_user[$i]->password; ?>">                 
                                                                    
                                            </div> 


                                            <br />
                                            <br />
                                            
                                            
                                    </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-outline">Save changes</button> 
                                </div>
                            </form>
                            
                          </div><!-- /.modal-content -->
                          
                        </div><!-- /.modal-dialog -->
                        
                      </div><!-- /.modal -->
                      
                    </div><!-- /.example-modal -->

                    <!-- Large modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal-inflow-<?php echo $i;?>">Edit</button>





                        </td>
                        <td>
                          

                      <div class="item-modal">
                        <div class="modal modal-primary modal-delete-<?php echo $i; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Do you want to delete?</h4>
                                    </div>
                                <?php echo form_open('usermanagement/delete_registered_user')?>
                                    <div class="modal-body">
                                       <br />
                                       
                                       <div><input type="hidden" name="id" value="<?php echo $admin_user[$i]->a_id; ?>" /></div>
                                      <p>Deleting the app user from here will completely remove user data and will remove permanently their user access from the Application</p>
                                            
                                            
                                    </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-outline">OK</button> 
                                </div>
                            </form>
                            
                          </div><!-- /.modal-content -->
                          
                        </div><!-- /.modal-dialog -->
                        
                      </div><!-- /.modal -->
                      
                    </div><!-- /.example-modal -->

                    <!-- Large modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal-delete-<?php echo $i;?>">Delete</button>









                        </td>
                      </tr>
                      <?php } ?>
                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>SNO.</th>
                        <th>Email</th>
                        <th>Full Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


               
                
          





         
              
            



        </section><!-- /.content -->


      </div><!-- /.content-wrapper -->

     