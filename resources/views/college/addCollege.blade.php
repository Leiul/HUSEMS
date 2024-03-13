<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD College</title>
</head>
<body>
    @if(Session::get('success'))
        {{Session::get('success')}}
    @endif

    @if(Session::get('fail'))
        {{Session::get('fail')}}
    @endif

<form method="POST" action="{{ route('addCollegeFromForm') }}">

    @csrf
    <label for="name">Name of COllege</label>
    <input type="text" id="name" name="collegeName" required>

    <label for="name">DepartmentAbbrivation</label>
    <input type="text" id="name" name="collegeAbbrivation" required>

    <button type="submit">Submit</button>
</form>
</body>
</html>
