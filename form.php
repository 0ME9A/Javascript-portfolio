<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        body{
            width: 100%;
            height: 100vh;
            background-color: darkblue;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            display: flex;
            flex-direction: column;
            width: 50%;
            /* height: 70%; */
            padding: 50px;
            background-color: darkblue;
            box-shadow: 5px 5px 10px rgba(20,20,20,.3);
            padding-bottom: 50px;
            border-radius: 5px;
        }
        input,textarea{
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: white;
            font-size: 18px;

        }
        input::placeholder, textarea::placeholder{
            text-transform: uppercase;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 500;
        }
        textarea{
            height: 300px;
        }
        #submit:disabled{
            background-color: rgb(20,20,20);
            color: grey;
        }
        #submit{
            background-color: blue;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="insert_data.php" method="POST">
        <input type="text" name="title" id="title" placeholder="title" required>
        <input type="text" name="thumbnail" id="thumbnail" placeholder="thumbnail" required>
        <input type="text" name="source" id="source" placeholder="source" required>
        <input type="text" name="confirm-sumbtion" id="confirm-sumbtion" placeholder="confirm sumbtion" required>
        <textarea name="blog" id="blog" placeholder="blog area" required></textarea>

        <input type="submit" value="CONFIRM" id="submit">
    </form>
    <script>
        var confirm_sumbtion= document.getElementById("confirm-sumbtion");
        var submit = document.getElementById("submit");
        submit.disabled = true;

        setInterval(() => {
            if (confirm_sumbtion.value.length < 10){
                submit.disabled = true;
            }
            else{
                submit.disabled = false;
            }
        }, 1000);
    </script>
</body>
</html>