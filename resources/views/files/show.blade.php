<!DOCTYPE html>
<html>
  <head>
    <title>File {{ $file->id }}</title>
  </head>
  <body>
    <h1>File {{ $file->id }}</h1>
    <ul>
      <li>Source name: {{ $file->source_file_name }}</li>
      <li>Server name: {{ $file->server_file_name }}</li>
    </ul>
  </body>
</html>