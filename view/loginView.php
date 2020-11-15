{{> headerLogin}}

            <form class="form-signin" action="/tpfinalGrupo6/controller/loginController.php" method="post">
                <div class="text-center mb-4">
                    <img class="mb-4" src="/tpfinalGrupo6/view/images/GT3.PNG" alt="" width="140" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>

                </div>

                <div class="form-label-group">
                    <input type="email" id="inputEmail"  class="form-control" placeholder="Correo electronico" name="email"
                           required autofocus>
                    <label for="inputEmail">Correo electrónico</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" autocomplete="off" class="form-control" placeholder="Password" name="password" required>
                    <label for="inputPassword">Contraseña</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordarme
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                <button type="button" class="btn btn-lg btn-dark btn-block" data-toggle="modal" data-target="#exampleModal">
                    Registrarse
                </button>


                <p class="mt-5 mb-3 text-muted text-center">&copy; Garlopa Company 2020</p>
            </form>

</body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/mvcFinalEjemplo/third-party/js/bootstrap.bundle.min.js"></script>
</html>
</html>



