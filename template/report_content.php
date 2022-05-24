<?php
$width = intval($_POST['width']);
if ($width < 190) {
    $mini = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    p {
        margin: 0;
    }

    .overlay {
        width: 100%;
        height: 100%;
        background-color: #b2b2b2;
        opacity: .6;
        z-index: 10;
    }

    .notready-badge {
        z-index: 11;
        color: white;
        background: red;
        font-size: .9rem;
    }

    .card {
        overflow: hidden;
    }

    .card:hover {
        transform: scale(0.95);
        box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset;
        cursor: pointer;
    }
</style>
<div class="position-relative card" style="width:<?= $width ?>px; height:250px; background: linear-gradient(180deg, rgba(2, 87, 5, 0.248) 0%, rgba(255, 255, 255, 0.341) 100%), url(image/<?= $_POST['gambar'] ?>); <?php if (!$mini) {
                                                                                                                                                                                                                        echo "box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5);";
                                                                                                                                                                                                                    } ?> border-radius: 10px; background-size: cover;">
    <div class="position-absolute overlay" style="<?= $_POST['status_tanaman'] ?>"></div>
    <div style="<?= $_POST['status_tanaman'] ?>" class="position-absolute notready-badge top-0 start-0 mt-3 ms-2 px-2 py-1 rounded fw-bold">
        <p>Not Ready</p>
    </div>
    <div class="position-absolute bottom-0 start-50 translate-middle-x" style="width:<?= $width - 40 ?>px; color: white; font-size: 13px; font-weight: bold; font-family: Roboto">
        <div style="display:flex; flex-direction: column; margin-bottom:20px;">
            <div style="display: flex; margin-bottom:10px">
                <i class="fas fa-map-marker-alt" style="font-size: 30px;"></i>
                <p style="width:40px; white-space:normal; line-height:15px; margin-left:10px"><?= $_POST['lok'] ?></p>
            </div>
            <div>
                <p style="font-size: 18px; white-space:normal; line-height:21px; text-shadow: 0px 30px 30px #000000; width: 130px;"><?= $_POST['nama'] ?></p>
                <p style="text-shadow: 0px 30px 30px #000000; <?php if ($mini) {
                                                                    echo 'font-size: 10px; line-height:10px;';
                                                                } ?>" id="manager-content"><?= $_POST['tanggal_pelaporan'] ?></p>
            </div>
        </div>
    </div>
</div>

</html>
<script>
</script>