<link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&family=Kanit:wght@300&display=swap" rel="stylesheet">
        <style type="text/css">
        body { font-family: 'Athiti', sans-serif;
        font-family: 'Kanit', sans-serif; }
        </style>
<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $result['user_name'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <!-- general form elements disabled -->
                            <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">ข้อมูลเลนส์</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form"  class="text-center">
                                        <!-- text input -->
                                          <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label>Username</label>
                                            <input type="text" class="form-control" value="<?php echo $result['id_len'];?>"disabled/>
                                            </div>
                                          </div>
                                          <div class="form-row">       
                                            <div class="form-group col-md-6">
                                             <label>ตำแหน่ง</label>
                                            <input type="text" class="form-control" value="<?php echo $result['name_len'];?>"disabled/>
                                            </div>   
                                        </div>
                                           <div class="form-row">       
                                            <div class="form-group col-md-4">
                                             <label>คำนำหน้า</label>
                                            <input type="text" class="form-control" value="<?php echo $result['price_len'];?>"disabled/>
                                            </div>   
                                        </div>
                                         
                                </div>              
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
             </div>  
             </div>
           </div>
         </div>
       </div>


  <!-- Modal -->