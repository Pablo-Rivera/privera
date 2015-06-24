$('document').ready(function(){
  var gamer;

  Dado.prototype.tirar= function(){
      this.valor= Math.floor(Math.random()*7);
      if (this.valor==0)
      {
          this.valor=3;
      }
      document.getElementById(this.idHTML).src = "images/dado"+this.valor+".png";
  }


  function imprimir(estadotab,player){
      if (player=="player1")
      {
        var resultado=document.getElementById("jugador1");
      }
      else
      {
        var resultado=document.getElementById("jugador2");
      }
      resultado.innerHTML = estadotab;
  }

  function Dado(idDado){
      this.valor=1;
      this.idHTML=idDado;
  }

  function Cubilete(){
      this.dado1=new Dado("dado1");
      this.dado2=new Dado("dado2");
      this.tirar=function()
      {
        this.dado1.tirar();
        this.dado2.tirar();
      }
      this.suma = function()
      {
          return this.dado1.valor + this.dado2.valor;
      }
  }

  function jugador(idjugador){
      this.idHTML=idjugador;
      this.puntos=0;
  }

  function tablero(){
      this.jug1=new jugador("jugador1");
      this.jug2=new jugador("jugador2");
      this.actualizarpuntos=function(sumpar,player){
          if (player=="player1"){
              this.jug1.puntos+=sumpar;
              return this.jug1.puntos;}
          else {
              this.jug2.puntos+=sumpar;
              return this.jug2.puntos;
          }
      }
  }

    function lanzarDados(player){
        var cubilete=new Cubilete();
        cubilete.tirar();
        imprimir(gamer.actualizarpuntos(cubilete.suma(),player),player);
    }

  $('#but1').on('click', function(event){
      var player="player1";
      lanzarDados(player);
  });

  $('#but2').on('click', function(event){
      var player="player2";
      lanzarDados(player);
  });


	$('#comenzar').on('click', function(event){
      gamer=new tablero();
      jugador1.innerHTML = 0;
      jugador2.innerHTML = 0;
  });
});
