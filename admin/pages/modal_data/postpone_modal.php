<link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&family=Kanit:wght@300&display=swap" rel="stylesheet">
        <style type="text/css">
        body { font-family: 'Athiti', sans-serif;
        font-family: 'Kanit', sans-serif; }
        </style>
<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $result['app_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <form action="update_postpone.php" name="frmAdd" method="post">
                            <!-- general form elements disabled -->
                            <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">การเลื่อนนัดผู้ป่วย</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form"  class="text-center">
                                        <!-- text input -->
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label>รหัสการนัดหมาย</label>
                                            <input type="text" class="form-control" name = "txtAppId"  value="<?php echo $result['app_id'];?>"readonly/>
                                            </div>
                                            <div class="form-row">       
                                            <div class="form-group col-md-6">
                                             <label>ชื่อผู้ป่วย</label>
                                            <input type="text" class="form-control" value="<?php echo $result['user_name'];?>"disabled/>
                                            </div>   
                                            </div>
                                           
                                          <div class="form-row">       
                                            <div class="form-group col-md-6">
                                             <label>เวลานัดหมาย</label>
                                            <input type="text" class="form-control" value="<?php echo $result['app_time'];?>"disabled/>
                                            </div>   
                                        </div>
                                           
                                         <div class="form-row">       
                                            <div class="form-group col-md-6">
                                             <label>รายละเอียด</label>
                                            <input type="text" class="form-control" value="<?php echo $result['add_detail'];?>"disabled/>
                                            </div>   
                                        </div>
                                         <div class="form-group col-md-6">
                                            <label>วันที่นัดหมาย</label>
                                            <input type="date" class="form-control" value="<?php echo $result['app_date'];?>"disabled/>
                                            </div>
                                          </div>
                                        <div class="form-row">       
                                            <div class="form-group col-md-6">
                                             <label>วันที่เลื่อนนัด</label>
                                            <input type="date" class="form-control" name = "txtAppDate"  value="<?php echo $result['app_date'];?>"/>
                                            </div>   
                                        </div>
                                                     
             </div>
             <div class="modal-footer">
               <button type="submit" class="btn btn-success" >บันทึก</button></form>
             </div>  
             </div>
           </div>
         </div>
       </div>


  <!-- Modal -->