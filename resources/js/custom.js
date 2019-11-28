jQuery(document).ready(function($){
    $('#del').on('click', function(){
        var getLink = $(this).attr('href');
        swal({
            title: 'Are You Sure?',
            text: '',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d9534f',
            confirmButtonText: 'Yes, Please!',
        }, function(){
            window.location.href = getLink
        });
        return false;
    });
});