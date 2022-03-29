$( document ).ready(function() {
    $.ajax({
        url: 'php/Admin/AdminFun.php?action=adopt-payment',
        type: 'GET',
        success: function(response){
            setDataInTable(response)
        },
        error: function(error){
            console.log(error)
        }
    });
    $.ajax({
        url: 'php/Admin/AdminFun.php?action=farmer-pay',
        type: 'GET',
        success: function(response){
            setDataInTable2(response)
        },
        error: function(error){
            console.log(error)
        }
    });
    $.ajax({
        url: 'php/Admin/AdminFun.php?action=manager-see',
        type: 'GET',
        success: function(response){
            setDataInTable3(response)
        },
        error: function(error){
            console.log(error)
        }
    });

    $('#addmanager-but').on('click', function(){
        $("#manager_name").removeClass("is-invalid")
        $("#manager_email").removeClass("is-invalid")
        $("#manager_pass").removeClass("is-invalid")

        Mnama         = $("#manager_name").val()
        Memail        = $("#manager_email").val()
        Mpass         = $("#manager_pass").val()
        errorTotal    = 0

        var form_data = new FormData();

        if(Mnama==""){errorTotal++;$("#manager_name").addClass("is-invalid")}
        if(Memail==""){errorTotal++;$("#manager_email").addClass("is-invalid")}
        if(Mpass==""){errorTotal++;$("#manager_pass").addClass("is-invalid")}
        if(errorTotal>0){return}

        form_data.append("action","addManager");
        form_data.append("manager-name",Mnama);
        form_data.append("manager-email",Memail);
        form_data.append("manager-pass",Mpass);

        $.ajax({
			url: 'php/Admin/AdminFun.php',
            dataType: 'json',
            cache: false,
			contentType: false,
			processData: false,
            data: form_data,
			type: 'POST',
			success: function(response){
                setDataInTable3(response)
			},
			error: function(error){
                console.log(error)
			}
		});
    })
})

function setDataInTable(response){
    data = JSON.parse(response)
    $("#tablePayment").empty()
    Object.keys(data).forEach(function(key){
        $("#tablePayment").append(
            "<tr class='table-body-green'>"+
                "<th scope='row'>"+(parseInt(key)+1)+"</th>"+
                "<td>"+data[key]['nama_tanaman']+"</td>"+
                "<td>"+data[key]['nama_lengkap']+"</td>"+
                "<td>"+data[key]['nama_pengelola']+"</td>"+
                "<td><div style='background-image:url(image/bukti_bayar/"+data[key]['bukti_bayar']+");width:50px; height:50px; border-radius:50%; background-size:cover'></div></td>"+
                "<td>"+
                    "<button class='btn btn-success' onclick='callProof("+data[key]['id_tanaman']+")' data-bs-toggle='modal' data-bs-target='#modal_bukti_pembayaran'><i class='fas fa-eye'></i></button>"+
                    "<button class='btn btn-success' onclick='accPayment("+data[key]['id_tanaman']+")' data-bs-toggle='modal' data-bs-target='#modal_farmerToPlant' style='margin-left:10px'><i class='far fa-check-circle'></i></button>"+
                "</td>"+
            "</tr>"
        );
    });
    localStorage.setItem("dataPayment", JSON.stringify(data));
}

function setDataInTable2(response){
    data = JSON.parse(response)
    $("#pay_salary").empty()
    Object.keys(data).forEach(function(key){
        $("#pay_salary").append(
            "<button onclick='seePayRek("+data[key]['id_petani']+")' class='btn cat_plan' data-bs-toggle='modal' data-bs-target='#modal_see_rek'>"+'IDR. '+data[key]['gaji']+"</button>"
        );
    });
    localStorage.setItem("farmerPay", JSON.stringify(data));
}

function setDataInTable3(response){
    data = JSON.parse(response)
    $("#tableManager").empty()
    Object.keys(data).forEach(function(key){
        $("#tableManager").append(
            "<tr class='table-body-green'>"+
                "<th scope='row'>"+(parseInt(key)+1)+"</th>"+
                "<td>"+data[key]['nama_pengelola']+"</td>"+
                "<td>"+data[key]['email']+"</td>"+
                "<td>"+
                    "<button class='btn btn-success' onclick='callProof("+data[key]['id_tanaman']+")' data-bs-toggle='modal' data-bs-target='#modal_bukti_pembayaran'><i class='fas fa-eye'></i></button>"+
                    "<button class='btn btn-success' onclick='accPayment("+data[key]['id_tanaman']+")' data-bs-toggle='modal' data-bs-target='#modal_farmerToPlant' style='margin-left:10px'><i class='far fa-check-circle'></i></button>"+
                "</td>"+
            "</tr>"
        );
    });
    localStorage.setItem("dataManager", JSON.stringify(data));
}