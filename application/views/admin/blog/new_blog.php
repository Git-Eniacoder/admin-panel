<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
      <div class="container py-5">
         <div class="row">
            <div class="col-md-10 border-right-1">
               <div class="form-group">
               <label for="">Heading</label>
               <input type="text" class="form-control" name="" id="" placeholder="Heading">
               </div>
               <textarea name="about" id="textareaContent"></textarea>
            </div>
            <div class="col-md-2">

            </div>
       </div>
      </div>
   </div>
</main>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ckeditor/ckeditor.js"></script>
<script>
$(document).ready(function(){
    CKEDITOR.replace('textareaContent');
});
    </script>