function signin(username, password) {
    let url = `signup.php?user=`;
    httpCall
}

function httpCall(url) {
    return new Promise((resolve, reject) => {
        let xHTTP = new XMLHttpRequest();

        xHTTP.onreadystatechange = () => { 
            if (xHTTP.readyState == 4) {
                if (xHTTP.status == 200) {
                    resolve(xHTTP.responseText);
                }
                else {
                    reject("Error");
                }
            }
        }

        xHTTP.open("GET", url, true);
        xHTTP.send(null);
    });
}