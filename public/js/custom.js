$(document).ready(function(){ 

    $('body .confirm').click(function(e){   
        swal({
            title: "Are you sure you want to proceed ?", 
            type: "warning",
            showCancelButton: true,  
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Proceed",
            closeOnConfirm: true
        }, function(){
            $('.confirm').closest('form').submit(); 
        });

        return false;
    });
    $('body .confirms').click(function(e){  
        element = $(this);
        swal({
            title: "Are you sure you want to proceed ?", 
            type: "warning",
            showCancelButton: true,  
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Proceed",
            closeOnConfirm: true
        }, function(){
            document.location.href = element.attr('href');
        });

        return false;
    });

}); 