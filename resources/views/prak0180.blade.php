<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">     
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- component -->
<div class="md:px-32 py-8 w-full">
  <div class="shadow overflow-hidden rounded border-b border-gray-200">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Id</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Judul</th>
          <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Jenis</th>
          
        </tr>
      </thead>
    <tbody class="text-gray-700">
    @foreach($BukuController as $data)
      <tr>
        <td class="w-1/3 text-left py-3 px-4">{{$data->id}}</td>
        <td class="w-1/3 text-left py-3 px-4">{{$data->judul}}</td>
        <td class="w-1/3 text-left py-3 px-4">{{$data->jenis}}</td>
        <td class="w-1/3 text-left py-3 px-4">{{$data->jenis}}</td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</div>
</body>
</html>