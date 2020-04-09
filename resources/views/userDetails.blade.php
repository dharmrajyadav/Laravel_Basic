<html>
   
   <head>
      <title>View Student Records</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   </head>
   <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}


#customers th {
  padding-top: 8px;
  padding-bottom: 8px;
  text-align: left;
  background-color: #17a2b8;
  color: white;
}
</style>
   <body>


   <table id="customers">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>EMAIL</th>
    <th>CONTACT</th>
    <th>JOB_TYPE</th>
    <th>COUNTRY</th>
    <th>STATE</th>
    <th>PASSWORD</th>
    <th>ACTION</th>

  </tr>
  @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->contact }}</td>
            <td>{{ $user->job_type }}</td>
            <td>{{ $user->country }}</td>
            <td>{{ $user->state }}</td>
            <td>{{ $user->password }}</td>
            <td>
            <button type="button" class="btn btn-primary">View</button>
            <button type="button" class="btn btn-success">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
   </td>
         </tr>
         @endforeach
      </table>
   </body>
</html>
