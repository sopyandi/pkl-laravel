<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_table.css">
    <title>Page | {{$title}}</title>
</head>
<body>
    <br><br>
    <center>
    <table border="1">
        <tr>
            <th width='225px'>
                <a href="/">Home</a>
            </th>
            <th width='225px'>
                <a href="/category">Category</a>
            </th>
            <th width='225px'>
                <a href="/user">Data User</a>
            </th>
            <th width='225px'>
                <a href="/blog">Blog Post</a>
            </th>
        </tr>
    </table>
    <table border>
        <tr>    
              @yield('container')
        </tr>
    </table>
    </center>
</body>
</html>