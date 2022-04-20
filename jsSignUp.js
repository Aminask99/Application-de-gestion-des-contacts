document.getElementById("form").addEventListener("submit", function (e) {
    if(!validation())
    e.preventDefault()
})

function validation() {
    
    let check=true
    let formLabels = document.getElementsByTagName("input");

     //---------------------- Name ------------------------

    let Username = document.NomForm.Username.value;

        if (Username == "")
        {
            formLabels[0].style.border = "2px solid red";
            check=false
        
        } else if (!isNaN(Username)) 
        {
            formLabels[0].style.border = "2px solid red";
            check=false
        }
        else 
        {
            formLabels[0].style.border = "2px solid green";
        }

     //---------------------- Password ------------------------

    let Password = document.NomForm.Password.value;
    
        if (Password.length <= 4)
        {
            formLabels[1].style.border = "2px solid red";
          
            check=false
            
        } else {

            formLabels[1].style.border = "2px solid green";
           
        }
           //---------------------- Password_verify ------------------------
    
       
    let Password_verify = document.NomForm.Password_verify.value;
    
        if (Password != Password_verify )
        {
            formLabels[2].style.border = "2px solid red";
            check=false
            
        } else {

            formLabels[2].style.border = "2px solid green";
        }
    
        return check
        
}
   



