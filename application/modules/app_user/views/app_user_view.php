

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

           <div>

              <?php echo $this->session->flashdata('email_error'); ?>
           </div>
                              
           <div class="col-md-6">

              <div class="example-modal">
              
              
                      <div class="modal modal-primary add-category">
                      
                      
                        <div class="modal-dialog">
                        
                        
                          <div class="modal-content">
                          
                          
                            <div class="modal-header">
                            
                            
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              
                              <h4 class="modal-title">Add APP USER</h4>
                              
                              
                            </div>
                            
                            
                            <div class="modal-body">
                            
                              <?php echo form_open('app_user/add_user')?>
                              
                              <div class="form-group">
                              
                              
                                <label for="Category Name">Email Address</label>
                                
                                <input type="text" class="form-control" name="email" id="task" placeholder="example@example.com">
                                
                                
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add-category">Add New User Individual</button>


                </div>

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
                            
                              <?php echo form_open_multipart('app_user/excel_add_appuser')?>
                              
                      
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
                          <th>Full Name</th>
                          <th>Location</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                    <tbody>

                    <?php for($i=0;$i<count($user);$i++){ ?>
                      <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $user[$i]->email; ?></td>
                        <td><?php echo $user[$i]->fullname; ?></td>
                        <td><?php


                            if( $user[$i]->location==1)
                            {

                              echo "Inside Country";


                            }

                            else if($user[$i]->location==NULL)
                              {
                                echo "NOT SET";
                              }

                            else{


                                echo "OUT SIDE COUNTRY";
                            }

                        ?></td>
                        <td> 


                                      <div class="item-modal">
                        <div class="modal modal-primary modal-inflow-<?php echo $i; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Add Catagory</h4>
                                    </div>
                                <?php echo form_open('app_user/reset_password')?>
                                    <div class="modal-body">
                                       <br />
                                       
                                       <div><input type="hidden" name="item_id" value="<?php echo $user[$i]->app_user_id ?>" />

                                       <input type="hidden" name="item_id" value="<?php echo $user[$i]->email; ?>" />

                                       </div>
                                            <div class="form-group">
                                                <p>Are you really want to reset the passowrd it may cause problem in access in user</p>
                                                                    
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal-inflow-<?php echo $i;?>">Reset Password</button>





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
                                <?php echo form_open('app_user/delete_appuser')?>
                                    <div class="modal-body">
                                       <br />
                                       
                                       <div><input type="hidden" name="id" value="<?php echo $user[$i]->app_user_id; ?>" /></div>
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

     