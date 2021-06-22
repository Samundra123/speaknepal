

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">


          <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> Notice</a></li>

            <li class="active">Notice</li>

          </ol>

        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->

          <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">New Notice</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="notice/put_notice" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Notice Text</label>
                      <textarea  class="form-control" name="notice" id="exampleInputPassword1"></textarea>  
                    </div>
                    
                    <input type="submit" name="send">
                    
                  </div><!-- /.box-body -->
                </form>
            </div>

            </div>
            

           <div class="col-md-12">
                              
               <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Item Name</th>
                        <th>Description</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php for($i=0;$i<count($notice);$i++){ ?>
                      <tr>
                        <td><?php echo $notice[$i]->notice_title; ?></td>
                        <td><?php echo $notice[$i]->notice_description; ?></td>
                        <td>

<!-- inflow code -->
                            <div class="item-modal" >
                        <div class="modal modal-primary modal-inflow-<?php echo $i; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Edit Notice</h4>
                                    </div>
                                <?php echo form_open('notice/edit_notice')?>
                                    <div class="modal-body" >
                                       <br />
                                       
                                       <div><input type="hidden" name="notice_id"  value="<?php echo $notice[$i]->notice_id ?>" /></div>
                                            <div class="form-group">

                                              Title <br>
                                              <input type="text" name="notice_title" style="color:#333" value="<?php echo $notice[$i]->notice_title; ?>">                 
                                                                    
                                            </div> 

                                            <div class="form-group">

                                              Description <br>
                                              <textarea type="text" name="notice_description" style="color:#333;width:500px;"><?php echo $notice[$i]->notice_description; ?></textarea>                
                                                                    
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
<!-- Delete modal code-->
                        <td> 
                            
                               <div class="item-modal">
                        <div class="modal modal-primary modal-outflow-<?php echo $i; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Do you want to delete? </h4>
                                    </div>
                                <?php echo form_open('notice/delete')?>
                                    <div class="modal-body">
                                       <br />
                                       
                                       <div>
                                            <input type="hidden" name="id" value="<?php echo $notice[$i]->notice_id ?>" />
                                        </div>

                                        <p>Are you sure you want to delete the notification? It will be permanantly deleted</p>
                                   
                                            
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal-outflow-<?php echo $i;?>">Delete</button>

                        </td>
                        
                      </tr>
                      
                    <?php } ?>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                         <th>Notice Title</th>
                        <th>Description</th>
                        
                       
                        
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              
            </div>
              

        </section><!-- /.content -->


      </div><!-- /.content-wrapper -->

     