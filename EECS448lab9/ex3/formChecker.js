function validateEmail(username)
{
   return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(username)
}

function verify() {
    var username = document.getElementById("uName").value;
    var password = document.getElementById("pWord").value;
    var tacoNum = document.getElementById("tacoQuantity").value
    var hotDogNum = document.getElementById("hotDogQuantity").value
    var burgerNum = document.getElementById("burgerQuantity").value;
    var shipping = document.getElementById("ship").value;

    var checkItems = false;
    var checkEmail = false;
    var checkPassword = false;
    var checkShip = false;


    if(validateEmail(username))
    {
        checkEmail = true;
    }
      else
    {
        alert("Please enter a valid mail address!")
        checkEmail = false;
    }


    if(tacoNum == "" || hotDogNum == "" || burgerNum == "")
    {
        alert("Please enter the quantity number for items.");
        checkItems = false;
    }
    else
    {
        checkItems = true;
    }

    if(password == "")
    {
        alert("Missing password!");
        checkPassword = false;
    }
    else
    {
        checkPassword = true;
    }

      if(shipping == "")
    {
        alert("Must choose a shipping option!");
        checkShip = false;
    }
    else
    {
        checkShip = true;
    }

  
    if(checkItems && checkEmail && checkPassword && checkShip )
    {
        return(true);
    }
    else
    {
        return(false);
    }
}


