
$(document).ready(function () {
    $("#frm_employee").validate({
      
    });
});

function myFunction() {
    let x = document.getElementById("numb").value;
    let text;
    if (isNaN(x) || x < 1 || x > 10) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
}

//function add_edu() {
//    $("#tbl_edu").append('<tr>\n\
//    <td style="width:20%;">\n\
//        <select class="form-control" id="sle_edu_type" name="sle_edu_typ[]" required>\n\
//         <option value="">----</option>\n\
//         <option value="ป.6">ป.6</option>\n\
//         <option value="ม.6">ม.6</option>\n\
//         <option value="ปวช">ปวช</option>\n\
//         <option value="ปวส">ปวส</option>\n\
//         <option value="ป.ตรี">ป.ตรี</option>\n\
//         <option value="ป.โท">ป.โท</option>\n\
//         <option value="ป.เอก">ป.เอก</option>\n\
//        </select>\n\
//    </td>\n\
//    <td><input type="text" class="form-control" id="txtmajor" name="txtmajor[]" required></td>\n\
//    <td><input type="text" class="form-control" id="txtschool" name="txtschool[]" required></td>\n\
//    <td><input type="text" class="form-control" id="txtgpa" name="txtgpa[]" required></td>\n\
//    <td><a class="btn btn-default"><li class="fa fa-trash"></li></a></td>\n\
//    </tr>');
//}
//
//
//function add_work() {
//    $("#tbl_work").append('<tr>\n\
//    <td><input type="text" class="form-control" id="txtworkplace" name="txtworkplace[]" required></td>\n\
//    <td><input type="text" class="form-control" id="txtposition" name="txtposition[]" required></td>\n\
//    <td><input type="text" class="form-control" id="txtsalary" name="txtsalary[]" required></td>\n\
//    <td><input type="text" class="form-control" id="txttime" name="txttime[]" required></td>\n\
//    <td><input type="text" class="form-control" id="txtresign" name="txtresign[]" required></td>\n\
//    <td><a class="btn btn-default"><li class="fa fa-trash"></li></a></td>\n\
//    </tr>');
//}
//
//
//function cancel_edu(){
//    
//}