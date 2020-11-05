<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<div class="container">
<table class="table table-bordered">
  <thead>
    <tr class="bg-ccff90 light-green accent-1">
      <th scope="row"rowspan="2">ขบวน</th>
      <th scope="col"colspan="2">ต้นทาง</th>
      <th scope="col" colspan="2">ห้วยราช</th>
      <th scope="col"colspan="2">ปลายทาง</th>
      <th scope="row"rowspan="2">หมายเหตุ</th>
    </tr>
    <tr class="bg-ff7043 deep-orange lighten-1" >
    
      <td>สถานี</td>
      <td>เวลาออก</td>
        <td>ถึง</td>
        <td>ออก</td>
        <td>สถานี</td>
        <td>ถึงเวลา</td>
    </tr>
  </thead>
  <?php foreach($query as $id){ ?>
  <tbody>
    <tr class="bg-fff8e1 amber lighten-5">
      <th scope="row"><?php echo $id['t_num'] ?></th>
      <td><?php echo $id['s_stat'] ?></td>
      <td><?php echo $id['s_out'] ?></td>
      <td><?php echo $id['h_to'] ?></td>
      <td><?php echo $id['h_out'] ?></td>
      <td><?php echo $id['e_stat'] ?></td>
      <td><?php echo $id['totime'] ?></td>
      <td><?php echo $id['note'] ?></td>
      
    </tr>
    
  </tbody>
   <?php } ?>
</table>
</div>
</body>
</html>