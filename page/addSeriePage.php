<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>ADD SERIES</h4>
    </div>
    <hr>
    <!-- PROFILE -->
    <form action="../process/addSerieProcess.php" method="post">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="form-control" name="name" type="text">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Genre</label>
            <div class="control">
                <select class="form-select" aria-label="Default select example" name="genre[]" id="genre" multiple>
                    <option value="aksi">Aksi</option>
                    <option value="superhero">Superhero</option>
                    <option value="fantasi">Fantasi</option>
                </select>
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Realese</label>
            <div class="control">
                <input class="form-control" name="realese" type="text">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Episode</label>
            <div class="control">
                <input class="form-control" name="episode" type="number">
            </div>
        </div>
        <br>

        <div class="field">
            <label class="label">Season</label>
            <div class="control">
                <input class="form-control" name="season" type="number">
            </div>
        </div>
        <br>
        
        <div class="field">
            <label class="label">Synopsis</label>
            <div class="control">
                <input class="form-control" name="synopsis" type="text">
            </div>
        </div>
        <br><br>

        <div class="d-grid gap-2">
            <button type="add" class="btn btn-primary" name="add">Add</button>
        </div>

    </form>
</div>
</aside>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>

    $(document).ready(function () {

        $("#genre").select2({

            placeholder: " genre"

        });

    });
</script>

</body>

</html>