<html>
    <style>
        #what_image_prev{
            background-image: url('image/AdoptLanding.png');
            width: 150px;
            height: 150px;
            background-size: cover;
        }
        #where_image_prev{
            background-image: url('image/AdoptLanding.png');
            width: 150px;
            height: 150px;
            background-size: cover;
        }
        #when_image_prev{
            background-image: url('image/AdoptLanding.png');
            width: 150px;
            height: 150px;
            background-size: cover;
        }
        #why_image_prev{
            background-image: url('image/AdoptLanding.png');
            width: 150px;
            height: 150px;
            background-size: cover;
        }
    </style>
    <div class="row">
        <div class="col-8">
            <h2 style="font-weight:bold; color:#12491E">Append Category</h2>
            <form action="" style="margin-top:20px; z-index:0">
                <input type="text" class="form-control rounded-pill" id="name_category" placeholder="Nama Kategori">
                <div class="input-group mb-3 rounded-pill" style="margin-top: 10px;">
                    <div id="what_image_prev" class="position-relative" style="border-radius: 15px 0 0 15px;">
                        <label for="what_image" class="btn btn-light position-absolute
                        bottom-0 start-50 translate-middle-x rounded-pill"
                        style="margin-bottom: 10px;">UPLOAD</label>
                    </div>
                    <input type="file" id="what_image" style="display: none;">
                    <textarea class="form-control" placeholder="What Content" name="" id="what_text" style="border-radius: 0 15px 15px 0 "></textarea>
                </div>
                <div class="input-group mb-3 rounded-pill" style="margin-top: 10px;">
                    <div id="where_image_prev" class="position-relative" style="border-radius: 15px 0 0 15px;">
                        <label for="where_image" class="btn btn-light position-absolute
                        bottom-0 start-50 translate-middle-x rounded-pill"
                        style="margin-bottom: 10px;">UPLOAD</label>
                    </div>
                    <input type="file" id="where_image" style="display: none;">
                    <textarea class="form-control" placeholder="Where Content" name="" id="where_text" style="border-radius: 0 15px 15px 0 "></textarea>
                </div>
                <div class="input-group mb-3 rounded-pill" style="margin-top: 10px;">
                    <div id="why_image_prev" class="position-relative" style="border-radius: 15px 0 0 15px;">
                        <label for="why_image" class="btn btn-light position-absolute
                        bottom-0 start-50 translate-middle-x rounded-pill"
                        style="margin-bottom: 10px;">UPLOAD</label>
                    </div>
                    <input type="file" id="why_image" style="display: none;">
                    <textarea class="form-control" placeholder="Why Content" name="" id="why_text" style="border-radius: 0 15px 15px 0 "></textarea>
                </div>
                <div class="input-group mb-3 rounded-pill" style="margin-top: 10px;">
                    <div id="when_image_prev" class="position-relative" style="border-radius: 15px 0 0 15px;">
                        <label for="when_image" class="btn btn-light position-absolute
                        bottom-0 start-50 translate-middle-x rounded-pill"
                        style="margin-bottom: 10px;">UPLOAD</label>
                    </div>
                    <input type="file" id="when_image" style="display: none;">
                    <textarea class="form-control" placeholder="When Content" name="" id="when_text" style="border-radius: 0 15px 15px 0 "></textarea>
                </div>
                <button type="button" class="btn btn-success rounded-pill" id="category-upload-btn">UPLOAD CATEGORY</button>
            </form>
        </div>
        <div class="col-4">

        </div>
    </div>
</html>
<script>
    what_image.onchange = evt => {
        const [file] = what_image.files
        if (file) {
            $("#what_image_prev").css({'background-image':'url('+URL.createObjectURL(file)+')'})
        }
    }
    where_image.onchange = evt => {
        const [file] = where_image.files
        if (file) {
            $("#where_image_prev").css({'background-image':'url('+URL.createObjectURL(file)+')'})
        }
    }
    why_image.onchange = evt => {
        const [file] = why_image.files
        if (file) {
            $("#why_image_prev").css({'background-image':'url('+URL.createObjectURL(file)+')'})
        }
    }
    when_image.onchange = evt => {
        const [file] = when_image.files
        if (file) {
            $("#when_image_prev").css({'background-image':'url('+URL.createObjectURL(file)+')'})
        }
    }
    $('#category-upload-btn').on('click', function(){
        $("#name_category").removeClass("is-invalid")
        $("#what_text").removeClass("is-invalid")
        $("#where_text").removeClass("is-invalid")
        $("#why_text").removeClass("is-invalid")
        $("#when_text").removeClass("is-invalid")
        $("#what_image").removeClass("is-invalid")
        $("#where_image").removeClass("is-invalid")
        $("#why_image").removeClass("is-invalid")
        $("#when_image").removeClass("is-invalid")

        name_category = $("#name_category").val()
        what_text     = $("#what_text").val()
        where_text    = $("#where_text").val()
        why_text      = $("#why_text").val()
        when_text     = $("#when_text").val()
        errorTotal    = 0

        if(name_category==""){errorTotal++;$("#name_category").addClass("is-invalid")}
        if(what_text==""){errorTotal++;$("#what_text").addClass("is-invalid")}
        if(where_text==""){errorTotal++;$("#where_text").addClass("is-invalid")}
        if(why_text==""){errorTotal++;$("#why_text").addClass("is-invalid")}
        if(when_text==""){errorTotal++;$("#when_text").addClass("is-invalid")}
        if(errorTotal>0){return}

        var form_data = new FormData();
        var ins = document.getElementById('what_image').files.length;
        if(ins == 0) {
            form_data.append("what_image_sebelum", gambar);
        }else{
            for (var x = 0; x < ins; x++) {
                form_data.append("what_image", document.getElementById('what_image').files[x]);
            }
        }

        var ins = document.getElementById('where_image').files.length;
        if(ins == 0) {
            form_data.append("where_image_sebelum", gambar);
        }else{
            for (var x = 0; x < ins; x++) {
                form_data.append("where_image", document.getElementById('where_image').files[x]);
            }
        }

        var ins = document.getElementById('why_image').files.length;
        if(ins == 0) {
            form_data.append("why_image_sebelum", gambar);
        }else{
            for (var x = 0; x < ins; x++) {
                form_data.append("why_image", document.getElementById('why_image').files[x]);
            }
        }

        var ins = document.getElementById('when_image').files.length;
        if(ins == 0) {
            form_data.append("when_image_sebelum", gambar);
        }else{
            for (var x = 0; x < ins; x++) {
                form_data.append("when_image", document.getElementById('when_image').files[x]);
            }
        }
    })
</script>