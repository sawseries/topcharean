<link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&family=Kanit:wght@300&display=swap" rel="stylesheet">
        <style type="text/css">
        body { font-family: 'Athiti', sans-serif;
        font-family: 'Kanit', sans-serif; }
        </style>
<!-- Modal -->

<div class="modal fade" id="myModal<?php echo $result['id_sale'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <!-- general form elements disabled -->
                            <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">ข้อมูลการชำระเงิน</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form"  class="text-center">
                                        <!-- text input -->
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label>เลขที่ใบเสร็จ</label>
                                            <input type="text" class="form-control" value="<?php echo $Seq; ?>" readonly="1" />
                                            </div>
                                          </div>
                                          <div class="form-row">       
                                            <div class="form-group col-md-6">
                                             <label>ชื่อ - นามสกุล</label>
                                            <input type="text" class="form-control" value="<?php echo $result['name'];?>"readonly="1" />
                                            </div>   
                                        </div>
                                           <div class="form-row">       
                                            <div class="form-group col-md-4">
                                             <label>ยอดขาย</label>
                                            <input type="text" class="form-control" value="<?php echo $result['total_price'];?>" readonly="1"/>
                                            </div>   
                                        </div>
                                         <div class="form-row">       
                                            <div class="form-group col-md-4">
                                             <label>มัดจำ</label>
                                            <input type="text" class="form-control" value="<?php echo $result['mudjum'];?>" readonly="1"/>
                                            </div>   
                                        </div>
                                          <div class="form-row">       
                                            <div class="form-group col-md-4">
                                             <label>ยอดค้างชำระ</label>
                                            <input type="text" name="bala" class="form-control" value="<?php echo $result['balance'];?>" />
                                            </div>   
                                        </div> 
                                                  
             </div>
             <div class="modal-footer">
                <a href="select_recive3.php?idd=<?php echo $result["id_sale"];?>&&bala=<?php echo $result["balance"];?>">
               <button type="button" class="btn btn-success" >บันทึกการชำระเงิน</button>
               </a>
           
             </div>  
             </div>
           </div>
         </div>
       </div>


  <!-- Modal -->