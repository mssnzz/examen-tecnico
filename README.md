# Documentacion

Como inicializar la aplicación web hecha en Laravel y MySQL que consiste en un CRUD API basado en 3 tablas de una base de datos llamada "DBDATA" y 3 tablas de llamadas "departments, employees, studies". El proyecto se realizó en Laravel para el código y MySQL para la base de datos. Las tablas de la base de datos y las relaciones de la mismas, fueron creadas utilizando las migraciones de Laravel.

# Creación de base de datos

Desde el phpMyAdmin crear una base de datos llamada "dbdata" para así poder ejecturar el script e insertar los datos.

# Script para insertar datos automaticos

Ejecutar script llamado "scriptSQL.sql" para que de esta manera se registren datos de prueba en la base de datos.

# Método POST utilizando el API
<h3>1- Insertar un nuevo dato en la tabla "Departments"</h3>
Utiliza la API para registrar un nuevo dato en la tabla Departments. Realiza la solicitud al URL del servidor y utlizando las variables de la siguiente tabla>
<br>
<br>

URL: <code>{{HOST}}/api/departments</code>
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">KEY</th>
      <th scope="col">TYPE</th>
     <th scope="col">METHOD</th>
     <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>deptoName</td>
      <td>Char</td>
      <td>POST</td>
      <td>Insertar nuevo dato en la tabla Departments</td>
    </tr>
  </tbody>
</table>
<br>
<h3>2- Insertar un nuevo dato en la tabla "Employees"</h3>
Utiliza la API para registrar un nuevo dato en la tabla Employees. Realiza la solicitud al URL del servidor y utlizando las variables de la siguiente tabla>
<br>
<br>

URL: <code>{{HOST}}/api/employees</code>
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">KEY</th>
      <th scope="col">TYPE</th>
     <th scope="col">METHOD</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>nombres</td>
      <td>Char(100)</td>
      <td>POST</td>
    </tr>
   <tr>
      <td>apellidos</td>
      <td>Char(100)</td>
      <td>POST</td>
    </tr>
   <tr>
      <td>deptoid</td>
      <td>Int</td>
      <td>POST</td>
    </tr>
   <tr>
      <td>cedula</td>
      <td>Char(14)</td>
      <td>POST</td>
    </tr>
   <tr>
      <td>direccion</td>
      <td>Char(14)</td>
      <td>POST</td>
    </tr>
   <tr>
      <td>telcasa</td>
      <td>Char(12)</td>
      <td>POST</td>
    </tr>
   <tr>
      <td>telmobil</td>
      <td>Char(12)</td>
      <td>POST</td>
    </tr>
   <tr>
      <td>salariobase</td>
      <td>Decimal(12.2)</td>
      <td>POST</td>
    </tr>
   <tr>
      <td>descuentos</td>
      <td>Decimal(12.2)</td>
      <td>POST</td>
    </tr>
   <tr>
      <td>salarioneto</td>
      <td>Decimal(12.2)</td>
      <td>POST</td>
    </tr>
  </tbody>
</table>
<br>
<h3>3- Insertar un nuevo dato en la tabla "Studies"</h3>
Utiliza la API para registrar un nuevo dato en la tabla Studies. Realiza la solicitud al URL del servidor y utlizando las variables de la siguiente tabla>
<br>
<br>

URL: <code>{{HOST}}/api/studies</code>
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">KEY</th>
      <th scope="col">TYPE</th>
     <th scope="col">METHOD</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>studiename</td>
      <td>Char(100)</td>
      <td>POST</td>
    </tr>
   <tr>
      <td>employeeid</td>
      <td>Int</td>
      <td>POST</td>
    </tr>
   
  </tbody>
</table>



# Método GET utilizando el API
<h3>1- Solicitud para obtener los datos de la tabla "Departments"</h3>
Utiliza la siguiente tabla para realizar las solicitudes y obtener los datos
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">HOST</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{HOST}}/api/departments</td>
      <td>Obtener la lista de todos los "Departments" registrados</td>
    </tr>
   <tr>
      <td>{{HOST}}/api/departments/{{ID}}</td>
      <td>Obtener un registro en especifico por ID</td>
    </tr>
  </tbody>
</table>
<br>
<h3>2- Solicitud para obtener los datos de la tabla "Employees"</h3>
Utiliza la siguiente tabla para realizar las solicitudes y obtener los datos
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">HOST</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td>{{HOST}}/api/employees</td>
      <td>Obtener la lista de todos los "Employees"</td>
    </tr>
   <tr>
      <td>{{HOST}}/api/employees/{{ID}}</td>
      <td>Obtener un registro en especifico por ID</td>
    </tr>
  </tbody>
