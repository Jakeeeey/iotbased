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

    <h1 class="text-center">Overspeed History</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Speed</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>80</td>
                <td>123456</td>
                <td>654321</td>
                <td>5:30 PM</td>
            </tr>
        </tbody>
    </table>

</div>
<?= $this->endSection(); ?>