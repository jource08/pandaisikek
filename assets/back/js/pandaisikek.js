function fetch_data(value,modal){
    //value = nilai id yang akan di-ajax keun
    //modal = id modal yang akan berinteraksi
    $('.btn').prop('disabled',true);
    var url = window.location.origin;    
    $.post( url+"/pandaisikek/back/Kategori_produk/ajax", {id: value} )
        .done(function( response ) {
            //yang dilakukan ketika menerima response hasil ajax
            var res = JSON.parse(response);
            if (res.length > 0){
                $('#'+modal).find("input[name=txt-nama-edit]").val(res[0].nama);
                $('#'+modal).find("select[name=txt-nama-status]").val(res[0].status);
                $('#'+modal).modal('show');
            }else{
                alert('invalid parameter! jangan sok2 hacker deh loe!');
            }
            $('.btn').prop('disabled',false);
        });
}

function delete_data(value){
    //value = nilai id yang akan di-ajax keun
    //modal = id modal yang akan berinteraksi
    $('.btn').prop('disabled',true);
    var url = window.location.origin;
    $.post( url+"/pandaisikek/back/Kategori_produk/ajax", {id: value} )
        .done(function( response ) {
            //yang dilakukan ketika menerima response hasil ajax
            var res = JSON.parse(response);
            if (res.length > 0){
                r = confirm("Apakah anda yakin akan menghapus data ini?");
                if (r == true) {
                    window.location.href = url+"/pandaisikek/back/Kategori_produk/hapus?id="+value;
                  }
            }else{
                alert('invalid parameter! jangan sok2 hacker deh loe!');
            }
            $('.btn').prop('disabled',false);
        });

}