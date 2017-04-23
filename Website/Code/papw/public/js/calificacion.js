$(document).ready(function() {
  var canvas=$("#canvas");
  var ancho=canvas.width();
  var calificacion=88;
  var angulo= (calificacion*360)/100;
  var alto=canvas.height();

  canvas.drawArc({
    strokeStyle: 'grey',
    strokeStyle: 'grey',
    strokeWidth: 4,
    layer: true,
    name: 'circulo2',
    fromCenter: true,
    x: ancho/2, y: alto/2,
    radius:50,
    start: 0, end: 360
  });
  canvas.drawArc({
    strokeStyle: 'steelblue',
    strokeStyle: '#ffa313',
    strokeWidth: 4,
    layer: true,
    name: 'circulo',
    fromCenter: true,
    x: ancho/2, y: alto/2,
    radius:50,
    start: 0, end: 0
  });
  canvas.animateLayer('circulo',{
    start: 0, end: angulo
  },1000);

  canvas.drawText({
    text: calificacion,
    fontSize: '40',
    fontFamily: 'probert',
    x: ancho/2, y: alto/2,
    fillStyle: '#333',
    strokeStyle: '#333',
    strokeWidth: 1,
    layer: true,
    name: 'texto',
    fromCenter: true
  });
});
