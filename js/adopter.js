$( document ).ready(function() {
    const dataAdopter = "dataAdopter";

    function checkForStorage() {
        return typeof Storage !== "undefined";
    }

    if (checkForStorage()) {
        if (localStorage.getItem(dataAdopter) !== null) {
            adopter = JSON.parse(localStorage.getItem(dataAdopter))
            $("#ifnotlog").css({"display":"none"})
            $("#iflog").css({"display":"inline"})
            $("#con_idAdopt").val(adopter['id_adopter'])
            $.ajax({
                url: 'php/Adopter/AdpAdoptedPlant.php?id='+adopter['id_adopter'],
                type: 'GET',
                success: function(response){
                    setDataInTable(response)
                },
                error: function(error){
                    console.log(error)
                }
            });
        }else{
            $("#iflog").css({"display":"none"})
            $("#ifnotlog").css({"display":"inline"})
        }
    }
    
    $('#signup').on('submit', function(e){
        if($('#pass-up').val()!=$('#repass-up').val()){
            $('#pass-up,#repass-up').addClass("is-invalid")
            alert("Password Tidak Sinkron")
            return false
        }
        var data = $('#signup').serialize();
        $.ajax({
            type: 'POST',
            url: "php/Adopter/AdpAcc.php",
            data: data,
            success: function(data) {
                if(data=='1'){
                    alert("Username Sudah Digunakan")
                }else if(data=='2'){
                    alert("Email Sudah Digunakan")
                }else{ 
                    dataFull = JSON.parse(data)
                    localStorage.setItem(dataAdopter, JSON.stringify(dataFull));    
                    window.location.reload()
                }
            }
        });
        e.stopImmediatePropagation();
        return false;
    });
    $('#signin').on('submit', function(){
        var data = $('#signin').serialize();
        $.ajax({
            type: 'POST',
            url: "php/Adopter/AdpAcc.php",
            data: data,
            success: function(data) {
                if(data=='1'){
                    alert("Password Salah")
                }else if(data=='2'){
                    alert("Akun Tidak Ditemukan")
                }else{
                    dataFull = JSON.parse(data)
                    localStorage.setItem(dataAdopter, JSON.stringify(dataFull));   
                    window.location.reload()
                }
            }
        });
        e.stopImmediatePropagation();
        return false;
    });
})

function setDataInTable(response){
    data = JSON.parse(response)
    $("#tableReport").empty()
    Object.keys(data).forEach(function(key){
        $("#tableReport").append(
            "<tr class='table-body-green'>"+
                "<th scope='row'>"+(parseInt(key)+1)+"</th>"+
                "<td>"+data[key]['nama_tanaman']+"</td>"+
                "<td>"+data[key]['lokasi_tanaman']+"</td>"+
                "<td>"+data[key]['tanggal_pelaporan']+"</td>"+
                "<td>"+data[key]['laporan']+"</td>"+
                "<td><div style='background-image:url(image/report/"+data[key]['foto_pelaporan']+");width:50px; height:50px; border-radius:50%; background-size:cover'></div></td>"+
                "<td>"+
                    "<button class='btn btn-success' onclick='callReport("+data[key]['id_perawatan']+")' data-bs-toggle='modal' data-bs-target='#modal_bukti_pembayaran'><i class='fas fa-eye'></i></button>"+
                "</td>"+
            "</tr>"
        );
    });
    localStorage.setItem("adopterDanTanaman", JSON.stringify(data));
}