<x-app-layout>
<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table class="table-auto mt-4 ml-4 border">
<tr>
<td class="border px-1 py-2">Id</td>
<td class="border px-1 py-2">Date</td>
<td class="border px-1 py-2">Student Name</td>
<td class="border px-1 py-2">Parent Name</td>
<td class="border px-1 py-2">Branch Name</td>
<td class="border px-1 py-2">signature</td>
</tr>
@foreach ($users as $user)
<tr>
<td class="border px-1 py-2">{{ $user->id }}</td>
<td class="border px-1 py-2">{{ $user->updated_at }}</td>
<td class="border px-1 py-2">{{ $user->name }}</td>
<td class="border px-1 py-2">{{ $user->parentname }}</td>
<td class="border px-1 py-2">{{ $user->branchname }}</td>
<td class="border px-1 py-2"><img src =" {{ $user->signature }} "/></td>



</tr>
@endforeach
</table>
</body>
</html>
</x-app-layout>