</table>
<br>
<h3>3- Solicitud para obtener los datos de la tabla "Studies"</h3>
Utiliza la siguiente tabla para realizar las solicitudes y obtener los datos
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">HOST</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td>{{HOST}}/api/studies</td>
      <td>Obtener la lista de todos los "Studies"</td>
    </tr>
   <tr>
      <td>{{HOST}}/api/studies/{{ID}}</td>
      <td>Obtener un registro en especifico por ID</td>
    </tr>
  </tbody>
</table>

# Método DELETE utilizando el API
<h3>1- Solicitud para eliminar los datos de la tabla "Departments"</h3>
Utiliza la siguiente tabla para realizar las solicitudes y eliminar los datos
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">HOST</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td>{{HOST}}/api/departments/{{ID}}</td>
      <td>Eliminar un registro en especifico por ID</td>
    </tr>
  </tbody>
</table>
<br>
<h3>2- Solicitud para eliminar los datos de la tabla "Employees"</h3>
Utiliza la siguiente tabla para realizar las solicitudes y eliminar los datos
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">HOST</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td>{{HOST}}/api/employees/{{ID}}</td>
      <td>Eliminar un registro en especifico por ID</td>
    </tr>
  </tbody>
</table>
<br>
<h3>3- Solicitud para eliminar los datos de la tabla "Studies"</h3>
Utiliza la siguiente tabla para realizar las solicitudes y eliminar los datos
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">HOST</th>
      <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td>{{HOST}}/api/studies/{{ID}}</td>
      <td>Eliminar un registro en especifico por ID</td>
    </tr>
  </tbody>
</table>



# Método PUT utilizando el API
<h3>1- Editar un dato en la tabla "Departments"</h3>
Utiliza la API para editar dato en la tabla Departments. Realiza la solicitud al URL del servidor y utlizando las variables de la siguiente tabla:
<br>
<br>

URL: <code>{{HOST}}/api/departments</code>
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">KEY</th>
      <th scope="col">TYPE</th>
     <th scope="col">METHOD</th>
     <th scope="col">DESCRIPCION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>deptoName</td>
      <td>Char</td>
      <td>PUT</td>
      <td>Editar dato en la tabla Departments</td>
    </tr>
  </tbody>
</table>
<br>
<h3>2- Editar un dato en la tabla "Employees"</h3>
Utiliza la API para editar dato en la tabla Employees. Realiza la solicitud al URL del servidor y utlizando las variables de la siguiente tabla:
<br>
<br>

URL: <code>{{HOST}}/api/employees</code>
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">KEY</th>
      <th scope="col">TYPE</th>
     <th scope="col">METHOD</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>nombres</td>
      <td>Char(100)</td>
      <td>PUT</td>
    </tr>
   <tr>
      <td>apellidos</td>
      <td>Char(100)</td>
      <td>PUT</td>
    </tr>
   <tr>
      <td>deptoid</td>
      <td>Int</td>
      <td>PUT</td>
    </tr>
   <tr>
      <td>cedula</td>
      <td>Char(14)</td>
      <td>PUT</td>
    </tr>
   <tr>
      <td>direccion</td>
      <td>Char(14)</td>
      <td>PUT</td>
    </tr>
   <tr>
      <td>telcasa</td>
      <td>Char(12)</td>
      <td>PUT</td>
    </tr>
   <tr>
      <td>telmobil</td>
      <td>Char(12)</td>
      <td>PUT</td>
    </tr>
   <tr>
      <td>salariobase</td>
      <td>Decimal(12.2)</td>
      <td>PUT</td>
    </tr>
   <tr>
      <td>descuentos</td>
      <td>Decimal(12.2)</td>
      <td>PUT</td>
    </tr>
   <tr>
      <td>salarioneto</td>
      <td>Decimal(12.2)</td>
      <td>PUT</td>
    </tr>
  </tbody>
</table>
<br>
<h3>3- Editar un dato en la tabla "Studies"</h3>
Utiliza la API para editar dato en la tabla Studies. Realiza la solicitud al URL del servidor y utlizando las variables de la siguiente tabla:
<br>
<br>

URL: <code>{{HOST}}/api/studies</code>
<br>
<br>


 
 <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">KEY</th>
      <th scope="col">TYPE</th>
     <th scope="col">METHOD</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>studiename</td>
      <td>Char(100)</td>
      <td>PUT</td>
    </tr>
   <tr>
      <td>employeeid</td>
      <td>Int</td>
      <td>PUT</td>
    </tr>
   
  </tbody>
</table>


