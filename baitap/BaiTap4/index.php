<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baitap4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form action="./hodan.php" method="post" class="mt-5">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Tên chủ hộ</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="name hộ dân">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Chỉ số đầu</label>
                <input type="text" name="soDau" class="form-control" id="formGroupExampleInput2" placeholder="nhập số đầu">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Chỉ số cuối</label>
                <input type="text" name="soCuoi" class="form-control" id="formGroupExampleInput2" placeholder="nhập số cuối">
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</body>

</html>