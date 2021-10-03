<!-- include header -->
<?php $this->load->view('cms/include/header');?>
        <!-- =============================INCLUDE LEFT SSIDEBAR================================= -->       
        <?php $this->load->view('cms/include/sidebar');?>

  

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Manage Static Pages</h4>
                       
                        </div>

                </div>
                
                <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-0"><a href="<?php echo base_url().'adminpanel/admin/dashboard';?>">Dashboard </a> / <a href="<?php echo base_url().'adminpanel/staticpage/addpage';?>">Add Page</a></h5>
                            </div>
                        </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        
                        
                        <!--  -->
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Page Title<</th>
                                                <th>Status</th>
                                                <th>Create On</th>
                                                <th>Update On</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td>sandeep negi</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td><i class="fas fa-edit"></i> <span>&nbsp; </span> <i class="fas fa-trash-alt"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td><i class="fas fa-edit"></i> <span>&nbsp; </span> <i class="fas fa-trash-alt"></i></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Page Title</th>
                                                <th>Status</th>
                                                <th>Create On</th>
                                                <th>Update On</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
  
     <?php $this->load->view('cms/include/footer');?>

     <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
