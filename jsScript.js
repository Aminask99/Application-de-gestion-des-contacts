document.getElementById("form").addEventListener("submit", function (e) {
    if(!validation())
    e.preventDefault()
})

function validation() {
    let check=true
    let formLabels = document.getElementsByTagName("input");

     //---------------------- Name ------------------------

    let name = document.NomForm.name.value;

        if (name == "")
        {
            formLabels[0].style.border = "2px solid red";
            document.getElementById("message_0").textContent = "required";
            check=false
        
        } else if (!isNaN(name)) 
        {
            formLabels[0].style.border = "2px solid red";
            document.getElementById("message_0").textContent = " the name should be not number";
            check=false
        }
        else 
        {
            formLabels[0].style.border = "2px solid green";
            document.getElementById("message_0").innerText="";
        }
  
      //---------------------- Phone ------------------------

    let Phone = document.NomForm.Phone.value;
    let patter = /^\+?[0-9]{2}-?[0-9]{6,12}$/;

        if (!patter.test(Phone)) {
            formLabels[1].style.border = "2px solid red";
            document.getElementById("message").textContent = "required";
            check=false
        } else {
            formLabels[1].style.border = "2px solid green";
            document.getElementById("message").innerText="";
        }

     //---------------------- Email ------------------------
     
    let Email = document.NomForm.Email.value;
    let pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

        if (!pattern.test(Email)) {
            formLabels[2].style.border = "2px solid red";
            document.getElementById("message_1").textContent = "required";
            check=false
        } else {
            formLabels[2].style.border = "2px solid green";
            document.getElementById("message_1").innerText="";
        }

     //---------------------- Address ------------------------

    let Address = document.NomForm.Address.value;
    
        if (Address.length <= 4)
        {
            formLabels[3].style.border = "2px solid red";
            document.getElementById("message_2").textContent = "required";
            check=false
            
        } else {

            formLabels[3].style.border = "2px solid green";
            document.getElementById("message_2").innerText="";
        }
    
        return check
        
        }
   

function modells()
{
        document.getElementById("model_parent").style.display = "flex";
}
function close_()

{
        document.getElementById("model_parent").style.display = "none";
     
}


