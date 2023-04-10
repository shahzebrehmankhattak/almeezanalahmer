<?php
// check if id parameter is set in GET request
if (!isset($_GET['id'])) {
    echo "Error: 'id' key is not set in the GET array.";
    exit;
}

// connect to database
require_once 'connect.php';
$conn = OpenCon();

// get the id parameter from the GET request
$id = $_GET['id'];

// fetch data for the specified id
$sql = "SELECT * FROM gallery WHERE id = $id";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}
$row = mysqli_fetch_assoc($result);

// close database connection
CloseCon($conn);
?>

<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 p-2 m-auto rounded border border-2 fw-bolder p-4">
            <div>
                <h1 class="text-center">Update Team Info </h1>
            </div>
            <form method="post" action="updategallery.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
<input type="file" name='image' />
                 </div>
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="title" value="<?php echo $row['title']; ?>" >
                </div><br>
                <div class="form-group">
                    <label>Role</label>
                    <input class="form-control" type="text" name="description" value="<?php echo $row['description']; ?>" >
                </div><br>
                <div class="text-center mt-auto">
                    <input class="btn btn-success btn-lg fw-bold" type="submit" name="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $("#updategallerydata").submit(function (event) {
        var form_data = new FormData(document.querySelector('#updategallerydata'));
        $.ajax({
            url: "updategallery.php",
            type: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
            },
            success: function (data) {
                alert('Successfully' + data);
                window.open("gallerydata.php", "_self");
            },
            error: function (e) {
            }
        });
        return false;
    });
</script>

<?php include 'adminfooter.php' ?>
