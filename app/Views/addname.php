<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>

    <style>
        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>
<body>
    
    

    <div class="container mt-4">
        <h1>CodeIgniter CRUD</h1>
        <hr>

        <div class="mt-3">
            <form id="add-form" action="<?= site_url('/submit-form') ?> " method="post" name="addname">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success mt-4" value="Add Data">
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>              
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>     

    <script>
        $(document).ready(function() {
            
            if ($('#add-form').length > 0) {
                $('#add-form').validate({
                    rules: {
                        name: {
                            required: true
                        },
                        email: {
                            required: true,
                            maxlength: 60,
                            email: true
                        }
                    },
                    messages: {
                        name: {
                            required: 'Name is required.'
                        },
                        email: {
                            required: 'Email is required.',
                            email: 'It does not seem to be a valid email.',
                            maxlenth: 'The email should be or equal to 60 chars.'
                        }
                    }
                })
            }
        })
    </script>
</body>
</html>