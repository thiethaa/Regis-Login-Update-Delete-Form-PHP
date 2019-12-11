//validate form
let fname = document.getElementsByName('fname').value;
let lname = document.getElementsByName('lname').value;
let username = document.getElementsByName('username').value;
let email = document.getElementsByName ('email').value;
let password = document.getElementsByName('password').value;
let cpassword = document.getElementsByName('cpassword').value;
let dob = document.getElementsByName('dob').value;
let male= document.getElementById('male').value;
let female = document.getElementById('female').value;
let other = document.getElementById('other').value;
let travel = document.getElementById('travel').value;
let sport = document.getElementById('sport').value;
let music = document.getElementById('music').value;
let address = document.getElementsByName('address').value;
let city = document.getElementsByName('city').value;
let country = document.getElementsByName('country').value;
let phone= document.getElementsByName('phone').value;

function validate(){
  if(fname == '' || lname == ''|| username ==''|| email==''|| password ==''|| cpassword == ''|| dob==''|| male==''|| female ==''|| other ==''|| travel ==''|| sport ==''|| mucic ==''|| address==''|| city==''|| country ==''|| phone==''){
    document.getElementById('errorMsg').textContent ='Please Fill Up the Empty Fields!';
    document.getElementsByTagName('input').style.border ='1px solid red';
    return false
  }else{
    document.getElementsByTagName('input').style.border ='1px solid green';
    alert('Register has been Success!')
    return true;
    
  }
}
//showing display picture
function PreviewImage() {
  var output = new FileReader();
    output.readAsDataURL(document.getElementById("imglink").files[0]);

    output.onload = function (Event) {
    document.getElementById("uploadPreview").src = Event.target.result;
  };
};

function random_function(){
  var a=document.getElementById("input").value;
  if(a==="INDONESIA"){
      var arr=["Jakarta","Bandung","Surabaya","Bali","Aceh","Medan","Lampung","Samarinda","Pontianak","Balikpapan","Manado","Makassar","Palu","Ambon","Ternate","Irian Jaya"];
  }
  else if(a==="USA"){
      var arr=['Alabama','Alaska','American Samoa','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','District of Columbia','Federated States of Micronesia','Florida','Georgia','Guam','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Marshall Islands','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Northern Mariana Islands','Ohio','Oklahoma','Oregon','Palau','Pennsylvania','Puerto Rico','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virgin Island','Virginia','Washington','West Virginia','Wisconsin','Wyoming'];;
  }
  
  var string="";
  for(i=0;i<arr.length;i++){
      string=string+"<option>"+arr[i]+"</option>";
    }
    string="<select name='city'>"+string+"</select>";
    document.getElementById("output").innerHTML=string;
  }
//tab
function openTab(event, activity) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(activity).style.display = "block";
    event.currentTarget.className += " active";
  }
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  
  //showing post after click
  var button= document.getElementById("postbtn");
  var input= document.getElementById("post");
  var ul = document.getElementById("postlist");
  
  function inputlength(){
      return input.value.length;
  }
  //showing posts under input box
  function creatnewlist(){
      var li = document.createElement ("li");
      li.appendChild(document.createTextNode(input.value));
      ul.appendChild(li);
      input.value=" ";
  }
  function showdate(){
   var current_datetime = new Date()
   var formatted_date = current_datetime.getFullYear() + "-" + (current_datetime.getMonth() + 1) + "-" + current_datetime.getDate() + " " + current_datetime.getHours() + ":" + current_datetime.getMinutes() + ":" + current_datetime.getSeconds() 
    
    var date= document.getElementById("date");
    date.innerHTML = formatted_date;
    date.style.display ="block";
  }
  function addlistafterclick(){
      if (inputlength() > 0) {
          creatnewlist();
          showdate(); 
      }
  }
  button.addEventListener("click",addlistafterclick);