

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">

         

          <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>

            <li class="active">Here</li>

          </ol>

        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->

           <div class="col-md-7">
            <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Generate report</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" action="report/report_selector">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Item</label></label>
                      <select name="item">
                        <option value="1" >pen</option>
                        <option value="2">diary</option>
                        <option value="3">pencil</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPasswor">start date</label>
                      <input type="text" class="form-control dateTest1" id="exampleInputPassword1" name="start_date" placeholder="YYYY/MM/DD">
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputPassword1">End date</label>
                      <input type="text" class="form-control dateTest1" id="exampleInputPassword1" name="end_date" placeholder="YYYY/MM/DD">
                    </div>
                    
                   
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <input type="submit" name="inflow" value="Inflow" class="btn btn-primary">
                    <input type="submit" name="outflow" value="Outflow" class="btn btn-primary">
                    <input type="submit" name="inflow_outflow" class="btn btn-primary" value="Inflow Outflow">
                  </div>
                </form>
              </div><!-- /.box -->
              
              </div>

                



        </section><!-- /.content -->


      </div><!-- /.content-wrapper -->

     