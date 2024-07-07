$(document).ready(function () {

    $("#edititem").on("show.bs.modal", function (e) {
        var id = $(e.relatedTarget).data('target-id');
        var item = $(e.relatedTarget).data('target-item');
        //alert(item);
        $('#id').val(id);
        $('#itemname').val(item);
    });
// For delete user on userlist page
    $(document).on('click','#deleteuser',function () {
        // alert('ddddd');
        var id=$(this).data('id');
        var element=$(this);
        //alert(itemid);
        swal({
            title: "Are you sure?",
            text: "You want to Delete This User!",
            icon: "warning",
            buttons: [
                'No, cancel it!',
                'Yes, I am sure!'
            ],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                // alert(id);
                $.ajax({
                    url: 'user/delete',
                    type: 'get',
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    success:function (data) {
                        //alert(data)
                        if (data==1){
                            $(element).closest('tr').fadeOut();
                            toastr.success('User Deleted Successfully');
                        }
                        else{
                            swal("Cancelled", "User Record IS Safe :)", "Error");
                        }
                    }
                });
            }
        });
    });
// For Delete PAtient patient record page
    $(document).on('click','#deletepatient',function () {
        // alert('ddddd');
        var id=$(this).data('id');
        var element=$(this);
        //alert(itemid);
        swal({
            title: "Are you sure?",
            text: "You want to Delete This Patient!",
            icon: "warning",
            buttons: [
                'No, cancel it!',
                'Yes, I am sure!'
            ],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                // alert(id);
                $.ajax({
                    url: 'patientrecord/delete',
                    type: 'get',
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    success:function (data) {
                        //alert(data)
                        if (data==1){
                            $(element).closest('tr').fadeOut();
                            toastr.success('Patient Deleted Successfully');
                        }
                        else{
                            swal("Cancelled", "Patient Record Is Safe:)", "Error");
                        }
                    }
                });
            }
        });
    });
// For Appointment Modal on patientRecord page
    $("#appointment").on("show.bs.modal", function (e) {
        var id = $(e.relatedTarget).data('target-id');
        var name = $(e.relatedTarget).data('target-name');
        //alert(name);
        $('#id').val(id);
        $('#name').val(name);
    });
// For Cancel Appointment patientappointment page
    $(document).on('click','#cancelappointment',function () {
        // alert('ddddd');
        var id=$(this).data('id');
        var element=$(this);
        //alert(itemid);
        swal({
            title: "Are you sure?",
            text: "You want to Cancel This Appointment!",
            icon: "warning",
            buttons: [
                'No, cancel it!',
                'Yes, I am sure!'
            ],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                 //alert(id);
                $.ajax({
                    url: 'patientappointment/cancel',
                    type: 'get',
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    success:function (data) {
                        //alert(data)
                        if (data==1){
                            $(element).closest('tr').fadeOut();
                            toastr.warning('Patient Appointment Cancel Successfully');
                        }
                        else{
                            swal("Cancelled", "Patient Appointment Is Safe:)", "success");
                        }
                    }
                });
            }
        });
    });
// For medication patientappointment page
    $("#medication").on("show.bs.modal", function (e) {
        var id = $(e.relatedTarget).data('target-id');
        //alert(name);
        $('#id').val(id);
    });
// For check old password
    $(document).on('blur','#oldpassword',function () {
        //alert('ddddd');
        var id=$(this).data('id');
        var oldpassword=$(this).val();
         //alert(id+oldpassword);
                $.ajax({
                    url: 'id/check',
                    type: 'get',
                    data: {'id': id,'oldpassword':oldpassword, _token: '{{csrf_token()}}'},
                    success:function (data) {
                        //alert(data)
                        if (data==1){
                            // toastr.success('Password Updated Successfully');
                        }
                        else{
                            $('#oldpassword').val('');
                            $('#password').val('');
                            $('#password_confirmation').val('');
                            toastr.warning('Old Password Cannot be Matched');
                        }
                    }
                });
    });
});