$(document).ready(function() {
    
    $('.GlobalFormValidation').on("submit", function(e) {
        
        var errormsg = '';
        var form = $(this);
        
        var roll = $('#roll_no').val();
        var fnm = $('#first_name').val();
        var lnm = $('#lsst_name').val();
        var dob = $('#dob').val();
        
        var maths = $('#maths').val();
        var science = $('#science').val();
        var  english = $('#english').val();
        
        
        
        
        
        
        if (roll == '')
        {
            errormsg += "<li>Please Enter Roll No.</li>";
        }
        if (maths == '')
        {
            errormsg += "<li>Please Enter Maths Marks.</li>";
        }
        if (science == '')
        {
            errormsg += "<li>Please Enter Science Marks.</li>";
        }
        if (english == '')
        {
            errormsg += "<li>Please Enter English Marks.</li>";
        }
        
        if (fnm == '')
        {
            errormsg += "<li>Please Enter First Name.</li>";
        }
        if (lnm == '')
        {
            errormsg += "<li>Please Enter Last Name.</li>";
        }
        if (dob == '')
        {
            errormsg += "<li>Please Enter Date Of Birth.</li>";
        }
        
        e.preventDefault();

        if (!errormsg == "")
        {


            $('#Modal_Edits').modal('show');
            $('#Modal_Edits').find('.modal-title').html('Kindly resolve below errors.');
            $('#Modal_Edits').find('.modal-body').html(errormsg).css('color','red');
            
            //$("#flat").prop("disabled", true);
            }
        else
        {

        $.ajax({
                type: "POST",
                cache: false,
                url: form.attr('action'),
                data: form.serialize(),
                processData: true,
                success: function(json) {

                    
                    if (json.status == 'success') {
                        
                        $('#Modal_Edits').modal('show');
                        $('#Modal_Edits').find('.modal-title').text(json.status);
                        $('#Modal_Edits').find('.modal-body').text(json.message).css('color','black');
                        

                    }
                    // oTable.draw();
                },
                error: function(json) {
                    $('#Modal_Edits').modal();
                    $('#Modal_Edits').find('.modal-title').text('Error');
                    $('#Modal_Edits').find('.modal-body').html(json.responseText).css('color','red');
                    setTimeout(function() {
                        form.find('input[type=submit]').prop('disabled', false).removeClass('disabled');
                        form.find('#error').addClass('hidden');
                    }, 6000);

                },
                dataType: "json"
            });
        }


    });
});