<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;

}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:#46A5E5;
  color: white;

}
h1{
    color:#46A5E5 ;
    text-align: center;
}


</style>
</head>
<body>
    <h1>API CSMJU</h1>

<table id="customers">
  <tr>
    <th>NAME API</th>
    <th>LINK API</th>
  </tr>
  <tr>
    <td>Personnel</td>
    <td><a href="https://wwwdev.csmju.com/api/personnel">https://wwwdev.csmju.com/api/personnel</a></td>
  </tr>
  <tr>
    <td>personnel/{type}</td>
    <td><a href="https://wwwdev.csmju.com/api/personnel">https://wwwdev.csmju.com/api/personnel/teacher</a></td>
  </tr>
  <tr>
    <td>personnel/{type}</td>
    <td><a href="https://wwwdev.csmju.com/api/personnel">https://wwwdev.csmju.com/api/personnel/staff</a></td>
  </tr>
  <tr>
    <td>News</td>
    <td><a href="https://wwwdev.csmju.com/api/news">https://wwwdev.csmju.com/api/news</a></td>
  </tr>
  
  <tr>
    <td>Complain</td>
    <td><a href="https://wwwdev.csmju.com/api/complain">https://wwwdev.csmju.com/api/complain</a></td>
  </tr>
  <tr>
    <td>Classroom</td>
    <td><a href="https://wwwdev.csmju.com/api/classroom">https://wwwdev.csmju.com/api/classroom</a></td>
  </tr>
  <tr>
    <td>Activity</td>
    <td><a href="https://wwwdev.csmju.com/api/activity">https://wwwdev.csmju.com/api/activity</a></td>
  </tr>
</table>
<h2>Note !!</h2>
<a>
  function put post delete  <br>
  post = .......add        (http://127.0.0.1:8000/api/........add)  <br>
  put = .......edit        (http://127.0.0.1:8000/api/........edit)  <br>
  delete = .......delete        (http://127.0.0.1:8000/api/........delete)  <br>
</a>

</body>
</html>
