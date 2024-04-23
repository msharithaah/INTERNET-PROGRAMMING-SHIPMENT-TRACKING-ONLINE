<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Courier Management Service</title>
    <link rel="stylesheet" href="./index.css">
    <style>
        
        body {
            font-family: Arial, sans-serif;
        }

        .container1 {
            width: 50%;
            margin: 0 auto;
        }

       

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #296de4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .btn{
            background-color: #eff2f5;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <script>
        function validateform(){
            var x=document.f1.name.value;
            var y=document.f1.phoneno.value;
            if(x==""||x==null||y==""||y==null){
                alert("enter the required fields");
                return false;
            }
            else if(y.length!=10){
                alert("enter a valid phone number");
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="container">
    <h1><center>GO FREIGHT COURIER SERVICE</center></body></h1>
    <div class="tag"><center>Delivering Happiness and needs</center></div>
    <div class="box"><center><p style=font-size:150%>ENTER THE DETAILS</p></center><br>
        <div class="container1">
            
            <form name="f1" onsubmit="validateform()">
                <div class="input-group">
                    <div class="row">
                        <div class="col">
                            Name:
                          <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                 </div>
                 <div class="input-group">
                    <div class="row">
                        <div class="col">
                            Phone no:
                          <input type="text" class="form-control" name="phoneno">
                        </div>
                    </div>
                 </div>
                <center>
                    <button class="btn">
                        <a type="button" href="trackingpage.php">Submit</a>
                    </button>
                </center>
            </form>
        </div>
    </div>
</div>
</body>
</html> 