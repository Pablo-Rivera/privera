<div class="container">
    <div class="col-lg-3 col-xs-4">
        <h1 >Jugador 1</h1>
        <br/>
      <p>
        <button id="but1" type="button" class="btn btn-lg btn-success"  >Tirar Dados</button>
        </p>
        <br/><br/>
        <table class="table">
      <tr>
        <td>PUNTOS</td>
      </tr>
      <tbody>
            <tr>
                <td id="jugador1">0</td>
        </tr>
      </tbody>
  </table>
    </div>


    <div class="col-lg-2 col-lg-offset-2 col-xs-4">
        <div class="row col-lg-12"></div>
        <img class="row col-lg-12 col-xs-10 col-xs-offset-1" id="dado1" src="images/dado1.png">
        <img class="row col-lg-12 col-xs-10 col-xs-offset-1" id="dado2" src="images/dado1.png">
        <button id="comenzar" type="button"  class="row col-lg-11 row col-lg-offset-1 btn btn-success" >EMPEZAR AHORA</button>
    </div>

    <div id="player2" class="col-lg-3 col-lg-offset-2 col-xs-4">
        <h1>Jugador 2</h1>
        <br/>
      <p>
        <button  id="but2" type="button" class="btn btn-lg btn-success" >Tirar Dados</button>
      </p>
        <br/><br/>
        <table class="table">
      <tr>
        <td>PUNTOS</td>
      </tr>
      <tbody>
        <tr>
          <td id="jugador2">0</td>
        </tr>
      </tbody>
  </table>
</div>
</div>

    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/juego.js "></script>
