$(document).ready(function(){
    $("#btn_calcular").click(function(){
        let sueldo = parseInt($("#sueldo").val());
        console.log(sueldo);
        let edad = parseInt($("#edad").val());
        console.log(edad);
        let sexo =$("#sexo").val();
        console.log(sexo);
        let nacionalidad = $("#nacionalidad").val();
        console.log(nacionalidad);
        let antiguedad = $('input:radio[name=antiguedad]:checked').val();
        console.log(antiguedad);
        let php = $("input:checkbox[name=php]:checked").val();
        console.log(php);
        let java = $("input:checkbox[name=java]:checked").val();
        console.log(java);
        let asp = $("input:checkbox[name=asp]:checked").val();
        console.log(asp);
        let oracle= $("input:checkbox[name=oracle]:checked").val();
        console.log(oracle);
        let vb = $("input:checkbox[name=vb]:checked").val();
        console.log(vb);
        let bd = $("input:checkbox[name=bd]:checked").val();
        console.log(bd);

        let porcentaje=0.15;
        let femenino="femenino";
        //console.log("valor obtenido: "+sexo+"  valor a comparar: "+femenino);
        
        if (sexo == femenino ){
            //alert("eres mujer");
            porcentaje=porcentaje+0.3;
        }

        //console.log("valor obtenido: "+edad+" valor a comparar 45");
        
        if(edad > 44){
           // alert("eres mayor de 45")
            porcentaje=porcentaje + 0.2;

        }
       // console.log("valor obtenido: "+nacionalidad+" valor a comparar es extranjero");
        
        if(nacionalidad = "extranjero"){
           // alert("eres extranjero");
            porcentaje=porcentaje -0.5;

        }
        if(antiguedad == "1a5"){
           //alert("1 a 5 años")
            porcentaje=porcentaje+0.5;
        }else if(antiguedad =="6a10"){
            //alert("6 a 10 años")
            porcentaje=porcentaje+0.10;
        }else if(antiguedad =="masde10"){
           //alert("mas de 10 años")
            porcentaje=porcentaje+0.15;
        }


        let totalcurso=0;
        if(php == "php"){
            //alert("php");
            totalcurso=totalcurso+20*3;
        }
        if(java == "java"){
            //alert("java");
            totalcurso=totalcurso+35*3;

        }
        if(asp == "asp"){
            //alert("asp");
            totalcurso=totalcurso+40*3;

        }
        if(oracle == "oracle"){
            //alert("oracle");
            totalcurso=totalcurso+60*3;

        }
        if(vb == "vb"){
            //alert("vb");
            totalcurso=totalcurso+55*3;

        }
        if(bd == "bd"){
            //alert("bd");
            totalcurso=totalcurso+15*3;

        }

        let sueltoTotal=0;
        sueldoTotal=sueldo*porcentaje;

        let bono=0;
        bono=sueltoTotal+totalcurso;
        console.log(bono);
        $('#bono').html("$"+bono);
        
    });
});
function nuevo(){
    $('#frmbono')[0].reset();
    var $miSelect = $('#sexo');
    $miSelect.val($miSelect.children('option:first').val());
    
    var $miSelect = $('#nacionalidad');
    $miSelect.val($miSelect.children('option:first').val());

    document.querySelector("#php").checked = false;
    document.querySelector("#java").checked = false;
    document.querySelector("#asp").checked = false;
    document.querySelector("#oracle").checked = false;
    document.querySelector("#vb").checked = false;
    document.querySelector("#bd").checked = false;

    $('#bono').html("");


}


