function formula(){
    let a = parseFloat(document.getElementById('a').value);
    let b = parseFloat(document.getElementById('b').value);
    let c = parseFloat(document.getElementById('c').value);
    let s = 0.0;
    let view = "";
    s = ((Math.sqrt(2*b+1)/Math.abs(a-b))-5*(Math.pow(c,2)+Math.PI))

    view += s;


    var p = document.createElement("p");
    p.textContent = view;
    document.body.appendChild(p);
}