document.getElementById("form").addEventListener("submit", function (e) {
    if(!validation())
    e.preventDefault()
})

function validation() {
    let check=true
    let formLabels = document.getElementsByTagName("input");
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
    

    let Phone = document.NomForm.Phone.value;
    
    if (Phone == "")
    {
 
        formLabels[1].style.border = "2px solid red";
        check=false
        document.getElementById("message").textContent = "required";
        

    }
    else 
    {
    formLabels[1].style.border = "2px solid green";
    document.getElementById("message").innerText="";
    }

    let Email = document.NomForm.Email.value;
     const regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$ /;
    if (Email  == "") 
    {
        formLabels[2].style.border = "2px solid red";
        document.getElementById("message_1").textContent = "required";
        check=false

       
    } else if (regex.test(Email.value)) 
    {
        formLabels[2].innerText = "no valid";
        formLabels[2].style.color="lime";
        
        check=false;
    }
    else
    {
        
        formLabels[2].style.border = "2px solid green ";
        document.getElementById("message_2").innerText="";
    }
    
    // else 
    // {
    // formLabels[2].style.border = "2px solid green";
    // }
    
    let Address = document.NomForm.Address.value;
    
    if (Address == "")
    {
        formLabels[3].style.border = "2px solid red";
        document.getElementById("message_2").textContent = "required";
       
         check=false
        
    }
    else 
    {
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


