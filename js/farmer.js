$( document ).ready(function() {
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

function validate_report(){
    

    return form_data
}