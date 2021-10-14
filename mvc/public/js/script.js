$(function(){
    $('.btnAdd').on('click', function() {
        $('#modalTitle').html('Add student data');
        $('.modal-footer button[type=submit]').html('Add data');
    });

    $('.showModalEdit').on('click', function() {
        $('#modalTitle').html('Update student data');
        $('.modal-footer button[type=submit]').html('Update data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/student/update');
        
        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/student/getData',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#name').val(data.name);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);   
                $('#id').val(data.id);   
            }
        });
    });
});