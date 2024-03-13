<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Department</title>
</head>
<body>
    @if(Session::get('success'))
        {{Session::get('success')}}
    @endif

    @if(Session::get('fail'))
        {{Session::get('fail')}}
    @endif

<form method="POST" action="{{ route('storeDepartment') }}">

    @csrf
    <label for="name">Name of Departmen</label>
    <input type="text" id="deptName" name="departmentName" required>
</br>
    <label for="name">DepartmentAbbrivation</label>
    <input type="text" id="deptAbbr" name="departmentAbbrivation" required>

    </br>
    <select name="college_name" id="collegeName">
        @foreach ($colleges as $college)
                <option value="{{ $college->id }}">{{ $college->collegeName }}</option>
        @endforeach
    </select>
    <button type="submit">Submit</button>
</form>
</body>
</html>
