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
            <th width='225px' id="{{($title === 'Halaman Home') ? 'active':''}}">
                <a href="/" id="{{($title === 'Halaman Home') ? 'active1':''}}">Home</a>
            </th>
            <th width='225px' id="{{($title === 'Halaman Category') ? 'active':''}}">
                <a href="/category" id="{{($title === 'Halaman Category') ? 'active1':''}}">Category</a>
            </th>
            <th width='225px' id="{{($title === 'Halaman Data User') ? 'active':''}}">
                <a href="/user" id="{{($title === 'Halaman Data User') ? 'active1':''}}">Data User</a>
            </th>
            <th width='225px' id="{{($title === 'Halaman Blog') ? 'active':''}}">
                <a href="/blog" id="{{($title === 'Halaman Blog') ? 'active1':''}}">Blog Post</a>
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