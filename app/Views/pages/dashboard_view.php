<?= $this->extend('templates/base.php'); ?>

<?= $this->section('title'); ?>
<?= $title; ?>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        if ("<?= session()->getTempdata('error') ?>") {
            setTimeout(function() {
                $('.alert').hide();
            }, 5000);
        }
        
        function getNewData(){
            $.get("<?= base_url()."dashboard/getAllOverspeed"; ?>", function(data){
                //alert(data)
                $('.arduino-table').html(data)
                //$('#gmaps').attr('src', data)
            })
        //console.log($('.table-row').length)
        $('.table-row').each(function(){
            $(this).click(function(){
                let longitude = $(this).children("td.latitude").text()
                let latitude = $(this).children("td.longitude").text()
                $('#gmaps').attr('src', 'https://google.com/maps?q='+longitude+','+latitude+'&hl=es;z=14&output=embed')
                console.log('https://google.com/maps?q='+latitude+','+longitude+'&hl=es;z=14&output=embed')
            })
        })
        }
        setInterval(getNewData,1000);


    })
</script>
<?= $this->endSection(); ?>

<?= $this->section('body'); ?>
<div class="container-fluid mt-5 mb-5 p-5 bg-white shadow border border-1">
    <div class="row">
        <div class="col-8">
            <!--<iframe id="gmaps" src="<= "https://google.com/maps?q=".$q."&hl=es;z=14&output=embed"; ?>" style="width: 100%; height: 850px;"></iframe>-->
            <iframe id="gmaps" style="width: 100%; height: 850px;"></iframe>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d67496.26340812673!2d120.33306983831213!3d16.059922328637523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m3!3m2!1d16.0598438!2d120.3743554!4m0!5e1!3m2!1sen!2sph!4v1684109241141!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        </div>
        <div class="col">
            <h1 class="text-center">Overspeed History</h1>
            <div class="arduino-table">

            </div>
            <!-- <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Speed</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <php foreach($arduino_data as $data): ?>
                    <tr>
                        <td><= $data['arduino_id']; ?></td>
                        <td><= $data['speed']; ?></td>
                        <td><= $data['latitude']; ?></td>
                        <td><= $data['longitude']; ?></td>
                        <td></td>
                    </tr>
                    <php endforeach; ?>
                </tbody>
            </table> -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>