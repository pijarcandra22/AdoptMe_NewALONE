$( document ).ready(function() {
    $.ajax({
        url: 'php/Manager/MngCrudPlant.php?action=read-all-plant&id=1',
        type: 'GET',
        success: function(response){
            setDataInTable(response)
        },
        error: function(error){
            console.log(error)
        }
    });

    $.ajax({
        url: 'php/Manager/MngCrudFarmer.php?action=read-all-farmer&id=1',
        type: 'GET',
        success: function(response){
            setDataInTable2(response)
        },
        error: function(error){
            console.log(error)
        }
    });

    $.ajax({
        url: 'php/Manager/MngReport.php?id=1&action=get-report',
        type: 'GET',
        success: function(response){
            setDataInTable3(response)
        },
        error: function(error){
            console.log(error)
        }
    });
    
    $('#addplant-but').on('click', function(){
        $("#plant_name").removeClass("is-invalid")
        $("#plant_loc").removeClass("is-invalid")
        $("#plant_cat").removeClass("is-invalid")
        $("#plant_number").removeClass("is-invalid")
        $("#plant_desc").removeClass("is-invalid")
        $("#plant_price").removeClass("is-invalid")
        $("#plant_img").removeClass("is-invalid")

        var form_data = new FormData();
        var ins = document.getElementById('plant_img').files.length;
        if(ins == 0) {
            $("#plant_img").addClass("is-invalid")
            return;
        }for (var x = 0; x < ins; x++) {
            form_data.append("gambar", document.getElementById('plant_img').files[x]);
            console.log(document.getElementById('plant_img').files[x])
        }
        namaTanaman = $("#plant_name").val()
        lokasi      = $("#plant_loc").val()
        kategori    = $("#plant_cat").val()
        jumlah      = $("#plant_number").val()
        deskripsi   = $("#plant_desc").val()
        harga       = $("#plant_price").val()
        alamat      = $("#plant_address").val()
        errorTotal  = 0

        if(namaTanaman==""){errorTotal++;$("#plant_name").addClass("is-invalid")}
        if(lokasi==""){errorTotal++;$("#plant_loc").addClass("is-invalid")}
        if(kategori==""){errorTotal++;$("#plant_cat").addClass("is-invalid")}
        if(jumlah==""){errorTotal++;$("#plant_number").addClass("is-invalid")}
        if(deskripsi==""){errorTotal++;$("#plant_desc").addClass("is-invalid")}
        if(harga==""){errorTotal++;$("#plant_price").addClass("is-invalid")}
        if(errorTotal>0){return}
        
        form_data.append("action","create-plant");
        form_data.append("nama-tanaman",namaTanaman);
        form_data.append("lokasi-tanaman",lokasi);
        form_data.append("kategori",kategori);
        form_data.append("jumlah",jumlah);
        form_data.append("deskripsi",deskripsi);
        form_data.append("harga",harga);
        form_data.append("alamat",alamat);
        form_data.append("id_manager","1");
        $.ajax({
			url: 'php/Manager/MngCrudPlant.php',
            dataType: 'json',
            cache: false,
			contentType: false,
			processData: false,
            data: form_data,
			type: 'POST',
			success: function(response){
                setDataInTable(JSON.stringify(response))
			},
			error: function(error){
                console.log(error)
			}
		});
    })

    $('#update-plant-but').on('click', function(){
        namaTanaman = $("#update_pname").val()
        lokasi      = $("#update_ploc").val()
        kategori    = $("#update_pcat").val()
        alamat      = $("#update_paddress").val()
        deskripsi   = $("#update_pdesc").val()
        harga       = $("#update_pprice").val()
        id          = $("#update_pid").val()
        gambar      = $("#update_pimg_before").val()

        var form_data = new FormData();
        var ins = document.getElementById('update_pimg').files.length;
        if(ins == 0) {
            form_data.append("gambarSebelum", gambar);
        }else{
            for (var x = 0; x < ins; x++) {
                form_data.append("gambar", document.getElementById('update_pimg').files[x]);
            }
        }
        form_data.append("action","update-plant");
        form_data.append("nama-tanaman",namaTanaman);
        form_data.append("lokasi-tanaman",lokasi);
        form_data.append("kategori",kategori);
        form_data.append("alamat",alamat);
        form_data.append("deskripsi",deskripsi);
        form_data.append("harga",harga);
        form_data.append("id_tanaman",id);
        form_data.append("id_manager",'1')
        $.ajax({
			url: 'php/Manager/MngCrudPlant.php',
            dataType: 'json',
            cache: false,
			contentType: false,
			processData: false,
            data: form_data,
			type: 'POST',
			success: function(response){
                setDataInTable(JSON.stringify(response))
			},
			error: function(error){
                console.log(error)
			}
		});
    })

    $('#delete-plant-but').on('click', function(){
        id = $("#update_pid").val()
        var form_data = new FormData();
        form_data.append("action","delete-plant");
        form_data.append("id_manager",'1')
        form_data.append("id_tanaman",id);
        $.ajax({
			url: 'php/Manager/MngCrudPlant.php',
            dataType: 'json',
            cache: false,
			contentType: false,
			processData: false,
            data: form_data,
			type: 'POST',
			success: function(response){
                setDataInTable(JSON.stringify(response))
			},
			error: function(error){
                console.log(error)
			}
		});
    })

    $('#addfarmer-but').on('click', function(){
        $("#farmer_name").removeClass("is-invalid")
        $("#farmer_loc").removeClass("is-invalid")

        Pnama         = $("#farmer_name").val()
        Plokasi       = $("#farmer_loc").val()
        Pmanager      = $("#farmer_manager").val()
        errorTotal    = 0

        var form_data = new FormData();

        if(Pnama==""){errorTotal++;$("#plant_name").addClass("is-invalid")}
        if(Plokasi==""){errorTotal++;$("#plant_loc").addClass("is-invalid")}
        if(errorTotal>0){return}

        form_data.append("action","create-farmer");
        form_data.append("farmer-name",Pnama);
        form_data.append("farmer-location",Plokasi);
        form_data.append("farmer-manager",Pmanager);

        $.ajax({
			url: 'php/Manager/MngCrudFarmer.php',
            dataType: 'json',
            cache: false,
			contentType: false,
			processData: false,
            data: form_data,
			type: 'POST',
			success: function(response){
                setDataInTable2(JSON.stringify(response))
			},
			error: function(error){
                console.log(error)
			}
		});
    })
})

