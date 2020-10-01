</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Usuarios | Dashboard</title>
        

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">   
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
 </head>
  
<body>
<div class="container-in">
    <section class="dashboard-body">
        <div class="row">
            <div class="col-md-3">
                <?php include("sidebar.php");?>
            </div>
            <div class="col-md-9">
                <div class="dash-content-body">
                    <div class="head-dash">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Usuarios</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="seeall-body">
                            <h1>Todos los usuarios</h1>
                            <div class="services-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre completo</th>
                                                <th scope="col">Correo electrónico</th>
                                                <th scope="col">Rol</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="user-data">
                                                <th>Frenzy Bits</th>
                                                <td class="user-email-rol">innova@frenzybits.com</td>
                                                <td class="user-admin-rol">Super Admin</td>
                                                <td class="user-email-rol">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 427 427" style="enable-background:new 0 0 427 427;" xml:space="preserve">
                                                <path d="M272.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C282.4,159.2,277.9,154.7,272.4,154.7z"/>
                                                <path d="M154.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C164.4,159.2,159.9,154.7,154.4,154.7z"/>
                                                <path d="M68.4,127.1v246.4c0,14.6,5.3,28.2,14.7,38.1c9.3,9.8,22.2,15.4,35.7,15.4H308c13.5,0,26.4-5.6,35.7-15.4
                                                    c9.3-9.8,14.7-23.5,14.7-38.1V127.1c18.5-4.9,30.6-22.8,28.1-41.9C384,66.2,367.8,52,348.6,52h-51.2V39.5c0.1-10.5-4.1-20.6-11.5-28
                                                    C278.4,4,268.3-0.1,257.8,0H169c-10.5-0.1-20.6,4-28.1,11.5c-7.4,7.4-11.6,17.5-11.5,28V52H78.2C59,52,42.8,66.2,40.3,85.3
                                                    C37.8,104.3,49.9,122.2,68.4,127.1z M308,407H118.8c-17.1,0-30.4-14.7-30.4-33.5V128h250v245.5C338.4,392.3,325.1,407,308,407z
                                                     M149.4,39.5c-0.1-5.2,2-10.2,5.7-13.9c3.7-3.7,8.7-5.7,13.9-5.6h88.8c5.2-0.1,10.2,1.9,13.9,5.6c3.7,3.7,5.7,8.7,5.7,13.9V52h-128
                                                    V39.5z M78.2,72h270.4c9.9,0,18,8.1,18,18s-8.1,18-18,18H78.2c-9.9,0-18-8.1-18-18S68.3,72,78.2,72z"/>
                                                <path d="M213.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C223.4,159.2,218.9,154.7,213.4,154.7z"/>
                                                </svg>
                                                </td>
                                            </tr>
                                            <tr class="user-data">
                                                <th>Luis Fernando Vásquez</th>
                                                <td class="user-email-rol">vasquez.fernando94@gmail.com</td>
                                                <td class="user-admin-rol">Admin</td>
                                                <td>
                                                <a href="#" data-toggle="modal" data-target="#deleteUser"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 427 427" style="enable-background:new 0 0 427 427;" xml:space="preserve">
                                                <path d="M272.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C282.4,159.2,277.9,154.7,272.4,154.7z"/>
                                                <path d="M154.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C164.4,159.2,159.9,154.7,154.4,154.7z"/>
                                                <path d="M68.4,127.1v246.4c0,14.6,5.3,28.2,14.7,38.1c9.3,9.8,22.2,15.4,35.7,15.4H308c13.5,0,26.4-5.6,35.7-15.4
                                                    c9.3-9.8,14.7-23.5,14.7-38.1V127.1c18.5-4.9,30.6-22.8,28.1-41.9C384,66.2,367.8,52,348.6,52h-51.2V39.5c0.1-10.5-4.1-20.6-11.5-28
                                                    C278.4,4,268.3-0.1,257.8,0H169c-10.5-0.1-20.6,4-28.1,11.5c-7.4,7.4-11.6,17.5-11.5,28V52H78.2C59,52,42.8,66.2,40.3,85.3
                                                    C37.8,104.3,49.9,122.2,68.4,127.1z M308,407H118.8c-17.1,0-30.4-14.7-30.4-33.5V128h250v245.5C338.4,392.3,325.1,407,308,407z
                                                     M149.4,39.5c-0.1-5.2,2-10.2,5.7-13.9c3.7-3.7,8.7-5.7,13.9-5.6h88.8c5.2-0.1,10.2,1.9,13.9,5.6c3.7,3.7,5.7,8.7,5.7,13.9V52h-128
                                                    V39.5z M78.2,72h270.4c9.9,0,18,8.1,18,18s-8.1,18-18,18H78.2c-9.9,0-18-8.1-18-18S68.3,72,78.2,72z"/>
                                                <path d="M213.4,154.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C223.4,159.2,218.9,154.7,213.4,154.7z"/>
                                                </svg></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="add-service">
                                    <button type="button" data-toggle="modal" data-target="#modalServices">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M492,236H276V20c0-11-9-20-20-20c-11,0-20,9-20,20v216H20c-11,0-20,9-20,20c0,11,9,20,20,20h216v216c0,11,9,20,20,20 c11,0,20-9,20-20V276h216c11,0,20-9,20-20C512,245,503,236,492,236z"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-menu">
      <?php include("footer-login.php");?>
    </section>
</div>


<!-- Modal -->
<div class="modal fade modalServicesBody" id="modalServices" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalCenterTitle">Nuevo usuario</h1>
        <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
            </svg>
        </button>
      </div>
      <div class="modal-body modalAddUser">
        <div class="NewServices">
            <div class="newUserBody">
                <p>Rol</p>
                <select>
                    <option value="Admin">Admin</option>
                    <option value="Editor">Editor</option>
                    <option value="Contabilidad">Contabilidad</option>
                    <option value="Mercadotecnia">Mercadotecnia</option>
                </select>
                <p>Nombre completo</p>
                <input type="text" name="userName" placeholder="Nombre de usuario">
                <p>Correo electrónico</p>
                <input type="email" name="userMail" placeholder="Correo electrónico">
                <p>Password</p>
                <input type="password" name="userPassword" placeholder="Contraseña">                
                <div class="row">
                    <div class="col-md-6 addUser deleteUserButton">
                        <button type="button">Añadir</button>
                    </div>
                </div>

            </div>
        
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade modalServicesBody" id="deleteUser" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header delete-user-header">
        <h1 class="modal-title" id="exampleModalCenterTitle">Eliminar usuario</h1>
      </div>
      <div class="modal-body">
        <div class="NewServices">
            <div class="delete-user-confirm">
                <h1>¿Realmente deseas eliminar este usuario?</h1>
                <div class="btn-delete-user">
                    <div class="row">
                        <div class="col-md-6 deleteUserButton">
                            <button type="button">Eliminar</button>
                        </div>
                        <div class="col-md-6 deleteUserButton">
                            <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $('#users').addClass('active-dashboard');
</script>
</body>
</html>

