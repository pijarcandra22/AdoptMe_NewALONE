$( document ).ready(function() {

    function checkForStorage() {
        return typeof Storage !== "undefined";
    }

    if (checkForStorage()) {
        if (localStorage.getItem("dataAdopter") !== null) {
            adopter = JSON.parse(localStorage.getItem("dataAdopter"))
            $("#ifnotlog").css({"display":"none"})
            $("#iflog").css({"display":"inline"})
            $("#con_idAdopt").val(adopter['id_adopter'])
            $("#adopter_name").html(adopter['username'])
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

            $.ajax({
                url: 'php/Adopter/AdpPlantStatus.php?id='+adopter['id_adopter'],
                type: 'GET',
                success: function(response){
                    data = JSON.parse(response)
                    readyplant = 0
                    notplant = 0
                    $("#plant_status").empty()
                    Object.keys(data).forEach(function(key){
                        $("#plant_status").append(
                            '<button class="btn cat_plan" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(image/plantimg/'+data[key]["gambar"]+'); background-position:center !important">'+
                            data[key]["id_tanaman"]+' | '+ data[key]["nama_tanaman"]+' | '+data[key]["status"]+'</button>'
                        );
                        if(data[key]["status"]=="adopsi"){
                            readyplant += 1
                        }else{
                            notplant += 1
                        }
                    });
                    localStorage.setItem("adoptStatus", JSON.stringify(data));
                    $("#adp_total_tanaman").html(readyplant)
                    $("#adp_waiting_tanaman").html(notplant)
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
                    localStorage.setItem("dataAdopter", JSON.stringify(dataFull));    
                    window.location.reload()
                }
            }
        });
        e.stopImmediatePropagation();
        return false;
    });

    $('#signinBut').on('click', function(){
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
                    localStorage.setItem("dataAdopter", JSON.stringify(dataFull));   
                    location.replace(dataFull['username']);
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
    $("#dataReport").empty()
    Object.keys(data).forEach(function(key){
        $("#tableReport").append(
            "<tr class='table-body-green'>"+
                "<th scope='row'>"+(parseInt(key)+1)+"</th>"+
                "<td>"+data[key]['nama_tanaman']+"</td>"+
                "<td>"+data[key]['lokasi_tanaman']+"</td>"+
                "<td class='out-480'>"+data[key]['tanggal_pelaporan']+"</td>"+
                "<td class='out-480'>"+data[key]['laporan']+"</td>"+
                "<td class='out-480'><div style='background-image:url(image/report/"+data[key]['foto_pelaporan']+");width:50px; height:50px; border-radius:50%; background-size:cover'></div></td>"+
                "<td>"+
                    "<button class='btn btn-success' onclick='callReport("+data[key]['id_perawatan']+")' data-bs-toggle='modal' data-bs-target='#modal_see_report'><i class='fas fa-eye'></i></button>"+
                "</td>"+
            "</tr>"
        );
    });
    localStorage.setItem("adopterDanTanaman", JSON.stringify(data));
}