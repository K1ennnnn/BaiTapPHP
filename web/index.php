<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kien</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
</head>

<body>
    <div id="root">
        <header class="header">
            <div>
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="header_text">
                <p><span></span></p>
                <p></p>
            </div>
            <div class="header_icon">
                <!-- <i class="fa-solid fa-palette"></i>
        <i class="fa-solid fa-expand"></i> -->
                <div class="header_text2">
                    <p><span></span></p>
                    <p>kien</p>
                </div>
                <i class="fa-solid fa-user"></i>
                <!-- <i class="fa-solid fa-chevron-right"></i> -->
            </div>
        </header>

        <div class="main_btn">
            <div class="main_btnSum">
                <button class="main_btnAddnew">
                    <i class="fa-solid fa-circle-plus"></i>
                    <p>Add</p>
            </div>

            <div class="main_Addnew ">
                <form id="form_Addnew" action="">
                    <div class="input_Name">
                        <label for="">Name</label>
                        <input id="Name" type="text">
                    </div>
                    <div class="input_Old">
                        <label for="">Old </label>
                        <input id="Old" type="text">
                    </div>
                    <div class="input_Class">
                        <label for="">Class</label>
                        <input id="Class" type="text">
                    </div>
                    <button id="submit" type="submit">Submit</button>
                </form>
            </div>
            <div class="main_table">
                <table class="table-container">
                    <thead>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Old </th>
                        <th>Class</th>
                    </thead>
                
                </table>
            </div>

            <script src="./main.js"></script>
</body>

</html>