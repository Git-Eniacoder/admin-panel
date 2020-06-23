<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
   <div class="card m-4 border-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table " id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                           
                                                <th>Page Name</th>
                                                <th>Url</th>
                                                <th>Tags</th>
                                                <th>Page Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      <?php foreach($fetch as $value) {?>
                                            <tr>
                                              
                                                <td><?php echo $value['page_name'] ; ?></td>
                                                <td><?php echo $value['page_url'] ; ?></td>
                                                <td><?php echo $value['page_tags'] ; ?></td>
                                                <td><?php echo $value['date'] ; ?></td>
                                                <td class="d-flex">
                                                    <a class="btn btn-success mx-1" href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <a class="btn btn-danger mx-1" href="" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                          
                                      <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        
   </div>
</main>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-0">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are You Sure You Want To Delete</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel </button>
          <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>