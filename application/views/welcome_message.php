<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<br> <br>
<center>
<div class="container">
<div class="card w-50 ">
<div class="card-body">
<form action="<?php echo site_url('welcome/insert') ?>" method="POST">
<h1>เพิ่มข้อมูล</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">ขบวน</label>
    <input type="text" class="form-control" id="" name="t_num" placeholder="">
    
  </div>
  <h5>ต้นทาง</h5>
  <div class="form-group">
    
    <input type="text" class="form-control" id="" name="s_stat" placeholder="สถานี">
  </div>
  <div class="form-group">
    <input type="time" class="form-control" id="" name="s_out" placeholder="เวลาออก">
  </div>
  <h5>ห้วยราช</h5>
  <div class="form-group">
    
    <input type="time" class="form-control" id="" name="h_to" placeholder="ถึง">
  </div>
  <div class="form-group">
    <input type="time" class="form-control" id="" name="h_out" placeholder="ออก">
  </div>
  <h5>ปลายทาง</h5>
  <div class="form-group">
    
    <input type="text" class="form-control" id="" name="e_stat" placeholder="สถานี">
  </div>
  <div class="form-group">
    <input type="time" class="form-control" id="" name="totime" placeholder="ถึงเวลา">
  </div>
  <h5>หมายเหตุ</h5>
  <div class="form-group">
    
    <input type="text" class="form-control" id="" name="note" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</center>

</body>
</html>