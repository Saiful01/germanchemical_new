<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nagad API</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">

        <div class="col-md-6 mx-auto">
            <br>
            <div class="card">
                <div class="card-body">

                    <form action="/submit" method="post" class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Merchant ID" id="one"
                                   required>

                            <input type="hidden" class="form-control" name="_token"
                                   value="{{csrf_token()}}">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Amount" id="two" required>
                        </div>


                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="One+Two" id="total" required>
                        </div>
                        <button type="button" class="btn btn-success" onclick="check()">Pay Now</button>
                    </form>


                </div>
            </div>

        </div>
    </div>

</div>

<script>
    let one = Math.floor(Math.random() * 10) + 1;
    let two = Math.floor(Math.random() * 10) + 1;
    document.getElementById("one").value = one;
    document.getElementById("two").value = two;

    function check(e) {
        let total = document.getElementById('total').value;
        if (total == one + two) {
            console.log("Ok");
        } else {
            console.log("No");
            e.preventDefault();
            return;
        }
    }


</script>


</body>
</html>



