function checkForm() {
    let valid = true;
    let shippingSelected = false;
    let email = document.getElementById("email");
    let password = document.getElementById("password");
    let shipping = [
        document.getElementById("7day"),
        document.getElementById("overnight"),
        document.getElementById("3day")
    ]
    let shopping = [
        document.getElementById("apples"),
        document.getElementById("premium"),
        document.getElementById("collectors")
    ]
    

    valid = checkEmail(email.value);

    if (password.value == "") {
        alert("Please enter a password.");
        valid = false;
    }

    shipping.forEach(option => {
        if (option.checked) {
            shippingSelected = true;
        }
    });

    if (!shippingSelected) {
        alert("Please select a shipping option.");
        valid = false;
    }

    let shoppingCheck = "";
    shopping.forEach(item => {
       if (item.value == "") {return;}
       else if (item.value < 0) {
           alert("Cannot purchase a negative amount of items.");
           valid = false;
           return;
       }
       else {
           shoppingCheck = "check";
       }
    })

    if (shoppingCheck == "") {
        valid = false;
        alert("Please purchase at least one item.");
    }

    return(valid);
}

let checkEmail = (input) => {
    input = input.trim().toLowerCase();
    if (input.includes("@")) {
        let current = input.charAt(0);
        let site = "";
        for (let i = 0; i < input.length; i++) {
            current = input.charAt(i);
            if (current == "@") {
                site = input.substr(i,input.length);
                if (site.includes(".")) {
                    break;
                } else {
                    alert("Invalid email.");
                    return(false);
                }
            }
        }
    } else {
        alert("Invalid email.");
        return(false);
    }
    return(true);
}