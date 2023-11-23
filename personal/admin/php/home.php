<h2>Edit Home Section</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Successfully Updated !
</div>
      <?php
  }  
  if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  something wrong with your image please check type or size !
</div>
      <?php
  } } 
?>  
         <form method="post" action="php/uhome.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
            <img src="../assets/img/<?=$data['profilepic']?>" class="oo img-thumbnail"><br>
            <label>Profile Pic (Minimum 600px X 600px, Maxsize 2mb)</label>
            <div class="custom-file">
                <input type="file" name="profile" class="custom-file-input" id="profilepic">
                <label class="custom-file-label" for="profilepic">Choose Profile Pic...</label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <img src="../assets/img/<?=$data['wall1']?>" class="oo img-thumbnail">
            <label>Home Cover (Minimum 1920 X 1280, Maxsize 2mb)</label>
            <div class="custom-file">
                <input type="file" name="cover" class="custom-file-input" id="coverpic">
                <label class="custom-file-label" for="coverpic">Choose Home Cover...</label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <img src="../assets/img/<?=$data['wall2']?>" class="oo img-thumbnail">
            <label>Wall 2 (Minimum 1920 X 1280, Maxsize 2mb)</label>
            <div class="custom-file">
                <input type="file" name="wall2" class="custom-file-input" id="wall2pic">
                <label class="custom-file-label" for="wall2pic">Choose Wall 2...</label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <img src="../assets/img/<?=$data['wall3']?>" class="oo img-thumbnail">
            <label>Wall 3 (Minimum 1920 X 1280, Maxsize 2mb)</label>
            <div class="custom-file">
                <input type="file" name="wall3" class="custom-file-input" id="wall3pic">
                <label class="custom-file-label" for="wall3pic">Choose Wall 3...</label>
            </div>
        </div>
  
   <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="name" name="name" value="<?=$data['name']?>" class="form-control" id="name" placeholder="Mohan Goswami">
    </div>
    
   
    
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" value="<?=$data['emailid']?>" class="form-control" id="email" placeholder="workwithmohan@gmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="twitter">Twitter</label>
      <input type="text" class="form-control" value="<?=$data['twitter']?>" name="twitter" id="twitter" placeholder="https://twitter.com/MohanGo94273231">
    </div>
    
    <div class="form-group col-md-6">
      <label for="facebook">Facebook</label>
      <input type="text" class="form-control" value="<?=$data['facebook']?>" name="facebook" id="facebook" placeholder="https://facebook.com/">
    </div>
    
    <div class="form-group col-md-6">
      <label for="instagram">Instagram</label>
      <input type="text" class="form-control" value="<?=$data['instagram']?>" name="instagram" id="instagram" placeholder="https://instagram.com/">
    </div>
    
    <div class="form-group col-md-6">
      <label for="skype">Youtube</label>
      <input type="text" value="<?=$data['skype']?>" class="form-control" name="skype" id="skype" placeholder="@monu250">
    </div>
    
    <div class="form-group col-md-6">
      <label for="linkedin">Linkedin</label>
      <input type="text" class="form-control" value="<?=$data['linkedin']?>" name="linkedin" id="linkedin" placeholder="https://linkedin.com/">
    </div>
    <div class="form-group col-md-6">
      <label for="github">Github</label>
      <input type="text" class="form-control"  value="<?=$data['github']?>" name="github" id="github" placeholder="https://github.com/">
    </div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" value="<?=$data['location']?>" class="form-control" id="address" placeholder="">
  </div>
  <div class="form-row">
  <div class="form-group col-md-9">
    <label for="profession">Proffesion Titles (Separate with ',' comma)</label>
    <input type="text" class="form-control" name="profession" value="<?=$data['professions']?>" id="profession" placeholder="Web Developer,PHP Developer,Graphic Designer">
  </div>
  <div class="form-group col-md-3">
    <label for="mobile">Mobile No</label>
    <input type="text" class="form-control" value="<?=$data['mobile']?>" name="mobile" id="mobile" placeholder="+880 ">
  </div>
             </div>
  <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>