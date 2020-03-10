<!-- Begin Page Content -->
<div class="container-fluid">
  <?php $this->load->view('alert') ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $pages?></h1>
</div>
<!-- Content Row -->
<div class="row">
  <div class="col-12">
    <form class="user" method="post" accept-charset="utf-8" action="<?php echo base_url()?>index.php/Budget/update">
      <div class="form-group">
        <input type="text" name="id" class="form-control form-control-user" id="id" value="<?php echo $ret->id ?>" readonly hidden required>
      </div>
      <div class="form-group">
        <input type="number" min = 1 name="budget" class="form-control" id="budget" placeholder="Budget" value="<?php echo $ret->budget ?>" required>
      </div>
      <div class="form-group">
        <input type="number" min = 2010 max = 2100 name="year" class="form-control" id="year" placeholder="year" value="<?php echo $ret->year ?>" required>
      </div>
      <div class="form-group">
        <select class="form-control" name="month" id="month">
          <?php 
            foreach($month as $row) { 
              if($row == $ret->month){
                echo '<option value="'.$row.'" Selected>'.$row.'</option>';
              }else{
                echo '<option value="'.$row.'" >'.$row.'</option>';
              }
            } 
          ?>
        </select>
      </div>
      <input type="submit" value="Submit" class="btn btn-primary btn-user btn-block">
    </form>
  </div>
</div>

<!-- /.container-fluid -->