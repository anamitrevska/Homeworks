<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class=" offset-md-3">
    <div class="container ">
            <div class="col-xs-12 col-md-4 border">
                    <div class="panel-heading border-bottom text-center">
                        <h3 class="panel-title">Pay Invoice</h3>
                    </div>
                    <div class=" panel-body">
                        <form class="form-group" method="POST" action="generate_pdf.php">

                            <p>Website Development</p>
                            <p>Payment amount</p>
                            <h3>$100.00</h3>


                            <label for="company">Company name</label>
                            <input type="text" class="form-control" name="company" placeholder="Your company name" required autofocus />
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Address" required autofocus />

                            <div class="row">
                                
                                    <div class="col-s-4 col-lg-6 pl-ziro">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" placeholder="City" required />
                                    </div>
                                    <div class="col-xs-4 col-lg-6 pl-ziro">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" name="country" placeholder="Country" required />
                                    </div>
                             
                            </div>
                            <div class="form-group">
                                <label for="address">Postal code</label>
                                <input type="text" class="form-control" name="postal" placeholder="Postal code" required />
                                <button class="btn btn-success btn-lg btn-block mt-2" type="submit">Pay $100.00</button>

                                </div>
                        </form>
                    </div>

            </div>
        </div>
</body>

</html>