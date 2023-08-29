<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baitap5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form action="./ruttien.php" method="post" class="mt-5">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nhập số tiền cần rút</label>
                <input type="text" name="soTien" class="form-control" id="formGroupExampleInput" placeholder="nhập số tiền">
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</body>

</html>