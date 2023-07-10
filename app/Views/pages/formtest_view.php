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
    })
</script>
<?= $this->endSection(); ?>

<?= $this->section('body'); ?>
<div class="container mt-5 mb-5 p-5 bg-white shadow border border-1">
    
    <div class="row">
        
    <?= form_open(); ?>
    <label for="longitude" class="form-label">Longitude</label>
    <input type="text" class="form-control" name="longitude">

    <label for="latitude" class="form-label">Latitude</label>
    <input type="text" class="form-control" name="latitude">

    <label for="speed" class="form-label">Speed</label>
    <input type="text" class="form-control" name="speed">

    <label for="time" class="form-label">Time</label>
    <input type="text" class="form-control" name="time">
    
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
    <?= form_close(); ?>
        
    </div>
</div>
<?= $this->endSection(); ?>