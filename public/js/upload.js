$(document).ready(function(){

    // $(function() {
    //     $(document).ready(function()
    //     {
    //         $('form').ajaxForm({
    //             beforeSend:function() {
    //                 $('.blocoUpload, .blocoDados').addClass('d-none');
    //                 $('.blocoLoad').removeClass('d-none');
    //                 $('.custom-file-label').html('Selecionar arquivo');
    //                 $('.alert').addClass('d-none');
    //             },
    //             uploadProgress:function (event, position, total, percentComplete)
    //             {
    //                 $('.progress-bar').text(percentComplete + '%');
    //                 $('.progress-bar').css('width', percentComplete + '%');
    //                 if(percentComplete==100)
    //                 {
    //                     $('.blocoLoad').addClass('d-none');
    //                     $('.blocoUpdate').removeClass('d-none');
    //                 }
    //             },
    //             success:function (data)
    //             {
    //                 if(data.errors)
    //                 {
    //                     $('.blocoUpload, .blocoDados, .alert').removeClass('d-none');
    //                     $('.blocoUpdate').addClass('d-none');
    //                     $('.alert').html(data.errors[0].dados);
    //                 }
    //                 if(data.sucesso)
    //                 {
    //                     $('.blocoUpload, .blocoDados').removeClass('d-none');
    //                     $('.blocoUpdate').addClass('d-none');
    //                     $('.titulo').html('50 Registros cadastrados');
    //                 }
    //             },
    //             error:function (data)
    //             {
    //                 console.log('erro na hora de enviar.');
    //             }
    //         });
    //     });
    // });

    // $("#file").change(function(){
    //     var allowedTypes = ['application/vnd.ms-excel'];
    //     var file = this.files[0];
    //     var fileType = file.type;
    //     if(!allowedTypes.includes(fileType)){
    //         alert('O arquivo de dados deve estar no formato CSV.');
    //         $("#file").val('');
    //         return false;
    //     }
    //     $('.custom-file-label').html(file.name);
    // });
});