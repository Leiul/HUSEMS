<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td> Name of College </td>
            <td> Abbrivation Of College </td>
        </tr>
        @foreach($list as $list)
        <tr>

            <td> {{$list->collegeName}} </td>
            <td> {{$list->collegeAbbrivation}} </td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('admin.dashboard') }}"><button>HOME</button></a>

</body>
</html>
