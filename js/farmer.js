$( document ).ready(function() {
    dataAkunPetani = JSON.parse(localStorage.getItem("dataPetani"))
    $('#farmer_idPetani').val(dataAkunPetani['id_petani'])
    $('#farmer_namaPetani').val(dataAkunPetani['nama_petani'])
    $.ajax({
        url: 'php/Farmer/FrmAcc.php?action=need_report&id='+dataAkunPetani['id_petani'],
        type: 'GET',
        success: function(response){
            data = JSON.parse(response)
            $("#plant-that-manage").empty()
            Object.keys(data).forEach(function(key){
                $("#plant-that-manage").append(
                    '<button onclick="callModal('+data[key]["id_tanaman"]+')" data-bs-toggle="modal" data-bs-target="#modal_report_plant" class="btn cat_plan" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(image/plantimg/'+data[key]["gambar"]+'); background-position:center !important">'+
                    data[key]["nama_tanaman"]+' | Id Tanaman: '+data[key]["id_tanaman"]+'</button>'
                );
            });
            localStorage.setItem("plantNeedReport", JSON.stringify(data));
        },
        error: function(error){
            console.log(error)
        }
    });

    $.ajax({
        url: 'php/Farmer/FrmAcc.php?action=all_report&id='+dataAkunPetani['id_petani'],
        type: 'GET',
        success: function(response){
            setDataInTable(response)
        },
        error: function(error){
            console.log(error)
        }
    });

    $('#upload-reoport-but').on('click', function(){
        $("#farmer_idPetani").removeClass("is-invalid")
        $("#farmer_namaPetani").removeClass("is-invalid")
        $("#farmer_idTanaman").removeClass("is-invalid")
        $("#farmer_plantImage").removeClass("is-invalid")
        $("#farmer_report").removeClass("is-invalid")
        
        id_petani   = $("#farmer_idPetani").val()
        id_tanaman  = $("#farmer_idTanaman").val()
        nama_petani = $("#farmer_namaPetani").val()
        report      = $("#farmer_report").val()
        errorTotal  = 0

        if(id_petani==""){errorTotal++;$("#farmer_idPetani").addClass("is-invalid")}
        if(id_tanaman==""){errorTotal++;$("#farmer_idTanaman").addClass("is-invalid")}
        if(nama_petani==""){errorTotal++;$("#farmer_namaPetani").addClass("is-invalid")}
        if(report==""){errorTotal++;$("#farmer_report").addClass("is-invalid")}
        if(errorTotal>0){return}

        var form_data = new FormData();

        var ins = document.getElementById('farmer_plantImage').files.length;
        if(ins == 0) {
            $("#farmer_plantImage").addClass("is-invalid")
            return;
        }for (var x = 0; x < ins; x++) {
            form_data.append("gambar", document.getElementById('farmer_plantImage').files[x]);
        }

        form_data.append("id_petani",id_petani);
        form_data.append("id_tanaman",id_tanaman);
        form_data.append("nama_petani",nama_petani);
        form_data.append("report",report);
        
        $.ajax({
			url: 'php/Farmer/FrmPlantReport.php',
            dataType: 'json',
            cache: false,
			contentType: false,
			processData: false,
            data: form_data,
			type: 'POST',
			success: function(response){
                if (response == 1){
                    alert("Petani Tidak Ditemukan")
                }else{
                    alert("Laporan sudah terkirim")
                    $("#farmer_plantImage").val('')
                    $("#farmer_report").val('')
                }
			},
			error: function(error){
                console.log(error)
			}
		});
    })
    $('#draf-reoport-but').on('click', function(){
        validate_report()
    })
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