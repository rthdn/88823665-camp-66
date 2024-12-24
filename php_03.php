<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="container" style="max-width: 400px;">
                <form class="border border-dark rounded-4 bg-light p-4" method="post" action="http://localhost/88823665-camp-66/multiplicationTable.php">
                    <div class="mb-3">
                        <label for="exampleFormControlInput" class="form-label">แม่สูตรคูณ <span class="text-danger"> *</span></label>
                        <input name="inputNumber" type="number" class="form-control" id="exampleFormControlInput" placeholder="ระบุแม่สูตรคูณ">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success w-100" type="submit">ยืนยัน</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