function setDataInTable(response){
    data = JSON.parse(response)
    $("#tableData").empty()
    Object.keys(data).forEach(function(key){
        statusTanaman = data[key]['status']
        if(data[key]['status']==""){
            statusTanaman = "Not Adopted"
        }
        $("#tableData").append(
            "<tr class='table-body-green'>"+
                "<th scope='row'>"+(parseInt(key)+1)+"</th>"+
                "<td>"+data[key]['nama_tanaman']+"</td>"+
                "<td><div style='background-image:url(image/plantimg/"+data[key]['gambar']+");width:50px; height:50px; border-radius:50%; background-size:cover'></div></td>"+
                "<td>"+statusTanaman+"</td>"+
                "<td>"+
                    "<button class='btn btn-success' onclick='callModal("+data[key]['id_tanaman']+")' data-bs-toggle='modal' data-bs-target='#modal_plant'>UPDATE & SEE</button>"+
                "</td>"+
            "</tr>"
        );
    });
    localStorage.setItem("dataPlantManager", JSON.stringify(data));
}

function setDataInTable2(response){
    data = JSON.parse(response)
    $("#tableData2").empty()
    Object.keys(data).forEach(function(key){
        $("#tableData2").append(
            "<tr class='table-body-green'>"+
                "<th scope='row'>"+(parseInt(key)+1)+"</th>"+
                "<td>"+data[key]['nama_petani']+"</td>"+
                "<td>"+
                    "<button class='btn btn-success' onclick='callModal2("+data[key]['id_petani']+")'>PLACE FARMER</button>"+
                "</td>"+
            "</tr>"
        );
    });
    localStorage.setItem("dataFarmerManager", JSON.stringify(data));
}

function setDataInTable3(response){
    data = JSON.parse(response)
    console.log(data)
    $("#tableData3").empty()
    Object.keys(data).forEach(function(key){
        id_report = 'report_'+data[key]['id_perawatan'];
        $("#tableData3").append(
            "<tr class='table-body-green' id="+id_report+">"+
                "<th scope='row'>"+(parseInt(key)+1)+"</th>"+
                "<td>"+data[key]['nama_tanaman']+"</td>"+
                "<td>"+data[key]['nama_petani']+"</td>"+
                "<td>"+data[key]['laporan']+"</td>"+
                "<td><div style='background-image:url(image/report/"+data[key]['foto_pelaporan']+");width:50px; height:50px; border-radius:50%; background-size:cover'></div></td>"+
                "<td>"+data[key]['tanggal_pelaporan']+"</td>"+
                "<td>"+
                    "<button class='btn btn-success' onclick='callReport("+data[key]['id_perawatan']+")' data-bs-toggle='modal' data-bs-target='#modal_see_report'><i class='fas fa-eye'></i></button>"+
                    "<button id='acc"+id_report+"' class='btn btn-success' onclick='accReport("+data[key]['id_perawatan']+")' data-bs-toggle='modal' data-bs-target='#modal_farmerToPlant' style='margin-left:10px'><i class='far fa-credit-card'></i></button>"+
                "</td>"+
            "</tr>"
        );
        if(data[key]['status_pembayaran'] != 'Belum Dibayar'){
            $('#acc'+id_report).css({'display':'none'})
        }
    });
    localStorage.setItem("dataReportFarmer", JSON.stringify(data));
}