$(document).ready(function() {
  Frm();
  btns('submit');
});






const Frm = ()=>{
  $("#frm").submit(function(e) {
    e.preventDefault();
    btns('loading');
    GET_LOGIN();



    


  });
}



 
const btns = (v)=>{
  $('.frm_btn').slideUp(0);
  v == 'submit' ? $('#frm_btn_submit').slideDown(0) : $('#frm_btn_loading').slideDown(0);
}


const alert = () =>{
  $.uiAlert({
    textHead: 'Datos Invalidos',
    text: '!Upss algo paso, verifica los datos¡',
    bgcolor: '#cf6a87',
    textcolor: '#fff',
    position: 'top-right',
    icon: 'remove circle',
    time: 3
  });
}




const GET_LOGIN = async () => {
  let username = $('#frm_input_username').val();
  let userpass = $('#frm_input_userpass').val();
  let url ='http://localhost/servidor/PointOfSaleApi/api/login?username='+username+'&userpass='+userpass;
  try {
    const resp = await fetch(url);
    const data = await resp.json();
    await GET_PROCESAR(data);
  } catch (e) {
    console.log('Error: msj:'+e);
  }
}



const GET_PROCESAR = (data) =>{
  let num = data.num;
  localStorage.clear();
  sessionStorage.clear();
  if(num==1){
    let data_user =data.data[0];
    let user_username     = data_user.username;
    let user_type         = data_user.usertype;
    let user_nombre       = data_user.nombre;
    let user_clave        = data_user.clave;
    $.ajax({
      url: "app/php/session.php?a="+user_clave+"&t="+user_type,
    }).done(function (e) {

      console.log(e);
      if (e==1) {
        localStorage.setItem("user_nombre", user_nombre );
        localStorage.setItem("user_username", user_username);
        localStorage.setItem("user_usertype", user_type);
        sessionStorage.setItem('session', 'ACTIVO');
        window.location = "public/";
      } else {
        alert();
        btns('submit');
      }
    });
  }else{
    alert();
    btns('submit');
  }
}