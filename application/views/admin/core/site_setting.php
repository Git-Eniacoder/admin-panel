<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>

</style>
<div id="layoutSidenav_content">
<main>
   <div class="container-fluid">
      <h1 class="mt-4">Site Setting</h1>
      <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">Site Setting</li>
      </ol>
      <div class="container">
         <form>
            <div class="form-group">
               <label for="exampleFormControlInput1">Site Title</label>
               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Site Title">
               <div class="form-group">
                  <label for="exampleFormControlTextarea1">Site Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>
            </div>
            <div class="form-group">
              <label for="">Site Logo</label>
              <input type="file" class="form-control-file" name="" id="imagepreview" placeholder="" aria-describedby="fileHelpId">
              <div style="width:10em" class="m-3">
               <img id="blah" class="w-100" src="#" alt="your image" />
              </div>
            </div>
            <div class="form-group">
               <label for="exampleFormControlSelect1">Example select</label>
               <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
               </select>
            </div>
            <button type="button" class="btn btn-success">Update</button>
         </form>
      </div>
   </div>
</main>
<script>
   function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imagepreview").change(function() {
  readURL(this);
});
</script>