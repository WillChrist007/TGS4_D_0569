<?php
    include '../component/sidebar.php';
    include '../db.php';

    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM series WHERE id='$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>PROFILE</h4>
    </div>
    <hr>
    <!-- PROFILE -->
    <form action="../process/editSerieProcess.php" method="post">
    <input type="hidden" value="<?php echo $data['id'];?>" name="id">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="form-control" name="name" type="text"  value="<?php echo $data['name']; ?>">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Genre</label>
            <div class="control">
                <input class="form-control" name="genre" type="text"  value="<?php echo $data['genre']; ?>">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Realese</label>
            <div class="control">
                <input class="form-control" name="realese" type="text"  value="<?php echo $data['realese']; ?>">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Episode</label>
            <div class="control">
                <input class="form-control" name="episode" type="number"  value="<?php echo $data['episode'];?>">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Season</label>
            <div class="control">
                <input class="form-control" name="season" type="number"  value="<?php echo $data['season'];?>">
            </div>
        </div>
        <br><br>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>

    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>